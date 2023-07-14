<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '사용자 등록 / 권한'; include "../partials/title-meta.php"; ?>
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
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<h4 class="card-title me-auto">사용자 등록</h4>
											<div class="btn-group">
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".addRegistModal">등록</button>
											</div><!-- /btn-group -->
										</div>

										<div class="row">
											<div class="col-12">
												<table class="table table-layout-fixed w-100 text-center nowrap">
													<colgroup>
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="min-width:130px; width:130px;">
													</colgroup>

													<thead>
														<tr>
															<th>ID(EMAIL)</th>
															<th>그룹</th>
															<th>이름</th>
															<th>비밀번호</th>
															<th>부서</th>
															<th>직급</th>
															<th>연락처</th>
															<th>비고</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>admin01@gmail.com</td>
                                                            <td>
																<select class="form-select w-auto mx-auto">
																	<option value="통합관리자" selected>통합관리자</option>
																	<option value="어드민">어드민</option>
																</select>
                                                            </td>
                                                            <td>
																<input type="text" class="form-control text-center p-0 mx-auto" value="이승민">
															</td>
                                                            <td>
																<input type="text" class="form-control text-center p-0 mx-auto" value="비밀번호">
															</td>
                                                            <td>
																<select class="form-select w-auto mx-auto">
																	<option value="프론트01" selected>프론트01</option>
																	<option value="프론트02">프론트02</option>
																</select>
                                                            </td>
                                                            <td>
																<select class="form-select w-auto mx-auto">
																	<option value="차장" selected>차장</option>
																	<option value="과장">과장</option>
																</select>
                                                            </td>
                                                            <td>
																<input type="text" class="form-control text-center p-0 mx-auto" value="010-1234-4567">
															</td>
                                                            <td>
																<div class="d-flex justify-content-center gap-2">
																	<button type="button" class="btn btn-outline-custom">수정</button>
																	<button type="button" class="btn btn-outline-custom">삭제</button>
																</div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>admin02@gmail.com</td>
                                                            <td>
																<select class="form-select w-auto mx-auto">
																	<option value="통합관리자">통합관리자</option>
																	<option value="어드민" selected>어드민</option>
																</select>
                                                            </td>
                                                            <td>
																<input type="text" class="form-control text-center p-0 mx-auto" value="이아현">
															</td>
                                                            <td>
																<input type="text" class="form-control text-center p-0 mx-auto" value="비밀번호">
															</td>
                                                            <td>
																<select class="form-select w-auto mx-auto">
																	<option value="프론트01" selected>프론트01</option>
																	<option value="프론트02">프론트02</option>
																</select>
                                                            </td>
                                                            <td>
																<select class="form-select w-auto mx-auto">
																	<option value="차장" selected>차장</option>
																	<option value="과장">과장</option>
																</select>
                                                            </td>
                                                            <td>
																<input type="text" class="form-control text-center p-0 mx-auto" value="010-1234-4567">
															</td>
                                                            <td>
																<div class="d-flex justify-content-center gap-2">
																	<button type="button" class="btn btn-outline-custom">수정</button>
																	<button type="button" class="btn btn-outline-custom">삭제</button>
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
														<select class="form-select form-select-sm perpage-select w-auto py-0 pe-3 ">
															<option value="10" selected>10</option>
															<option value="25">25</option>
															<option value="50">50</option>
															<option value="100">100</option>
														</select>
													</label>

													<span class="text-secondary ms-4 me-3 mb-0">1개 중 1~1</span>

													<nav aria-label="Page navigation">
														<ul class="pagination justify-content-end my-0">
															<li class="page-item">
																<a class="page-link  py-0" href="javascript:void(0);" aria-label="PreviousAll">
																	<span aria-hidden="true">
																		<svg width="9" height="10" viewBox="0 0 9 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88969 0L2.93994 4.94975L7.88969 9.89949L8.95035 8.83883L5.06126 4.94975L8.95035 1.06066L7.88969 0ZM0 10H1.5L1.5 3.89067e-05H0V10Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link  py-0" href="javascript:void(0);" aria-label="Previous">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M0.351074 5.05054L5.30082 0.100791L6.36148 1.16145L2.47239 5.05054L6.36148 8.93962L5.30082 10.0003L0.351074 5.05054Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link  py-0" href="javascript:void(0);" aria-label="Next">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6499 4.94971L5.70016 9.89945L4.6395 8.83879L8.52858 4.94971L4.6395 1.06062L5.70016 -3.93408e-05L10.6499 4.94971Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link  py-0" href="javascript:void(0);" aria-label="NextAll">
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
		                <!--//row -->

						<div class="modal fade addRegistModal" tabindex="-1" aria-labelledby="addRegistModalModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-md">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addRegistLabel">사용자 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="border-box">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:120px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr class="table-bg-gray">
														<th class="text-end">그룹 선택</th>
														<td>
															<select class="form-select">
																<option value="그룹 선택" selected>그룹 선택</option>
																<option value="통합관리자">통합관리자</option>
																<option value="어드민">어드민</option>
															</select>
														</td>
													</tr>
													<tr>
														<th class="text-end">이름</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end">부서</th>
														<td>
															<select class="form-select">
																<option value="부서 선택" selected>부서 선택</option>
																<option value="프론트">프론트</option>
																<option value="프론트02">프론트02</option>
															</select>
														</td>
													</tr>
													<tr>
														<th class="text-end">직급</th>
														<td>
															<select class="form-select">
																<option value="직급 선택" selected>직급 선택</option>
																<option value="차장">차장</option>
																<option value="과장">과장</option>
															</select>
														</td>
													</tr>
													<tr>
														<th class="text-end">ID(EMAIL)</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end">연락처</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end">비밀번호</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end ">비밀번호 확인</th>
														<td class="">
															<input type="text" class="form-control">
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-custom">등록</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - addRegistModal -->

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
