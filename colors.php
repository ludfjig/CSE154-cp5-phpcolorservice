<?php
/*
  Name: Ludvig Liljenberg
  Section: CSE 154 AF
  Date: 05/16/2019

  This file provides back-end support for the color website.
  Based on the input parameters supplied using GET requests,
  the API outputs different details about colors in different formats.

  Web Service details:
  =====================================================================
  Required GET parameters:
  - type
  - mode
  Output formats:
  - Plain text and JSON
  Output Details:
  - If the mode parameter is set to "json", the API
  will output details about the color given in the color parameter as a json object.
  - If the mode parameter is set to "text", details about the color given in the
  color parameter will be returned in plain text format.
  - Else outputs 400 error message as plain text, or if the color parameter is not assigned
  an unrecognizable value.
*/

include("common.php");



$db = get_PDO();

if(isset($_GET["value"]) && isset($_GET["min"]) && isset($_GET["max"])){
  $value = $_GET["value"];
  $min = $_GET["min"];
  $max = $_GET["max"];
  if($value === "red" || $value === "green" || $value === "blue"){
    header("Content-type: text/plain");
    $sql = "SELECT * FROM colors WHERE :value < :max AND :value > :min;";
    $stmt = $db->prepare($sql);
    $params = array("value" => $value, "max" => $max, "min" => $min);
    $stmt->execute($params);
    //$rows = $db->query("SELECT * FROM colors WHERE red < 100 AND red > 50;");
    foreach($stmt as $row){
      print("{$row["name"]}\n");
    }
  }
}else{
  //missing param

}

?>
