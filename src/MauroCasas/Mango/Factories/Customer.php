<?php namespace MauroCasas\Mango\Factories {

    use MauroCasas\Mango\Contracts\Customer as CustomerContract;
    use Illuminate\Config\Repository as Config;

    /**
     * @package Mango
     * @subpackage Customers
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    class Customer implements CustomerContract {

        protected $data, $request, $currentCustomerId;

        public function __construct(Request $request){
            $this->request = $request;
        }

        public function all($params = array()){
            return $this->request->get('customers/', $params);
        }

        public function find($id){
            $this->data = $this->request->get('customers/' . $id, $params);
            $this->currentCustomerId = $id;
            return $this;
        }

        public function create($params = array()){
            $this->data = $this->request->post('customers/', $params);
            $this->currentCustomerId = $this->data->uid;
            return $this->data;
        }

        public function update($params = array()){
            return $this->request->patch('customers/' . $this->currentCustomerId, $params);
        }

        public function delete(){
            return $this->request->delete('customers/' . $this->currentCustomerId);
        }

    }

}