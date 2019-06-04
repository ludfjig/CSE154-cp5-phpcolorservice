<?php
/*
 Name: Ludvig Liljenberg
 Section: CSE 154 AF
 Date: 05/16/2019

 This file provides back-end support for the color website.
 Based on the the parameters supplied using GET requests,
 the API outputs different colors in plain text.

 Web Service details:
 =====================================================================
 Required GET parameters:
 - min
 - max
 Output formats:
 - Plain text
 Output Details:
 - Outputs the colors whose red-channel lies between the given min and max paramaters.
 - Min and max must lie between 0 and 255, and min must be less than or equal to max.
 - Outputs helpful messages if not all parameters are passed or if they are illegal.
*/

include("common.php");

if (isset($_GET["min"]) && isset($_GET["max"])) {
  $min = $_GET["min"];
  $max = $_GET["max"];
  if ($min >= 0 && $min <= 255 && $max >= 0 && $max <= 255 && $max >= $min) {
    try {
      $db = get_PDO();
      $sql = "SELECT name FROM colors WHERE red <= :max and red >= :min";
      $stmt = $db->prepare($sql);
      $params = array(":max" => $max, "min" => $min);
      $stmt->execute($params);

      header("Content-type: text/plain");
      foreach ($stmt as $row) {
        print("{$row["name"]}\n");
      }
    } catch (PDOException $ex) {
      db_error();
    }
  } else {
    print_error("Please use a number between 0 and 255 for min and max, and make sure min <= max");
  }
} else {
  print_error("Please make sure to pass the parameters 'min' and 'max'");
}

/**
 * Prints out the given message and gives a 400 error.
 * @param  [String] $msg - the message to print.
 */
function print_error($msg){
  header("HTTP/1.1 400 Invalid Request");
  header("Content-type: text/plain");
  print($msg);
}

?>
