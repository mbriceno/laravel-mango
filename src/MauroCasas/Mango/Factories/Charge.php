<?php namespace MauroCasas\Mango\Factories {

    use MauroCasas\Mango\Contracts\Charge as ChargeContract;
    use Illuminate\Config\Repository as Config;

    /**
     * @package Mango
     * @subpackage Charges
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    class Charge implements ChargeContract {

        protected $data, $request, $currentChargeId;

        public function __construct(Request $request){
            $this->request = $request;
        }

        public function all($params = array()){
            return $this->request->get('charges/', $params);
        }

        public function find($id){
            $this->data = $this->request->get('charges/' . $id);
            $this->currentChargeId = $id;
            
            return $this;
        }

        public function create($params = array()){
            $this->data = $this->request->post('charges/', $params);
            $this->currentChargeId = $this->data->uid;

            return $this->data;
        }

    }

}