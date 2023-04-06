<?php
$con=mysqli_connect("localhost","root","","fashiony_ogs");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
