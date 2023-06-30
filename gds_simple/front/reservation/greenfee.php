<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '그린피 적용'; include "../../partials/title-meta.php"; ?>
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
													<input class="form-check-input" type="checkbox" id="day04" value="option4">
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
												<div class="btn-group align-top ms-4">
													<button class="btn dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">코스 선택 <i class="mdi mdi-chevron-down fa-lg ico_lg lh-1 ms-2"></i></button>
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
											</div>
										</div>

										<div class="border-bottom pb-4 mb-4"></div>

										<div class="row">
											<div class="col-12">										
												<div class="d-flex gap-2 mb-3">
													<ul class="nav nav-tabs-custom me-auto" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" data-bs-toggle="tab" href="#greenfeeset" role="tab">
																<span class="d-none d-sm-block">그린피 설정</span>
															</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-bs-toggle="tab" href="#membershipset" role="tab">
																<span class="d-none d-sm-block">회원권 그린피</span>
															</a>
														</li>
													</ul>
													
													<div class="select-group">
														<select class="form-select form-select-sm w-auto border-0">
															<option value="23년" selected>23년</option>
															<option value="22년">22년</option>
															<option value="21년">21년</option>
															<option value="20년">20년</option>
														</select>

														<select class="form-select form-select-sm w-auto border-0">
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
					
														<button class="btn" type="button">그린피</button>
													</div>
													
													<button class="btn btn-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#CollectiveRegistration" aria-controls="CollectiveRegistration">그린피 적용</button>
												</div>

												<div class="tab-content">
													<div class="tab-pane active" id="greenfeeset" role="tabpanel">
														<table class="table table-hover text-center">
															<thead>
																<tr>
																	<th>구분</th>
																	<th>시작시간 ~ 종료시간</th>
																	<th>비회원</th>
																	<th>인터넷 회원</th>
																</tr>
															</thead>

															<tbody>
																<tr>
																	<td>1</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control form-control-em text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="00:00">
																		</div>
																		<span class="dash">~</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control form-control-em text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="00:00">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="비회원 18" selected="">비회원 18 - 180,000</option>
																			<option value="비회원 19">비회원 19 - 190,000</option>
																			<option value="비회원 20">비회원 20 - 200,000</option>																			
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="인터넷 회원 17" selected="">인터넷 회원 17 - 170,000</option>
																			<option value="인터넷 회원 18">인터넷 회원 18 - 180,000</option>
																			<option value="인터넷 회원 19">인터넷 회원 19 - 190,000</option>																			
																		</select>																	
																	</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="00:00">
																		</div>
																		<span class="dash">~</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input type="text" class="form-control text-center input_time" onkeydown="checkNumber()" maxlength="4" placeholder="00:00">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="비회원 18">비회원 18 - 180,000</option>
																			<option value="비회원 19" selected="">비회원 19 - 190,000</option>
																			<option value="비회원 20">비회원 20 - 200,000</option>																			
																		</select>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="인터넷 회원 17">인터넷 회원 17 - 170,000</option>
																			<option value="인터넷 회원 18" selected="">인터넷 회원 18 - 180,000</option>
																			<option value="인터넷 회원 19">인터넷 회원 19 - 190,000</option>																			
																		</select>																	
																	</td>
																</tr>
																<tr>
																	<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
																</tr>
															</tbody>
														</table>
													</div>

													<div class="tab-pane" id="membershipset" role="tabpanel">
														<div class="form-check form-check-inline p-0 m-0">
															<input class="form-control" type="text" placeholder="(예 : 0600, 0610, 0620)" style="width:455px;">
														</div> 
													</div>
												</div>

												<div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="CollectiveRegistration" aria-labelledby="CollectiveRegistrationLabel">
													<div class="offcanvas-header pb-0">
														<h5 id="CollectiveRegistrationLabel">그린피 등록</h5>
														<!--button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button-->
														<div class="d-flex flex-wrap justify-content-end gap-2">
															<button type="button" class="btn btn-outline-custom ms-auto ">등록</button>
															<button type="button" class="btn btn-outline-custom" data-bs-dismiss="offcanvas" aria-label="Close">취소</button>
														</div>
													</div>
													<div class="offcanvas-body">
														<table class="table text-center nowrap">
															<thead>
																<tr>
																	<th><input class="form-check-input" type="checkbox" checked></th>
																	<th>순번</th>
																	<th>날짜</th>
																	<th>시간</th>
																	<th>인원</th>
																	<th>캐디</th>
																	<th>카트</th>
																	<th>코스명</th>
																	<th>비회원 / 인터넷 회원</th>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>
																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="4" selected="">4</option>
																			<option value="3">3</option>
																			<option value="2">2</option>
																			<option value="1">1</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="노캐디" selected="">노캐디</option>
																			<option value="일반">일반</option>
																			<option value="신입">신입</option>
																			<option value="프로">프로</option>
																		</select>	
																	</td>
																	<td>
																		<select class="form-select w-auto border-0 mx-auto">
																			<option value="5인승 전동 카트" selected="">5인승 전동 카트</option>
																			<option value="2인승 전동 카트">2인승 전동 카트</option>
																			<option value="카트 선택 가능">카트 선택 가능</option>
																			<option value="수동 카트">수동 카트</option>
																		</select>	
																	</td>																	<td>메이플</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="190,000" style="width:70px;">
																		</div>
																		<span class="dash">/</span>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="185,000" style="width:70px;">
																		</div>
																	</td>
																	<td>
																		<div class="form-check form-check-inline p-0 m-0">
																			<input class="form-control form-control-sm" type="text" placeholder="아이스 커피 50% 할인">
																		</div>
																	</td>
																	<td>
																		<select class="form-select w-auto mx-auto">
																			<option value="예약가능" selected="">예약가능</option>
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
		                <!--//row - 그린피 설정 -->

						<div class="row">
							<div class="col-12">
								<div class="card mb-0">
									<div class="card-body">
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<h4 class="card-title me-auto">그린피 설정 내역</h4>

											<div class="btn-group">
												<button class="btn btn-sm dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">컬럼 선택 <i class="mdi mdi-chevron-down"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark">
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="table-greenfee-columnAll" value="전체">
																<label class="form-check-label w-100" for="table-greenfee-columnAll">전체</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="table-greenfee-column01" value="생성 구분">
																<label class="form-check-label w-100" for="table-greenfee-column01">생성 구분</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="table-greenfee-column02" value="그린피 생성 일시">
																<label class="form-check-label w-100" for="table-greenfee-column02">그린피 생성 일시</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="table-greenfee-column03" value="생성자">
																<label class="form-check-label w-100" for="table-greenfee-column03">생성자</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="table-greenfee-column04" value="적용 기간">
																<label class="form-check-label w-100" for="table-greenfee-column04">적용 기간</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="table-greenfee-column05" value="적용 여부">
																<label class="form-check-label w-100" for="table-greenfee-column05">적용 여부</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="table-greenfee-column06" value="비고">
																<label class="form-check-label w-100" for="table-greenfee-column06">비고</label>
															</div>
														</div>
													</li>
												</ul>
											</div><!-- /btn-group -->	

											<button type="button" class="btn btn-outline-custom">수정</button>
											<button type="button" class="btn btn-outline-custom">삭제</button>
										</div>

										<div class="row">
											<div class="col-12">
												<table class="table text-center w-100 nowrap table-select">
													<thead>
														<tr class="align-middle">
															<th><input class="form-check-input teetimesSelectAll" type="checkbox"></th>
															<th>생성 구분</th>
															<th>그린피 생성 일시</th>
															<th>생성자</th>
															<th>적용 기간</th>
															<th>적용 여부</th>
															<th>비고</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>30</td>
                                                            <td>그린피 설정</td>
                                                            <td>2023.02.30</td>
                                                            <td>홍길동</td>
                                                            <td>23.05.01 ~ 23.05.30</td>
                                                            <td>O</td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>29</td>
                                                            <td>회원권별 그린피</td>
                                                            <td>2023.01.04</td>
                                                            <td>홍길동</td>
                                                            <td>23.05.01 ~ 23.05.30</td>
                                                            <td>X</td>
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
							</div>
						</div>
		                <!--//row - 그린피 설정 내역 -->

						<div class="modal fade calendarModal" tabindex="-1" aria-labelledby="calendarModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-xl">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="bookingModalLabel">그린피 설정 내역</h5>
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
															<th>시작시간~종료시간</th>
															<th>비회원</th>
															<th>인터넷 회원</th>
															<th>B2B 채널 전체</th>
															<th>C_Golfnow</th>
															<th>B_Agent_1</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>09:00~10:00</td>
                                                            <td>120,000</td>
                                                            <td>90,000</td>
                                                            <td>120,000</td>
                                                            <td>120,000</td>
                                                            <td>120,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>09:00~10:00</td>
                                                            <td>120,000</td>
                                                            <td>90,000</td>
                                                            <td>120,000</td>
                                                            <td>120,000</td>
                                                            <td>120,000</td>
                                                        </tr>
                                                        <tr>
                                                            <td>3</td>
                                                            <td>09:00~10:00</td>
                                                            <td>120,000</td>
                                                            <td>90,000</td>
                                                            <td>120,000</td>
                                                            <td>120,000</td>
                                                            <td>120,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row - 달력 팝업 -->

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

			var table = $('.table-greenfee').DataTable({
				dom: 'tp',
				//scrollCollapse: !0,
				//scrollX: !0,
				autoWidth: true,
				lengthChange: true,
				//processing: true,
				ordering: true,
				info: false,
		        select: {
					style: 'multi'
				},
				aaSorting: [],
				columnDefs: [
					{
						//targets: [1,2,4,5,6,7,8,9], /* column index */
						orderable: false /* true or false */
					}
				],

				buttons: [
					{
						extend: 'excel',
						text: '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="18px" height="18px" style="vertical-align:top;"><path fill="#4CAF50" d="M41,10H25v28h16c0.553,0,1-0.447,1-1V11C42,10.447,41.553,10,41,10z"/><path fill="#FFF" d="M32 15H39V18H32zM32 25H39V28H32zM32 30H39V33H32zM32 20H39V23H32zM25 15H30V18H25zM25 25H30V28H25zM25 30H30V33H25zM25 20H30V23H25z"/><path fill="#2E7D32" d="M27 42L6 38 6 10 27 6z"/><path fill="#FFF" d="M19.129,31l-2.411-4.561c-0.092-0.171-0.186-0.483-0.284-0.938h-0.037c-0.046,0.215-0.154,0.541-0.324,0.979L13.652,31H9.895l4.462-7.001L10.274,17h3.837l2.001,4.196c0.156,0.331,0.296,0.725,0.42,1.179h0.04c0.078-0.271,0.224-0.68,0.439-1.22L19.237,17h3.515l-4.199,6.939l4.316,7.059h-3.74V31z"/></svg>',
						titleAttr: 'Excel',
						className: 'btn-sm btn-light',
						exportOptions: {
							columns: ':visible'
						}
					}
				],
				language: {
					lengthMenu: 'show _MENU_'
				}
			}).buttons().container().insertBefore('.greenfee-head .btn-group-first');

			$('.greenfeeSelectAll').on('click', function(){
				if($(this).is(':checked')){	
					$('.table-teetime tbody tr').addClass('selected');
				} else {
					$('.table-teetime tbody tr').removeClass('selected');
				}
			});


			$('.buttons-excel').removeClass('btn-secondary');
			/*$('#teetimeRowPerPage').on('change', function() {
				var row = $('#teetimeRowPerPage').val() 
				table.page.len( -1 ).draw();
			});*/

			var teetimeTableColumn = $('.dataTableColumn').SumoSelect({
				placeholder: '컬럼 선택',
				selectAll: true,
				//floatWidth: 1440,
				captionFormat: '{0} Selected',
				captionFormatAllSelected: '컬럼 전체',
				locale :  ['OK', 'Cancel', '컬럼전체']
				//showTitle: 'true'
			});

			$('.teetimeModifyBtn').click(function() {
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
			})
		});
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
					}
				});

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
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
