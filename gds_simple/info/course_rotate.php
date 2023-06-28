<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '코스 순환'; include "../partials/title-meta.php"; ?>
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
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="d-flex mb-3">
											<h5>코스 순환</h5>
											<button type="button" class="btn btn-outline-custom ms-auto">저장</button>
										</div>
										
										<table class="table table-hover text-center w-100 nowrap">
											<colgroup>
												<col style="width:auto;">
												<col style="width:30px;">
												<col style="width:auto;">
											</colgroup>
											
											<thead>
												<tr>
													<th>전반</th>
													<th></th>
													<th>후반</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>
														<select class="form-select w-auto py-0 mx-auto">
															<option value="코스명1" selected>코스명1</option>
															<option value="코스명2">코스명2</option>
															<option value="코스명3">코스명3</option>
														</select>
													</td>
													<td><i class="bx bxs-right-arrow"></i></td>
													<td>
														<select class="form-select w-auto py-0 mx-auto">
															<option value="코스명1">코스명1</option>
															<option value="코스명2" selected>코스명2</option>
															<option value="코스명3">코스명3</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>
														<select class="form-select w-auto py-0 mx-auto">
															<option value="코스명1">코스명1</option>
															<option value="코스명2" selected>코스명2</option>
															<option value="코스명3">코스명3</option>
														</select>
													</td>
													<td><i class="bx bxs-right-arrow"></i></td>
													<td>
														<select class="form-select w-auto py-0 mx-auto">
															<option value="코스명1">코스명1</option>
															<option value="코스명2">코스명2</option>
															<option value="코스명3" selected>코스명3</option>
														</select>
													</td>
												</tr>
												<tr>
													<td>
														<select class="form-select w-auto py-0 mx-auto">
															<option value="코스명1">코스명1</option>
															<option value="코스명2">코스명2</option>
															<option value="코스명3" selected>코스명3</option>
														</select>
													</td>
													<td><i class="bx bxs-right-arrow"></i></td>
													<td>
														<select class="form-select w-auto py-0 mx-auto">
															<option value="코스명1" selected>코스명1</option>
															<option value="코스명2">코스명2</option>
															<option value="코스명3">코스명3</option>
														</select>
													</td>
												</tr>												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

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
			menuActive(7); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
