
<?php
$title = "Contact Form";
require_once "header.php"; 
?>



	<div class="page-heading text-center">

		<div class="container zoomIn animated">
			
			<h1 class="page-title">CONTACT US <span class="title-under"></span></h1>
			<p class="page-description">
				Hospital Management System
			</p>			
		</div>

	</div>

	<div class="main-container fadeIn animated">

		<div class="container">

			<div class="row">

				<div class="col-md-7 col-sm-12 col-form">

					<h2 class="title-style-2">CONTACT FORM <span class="title-under"></span></h2>
                       
                        <?php if (isset($status) && $status == false) {
                            echo "<div class='alert alert-danger'>Form can not be inserted</div>";
                        } ?>
					
                    <form class="ajax-form" action="" method="post" id="contactform">

						<div class="row">

							<div class="form-group col-md-6">
	                            <input type="text" class="form-control" placeholder="Name*" name="contact_name" required>
	                        </div>

	                         <div class="form-group col-md-6">
	                            <input type="email" name="email" class="form-control" placeholder="E-mail*" required>
	                        </div>
							
						</div>

                        <div class="form-group">
                            <textarea name="message" rows="5" class="form-control" placeholder="Message*" required></textarea>
                        </div>
                        
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary pull-right" name="btnSend">Send message</button>
                        </div>

                        <div class="clearfix"></div>

					</form>

				</div>

				<div class="col-md-4 col-md-offset-1 col-contact">

					<h2 class="title-style-2">LOCATION <span class="title-under"></span></h2>
					
					<div class="contact-items">

						<ul class="list-unstyled contact-items-list">
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-map-marker"></i></span> Patan Dhoka, Lalitpur</li>
							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-phone"></i></span> +977 - 9860298534 </li>

							<li class="contact-item"> <span class="contact-icon"> <i class="fa fa-envelope"></i></span> ramesrest@gmail.com</li>
						</ul>
					</div>

					
					
				</div>

			</div> <!-- /.row -->


		</div>
<br>




<?php require_once "footer.php" ?>

<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="admin/js/validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){
    $('#contactform').validate();
});
</script>