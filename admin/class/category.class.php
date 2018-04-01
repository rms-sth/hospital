<?php
require_once "common.php";
class Category extends Common {
	public $id, $name, $rank, $status, $created_by, $modified_by, $created_date, $modfied_date;

	public function save()
	{
		echo $sql = "insert into tbl_category (name,rank,status,created_by,created_date) values('$this->name', '$this->rank', '$this->status', '$this->created_by', '$this->created_date') ";
		$conn = new mysqli('localhost','root','','db_newsportal');
		
		if($conn->connect_errno != 0){
			die("Database Connection error!!");
		}
		$conn->query($sql);
	}
	public function index()
	{
		
	}
	public function edit()
	{
		
	}
	public function remove()
	{
		
	}
}


?>