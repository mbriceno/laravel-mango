<?php namespace MauroCasas\Mango\Factories {

    use MauroCasas\Mango\Contracts\Queue as QueueContract;
    use Illuminate\Config\Repository as Config;

    /**
     * @package Mango
     * @subpackage Queues
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    class Queue implements QueueContract {

        protected $data, $request, $currentQueueId;

        public function __construct(Request $request){
            $this->request = $request;
        }

        public function all($params = array()){
            return $this->request->get('queue/', $params);
        }

        public function find($id){
            $this->data = $this->request->get('queue/' . $id, $params);
            $this->currentQueueId = $id;
            return $this;
        }

        public function delete(){
            return $this->request->delete('queue/' . $this->currentQueueId);
        }

        public function clear(){
            return $this->request->delete('queue/');
        }

    }

}