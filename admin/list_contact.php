<?php 
 $title = "Contact List";
 require_once "header.php"; 
 require_once "class/contact.class.php";
 $con = new Contact();
 $conlist = $con->index();

?>
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
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SN</th>
                                        <th>Name</th>                 
                                        <th>Email Address</th>
                                        <th>Message</th>
                                        <th>Created Date</th>
                                        <th>Action</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1; foreach($conlist as $cl){ ?>
                                     <tr class="odd gradeX">
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $cl['contact_name'] ?></td>
                                        <td><?php echo $cl['email'] ?></td>
                                        <td><?php echo $cl['message'] ?></td>
                                        <td><?php echo $cl['created_date'] ?></td>
                                        <td class="center"><a href="delete_contact.php?id=<?php echo $cl['id'] ?>" class="btn btn-danger" onclick="return confirm('Do you want to delete ?')"><i class="fa fa-trash"></i> Delete</a>
                                          
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