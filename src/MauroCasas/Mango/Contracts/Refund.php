<?php namespace MauroCasas\Mango\Contracts {

    /**
     * @package Mango
     * @subpackage Refunds
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    interface Refund {

        /**
         * Returns all charges
         * @return array
         * @since 0.1
         */
        public function all($params = array());

        /**
         * Find a charge by it's ID
         * @param string $id
         * @return Refund
         * @since 0.1
         */
        public function find($id);

        /**
         * Create a new charge
         * @param array $params
         * @return Refund
         * @since 0.1
         */
        public function create($params = array());

    }

}