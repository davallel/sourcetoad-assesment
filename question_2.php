<?php

require 'data_structure.php';


function sort_data_structure(array &$data, $keys)
{
    $value_keys_pair = [];
    $sort_args = [];
    foreach ($keys as $key) {
        $value_keys_pair[$key] = array_column($data, $key);
        if (!empty($value_keys_pair[$key])) {
            $sort_args[] = &$value_keys_pair[$key];
            $sort_args[] = SORT_ASC;
        }   
    }

    if (!empty($sort_args)) {
        $sort_args[] = &$data;
        call_user_func_array('array_multisort', $sort_args);
    }

    foreach ($data as &$value) {
        if (is_array($value)) {
            sort_data_structure($value, $keys);
        }
    }
}

$input = $argv[1] ?? "";
$sort_keys = $input ? explode(" AND ", $input) : ['last_name'];

sort_data_structure($data, $sort_keys);

echo "Data Structure sorted: \n";
print_r($data);