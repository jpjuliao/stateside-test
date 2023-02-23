<?php
if (!empty($_FILES)) :

  $file = $_FILES['cvs-file']['tmp_name'];

  $fileManager = new File_Manager();

  exit();

endif;
