<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '인원변경 그린피'; include "../partials/title-meta.php"; ?>
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
							<div class="col-12">
								<div class="card">
									<div class="card-body">
                                        <h4 class="card-title">인원변경 그린피 할증</h4>
										<div class="d-flex flex-wrap align-items-center gap-2 my-3">
                                            <span>적용 일자</span>
                                            <div class="form-check form-check-inline ps-0 me-0">
                                                <select class="form-select text-blue fw-semibold border-0 h-100">
                                                    <option value="2023.06.30 (금)" selected>2023.06.30 (금)</option>
                                                    <option value="2023.07.01 (토)">2023.07.01 (토)</option>
                                                </select>
                                            </div>
                                            <span class="text-gray ms-auto me-3">적용 일시: 2023.06.30 00:00:00</span>
											<button type="button" class="btn btn-outline-custom"> 저장</button>
										</div>

                                        <table class="table table-layout-fixed text-center w-100 mb-0">
                                            <thead>
                                                <tr>
                                                    <th>정상 인원</th>
                                                    <th>내장 인원</th>
                                                    <th>1인당 그린피 추가 금액</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td rowspan="3" class="fw-semibold">4인</td>
                                                    <td class="border-bottom-0">3인</td>
                                                    <td class="border-bottom-0">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span>그린피의</span>
                                                            <div class="form-check form-check-inline ps-2 m-0">
                                                                <input class="form-control input_w60 text-center" type="text" value="10">
                                                            </div>
                                                            <span class="ms-2">%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="border-bottom-0">2인</td>
                                                    <td class="border-bottom-0">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span>그린피의</span>
                                                            <div class="form-check form-check-inline ps-2 m-0">
                                                                <input class="form-control input_w60 text-center" type="text" value="20">
                                                            </div>
                                                            <span class="ms-2">%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1인</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span>그린피의</span>
                                                            <div class="form-check form-check-inline ps-2 m-0">
                                                                <input class="form-control input_w60 text-center" type="text" value="20">
                                                            </div>
                                                            <span class="ms-2">%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td rowspan="2" class="fw-semibold">3인</td>
                                                    <td class="border-bottom-0">2인</td>
                                                    <td class="border-bottom-0">
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span>그린피의</span>
                                                            <div class="form-check form-check-inline ps-2 m-0">
                                                                <input class="form-control input_w60 text-center" type="text" value="10">
                                                            </div>
                                                            <span class="ms-2">%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>1인</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span>그린피의</span>
                                                            <div class="form-check form-check-inline ps-2 m-0">
                                                                <input class="form-control input_w60 text-center" type="text" value="20">
                                                            </div>
                                                            <span class="ms-2">%</span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="fw-semibold">2인</td>
                                                    <td>1인</td>
                                                    <td>
                                                        <div class="d-flex justify-content-center align-items-center">
                                                            <span>그린피의</span>
                                                            <div class="form-check form-check-inline ps-2 m-0">
                                                                <input class="form-control input_w60 text-center" type="text" value="20">
                                                            </div>
                                                            <span class="ms-2">%</span>
                                                        </div>
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
			menuActive(9); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
