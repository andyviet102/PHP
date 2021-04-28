<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php
 include ('control.php');
$get_data= new data;
$lsform=$get_data->list_form();
?>
    <h1>Menu</h1>
    <hr>
    <table class="table primary_table">
    <tr>
    <th>Id</th>
    <th>Business Name</th>
    <th>Contact Name</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Address</th>
    <th>How can we help?</th>
    <th>Documents</th>

    <th colspan="2">Option</th>
    </tr>
    <?php 
    foreach($lsform as $se_form)
    {
        ?>
    <tr>
    <td><?php echo $se_form['Id'];?></td>
    <td><?php echo $se_form['BName'];?></td>
    <td><?php echo $se_form['CName'];?></td>
    <td><?php echo $se_form['Email'];?></td>
    <td><?php echo $se_form['PNumber'];?></td>
    <td><?php echo $se_form['Address'];?></td>
    <td><?php echo $se_form['Hcwh'];?></td>
    <td><img src="./up/<?php echo $se_form['Documents']; ?>" alt="" width="100px" height="100px"></td>
    <td><a href="edit_form.php?edit=<?php echo  $se_form['Id'] ?>" >Edit</href=></td>
    <td><a href="del_form.php?del=<?php echo  $se_form['Id'] ?>" >Delete</a></td>
    </tr>
    <?php } ?>
    </table>
   
</body>
</html>