<?php namespace MauroCasas\Mango\Factories {

    use GuzzleHttp;

    /**
     * @package Mango
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */

    use Illuminate\Config\Repository as Config;

    class Request {

        public function __construct($config, GuzzleHttp\Client $guzzle){
            $this->config = $config;
            $this->guzzle = $guzzle;
        }

        /**
         * 
         * Gift me some mangos with BTC. 420.
         * 1NrXMzNjd2PebgP54xoQk6ujMquwXp3SpA
         *
         */ 

        /** 
         * Calls request build using GET verb
         * @uses build()
         * @param $url string
         * @param $params array
         * @param $authType string secret|public Which API key to use
         * @return json
         */
        public function get($url, $params = array(), $authType = 'secret'){
            return $this->build('get', $url, $params, $authType);
        }  

        /** 
         * Calls request build using POST verb
         * @uses build()
         * @param $url string
         * @param $params array
         * @param $authType string secret|public Which API key to use
         * @return json
         */
        public function post($url, $params = array(), $authType = 'secret'){
            return $this->build('post', $url, $params, $authType);            
        }

        /** 
         * Calls request build using PATCH verb
         * @uses build()
         * @param $url string
         * @param $params array
         * @param $authType string secret|public Which API key to use
         * @return json
         */
        public function patch($url, $params = array(), $authType = 'secret'){
            return $this->build('patch', $url, $params, $authType);            
        }

        /** 
         * Calls request build using DELETE verb
         * @uses build()
         * @param $url string
         * @param $authType string secret|public Which API key to use
         * @return json
         */
        public function delete($url, $authType = 'secret'){
            return $this->build('delete', $url, null, $authType);            
        }

        /**
         * Generate a request to Mango API
         * @param $verb string GET|POST|PATCH|DELETE
         * @param $url string
         * @param $params array()
         * @param $authType string secret|public Wether to use the public key or the secret one
         * @return json
         */
        protected function build($verb = 'get', $url, $params = array(), $authType = 'secret'){
            $request = $this->guzzle->$verb($url, array(
                'body' => count($params) != 0 ? json_encode($params) : null,
                'auth' => $authType == 'secret' ? array(
                    $this->config['secret'], $this->config['secret']
                    ) : array(
                    $this->config['public'], $this->config['secret']
                    )
                ));

            return json_decode($request->getBody());
        }

    }

}