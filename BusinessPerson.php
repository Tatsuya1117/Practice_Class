<?php
require_once 'Person4.php';

class BusinessPerson extends Person {
    public function work() {
        print "<p>{$this->lastName}{$this->firstName}はビジネスマンです。</p>";
    }
}