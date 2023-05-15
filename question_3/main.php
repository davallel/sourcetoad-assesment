<?php
require_once('classes/customer.php');
require_once('classes/item.php');
require_once('classes/address.php');
require_once('classes/cart.php');

$customer = new Customer('Diego', 'Valle');
$customer->addAddress(
    new Address('46 Street', 'loft', 'LA', 'CA', '1457'),
    new Address('10 Street', 'Central Perk', 'New York', 'NY', '17754')
);
$cart = new Cart($customer);
$cart->addItem(new Item(1, 'Table', 2, 30.25));
$cart->addItem(new Item(2, 'Chair', 1, 20.00));
$cart->setShippingAddress($customer->getAddressByLine1('46 Street'));

print_r($cart->getCartInfo());