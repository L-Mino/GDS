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
							<div class="col-12">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex align-items-center flex-wrap gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-lg h-100">
													<option value="23.06.25 (일)" selected>23.06.25 (일)</option>
													<option value="23.06.26 (월)">23.06.26 (월)</option>
												</select>
											</div>

											<div class="form-check form-check-inline search-area ps-0 me-2">
												<input class="form-control" type="text" placeholder="Search...">
												<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
											</div>

											<div class="form-check form-check-inline me-2">
												<input class="form-check-input" type="checkbox" id="Unreserved">
												<label class="form-check-label" for="Unreserved">미예약</label>
											</div>

											<div class="form-check form-check-inline me-2">
												<input class="form-check-input" type="checkbox" id="reserved">
												<label class="form-check-label" for="reserved">예약</label>
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="코스 선택">
													<option value="EAST IN">EAST IN</option>
													<option value="EAST OUT">EAST OUT</option>
													<option value="WEST IN">WEST IN</option>
													<option value="WEST OUT">WEST OUT</option>
												</select>
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="티타임 선택">
													<option value="1부">1부</option>
													<option value="2부">2부</option>
													<option value="3부">3부</option>
												</select>
											</div>
										</div>

										<div class="d-flex flex-wrap align-items-center gap-2">
											<div class="btn-group">
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".addTeamModal">팀 추가</button>
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">팀 삭제</button>
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".standbyModal">예약 대기</button>
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="$('.bookingModalTab li:nth-child(3) a').tab('show');">복사</button>
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="$('.bookingModalTab li:nth-child(4) a').tab('show');">이동</button>
												<button type="button" class="btn btn-outline-custom">예약 가능</button>
												<button type="button" class="btn btn-outline-custom">우천 취소</button>
												<button type="button" class="btn btn-outline-custom">예약 문자</button>
												<button type="button" class="btn btn-outline-custom">임의 문자</button>
											</div>

											<div class="form-check form-check-inline align-top p-0 ms-2 me-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="컬럼 선택">
													<option value="선택박스">선택박스</option>
													<option value="시간">시간</option>
													<option value="성명">성명</option>
													<option value="그린피">그린피</option>
													<option value="단체팀">단체팀</option>
													<option value="캐디">캐디</option>
													<option value="C">C</option>
													<option value="CH">CH</option>
												</select>
											</div>
										</div>

										<div class="border-bottom pb-4 mb-4"></div>

										<div class="d-flex gap-4">
											<div class="booking-left">
												<div class="table-fixed-head card h-100" data-simplebar>
													<table class="table table-fixed text-center table-hover mb-0">
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
															<tr role="button" class="table-active" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.01 (월)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.02 (화)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.03 (수)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.04 (목)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.05 (금)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sat">05.06 (토)</span></td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sun">05.07 (일)</span></td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.08 (월)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.09 (화)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.10 (수)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.11 (목)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.12 (금)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sat">05.13 (토)</span></td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sun">05.14 (일)</span></td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.15 (월)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.16 (화)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.17 (수)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.18 (목)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.19 (금)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sat">05.20 (토)</span></td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sun">05.21 (일)</span></td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.22 (월)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<tr>
																<td>05.23 (화)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.24 (수)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.25 (목)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.26 (금)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sat">05.27 (토)</span></td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sun">05.28 (일)</span></td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.29 (월)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.30 (화)</td>
																<td>156</td>
																<td>156</td>
																<td>1</td>
																<td><i class="bi bi-cloud-drizzle"></i></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<div class="booking-right">
												<div class="h-100" data-simplebar>
													<div class="sortable booking-group d-flex gap-3">
														<div class="booking-area border-box border-bottom-0 table-fixed-head">
															<table class="table table-hover text-center mb-0">
																<thead>
																	<tr>
																		<th colspan="9">EAST IN</th>
																	</tr>
																	<tr>
																		<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																		<th class="fw-normal">시간</th>
																		<th class="fw-normal">성명</th>
																		<th class="fw-normal">그린피</th>
																		<th class="fw-normal">단체팀</th>
																		<th class="fw-normal">예약 메모</th>
																		<th class="fw-normal">C</th>
																		<th class="fw-normal">CH</th>
																		<th class="fw-normal">메모</th>
																	</tr>
																	<!-- <tr>
																		<th style="width:25px;"><input class="form-check-input tableCheckAll" type="checkbox"></th>
																		<th class="fw-normal" style="min-width:70px;">시간</th>
																		<th class="fw-normal" style="min-width:70px;">성명</th>
																		<th class="fw-normal" style="min-width:60px;">그린피</th>
																		<th class="fw-normal" style="min-width:60px;">단체팀</th>
																		<th class="fw-normal" style="min-width:70px;">예약 메모</th>
																		<th class="fw-normal" style="min-width:30px;">C</th>
																		<th class="fw-normal" style="min-width:30px;">CH</th>
																		<th class="fw-normal" style="min-width:40px;">메모</th>
																	</tr> -->
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td></td>
																		<td>160</td>
																		<td></td>
																		<td></td>
																		<td>J</td>
																		<td></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico front-new"></span>
																				<span class="status-ico match-new"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico food-new"></span>
																				<span class="status-ico shop-new"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:58 <span class="checkin-num three">3</span></td>
																		<td></td>
																		<td>160</td>
																		<td></td>
																		<td></td>
																		<td>p</td>
																		<td></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico front-new"></span>
																				<span class="status-ico match-new"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico food-new"></span>
																				<span class="status-ico shop-new"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num two">2</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num one">1</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>BA</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td></td>
																		<td></td>
																		<td>BB</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td></td>
																		<td><span class="table-em vvip">VVIP</span></td>
																		<td></td>
																		<td></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td></td>
																		<td><span class="table-em vvip">VVIP</span></td>
																		<td></td>
																		<td></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>CA</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>CB</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td><span class="table-em team">클라스</span></td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td><span class="table-em team">클라스</span></td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td><span class="table-em team">클라스</span></td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td></td>
																		<td>160</td>
																		<td colspan="4"><span class="table-em disabled">예약불가</span></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>P</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="booking-area border-box border-bottom-0 table-fixed-head">
															<table class="table text-center mb-0">
																<thead>
																	<tr>
																		<th colspan="9">EAST OUT</th>
																	</tr>
																	<tr>
																		<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																		<th class="fw-normal">시간</th>
																		<th class="fw-normal">성명</th>
																		<th class="fw-normal">그린피</th>
																		<th class="fw-normal">단체팀</th>
																		<th class="fw-normal">예약 메모</th>
																		<th class="fw-normal">C</th>
																		<th class="fw-normal">CH</th>
																		<th class="fw-normal">메모</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>p</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td></td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td><span class="table-em team">클라스</span></td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td><span class="table-em team">클라스</span></td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td><span class="table-em team">클라스</span></td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td><span class="table-em team">클라스</span></td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td></td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td></td>
																		<td><span class="table-em vvip">VVIP</span></td>
																		<td></td>
																		<td></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td></td>
																		<td><span class="table-em vvip">VVIP</span></td>
																		<td></td>
																		<td></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td></td>
																		<td>160</td>
																		<td colspan="4"><span class="table-em disabled">예약불가</span></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td></td>
																		<td>160</td>
																		<td colspan="4"><span class="table-em disabled">예약불가</span></td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>P</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="booking-area border-box border-bottom-0 table-fixed-head">
															<table class="table text-center mb-0">
																<thead>
																	<tr>
																		<th colspan="9">WEST IN</th>
																	</tr>
																	<tr>
																		<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																		<th class="fw-normal">시간</th>
																		<th class="fw-normal">성명</th>
																		<th class="fw-normal">그린피</th>
																		<th class="fw-normal">단체팀</th>
																		<th class="fw-normal">예약 메모</th>
																		<th class="fw-normal">C</th>
																		<th class="fw-normal">CH</th>
																		<th class="fw-normal">메모</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>p</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>P</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="booking-area border-box border-bottom-0 table-fixed-head">
															<table class="table text-center mb-0">
																<thead>
																	<tr>
																		<th colspan="9">WEST OUT</th>
																	</tr>
																	<tr>
																		<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																		<th class="fw-normal">시간</th>
																		<th class="fw-normal">성명</th>
																		<th class="fw-normal">그린피</th>
																		<th class="fw-normal">단체팀</th>
																		<th class="fw-normal">예약 메모</th>
																		<th class="fw-normal">C</th>
																		<th class="fw-normal">CH</th>
																		<th class="fw-normal">메모</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>p</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>P</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td></td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>J</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input tableCheck" type="checkbox"></td>
																		<td role="button" data-bs-toggle="modal" data-bs-target=".bookingModal" onclick="bookingModal()">06:50 <span class="checkin-num four">4</span></td>
																		<td data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration"><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
																		<td>160</td>
																		<td>소확행</td>
																		<td>GX / 2일</td>
																		<td>N</td>
																		<td>I</td>
																		<td>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																			<div class="d-flex justify-content-center">
																				<span class="status-ico"></span>
																				<span class="status-ico"></span>
																			</div>
																		</td>
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
							</div>
						</div>

						<div class="modal fade modifyModal" tabindex="-1" aria-labelledby="modifyModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body">
										<p class="text-center font-size-14 fw-semibold pt-4 mb-0">선택된 <span class="modifyNum align-top"></span>개 티타임의<br><span class="modifyTit align-top"></span>(을)를 <span class="modifyTxt align-top"></span>(으)로 변경합니다.</p>
									</div>
									<div class="modal-footer">
										<div class="d-flex justify-content-center w-100 gap-2 pb-3">
											<button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
											<button type="button" class="btn btn-custom">확인</button>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//modal - modifyModal -->

						<div class="modal fade addTeamModal" tabindex="-1" aria-labelledby="addTeamModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addTeamModalLabel">팀 추가</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:70px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr class="table-bg-gray">
														<th>일자</th>
														<td><span class="ps-10">23.05.01 (월)</span></td>
													</tr>
													<tr>
														<th>코스</th>
														<td>
															<select class="form-select">
																<option value="EAST IN" selected>EAST IN</option>
																<option value="EAST OUT">EAST OUT</option>
																<option value="WEST IN">WEST IN</option>
																<option value="WEST OUT">WEST OUT</option>
															</select>
														</td>
													</tr>
													<tr>
														<th>홀</th>
														<td>
															<select class="form-select">
																<option value="18홀" selected>18홀</option>
																<option value="18홀">18홀</option>
															</select>
														</td>
													</tr>
													<tr>
														<th>부</th>
														<td>
															<select class="form-select">
																<option value="1부" selected>1부</option>
																<option value="2부">2부</option>
																<option value="3부">3부</option>
															</select>
														</td>
													</tr>
													<tr>
														<th>시간</th>
														<td><input type="text" class="form-control" placeholder="24:00"></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
										<button type="button" class="btn btn-custom">저장</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - addTeamModal -->

						<div class="modal fade standbyModal" tabindex="-1" aria-labelledby="standbyModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="bookingModalLabel">예약 대기 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row mb-3">
											<div class="col">
												<div class="d-flex flex-wrap align-items-center gap-2">
													<div class="form-check form-check-inline ps-0 me-auto">
														<input type="text" class="form-control datepicker p-0" placeholder="05월 04일 (목)">
													</div>

													<button type="button" class="btn btn-outline-custom">저장</button>
													<button type="button" class="btn btn-outline-custom">취소</button>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-9">
												<table class="table table-layout-fixed text-center">
													<colgroup>
														<col style="width:50px;">
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:140px">
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:120px;">
														<col style="width:180px">
														<col style="width:auto">
													</colgroup>

													<thead>
														<tr>
															<th>No</th>
															<th>회원 이름</th>
															<th>우선 순위</th>
															<th>연락처</th>
															<th>시간 I</th>
															<th>시간 II</th>
															<th>취소
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item teetimeModifyBtn">대기중</button></li>
																		<li><button type="button" class="dropdown-item teetimeModifyBtn">대기 취소</button></li>
																	</ul>
																</div>
															</th>
															<th>취소 구분</th>
															<th>비고</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>1</td>
															<td>이낙연</td>
															<td>1</td>
															<td>010-1234-5678</td>
															<td>09시</td>
															<td>10시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>2</td>
															<td>이민영</td>
															<td>2</td>
															<td>010-1234-5678</td>
															<td>10시</td>
															<td>11시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>3</td>
															<td>이홍철</td>
															<td>3</td>
															<td>010-1234-5678</td>
															<td>10시</td>
															<td>11시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>4</td>
															<td>홍길동</td>
															<td>4</td>
															<td>010-1234-5678</td>
															<td>12시</td>
															<td>01시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>5</td>
															<td>홍길동</td>
															<td>4</td>
															<td>010-1234-5678</td>
															<td>12시</td>
															<td>01시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>6</td>
															<td>홍길동</td>
															<td>4</td>
															<td>010-1234-5678</td>
															<td>12시</td>
															<td>01시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>7</td>
															<td>홍길동</td>
															<td>4</td>
															<td>010-1234-5678</td>
															<td>12시</td>
															<td>01시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>8</td>
															<td>홍길동</td>
															<td>4</td>
															<td>010-1234-5678</td>
															<td>12시</td>
															<td>01시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>9</td>
															<td>홍길동</td>
															<td>4</td>
															<td>010-1234-5678</td>
															<td>12시</td>
															<td>01시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
															<td></td>
														</tr>
														<tr>
															<td>10</td>
															<td>홍길동</td>
															<td>4</td>
															<td>010-1234-5678</td>
															<td>12시</td>
															<td>01시</td>
															<td>
																<select class="form-select w-auto h-100 mx-auto">
																	<option value="대기중" selected>대기중</option>
																	<option value="대기 취소">대기 취소</option>
																</select>
															</td>
															<td>
																<input type="text" class="form-control">
															</td>
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

											<div class="col-3">
												<div class="border-box border-bottom-0">
													<table class="table table-layout-fixed mb-0">
														<colgroup>
															<col style="width:110px;">
															<col style="width:auto">
														</colgroup>

														<tbody>
															<tr class="table-bg-gray">
																<th>희망 일자</th>
																<td>05월 04일 (목)</td>
															</tr>
															<tr>
																<th>회원 이름</th>
																<td><input type="text" class="form-control"></td>
															</tr>
															<tr>
																<th>우선 순위</th>
																<td><input type="text" class="form-control"></td>
															</tr>
															<tr>
																<th>연락처</th>
																<td>
																	<input type="text" class="form-control">
																</td>
															</tr>
															<tr>
																<th>부</th>
																<td>
																	<select class="form-select">
																		<option value="1부" selected>1부</option>
																		<option value="2부">2부</option>
																		<option value="3부">3부</option>
																	</select>
																</td>
															</tr>
															<tr>
																<th>희망 시간 I</th>
																<td>
																	<select class="form-select">
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
																<th>희망 시간 II</th>
																<td>
																	<select class="form-select">
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
																<th>확정 코스</th>
																<td></td>
															</tr>
															<tr>
																<th>확정 시간</th>
																<td></td>
															</tr>
															<tr>
																<th class="align-top mt-2">비고</th>
																<td><textarea class="form-control border-0" name="" id="" rows="5"></textarea></td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - standbyModal -->

						<div class="modal fade bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
							<div class="modal-dialog modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<!--h5 class="modal-title" id="bookingModalLabel">예약 접수</h5-->
										<div class="d-flex w-100">
											<ul class="nav nav-tabs-custom bookingModalTab me-auto" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#bookingModalTab01" role="tab">
														<span>예약 접수</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#bookingModalTab02" role="tab">
														<span>히스토리</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#bookingModalTab03" role="tab">
														<span>복사</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#bookingModalTab04" role="tab">
														<span>이동</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#bookingModalTab05" role="tab">
														<span>임의 SMS</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#bookingModalTab06" role="tab">
														<span>예약 확정 SMS</span>
													</a>
												</li>
											</ul>

											<button type="button" class="btn btn-custom ms-auto me-3">저장</button>
										</div>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="tab-content">
											<div class="tab-pane active" id="bookingModalTab01" role="tabpanel">
												<div class="row">
													<div class="col-7">
														<div class="box-gray align-items-center justify-content-between">
															<div class="d-flex align-items-center gap-5 me-5">
																<span class="h6 mb-0">23.05.01 (월)</span>
																<span class="h6 mb-0">06:50</span>
																<span class="h6 mb-0">WEST OUT</span>
															</div>

															<div class="d-flex gap-2 ms-5">
																<select class="form-select w-auto">
																	<option value="18홀" selected>18홀</option>
																</select>
																<select class="form-select w-auto">
																	<option value="4명" selected>4명</option>
																</select>
															</div>
														</div>

														<div class="border-box border-bottom-0">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:90px;">
																	<col style="width:auto">
																	<col style="width:90px;">
																	<col style="width:auto">
																</colgroup>

																<tbody>
																	<tr>
																		<th>예약자</th>
																		<td>
																			<input class="form-control" type="text">
																		</td>
																		<th>예약 번호</th>
																		<td><span class="ms-10">123456</span></td>
																	</tr>
																	<tr>
																		<th>연락처</th>
																		<td><span class="ms-10">010-1234-5678</span></td>
																		<th>성별</th>
																		<td>
																			<div class="form-check form-check-inline ms-10">
																				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="남" checked="">
																				<label class="form-check-label" for="inlineRadio1">남</label>
																			</div>
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="여">
																				<label class="form-check-label" for="inlineRadio2">여</label>
																			</div>
																		</td>

																	</tr>
																	<tr>
																		<th>예약 채널</th>
																		<td>
																			<select class="form-select">
																				<option value="예약실" selected>예약실</option>
																				<option value="프론트">프론트</option>
																				<option value="온라인">온라인</option>
																				<option value="채널1">채널1</option>
																				<option value="채널2">채널2</option>
																				<option value="채널3">채널3</option>
																			</select>
																		</td>
																		<th>예약 경로</th>
																		<td>
																			<select class="form-select">
																				<option value="전화" selected>전화</option>
																				<option value="팩스">팩스</option>
																				<option value="ID(EMAIL)">ID(EMAIL)</option>
																				<option value="방문">방문</option>
																				<option value="PC-Web">PC-Web</option>
																				<option value="Mobile-Web">Mobile-Web</option>
																				<option value="APP">APP</option>
																				<option value="API">API</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<th>등록 단체</th>
																		<td>
																			<select class="form-select">
																				<option value="단체 선택" selected>단체 선택</option>
																				<option value="경기고 총동창회">경기고 총동창회</option>
																				<option value="광진고 3040 동호회">광진고 3040 동호회</option>
																			</select>
																		</td>
																		<th>임시 단체</th>
																		<td>
																			<select class="form-select">
																				<option value="단체 선택" selected>단체 선택</option>
																				<option value="임시1">임시 단체1</option>
																				<option value="임시2">임시 단체2</option>
																				<option value="임시3">임시 단체3</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<th>캐디 구분</th>
																		<td>
																			<select class="form-select">
																				<option value="일반캐디" selected="">일반캐디</option>
																				<option value="No Caddy">No Caddy</option>
																			</select>
																		</td>
																		<th>카트 구분</th>
																		<td>
																			<select class="form-select">
																				<option value="5인승 전동 카트" selected>5인승 전동 카트</option>
																				<option value="2인승 전동 카트">2인승 전동 카트</option>
																				<option value="카트 선택 가능">카트 선택 가능</option>
																				<option value="수동 카트">수동 카트</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<th>그린피</th>
																		<td>
																			<div class="row w-100">
																				<div class="col-8">
																					<select class="form-select">
																						<option value="사전21" selected>사전21</option>
																						<option value="일반23">일반23</option>
																						<option value="일반19">일반19</option>
																					</select>
																				</div>
																				<div class="col-4">
																					<span class="d-inline-block align-text-top pt-1">210,000</span>
																				</div>
																			</div>
																		</td>
																		<th>이벤트</th>
																		<td><span class="ms-10">조식 + 카트 무료</span></td>
																	</tr>
																	<tr>
																		<th>예약 메모</th>
																		<td colspan="3">
																			<div class="form-check form-check-inline align-top p-0 m-0">
																				<select class="form-select w-auto">
																					<option value="COF4" selected>COF4</option>
																					<option value="PG/3">PG/3</option>
																				</select>
																			</div>
																			<span class="d-inline-block align-text-top pt-1">4인 커피 무료 제공</span>
																		</td>
																	</tr>
																	<tr>
																		<th>비고</th>
																		<td colspan="3">
																			<input class="form-control" type="text">
																		</td>
												  					</tr>
																</tbody>
															</table>
														</div>

														<div class="border-box d-flex table-bg-gray py-2 mt-2">
															<div class="col-4">
																<select class="form-select py-0">
																	<option value="취소 / 위약 선택" selected>취소 / 위약 선택</option>
																	<option value="정상 취소">정상 취소</option>
																	<option value="우천 취소">우천 취소</option>
																	<option value="노쇼">노쇼</option>
																	<option value="1일전 임박취소">1일전 임박취소</option>
																	<option value="2일전 임박취소">2일전 임박취소</option>
																	<option value="3일전 임박취소">3일전 임박취소</option>
																</select>
															</div>

															<div class="col-4">
																<select class="form-select py-0">
																	<option value="위약 사유 선택" selected>위약 사유 선택</option>
																	<option value="우천 취소">우천 취소</option>
																	<option value="개인 사정">개인 사정</option>
																	<option value="일정 변경">일정 변경</option>
																	<option value="사고">사고</option>
																	<option value="기타">기타</option>
																</select>
															</div>
															<div class="col-4">
																<select class="form-select col-4 py-0">
																	<option value="위약 조치 선택" selected>위약 조치 선택</option>
																	<option value="위약금 10" >위약금 10</option>
																	<option value="위약금 30%">위약금 30%</option>
																	<option value="예약금지 1M">예약금지 1M</option>
																	<option value="Rain Check">Rain Check</option>
																</select>
															</div>
														</div>

														<ul class="nav nav-tabs-custom mt-4 mb-3" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-bs-toggle="tab" href="#bookingModalLeftTab01" role="tab">
																	<span>동반자 정보</span>
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#bookingModalLeftTab02" role="tab">
																	<span>호텔, 항공, 렌트, 픽업</span>
																</a>
															</li>
														</ul>

														<div class="tab-content">
															<div class="tab-pane active" id="bookingModalLeftTab01" role="tabpanel">
																<div class="border-box border-bottom-0">
																	<table class="table table-layout-fixed text-center mb-0">
																		<colgroup>
																			<col style="width:28%;">
																			<col style="width:auto;">
																			<col style="width:25%;">
																			<col style="width:11%;">
																		</colgroup>

																		<tbody>
																			<tr>
																				<td><input class="form-control text-center" type="text" value="홍길동"></td>
																				<td><input class="form-control text-center" type="text" value="010-1234-5678"></td>
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
																				<td><button type="button" class="btn btn-outline-custom"">취소</button></td>
																			</tr>
																			<tr>
																				<td><input class="form-control text-center" type="text" placeholder="동반자 성명"></td>
																				<td><input class="form-control text-center" type="text" placeholder="연락처"></td>
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
																				<td><button type="button" class="btn btn-outline-custom"">취소</button></td>
																			</tr>
																			<tr>
																				<td><input class="form-control text-center" type="text" placeholder="동반자 성명"></td>
																				<td><input class="form-control text-center" type="text" placeholder="연락처"></td>
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
																				<td><button type="button" class="btn btn-outline-custom"">취소</button></td>
																			</tr>
																			<tr>
																				<td><input class="form-control text-center" type="text" placeholder="동반자 성명"></td>
																				<td><input class="form-control text-center" type="text" placeholder="연락처"></td>
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
																				<td><button type="button" class="btn btn-outline-custom"">취소</button></td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
															<div class="tab-pane" id="bookingModalLeftTab02" role="tabpanel">
																<div class="d-flex">
																	<div class="input-group input-group-sm flex-fill w-auto me-2 mb-2">
																		<span class="input-group-text"><i class="bx bx-buildings text-secondary"></i></span>
																		<input type="text" class="form-control" placeholder="호텔" >
																	</div>
																	<button class="btn btn-outline-custom"" type="button">등록</button>
																</div>

																<div class="d-flex">
																	<div class="input-group input-group-sm flex-fill w-auto me-2 mb-2">
																		<span class="input-group-text"><i class="mdi mdi-airplane-takeoff text-secondary"></i></span>
																		<input type="text" class="form-control" placeholder="항공" >
																	</div>
																	<button class="btn btn-outline-custom"" type="button">등록</button>
																</div>

																<div class="d-flex">
																	<div class="input-group input-group-sm flex-fill w-auto me-2 mb-2">
																		<span class="input-group-text"><i class="bx bx-car text-secondary"></i></span>
																		<input type="text" class="form-control" placeholder="렌트" >
																	</div>
																	<button class="btn btn-outline-custom"" type="button">등록</button>
																</div>

																<div class="d-flex">
																	<div class="input-group input-group-sm flex-fill w-auto me-2 mb-2">
																		<span class="input-group-text"><i class="mdi mdi-bus-clock text-secondary"></i></span>
																		<input type="text" class="form-control" placeholder="픽업" >
																	</div>
																	<button class="btn btn-outline-custom"" type="button">등록</button>
																</div>
															</div>
														</div>
													</div>

													<div class="col-5">
														<div class="box-gray align-items-center">
															<h6 class="lh-base ps-0 mb-0">홍길동 <span class="text-primary ms-4 me-2">GNR</span> 46-9144</h6>
														</div>

														<div class="border-box border-bottom-0">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:80px;">
																	<col style="width:120px;">
																	<col style="width:100px;">
																	<col style="width:100px;">
																	<col style="width:auto;">
																</colgroup>

																<tbody>
																	<tr class="table-active">
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.01 (월)</td>
																		<td>06:50 <span class="checkin-num four">4</span></td>
																		<td>CO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.02 (화)</td>
																		<td>07:53</td>
																		<td>BO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.03 (수)</td>
																		<td>09:13</td>
																		<td>BO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="mdi mdi-airplane-takeoff text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">항공</span></td>
																		<td>도착 5/14 15시</td>
																		<td>대한항공</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="bx bx-car text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">렌트</span></td>
																		<td>카니발 9인승</td>
																		<td>허 1234</td>
																		<td>14~17</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="bx bx-buildings text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">호텔</span></td>
																		<td>골프텔 303호</td>
																		<td>14,15,16</td>
																		<td>3박4일</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="mdi mdi-bus-clock text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">픽업</span></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="border-box border-top-0 p-3">
															<div class="d-flex align-items-center mt-3 mb-3">
																<ul class="nav nav-tabs-custom nav-tabs-sm nav-tabs-color" role="tablist">
																	<li class="nav-item">
																		<a class="nav-link front active" data-bs-toggle="tab" href="#bookingModalRightTab01" role="tab">
																			<span class="new">프론트</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link match" data-bs-toggle="tab" href="#bookingModalRightTab02" role="tab">
																			<span class="new">경기</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link food" data-bs-toggle="tab" href="#bookingModalRightTab03" role="tab">
																			<span class="new">식음</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link shop" data-bs-toggle="tab" href="#bookingModalRightTab04" role="tab">
																			<span class="new">프로샵</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link voc" data-bs-toggle="tab" href="#bookingModalRightTab05" role="tab">
																			<span class="new">VOC</span>
																		</a>
																	</li>
																</ul>
																<button type="button" class="btn btn-outline-custom ms-auto">저장</button>
															</div>

															<div class="tab-content rounded bg-info-subtle p-3">
																<div class="tab-pane active" id="bookingModalRightTab01" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;">락카 청결상태 지적
																		락카내 쓰레기 정리 요청
																		2023.04.10 (토) 프론트 이지연 대리
																		조치 요청 전달 후 처리 완료
																	</textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab02" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab03" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab04" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab05" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tab-pane" id="bookingModalTab02" role="tabpanel">
												<div class="row">
													<div class="col-7">
														<div class="box-gray align-items-center justify-content-between">
															<div class="d-flex align-items-center gap-5 me-5">
																<span class="h6 mb-0">23.05.01 (월)</span>
																<span class="h6 mb-0">06:50</span>
																<span class="h6 mb-0">WEST OUT</span>
															</div>

															<div class="d-flex gap-2 ms-5">
																<select class="form-select w-auto">
																	<option value="18홀" selected>18홀</option>
																</select>
																<select class="form-select w-auto">
																	<option value="4명" selected>4명</option>
																</select>
															</div>
														</div>
													</div>

													<div class="col-5">
														<div class="box-gray align-items-center">
															<h6 class="lh-base ps-0 mb-0">홍길동 <span class="text-primary ms-4 me-2">GNR</span> 46-9144</h6>
														</div>
													</div>
												</div>

												<div class="row mt-3">
													<div class="col">
														<table class="table text-center mb-0">
															<thead>
																<th>No</th>
																<th>구분</th>
																<th>경로</th>
																<th>예약자명</th>
																<th>작업 일시</th>
																<th>비고</th>
																<th>작업자</th>
																<th>IP</th>
															</thead>

															<tbody>
																<tr>
																	<td>1</td>
																	<td>등록</td>
																	<td>PC</td>
																	<td></td>
																	<td>23.06.06 09:00:55</td>
																	<td>사전예약/M</td>
																	<td>380728</td>
																	<td>255.255.255.255</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>수정</td>
																	<td>MOBILE</td>
																	<td></td>
																	<td>23.06.07 16:00:55</td>
																	<td>7일이후 취소(평일)</td>
																	<td>380728</td>
																	<td>255.255.255.255</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>삭제</td>
																	<td>전화</td>
																	<td></td>
																	<td>23.06.07 16:55:55</td>
																	<td>일반예약/M</td>
																	<td>419389</td>
																	<td>255.255.255.255</td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>예약</td>
																	<td>APP</td>
																	<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
																	<td>23.06.07 16:55:55</td>
																	<td>일반예약/M</td>
																	<td>419389</td>
																	<td>255.255.255.255</td>
																</tr>
																<tr>
																	<td>5</td>
																	<td>취소</td>
																	<td>PC</td>
																	<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
																	<td>23.06.07 16:55:55</td>
																	<td>일반예약/M</td>
																	<td>419389</td>
																	<td>255.255.255.255</td>
																</tr>
																<tr>
																	<td>6</td>
																	<td>이동</td>
																	<td>PC</td>
																	<td></td>
																	<td>23.06.07 16:55:55</td>
																	<td>일반예약/M</td>
																	<td>419389</td>
																	<td>255.255.255.255</td>
																</tr>
															</tbody>
														</table>

													</div>
												</div>
											</div>

											<div class="tab-pane" id="bookingModalTab03" role="tabpanel">
												<div class="row">
													<div class="col-7">
														<div class="box-gray align-items-center justify-content-between">
															<div class="d-flex align-items-center gap-5 me-5">
																<span class="h6 mb-0">23.05.01 (월)</span>
																<span class="h6 mb-0">06:50</span>
																<span class="h6 mb-0">WEST OUT</span>
															</div>

															<div class="d-flex gap-2 ms-5">
																<select class="form-select w-auto">
																	<option value="18홀" selected>18홀</option>
																</select>
																<select class="form-select w-auto">
																	<option value="4명" selected>4명</option>
																</select>
															</div>
														</div>

														<div class="border-box border-bottom-0">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:90px;">
																	<col style="width:auto">
																	<col style="width:90px;">
																	<col style="width:auto">
																</colgroup>

																<tbody>
																	<tr>
																		<th>예약자</th>
																		<td>홍길동</td>
																		<th>연락처</th>
																		<td>010-1224-2323</td>
																	</tr>
																	<tr class="table-bg-gray">
																		<th>변경 일자</th>
																		<td colspan="3">
																			<input type="text" class="form-control datepicker bg-transparent text-start border-0 p-0" value="23.07.10 (월)">
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="border-box mt-3">
															<div class="table-responsive table-fixed-head mb-0" style="max-height:486px;" data-simplebar>
																<table class="table table-layout-fixed text-center mb-0">
																	<colgroup>
																		<col style="width:25%;">
																		<col style="width:25%;">
																		<col style="width:25%;">
																		<col style="width:25%;">
																	</colgroup>

																	<thead>
																		<tr>
																			<th>WI</th>
																			<th>WO</th>
																			<th>EI</th>
																			<th>EO</th>
																		</tr>
																	</thead>

																	<tbody>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:30
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:30
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:30
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:37
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:37
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:10
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:38
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:58
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:58
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:34
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:46
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>

													</div>

													<div class="col-5">
														<div class="box-gray align-items-center">
															<h6 class="lh-base ps-0 mb-0">홍길동 <span class="text-primary ms-4 me-2">GNR</span> 46-9144</h6>
														</div>

														<div class="border-box border-bottom-0">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:80px;">
																	<col style="width:120px;">
																	<col style="width:100px;">
																	<col style="width:100px;">
																	<col style="width:auto;">
																</colgroup>

																<tbody>
																	<tr class="table-active">
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.01 (월)</td>
																		<td>06:50 <span class="checkin-num four">4</span></td>
																		<td>WO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.02 (화)</td>
																		<td>07:53</td>
																		<td>WO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.03 (수)</td>
																		<td>09:13</td>
																		<td>WO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="mdi mdi-airplane-takeoff text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">항공</span></td>
																		<td>도착 5/14 15시</td>
																		<td>대한항공</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="bx bx-car text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">렌트</span></td>
																		<td>카니발 9인승</td>
																		<td>허 1234</td>
																		<td>14~17</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="bx bx-buildings text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">호텔</span></td>
																		<td>골프텔 303호</td>
																		<td>14,15,16</td>
																		<td>3박4일</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="mdi mdi-bus-clock text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">픽업</span></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="border-box border-top-0 p-3">
															<div class="d-flex align-items-center mt-3 mb-3">
																<ul class="nav nav-tabs-custom nav-tabs-sm" role="tablist">
																	<li class="nav-item">
																		<a class="nav-link active" data-bs-toggle="tab" href="#bookingModalRightTab01" role="tab">
																			<span>VOC</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab02" role="tab">
																			<span>프론트</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab03" role="tab">
																			<span>경기</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab04" role="tab">
																			<span>식음</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab05" role="tab">
																			<span>프로샵</span>
																		</a>
																	</li>
																</ul>
																<button type="button" class="btn btn-outline-custom ms-auto">저장</button>
															</div>

															<div class="tab-content rounded bg-info-subtle p-3">
																<div class="tab-pane active" id="bookingModalRightTab01" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;">락카 청결상태 지적
																	락카내 쓰레기 정리 요청
																	2023.04.10 (토) 프론트 이지연 대리
																	조치 요청 전달 후 처리 완료</textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab02" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab03" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab04" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab05" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tab-pane" id="bookingModalTab04" role="tabpanel">
												<div class="row">
													<div class="col-7">
														<div class="box-gray align-items-center justify-content-between">
															<div class="d-flex align-items-center gap-5 me-5">
																<span class="h6 mb-0">23.05.01 (월)</span>
																<span class="h6 mb-0">06:50</span>
																<span class="h6 mb-0">WEST OUT</span>
															</div>

															<div class="d-flex gap-2 ms-5">
																<select class="form-select w-auto">
																	<option value="18홀" selected>18홀</option>
																</select>
																<select class="form-select w-auto">
																	<option value="4명" selected>4명</option>
																</select>
															</div>
														</div>

														<div class="border-box border-bottom-0">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:90px;">
																	<col style="width:auto">
																	<col style="width:90px;">
																	<col style="width:auto">
																</colgroup>

																<tbody>
																	<tr>
																		<th>예약자</th>
																		<td>홍길동</td>
																		<th>연락처</th>
																		<td>010-1224-2323</td>
																	</tr>
																	<tr class="table-bg-gray">
																		<th>변경 일자</th>
																		<td colspan="3">
																			<input type="text" class="form-control datepicker bg-transparent text-start border-0 p-0" value="23.07.10 (월)">
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="border-box mt-3">
															<div class="table-responsive table-fixed-head mb-0" style="max-height:486px;" data-simplebar>
																<table class="table table-layout-fixed text-center mb-0">
																	<colgroup>
																		<col style="width:25%;">
																		<col style="width:25%;">
																		<col style="width:25%;">
																		<col style="width:25%;">
																	</colgroup>

																	<thead>
																		<tr>
																			<th>WI</th>
																			<th>WO</th>
																			<th>EI</th>
																			<th>EO</th>
																		</tr>
																	</thead>

																	<tbody>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:30
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:30
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:30
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:37
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:37
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:10
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:38
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:58
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:58
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:34
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:46
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																		<tr>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:40
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">07:12
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">08:06
																				</div>
																			</td>
																			<td>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input" type="checkbox">06:54
																				</div>
																			</td>
																		</tr>
																	</tbody>
																</table>
															</div>
														</div>
													</div>

													<div class="col-5">
														<div class="box-gray align-items-center">
															<h6 class="lh-base ps-0 mb-0">홍길동 <span class="text-primary ms-4 me-2">GNR</span> 46-9144</h6>
														</div>

														<div class="border-box border-bottom-0">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:80px;">
																	<col style="width:120px;">
																	<col style="width:100px;">
																	<col style="width:100px;">
																	<col style="width:auto;">
																</colgroup>

																<tbody>
																	<tr class="table-active">
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.01 (월)</td>
																		<td>06:50 <span class="checkin-num four">4</span></td>
																		<td>CO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.02 (화)</td>
																		<td>07:53</td>
																		<td>BO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="far fa-clock text-secondary ms-2"></i> <span class="fw-bold text-secondary ms-1">예약</span></td>
																		<td>2023.05.03 (수)</td>
																		<td>09:13</td>
																		<td>BO</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="mdi mdi-airplane-takeoff text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">항공</span></td>
																		<td>도착 5/14 15시</td>
																		<td>대한항공</td>
																		<td></td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="bx bx-car text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">렌트</span></td>
																		<td>카니발 9인승</td>
																		<td>허 1234</td>
																		<td>14~17</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="bx bx-buildings text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">호텔</span></td>
																		<td>골프텔 303호</td>
																		<td>14,15,16</td>
																		<td>3박4일</td>
																		<td></td>
																	</tr>
																	<tr>
																		<td><i class="mdi mdi-bus-clock text-secondary ms-2"></i>  <span class="fw-bold text-secondary ms-1">픽업</span></td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td></td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="border-box border-top-0 p-3">
															<div class="d-flex align-items-center mt-3 mb-3">
																<ul class="nav nav-tabs-custom nav-tabs-sm" role="tablist">
																	<li class="nav-item">
																		<a class="nav-link active" data-bs-toggle="tab" href="#bookingModalRightTab01" role="tab">
																			<span>VOC</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab02" role="tab">
																			<span>프론트</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab03" role="tab">
																			<span>경기</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab04" role="tab">
																			<span>식음</span>
																		</a>
																	</li>
																	<li class="nav-item">
																		<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab05" role="tab">
																			<span>프로샵</span>
																		</a>
																	</li>
																</ul>
																<button type="button" class="btn btn-outline-custom ms-auto">저장</button>
															</div>

															<div class="tab-content rounded bg-info-subtle p-3">
																<div class="tab-pane active" id="bookingModalRightTab01" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;">락카 청결상태 지적
																	락카내 쓰레기 정리 요청
																	2023.04.10 (토) 프론트 이지연 대리
																	조치 요청 전달 후 처리 완료</textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab02" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab03" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab04" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>

																<div class="tab-pane" id="bookingModalRightTab05" role="tabpanel">
																	<textarea rows="7" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="tab-pane" id="bookingModalTab05" role="tabpanel">
												골프장 계약후 진행됩니다.
											</div>

											<div class="tab-pane" id="bookingModalTab06" role="tabpanel">
												골프장 계약후 진행됩니다.
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<p class="desc">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
										<!--div class="d-flex justify-content-between align-items-center w-100 m-0">
											<p class="desc">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
											<div class="d-flex gap-2">
												<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
												<button type="button" class="btn btn-custom">저장</button>
											</div>
										</div-->
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - bookingModal -->

						<div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="memberRegistration" aria-labelledby="memberRegistration">
							<div class="offcanvas-header pb-0">
								<h5 id="CollectiveRegistrationLabel">회원 정보</h5>
								<div class="d-flex flex-wrap justify-content-end gap-2 ms-auto">
									<button type="button" class="btn btn-outline-custom">비밀번호 변경</button>
									<button type="button" class="btn btn-outline-custom">저장</button>
									<button type="button" class="btn btn-outline-custom" data-bs-dismiss="offcanvas" aria-label="Close">취소</button>
								</div>
							</div>

							<div class="offcanvas-body">
								<div class="border-box border-bottom-0">
									<table class="table table-layout-fixed mb-0">
										<colgroup>
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
										</colgroup>

										<tbody>
											<tr>
												<th>성명<span class="text-primary">*</span></th>
												<td><input class="form-control" type="text" placeholder="국문"></td>
												<td colspan="4" class="ps-0">
													<div class="form-check form-check-inline col-8 p-0 me-2">
														<input class="form-control" type="text" placeholder="영문">
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="남" checked="">
														<label class="form-check-label" for="inlineRadio1">남</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="여">
														<label class="form-check-label" for="inlineRadio2">여</label>
													</div>
												</td>
											</tr>
											<tr>
												<th>국적</th>
												<td>
													<select class="form-select">
														<option value="여권 기준" selected>여권 기준</option>
														<option value="한국">한국</option>
														<option value="미국">미국</option>
													</select>
												</td>
												<th>연락처<span class="text-primary">*</span></th>
												<td>
													<div class="d-flex">
														<div class="form-check form-check-inline p-0 m-0">
															<select class="form-select w-auto">
																<option value="+82" selected>+82</option>
																<option value="+82">+82</option>
																<option value="+82">+82</option>
															</select>
														</div>
														<input class="form-control flex-fill" type="text">
													</div>
												</td>
												<th>ID(EMAIL)</th>
												<td><input class="form-control" type="text"></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="border-box border-bottom-0 mt-4">
									<table class="table table-layout-fixed mb-0">
										<colgroup>
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
										</colgroup>

										<tbody>
											<tr class="table-bg-gray">
												<th>회원 구분</th>
												<td>
													<select class="form-select">
														<option value="임직원" selected>임직원</option>
														<option value="법인 회원">법인 회원</option>
														<option value="인터넷 회원">인터넷 회원</option>
														<option value="비회원" >비회원</option>
													</select>
												</td>
												<th>회원 등급</th>
												<td>
													<select class="form-select">
														<option value="회원 등급" selected>회원 등급</option>
														<option value="회원 등급" >회원 등급</option>
													</select>
												</td>
												<th>회원 번호</th>
												<td><input class="form-control" type="text"></td>
											</tr>
											<tr>
												<th>할인 코드</th>
												<td>
													<div class="row w-100">
														<div class="col-9">
															<select class="form-select">
																<option value="지역1" selected>지역1</option>
																<option value="프로5">프로5</option>
																<option value="주니어7">주니어7</option>
																<option value="직원8">직원8</option>
															</select>
														</div>
														<div class="col-3 p-0 text-end">
															<span class="d-inline-block align-text-top pt-1">10,000</span>
														</div>
													</div>
												</td>
												<th>생년월일</th>
												<td>
													<div class="d-flex align-items-center justify-content-between">
														<div class="form-check form-check-inline ps-0 me-0">
															<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="1992.10.12">
														</div>
														<i class="bx bx-calendar font-size-15 ms-1 me-3"></i>
													</div>
												</td>
												<th>지역</th>
												<td>
													<select class="form-select">
														<option value="서울" selected>서울</option>
														<option value="부산">부산</option>
													</select>
												</td>
											</tr>
											<tr>
												<th class="align-top pt-2">주소</th>
												<td colspan="5">
													<div class="d-flex gap-2">
														<div class="form-check form-check-inline p-0 m-0">
															<input type="text" id="daum_postcode" class="form-control postcode" placeholder="우편번호">
														</div>
														<div class="col-5">
															<input type="text" id="daum_address" class="form-control addr" placeholder="주소">
														</div>
														<label for="addr" class="btn btn-outline-custom" onclick="daumPostcode()">우편번호 찾기</label>
													</div>
													<div class="col-8">
														<input type="text" id="daum_detailAddress" class="form-control" placeholder="상세 주소">
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="border-box border-bottom-0 mt-4">
									<table class="table table-layout-fixed mb-0">
										<colgroup>
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
										</colgroup>

										<tbody>
											<tr class="table-bg-gray">
												<th>약관 동의</th>
												<td>필수 / 약관 /  광고</td>
												<th>약관 동의일</th>
												<td>2023.05.01</td>
												<th>약관 동의 IP</th>
												<td>123.421.12.12</td>
											</tr>
											<tr>
												<th>가입일</th>
												<td>2023.05.01</td>
												<th>수신 동의</th>
												<td colspan="3">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
														<label class="form-check-label" for="inlineCheckbox1">알림</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
														<label class="form-check-label" for="inlineCheckbox2">문자</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" checked>
														<label class="form-check-label" for="inlineCheckbox3">EMAIL</label>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>

								<div class="border-bottom pb-3 mb-5"></div>

								<ul class="nav nav-tabs-custom memberModalTab mb-4" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#memberRegist01" role="tab">
											<span>부가정보</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist02" role="tab">
											<span>소속 단체</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist03" role="tab">
											<span>예약 내역</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist04" role="tab">
											<span>예약 대기</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist05" role="tab">
											<span>내장 내역</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist06" role="tab">
											<span>위약 내역</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist07" role="tab">
											<span>VOC</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist08" role="tab">
											<span>회원 성향</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist09" role="tab">
											<span>스코어</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist10" role="tab">
											<span>서류 / 증빙</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist11" role="tab">
											<span>기타</span>
										</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="memberRegist01" role="tabpanel">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>내장 참고</th>
														<td><input class="form-control" type="text"></td>
														<th>회원 특성</th>
														<td><input class="form-control" type="text"></td>
														<th>기타 메모</th>
														<td><input class="form-control" type="text"></td>
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">* 위 사항은 내장등록 시 회원정보에 표시됩니다.</p>

										<div class="border-box border-bottom-0 mt-4">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>예약 여부</th>
														<td>
															<div class="form-check form-check-inline ms-10">
																<input class="form-check-input" type="radio" name="radio01" id="radio01_01" value="유" checked>
																<label class="form-check-label" for="radio01_01">유</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="radio01" id="radio01_02" value="무">
																<label class="form-check-label" for="radio01_02">무</label>
															</div>
														</td>
														<th>주중 예약수</th>
														<td><input class="form-control" type="text" value="0"></td>
														<th>주말 예약수</th>
														<td><input class="form-control" type="text" value="0"></td>
													</tr>
													<tr>
														<th>핸디캡</th>
														<td><input class="form-control" type="text"></td>
														<th>핸디캡 갱신일</th>
														<td>
															<div class="d-flex align-items-center justify-content-between">
																<div class="form-check form-check-inline ps-0 me-0">
																	<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="1992.10.12">
																</div>
																<i class="bx bx-calendar font-size-15 ms-1 me-3"></i>
															</div>
														</td>
														<th>백 보관</th>
														<td>
															<div class="form-check form-check-inline ms-10">
																<input class="form-check-input" type="radio" name="radio02" id="radio02_01" value="보관" checked>
																<label class="form-check-label" for="radio02_01">보관</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="radio02" id="radio02_02" value="미보관">
																<label class="form-check-label" for="radio02_02">미보관</label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<div class="border-box border-bottom-0 mt-4">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>회원권</th>
														<td>
															<select class="form-select">
																<option value="회원권 선택" selected>회원권 선택</option>
																<option value="회원권1" >회원권1</option>
																<option value="회원권2" >회원권2</option>
															</select>
														</td>
														<th>주중 요금</th>
														<td>
															<select class="form-select">
																<option value="120" selected>120</option>
																<option value="130" >130</option>
																<option value="140" >140</option>
															</select>
														</td>
														<th>주말 요금</th>
														<td>
															<select class="form-select">
																<option value="120" selected>120</option>
																<option value="130" >130</option>
																<option value="140" >140</option>
															</select>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
									</div>

									<div class="tab-pane" id="memberRegist02" role="tabpanel">
										<table class="table table-layout-fixed text-center w-100 nowrap">
											<colgroup>
												<col style="width:60px;">
												<col style="width:70px;">
												<col style="width:80px;">
												<col style="width:auto;">
												<col style="width:120px;">
												<col style="width:120px;">
												<col style="width:120px;">
												<col style="width:100px;">
												<col style="width:150px;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>단체 연도</th>
													<th>단체 구분</th>
													<th>단체명</th>
													<th>단축명</th>
													<th>회원 / 팀</th>
													<th>희망 시기</th>
													<th>총무</th>
													<th>총무 연락처</th>
												</tr>
											</thead>

											<tbody>
												<tr role="button" data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration">
													<td>1</td>
													<td>2017</td>
													<td>연단체</td>
													<td>UN모터스</td>
													<td>UNM</td>
													<td>36 / 9</td>
													<td>1주차 일요일</td>
													<td>홍길동</td>
													<td>010-1234-5678</td>
												</tr>
												<tr role="button" data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration">
													<td>2</td>
													<td>2017</td>
													<td>임시단체</td>
													<td>경희MBA골프동호회</td>
													<td>경희M</td>
													<td>36 / 9</td>
													<td>1주차 일요일</td>
													<td>임나연</td>
													<td>010-1234-5678</td>
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
													<option value="10" selected>10</option>
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

									<div class="tab-pane" id="memberRegist03" role="tabpanel">
										<div class="table-fixed-head" data-simplebar>
											<table class="table table-hover text-center w-100 nowrap">
												<colgroup>
													<col style="min-width:60px;">
													<col style="min-width:100px;">
													<col style="min-width:120px;">
													<col style="min-width:60px;">
													<col style="min-width:200px;">
													<col style="min-width:90px;">
													<col style="min-width:90px;">
													<col style="min-width:120px;">
													<col style="min-width:120px;">
													<col style="min-width:200Px;">
													<col style="min-width:120Px;">
													<col style="min-width:120px;">
													<col style="min-width:100px;">
													<col style="min-width:120px;">
													<col style="min-width:120px;">
													<col style="min-width:120px;">
													<col style="min-width:300px; width:300px;">
												</colgroup>

												<thead>
													<tr>
														<th>구분</th>
														<th>예약 일자</th>
														<th>코스</th>
														<th>시간</th>
														<th>예약자명</th>
														<th>그린피</th>
														<th>인원</th>
														<th>캐디</th>
														<th>카트</th>
														<th>이벤트</th>
														<th>채널</th>
														<th>결제 관리</th>
														<th>예약 메모</th>
														<th>접수 일시</th>
														<th>ID(EMAIL)</th>
														<th>IP</th>
														<th>비고</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td>9</td>
														<td>23.06.05 (월)</td>
														<td>A</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>노 캐디</td>
														<td>5인승 전동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>B_골팡</td>
														<td>선불/입금대기</td>
														<td>GX / 2일</td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td>비고테스트비고테스트</td>
													</tr>
													<tr>
														<td>8</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>800,000</td>
														<td>4</td>
														<td>신입</td>
														<td>2인승 전동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>B_골팡</td>
														<td>200,000</td>
														<td>GX / 2일</td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td>비고테스트비고테스트</td>
													</tr>
													<tr>
														<td>7</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>6</td>
														<td>23.06.05 (월)</td>
														<td>A</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>프로</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>B_골팡</td>
														<td>선불/입금대기</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>5</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>800,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>B_골팡</td>
														<td>200,000</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>4</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>3</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>2</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>1</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
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
													<option value="10" selected>10</option>
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

									<div class="tab-pane" id="memberRegist04" role="tabpanel">
										<table class="table table-hover text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:60px;">
												<col style="min-width:100px;">
												<col style="min-width:60px;">
												<col style="min-width:90px;">
												<col style="min-width:90px;">
												<col style="min-width:60px;">
												<col style="min-width:90px;">
												<col style="min-width:300px; width:300px;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>희망 일자</th>
													<th>희망 코스</th>
													<th>희망 시간1</th>
													<th>희망 시간2</th>
													<th>적용 코스</th>
													<th>적용 시간</th>
													<th>비고</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>1</td>
													<td>23.06.05 (월)</td>
													<td>EI</td>
													<td>08:00</td>
													<td>09:00</td>
													<td>EI</td>
													<td>09:00</td>
													<td>비고테스트비고테스트</td>
												</tr>
												<tr>
													<td>2</td>
													<td>23.06.05 (월)</td>
													<td>EI</td>
													<td>08:00</td>
													<td>09:00</td>
													<td>EI</td>
													<td>09:00</td>
													<td>비고테스트비고테스트</td>
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
													<option value="10" selected>10</option>
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

									<div class="tab-pane" id="memberRegist05" role="tabpanel">
										<table class="table table-hover text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:60px;">
												<col style="min-width:100px;">
												<col style="min-width:60px;">
												<col style="min-width:90px;">
												<col style="min-width:90px;">
												<col style="min-width:90px;">
												<col style="min-width:90px;">
												<col style="min-width:90px">
												<col style="min-width:90px">
												<col style="min-width:90px">
												<col style="min-width:90px">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>내장 일자</th>
													<th>코스</th>
													<th>시간</th>
													<th>그린피</th>
													<th>대여료</th>
													<th>카트</th>
													<th>프로샵</th>
													<th>대식당</th>
													<th>그늘집</th>
													<th>기타</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>2</td>
													<td>23.06.05 (월)</td>
													<td>EI</td>
													<td>08:00</td>
													<td>510,000</td>
													<td>20,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
												</tr>
												<tr>
													<td>1</td>
													<td>23.06.05 (월)</td>
													<td>EI</td>
													<td>08:00</td>
													<td>510,000</td>
													<td>20,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
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
													<option value="10" selected>10</option>
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

									<div class="tab-pane" id="memberRegist06" role="tabpanel">
										<table class="table text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:70px;">
												<col style="min-width:100px;">
												<col style="min-width:40px;">
												<col style="min-width:60px;">
												<col style="min-width:90px;">
												<col style="min-width:80px;">
												<col style="min-width:80px;">
												<col style="min-width:80px;">
												<col style="min-width:80px;">
												<col style="min-width:80px;">
												<col style="min-width:auto;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>예약 일자</th>
													<th>코스</th>
													<th>티타임</th>
													<th>예약자</th>
													<th>위약 구분</th>
													<th>위약 사유</th>
													<th>위약 코드</th>
													<th>위약 조치</th>
													<th>내장 금지</th>
													<th>비고</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>2</td>
													<td>23.06.15 (금)</td>
													<td>EI</td>
													<td>11:33</td>
													<td>홍길동</td>
													<td>노쇼</td>
													<td>개인사정</td>
													<td>abdfd</td>
													<td>위약금 10만원</td>
													<td>23.06.20 (화)</td>
													<td>음주 만취 인사불성</td>
												</tr>
												<tr>
													<td>1</td>
													<td>23.06.15 (금)</td>
													<td>EI</td>
													<td>11:33</td>
													<td>홍길동</td>
													<td>노쇼</td>
													<td>개인사정</td>
													<td>abdfd</td>
													<td>위약금 10만원</td>
													<td>23.06.20 (화)</td>
													<td>음주 만취 인사불성</td>
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

									<div class="tab-pane" id="memberRegist07" role="tabpanel">
										<table class="table table-layout-fixed text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:80px; width:80px;">
												<col style="min-width:100px; width:100px;">
												<col style="min-width:60px; width:60px;">
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
													<th>유형</th>
													<th>참고 부서</th>
													<th>조치</th>
													<th>회원 말씀</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>4</td>
													<td>23.05.25 (월)</td>
													<td>07:00</td>
													<td>불만 / 캐디</td>
													<td>고객 지원(프론트)</td>
													<td>조치 완료</td>
													<td class="text-start text-truncate">홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고 </td>
												</tr>
												<tr>
													<td>3</td>
													<td>23.05.25 (월)</td>
													<td>07:00</td>
													<td>칭찬 / 식음</td>
													<td>지원팀(식음파트)</td>
													<td><span class="text-primary">미조치</span></td>
													<td class="text-start text-truncate">그늘집 만두가 유명하다고 해서 먹어봤는데 너무 맛있어요!!</td>
												</tr>
												<tr>
													<td>2</td>
													<td>23.05.25 (월)</td>
													<td>07:00</td>
													<td>건의 / 코스 관리</td>
													<td>고객 지원(경기)</td>
													<td>조치 완료</td>
													<td class="text-start text-truncate">오늘 이 골프장에 처음 온 골린이지만, 하늘 코스 전체적으로 티박스 잔디가...</td>
												</tr>
												<tr>
													<td>1</td>
													<td>23.05.25 (월)</td>
													<td>07:00</td>
													<td>건의 / 식음</td>
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

									<div class="tab-pane" id="memberRegist08" role="tabpanel">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>진행</th>
														<td>
															<div class="form-check form-check-inline ms-10">
																<input class="form-check-input" type="radio" name="radio03" id="radio03_01" value="느림" checked>
																<label class="form-check-label" for="radio03_01">느림</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="radio03" id="radio03_02" value="보통">
																<label class="form-check-label" for="radio03_02">보통</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="radio03" id="radio03_03" value="보통">
																<label class="form-check-label" for="radio03_03">빠름</label>
															</div>
														</td>
														<th>느린 이유</th>
														<td colspan="3"><input class="form-control" type="text" value="인터발이 너무 길어요. 진행포기 앞에 팀이 없어도 안감"></td>
													</tr>
													<tr>
														<th>특이사항1</th>
														<td><input class="form-control" type="text" value="인드라이버 커버 씌워두십니다."></td>
														<th>특이사항2</th>
														<td><input class="form-control" type="text" value="연습스윙 여러번 하심."></td>
														<th>특이사항3</th>
														<td><input class="form-control" type="text" value="자주하시는 말: 왜? 급해? 천천히 쳐"></td>
													</tr>
													<tr>
														<th>캐디 칭찬</th>
														<td><input class="form-control" type="text"></td>
														<th>드라이버</th>
														<td><input class="form-control" type="text" value="170m"></td>
														<th>어프로치</th>
														<td><input class="form-control" type="text" value="58, S"></td>
													</tr>
													<tr>
														<th>5번 아이언</th>
														<td><input class="form-control" type="text" value="140M"></td>
														<th>7번 아이언</th>
														<td><input class="form-control" type="text" value="120M"></td>
														<th>퍼터</th>
														<td><input class="form-control" type="text" value="커버 씌워두십니다."></td>
													</tr>
													<tr>
														<th>건의사항</th>
														<td colspan="5"><input class="form-control" type="text"></td>
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
									</div>

									<div class="tab-pane" id="memberRegist09" role="tabpanel">
										<table class="table table-layout-fixed text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:80px; width:80px;">
												<col style="min-width:100px; width:100px;">
												<col style="min-width:60px; width:60px;">
												<col style="min-width:100px; width:100px;">
												<col style="min-width:100px; width:100px;">
												<col style="width:auto;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>내장 일자</th>
													<th>시간</th>
													<th>전반 코스</th>
													<th>후반 코스</th>
													<th>스코어</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>2</td>
													<td>23.05.25 (월)</td>
													<td>07:00</td>
													<td>EAST IN</td>
													<td>EAST OUT</td>
													<td></td>
												</tr>
												<tr>
													<td>1</td>
													<td>23.05.25 (월)</td>
													<td>07:00</td>
													<td>EAST IN</td>
													<td>EAST OUT</td>
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

									<div class="tab-pane" id="memberRegist10" role="tabpanel">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>용도</th>
														<td><input class="form-control" type="text"></td>
													</tr>
													<tr>
														<th>증빙</th>
														<td>
															<!--div class="col">
																<label for="file01" class="btn btn-outline-custom mb-0">파일 첨부</label>
															</div>
															<div class="filebox flex-fill">
																<input class="form-control upload-name" readonly>
																<input type="file" id="file01">
															</div-->
															<!-- <input id="multiplefileupload" type="file" accept=".jpg,.gif,.png" multiple> -->
															<input id="multiplefileupload" type="file" multiple>
															<input id="input-2" name="input2[]" type="file" class="file"  data-show-upload="false" data-show-caption="true" multiple>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
									</div>

									<div class="tab-pane" id="memberRegist11" role="tabpanel">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>차량 번호</th>
														<td><input class="form-control" type="text"></td>
														<th>차량 구분</th>
														<td><input class="form-control" type="text"></td>
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
									</div>
								</div>
							</div>
						</div>
		                <!--//offcanvas -->

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

			$(".sortable").sortable({
				sort: function( event, ui ) {
					console.log(event, ui);
				}
			});
		});

		var modifyNum;
		var modifyTit;
		var modifyTxt;

		function modifyModal(element) {
			modifyNum = $('input:checkbox[name=tableCheck]:checked').length;
			modifyTit = $(element).text();
			modifyTxt = $(element).text();

			$('.modifyNum').text(modifyNum);
			$('.modifyTit').text(modifyTit.slice(0, -3));
			$('.modifyTxt').text(modifyTxt.slice(2));
		}

		function bookingModal(){
			$('.bookingModalTab li:first-child a').tab('show');
		}
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
