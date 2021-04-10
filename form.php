<?php
$name = $_POST["name"];
$email = $_POST["email"];
$aboutme = $_POST["aboutme"];
$gender = $_POST["gender"];
$address = $_POST["address"];


if(empty($name)) {
    echo "Name is required";
}

?>