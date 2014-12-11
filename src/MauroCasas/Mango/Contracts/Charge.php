<?php namespace MauroCasas\Mango\Contracts {

    /**
     * @package Mango
     * @subpackage Charges
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    interface Charge {

        /**
         * Returns all charges
         * @return array
         * @since 0.1
         */
        public function all($params = array());

        /**
         * Find a charge by it's ID
         * @param string $id
         * @return Charge
         * @since 0.1
         */
        public function find($id);

        /**
         * Create a new charge
         * @param array $params
         * @return Charge
         * @since 0.1
         */
        public function create($params = array());

    }

}