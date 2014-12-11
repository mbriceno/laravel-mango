<?php namespace MauroCasas\Mango\Contracts {

    /**
     * @package Mango
     * @subpackage Customers
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    interface Customer {

        /**
         * Returns all customers
         * @return array
         * @since 0.1
         */
        public function all($params = array());

        /**
         * Find a customer by it's ID
         * @param string $id
         * @return Customer
         * @since 0.1
         */
        public function find($id);

        /**
         * Create a new customer
         * @param array $params
         * @return Customer
         * @since 0.1
         */
        public function create($params = array());

        /**
         * Update a customer information
         * @param array $params
         * @return Customer
         * @since 0.1
         */
        public function update($params = array());

        /**
         * Delete a customer
         * @return void
         * @since 0.1
         */
        public function delete();

    }

}