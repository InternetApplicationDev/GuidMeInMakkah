

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <script type="text/javascript" src= "JS/javaScript.js"></script>
  <!-- Sweet Alert  -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://unpkg.com/sweetalert2@7.17.0/dist/sweetalert2.all.js"></script>
 <script src="JS/pace.js"></script>
</head> 
<body>

<?php
 
include 'DB.php';

$bar = new connection;
$r = $bar->restaurantPics(1);
print_r($r);


for ($i = 0; $i < count($r); $i++) {
    // print"<img src=\"{$r[$i][0]}\" alt=\"Avatar\" >"; 
    print" <img id=\"1\" src=\"{$r[$i][0]}\" border=\"0\" alt=\"image\"/>"; 
}

?>


</body>
</html>
