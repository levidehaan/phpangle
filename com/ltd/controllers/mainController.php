<?php

/*
 * mainController
 * 
 */

namespace com\ltd\controllers;
use com\ltd\models as model;

class mainController extends mainAbstract{
    
    public function mainAction(){
        
        //we would grab this from a database and take input using set_ from angular.js but havent implemented db.
        
        $site = new model\siteModel();
        $site->set_headerTitle("Levi DeHaan");
        
        $site->set_menu(array("Home"=>"#/home", "Projects"=>"#/projects"));
        $site->set_leftTitle("Programmer/Sys Admin");
        $site->set_leftBody("Self taught, motivated, leader of silent ninja code assasins and cats.");
        $site->set_rightTitle("Ninjas and Dragons");
        $site->set_rightBody("The Awesome Starts Here");
        $site->set_body("There are words here");
        $site->set_footer("Levi DeHaan");
        
        
        $this->headerTitle = $site->get_headerTitle();
        $this->menu = $site->get_menu();
        $this->leftTitle = $site->get_leftTitle();
        $this->leftBody = $site->get_leftBody();
        $this->rightTitle = $site->get_rightTitle();
        $this->rightBody = $site->get_rightBody();
        $this->body = $site->get_body();
        $this->footer = $site->get_footer();
    }
    
    public function projectsAction(){
        
    }
}


?>
