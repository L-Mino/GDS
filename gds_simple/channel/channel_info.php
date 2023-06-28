<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '채널별 예약 현황'; include "../partials/title-meta.php"; ?>
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
										<div class="d-flex align-items-center"">
											<h4 class="card-title">월별 채널 예약현황 조회</h4>
											<div class="form-check form-check-inline align-top me-0">
												<select class="form-select font-size-16 fw-semibold text-primary">
													<option value="2023.05" selected="">2023.05</option>
													<option value="2023.04">2023.04</option>
													<option value="2023.03">2023.03</option>
													<option value="2023.02">2023.01</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title mb-4">채널 TOP3</h4>

										<div class="row">
											<div class="col">
												<div class="d-flex justify-content-start gap-4">
													<div>
														<p class="font-size-13 mb-2">골프존</p>
														<h4 class="font-size-18">$486.257</h4>
													</div>
													<div class="pt-1">
														<p class="mb-0 text-danger fw-semibold font-size-14 mt-4">+2.3% <i class="bx bx-trending-up font-size-18"></i></p>
													</div>
													<div class="ms-2">
														<div id="chart-sparkline1" dir="ltr"></div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="d-flex justify-content-center gap-4">
													<div>
														<p class="font-size-13 mb-2">카카오</p>
														<h4 class="font-size-18">$280.526</h4>
													</div>
													<div class="pt-1">
														<p class="mb-0 text-danger fw-semibold font-size-14 mt-4">+1.5% <i class="bx bx-trending-up font-size-18"></i></p>
													</div>
													<div class="ms-2">
														<div id="chart-sparkline2" dir="ltr"></div>
													</div>
												</div>
											</div>
											<div class="col">
												<div class="d-flex justify-content-end gap-4">
													<div>
														<p class="font-size-13 mb-2">네이버</p>
														<h4 class="font-size-18">$280.526</h4>
													</div>
													<div class="pt-1">
														<p class="mb-0 text-primary fw-semibold font-size-14 mt-4">-1.5% <i class="bx bx-trending-down font-size-18"></i></p>
													</div>
													<div class="ms-2">
														<div id="chart-sparkline3" dir="ltr"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

						<div class="row mb-4">
							<div class="col-5">
								<div class="card h-100">
									<div class="card-body">
										<h4 class="card-title mb-5">채널별 점유율</h4>

                                        <div id="donut-chart" class="apex-charts" dir="ltr"></div>
									</div>
								</div>
							</div>

							<div class="col-7">
								<div class="card h-100">
									<div class="card-body">
										<div class="d-flex justify-content-between align-items-end mb-4">
											<h4 class="card-title">기간별 채널 현황</h4>
											<span class="font-size-11 text-muted">(매출액 단위:천 원)</span>
										</div>

										<div id="analytics-chart" class="apex-charts" dir="ltr"></div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body py-0">
										<div class="row">
											<div class="col-7 px-2 py-4">
												<h4 class="card-title">글로벌 예약 현황</h4>
												<div id="sales-by-locations" style="height:245px;"></div>
											</div>

											<div class="col-5 py-5 ps-5 pe-1 border-start">
												<div class="pe-4" style="max-height:245px;" data-simplebar>
													<p class="mb-1">한국 <span class="float-end">$123,521.62</span></p>
													<div class="progress mt-2" style="height: 6px;">
														<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="75">
														</div>
													</div>

													<p class="mt-3 mb-1">일본 <span class="float-end">$13,521.62</span></p>
													<div class="progress mt-2" style="height: 6px;">
														<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="55">
														</div>
													</div>

													<p class="mt-3 mb-1">말레이시아 <span class="float-end">$13,521.62</span></p>
													<div class="progress mt-2" style="height: 6px;">
														<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
														</div>
													</div>

													<p class="mt-3 mb-1">베트남 <span class="float-end">$13,521.62</span></p>
													<div class="progress mt-2" style="height: 6px;">
														<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
														</div>
													</div>

													<p class="mt-3 mb-1">태국<span class="float-end">$13,521.62</span></p>
													<div class="progress mt-2" style="height: 6px;">
														<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
														</div>
													</div>

													<p class="mt-3 mb-1">태국<span class="float-end">$13,521.62</span></p>
													<div class="progress mt-2" style="height: 6px;">
														<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
														</div>
													</div>

													<p class="mt-3 mb-1">태국<span class="float-end">$13,521.62</span></p>
													<div class="progress mt-2" style="height: 6px;">
														<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="85">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

						<div class="row">
							<div class="col">
								<div class="card mb-0">
									<div class="card-body">
										<h4 class="card-title mb-3">예약 내역</h4>

										<div class="w-100">
											<div class="row">
												<div class="col">
													<table class="table table-fixed text-center">
														<thead>
															<tr>
																<th colspan="8">골프장</th>
															</tr>
															<tr>
																<th>예약일</th>
																<th>예약건수</th>
																<th>매출액</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td><span class="fw-bold">합계</span></td>
																<td><span class="fw-bold">90건</span></td>
																<td><span class="fw-bold">740,736</span></td>
															</tr>
															<tr>
																<td>05.01(월)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.02(화)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.03(수)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.04(목)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.05(금)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.06(토)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="col">
													<table class="table table-fixed text-center">
														<thead>
															<tr>
																<th colspan="8">카카오</th>
															</tr>
															<tr>
																<th>예약일</th>
																<th>예약건수</th>
																<th>매출액</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td><span class="fw-bold">합계</span></td>
																<td><span class="fw-bold">90건</span></td>
																<td><span class="fw-bold">740,736</span></td>
															</tr>
															<tr>
																<td>05.01(월)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.02(화)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.03(수)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.04(목)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.05(금)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.06(토)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="col">
													<table class="table table-fixed text-center">
														<thead>
															<tr>
																<th colspan="8">네이버</th>
															</tr>
															<tr>
																<th>예약일</th>
																<th>예약건수</th>
																<th>매출액</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td><span class="fw-bold">합계</span></td>
																<td><span class="fw-bold">90건</span></td>
																<td><span class="fw-bold">740,736</span></td>
															</tr>
															<tr>
																<td>05.01(월)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.02(화)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.03(수)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.04(목)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.05(금)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.06(토)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="col">
													<table class="table table-fixed text-center">
														<thead>
															<tr>
																<th colspan="8">골팡</th>
															</tr>
															<tr>
																<th>예약일</th>
																<th>예약건수</th>
																<th>매출액</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td><span class="fw-bold">합계</span></td>
																<td><span class="fw-bold">90건</span></td>
																<td><span class="fw-bold">740,736</span></td>
															</tr>
															<tr>
																<td>05.01(월)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.02(화)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.03(수)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.04(목)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.05(금)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.06(토)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="col">
													<table class="table table-fixed text-center">
														<thead>
															<tr>
																<th colspan="8">골프존</th>
															</tr>
															<tr>
																<th>예약일</th>
																<th>예약건수</th>
																<th>매출액</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td><span class="fw-bold">합계</span></td>
																<td><span class="fw-bold">90건</span></td>
																<td><span class="fw-bold">740,736</span></td>
															</tr>
															<tr>
																<td>05.01(월)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.02(화)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.03(수)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.04(목)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.05(금)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
															<tr>
																<td>05.06(토)</td>
																<td>15건</td>
																<td>123,456</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>

										<ul class="nav nav-pills border-top pt-4 mt-3 mb-3" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-bs-toggle="tab" href="#tab01" role="tab">
													<span class="d-none d-sm-block">전체</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#tab02" role="tab">
													<span class="d-none d-sm-block">골프존</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#tab03" role="tab">
													<span class="d-none d-sm-block">골팡</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#tab04" role="tab">
													<span class="d-none d-sm-block">네이버</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#tab05" role="tab">
													<span class="d-none d-sm-block">카카오</span>
												</a>
											</li>
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="tab01" role="tabpanel">
												<table class="table w-100 nowrap text-center">
													<thead>
														<tr>
															<th>구분</th>
															<th>
																<a href="javascript:void(0);">예약일</a>
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
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">A</button></li>
																		<li><button type="button" class="dropdown-item">B</button></li>
																	</ul>
																</div>
															</th>
															<th>시간</th>
															<th>예약자명</th>
															<th>연락처</th>
															<th>인원
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">4</button></li>
																		<li><button type="button" class="dropdown-item">3</button></li>
																		<li><button type="button" class="dropdown-item">2</button></li>
																		<li><button type="button" class="dropdown-item">1</button></li>
																	</ul>
																</div>
															</th>
															<th>결제 관리
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																	</ul>
																</div>
															</th>
															<th>적용 그린피
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																	</ul>
																</div>
															</th>
															<th>예약 메모</th>
															<th>접수일시</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>05.01(월)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>05.02(화)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>05.03(수)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>05.04(목)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>05.05(금)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>05.06(토)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
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

											<div class="tab-pane" id="tab02" role="tabpanel">
												<table class="table w-100 nowrap text-center">
													<thead>
														<tr>
															<th>구분</th>
															<th>
																<a href="javascript:void(0);">예약일</a>
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
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">A</button></li>
																		<li><button type="button" class="dropdown-item">B</button></li>
																	</ul>
																</div>
															</th>
															<th>시간</th>
															<th>예약자명</th>
															<th>연락처</th>
															<th>인원
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">4</button></li>
																		<li><button type="button" class="dropdown-item">3</button></li>
																		<li><button type="button" class="dropdown-item">2</button></li>
																		<li><button type="button" class="dropdown-item">1</button></li>
																	</ul>
																</div>
															</th>
															<th>결제 관리
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																	</ul>
																</div>
															</th>
															<th>적용 그린피
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																	</ul>
																</div>
															</th>
															<th>예약 메모</th>
															<th>접수일시</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>05.01(월)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>05.02(화)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>05.03(수)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>05.04(목)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>05.05(금)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>05.06(토)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
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

											<div class="tab-pane" id="tab03" role="tabpanel">
												<table class="table w-100 nowrap text-center">
													<thead>
														<tr>
															<th>구분</th>
															<th>
																<a href="javascript:void(0);">예약일</a>
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
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">A</button></li>
																		<li><button type="button" class="dropdown-item">B</button></li>
																	</ul>
																</div>
															</th>
															<th>시간</th>
															<th>예약자명</th>
															<th>연락처</th>
															<th>인원
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">4</button></li>
																		<li><button type="button" class="dropdown-item">3</button></li>
																		<li><button type="button" class="dropdown-item">2</button></li>
																		<li><button type="button" class="dropdown-item">1</button></li>
																	</ul>
																</div>
															</th>
															<th>결제 관리
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																	</ul>
																</div>
															</th>
															<th>적용 그린피
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																	</ul>
																</div>
															</th>
															<th>예약 메모</th>
															<th>접수일시</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>05.01(월)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>05.02(화)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>05.03(수)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>05.04(목)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>05.05(금)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>05.06(토)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
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

											<div class="tab-pane" id="tab04" role="tabpanel">
												<table class="table w-100 nowrap text-center">
													<thead>
														<tr>
															<th>구분</th>
															<th>
																<a href="javascript:void(0);">예약일</a>
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
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">A</button></li>
																		<li><button type="button" class="dropdown-item">B</button></li>
																	</ul>
																</div>
															</th>
															<th>시간</th>
															<th>예약자명</th>
															<th>연락처</th>
															<th>인원
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">4</button></li>
																		<li><button type="button" class="dropdown-item">3</button></li>
																		<li><button type="button" class="dropdown-item">2</button></li>
																		<li><button type="button" class="dropdown-item">1</button></li>
																	</ul>
																</div>
															</th>
															<th>결제 관리
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																	</ul>
																</div>
															</th>
															<th>적용 그린피
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																	</ul>
																</div>
															</th>
															<th>예약 메모</th>
															<th>접수일시</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>05.01(월)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>05.02(화)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>05.03(수)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>05.04(목)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>05.05(금)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>05.06(토)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
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

											<div class="tab-pane" id="tab05" role="tabpanel">
												<table class="table w-100 nowrap text-center">
													<thead>
														<tr>
															<th>구분</th>
															<th>
																<a href="javascript:void(0);">예약일</a>
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
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">A</button></li>
																		<li><button type="button" class="dropdown-item">B</button></li>
																	</ul>
																</div>
															</th>
															<th>시간</th>
															<th>예약자명</th>
															<th>연락처</th>
															<th>인원
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">4</button></li>
																		<li><button type="button" class="dropdown-item">3</button></li>
																		<li><button type="button" class="dropdown-item">2</button></li>
																		<li><button type="button" class="dropdown-item">1</button></li>
																	</ul>
																</div>
															</th>
															<th>결제 관리
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																		<li><button type="button" class="dropdown-item">800,000</button></li>
																	</ul>
																</div>
															</th>
															<th>적용 그린피
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																	</ul>
																</div>
															</th>
															<th>예약 메모</th>
															<th>접수일시</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>6</td>
                                                            <td>05.01(월)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>5</td>
                                                            <td>05.02(화)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>4</td>
                                                            <td>05.03(수)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>05.04(목)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>05.05(금)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>05.06(토)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>홍길동</td>
                                                            <td>010-1234-5678</td>
                                                            <td>4</td>
															<td>800,000</td>
                                                            <td>155,000</td>
                                                            <td>GX/2일</td>
                                                            <td>05-20 16:35:03</td>
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
		                <!--//row -->

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
			menuActive(6); //OneDepth

			var sparklineoptions1 = {
				series: [{
					data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
				}],
				chart: {
					type: "area",
					width: 120,
					height: 55,
					sparkline: {
						enabled: !0
					}
				},
				fill: {
					type: "gradient",
					gradient: {
						shadeIntensity: 1,
						inverseColors: !1,
						opacityFrom: .45,
						opacityTo: .05,
						stops: [20, 100, 100, 100]
					}
				},
				stroke: {
					curve: "smooth",
					width: 2
				},
				colors: ["#F6512C"],
				tooltip: {
					fixed: {
						enabled: !1
					},
					x: {
						show: !1
					},
					y: {
						title: {
							formatter: function(e) {
								return ""
							}
						}
					},
					marker: {
						show: !1
					}
				}
			},sparklinechart1 = new ApexCharts(document.querySelector("#chart-sparkline1"), sparklineoptions1);
			sparklinechart1.render();

			sparklineoptions1 = {
				series: [{
					data: [65, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14]
				}],
				chart: {
					type: "area",
					width: 120,
					height: 45,
					sparkline: {
						enabled: !0
					}
				},
				fill: {
					type: "gradient",
					gradient: {
						shadeIntensity: 1,
						inverseColors: !1,
						opacityFrom: .45,
						opacityTo: .05,
						stops: [20, 100, 100, 100]
					}
				},
				stroke: {
					curve: "smooth",
					width: 2
				},
				colors: ["#F6512C"],
				tooltip: {
					fixed: {
						enabled: !1
					},
					x: {
						show: !1
					},
					y: {
						title: {
							formatter: function(e) {
								return ""
							}
						}
					},
					marker: {
						show: !1
					}
				}
			};
			(sparklinechart1 = new ApexCharts(document.querySelector("#chart-sparkline2"), sparklineoptions1)).render();

			sparklineoptions1 = {
				series: [{
					data: [12, 75, 2, 47, 42, 15, 47, 75, 65, 19, 14]
				}],
				chart: {
					type: "area",
					width: 120,
					height: 45,
					sparkline: {
						enabled: !0
					}
				},
				fill: {
					type: "gradient",
					gradient: {
						shadeIntensity: 1,
						inverseColors: !1,
						opacityFrom: .45,
						opacityTo: .05,
						stops: [20, 100, 100, 100]
					}
				},
				stroke: {
					curve: "smooth",
					width: 2
				},
				colors: ["#0576b9"],
				tooltip: {
					fixed: {
						enabled: !1
					},
					x: {
						show: !1
					},
					y: {
						title: {
							formatter: function(e) {
								return ""
							}
						}
					},
					marker: {
						show: !1
					}
				}
			};
			(sparklinechart1 = new ApexCharts(document.querySelector("#chart-sparkline3"), sparklineoptions1)).render();

			var options = {
				series: [70.2, 10, 11, 5, 3.8],
				chart: {
					height:360,
					type: "donut"
				},
				labels: ["골프장", "카카오", "네이버", "골팡", "골프존"],
				plotOptions: {
					pie: {
						donut: {
							size: "60%"
						}
					}
				},
				legend: {
					position: "bottom",
					itemMargin: {
						horizontal: 10,
						vertical: 0
					},
					markers: {
						width: 12,
						height: 12,
						strokeWidth: 0,
						strokeColor: '#fff',
						fillColors: undefined,
						radius: 12,
						customHTML: undefined,
						onClick: undefined,
						offsetX: 0,
						offsetY: 100
					}
				},
				colors: ["#0576B9", "#F5BD58", "#2CB57E", "#F56E50", "#B9B9B9"]
			},
			chart = new ApexCharts(document.querySelector("#donut-chart"), options);
			chart.render();

			options = {
				chart: {
					height: 350,
					type: "line",
					toolbar: {
						show: !1
					}
				},
				colors: ["#0576B9", "#4ABF90"],
				series: [{
						name: "매출액",
						type: "column",
						data: [440, 505, 414, 671, 227]
					}, {
						name: "예약건수",
						type: "line",
						data: [23, 42, 35, 27, 43]
				}],
				stroke: {
					width: [0, 2]
				},
				markers: {
					colors: "#ffffff",
					strokeColors: "#4ABF90",
					strokeWidth: 2,
					size: 4,
					hover: {
						size: 6
					}
				},
				labels: ["골프장", "골프존", "카카오", "네이버", "골팡"],
				xaxis: {
					tooltip: {
						enabled: false,
					}						
				},
				yaxis: [{
						title: {
							text: "매출액",
						},
					}, {
						opposite: true,
						title: {
							text: "예약건수"
						}
					}
				]
			},
			chart = new ApexCharts(document.querySelector("#analytics-chart"), options);
			chart.render();

			var bookingData = {
				"KR": 16.63,
				"JP": 11.58,
				"MY": 158.97,
				"VN": 158.97,
				"TH": 158.97
			};

			$("#sales-by-locations").vectorMap({
				map: "world_mill_en",
				normalizeFunction: "polynomial",
				hoverOpacity: .7,
				hoverColor: !1,
				regionStyle: {
					initial: {
						fill: "#dee5f1"
					}
				},
				markerStyle: {
					initial: {
						r: 6,
						fill: "#0066A3",
						//"fill-opacity": .9,
						stroke: "#2793D2",
						"stroke-width": 2,
						//"stroke-opacity": .4
					},
					hover: {
						stroke: "#2793D2",
						"fill-opacity": 1,
						"stroke-width": 1.5
					}
				},
				backgroundColor: "transparent",
				markers: [{
						latLng: [37.56667, 126.97806],
						name: "한국"
					}, {
						latLng: [35.6894875, 139.6917064],
						name: "일본"
					}, {
						latLng: [4.210484, 101.975766],
						name: "말레이시아"
					}, {
						latLng: [21.0090571, 105.8607507],
						name: "베트남"
					}, {
						latLng: [13.7474567, 100.5540311],
						name: "태국"
				}],
				onRegionTipShow: function(e, el, code){
					el.html(el.html()+' (GDP - '+bookingData[code]+')');
				}
			});

			$(window).on("resize", function() {
				$("#sales-by-locations").vectorMap().updateSize();
			});
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
