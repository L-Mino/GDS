<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '일일 팀 정산 / 관리'; include "../partials/title-meta.php"; ?>
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
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="티타임 선택">
													<option value="1부">1부</option>
													<option value="2부">2부</option>
													<option value="3부">3부</option>
												</select>
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="구분 선택">
													<option value="EAST IN">EAST IN</option>
													<option value="EAST OUT">EAST OUT</option>
													<option value="WEST IN">WEST IN</option>
													<option value="WEST OUT">WEST OUT</option>
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

											<div class="form-check form-check-inline ms-3 me-2">
												<input class="form-check-input" type="checkbox" id="undetermined">
												<label class="form-check-label" for="undetermined">미정산</label>
											</div>

											<div class="form-check form-check-inline me-0">
												<input class="form-check-input" type="checkbox" id="confirmation">
												<label class="form-check-label" for="confirmation">정산</label>
											</div>

											<div class="d-flex align-items-center gap-3 ms-auto">
												<dl class="d-flex mb-0">
													<dt class="me-2">내장팀</dt>
													<dd class="mb-0">135</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">정산팀</dt>
													<dd class="mb-0">121</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">미정산팀</dt>
													<dd class="mb-0">100</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">인원</dt>
													<dd class="mb-0">360</dd>
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
																	<th colspan="9">EAST IN</th>
																</tr>
																<tr>
																	<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal">시간</th>
																	<th class="fw-normal">예약자</th>
																	<th class="fw-normal">금액</th>
																	<th class="fw-normal">단체명</th>
																	<th class="fw-normal">내장객</th>
																	<th class="fw-normal">Bill</th>
																	<th class="fw-normal">홀</th>
																	<th class="fw-normal">메모</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td class="text-end">1,090,000</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name text-decoration-line-through opacity-50">안길동</span>
																		</div>
																	</td>
																	<td>2</td>
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
																	<td>신현우</td>
																	<td class="text-end">860,000</td>
																	<td>스윙덕</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num three">3</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name opacity-50">홍길동길동</span>
																			<span class="checkin-name txt-hline"></span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<th colspan="9">EAST OUT</th>
																</tr>
																<tr>
																	<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal">시간</th>
																	<th class="fw-normal">예약자</th>
																	<th class="fw-normal">금액</th>
																	<th class="fw-normal">단체명</th>
																	<th class="fw-normal">내장객</th>
																	<th class="fw-normal">Bill</th>
																	<th class="fw-normal">홀</th>
																	<th class="fw-normal">메모</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td class="text-end">1,090,000</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name text-decoration-line-through opacity-50">안길동</span>
																		</div>
																	</td>
																	<td>2</td>
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
																	<td>신현우</td>
																	<td class="text-end">860,000</td>
																	<td>스윙덕</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num three">3</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name opacity-50">홍길동길동</span>
																			<span class="checkin-name txt-hline"></span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<th colspan="9">WEST IN</th>
																</tr>
																<tr>
																	<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal">시간</th>
																	<th class="fw-normal">예약자</th>
																	<th class="fw-normal">금액</th>
																	<th class="fw-normal">단체명</th>
																	<th class="fw-normal">내장객</th>
																	<th class="fw-normal">Bill</th>
																	<th class="fw-normal">홀</th>
																	<th class="fw-normal">메모</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td class="text-end">1,090,000</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name text-decoration-line-through opacity-50">안길동</span>
																		</div>
																	</td>
																	<td>2</td>
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
																	<td>신현우</td>
																	<td class="text-end">860,000</td>
																	<td>스윙덕</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num three">3</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name opacity-50">홍길동길동</span>
																			<span class="checkin-name txt-hline"></span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<th colspan="9">WEST OUT</th>
																</tr>
																<tr>
																	<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
																	<th class="fw-normal">시간</th>
																	<th class="fw-normal">예약자</th>
																	<th class="fw-normal">금액</th>
																	<th class="fw-normal">단체명</th>
																	<th class="fw-normal">내장객</th>
																	<th class="fw-normal">Bill</th>
																	<th class="fw-normal">홀</th>
																	<th class="fw-normal">메모</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td><input class="form-check-input tableCheck" type="checkbox"></td>
																	<td><span class="table-em complete">06:50</span></td>
																	<td>홍길동</td>
																	<td class="text-end">1,090,000</td>
																	<td>임시1</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num four">4</span>
																			<span class="checkin-name">홍길동길동</span>
																			<span class="checkin-name">박길동</span>
																			<span class="checkin-name opacity-50">장길동</span>
																			<span class="checkin-name text-decoration-line-through opacity-50">안길동</span>
																		</div>
																	</td>
																	<td>2</td>
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
																	<td>신현우</td>
																	<td class="text-end">860,000</td>
																	<td>스윙덕</td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num three">3</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name opacity-50">홍길동길동</span>
																			<span class="checkin-name txt-hline"></span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num two">2</span>
																			<span class="checkin-name">홍길동</span>
																			<span class="checkin-name">홍길동길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td class="text-end">장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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
																	<td>장길석</td>
																	<td class="text-end">1,134,000</td>
																	<td></td>
																	<td role="button" data-bs-toggle="offcanvas" data-bs-target="#saleCanvas" aria-controls="saleCanvas">
																		<div class="d-flex align-items-center gap-2">
																			<span class="checkin-num one">1</span>
																			<span class="checkin-name">홍길동</span>
																		</div>
																	</td>
																	<td>1</td>
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

						<div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="saleCanvas" aria-labelledby="saleCanvasLabel">
							<div class="offcanvas-header justify-content-start align-items-center pb-0">
								<div class="d-flex gap-2 me-3">
									<button type="button" class="bg-transparent border-0 p-0"><span class="fc-icon fc-icon-chevrons-left align-middle fs-4 text-secondary"></span></button>
									<button type="button" class="bg-transparent border-0 p-0"><span class="fc-icon fc-icon-chevrons-right align-middle fs-4 text-secondary"></span></button>
								</div>

								<h5 id="saleCanvasLabel" class="mb-0">06:30&nbsp;&nbsp;EO&nbsp;&nbsp;박새로미</h5>
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
						<!-- //offCanvas -->

						<div class="modal fade confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body">
										<p class="text-center font-size-14 fw-semibold pt-4 mb-0">락카 자동 반납하시겠습니까?</p>
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
						<!-- //modal - confirmModal -->

						<div class="modal fade detailModal" tabindex="-1" aria-labelledby="detailModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="detailModalLabel">상세 내역서</h5>
										<button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="d-flex align-items-center gap-2 mb-3">
											<div class="form-check form-check-inline me-2">
												<input class="form-check-input courseMultipleRadio" type="radio" name="detailModalRadio" id="detailModalRadio01" value="팀별" checked>
												<label class="form-check-label" for="detailModalRadio01">팀별</label>
											</div>
											<div class="form-check form-check-inline me-2">
												<input class="form-check-input courseMultipleRadio" type="radio" name="detailModalRadio" id="detailModalRadio02" value="개인별">
												<label class="form-check-label" for="detailModalRadio02">개인별</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input courseMultipleRadio" type="radio" name="detailModalRadio" id="detailModalRadio03" value="단체">
												<label class="form-check-label" for="detailModalRadio03">단체</label>
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="업장 선택">
													<option value="입장료">입장료</option>
													<option value="카트료">카트료</option>
													<option value="대여료">대여료</option>
													<option value="프로샵">프로샵</option>
													<option value="식음료">식음료</option>
													<option value="객실료">객실료</option>
												</select>
											</div>

											<button type="button" class="btn btn-outline-custom ms-auto">인쇄</button>
										</div>

										<table class="table table-layout-fixed text-center table-hover mb-0">
											<colgroup>
												<col style="min-width:40px; width:40px;">
												<col style="min-width:60px; width:60px;">
												<col style="min-width:60px; width:60px;">
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
													<th><input class="form-check-input tableCheckAll" type="checkbox" checked></th>
													<th colspan="3">항목</th>
													<th>수량</th>
													<th>금액</th>
													<th>성명</th>
													<th>시간</th>
													<th>캐디</th>
													<th>전표 No</th>
												</tr>
											</thead>

											<tbody>
												<tr class="fw-semibold table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start">입장료</td>
													<td colspan="2" class="text-start"></td>
													<td>4</td>
													<td>670,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td class="text-start">홍길동</td>
													<td class="text-start"></td>
													<td></td>
													<td>160,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td class="text-start">강길동</td>
													<td class="text-start"></td>
													<td></td>
													<td>170,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td class="text-start">안길동</td>
													<td class="text-start"></td>
													<td></td>
													<td>170,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td class="text-start">진길동</td>
													<td class="text-start"></td>
													<td></td>
													<td>170,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="fw-semibold table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start">카트료</td>
													<td colspan="2" class="text-start"></td>
													<td>4</td>
													<td>100,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="fw-semibold table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start">식음료</td>
													<td colspan="2" class="text-start">대식당, 그늘집</td>
													<td></td>
													<td>100,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="fw-semibold table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td colspan="2" class="text-start">대식당</td>
													<td></td>
													<td>80,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td class="text-start"></td>
													<td class="text-start">한우소고기국밥</td>
													<td>4</td>
													<td>80,000</td>
													<td>홍길동</td>
													<td>06:30</td>
													<td></td>
													<td>004-01</td>
												</tr>
												<tr class="fw-semibold table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td colspan="2" class="text-start">그늘집</td>
													<td></td>
													<td>20,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
												</tr>
												<tr class="table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td class="text-start"></td>
													<td class="text-start">콜드브루 아이스커피</td>
													<td>1</td>
													<td>12,000</td>
													<td>홍길동</td>
													<td>07:40</td>
													<td></td>
													<td>004-02</td>
												</tr>
												<tr class="table-active">
													<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
													<td class="text-start"></td>
													<td class="text-start"></td>
													<td class="text-start">커피(아메리카노)</td>
													<td>1</td>
													<td>8,000</td>
													<td>홍길동</td>
													<td>07:40</td>
													<td></td>
													<td>004-03</td>
												</tr>
											</tbody>
										</table>

										<div class="border-box border-top-0 border-bottom-0">
											<table class="table table-layout-fixed text-center mb-0">
												<colgroup>
													<col style="width:120px;">
													<col style="width:865px;">
													<col style="width:auto;">
												</colgroup>

												<tbody>
													<tr class="table-bg-gray">
														<th>합계</th>
														<td class="fw-semibold text-blue">826,000</td>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - detailModal -->

						<div class="modal fade splitModal" tabindex="-1" aria-labelledby="splitModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="splitModalLabel">요금 분할</h5>
										<button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto;">
												</colgroup>

												<tbody>
													<tr>
														<th>분할 방식</th>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitType" id="splitType01" value="전체 1/n" checked>
																<label class="form-check-label" for="splitType01">전체 1/n</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitType" id="splitType02" value="팀별 1/n">
																<label class="form-check-label" for="splitType02">팀별 1/n</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitType" id="splitType03" value="부분 1/n">
																<label class="form-check-label" for="splitType03">부분 1/n</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitType" id="splitType04" value="수동분할">
																<label class="form-check-label" for="splitType04">수동분할</label>
															</div>
														</td>
													</tr>
													<tr>
														<th>분할 단위</th>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitUnit" id="splitUnit01" value="10원" checked>
																<label class="form-check-label" for="splitUnit01">10원</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitUnit" id="splitUnit02" value="50원">
																<label class="form-check-label" for="splitUnit02">50원</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitUnit" id="splitUnit03" value="100원">
																<label class="form-check-label" for="splitUnit03">100원</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitUnit" id="splitUnit04" value="500원">
																<label class="form-check-label" for="splitUnit04">500원</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="splitUnit" id="splitUnit05" value="1,000원">
																<label class="form-check-label" for="splitUnit05">1,000원</label>
															</div>
														</td>
													</tr>
													<tr>
														<th>분할 업장</th>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany01" value="전체" checked>
																<label class="form-check-label" for="splitCompany01">전체</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany02" value="입장료" checked>
																<label class="form-check-label" for="splitCompany02">입장료</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany03" value="카트료" checked>
																<label class="form-check-label" for="splitCompany03">카트료</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany04" value="대여료" checked>
																<label class="form-check-label" for="splitCompany04">대여료</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany05" value="프로샵" checked>
																<label class="form-check-label" for="splitCompany05">프로샵</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany06" value="대식당" checked>
																<label class="form-check-label" for="splitCompany06">대식당</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany07" value="스타트" checked>
																<label class="form-check-label" for="splitCompany07">스타트</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany08" value="그늘집" checked>
																<label class="form-check-label" for="splitCompany08">그늘집</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="splitCompany09" value="숙박" checked>
																<label class="form-check-label" for="splitCompany09">숙박</label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<table class="table table-layout-fixed text-center table-hover mt-3 mb-0">
											<colgroup>
												<col style="min-width:40px; width:40px;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="min-width:40px; width:40px;">
											</colgroup>

											<thead>
												<tr>
													<th><input class="form-check-input tableCheckAll" type="checkbox"></th>
													<th>시간</th>
													<th>코스</th>
													<th>락카</th>
													<th>성명</th>
													<th>이용금액</th>
													<th>미정산액</th>
													<th>조정액</th>
													<th>제외</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td><input class="form-check-input tableCheck" type="checkbox"></td>
													<td>07:35</td>
													<td>WI</td>
													<td>121</td>
													<td>홍길동</td>
													<td>185,000</td>
													<td>185,000</td>
													<td></td>
													<td><input class="form-check-input" type="checkbox"></td>
												</tr>
												<tr>
													<td><input class="form-check-input tableCheck" type="checkbox"></td>
													<td></td>
													<td></td>
													<td>122</td>
													<td>안현우</td>
													<td>185,000</td>
													<td>185,000</td>
													<td></td>
													<td><input class="form-check-input" type="checkbox"></td>
												</tr>
												<tr>
													<td><input class="form-check-input tableCheck" type="checkbox"></td>
													<td></td>
													<td></td>
													<td>123</td>
													<td>홍길동</td>
													<td>185,000</td>
													<td>185,000</td>
													<td></td>
													<td><input class="form-check-input" type="checkbox"></td>
												</tr>
												<tr>
													<td><input class="form-check-input tableCheck" type="checkbox"></td>
													<td></td>
													<td></td>
													<td>124</td>
													<td>장한서</td>
													<td>185,000</td>
													<td>185,000</td>
													<td></td>
													<td><input class="form-check-input" type="checkbox"></td>
												</tr>
												<tr>
													<td><input class="form-check-input tableCheck" type="checkbox"></td>
													<td>07:42</td>
													<td>WI</td>
													<td>200</td>
													<td>박제춘</td>
													<td>185,000</td>
													<td>185,000</td>
													<td></td>
													<td><input class="form-check-input" type="checkbox"></td>
												</tr>
												<tr>
													<td><input class="form-check-input tableCheck" type="checkbox"></td>
													<td></td>
													<td></td>
													<td>201</td>
													<td>서강희</td>
													<td>185,000</td>
													<td>185,000</td>
													<td></td>
													<td><input class="form-check-input" type="checkbox"></td>
												</tr>
												<tr>
													<td><input class="form-check-input tableCheck" type="checkbox"></td>
													<td></td>
													<td></td>
													<td>202</td>
													<td>안길현</td>
													<td>185,000</td>
													<td>185,000</td>
													<td></td>
													<td><input class="form-check-input" type="checkbox"></td>
												</tr>
												<tr>
													<td><input class="form-check-input tableCheck" type="checkbox"></td>
													<td></td>
													<td></td>
													<td>203</td>
													<td>오민석</td>
													<td>185,000</td>
													<td>185,000</td>
													<td></td>
													<td><input class="form-check-input" type="checkbox"></td>
												</tr>
											</tbody>
										</table>

										<div class="border-box border-top-0 border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:344px;">
													<col style="width:370px;">
													<col style="width:170px;">
													<col style="width:170px;">
													<col style="width:170px;">
													<col style="width:auto;">
												</colgroup>

												<tbody>
													<tr class="table-bg-gray">
														<td>
															<span class="fw-semibold ms-1">팀수</span>
															<span class="fw-semibold text-blue ms-1">3</span>
															<span class="fw-semibold ms-4">인원</span>
															<span class="fw-semibold text-blue ms-1">12</span>
														</td>
														<td class="text-center"><span class="txt-line"></span></td>
														<td class="text-center"><span class="fw-semibold text-red">2,230,000</span></td>
														<td class="text-center"><span class="fw-semibold">0</span></td>
														<td class="text-center"><span class="fw-semibold text-blue">2,230,000</span></td>
														<td></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>

									<div class="modal-footer">
										<div class="d-flex justify-content-between align-items-center w-100 m-0">
											<div class="d-flex gap-2 ms-auto">
												<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
												<button type="button" class="btn btn-custom">저장</button>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - splitModal -->

						<div class="modal fade moveModal" tabindex="-1" aria-labelledby="moveModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="moveModalLabel">요금 이동</h5>
										<button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<p class="fw-semibold">집계대상자 <span class="text-blue">안현우</span> 님께 <span class="text-blue">입장료, 대식당</span> 요금이 이동됩니다.</p>

										<div class="d-flex gap-4">
											<div class="col-1">
												<div class="card border-bottom-0 m-0">
													<table class="table table-layout-fixed table-hover mb-0">
														<thead>
															<tr>
																<th class="text-center fw-normal">이동업장</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheckAll" type="checkbox" id="moveModalCheckAll">
																		<label class="form-check-label" for="moveModalCheckAll">전체</label>
																	</div>
																</td>
															</tr>
															<tr class="table-active">
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheck" type="checkbox" id="moveModalCheck01" checked>
																		<label class="form-check-label" for="moveModalCheck01">입장료</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheck" type="checkbox" id="moveModalCheck02">
																		<label class="form-check-label" for="moveModalCheck02">카트료</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheck" type="checkbox" id="moveModalCheck03">
																		<label class="form-check-label" for="moveModalCheck03">대여료</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheck" type="checkbox" id="moveModalCheck04">
																		<label class="form-check-label" for="moveModalCheck04">프로샵</label>
																	</div>
																</td>
															</tr>
															<tr class="table-active">
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheck" type="checkbox" id="moveModalCheck05" checked>
																		<label class="form-check-label" for="moveModalCheck05">대식당</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheck" type="checkbox" id="moveModalCheck06">
																		<label class="form-check-label" for="moveModalCheck06">스타트</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheck" type="checkbox" id="moveModalCheck07">
																		<label class="form-check-label" for="moveModalCheck07">그늘집</label>
																	</div>
																</td>
															</tr>
															<tr>
																<td>
																	<div class="form-check form-check-inline">
																		<input class="form-check-input tableCheck" type="checkbox" id="moveModalCheck08">
																		<label class="form-check-label" for="moveModalCheck08">객실료</label>
																	</div>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<div class="flex-fill">
												<table class="table table-hover text-center mb-0">
													<colgroup>
														<col style="min-width:40px; width:40px;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th><input class="form-check-input tableCheckAll" type="checkbox" id="checkAll"></th>
															<th>시간</th>
															<th>코스</th>
															<th>락카</th>
															<th>성명</th>
															<th>이용금액</th>
															<th>입장료</th>
															<th>카트료</th>
															<th>대여료</th>
															<th>프로샵</th>
															<th>대식당</th>
															<th>스타트</th>
															<th>그늘집</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><input class="form-check-input tableCheck" type="checkbox"></td>
															<td>07:35</td>
															<td>WI</td>
															<td>121</td>
															<td>홍길동</td>
															<td>25,000</td>
															<td>0</td>
															<td>25,000</td>
															<td>0</td>
															<td>0</td>
															<td>0</td>
															<td>0</td>
															<td>0</td>
														</tr>
														<tr class="table-active">
															<td><input class="form-check-input tableCheck" type="checkbox" checked></td>
															<td></td>
															<td></td>
															<td>122</td>
															<td>안현우</td>
															<td>750,000</td>
															<td>625,000</td>
															<td>25,000</td>
															<td>0</td>
															<td>0</td>
															<td>100,000</td>
															<td>0</td>
															<td>0</td>
														</tr>
														<tr>
															<td><input class="form-check-input tableCheck" type="checkbox"></td>
															<td></td>
															<td></td>
															<td>123</td>
															<td>김길동</td>
															<td>25,000</td>
															<td>0</td>
															<td>25,000</td>
															<td>0</td>
															<td>0</td>
															<td>0</td>
															<td>0</td>
															<td>0</td>
														</tr>
														<tr>
															<td><input class="form-check-input tableCheck" type="checkbox"></td>
															<td></td>
															<td></td>
															<td>124</td>
															<td>장한서</td>
															<td>50,000</td>
															<td>0</td>
															<td>25,000</td>
															<td>0</td>
															<td>25,000</td>
															<td>0</td>
															<td>0</td>
															<td>0</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<div class="d-flex justify-content-between align-items-center w-100 m-0">
											<div class="d-flex gap-2 ms-auto">
												<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
												<button type="button" class="btn btn-custom">저장</button>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - moveModal -->

						<div class="modal fade receiptModal" tabindex="-1" aria-labelledby="receiptModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="receiptModalLabel">영수증</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<tbody>
													<tr class="table-bg-gray">
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="receiptRadio" id="receiptRadio01" value="캐디피" checked>
																<label class="form-check-label" for="receiptRadio01">캐디피</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="receiptRadio" id="receiptRadio02" value="카트료">
																<label class="form-check-label" for="receiptRadio02">카트료</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="receiptRadio" id="receiptRadio03" value="일반">
																<label class="form-check-label" for="receiptRadio03">일반</label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<div id="receiptPrint" class="border-box border-bottom-0 mt-3">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:75px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>제목</th>
														<td><span class="ps-10">캐디피 영수증</span></td>
													</tr>
													<tr>
														<th>영업 일자</th>
														<td>
															<div class="d-flex align-items-center justify-content-between">
																<div class="form-check form-check-inline ps-0 me-0">
																	<input type="text" class="form-control datepicker text-start border-0 bg-transparent" value="23.07.06 (목)">
																</div>
																<i class="bx bx-calendar font-size-15 ms-1 me-3"></i>
															</div>
														</td>
													</tr>
													<tr>
														<th>코스</th>
														<td>
															<select class="form-select">
																<option value="WI" selected>WI</option>
																<option value="WO">WO</option>
																<option value="EI">EI</option>
																<option value="EO">EO</option>
															</select>
														</td>
													</tr>
													<tr>
														<th>시간</th>
														<td><input type="text" class="form-control input_time w-100" maxlength="4" value="07:00"></td>
													</tr>
													<tr>
														<th>예약자</th>
														<td><input type="text" class="form-control" value="장미진"></td>
													</tr>
													<tr>
														<th>내장자</th>
														<td><input type="text" class="form-control" value="박시훈"></td>
													</tr>
													<tr>
														<th>단체명</th>
														<td>
															<select class="form-select">
																<option value="오소리 골프" selected>오소리 골프</option>
																<option value="오리 골프">오리 골프</option>
															</select>
														</td>
													</tr>
													<tr>
														<th>캐디명</th>
														<td><input type="text" class="form-control" value="이현영"></td>
													</tr>
													<tr>
														<th>금액</th>
														<td><input type="text" class="form-control" value="140,000"></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-outline-custom" onclick="print_btn('receiptPrint');">인쇄</button>
									</div>
								</div>
							</div>
						</div>
		                <!--//modal - receiptModal -->

						<div class="modal fade paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="paymentModalLabel">요금 결제</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-6">
												<div class="card">
													<div class="card-body">
														<span class="font-size-14 fw-semibold">신용카드 / 현금 영수증(자진) 승인</span>
														<div class="border-box border-bottom-0 mt-3">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:105px;">
																	<col style="width:auto">
																</colgroup>

																<tbody>
																	<tr>
																		<th>정산 일자</th>
																		<td><span class="ps-10">2023.07.06</span></td>
																	</tr>
																	<tr>
																		<th>내장자 명</th>
																		<td><span class="ps-10">홍길동</span></td>
																	</tr>
																	<tr>
																		<th class="fw-semibold text-blue">결제 총액</th>
																		<td class="pe-42 text-end"><span class="fw-semibold text-blue pe-16">235,000</span> 원</td>
																	</tr>
																	<tr>
																		<th>카드 결제</th>
																		<td class="pe-42">
																			<div class="d-flex align-items-center gap-2">
																				<input type="text" class="form-control text-end" value="135,000"> 원
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th>현금 결제</th>
																		<td class="pe-42">
																			<div class="d-flex align-items-center gap-2">
																				<input type="text" class="form-control text-end" value="100,000"> 원
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th class="fw-semibold text-red">합계 금액</th>
																		<td class="pe-42 text-end"><span class="fw-semibold text-red pe-16">235,000</span> 원</td>
																	</tr>
																	<tr>
																		<th>할부 기간</th>
																		<td class="pe-30">
																			<div class="d-flex align-items-center justify-content-end gap-2">
																				<input type="text" class="form-control input_w35 text-center p-0" value="00"> 개월
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th>현금 발급 구분</th>
																		<td class="pe-30">
																			<div class="d-flex align-items-center justify-content-end gap-2">
																				xxxxxxxxxxxxxx
																				<div class="form-check form-check-inline me-0">
																					<input class="form-check-input" type="checkbox" id="cardCheck" checked>
																					<label class="form-check-label" for="cardCheck">카드</label>
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th>카드 번호</th>
																		<td>
																			<div class="d-flex align-items-center gap-2">
																				<input type="text" class="form-control" value="12345678910">
																				<button type="button" class="btn btn-outline-custom text-blue">Sign</button>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th>카드명 / 매입사</th>
																		<td><span class="ps-10">삼성아멕스 / 삼성</span></td>
																	</tr>
																	<tr>
																		<th>승인번호</th>
																		<td>
																			<input type="text" class="form-control" value="12345">
																		</td>
																	</tr>
																	<tr>
																		<th>원 승인번호</th>
																		<td>
																			<input type="text" class="form-control" value="12345">
																		</td>
																	</tr>
																	<tr>
																		<th>원 승인일자</th>
																		<td>
																			<div class="d-flex align-items-center justify-content-between">
																				<div class="form-check form-check-inline ps-0 me-0">
																					<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="23.07.06">
																				</div>
																				<i class="bx bx-calendar font-size-15 ms-1 me-2"></i>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th>성명</th>
																		<td>
																			<input type="text" class="form-control" value="홍길동">
																		</td>
																	</tr>
																	<tr>
																		<th>전화번호</th>
																		<td>
																			<input type="text" class="form-control" value="010-1234-5678">
																		</td>
																	</tr>
																	<tr>
																		<th>회원번호</th>
																		<td>
																			<input type="text" class="form-control" value="46-9144">
																		</td>
																	</tr>
																	<tr>
																		<th>비고</th>
																		<td>
																			<input type="text" class="form-control">
																		</td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
												</div>
											</div>

											<div class="col-6">
												<div class="card">
													<div class="card-body">
														<div class="d-flex gap-2">
															<div class="col-6">
																<div class="d-grid">
																	<input type="radio" class="btn-check" name="payment01-radio" id="payment01-radio01" autocomplete="off" checked>
																	<label class="btn btn-radio-blue" for="payment01-radio01">신용 카드</label>
																	<input type="radio" class="btn-check" name="payment01-radio" id="payment01-radio02" autocomplete="off">
																	<label class="btn btn-radio-blue" for="payment01-radio02">상품권</label>
																	<input type="radio" class="btn-check" name="payment01-radio" id="payment01-radio03" autocomplete="off">
																	<label class="btn btn-radio-blue" for="payment01-radio03">선불 카드</label>
																	<input type="radio" class="btn-check" name="payment01-radio" id="payment01-radio04" autocomplete="off">
																	<label class="btn btn-radio-blue" for="payment01-radio04">채널 선결제</label>
																	<input type="radio" class="btn-check" name="payment01-radio" id="payment01-radio05" autocomplete="off">
																	<label class="btn btn-radio-blue" for="payment01-radio05">미수</label>
																	<input type="radio" class="btn-check" name="payment01-radio" id="payment01-radio06" autocomplete="off">
																	<label class="btn btn-radio-blue" for="payment01-radio06">예치금</label>
																	<input type="radio" class="btn-check" name="payment01-radio" id="payment01-radio07" autocomplete="off">
																	<label class="btn btn-radio-blue mb-0" for="payment01-radio07">현금 (IC)</label>
																</div>
															</div>
															<div class="col-6">
																<div class="d-grid">
																	<input type="radio" class="btn-check" name="payment02-radio" id="payment02-radio01" autocomplete="off" checked>
																	<label class="btn btn-radio-blue" for="payment02-radio01">현금 영수증(자진)</label>
																	<input type="radio" class="btn-check" name="payment02-radio" id="payment02-radio02" autocomplete="off">
																	<label class="btn btn-radio-blue" for="payment02-radio02">현금 영수증(개인)</label>
																	<input type="radio" class="btn-check" name="payment02-radio" id="payment02-radio03" autocomplete="off">
																	<label class="btn btn-radio-blue" for="payment02-radio03">현금 영수증(법인)</label>
																	<input type="radio" class="btn-check" name="payment02-radio" id="payment02-radio04" autocomplete="off">
																	<label class="btn btn-radio-blue mb-0" for="payment02-radio04">현금</label>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="form-check form-check-inline mt-2">
													<input class="form-check-input" type="checkbox" id="cashReceiptCheck" checked>
													<label class="form-check-label" for="cashReceiptCheck">현금 영수증 터치(키보드) 입력</label>
												</div>

												<div class="bg-info-subtle p-3 mt-3">
													<textarea rows="11" class="form-control bg-transparent border-0 p-0" style="resize:none;"></textarea>
												</div>

												<div class="d-flex justify-content-end gap-2 mt-3">
													<button type="button" class="btn btn-custom px-3">닫기</button>
													<button type="button" class="btn btn-custom px-3">승인</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//modal - receiptModal -->

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

		function paymentModal(){
			$('.paymentModal').modal('toggle');
		}
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
