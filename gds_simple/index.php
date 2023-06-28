<?php include "partials/main.php"; ?>

    <head>
		<?php $title = '로그인'; include "partials/title-meta.php"; ?>
		<?php include "partials/head-css.php"; ?>
    </head>

	<?php include "partials/body.php"; ?>

        <!-- Begin page -->

		<div class="account-pages">
            <div class="container">
				<div class="lang-select position-absolute">
					<select class="form-select bg-transparent rounded-0">
						<option value="한국어" selected="">한국어</option>
						<option value="English">English</option>
						<option value="日本語">日本語</option>
						<option value="简体中文">简体中文</option>
						<option value="Tiếng Việt">Tiếng Việt</option>
					</select>
				</div>

                <div class="row justify-content-center mb-5">
                    <div class="col-12 col-lg-4">
                        <div class="text-center mb-4">
                            <img src="assets/images/logo_login.svg" alt="Logo" height="88">
                        </div>

						<div class="row g-0">
							<div class="col-12">
								<div class="mt-3">
									<form action="dashboard/dashboard.php">
										<div class="mb-3">
											<label for="username" class="mb-1">Email</label>
											<input type="email" class="form-control" id="username">
										</div>
				
										<div class="password-wrap mb-3 ">
											<label for="userpassword" class="mb-1">Password</label>
											<input type="password" class="form-control" id="userpassword">
											<i class="fa fa-eye fa-lg"></i>
										</div>

										<div class="row align-items-center">
											<div class="col">
												<div class="form-check form-check-inline">    
													<input type="checkbox" class="form-check-input font-size-16" id="remember-check">
													<label class="form-check-label" for="remember-check">기억하 </label>
												</div>
											</div>  
										</div>
				
										<div class="mt-4">
											<button class="btn btn-primary w-md waves-effect waves-light w-100" type="submit">로그인</button>
										</div>
									</form>
								</div>
							</div>
						</div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

		<?php include "partials/right-sidebar.php"; ?>
		<?php include "partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			
			$('.password-wrap i').on('click',function(){
				$('input').toggleClass('active');
				if($('input').hasClass('active')){
					$(this).attr('class','fa fa-eye-slash fa-lg').prev('input').attr('type','text');
				}else{
					$(this).attr('class','fa fa-eye fa-lg').prev('input').attr('type','password');
				}
			});
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
