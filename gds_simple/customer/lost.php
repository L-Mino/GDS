<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '분실 습득 관리'; include "../partials/title-meta.php"; ?>
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
												<input type="text" class="form-control form-control-em datepicker p-0" placeholder="시작일">
											</div>
											<span class="dash">~</span>
											<div class="form-check form-check-inline ps-0 me-0">
												<input type="text" class="form-control form-control-em datepicker p-0" placeholder="종료일">
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="참고 부서 선택">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
												</select>
											</div>	
											
											<div class="form-check form-check-inline search-area ps-0 me-0">
												<input class="form-control" type="text" placeholder="Search...">
												<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
											</div>

											<div class="d-flex flex-wrap gap-2 ms-auto">
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".addLostModal">등록</button>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<table class="table table-layout-fixed text-center w-100 nowrap">
													<colgroup>
														<col style="min-width:80px; width:80px;">
														<col style="min-width:100px; width:100px;">
														<col style="min-width:60px; width:60px;">
														<col style="min-width:300px; width:auto;">
														<col style="min-width:180px; width:180px;">
														<col style="min-width:100px; width:100px;">
														<col style="min-width:120px; width:120px;">
														<col style="min-width:100px; width:100px;">
													</colgroup>

													<thead>
														<tr>
															<th>구분</th>
															<th>등록 일자</th>
															<th>유형</th>
															<th>물품명</th>
															<th>장소</th>
															<th>분실자명</th>
															<th>연락처</th>
															<th>상태</th>
														</tr>
													</thead>

													<tbody>
														<tr role="button" data-bs-toggle="modal" data-bs-target=".actionLostModal">
															<td>1</td>
															<td>23.05.25(월)</td>
															<td>습득</td>
															<td class="text-start text-truncate">타이틀 검정거리 측정기, 미즈노 검정벨트</td>
															<td class="text-start">여락 파우더룸 바구니</td>
															<td>홍길동</td>
															<td>01012345678</td>
															<td>수령 확인</td>
														</tr>
														<tr role="button" data-bs-toggle="modal" data-bs-target=".actionLostModal">
															<td>2</td>
															<td>23.05.25(월)</td>
															<td>습득</td>
															<td class="text-start text-truncate">풋조이 주머니 + 아디다스 골프화 265</td>
															<td class="text-start">여락 589앞 바닥</td>
															<td>방길동</td>
															<td>01012345678</td>
															<td></td>
														</tr>
														<tr role="button" data-bs-toggle="modal" data-bs-target=".actionLostModal">
															<td>3</td>
															<td>23.05.25(월)</td>
															<td>분실</td>
															<td class="text-start text-truncate">6번 아이언 커버(분홍색)</td>
															<td class="text-start">3부 라운드중</td>
															<td>박이순</td>
															<td>01012345678</td>
															<td>수령 예정</td>
														</tr>
														<tr role="button" data-bs-toggle="modal" data-bs-target=".actionLostModal">
															<td>4</td>
															<td>23.05.25(월)</td>
															<td>분실</td>
															<td class="text-start text-truncate">타이틀 보키웨지 56도</td>
															<td class="text-start">누리코스 또는 그늘집</td>
															<td>안영미</td>
															<td>01012345678</td>
															<td>전달</td>
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
										</div>

									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

						<div class="modal fade addLostModal" tabindex="-1" aria-labelledby="addLostModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addLostModalLabel">분실/습득 관리</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="d-flex justify-content-between mb-3">
											<ul class="nav nav-tabs-custom" role="tablist">
												<li class="nav-item" role="presentation">
													<a class="nav-link active" data-bs-toggle="tab" href="#tab01" role="tab" aria-selected="true">
														<span>분실</span>
													</a>
												</li>
												<li class="nav-item" role="presentation">
													<a class="nav-link" data-bs-toggle="tab" href="#tab02" role="tab" aria-selected="false">
														<span>습득</span>
													</a>
												</li>												
											</ul>
										</div>
									
										<div class="tab-content">
											<div class="tab-pane active" id="tab01" role="tabpanel">
												<div class="border-box border-bottom-0">
													<table class="table table-layout-fixed text-start mb-0">
														<colgroup>
															<col style="width:90px;">
															<col style="width:auto">
															<col style="width:90px;">
															<col style="width:auto">
														</colgroup>

														<tbody>
															<tr>
																<th>분실일</th>
																<td>
																	<div class="d-flex align-items-center justify-content-between">
																		<div class="form-check form-check-inline ps-0 me-0">
																			<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="23.05.01(월)">
																		</div>
																		<i class="bx bx-calendar font-size-15 ms-1 me-3"></i>
																	</div>
																</td>
																<th>장소</th>
																<td>
																	<input type="text" class="form-control">
																</td>															
															</tr>
															<tr>
																<th>분실자</th>
																<td>
																	<div class="form-check form-check-inline w-100 ps-0 me-0">
																		<input class="form-control pe-4" type="text" value="박이순">
																		<span class="mdi mdi-magnify font-size-17 position-absolute top-50 start-100 translate-middle pe-5"></span>
																	</div>
																</td>
																<th>연락처</th>
																<td>
																	<input type="text" class="form-control">
																</td>
															</tr>														
															<tr>
																<th>물품명</th>
																<td colspan="3">
																	<input type="text" class="form-control">
																</td>														
															</tr>
															<tr>
																<th>비고</th>
																<td colspan="3">
																	<input type="text" class="form-control">
																</td>														
															</tr>														
														</tbody>
													</table>
												</div>
											</div>

											<div class="tab-pane" id="tab02" role="tabpanel">
												<div class="border-box border-bottom-0">
													<table class="table table-layout-fixed text-start mb-0">
														<colgroup>
															<col style="width:90px;">
															<col style="width:auto">
															<col style="width:90px;">
															<col style="width:auto">
														</colgroup>

														<tbody>
															<tr>
																<th>습득일</th>
																<td>
																	<div class="d-flex align-items-center justify-content-between">
																		<div class="form-check form-check-inline ps-0 me-0">
																			<input type="text" class="form-control datepicker text-start border-0 bg-transparent" placeholder="23.05.01(월)">
																		</div>
																		<i class="bx bx-calendar font-size-15 ms-1 me-3"></i>
																	</div>
																</td>
																<th>장소</th>
																<td>
																	<input type="text" class="form-control">
																</td>															
															</tr>
															<tr>
																<th>습득자</th>
																<td>
																	<div class="form-check form-check-inline w-100 ps-0 me-0">
																		<input class="form-control pe-4" type="text" value="박이순">
																		<span class="mdi mdi-magnify font-size-17 position-absolute top-50 start-100 translate-middle pe-5"></span>
																	</div>
																</td>
																<th>연락처</th>
																<td>
																	<input type="text" class="form-control">
																</td>
															</tr>														
															<tr>
																<th>물품명</th>
																<td colspan="3">
																	<input type="text" class="form-control">
																</td>														
															</tr>
															<tr>
																<th>비고</th>
																<td colspan="3">
																	<input type="text" class="form-control">
																</td>														
															</tr>														
														</tbody>
													</table>
												</div>
											</div>
										</div>									
									</div>
									<div class="modal-footer">
										<div class="d-flex justify-content-between align-items-center w-100 m-0">
											<p class="desc">등록일 : 2023/04/10 09:00:18 | 등록자 : 고객지원(경기) / 김미영 팀장</p>
											<div class="d-flex gap-2">
												<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>										
												<button type="button" class="btn btn-custom">등록</button>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - addLostModal -->
						
						<div class="modal fade actionLostModal" tabindex="-1" aria-labelledby="actionLostModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="actionLostModalLabel">분실 조치</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed text-start mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>분실일</th>
														<td>
															<div class="d-flex align-items-center">
																<input type="text" class="form-control datepicker bg-transparent text-start border-0 flex-fill" value="23.05.02(화)"> <i class="bx bx-calendar font-size-15 pe-12 ms-auto"></i>
															</div>
														</td>
														<th>분실자</th>
														<td>
															<div class="form-check form-check-inline w-100 ps-0 mx-0">
																<input class="form-control pe-4" type="text" value="박제춘">
																<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
															</div>
														</td>
													</tr>
													<tr>
														<th>장소</th>
														<td>																
															<input class="form-control" type="text" value="여락 파우더룸 바구니">
														</td>
														<th>연락처</th>
														<td>																
															<input class="form-control" type="text" value="010-1234-5678">
														</td>
													</tr>													
													<tr>
														<th>물품명</th>
														<td colspan="3">														
															<input class="form-control" type="text" value="타이틀 검정거리 측정기, 미즈노 검정벨트">
														</td>
													</tr>
													<tr>
														<th>비고</th>
														<td colspan="3">														
															<input class="form-control" type="text" value="05월 06일 내장 수령 예정">
														</td>
													</tr>													
												</tbody>
											</table>
										</div>
										
										<div class="border-box border-bottom-0 mt-4">
											<table class="table table-layout-fixed text-start mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th>전달일</th>
														<td>
															<div class="d-flex align-items-center">
																<input type="text" class="form-control datepicker bg-transparent text-start border-0 flex-fill" value="23.05.06(화)"> <i class="bx bx-calendar font-size-15 pe-12 ms-auto"></i>
															</div>
														</td>
														<th>상태</th>
														<td>
															<div class="form-check form-check-inline ms-2">
																<input class="form-check-input" type="checkbox" id="check01" value="option1" checked>
																<label class="form-check-label" for="check01">전달</label>
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="check02" value="option2" checked>
																<label class="form-check-label" for="check02">수령 확인</label>
															</div>															
														</td>
													</tr>
													<tr>
														<th>전달자</th>
														<td>																
															<input class="form-control" type="text" value="홍길영">
														</td>
														<th>전달 방법</th>
														<td>																
															<input class="form-control" type="text" value="내장 수령">
														</td>
													</tr>	
													<tr>
														<th>수령자</th>
														<td>																
															<input class="form-control" type="text" value="이도현">
														</td>
														<th>연락처</th>
														<td>																
															<input class="form-control" type="text" value="010-5214-5678">
														</td>
													</tr>														
												</tbody>
											</table>
										</div>

										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed text-start mb-0">
												<colgroup>
													<col style="width:100px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th class="align-top pt-2">수령 주소</th>
														<td>
															<div class="d-flex gap-2">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" id="daum_postcode" class="form-control form-control-bg postcode" placeholder="우편번호">
																</div>
																<div class="flex-fill">
																	<input type="text" id="daum_address" class="form-control form-control-bg addr" placeholder="주소">
																</div>
																<label for="addr" class="btn btn-outline-custom" onclick="daumPostcode()">우편번호 찾기</label>
															</div>
															<div class="d-flex">
																<input type="text" id="daum_detailAddress" class="form-control form-control-bg" type="text" placeholder="상세 주소">
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="modal-footer">
										<div class="d-flex justify-content-between align-items-center w-100 m-0">
											<p class="desc">등록일 : 2023/04/10 09:00:18 | 등록자 : 고객지원(경기) / 김미영 팀장</p>
											<div class="d-flex gap-2">
												<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>										
												<button type="button" class="btn btn-custom">저장</button>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - actionLostModal -->						

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
			menuActive(8); //OneDepth
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
