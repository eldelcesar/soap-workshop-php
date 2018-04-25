<?php 
    include './client.php';

    $data = array('name' => 'Miguel');
    // $data = array('str' => 'Miguel');
    echo $client->getName($data);
?>