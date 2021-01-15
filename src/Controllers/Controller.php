<?php
namespace App\Controllers;


class Controller {
    protected $validator;

    public function __construct() {
        $this->validator = new \App\Validator();
    }

    public function view(string $url,array $data = []) {
        require VIEW.$url;
    }

    public function redirect(string $url) {
        header("Location".$url);
        exit();
    }

    public function manager(string $manager, string $table) {
        $name = "App\\Models\\".$manager;
        $manager = new $name($table);

        return $manager;
    }
    
}