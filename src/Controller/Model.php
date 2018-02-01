<?php

namespace App\Controller;

class Model
{
    private $message;

    public function __construct() {
        $this->message = 'Hello World!';
    }

    public function getMessage() :string {
        return $this->message;
    }

    public function setMessage(string $message) {
        $this->message = $message;
    }
}