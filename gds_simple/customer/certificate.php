<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '증명서 발급'; include "../partials/title-meta.php"; ?>
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
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
												</select>
											</div>

											<div class="form-check form-check-inline search-area ps-0 me-0">
												<input class="form-control" type="text" placeholder="Search...">
												<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
											</div>

											<div class="d-flex flex-wrap gap-2 ms-auto">
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="offcanvas" data-bs-target="#certificate" aria-controls="certificate">등록</button>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<table class="table table-layout-fixed text-center w-100 nowrap">
													<colgroup>
														<col style="width:80px;">
														<col style="min-width:60px;">
														<col style="min-width:100px;">
														<col style="min-width:80px;">
														<col style="min-width:100px;">
														<col style="min-width:100px;">
														<col style="min-width:80px;">
														<col style="min-width:200px; width:200px;">
														<col style="min-width:100px;">
														<col style="width:120px;">
													</colgroup>

													<thead>
														<tr>
															<th>구분</th>
															<th>발생일자</th>
															<th>유형</th>
															<th>성명</th>
															<th>회원번호</th>
															<th>예약코스</th>
															<th>예약시간</th>
															<th>동반자명</th>
															<th>캐디명</th>
															<th>증명서</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>1</td>
															<td>23.05.25(월)</td>
															<td>이글</td>
															<td>홍길동</td>
															<td>11-1234-56</td>
															<td>하늘</td>
															<td>08:00</td>
															<td>박윤규 최원석 김채원</td>
															<td>하민</td>
															<td><button type="button" class="btn btn-outline-custom">조회</button> <button type="button" class="btn btn-outline-custom">발급</button></td>
														</tr>
														<tr>
															<td>2</td>
															<td>23.05.25(월)</td>
															<td>홀인원</td>
															<td>김길동</td>
															<td>41-1234-56</td>
															<td>하늘</td>
															<td>08:12</td>
															<td>최태규 안이원 박민지</td>
															<td>안이수</td>
															<td><button type="button" class="btn btn-outline-custom">조회</button> <button type="button" class="btn btn-outline-custom">발급</button></td>
														</tr>
														<tr>
															<td>3</td>
															<td>23.05.25(월)</td>
															<td>이글</td>
															<td>윤미정</td>
															<td>13-1234-56</td>
															<td>누리</td>
															<td>08:12</td>
															<td>김미연 김하리 홍길순</td>
															<td>박돌비</td>
															<td><button type="button" class="btn btn-outline-custom">조회</button> <button type="button" class="btn btn-outline-custom">발급</button></td>
														</tr>
														<tr>
															<td>4</td>
															<td>23.05.25(월)</td>
															<td>홀인원</td>
															<td>백승훈</td>
															<td>50-1234-56</td>
															<td>누리</td>
															<td>08:32</td>
															<td>홍길동 장원영 이채민</td>
															<td>안지수</td>
															<td><button type="button" class="btn btn-outline-custom">조회</button> <button type="button" class="btn btn-outline-custom">발급</button></td>
														</tr>
														<tr>
															<td>5</td>
															<td>23.05.25(월)</td>
															<td>홀인원</td>
															<td>박제춘</td>
															<td>32-1234-56</td>
															<td>누리</td>
															<td>08:32</td>
															<td>박금자 조이수 안은지</td>
															<td>최태영</td>
															<td><button type="button" class="btn btn-outline-custom">조회</button> <button type="button" class="btn btn-outline-custom">발급</button></td>
														</tr>
														<tr>
															<td>6</td>
															<td>23.05.25(월)</td>
															<td>홀인원</td>
															<td>장만덕</td>
															<td>90-1234-56</td>
															<td>하늘</td>
															<td>08:36</td>
															<td>윤창원 이이선 이나라</td>
															<td>김민지</td>
															<td><button type="button" class="btn btn-outline-custom">조회</button> <button type="button" class="btn btn-outline-custom">발급</button></td>
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

						<div class="offcanvas offcanvas-end w-auto" tabindex="-1" id="certificate" aria-labelledby="certificateLabel">
							<div class="offcanvas-header pb-0">
								<h5 id="CollectiveRegistrationLabel">이글 증명서</h5>
								<!--button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button-->
								<div class="d-flex flex-wrap justify-content-end gap-2">
									<button type="button" class="btn btn-outline-custom ms-auto">발급</button>
									<button type="button" class="btn btn-outline-custom" data-bs-dismiss="offcanvas" aria-label="Close">닫기</button>
								</div>
							</div>
							<div class="offcanvas-body">
								<img src="/gds_simple/assets/images/temp/certificate_sample.svg" class="border">
							</div>
						</div>
						<!-- //offcanvas - certificate -->

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
