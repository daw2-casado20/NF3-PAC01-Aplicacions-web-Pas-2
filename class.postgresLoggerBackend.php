<?php

require("class.pdofactory.php");
require("abstract.databoundobject.php");
require("class.LogData.php");

class postgresLoggerBackend {
        public function __construct($urlData) {
            $strDSN = "pgsql:dbname=aplicaweb;host=localhost;port=5432;user=postgres;password=";
            $objPDO = PDOFactory::GetPDO($strDSN, "aplicaweb", "", 
            array());
            $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $objBakend = new LogData($objPDO);
            $objBakend->setmessage("Mensaje prueba")->setloglevel(3)->setlogdate(date("Y-m-d H:m:s"))->setmodule("Modulo 07")->Save();
            print "El Mensaje es: " . $objBakend->getmessage() . "<br />"; 
            print "El lvl es: " . $objBakend->getloglevel() . "<br />"; 
            print "la fecha es: " . $objBakend->getlogdate() . "<br />"; 
            print "el modulo es: " . $objBakend->getmodule() . "<br />"; 
        }    
}

?>