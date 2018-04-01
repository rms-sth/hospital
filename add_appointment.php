<?php 
$title = "Add Appointment";
require_once "header.php";
require_once "admin/class/appointment.class.php";
if(isset($_POST['btnPatient'])){
    $app = new Appointment();  
    $app->set('patient_name',$_POST['patient_name']);   
    $app->set('age',$_POST['age']);
    $app->set('gender',$_POST['gender']);
    $app->set('address',$_POST['address']);
    $app->set('contact',$_POST['contact']);
    $app->set('description',$_POST['description']);
    $app->set('doctor_id', $_GET['id']);
    $app->set('created_date', date('Y-m-d H:i:s'));
     //print_r($app);
    $status = $app->save();  
}
?>



<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Appointment Form</h1>
            </div>

            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Insert your form
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-12">
                              
                            <?php 
                            @session_start();
                            if(isset($status) && $status==true){
                            if(isset($_SESSION['success_message'])){
                                echo "<div class = 'alert alert-success'>" .$_SESSION['success_message'] ."</div>";
                                unset($_SESSION['success_message']);
                            } 
                            } ?>

                            <?php if (isset($status) && $status == false) {
                                echo "<div class='alert alert-danger'>Appointment can not be inserted</div>";
                            }?>

                            <form role="form" action="" method="post" id="patientform">


                                <div class="form-group">
                                    <label>Patient Name</label>
                                    <input class="form-control" placeholder="Name" name="patient_name" required="">
                                </div>
                                <div class="form-group">
                                    <label>Age </label>
                                    <input class="form-control" placeholder="Age" type="number" name="age" required=""> <?php if(isset($errRank)) { echo "$errRank";} ?>
                                </div>
                                <div class="form-group">
                                    <label>Contact No.</label>
                                    <input class="form-control" placeholder="Enter phone no." type="number" name="contact" required="">
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input class="form-control" placeholder="Enter address" name="address" required="">
                                </div>
                                <div class="form-group">
                                    <label>Description</label>
                                    <textarea class="form-control " placeholder="Enter your problem" name="description" required=""></textarea> <?php if(isset($errRank)) { echo "$errRank";} ?>
                                </div>

                                <div class="form-group">
                                    <label>Gender</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" id="" value="Male" checked >Male
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" id="" value="Female" >Female
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gender" id="" value="Other" >Other
                                        </label>
                                    </div>

                                </div>


                                <button type="submit" class="btn btn-success" name="btnPatient"><i class =
                                    "fa fa-save"></i> Submit Button</button>
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

<script src="admin/js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $('#patientform').validate();
});
</script>