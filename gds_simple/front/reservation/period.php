<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '기간별 예약 현황'; include "../../partials/title-meta.php"; ?>
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
								<div class="card">
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
											
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="Unreserved" checked="">
												<label class="form-check-label" for="Unreserved">미예약</label>
											</div>
											
											<div class="form-check form-check-inline me-2">
												<input class="form-check-input" type="checkbox" id="reserved">
												<label class="form-check-label" for="reserved">예약</label>
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
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">18h-15</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">18h-16</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">18h-17</button></li>
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
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">일반</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">신입</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">프로</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">노캐디</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">지정</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">드라이빙</button></li>
													</ul>
												</div>

												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">카트 변경</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">5인승 전동 카트</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">2인승 전동 카트</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">1인 수동 카트</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">무료 카트</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">No 카트</button></li>
													</ul>
												</div>
												
												<div class="btn-group">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">이벤트 변경</button>
													<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">아메리카노 무료 제공</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">아메리카노 50% 할인</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">조식 뷔페 무료 제공</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">카트 무료</button></li>
														<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">카트 50% 할인</button></li>
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
													<option value="예약 상태">예약 상태</option>
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

										<div class="table-fixed-head mb-3" data-simplebar>
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
														<th>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll">
																<label class="form-check-label" for="checkAll">No</label>
															</div>
														</th>
														<th>예약일
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
																<ul class="dropdown-menu dropdown-menu-dark" data-popper-placement="bottom-start">
																	<li><button type="button" class="dropdown-item">EAST IN</button></li>
																	<li><button type="button" class="dropdown-item">EAST OUT</button></li>
																	<li><button type="button" class="dropdown-item">WEST IN</button></li>
																	<li><button type="button" class="dropdown-item">WEST OUT</button></li>
																</ul>
															</div>
														</th>
														<th>시간</th>
														<th>예약자명</th>
														<th>그린피
															<div class="dropdown d-inline-block">
																<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																<ul class="dropdown-menu dropdown-menu-dark" data-popper-placement="bottom-start">
																	<li><button type="button" class="dropdown-item">18h-15</button></li>
																	<li><button type="button" class="dropdown-item">18h-16</button></li>
																	<li><button type="button" class="dropdown-item">18h-17</button></li>
																</ul>
															</div>
														</th>																
														<th>인원
															<div class="dropdown d-inline-block">
																<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																<ul class="dropdown-menu dropdown-menu-dark" data-popper-placement="bottom-start">
																	<li><button type="button" class="dropdown-item">4</button></li>
																	<li><button type="button" class="dropdown-item">3</button></li>
																	<li><button type="button" class="dropdown-item">2</button></li>
																	<li><button type="button" class="dropdown-item">1</button></li>
																</ul>
															</div>
														</th>
														<th>캐디
															<div class="dropdown d-inline-block">
																<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																<ul class="dropdown-menu dropdown-menu-dark" data-popper-placement="bottom-start">
																	<li><button type="button" class="dropdown-item">일반</button></li>
																	<li><button type="button" class="dropdown-item">신입</button></li>
																	<li><button type="button" class="dropdown-item">프로</button></li>
																	<li><button type="button" class="dropdown-item">노캐디</button></li>
																	<li><button type="button" class="dropdown-item">지정</button></li>
																	<li><button type="button" class="dropdown-item">드라이빙</button></li>
																</ul>
															</div>
														</th>
														<th>카트
															<div class="dropdown d-inline-block">
																<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																<ul class="dropdown-menu dropdown-menu-dark" data-popper-placement="bottom-start">
																	<li><button type="button" class="dropdown-item">5인승 전동 카트</button></li>
																	<li><button type="button" class="dropdown-item">2인승 전동 카트</button></li>
																	<li><button type="button" class="dropdown-item">1인 수동 카트</button></li>
																	<li><button type="button" class="dropdown-item">무료 카트</button></li>
																	<li><button type="button" class="dropdown-item">No 카트</button></li>
																</ul>
															</div>
														</th>
														<th>이벤트
															<div class="dropdown d-inline-block">
																<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																<ul class="dropdown-menu dropdown-menu-dark" data-popper-placement="bottom-start">
																	<li><button type="button" class="dropdown-item">아메리카노 무료 제공</button></li>
																	<li><button type="button" class="dropdown-item">아메리카노 50% 할인</button></li>
																	<li><button type="button" class="dropdown-item">조식 뷔페 무료 제공</button></li>
																	<li><button type="button" class="dropdown-item">카트 무료</button></li>
																	<li><button type="button" class="dropdown-item">카트 50% 할인</button></li>
																</ul>
															</div>
														</th>																
														<th>채널
															<div class="dropdown d-inline-block">
																<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																<ul class="dropdown-menu dropdown-menu-dark" data-popper-placement="bottom-start">
																	<li><button type="button" class="dropdown-item">골프장</button></li>
																	<li><button type="button" class="dropdown-item">Only AGL</button></li>
																	<li><button type="button" class="dropdown-item">B_Agent_1</button></li>
																	<li><button type="button" class="dropdown-item">B_Agency_1</button></li>
																	<li><button type="button" class="dropdown-item">C_Golfnow</button></li>
																</ul>
															</div>
														</th>
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
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check30">
																<label class="form-check-label" for="check30">30</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST IN</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-17</td>
														<td>4</td>
														<td>노 캐디</td>
														<td>5인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>
														<td>B_골팡</td>
														<td>선불 / 입금 대기</td>
														<td>GX / 2일</td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td>비고테스트비고테스트</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check29">
																<label class="form-check-label" for="check29">29</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST OUT</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-16</td>
														<td>4</td>
														<td>신입</td>
														<td>2인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>																
														<td>B_골팡</td>
														<td>18h-17</td>
														<td>GX / 2일</td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td>비고테스트비고테스트</td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check28">
																<label class="form-check-label" for="check28">28</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST OUT</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-17</td>
														<td>4</td>
														<td>일반</td>
														<td>5인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>																
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check27">
																<label class="form-check-label" for="check27">27</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST IN</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-17</td>
														<td>4</td>
														<td>프로</td>
														<td>5인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>																
														<td>B_골팡</td>
														<td>선불 / 입금 대기</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check26">
																<label class="form-check-label" for="check26">26</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST OUT</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-16</td>
														<td>4</td>
														<td>일반</td>
														<td>5인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>																
														<td>B_골팡</td>
														<td>18h-17</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check25">
																<label class="form-check-label" for="check25">25</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST OUT</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-17</td>
														<td>4</td>
														<td>일반</td>
														<td>5인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>																
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check24">
																<label class="form-check-label" for="check24">24</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST OUT</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-17</td>
														<td>4</td>
														<td>일반</td>
														<td>5인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>																
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check23">
																<label class="form-check-label" for="check23">23</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST OUT</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-17</td>
														<td>4</td>
														<td>일반</td>
														<td>5인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>																
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" name="tableCheck" id="check22">
																<label class="form-check-label" for="check22">22</label>
															</div>
														</td>
														<td>06.05 (월)</td>
														<td>WEST OUT</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>18h-17</td>
														<td>4</td>
														<td>일반</td>
														<td>5인승 전동 카트</td>
														<td>아메리카노 50% 할인</td>																
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
		                <!--//row - 그린피 설정 내역 -->
						
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

			$('input[type=checkbox][name=tableCheckAll]').change(function() {
				if ($(this).is(':checked')) {
					$(this).parents('table').find('input[type=checkbox]').prop('checked', true);
					$(this).parents('table').find('tbody tr').addClass('table-active');
				} else {
					$(this).parents('table').find('input[type=checkbox]').prop('checked', false);
					$(this).parents('table').find('tbody tr').removeClass('table-active');				
				}
			});
			
			$('input[type=checkbox][name=tableCheck]').change(function() {
				if ($(this).is(':checked')) {
					$(this).parents('tr').addClass('table-active');
				} else {
					$(this).parents('tr').removeClass('table-active');
					$(this).parents('table').find('thead input[type=checkbox]').prop('checked', false);				
				}
			});		

			$('.datepicker01, .datepicker02').datepicker( 'setDate', today );
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
