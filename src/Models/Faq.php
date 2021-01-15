<?php
namespace App\Models;

class Faq {
    private $id;
    private $question;
    private $answer;
    
    public function getQuestion() {
        return $this->question;
    }

    public function setQuestion(string $question) {
        $this->question = $question;

        return $this;
    }

    public function getAnswer() {
        return $this->answer;
    }

    public function setAnswer(string $answer) {
        $this->answer = $answer;

        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setId(int $id) {
        $this->id = $id;

        return $this;
    }

    
}