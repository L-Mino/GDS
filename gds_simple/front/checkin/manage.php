<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '내장 등록'; include "../../partials/title-meta.php"; ?>
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
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex align-items-center gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-lg border-0 h-100">
													<option value="23.05.01 (일)" selected>23.06.23 (금)</option>
													<option value="23.05.02 (화)">23.05.02 (화)</option>
												</select>
											</div>

											<div class="form-check form-check-inline search-area ps-0 me-0">
												<input class="form-control" type="text" placeholder="Search...">
												<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="코스 선택">
													<option value="EAST IN">EAST IN</option>
													<option value="EAST OUT">EAST OUT</option>
													<option value="WEST IN">WEST IN</option>
													<option value="WEST OUT">WEST OUT</option>
												</select>
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="티타임 선택">
													<option value="1부">1부</option>
													<option value="2부">2부</option>
													<option value="3부">3부</option>
												</select>
											</div>

											<div class="form-check form-check-inline align-top p-0 me-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="컬럼 선택">
													<option value="선택박스">선택박스</option>
													<option value="시간">시간</option>
													<option value="예약자">예약자</option>
													<option value="단체명">단체명</option>
													<option value="내장객">내장객</option>
													<option value="홀">홀</option>
													<option value="메모">메모</option>
												</select>
											</div>

											<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".rainCancelModal">우천 취소</button>

											<div class="form-check form-check-inline ms-3 me-2">
												<input class="form-check-input" type="checkbox" id="undetermined">
												<label class="form-check-label" for="undetermined">미확정</label>
											</div>

											<div class="form-check form-check-inline me-0">
												<input class="form-check-input" type="checkbox" id="confirmation">
												<label class="form-check-label" for="confirmation">확정</label>
											</div>

											<div class="d-flex align-items-center gap-3 ms-auto">
												<dl class="d-flex mb-0">
													<dt class="me-2">예약</dt>
													<dd class="mb-0">135</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">내장</dt>
													<dd class="mb-0">121</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">노쇼</dt>
													<dd class="mb-0">0</dd>
												</dl>
											</div>
										</div>

										<div class="checkin-wrap">
											<div class="h-100" data-simplebar>
												<div class="sortable booking-group d-flex gap-3">
													<div class="booking-area border-box border-bottom-0 table-fixed-head">
														<table class="table table-hover text-center mb-0">
															<thead>
																<tr>
																	<th colspan="7">EAST IN</th>
																</tr>
																<tr>
																	<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal">시간</th>
																	<th class="fw-normal">예약자</th>
																	<th class="fw-normal">단체명</th>
																	<th class="fw-normal">내장객</th>
																	<th class="fw-normal">홀</th>
																	<th class="fw-normal">메모</th>
																</tr>
																<!-- <tr>
																	<th style="width:25px;"><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal" style="min-width:55px;">시간</th>
																	<th class="fw-normal" style="min-width:60px;">예약자</th>
																	<th class="fw-normal" style="min-width:60px;">단체명</th>
																	<th class="fw-normal" style="min-width:220px;">내장객</th>
																	<th class="fw-normal" style="min-width:30px;">홀</th>
																	<th class="fw-normal" style="min-width:40px;">메모</th>
																</tr> -->
															</thead>

															<tbody>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name text-decoration-line-through opacity-50">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num three">3</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name opacity-50">홍길동길동</span>
																			<span class="checkin-name txt-hline"></span>
																		</div>
																	</td>
																	<td>18</td>
																	<td>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico front-new"></span>
																			<span class="status-ico match-new"></span>
																		</div>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico"></span>
																			<span class="status-ico shop-new"></span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>18</td>
																	<td>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico front-new"></span>
																			<span class="status-ico"></span>
																		</div>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico food-new"></span>
																			<span class="status-ico"></span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
														<table class="table table-hover text-center mb-0">
															<thead>
																<tr>
																	<th colspan="7">EAST OUT</th>
																</tr>
																<tr>
																	<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal">시간</th>
																	<th class="fw-normal">예약자</th>
																	<th class="fw-normal">단체명</th>
																	<th class="fw-normal">내장객</th>
																	<th class="fw-normal">홀</th>
																	<th class="fw-normal">메모</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name opacity-50">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name opacity-50">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
																	<td>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico front-new"></span>
																			<span class="status-ico match-new"></span>
																		</div>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico"></span>
																			<span class="status-ico shop-new"></span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
																	<td>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico front-new"></span>
																			<span class="status-ico"></span>
																		</div>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico food-new"></span>
																			<span class="status-ico"></span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
														<table class="table table-hover text-center mb-0">
															<thead>
																<tr>
																	<th colspan="7">WEST IN</th>
																</tr>
																<tr>
																	<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal">시간</th>
																	<th class="fw-normal">예약자</th>
																	<th class="fw-normal">단체명</th>
																	<th class="fw-normal">내장객</th>
																	<th class="fw-normal">홀</th>
																	<th class="fw-normal">메모</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name opacity-50">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name opacity-50">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
																	<td>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico front-new"></span>
																			<span class="status-ico match-new"></span>
																		</div>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico"></span>
																			<span class="status-ico shop-new"></span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
																	<td>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico front-new"></span>
																			<span class="status-ico"></span>
																		</div>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico food-new"></span>
																			<span class="status-ico"></span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
														<table class="table table-hover text-center mb-0">
															<thead>
																<tr>
																	<th colspan="7">WEST OUT</th>
																</tr>
																<tr>
																	<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal">시간</th>
																	<th class="fw-normal">예약자</th>
																	<th class="fw-normal">단체명</th>
																	<th class="fw-normal">내장객</th>
																	<th class="fw-normal">홀</th>
																	<th class="fw-normal">메모</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name opacity-50">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name opacity-50">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
																	<td>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico front-new"></span>
																			<span class="status-ico match-new"></span>
																		</div>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico"></span>
																			<span class="status-ico shop-new"></span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
																	<td>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico front-new"></span>
																			<span class="status-ico"></span>
																		</div>
																		<div class="d-flex justify-content-center">
																			<span class="status-ico food-new"></span>
																			<span class="status-ico"></span>
																		</div>
																	</td>
																</tr>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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
																	<td><span class="table-em">06:50</span></td>
																	<td>홍길동</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#manageCanvas" aria-controls="manageCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name">장길동</span>
																			<span class="checkin-name">안길동</span>
																		</div>
																	</td>
																	<td>18</td>
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

						<div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="manageCanvas" aria-labelledby="manageCanvasLabel">
							<div class="offcanvas-header justify-content-start align-items-center pb-0">
								<div class="d-flex gap-2 me-3">
									<button type="button" class="bg-transparent border-0 p-0"><span class="fc-icon fc-icon-chevrons-left align-middle fs-4 text-secondary"></span></button>
									<button type="button" class="bg-transparent border-0 p-0"><span class="fc-icon fc-icon-chevrons-right align-middle fs-4 text-secondary"></span></button>
								</div>

								<h5 id="manageCanvasLabel" class="mb-0">06:30&nbsp;&nbsp;EO&nbsp;&nbsp;박새로미</h5>
								<!--button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button-->
								<div class="d-flex flex-wrap justify-content-end gap-2 ms-auto">
									<button type="button" class="btn btn-outline-custom ms-auto" data-bs-dismiss="offcanvas" aria-label="Close">취소</button>
									<button type="button" class="btn btn-outline-custom">저장</button>
								</div>
							</div>
							<div class="offcanvas-body">
								<div class="d-flex align-items-center gap-2 mb-3">
									<div class="btn-group">
										<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".moveModal">이동</button>
										<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".articleModal">대여</button>
										<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".moveGroupModal">조 변경</button>
										<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".noshowModal">노쇼</button>
									</div>

									<div class="form-check form-check-inline align-top p-0 me-0">
										<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="컬럼 선택">
											<option value="확정">확정</option>
											<option value="내장객">내장객</option>
											<option value="성별">성별</option>
											<option value="락카">락카</option>
											<option value="홀">홀</option>
											<option value="추가">추가</option>
											<option value="카트">카트</option>
											<option value="캐디">캐디</option>
											<option value="대여료">대여료</option>
											<option value="할인">할인</option>
											<option value="총금액">총금액</option>
										</select>
									</div>
								</div>

								<table class="table table-hover text-center mb-0">
									<colgroup>
										<col style="min-width:80px; width:80px;">
										<col style="min-width:120px; width:auto;">
										<col style="min-width:70px; width:70px;">
										<col style="min-width:90px; width:90px;">
										<col style="min-width:70px; width:auto;">
										<col style="width:60px;">
										<col style="min-width:40px; width:40px;">
										<col style="min-width:70px; width:auto;;">
										<col style="min-width:70px; width:auto;;">
										<col style="min-width:70px; width:auto;">
										<col style="min-width:150px; width:auto;">
										<col style="min-width:70px; width:auto;">
									</colgroup>

									<thead>
										<tr>
											<th>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" name="tableCheckAll">
													<label class="form-check-label fw-bold" for="checkAll">확정</label>
												</div>
											</th>
											<th>내장객</th>
											<th>성별</th>
											<th>락카 <a href="javascript:void(0);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a></th>
											<th>그린피</th>
											<th>홀</th>
											<th>추가</th>
											<th>카트</th>
											<th>캐디</th>
											<th>대여료</th>
											<th>할인</th>
											<th>총금액</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td><input class="form-check-input tableCheck" type="checkbox"></td>
											<td>박새로미</td>
											<td>
												<select class="form-select w-auto py-0 mx-auto">
													<option value="남" selected>남</option>
													<option value="여">여</option>
												</select>
											</td>
											<td>
												<div class="d-flex align-items-center gap-1">
													<input class="form-control text-center p-0 mx-auto" type="text" value="1111">
													<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
												</div>
											</td>
											<td>18h-15</td>
											<td>18</td>
											<td><input class="form-control text-center p-0 mx-auto" type="text" value="N" data-bs-toggle="modal" data-bs-target=".addHoleModal"></td>
											<td>
												<div class="d-flex align-items-center">
													<select class="form-select w-auto py-0 mx-auto">
														<option value="5-전동" selected>5-전동</option>
														<option value="2-전동">2-전동</option>
														<option value="수동">수동</option>
													</select>

													<span>100,000</span>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<select class="form-select w-auto py-0 mx-auto">
														<option value="P" selected>P</option>
														<option value="J">J</option>
														<option value="N">N</option>
													</select>
													<span>150,000</span>
												</div>
											</td>
											<td>20,000</td>
											<td>프로5 - 50,000</td>
											<td>380,000</td>
										</tr>
										<tr>
											<td><input class="form-check-input tableCheck" type="checkbox"></td>
											<td>홍이원</td>
											<td>
												<select class="form-select w-auto py-0 mx-auto">
													<option value="남" selected>남</option>
													<option value="여">여</option>
												</select>
											</td>
											<td>
												<div class="d-flex align-items-center gap-1">
													<input class="form-control text-center p-0 mx-auto" type="text" value="1111">
													<a href="javascript:void(0);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
												</div>
											</td>
											<td>18h-15</td>
											<td>18</td>
											<td><input class="form-control text-center p-0 mx-auto" type="text" value="N" data-bs-toggle="modal" data-bs-target=".addHoleModal"></td>
											<td>
												<div class="d-flex align-items-center">
													<select class="form-select w-auto py-0 mx-auto">
														<option value="5-전동" selected>5-전동</option>
														<option value="2-전동">2-전동</option>
														<option value="수동">수동</option>
													</select>
													<span>100,000</span>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<select class="form-select w-auto py-0 mx-auto">
														<option value="P" selected>P</option>
														<option value="J">J</option>
														<option value="N">N</option>
													</select>
													<span>150,000</span>
												</div>
											</td>
											<td>20,000</td>
											<td>프로5 - 50,000</td>
											<td>380,000</td>
										</tr>
										<tr>
											<td><input class="form-check-input tableCheck" type="checkbox"></td>
											<td>장길수</td>
											<td>
												<select class="form-select w-auto py-0 mx-auto">
													<option value="남" selected>남</option>
													<option value="여">여</option>
												</select>
											</td>
											<td>
												<div class="d-flex align-items-center gap-1">
													<input class="form-control text-center p-0 mx-auto" type="text" value="1111">
													<a href="javascript:void(0);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
												</div>
											</td>
											<td>18h-15</td>
											<td>18</td>
											<td><input class="form-control text-center p-0 mx-auto" type="text" value="N" data-bs-toggle="modal" data-bs-target=".addHoleModal"></td>
											<td>
												<div class="d-flex align-items-center">
													<select class="form-select w-auto py-0 mx-auto">
														<option value="5-전동" selected>5-전동</option>
														<option value="2-전동">2-전동</option>
														<option value="수동">수동</option>
													</select>
													<span>100,000</span>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<select class="form-select w-auto py-0 mx-auto">
														<option value="P" selected>P</option>
														<option value="J">J</option>
														<option value="N">N</option>
													</select>
													<span>150,000</span>
												</div>
											</td>
											<td>20,000</td>
											<td>프로5 - 50,000</td>
											<td>380,000</td>
										</tr>
										<tr>
											<td><input class="form-check-input tableCheck" type="checkbox"></td>
											<td>김아연</td>
											<td>
												<select class="form-select w-auto py-0 mx-auto">
													<option value="남" selected>남</option>
													<option value="여">여</option>
												</select>
											</td>
											<td>
												<div class="d-flex align-items-center gap-1">
													<input class="form-control text-center p-0 mx-auto" type="text" value="1111">
													<a href="javascript:void(0);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
												</div>
											</td>
											<td>18h-15</td>
											<td>18</td>
											<td><input class="form-control text-center p-0 mx-auto" type="text" value="N" data-bs-toggle="modal" data-bs-target=".addHoleModal"></td>
											<td>
												<div class="d-flex align-items-center">
													<select class="form-select w-auto py-0 mx-auto">
														<option value="5-전동" selected>5-전동</option>
														<option value="2-전동">2-전동</option>
														<option value="수동">수동</option>
													</select>
													<span>100,000</span>
												</div>
											</td>
											<td>
												<div class="d-flex align-items-center">
													<select class="form-select w-auto py-0 mx-auto">
														<option value="P" selected>P</option>
														<option value="J">J</option>
														<option value="N">N</option>
													</select>
													<span>150,000</span>
												</div>
											</td>
											<td>20,000</td>
											<td>프로5 - 50,000</td>
											<td>380,000</td>
										</tr>
										<tr>
											<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
										</tr>
									</tbody>
								</table>


								<span class="d-inline-block fw-semibold font-size-15 mt-4 mb-2">내장객 정보</span>
								<table class="table table-hover text-center mb-0">
									<!--colgroup>
										<col style="min-width:80px; width:80px;">
										<col style="min-width:120px; width:auto;">
										<col style="min-width:70px; width:70px;">
										<col style="min-width:90px; width:90px;">
										<col style="min-width:70px; width:auto;">
										<col style="width:60px;">
										<col style="min-width:40px; width:40px;">
										<col style="min-width:70px; width:auto;;">
										<col style="min-width:70px; width:auto;;">
										<col style="min-width:70px; width:auto;">
										<col style="min-width:150px; width:auto;">
										<col style="min-width:70px; width:auto;">
									</!colgroup-->

									<thead>
										<tr>
											<th>내장객</th>
											<th>연락처</th>
											<th>단체명</th>
											<th>구분 / 등급 / 번호</th>
											<th>할인코드</th>
											<th>내장 참고</th>
											<th>회원 특성</th>
											<th>기타 메모</th>
										</tr>
									</thead>

									<tbody>
										<tr>
											<td>
												<div class="d-flex justify-content-between align-items-center">
													<span class="col-9 text-center">박새로미</span>
													<span class="voc-btn" data-bs-toggle="modal" data-bs-target=".addVocModal">VOC</span>
												</div>
											</td>
											<td>010-1234-5678</td>
											<td>클라스클라스</td>
											<td>F / MVP / 12-1324</td>
											<td>프로5</td>
											<td><input class="form-control text-center" type="text"></td>
											<td><input class="form-control text-center" type="text"></td>
											<td><input class="form-control text-center" type="text"></td>
										</tr>
										<tr>
											<td>
												<div class="d-flex justify-content-between align-items-center">
													<span class="col-9 text-center">홍이원</span>
												</div>
											</td>
											<td>010-1234-5678</td>
											<td>클라스</td>
											<td>F / MVP / 12-1324</td>
											<td>프로5</td>
											<td><input class="form-control text-center" type="text"></td>
											<td><input class="form-control text-center" type="text"></td>
											<td><input class="form-control text-center" type="text"></td>
										</tr>
										<tr>
											<td>
												<div class="d-flex justify-content-between align-items-center">
													<span class="col-9 text-center">장길수</span>
												</div>
											</td>
											<td>010-1234-5678</td>
											<td>클라스</td>
											<td>F / MVP / 12-1324</td>
											<td>프로5</td>
											<td><input class="form-control text-center" type="text"></td>
											<td><input class="form-control text-center" type="text"></td>
											<td><input class="form-control text-center" type="text"></td>
										</tr>
										<tr>
											<td>
												<div class="d-flex justify-content-between align-items-center">
													<span class="col-9 text-center">김아연</span>
													<span class="voc-btn" data-bs-toggle="modal" data-bs-target=".addVocModal">VOC</span>
												</div>
											</td>
											<td>010-1234-5678</td>
											<td>클라스</td>
											<td>F / MVP / 12-1324</td>
											<td>프로5</td>
											<td><input class="form-control text-center" type="text"></td>
											<td><input class="form-control text-center" type="text"></td>
											<td><input class="form-control text-center" type="text"></td>
										</tr>
									</tbody>
								</table>

								<div class="border-bottom p-3">
									<div class="d-flex align-items-center mb-3">
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
										</ul>
										<button type="button" class="btn btn-outline-custom ms-auto">저장</button>
									</div>

									<div class="tab-content rounded bg-info-subtle p-3">
										<div class="tab-pane active" id="bookingModalRightTab01" role="tabpanel">
											<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;">락카 청결상태 지적&#13;&#10락카내 쓰레기 정리 요청&#13;&#10 2023.04.10 (토) 프론트 이지연 대리&#13;&#10조치 요청 전달 후 처리 완료</textarea>
										</div>

										<div class="tab-pane" id="bookingModalRightTab02" role="tabpanel">
											<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
										</div>

										<div class="tab-pane" id="bookingModalRightTab03" role="tabpanel">
											<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
										</div>

										<div class="tab-pane" id="bookingModalRightTab04" role="tabpanel">
											<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="modal fade confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body">
										<p class="text-center font-size-14 fw-semibold pt-4 mb-0">내장 확정하시겠습니까?</p>
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
		                <!--//modal - confirmModal -->

						<div class="modal fade rainCancelModal" tabindex="-1" aria-labelledby="rainCancelModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body">
										<p class="text-center font-size-14 fw-semibold pt-4 mb-0">우천 취소로 설정하시겠습니까?</p>
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

						<div class="modal fade noshowModal" tabindex="-1" aria-labelledby="noshowModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body">
										<p class="text-center font-size-14 fw-semibold pt-4 mb-0">노쇼로 설정하시겠습니까?</p>
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

						<div class="modal fade addHoleModal" tabindex="-1" aria-labelledby="addHoleModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addHoleModalLabel">홀 추가</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr class="table-bg-gray">
														<td><span class="text-blue fw-semibold ms-2">23.06.23 (금)</span><span class="ms-5">06:30&nbsp;&nbsp;&nbsp;WI&nbsp;&nbsp;&nbsp;김동준&nbsp;&nbsp;&nbsp;18h-20</span></td>
													</tr>
												</tbody>
											</table>
										</div>

										<div class="border-box border-bottom-0 mt-3">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:90px;">
													<col style="width:auto">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th><span class="ms-1">홀 추가</span></th>
														<td>
															<div class="form-check form-check-inline me-2">
																<input class="form-check-input" type="radio" name="addHoleRadio" id="addHoleRadio01" value="9홀" onclick="$(this).parents('td').find('select').focus();" checked>
																<label class="form-check-label" for="addHoleRadio01">9홀</label>
															</div>
															<div class="form-check form-check-inline p-0 m-0">
																<select class="form-select" onclick="$(this).parents('td').find('input[type=radio]').prop('checked', true);">
																	<option value="추가 그린피" selected disabled>추가 그린피</option>
																	<option value="+9H-11">+9H-11</option>
																	<option value="+9H-12">+9H-12</option>
																	<option value="+9H-13">+9H-13</option>
																</select>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline me-2">
																<input class="form-check-input" type="radio" name="addHoleRadio" id="addHoleRadio02" value="18홀" onclick="$(this).parents('td').find('select').focus();">
																<label class="form-check-label" for="addHoleRadio02">18홀</label>
															</div>
															<div class="form-check form-check-inline p-0 m-0">
																<select class="form-select" onclick="$(this).parents('td').find('input[type=radio]').prop('checked', true);">
																	<option value="추가 그린피" selected disabled>추가 그린피</option>
																	<option value="18h-15">18h-15</option>
																	<option value="18h-16">18h-16</option>
																	<option value="18h-17">18h-17</option>
																</select>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<div class="table-fixed-head" data-simplebar style="max-height:167px;">
											<table class="table table-layout-fixed text-center mb-0" >
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
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio01" value="11:30" checked>
																<label class="form-check-label" for="addHoleTimeRadio01">11:30</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio02" value="11:40">
																<label class="form-check-label" for="addHoleTimeRadio02">11:40</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio03" value="11:30">
																<label class="form-check-label" for="addHoleTimeRadio03">11:30</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio04" value="11:40">
																<label class="form-check-label" for="addHoleTimeRadio04">11:40</label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio05" value="11:37">
																<label class="form-check-label" for="addHoleTimeRadio05">11:37</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio06" value="11:47">
																<label class="form-check-label" for="addHoleTimeRadio06">11:47</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio07" value="11:37">
																<label class="form-check-label" for="addHoleTimeRadio07">11:37</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio08" value="11:47">
																<label class="form-check-label" for="addHoleTimeRadio08">11:47</label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio09" value="11:44">
																<label class="form-check-label" for="addHoleTimeRadio09">11:44</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio10" value="11:54">
																<label class="form-check-label" for="addHoleTimeRadio10">11:54</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio11" value="11:44">
																<label class="form-check-label" for="addHoleTimeRadio11">11:44</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio12" value="11:54">
																<label class="form-check-label" for="addHoleTimeRadio12">11:54</label>
															</div>
														</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio13" value="11:51">
																<label class="form-check-label" for="addHoleTimeRadio13">11:51</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio14" value="12:01">
																<label class="form-check-label" for="addHoleTimeRadio14">12:01</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio15" value="11:51">
																<label class="form-check-label" for="addHoleTimeRadio15">11:51</label>
															</div>
														</td>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="addHoleTimeRadio" id="addHoleTimeRadio16" value="12:01">
																<label class="form-check-label" for="addHoleTimeRadio16">12:01</label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<table class="table table-hover text-center mt-4 mb-0">
											<colgroup>
												<col style="min-width:40px; width:40px;">
												<col style="min-width:120px;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="width:auto;">
											</colgroup>

											<thead>
												<tr>
													<th><input class="form-check-input" type="checkbox" name="tableCheckAll" checked></th>
													<th>내장객</th>
													<th>추가 그린피</th>
													<th>추가 카트피</th>
													<th>추가 캐디피</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
													<td>김동준</td>
													<td>110,000</td>
													<td>12,500</td>
													<td>150,000</td>
												</tr>
												<tr>
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
													<td>김아연</td>
													<td>110,000</td>
													<td>12,500</td>
													<td></td>
												</tr>
												<tr>
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
													<td>김민준</td>
													<td>110,000</td>
													<td>12,500</td>
													<td></td>
												</tr>
												<tr>
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
													<td>김백동</td>
													<td>110,000</td>
													<td>12,500</td>
													<td></td>
												</tr>
											</tbody>
										</table>
									</div>

									<div class="modal-footer">
										<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
										<button type="button" class="btn btn-custom">저장</button>
									</div>
								</div>
							</div>
						</div>
		                <!--//modal - addHoleModal -->

						<div class="modal fade articleModal" tabindex="-1" aria-labelledby="articleModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="articleModalLabel">물품 대여</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-fixed table-responsive w-100 text-center nowrap mb-0">
												<thead>
													<tr>
														<th><input class="form-check-input" type="checkbox" name="tableCheckAll"></th>
														<th>홀</th>
														<th>대여 품목</th>
														<th>대여료</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td><input class="form-check-input tableCheck" type="checkbox"></td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="홀">홀</option>
																<option value="18" selected>18</option>
																<option value="9">9</option>
															</select>
														</td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="품목">품목</option>
																<option value="신발" selected>신발</option>
																<option value="클럽">클럽</option>
															</select>
														</td>
														<td>10,000</td>
													</tr>
													<tr>
														<td><input class="form-check-input tableCheck" type="checkbox"></td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="홀">홀</option>
																<option value="18" selected>18</option>
																<option value="9">9</option>
															</select>
														</td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="품목">품목</option>
																<option value="신발">신발</option>
																<option value="클럽" selected>클럽</option>
															</select>
														</td>
														<td>20,000</td>
													</tr>
													<tr>
														<td><input class="form-check-input tableCheck" type="checkbox"></td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="홀" selected>홀</option>
																<option value="18">18</option>
																<option value="9">9</option>
															</select>
														</td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="품목" selected>품목</option>
																<option value="신발">신발</option>
																<option value="클럽">클럽</option>
															</select>
														</td>
														<td>0</td>
													</tr>
													<tr>
														<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

									<div class="modal-footer">
										<div class="d-flex align-items-center gap-2">
											<button type="button" class="btn btn-custom">삭제</button>
											<button type="button" class="btn btn-custom">저장</button>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - articleModal -->

						<div class="modal fade moveGroupModal" tabindex="-1" aria-labelledby="moveGroupModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="bookingModalLabel">조 변경</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="row">
											<div class="col-3">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:50px;">
														<col style="width:40px;">
														<col style="width:40px;">
														<col style="width:80px;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>시간</th>
															<th>코스</th>
															<th>홀</th>
															<th>예약자</th>
															<th>단체팀</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-active">
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>이승준</td>
															<td>이승준 3팀</td>
														</tr>
														<tr>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>이성호</td>
															<td>이승준 3팀</td>
														</tr>
														<tr>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>이성호</td>
															<td>이승준 3팀</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="col-9">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:80px;">
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:50px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>구분</th>
															<th>시간</th>
															<th>코스</th>
															<th>성명</th>
															<th>성별</th>
															<th>락카</th>
															<th>요금</th>
															<th>단체팀</th>
															<th>홀</th>
															<th>입장료</th>
															<th>카트료</th>
															<th>대여료</th>
															<th>추가 카트료</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>EI</td>
															<td>이호권</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>EI</td>
															<td>정영철</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>EI</td>
															<td>윤종간</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

										<div class="row">
											<div class="col-3"></div>
											<div class="col-9">
												<div class="d-flex justify-content-center gap-2 mb-3">
													<button type="button" class="btn btn-outline-custom rounded-0 p-0"><i class="bx bx-chevron-up bx-sm lh-1 align-top"></i></button>
													<button type="button" class="btn btn-outline-custom rounded-0 p-0"><i class="bx bx-chevron-down bx-sm lh-1 align-top"></i></button>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-3">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:50px;">
														<col style="width:40px;">
														<col style="width:40px;">
														<col style="width:80px;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>시간</th>
															<th>코스</th>
															<th>홀</th>
															<th>예약자</th>
															<th>단체팀</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>이승준</td>
															<td>이승준 3팀</td>
														</tr>
														<tr class="table-active">
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>이성호</td>
															<td>이승준 3팀</td>
														</tr>
														<tr>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>이성호</td>
															<td>이승준 3팀</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="col-9">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:80px;">
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:50px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>구분</th>
															<th>시간</th>
															<th>코스</th>
															<th>성명</th>
															<th>성별</th>
															<th>락카</th>
															<th>요금</th>
															<th>단체팀</th>
															<th>홀</th>
															<th>입장료</th>
															<th>카트료</th>
															<th>대여료</th>
															<th>추가 카트료</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>EI</td>
															<td>이성호</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>EI</td>
															<td>조현욱</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>EI</td>
															<td>정영철</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 2팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>EI</td>
															<td>김동안</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>EI</td>
															<td>장만덕</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 2팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - moveGroupModal -->

						<div class="modal fade copyModal" tabindex="-1" aria-labelledby="copyModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="copyModalLabel">복사</h5>
										<button type="button" class="btn btn-custom ms-auto me-3">저장</button>
										<button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="row">
											<div class="col-9">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:40px;">
														<col style="width:60px;">
														<col style="width:40px;">
														<col style="width:60px;">
														<col style="width:50px;">
														<col style="width:70px;">
														<col style="width:auto;">
														<col style="width:40px;">
														<col style="width:40px;">
														<col style="width:auto;">
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:90px;">
														<col style="width:90px;">
													</colgroup>

													<thead>
														<tr>
															<th><input class="form-check-input" type="checkbox" name="tableCheckAll" checked></th>
															<th>성명</th>
															<th>코스</th>
															<th>타입</th>
															<th>성별</th>
															<th>락카</th>
															<th>요금</th>
															<th>홀</th>
															<th>카트</th>
															<th>할인 금액</th>
															<th>그린피</th>
															<th>카트료</th>
															<th>대여료</th>
															<th>추가 그린피</th>
															<th>추가 카트료</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
															<td>전태수</td>
															<td>EI</td>
															<td>06:47</td>
															<td>남자</td>
															<td>463</td>
															<td>일반18</td>
															<td>18</td>
															<td>1</td>
															<td></td>
															<td>180,000</td>
															<td>100,000</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
															<td>이상오</td>
															<td>EI</td>
															<td>06:47</td>
															<td>남자</td>
															<td>463</td>
															<td>일반18</td>
															<td>18</td>
															<td>1</td>
															<td></td>
															<td>180,000</td>
															<td>100,000</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
															<td>박아오</td>
															<td>EI</td>
															<td>06:47</td>
															<td>남자</td>
															<td>463</td>
															<td>일반18</td>
															<td>18</td>
															<td>1</td>
															<td></td>
															<td>180,000</td>
															<td>100,000</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
															<td>김이아</td>
															<td>EI</td>
															<td>06:47</td>
															<td>남자</td>
															<td>463</td>
															<td>일반18</td>
															<td>18</td>
															<td>1</td>
															<td></td>
															<td>180,000</td>
															<td>100,000</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="col-3">
												<table class="table table-layout-fixed text-center">
													<colgroup>
														<col style="width:14%;">
														<col style="width:20%;">
														<col style="width:22%;">
														<col style="width:20%;">
														<col style="width:24%;">
													</colgroup>

													<thead>
														<tr>
															<th>선택</th>
															<th>시간</th>
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark" style="">
																		<li><button type="button" class="dropdown-item">BI</button></li>
																		<li><button type="button" class="dropdown-item">BO</button></li>
																		<li><button type="button" class="dropdown-item">CI</button></li>
																		<li><button type="button" class="dropdown-item">CO</button></li>
																	</ul>
																</div>
															</th>
															<th>홀</th>
															<th>그린피</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><input class="form-check-input tableRadio" type="radio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input tableRadio" type="radio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input tableRadio" type="radio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input tableRadio" type="radio"></td>
															<td>13:48</td>
															<td>WO</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - copyModal -->

						<div class="modal fade moveModal" tabindex="-1" aria-labelledby="moveModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="moveModalLabel">이동</h5>
										<button type="button" class="btn btn-custom ms-auto me-3">저장</button>
										<button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="row">
											<div class="col-9">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:40px;">
														<col style="width:60px;">
														<col style="width:40px;">
														<col style="width:60px;">
														<col style="width:50px;">
														<col style="width:70px;">
														<col style="width:auto;">
														<col style="width:40px;">
														<col style="width:40px;">
														<col style="width:auto;">
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:90px;">
														<col style="width:90px;">
													</colgroup>

													<thead>
														<tr>
															<th><input class="form-check-input" type="checkbox" name="tableCheckAll" checked></th>
															<th>성명</th>
															<th>코스</th>
															<th>타입</th>
															<th>성별</th>
															<th>락카</th>
															<th>요금</th>
															<th>홀</th>
															<th>카트</th>
															<th>할인 금액</th>
															<th>그린피</th>
															<th>카트료</th>
															<th>대여료</th>
															<th>추가 그린피</th>
															<th>추가 카트료</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
															<td>전태수</td>
															<td>EI</td>
															<td>06:47</td>
															<td>남자</td>
															<td>463</td>
															<td>일반18</td>
															<td>18</td>
															<td>1</td>
															<td></td>
															<td>180,000</td>
															<td>100,000</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
															<td>이상오</td>
															<td>EI</td>
															<td>06:47</td>
															<td>남자</td>
															<td>463</td>
															<td>일반18</td>
															<td>18</td>
															<td>1</td>
															<td></td>
															<td>180,000</td>
															<td>100,000</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
															<td>박아오</td>
															<td>EI</td>
															<td>06:47</td>
															<td>남자</td>
															<td>463</td>
															<td>일반18</td>
															<td>18</td>
															<td>1</td>
															<td></td>
															<td>180,000</td>
															<td>100,000</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
															<td>김이아</td>
															<td>EI</td>
															<td>06:47</td>
															<td>남자</td>
															<td>463</td>
															<td>일반18</td>
															<td>18</td>
															<td>1</td>
															<td></td>
															<td>180,000</td>
															<td>100,000</td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="col-3">
												<table class="table table-layout-fixed text-center">
													<colgroup>
														<col style="width:14%;">
														<col style="width:20%;">
														<col style="width:22%;">
														<col style="width:20%;">
														<col style="width:24%;">
													</colgroup>

													<thead>
														<tr>
															<th>선택</th>
															<th>시간</th>
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">BI</button></li>
																		<li><button type="button" class="dropdown-item">BO</button></li>
																		<li><button type="button" class="dropdown-item">CI</button></li>
																		<li><button type="button" class="dropdown-item">CO</button></li>
																	</ul>
																</div>
															</th>
															<th>홀</th>
															<th>그린피</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><input class="form-check-input tableRadio" type="radio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input tableRadio" type="radio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input tableRadio" type="radio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input tableRadio" type="radio"></td>
															<td>13:48</td>
															<td>WO</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - moveModal -->

						<div class="modal fade addVocModal" tabindex="-1" aria-labelledby="addVocModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
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
														<th>코스 / 시간</th>
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
																	<option value="코스 관리" selected>코스 관리</option>
																	<option value="코스 관리">코스 관리</option>
																	<option value="코스 관리">코스 관리</option>
																	<option value="코스 관리">코스 관리</option>
																</select>
															</div>
														</td>
														<th>참고 부서</th>
														<td>
															<select class="form-select ps-0">
																<option value="고객 지원(경기)" selected>고객 지원(경기)</option>
																<option value="고객 지원(경기)">고객 지원(경기)</option>
																<option value="고객 지원(경기)">고객 지원(경기)</option>
																<option value="고객 지원(경기)">고객 지원(경기)</option>
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
																<input type="text" class="form-control datepicker bg-transparent text-start border-0 p-0 flex-fill" placeholder="23.05.02 (화)"> <i class="bx bx-calendar font-size-15 pe-12 ms-auto"></i>
															</div>
														</td>
														<th>조치 상태</th>
														<td>
															<select class="form-select ps-0">
																<option value="조치 대기">조치 대기</option>
																<option value="조치중">조치중</option>
																<option value="조치 완료" selected>조치 완료</option>
															</select>
														</td>
													</tr>
													<tr>
														<th>조치 부서</th>
														<td>
															<select class="form-select ps-0">
																<option value="고객 지원(경기)" selected>고객 지원(경기)</option>
																<option value="고객 지원(경기)">고객 지원(경기)</option>
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
											<p class="desc">등록일 : 2023/04/10 09:00:18 | 등록자 : 고객 지원(경기) / 홍길동 팀장</p>
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

				<?php include "../../partials/footer.php"; ?>

            </div><!-- end main content-->
        </div><!-- END layout-wrapper -->

		<?php include "../../partials/right-sidebar.php"; ?>
		<?php include "../../partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			menuActive(2); //OneDepth

			$(".sortable").sortable();
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
