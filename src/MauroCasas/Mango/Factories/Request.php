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
         * @uses request()
         * @param $url string
         * @param $params array
         * @return json
         */
        public function get($url, $params = array()){
            return $this->request('get', $url, $params);
        }  

        /** 
         * Calls request build using POST verb
         * @uses request()
         * @param $url string
         * @param $params array
         * @return json
         */
        public function post($url, $params = array()){
            return $this->request('post', $url, $params);            
        }

        /** 
         * Calls request build using PATCH verb
         * @uses request()
         * @param $url string
         * @param $params array
         * @return json
         */
        public function patch($url, $params = array()){
            return $this->request('patch', $url, $params);            
        }

        /** 
         * Calls request build using DELETE verb
         * @uses request()
         * @param $url string
         * @return json
         */
        public function delete($url){
            return $this->request('delete', $url);            
        }

        /**
         * Generate a request to Mango API
         * @param $verb string GET|POST|PATCH|DELETE
         * @param $url string
         * @param $params array()
         * @return json
         */
        protected function request($verb = 'get', $url, $params = array()){
            $request = $this->guzzle->$verb($url, array(
                'body' => count($params) != 0 ? $params : null,
                ));

            return json_decode($request->getBody());
        }

    }

}