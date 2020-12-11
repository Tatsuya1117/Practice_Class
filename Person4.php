<?php
class Person {
    public $firstname;
    public $lastname;

    public function __construct(string $firstname, string $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function show() {
        print "<p>私の名前は{$this->lastname}{$this->firstname}です。</p>";
    }
}