<?php
namespace App\Controllers;

class UserController extends Controller {

    public function loginPage() {
        $this->view('auth/login.php');
    }

    public function registerPage() {
        $this->view('auth/register.php');
    }
    
    public function login() {
        $this->validator->validate([
            "username" => ["required"],
            "password" => ["required"]
        ]);

        if (!$this->validator->errors()) {
            $user = $this->manager("UserManager", "user")->selectUser();
            if ($user) {
                if (password_verify($_POST["password"], $user->getPassword())) {
                    $_SESSION["user"] = [
                        "id" => $user->getId(),
                        'username' => $user->getUsername(),
                        "email" => $user->getEmail()
                    ];
                    $this->redirect("/");
                } else {
                    $_SESSION["errors"]["identifiant"] = "* Les identifiants sont incorrects !";
                    $this->redirect("/login");
                }
            } else {
                $_SESSION["errors"]["identifiant"] = "* Les identifiants sont incorrects !";
                $this->redirect("/login");
            }
        } else {
            $this->redirect("/login");
        }
    }

    public function register() {
        $this->validator->validate([
            "username" => ["required","min:2","max:20","alphaNumDash"],
            "email" => ["required","email"],
            "password" => ["required","min:4"]
        ]);

        if (!$this->validator->errors()) {
            $user = $this->manager("UserManager", "user")->selectUser();
            if (!$user) {
                $this->manager("UserManager", "user")->insertUser();
                $_SESSION["user"] = [
                    "id" => $this->manager("Manager", "user")->getPdo()->lastInsertId(),
                    'username' => $_POST["username"],
                    "email" => $_POST["email"]
                ];
                $this->redirect("/");
            } else {
                $this->redirect("/register");  
            }
        } else {
            $this->redirect("/register");
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        $this->redirect("/login");
    }
}