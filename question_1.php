<?php

require 'data_structure.php';


function print_key_value_pairs($data, $level_ident='') {
    $message_display = '';
    foreach ($data as $key => $value) {
        $key_label = is_numeric($key) ? "item_{$key}" : $key;
        $message_display .= "{$level_ident}{$key_label} : ";
        if (is_array($value)) {
            $message_display .= "\n";
            $new_level_ident = "{$level_ident}    ";
            $message_display .= print_key_value_pairs($value, $new_level_ident);
            
        } else {
            $message_display .= "{$value}\n";            
        }
    }
    return $message_display;
}

echo print_key_value_pairs($data);