<?php

    $fname = strip_tags($_GET["fname"]);
    $lname = strip_tags($_GET["lname"]);
    $email = strip_tags($_GET["email"]);
    $mess = strip_tags($_GET["mess"]);

    $to = "Moinak.Das@stonybrook.edu";
    $subject = "Contact Form Submission from " . $fname . " " . $lname;
    $headers = "From: noreply@sbuasme.com" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $content = "Hi ASME Eboard,
    You've recieved a contact form submission from " . $fname . " " . $lname . " Here's what we got from them:<br>
    email: " . $email . "<br>
    message: " . $mess;

    function checkInputs(){
        return str_contains($_GET["fname"],"<script>") || str_contains($_GET["lname"],"<script>") || str_contains($_GET["email"],"<script>") || str_contains($_GET["mess"],"<script>");
    }

    if(checkInputs()){
        header("Location: failedHacker.html");
    }else{
        header("Location: oops.html");
    }
    
?>