<?php
require ('control.php');
ob_start();
$id=$_GET['edit'];
$get_data= new data();
$select_form=$get_data->select_form($id);
 foreach($select_form as $se_form)
{
	//  echo $se_food['ngaysinh'];
    //  $birth=$se_food['ngaysinh'];
	// $birth=$se_food['NameFood'];
	// $birth=$se_food['PictureFood'];
	// $birth=$se_food['DescriptionFood'];
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FormPHP</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    
</head>
<body>
    <div class="main">
        <div class="header">
            <div class="header__logo">
                <img class="header__logo-img" src="./assets/image/logo.png" alt="">
            </div>
        </div>
        <div class="body">
            <div class="body-title">
                <h3>Request a booking or quote</h3>
                <h5>Simply fill out the details below and we will be in contact with you as soon as we can.</h5>
            </div>
     <form method="post" enctype="multipart/form-data">
            <div class="body__input">
                <div class="body__input-name">Business Name</div>
                <input type="text" id="bName" name="BName" value="<?php echo $se_form['BName'];?>" class="body__input-content" placeholder="Business name (optional)">

                <div class="body__input-name">Contact Name</div>
                <input type="text" id="cName" name="CName" value="<?php echo $se_form['CName'];?>" class="body__input-content" placeholder="First & last name">

                <div class="body__input-name">Email</div>
                <input type="email" id="email" name="Email" value="<?php echo $se_form['Email'];?>" class="body__input-content" placeholder="Email address">

                <div class="body__input-name">Phone Number</div>
                <input type="number" id="pNumber" name="PNumber" value="<?php echo $se_form['PNumber'];?>" class="body__input-content" placeholder="Phone number (home or mobile)">

                <div class="body__input-name">Address</div>
                <input type="text" id="address" name="Address" value="<?php echo $se_form['Address'];?>" class="body__input-content" placeholder="your address">

                <div class="body__input-name">How can we help?</div>
                <input name="Help" id="help" cols="50" rows="20" value="<?php echo $se_form['Hcwh'];?>" class="body__input-textarea" placeholder="Enter a description of the work you would like done">
                
                <div class="body__input-name">Attachments</div>
                <p>Please attach photos or documents that will help describe your job.</p>
           
                <input type="file" id="attach" value="attach" value="<?php echo $se_form['Documents'];?>" name="Documents"accept="image/png, image/jpeg, .doc,.docx">
                <img src="./up/<?php echo $se_form['Documents']; ?>" alt="" width="100px" height="100px">
                <div class="btn">
                <input class="body__btn" type="submit" value="Update" class="btn" name="btn_sub">
                </div>
                
            </div>
            </form>
        </div>
    </div>
	<?php
  if(isset($_POST['btn_sub']))
  {
    $a = $_FILES['Documents']['tmp_name'];
	$b = $_FILES['Documents']['name'];
	$path = "./up/";
      if(empty($_POST['BName']))
       echo "<script>alert('Không được để rỗng dữ liệu');</script>";
      else
  {
    $up_pic=move_uploaded_file($a,$path.$b);
      $dk=$get_data->update_form($_POST['BName'],$_POST['CName'],$_POST['Email'],$_POST['PNumber'],$_POST['Address'],$_POST['Help'],$b,$id);
      if($dk) 
      header ('location:listform.php');
      else echo "<script>alert('Đăng ký không thành công');</script>";
  } 
}  

?>
</body>
</html>