<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '내장 현황 관리'; include "../../partials/title-meta.php"; ?>
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
										<div class="d-flex align-items-center flex-wrap gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select form-select-lg bg-transparent border-0 h-100">
													<option value="2023.05.01 (일)" selected>2023.05.01 (월)</option>
													<option value="2023.05.02 (화)">2023.05.02 (화)</option>
												</select>
											</div>

											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker" multiple data-width="fit" data-actions-box="true" title="티타임 선택">
													<option value="1부">1부</option>
													<option value="2부">2부</option>
													<option value="3부">3부</option>
												</select>
											</div>
											
											<div class="form-check form-check-inline align-top p-0 m-0">
												<select class="selectpicker show-tick" data-width="fit" title="확정 여부">
													<option value="내장 확정">내장 확정</option>
													<option value="미확정">미확정</option>
												</select>
											</div>	

											<div class="form-check form-check-inline search-area ps-0 me-0">
												<input class="form-control" type="text" placeholder="Search...">
												<span class="fas fa-search position-absolute top-50 end-0 translate-middle"></span>
											</div>

											<div class="form-check form-check-inline">
												<input class="form-check-input" type="checkbox" id="Unreserved" checked="">
												<label class="form-check-label" for="Unreserved">미예약</label>
											</div>

											<div class="btn-group ms-auto">
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".articleModal">대여</button>
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".moveGroupModal">조 변경</button>
												<button type="button" class="btn btn-outline-custom">복사</button>
												<button type="button" class="btn btn-outline-custom">이동</button>
												<button type="button" class="btn btn-outline-custom">선불 입력</button>
												<button type="button" class="btn btn-outline-custom">정산</button>
												<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".confirmModal">내장 확정</button>
											</div>
										</div>

										<div class="row">
											<div class="col">
												<table class="table table-fixed text-center table-select">
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
																<div class="dropdown d-inline-block table-head-drop">
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
														<tr>
															<td>1</td>
															<td>06:50</td>
															<td>EI</td>
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
														<tr>
															<td>2</td>
															<td>06:57</td>
															<td>EO</td>
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
														<tr>
															<td>3</td>
															<td>06:57</td>
															<td>WI</td>
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
														<tr>
															<td>4</td>
															<td>07:04</td>
															<td>WO</td>
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
														<tr>
															<td>5</td>
															<td>07:04</td>
															<td>WI</td>
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
		                <!--//row - 내장관리 -->

						<div class="modal fade confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body">
										<p class="text-center font-size-14 fw-semibold pt-4 mb-0">내장 확정하시겠습니까?</p>
									</div>
									<div class="modal-footer">
										<div class="d-flex justify-content-center w-100 gap-2 pb-3">
											<button type="button" class="btn btn-outline-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
											<button type="button" class="btn btn-custom">확인</button>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//modal - confirmModal -->

						<div class="modal fade articleModal" tabindex="-1" aria-labelledby="articleModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="articleModalLabel">물품 대여</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-fixed table-responsive w-100 text-center nowrap mb-0">
												<thead>
													<tr>
														<th><input class="form-check-input" type="checkbox"></th>
														<th>홀</th>
														<th>대여품목</th>
														<th>대여료</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<th><input class="form-check-input" type="checkbox"></th>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="홀">홀</option>
																<option value="18" selected>18</option>
																<option value="9">9</option>
															</select>
														</td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="품목">품목</option>
																<option value="신발" selected>신발</option>
																<option value="클럽">클럽</option>
															</select>
														</td>
														<td>10,000</td>
													</tr>
													<tr>
														<th><input class="form-check-input" type="checkbox"></th>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="홀">홀</option>
																<option value="18" selected>18</option>
																<option value="9">9</option>
															</select>
														</td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="품목">품목</option>
																<option value="신발">신발</option>
																<option value="클럽" selected>클럽</option>
															</select>
														</td>
														<td>20,000</td>
													</tr>
													<tr>
														<th><input class="form-check-input" type="checkbox"></th>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="홀" selected>홀</option>
																<option value="18">18</option>
																<option value="9">9</option>
															</select>
														</td>
														<td>
															<select class="form-select w-auto mx-auto">
																<option value="품목" selected>품목</option>
																<option value="신발">신발</option>
																<option value="클럽">클럽</option>
															</select>
														</td>
														<td>0</td>
													</tr>
													<tr>
														<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
									<div class="modal-footer">
										<div class="d-flex gap-2">
											<button type="button" class="btn btn-custom">삭제</button>
											<button type="button" class="btn btn-custom">저장</button>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - articleModal -->

						<div class="modal fade moveGroupModal" tabindex="-1" aria-labelledby="moveGroupModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="bookingModalLabel">조 변경</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col-3">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:50px;">
														<col style="width:40px;">
														<col style="width:40px;">
														<col style="width:80px;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>시간</th>
															<th>코스</th>
															<th>홀</th>
															<th>예약자</th>
															<th>단체팀</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-active">
															<td>13:48</td>
															<td>CI</td>
															<td>18</td>
															<td>이승준</td>
															<td>이승준 3팀</td>
														</tr>
														<tr>
															<td>13:48</td>
															<td>CI</td>
															<td>18</td>
															<td>이성호</td>
															<td>이승준 3팀</td>
														</tr>
														<tr>
															<td>13:48</td>
															<td>CI</td>
															<td>18</td>
															<td>이성호</td>
															<td>이승준 3팀</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-9">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:80px;">
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:50px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>구분</th>
															<th>시간</th>
															<th>코스</th>
															<th>성명</th>
															<th>성별</th>
															<th>락카</th>
															<th>요금</th>
															<th>단체팀</th>
															<th>홀</th>
															<th>입장료</th>
															<th>카트료</th>
															<th>대여료</th>
															<th>추가카트료</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>CI</td>
															<td>이호권</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>CI</td>
															<td>정영철</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>CI</td>
															<td>윤종간</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
														</tr>
														<tr>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
															<td>&nbsp;</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>

										<div class="row">
											<div class="col-3"></div>
											<div class="col-9">
												<div class="d-flex justify-content-center gap-2 mb-3">
													<button type="button" class="btn btn-outline-custom rounded-0 p-0"><i class="bx bx-chevron-up bx-sm lh-1 align-top"></i></button>
													<button type="button" class="btn btn-outline-custom rounded-0 p-0"><i class="bx bx-chevron-down bx-sm lh-1 align-top"></i></button>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-3">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:50px;">
														<col style="width:40px;">
														<col style="width:40px;">
														<col style="width:80px;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>시간</th>
															<th>코스</th>
															<th>홀</th>
															<th>예약자</th>
															<th>단체팀</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>13:48</td>
															<td>CI</td>
															<td>18</td>
															<td>이승준</td>
															<td>이승준 3팀</td>
														</tr>
														<tr class="table-active">
															<td>13:48</td>
															<td>CI</td>
															<td>18</td>
															<td>이성호</td>
															<td>이승준 3팀</td>
														</tr>
														<tr>
															<td>13:48</td>
															<td>CI</td>
															<td>18</td>
															<td>이성호</td>
															<td>이승준 3팀</td>
														</tr>
													</tbody>
												</table>
											</div>
											<div class="col-9">
												<table class="table table-layout-fixed text-center table-select">
													<colgroup>
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:80px;">
														<col style="width:50px;">
														<col style="width:50px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:50px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
													</colgroup>

													<thead>
														<tr>
															<th>구분</th>
															<th>시간</th>
															<th>코스</th>
															<th>성명</th>
															<th>성별</th>
															<th>락카</th>
															<th>요금</th>
															<th>단체팀</th>
															<th>홀</th>
															<th>입장료</th>
															<th>카트료</th>
															<th>대여료</th>
															<th>추가카트료</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-active">
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>CI</td>
															<td>이성호</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>CI</td>
															<td>조현욱</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>CI</td>
															<td>정영철</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 2팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>CI</td>
															<td>김동안</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 3팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox"></td>
															<td>13:56</td>
															<td>CI</td>
															<td>장만덕</td>
															<td>남자</td>
															<td>999</td>
															<td>일반18</td>
															<td>이승준 2팀</td>
															<td>18</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
															<td>180,000</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - moveGroupModal -->

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
