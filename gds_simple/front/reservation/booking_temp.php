<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '예약 현황'; include "../../partials/title-meta.php"; ?>
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
									<div class="card-body py-2">
										<div class="d-flex align-items-center flex-wrap gap-2">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-lg border-0 h-100">
													<option value="2023.05.01 (일)" selected>2023.05.01 (월)</option>
													<option value="2023.05.02 (화)">2023.05.02 (화)</option>
												</select>
											</div>

											<div class="dropdown d-inline-block align-top">
												<button class="btn btn-sm align-top dropdown-line-height p-0 dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="true">코스 선택 <i class="mdi mdi-chevron-down fa-lg ico_lg lh-1 ms-2"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark select_course" data-popper-placement="bottom-start">
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_course01" value="전체">
																<label class="form-check-label w-100" for="select_course01">전체</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_course02" value="EAST IN">
																<label class="form-check-label w-100" for="select_course02">EAST IN</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_course03" value="EAST OUT">
																<label class="form-check-label w-100" for="select_course03">EAST OUT</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_course04" value="WEST IN">
																<label class="form-check-label w-100" for="select_course04">WEST IN</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_course05" value="WEST OUT">
																<label class="form-check-label w-100" for="select_course05">WEST OUT</label>
															</div>
														</div>
													</li>
												</ul>
											</div>

											<div class="dropdown d-inline-block align-top">
												<button class="btn btn-sm align-top dropdown-line-height p-0 dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="true">티타임 선택 <i class="mdi mdi-chevron-down fa-lg ico_lg lh-1 ms-2"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark select_course" data-popper-placement="bottom-start">
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_teetime01" value="전체">
																<label class="form-check-label w-100" for="select_teetime01">전체</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_teetime02" value="1부">
																<label class="form-check-label w-100" for="select_teetime02">1부</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_teetime03" value="2부">
																<label class="form-check-label w-100" for="select_teetime03">2부</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_teetime04" value="3부">
																<label class="form-check-label w-100" for="select_teetime04">3부</label>
															</div>
														</div>
													</li>
												</ul>
											</div>

											<!--div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-sm h-100">
													<option value="코스 전체" selected>코스 전체</option>
													<option value="EAST IN">EAST IN</option>
													<option value="EAST OUT">EAST OUT</option>
													<option value="WEST IN">WEST IN</option>
													<option value="WEST OUT">WEST OUT</option>
												</select>
											</div>

											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-sm h-100">
													<option value="티타임 전체" selected>티타임 전체</option>
													<option value="1부">1부</option>
													<option value="2부">2부</option>
													<option value="3부">3부</option>
												</select>
											</div-->

											<div class="form-check form-check-inline col-1 ps-0 me-0">
												<input class="form-control form-control-sm pe-4" type="text" placeholder="Search...">
												<span class="mdi mdi-magnify position-absolute top-50 start-100 translate-middle pe-4"></span>
											</div>

											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="Unreserved" checked>
												<label class="form-check-label" for="Unreserved">미예약</label>
											</div>

											<div class="d-flex flex-wrap gap-2 ms-auto">
												<button type="button" class="btn btn-sm btn-outline-dark">예약문자</button>
												<button type="button" class="btn btn-sm btn-dark">SMS</button>
												<button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target=".addTeamModal">팀추가</button>
												<button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target=".standbyModal">예약대기</button>
												<button type="button" class="btn btn-sm btn-primary">복사/이동</button>
												<button type="button" class="btn btn-sm btn-primary">예약가능</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
								
						<div class="row">
							<div class="booking-left">
								<div class="card h-100">
									<div class="row">
										<div class="col">
											<table class="table table-fixed text-center table-hover">
												<thead>
													<tr>
														<th class="col-4 fw-normal">예약일</th>
														<th class="col fw-normal">TOT</th>
														<th class="col fw-normal">예약</th>
														<th class="col fw-normal">대기</th>
														<th class="col fw-normal">날씨</th>
													</tr>
												</thead>

												<tbody>
													<tr class="bg-success text-white">
														<td><a href="javascript:void(0);">05.01 (월)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.02 (화)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.03 (수)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.04 (목)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.05 (금)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.06 (<span class="text-primary">토</span>)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.07 (<span class="text-danger">일</span>)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.08 (월)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.09 (화)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.10 (수)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.11 (목)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.12 (금)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.13 (<span class="text-primary">토</span>)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.14 (<span class="text-danger">일</span>)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.15 (월)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.16 (화)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.17 (수)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.18 (목)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.19 (금)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.20 (<span class="text-primary">토</span>)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.21 (<span class="text-danger">일</span>)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.22 (월)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.23 (화)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.24 (수)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.25 (목)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.26 (금)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.27 (<span class="text-primary">토</span>)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.28 (<span class="text-danger">일</span>)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.29 (월)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
													<tr>
														<td><a href="javascript:void(0);">05.30 (화)</a></td>
														<td>156</td>
														<td>156</td>
														<td><a href="javascript:void(0);">1</a></td>
														<td><i class="bi bi-cloud-drizzle"></i></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>

							<div class="booking-right" >
								<div class="card h-100">
									<div class="card-body">
										<div class="row booking-group">
											<div>
												<table class="table table-fixed text-center">
													<thead>
														<tr>
															<th colspan="8">누리</th>
														</tr>
														<tr>
															<th class="fw-normal">시간</th>
															<th class="fw-normal">성명</th>
															<th class="fw-normal">요금</th>
															<th class="fw-normal">단체팀</th>
															<th class="fw-normal">예약메모</th>
															<th class="fw-normal">C</th>
															<th class="fw-normal">CH</th>
														</tr>
													</thead>

													<tbody>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678"></span></td>
															<td>160</td>
															<td></td>
															<td></td>
															<td>J</td>
															<td></td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:58</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678"></span></td>
															<td>160</td>
															<td></td>
															<td></td>
															<td>p</td>
															<td></td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>BA</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td></td>
															<td></td>
															<td>BB</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td></td>
															<td class="table-danger">VVIP</td>
															<td></td>
															<td></td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td></td>
															<td class="table-danger">VVIP</td>
															<td></td>
															<td></td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>CA</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>CB</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td class="table-info">클라스</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td class="table-info">클라스</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td class="table-info">클라스</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr class="table-disabled">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td colspan="6">예약불가</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>P</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div>
												<table class="table table-fixed text-center">
													<thead class="table-warning">
														<tr>
															<th colspan="8">하늘</th>
														</tr>
														<tr>
															<th class="fw-normal">시간</th>
															<th class="fw-normal">성명</th>
															<th class="fw-normal">요금</th>
															<th class="fw-normal">단체팀</th>
															<th class="fw-normal">예약메모</th>
															<th class="fw-normal">C</th>
															<th class="fw-normal">CH</th>
														</tr>
													</thead>

													<tbody>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>p</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td></td>
															<td>N</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td class="table-info">클라스</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td class="table-info">클라스</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td class="table-info">클라스</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td class="table-info">클라스</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td></td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td></td>
															<td class="table-danger">VVIP</td>
															<td></td>
															<td></td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td></td>
															<td class="table-danger">VVIP</td>
															<td></td>
															<td></td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr class="table-disabled">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td colspan="6">예약불가</td>
														</tr>
														<tr class="table-disabled">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td colspan="6">예약불가</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>P</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
														<tr role="button" onclick="$(this).children('td:nth-child(1), td:nth-child(2), td:nth-child(3)').toggleClass('table-success');">
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div>
												<table class="table table-fixed text-center">
													<thead class="table-info">
														<tr>
															<th colspan="8">바다</th>
														</tr>
														<tr>
															<th class="fw-normal">시간</th>
															<th class="fw-normal">성명</th>
															<th class="fw-normal">요금</th>
															<th class="fw-normal">단체팀</th>
															<th class="fw-normal">예약메모</th>
															<th class="fw-normal">C</th>
															<th class="fw-normal">CH</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>p</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>P</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div>
												<table class="table table-fixed text-center">
													<thead class="table-primary">
														<tr>
															<th colspan="8">구름</th>
														</tr>
														<tr>
															<th class="fw-normal">시간</th>
															<th class="fw-normal">성명</th>
															<th class="fw-normal">요금</th>
															<th class="fw-normal">단체팀</th>
															<th class="fw-normal">예약메모</th>
															<th class="fw-normal">C</th>
															<th class="fw-normal">CH</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>p</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>P</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td></td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>J</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
														<tr>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".bookingModal">06:50</span></td>
															<td><span data-bs-toggle="tooltip" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>160</td>
															<td>소확행</td>
															<td>GX/2일</td>
															<td>N</td>
															<td>I</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row - 예약 현황 -->

						<div class="modal fade addTeamModal" tabindex="-1" aria-labelledby="addTeamModalModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="bookingModalLabel">팀추가</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<table class="table table-layout-fixed mb-0">
											<colgroup>
												<col style="width:70px;">
												<col style="width:auto">
											</colgroup>
											
											<tbody>
												<tr>
													<th class="text-end">일자</th>
													<td>2022.11.18</td>
												</tr>
												<tr>
													<th class="text-end">코스</th>
													<td>
														<select class="form-select form-select-sm bg-light">
															<option value="코스1" selected>코스1</option>
															<option value="코스2">코스2</option>
															<option value="코스3">코스3</option>
														</select>
													</td>
												</tr>
												<tr>
													<th class="text-end">시간</th>
													<td><input type="text" class="form-control form-control-sm bg-light" placeholder="24:00"></td>
												</tr>
												<tr>
													<th class="text-end">홀</th>
													<td>
														<select class="form-select form-select-sm bg-light">
															<option value="18홀" selected>18홀</option>
															<option value="18홀">18홀</option>
														</select>
													</td>
												</tr>
												<tr>
													<th class="text-end">시작시간</th>
													<td><input type="text" class="form-control form-control-sm bg-light" placeholder="24:00"></td>
												</tr>
												<tr>
													<th class="text-end">종료시간</th>
													<td><input type="text" class="form-control form-control-sm bg-light" placeholder="24:00"></td>
												</tr>
												<tr>
													<th class="text-end">시간간격</th>
													<td>
														<div class="form-check form-check-inline p-0 m-0">
															<input type="text" class="form-control form-control-sm text-center input_tee bg-light" onkeydown="checkNumber()" maxlength="1" placeholder="7">
														</div>
														<div class="form-check form-check-inline p-0 m-0">
															<input type="text" class="form-control form-control-sm text-center input_tee bg-light" onkeydown="checkNumber()" maxlength="1">
														</div>
													</td>
												</tr>
											</tbody>	
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-secondary">삭제</button>
										<button type="button" class="btn btn-success">저장</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - addTeamModal -->

						<div class="modal fade standbyModal" tabindex="-1" aria-labelledby="standbyModalModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="bookingModalLabel">예약대기 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row mb-3">
											<div class="col">
												<div class="d-flex flex-wrap align-items-center gap-2">
													<div class="form-check form-check-inline ps-0 me-auto">
														<input type="text" class="form-control form-control-sm datepicker bg-light p-0" placeholder="05월 04일 (목)">
													</div>

													<button type="button" class="btn btn-sm btn-success">저장</button>
													<button type="button" class="btn btn-sm btn-outline-dark">취소</button>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-9">
												<div class="card h-100 mb-0">
													<div class="card-body">
														<table class="table table-layout-fixed text-center mb-0">
															<colgroup>
																<col style="width:50px;">
																<col style="width:70px;">
																<col style="width:70px;">
																<col style="width:100px">
																<col style="width:70px;">
																<col style="width:70px;">
																<col style="width:120px;">
																<col style="width:150px">
																<col style="width:auto">
															</colgroup>
															
															<thead>
																<tr>
																	<th>No</th>
																	<th>우선순위</th>
																	<th>회원이름</th>
																	<th>휴대전화</th>
																	<th>시간 I</th>
																	<th>시간 II</th>
																	<th>취소
																		<div class="dropdown d-inline-block">
																			<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																			<ul class="dropdown-menu dropdown-menu-dark">
																				<li><button type="button" class="dropdown-item teetimeModifyBtn">대기중</button></li>
																				<li><button type="button" class="dropdown-item teetimeModifyBtn">대기취소</button></li>
																			</ul>
																		</div>
																	</th>
																	<th>취소구분</th>
																	<th>비고</th>
																</tr>
															</thead>	
															
															<tbody>
																<tr>
																	<td>1</td>
																	<td>1</td>
																	<td>이낙연</td>
																	<td>010-1234-5678</td>
																	<td>09시</td>
																	<td>10시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>2</td>
																	<td>이민영</td>
																	<td>010-1234-5678</td>
																	<td>10시</td>
																	<td>11시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>3</td>
																	<td>이홍철</td>
																	<td>010-1234-5678</td>
																	<td>10시</td>
																	<td>11시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>4</td>
																	<td>홍길동</td>
																	<td>010-1234-5678</td>
																	<td>12시</td>
																	<td>01시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>5</td>
																	<td>4</td>
																	<td>홍길동</td>
																	<td>010-1234-5678</td>
																	<td>12시</td>
																	<td>01시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>6</td>
																	<td>4</td>
																	<td>홍길동</td>
																	<td>010-1234-5678</td>
																	<td>12시</td>
																	<td>01시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>7</td>
																	<td>4</td>
																	<td>홍길동</td>
																	<td>010-1234-5678</td>
																	<td>12시</td>
																	<td>01시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>8</td>
																	<td>4</td>
																	<td>홍길동</td>
																	<td>010-1234-5678</td>
																	<td>12시</td>
																	<td>01시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>9</td>
																	<td>4</td>
																	<td>홍길동</td>
																	<td>010-1234-5678</td>
																	<td>12시</td>
																	<td>01시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
																<tr>
																	<td>10</td>
																	<td>4</td>
																	<td>홍길동</td>
																	<td>010-1234-5678</td>
																	<td>12시</td>
																	<td>01시</td>
																	<td>
																		<select class="form-select form-select-sm w-auto h-100 mx-auto">
																			<option value="대기중" selected>대기중</option>
																			<option value="대기취소">대기취소</option>
																		</select>
																	</td>
																	<td>
																		<input type="text" class="form-control form-control-sm">
																	</td>
																	<td></td>
																</tr>
															</tbody>
														</table>

														<nav aria-label="Page navigation">
															<ul class="pagination justify-content-end mt-3 mb-0">
																<li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
																<li class="page-item active"><a class="page-link" href="#">1</a></li>
																<li class="page-item"><a class="page-link" href="#">2</a></li>
																<li class="page-item"><a class="page-link" href="#">3</a></li>
																<li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
															</ul>
														</nav>
													</div>
												</div>
											</div>

											<div class="col-3">
												<div class="card h-100 mb-0">
													<div class="card-body">
														<table class="table table-layout-fixed border-top mb-0">
															<colgroup>
																<col style="width:100px;">
																<col style="width:auto">
															</colgroup>

															<tbody>
																<tr>
																	<th class="text-end">희망일자</th>
																	<td>05월 04일 (목)</td>
																</tr>
																<tr>
																	<th class="text-end">회원이름</th>
																	<td><input type="text" class="form-control form-control-sm bg-light"></td>
																</tr>
																<tr>
																	<th class="text-end">순번</th>
																	<td><input type="text" class="form-control form-control-sm bg-light"></td>
																</tr>
																<tr>
																	<th class="text-end">휴대전화</th>
																	<td>
																		<input type="text" class="form-control form-control-sm bg-light">
																	</td>
																</tr>
																<tr>
																	<th class="text-end">부</th>
																	<td>
																		<select class="form-select form-select-sm bg-light">
																			<option value="1부" selected>1부</option>
																			<option value="2부">2부</option>
																			<option value="3부">3부</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<th class="text-end">희망시간 I</th>
																	<td>
																		<select class="form-select form-select-sm bg-light">
																			<option value="09시" selected>09시</option>
																			<option value="10시">10시</option>
																			<option value="11시">11시</option>
																			<option value="12시">12시</option>
																			<option value="13시">13시</option>
																			<option value="14시">14시</option>
																			<option value="15시">15시</option>
																			<option value="16시">16시</option>
																			<option value="17시">17시</option>
																			<option value="18시">18시</option>
																			<option value="19시">19시</option>
																			<option value="20시">20시</option>
																			<option value="21시">21시</option>
																			<option value="22시">22시</option>
																			<option value="23시">23시</option>
																			<option value="24시">24시</option>
																			<option value="01시">01시</option>
																			<option value="02시">02시</option>
																			<option value="03시">03시</option>
																			<option value="04시">04시</option>
																			<option value="05시">05시</option>
																			<option value="06시">06시</option>
																			<option value="07시">07시</option>
																			<option value="08시">08시</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<th class="text-end">희망시간 II</th>
																	<td>
																		<select class="form-select form-select-sm bg-light">
																			<option value="09시" selected>09시</option>
																			<option value="10시">10시</option>
																			<option value="11시">11시</option>
																			<option value="12시">12시</option>
																			<option value="13시">13시</option>
																			<option value="14시">14시</option>
																			<option value="15시">15시</option>
																			<option value="16시">16시</option>
																			<option value="17시">17시</option>
																			<option value="18시">18시</option>
																			<option value="19시">19시</option>
																			<option value="20시">20시</option>
																			<option value="21시">21시</option>
																			<option value="22시">22시</option>
																			<option value="23시">23시</option>
																			<option value="24시">24시</option>
																			<option value="01시">01시</option>
																			<option value="02시">02시</option>
																			<option value="03시">03시</option>
																			<option value="04시">04시</option>
																			<option value="05시">05시</option>
																			<option value="06시">06시</option>
																			<option value="07시">07시</option>
																			<option value="08시">08시</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<th class="text-end">확정코스</th>
																	<td></td>
																</tr>
																<tr>
																	<th class="text-end">확정시간</th>
																	<td></td>
																</tr>
																<tr>
																	<th class="text-end">비고</th>
																	<td></td>
																</tr>
															</tbody>	
														</table>
													</div>
												</div>
											</div>	
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - standbyModal -->
						
						<div class="modal fade bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="bookingModalLabel">예약 접수</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row mb-3">
											<div class="col-6">
												<div class="d-flex flex-wrap align-top gap-2">
													<button type="button" class="btn btn-sm btn-warning">임의 SMS</button>
													<button type="button" class="btn btn-sm btn-primary">연계처리</button>
													<button type="button" class="btn btn-sm btn-dark">연계취소</button>
												</div>
											</div>
											<div class="col-6">
												<div class="d-flex flex-wrap justify-content-end align-top gap-2">
													<a href="javascript:void(0);" class="d-inline-block" data-bs-toggle="tooltip" title="Default tooltip">
														<i class="fas fa-question-circle text-secondary align-bottom"></i>
													</a>
													<button type="button" class="btn btn-sm btn-success">저장</button>
													<button type="button" class="btn btn-sm btn-success">확인SMS</button>
													<button type="button" class="btn btn-sm btn-outline-dark">취소</button>
													<button type="button" class="btn btn-sm btn-dark">삭제</button>
													<button type="button" class="btn btn-sm btn-primary">복사/이동</button>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-6">
												<div class="row">
													<div class="col">
														<div class="card bg-light rounded-0 mb-2">
															<div class="card-body bg-light d-flex justify-content-between py-2">
																<div class="d-flex align-items-center gap-5 me-5">
																	<span class="h6 mb-0">23.05.01 (월)</span>
																	<span class="h6 mb-0">06:50</span>
																	<span class="h6 mb-0">WEST OUT</span>
																</div>

																<div class="d-flex flex-fill gap-2 ms-5">
																	<select class="form-select bg-transparent border-0">
																		<option value="18홀" selected>18홀</option>
																	</select>
																	<select class="form-select bg-transparent border-0">
																		<option value="4명" selected>4명</option>
																	</select>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col">
														<div class="table-box mb-2">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:100px;">
																	<col style="width:auto">
																	<col style="width:100px;">
																	<col style="width:auto">
																</colgroup>

																<tbody>
																	<tr>
																		<th class="ps-3">예약자</th>
																		<td>
																			<input class="form-control form-control-sm py-0 border-0" type="text" value="">
																		</td>
																		<td colspan="2" class="ps-3">
																			<div class="d-flex justify-content-between">
																				<span class="fw-bold">01012345678</span>
																				<div>
																					<div class="form-check form-check-inline">
																						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="남" checked="">
																						<label class="form-check-label" for="inlineRadio1">남</label>
																					</div>
																					<div class="form-check form-check-inline">
																						<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="여">
																						<label class="form-check-label" for="inlineRadio2">여</label>
																					</div>
																				</div>
																			</div>
																		</td>
																	</tr>
																</tbody>	
															</table>
														</div>

														<div class="table-box mb-2">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:100px;">
																	<col style="width:auto">
																	<col style="width:100px;">
																	<col style="width:auto">
																</colgroup>

																<tbody>
																	<tr>
																		<th class="ps-3">예약구분</th>
																		<td>
																			<select class="form-select py-0 border-0">
																				<option value="사전예약" selected="">사전예약</option>
																				<option value="일반예약">일반예약</option>
																			</select>
																		</td>
																		<th class="border-start ps-3">채널</th>
																		<td>
																			<select class="form-select py-0 border-0">
																				<option value="전화" selected="">전화</option>
																				<option value="홈페이지">홈페이지</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-3">단체팀</th>
																		<td>
																			<input class="form-control form-control-sm py-0 border-0" type="text" value="">
																		</td>
																		<th class="border-start ps-3">캐디구분</th>
																		<td>
																			<select class="form-select py-0 border-0">
																				<option value="일반캐디" selected="">일반캐디</option>
																				<option value="No Caddy">No Caddy</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-3">그린피</th>
																		<td>
																			<div class="row w-100">
																				<div class="col-9">
																					<select class="form-select py-0 border-0">
																						<option value="사전21" selected>사전21</option>
																						<option value="일반23">일반23</option>
																						<option value="일반19">일반19</option>
																					</select>
																				</div>
																				<div class="col-3">
																					210,000
																				</div>
																			</div>
																		</td>
																		<th class="border-start ps-3">할인코드</th>
																		<td>
																			<div class="row w-100">
																				<div class="col-9">
																					<select class="form-select py-0 border-0">
																						<option value="없음">없음</option>
																						<option value="지역1" selected>지역1</option>
																						<option value="주니어3">주니어3</option>
																						<option value="프로5">프로5</option>
																					</select>
																				</div>
																				<div class="col-3">
																					10,000
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-3">예약메모</th>
																		<td>
																			<input class="form-control form-control-sm py-0 border-0" type="text">
																		</td>
																		<th class="border-start ps-3">연계정보</th>
																		<td>
																			<input class="form-control form-control-sm py-0 border-0" type="text">
																		</td>
																	</tr>
																	<tr>
																		<th class="ps-3">비고</th>
																		<td colspan="3">
																			<input class="form-control form-control-sm py-0 border-0" type="text">
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="table-box mb-2">
															<table class="table table-layout-fixed bg-secondary-subtle mb-0">
																<colgroup>
																	<col style="width:100px;">
																	<col style="width:auto">
																	<col style="width:100px;">
																	<col style="width:auto">
																</colgroup>

																<tbody>
																	<tr>
																		<th class="ps-3">예약 취소</th>
																		<td>
																			<select class="form-select bg-transparent text-center border-0 py-0 ps-0">
																				<option value="우천 취소" selected="">우천 취소</option>
																			</select>
																		</td>
																		<th class="border-start ps-3">취소 조치</th>
																		<td>
																			<select class="form-select bg-transparent text-center border-0 py-0 ps-0">
																				<option value="Rain Check" selected="">Rain Check</option>
																			</select>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-12">
														<div class="card rounded-0 mb-0">
															<div class="card-body p-3">
																<div class="row">
																	<div class="col-12">
																		<ul class="nav nav-pills" role="tablist">
																			<li class="nav-item">
																				<button class="nav-link py-1 active" data-bs-toggle="tab" href="#bookingModalLeftTab01" role="tab">동반자 정보</button>
																			</li>
																			<li class="nav-item">
																				<button class="nav-link py-1" data-bs-toggle="tab" href="#bookingModalLeftTab02" role="tab">호텔, 항공, 렌트, 픽업</button>
																			</li>
																		</ul>

																		<div class="tab-content py-3">
																			<div class="tab-pane active" id="bookingModalLeftTab01" role="tabpanel">
																				<table class="table table-bordered table-layout-fixed text-center mb-0">
																					<colgroup>
																						<col style="width:28%;">
																						<col style="width:auto;">
																						<col style="width:25%;">
																						<col style="width:9%;">
																					</colgroup>

																					<tbody>
																						<tr>
																							<td>홍길동</td>
																							<td>010-1234-5678</td>
																							<td>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" type="radio" name="accompany01" id="accompany01M" value="남" checked="">
																									<label class="form-check-label" for="accompany01M">남</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" type="radio" name="accompany01" id="accompany01F" value="여">
																									<label class="form-check-label" for="accompany01F">여</label>
																								</div>
																							</td>
																							<td class="text-end"><button type="button" class="btn btn-sm btn-outline-primary">취소</button></td>
																						</tr>
																						<tr>
																							<td><input class="form-control text-center border-0 py-0 ps-0 " type="text" placeholder="동반자 성명"></td>
																							<td><input class="form-control text-center border-0 py-0 ps-0" type="text" placeholder="연락처"></td>
																							<td>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" type="radio" name="accompany02" id="accompany02M" value="남">
																									<label class="form-check-label" for="accompany02M">남</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" type="radio" name="accompany02" id="accompany02F" value="여">
																									<label class="form-check-label" for="accompany02F">여</label>
																								</div>
																							</td>
																							<td class="text-end"><button type="button" class="btn btn-sm btn-outline-primary">취소</button></td>
																						</tr>
																						<tr>
																							<td><input class="form-control text-center border-0 py-0 ps-0" type="text" placeholder="동반자 성명"></td>
																							<td><input class="form-control text-center border-0 py-0 ps-0" type="text" placeholder="연락처"></td>
																							<td>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" type="radio" name="accompany03" id="accompany03M" value="남">
																									<label class="form-check-label" for="accompany03M">남</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" type="radio" name="accompany03" id="accompany03F" value="여">
																									<label class="form-check-label" for="accompany03F">여</label>
																								</div>
																							</td>
																							<td class="text-end"><button type="button" class="btn btn-sm btn-outline-primary">취소</button></td>
																						</tr>
																						<tr>
																							<td><input class="form-control text-center border-0 py-0 ps-0" type="text" placeholder="동반자 성명"></td>
																							<td><input class="form-control text-center border-0 py-0 ps-0" type="text" placeholder="연락처"></td>
																							<td>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" type="radio" name="accompany04" id="accompany04M" value="남">
																									<label class="form-check-label" for="accompany04M">남</label>
																								</div>
																								<div class="form-check form-check-inline">
																									<input class="form-check-input" type="radio" name="accompany04" id="accompany04F" value="여">
																									<label class="form-check-label" for="accompany04F">여</label>
																								</div>
																							</td>
																							<td class="text-end"><button type="button" class="btn btn-sm btn-outline-primary">취소</button></td>
																						</tr>
																					</tbody>
																				</table>
																			</div>
																			<div class="tab-pane" id="bookingModalLeftTab02" role="tabpanel">
																				<div class="input-group input-group-sm mb-2">
																					<span class="input-group-text"><i class="bx bx-buildings text-secondary"></i></span>
																					<input type="text" class="form-control" placeholder="호텔" >
																					<button class="btn btn-success" type="button">등록</button>
																				</div>
																				<div class="input-group input-group-sm mb-2">
																					<span class="input-group-text"><i class="mdi mdi-airplane-takeoff text-secondary"></i></span>
																					<input type="text" class="form-control" placeholder="항공" >
																					<button class="btn btn-success" type="button">등록</button>
																				</div>
																				<div class="input-group input-group-sm mb-2">
																					<span class="input-group-text"><i class="bx bx-car text-secondary"></i></span>
																					<input type="text" class="form-control" placeholder="렌트" >
																					<button class="btn btn-success" type="button">등록</button>
																				</div>
																				<div class="input-group input-group-sm">
																					<span class="input-group-text"><i class="mdi mdi-bus-clock text-secondary"></i></span>
																					<input type="text" class="form-control" placeholder="픽업" >
																					<button class="btn btn-success" type="button">등록</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="col-6">
												<div class="row h-100">
													<div class="col">
														<div class="card rounded-0 h-100 mb-0">
															<div class="card-body pt-0">
																<div class="row">
																	<div class="col">
																		<div class="card border-0 pt-1 mb-0">
																			<div class="card-body px-0 py-3">
																				<h6 class="lh-base ps-0 mb-0">홍길동 <small class="border border-1 border-danger rounded text-danger ms-3">GNR</small> 46-9144</h6>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="row mx-auto mb-4">
																	<table class="table table-bordered table-layout-fixed text-center mb-0">
																		<colgroup>
																			<col style="width:40px;">
																			<col style="width:160px;">
																			<col style="width:110px;">
																			<col style="width:120px;">
																			<col style="width:auto;">
																		</colgroup>

																		<tbody>
																			<tr class="bg-warning-subtle">
																				<td><i class="far fa-clock text-secondary"></i></td>
																				<td>2023.05.02 (화)</td>
																				<td>07:53</td>
																				<td>BO</td>
																				<td></td>
																			</tr>
																			<tr class="bg-secondary-subtle">
																				<td><i class="far fa-clock text-secondary"></i></td>
																				<td>2023.05.03 (수)</td>
																				<td>09:13</td>
																				<td>BO</td>
																				<td></td>
																			</tr>
																			<tr>
																				<td><i class="mdi mdi-airplane-takeoff text-secondary"></i></td>
																				<td>도착 5/14 15시</td>
																				<td>대한항공</td>
																				<td></td>
																				<td></td>
																			</tr>
																			<tr>
																				<td><i class="bx bx-car text-secondary"></i></td>
																				<td>카니발 9인승</td>
																				<td>허 1234</td>
																				<td>14~17</td>
																				<td></td>
																			</tr>
																			<tr>
																				<td><i class="bx bx-buildings text-secondary"></i></td>
																				<td>골프텔 303호</td>
																				<td>14,15,16</td>
																				<td>3박4일</td>
																				<td></td>
																			</tr>
																			<tr>
																				<td><i class="mdi mdi-bus-clock text-secondary"></i></td>
																				<td></td>
																				<td></td>
																				<td></td>
																				<td></td>
																			</tr>
																		</tbody>
																	</table>
																</div>

																<div class="row mx-auto">
																	<ul class="nav nav-pills mb-3" role="tablist">
																		<li class="nav-item">
																			<button class="nav-link py-1 active" data-bs-toggle="tab" href="#bookingModalRightTab01" role="tab">VOC</button>
																		</li>
																		<li class="nav-item">
																			<button class="nav-link py-1" data-bs-toggle="tab" href="#bookingModalRightTab02" role="tab">프론트</button>
																		</li>
																		<li class="nav-item">
																			<button class="nav-link py-1" data-bs-toggle="tab" href="#bookingModalRightTab03" role="tab">경기</button>
																		</li>
																		<li class="nav-item">
																			<button class="nav-link py-1" data-bs-toggle="tab" href="#bookingModalRightTab04" role="tab">식음</button>
																		</li>
																		<li class="nav-item">
																			<button class="nav-link py-1" data-bs-toggle="tab" href="#bookingModalRightTab05" role="tab">프로샵</button>
																		</li>
																	</ul>

																	<div class="tab-content rounded bg-info-subtle p-3">
																		<div class="tab-pane active" id="bookingModalRightTab01" role="tabpanel">
																			<p class="mb-0">락카 청결상태 지적</p>
																			<p class="mb-0">락카내 쓰레기 정리 요청</p>
																			<p class="text-muted mt-2">2023.04.10 (토) 프론트 이지연 대리</p>
																			<p class="mb-3">조치 요청 전달 후 처리 완료</p>
																		</div>

																		<div class="tab-pane" id="bookingModalRightTab02" role="tabpanel">
																		</div>

																		<div class="tab-pane" id="bookingModalRightTab03" role="tabpanel">
																		</div>

																		<div class="tab-pane" id="bookingModalRightTab04" role="tabpanel">
																		</div>

																		<div class="tab-pane" id="bookingModalRightTab05" role="tabpanel">
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>	
										</div>

										<div class="row mt-3">
											<div class="col">
												<p class="text-muted mb-0">최초수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - bookingModal -->

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

			$('.bookingModal').modal('show');
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
