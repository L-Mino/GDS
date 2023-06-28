<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '단축키 안내'; include "../partials/title-meta.php"; ?>
		<?php include "../partials/head-css.php"; ?>
    </head>

	<?php include "../partials/body.php"; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

			<?php include "../partials/topbar.php"; ?>
			<?php include "sidebar.php"; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">

					<?php include "../partials/notice.php"; ?>

                    <div class="container-fluid">

						<!-- start Content -->

						<div class="row">
							<div class="col-4">
								<div class="card pt-3 pb-4 mb-0"">
									<h4 class="card-title mx-4 mb-3">화면 관련</h4>
									
									<div class="border-top">
										<div class="d-flex justify-content-between align-items-center ps-4 pe-3 py-2 border-bottom">
											<span class="font-size-12">다크 모드</span>
											<div class="d-flex gap-1">
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Shift</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Ctrl</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Alt</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Q</span>
											</div>
										</div>
										
										<div class="d-flex justify-content-between align-items-center ps-4 pe-3 py-2 border-bottom">
											<span class="font-size-12">라이트 모드</span>
											<div class="d-flex gap-1">
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Ctrl</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Alt</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Q</span>
											</div>
										</div>										
									</div>									
								</div>
							</div>
							
							<div class="col-4">
								<div class="card pt-3 pb-4 mb-0"">
									<h4 class="card-title mx-4 mb-3">화면 관련</h4>
									
									<div class="border-top">
										<div class="d-flex justify-content-between align-items-center ps-4 pe-3 py-2 border-bottom">
											<span class="font-size-12">다크 모드</span>
											<div class="d-flex gap-1">
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Shift</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Ctrl</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Alt</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Q</span>
											</div>
										</div>
										
										<div class="d-flex justify-content-between align-items-center ps-4 pe-3 py-2 border-bottom">
											<span class="font-size-12">라이트 모드</span>
											<div class="d-flex gap-1">
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Ctrl</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Alt</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Q</span>
											</div>
										</div>										
									</div>									
								</div>
							</div>
							
							<div class="col-4">
								<div class="card pt-3 pb-4 mb-0"">
									<h4 class="card-title mx-4 mb-3">화면 관련</h4>
									
									<div class="border-top">
										<div class="d-flex justify-content-between align-items-center ps-4 pe-3 py-2 border-bottom">
											<span class="font-size-12">다크 모드</span>
											<div class="d-flex gap-1">
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Shift</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Ctrl</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Alt</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Q</span>
											</div>
										</div>
										
										<div class="d-flex justify-content-between align-items-center ps-4 pe-3 py-2 border-bottom">
											<span class="font-size-12">라이트 모드</span>
											<div class="d-flex gap-1">
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Ctrl</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Alt</span>
												<span class="font-size-11 border rounded-1 border-secondary px-2 py-1">Q</span>
											</div>
										</div>										
									</div>									
								</div>
							</div>							
						</div>
		                <!--//row -  -->

						<!-- end Content -->

                    </div><!-- container-fluid -->

                </div><!-- End Page-content -->

				<!--?php include "../partials/footer.php"; ?-->

            </div><!-- end main content-->

        </div><!-- END layout-wrapper -->

		<?php include "../partials/right-sidebar.php"; ?>
		<?php include "../partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			menuActive(9); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
