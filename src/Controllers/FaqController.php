<?php
namespace App\Controllers;

class FaqController extends Controller {
    
    public function faqPage() {
        $faq = $this->manager("FaqManager","Faq")->selectFaq();
        $this->view("faq.php", ["faq" => $faq]);
    }

    public function insertFaq() {
        $this->validator->validate([
            "question" => ["required"],
            "answer" => ["required"]
        ]);

        if (!$this->validator->errors()) {
            $this->manager("FaqManager","faq")->insertFaq();
            $this->redirect("/faq");
        } else {
            $this->redirect("/faq");
        }
    }


}