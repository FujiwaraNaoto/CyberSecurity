<html>
 <link rel="stylesheet" type="text/css" href="OSCommandInjection.css">
 <body>
  <?php
   $address = $_POST['address'];
   $cmd = "nslookup ".$address;
   $output = shell_exec($cmd);
   echo "<pre>$output</pre>";
  ?>
 </body>
  <div class="go_back_to_menu_page"><a href=./OSCommandInjection3.html>go back to the previous page</a></div>
</html>
