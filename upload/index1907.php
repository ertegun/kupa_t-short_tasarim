
<html><head>
    <meta charset="UTF-8">
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="Hege Refsnes">
  </head>
  <body>
    <h2>Girişi gizlemek için bu sayfanın adını değiştir boş index sayfası koy</h2><br>
    <?php
    foreach (glob('*.{jpg,JPG,jpeg,JPEG,jpe,JPE,png,PNG,gif,GIF,bmp,BMP,tif,TIF,tiff,TIFF}', GLOB_BRACE) as $dosya) {
      echo "<img src=$dosya width=320 heigth=320 style='border-style: solid;' />";
    }
    ?>
  </body>
</html>