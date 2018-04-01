<?php require_once "header.php" ?>
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">service management system</h1>
                    </div>

                    <!-- /.col-lg-12 -->
                </div>


                <!-- /.row -->
                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            add service
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form">
                                        
                                        <div class="form-group">
                                            <label>enter the name of service here</label>
                                            <input class="form-control" placeholder="Enter text">
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label>description of service</label>
                                            <textarea class="form-control" rows="3"></textarea>
                                        </div>
                                        
                                       
                                        <div class="form-group">
                                            <label>status</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>currently avaliable
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" checked="">currently not avaliable
                                                </label>
                                            </div>
                                            
                                        </div>
                                       
                                        
                                        <button type="submit" class="btn btn-success"><i class =
                                    "fa fa-save"></i>Submit Button</button>
                                        <button type="reset" class="btn btn-danger">clear</button>
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
    