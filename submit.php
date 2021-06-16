<?php
session_start();
include "./connection.php";
if(isset($_POST['submit']))
{
  $evnt=$_POST['event'];
  if($evnt)
  {
    $inqry="INSERT INTO events(text) VALUES ('$evnt')";
  mysqli_query($con,$inqry);
  if (mysqli_affected_rows($con)) {
    $selqry="select * from events";
    $eselqry=mysqli_query($con,$selqry);
    while($res=mysqli_fetch_array($eselqry))
    {
      $cdata[]=array($res['text'],$res['id']);
    }

    $_SESSION['cdata'] = $cdata;
    header('location:card.php');
 }
 else
 echo '<script>alert("Error try again")</script>';
  }
  else
  {
    header('location:form.php');
  }
}
else
 {
  $selqry="select * from events";
  $eselqry=mysqli_query($con,$selqry);
  while($res=mysqli_fetch_array($eselqry))
  $cdata[]=array($res['text'],$res['id']);

  $_SESSION['cdata'] = $cdata;
  header('location:card.php');
 }
?>