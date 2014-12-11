<?php namespace MauroCasas\Mango {

    use GuzzleHttp;

    /**
     * @package Mango
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */

    use Illuminate\Config\Repository as Config;

    class Mango {

        public function __construct($config, 
            Factories\Customer $customers,
            Factories\Charge $charges,
            Factories\Installment $installments,
            Factories\Card $cards,
            Factories\Refund $refunds,
            Factories\Queue $queue
            ){
            $this->config = $config;
            $this->_customers = $customers;
            $this->_charges = $charges;
            $this->_installments = $installments;
            $this->_cards = $cards;
            $this->_refunds = $refunds;
            $this->_queue = $queue;
        }


        /**
         * Returns the customers object
         * @return Customer
         * @since 0.1
         */
        public function customers(){
            return $this->_customers;
        }

        /**
         * Returns the installments object
         * @return Installment
         * @since 0.1
         */
        public function installments(){
            return $this->_installments;
        }

        /**
         * Returns the charges object
         * @return Charge
         * @since 0.1
         */
        public function charges(){
            return $this->_charges;
        }

        /**
         * Returns the cards object
         * @return Card
         * @since 0.1
         */
        public function cards(){
            return $this->_cards;
        }

        /**
         * Returns the refunds object
         * @return Refund
         * @since 0.1
         */
        public function refunds(){
            return $this->_refunds;
        }

        /**
         * Returns the queue object
         * @return Queue
         * @since 0.1
         */
        public function queue(){
            return $this->_queue;
        }

    }

}