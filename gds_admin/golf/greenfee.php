<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '골프장 그린피'; include "../partials/title-meta.php"; ?>
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
										<div class="d-flex align-items-center flex-wrap gap-2 mb-3">
											<h5 class="card-title">360도</h5>
											<div class="d-flex flex-wrap gap-2 ms-auto">
												<a href="#" class="btn btn-sm btn-custom">목록</a>
												<button type="button" class="btn btn-sm btn-custom">수정</button>
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<table class="table table-sm table-bordered align-middle text-center w-100 nowrap mb-0">
													<colgroup>
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th colspan="2">구분</th>
															<th>주중</th>
															<th>토요일</th>
															<th>일요일</th>
															<th>공휴일</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<th rowspan="4">그린피</td>
															<td>정회원</td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
														</tr>
														<tr>
															<td>주중회원</td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
														</tr>
														<tr>
															<td>비회원</td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
														</tr>
														<tr>
															<td>기타</td>
															<td colspan="4"><input type="text" class="form-control"></td>
														</tr>
														<tr>
															<th colspan="2">위약금</td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
															<td><input type="text" class="form-control text-center"></td>
														</tr>
														<tr>
															<th colspan="2">주중 위약내용</td>
															<td colspan="4"><input type="text" class="form-control"></td>
														</tr>
														<tr>
															<th colspan="2">주말 위약내용</td>
															<td colspan="4"><input type="text" class="form-control"></td>
														</tr>
														<tr>
															<th colspan="2">기한 후 취소</td>
															<td colspan="4"><input type="text" class="form-control"></td>
														</tr>
														<tr>
															<th colspan="2">기타사항</td>
															<td colspan="4"><input type="text" class="form-control"></td>
														</tr>
														<tr>
															<th colspan="2">카트피</td>
															<td colspan="4">
																<div class="d-flex align-items-center flex-wrap gap-1">
																	<div class="form-check form-check-inline p-0 m-0">
																		<input type="text" class="form-control w-auto">
																	</div>
																	<span class="ms-2">(</span>
																	<div class="form-check form-check-inline p-0 m-0">
																		<input type="text" class="form-control text-center input_w50">
																	</div>
																	<span>)인승</span>
																</div>
															</td>
														</tr>
														<tr>
															<th colspan="2">캐디피</td>
															<td colspan="4"><input type="text" class="form-control"></td>
														</tr>

														<tr>
															<th colspan="2">비고</td>
															<td colspan="4"><input type="text" class="form-control"></td>
														</tr>
													</tbody>
												</table>

												<div class="golf-copy-list mt-4">
													<div class="row w-100 gap-2 mx-0 mb-2">
														<div class="col text-center">삭제</div>
														<div class="col text-center">@비공개</div>
														<div class="col text-center">360도</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
													</div>
													<div class="row w-100 gap-2 mx-0 mb-2">
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
													</div>
													<div class="row w-100 gap-2 mx-0 mb-2">
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
														<div class="col text-center">700C</div>
													</div>
												</div>
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

				<?php include "../partials/footer.php"; ?>

            </div><!-- end main content-->

        </div><!-- END layout-wrapper -->

		<?php include "../partials/right-sidebar.php"; ?>
		<?php include "../partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			menuActive(3); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
