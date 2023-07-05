<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '내장관리'; include "../../partials/title-meta.php"; ?>
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
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="d-flex align-items-center flex-wrap gap-2">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-lg border-0 h-100">
													<option value="2023.05.01 (일)" selected>2023.05.01 (월)</option>
													<option value="2023.05.02 (화)">2023.05.02 (화)</option>
												</select>
											</div>

											<div class="dropdown d-inline-block align-top">
												<button class="btn btn-sm align-top dropdown-line-height p-0 dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="true">티타임 선택 <i class="mdi mdi-chevron-down fa-lg ico_lg lh-1 ms-2"></i></button>
												<ul class="dropdown-menu dropdown-menu-dark select_course" data-popper-placement="bottom-start">
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_teetime01" value="전체">
																<label class="form-check-label w-100" for="select_teetime01">전체</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_teetime02" value="1부">
																<label class="form-check-label w-100" for="select_teetime02">1부</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_teetime03" value="2부">
																<label class="form-check-label w-100" for="select_teetime03">2부</label>
															</div>
														</div>
													</li>
													<li>
														<div class="dropdown-item">
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="select_teetime04" value="3부">
																<label class="form-check-label w-100" for="select_teetime04">3부</label>
															</div>
														</div>
													</li>
												</ul>
											</div>

											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-sm h-100">
													<option value="확정 여부" selected>확정 여부</option>
													<option value="확정 여부">확정 여부</option>
													<option value="확정 여부">확정 여부</option>
												</select>
											</div>

											<div class="form-check form-check-inline col-1 ps-0 me-0">
												<input class="form-control form-control-sm pe-4" type="text" placeholder="Search...">
												<span class="mdi mdi-magnify position-absolute top-50 start-100 translate-middle pe-4"></span>
											</div>

											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="Unreserved" checked="">
												<label class="form-check-label" for="Unreserved">미예약</label>
											</div>

											<div class="d-flex flex-wrap gap-2 ms-auto">
												<button type="button" class="btn btn-sm btn-custom">예약 문자</button>
												<button type="button" class="btn btn-sm btn-custom">SMS</button>
												<button type="button" class="btn btn-sm btn-custom">팀추가</button>
												<button type="button" class="btn btn-sm btn-custom">예약 대기</button>
											</div>
										</div>

										<div class="border-bottom pb-4 mb-4"></div>

										<table class="table table-responsive text-center w-100 nowrap">
											<thead>
												<tr class="align-middle">
													<th>V</th>
													<th>성명</th>
													<th>성별</th>
													<th>락카</th>
													<th><i class="bx bx-printer fs-6"></i></th>
													<th>그린피</th>
													<th>홀</th>
													<th>추가</th>
													<th>카트</th>
													<th>카트료</th>
													<th>대여료</th>
													<th>총금액</th>
												</tr>
											</thead>

											<tbody>
												<tr onclick="$(this).toggleClass('table-active');">
													<td><input class="form-check-input" type="checkbox"></td>
													<td>김동준</td>
													<td>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender01" id="gender01-m" value="남" checked>
															<label class="form-check-label" for="gender01-m">남</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender01" id="gender01-f" value="여">
															<label class="form-check-label" for="gender01-f">여</label>
														</div>
													</td>
													<td>343</td>
													<td><a href="javascript:void(0);"><i class="bx bx-printer fs-6"></i></a></td>
													<td><input class="form-control form-control-sm text-center mx-auto" type="text" value="110,000" style="width:70px;"></td>
													<td>18</td>
													<td>N</td>
													<td>1</td>
													<td><input class="form-control form-control-sm text-center mx-auto" type="text" value="100,000" style="width:70px;"></td>
													<td></td>
													<td>210,000</td>
												</tr>
												<tr onclick="$(this).toggleClass('table-active');">
													<td><input class="form-check-input" type="checkbox"></td>
													<td>박윤규</td>
													<td>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender02" id="gender02-m" value="남" checked>
															<label class="form-check-label" for="gender02-m">남</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender02" id="gender02-f" value="여">
															<label class="form-check-label" for="gender02-f">여</label>
														</div>
													</td>
													<td>363</td>
													<td><a href="javascript:void(0);"><i class="bx bx-printer fs-6"></i></a></td>
													<td><input class="form-control form-control-sm text-center mx-auto" type="text" value="160,000" style="width:70px;"></td>
													<td>18</td>
													<td>N</td>
													<td></td>
													<td></td>
													<td></td>
													<td>160,000</td>
												</tr>
												<tr onclick="$(this).toggleClass('table-active');">
													<td><input class="form-check-input" type="checkbox"></td>
													<td>최원석</td>
													<td>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender03" id="gender03-m" value="남" checked>
															<label class="form-check-label" for="gender03-m">남</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender03" id="gender03-f" value="여">
															<label class="form-check-label" for="gender03-f">여</label>
														</div>
													</td>
													<td>383</td>
													<td><a href="javascript:void(0);"><i class="bx bx-printer fs-6"></i></a></td>
													<td><input class="form-control form-control-sm text-center mx-auto" type="text" value="160,000" style="width:70px;"></td>
													<td>18</td>
													<td>N</td>
													<td></td>
													<td></td>
													<td></td>
													<td>160,000</td>
												</tr>
												<tr onclick="$(this).toggleClass('table-active');">
													<td><input class="form-check-input" type="checkbox"></td>
													<td>김채원</td>
													<td>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender04" id="gender04-m" value="남">
															<label class="form-check-label" for="gender04-m">남</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="gender04" id="gender04-f" value="여" checked>
															<label class="form-check-label" for="gender04-f">여</label>
														</div>
													</td>
													<td>561</td>
													<td><a href="javascript:void(0);"><i class="bx bx-printer fs-6"></i></a></td>
													<td><input class="form-control form-control-sm text-center mx-auto" type="text" value="160,000" style="width:70px;"></td>
													<td>18</td>
													<td>N</td>
													<td></td>
													<td></td>
													<td></td>
													<td>160,000</td>
												</tr>
											</tbody>

											<tfoot>
												<tr>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td></td>
													<td>590,000</td>
													<td></td>
													<td></td>
													<td></td>
													<td>100,000</td>
													<td></td>
													<td>690,000</td>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
		                <!--//row - 내장관리 -->

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="row">
											<div class="col">
												<table class="table table-fixed text-center">
													<colgroup>
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:60px;">
														<col style="width:60px;">
														<col style="width:60px;">
														<col style="width:60px;">
														<col style="width:60px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>No</th>
															<th>시간</th>
															<th>코스
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">A</button></li>
																		<li><button type="button" class="dropdown-item">B</button></li>
																	</ul>
																</div>
															</th>
															<th>인원</th>
															<th>예약자</th>
															<th>단체명</th>
															<th>N</th>
															<th colspan="5">내장객</th>
															<th>홀</th>
															<th>F</th>
															<th>G</th>
															<th>B</th>
															<th>P</th>
														</tr>
													</thead>

													<tbody>
														<tr onclick="$(this).toggleClass('table-active');">
															<td>1</td>
															<td>06:50</td>
															<td>BO</td>
															<td>4</td>
															<td>김동준</td>
															<td>클라스</td>
															<td></td>
															<td>김동준</td>
															<td>박윤규</td>
															<td>최원석</td>
															<td>김채원</td>
															<td></td>
															<td></td>
															<td>O</td>
															<td>O</td>
															<td></td>
															<td></td>
														</tr>
														<tr onclick="$(this).toggleClass('table-active');">
															<td>2</td>
															<td>06:57</td>
															<td>BO</td>
															<td>4</td>
															<td>김동준</td>
															<td>클라스</td>
															<td></td>
															<td>김민석</td>
															<td>정해영</td>
															<td>박순옥</td>
															<td>유승</td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr onclick="$(this).toggleClass('table-active');">
															<td>3</td>
															<td>06:57</td>
															<td>BI</td>
															<td>4</td>
															<td>이미희</td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
														<tr onclick="$(this).toggleClass('table-active');">
															<td>4</td>
															<td>07:04</td>
															<td>CO</td>
															<td>4</td>
															<td>최영희</td>
															<td>싱글도전</td>
															<td></td>
															<td>서태진</td>
															<td>이강준</td>
															<td>황현민</td>
															<td>안상운</td>
															<td></td>
															<td></td>
															<td>O</td>
															<td>O</td>
															<td></td>
															<td></td>
														</tr>
														<tr onclick="$(this).toggleClass('table-active');">
															<td>5</td>
															<td>07:04</td>
															<td>CI</td>
															<td>4</td>
															<td>최영희</td>
															<td>싱글도전</td>
															<td></td>
															<td>최영희</td>
															<td>우혜자</td>
															<td>김판식</td>
															<td>고승미</td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
															<td></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row - 내장관리 -->

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
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
