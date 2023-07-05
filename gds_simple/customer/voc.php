<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = 'VOC'; include "../partials/title-meta.php"; ?>
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
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control form-control-em datepicker p-0" placeholder="시작일">
											</div>
											<span class="dash">~</span>
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control form-control-em datepicker p-0" placeholder="종료일">
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="유형 선택">
													<option value="건의">건의</option>
													<option value="칭찬">칭찬</option>
													<option value="불만">불만</option>
												</select>
											</div>	

											<div class="form-check form-check-inline search-area ps-0 me-0">
												<input class="form-control" type="text" placeholder="Search...">
												<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
											</div>

											<button type="button" class="btn btn-outline-custom ms-auto" data-bs-toggle="modal" data-bs-target=".addVocModal">등록</button>
										</div>

										<div class="row">
											<div class="col">
												<table class="table table-layout-fixed text-center w-100 nowrap">
													<colgroup>
														<col style="min-width:80px; width:80px;">
														<col style="min-width:100px; width:100px;">
														<col style="min-width:60px; width:60px;">
														<col style="min-width:100px; width:100px;">
														<col style="min-width:120px; width:120px;">
														<col style="min-width:120px; width:120px;">
														<col style="min-width:80px; width:80px;">
														<col style="min-width:300px; width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>구분</th>
															<th>경기 일자</th>
															<th>시간</th>
															<th>내장자</th>
															<th>유형</th>
															<th>참고 부서</th>
															<th>조치</th>
															<th>회원 말씀</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>1</td>
															<td>23.05.25(월)</td>
															<td>07:00</td>
															<td>홍길동</td>
															<td>불만/캐디</td>
															<td>고객지원(프론트)</td>
															<td>조치완료</td>
															<td class="text-start text-truncate">홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고 </td>
														</tr>
														<tr>
															<td>2</td>
															<td>23.05.25(월)</td>
															<td>07:00</td>
															<td>방길동</td>
															<td>칭찬/식음</td>
															<td>지원팀(식음파트)</td>
															<td><span class="text-primary">미조치</span></td>
															<td class="text-start text-truncate">그늘집 만두가 유명하다고 해서 먹어봤는데 너무 맛있어요!!</td>
														</tr>
														<tr>
															<td>3</td>
															<td>23.05.25(월)</td>
															<td>07:00</td>
															<td>박이순</td>
															<td>건의/코스관리</td>
															<td>고객지원(경기)</td>
															<td>조치완료</td>
															<td class="text-start text-truncate">오늘 이 골프장에 처음 온 골린이지만, 하늘 코스 전체적으로 티박스 잔디가...</td>
														</tr>
														<tr>
															<td>4</td>
															<td>23.05.25(월)</td>
															<td>07:00</td>
															<td>안영미</td>
															<td>건의/식음</td>
															<td>지원팀(식음파트)</td>
															<td><span class="text-primary">미조치</span></td>
															<td class="text-start text-truncate">메뉴에 마라탕이 추가 됐으면 좋겠어요.</td>
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
		                <!--//row -->

						<div class="modal fade addVocModal" tabindex="-1" aria-labelledby="addVocModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addVocModalLabel">VOC 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="d-flex align-items-center">
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control datepicker font-size-16 fw-semibold text-start p-0 border-0 bg-transparent" placeholder="05월 25일 (목)">
											</div>
											<i class="bx bx-calendar font-size-15 ms-1"></i>

											<div class="form-check form-check-inline ps-0 ms-4 me-0">
												<input class="form-control pe-4" type="text" placeholder="홍길동">
												<span class="mdi mdi-magnify position-absolute top-50 start-100 translate-middle pe-4"></span>
											</div>
										</div>
										
										<div class="border-bottom pb-3 mb-3"></div>
										
										<span class="d-inline-block font-size-15 fw-semibold mb-2">고객의 소리</span>
										
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed text-start mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>내장자</th>
														<td>홍길동</td>
														<th>연락처</th>
														<td>010-1234-5678</td>
													</tr>
													<tr>
														<th>회원 번호</th> 
														<td>90-1234-12</td>
														<th>코스/시간</th>
														<td><span>누리</span><span class="ms-3">07:08</span></td>
													</tr>
													<tr class="table-bg-gray">
														<th>유형</th>
														<td>
															<div class="d-flex">
																<select class="form-select flex-fill ps-0">
																	<option value="건의" selected>건의</option>
																	<option value="칭찬">칭찬</option>
																	<option value="불만">불만</option>
																</select>
																<select class="form-select flex-fill ps-0">
																	<option value="코스관리" selected>코스관리</option>
																	<option value="코스관리">코스관리</option>
																	<option value="코스관리">코스관리</option>
																	<option value="코스관리">코스관리</option>
																</select>														
															</div>
														</td>
														<th>참고 부서</th>
														<td>
															<select class="form-select ps-0">
																<option value="고객지원(경기)" selected>고객지원(경기)</option>
																<option value="고객지원(경기)">고객지원(경기)</option>
																<option value="고객지원(경기)">고객지원(경기)</option>
																<option value="고객지원(경기)">고객지원(경기)</option>
															</select>
														</td>
													</tr>												
												</tbody>
											</table>
										</div>
										
										<div class="bg-info-subtle mt-3 p-3">
											<textarea rows="3" class="form-control bg-transparent border-0" style="resize:none;">홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고 그냥 전송하여 스코어 확인 불가.
1234 테블릿 번호 입력하니 유효하지 않다고 나옴.</textarea>
										</div>
										
										<span class="d-inline-block font-size-15 fw-semibold mb-2 mt-4">조치사항</span>
										
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed text-start mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>조치일</th>
														<td>
															<div class="d-flex align-items-center">
																<input type="text" class="form-control datepicker bg-transparent text-start border-0 p-0 flex-fill" placeholder="23.05.02(화)"> <i class="bx bx-calendar font-size-15 pe-12 ms-auto"></i>
															</div>
														</td>
														<th>조치상태</th>
														<td>
															<select class="form-select ps-0">
																<option value="조치대기">조치대기</option>
																<option value="조치중">조치중</option>
																<option value="조치완료" selected>조치완료</option>
															</select>
														</td>
													</tr>
													<tr>
														<th>조치부서</th>
														<td>
															<select class="form-select ps-0">
																<option value="고객지원(경기)" selected>고객지원(경기)</option>
																<option value="고객지원(경기)">고객지원(경기)</option>
															</select>
														</td>
														<th>조치자</th>
														<td>
															<select class="form-select ps-0">
																<option value="김미영 팀장" selected>김미영 팀장</option>
																<option value="김미영 팀장">김미영 팀장</option>
															</select>
														</td>
													</tr>													
												</tbody>
											</table>
										</div>
										
										<div class="bg-info-subtle mt-3 p-3">
											<textarea rows="3" class="form-control bg-transparent border-0" style="resize:none;">죄송합니다. 재방문시 좋은 서비스로 보답하겠습니다.</textarea>
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
						<!-- //modal - addVocModal -->

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
			menuActive(8); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
