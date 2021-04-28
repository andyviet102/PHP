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
                <input type="text" id="bName" name="BName" class="body__input-content" placeholder="Business name (optional)">

                <div class="body__input-name">Contact Name</div>
                <input type="text" id="cName" name="CName" class="body__input-content" placeholder="First & last name">

                <div class="body__input-name">Email</div>
                <input type="email" id="email" name="Email" class="body__input-content" placeholder="Email address">

                <div class="body__input-name">Phone Number</div>
                <input type="number" id="pNumber" name="PNumber" class="body__input-content" placeholder="Phone number (home or mobile)">

                <div class="body__input-name">Address</div>
                <input type="text" id="address" name="Address" class="body__input-content" placeholder="your address">

                <div class="body__input-name">How can we help?</div>
                <textarea name="Help" id="help" cols="50" rows="20" class="body__input-textarea" placeholder="Enter a description of the work you would like done"></textarea>

                <div class="body__input-name">Attachments</div>
                <p>Please attach photos or documents that will help describe your job.</p>

                <input type="file" id="attach" value="attach" name="Documents"accept="image/png, image/jpeg, .doc,.docx">

                <div class="btn">
                <input class="body__btn" type="submit" value="Add" class="btn" name="btn_sub">
                </div>
                
            </div>
            </form>
        </div>
    </div>
    <?php
    require 'control.php';
    if(isset($_POST['btn_sub']))
{
	$db= new data();
	$a = $_FILES['Documents']['tmp_name'];
	$b = $_FILES['Documents']['name'];
	$path = "./up/";
       if(empty($_POST['BName']))
       echo "<script>alert('not data on name')</script>";
       else
       {
	   $up_pic=move_uploaded_file($a,$path.$b);
       $in_form=$db->add_form($_POST['BName'],$_POST['CName'],$_POST['Email'],$_POST['PNumber'],$_POST['Address'],$_POST['Help'],$b);
       if($in_form && $up_pic)
       echo"<script>alert('Insert successful')</script>";
       else echo "<script>alert('Insert no successful')</script>";
       }
}

 ?>
</body>
</html>