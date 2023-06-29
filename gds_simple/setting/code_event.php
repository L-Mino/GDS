<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '이벤트 코드'; include "../partials/title-meta.php"; ?>
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
												</div>
												<div class="tab-code">
													<ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
														<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code01">상품 할인 설정</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code02">이벤트 상품 설정</a></li>
													</ul>
												</div>
											</div>

											<div class="code-con-right mb-0">
												<div class="tab-content" id="v-pills-tabContent">
													<div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">상품 할인 설정</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:90px; width:auto;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="width:140px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:100px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품 할인명</th>
																		<th>사용안함</th>
																		<th>상품코드 선택</th>																		
																		<th>정상금액</th>																																				
																		<th>세금</th>																																				
																		<th>할인구분</th>																																				
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
																			<!--select class="form-control select2 text-start">
																				<option value="조식 뷔페" selected>조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노">아메리카노</option>
																				<option value="카트">카트</option>
																			</select-->
																			<select class="form-select w-auto mx-auto">
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노" selected>아메리카노</option>
																				<option value="카트">카트</option>
																			</select>
																		</td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																																				
																		<td>
																			<div class="form-check form-check-inline p-0 me-1">
																				<input class="form-control form-control-em text-center input_w60" type="text">
																			</div>																																						
																			<div class="form-check form-check-inline p-0 m-0">
																				<select class="form-select form-select-center ps-0">
																					<option value="₩" selected>₩</option>
																					<option value="%">%</option>
																				</select>
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
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노" selected>아메리카노</option>
																				<option value="카트">카트</option>
																			</select>
																		</td>
																		<td>8,000</td>
																		<td></td>
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
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노" selected>아메리카노</option>
																				<option value="카트">카트</option>
																			</select>
																		</td>																		
																		<td>8,000</td>
																		<td></td>
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
																				<option value="조식 뷔페" selected>조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노">아메리카노</option>
																				<option value="카트">카트</option>
																			</select>
																		</td>																		
																		<td>15,000</td>
																		<td></td>
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
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노">아메리카노</option>
																				<option value="카트" selected>카트</option>
																			</select>
																		</td>																		
																		<td>80,000</td>
																		<td></td>
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
																				<option value="조식 뷔페">조식 뷔페</option>
																				<option value="중식">중식</option>
																				<option value="석식">석식</option>
																				<option value="아메리카노">아메리카노</option>
																				<option value="카트" selected>카트</option>
																			</select>
																		</td>																		
																		<td>80,000</td>
																		<td></td>
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
															<span class="code-title">이벤트 상품 설정</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0" data-simplebar>
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="width:auto;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:100px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>이벤트 상품명</th>
																		<th>사용안함</th>
																		<th>상품 선택</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="이벤트 상품명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td>
																			<div class="d-flex border-bottom">
																				<div class="col-6">
																					<select class="form-select">
																						<option value="분류 선택" selected disabled>분류 선택</option>																																						
																						<option value="선택안함">선택안함</option>																			
																						<option value="아메리카노 무료 제공">아메리카노 무료 제공</option>
																						<option value="아메리카노 50% 할인">아메리카노 50% 할인</option>
																						<option value="조식 뷔페 무료 제공">조식 뷔페 무료 제공조식 뷔페 무료 제공</option>
																						<option value="카트 무료">카트 무료</option>
																						<option value="카트 50% 할인">카트 50% 할인</option>
																					</select>
																				</div>
																				<div class="col-6">
																					<select class="form-select">
																						<option value="분류 선택" selected disabled>분류 선택</option>																																						
																						<option value="선택안함">선택안함</option>																			
																						<option value="아메리카노 무료 제공">아메리카노 무료 제공</option>
																						<option value="아메리카노 50% 할인">아메리카노 50% 할인</option>
																						<option value="조식 뷔페 무료 제공">조식 뷔페 무료 제공</option>
																						<option value="카트 무료">카트 무료</option>
																						<option value="카트 50% 할인">카트 50% 할인</option>
																					</select>
																				</div>
																			</div>
																			<div class="d-flex border-bottom">
																				<div class="col-6">
																					<select class="form-select">
																						<option value="분류 선택" selected disabled>분류 선택</option>																																						
																						<option value="선택안함">선택안함</option>																			
																						<option value="아메리카노 무료 제공">아메리카노 무료 제공</option>
																						<option value="아메리카노 50% 할인">아메리카노 50% 할인</option>
																						<option value="조식 뷔페 무료 제공">조식 뷔페 무료 제공조식 뷔페 무료 제공</option>
																						<option value="카트 무료">카트 무료</option>
																						<option value="카트 50% 할인">카트 50% 할인</option>
																					</select>
																				</div>
																				<div class="col-6">
																					<select class="form-select">
																						<option value="분류 선택" selected disabled>분류 선택</option>																																						
																						<option value="선택안함">선택안함</option>																			
																						<option value="아메리카노 무료 제공">아메리카노 무료 제공</option>
																						<option value="아메리카노 50% 할인">아메리카노 50% 할인</option>
																						<option value="조식 뷔페 무료 제공">조식 뷔페 무료 제공</option>
																						<option value="카트 무료">카트 무료</option>
																						<option value="카트 50% 할인">카트 50% 할인</option>
																					</select>
																				</div>
																			</div>																			
																			<button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 추가</button>
																		</td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>조식 + 카트 무료</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>
																			<p class="py-1 mb-0 border-bottom">조식 뷔페 무료 제공</p>
																			<p class="py-1 mb-0">카트 무료</p>
																		</td>
																		<td>1</td>
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
