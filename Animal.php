<?php
class Animal {
    public $name;
    public $legs;
    public $cold_blooded;

    public function __construct($name) {
        $this->name = $name;
        $this->legs = 4; // Default value
        $this->cold_blooded = "no"; // Default value
    }

    public function get_name() {
        return $this->name;
    }

    public function get_legs() {
        return $this->legs;
    }

    public function get_cold_blooded() {
        return $this->cold_blooded;
    }
}
?>
