<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '티타임 관리'; include "../../partials/title-meta.php"; ?>
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
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<div class="form-check form-check-inline p-0 m-0">
												<select class="form-select form-select-lg">
													<option value="D +7" selected>D +7</option>
													<option value="오늘">오늘</option>
													<optiOn value="이번 주">이번 주</option>
													<optiOn value="이번 달">이번 달</option>
												</select>
											</div>

											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control form-control-em form-control-sm datepicker p-0" value="23.06.01(목)">
											</div>
											<span class="dash">~</span>
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control form-control-em form-control-sm datepicker p-0" value="23.06.02(금)">
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
												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">예약 상태 변경</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">예약 가능 처리</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">예약 불가 처리</button></li>
														<li><div class="dropdown-divider"></div></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".addTeamModal">팀 추가</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">팀 삭제</button></li>
													</ul>
												</div>

												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">그린피 변경</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">155,000</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">185,000</button></li>
													</ul>
												</div>

												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">인원 변경</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">4</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">3</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">2</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">1</button></li>
													</ul>
												</div>

												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">캐디 변경</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">노캐디</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">신입</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">일반</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">프로</button></li>
													</ul>
												</div>

												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">카트 변경</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">5인승 전동 카트</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">2인승 전동 카트</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">카트 선택 가능</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">수동 카트</button></li>
													</ul>
												</div>

												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">이벤트 변경</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">아이스커피 50% 할인</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">아이스커피 무료</button></li>
													</ul>
												</div>

												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">채널 블럭 지정</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">골프장</button></li>
														<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">Only AGL</button></li>
														<li><div class="dropdown-divider"></div></li>
														<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">B_Agent_1</button></li>
														<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">B_Agency_1</button></li>
														<li><div class="dropdown-divider"></div></li>
														<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">C_Golfnow</button></li>
														<li><div class="dropdown-divider"></div></li>
														<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">블럭회수</button></li>
													</ul>
												</div>
											</div>

											<div class="form-check form-check-inline align-top p-0 ms-2 me-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="컬럼 선택">
													<option value="예약상태">예약상태</option>
													<option value="블럭">블럭</option>
													<option value="그린피">그린피</option>
													<option value="인원">인원</option>
													<option value="캐디">캐디</option>
													<option value="카트">카트</option>
													<option value="이벤트">이벤트</option>
												</select>
											</div>
										</div>

										<div class="border-bottom pb-4 mb-4"></div>

										<div class="d-flex gap-4">
											<div class="teetime-left">
												<div class="table-fixed-head card h-100" data-simplebar>
													<table class="table table-fixed table-hover text-center mb-0">
														<thead>
															<tr>
																<th class="col-6 fw-normal">예약일</th>
																<th class="col-6 fw-normal">TOT</th>
															</tr>
														</thead>

														<tbody>
															<tr role="button" class="table-active" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.01 (월)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.02 (화)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.03 (수)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.04 (목)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.05 (금)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sat">05.06 (토)</span></td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sun">05.07 (일)</span></td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.08 (월)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.09 (화)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.10 (수)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.11 (목)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.12 (금)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sat">05.13 (토)</span></td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sun">05.14 (일)</span></td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.15 (월)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.16 (화)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.17 (수)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.18 (목)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.19 (금)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sat">05.20 (토)</span></td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sun">05.21 (일)</span></td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.22 (월)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.23 (화)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.24 (수)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.25 (목)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.26 (금)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sat">05.27 (토)</span></td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td><span class="table-em sun">05.28 (일)</span></td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.29 (월)</td>
																<td>156</td>
															</tr>
															<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>05.30 (화)</td>
																<td>156</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>

											<div class="teetime-right">
												<div class="h-100" data-simplebar>
													<div class="booking-group d-flex gap-3">
														<div class="booking-area border-box border-bottom-0 table-fixed-head">
															<table class="table table-hover text-center mb-0">
																<thead>
																	<tr>
																		<th colspan="9">베어 IN</th>
																	</tr>
																	<tr>
																		<th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll"></th>
																		<th class="fw-normal">시간</th>
																		<th class="fw-normal">예약</th>
																		<th class="fw-normal">그린피</th>
																		<th class="fw-normal">인원</th>
																		<th class="fw-normal">캐디</th>
																		<th class="fw-normal">카트</th>
																		<th class="fw-normal">이벤트 설정</th>
																		<th class="fw-normal">블럭</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>불가</td>
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="booking-area border-box border-bottom-0 table-fixed-head">
															<table class="table table-hover text-center mb-0">
																<thead>
																	<tr>
																		<th colspan="9">베어 OUT</th>
																	</tr>
																	<tr>
																		<th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll"></th>
																		<th class="fw-normal">시간</th>
																		<th class="fw-normal">예약</th>
																		<th class="fw-normal">그린피</th>
																		<th class="fw-normal">인원</th>
																		<th class="fw-normal">캐디</th>
																		<th class="fw-normal">카트</th>
																		<th class="fw-normal">이벤트 설정</th>
																		<th class="fw-normal">블럭</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="booking-area border-box border-bottom-0 table-fixed-head">
															<table class="table table-hover text-center mb-0">
																<thead>
																	<tr>
																		<th colspan="9">크리크 IN</th>
																	</tr>
																	<tr>
																		<th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll"></th>
																		<th class="fw-normal">시간</th>
																		<th class="fw-normal">예약</th>
																		<th class="fw-normal">그린피</th>
																		<th class="fw-normal">인원</th>
																		<th class="fw-normal">캐디</th>
																		<th class="fw-normal">카트</th>
																		<th class="fw-normal">이벤트 설정</th>
																		<th class="fw-normal">블럭</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="booking-area border-box border-bottom-0 table-fixed-head">
															<table class="table table-hover text-center mb-0">
																<thead>
																	<tr>
																		<th colspan="9">크리크 OUT</th>
																	</tr>
																	<tr>
																		<th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll"></th>
																		<th class="fw-normal">시간</th>
																		<th class="fw-normal">예약</th>
																		<th class="fw-normal">그린피</th>
																		<th class="fw-normal">인원</th>
																		<th class="fw-normal">캐디</th>
																		<th class="fw-normal">카트</th>
																		<th class="fw-normal">이벤트 설정</th>
																		<th class="fw-normal">블럭</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td><span class="table-em complete">06:50</span></td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
																	</tr>
																	<tr>
																		<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
																		<td>06:50</td>
																		<td>가능</td>																		
																		<td>180</td>
																		<td>4</td>
																		<td>N</td>
																		<td>5-전동</td>
																		<td>아이스커피 50% 할인</td>
																		<td>B_골팡</td>
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

						<div class="modal fade modifyModal" tabindex="-1" aria-labelledby="modifyModalLabel" aria-modal="true" role="dialog">
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

						<div class="modal fade addTeamModal" tabindex="-1" aria-labelledby="addTeamModalLabel" aria-modal="true" role="dialog">
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
														<td><span class="ps-10">23.05.01(월)</span></td>
													</tr>
													<tr>
														<th>코스</th>
														<td>
															<select class="form-select">
																<option value="코스1" selected>코스1</option>
																<option value="코스2">코스2</option>
																<option value="코스3">코스3</option>
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

		var modifyNum;
		var modifyTit;
		var modifyTxt;

		function modifyModal(element) {
			modifyNum = $('input:checkbox[name=tableCheck]:checked').length;
			modifyTit = $(element).parents('.btn-group').children('.btn').text();
			modifyTxt = $(element).text();

			$('.modifyNum').text(modifyNum)
			$('.modifyTit').text(modifyTit.slice(0, -3))
			$('.modifyTxt').text(modifyTxt)
		}
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
