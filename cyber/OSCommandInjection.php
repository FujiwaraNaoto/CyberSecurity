<?php
 echo "test";
 $mail=filter_input(INPUT_POST,'mail');
 echo $mail;
 system("sudo /usr/sbin/sendmail -i <template.txt $mail");
 //echo mail($mail,"testmail Ubuntu","message");
?>
<body>
 Your query was accepted
</body>
