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
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center flex-wrap gap-2">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-lg border-0 h-100">
													<option value="2023.06.23 (금)" selected>2023.06.23 (금)</option>
													<option value="2023.06.24 (토)">2023.06.24 (토)</option>
												</select>
											</div>

											<div class="form-check form-check-inline search-area ps-0 me-0">
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

											<div class="form-check form-check-inline me-2">
												<input class="form-check-input" type="checkbox" id="lockerAutoCheck" checked>
												<label class="form-check-label" for="lockerAutoCheck">락카 자동 반납</label>
											</div>

											<div class="d-flex align-items-center gap-4 ms-auto">
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
									</div>
								</div>

								<div class="d-flex gap-3">
									<div class="card dailyTeam-left mb-0">
										<div class="card-body">
											<div class="d-flex align-items-center gap-2 mb-3">
												<div class="form-check form-check-inline align-top p-0 m-0">
													<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="코스 선택">
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

												<div class="form-check form-check-inline align-top p-0 m-0">
													<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="구분 선택">
														<option value="개별">개별</option>
														<option value="팀별">팀별</option>
													</select>
												</div>
											</div>

											<div class="table-fixed-head card" data-simplebar style="max-height:calc(100vh - 518px);">
												<table class="table table-sm table-layout-fixed table-hover text-center mb-0">
													<colgroup>
														<col style="width:55px;">
														<col style="width:38px;">
														<col style="width:65px;">
														<col style="width:60px;">
														<col style="width:32px;">
														<col style="width:30px;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th class="fw-normal">시간</th>
															<th class="fw-normal">코스</th>
															<th class="fw-normal">예약자</th>
															<th class="fw-normal">금액</th>
															<th class="fw-normal">Bill</th>
															<th class="fw-normal">홀</th>
															<th class="fw-normal">단체명</th>
														</tr>
													</thead>

													<tbody>
														<tr role="button" class="table-active" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td><span class="table-em complete">06:50</span></td>
															<td>EI</td>
															<td>이새로미</td>
															<td>700,000</td>
															<td>4</td>
															<td>18</td>
															<td class="text-truncate">한국길동이들</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>홍길동</td>
															<td>826,000</td>
															<td>1</td>
															<td>18</td>
															<td class="text-truncate">한국길동이들</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>황조롱이</td>
															<td>772,000</td>
															<td>3</td>
															<td>18</td>
															<td class="text-truncate">길동골프</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>김민정</td>
															<td>762,000</td>
															<td>2</td>
															<td>18</td>
															<td class="text-truncate">길동골프</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안새봄</td>
															<td>802,000</td>
															<td>2</td>
															<td>18</td>
															<td class="text-truncate">BMM</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>이정혁</td>
															<td>772,000</td>
															<td>7</td>
															<td>18</td>
															<td class="text-truncate">길동골프</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>김군수</td>
															<td>650,000</td>
															<td>7</td>
															<td>18</td>
															<td class="text-truncate">홍홍골프</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>박휘선</td>
															<td>804,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">한국길동이들</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>신세정</td>
															<td>853,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">한국길동이들</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:50</td>
															<td>EI</td>
															<td>안은미</td>
															<td>700,000</td>
															<td></td>
															<td>18</td>
															<td class="text-truncate">임시1</td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="border-box border-bottom-0 mt-3">
												<table class="table table-layout-fixed mb-0">
													<colgroup>
														<col style="width:80px;">
														<col style="width:auto;">
														<col style="width:80px;">
														<col style="width:auto;">
													</colgroup>

													<tbody>
														<tr class="table-bg-gray">
															<th class="text-blue">일 매출</th>
															<td colspan="3" class="fw-semibold">23,178,000</td>
														</tr>
														<tr>
															<th>카드 정산</th>
															<td>1,240,000</td>
															<th>미수 정산</th>
															<td>660,000</td>
														</tr>
														<tr>
															<th>현금 정산</th>
															<td>0</td>
															<th>기타 정산</th>
															<td>0</td>
														</tr>
														<tr>
															<th class="text-red">미정산</th>
															<td colspan="3">23,178,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>

									<div class="card dailyTeam-right mb-0">
										<div class="card-body">
											<div class="d-flex align-items-center gap-2 mb-3">
												<span class="fs-16 fw-bold">06:50  WI  1부</span>
												<div class="btn-group ms-auto">
													<button type="button" class="btn btn-outline-custom">합산</button>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".splitModal">분할</button>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".moveModal">이동</button>
													<button type="button" class="btn btn-outline-custom">직전 취소</button>
													<button type="button" class="btn btn-outline-custom">요금 환원</button>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".receiptModal">영수증</button>
												</div>

												<div class="form-check form-check-inline align-top p-0 me-0">
													<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="컬럼 선택">
														<option value="카트료">카트료</option>
														<option value="대여료">대여료</option>
														<option value="프로샵">프로샵</option>
														<option value="대식당">대식당</option>
														<option value="스타트">스타트</option>
														<option value="그늘집">그늘집</option>
														<option value="객실료">객실료</option>
													</select>
												</div>
											</div>

											<div data-simplebar style="max-height:calc(100vh - 328px);">
												<div class="table-responsive table-fixed-head" data-simplebar>
													<table class="table table-hover text-center mb-0">
														<colgroup>
															<col style="width:auto;">
															<col style="width:auto;">
															<col style="min-width:60px; width:auto;">
															<col style="min-width:90px; width:auto;">
															<col style="min-width:90px; width:auto;">
															<col style="min-width:80px; width:auto;">
															<col style="min-width:80px; width:auto;">
															<col style="min-width:80px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
														</colgroup>

														<thead>
															<tr>
																<th><input class="form-check-input tableCheckAll" type="checkbox" id="checkAll"></th>
																<th>시간</th>
																<th>코스</th>
																<th>성명</th>
																<th>홀</th>
																<th>잔액</th>
																<th>지불액</th>
																<th>합계</th>
																<th>할인액</th>
																<th>입장료</th>
																<th>카트료</th>
																<th>대여료</th>
																<th>프로샵</th>
																<th>대식당</th>
																<th>스타트</th>
																<th>그늘집</th>
																<th>객실료</th>
															</tr>
														</thead>

														<tbody>
															<tr role="button" ondblclick="paymentModal();">
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td>06:50</td>
																<td>WI</td>
																<td>홍길동</td>
																<td><input class="form-control text-center input_w35 p-0 mx-auto" type="text" maxlength="2" value="18"></td>
																<td>185,000</td>
																<td>0</td>
																<td class="text-blue">185,000</td>
																<td></td>
																<td>160,000</td>
																<td>25,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr role="button" ondblclick="paymentModal();">
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td></td>
																<td></td>
																<td>이길동</td>
																<td><input class="form-control text-center input_w35 p-0 mx-auto" type="text" maxlength="2" value="18"></td>
																<td>195,000</td>
																<td>0</td>
																<td class="text-blue">195,000</td>
																<td></td>
																<td>170,000</td>
																<td>25,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr role="button" ondblclick="paymentModal();">
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td></td>
																<td></td>
																<td>박길동</td>
																<td><input class="form-control text-center input_w35 p-0 mx-auto" type="text" maxlength="2" value="18"></td>
																<td>195,000</td>
																<td>0</td>
																<td class="text-blue">195,000</td>
																<td></td>
																<td>170,000</td>
																<td>25,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr role="button" ondblclick="paymentModal();">
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td></td>
																<td></td>
																<td>장길동</td>
																<td><input class="form-control text-center input_w35 p-0 mx-auto" type="text" maxlength="2" value="18"></td>
																<td>195,000</td>
																<td>0</td>
																<td class="text-blue">195,000</td>
																<td></td>
																<td>170,000</td>
																<td>25,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr class="table-bg-gray">
																<td></td>
																<td colspan="2"><button type="button" class="btn btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".detailModal">상세 내역서</button></td>
																<td></td>
																<td></td>
																<td class="fw-semibold text-red">770,000</td>
																<td class="fw-semibold">0</td>
																<td class="fw-semibold text-blue">770,000</td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold">670,000</td>
																<td class="fw-semibold">100,000</td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
															</tr>
															<tr>
																<td colspan="17" class="table-line"></td>
															</tr>
															<tr role="button" ondblclick="paymentModal();">
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td>06:50</td>
																<td>WI</td>
																<td>홍길동</td>
																<td><input class="form-control text-center input_w35 p-0 mx-auto" type="text" maxlength="2" value="18"></td>
																<td>185,000</td>
																<td>0</td>
																<td class="text-blue">185,000</td>
																<td></td>
																<td>160,000</td>
																<td>25,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr role="button" ondblclick="paymentModal();">
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td></td>
																<td></td>
																<td>이길동</td>
																<td><input class="form-control text-center input_w35 p-0 mx-auto" type="text" maxlength="2" value="18"></td>
																<td>195,000</td>
																<td>0</td>
																<td class="text-blue">195,000</td>
																<td></td>
																<td>170,000</td>
																<td>25,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr role="button" ondblclick="paymentModal();">
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td></td>
																<td></td>
																<td>박길동</td>
																<td><input class="form-control text-center input_w35 p-0 mx-auto" type="text" maxlength="2" value="18"></td>
																<td>195,000</td>
																<td>0</td>
																<td class="text-blue">195,000</td>
																<td></td>
																<td>170,000</td>
																<td>25,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr role="button" ondblclick="paymentModal();">
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td></td>
																<td></td>
																<td>장길동</td>
																<td><input class="form-control text-center input_w35 p-0 mx-auto" type="text" maxlength="2" value="18"></td>
																<td>195,000</td>
																<td>0</td>
																<td class="text-blue">195,000</td>
																<td></td>
																<td>170,000</td>
																<td>25,000</td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
																<td></td>
															</tr>
															<tr class="table-bg-gray">
																<td></td>
																<td colspan="2"><button type="button" class="btn btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".detailModal">상세 내역서</button></td>
																<td></td>
																<td></td>
																<td class="fw-semibold text-red">770,000</td>
																<td class="fw-semibold">0</td>
																<td class="fw-semibold text-blue">770,000</td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold">670,000</td>
																<td class="fw-semibold">100,000</td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
																<td class="fw-semibold"></td>
															</tr>
															<tr>
																<td colspan="17" class="table-line"></td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="blue-box border-bottom-0 mt-3">
													<table class="table table-layout-fixed mb-0">
														<colgroup>
															<col style="width:256px;">
															<col style="width:70px;">
															<col style="width:80px;">
															<col style="width:80px;">
															<col style="width:80px;">
															<col style="width:auto;">
														</colgroup>

														<tbody>
															<tr>
																<td>
																	<span class="fw-semibold ms-1">팀수</span>
																	<span class="fw-semibold text-blue ms-1">3</span>
																	<span class="fw-semibold ms-4">인원</span>
																	<span class="fw-semibold text-blue ms-1">12</span>
																</td>
																<td class="text-center"><span class="txt-line"></span></td>
																<td class="text-center"><span class="fw-semibold text-red">1,930,000</span></td>
																<td class="text-center"><span class="fw-semibold">0</span></td>
																<td class="text-center"><span class="fw-semibold text-blue">2,230,000</span></td>
																<td></td>
															</tr>
														</tbody>
													</table>

													<table class="table table-layout-fixed mb-0">
														<colgroup>
															<col style="width:100px;">
															<col style="width:auto;">
															<col style="width:100px;">
															<col style="width:auto;">
															<col style="width:100px;">
															<col style="width:auto;">
														</colgroup>

														<tbody>
															<tr>
																<th>총금액 (12명)</th>
																<td>2,230,000</td>
																<th>1/N (12명)</th>
																<td>185,833</td>
																<th>06:50/N (8명)</th>
																<td>375,000</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="table-responsive table-fixed-head mt-3" data-simplebar>
													<table class="table table-hover text-center mb-0">
														<colgroup>
															<col style="width:auto;">
															<col style="width:auto;">
															<col style="min-width:50px; width:auto;">
															<col style="min-width:60px; width:auto;">
															<col style="min-width:80px; width:auto;">
															<col style="min-width:80px; width:auto;">
															<col style="min-width:80px; width:auto;">
															<col style="min-width:80px; width:auto;">
															<col style="min-width:80px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
															<col style="min-width:70px; width:auto;">
														</colgroup>

														<thead>
															<tr>
																<th><input class="form-check-input tableCheckAll" type="checkbox" id="checkAll"></th>
																<th>No</th>
																<th>락카</th>
																<th>성명</th>
																<th>지불 구분</th>
																<th>금액</th>
																<th>카드 번호</th>
																<th>승인 번호</th>
																<th>결제 항목</th>
																<th>영수증</th>
																<th>정산자</th>
																<th>정산 시간</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td>12</td>
																<td>1241</td>
																<td>홍길동</td>
																<td>비씨카드</td>
																<td>600,000</td>
																<td>123456***</td>
																<td>12345678</td>
																<td>카드결제</td>
																<td></td>
																<td>ANNA88</td>
																<td>09:47:16</td>
															</tr>
															<tr>
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td>11</td>
																<td>1241</td>
																<td>김길동</td>
																<td>국민카드</td>
																<td>200,000</td>
																<td>123456***</td>
																<td>12345678</td>
																<td>카드결제</td>
																<td></td>
																<td>ANNA88</td>
																<td>08:00:21</td>
															</tr>
															<tr>
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td>10</td>
																<td>1241</td>
																<td>장길동</td>
																<td>신한카드</td>
																<td>200,000</td>
																<td>123456***</td>
																<td>12345678</td>
																<td>카드결제</td>
																<td></td>
																<td>ANNA88</td>
																<td>07:54:10</td>
															</tr>
															<tr>
																<td><input class="form-check-input tableCheck" type="checkbox"></td>
																<td>9</td>
																<td>1241</td>
																<td>박길동</td>
																<td>국민카드</td>
																<td>200,000</td>
																<td>123456***</td>
																<td>12345678</td>
																<td>카드결제</td>
																<td></td>
																<td>ANNA88</td>
																<td>07:50:00</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="border-box border-bottom-0 mt-1">
													<table class="table table-layout-fixed mb-0">
														<colgroup>
															<col style="width:100px;">
															<col style="width:auto;">
															<col style="width:100px;">
															<col style="width:auto;">
															<col style="width:100px;">
															<col style="width:auto;">
														</colgroup>

														<tbody>
															<tr class="table-bg-gray">
																<th>미정산액</th>
																<td class="fw-semibold text-blue">2,230,000</td>
																<th>지불 합계</th>
																<td class="fw-semibold text-red">185,833</td>
																<th>선불액</th>
																<td>375,000</td>
															</tr>
														</tbody>
													</table>
												</div>

												<div class="border-box mt-4">
													<div class="pt-3 p-4">
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
																<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;">락카 청결상태 지적&#13;락카내 쓰레기 정리 요청&#13;2023.04.10 (토) 프론트 이지연 대리&#13;&#10조치 요청 전달 후 처리 완료</textarea>
															</div>

															<div class="tab-pane" id="bookingModalRightTab02" role="tabpanel">
																<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;">조인 (2/1/1)&#13;홍길동 2인 010-1234-5678&#13;안영미 1인 010-1234-7878&#13;홍자인 1인 010-1234-4556 / 키오스크</textarea>
															</div>

															<div class="tab-pane" id="bookingModalRightTab03" role="tabpanel">
																<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
															</div>

															<div class="tab-pane" id="bookingModalRightTab04" role="tabpanel">
																<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
															</div>

															<div class="tab-pane" id="bookingModalRightTab05" role="tabpanel">
																<textarea rows="6" class="form-control bg-transparent border-0" style="resize:none;"></textarea>
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
		                <!--//row -->

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
