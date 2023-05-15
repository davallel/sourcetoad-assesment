<?php
class Address {
    public $line_1;
    public $line_2;
    public $city;
    public $state;
    public $zip;
    
    public function __construct($line_1, $line_2, $city, $state, $zip) {
        $this->line_1 = $line_1;
        $this->line_2 = $line_2;
        $this->city = $city;
        $this->state = $state;
        $this->zip = $zip;
    }
}