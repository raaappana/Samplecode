<?php


if($_GET['user'] == 'bob' && $_GET['pass'] == 'asdf') {
    echo json_encode(array('result' => '1', 'username' => 'bob', 'first_name' => 'Bob', 'last_name' => 'Jacobsen', 'email' => 'authdemo@wordpress.com'));
} else {
    echo json_encode(array('result' => '0'));
}