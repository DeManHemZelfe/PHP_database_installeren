<?php
/**
 * Created by PhpStorm.
 * User: niels
 * Date: 3-12-2018
 * Time: 09:55
 */


$user = "schooluser";
$pass = "BuitenBoysD4";


try {
    $dbh = new PDO('mysql:host=localhost;dbname=school;port=8889', $user, $pass);
    foreach($dbh->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>