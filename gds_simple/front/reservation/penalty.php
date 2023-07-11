<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '위약 관리'; include "../../partials/title-meta.php"; ?>
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
										<h4 class="card-title mb-3">위약 관리</h4>
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control form-control-em datepicker p-0" placeholder="23.05.01 (월)">
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
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="상태">
													<option value="입금 요청">입금 요청</option>
													<option value="입금 대기">입금 대기</option>
													<option value="입금 완료">예약 금지</option>
													<option value="예약 금지">예약 금지</option>
												</select>
											</div>

											<div class="btn-group ms-auto">
												<button class="btn btn-outline-custom" type="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">등록</button>
											</div><!-- /btn-group -->
										</div>

										<div class="row">
											<div class="col-12">
												<!-- <div class="table-fixed-head mb-3" data-simplebar> -->
												<div class="table-responsive table-fixed-head mb-3">
													<table class="table table-hover text-center w-100 nowrap">
														<colgroup>
															<col style="min-width:70px;">
															<col style="min-width: 100px;">
															<col style="min-width: 100px;">
															<col style="min-width: 60px;">
															<col style="min-width: 80px;">
															<col style="min-width: 120px;">
															<col style="min-width: 100px;">
															<col style="min-width: 100px;">
															<col style="min-width:265px; width:265px;">
															<col style="min-width:165px; width:165px;">
														</colgroup>														

														<thead>
															<tr>
																<th>순번</th>
																<th>예약일</th>
																<th>코스
																	<!--div class="dropdown d-inline-block">
																		<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">EAST IN</button></li>
																			<li><button type="button" class="dropdown-item">EAST OUT</button></li>
																			<li><button type="button" class="dropdown-item">WEST IN</button></li>
																			<li><button type="button" class="dropdown-item">WEST OUT</button></li>
																		</ul>
																	</div-->
																</th>
																<th>티타임</th>
																<th>예약자</th>
																<th>연락처</th>
																<th>위약 구분
																	<!--div class="dropdown d-inline-block">
																		<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">노쇼</button></li>
																			<li><button type="button" class="dropdown-item">정상 취소</button></li>
																			<li><button type="button" class="dropdown-item">우천 취소</button></li>
																			<li><button type="button" class="dropdown-item">1일전 취소</button></li>
																			<li><button type="button" class="dropdown-item">2일전 취소</button></li>
																			<li><button type="button" class="dropdown-item">3일전 취소</button></li>
																			<li><button type="button" class="dropdown-item">4일전 취소</button></li>
																		</ul>
																	</div-->
																</th>
																<th>위약 사유</th>
																<th>위약 조치</th>
																<th>비고</th>
															</tr>
														</thead>

														<tbody>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>9</td>
																<td>23.07.11 (화)</td>
																<td>WEST OUT</td>
																<td>11:33</td>
																<td>김미란</td>
																<td>010-1234-5678</td>
																<td>노쇼</td>
																<td>기타</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">위약금 30%<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">130,000</div>
																		<div class="col text-end"><span class="status-complete">입금 완료</span></div>
																	</div>
																</td>
																<td></td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>8</td>
																<td>23.07.11 (화)</td>
																<td>WEST IN</td>
																<td>11:33</td>
																<td>장원석</td>
																<td>010-1234-5678</td>
																<td>노쇼</td>
																<td>개인 사유</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">위약금 50%<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">150,000</div>
																		<div class="col text-end"><span class="status-request">입금 요청</span></div>
																	</div>
																</td>
																<td></td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>7</td>
																<td>23.07.11 (화)</td>
																<td>WEST OUT</td>
																<td>10:33</td>
																<td>이현</td>
																<td>010-1234-5678</td>
																<td>우천 취소</td>
																<td>일정 변경</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">예약금지 1M<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">23.08.10 (목)</div>
																		<div class="col text-end"><span class="status-noreserv">예약 금지</span></div>
																	</div>
																</td>
																<td></td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>6</td>
																<td>23.07.11 (화)</td>
																<td>WEST IN</td>
																<td>10:33</td>
																<td>박기수</td>
																<td>010-1234-5678</td>
																<td>1일전 취소</td>
																<td>티타임 변경</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">예약금지 2M<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">23.09.09 (토)</div>
																		<div class="col text-end"><span class="status-noreserv">예약 금지</span></div>
																	</div>
																</td>
																<td>블랙리스트</td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>5</td>
																<td>23.07.11 (화)</td>
																<td>WEST IN</td>
																<td>10:33</td>
																<td>정근석</td>
																<td>010-1234-5678</td>
																<td>2일전 취소</td>
																<td>일정 변경</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">예약금지 3M<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">23.10.09 (월)</div>
																		<div class="col text-end"><span class="status-noreserv">예약 금지</span></div>
																	</div>
																</td>
																<td></td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>4</td>
																<td>23.07.11 (화)</td>
																<td>WEST IN</td>
																<td>10:33</td>
																<td>양미리</td>
																<td>010-1234-5678</td>
																<td>3일전 취소</td>
																<td>사고</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">위약금 10<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">100,000</div>
																		<div class="col text-end"><span class="status-request">입금 요청</span></div>
																	</div>
																</td>
																<td></td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>3</td>
																<td>23.07.11 (화)</td>
																<td>WEST OUT</td>
																<td>09:05</td>
																<td>박성일</td>
																<td>010-1234-5678</td>
																<td>4일전 취소</td>
																<td>개인 사유</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">위약금 20<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">200,000</div>
																		<div class="col text-end"><span class="status-waiting">입금 요청</span></div>
																	</div>
																</td>
																<td>블랙리스트</td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>2</td>
																<td>23.07.11 (화)</td>
																<td>WEST OUT</td>
																<td>09:05</td>
																<td>안지은</td>
																<td>010-1234-5678</td>
																<td>정상 취소</td>
																<td>개인 사유</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">위약금 30<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">300,000</div>
																		<div class="col text-end"><span class="status-waiting">입금 대기</span></div>
																	</div>
																</td>
																<td>음주 만취 인사불성</td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".penaltyRegistModal">
																<td>1</td>
																<td>23.07.11 (화)</td>
																<td>WEST OUT</td>
																<td>09:05</td>
																<td>박성일</td>
																<td>010-1234-5678</td>
																<td>노쇼</td>
																<td>개인 사유</td>
																<td>
																	<div class="d-flex align-items-center gap-2">
																		<div class="col-4 position-relative">위약금 30<span class="txt-line position-absolute top-50 start-100 translate-middle m-0 ms-1"></span></div>
																		<div class="col-4">300,000</div>
																		<div class="col text-end"><span class="status-complete">입금 완료</span></div>
																	</div>
																</td>
																<td>음주 만취 인사불성</td>
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

						<div class="modal fade penaltyRegistModal" tabindex="-1" aria-labelledby="penaltyRegistModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="penaltyRegistModalLabel">위약 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="d-flex border-bottom pb-3">
											<div class="d-flex align-items-center justify-content-between">
												<div class="form-check form-check-inline ps-0 me-0">
													<input type="text" class="form-control datepicker text-start border-0 bg-transparent fw-semibold font-size-16 p-0" placeholder="23.07.11 (화)">
												</div>
												<i class="bx bx-calendar font-size-15 me-4"></i>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<span class="d-inline-block fw-semibold font-size-15 mt-3 mb-2">위약 사항</span>
												<div class="border-box border-bottom-0 mb-2">
													<table class="table table-layout-fixed mb-0">
														<colgroup>
															<col style="width:100px;">
															<col style="width:auto;">
															<col style="width:100px;">
															<col style="width:auto;">
														</colgroup>

														<tbody>
															<tr>
																<th>예약자</th>
																<td><span class="ps-10">홍길동</span></td>
																<th>연락처</th>
																<td><span class="ps-10">010-1234-5678</span></td>
															</tr>
															<tr>
																<th>회원 번호</th>
																<td><span class="ps-10">90-1234-12</span></td>
																<th>코스 / 시간</th>
																<td><span class="ps-10">WEST OUT</span><span class="ms-3">11:33</span></td>
															</tr>
															<tr>
																<th>위약 구분</th>
																<td>
																	<select class="form-select">
																		<option value="정상 취소" selected>정상 취소</option>
																		<option value="우천 취소">우천 취소</option>
																		<option value="1일전 취소">1일전 취소</option>
																		<option value="2일전 취소">2일전 취소</option>
																		<option value="3일전 취소">3일전 취소</option>
																		<option value="4일전 취소">4일전 취소</option>
																	</select>
																</td>
																<th>위약 사유</th>
																<td>
																	<select class="form-select">
																		<option value="우천 취소" selected>우천 취소</option>
																		<option value="개인 사정">개인 사정</option>
																		<option value="일정 변경">일정 변경</option>
																		<option value="사고">사고</option>
																		<option value="기타">기타</option>
																	</select>																	
																</td>
															</tr>															
														</tbody>
													</table>
												</div>
												<textarea class="form-control textarea-bg border-0 p-3" rows="4" style="resize:none;">음주 만취 인사불성</textarea>

												<span class="d-inline-block fw-semibold font-size-15 mt-4 mb-2">조치 사항</span>
												<div class="border-box border-bottom-0 mb-2">
													<table class="table table-layout-fixed mb-0">
														<colgroup>
															<col style="width:100px;">
															<col style="width:auto;">
															<col style="width:100px;">
															<col style="width:auto;">
														</colgroup>

														<tbody>
															<tr class="table-bg-gray">
																<th>위약 조치</th>
																<td>
																	<div class="row w-100">
																		<div class="col-9">
																			<select class="form-select w-auto">
																				<option value="위약금 30" selected>위약금 30</option>
																				<option value="위약금 20">위약금 20</option>
																				<option value="위약금 10">위약금 10</option>
																				<option value="예약금지 3M">예약금지 3M</option>
																				<option value="예약금지 2M">예약금지 2M</option>
																				<option value="예약금지 1M">예약금지 1M</option>
																				<option value="위약금 50%">위약금 50%</option>
																				<option value="위약금 30%">위약금 30%</option>
																			</select>
																		</div>
																		<div class="col-3 text-end">
																			<span class="d-inline-block align-text-top text-blue pt-1">300,000</span>
																		</div>
																	</div>
																</td>
																<th>조치 현황</th>
																<td>
																	<select class="form-select">
																		<option value="입금 요청" selected>입금 요청</option>
																		<option value="입금 대기">입금 대기</option>
																		<option value="입금 완료">입금 완료</option>
																		<option value="예약 금지">예약 금지</option>
																	</select>
																</td>
															</tr>
															<tr>
																<th>입금액</th>
																<td><input class="form-control" type="text" value="300,000"></td>
																<th>위약금 입금일</th>
																<td>
																	<div class="d-flex align-items-center justify-content-between">
																		<div class="form-check form-check-inline ps-0 me-0">
																			<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="23.07.11 (화)">
																		</div>
																		<i class="bx bx-calendar font-size-15 ms-1 me-2"></i>
																	</div>
																</td>
															</tr>
															<tr>
																<th>입금 비고</th>
																<td><input class="form-control" type="text" value="현금 계산"></td>
																<th>위약 해제일</th>
																<td>
																	<div class="d-flex align-items-center justify-content-between">
																		<div class="form-check form-check-inline ps-0 me-0">
																			<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="23.07.11 (화)">
																		</div>
																		<i class="bx bx-calendar font-size-15 ms-1 me-2"></i>
																	</div>
																</td>
															</tr>															
														</tbody>
													</table>
												</div>
												<textarea class="form-control textarea-bg border-0 p-3" rows="4" style="resize:none;">블랙 리스트</textarea>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<div class="d-flex justify-content-between align-items-center w-100 m-0">
											<p class="desc">등록일 : 2023/04/10 09:00:18 | 등록자 : 고객지원(경기) / 홍길동 팀장</p>
											<div class="d-flex gap-2">
												<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
												<button type="button" class="btn btn-custom">저장</button>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - 위약 등록 -->

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
