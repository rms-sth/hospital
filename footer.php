<?php
require_once "admin/class/contact.class.php";
if(isset($_POST['btnSend'])){
    $con = new Contact();
    $con->set('contact_name',$_POST['contact_name']);   
    $con->set('email',$_POST['email']);
    $con->set('message',$_POST['message']);
    $con->set('created_date', date('Y-m-d H:i:s'));
    //print_r($con);
    $status = $con->save();
}  
?>
<?php if (isset($status) && $status == false) {
   echo "<div class='alert alert-danger'>Form can not be inserted</div>";
} ?>

<footer class="main-footer">

    <div class="footer-top">

    </div>


    <div class="footer-main">
        <div class="container">

            <div class="row">
                <div class="col-md-4">

                    <div class="footer-col">

                        <h3 class="footer-title">About us <span class="title-under"></span></h3>

                        <div class="footer-content">

                            <p style="font-size: 16px;">We are dedicated to work on php.  This is the Hospital Management Project. This project manages Doctors list and Patient list only. For further information contact us @ ramesrest@gmail.com</p> 
                        </div>

                    </div>

                </div>

                

                <div class="col-md-4">
                    <div class="footer-col">
                        <h3 class="footer-title">Location <span class="title-under"></span></h3>
                        <div class="footer-content">
                            <div class="contact-items">
                                <ul class="list-unstyled contact-items-list">
                                    <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> Patan Dhoka, Lalitpur</li>
                                    <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> +977 - 9860298534 </li>
                                    <li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> ramesrest@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                
                



                <div class="col-md-4">

                    <div class="footer-col">

                        <h4 class="footer-title">Contact us <span class="title-under"></span></h4>

                        <div class="footer-content">

                            <div class="footer-form">

                                <div class="footer-form" >

                                    <form action="" method="post" class="ajax-form" id="contactform">

                                        <div class="form-group">
                                            <input type="text" name="contact_name" class="form-control" placeholder="Name" required>
                                        </div>

                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group alerts">

                                            <div class="alert alert-success" role="alert">

                                            </div>

                                            <div class="alert alert-danger" role="alert">

                                            </div>
                                            
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-submit pull-right" name="btnSend">Send message</button>
                                        </div>
                                        
                                    </form>

                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="clearfix"></div>



            </div>


        </div>


    </div>

    <div class="footer-bottom">

        <div class="container text-right" style="font-size: 20px;">
           <center> Hospital Management Project @ copyright 2017</center>
        </div>
    </div>

</footer> <!-- main-footer -->



    <!--  Scripts
    ================================================== -->
    <!-- <script src="assets/js/jquery-1.11.1.min.js"></script> -->

    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>

    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>


    <script src="admin/js/validation/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
       $(document).ready(function(){
        $('#contactform').validate();
    });
</script>

</body>
</html>