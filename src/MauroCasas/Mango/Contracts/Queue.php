<?php namespace MauroCasas\Mango\Contracts {

    /**
     * @package Mango
     * @subpackage Queues
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    interface Queue {

        /**
         * Returns all queues
         * @return array
         * @since 0.1
         */
        public function all($params = array());

        /**
         * Find a queue by it's ID
         * @param string $id
         * @return Queue
         * @since 0.1
         */
        public function find($id);

        /**
         * Delete a queue
         * @return void
         * @since 0.1
         */
        public function delete();

        /**
         * Empty the queue
         * @return void
         * @since 0.1
         */
        public function clear();

    }

}