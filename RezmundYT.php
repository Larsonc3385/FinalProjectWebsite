<!--
    A php that connects information to a mysql database
    Author:Connor Larson
    Version:1.0
    Last edit:4/25/24
-->

<?php /*
$servername = "sql9.freemysqlhosting.net"; 
$database = "sql9261490";
$username = "sql9261490";
$password = "XVE35hbJ2t";

$conn = mysqli_connect ($servername, $username, $password, $database);
if (!$conn){
    die("Connection failed " .mysql_connect_error());
}
//echo *Connected Sucessfully

//
*/
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "https://www.w3.org/TR/xhtmll/DTD/xhtmll.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <title>Order Summary</title>
    <link href="ordersummary.css" type="text/css" rel="stylesheet"/>
    </head>

    <body class="background">
        <?php
        if($_POST["items"] && $_POST["firstname"] && $_POST["lastname"] && $_POST["street"] && $_POST["city"] && $_POST["state"] && $_POST["zip"])
        {
           $items=$_POST["items"];
           $firstname=$_POST["firstname"];
           $lastname=$_POST["lastname"];
           $street=$_POST["street"];
           $city=$_POST["city"];
           $state=$_POST["state"];
           $zip=$_POST["zip"];
           $total=0;
           $shipping=0;
           
           ?>
            <h1>Order Summary</h1>
            <p>Thank you <?= $firstname ?> for your order to:</p>
            <p><?= $street ?></p>
            <p><?= $city ?>, <?= $state ?> <?= $zip ?></p>

            <p>You ordered the following</p>
            <table>
                <tr>
                    <th>Item</th>
                    <th>Price</th>
                </tr>

            <?php
                foreach($items as $item =>$price)
                {
                ?>  
                <tr>
                    <td><?= $item ?></td>
                    <td><?= $price ?></td>
                </tr>
                <?php
                $total+=$price;
                }
            
                if ($total<10) {
                    $shipping=3;
                } else if ($total<40) {
                    $shipping=20;
                } else if ($total< 104) {
                    $shipping=55;
                }else {
                    $shipping=80;
                }
                $total+=$shipping;
                ?>
                <tr>
                    <td>Shipping</td>
                    <td><?= $shipping ?></td>
                </tr>
                <tr>
                    <td>Total</td>
                    <td><?= $total ?></td>
                </tr>
            </table>
            <?php

        }
        else
        {
            ?>
            <a href="Merch.html">Go back and complete the form properly</a>
            <?php
        }
?>
    </body>
</html>