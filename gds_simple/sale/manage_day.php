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
													<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="티타임 선택">
														<option value="1부">1부</option>
														<option value="2부">2부</option>
														<option value="3부">3부</option>
													</select>
												</div>

												<div class="form-check form-check-inline align-top p-0 m-0">
													<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="티타임 선택">
														<option value="개별">개별</option>
														<option value="팀별">팀별</option>
													</select>
												</div>												
											</div>

											<div class="table-fixed-head card" data-simplebar style="max-height:469px;">
												<table class="table table-sm table-layout-fixed table-hover text-center mb-0">
													<colgroup>
														<col style="width:48px;">
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
															<td>06:50</td>
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
												<span class="fs-16 fw-bold">06:30  EI  김길동</span>
												<div class="btn-group ms-auto">
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".copyModal">복사</button>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".moveModal">이동</button>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".articleModal">대여</button>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".moveGroupModal">조 변경</button>
												</div>

												<div class="form-check form-check-inline align-top p-0 me-0">
													<select class="selectpicker" multiple data-width="fit" data-actions-box="true" data-selected-text-format="static" title="컬럼 선택">
														<option value="단체명">단체명</option>
														<option value="카트">카트</option>
														<option value="카트료">카트료</option>
														<option value="캐디">캐디</option>
														<option value="캐디피">캐디피</option>
														<option value="대여료">대여료</option>
														<option value="총금액">총금액</option>
													</select>
												</div>
											</div>

											<div class="table-fixed-head" data-simplebar>
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
																	<input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll">
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
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="김동준"></td>
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
															<td>110,000</td>
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
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="김아연"></td>
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
															<td>110,000</td>
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
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="김민준"></td>
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
															<td>110,000</td>
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
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td><input class="form-control text-center p-0 mx-auto" type="text" value="김백동"></td>
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
															<td>110,000</td>
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
											</div>

											<div class="border-box mt-4">
													<table class="table w-100 mb-0">
														<colgroup>
															<col style="width:90px;">
															<col style="width:auto">
															<col style="width:90px;">
															<col style="width:auto">
															<col style="width:90px;">
															<col style="width:auto">
														</colgroup>

														<tbody>
															<tr class="table-active">
																<th>성명</th>
																<td>김동준</td>
																<th>연락처</th>
																<td>010-1234-5678</td>
																<th>단체명</th>
																<td>클라스</td>
															</tr>
															<tr>
																<th>회원 구분</th>
																<td>일반회원</td>
																<th>등급 / 번호</th>
																<td>MVP 12-1324</td>
																<th>할인 코드</th>
																<td>프로5</td>
															</tr>
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
