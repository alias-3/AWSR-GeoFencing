<?php

//create connection
$conn = mysqli_connect('localhost:3307','root','','awsr');

//check connection
if(mysqli_connect_errno()){
    echo 'failed to connect' . mysqli_connect_errno();
}

?>