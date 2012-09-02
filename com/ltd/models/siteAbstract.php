<?php

/*
 * siteAbstract
 * 
 */

namespace com\ltd\models;

abstract class siteAbstract {

    public function __call($func, $args) {
        
        list ($opt, $type ) = split('_', $func);
        
        switch ($opt) {
            case "get":                
                return $this->$type;
                break;
            case "set": //for single        
                $this->$type = $args[0];
                break;
            default:
                throw new \Exception("use get_ and set_");
        }
    }

}

?>
