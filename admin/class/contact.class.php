<?php
require_once "common.php";
require_once "config.php";
class Contact extends Common{
	public $id, $contact_name, $email, $message, $created_date;

	public function save()
	{
	
		$sql = "insert into tbl_contact (contact_name,email,message,created_date) values('$this->contact_name', '$this->email', '$this->message', '$this->created_date')";
		$conn = new mysqli('localhost','root','','db_hospital');
		$result = $this->insert($sql);
		if($result){
			echo "<div class = 'alert alert-success'>" ."<br> Congratulation!!! Message was sent successfully !!" ."</div>";
		}else{
			return false;
		}
	}

	public function index() //listing
	{
		$sql = "SELECT * FROM tbl_contact";
		$list = $this->select($sql);
		return $list;
	}
	
	public function edit()
	{
		
		
	}
	
	public function remove()
	{
		$sql = "DELETE FROM tbl_contact where id='$this->id'";
		$this->delete($sql);
		redirect('list_contact.php');
	}

	

}


?>