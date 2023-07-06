<?php include "../../partials/main.php"; ?>

    <head>>
		<?php $title = '내장등록'; include "../../partials/title-meta.php"; ?>
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
								<div class="card mb-3">
									<div class="card-body">
										<div class="d-flex align-items-center flex-wrap gap-2">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-lg border-0 h-100">
													<option value="2023.05.01 (일)" selected>2023.06.23 (금)</option>
													<option value="2023.05.02 (화)">2023.05.02 (화)</option>
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
									<div class="card guest-left mb-0">
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

												<div class="form-check form-check-inline ms-auto me-2">
													<input class="form-check-input" type="checkbox" id="undetermined">
													<label class="form-check-label" for="undetermined">미확정</label>
												</div>

												<div class="form-check form-check-inline me-0">
													<input class="form-check-input" type="checkbox" id="confirmation">
													<label class="form-check-label" for="confirmation">확정</label>
												</div>
											</div>

											<div class="table-fixed-head" data-simplebar>
												<table class="table table-hover text-center mb-0">
													<thead>
														<tr>
															<th class="fw-normal">시간</th>
															<th class="fw-normal">코스</th>
															<th class="fw-normal">인원</th>
															<th class="fw-normal">예약자</th>
															<th class="fw-normal">단체명</th>
														</tr>
													</thead>

													<tbody>
														<tr role="button" class="table-active" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td><span class="table-em complete">06:00</span></td>
															<td>EI</td>
															<td>4</td>
															<td>김동준</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td><span class="table-em complete">06:00</span></td>
															<td>EI</td>
															<td>4</td>
															<td>김길동</td>
															<td class="text-truncate">길동이</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>																																										
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>														
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
														<tr role="button" onclick="$(this).parent().find('tr').removeClass('table-active'); $(this).addClass('table-active');">
															<td>06:00</td>
															<td>EI</td>
															<td>4</td>
															<td>홍길동</td>
															<td>클라스</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>

									<div class="card guest-right mb-0">
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

						<div class="modal fade confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-modal="true" role="dialog">
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

						<div class="modal fade addHoleModal" tabindex="-1" aria-labelledby="addHoleModalLabel" aria-modal="true" role="dialog">
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
													<th><input class="form-check-input" type="checkbox" name="tableCheckAll" id="checkAll" checked></th>
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

						<div class="modal fade articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-modal="true" role="dialog">
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
														<th><input class="form-check-input" type="checkbox"></th>
														<th>홀</th>
														<th>대여 품목</th>
														<th>대여료</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<th><input class="form-check-input" type="checkbox"></th>
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
														<th><input class="form-check-input" type="checkbox"></th>
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
														<th><input class="form-check-input" type="checkbox"></th>
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
										<div class="d-flex gap-2">
											<button type="button" class="btn btn-custom">삭제</button>
											<button type="button" class="btn btn-custom">저장</button>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - articleModal -->

						<div class="modal fade moveGroupModal" tabindex="-1" aria-labelledby="moveGroupModalLabel" aria-modal="true" role="dialog">
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

						<div class="modal fade copyModal" tabindex="-1" aria-labelledby="copyModalLabel" aria-modal="true" role="dialog">
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
															<td><input class="form-check-input" type="radio" name="tableRadio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="radio" name="tableRadio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="radio" name="tableRadio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="radio" name="tableRadio"></td>
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

						<div class="modal fade moveModal" tabindex="-1" aria-labelledby="moveModalLabel" aria-modal="true" role="dialog">
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
															<td><input class="form-check-input" type="radio" name="tableRadio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="radio" name="tableRadio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="radio" name="tableRadio"></td>
															<td>13:48</td>
															<td>EI</td>
															<td>18</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="radio" name="tableRadio"></td>
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

		function lockerPrint(num) {
			var lockerNum = $(num).prev().val();

			
		}
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>