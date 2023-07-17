<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '일 매출 현황'; include "../partials/title-meta.php"; ?>
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
															<option value="23.07.01 (월)" selected>23.07.01 (월)</option>
															<option value="23.07.02 (화)">23.07.02 (화)</option>
														</select>
													</div>

                                                    <p class="desc ms-auto">기준 시간: 2023.07.17 17:00:00</p>
												</div>


                                                <table class="table table-fixed text-center">
                                                    <thead>
                                                        <tr>
                                                            <th>구분</th>
                                                            <th>일 매출</th>
                                                            <th>카드</th>
                                                            <th>현금</th>
                                                            <th>기타</th>
                                                            <th>미수</th>
                                                            <th>미정산</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <th class="ps-0">합계</th>
                                                            <td class="fw-semibold text-primary">23,178,000</td>
                                                            <td class="fw-semibold">22,000,000</td>
                                                            <td class="fw-semibold">418,000</td>
                                                            <td class="fw-semibold">100,000</td>
                                                            <td class="fw-semibold">0</td>
                                                            <td class="fw-semibold text-danger">660,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0">그린피</th>
                                                            <td>20,100,000</td>
                                                            <td>19,470,000</td>
                                                            <td>200,000</td>
                                                            <td>100,000</td>
                                                            <td>0</td>
                                                            <td>330,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0">캐디피</th>
                                                            <td>1,078,000</td>
                                                            <td>530,000</td>
                                                            <td>218,000</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>330,000</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0">카트피</th>
                                                            <td>1,200,000</td>
                                                            <td>1,200,000</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0">식음</th>
                                                            <td>700,000</td>
                                                            <td>580,000</td>
                                                            <td>0</td>
                                                            <td>120,000</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="ps-0">프로샵</th>
                                                            <td>100,000</td>
                                                            <td>100,000</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                            <td>0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="table table-fixed text-center">
                                                    <thead>
                                                        <tr>
                                                            <th><input class="form-check-input tableCheckAll" type="checkbox"></th>
                                                            <th>No</th>
                                                            <th>시간</th>
                                                            <th>코스</th>
                                                            <th>홀</th>
                                                            <th>성명</th>
                                                            <th>단체명</th>
                                                            <th>미수금액</th>
                                                            <th>결제금액</th>
                                                            <th>합계</th>
                                                            <th>할인액</th>
                                                            <th>그린피</th>
                                                            <th>카트피</th>
                                                            <th>식음</th>
                                                            <th>프로샵</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>2</td>
                                                            <td>06:50</td>
                                                            <td>WI</td>
                                                            <td>18</td>
                                                            <td>홍길동</td>
                                                            <td>클라스</td>
                                                            <td>185,000</td>
                                                            <td>0</td>
                                                            <td class="text-primary">185,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>양길동</td>
                                                            <td>클라스</td>
                                                            <td>185,000</td>
                                                            <td>185,000</td>
                                                            <td class="text-primary">185,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>권길동</td>
                                                            <td>클라스</td>
                                                            <td>185,000</td>
                                                            <td>185,000</td>
                                                            <td class="text-primary">185,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>장길동</td>
                                                            <td>클라스</td>
                                                            <td>185,000</td>
                                                            <td>185,000</td>
                                                            <td class="text-primary">185,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="table-bg-gray">
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="fw-semibold text-danger">770,000</td>
                                                            <td class="fw-semibold">0</td>
                                                            <td class="fw-semibold text-primary">770,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-check-input tableCheck" type="checkbox"></td>
                                                            <td>1</td>
                                                            <td>06:50</td>
                                                            <td>WI</td>
                                                            <td>18</td>
                                                            <td>이호민</td>
                                                            <td>클라스</td>
                                                            <td>185,000</td>
                                                            <td>0</td>
                                                            <td class="text-primary">185,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>장길화</td>
                                                            <td>클라스</td>
                                                            <td>185,000</td>
                                                            <td>185,000</td>
                                                            <td class="text-primary">185,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>김소원</td>
                                                            <td>클라스</td>
                                                            <td>185,000</td>
                                                            <td>185,000</td>
                                                            <td class="text-primary">185,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>함지원</td>
                                                            <td>클라스</td>
                                                            <td>185,000</td>
                                                            <td>185,000</td>
                                                            <td class="text-primary">185,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr class="table-bg-gray">
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td class="fw-semibold text-danger">770,000</td>
                                                            <td class="fw-semibold">0</td>
                                                            <td class="fw-semibold text-primary">770,000</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
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
