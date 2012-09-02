<?php

/*
 * database interface
 * 
 */

namespace com\ltd\models;

use Doctrine\ORM\Mapping as ORM;

class Post {

    protected $id;
    protected $title;
    protected $body;

    public function __construct($body) {
        $this->getBody($body);
    }
    
    public function getId(){
        return $this->id;
    }
    
    public function getTitle(){
        return $this->title;
    }
    
    public function getBody(){
        return $this->body;
    }
}

?>
