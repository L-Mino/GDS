<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '할인 내역 관리'; include "../../partials/title-meta.php"; ?>
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
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
													<div class="form-check form-check-inline p-0 m-0">
														<select class="form-select form-select-lg" required="">
															<option value="D +7" selected="">D +7</option>
															<option value="오늘">오늘</option>
															<option value="이번 주">이번 주</option>
															<option value="이번 달">이번 달</option>
														</select>
													</div>

													<div class="form-check form-check-inline ps-0 me-0">
														<input type="text" class="form-control form-control-sm datepicker form-control-em p-0" placeholder="시작일">
													</div>
													<span class="dash">~</span>
													<div class="form-check form-check-inline ps-0 me-0">
														<input type="text" class="form-control form-control-sm datepicker form-control-em p-0" placeholder="종료일">
													</div>
													
													<div class="form-check form-check-inline search-area ps-0 me-0">
														<input class="form-control" type="text" placeholder="Search...">
														<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
													</div>
												</div>

												<table class="table table-fixed text-center">
													<colgroup>
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>No</th>
															<th>예약일
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li>
																			<div class="dropdown-item">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" id="teetimeday01" value="전체">
																					<label class="form-check-label w-100" for="teetimeday01">전체</label>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="dropdown-item">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" id="teetimeday02" value="월">
																					<label class="form-check-label w-100" for="teetimeday02">월</label>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="dropdown-item">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" id="teetimeday03" value="화">
																					<label class="form-check-label w-100" for="teetimeday03">화</label>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="dropdown-item">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" id="teetimeday04" value="수">
																					<label class="form-check-label w-100" for="teetimeday04">수</label>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="dropdown-item">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" id="teetimeday05" value="목">
																					<label class="form-check-label w-100" for="teetimeday05">목</label>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="dropdown-item">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" id="teetimeday06" value="금">
																					<label class="form-check-label w-100" for="teetimeday06">금</label>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="dropdown-item">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" id="teetimeday07" value="토">
																					<label class="form-check-label w-100" for="teetimeday07">토</label>
																				</div>
																			</div>
																		</li>
																		<li>
																			<div class="dropdown-item">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox" id="teetimeday08" value="일">
																					<label class="form-check-label w-100" for="teetimeday08">일</label>
																				</div>
																			</div>
																		</li>
																	</ul>
																</div>
															</th>
															<th>시간</th>
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">코스 A</button></li>
																		<li><button type="button" class="dropdown-item">코스 B</button></li>
																	</ul>
																</div>
															</th>
															<th>홀</th>
															<th>내장객</th>
															<th>성별</th>
															<th>단체명
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">단체명 A</button></li>
																		<li><button type="button" class="dropdown-item">단체명 B</button></li>
																	</ul>
																</div>
															</th>
															<th>할인 코드
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">할인 코드 A</button></li>
																		<li><button type="button" class="dropdown-item">할인 코드 B</button></li>
																	</ul>
																</div>
															</th>
															<th>할인 금액</th>
															<th>비고</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>1</td>
															<td>22.08.22</td>
															<td>11:45</td>
															<td>하늘</td>
															<td>18홀</td>
															<td>홍아아</td>
															<td>남</td>
															<td>클라스</td>
															<td>tesetk</td>
															<td>1,455</td>
															<td></td>
														</tr>
														<tr>
															<td>2</td>
															<td>22.08.22</td>
															<td>11:45</td>
															<td>누리</td>
															<td>18홀</td>
															<td>이정숙</td>
															<td>여</td>
															<td>클라스</td>
															<td>tesetk</td>
															<td>1,455</td>
															<td></td>
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
