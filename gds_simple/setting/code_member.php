<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '그린피별 가격 설정'; include "../partials/title-meta.php"; ?>
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
											<span class="code-title">회원 지정 할인</span>
											<!--span class="mx-2">-</span-->
											<!--span>설명</span-->
											<div class="form-check form-check-inline ms-auto me-0">
												<input type="checkbox" class="form-check-input" id="toggleCheck">
												<label class="form-check-label" for="toggleCheck">사용안함 숨기기</label>
											</div>																		
											<button type="button" class="btn btn-outline-custom ms-3">전체 저장</button>															
										</div>

										<div class="table-fixed-head card h-100 mb-0">
											<table class="table text-center w-100 mb-0 nowrap">
												<colgroup>
													<col style="min-width:120px;">
													<col style="min-width:100px; width:100px;">													
													<col style="min-width:120px;">
													<col style="min-width:70px;">
													<col style="min-width:60px; width:60px;">
													<col style="min-width:300px;">
													<col style="min-width:70px; width:70px;">
												</colgroup>

												<thead>
													<tr>
														<th>할인 코드</th>
														<th>단축 코드</th>														
														<th>할인 금액</th>
														<th>사용안함</th>
														<th>정렬</th>
														<th>비고</th>
														<th>저장</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td><input class="form-control form-control-em text-center p-0 " type="text" placeholder="VIP73"></td>
														<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="단축 코드"></td>
														<td><input class="form-control form-control-em text-center p-0 " type="text" placeholder="110,000"></td>
														<td><input class="form-check-input" type="checkbox" disabled></td>
														<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
														<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
														<td><button type="button" class="btn btn-outline-custom">저장</button></td>
													</tr>
													<tr>
														<td>프로할인 5</td>
														<td>P5</td>
														<td>50,000</td>
														<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
														<td>1</td>
														<td>비고</td>
														<td><button type="button" class="btn btn-outline-custom">저장</button></td>
													</tr>
													<tr>
														<td>여성할인 1</td>
														<td>G1</td>
														<td>10,000</td>
														<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
														<td>2</td>
														<td>비고</td>
														<td><button type="button" class="btn btn-outline-custom">저장</button></td>
													</tr>
													<tr>
														<td>지역할인 1</td>
														<td>A1</td>
														<td>10,000</td>
														<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
														<td>3</td>
														<td>비고</td>
														<td><button type="button" class="btn btn-outline-custom">저장</button></td>
													</tr>
													<tr>
														<td>우대할인 3</td>
														<td>V3</td>
														<td>30,000</td>
														<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
														<td>4</td>
														<td>비고</td>
														<td><button type="button" class="btn btn-outline-custom">저장</button></td>
													</tr>
													<tr>
														<td>특별할인 5</td>
														<td>S5</td>
														<td>50,000</td>
														<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
														<td>4</td>
														<td>비고</td>
														<td><button type="button" class="btn btn-outline-custom">저장</button></td>
													</tr>
													<tr>
														<td>주니어할인 7</td>
														<td>J7</td>
														<td>70,000</td>
														<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
														<td>4</td>
														<td>비고</td>
														<td><button type="button" class="btn btn-outline-custom">저장</button></td>
													</tr>
													<tr>
														<td>직원할인 8</td>
														<td>M8</td>
														<td>80,000</td>
														<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
														<td>4</td>
														<td>비고</td>
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

						<div class="modal fade addCodeModal" tabindex="-1" aria-labelledby="addCodeModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-sm">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addCodeModalLabel">그린피 적용 일자 등록</h5>
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
														<th class="text-end">적용 일자</th>
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
