<?php namespace MauroCasas\Mango\Facades {

    use Illuminate\Support\Facades\Facade;

    /**
     * @package Mango
     * @version 0.1
     * @author Mauro Casas <casas.mauroluciano@gmail.com>
     */

    class Mango extends Facade {
        
        protected static function getFacadeAccessor(){
            return 'mango';
        }

    }

}