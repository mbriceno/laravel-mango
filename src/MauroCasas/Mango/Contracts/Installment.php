<?php namespace MauroCasas\Mango\Contracts {

    /**
     * @package Mango
     * @subpackage Installments
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */
    interface Installment {

        /**
         * Returns all installments
         * @return array
         * @since 0.1
         */
        public function all($params = array());

    }

}