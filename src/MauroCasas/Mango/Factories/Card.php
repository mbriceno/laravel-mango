<?php namespace MauroCasas\Mango\Factories {

    use MauroCasas\Mango\Contracts\Card as CardContract;
    use Illuminate\Config\Repository as Config;

    /**
     * @package Mango
     * @subpackage Cards
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    class Card implements CardContract {

        protected $data, $request, $currentCardId;

        public function __construct(Request $request){
            $this->request = $request;
        }

        public function all($params = array()){
            return $this->request->get('cards', $params);
        }

        public function find($id){
            $this->data = $this->request->get('cards/' . $id, $params);
            $this->currentCardId = $id;

            return $this;
        }

        public function create($params = array()){
            $this->data = $this->request->post('cards', $params);
            $this->currentCardId = $this->data->uid;
            
            return $this;
        }

        public function update($params = array()){
            return $this->request->patch('cards/' . $this->currentCardId, $params);
        }

        public function delete(){
            return $this->request->delete('cards/' . $this->currentCardId);
        }

        public function ccv($ccv){
            return $this->request->post('ccvs/', array('ccv' => $ccv), 'public');
        }

        public function token($params){
            return $this->request->post('tokens/', $params, 'public');
        }

    }

}