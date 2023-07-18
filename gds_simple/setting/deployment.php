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
							<div class="col">
                                <div class="card">
									<div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
                                            <span class="code-title">정산 방법</span>
                                            <span class="desc ms-auto me-3">최종수정: 2023.06.30 00:00:00</span>
                                            <button type="button" class="btn btn-outline-custom">저장</button>
                                        </div>

                                        <div class="row">
                                            <div class="col-6">
                                                <div>
                                                    <table class="table mb-0">
                                                        <colgroup>
                                                            <col style="width:140px;">
                                                            <col style="width:auto;">
                                                        </colgroup>

                                                        <tbody>
                                                            <tr>
                                                                <th class="table-gray">캐디피</th>
                                                                <td class="border-box">
                                                                    <div class="form-check form-check-inline ms-2">
                                                                        <input class="form-check-input holeNumRadio" type="radio" name="caddyRadio" id="caddyRadio01" value="캐디 직접 지급" checked>
                                                                        <label class="form-check-label" for="caddyRadio01">캐디 직접 지급</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input holeNumRadio" type="radio" name="caddyRadio" id="caddyRadio02" value="프론트 통합 정산">
                                                                        <label class="form-check-label" for="caddyRadio02">프론트 통합 정산</label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="">
                                                    <table class="table mb-0">
                                                        <colgroup>
                                                            <col style="width:140px;">
                                                            <col style="width:auto;">
                                                        </colgroup>

                                                        <tbody>
                                                            <tr>
                                                                <th class="table-green">카트피</th>
                                                                <td class="border-box">
                                                                    <div class="form-check form-check-inline ms-2">
                                                                        <input class="form-check-input holeNumRadio" type="radio" name="cartRadio" id="cartRadio01" value="별도 현장지급" checked>
                                                                        <label class="form-check-label" for="cartRadio01">별도 현장지급</label>
                                                                    </div>
                                                                    <div class="form-check form-check-inline">
                                                                        <input class="form-check-input holeNumRadio" type="radio" name="cartRadio" id="cartRadio02" value="프론트 통합 정산">
                                                                        <label class="form-check-label" for="cartRadio2">프론트 통합 정산</label>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>

								<div class="card mb-0">
									<div class="card-body">
                                        <div class="d-flex align-items-center mb-2">
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
                                                            <th><input class="form-check-input tableCheckAll" type="checkbox" id="checkAll"></th>
                                                            <th>기준 인원</th>
                                                            <th>캐디 배치</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>4인 (1Team)</td>
                                                            <td>1 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>4인 (1Team)</td>
                                                            <td>2 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>3인 (1Team)</td>
                                                            <td>1 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>3인 (1Team)</td>
                                                            <td>2 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>2인 (1Team)</td>
                                                            <td>1 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>1인</td>
                                                            <td>1 Caddy</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="기타"></td>
                                                            <td><input class="form-control text-center" type="text"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-6">
                                                <table class="table table-hover text-center table-green w-100 mb-0 nowrap">
                                                    <colgroup>
                                                        <col style="width:40px;">
                                                        <col style="width:auto;">
                                                    </colgroup>

                                                    <thead>
                                                        <tr>
                                                            <th><input class="form-check-input tableCheckAll" type="checkbox" id="checkAll"></th>
                                                            <th>기준 인원</th>
                                                            <th>카트 배치</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>4인 (1Team)</td>
                                                            <td>1 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>4인 (1Team)</td>
                                                            <td>2 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>3인 (1Team)</td>
                                                            <td>1 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>3인 (1Team)</td>
                                                            <td>2 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>2인 (1Team)</td>
                                                            <td>1 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>1인</td>
                                                            <td>1 Cart</td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
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
