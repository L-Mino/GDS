<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '단체팀 관리'; include "../partials/title-meta.php"; ?>
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
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select" id="penaltySelect01">
													<option value="회원 구분" selected>회원 구분</option>
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

											<button type="button" class="btn btn-outline-custom ms-auto" data-bs-toggle="offcanvas" data-bs-target="#memberRegistration" aria-controls="memberRegistration">등록</button>
										</div>

										<div class="row">
											<div class="col">
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
														<col style="width:50px;">
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
															<th>탈퇴</th>
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
															<td>Y<!--input class="form-check-input" type="checkbox"--></td>
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
															<td>N<!--input class="form-check-input" type="checkbox"--></td>
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
								<h5 id="CollectiveRegistrationLabel">단체팀 정보</h5>
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
												<th>단체명</th>
												<td><input class="form-control" type="text" value="92유공"></td>
												<th>단축명</th>
												<td><input class="form-control" type="text"></td>
												<th>단체 구분</th>
												<td>
													<select class="form-select">
														<option value="연단체" selected>연단체</option>
														<option value="임시단체">임시단체</option>
													</select>
												</td>
											</tr>
											<tr>
												<th>단체 연도</th>
												<td>
													<select class="form-select">
														<option value="2023" selected>2023</option>
														<option value="2022">2022</option>
													</select>
												</td>
												<th>성적 산출</th>
												<td>
													<div class="form-check form-check-inline ms-10">
														<input class="form-check-input" type="checkbox" id="calc01" value="option1">
														<label class="form-check-label" for="calc01">신페리오</label>
													</div>
													<div class="form-check form-check-inline">
														<input class="form-check-input" type="checkbox" id="calc02" value="option2">
														<label class="form-check-label" for="calc02">스트로크</label>
													</div>
												</td>
												<th>가입 일자</th>
												<td>
													<div class="d-flex align-items-center justify-content-between">
														<div class="form-check form-check-inline ps-0 me-0">
															<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="23.10.12">
														</div>
														<i class="bx bx-calendar font-size-15 ms-1 me-3"></i>
													</div>
												</td>
											</tr>
											<tr>
												<th>회원 / 팀</th>
												<td>
													<div class="d-flex gap-1">
														<div class="form-check form-check-inline text-center p-0 m-0">
															<input class="form-control" type="text">
														</div>
														<span class="dash">/</span>
														<div class="form-check form-check-inline text-center p-0 m-0">
															<input class="form-control" type="text">
														</div>
													</div>
												</td>
												<th>희망 시기</th>
												<td>
													<div class="form-check form-check-inline p-0 m-0">
														<select class="form-select">
															<option value="1주차" selected>1주차</option>
															<option value="2주차">2주차</option>
															<option value="3주차">3주차</option>
															<option value="4주차">4주차</option>
														</select>
													</div>
													<div class="form-check form-check-inline p-0 m-0">
														<select class="form-select">
															<option value="일요일" selected>일요일</option>
															<option value="월요일">월요일</option>
															<option value="화요일">화요일</option>
															<option value="수요일">수요일</option>
															<option value="목요일">목요일</option>
															<option value="금요일">금요일</option>
															<option value="토요일">토요일</option>
														</select>
													</div>
												</td>
												<th>희망 시간</th>
												<td><input class="form-control" type="text"></td>
											</tr>
											<tr>
												<th>탈퇴</th>
												<td>
													<div class="d-flex align-items-center">
														<input class="form-check-input ms-10" type="checkbox">
														<span class="ms-2">탈퇴 일시 23.10.12 09:00:00</span>
													</div>
												</td>
												<th>단체 번호</th>
												<td><span class="ms-10">123456</span></td>
												<th>비밀번호</th>
												<td><input class="form-control" type="text"></td>
											</tr>
											<tr>
												<th>비고</th>
												<td colspan="5"><input class="form-control" type="text"></td>
											</tr>
										</tbody>
									</table>
								</div>

								<h6 class="text-primary mt-4">담당자 / 총무</h6>
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
											<tr class="table-bg-gray">
												<th>담당자명</th>
												<td><input class="form-control" type="text"></td>
												<th>연락처</th>
												<td><input class="form-control" type="text"></td>
												<th>ID(EMAIL)</th>
												<td><input class="form-control" type="text"></td>
											</tr>
										</tbody>
									</table>
								</div>

								<h6 class="text-primary mt-4">담당자</h6>
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
											<tr class="table-bg-gray">
												<th>담당자명</th>
												<td><input class="form-control" type="text"></td>
												<th>연락처</th>
												<td><input class="form-control" type="text"></td>
												<th>ID(EMAIL)</th>
												<td><input class="form-control" type="text"></td>
											</tr>
										</tbody>
									</table>
								</div>

								<p class="desc mt-3">최초 수정 : 2023/04/10 09:00:18(165144:112,172,198,252) | 최종 수정 : 2023/04/11 09:00:18(165144:112,172,198,252)</p>
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
