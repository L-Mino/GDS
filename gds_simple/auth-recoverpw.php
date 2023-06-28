<?php include "partials/main.php"; ?>

    <head>
		<?php $title = '비밀번호 재설정'; include "partials/title-meta.php"; ?>
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

                <div class="row justify-content-center">
                    <div class="col-12 col-lg-4">
                        <div class="text-center mb-4">
                            <a href="dashboard/dashboard.php" class="auth-logo">
                                <img src="assets/images/logo_login.svg" alt="Logo" height="88">
                            </a>
                        </div>

						<div class="row g-0">
							<div class="col-12">
								<div class="mt-3">
									<div>
										<!--h5>비밀번호 재설정</h5-->
										<!--p class="text-muted">비밀번호 재설정</p-->
									</div>
									
									<div class="pt-3">
										<div class="alert alert-success mb-4" role="alert">
											이메일을 입력하면 지침이 전송됩니다!
										</div>

										<form action="index.html">
		
											<div class="mb-3">
												<label class="fw-semibold" for="useremail">Email</label>
												<input type="email" class="form-control" id="useremail">
											</div>
					
											<div class="mt-4 text-end">
												<button class="btn btn-primary w-md waves-effect waves-light w-100" type="submit">초기화</button>
											</div>
										</form>
									</div>
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

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
