<?php

class Controller_Check extends Controller
{
        public function action_index(){

            echo "<pre>";
            echo "Fuel Version :" .Fuel::VERSION ."\n" ;
            echo "      locale : " . setlocale(LC_ALL, '0') ."\n" ;
            echo "      date : ". Date::forge()->format("mysql") ."\n" ;
            echo "default_charser : " . ini_get("default_charset") ."\n" ;
            echo "<pre>";
            echo "</pre>";
        }

}