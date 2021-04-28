<?php
include('connect.php');
class data
{
	public function add_form($BName,$CName,$Email,$PNumber,$Address,$Hcwh,$Documents)
	{
	global $conn;
	$sql="insert into t_form(BName,CName,Email,PNumber,Address,Hcwh,Documents) value ('$BName','$CName','$Email','$PNumber','$Address','$Hcwh','$Documents')";
	// echo $sql;
	$run=mysqli_query($conn,$sql);
	return $run;
	}

    public function list_form()
	{
		global $conn;
		$sql="select * from t_form";
		$run=mysqli_query($conn,$sql);
		$data=array();
		while($rows=mysqli_fetch_array($run))
		{$data[]=$rows;}
        return $data;
	}

	Public function upload($tmp,$name)
	{
		$up=move_uploaded_file($tmp,$name);
		return $up;
	}

	public function select_form($id)
	{
		global $conn;
		$sql="select * from t_form where Id=$id";
		$run=mysqli_query($conn,$sql);
		$data=array();
		while($rows=mysqli_fetch_array($run))
		{$data[]=$rows;}
		return $data; 
	}

	public function delete_form($id)
	{
     global $conn;
     $sql="delete from t_form where Id=$id";
     $run= mysqli_query($conn,$sql);
     return $run;
	}

	public function update_form($BName,$CName,$Email,$PNumber,$Address,$Hcwh,$Documents,$Id){
		global $conn;
		$sql="update t_form SET BName='$BName',CName='$CName',Email='$Email',PNumber='$PNumber',Address='$Address',Hcwh='$Hcwh',Documents='$Documents' where  Id=$Id";
		//echo $sql;
		$run=mysqli_query($conn,$sql);
		return $run;
	   }
}
?>