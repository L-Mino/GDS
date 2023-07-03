<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '위약관리'; include "../../partials/title-meta.php"; ?>
		<?php include "../../partials/head-css.php"; ?>
    </head>

	<?php include "../../partials/body.php"; ?>

        <!-- Begin page -->
        <div id="layout-wrapper">

			<?php include "../../partials/topbar.php"; ?>
			<?php include "../sidebar.php"; ?>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">

					<?php include "../../partials/notice.php"; ?>

                    <div class="container-fluid">

						<!-- start Content -->

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control form-control-em datepicker p-0" placeholder="23.05.01(월)">
											</div>
											<span class="dash">~</span>
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control form-control-em datepicker p-0" placeholder="23.05.31(수)">
											</div>
	
											<div class="form-check form-check-inline search-area ps-0 me-0">
												<input class="form-control" type="text" placeholder="예약자">
												<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
											</div>
	
											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="위약 구분">
													<option value="노쇼">노쇼</option>
													<option value="정상취소">정상취소</option>
													<option value="우천취소">우천취소</option>
													<option value="1일전 취소">1일전 취소</option>
													<option value="2일전 취소">2일전 취소</option>
													<option value="3일전 취소">3일전 취소</option>
													<option value="4일전 취소">4일전 취소</option>
												</select>
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="위약 코드">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
												</select>
											</div>

											<div class="btn-group ms-auto">
												<button class="btn btn-outline-custom" type="button">저장</button>
											</div><!-- /btn-group -->
										</div>

										<div class="row">
											<div class="col-12">
												<div class="table-fixed-head mb-3" data-simplebar>
													<table class="table table-hover text-center w-100 nowrap">
														<colgroup>
															<col style="min-width:70px;">
															<col style="min-width:130px;">
															<col style="min-width:90px;">
															<col style="min-width:90px;">
															<col style="min-width:90px;">
															<col style="min-width:150px;">
															<col style="min-width:150px;">
															<col style="min-width:150px;">
															<col style="min-width:150px;">
															<col style="min-width:200px;">
															<col style="min-width:200px;">
															<col style="min-width:300px; width:300px;">
														</colgroup>
														
														<thead>
															<tr>
																<th>순번</th>
																<th>예약일</th>
																<th>코스
																	<div class="dropdown d-inline-block">
																		<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">EAST IN</button></li>
																			<li><button type="button" class="dropdown-item">EAST OUT</button></li>
																			<li><button type="button" class="dropdown-item">WEST IN</button></li>
																			<li><button type="button" class="dropdown-item">WEST OUT</button></li>
																		</ul>
																	</div>
																</th>
																<th>티타임</th>
																<th>예약자</th>
																<th>연락처</th>
																<th>위약 구분
																	<div class="dropdown d-inline-block">
																		<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">노쇼</button></li>
																			<li><button type="button" class="dropdown-item">정상취소</button></li>
																			<li><button type="button" class="dropdown-item">우천취소</button></li>
																			<li><button type="button" class="dropdown-item">1일전 취소</button></li>
																			<li><button type="button" class="dropdown-item">2일전 취소</button></li>
																			<li><button type="button" class="dropdown-item">3일전 취소</button></li>
																			<li><button type="button" class="dropdown-item">4일전 취소</button></li>
																		</ul>
																	</div>
																</th>
																<th>위약 사유</th>
																<th>위약 코드
																	<div class="dropdown d-inline-block">
																		<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">위약 코드1</button></li>
																			<li><button type="button" class="dropdown-item">위약 코드2</button></li>
																		</ul>
																	</div>
																</th>
																<th>위약 조치</th>
																<th>내장 금지</th>
																<th>비고</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>1</td>
																<td>											
																	<input type="text" class="form-control datepicker p-0 mx-auto" value="04월 04일 (화)">
																</td>
																<td>												
																	<select class="form-select w-auto mx-auto">
																		<option value="EAST IN" selected>EAST IN</option>
																		<option value="EAST OUT">EAST OUT</option>
																		<option value="WEST IN">WEST IN</option>
																		<option value="WEST OUT">WEST OUT</option>
																	</select>
																</td>
																<td>
																	<input type="text" class="form-control text-center p-0 mx-auto" value="11:33">
																</td>
																<td>
																	<input type="text" class="form-control text-center input_w70 p-0 mx-auto" value="홍길동">
																</td>
																<td>
																	<input type="text" class="form-control text-center p-0 mx-auto" value="010-1234-5678">
																</td>
																<td>
																	<select class="form-select w-auto mx-auto">
																		<option value="노쇼" selected>노쇼</option>
																		<option value="정상취소">정상취소</option>
																		<option value="우천취소">우천취소</option>
																		<option value="1일전 취소">1일전 취소</option>
																		<option value="2일전 취소">2일전 취소</option>
																		<option value="3일전 취소">3일전 취소</option>
																		<option value="4일전 취소">4일전 취소</option>
																	</select>
																</td>
																<td>
																	<input type="text" class="form-control text-center p-0 mx-auto" value="개인사정">
																</td>
																<td>
																	<input type="text" class="form-control text-center p-0 mx-auto" value="abdfd">
																</td>
																<td>
																	<input type="text" class="form-control text-center p-0 mx-auto" value="위약금 10만원">
																</td>
																<td>내장 금지 2023.06.20</td>
																<td>음주 만취 인사불성</td>
															</tr>
															<tr>
																<td>2</td>
																<td>04월 04일 (화)</td>
																<td>WEST OUT</td>
																<td>11:33</td>
																<td>홍길동</td>
																<td>010-1234-5678</td>
																<td>노쇼</td>
																<td>개인사정</td>
																<td></td>
																<td>위약금 10만원 입금 확인</td>
																<td>내장 금지 2023.06.20</td>
																<td></td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="d-flex justify-content-end align-items-center pagenation-wrap">
													<label class="d-flex position-relative gap-1 m-0">
														<span class="text-secondary">페이지당 행 수:</span>
														<span class="position-absolute top-0 end-0">
															<svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
																<path d="M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"></path>
															</svg>
														</span>
														<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
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
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88969 0L2.93994 4.94975L7.88969 9.89949L8.95035 8.83883L5.06126 4.94975L8.95035 1.06066L7.88969 0ZM0 10H1.5L1.5 3.89067e-05H0V10Z"/>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="Previous">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M0.351074 5.05054L5.30082 0.100791L6.36148 1.16145L2.47239 5.05054L6.36148 8.93962L5.30082 10.0003L0.351074 5.05054Z"/>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="Next">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6499 4.94971L5.70016 9.89945L4.6395 8.83879L8.52858 4.94971L4.6395 1.06062L5.70016 -3.93408e-05L10.6499 4.94971Z"/>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="NextAll">
																	<span aria-hidden="true">
																		<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M1.28853 10.0002L6.23828 5.0505L1.28854 0.10075L0.227876 1.16141L4.11696 5.0505L0.227875 8.93958L1.28853 10.0002ZM9.17822 -3.91006e-05L7.67822 -3.92318e-05L7.67822 9.99996L9.17822 9.99996L9.17822 -3.91006e-05Z"/>
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
		                <!--//row - 위약관리 -->

						<!-- end Content -->

                    </div><!-- container-fluid -->

                </div><!-- End Page-content -->

				<?php include "../../partials/footer.php"; ?>

            </div><!-- end main content-->

        </div><!-- END layout-wrapper -->

		<?php include "../../partials/right-sidebar.php"; ?>
		<?php include "../../partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			menuActive(2); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
