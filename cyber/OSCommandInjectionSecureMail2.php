<body>
 <p>Your query was accepted</p>
</body>
<?php
 $mail = filter_input(INPUT_POST,'mail');
 echo $mail;
 //mb_language('Japanese');
 system('sudo /usr/sbin/sendmail -i< temlate.txt' . escapeshellarg($mail));
?>
<!--
<body>
 <p>Your query was accepted</p>
</body>
-->
