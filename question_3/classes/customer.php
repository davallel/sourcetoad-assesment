<?php
class Customer {
    public $first_name;
    public $last_name;
    public $addresses = [];
    
    public function __construct($first_name, $last_name) {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }
    
    public function addAddress($address) {
        $this->addresses[] = $address;
    }

    public function getCustomerName() {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getAddressByLine1($line_1) {
        $address_pos = array_search($line_1, array_column($this->addresses, 'line_1'));
        return $this->addresses[$address_pos];
    }
}

