<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '캐디 / 카트 배치'; include "../partials/title-meta.php"; ?>
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
								<div class="card mb-0"">
									<div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="code-title">캐디 / 카트 배치 기준</span>
                                            <span class="desc ms-auto me-3">최종수정: 2023.06.30 00:00:00</span>
                                            <button type="button" class="btn btn-outline-custom">저장</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <table class="table table-hover text-center w-100 mb-0 nowrap">
                                                    <colgroup>
                                                        <col style="width:40px;">
                                                        <col style="width:auto;">
                                                    </colgroup>

                                                    <thead>
                                                        <tr>
                                                            <th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll"></th>
                                                            <th>기준 인원</th>
                                                            <th>캐디 배치</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>4인 (1Team)</td>
                                                            <td>1 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>4인 (1Team)</td>
                                                            <td>2 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>3인 (1Team)</td>
                                                            <td>1 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>3인 (1Team)</td>
                                                            <td>2 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>2인 (1Team)</td>
                                                            <td>1 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>1인</td>
                                                            <td>1 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="기타"></td>
                                                            <td><input class="form-control text-center" type="text"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-6">
                                                <table class="table table-hover text-center w-100 mb-0 nowrap">
                                                    <colgroup>
                                                        <col style="width:40px;">
                                                        <col style="width:auto;">
                                                    </colgroup>

                                                    <thead>
                                                        <tr>
                                                            <th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll"></th>
                                                            <th>기준 인원</th>
                                                            <th>카트 배치</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>4인 (1Team)</td>
                                                            <td>1 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>4인 (1Team)</td>
                                                            <td>2 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>3인 (1Team)</td>
                                                            <td>1 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>3인 (1Team)</td>
                                                            <td>2 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>2인 (1Team)</td>
                                                            <td>1 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td>1인</td>
                                                            <td>1 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="기타"></td>
                                                            <td><input class="form-control text-center" type="text"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
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
