<?php
class Person {
    public $firstname;
    public $lastname;

    public function __construct(string $firstname, string $lastname) {
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }

    public function __destruct() {
        print '<p>' . __CLASS__ . 'オブジェクトは廃棄されました。</p>'. "\n";
    }

    public function show() {
        print "<p>私の名前は{$this->lastname}{$this->firstname}です。</p>" . "\n";
    }
}