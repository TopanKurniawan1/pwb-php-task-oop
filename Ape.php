<?php
require_once "Animal.php";

class Ape extends Animal {
    public function __construct($name) {
        parent::__construct($name);
        $this->legs = 2; // kera memiliki 2 kaki
    }

    public function yell() {
        echo "Auooo\n";
    }
}
?>
