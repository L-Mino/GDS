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
										<div class="d-flex align-items-center mb-3">
											<span class="code-title">상품 할인 설정</span>
											<div class="form-check form-check-inline ms-auto me-0">
												<input type="checkbox" class="form-check-input" id="toggleCheck">
												<label class="form-check-label" for="toggleCheck">사용안함 숨기기</label>
											</div>
											<button type="button" class="btn btn-outline-custom ms-3">전체 저장</button>															
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
								</div>
							</div>
						</div>
		                <!--//row -  -->

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
