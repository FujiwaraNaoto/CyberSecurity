<?php
 
 define('UPLOADPATH','/var/imgCyber');
 $mimes = array('jpg'=>'/image/jpeg','png'=>'image/png','gif'=>'image/gif');
 $file = $_GET['file'];
 $info = pathinfo($file);
 $ext = strtolower($info['extension']);
 $content_type=$mimes[$ext];
 if(!$content_type){
  die('filename extension must be gif, png orjpg ');
  }
 header('Content-type:'. $content_type);
 readfile(UPLOADPATH.'/'.basename($file));
?>
