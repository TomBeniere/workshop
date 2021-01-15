<?php
namespace App\Models;

class UserManager extends Manager {
    protected $table = "user";

    public function insertUser() {
        $req = $this->pdo->prepare("INSERT INTO user (username,password,email) VALUES (:username,:password,:email)");
        $req->execute(array(
            'username' => test($_POST["username"]),
            "password" => password_hash(test($_POST['password']),PASSWORD_DEFAULT),
            "email" => test($_POST["email"])
        ));
    }

    public function selectUser() {
        $req = $this->pdo->prepare("SELECT * FROM ".$this->table." WHERE username = :username");
        $req->execute(array(
            "username" => $_POST["username"],
        ));
        $req->setFetchMode(\PDO::FETCH_CLASS, "App\Models\User");
        return $req->fetch();
    }
}