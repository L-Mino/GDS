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
								<div class="card mb-0"">
									<div class="card-body">
										<div class="d-flex align-items-center flex-wrap gap-2 mb-3">
											<div class="form-check form-check-inline ps-0 me-0">
												<input class="form-control form-control-sm pe-4" type="text" placeholder="골프장명">
												<span class="mdi mdi-magnify position-absolute top-50 start-100 translate-middle pe-4"></span>
											</div>

											<div class="d-flex flex-wrap gap-2 ms-auto">
												<button type="button" class="btn btn-sm btn-custom" data-bs-toggle="modal" data-bs-target=".addGolfModal">등록</button>
											</div>
										</div>
										
										<div class="row">
											<div class="col-12">
												<table class="table table-sm table-bordered align-middle text-center w-100 nowrap">
													<thead>
														<tr>
															<th>코드</th>
															<th><a href="#">골프장명</a></th>
															<th>담당자</th>
															<th>ID / PWD</th>
															<th>사용유무
																<div class="dropdown d-inline-block table-head-drop">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">Y</button></li>
																		<li><button type="button" class="dropdown-item">N</button></li>
																	</ul>
																</div>
															</th>
															<th>국가
																<div class="dropdown d-inline-block table-head-drop">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">일본</button></li>
																		<li><button type="button" class="dropdown-item">유럽</button></li>
																		<li><button type="button" class="dropdown-item">미국</button></li>
																		<li><button type="button" class="dropdown-item">말레이시아</button></li>
																		<li><button type="button" class="dropdown-item">태국</button></li>
																		<li><button type="button" class="dropdown-item">베트남</button></li>
																		<li><button type="button" class="dropdown-item">중국</button></li>
																		<li><button type="button" class="dropdown-item">필리핀</button></li>
																	</ul>
																</div>
															</th>
															<th>수정</th>															
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><a href="#" title="골프장관리자링크">125</a></td>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".viewGolfModal">700C</span></td>															
															<td><span role="button" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">A 홍길동</span></td>
															<td>abc9727 / 0048</td>
															<td>																
																<select class="form-select w-auto mx-auto">
																	<option value="Y" selected>Y</option>
																	<option value="N">N</option>
																</select>
															</td>
															<td>
																<select class="form-select w-auto mx-auto">
																	<option value="선택">선택</option>
																	<option value="1" selected>일본</option>
																	<option value="7">유럽</option>
																	<option value="3">미국</option>
																	<option value="2">말레이시아</option>
																	<option value="5">태국</option>
																	<option value="4">베트남</option>
																	<option value="6">중국</option>
																	<option value="8">필리핀</option>
																</select>
															</td>
															<td><button type="button" class="btn btn-sm btn-custom">수정</button></td>
														</tr>
														<tr>
															<td><a href="#" title="골프장관리자링크">112</a></td>
															<td><span role="button" data-bs-toggle="modal" data-bs-target=".viewGolfModal">골프존안성</span></td>
															<td><span role="button" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="010-1234-5678">B 홍길동</span></td>
															<td>ansung_h / 0700</td>
															<td>																
																<select class="form-select w-auto mx-auto">
																	<option value="Y" selected>Y</option>
																	<option value="N">N</option>
																</select>
															</td>
															<td>
																<select class="form-select w-auto mx-auto">
																	<option value="선택">선택</option>
																	<option value="1" selected>일본</option>
																	<option value="7">유럽</option>
																	<option value="3">미국</option>
																	<option value="2">말레이시아</option>
																	<option value="5">태국</option>
																	<option value="4">베트남</option>
																	<option value="6">중국</option>
																	<option value="8">필리핀</option>
																</select>
															</td>
															<td><button type="button" class="btn btn-sm btn-custom">수정</button></td>
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
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88969 0L2.93994 4.94975L7.88969 9.89949L8.95035 8.83883L5.06126 4.94975L8.95035 1.06066L7.88969 0ZM0 10H1.5L1.5 3.89067e-05H0V10Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="Previous">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M0.351074 5.05054L5.30082 0.100791L6.36148 1.16145L2.47239 5.05054L6.36148 8.93962L5.30082 10.0003L0.351074 5.05054Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="Next">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6499 4.94971L5.70016 9.89945L4.6395 8.83879L8.52858 4.94971L4.6395 1.06062L5.70016 -3.93408e-05L10.6499 4.94971Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="NextAll">
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
							</div>
						</div>
		                <!--//row -  -->

						<div class="modal fade addGolfModal" tabindex="-1" aria-labelledby="addGolfModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered modal-lg">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addGolfModalLabel">골프장 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<table class="table table-sm align-middle table-layout-fixed mb-0">
											<colgroup>
												<col style="width:150px;">
												<col style="width:auto">
												<col style="width:150px;">
												<col style="width:auto">
											</colgroup>
											
											<tbody>
												<tr>
													<th class="text-end">지역</th>
													<td>
														<select class="form-select">
															<option value="">선택</option>
															<option value="1">일본</option>
															<option value="7">유럽</option>
															<option value="3">미국</option>
															<option value="2">말레이시아</option>
															<option value="5">태국</option>
															<option value="4">베트남</option>
															<option value="6">중국</option>
															<option value="8">필리핀</option>
														</select>
													</td>
													<th class="text-end">골프장 코드</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">골프장명</th>
													<td><input type="text" class="form-control"></td>
													<th class="text-end">골프장 가명</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">기존 주소</th>
													<td colspan="3"><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">도로명주소</th>
													<td colspan="3"><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">단축 주소</th>
													<td colspan="3"><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">아이디</th>
													<td><input type="text" class="form-control"></td>
													<th class="text-end">비밀번호</th>
													<td><input type="text" class="form-control" value="0048"></td>
												</tr>
												<tr>
													<th class="text-end">대표전화</th>
													<td><input type="text" class="form-control"></td>
													<th class="text-end">예약실</th>
													<td><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th class="text-end">팩스</th>
													<td><input type="text" class="form-control"></td>
													<th class="text-end">홈페이지</th>
													<td><input type="text" class="form-control" placeholder="ex)www.****.com"></td>
												</tr>
												<tr>
													<th class="text-end">홀수</th>
													<td>
														<div class="form-check form-check-inline p-0 m-0">
															<input type="text" class="form-control input_w50">
														</div>															
														<span>홀</span>
													</td>
													<th class="text-end">최소 예약 인원</th>
													<td>
														<div class="d-flex align-items-center flex-wrap gap-1">
															<div>
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required="">
																		<option value="" disabled="" selected="">주중 인원</option>
																		<option value="주중 4인">주중 4인</option>
																		<option value="주중 3인">주중 3인</option>
																		<option value="주중 2인">주중 2인</option>
																		<option value="주중 1일">주중 1인</option>
																	</select>
																</div>
															</div>
															<span>/</span>
															<div>
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required="">
																		<option value="" disabled="" selected="">주말 인원</option>
																		<option value="주말 4인">주말 4인</option>
																		<option value="주말 3인">주말 3인</option>
																		<option value="주말 2인">주말 2인</option>
																		<option value="주말 1일">주말 1일</option>
																	</select> 
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<th class="text-end">골프장 타입</th>
													<td>
														<select class="form-select" required="">
															<option value="" selected="">선택</option>
															<option value="A">어드민 타입</option>
															<option value="R">실시간 타입</option>
															<option value="AR">어드민+실시간</option>
														</select> 
													</td>
													<th class="text-end">탭구분</th>
													<td>
														<select class="form-select" required="">
															<option value="" selected="">선택</option>
															<option value="1">일본</option>
															<option value="7">유럽</option>
															<option value="3">미국</option>
															<option value="2">말레이시아</option>
															<option value="5">태국</option>
															<option value="4">베트남</option>
															<option value="6">중국</option>
															<option value="8">필리핀</option>
														</select> 
													</td>
												</tr>
												<tr>
													<th class="text-end">예약 취소가능일자</th>
													<td colspan="3">
														<div class="row">
															<div class="d-flex align-items-center flex-wrap gap-1">
																<div>
																	<span>주중 :</span>
																	<div class="form-check form-check-inline p-0 m-0">
																		<input type="text" class="form-control text-center" maxlength="2" placeholder="0" style="width:40px;">
																	</div>
																	<span class="me-2">일</span>
																	<div class="form-check form-check-inline p-0 m-0">
																		<input type="text" class="form-control text-center" maxlength="2" placeholder="00" style="width:40px;">
																	</div>
																	<span>시전 취소 가능</span>
																</div>
																<span class="mx-2">/</span>
																<div>
																	<span>주말 :</span>
																	<div class="form-check form-check-inline p-0 m-0">
																		<input type="text" class="form-control text-center" maxlength="2" placeholder="0" style="width:40px;">
																	</div>
																	<span class="me-2">일</span>
																	<div class="form-check form-check-inline p-0 m-0">
																		<input type="text" class="form-control text-center" maxlength="2" placeholder="00" style="width:40px;">
																	</div>
																	<span>시전 취소 가능</span>
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<th class="text-end">예약 가능시간</th>
													<td colspan="3">
														<div class="d-flex align-items-center flex-wrap gap-1">
															<div class="d-flex align-items-center">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
															</div>
															<span class="mx-2"> ~</span>
															<div class="d-flex align-items-center">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
															</div>
														</div>
													</td>
												</tr>
												<tr>
													<th class="text-end">사용유무</th>
													<td colspan="3">
														<select class="form-select w-auto" required="">
															<option value="Y">사용중</option>
															<option value="N" selected="">미사용</option>
														</select>
													</td>
												</tr>
												<tr>
													<th class="text-end">설정</th>
													<td colspan="3">
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="check01" checked="">
															<label class="form-check-label" for="check01">할인특가</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="check02">
															<label class="form-check-label" for="check02">야간라운딩</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="check03">
															<label class="form-check-label" for="check03">2인플레이</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="check04">
															<label class="form-check-label" for="check04">5인플레이</label>
														</div>
														<div class="form-check form-check-inline">
															<input class="form-check-input" type="checkbox" id="check05">
															<label class="form-check-label" for="check05">노캐디</label>
														</div>
													</td>
												</tr>
											</tbody>	
										</table>

										<table class="table table-sm table-bordered align-middle text-center w-100 nowrap mt-3 mb-0">
											<colgroup>
												<col style="width:70px;">
												<col style="width:70px;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="width:auto;">
												<col style="width:auto;">
											</colgroup>

											<thead>
												<tr>
													<th colspan="2">구분</th>
													<th>주중</th>
													<th>토요일</th>
													<th>일요일</th>
													<th>공휴일</th>
												</tr>
											</thead>

											<tbody>
												<tr>
													<th rowspan="4">그린피</td>
													<td>정회원</td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
												</tr>
												<tr>
													<td>주중회원</td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
												</tr>
												<tr>
													<td>비회원</td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
													<td><input type="text" class="form-control text-center"></td>
												</tr>
												<tr>
													<td>기타</td>
													<td colspan="4"><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th colspan="2">위약금</td>
													<td><input type="text" class="form-control text-center" value="300,000"></td>
													<td><input type="text" class="form-control text-center" value="500,000"></td>
													<td><input type="text" class="form-control text-center" value="500,000"></td>
													<td><input type="text" class="form-control text-center"></td>
												</tr>
												<tr>
													<th colspan="2">주중 위약내용</td>
													<td colspan="4"><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th colspan="2">주말 위약내용</td>
													<td colspan="4"><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th colspan="2">기한 후 취소</td>
													<td colspan="4"><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th colspan="2">기타사항</td>
													<td colspan="4"><input type="text" class="form-control"></td>
												</tr>
												<tr>
													<th colspan="2">카트피</td>
													<td colspan="4">
														<div class="d-flex align-items-center flex-wrap gap-1">
															<div class="form-check form-check-inline p-0 m-0">
																<input type="text" class="form-control w-auto">
															</div>
															<span class="ms-2">(</span>
															<div class="form-check form-check-inline p-0 m-0">
																<input type="text" class="form-control text-center input_w50">
															</div>
															<span>)인승</span>
														</div>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-custom">입력</button>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - addGolfModal -->
						
						<div class="modal fade viewGolfModal" tabindex="-1" aria-labelledby="viewGolfModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-scrollable modal-xl">
								<div class="modal-content">
									<div class="modal-header flex-column align-items-start">
										<div class="d-flex align-items-center justify-content-between w-100">
											<h5 class="modal-title" id="viewGolfModalLabel">700C</h5>
											<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
										</div>
										
										<ul class="nav nav-pills align-items-center gap-1 mt-3" role="tablist">
											<button class="nav-link px-2 active" data-bs-toggle="tab" role="tab" aria-selected="true" data-bs-target="#code01-01">기본정보</button>
											<button class="nav-link px-2" data-bs-toggle="tab" role="tab" aria-selected="false" data-bs-target="#code01-02">예약</button>
											<button class="nav-link px-2" data-bs-toggle="tab" role="tab" aria-selected="false" data-bs-target="#code01-03">코스</button>
											<button class="nav-link px-2" data-bs-toggle="tab" role="tab" aria-selected="false" data-bs-target="#code01-04">요금</button>
											<button class="nav-link px-2" data-bs-toggle="tab" role="tab" aria-selected="false" data-bs-target="#code01-05">부대시설</button>
											<button class="nav-link px-2" data-bs-toggle="tab" role="tab" aria-selected="false" data-bs-target="#code01-06">기타</button>
										</ul>										
									</div>
									
									<div class="modal-body">
										<div class="tab-content">
											<div class="tab-pane fade show active" id="code01-01" role="tabpanel">
												<div class="row">
													<div class="col">
														<div class="card">
															<h5 class="border-bottom py-3 px-3 mb-0">골프장 정보</h3>
															<div class="card-body">
																<div class="row mb-4">
																	<label for="companyName" class="col-auto col-form-label fw-bold info-tit ps-3">회사명</label>

																	<div class="col-10">
																		<div class="row align-items-center mb-2">
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" id="companyName" placeholder="회사명">
																			</div>
																		</div>

																		<div class="row align-items-center">
																			<div class="col-8 ps-0">
																				<div class="input-group">
																					<select class="form-select" required="">
																						<option value="한국">한국</option>
																						<option value="일본" selected="">일본</option>
																						<option value="유럽">유럽</option>
																					</select>
																					<select class="form-select" required="">
																						<option value="도쿄">도쿄</option>
																						<option value="오사카" selected="">오사카</option>
																					</select>
																					<input type="text" class="form-control text-center" value="UTC+09:00" readonly>
																				</div>														
																			</div>
																			<div class="col-2 ps-0">
																				<select class="form-select bordered" required="">
																					<option value="언어 선택" selected="">언어 선택</option>
																					<option value="한국어">한국어</option>
																					<option value="English">English</option>
																					<option value="日本語">日本語</option>
																					<option value="简体中文">简体中文</option>
																					<option value="Tiếng Việt">Tiếng Việt</option>
																				</select>
																			</div>
																			<div class="col-2 ps-0">
																				<select class="form-select bordered" required="">
																					<option value="기본통화" selected="">기본통화</option>
																					<option value="KRW">KRW</option>
																					<option value="USD">USD</option>
																					<option value="JPY">JPY</option>
																					<option value="EUR">EUR</option>
																				</select>		
																			</div>
																		</div>
																	</div>
																</div>

																<div class="row mb-4">
																	<label for="applicantName" class="col-auto col-form-label fw-bold info-tit ps-3">신청자</label>

																	<div class="col-10">
																		<div class="row align-items-center mb-2">
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="신청자 성명">
																			</div>
																		</div>

																		<div class="row align-items-center">
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="전화번호">
																			</div>
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="이메일">
																			</div>
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="휴대폰 번호">
																			</div>
																		</div>
																	</div>
																</div>

																<div class="row mb-4">
																	<label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">담당자</label>

																	<div class="col-10">
																		<div class="row align-items-center mb-2">
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" id="picName" placeholder="담당자 성명">
																			</div>
																			<div class="col-8 text-end ps-0">
																				<div class="form-check-inline me-0">
																					<input class="form-check-input" type="checkbox" id="formCheck1">
																					<label class="form-check-label" for="formCheck1">
																						신청자 정보와 동일
																					</label>
																				</div>
																			</div>
																		</div>

																		<div class="row align-items-center">
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="전화번호">
																			</div>
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="이메일">
																			</div>
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="휴대폰 번호">
																			</div>
																		</div>
																	</div>
																</div>

																<div class="row align-items-center mb-4">
																	<label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">홈페이지 URL</label>

																	<div class="col-10">
																		<div class="row align-items-center">
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="홈페이지 URL">
																			</div>
																			<div class="col-8 text-end ps-0">
																				<div class="form-check-inline me-0">
																					<input class="form-check-input" type="checkbox" id="formCheck2">
																					<label class="form-check-label" for="formCheck2">
																						HP 없음
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="row mb-4">
																	<span class="col-auto col-form-label fw-bold info-tit ps-3">골프장</span>

																	<div class="col-10">
																		<div class="row align-items-center mb-2">
																			<div class="col ps-0">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input courseMultipleRadio" type="radio" name="courseMultipleRadio" id="courseMultipleRadio01" value="단일 골프장" checked="">
																					<label class="form-check-label" for="courseMultipleRadio01">단일 골프장</label>
																				</div>
																				<div class="form-check form-check-inline me-0">
																					<input class="form-check-input courseMultipleRadio" type="radio" name="courseMultipleRadio" id="courseMultipleRadio02" value="다중 골프장">
																					<label class="form-check-label" for="courseMultipleRadio02">다중 골프장(2개 이상의 골프장 동시관리, 운영) :</label>
																				</div>
																				<div class="form-check form-check-inline ps-0">
																					<select class="form-select form-select-lg bg-transparent courseMultipleSelect" disabled>
																						<option value="2개" selected="">2개</option>
																						<option value="3개">3개</option>
																					</select>
																				</div>
																			</div>
																		</div>

																		<div class="row align-items-center mb-2">
																			<div class="col-4 ps-0">
																				<div class="position-relative">
																					<label for="courseName01" class="form-label fw-bold ps-2 ms-1 mb-0 position-absolute top-50 start-0 translate-middle-y">골프장 1</label>
																					<input type="text" class="form-control inputInnerLabel" id="courseName01" placeholder="골프장명">
																				</div>
																			</div>
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="골프장 코드">
																			</div>																			
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="전화번호">
																			</div>
																		</div>

																		<div class="row align-items-center mb-2">
																			<div class="col ps-0">
																				<input type="text" class="form-control" placeholder="골프장 주소">
																			</div>
																		</div>

																		<div class="row align-items-center mb-4">
																			<div class="col-8 ps-0">
																				<div class="filebox">
																					<input class="form-control upload-name" placeholder="사업자등록증/명함" readonly>
																					<input type="file" id="file01">
																				</div>
																			</div>

																			<div class="col-2 ps-0">
																				<label for="file01" class="btn btn-custom mb-0">파일 첨부</label>
																			</div>
																		</div>

																		<div class="row align-items-center mb-2">
																			<div class="col-4 ps-0">
																				<div class="position-relative">
																					<label for="courseName02" class="form-label fw-bold ps-2 ms-1 mb-0 position-absolute top-50 start-0 translate-middle-y">골프장 2</label>
																					<input type="text" class="form-control inputInnerLabel" id="courseName02" placeholder="골프장명">
																				</div>
																			</div>
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="골프장 코드">
																			</div>																				
																			<div class="col-4 ps-0">
																				<input type="text" class="form-control" placeholder="전화번호">
																			</div>
																		</div>

																		<div class="row align-items-center mb-2">
																			<div class="col ps-0">
																				<input type="text" class="form-control" placeholder="골프장 주소">
																			</div>
																		</div>

																		<div class="row align-items-center mb-2">
																			<div class="col-8 ps-0">
																				<div class="filebox">
																					<input class="form-control upload-name" placeholder="사업자등록증/명함" readonly>
																					<input type="file" id="file02">
																				</div>
																			</div>

																			<div class="col-2 ps-0">
																				<label for="file02" class="btn btn-custom mb-0">파일 첨부</label>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--//row -->
											</div>
											<!--//기본정보 -->
											
											<div class="tab-pane fade" id="code01-02" role="tabpanel">
												<div class="row">
													<div class="col-12">
														<div class="card">
															<h5 class="border-bottom py-3 px-3 mb-0">예약 / 취소 규정
																<a href="javascript:void(0);" class="d-inline-block align-text-top" data-bs-toggle="tooltip" title="Default tooltip">
																	<i class="fas fa-question-circle text-secondary align-middle tooltip-ico"></i>
																</a>
															</h5>
																
															<div class="card-body">
																<p class="card-title-desc">
																	<strong>채널이 표시 않는 경우</strong> <a href="#" class="fw-bold text-primary">예약 채널 관리</a>에서 채널을 등록하시면 자동으로 예약채널이 표시됩니다.<br>
																	최소 예약인원은 기본값으로 적용되며 티타임 생성시 티타임별로 각각 최소 예약 인원 설정 가능합니다.
																</p>

																<div class="row">
																	<div class="col-12">
																		<table class="table table-sm table-fixed table-responsive align-middle w-100 text-center nowrap">
																			<colgroup>
																				<col style="width:160px;">	
																				<col style="width:110px;">	
																				<col style="width:auto;">	
																				<col style="width:auto;">	
																				<col style="width:auto;">	

																			</colgroup>

																			<thead>
																				<tr>
																					<th>채널</th>
																					<th>구분</th>
																					<th>예약 가능 시간</th>
																					<th>위약없이 취소 가능일자</th>
																					<th>최소 예약 인원</th>
																				</tr>
																			</thead>

																			<tbody>
																				<tr>
																					<td rowspan="2">홈페이지</td>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="주중" selected="">주중</option>
																							<option value="주말">주말</option>
																						</select>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																								<span class="mx-2"> ~</span>
																							</div>
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																							</div>
																						</div>
																					</td>
																					<td>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																						</div>
																						<span class="me-2">일전</span>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																						</div>
																						<span>까지</span>
																					</td>
																					<td rowspan="2">
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select border-0" required="">
																										<option value="" disabled="" selected="">주중 인원</option>
																										<option value="주중 4인">주중 4인</option>
																										<option value="주중 3인">주중 3인</option>
																										<option value="주중 2인">주중 2인</option>
																										<option value="주중 1일">주중 1인</option>
																									</select>
																								</div>
																								<span>/ </span>
																							</div>
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select border-0" required="">
																										<option value="" disabled="" selected="">주말 인원</option>
																										<option value="주말 4인">주말 4인</option>
																										<option value="주말 3인">주말 3인</option>
																										<option value="주말 2인">주말 2인</option>
																										<option value="주말 1일">주말 1일</option>
																									</select> 
																								</div>
																							</div>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="주중">주중</option>
																							<option value="주말" selected="">주말</option>
																						</select>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																								<span class="mx-2"> ~</span>
																							</div>
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																							</div>
																						</div>
																					</td>
																					<td>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																						</div>
																						<span class="me-2">일전</span>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																						</div>
																						<span>까지</span>
																					</td>
																				</tr>
																				<tr>
																					<td>타임세일</td>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="전체" selected="">전체</option>
																							<option value="주중">주중</option>
																							<option value="주말">주말</option>
																						</select>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																								<span class="mx-2"> ~</span>
																							</div>
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																							</div>
																						</div>
																					</td>
																					<td>타임세일 취소 불가</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select w-auto border-0" required="">
																										<option value="" disabled="" selected="">주중 인원</option>
																										<option value="주중 4인">주중 4인</option>
																										<option value="주중 3인">주중 3인</option>
																										<option value="주중 2인">주중 2인</option>
																										<option value="주중 1인">주중 1인</option>
																									</select>
																								</div>
																								<span>/ </span>
																							</div>
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select w-auto border-0" required="">
																										<option value="" disabled="" selected="">주말 인원</option>
																										<option value="주말 4인">주말 4인</option>
																										<option value="주말 3인">주말 3인</option>
																										<option value="주말 2인">주말 2인</option>
																										<option value="주말 1인">주말 1인</option>
																									</select> 
																								</div>
																							</div>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="C_카카오" selected="">C_카카오</option>
																							<option value="B2B 채널 전체">B2B 채널 전체</option>
																							<option value="B2C 채널 전체">B2C 채널 전체</option>
																						</select>
																					</td>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="전체" selected="">전체</option>
																							<option value="주중">주중</option>
																							<option value="주말">주말</option>
																						</select>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																								<span class="mx-2"> ~</span>
																							</div>
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																							</div>
																						</div>
																					</td>
																					<td>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																						</div>
																						<span class="me-2">일전</span>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																						</div>
																						<span>까지</span>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select border-0" required="">
																										<option value="" disabled="" selected="">주중 인원</option>
																										<option value="주중 4인">주중 4인</option>
																										<option value="주중 3인">주중 3인</option>
																										<option value="주중 2인">주중 2인</option>
																										<option value="주중 1인">주중 1인</option>
																									</select>
																								</div>
																								<span>/ </span>
																							</div>
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select border-0" required="">
																										<option value="" disabled="" selected="">주말 인원</option>
																										<option value="주말 4인">주말 4인</option>
																										<option value="주말 3인">주말 3인</option>
																										<option value="주말 2인">주말 2인</option>
																										<option value="주말 1인">주말 1인</option>
																									</select> 
																								</div>
																							</div>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="C_카카오">C_카카오</option>
																							<option value="B2B 채널 전체" selected="">B2B 채널 전체</option>
																							<option value="B2C 채널 전체">B2C 채널 전체</option>
																						</select>
																					</td>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="전체" selected="">전체</option>
																							<option value="주중">주중</option>
																							<option value="주말">주말</option>
																						</select>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																								<span class="mx-2"> ~</span>
																							</div>
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																							</div>
																						</div>
																					</td>
																					<td>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																						</div>
																						<span class="me-2">일전</span>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																						</div>
																						<span>까지</span>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select border-0" required="">
																										<option value="" disabled="" selected="">주중 인원</option>
																										<option value="주중 4인">주중 4인</option>
																										<option value="주중 3인">주중 3인</option>
																										<option value="주중 2인">주중 2인</option>
																										<option value="주중 1인">주중 1인</option>
																									</select>
																								</div>
																								<span>/ </span>
																							</div>
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select border-0" required="">
																										<option value="" disabled="" selected="">주말 인원</option>
																										<option value="주말 4인">주말 4인</option>
																										<option value="주말 3인">주말 3인</option>
																										<option value="주말 2인">주말 2인</option>
																										<option value="주말 1인">주말 1인</option>
																									</select> 
																								</div>
																							</div>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="C_카카오">C_카카오</option>
																							<option value="B2B 채널 전체">B2B 채널 전체</option>
																							<option value="B2C 채널 전체" selected="">B2C 채널 전체</option>
																						</select>
																					</td>
																					<td>
																						<select class="form-select w-auto border-0 mx-auto">
																							<option value="전체" selected="">전체</option>
																							<option value="주중">주중</option>
																							<option value="주말">주말</option>
																						</select>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																								<span class="mx-2"> ~</span>
																							</div>
																							<div class="d-flex align-items-center">
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																								</div>
																								<span class="me-2">일전</span>
																								<div class="form-check form-check-inline p-0 m-0">
																									<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																								</div>
																							</div>
																						</div>
																					</td>
																					<td>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																						</div>
																						<span class="me-2">일전</span>
																						<div class="form-check form-check-inline p-0 m-0">
																							<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																						</div>
																						<span>까지</span>
																					</td>
																					<td>
																						<div class="d-flex justify-content-center align-items-center flex-wrap gap-1">
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select border-0" required="">
																										<option value="" disabled="" selected="">주중 인원</option>
																										<option value="주중 4인">주중 4인</option>
																										<option value="주중 3인">주중 3인</option>
																										<option value="주중 2인">주중 2인</option>
																										<option value="주중 1인">주중 1인</option>
																									</select>
																								</div>
																								<span>/ </span>
																							</div>
																							<div>
																								<div class="form-check form-check-inline p-0 m-0">
																									<select class="form-select border-0" required="">
																										<option value="" disabled="" selected="">주말 인원</option>
																										<option value="주말 4인">주말 4인</option>
																										<option value="주말 3인">주말 3인</option>
																										<option value="주말 2인">주말 2인</option>
																										<option value="주말 1인">주말 1인</option>
																									</select> 
																								</div>
																							</div>
																						</div>
																					</td>
																				</tr>
																				<tr>
																					<td colspan="100">
																						<button type="button" class="btn btn-lg text-muted border-0 p-0 "><i class="bx bx-plus-circle"></i></button>
																					</td>
																				</tr>
																			</tbody>
																		</table>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												
												<div class="row">
													<div class="col-12">
														<div class="card">
															<h5 class="border-bottom py-3 px-3 mb-0">예약안내
																<a href="javascript:void(0);" class="d-inline-block align-text-top" data-bs-toggle="tooltip" title="Default tooltip">
																	<i class="fas fa-question-circle text-secondary align-middle tooltip-ico"></i>
																</a>
															</h5>
																
															<div class="card-body">
																<div class="row">
																	<div class="col-12">

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>												
											</div>
											<!--//예약 -->
											
											<div class="tab-pane fade" id="code01-03" role="tabpanel">
												<div class="row">
													<div class="col">
														<div class="card">
															<h5 class="border-bottom py-3 px-3 mb-0">코스 기본 정보 
																<a href="javascript:void(0);" class="d-inline-block align-text-top" data-bs-toggle="tooltip" title="Default tooltip">
																	<i class="fas fa-question-circle text-secondary align-middle tooltip-ico"></i>
																</a>
															</h5>

															<div class="card-body">
																<ul class="nav nav-pills mb-3" role="tablist">
																	<li class="nav-item" role="presentation">
																		<a class="nav-link active" data-bs-toggle="tab" href="#golf01" role="tab" aria-selected="true">
																			<span class="d-none d-sm-block">골프장 1</span>
																		</a>
																	</li>
																	<li class="nav-item" role="presentation">
																		<a class="nav-link" data-bs-toggle="tab" href="#golf02" role="tab" aria-selected="false" tabindex="-1">
																			<span class="d-none d-sm-block">골프장 2</span>
																		</a>
																	</li>
																	<li class="nav-item" role="presentation">
																		<a class="nav-link" data-bs-toggle="tab" href="#golf03" role="tab" aria-selected="false" tabindex="-1">
																			<span class="d-none d-sm-block">골프장 3</span>
																		</a>
																	</li>
																</ul>

																<div class="tab-content" id="myTabContent">
																	<div class="tab-pane fade show active" id="golf01" role="tabpanel" aria-labelledby="golf01-tab" tabindex="0">
																		<div class="row align-items-center mb-2">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">홀 수</span>

																			<div class="col-10 info-con ps-0">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio01" value="9홀" checked="">
																					<label class="form-check-label" for="holeNumRadio01">9홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio02" value="18홀">
																					<label class="form-check-label" for="holeNumRadio02">18홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio03" value="27홀">
																					<label class="form-check-label" for="holeNumRadio03">27홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio04" value="36홀">
																					<label class="form-check-label" for="holeNumRadio04">36홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio05" value="45홀">
																					<label class="form-check-label" for="holeNumRadio05">45홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio06" value="54홀">
																					<label class="form-check-label" for="holeNumRadio06">54홀</label>
																				</div>
																				<div class="form-check form-check-inline me-0">
																					<input class="form-check-input holeNumRadio radio_input" type="radio" name="holeNumRadio" id="holeNumRadio07" value="기타">
																					<input type="text" class="form-control input_w90 holeNumEtc" placeholder="기타" disabled="">
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">1코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio01" id="basicCourseRadio01Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio01Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2 me-0">
																							<input class="form-check-input" type="radio" name="basicCourseRadio01" id="basicCourseRadio01Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio01Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">2코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio02" id="basicCourseRadio02Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio02Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio02" id="basicCourseRadio02Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio02Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">3코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio03" id="basicCourseRadio03Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio03Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio02" id="basicCourseRadio03Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio03Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="tab-pane fade" id="golf02" role="tabpanel" aria-labelledby="golf02-tab" tabindex="0">
																		<div class="row align-items-center mb-2">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">홀 수</span>

																			<div class="col-10 info-con ps-0">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio11" value="9홀" checked="">
																					<label class="form-check-label" for="holeNumRadio11">9홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio12" value="18홀">
																					<label class="form-check-label" for="holeNumRadio12">18홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio13" value="27홀">
																					<label class="form-check-label" for="holeNumRadio13">27홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio14" value="36홀">
																					<label class="form-check-label" for="holeNumRadio14">36홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio15" value="45홀">
																					<label class="form-check-label" for="holeNumRadio15">45홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio16" value="54홀">
																					<label class="form-check-label" for="holeNumRadio16">54홀</label>
																				</div>
																				<div class="form-check form-check-inline me-0">
																					<input class="form-check-input holeNumRadio radio_input" type="radio" name="holeNumRadio" id="holeNumRadio17" value="기타">
																					<input type="text" class="form-control input_w90 holeNumEtc" placeholder="기타" disabled="">
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">1코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio01" id="basicCourseRadio11Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio11Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2 me-0">
																							<input class="form-check-input" type="radio" name="basicCourseRadio01" id="basicCourseRadio11Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio11Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">2코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio12" id="basicCourseRadio12Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio12Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio12" id="basicCourseRadio12Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio12Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">3코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio13" id="basicCourseRadio13Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio13Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio02" id="basicCourseRadio13Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio13Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	
																	<div class="tab-pane fade" id="golf03" role="tabpanel" aria-labelledby="golf03-tab" tabindex="0">
																		<div class="row align-items-center mb-2">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">홀 수</span>

																			<div class="col-10 info-con ps-0">
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio01" value="9홀" checked="">
																					<label class="form-check-label" for="holeNumRadio01">9홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio02" value="18홀">
																					<label class="form-check-label" for="holeNumRadio02">18홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio03" value="27홀">
																					<label class="form-check-label" for="holeNumRadio03">27홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio04" value="36홀">
																					<label class="form-check-label" for="holeNumRadio04">36홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio05" value="45홀">
																					<label class="form-check-label" for="holeNumRadio05">45홀</label>
																				</div>
																				<div class="form-check form-check-inline">
																					<input class="form-check-input holeNumRadio" type="radio" name="holeNumRadio" id="holeNumRadio06" value="54홀">
																					<label class="form-check-label" for="holeNumRadio06">54홀</label>
																				</div>
																				<div class="form-check form-check-inline me-0">
																					<input class="form-check-input holeNumRadio radio_input" type="radio" name="holeNumRadio" id="holeNumRadio07" value="기타">
																					<input type="text" class="form-control input_w90 holeNumEtc" placeholder="기타" disabled="">
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">1코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio01" id="basicCourseRadio01Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio01Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2 me-0">
																							<input class="form-check-input" type="radio" name="basicCourseRadio01" id="basicCourseRadio01Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio01Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">2코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio02" id="basicCourseRadio02Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio02Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio02" id="basicCourseRadio02Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio02Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="row mb-1">
																			<span class="col-auto col-form-label fw-bold info-tit ps-3">3코스명 (9홀기준)</span>

																			<div class="col-10 info-con ps-0">
																				<div class="row align-items-center mb-2">
																					<div class="col">
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio03" id="basicCourseRadio03Popular" value="대중제" checked="">
																							<label class="form-check-label" for="basicCourseRadio03Popular">대중제</label>
																						</div>
																						<div class="form-check form-check-inline py-2">
																							<input class="form-check-input" type="radio" name="basicCourseRadio02" id="basicCourseRadio03Member" value="회원제">
																							<label class="form-check-label" for="basicCourseRadio03Member">회원제</label>
																						</div>
																					</div>
																				</div>
																				<div class="row align-items-center mb-2">
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="코스명">
																					</div>
																					<div class="col-6">
																						<input type="text" class="form-control" placeholder="영문">
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

															</div>
														</div>
													</div>
												</div>
												<!--//row -->
												
												<div class="row">
													<div class="col-12">
														<div class="card">
															<h5 class="border-bottom py-3 px-3 mb-0">코스안내
																<a href="javascript:void(0);" class="d-inline-block align-text-top" data-bs-toggle="tooltip" title="Default tooltip">
																	<i class="fas fa-question-circle text-secondary align-middle tooltip-ico"></i>
																</a>
															</h5>
																
															<div class="card-body">
																<div class="row">
																	<div class="col-12">

																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>													

											</div>
											<!--//코스 -->
											
											<div class="tab-pane fade" id="code01-04" role="tabpanel">

											</div>
											<!--//요금 -->
											
											<div class="tab-pane fade" id="code01-05" role="tabpanel">
												<div class="row">
													<div class="col">
														<div class="card">
															<h5 class="border-bottom py-3 px-3 mb-0">부대시설</h3>
															<div class="card-body">
																<div class="row mb-2">
																	<label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">숙박</label>

																	<div class="col-10">
																		<div class="row align-items-center">
																			<div class="col-12 ps-0">
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck11">
																					<label class="form-check-label" for="formCheck11">
																						호텔
																					</label>
																				</div>
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck12">
																					<label class="form-check-label" for="formCheck12">
																						리조트
																					</label>
																				</div>
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck13">
																					<label class="form-check-label" for="formCheck13">
																						골프텔
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="row mb-2">
																	<label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">부대시설</label>

																	<div class="col-10 info-con">
																		<div class="row align-items-center">
																			<div class="col-12 ps-0">
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck21">
																					<label class="form-check-label" for="formCheck21">
																						수영장
																					</label>
																				</div>
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck22">
																					<label class="form-check-label" for="formCheck22">
																						세미나룸
																					</label>
																				</div>
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck23">
																					<label class="form-check-label" for="formCheck23">
																						연회실
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--//row -->
											</div>
											<!--//부대시설 -->
											
											<div class="tab-pane fade" id="code01-06" role="tabpanel">
												<div class="row">
													<div class="col">
														<div class="card">
															<h5 class="border-bottom py-3 px-3 mb-0">기타</h3>
															<div class="card-body">
																<div class="row mb-1">
																	<label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">예약시 알림</label>

																	<div class="col-10">
																		<div class="row align-items-center">
																			<div class="col-12 ps-0">
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck32">
																					<label class="form-check-label" for="formCheck32">
																						이메일
																					</label>
																				</div>
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck33">
																					<label class="form-check-label" for="formCheck33">
																						문자
																					</label>
																				</div>
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck34">
																					<label class="form-check-label" for="formCheck34">
																						카카오톡
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="row">
																	<label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">예약방법</label>

																	<div class="col-10">
																		<div class="row align-items-center">
																			<div class="col-12 ps-0">
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck41">
																					<label class="form-check-label" for="formCheck41">
																						전화
																					</label>
																				</div>
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck42">
																					<label class="form-check-label" for="formCheck42">
																						홈페이지
																					</label>
																				</div>
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck43">
																					<label class="form-check-label" for="formCheck43">
																						팩스
																					</label>
																				</div>														
																				<div class="form-check-inline py-2">
																					<input class="form-check-input" type="checkbox" id="formCheck44">
																					<label class="form-check-label" for="formCheck44">
																						API 연동
																					</label>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!--//row -->
											</div>
											<!--//기타 -->
											
										</div>										
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-custom">수정</button>
										<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">닫기</button>										
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - viewGolfModal -->						

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
			menuActive(3); //OneDepth
			
			$('.courseMultipleRadio').on('click', function() {
			    var valueCheck = $('.courseMultipleRadio:checked').val();

				if (valueCheck == '다중 골프장') {
					$('.courseMultipleSelect').removeAttr('disabled');
					$('.courseMultipleSelect').focus();
				} else {
					$('.courseMultipleSelect').attr('disabled', 'disabled');
				}
			});
			
			$('.holeNumRadio').on('click', function() {
			    var valueCheck = $('.holeNumRadio:checked').val();

				if (valueCheck == '기타') {
					$('.holeNumEtc').removeAttr('disabled');
					$('.holeNumEtc').focus();
				} else {
					$('.holeNumEtc').attr('disabled', 'disabled');
				}
			});
			
			$('.erpRadio').on('click', function() {
			    var valueCheck = $('.erpRadio:checked').val();

				if (valueCheck == '사용중') {
					$('.erpRadioInput').removeAttr('disabled');
					$('.erpRadioInput').focus();
				} else {
					$('.erpRadioInput').attr('disabled', 'disabled');
				}
			});

			$('.reservationNumRadio').on('click', function() {
			    var valueCheck = $('.reservationNumRadio:checked').val();

				if (valueCheck == '기타') {
					$('.reservationNumEtc').removeAttr('disabled');
					$('.reservationNumEtc').focus();
				} else {
					$('.reservationNumEtc').attr('disabled', 'disabled');
				}
			});

			$('.messageRadio').on('click', function() {
			    var valueCheck = $('.messageRadio:checked').val();

				if (valueCheck == '예약발송') {
					$('.messageEtc').removeAttr('disabled');
					$('.messageEtc').focus();
				} else {
					$('.messageEtc').attr('disabled', 'disabled');
				}
			});			
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
