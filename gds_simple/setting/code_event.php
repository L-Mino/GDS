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
										<div class="d-flex align-items-center mb-3">
											<span class="code-title">티타임 이벤트 설정</span>
											<div class="form-check form-check-inline ms-auto me-0">
												<input type="checkbox" class="form-check-input" id="toggleCheck">
												<label class="form-check-label" for="toggleCheck">사용안함 숨기기</label>
											</div>
										</div>

										<div class="table-fixed-head card h-100 mb-0">
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
														<th>상품 할인 선택</th>
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
																<select class="form-select">
																	<option value="분류 선택" selected disabled>상품 할인 선택</option>																																						
																	<option value="선택안함">선택안함</option>																			
																	<option value="아메리카노 무료 제공">아메리카노 무료 제공</option>
																	<option value="아메리카노 50% 할인">아메리카노 50% 할인</option>
																	<option value="조식 뷔페 무료 제공">조식 뷔페 무료 제공</option>
																	<option value="카트 무료">카트 무료</option>
																	<option value="카트 50% 할인">카트 50% 할인</option>
																</select>
															</div>
															<div class="d-flex border-bottom">
																<select class="form-select">
																	<option value="분류 선택" selected disabled>상품 할인 선택</option>																																						
																	<option value="선택안함">선택안함</option>																			
																	<option value="아메리카노 무료 제공">아메리카노 무료 제공</option>
																	<option value="아메리카노 50% 할인">아메리카노 50% 할인</option>
																	<option value="조식 뷔페 무료 제공">조식 뷔페 무료 제공</option>
																	<option value="카트 무료">카트 무료</option>
																	<option value="카트 50% 할인">카트 50% 할인</option>
																</select>
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
