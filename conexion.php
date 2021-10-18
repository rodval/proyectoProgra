<?php
    class BD{
        private static $instanciaBD = null;
        public static function crearInstancia(){
            if(!isset(self::$instanciaBD)){
                $opcPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
                self::$instanciaBD = new PDO('mysql:host=localhost;dbname=tiendaonline','root','',$opcPDO);
            }
            return self::$instanciaBD;
        }
    }
?>