<?php

class Cart {
    public $customer;
    public $items = [];
    public $shipping_address;
    
    public function __construct($customer) {
        $this->customer = $customer;
    }
    
    public function addItem($item) {
        $this->items[] = $item;
    }
    
    public function setShippingAddress($address) {
        $this->shipping_address = $address;
    }
    
    public function getSubtotal() {
        $subtotal = 0;
        foreach ($this->items as $item) {
            $subtotal += $item->price * $item->quantity;
        }
        
        return $subtotal;
    }
    
    public function getTotal() {
        $shipping_cost = $this->getShippingRate($this->shipping_address->zip);

        $subtotal = $this->getSubtotal();
        $tax = 0.07 * $subtotal;
            
        return $subtotal + $tax + $shipping_cost;
    }

    private function getShippingRate($zip) {
        // Assume that this function returns the shipping cost based on the zip code
        // and that it is implemented elsewhere in the system
        return 5.00;
    }

    public function getCartInfo() {
        return [
            "customer_name" => $this->customer->getCustomerName(),
            "shipping_address" => $this->shipping_address,
            "products" => $this->items,
            "subtotal" => $this->getSubtotal(),
            "total" => $this->getTotal()
        ];
    }
}

