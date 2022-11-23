<body>
 <p>Your query was accepted</p>
</body>

<?php
 $mail = filter_input(INPUT_POST,'mail');
 echo $mail;
 //mb_language('Japanese');
 mb_language('English');
 mb_internal_encoding("UTF-8");
 mb_send_mail($mail,"Accepted","Your query was accepted","From: example@example.jp");
 
/*
 $subject="your query was accepted";
 $message = "your query was accepted";
 
 if(mb_send_mail($mail,$subject,$message,"From: example@example.jp"))
 {
  echo "Success"
 }else{
  echo "Failed"
 }
*/

?>
<!--
<body>
 <p>Your query was accepted</p>
</body>
-->
