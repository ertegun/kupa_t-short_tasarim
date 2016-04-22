<?php

$ds = DIRECTORY_SEPARATOR;  //1

$storeFolder = '../original-img';   //2

if (!empty($_FILES))
{

  $tempFile = $_FILES['file']['tmp_name'];          //3

  $targetPath = dirname(__FILE__) . $ds . $storeFolder . $ds;  //4
//  $targetFile = $targetPath . $_FILES['file']['name'];  //5
  $targetFile = $targetPath . uniqid() . $_FILES['file']['name'];  //5

  move_uploaded_file($tempFile, $targetFile); //6
}
?>