<?php

class LogData extends DataBoundObject{
        public $message;
        public $loglevel;
        public $logdate;
        public $module;
        public function DefineTableName() {
                return("logdata");
        }
        public function DefineRelationMap() {
                return(array(
                        "message" => "message",
                        "loglevel" => "loglevel",
                        "logdate" => "logdate",
                        "module" => "module"));
        }      
}

?>