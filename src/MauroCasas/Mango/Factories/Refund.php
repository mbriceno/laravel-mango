<?php namespace MauroCasas\Mango\Factories {

    use MauroCasas\Mango\Contracts\Refund as RefundContract;
    use Illuminate\Config\Repository as Config;

    /**
     * @package Mango
     * @subpackage Refunds
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    class Refund implements RefundContract {

        protected $data, $request, $currentRefundId;

        public function __construct(Request $request){
            $this->request = $request;
        }

        public function all($params = array()){
            return $this->request->get('refunds', $params);
        }

        public function find($id){
            $this->data = $this->request->get('refunds/' . $id);
            $this->currentRefundId = $id;
            return $this;
        }

        public function create($params = array()){
            $this->data = $this->request->post('refunds', $params);
        }

    }

}