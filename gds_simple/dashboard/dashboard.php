<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '대시보드'; include "../partials/title-meta.php"; ?>
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
										<div class="d-flex align-items-center flex-wrap gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-lg border-0 h-100">
													<option value="23.06.25 (일)" selected>23.06.25 (일)</option>
													<option value="23.06.26 (월)">23.06.26 (월)</option>
												</select>
											</div>
											
											<span class="fs-16 fw-bold">예약 현황</span>
											
											<span class="dividing-line"></span>
											
											<div class="d-flex align-items-center gap-4">
												<dl class="d-flex mb-0">
													<dt class="me-2">티타임</dt>
													<dd class="mb-0">144</dd>
												</dl>											
												<dl class="d-flex mb-0">
													<dt class="me-2">예약팀</dt>
													<dd class="mb-0">118</dd>
												</dl>
												<dl class="d-flex mb-0">
													<dt class="me-2">잔여팀</dt>
													<dd class="mb-0">26</dd>
												</dl>												
												<dl class="d-flex mb-0">
													<dt class="me-2">내장팀</dt>
													<dd class="mb-0">118</dd>
												</dl>
												<dl class="d-flex mb-0">
													<dt class="me-2">내장인원</dt>
													<dd class="mb-0">467</dd>
												</dl>
												<dl class="d-flex mb-0">
													<dt class="me-2">취소</dt>
													<dd class="mb-0">0</dd>
												</dl>
												<dl class="d-flex mb-0">
													<dt class="me-2">노쇼</dt>
													<dd class="mb-0">0</dd>
													
												</dl>
											</div>
										</div>
										
										<div class="dashboard-wrap" data-simplebar>
											<div class="booking-group d-flex gap-3">
												<div class="booking-area border-box border-bottom-0 table-fixed-head">
													<table class="table text-center mb-0">
														<thead>
															<tr>
																<th colspan="5">EAST IN</th>
															</tr>
															<tr>
																<td></th>
																<td class="fw-normal">티타임</td>
																<td class="fw-normal">예약</td>
																<td class="fw-normal">잔여</td>
																<td class="fw-normal">내장객수</td>
															</tr>
														</thead>

														<tbody>
															<tr>	
																<td class="fw-bold">합계</td>
																<td class="fw-bold">36</td>
																<td class="fw-bold">30 (83.33%)</td>
																<td class="fw-bold">6</td>
																<td class="fw-bold">120</td>
															</tr>
															<tr>
																<td>1부</td>
																<td>18</td>
																<td>18 (100%)</td>
																<td>0</td>
																<td>72</td>
															</tr>
															<tr>
																<td>2부</td>
																<td>18</td>
																<td>12 (66.67%)</td>
																<td>6</td>
																<td>48</td>
															</tr>													
														</tbody>
													</table>
												</div>

												<div class="booking-area border-box border-bottom-0 table-fixed-head">
													<table class="table text-center mb-0">
														<thead>
															<tr>
																<th colspan="5">EAST OUT</th>
															</tr>
															<tr>
																<td></th>
																<td class="fw-normal">티타임</td>
																<td class="fw-normal">예약</td>
																<td class="fw-normal">잔여</td>
																<td class="fw-normal">내장객수</td>
															</tr>
														</thead>

														<tbody>
															<tr>	
																<td class="fw-bold">합계</td>
																<td class="fw-bold">36</td>
																<td class="fw-bold">20 (55.56%)</td>
																<td class="fw-bold">16</td>
																<td class="fw-bold">80</td>
															</tr>
															<tr>
																<td>1부</td>
																<td>18</td>
																<td>12 (66.66%)</td>
																<td>0</td>
																<td>48</td>
															</tr>
															<tr>
																<td>2부</td>
																<td>18</td>
																<td>8 (44.44%)</td>
																<td>6</td>
																<td>32</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="booking-area border-box border-bottom-0 table-fixed-head">
													<table class="table text-center mb-0">
														<thead>
															<tr>
																<th colspan="5">WEST IN</th>
															</tr>
															<tr>
																<td></th>
																<td class="fw-normal">티타임</td>
																<td class="fw-normal">예약</td>
																<td class="fw-normal">잔여</td>
																<td class="fw-normal">내장객수</td>
															</tr>
														</thead>

														<tbody>
															<tr>	
																<td class="fw-bold">합계</td>
																<td class="fw-bold">36</td>
																<td class="fw-bold">36(100%)</td>
																<td class="fw-bold">0</td>
																<td class="fw-bold">140</td>
															</tr>
															<tr>
																<td>1부</td>
																<td>18</td>
																<td>18 (100%)</td>
																<td>0</td>
																<td>72</td>
															</tr>
															<tr>
																<td>2부</td>
																<td>18</td>
																<td>18 (100%)</td>
																<td>0</td>
																<td>68</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="booking-area border-box border-bottom-0 table-fixed-head">
													<table class="table text-center mb-0">
														<thead>
															<tr>
																<th colspan="5">WEST OUT</th>
															</tr>
															<tr>
																<td></th>
																<td class="fw-normal">티타임</td>
																<td class="fw-normal">예약</td>
																<td class="fw-normal">잔여</td>
																<td class="fw-normal">내장객수</td>
															</tr>
														</thead>

														<tbody>
															<tr>	
																<td class="fw-bold">합계</td>
																<td class="fw-bold">36</td>
																<td class="fw-bold">32 (88.89%)</td>
																<td class="fw-bold">4</td>
																<td class="fw-bold">127</td>
															</tr>
															<tr>
																<td>1부</td>
																<td>18</td>
																<td>17 (94.44%)</td>
																<td>1</td>
																<td>68</td>
															</tr>
															<tr>
																<td>2부</td>
																<td>18</td>
																<td>15 (83.33%)</td>
																<td>3</td>
																<td>59</td>
															</tr>
														</tbody>
													</table>
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
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center mb-3">
											<h4 class="card-title">주간 예약 현황</h4>
											
											<div class="d-flex align-items-center gap-2 ms-auto">
												<button type="button" class="bg-transparent border-0"><span class="fc-icon fc-icon-chevrons-left fs-4 text-gray"></span></button>
												<span class="fw-semibold lh-1">23.06.25 ~ 23.07.01</span>												
												<button type="button" class="bg-transparent border-0"><span class="fc-icon fc-icon-chevrons-right fs-4 text-gray"></span></button>												
											</div>
										</div>

										<table class="table text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:125px; width:125px;">
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
													<th>구분</th>
													<th>06.25 (일)</th>
													<th>06.26 (월)</th>
													<th>06.27 (화)</th>
													<th>06.28 (수)</th>
													<th>06.29 (목)</th>
													<th>06.30 (금)</th>
													<th>07.01 (토)</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<th class="ps-0">티타임</th>
													<td>144</td>
													<td>144</td>
													<td>144</td>
													<td>144</td>
													<td>144</td>
													<td>144</td>
													<td>144</td>
												</tr>
												<tr>
													<th class="ps-0">예약 / 예약률</th>
													<td>118 / 81.94%</td>
													<td>124 / 86.11%</td>
													<td>100 / 69.44%</td>
													<td>96 / 66.67%</td>
													<td>86 / 59.72%</td>
													<td>85 / 59.03%</td>
													<td>70 / 48.61%</td>
												</tr>
												<tr>
													<th class="ps-0">잔여</th>
													<td><a href="/gds_simple/front/reservation/booking.php">26</a></td>
													<td><a href="/gds_simple/front/reservation/booking.php">20</a></td>
													<td><a href="/gds_simple/front/reservation/booking.php">44</a></td>
													<td><a href="/gds_simple/front/reservation/booking.php">48</a></td>
													<td><a href="/gds_simple/front/reservation/booking.php">58</a></td>
													<td><a href="/gds_simple/front/reservation/booking.php">57</a></td>
													<td><a href="/gds_simple/front/reservation/booking.php">74</a></td>
												</tr>
												<tr>
													<th class="ps-0">날씨</th>
													<td>
														<div class="py-2">
															<div class="d-flex justify-content-center weather_ico mb-2">
																<span class="weather-am"><img src="/gds_simple/assets/images/weather/cloudy.svg"></span>
																<span class="weather-pm"><img src="/gds_simple/assets/images/weather/sunny.svg"></span>
															</div>
															
															<div class="d-flex justify-content-center weather_temp">
																<span class="temp-am">30°</span>
																<span class="txt-line"></span>
																<span class="temp-pm">25°</span>
															</div>
														</div>
													</td>
													<td>
														<div class="py-2">													
															<div class="d-flex justify-content-center weather_ico mb-2">
																<span class="weather-am"><img src="/gds_simple/assets/images/weather/cloudy.svg"></span>
																<span class="weather-pm"><img src="/gds_simple/assets/images/weather/rainy.svg"></span>
															</div>
															
															<div class="d-flex justify-content-center weather_temp">
																<span class="temp-am">20°</span>
																<span class="txt-line"></span>
																<span class="temp-pm">18°</span>
															</div>
														</div>															
													</td>
													<td>
														<div class="py-2">																										
															<div class="d-flex justify-content-center weather_ico mb-2">
																<span class="weather-am"><img src="/gds_simple/assets/images/weather/cloudy.svg"></span>
																<span class="weather-pm"><img src="/gds_simple/assets/images/weather/snow.svg"></span>
															</div>
															
															<div class="d-flex justify-content-center weather_temp">
																<span class="temp-am">20°</span>
																<span class="txt-line"></span>
																<span class="temp-pm">19°</span>
															</div>
														</div>															
													</td>
													<td>
														<div class="py-2">																										
															<div class="d-flex justify-content-center weather_ico mb-2">
																<span class="weather-am"><img src="/gds_simple/assets/images/weather/rainy.svg"></span>
																<span class="weather-pm"><img src="/gds_simple/assets/images/weather/sunny.svg"></span>
															</div>
															
															<div class="d-flex justify-content-center weather_temp">
																<span class="temp-am">23°</span>
																<span class="txt-line"></span>
																<span class="temp-pm">22°</span>
															</div>
														</div>															
													</td>
													<td>
														<div class="py-2">																										
															<div class="d-flex justify-content-center weather_ico mb-2">
																<span class="weather-am"><img src="/gds_simple/assets/images/weather/cloudy.svg"></span>
																<span class="weather-pm"><img src="/gds_simple/assets/images/weather/sunny.svg"></span>
															</div>
															
															<div class="d-flex justify-content-center weather_temp">
																<span class="temp-am">20°</span>
																<span class="txt-line"></span>
																<span class="temp-pm">27°</span>
															</div>
														</div>															
													</td>
													<td>
														<div class="py-2">																										
															<div class="d-flex justify-content-center weather_ico mb-2">
																<span class="weather-am"><img src="/gds_simple/assets/images/weather/cloudy.svg"></span>
																<span class="weather-pm"><img src="/gds_simple/assets/images/weather/sunny.svg"></span>
															</div>
															
															<div class="d-flex justify-content-center weather_temp">
																<span class="temp-am">24°</span>
																<span class="txt-line"></span>
																<span class="temp-pm">23°</span>
															</div>
														</div>															
													</td>
													<td>
														<div class="py-2">																										
															<div class="d-flex justify-content-center weather_ico mb-2">
																<span class="weather-am"><img src="/gds_simple/assets/images/weather/cloudy.svg"></span>
																<span class="weather-pm"><img src="/gds_simple/assets/images/weather/sunny.svg"></span>
															</div>
															
															<div class="d-flex justify-content-center weather_temp">
																<span class="temp-am">22°</span>
																<span class="txt-line"></span>
																<span class="temp-pm">25°</span>
															</div>
														</div>															
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center mb-3">
											<h4 class="card-title">연도별 매출 분석</h4>
										</div>

										<ul class="nav nav-tabs-custom me-auto" role="tablist">
											<li class="nav-item">
												<a class="nav-link active" data-bs-toggle="tab" href="#annualSales01" role="tab">
													<span>월 매출액</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#annualSales02" role="tab">
													<span>예약률</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#annualSales03" role="tab">
													<span>가동률</span>
												</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-bs-toggle="tab" href="#annualSales04" role="tab">
													<span>내장객 수</span>
												</a>
											</li>											
										</ul>

										<div class="tab-content">
											<div class="tab-pane active" id="annualSales01" role="tabpanel">
												<ul class="chart-info">
													<li>
														<p class="num">1,498,150</p>
														<p class="tit">2021 연간 매출액</p>
													</li>
													<li>
														<p class="num">1,698,150</p>
														<p class="tit">2022 연간 매출액</p>
													</li>
													<li>
														<p class="num">1,798,150</p>
														<p class="tit">2023 연간 매출액</p>
													</li>
													<li>
														<p class="num">+ 3.2% <i class="bx bx-trending-up align-middle font-size-18 text-danger"></i></p>
														<p class="tit">전년대비 증감율</p>
													</li>														
												</ul>

												<div id="annualSalesChart" class="apex-charts" dir="ltr"></div>  
											</div>

											<div class="tab-pane" id="annualSales02" role="tabpanel">

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center mb-3">
											<h4 class="card-title">매출 현황 분석</h4>
											<div class="btn-group ms-auto">
												<button type="button" class="btn btn-outline-custom">일별</button>
												<button type="button" class="btn btn-outline-custom">주별</button>												
												<button type="button" class="btn btn-custom">월별</button>
												<button type="button" class="btn btn-outline-custom">분기별</button>
											</div>
										</div>

										<div id="salesStatusChart" class="apex-charts" dir="ltr"></div>  

										<table class="table table-responsive w-100 text-center nowrap mt-5 mb-0">
											<thead>
												<tr>
													<th style="width:90px;">구분</th>
													<th>1월</th>
													<th>2월</th>
													<th>3월</th>
													<th>4월</th>
													<th>5월</th>
													<th>6월</th>
													<th>7월</th>
													<th>8월</th>
													<th>9월</th>
													<th>10월</th>
													<th>11월</th>
													<th>12월</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<th class="text-blue ps-0">합계</th>
													<td>1,300,000</td>
													<td>5,200,000</td>
													<td>16,000,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
												</tr>
												<tr>
													<th class="ps-0">그린피</th>
													<td>1,300,000</td>
													<td>5,200,000</td>
													<td>16,000,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
												</tr>
												<tr>
													<th class="ps-0">식음</th>
													<td>1,300,000</td>
													<td>5,200,000</td>
													<td>16,000,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
												</tr>
												<tr>
													<th class="ps-0">프로샵</th>
													<td>1,300,000</td>
													<td>5,200,000</td>
													<td>16,000,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
												</tr>
												<tr>
													<th class="ps-0">기타</th>
													<td>1,300,000</td>
													<td>5,200,000</td>
													<td>16,000,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
													<td>5,200,000</td>
												</tr>
											</tbody>
										</table>										

                                        <p class="desc text-end font-size-11 mt-3">(단위: 10,000원)</p>
                                    </div>
								</div>
							</div>
						</div>
		                <!--//row -->

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
														<p class="mb-0 text-danger fw-semibold font-size-14 mt-4">+2.3% <i class="bx bx-trending-up align-middle font-size-18"></i></p>
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
														<p class="mb-0 text-danger fw-semibold font-size-14 mt-4">+1.5% <i class="bx bx-trending-up align-middle font-size-18"></i></p>
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
														<p class="mb-0 text-primary fw-semibold font-size-14 mt-4">-1.5% <i class="bx bx-trending-down align-middlefont-size-18"></i></p>
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
			menuActive(1); //OneDepth

			var options = {
				chart: {
					height: 380,
					type: "line",
					zoom: {
						enabled: !1
					},
					toolbar: {
						show: !1
					}
				},
				colors: ["#FEB137", "#2CB57E", "#0576B9"],
				dataLabels: {
					enabled: !1
				},
				stroke: {
					width: 2,
					curve: "straight"
				},
				series: [
					{
						name: "2021",
						data: [98123, 88123, 78123, 88123, 98123, 108123, 78123, 88123, 98123, 88123, 78123, 88123]
					}, 
					{
						name: "2022",
						data: [116000, 106000, 98123, 101230, 111230, 121230, 98123, 128123, 88123, 108123, 98123, 118123]
					}, 
					{
						name: "2023",
						data: [163000, 153000, 143000, 153000, 163000, 173000, 143000, 153000, 173000, 163000, 133000, 163000]
					}
				],
				grid: {
					show: true,
					row: {
						colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
			            opacity:0.5
			        }
				},
				markers: {
					style: "inverted",
					colors: "#ffffff",
					strokeColors: ["#FEB137", "#2CB57E", "#0576B9"],
					strokeWidth: 3,
					size: 5,
					hover: {
						size: 6
					}
				},
				xaxis: {
					categories: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"]
				},
				yaxis: {
					title: {
						text: "매출액 (단위 : 10000원)"
					},
					labels: {
						formatter: function(val) {
							return Number(val).toLocaleString()
						}
					}					
				},
				legend: {
					show: true,
					itemMargin: {
						horizontal: 15,
						vertical: 5
					}
				},
				tooltip: {
					enabled: true,
					followCursor: true,
					intersect: false,
					inverseOrder: true,
					style: {
						fontSize: '11px'
					},
					onDatasetHover: {
						highlightDataSeries: true,
					},
					x: {
						show: true,
						fontWeight: 600,
						formatter: function (value) {
							return value + "월 매출";
						}
					},
					marker: {
						show: true,
					}
				}
			}, annualSalesChart = new ApexCharts(document.querySelector("#annualSalesChart"), options);
			annualSalesChart.render();

			var options = {
				chart: {
					height: 380,
					type: "line",
					zoom: {
						enabled: !1
					},
					toolbar: {
						show: !1
					}
				},
				colors: ["#6D52BA", "#2CB57E", "#FEB137", "#0576B9", "#74788D"],
				dataLabels: {
					enabled: !1
				},
				stroke: {
					width: 2,
					curve: "straight"
				},
				series: [
					{
						name: "합계",
						data: [263423, 263423, 178123, 188123, 198123, 208123, 178123, 188123, 198123, 188123, 178123, 188123]
					},
					{
						name: "그린피",
						data: [98123, 88123, 78123, 88123, 98123, 108123, 78123, 88123, 98123, 88123, 78123, 88123]
					}, 
					{
						name: "식음",
						data: [60000, 50000, 70000, 80000, 90000, 50000, 60000, 40000, 60000, 50000, 70000, 80000]
					}, 
					{
						name: "프로샵",
						data: [50000, 60000, 40000, 30000, 60000, 40000, 20000, 50000, 60000, 40000, 50000, 20000]
					},
					{
						name: "기타",
						data: [18000, 28000, 18000, 28000, 18000, 38000, 18000, 28000, 18000, 28000, 18000, 38000]
					}					
				],
				grid: {
					show: true,
					row: {
						colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
			            opacity:0.5
			        }
				},
				markers: {
					style: "inverted",
					colors: "#ffffff",
					strokeColors: ["#6D52BA", "#2CB57E", "#FEB137", "#0576B9", "#74788D"],
					strokeWidth: 3,
					size: 5,
					hover: {
						size: 6
					}
				},
				xaxis: {
					categories: ["1월", "2월", "3월", "4월", "5월", "6월", "7월", "8월", "9월", "10월", "11월", "12월"]
				},
				yaxis: {
					title: {
						text: "매출액 (단위 : 10000원)"
					},
					labels: {
						formatter: function(val) {
							return Number(val).toLocaleString()
						}
					}										
				},
				legend: {
					show: true,
					itemMargin: {
						horizontal: 15,
						vertical: 5
					}
				},
				tooltip: {
					enabled: true,
					followCursor: true,
					intersect: false,
					style: {
						fontSize: '11px'
					},
					onDatasetHover: {
						highlightDataSeries: true,
					},
					x: {
						show: true,
						fontWeight: 600,
						formatter: function (value) {
							return value + "월 매출";
						}
					},
					marker: {
						show: true,
					}
				}
			}, salesStatusChart = new ApexCharts(document.querySelector("#salesStatusChart"), options);
			salesStatusChart.render();			


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
				grid: {
					show: true,
					row: {
						colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
			            opacity:0.5
			        }
				},                
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
