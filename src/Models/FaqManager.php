<?php
namespace App\Models;

class FaqManager extends Manager {
    protected $table = "faq";

    public function insertFaq() {
        $req = $this->pdo->prepare("INSERT INTO faq (question,answer) VALUES (:question,:answer)");
        $req->execute(array(
            "question" => test($_POST["question"]),
            "answer" => test($_POST["answer"])
        ));
    }

    public function selectFaq() {
        $req = $this->pdo->query("SELECT * FROM ".$this->table);
        $req->setFetchMode(\PDO::FETCH_CLASS, "App\Models\Faq");
        return $req->fetchAll();
    }
}