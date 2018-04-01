<?php 
 $title = "List Appointment";
 require_once "header.php"; 
 require_once "header.php"; 
 require_once "class/appointment.class.php";
 $app  = new Appointment();
 $applist = $app->index();

?>
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">List of all Appointment</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            List all Appointment
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <?php 
                            @session_start();
                            if(isset($_SESSION['success_message'])){
                                echo "<div class = 'alert alert-success'>" .$_SESSION['success_message'] ."</div>";
                                unset($_SESSION['success_message']);
                            } ?>
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Patient Name</th>
                                        <th>Age</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>Contact</th>
                                        <th>Description</th>
                                        <th>Doctor Name</th>
                                        <th>Created date</th>
                                        <th>Action</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach($applist as $app){ ?>
                                     <tr class="odd gradeX">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $app['patient_name'] ?></td>
                                        <td><?php echo $app['age'] ?></td>
                                        <td><?php echo $app['gender'] ?></td>
                                        <td><?php echo $app['address'] ?></td>
                                        <td><?php echo $app['contact'] ?></td>
                                        <td><?php echo $app['description'] ?></td>
                                        <td><?php echo $app['doctor_name'] ?></td>
                                        <td><?php echo $app['created_date'] ?></td>
                                                                            
                                        <td class="center"><a href="delete_appointment.php?id=<?php echo $app['id'] ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="fa fa-trash"></i> Delete</a>
                                        
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