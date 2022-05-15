<?php
// Used to display the image
  header('Content-Type: image/png');
  readfile($_GET['img']);
?>