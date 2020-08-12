<?php
require 'common.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>👤Users Form</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container" style="margin: 100px 10px;border-radius: 2px;background: #ebecf1;padding-bottom: 30px">
            <h1 style="
    text-align: center;
    font-weight: 500;
    font-family: serif;
    padding-top: 15px;
    padding-bottom: 20px;
">Users List</h1>
            <h5 style="padding-left: 5px;"><i><a href="index.php">Add more users to the List</a></i></h5>
            
            <table id="customers" style="margin-bottom: 20px">
    <?php
         $id='';
         $query = "SELECT form.name AS name, form.id, form.email AS email, form.contact AS contact, form.dob AS dob, form.pin AS pin FROM form";
         $result = mysqli_query($con, $query)or die($mysqli_error($con));
         if (mysqli_num_rows($result) >= 1) {
    ?>
    <thead>
  <tr>
    <th>Serial No.</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone No.</th>
    <th>Date Of Birth</th>
    <th>PIN Code</th>
    <th>Delete</th>
  </tr>
    </thead>
  <tbody>
                                <?php
                                while ($row = mysqli_fetch_array($result)) {
                                    
                                    $id .= $row["id"] . ", ";
                                    echo "<tr><td>" . "#" . $row["id"] . "</td><td>" . $row["name"] . "</td><td> " . $row["email"] . "</td><td> " . $row["contact"] . "</td><td> " . $row["dob"] . "</td><td> " . $row["pin"] . "</td><td><a href='user-del.php?id={$row['id']}' class='remove_item_link'> Delete</a></td></tr>";
                                }
                                $id = rtrim($id, ", ");
                                
                                ?>
                            </tbody>
                            <?php
                        } else {
                            echo "<center>Add details of the user!</center>";
                        }
                        ?>
</tbody>
</table>
    
        </div>
    </body>
</html>
