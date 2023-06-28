<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '관리자관리'; include "../partials/title-meta.php"; ?>
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
										<div class="d-flex justify-content-end align-items-center flex-wrap gap-2 mb-3">
											<p class="mb-0">전체(3), 무료(3), 탈퇴회원(0)</p>
											<button type="button" class="btn btn-sm btn-custom">검색</button>
										</div>

										<table class="table table-sm table-bordered table-layout-fixed align-middle text-center w-100 nowrap">
											<colgroup>
												<col style="width:100px;">
												<col style="width:auto;">
												<col style="width:100px;">
												<col style="width:auto;">
											</colgroup>

											<tbody>
												<tr>
													<th>이름/ID</th>
													<td>
														<div class="d-flex align-items-center">
															<input class="form-control w-auto" type="text" value=""><span class="dash">/</span><input class="form-control w-auto" type="text" value="">
														</div>
													</td>
													<th>E-Mail</th>
													<td><input class="form-control" type="email" value=""></td>
												</tr>
												<tr>
													<th>핸드폰</th>
													<td>
														<div class="d-flex align-items-center">
															<input class="form-control input_w70" type="text" value="" id="name"><span class="dash">-</span><input class="form-control input_w70" type="text" value="" id="name"><span class="dash">-</span><input class="form-control input_w70" type="text" value="" id="name">
														</div>
													</td>
													<th>가입일자</th>
													<td><input type="text" class="form-control datepicker"></td>
												</tr>
												<tr>
													<th>회원종류/상태</th>
													<td>
														<div class="d-flex align-items-center">
															<div class="form-check form-check-inline ps-0">
																<select class="form-select">
																	<option value="전체" selected="">전체</option>
																	<option value="무료">무료</option>
																</select>
															</div>
															<div class="form-check form-check-inline ps-0">
																<select class="form-select">
																	<option value="사용중" selected="">사용중</option>
																	<option value="탈퇴">탈퇴</option>
																</select>
															</div>
														</div>
													</td>
													<th>조회순서</th>
													<td>
														<select class="form-select w-auto">
															<option value="이름">이름</option>
															<option value="아이디">아이디</option>
															<option value="E-Mail">E-Mail</option>
															<option value="가입일자" selected="">가입일자</option>
														</select>
													</td>
												</tr>
												<tr>
													<th>영업담당</th>
													<td>
														<div class="d-flex align-items-center">
															<div class="form-check form-check-inline ps-0">
																<input class="form-control w-auto" type="text" value="" id="name">
															</div>
															<div class="form-check form-check-inline">
																<input class="form-check-input" type="checkbox" id="check01" value="option1" checked="">
																<label class="form-check-label" for="check01">한케이회원권 소유</label>
															</div>
														</div>
													</td>
													<th>대리점</th>
													<td>
														<input class="form-control w-auto" type="text" value="">
													</td>
												</tr>
												<tr>
													<th>이전 회원종류</th>
													<td>
														<select class="form-select w-auto">
															<option value="선택" selected="">선택</option>
															<option value="무료">무료</option>
														</select>
													</td>
													<th>가입경로</th>
													<td>
														<select class="form-select w-auto">
															<option value="선택" selected="">선택</option>
															<option value="자체">자체</option>
															<option value="NAVER">NAVER</option>
														</select>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
		                <!--//row  -->

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-wrap justify-content-end gap-2 mb-3">
											<button type="button" class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target=".addMemberModal">신규 등록</button>
											<button type="button" class="btn btn-sm btn-custom">유료회원 정리</button>
										</div>

										<table class="table table-sm table-bordered align-middle w-100 nowrap text-center table-select">
											<thead>
												<tr>
													<th>번호</th>
													<th>회원 종류</th>
													<th>가입 경로</th>
													<th>이름</th>
													<th>아이디</th>
													<th>적립금</th>
													<th>E-Mail</th>
													<th>연락처</th>
													<th>추천인</th>
													<th>상태</th>
													<th>가입일자</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<td>3</td>
													<td>무료</td>
													<td>자체</td>
													<td><span data-bs-toggle="modal" data-bs-target=".modifyMemberModal">김철수</span></td>
													<td>ace</td>
													<td>2,352,500</td>
													<td>23@23.com</td>
													<td>010-1111-1111</td>
													<td></td>
													<td>사용중</td>
													<td>2022.06.27</td>
												</tr>
												<tr>
													<td>2</td>
													<td>무료</td>
													<td>자체</td>
													<td><span data-bs-toggle="modal" data-bs-target=".modifyMemberModal">홍길동</span></td>
													<td>captain</td>
													<td>2,352,500</td>
													<td>23@23.com</td>
													<td>010-1111-1111</td>
													<td></td>
													<td>사용중</td>
													<td>2022.06.27</td>
												</tr>
												<tr>
													<td>1</td>
													<td>무료</td>
													<td>자체</td>
													<td><span data-bs-toggle="modal" data-bs-target=".modifyMemberModal">테스트</span></td>
													<td>test</td>
													<td>2,352,500</td>
													<td>23@23.com</td>
													<td>010-1111-1111</td>
													<td></td>
													<td>사용중</td>
													<td>2022.06.27</td>
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
												<select class="form-select form-select-sm perpage-select w-auto py-0 pe-3">
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
														<a class="page-link py-0" href="javascript:void(0);" aria-label="PreviousAll">
															<span aria-hidden="true">
																<svg width="9" height="10" viewBox="0 0 9 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88969 0L2.93994 4.94975L7.88969 9.89949L8.95035 8.83883L5.06126 4.94975L8.95035 1.06066L7.88969 0ZM0 10H1.5L1.5 3.89067e-05H0V10Z"></path>
																</svg>
															</span>
														</a>
													</li>
													<li class="page-item">
														<a class="page-link py-0" href="javascript:void(0);" aria-label="Previous">
															<span aria-hidden="true">
																<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M0.351074 5.05054L5.30082 0.100791L6.36148 1.16145L2.47239 5.05054L6.36148 8.93962L5.30082 10.0003L0.351074 5.05054Z"></path>
																</svg>
															</span>
														</a>
													</li>
													<li class="page-item">
														<a class="page-link py-0" href="javascript:void(0);" aria-label="Next">
															<span aria-hidden="true">
																<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6499 4.94971L5.70016 9.89945L4.6395 8.83879L8.52858 4.94971L4.6395 1.06062L5.70016 -3.93408e-05L10.6499 4.94971Z"></path>
																</svg>
															</span>
														</a>
													</li>
													<li class="page-item">
														<a class="page-link py-0" href="javascript:void(0);" aria-label="NextAll">
															<span aria-hidden="true">
																<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																	<path fill-rule="evenodd" clip-rule="evenodd" d="M1.28853 10.0002L6.23828 5.0505L1.28854 0.10075L0.227876 1.16141L4.11696 5.0505L0.227875 8.93958L1.28853 10.0002ZM9.17822 -3.91006e-05L7.67822 -3.92318e-05L7.67822 9.99996L9.17822 9.99996L9.17822 -3.91006e-05Z"></path>
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
		                <!--//row  -->

						<div class="modal fade addMemberModal" tabindex="-1" aria-labelledby="addMemberModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-full">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addMemberModalLabel">신규 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<table class="table table-sm table-bordered align-middle table-layout-fixed mb-0">
											<colgroup>
												<col style="width:90px;">
												<col style="width:auto">
												<col style="width:90px;">
												<col style="width:auto">
											</colgroup>
											
											<tbody>
												<tr>
													<th class="text-end">일자</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">이름</th>
													<td><input type="text" class="form-control"></td>
													<th class="text-end">회원구분</th>
													<td>무료 ( ~ )</td>
												</tr>
												<tr>
													<th class="text-end">핸드폰</th>
													<td><input type="text" class="form-control"></td>
													<th class="text-end">회원권</th>
													<td>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="check01" value="option1" checked="">
															<label class="form-check-label" for="check01">한케이회원권 소유</label>
														</div>
													</td>
												</tr>
												<tr>
													<th class="text-end">생년월일</th>
													<td><input type="text" class="form-control" placeholder="YYMMDD"></td>
													<th class="text-end">이메일</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">성별</th>
													<td>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="inlineRadioOptions" id="genderRadio1" value="option1" checked="">
															<label class="form-check-label" for="genderRadio1">남</label>
	                                                    </div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="radio" name="inlineRadioOptions" id="genderRadio2" value="option2">
															<label class="form-check-label" for="genderRadio2">여</label>
	                                                    </div>
													</td>
													<th class="text-end">별명</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">영업담당</th>
													<td><input type="text" class="form-control"></td>
													<th class="text-end">대리점</th>
													<td><input type="text" class="form-control"></td>	
												</tr>
												<tr>
													<th class="text-end">국내 관심지역</th>
													<td>
														<div class="form-check form-check-inline align-top ps-0">
															<select class="form-select">
																<option value="" selected="">지역선택 1</option>
																<option value="1" data-code-name="일본">일본</option>
																<option value="7" data-code-name="유럽">유럽</option>
																<option value="3" data-code-name="미국">미국</option>
																<option value="2" data-code-name="말레이시아">말레이시아</option>
																<option value="5" data-code-name="태국">태국</option>
																<option value="4" data-code-name="베트남">베트남</option>
																<option value="6" data-code-name="중국">중국</option>
																<option value="8" data-code-name="필리핀">필리핀</option>
															</select>
														</div>

														<div class="form-check form-check-inline align-top ps-0">
															<select class="form-select">
																<option value="" selected="">지역선택 2</option>
																<option value="1" data-code-name="일본">일본</option>
																<option value="7" data-code-name="유럽">유럽</option>
																<option value="3" data-code-name="미국">미국</option>
																<option value="2" data-code-name="말레이시아">말레이시아</option>
																<option value="5" data-code-name="태국">태국</option>
																<option value="4" data-code-name="베트남">베트남</option>
																<option value="6" data-code-name="중국">중국</option>
																<option value="8" data-code-name="필리핀">필리핀</option>
															</select>
														</div>

														<div class="form-check form-check-inline align-top ps-0">
															<select class="form-select">
																<option value="" selected="">지역선택 3</option>
																<option value="1" data-code-name="일본">일본</option>
																<option value="7" data-code-name="유럽">유럽</option>
																<option value="3" data-code-name="미국">미국</option>
																<option value="2" data-code-name="말레이시아">말레이시아</option>
																<option value="5" data-code-name="태국">태국</option>
																<option value="4" data-code-name="베트남">베트남</option>
																<option value="6" data-code-name="중국">중국</option>
																<option value="8" data-code-name="필리핀">필리핀</option>
															</select>
														</div>
													</td>
													<th class="text-end">관심 골프장</th>
													<td>
														<div class="form-check form-check-inline align-top ps-0">
															<select class="form-select">
																<option value="" selected="">관심골프장 1</option>
																<option value="125" data-area-code="1">700C</option>
																<option value="112" data-area-code="1">골프존안성H</option>
																<option value="113" data-area-code="1">골프존안성W</option>
																<option value="505" data-area-code="5">골프존카운티 선운</option>
																<option value="614" data-area-code="6">나인브릿지</option>
																<option value="200" data-area-code="3">오너스GC</option>
																<option value="203" data-area-code="2">쿠알라룸푸르 GC</option>
																<option value="205" data-area-code="2">킹스데일CC</option>
																<option value="110" data-area-code="1">토메이CC</option>
																<option value="129" data-area-code="1">티클라우드CC</option>
																<option value="202" data-area-code="2">현대더링스CC</option>
																<option value="204" data-area-code="8">FA코리아CC</option>
															</select>
														</div>

														<div class="form-check form-check-inline align-top ps-0">
															<select class="form-select">
																<option value="" selected="">관심골프장 2</option>
																<option value="125" data-area-code="1">700C</option>
																<option value="112" data-area-code="1">골프존안성H</option>
																<option value="113" data-area-code="1">골프존안성W</option>
																<option value="505" data-area-code="5">골프존카운티 선운</option>
																<option value="614" data-area-code="6">나인브릿지</option>
																<option value="200" data-area-code="3">오너스GC</option>
																<option value="203" data-area-code="2">쿠알라룸푸르 GC</option>
																<option value="205" data-area-code="2">킹스데일CC</option>
																<option value="110" data-area-code="1">토메이CC</option>
																<option value="129" data-area-code="1">티클라우드CC</option>
																<option value="202" data-area-code="2">현대더링스CC</option>
																<option value="204" data-area-code="8">FA코리아CC</option>
															</select>
														</div>

														<div class="form-check form-check-inline align-top ps-0">
															<select class="form-select">
																<option value="" selected="">관심골프장 3</option>
																<option value="125" data-area-code="1">700C</option>
																<option value="112" data-area-code="1">골프존안성H</option>
																<option value="113" data-area-code="1">골프존안성W</option>
																<option value="505" data-area-code="5">골프존카운티 선운</option>
																<option value="614" data-area-code="6">나인브릿지</option>
																<option value="200" data-area-code="3">오너스GC</option>
																<option value="203" data-area-code="2">쿠알라룸푸르 GC</option>
																<option value="205" data-area-code="2">킹스데일CC</option>
																<option value="110" data-area-code="1">토메이CC</option>
																<option value="129" data-area-code="1">티클라우드CC</option>
																<option value="202" data-area-code="2">현대더링스CC</option>
																<option value="204" data-area-code="8">FA코리아CC</option>
															</select>
														</div>
													</td>
												</tr>
											</tbody>	
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-custom">등록</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - addAdminModal -->

						<!-- end Content -->

                    </div><!-- container-fluid -->

                </div><!-- End Page-content -->

				<?php include "../partials/footer.php"; ?>

            </div><!-- end main content-->

        </div><!-- END layout-wrapper -->

		<?php include "../partials/right-sidebar.php"; ?>
		<?php include "../partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			menuActive(1); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
