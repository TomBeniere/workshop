<?php
namespace App;
use App\Controllers\WorkshopController;
use App\Controllers\FaqController;
use App\Controllers\UserController;

class Router {
    private $method;
    private $url;

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->url = $_SERVER['REQUEST_URI'];
    }
    public function run() {
        $workshopController = new WorkshopController();
        $faqController = new FaqController();
        $userController = new UserController();

        if ($this->method == "GET") {
            if ($this->url == "/") {
                $workshopController->index();

            } elseif ($this->url == "/faq") {
                $faqController->faqPage();
                
            } elseif ($this->url == "/login") {
                $userController->loginPage();
                
            } elseif ($this->url == "/register") {
                $userController->registerPage();

            } elseif ($this->url == "/logout") {
                $userController->logout();
                
            }
        }

        elseif ($this->method == "POST") {
            if ($this->url == "/login") {
                $userController->login();

            } elseif ($this->url == "/register") {
                $userController->register();
                
            } elseif ($this->url == "/faq") {
                $faqController->insertFaq();

            } 
            
        }

    }
}