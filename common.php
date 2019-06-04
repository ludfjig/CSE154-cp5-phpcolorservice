<?php
  /**
   * Ludvig Liljenberg
   * Section AF
   * 04/06/2019
   *
   * This php file includes the function for creating a connection with the database, as
   * well as to handle potential erros.
   */

  /**
   * Returns a PDO object connected to the database. If a PDOException is thrown when
   * attempting to connect to the database, responds with a 503 Service Unavailable
   * error.
   * @return {PDO} connected to the database upon a succesful connection.
   */
  function get_PDO() {
    # Variables for connections to the database.
    $host = "localhost";         # fill in with server name
    $port = "3306";         # fill in with a port if necessary (will be different mac/pc)
    $user = "root";         # fill in with user name
    $password = "root";     # fill in with password (will be different mac/pc)
    $dbname = "colordb"; # fill in with db name

    # Make a data source string that will be used in creating the PDO object
    $ds = "mysql:host={$host}:{$port};dbname={$dbname};charset=utf8";

    try {
      $db = new PDO($ds, $user, $password);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    } catch (PDOException $ex) {
      db_error();
    }
  }

  /**
   * Gives a 503 error and prints out an error msg.
   */
  function db_error(){
    header("HTTP/1.1 503 Service Unavailable");
    header("Content-type: text/plain");
    die("An error occured when connecting to the database");
  }
?>
