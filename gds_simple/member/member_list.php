<?php include "../partials/main.php"; ?>

	<head>
		<?php $title = '회원 관리'; include "../partials/title-meta.php"; ?>
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
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<!--div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select" id="penaltySelect01">
													<option value="회원 구분" selected>회원 구분</option>
													<option value="임직원">임직원</option>
													<option value="법인 회원">법인 회원</option>
													<option value="인터넷 회원">인터넷 회원</option>
													<option value="비회원">비회원</option>
												</select>
											</div-->

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" data-width="fit" title="회원 구분">
													<option value="임직원">임직원</option>
													<option value="법인 회원">법인 회원</option>
													<option value="인터넷 회원">인터넷 회원</option>
													<option value="비회원">비회원</option>
												</select>
											</div>
											<div class="form-check form-check-inline search-area ps-0 me-0">
												<input class="form-control" type="text" placeholder="Search...">
												<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
											</div>
											<button type="button" class="btn btn-outline-custom ms-auto" data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration" onclick="memberModal()">등록</button>
										</div>

										<div class="row">
											<div class="col">
												<table class="table table-layout-fixed text-center w-100 nowrap">
													<colgroup>
														<col style="width:80px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>구분</th>
															<th>성명</th>
															<th>연락처</th>
															<th>성별</th>
															<th>회원 번호</th>
															<th>회원 구분</th>
															<th>ID(EMAIL)</th>
														</tr>
													</thead>

													<tbody>
														<tr role="button" data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration" onclick="memberModal()">
															<td>1</td>
															<td>홍길동</td>
															<td>010-1234-5678</td>
															<td>남</td>
															<td>90-123456</td>
															<td>임직원</td>
															<td>hong123@naver.com</td>
														</tr>
														<tr role="button" data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration" onclick="memberModal()">
															<td>2</td>
															<td>이나현</td>
															<td>010-1234-5678</td>
															<td>여</td>
															<td>90-123457</td>
															<td>인터넷회원</td>
															<td>nh123@gmail.com</td>
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

														<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
															<option value="10" selected>10</option>
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
		                <!--//row -->

						<div class="offcanvas offcanvas-end offcanvas-custom" tabindex="-1" id="memberRegistration" aria-labelledby="memberRegistration">
							<div class="offcanvas-header pb-0">
								<h5 id="CollectiveRegistrationLabel">회원 정보</h5>
								<div class="d-flex flex-wrap justify-content-end gap-2 ms-auto">
									<button type="button" class="btn btn-outline-custom">비밀번호 변경</button>
									<button type="button" class="btn btn-outline-custom">저장</button>
									<button type="button" class="btn btn-outline-custom" data-bs-dismiss="offcanvas" aria-label="Close">취소</button>
								</div>
							</div>

							<div class="offcanvas-body">
								<div class="border-box border-bottom-0">
									<table class="table table-layout-fixed mb-0">
										<colgroup>
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
										</colgroup>

										<tbody>
											<tr>
												<th>성명<span class="text-primary">*</span></th>
												<td><input class="form-control" type="text" placeholder="국문"></td>
												<td colspan="4" class="ps-0">
													<div class="form-check form-check-inline col-8 p-0 me-2">
														<input class="form-control" type="text" placeholder="영문">
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="남" checked="">
														<label class="form-check-label" for="inlineRadio1">남</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="여">
														<label class="form-check-label" for="inlineRadio2">여</label>
													</div>
												</td>
											</tr>
											<tr>
												<th>국적</th>
												<td>
													<select class="form-select">
														<option value="여권 기준" selected>여권 기준</option>
														<option value="한국">한국</option>
														<option value="미국">미국</option>
													</select>
												</td>
												<th>핸드폰<span class="text-primary">*</span></th>
												<td>
													<div class="d-flex">
														<div class="form-check form-check-inline p-0 m-0">
															<select class="form-select w-auto">
																<option value="+82" selected>+82</option>
																<option value="+82">+82</option>
																<option value="+82">+82</option>
															</select>
														</div>
														<input class="form-control flex-fill" type="text">
													</div>
												</td>
												<th>ID(EMAIL)</th>
												<td><input class="form-control" type="text"></td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="border-box border-bottom-0 mt-4">
									<table class="table table-layout-fixed mb-0">
										<colgroup>
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
										</colgroup>

										<tbody>
											<tr class="table-bg-gray">
												<th>회원 구분</th>
												<td>
													<select class="form-select">
														<option value="임직원" selected>임직원</option>
														<option value="법인 회원">법인 회원</option>
														<option value="인터넷 회원">인터넷 회원</option>
														<option value="비회원" >비회원</option>
													</select>
												</td>
												<th>회원 등급</th>
												<td>
													<select class="form-select">
														<option value="회원 등급" selected>회원 등급</option>
														<option value="회원 등급" >회원 등급</option>
													</select>
												</td>
												<th>회원 번호</th>
												<td><input class="form-control" type="text"></td>
											</tr>
											<tr>
												<th>할인 코드</th>
												<td>
													<div class="row w-100">
														<div class="col-9">
															<select class="form-select">
																<option value="지역1" selected>지역1</option>
																<option value="프로5">프로5</option>
																<option value="주니어7">주니어7</option>
																<option value="직원8">직원8</option>
															</select>
														</div>
														<div class="col-3 p-0 text-end">
															<span class="d-inline-block align-text-top pt-1">10,000</span>
														</div>
													</div>
												</td>
												<th>생년월일</th>
												<td>
													<div class="d-flex align-items-center justify-content-between">
														<div class="form-check form-check-inline ps-0 me-0">
															<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="1992.10.12">
														</div>
														<i class="bx bx-calendar font-size-15 ms-1 me-3"></i>
													</div>
												</td>
												<th>지역</th>
												<td>
													<select class="form-select">
														<option value="서울" selected>서울</option>
														<option value="부산">부산</option>
													</select>
												</td>
											</tr>
											<tr>
												<th class="align-top pt-2">주소</th>
												<td colspan="5">
													<div class="d-flex gap-2">
														<div class="form-check form-check-inline p-0 m-0">
															<input type="text" id="daum_postcode" class="form-control postcode" placeholder="우편번호">
														</div>
														<div class="col-5">
															<input type="text" id="daum_address" class="form-control addr" placeholder="주소">
														</div>
														<label for="addr" class="btn btn-outline-custom" onclick="daumPostcode()">우편번호 찾기</label>
													</div>
													<div class="col-8">
														<input type="text" id="daum_detailAddress" class="form-control" placeholder="상세 주소">
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="border-box border-bottom-0 mt-4">
									<table class="table table-layout-fixed mb-0">
										<colgroup>
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
											<col style="width:100px;">
											<col style="width:auto">
										</colgroup>

										<tbody>
											<tr class="table-bg-gray">
												<th>약관 동의</th>
												<td>필수 / 약관 /  광고</td>
												<th>약관 동의일</th>
												<td>2023.05.01</td>
												<th>약관 동의 IP</th>
												<td>123.421.12.12</td>
											</tr>
											<tr>
												<th>가입일</th>
												<td>2023.05.01</td>
												<th>수신 동의</th>
												<td colspan="3">
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1" checked>
														<label class="form-check-label" for="inlineCheckbox1">알림</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2" checked>
														<label class="form-check-label" for="inlineCheckbox2">문자</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" checked>
														<label class="form-check-label" for="inlineCheckbox3">EMAIL</label>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>

								<div class="border-bottom pb-3 mb-5"></div>

								<ul class="nav nav-tabs-custom memberModalTab mb-4" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#memberRegist01" role="tab">
											<span>부가정보</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist02" role="tab">
											<span>소속 단체</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist03" role="tab">
											<span>예약내역</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist04" role="tab">
											<span>예약 대기</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist05" role="tab">
											<span>내장 내역</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist06" role="tab">
											<span>위약 내역</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist07" role="tab">
											<span>VOC</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist08" role="tab">
											<span>회원 성향</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist09" role="tab">
											<span>스코어</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist10" role="tab">
											<span>서류 / 증빙</span>
										</a>
									</li>										
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#memberRegist11" role="tab">
											<span>기타</span>
										</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="memberRegist01" role="tabpanel">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
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
										</div>

										<p class="desc mt-3">* 위 사항은 내장등록 시 회원정보에 표시됩니다.</p>

										<div class="border-box border-bottom-0 mt-4">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>예약 여부</th>
														<td>
															<div class="form-check form-check-inline ms-10">
																<input class="form-check-input" type="radio" name="radio01" id="radio01_01" value="유" checked>
																<label class="form-check-label" for="radio01_01">유</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="radio01" id="radio01_02" value="무">
																<label class="form-check-label" for="radio01_02">무</label>
															</div>
														</td>
														<th>주중 예약수</th>
														<td><input class="form-control" type="text" value="0"></td>
														<th>주말 예약수</th>
														<td><input class="form-control" type="text" value="0"></td>
													</tr>
													<tr>
														<th>핸디캡</th>
														<td><input class="form-control" type="text"></td>
														<th>핸디캡 갱신일</th>
														<td>
															<div class="d-flex align-items-center justify-content-between">
																<div class="form-check form-check-inline ps-0 me-0">
																	<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="1992.10.12">
																</div>
																<i class="bx bx-calendar font-size-15 ms-1 me-3"></i>
															</div>
														</td>
														<th>백보관</th>
														<td>
															<div class="form-check form-check-inline ms-10">
																<input class="form-check-input" type="radio" name="radio02" id="radio02_01" value="보관" checked>
																<label class="form-check-label" for="radio02_01">보관</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="radio02" id="radio02_02" value="미보관">
																<label class="form-check-label" for="radio02_02">미보관</label>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
										
										<div class="border-box border-bottom-0 mt-4">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>회원권</th>
														<td>
															<select class="form-select">
																<option value="회원권 선택" selected>회원 등급</option>
																<option value="회원권1" >회원권1</option>
																<option value="회원권2" >회원권2</option>
															</select>
														</td>
														<th>주중 요금</th>
														<td>
															<select class="form-select">
																<option value="120" selected>120</option>
																<option value="130" >130</option>
																<option value="140" >140</option>
															</select>
														</td>
														<th>주말 요금</th>
														<td>
															<select class="form-select">
																<option value="120" selected>120</option>
																<option value="130" >130</option>
																<option value="140" >140</option>
															</select>
														</td>
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
									</div>

									<div class="tab-pane" id="memberRegist02" role="tabpanel">
										<table class="table table-layout-fixed text-center w-100 nowrap">
											<colgroup>
												<col style="width:60px;">
												<col style="width:70px;">
												<col style="width:80px;">
												<col style="width:auto;">
												<col style="width:120px;">
												<col style="width:120px;">
												<col style="width:120px;">
												<col style="width:100px;">
												<col style="width:150px;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>단체 연도</th>
													<th>단체 구분</th>
													<th>단체명</th>
													<th>단축명</th>
													<th>회원 / 팀</th>
													<th>희망 시기</th>
													<th>총무</th>
													<th>총무 연락처</th>
												</tr>
											</thead>

											<tbody>
												<tr role="button" data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration">
													<td>1</td>
													<td>2017</td>
													<td>연단체</td>
													<td>UN모터스</td>
													<td>UNM</td>
													<td>36 / 9</td>
													<td>1주차 일요일</td>
													<td>홍길동</td>
													<td>010-1234-5678</td>
												</tr>
												<tr role="button" data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration">
													<td>2</td>
													<td>2017</td>
													<td>임시단체</td>
													<td>경희MBA골프동호회</td>
													<td>경희M</td>
													<td>36 / 9</td>
													<td>1주차 일요일</td>
													<td>임나연</td>
													<td>010-1234-5678</td>
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
												<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
													<option value="10" selected>10</option>
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

									<div class="tab-pane" id="memberRegist03" role="tabpanel">
										<div class="table-fixed-head" data-simplebar>
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
														<th>구분</th>
														<th>예약 일자</th>
														<th>코스</th>
														<th>시간</th>
														<th>예약자명</th>
														<th>그린피</th>
														<th>인원</th>
														<th>캐디</th>
														<th>카트</th>
														<th>이벤트</th>
														<th>채널</th>
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
														<td>9</td>
														<td>23.06.05 (월)</td>
														<td>A</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>노 캐디</td>
														<td>5인승 전동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>B_골팡</td>
														<td>선불/입금대기</td>
														<td>GX/2일</td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td>비고테스트비고테스트</td>
													</tr>
													<tr>
														<td>8</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>800,000</td>
														<td>4</td>
														<td>신입</td>
														<td>2인승 전동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>B_골팡</td>
														<td>200,000</td>
														<td>GX/2일</td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td>비고테스트비고테스트</td>
													</tr>
													<tr>
														<td>7</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>6</td>
														<td>23.06.05 (월)</td>
														<td>A</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>프로</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>B_골팡</td>
														<td>선불/입금대기</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>5</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>800,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>B_골팡</td>
														<td>200,000</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>4</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>3</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>2</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
														<td>C_카카오</td>
														<td>후불</td>
														<td></td>
														<td>04-15 16:35:03</td>
														<td>abcdefg1234@gmail.com</td>
														<td>215.123.125.198</td>
														<td></td>
													</tr>
													<tr>
														<td>1</td>
														<td>23.06.05 (월)</td>
														<td>B</td>
														<td>07:14</td>
														<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">홍길동</span></td>
														<td>200,000</td>
														<td>4</td>
														<td>일반</td>
														<td>수동 카트</td>
														<td>아이스커피 50% 할인</td>
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

												<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
													<option value="10" selected>10</option>
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

									<div class="tab-pane" id="memberRegist04" role="tabpanel">
										<table class="table table-hover text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:60px;">
												<col style="min-width:100px;">
												<col style="min-width:60px;">
												<col style="min-width:90px;">
												<col style="min-width:90px;">
												<col style="min-width:60px;">
												<col style="min-width:90px;">
												<col style="min-width:300px; width:300px;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>희망 일자</th>
													<th>희망 코스</th>
													<th>희망 시간1</th>
													<th>희망 시간2</th>
													<th>적용 코스</th>
													<th>적용 시간</th>
													<th>비고</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>1</td>
													<td>23.06.05 (월)</td>
													<td>BI</td>
													<td>08:00</td>
													<td>09:00</td>
													<td>BI</td>
													<td>09:00</td>
													<td>비고테스트비고테스트</td>
												</tr>
												<tr>
													<td>2</td>
													<td>23.06.05 (월)</td>
													<td>BI</td>
													<td>08:00</td>
													<td>09:00</td>
													<td>BI</td>
													<td>09:00</td>
													<td>비고테스트비고테스트</td>
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

												<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
													<option value="10" selected>10</option>
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

									<div class="tab-pane" id="memberRegist05" role="tabpanel">
										<table class="table table-hover text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:60px;">
												<col style="min-width:100px;">
												<col style="min-width:60px;">
												<col style="min-width:90px;">
												<col style="min-width:90px;">
												<col style="min-width:90px;">
												<col style="min-width:90px;">
												<col style="min-width:90px">
												<col style="min-width:90px">
												<col style="min-width:90px">
												<col style="min-width:90px">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>내장 일자</th>
													<th>코스</th>
													<th>시간</th>
													<th>그린피</th>
													<th>대여료</th>
													<th>카트</th>
													<th>프로샵</th>
													<th>대식당</th>
													<th>그늘집</th>
													<th>기타</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>2</td>
													<td>23.06.05 (월)</td>
													<td>BI</td>
													<td>08:00</td>
													<td>510,000</td>
													<td>20,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
												</tr>
												<tr>
													<td>1</td>
													<td>23.06.05 (월)</td>
													<td>BI</td>
													<td>08:00</td>
													<td>510,000</td>
													<td>20,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
													<td>100,000</td>
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

												<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
													<option value="10" selected>10</option>
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
									
									<div class="tab-pane" id="memberRegist06" role="tabpanel">
										<table class="table text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:70px;">
												<col style="min-width:100px;">
												<col style="min-width:40px;">
												<col style="min-width:60px;">
												<col style="min-width:90px;">
												<col style="min-width:80px;">
												<col style="min-width:80px;">
												<col style="min-width:80px;">
												<col style="min-width:80px;">
												<col style="min-width:80px;">
												<col style="min-width:auto;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>예약 일자</th>
													<th>코스</th>
													<th>티타임</th>
													<th>예약자</th>
													<th>위약 구분</th>
													<th>위약 사유</th>
													<th>위약 코드</th>
													<th>위약 조치</th>
													<th>내장 금지</th>
													<th>비고</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>2</td>
													<td>23.06.15 (금)</td>
													<td>BI</td>
													<td>11:33</td>
													<td>홍길동</td>
													<td>노쇼</td>
													<td>개인사정</td>
													<td>abdfd</td>
													<td>위약금 10만원</td>
													<td>23.06.20 (화)</td>
													<td>음주 만취 인사불성</td>
												</tr>
												<tr>
													<td>1</td>
													<td>23.06.15 (금)</td>
													<td>BI</td>
													<td>11:33</td>
													<td>홍길동</td>
													<td>노쇼</td>
													<td>개인사정</td>
													<td>abdfd</td>
													<td>위약금 10만원</td>
													<td>23.06.20 (화)</td>
													<td>음주 만취 인사불성</td>
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

												<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
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

									<div class="tab-pane" id="memberRegist07" role="tabpanel">
										<table class="table table-layout-fixed text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:80px; width:80px;">
												<col style="min-width:100px; width:100px;">
												<col style="min-width:60px; width:60px;">
												<col style="min-width:120px; width:120px;">
												<col style="min-width:120px; width:120px;">
												<col style="min-width:80px; width:80px;">
												<col style="min-width:300px; width:auto;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>경기 일자</th>
													<th>시간</th>
													<th>유형</th>
													<th>참고 부서</th>
													<th>조치</th>
													<th>회원 말씀</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>4</td>
													<td>23.05.25(월)</td>
													<td>07:00</td>
													<td>불만/캐디</td>
													<td>고객지원(프론트)</td>
													<td>조치완료</td>
													<td class="text-start text-truncate">홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고홍길순 캐디 진행 미숙, 태도 나쁨, 스마트스코어 고객 번호 물어보지도 않고 </td>
												</tr>
												<tr>
													<td>3</td>
													<td>23.05.25(월)</td>
													<td>07:00</td>
													<td>칭찬/식음</td>
													<td>지원팀(식음파트)</td>
													<td><span class="text-primary">미조치</span></td>
													<td class="text-start text-truncate">그늘집 만두가 유명하다고 해서 먹어봤는데 너무 맛있어요!!</td>
												</tr>
												<tr>
													<td>2</td>
													<td>23.05.25(월)</td>
													<td>07:00</td>
													<td>건의/코스관리</td>
													<td>고객지원(경기)</td>
													<td>조치완료</td>
													<td class="text-start text-truncate">오늘 이 골프장에 처음 온 골린이지만, 하늘 코스 전체적으로 티박스 잔디가...</td>
												</tr>
												<tr>
													<td>1</td>
													<td>23.05.25(월)</td>
													<td>07:00</td>
													<td>건의/식음</td>
													<td>지원팀(식음파트)</td>
													<td><span class="text-primary">미조치</span></td>
													<td class="text-start text-truncate">메뉴에 마라탕이 추가 됐으면 좋겠어요.</td>
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

												<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
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

									<div class="tab-pane" id="memberRegist08" role="tabpanel">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>진행</th>
														<td>
															<div class="form-check form-check-inline ms-10">
																<input class="form-check-input" type="radio" name="radio03" id="radio03_01" value="느림" checked>
																<label class="form-check-label" for="radio03_01">느림</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="radio03" id="radio03_02" value="보통">
																<label class="form-check-label" for="radio03_02">보통</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="radio" name="radio03" id="radio03_03" value="보통">
																<label class="form-check-label" for="radio03_03">빠름</label>
															</div>
														</td>
														<th>느린 이유</th>
														<td colspan="3"><input class="form-control" type="text" value="인터발이 너무 길어요. 진행포기 앞에 팀이 없어도 안감"></td>
													</tr>
													<tr>
														<th>특이사항1</th>
														<td><input class="form-control" type="text" value="인드라이버 커버 씌워두십니다."></td>
														<th>특이사항2</th>
														<td><input class="form-control" type="text" value="연습스윙 여러번 하심."></td>
														<th>특이사항3</th>
														<td><input class="form-control" type="text" value="자주하시는 말: 왜? 급해? 천천히 쳐"></td>
													</tr>
													<tr>
														<th>캐디 칭찬</th>
														<td><input class="form-control" type="text"></td>
														<th>드라이버</th>
														<td><input class="form-control" type="text" value="170m"></td>
														<th>어프로치</th>
														<td><input class="form-control" type="text" value="58, S"></td>
													</tr>
													<tr>
														<th>5번 아이언</th>
														<td><input class="form-control" type="text" value="140M"></td>
														<th>7번 아이언</th>
														<td><input class="form-control" type="text" value="120M"></td>
														<th>퍼터</th>
														<td><input class="form-control" type="text" value="커버 씌워두십니다."></td>
													</tr>
													<tr>
														<th>건의사항</th>
														<td colspan="5"><input class="form-control" type="text"></td>
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
									</div>
							
									<div class="tab-pane" id="memberRegist09" role="tabpanel">
										<table class="table table-layout-fixed text-center w-100 nowrap">
											<colgroup>
												<col style="min-width:80px; width:80px;">
												<col style="min-width:100px; width:100px;">
												<col style="min-width:60px; width:60px;">
												<col style="min-width:100px; width:100px;">
												<col style="min-width:100px; width:100px;">
												<col style="width:auto;">
											</colgroup>

											<thead>
												<tr>
													<th>구분</th>
													<th>내장 일자</th>
													<th>시간</th>
													<th>전반 코스</th>
													<th>후반 코스</th>
													<th>스코어</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>2</td>
													<td>23.05.25(월)</td>
													<td>07:00</td>
													<td>베어IN</td>
													<td>베어OUT</td>
													<td></td>
												</tr>
												<tr>
													<td>1</td>
													<td>23.05.25(월)</td>
													<td>07:00</td>
													<td>베어IN</td>
													<td>베어OUT</td>
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

												<select class="form-select perpage-select w-auto py-0 pe-3 border-0">
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
									
									<div class="tab-pane" id="memberRegist10" role="tabpanel">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>용도</th>
														<td><input class="form-control" type="text"></td>
													</tr>														
													<tr>													
														<th>증빙</th>
														<td>
															<!--div class="col">
																<label for="file01" class="btn btn-outline-custom mb-0">파일 첨부</label>
															</div>
															<div class="filebox flex-fill">
																<input class="form-control upload-name" readonly>
																<input type="file" id="file01">
															</div-->
															<!-- <input id="multiplefileupload" type="file" accept=".jpg,.gif,.png" multiple> -->
															<input id="multiplefileupload" type="file" multiple>
															<input id="input-2" name="input2[]" type="file" class="file"  data-show-upload="false" data-show-caption="true" multiple>
														</td>															
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
									</div>

									<div class="tab-pane" id="memberRegist11" role="tabpanel">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>차량 번호</th>
														<td><input class="form-control" type="text"></td>
														<th>차량 구분</th>
														<td><input class="form-control" type="text"></td>
													</tr>
												</tbody>
											</table>
										</div>

										<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
									</div>
								</div>
							</div>
						</div>
		                <!--//offcanvas -->

						<!-- end Content -->

                    </div><!-- container-fluid -->
                </div><!-- End Page-content -->

				<!--?php include "../partials/footer.php"; ?-->

            </div><!-- end main content-->
        </div><!-- END layout-wrapper -->

		<?php include "../partials/right-sidebar.php"; ?>
		<?php include "../partials/vendor-scripts.php"; ?>

		<script src="http://t1.daumcdn.net/mapjsapi/bundle/postcode/prod/postcode.v2.js"></script>
		<script>
		$(function(){
			"use strict";
			menuActive(5); //OneDepth
		});

		function memberModal(){
			$('.memberModalTab li:first-child a').tab('show');
		}

		function daumPostcode() {
			new daum.Postcode({
				oncomplete: function(data) {
					// 팝업에서 검색결과 항목을 클릭했을때 실행할 코드를 작성하는 부분.

					// 각 주소의 노출 규칙에 따라 주소를 조합한다.
					// 내려오는 변수가 값이 없는 경우엔 공백('')값을 가지므로, 이를 참고하여 분기 한다.
					var addr = ''; // 주소 변수
					var extraAddr = ''; // 참고항목 변수

					//사용자가 선택한 주소 타입에 따라 해당 주소 값을 가져온다.
					if (data.userSelectedType === 'R') { // 사용자가 도로명 주소를 선택했을 경우
						addr = data.roadAddress;
					} else { // 사용자가 지번 주소를 선택했을 경우(J)
						addr = data.jibunAddress;
					}

					// 사용자가 선택한 주소가 도로명 타입일때 참고항목을 조합한다.
					if(data.userSelectedType === 'R'){
						// 법정동명이 있을 경우 추가한다. (법정리는 제외)
						// 법정동의 경우 마지막 문자가 "동/로/가"로 끝난다.
						if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
							extraAddr += data.bname;
						}
						// 건물명이 있고, 공동주택일 경우 추가한다.
						if(data.buildingName !== '' && data.apartment === 'Y'){
							extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
						}
						// 표시할 참고항목이 있을 경우, 괄호까지 추가한 최종 문자열을 만든다.
						if(extraAddr !== ''){
							extraAddr = ' (' + extraAddr + ')';
						}
						// 조합된 참고항목을 해당 필드에 넣는다.
						//document.getElementById("daum_extraAddress").value = extraAddr;

					} else {
						//document.getElementById("daum_extraAddress").value = '';
					}

					// 우편번호와 주소 정보를 해당 필드에 넣는다.
					document.getElementById('daum_postcode').value = data.zonecode;
					document.getElementById('daum_address').value = addr;
					// 커서를 상세주소 필드로 이동한다.
					document.getElementById('daum_detailAddress').focus();
				}
			}).open();
		}
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>