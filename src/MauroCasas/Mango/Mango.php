<?php namespace MauroCasas\Mango {

    use GuzzleHttp;

    /**
     * @package Mango
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */

    use Illuminate\Config\Repository as Config;

    class Mango {

        public function __construct($config, GuzzleHttp\Client $guzzle){
            $this->config = $config;
            $this->guzzle = $guzzle;
        }
    
        /**
         * Returns the all charges
         * @param array $params
         * @return array
         */
        public function charges($params = array()){
            return $this->get('charges', $params);
        }

        /**
         * Return a charge based on it's ID
         * @param string $id
         * @return array
         */
        public function findCharge($id){
            return $this->get('charges/' . $id);
        }

        /**
         * Generate a charge
         * @param array $params
         * @return array
         */
        public function charge($params = array()){
            return $this->post('charges', $params);
        }

        /**
         * Returns the all refunds
         * @param array $params
         * @return array
         */
        public function refunds($params = array()){
            return $this->get('refunds', $params);            
        }

        /**
         * Return a refund based on it's ID
         * @param string $id
         * @return array
         */
        public function findRefund($id){
            return $this->get('refunds/' . $id);
        }

        /**
         * Generate a refund
         * @param array $params
         * @return array
         */
        public function refund($params = array()){
            return $this->post('refunds', $params);
        }

        /**
         * Returns the all customers
         * @param array $params
         * @return array
         */
        public function customers($params = array()){
            return $this->get('customers', $params);            
        }

        /**
         * Return a customer based on it's ID
         * @param string $id
         * @return array
         */
        public function findCustomer($id){
            return $this->get('customers/' . $id);
        }

        /**
         * Create a customer
         * @param array $params
         * @return array
         */
        public function createCustomer($params = array()){
            return $this->post('customers', $params);
        }

        /**
         * Update a customer
         * @param string $id
         * @param array $params
         * @return array
         */
        public function updateCustomer($id, $params = array()){
            return $this->patch('customers/' . $id, $params);
        }

        /**
         * Delete a customer
         * @param string $id
         * @return array
         */
        public function deleteCustomer($id){
            return $this->delete('customers/' . $id);
        }

        /**
         * Returns the all cards
         * @param array $params
         * @return array
         */
        public function cards($params = array()){
            return $this->get('cards', $params);            
        }

        /**
         * Return a card based on it's ID
         * @param string $id
         * @return array
         */
        public function findCard($id){
            return $this->get('cards/' . $id);
        }

        /**
         * Create a card
         * @param array $params
         * @return array
         */
        public function createCard($params = array()){
            return $this->post('cards', $params);
        }

        /**
         * Update a card
         * @param string $id
         * @param array $params
         * @return array
         */
        public function updateCard($id, $params = array()){
            return $this->patch('cards/' . $id, $params);
        }

        /**
         * Delete a card
         * @param string $id
         * @return array
         */
        public function deleteCard($id){
            return $this->delete('cards/' . $id);
        }

        /**
         * Returns the all cards
         * @return array
         */
        public function queue($params = array()){
            return $this->get('queue', $params);            
        }

        /**
         * Return a card based on it's ID
         * @param string $id
         * @return array
         */
        public function findQueueItem($id){
            return $this->get('queue/' . $id);
        }

        /**
         * Delete a card
         * @param string $id
         * @return array
         */
        public function deleteQueueItem($id){
            return $this->delete('queue/' . $id);
        }

        /**
         * Delete a card
         * @return array
         */
        public function emptyQueue(){
            return $this->delete('queue');
        }

        /**
         * Returns the all installments
         * @param array $params
         * @return array
         */
        public function installments($params = array()){
            return $this->get('installments', $params);            
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