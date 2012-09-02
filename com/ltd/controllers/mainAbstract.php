<?php

/*
 * mainAbstract
 */

namespace com\ltd\controllers;

abstract class mainAbstract {

    protected $controller; //the controller to use
    protected $action; //the action to take

    public function __construct($controller, $action) {
        $this->controller = $controller;
        $this->action = $action;
    }

    //this loads the template based on controller and action passed in from controller
    public function load() {
        include_once (APP_PATH . '/' . str_replace('\\', '/', __NAMESPACE__) . "/../views/" . $this->controller . '/' . $this->action . '.php');
    }

    public function renderTemplate() {
        if ($this->action == "") {
            $this->action = "main";
        }
        
        //calling the function defined in the action passed in from the url, defaults to main
        $method = $this->action . "Action";

        if (method_exists($this, $method)) {
            $this->$method();
            $this->load();
        } else {
            throw new \Exception("no such method");
        }
    }

}

?>
