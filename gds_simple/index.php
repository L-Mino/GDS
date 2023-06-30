<?php include "partials/main.php"; ?>

    <head>
		<?php $title = '로그인'; include "partials/title-meta.php"; ?>
		<?php include "partials/head-css.php"; ?>
    </head>

	<?php include "partials/body.php"; ?>

        <!-- Begin page -->

		<div class="account-pages">
			<div class="login-wrap">
				<div class="d-flex justify-content-center h-100">
					<div class="col-6 d-flex flex-column login-left">
						<div class="text-end">
							<img src="assets/images/content/login_logo.svg" alt="Tiger GDS">
						</div>

						<div class="login-text-wrap mt-auto">
							<span class="login-tit">Tiger GDS</span>	
							<p class="login-txt">Tiger GDS는 골프장 매출 증대와 비용 절감에 기여합니다.<br>
							티타임 생성부터 실적 보고서까지 골프장 운영에 최적화된  SaaS형 ERP 입니다.<br>
							국내는 물론, 전세계 골퍼들을 유입시킬 수 있는 글로벌 판매 채널을 제공합니다.
							</p>
						</div>
					</div>

					<div class="col-6 login-right">
						<div class="lang-select ms-auto">
							<select class="form-select bg-transparent rounded-0">
								<option value="한국어" selected="">한국어</option>
								<option value="English">English</option>
								<option value="日本語">日本語</option>
								<option value="Tiếng Việt">Tiếng Việt</option>
								<option value="简体中文">简体中文</option>
								<option value="Tagalog">Tagalog</option>
								<option value="ภาษาไทย">ภาษาไทย</option>
							</select>
						</div>

						<span class="login-name">Sign in</span>

						<div class="input-wrap">
							<form action="dashboard/dashboard.php">
								<!--div class="email-wrap mb-3">
									<label for="username">Email</label>
									<input type="email" class="form-control" id="username" placeholder="Email">
								</div-->
								<div class="form-floating mb-3">
									<input type="email" class="form-control" id="username">
									<label for="username">Email</label>
								</div>								
		
								<div class="password-wrap form-floating mb-3">
									<i class="fa fa-eye fa-lg"></i>
									<input type="password" class="form-control" id="userpassword">
									<label for="userpassword">Password</label>
								</div>

								<!--div class="password-wrap mb-3 ">
									<label for="userpassword">Password</label>
									<input type="password" class="form-control" id="userpassword" placeholder="Password">
									<i class="fa fa-eye fa-lg"></i>
								</div-->

								<div class="text-end">
									<div class="form-check form-check-inline m-0 mb-2">    
										<input type="checkbox" class="form-check-input font-size-16" id="remember-check">
										<label class="form-check-label text-gray" for="remember-check">Remember</label>
									</div>
								</div>
		
								<div class="mt-4">
									<button class="btn btn-primary w-md waves-effect waves-light w-100" type="submit">Sign in</button>
								</div>
							</form>
						</div>

						<p class="login-desc text-center mb-0">2023 © Tiger GDS.</p>
					</div>
				</div>
			</div>
        </div>

		<?php include "partials/right-sidebar.php"; ?>
		<?php include "partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			
			$('.password-wrap i').on('click',function(){
				$('input').toggleClass('active');
				if($('input').hasClass('active')){
					$(this).attr('class','fa fa-eye-slash fa-lg').next('input').attr('type','text');
				}else{
					$(this).attr('class','fa fa-eye fa-lg').next('input').attr('type','password');
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
