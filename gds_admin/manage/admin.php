<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '관리자관리'; include "../partials/title-meta.php"; ?>
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
											<div class="d-flex flex-wrap gap-2 ms-auto">
												<button type="button" class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target=".addAdminModal">등록</button>
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<table class="table table-sm table-bordered align-middle text-center w-100 nowrap">
													<thead>
														<tr>
															<th>ID</th>
															<th>그룹</th>
															<th>이름</th>
															<th>비밀번호</th>
															<th>변경일자</th>
															<th>변경아이디</th>
															<th>비고</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>admin</td>
															<td>												
																<select class="form-select form-select-sm w-auto mx-auto form-control-em">
																	<option value="F">골프 운영자</option>
																	<option value="E">여행 운영자</option>
																	<option value="D">회원 운영자</option>
																	<option value="C">홍보 운영자</option>
																	<option value="B">총괄 운영자</option>
																	<option value="A" selected="">통합관리자</option>
																</select>
															</td>
															<td>
																<div class="form-check form-check-inline ps-0 me-0">
																	<input type="text" class="form-control form-control-sm" value="관리자">
																</div>
															</td>
															<td>
																<div class="form-check form-check-inline ps-0 me-0">
																	<input type="text" class="form-control form-control-sm" value="metagolf11$">
																</div>
															</td>
															<td>2017-02-09</td>
															<td>admin</td>
															<td>
																<div class="d-flex justify-content-center gap-2">
																	<button type="button" class="btn btn-sm btn-custom">수정</button>
																	<button type="button" class="btn btn-sm btn-custom">삭제</button>
																</div>
															</td>
														</tr>
													</tbody>
												</table>

												<div class="d-flex justify-content-end align-items-center pagenation-wrap">
													<label class="d-flex position-relative gap-1 m-0">
														<span class="text-secondary">페이지당 행 수:</span>
														<span class="position-absolute top-0 end-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
																<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path>
															</svg>
														</span>
														<select class="form-select form-select-sm perpage-select w-auto py-0 pe-3 border-0">
															<option value="10" selected="">10</option>
															<option value="25">25</option>
															<option value="50">50</option>
															<option value="100">100</option>
														</select>
													</label>
													
													<span class="text-secondary ms-4 me-3 mb-0">1개 중 1~1</span>

													<nav aria-label="Page navigation">	
														<ul class="pagination justify-content-end my-0">
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="PreviousAll">
																	<span aria-hidden="true">
																		<svg width="9" height="10" viewBox="0 0 9 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88969 0L2.93994 4.94975L7.88969 9.89949L8.95035 8.83883L5.06126 4.94975L8.95035 1.06066L7.88969 0ZM0 10H1.5L1.5 3.89067e-05H0V10Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="Previous">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M0.351074 5.05054L5.30082 0.100791L6.36148 1.16145L2.47239 5.05054L6.36148 8.93962L5.30082 10.0003L0.351074 5.05054Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="Next">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6499 4.94971L5.70016 9.89945L4.6395 8.83879L8.52858 4.94971L4.6395 1.06062L5.70016 -3.93408e-05L10.6499 4.94971Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="NextAll">
																	<span aria-hidden="true">
																		<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M1.28853 10.0002L6.23828 5.0505L1.28854 0.10075L0.227876 1.16141L4.11696 5.0505L0.227875 8.93958L1.28853 10.0002ZM9.17822 -3.91006e-05L7.67822 -3.92318e-05L7.67822 9.99996L9.17822 9.99996L9.17822 -3.91006e-05Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -  -->

						<div class="modal fade addAdminModal" tabindex="-1" aria-labelledby="addAdminModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addAdminModalLabel">팀추가</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<table class="table table-sm align-middle table-layout-fixed mb-0">
											<colgroup>
												<col style="width:90px;">
												<col style="width:auto">
											</colgroup>
											
											<tbody>
												<tr>
													<th class="text-end">관리자 그룹</th>
													<td>
														<select class="form-select">
															<option value="F" selected>골프 운영자</option>
															<option value="E">여행 운영자</option>
															<option value="D">회원 운영자</option>
															<option value="C">홍보 운영자</option>
															<option value="B">총괄 운영자</option>
															<option value="A">통합관리자</option>
														</select>
													</td>
												</tr>
												<tr>
													<th class="text-end">관리자 ID</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">관리자 이름</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">비밀번호</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">비밀번호 확인</th>
													<td><input type="text" class="form-control"></td>
												</tr>
											</tbody>	
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-custom">등록</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - addAdminModal -->

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
			menuActive(1); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
