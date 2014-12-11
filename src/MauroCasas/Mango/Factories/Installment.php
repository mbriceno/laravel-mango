<?php namespace MauroCasas\Mango\Factories {

    use MauroCasas\Mango\Contracts\Installment as InstallmentContract;
    use Illuminate\Config\Repository as Config;

    /**
     * @package Mango
     * @subpackage Installments
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    class Installment implements InstallmentContract {

        protected $data, $request, $currentCustomerId;

        public function __construct(Request $request){
            $this->request = $request;
        }

        public function all($params = array()){
            return $this->request->get('installments/', $params);
        }

    }

}