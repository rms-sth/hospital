<?php
 $title = "List Doctor";
 require_once "header.php"; 
 require_once "class/doctor.class.php";
 $doc  = new Doctor();
 $doclist = $doc->index();

?>
    <link href="css/jquery.dataTables.min.css" rel="stylesheet">
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List of all Doctor</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List all Doctor
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php 
                            @session_start();
                            if(isset($_SESSION['success_message'])){
                                echo "<div class = 'alert alert-success'>" .$_SESSION['success_message'] ."</div>";
                                unset($_SESSION['success_message']);
                            } ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="doctorform">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Doctor Name</th>
                                        <th>Specialist</th>
                                        <th>University</th>
                                        <th>Available Time</th>
                                        <th>Status</th>
                                        <th>Created by</th>
                                        <th>Modified by</th>
                                        <th>Created date</th>
                                        <th>Modififed date</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach($doclist as $doc){ ?>
                                     <tr class="odd gradeX">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $doc['doctor_name'] ?></td>
                                        <td><?php echo $doc['specialist'] ?></td>
                                        <td><?php echo $doc['university'] ?></td>
                                        <td><?php echo $doc['available_time'] ?></td>
                                        
                                        <td><?php echo $doc['created_by'] ?></td>
                                        <td><?php echo $doc['modified_by'] ?></td>
                                        <td><?php echo $doc['created_date'] ?></td>
                                        <td><?php echo $doc['modified_date'] ?></td>
                                        
                                        <td class="center">
                                            <?php if ($doc['status'] == 1) {
                                               echo "<span class='bg bg-success'>Active</span>";
                                            } else {
                                                echo "<span class='bg bg-danger'>De Active</span>";
                                                } ?>
                                        </td>
                                        
                                        <td class="center"><a href="delete_doctor.php?id=<?php echo $doc['id'] ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="fa fa-trash"></i> Delete</a>
                                        <a href="edit_doctor.php?id=<?php echo $doc['id'] ?>" class="btn btn-warning"><i class="fa fa-pencil"></i> Edit</a></td>   
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        <?php require_once "footer.php" ?>
        <script type="text/javascript" src = "js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
    $('#doctorform').DataTable();
} );
</script>