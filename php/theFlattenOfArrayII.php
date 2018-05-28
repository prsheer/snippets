<?php

$arr = array(
    'user' => array(
        'email'   => 'user@example.com',
        'name'    => 'Super User',
        'address' => array(
            'billing' => 'Street 1',
            'delivery' => 'Street 2'
        )
    ),
    'post' => 'Hello, World!'
);

$iterator = new RecursiveIteratorIterator(new RecursiveArrayIterator($arr));
$keys = array();
foreach ($iterator as $key => $value) {
    // Build long key name based on parent keys
    for ($i = $iterator->getDepth() - 1; $i >= 0; $i--) {
        $key = $iterator->getSubIterator($i)->key() . '_' . $key;
    }
    $keys[$key] = $key;
}
var_dump($keys);
/*
(array) [5 elements]
	user_email: (string) user_email
	user_name: (string) user_name
	user_address_billing: (string) user_address_billing
	user_address_delivery: (string) user_address_delivery
	post: (string) post
*/
