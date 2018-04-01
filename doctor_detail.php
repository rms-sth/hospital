<?php 
$title= "Doctor Detail";
require_once "header.php"; 
require_once "admin/class/doctor.class.php";
$doc = new Doctor();
//print_r($doc);
$doc->id = $_GET['id'];
$docdetails = $doc->selectDoctorByID();
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Parallax</title>
    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,700,800" rel="stylesheet">
    <link rel="stylesheet" href="admin/css/detail/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/css/detail/bicon.min.css">
    <link rel="stylesheet" href="admin/css/detail/aos.css">
    <link rel="stylesheet" href="admin/css/detail/font-awesome.min.css">
    <link rel="stylesheet" href="admin/css/detail/venobox.css">
    <link rel="stylesheet" href="admin/css/detail/bootstrap.min.css">
    <link rel="stylesheet" href="admin/css/detail/style.css">
    <!--favicon icon-->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>


<div class="container">
    <div class="row">
        <div class="col-md-5 col-sm-5">
            <?php foreach ($docdetails as $d) { ?>
           

            <div class="user_image" style="background: url(&quot;admin/img/<?php echo $d['doctor_image']?>&quot;) center center / cover no-repeat;">
                <img class="set_background" src="1.jpg" alt="user image" style="display: none;">
            </div>
        </div>
        <div class="col-md-6 col-md-offset-1 col-sm-7">
            <div class="personal_skill">
                <h1><?php echo $d['doctor_name']; ?></h1>
               <button><a  href="add_appointment.php?id=<?php echo $d['id']; ?> "><span style="color: blue; background: lightblue; font-size: 35px">[Take an appointment]</span></a></button> 
                <h6>Degree: <?php echo $d['specialist']; ?></h6>
                <h6>University: <?php echo $d['university']; ?></h6>
                <h6>Available Time: <?php echo $d['available_time']; ?></h6>
                <h6>Degree: <?php echo $d['degree']; ?></h6><br><br>
                <h6>More Details : </h6>
                <div class="">
                    <p>
                        Lorem ipsum dolor sit amet, inani legimus vis ne. Vitae lobortis oportere no sit, erat ignota adipiscing ne usu. Ex omnes maluisset definiebas est, qui elitr evertitur in. Ad omnes gubergren omittantur pro.<br>  
                    </p>
                </div>
               
            </div>
        </div>
    </div>
</div>
<?php  } ?>
<?php require_once "footer.php"; ?>