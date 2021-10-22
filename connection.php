<?php
    //$conn = pg_connect('localhost', 'root', '', 'online_shopping') 
    //or die ("Cannot connect database".pg_connect_error());
    $conn = pg_connect("postgres://qdxgmxvdxmycwo:958b4c2f4056ef88cc9a50856baf0f94199b818781055ecbadbbf2b2a144e15a@ec2-107-20-153-39.compute-1.amazonaws.com:5432/d9ad2ge9ckkmnb");
    if(!$conn)
    {
        die ("Cannot connect database");
    }
?>