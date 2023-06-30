<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '그린피 할인 코드'; include "../partials/title-meta.php"; ?>
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
								<div class="card mb-0"">
									<div class="card-body">
										<div class="d-flex">
											<div class="code-con-left">
												<div class="d-flex justify-content-between align-items-center mb-3">
													<span class="code-title">대분류</span>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".addCodeModal">+ 추가</button>
												</div>											
												<div class="tab-code">
													<ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
														<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code01">상품 할인</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code02">회원 그린피 할인</a></li>														
													</ul>
												</div>
											</div>

											<div class="code-con-right mb-0">
												<div class="tab-content" id="v-pills-tabContent">
													<div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">상품 할인</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
															<button type="button" class="btn btn-outline-custom ms-auto">전체 저장</button>															
														</div>													
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:90px; width:auto;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:120px;">
																	<col style="min-width:120px;">
																	<col style="width:80px;">
																	<col style="width:140px;">
																	<col style="width:80px;">
																	<col style="min-width:80px; width:80px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품 할인명</th>
																		<th>사용안함</th>
																		<th>상품분류</th>																																				
																		<th>상품코드</th>																		
																		<th>정상금액</th>																																				
																		<th>할인</th>																																				
																		<th>적용금액</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="분류 선택" selected disabled>분류 선택</option>																				
																				<option value="식사">식사</option>
																				<option value="음료">음료</option>
																				<option value="주류">주류</option>
																				<option value="카트">카트</option>																				
																				<option value="송영">송영</option>
																				<option value="카트">카트</option>
																				<option value="캐디">캐디</option>
																				<option value="그린피">그린피</option>
																			</select>
																		</td>																		
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="상품 선택" selected disabled>상품 선택</option>																																								
																				<option value="조식">조식</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="갈비탕">갈비탕</option>
																				<option value="육계장">육계장</option>
																				<option value="샌드위치">샌드위치</option>
																			</select>
																		</td>
																		<td>8,000</td>																		
																		<td>
																			<div class="form-check form-check-inline p-0 m-1">
																				<select class="form-select form-select-center ps-0">
																					<option value="₩" selected>₩</option>
																					<option value="%">%</option>
																				</select>
																			</div>																			
																			<div class="form-check form-check-inline p-0 m-0">
																				<input class="form-control form-control-em text-center input_w60" type="text">
																			</div>																																						
																		</td>																																				
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>아메리카노 무료 제공</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="분류 선택" selected disabled>분류 선택</option>																				
																				<option value="식사">식사</option>
																				<option value="음료">음료</option>
																				<option value="주류">주류</option>
																				<option value="카트">카트</option>																				
																				<option value="송영">송영</option>
																				<option value="카트">카트</option>
																				<option value="캐디">캐디</option>
																				<option value="그린피">그린피</option>
																			</select>
																		</td>	
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노" selected>아메리카노</option>
																				<option value="카트">카트</option>
																			</select>
																		</td>
																		<td>8,000</td>
																		<td>100%</td>																		
																		<td>0</td>																																				
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>아메리카노 50% 할인</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="분류 선택" selected disabled>분류 선택</option>																				
																				<option value="식사">식사</option>
																				<option value="음료">음료</option>
																				<option value="주류">주류</option>
																				<option value="카트">카트</option>																				
																				<option value="송영">송영</option>
																				<option value="카트">카트</option>
																				<option value="캐디">캐디</option>
																				<option value="그린피">그린피</option>
																			</select>
																		</td>																			
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노" selected>아메리카노</option>
																				<option value="카트">카트</option>
																			</select>
																		</td>																		
																		<td>8,000</td>
																		<td>50%</td>																		
																		<td>4,000</td>																																				
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																	
																	<tr>
																		<td>조식 뷔페 무료 제공</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="분류 선택" selected disabled>분류 선택</option>																				
																				<option value="식사">식사</option>
																				<option value="음료">음료</option>
																				<option value="주류">주류</option>
																				<option value="카트">카트</option>																				
																				<option value="송영">송영</option>
																				<option value="카트">카트</option>
																				<option value="캐디">캐디</option>
																				<option value="그린피">그린피</option>
																			</select>
																		</td>																			
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="조식 뷔페" selected>조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노">아메리카노</option>
																				<option value="카트">카트</option>
																			</select>
																		</td>																		
																		<td>15,000</td>
																		<td>100%</td>																		
																		<td>0</td>																																				
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>카트 무료</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="분류 선택" selected disabled>분류 선택</option>																				
																				<option value="식사">식사</option>
																				<option value="음료">음료</option>
																				<option value="주류">주류</option>
																				<option value="카트">카트</option>																				
																				<option value="송영">송영</option>
																				<option value="카트">카트</option>
																				<option value="캐디">캐디</option>
																				<option value="그린피">그린피</option>
																			</select>
																		</td>																			
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노">아메리카노</option>
																				<option value="카트" selected>카트</option>
																			</select>
																		</td>																		
																		<td>80,000</td>
																		<td>100%</td>																		
																		<td>0</td>																																				
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																			
																	<tr>
																		<td>카트 50% 할인</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="분류 선택" selected disabled>분류 선택</option>																				
																				<option value="식사">식사</option>
																				<option value="음료">음료</option>
																				<option value="주류">주류</option>
																				<option value="카트">카트</option>																				
																				<option value="송영">송영</option>
																				<option value="카트">카트</option>
																				<option value="캐디">캐디</option>
																				<option value="그린피">그린피</option>
																			</select>
																		</td>																			
																		<td>
																			<select class="form-select w-auto mx-auto">
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노">아메리카노</option>
																				<option value="카트" selected>카트</option>
																			</select>
																		</td>																		
																		<td>80,000</td>
																		<td>50%</td>																		
																		<td>40,000</td>																																				
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																	
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code02" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">회원 그린피 할인</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>																	
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:120px;">
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:300px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>할인 코드</th>
																		<th>할인 금액</th>
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0 " type="text" placeholder="VIP73"></td>
																		<td><input class="form-control form-control-em text-center p-0 " type="text" placeholder="110,000"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>프로할인 5</td>
																		<td>50,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>여성할인 1</td>
																		<td>10,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>지역할인 1</td>
																		<td>10,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>우대할인 3</td>
																		<td>30,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>특별할인 5</td>
																		<td>50,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>주니어할인 7</td>
																		<td>70,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>직원할인 8</td>
																		<td>80,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
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
		                <!--//row -  -->

						<div class="modal fade addCodeModal" tabindex="-1" aria-labelledby="addCodeModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addCodeModalLabel">할인 코드 적용 일자 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:80px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th class="text-end">적용일자</th>
														<td><input type="text" class="form-control datepicker w-100"></td>
													</tr>
													<tr>
														<th class="text-end">가져오기</th>
														<td>
															<select class="form-select">
																<option value="사용안함" selected>사용안함</option>
																<option value="23.05.22 (월)">23.05.22 (월)</option>
																<option value="23.05.21 (일)">23.05.21 (일)</option>
																<option value="23.05.20 (토)">23.05.20 (토)</option>
																<option value="23.05.19 (금)">23.05.19 (금)</option>
																<option value="23.05.18 (목)">23.05.18 (목)</option>
															</select>
														</td>
													</tr>														
												</tbody>
											</table>
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-custom">등록</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - addCodeModal -->

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
			menuActive(9); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
