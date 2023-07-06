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

											<div class="d-flex align-items-center gap-4 ms-auto">
												<dl class="d-flex mb-0">
													<dt class="me-2">예약팀</dt>
													<dd class="mb-0">135</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">내장팀</dt>
													<dd class="mb-0">121</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">내장 인원</dt>
													<dd class="mb-0">360<span class="txt-line"></span>남260 / 여80</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">취소</dt>
													<dd class="mb-0">13</dd>
												</dl>

												<dl class="d-flex mb-0">
													<dt class="me-2">노쇼</dt>
													<dd class="mb-0">0</dd>
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

											<div class="table-fixed-head card" data-simplebar style="max-height:469px;">
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
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".copyModal">복사</button>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".moveModal">이동</button>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".articleModal">대여</button>
													<button type="button" class="btn btn-outline-custom">영수증</button>
													<button type="button" class="btn btn-outline-custom">락카 자동 반납</button>
													<button type="button" class="btn btn-outline-custom">팀 추가</button>
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
															<th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll"></th>
															<th>시간</th>
															<th>코스</th>
															<th>성명</th>
															<th>락카</th>
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
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>06:50</td>
															<td>WI</td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="홍길동"></td>
															<td>
																<div class="d-flex align-items-center gap-1">
																	<input class="form-control text-center p-0 mx-auto" type="text" value="1111">
																	<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
																</div>
															</td>
															<td>185,000</td>
															<td>0</td>
															<td>185,000</td>
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
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td></td>
															<td></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="이길동"></td>
															<td>
																<div class="d-flex align-items-center gap-1">
																	<input class="form-control text-center p-0 mx-auto" type="text" value="1123">
																	<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
																</div>
															</td>
															<td>195,000</td>
															<td>0</td>
															<td>195,000</td>
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
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td></td>
															<td></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="박길동"></td>
															<td>
																<div class="d-flex align-items-center gap-1">
																	<input class="form-control text-center p-0 mx-auto" type="text" value="1124">
																	<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
																</div>
															</td>
															<td>195,000</td>
															<td>0</td>
															<td>195,000</td>
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
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td></td>
															<td></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="장길동"></td>
															<td>
																<div class="d-flex align-items-center gap-1">
																	<input class="form-control text-center p-0 mx-auto" type="text" value="1125">
																	<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
																</div>
															</td>
															<td>195,000</td>
															<td>0</td>
															<td>195,000</td>
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
														<tr>
															<td></td>
															<td colspan="2"><button type="button" class="btn btn btn-outline-custom text-blue" data-bs-toggle="modal" data-bs-target=".detailModal">상세 내역서</button></td>
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
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>06:50</td>
															<td>WI</td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="홍길동"></td>
															<td>
																<div class="d-flex align-items-center gap-1">
																	<input class="form-control text-center p-0 mx-auto" type="text" value="1111">
																	<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
																</div>
															</td>
															<td>185,000</td>
															<td>0</td>
															<td>185,000</td>
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
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td></td>
															<td></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="이길동"></td>
															<td>
																<div class="d-flex align-items-center gap-1">
																	<input class="form-control text-center p-0 mx-auto" type="text" value="1123">
																	<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
																</div>
															</td>
															<td>195,000</td>
															<td>0</td>
															<td>195,000</td>
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
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td></td>
															<td></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="박길동"></td>
															<td>
																<div class="d-flex align-items-center gap-1">
																	<input class="form-control text-center p-0 mx-auto" type="text" value="1124">
																	<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
																</div>
															</td>
															<td>195,000</td>
															<td>0</td>
															<td>195,000</td>
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
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td></td>
															<td></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="장길동"></td>
															<td>
																<div class="d-flex align-items-center gap-1">
																	<input class="form-control text-center p-0 mx-auto" type="text" value="1125">
																	<a href="javascript:void(0);" onclick="lockerPrint(this);"><i class="bx bx-printer fs-6 align-text-bottom"></i></a>
																</div>
															</td>
															<td>195,000</td>
															<td>0</td>
															<td>195,000</td>
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
														<tr>
															<td></td>
															<td colspan="2"><button type="button" class="btn btn btn-outline-custom text-blue" data-bs-toggle="modal" data-bs-target=".detailModal">상세 내역서</button></td>
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
													</tbody>
												</table>
											</div>

											<div class="border-box border-bottom-0 mt-3">
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
														<tr class="table-bg-gray">
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
															<th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll"></th>
															<th>No</th>
															<th>락카</th>
															<th>성명</th>
															<th>지불구분</th>
															<th>금액</th>
															<th>카드번호</th>
															<th>승인번호</th>
															<th>결제항목</th>
															<th>영수증</th>
															<th>정산자</th>
															<th>정산시간</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
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
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
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
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
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
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
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
															<th>지불합계</th>
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
														<ul class="nav nav-tabs-custom nav-tabs-sm" role="tablist">
															<li class="nav-item">
																<a class="nav-link active" data-bs-toggle="tab" href="#bookingModalRightTab01" role="tab">
																	<span class="new">VOC</span>
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab02" role="tab">
																	<span class="new">프론트</span>
																</a>
															</li>
															<li class="nav-item">
																<a class="nav-link" data-bs-toggle="tab" href="#bookingModalRightTab03" role="tab">
																	<span class="new">경기</span>
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
		                <!--//row -->

						<div class="modal fade detailModal" tabindex="-1" aria-labelledby="detailModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="detailModalLabel">상세 내역서</h5>
										<button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="d-flex align-items-center gap-2 mb-3">
											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="구분 선택">
													<option value="개별">개별</option>
													<option value="팀별">팀별</option>
												</select>
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

											<div class="form-check form-check-inline ms-3">
												<input class="form-check-input" type="checkbox" id="totalCheck" checked>
												<label class="form-check-label" for="totalCheck">집계</label>
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
													<th><input class="form-check-input" type="checkbox" name="tableCheckAll" checked></th>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
													<td><input class="form-check-input" type="checkbox" name="tableCheck" checked></td>
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
						<!-- //modal - copyModal -->

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
