<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $id=$_GET['del'];
    include ('control.php');
    $get_data= new data();
    $delform=$get_data->delete_form($id);
if($delform) echo header('location:listform.php');
else echo "không thành công";
    ?>
</body>
</html>