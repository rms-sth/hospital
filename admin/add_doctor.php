<?php 
$title = "Add Doctor";
require_once "header.php";
require_once "class/doctor.class.php";

if(isset($_POST['btnDoctor'])){
    $doctor = new Doctor();
    //print_r($doctor);
    $doctor->set('doctor_name',$_POST['doctor_name']);   
    $doctor->set('degree',$_POST['degree']);
    $doctor->set('university',$_POST['university']);
    $doctor->set('specialist',$_POST['specialist']);
    $doctor->set('available_time',$_POST['available_time']);
    $doctor->set('status',$_POST['status']);
    $doctor->set('created_by', $_SESSION['username']);
    $doctor->set('created_date', date('Y-m-d H:i:s'));
    

    if(isset($_FILES['doctor_image']['name']) && !empty($_FILES['doctor_image']['name']) ){

        if($_FILES['doctor_image'] ['error']==0){
            if($_FILES['doctor_image'] ['size']< 5500000){
                if($_FILES['doctor_image'] ['type']=='image/png' OR $_FILES['doctor_image'] ['type']=='image/jpeg' OR $_FILES['doctor_image'] ['type']=='image/jpg'){
                    if(move_uploaded_file($_FILES['doctor_image']['tmp_name'] , 'img/'.$_FILES['doctor_image']['name'])){
                        echo "Successful"; 
                        $doctor->set('doctor_image', $_FILES['doctor_image']['name']);
                    }
                }
                else{
                    echo "Not supported file";
                }
            }
            else {
                echo "size must be less than 5MB";
            }
        }
        else {
            $imageError = "File upload error";
        }
    //print_r($_FILES);
    $status = $doctor->save();  
    }
}


?>



<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Doctor Management System</h1>
            </div>

            <!-- /.col-lg-12 -->
        </div>


        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        add doctors
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <?php if (isset($status) && $status == false) {
                                    echo "<div class='alert alert-danger'>Doctor list can not be inserted</div>";
                                } ?>
                            <form role="form" action="" method="post" id="doctorform" enctype="multipart/form-data">

                                <div class="form-group">
                                    <label>Doctor Name</label>
                                    <input class="form-control" placeholder="Enter Doctor Name" name="doctor_name">
                                </div>
                                <div class="form-group">
                                    <label>Doctor Image</label>
                                    <input class="form-control" type="file"  name="doctor_image"> <?php if(isset($errRank)) { echo "$errRank";} ?>
                                </div>
                                <div class="form-group">
                                    <label>Degree</label>
                                    <input class="form-control" placeholder="Enter text" name="degree">
                                </div>
                                <div class="form-group">
                                    <label>University</label>
                                    <input class="form-control" placeholder="Enter text" name="university">
                                </div>
                                <div class="form-group">
                                    <label>Specialist</label>
                                    <input class="form-control" placeholder="Enter text" name="specialist">
                                </div>
                                <div class="form-group">
                                    <label>Available Time</label>
                                    <input class="form-control" placeholder="Enter text" type="time" name="available_time">
                                </div>                                 
                                <div class="form-group">
                                    <label>Status</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="" value="1" >Available
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="" value="0" checked>Not Available
                                        </label>
                                    </div>

                                </div>


                                <button type="submit" class="btn btn-success" name="btnDoctor"><i class ="fa fa-save"></i> Submit Button</button>
                                    <button type="reset" class="btn btn-danger" >clear</button>
                                </form>
                            </div>
                            <!-- /.col-lg-6 (nested) -->

                            <!-- /.col-lg-6 (nested) -->
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

<?php require_once "footer.php" ?>

<script src="js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('#doctorform').validate();
});
</script>