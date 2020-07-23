<!DOCTYPE html>
<html lang="en">
<head>
<title>Business Appointment Form</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Business Appointment Form Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<!-- //font-awesome-icons -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pretty-checkbox@3.0/dist/pretty-checkbox.min.css"/>
<link async="" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
	.error{
		color: red;
	}
	.redborder{
		border: 2px solid red;
	}
	.greenborder{
		border: 2px solid green;
	}
</style>
</head>
<body>
<script src="js/jquery.vide.min.js"></script>
<!-- banner -->
	<div data-vide-bg="video/appointment">
		<div class="center-container">
			<div class="main">
				<h1 class="w3layouts_head">Business Appointment Form</h1>
					<div class="w3layouts_main_grid">
						<form action="insert.php" method="post" class="w3_form_post">
							<div class="w3_agileits_main_grid w3l_main_grid">
								<label for="username" class="error"></label>
								<span class="agileits_grid">
									<label>Name <i>:</i></label>
									<input type="text" name="username" placeholder="Your Name" required="">
								</span>
							</div>
							<div class="w3_agileits_main_grid w3l_main_grid">
								<label for="useremail" class="error"></label>
								<span class="agileits_grid">
									<label>Email <i>:</i></label>
									<input type="text" name="useremail" placeholder="Your Email" required="">
								</span>
							</div>
							<div class="w3_agileits_main_grid w3l_main_grid">
								<label for="userphone" class="error"></label>
								<span class="agileits_grid">
									<label>Phone Number <i>:</i></label>
									<input type="text" name="userphone" placeholder="Phone Number" required="">
								</span>
							</div><div class="w3_agileits_main_grid w3l_main_grid">
								<label for="useraddress" class="error"></label>
								<span class="agileits_grid">
									<label>Address <i>:</i></label>
									<input type="text" name="useraddress" placeholder="Address" required="">
								</span>
							</div>
							
							<div class="w3_agileits_main_grid w3l_main_grid">
								<label for="usercity" class="error"></label>
								<span class="agileits_grid">
									<label>City <i>:</i></label>
									<input type="text" name="usercity" placeholder="Enter Your City" required="">
								</span>
							</div>
							<div class="w3_agileits_main_grid w3l_main_grid">
								<label for="userstate" class="error"></label>
								<span class="agileits_grid">
									<label>State <i>:</i></label>
									<input type="text" name="userstate" placeholder="Enter Your State" required="">
								</span>
							</div>
							<div class="w3_agileits_main_grid w3l_main_grid">
								<label for="userzip" class="error"></label>
								<span class="agileits_grid">
									<label>Zip <i>:</i></label>
									<input type="text" name="userzip" placeholder="Enter your Code" required="">
								</span>
							</div>
							<div class="agileits_w3layouts_main_grid w3ls_main_grid">
								<span class="agileinfo_grid">
									<label>Date / Time <i>:</i></label>
									<div class="agileits_w3layouts_main_gridl">
										<input class="date" id="datepicker" name="oppdate" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
									</div>
									<div class="agileits_w3layouts_main_gridr">
										<input type="time" name="opptime" placeholder=" " required="">
									</div>
									<div class="clear"> </div>
								</span>
							</div>
							<div class="w3_agileits_main_grid w3l_main_grid">
								<label for="check[]" class="error"></label>
								<span class="agileits_grid">
									<label>What days work best for you <i>:</i></label>
									<div style="margin-top: 10px;">
										<div class="pretty p-default p-curve p-thick">
											<input type="checkbox" name="check[]" />
											<div class="state p-primary">
											  <label>Monday</label>
											</div>
										</div>
										<div class="pretty p-default p-curve p-thick">
											<input type="checkbox" name="check[]" />
											<div class="state p-primary">
											  <label>Tuesday</label>
											</div>
										</div>
										<div class="pretty p-default p-curve p-thick">
											<input type="checkbox" name="check[]" />
											<div class="state p-primary">
											  <label>Wednesday</label>
											</div>
										</div>
										<div class="pretty p-default p-curve p-thick">
											<input type="checkbox" name="check[]" />
											<div class="state p-primary">
											  <label>Thursday</label>
											</div>
										</div>
										<div class="pretty p-default p-curve p-thick">
											<input type="checkbox" name="check[]" />
											<div class="state p-primary">
											  <label>Friday</label>
											</div>
										</div>
										<div class="pretty p-default p-curve p-thick">
											<input type="checkbox" name="check[]" />
											<div class="state p-primary">
											  <label>Saturday</label>
											</div>
										</div>
									</div>
								</span>
							</div>

							<div class="w3_agileits_main_grid w3l_main_grid">
								<label for="timing[]" class="error"></label>
								<span class="agileits_grid">
									<label>What time work best for you <i>:</i></label>
									<div style="margin-top: 10px;">
										<div class="pretty p-default p-curve p-thick">
											<input type="radio" name="timing[]" value="morning"/>
											<div class="state p-primary">
												<label>Morning</label>
											</div>
										</div>
										<div class="pretty p-default p-curve p-thick">
											<input type="radio" name="timing[]" value="afternoon"/>
											<div class="state p-primary">
												<label>Afternoon</label>
											</div>
										</div>
										<div class="pretty p-default p-curve p-thick">
											<input type="radio" name="timing[]" value="evening"/>
											<div class="state p-primary">
												<label>Evening</label>
											</div>
										</div>
									</div>
								</span>
							</div>

							<div class="w3_main_grid">
								<div class="w3_main_grid_right">
									<input type="submit" name="submit" value="Submit">
								</div>
							</div>
						</form>
					</div>
		<!-- Calendar -->
			<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
			  <script>
					  $(function() {
						$( "#datepicker" ).datepicker();
					  });
			  </script>
		<!-- //Calendar -->
				<div class="w3layouts_copy_right">
					<div class="container">
						<p>© 2020 Business Appointment Form. All rights reserved</p>
					</div>
				</div>
			</div>
	</div>
	</div>
<!-- //footer -->
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="jquery-validation-1.19.2/dist/jquery.validate.min.js"></script>
	<script src="jquery-validation-1.19.2//dist/additional-methods.min.js"></script>
	<script>
		$(document).ready(function(){
			$('form').validate({
				rules : {
					username : {
                        required : true,
                        minlength : 3,
                        maxlength : 10,
                        nowhitespace : true,
                        alphanumeric : true
                    },
                    useremail : {
                        required : true,
                        email : true,
					},
					userphone : {
						required : true,
						number : true,
					},
					useraddress : {
						required : true,
						nowhitespace : true,
                        alphanumeric : true
					},
					usercity : {
						required : true,
						nowhitespace : true,
                        alphanumeric : true
					},
					userstate : {
						required : true,
						nowhitespace : true,
                        alphanumeric : true
					},
					userzip : {
						required : true,
						number : true
					},
                    "timing[]" : {
                        required : true
                    },
                    "check[]" : {
                        required : true
                    },
                    oppdate : {
                        date : true
					},
					opptime : {
                        time : true
                    }
				},
				highlight : function(element){
                    $(element).addClass('redborder');
                },
                unhighlight : function(element){
                    $(element).addClass('greenborder');
				},
				messages : {
                    username : {
                        required : "*",
                        minlength : "Atleast 3 Charactors are Allowed",
                        maxlength : "Maximum 10 Charactors are Allowed"
                    },
                    useremail : {
                        required : "This field is required."
                    },
					useraddress : {
                        required : "This field is required."
                    },
					userstate : {
                        required : "This field is required."
                    },
					usercity : {
                        required : "This field is required."
                    },
					oppdate : {
						required : "This field is required."
					},
					opptime : {
						required : "This field is required."
					}
                }
			})
		})
	</script>
</body>
</html>