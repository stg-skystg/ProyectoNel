<?php

session_start();
$connect = mysqli_connect("localhost","root","","moda");

if(isset($_POST["identificacion"]) && isset($_POST["clave"])){
  $identificacion = mysqli_real_escape_string($connect, $_POST["identificacion"]);
  $clave = mysqli_real_escape_string($connect, $_POST["clave"]);
  $sql = "SELECT identificacion FROM usuarios WHERE identificacion='$identificacion' AND clave='$clave'";
  $result = mysqli_query($connect, $sql);
  $num_row = mysqli_num_rows($result);
  if ($num_row == "1") {
    $data = mysqli_fetch_array($result);
    $_SESSION["identificacion"] = $data["identificacion"];
    echo "1";
  } else {
    echo "error";
  }
} else {
  echo "error";
}

?>
