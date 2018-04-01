<?php
require_once "class/config.php";
require_once "class/doctor.class.php";
$doc  = new Doctor();
$doc->id = $_GET['id'];
$record = $doc->selectCategoryByID();
?>


<?php 
$title = "Edit Doctor List";
require_once "header.php";

require_once "header.php"; 
if(isset($_POST['btnDoc'])){
  
  $doc->set('name',$_POST['name']);
  $doc->set('doc_image',$_POST['doctor  _image']);
  $doc->set('degree',$_POST['degree']);
  $doc->set('university',$_POST['university']);
  $doc->set('specialist',$_POST['specialist']);
  $doc->set('available_time',$_POST['available_time']);
  $doc->set('status',$_POST['status']);
  $doc->set('modified_by', $_SESSION['username']);
  $doc->set('modified_date', date('Y-m-d H:i:s'));
  
  $status =  $doc->edit();
}
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category Management</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       Create Category
                   </div>
                   <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php if (isset($status) && $status == false) {
                                echo "<div class='alert alert-danger'>Doctor list cannot updated</div>";
                            } ?>
                            <form role="form" action="" method="post" id="docform">

                                <div class="form-group">
                                    <label>doc Name</label>
                                    <input class="form-control" placeholder="Enter doc Name" name="name" value="<?php echo $record[0]['name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>doc Image</label>
                                    <input class="form-control" type="file"  name="doc_image" value="> <?php if(isset($errRank)) { echo "$errRank";} ?>
                                </div>
                                <div class="form-group">
                                    <label>Degree</label>
                                    <input class="form-control" placeholder="Enter text" name="degree" value="<?php echo $record[0]['degree']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>University</label>
                                    <input class="form-control" placeholder="Enter text" name="university" value="<?php echo $record[0]['university']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Specialist</label>
                                    <input class="form-control" placeholder="Enter text" name="specialist" value="<?php echo $record[0]['specialist']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Available Time</label>
                                    <input class="form-control" placeholder="Enter text" type="time" name="available_time" value="<?php echo $record[0]['available_time']; ?>">
                                </div>                                 
                                <div class="form-group">
                                    <label>Status</label>
                                    <?php if ($record[0]['status'] == 1) { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="" value="1" checked="">Active
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="" value="0" >De Active
                                        </label>
                                    </div>
                                    <?php  } else { ?>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="" value="1" >Active
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="status" id="" value="0" checked>De Active
                                        </label>
                                    </div>


                                    <?php    } ?>


                                </div>


                                <button type="submit" class="btn btn-success" name="btnDoc"><i class =
                                    "fa fa-save"></i> Submit Button</button>
                                    <button type="reset" class="btn btn-danger" >clear</button>
                                </form>
                            </div>
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

<?php require_once "footer.php"; ?>

<script src="js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
 $(document).ready(function(){
    $('#docform').validate();
});
</script>