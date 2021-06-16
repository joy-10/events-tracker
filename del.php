<?php
include "./connection.php";
$id=$_GET["id"];
$dlqry="delete from events where id=$id";
mysqli_query($con,$dlqry);
header("Location:form.php");
?>