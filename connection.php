<?php
$con = mysqli_connect("localhost","root","","fhachatbot");
//$con = mysqli_connect("localhost","seorslrb_chatbot","Chatbot99*#","seorslrb_chatbot");
//$con = mysqli_connect("us-cdbr-iron-east-03.cleardb.net","ba4caad30c8956","f1f9fbf1","heroku_c8d0aef7042f16f");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
