# PHP Assessment

The results for this assesment are displayed in the console.

## Question 1: 

Run the file question_1.php

```
php question_1.php
```

It should return the next output:

```
item_0 : 
    guest_id : 177
    guest_type : crew
    first_name : Marco
    middle_name : 
    last_name : Burns
    gender : M
    guest_booking : 
        item_0 : 
            booking_number : 20008683
            ship_code : OST
            room_no : A0073
            start_time : 1438214400
            end_time : 1483142400
            is_checked_in : 1
    guest_account : 
        item_0 : 
            account_id : 20009503
            status_id : 2
            account_limit : 0
            allow_charges : 1
item_1 : 
    guest_id : 10000113
    guest_type : crew
    first_name : Bob Jr 
    middle_name : Charles
    last_name : Hemingway
    gender : M
    guest_booking : 
        item_0 : 
            booking_number : 10000013
            room_no : B0092
            is_checked_in : 1
    guest_account : 
        item_0 : 
            account_id : 10000522
            account_limit : 300
            allow_charges : 1
item_2 : 
    guest_id : 10000114
    guest_type : crew
    first_name : Al 
    middle_name : Bert
    last_name : Santiago
    gender : M
    guest_booking : 
        item_0 : 
            booking_number : 10000014
            room_no : A0018
            is_checked_in : 1
    guest_account : 
        item_0 : 
            account_id : 10000013
            account_limit : 300
            allow_charges : 
item_3 : 
    guest_id : 10000115
    guest_type : crew
    first_name : Red 
    middle_name : Ruby
    last_name : Flowers 
    gender : F
    guest_booking : 
        item_0 : 
            booking_number : 10000015
            room_no : A0051
            is_checked_in : 1
    guest_account : 
        item_0 : 
            account_id : 10000519
            account_limit : 300
            allow_charges : 1
item_4 : 
    guest_id : 10000116
    guest_type : crew
    first_name : Ismael 
    middle_name : Jean-Vital
    last_name : Jammes
    gender : M
    guest_booking : 
        item_0 : 
            booking_number : 10000016
            room_no : A0023
            is_checked_in : 1
    guest_account : 
        item_0 : 
            account_id : 10000015
            account_limit : 300
            allow_charges : 1
```

## Question 2:

Run the file question_2.php. To run the file you can add an argument with the keys to sort the data structure. The argument must be in the format that is show here.

```
php question_2.php 'first_name AND booking_number'
```

Without the argument it will run with the next key by default:

```
['last_name']
```

## Question 3:

In the directory 'question_3' run the main.php file.

```
php main.php
```

The output:

```
(
    [customer_name] => Diego Valle
    [shipping_address] => Address Object
        (
            [line_1] => 46 Street
            [line_2] => loft
            [city] => LA
            [state] => CA
            [zip] => 1457
        )

    [products] => Array
        (
            [0] => Item Object
                (
                    [id] => 1
                    [name] => Table
                    [quantity] => 2
                    [price] => 30.25
                )

            [1] => Item Object
                (
                    [id] => 2
                    [name] => Chair
                    [quantity] => 1
                    [price] => 20
                )

        )

    [subtotal] => 80.5
    [total] => 91.135
)
```

The data that sets the values for customer, adressess, items and cart are in the main.php filed.

```
$customer = new Customer('Diego', 'Valle');
$customer->addAddress(
    new Address('46 Street', 'loft', 'LA', 'CA', '1457'),
    new Address('10 Street', 'Central Perk', 'New York', 'NY', '17754')
);
$cart = new Cart($customer);
$cart->addItem(new Item(1, 'Table', 2, 30.25));
$cart->addItem(new Item(2, 'Chair', 1, 20.00));
$cart->setShippingAddress($customer->getAddressByLine1('46 Street'));
```