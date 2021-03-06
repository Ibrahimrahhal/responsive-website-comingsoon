﻿<!DOCTYPE html>
<html lang="en">
<head>
	<title>Arabic Coding Tutorials</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/Artboard1.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="size1 bg0 where1-parent">
		<!-- Coutdown -->
		<div class="flex-c-m bg-img1 size2 where1 overlay1 where2 respon2" style="background-image: url('images/bg01.jpg');">
			<div class="wsize2 flex-w flex-c-m cd100 js-tilt">
				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 days">0</span>
					<span class="s2-txt4">Days</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 hours">0</span>
					<span class="s2-txt4">Hours</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 minutes">0</span>
					<span class="s2-txt4">Minutes</span>
				</div>

				<div class="flex-col-c-m size6 bor2 m-l-10 m-r-10 m-t-15">
					<span class="l2-txt1 p-b-9 seconds">0</span>
					<span class="s2-txt4">Seconds</span>
				</div>
			</div>
		</div>

		<!-- Form -->
		<div class="size3 flex-col-sb flex-w p-l-75 p-r-75 p-t-45 p-b-45 respon1">
			<div class="wrap-pic1" style="width:90%;">
				<img src="images/icons/logo.svg" alt="LOGO">
			</div>

			<div class="p-t-50 p-b-60">
				<p class="m1-txt1 p-b-36">
					Our website is <span class="m1-txt2">Coming Soon</span>, follow us for update now!
				</p>

				<form class="contact100-form validate-form" method="post" action="submit.php">
					<div class="wrap-input100 m-b-10 validate-input" data-validate = "Name is required">
						<input class="s2-txt1 placeholder0 input100" type="text" name="name" placeholder="Your Name">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 m-b-20 validate-input" data-validate = "Email is required: ex@abc.xyz">
						<input class="s2-txt1 placeholder0 input100" type="text" name="email" placeholder="Email Address">
						<span class="focus-input100"></span>
					</div>

					<div class="w-full">
						<input class="flex-c-m s2-txt2 size4 bg1 bor1 hov1 trans-04"  type="submit" name="submit" value="Subscribe"/>

					
					</div>
				</form>

				<p class="s2-txt3 p-t-18">
					And don’t worry, we hate spam too! You can unsubcribe at anytime.
				</p>
			</div>

			<div class="flex-w">
				<a href="#" target="_blank" class="flex-c-m size5 bg3 how1 trans-04 m-r-5">
					<i class="fa fa-facebook"></i>
				</a>

				<a href="#" target="_blank" class="flex-c-m size5 bg4 how1 trans-04 m-r-5"
 				style="display:none;"
				>
					<i class="fa fa-twitter"></i>
				</a>

				<a style="display:none;" href="https://www.youtube.com/channel/UCR2cT9z1oc4rJZfDDZq2Z8w" target="_blank" class="flex-c-m size5 bg5 how1 trans-04 m-r-5">
					<i class="fa fa-youtube-play"></i>
				</a>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script>
// var b =1 ;
// 	fetch('http://api.timezonedb.com/v2.1/get-time-zone?key=MRU19287IONM0&format=json&by=position&lat=31.945368&lng=35.928371')
// 	  .then(function(response) {
//
// 	    return response.json();
//
// 	  })
// 	  .then(function(myJson) {


	  this.d =new Date(Date.now());
		document.querySelectorAll(".days")[0].innerHTML= (25-(d.getDate())+20);


						var hour =document.querySelectorAll(".hours")[0];

					hour.innerHTML= ((d.getHours()-23)*-1);

						var min = document.querySelectorAll(".minutes")[0];
									min.innerHTML= ( (d.getMinutes()-59)*-1);
						var secs =document.querySelectorAll(".seconds")[0];
										secs.innerHTML= (  (d.getSeconds()-59)*-1);

     var hourv = ((d.getHours()-23)*-1);
     var minv =( (d.getMinutes()-59)*-1) ;
		 var secv =(  (d.getSeconds()-59)*-1) ;
window.setInterval(function(){




if(secv !== 0 ){
	secv -- ;
	secs.innerHTML=secv;


}else {

	if( minv !== 0){
minv--;
min.innerHTML =minv ;
secv =59;
secs.innerHTML=secv;
}

else {
hourv--;
hour.innerHTML =hourv;
minv = 59 ;

min.innerHTML =minv ;
secv =59;
secs.innerHTML=secv;

}


}




},1000);






	</script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
