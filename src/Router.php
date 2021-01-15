<?php
namespace App;
use App\Controllers\WorkshopController;

class Router {
    private $method;
    private $url;

    public function __construct() {
        $this->method = $_SERVER['REQUEST_METHOD'];
        $this->url = $_SERVER['REQUEST_URI'];
    }
    public function run() {
        $workshopController = new WorkshopController();

        if ($this->method == "GET") {
            if ($this->url == "/") {
                $workshopController->index();
            }
        }

        elseif ($this->method == "POST") {

        }

    }
}