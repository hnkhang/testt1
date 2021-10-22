<?php
    //$conn = pg_connect('localhost', 'root', '', 'online_shopping') 
    //or die ("Cannot connect database".pg_connect_error());
    $conn = pg_connect("postgres://mhyzwesjpwsvtl:92ab17c6c7051d4fecb5b8926acfd2bd263f49bc699c4fe4f56122bc41208a7e@ec2-34-203-91-150.compute-1.amazonaws.com:5432/d1a45vtr7pvf1e")
    if(!$conn)
    {
        die ("Cannot connect database");
    }
?>