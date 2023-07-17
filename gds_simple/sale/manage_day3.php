<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '일일 팀 매출 / 관리'; include "../partials/title-meta.php"; ?>
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
										<div class="row">
											<div class="col">
												<div class="d-flex align-items-center flex-wrap gap-2 mb-3">
													<div class="form-check form-check-inline ps-0 me-0">
														<select class="form-select form-select-lg border-0 h-100">
															<option value="2023.05.01 (일)" selected>2023.05.01 (월)</option>
															<option value="2023.05.02 (화)">2023.05.02 (화)</option>
														</select>
													</div>

													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="01">
														<label class="form-check-label" for="01">결제 완료 팀 숨기기</label>
													</div>

													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="02">
														<label class="form-check-label" for="02">팀별</label>
													</div>

													<button type="button" class="btn btn-outline-custom ms-auto">저장</button>
												</div>

												<div class="mb-3" data-simplebar>
													<table class="table table-fixed text-center">
														<colgroup>
															<col style="min-width:60px;">
															<col style="min-width:60px;">
															<col style="min-width:120px;">
															<col style="min-width:50px;">
															<col style="min-width:80px;">
															<col style="min-width:80px;">
															<col style="min-width:80px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:120px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
														</colgroup>

														<thead>
															<tr>
																<th>No</th>
																<th>시간</th>
																<th>코스
																	<div class="dropdown d-inline-block">
																		<button class="btn boarder-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">A</button></li>
																			<li><button type="button" class="dropdown-item">B</button></li>
																		</ul>
																	</div>
																</th>
																<th>홀</th>
																<th>락카</th>
																<th>성명</th>
																<th>단체명
																	<div class="dropdown d-inline-block">
																		<button class="btn boarder-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">클라스A</button></li>
																			<li><button type="button" class="dropdown-item">클라스B</button></li>
																		</ul>
																	</div>
																</th>
																<th>그린피</th>
																<th>카트</th>
																<th>대여료</th>
																<th>프로샵</th>
																<th>대식당</th>
																<th>스타트</th>
																<th>그늘집</th>
																<th>합계</th>
																<th>할인</th>
																<th>결제 완료
																	<div class="dropdown d-inline-block">
																		<button class="btn boarder-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">결제 완료</button></li>
																			<li><button type="button" class="dropdown-item">결제 대기</button></li>
																		</ul>
																	</div>
																</th>
																<th>결제 구분
																	<div class="dropdown d-inline-block">
																		<button class="btn boarder-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">카드</button></li>
																			<li><button type="button" class="dropdown-item">현금</button></li>
																			<li><button type="button" class="dropdown-item">미수</button></li>
																			<li><button type="button" class="dropdown-item">대기</button></li>
																		</ul>
																	</div>
																</th>
															</tr>
														</thead>

														<tbody>
															<tr class="table-stripe">
																<td>1</td>
																<td>07:35</td>
																<td>BO</td>
																<td>18</td>
																<td><input class="form-check-input" type="checkbox"> 245</td>
																<td>홍길동</td>
																<td>클라스</td>
																<td>180,000</td>
																<td>25,000</td>
																<td></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td>205,000</td>
																<td>dfsdf - 50,000</td>
																<td>205,000</td>
																<td>카드</td>
															</tr>
															<tr class="table-stripe">
																<td></td>
																<td></td>
																<td></td>
																<td>18</td>
																<td><input class="form-check-input" type="checkbox"> 275</td>
																<td>홍길동</td>
																<td>클라스</td>
																<td>180,000</td>
																<td>25,000</td>
																<td></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td>205,000</td>
																<td></td>
																<td>205,000</td>
																<td>현금</td>
															</tr>
															<tr class="table-stripe">
																<td></td>
																<td></td>
																<td></td>
																<td>18</td>
																<td><input class="form-check-input" type="checkbox"> 298</td>
																<td>홍길동</td>
																<td>클라스</td>
																<td>180,000</td>
																<td>25,000</td>
																<td></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td>205,000</td>
																<td></td>
																<td></td>
																<td>대기</td>
															</tr>
															<tr class="table-stripe">
																<td></td>
																<td></td>
																<td></td>
																<td>18</td>
																<td><input class="form-check-input" type="checkbox"> 215</td>
																<td>홍길동</td>
																<td>클라스</td>
																<td>180,000</td>
																<td>25,000</td>
																<td></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td>205,000</td>
																<td></td>
																<td></td>
																<td>미수</td>
															</tr>
															<tr class="table-stripe">
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td>720,000</td>
																<td>100,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td>820,000</td>
																<td></td>
																<td>410,000</td>
																<td></td>
															</tr>

															<tr>
																<td>2</td>
																<td>07:35</td>
																<td>BO</td>
																<td>18</td>
																<td><input class="form-check-input" type="checkbox"> 245</td>
																<td>홍길동</td>
																<td>클라스</td>
																<td>180,000</td>
																<td>25,000</td>
																<td></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td>205,000</td>
																<td></td>
																<td>205,000</td>
																<td>카드</td>
															</tr>
															<tr>
																<td></td>
																<td></td>
																<td></td>
																<td>18</td>
																<td><input class="form-check-input" type="checkbox"> 275</td>
																<td>홍길동</td>
																<td>클라스</td>
																<td>180,000</td>
																<td>25,000</td>
																<td></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td>205,000</td>
																<td></td>
																<td>205,000</td>
																<td>현금</td>
															</tr>
															<tr>
																<td></td>
																<td></td>
																<td></td>
																<td>18</td>
																<td><input class="form-check-input" type="checkbox"> 298</td>
																<td>홍길동</td>
																<td>클라스</td>
																<td>180,000</td>
																<td>25,000</td>
																<td></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td>205,000</td>
																<td></td>
																<td></td>
																<td>대기</td>
															</tr>
															<tr>
																<td></td>
																<td></td>
																<td></td>
																<td>18</td>
																<td><input class="form-check-input" type="checkbox"> 215</td>
																<td>홍길동</td>
																<td>클라스</td>
																<td>180,000</td>
																<td>25,000</td>
																<td></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td><input type="text" class="form-control text-center"></td>
																<td>205,000</td>
																<td></td>
																<td></td>
																<td>미수</td>
															</tr>
															<tr>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td>720,000</td>
																<td>100,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td>820,000</td>
																<td></td>
																<td>410,000</td>
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
		                <!--//row - 내장관리 -->

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
			menuActive(3); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
