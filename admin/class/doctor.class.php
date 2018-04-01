<?php
require_once "common.php";
require_once "config.php";
class Doctor extends Common {
	public $id, $doctor_name, $doctor_image, $degree, $specialist, $available_time, $status, $university, $created_by, $modified_by, $created_date, $modified_date;

	public function save()
	{
		$sql = "insert into tbl_doctor (doctor_name,doctor_image,degree,specialist, available_time, status, university, created_by,created_date) values('$this->doctor_name', '$this->doctor_image', '$this->degree', '$this->specialist',  '$this->available_time',  '$this->status',  '$this->university', '$this->created_by', '$this->created_date') ";
		$result = $this->insert($sql);
		if($result){
			$_SESSION['success_message'] = "Doctor Inserted successfully with $result";
			redirect('list_doctor.php');
		}else{
			return false;
		}
	}
	public function index() //listing
	{
		$sql = "SELECT * FROM tbl_doctor";
		$list = $this->select($sql);
		return $list;
	}
	public function edit()
	{
		$sql = "UPDATE tbl_doctor SET doctor_name='$this->doctor_name',doctor_image='$this->image',degree='$this->degree',specialist='$this->specialist', available_time='$this->available_time', status='$this->status', university='$this->university',modified_by='$this->modified_by',modified_date='$this->modified_date' WHERE id='$this->id'";
		//print_r($sql);
		$result = $this->update($sql);
		if($result){
			$_SESSION['success_message'] = "Doctor list Updated successfully";
			//header('location:list_category.php');
			redirect('list_doctor.php');
		}else{
			return false;
		}
		
	}
	public function remove()
	{
		$sql = "DELETE FROM tbl_doctor where id='$this->id'";
		$this->delete($sql);
		redirect('list_doctor.php');
	}

	public function selectDoctorByID(){
		$sql = "SELECT * FROM tbl_doctor WHERE id='$this->id' ";
		$list = $this->select($sql);
		return $list;
	}

	public function selectAllActiveCategory(){
		$sql = "SELECT * FROM tbl_doctor WHERE status=1 ORDER BY doctor_name";
		$list = $this->select($sql);
		return $list;
	}
	
}


?>