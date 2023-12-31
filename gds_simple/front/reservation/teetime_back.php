<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '티타임 생성'; include "../../partials/title-meta.php"; ?>
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

						<!--?php $pagetitle = '예약'; $title = '티타임 생성'; include "../../partials/page-title.php"; ?-->

						<!-- start Content -->

                        <div class="row">
                            <div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col-6">
												<div id="calendar01" class="teetime-calendar"></div>
											</div>

											<div class="col-6">
												<div id="calendar02" class="teetime-calendar"></div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
		                <!--//row - calendar -->

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title mb-4">Tee Times Setting</h4>
										<div class="row">
											<div class="col-12">
												<div class="form-check form-check-inline ps-0 me-0">
													<input type="text" class="form-control datepicker" placeholder="시작일">
												</div>
												<span class="dash">~</span>
												<div class="form-check form-check-inline ps-0 pe-4 me-0">
													<input type="text" class="form-control datepicker" placeholder="종료일">
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="day01" value="option1" checked="">
													<label class="form-check-label" for="day01">요일 전체</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="day02" value="option2">
													<label class="form-check-label" for="day02">월</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="day03" value="option3">
													<label class="form-check-label" for="day03">화</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="day04">
													<label class="form-check-label" for="day04">수</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="day05" value="option5">
													<label class="form-check-label" for="day05">목</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="day06" value="option6">
													<label class="form-check-label" for="day06">금</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="checkbox" id="day07" value="option7">
													<label class="form-check-label" for="day07">토</label>
												</div>
												<div class="form-check form-check-inline me-0">
													<input class="form-check-input" type="checkbox" id="day08" value="option8">
													<label class="form-check-label" for="day08">일</label>
												</div>
												<div class="form-check form-check-inline align-top">
													<select class="form-select">
														<option value="예약 가능" selected="">예약 가능</option>
														<option value="예약불가">예약불가</option>
													</select>
												</div>
												<div class="btn-group align-top">
													<button class="btn dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">코스 선택 <i class="mdi mdi-chevron-down"></i></button>
													<ul class="dropdown-menu dropdown-menu-dark select_course">
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
																	<input class="form-check-input" type="checkbox" id="teetimeday04" value="WEST IN">
																	<label class="form-check-label w-100" for="teetimeday04">WEST IN</label>
																</div>
															</div>
														</li>
														<li>
															<div class="dropdown-item">
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" id="teetimeday05" value="WEST OUT">
																	<label class="form-check-label w-100" for="teetimeday05">WEST OUT</label>
																</div>
															</div>
														</li>
													</ul>
												</div>
												<!--div class="form-check form-check-inline align-top ps-0 m-0">
													<select class="form-select select_course" multiple="multiple" value="코스 선택...">
														<option value="EAST IN" selected>EAST IN</option>
														<option value="EAST OUT" selected>EAST OUT</option>
														<option value="WEST IN" selected>WEST IN</option>
														<option value="WEST OUT" selected>WEST OUT</option>
													</select>
												</div-->
											</div>
										</div>

										<div class="border-bottom pb-4 mb-4"></div>

										<div class="row">
											<div class="col-12">
												<div class="d-flex gap-2 mb-3">
													<ul class="nav nav-tabs-custom me-auto" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#batch" role="tab">
																<span>일괄 등록</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#individual" role="tab">
																<span>개별 등록</span>
															</a>
														</li>
													</ul>

													<div class="select-group">
														<select class="form-select w-auto">
															<option value="23년" selected>23년</option>
															<option value="22년">22년</option>
															<option value="21년">21년</option>
															<option value="20년">20년</option>
														</select>

														<select class="form-select w-auto">
															<option value="1월" selected>1월</option>
															<option value="2월">2월</option>
															<option value="3월">3월</option>
															<option value="4월">4월</option>
															<option value="5월">5월</option>
															<option value="6월">6월</option>
															<option value="7월">7월</option>
															<option value="8월">8월</option>
															<option value="9월">9월</option>
															<option value="10월">10월</option>
															<option value="11월">11월</option>
															<option value="12월">12월</option>
														</select>

														<button class="btn" type="button">티타임</button>
													</div>

													<button class="btn btn-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#CollectiveRegistration" aria-controls="CollectiveRegistration">티타임 생성</button>
												</div>

												<div class="tab-content">
													<div class="tab-pane active" id="batch" role="tabpanel">
														<table class="table table-hover text-center">
															<thead>
																<tr>
																	<th>구분</th>
																	<th>시작 시간 ~ 종료 시간</th>
																	<th>티타임 간격</th>
																	<th>인원</th>
																	<th>캐디</th>
																	<th>카트</th>
																	<th>이벤트</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td>1</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control form-control-em text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="24:00">
																		</div>
																		<span class="dash">~</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control form-control-em text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="24:00">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control form-control-em text-center input_tee" onkeydown="checkNumber()" maxlength="1" placeholder="7">
																		</div>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_tee" onkeydown="checkNumber()" maxlength="1" >
																		</div>
																	</td>
																	<td>
																		<select class="form-select form-select-sm w-auto mx-auto" required>
																			<option value="" disabled selected>인원 선택</option>
																			<option value="4">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select form-select-sm w-auto mx-auto" required>
																			<option value="" disabled selected>캐디 선택</option>
																			<option value="노캐디">노캐디</option>
																			<option value="신입">신입</option>
																			<option value="일반">일반</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select form-select-sm w-auto mx-auto" required>
																			<option value="" disabled selected>카트 선택</option>
																			<option value="5인승 전동 카트">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select form-select-sm w-auto mx-auto" required>
																			<option value="" disabled selected>이벤트 선택</option>
																			<option value="아이스커피 50% 할인">아이스커피 50% 할인</option>
																			<option value="아이스커피 50% 할인">아이스커피 50% 할인</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="24:00">
																		</div>
																		<span class="dash">~</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="24:00">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_tee" onkeydown="checkNumber()" maxlength="1" placeholder="7">
																		</div>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_tee" onkeydown="checkNumber()" maxlength="1" >
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto" required>
																			<option value="" disabled selected>인원 선택</option>
																			<option value="4">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto" required>
																			<option value="" disabled selected>캐디 선택</option>
																			<option value="노캐디">노캐디</option>
																			<option value="신입">신입</option>
																			<option value="일반">일반</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select form-select-sm w-auto mx-auto" required>
																			<option value="" disabled selected>카트 선택</option>
																			<option value="5인승 전동 카트">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto" required>
																			<option value="" disabled selected>이벤트 선택</option>
																			<option value="아이스커피 50% 할인">아이스커피 50% 할인</option>
																			<option value="아이스커피 50% 할인">아이스커피 50% 할인</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="24:00">
																		</div>
																		<span class="dash">~</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="24:00">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_tee" onkeydown="checkNumber()" maxlength="1" placeholder="7">
																		</div>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_tee" onkeydown="checkNumber()" maxlength="1" >
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto" required>
																			<option value="" disabled selected>인원 선택</option>
																			<option value="4">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto" required>
																			<option value="" disabled selected>캐디 선택</option>
																			<option value="노캐디">노캐디</option>
																			<option value="신입">신입</option>
																			<option value="일반">일반</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select form-select-sm w-auto mx-auto" required>
																			<option value="" disabled selected>카트 선택</option>
																			<option value="5인승 전동 카트">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto" required>
																			<option value="" disabled selected>이벤트 선택</option>
																			<option value="아이스커피 50% 할인">아이스커피 50% 할인</option>
																			<option value="아이스커피 50% 할인">아이스커피 50% 할인</option>
																		</select>
																	</td>
																</tr>
																<tr>
																	<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
																</tr>
															</tbody>
														</table>
													</div>

													<div class="tab-pane" id="individual" role="tabpanel">
														<div class="form-check form-check-inline p-0 m-0">
															<input class="form-control" type="text" placeholder="(예 : 0600, 0610, 0620)" style="width:455px;">
														</div>
													</div>
												</div>

												<div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="CollectiveRegistration" aria-labelledby="CollectiveRegistrationLabel">
													<div class="offcanvas-header pb-0">
														<h5 id="CollectiveRegistrationLabel">티타임 등록</h5>
														<!--button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button-->
														<div class="d-flex flex-wrap justify-content-end gap-2">
															<button type="button" class="btn btn-outline-custom ms-auto ">등록</button>
															<button type="button" class="btn btn-outline-custom" data-bs-dismiss="offcanvas" aria-label="Close">취소</button>
														</div>
													</div>
													<div class="offcanvas-body">
														<table class="table text-center nowrap table-resist">
															<thead>
																<tr>
																	<th>등록</th>
																	<th>순번</th>
																	<th>날짜</th>
																	<th>시간</th>
																	<th>인원</th>
																	<th>캐디</th>
																	<th>카트</th>
																	<th>코스명</th>
																	<th>타임별 이벤트</th>
																	<th>상태</th>
																</tr>
															</thead>

															<tbody>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>1</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>2</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>3</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>4</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>5</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>6</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>7</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>8</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>9</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>10</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>11</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>12</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>13</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>14</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>15</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>16</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>17</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>17</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>17</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>17</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
																</tr>
																<tr>
		                                                            <td><input class="form-check-input" type="checkbox" checked></td>
																	<td>17</td>
																	<td>23.04.17(월)</td>
																	<td>07:00</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약 가능" selected="">예약 가능</option>
																			<option value="예약불가">예약불가</option>
																		</select>
																	</td>
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
																<select class="form-select form-select-sm perpage-select w-auto py-0 pe-3">
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
																		<a class="page-link py-0" href="javascript:void(0);" aria-label="PreviousAll">
																			<span aria-hidden="true">
																				<svg width="9" height="10" viewBox="0 0 9 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																					<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88969 0L2.93994 4.94975L7.88969 9.89949L8.95035 8.83883L5.06126 4.94975L8.95035 1.06066L7.88969 0ZM0 10H1.5L1.5 3.89067e-05H0V10Z"></path>
																				</svg>
																			</span>
																		</a>
																	</li>
																	<li class="page-item">
																		<a class="page-link py-0" href="javascript:void(0);" aria-label="Previous">
																			<span aria-hidden="true">
																				<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																					<path fill-rule="evenodd" clip-rule="evenodd" d="M0.351074 5.05054L5.30082 0.100791L6.36148 1.16145L2.47239 5.05054L6.36148 8.93962L5.30082 10.0003L0.351074 5.05054Z"></path>
																				</svg>
																			</span>
																		</a>
																	</li>
																	<li class="page-item">
																		<a class="page-link py-0" href="javascript:void(0);" aria-label="Next">
																			<span aria-hidden="true">
																				<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																					<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6499 4.94971L5.70016 9.89945L4.6395 8.83879L8.52858 4.94971L4.6395 1.06062L5.70016 -3.93408e-05L10.6499 4.94971Z"></path>
																				</svg>
																			</span>
																		</a>
																	</li>
																	<li class="page-item">
																		<a class="page-link py-0" href="javascript:void(0);" aria-label="NextAll">
																			<span aria-hidden="true">
																				<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																					<path fill-rule="evenodd" clip-rule="evenodd" d="M1.28853 10.0002L6.23828 5.0505L1.28854 0.10075L0.227876 1.16141L4.11696 5.0505L0.227875 8.93958L1.28853 10.0002ZM9.17822 -3.91006e-05L7.67822 -3.92318e-05L7.67822 9.99996L9.17822 9.99996L9.17822 -3.91006e-05Z"></path>
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
									</div>
								</div>
							</div>
						</div>
		                <!--//row - Tee Times 등록 -->

						<div class="row">
							<div class="col-12">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<h4 class="card-title me-auto">Tee Times
												<a href="javascript:void(0);" class="d-inline-block" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-trigger="click" data-bs-html="true" title="※ 코스 정보는 순환 순서로 입력해 주세요.<br>1코스 > 2코스 > 3코스 > 1코스<br><br><a href='https://www.naver.com' target='blank'>동영상 설명 보기</a>">
													<i class="fas fa-question-circle tooltip-ico"></i>
												</a>
											</h4>

											<div class="btn-group">
												<button class="btn dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">컬럼 선택 <i class="mdi mdi-chevron-down"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark">
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
																<input class="form-check-input" type="checkbox" id="select_course02" value="예약일">
																<label class="form-check-label w-100" for="select_course02">예약일</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_course03" value="코스">
																<label class="form-check-label w-100" for="select_course03">코스</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="teetimeday04" value="시간">
																<label class="form-check-label w-100" for="teetimeday04">시간</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="teetimeday05" value="인원">
																<label class="form-check-label w-100" for="teetimeday05">인원</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="teetimeday06" value="예약 상태">
																<label class="form-check-label w-100" for="teetimeday06">예약 상태</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="teetimeday07" value="블럭">
																<label class="form-check-label w-100" for="teetimeday07">블럭</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="teetimeday08" value="그린피">
																<label class="form-check-label w-100" for="teetimeday08">그린피</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="teetimeday09" value="그린피">
																<label class="form-check-label w-100" for="teetimeday09">그린피</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="teetimeday10" value="캐디">
																<label class="form-check-label w-100" for="teetimeday10">캐디</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="teetimeday10" value="이벤트">
																<label class="form-check-label w-100" for="teetimeday11">이벤트</label>
															</div>
														</div>
													</li>
												</ul>
											</div>

											<div class="btn-group btn-group-first">
												<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">채널 블럭 지정<i class="mdi mdi-chevron-down"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
													<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">골프장</button></li>
													<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">Only AGL</button></li>
													<li><div class="dropdown-divider"></div></li>
													<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">B_Agent_1</button></li>
													<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">B_Agency_1</button></li>
													<li><div class="dropdown-divider"></div></li>
													<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">C_Golfnow</button></li>
												</ul>
											</div><!-- /btn-group -->

											<!--div class="btn-group btn-group-first">
												<button type="button" class="btn btn-sm btn-info dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">예약일 <i class="mdi mdi-chevron-down"></i></button>
												<div class="dropdown-menu">
													<a class="dropdown-item teetimeModifyBtn" href="javascript: void(0);">23.04.17 (월)</a>
													<a class="dropdown-item teetimeModifyBtn" href="javascript: void(0);">23.04.18 (화)</a>
													<a class="dropdown-item teetimeModifyBtn" href="javascript: void(0);">23.04.19 (수)</a>
													<a class="dropdown-item teetimeModifyBtn" href="javascript: void(0);">23.04.20 (목)</a>
												</div>
											</div--><!-- /btn-group -->

											<div class="btn-group">
												<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">예약 상태 변경<i class="mdi mdi-chevron-down"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">예약 가능 처리</button></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">예약 불가 처리</button></li>
													<li><div class="dropdown-divider"></div></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">티타임 추가</button></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">티타임 삭제</button></li>
												</ul>
											</div><!-- /btn-group -->

											<div class="btn-group">
												<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">캐디 변경<i class="mdi mdi-chevron-down"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">노캐디</button></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">신입</button></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">일반</button></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">프로</button></li>
												</ul>
											</div><!-- /btn-group -->

											<div class="btn-group">
												<button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">카트 변경<i class="mdi mdi-chevron-down"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">5인승 전동 카트</button></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">2인승 전동 카트</button></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">카트 선택 가능</button></li>
													<li><button type="button" class="dropdown-item teetimeModifyBtn" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">수동 카트</button></li>
												</ul>
											</div><!-- /btn-group -->
										</div>

										<div class="row">
											<div class="col-12">
												<table class="table w-100 nowrap text-center">
													<thead>
														<tr>
                                                            <th>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" id="checkAll">
																	<label class="form-check-label" for="checkAll">No</label>
																</div>
															</th>
															<th>
																<a href="javascript:void(0);">예약일</a>
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
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">A</button></li>
																		<li><button type="button" class="dropdown-item">B</button></li>
																	</ul>
																</div>
															</th>
															<th>시간</th>
															<th>그린피
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">155,000</button></li>
																		<li><button type="button" class="dropdown-item">185,000</button></li>
																	</ul>
																</div>
															</th>
															<th>인원
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">4</button></li>
																		<li><button type="button" class="dropdown-item">3</button></li>
																		<li><button type="button" class="dropdown-item">2</button></li>
																		<li><button type="button" class="dropdown-item">1</button></li>
																	</ul>
																</div>
															</th>
															<th>예약 상태
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item teetimeModifyBtn">예약 완료</button></li>
																		<li><button type="button" class="dropdown-item teetimeModifyBtn">미예약</button></li>
																		<li><div class="dropdown-divider"></div></li>
																		<li><button type="button" class="dropdown-item teetimeModifyBtn">예약 가능</button></li>
																		<li><button type="button" class="dropdown-item teetimeModifyBtn">예약 불가</button></li>
																	</ul>
																</div>
															</th>
															<th>블럭 지정
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">골프장</button></li>
																		<li><button type="button" class="dropdown-item">Only AGL</button></li>
																		<li><div class="dropdown-divider"></div></li>
																		<li><button type="button" class="dropdown-item">B_Agent_1</button></li>
																		<li><button type="button" class="dropdown-item">B_Agency_1</button></li>
																		<li><div class="dropdown-divider"></div></li>
																		<li><button type="button" class="dropdown-item">C_Golfnow</button></li>
																	</ul>
																</div>
															</th>
															<th>캐디
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-center dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">노캐디</button></li>
																		<li><button type="button" class="dropdown-item">일반</button></li>
																		<li><button type="button" class="dropdown-item">신입</button></li>
																		<li><button type="button" class="dropdown-item">프로</button></li>
																	</ul>
																</div>
															</th>
															<th>카트
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-center dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">5인승 전동 카트</button></li>
																		<li><button type="button" class="dropdown-item">2인승 전동 카트</button></li>
																		<li><button type="button" class="dropdown-item">카트 선택 가능</button></li>
																		<li><button type="button" class="dropdown-item">수동 카트</button></li>
																	</ul>
																</div>
															</th>
															<th>이벤트</th>
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
                                                            <td>23.04.17 (월)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>155,000</td>
                                                            <td>4</td>
															<td class="text-truncate">홍길동</td>
                                                            <td>B_골팡</td>
                                                            <td>노캐디</td>
                                                            <td>5인승 전동 카트</td>
                                                            <td>아이스 커피 무료 제공</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check29">
																	<label class="form-check-label" for="check29">29</label>
																</div>
															</td>
                                                            <td>23.04.16 (일)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>155,000</td>
                                                            <td>3</td>
															<td>미예약</td>
                                                            <td>B_골팡</td>
                                                            <td>일반</td>
                                                            <td>2인승 전동 카트</td>
                                                            <td>아이스 커피 50% 할인</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check28">
																	<label class="form-check-label" for="check28">28</label>
																</div>
															</td>
                                                            <td>23.04.15 (토)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>2</td>
															<td>미예약</td>
                                                            <td>C_카카오</td>
                                                            <td>신입</td>
                                                            <td>2인승 전동 카트</td>
                                                            <td>아이스 커피 50% 할인</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check27">
																	<label class="form-check-label" for="check27">27</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
															<td>미예약</td>
                                                            <td></td>
                                                            <td>프로</td>
                                                            <td>수동 카트</td>
                                                            <td>아이스 커피 50% 할인</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check26">
																	<label class="form-check-label" for="check26">26</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>B</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
															<td>미예약</td>
															<td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
                                                            <td>아이스 커피 50% 할인</td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check25">
																	<label class="form-check-label" for="check25">25</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check24">
																	<label class="form-check-label" for="check24">24</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
															<td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check23">
																	<label class="form-check-label" for="check23">23</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check22">
																	<label class="form-check-label" for="check22">22</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check21">
																	<label class="form-check-label" for="check21">21</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check20">
																	<label class="form-check-label" for="check20">20</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check19">
																	<label class="form-check-label" for="check19">19</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check18">
																	<label class="form-check-label" for="check18">18</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check17">
																	<label class="form-check-label" for="check17">17</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check16">
																	<label class="form-check-label" for="check16">16</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check15">
																	<label class="form-check-label" for="check15">15</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check14">
																	<label class="form-check-label" for="check14">14</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check13">
																	<label class="form-check-label" for="check13">13</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check12">
																	<label class="form-check-label" for="check12">12</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check11">
																	<label class="form-check-label" for="check11">11</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check10">
																	<label class="form-check-label" for="check10">10</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check9">
																	<label class="form-check-label" for="check9">9</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check8">
																	<label class="form-check-label" for="check8">8</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check7">
																	<label class="form-check-label" for="check7">7</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check6">
																	<label class="form-check-label" for="check6">6</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check5">
																	<label class="form-check-label" for="check5">5</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check4">
																	<label class="form-check-label" for="check4">4</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check3">
																	<label class="form-check-label" for="check3">3</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check2">
																	<label class="form-check-label" for="check2">2</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
															<td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>
																<div class="form-check form-check-inline">
																	<input class="form-check-input" type="checkbox" name="tableCheck" id="check1">
																	<label class="form-check-label" for="check1">1</label>
																</div>
															</td>
                                                            <td>23.04.17 (월)</td>
                                                            <td>A</td>
                                                            <td>07:00</td>
                                                            <td>185,000</td>
                                                            <td>4</td>
                                                            <td>예약불가</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td>수동 카트</td>
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
														<select class="form-select form-select-sm perpage-select w-auto py-0 pe-3">
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
																<a class="page-link py-0" href="javascript:void(0);" aria-label="PreviousAll">
																	<span aria-hidden="true">
																		<svg width="9" height="10" viewBox="0 0 9 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88969 0L2.93994 4.94975L7.88969 9.89949L8.95035 8.83883L5.06126 4.94975L8.95035 1.06066L7.88969 0ZM0 10H1.5L1.5 3.89067e-05H0V10Z"/>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link py-0" href="javascript:void(0);" aria-label="Previous">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M0.351074 5.05054L5.30082 0.100791L6.36148 1.16145L2.47239 5.05054L6.36148 8.93962L5.30082 10.0003L0.351074 5.05054Z"/>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link py-0" href="javascript:void(0);" aria-label="Next">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6499 4.94971L5.70016 9.89945L4.6395 8.83879L8.52858 4.94971L4.6395 1.06062L5.70016 -3.93408e-05L10.6499 4.94971Z"/>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link py-0" href="javascript:void(0);" aria-label="NextAll">
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
							</div>
						</div>
		                <!--//row - Tee Times 내역 -->

						<div class="modal fade calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="bookingModalLabel">티타임 등록 내역</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>

									<div class="modal-body">
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control datepicker" placeholder="시작일">
											</div>
											<span class="dash">~</span>
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control datepicker" placeholder="종료일">
											</div>

											<button type="button" class="btn btn-outline-custom ms-auto">복제</button>
										</div>

										<div class="row">
											<div class="col-12">
												<table class="table w-100 nowrap text-center">
													<thead>
														<tr>
															<th>구분</th>
															<th>시작 시간~종료 시간</th>
															<th>티타임 간격</th>
															<th>캐디</th>
															<th>이벤트</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>24:00~24:00</td>
                                                            <td>7</td>
															<td>노캐디</td>
                                                            <td>아이스 커피 50% 할인</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>24:00~24:00</td>
                                                            <td>7</td>
															<td>프로</td>
                                                            <td>아이스 커피 50% 할인</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>24:00~24:00</td>
                                                            <td>7</td>
															<td>일반</td>
                                                            <td>아이스 커피 50% 할인</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//modal - 달력 팝업 -->

						<div class="modal fade modifyModal" tabindex="-1" aria-labelledby="modifyModalLabel" data-bs-backdrop="static" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body">
										<p class="text-center font-size-14 fw-semibold pt-4 mb-0">선택된 <span class="modifyNum align-top"></span>개의 티타임의<br><span class="modifyTit align-top"></span>(을)를 <span class="modifyTxt align-top"></span>(으)로 변경합니다.</p>
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

						<!-- end Content -->

                    </div><!-- container-fluid -->

                </div><!-- End Page-content -->

				<!--?php include "../../partials/footer.php"; ?-->

            </div><!-- end main content-->

        </div><!-- END layout-wrapper -->

		<?php include "../../partials/right-sidebar.php"; ?>
		<?php include "../../partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			menuActive(2); //OneDepth

			/*
			var table = $('.table-teetime').DataTable({
				dom: 'tp',
				//scrollCollapse: !0,
				//scrollX: !0,
				autoWidth: true,
				lengthChange: true,
				processing: true,
				iDeferLoading: 20,
				ordering: true,
				info: false,
		        select: {
					style: 'multi'
				},
				aaSorting: [],
				columnDefs: [
					{
						targets: [1,2,4,5,6,7,8,9],
						orderable: false
					}
				],

				buttons: [
					{
						extend: 'excel',
						text: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="18px" height="18px" style="vertical-align:top;"><path fill="#4CAF50" d="M41,10H25v28h16c0.553,0,1-0.447,1-1V11C42,10.447,41.553,10,41,10z"/><path fill="#FFF" d="M32 15H39V18H32zM32 25H39V28H32zM32 30H39V33H32zM32 20H39V23H32zM25 15H30V18H25zM25 25H30V28H25zM25 30H30V33H25zM25 20H30V23H25z"/><path fill="#2E7D32" d="M27 42L6 38 6 10 27 6z"/><path fill="#FFF" d="M19.129,31l-2.411-4.561c-0.092-0.171-0.186-0.483-0.284-0.938h-0.037c-0.046,0.215-0.154,0.541-0.324,0.979L13.652,31H9.895l4.462-7.001L10.274,17h3.837l2.001,4.196c0.156,0.331,0.296,0.725,0.42,1.179h0.04c0.078-0.271,0.224-0.68,0.439-1.22L19.237,17h3.515l-4.199,6.939l4.316,7.059h-3.74V31z"/></svg>',
						titleAttr: 'Excel',
						className:'btn-sm btn-light',
						exportOptions: {
							columns: ':visible'
						}
					}
				],
				language: {
					lengthMenu: 'show _MENU_'
				}
			}).buttons().container().insertBefore('.teetime-head .btn-group-first');
			*/

			/*
			$('.teetimesSelectAll').on('click', function(){
				if($(this).is(':checked')){
					$('.table-teetime tbody tr').addClass('selected');
				} else {
					$('.table-teetime tbody tr').removeClass('selected');
				}
			});
			$('#teetimeRowPerPage').on('change', function() {
				var row = $('#teetimeRowPerPage').val()
				table.page.len( -1 ).draw();
			});
			*/

			$('.buttons-excel').removeClass('btn-secondary');

			/*$('.modifyBtn').click(function() {
				Swal.fire({
					text: '노 캐디로 설정하시겠습니까?',
					showCancelButton: !0,
					confirmButtonColor: '#2cb57e',
					cancelButtonColor: '#adb5bd',
					confirmButtonText: '설정',
					cancelButtonText: '취소',
					confirmButtonClass: 'btn btn-success mt-2',
					cancelButtonClass: 'btn btn-secondary ms-2 mt-2',
				}).then(function($) {
					$.value && Swal.fire({
						showConfirmButton: 0,
						text: '설정 완료',
						timer: 1000
					})
				})
			})*/
		});

		var modifyNum;
		var modifyTit;
		var modifyTxt;

		function modifyModal(element) {
			modifyNum = $('input:checkbox[name=tableCheck]:checked').length;
			modifyTit = $(element).parents('.btn-group').children('.dropdown-toggle').text();
			modifyTxt = $(element).text();

			$('.modifyNum').text(modifyNum)
			$('.modifyTit').text(modifyTit.slice(0, -3))
			$('.modifyTxt').text(modifyTxt)
		}
		</script>

		<!-- Calendar js -->
		<script>
		document.addEventListener('DOMContentLoaded', function() {

			var calendarEl01 = document.getElementById('calendar01');
			var calendarEl02 = document.getElementById('calendar02');
			var calendar01 = new FullCalendar.Calendar(calendarEl01, {
				headerToolbar: {
					left: 'prevYear,nextYear',
					center: 'prev,title,next',
					right: ''
				},
				locale: 'ko',
				windowResize: true,
				initialDate: '2023-06-01',
				height: 'auto',
				contentHeight:50,
				aspectRatio:'1.35',
				editable: true,
				droppable: true,
				dayCellDidMount: function (info) {
					var day = moment(info.date).locale('en').format('D'); // Get the localized date; hu is for hebrew here. You can use like 'en', 'de'
					// Hide the original element
					var originElement = info.el.querySelectorAll('.fc-daygrid-day-number');
					originElement.forEach(e => e.classList.add('d-none'));
					//Insert custom or localized text
					var targetElement = info.el.querySelectorAll('.fc-daygrid-day-top');
					targetElement.forEach(e => e.innerHTML = day);
				},
				eventOrder : 'displayOrder',
				eventSources: [

					// your event source
					{
						events: [
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-01',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-02',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-03',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-04',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-05',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-06',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-07',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-08',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-09',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-10',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-11',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-12',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-13',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-06-14',
								displayOrder:1
							}
						]
					},
					{
						events: [
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-01',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-02',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-03',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-04',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-05',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-06',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-07',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-08',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-09',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-10',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-11',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-12',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-13',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-06-14',
								displayOrder:2
							}
						]
					},
					{
						events: [
							{
								className:'teetime02',
								title:'T 40 / 40',
								start:'2023-06-15',
								displayOrder:1
							},
							{
								className:'teetime02',
								title:'T 40 / 40',
								start:'2023-06-16',
								displayOrder:1
							},
							{
								className:'teetime02',
								title:'T 40 / 40',
								start:'2023-06-17',
								displayOrder:1
							},
							{
								className:'teetime02',
								title:'T 40 / 40',
								start:'2023-06-18',
								displayOrder:1
							},
							{
								className:'teetime02',
								title:'T 40 / 40',
								start:'2023-06-19',
								displayOrder:1
							},
							{
								className:'teetime02',
								title:'T 40 / 40',
								start:'2023-06-20',
								displayOrder:1
							},
							{
								className:'teetime02',
								title:'T 40 / 40',
								start:'2023-06-21',
								displayOrder:1
							}
						]
					},
					{
						events: [
							{
								className:'greenfee02',
								title:'Green Fee',
								start:'2023-06-15',
								displayOrder:1
							},
							{
								className:'greenfee02',
								title:'Green Fee',
								start:'2023-06-16',
								displayOrder:1
							},
							{
								className:'greenfee02',
								title:'Green Fee',
								start:'2023-06-17',
								displayOrder:1
							},
							{
								className:'greenfee02',
								title:'Green Fee',
								start:'2023-06-18',
								displayOrder:1
							},
							{
								className:'greenfee02',
								title:'Green Fee',
								start:'2023-06-19',
								displayOrder:1
							},
							{
								className:'greenfee02',
								title:'Green Fee',
								start:'2023-06-20',
								displayOrder:1
							},
							{
								className:'greenfee02',
								title:'Green Fee',
								start:'2023-06-21',
								displayOrder:1
							}
						]
					}
				],
				eventClick: function(event) {
					var modal = $('.calendarModal');
					modal.modal();
					$('.calendarModal').modal('show');
				},
				eventAfterAllRender(event, element, view) {
					// make all events draggable but disable dragging
					$(".fc-event").each(function() {
						const $event = $(this);// store data so the calendar knows to render an event upon drop
						const event = $event.data("fcSeg").footprint.eventDef;
						$event.data("event", event);

						// make the event draggable using jQuery UI
						$event.draggable({
							disabled: true,
							helper: "clone",
							revert: true,
							revertDuration: 0,
							zIndex: 999,
							stop(event, ui) {
								// when dragging of a copied event stops we must set them
								// copyable again if the control key is still held down
								if (ctrlIsPressed) {
									setEventsCopyable(true);
								}
							}
						});
					});
				}
			});

			$(this).text('달력 접기');

			var calendar02 = new FullCalendar.Calendar(calendarEl02, {
				headerToolbar: {
					left: 'prevYear,nextYear',
					center: 'prev,title,next',
					right: 'toggleButton'
				},
				customButtons: {
					toggleButton: {
						click: function() {
							$('.fc-view-harness').toggle();
							$(this).toggleClass('hide');

							if($(this).is('.hide')){
								$(this).attr('title', '달력 열기');
								$(this).text('달력 열기');
							} else {
								$(this).attr('title', '달력 접기');
								$(this).text('달력 접기');
							}
						}
					}
				},
				locale: 'ko',
				initialDate: '2023-07-01',
				windowResize: true,
				height: 'auto',
				contentHeight:50,
				aspectRatio:'1.35',
				editable: true,
				droppable: true,
				dayCellDidMount: function (info) {
					var day = moment(info.date).locale('en').format('D'); // Get the localized date; hu is for hebrew here. You can use like 'en', 'de'
					// Hide the original element
					var originElement = info.el.querySelectorAll('.fc-daygrid-day-number');
					originElement.forEach(e => e.classList.add("d-none"));
					//Insert custom or localized text
					var targetElement = info.el.querySelectorAll('.fc-daygrid-day-top');
					targetElement.forEach(e => e.innerHTML = day);
				},
				eventOrder : 'displayOrder',
				eventSources: [

					// your event source
					/*
					{
						events: [
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-04-14',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-04-15',
								displayOrder:1
							},
							{
								className:'teetime01',
								title:'T 60 / 60',
								start:'2023-04-17',
								displayOrder:1
							}
						]
					},
					{
						events: [
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-04-14',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-04-15',
								displayOrder:2
							},
							{
								className:'greenfee01',
								title:'Green Fee',
								start:'2023-04-17',
								displayOrder:2
							}
						]
					}
					*/
				],
				eventClick: function(event) {
					var modal = $('.calendarModal');
					modal.modal();
					$('.calendarModal').modal('show');
				}
			});
			calendar01.render();
			calendar02.render();

			$('.fc-toggleButton-button').text('달력 접기');
			$('.teetime-calendar .fc-header-toolbar button').removeClass('fc-button-primary');
		});

		let ctrlIsPressed = false;

		function setEventsCopyable(isCopyable) {
			ctrlIsPressed = !ctrlIsPressed;
			$("#calendar01").fullCalendar("option", "eventStartEditable", !isCopyable);
			$(".fc-event").draggable("option", "disabled", !isCopyable);
		}

		$(document).keydown(function(e) {
			if (e.ctrlKey && !ctrlIsPressed) {
				setEventsCopyable(true);
			}
		});

		$(document).keyup(function(e) {
			if (ctrlIsPressed) {
				setEventsCopyable(false);
			}
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
