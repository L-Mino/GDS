<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '공통 코드'; include "../partials/title-meta.php"; ?>
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
													<button type="button" class="btn btn-outline-custom"  data-bs-toggle="modal" data-bs-target=".addCodeModal">+ 추가</button>
												</div>
												<div class="tab-code">
													<ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
														<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code01">회원 유형</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code02">회원 등급</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code03">부서 코드</a></li>														
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code04">직급 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code05">직원 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code06">판매처 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code07">그린피 분류</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code08">위약 구분</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code09">위약 사유</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code10">위약 조치</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code11">결제 구분</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code12">결재 방법</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code13">예약 메모</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code14">임시 단체</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code15">내장 인원</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code16">휴장 코드 </a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code17">성수기 (시즌) 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code18">장비</a></li>
													</ul>
												</div>
											</div>

											<div class="code-con-right mb-0">
												<div class="tab-content" id="v-pills-tabContent">
													<!-- <div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">회원 유형</span>
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:100px; width:100px;">
																	<col style="min-width:120px;">
																	<col style="min-width:100px; width:100px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:100px; width:100px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>코드</th>
																		<th>코스명</th>
																		<th>단축코드</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="코스명"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" maxlength="5" placeholder="단축코드"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="10"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>code</td>
																		<td><input class="form-control text-center p-0" type="text" value="EAST IN"></td>
																		<td><input class="form-control text-center p-0" type="text" value="BI"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td><input class="form-control text-center p-0" type="text" value="20"></td>
																		<td><input class="form-control text-center p-0" type="text" value="M"></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>code</td>																		
																		<td><input class="form-control text-center p-0" type="text" value="EAST OUT"></td>																		
																		<td><input class="form-control text-center p-0" type="text" value="BO"></td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td><input class="form-control text-center p-0" type="text" value="30"></td>
																		<td><input class="form-control text-center p-0" type="text" value="M"></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>code</td>																		
																		<td><input class="form-control text-center p-0" type="text" value="WEST IN"></td>																		
																		<td><input class="form-control text-center p-0" type="text" value="CI"></td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td><input class="form-control text-center p-0" type="text" value="40"></td>
																		<td><input class="form-control text-center p-0" type="text" value="M"></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>code</td>																		
																		<td><input class="form-control text-center p-0" type="text" value="WEST OUT"></td>																		
																		<td><input class="form-control text-center p-0" type="text" value="CO"></td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td><input class="form-control text-center p-0" type="text" value="50"></td>
																		<td><input class="form-control text-center p-0" type="text" value="P"></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>																																		
																</tbody>
															</table>
														</div>
													</div> -->

													<div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">회원 유형</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
															<div class="form-check form-check-inline ms-auto me-0">
																<input type="checkbox" class="form-check-input" id="toggleCheck">
																<label class="form-check-label" for="toggleCheck">사용안함 숨기기</label>
															</div>															
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:100px; width:100px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>단축코드</th>																		
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="단축코드"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비 회원</td>
																		<td>P</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>인터넷 회원</td>
																		<td>I</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>임직원</td>
																		<td>S</td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>정회원</td>
																		<td>F</td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>가족 회원</td>
																		<td>f</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>지정 회원</td>
																		<td>D</td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>																	
																</tbody>
															</table>
														</div>
													</div>													

													<div class="tab-pane fade" id="code02" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">회원 등급</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:100px; width:100px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>단축코드</th>																		
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="단축코드"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>일반</td>
																		<td>G</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>VIP</td>
																		<td>V</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>MVP</td>
																		<td>M</td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>BLACK LIST</td>
																		<td>B</td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>																	
																</tbody>
															</table>
														</div>
													</div>
													
													<div class="tab-pane fade" id="code03" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">부서 코드</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>프론트</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>예약실</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>경기팀</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>코스관리</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>식음</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>프로샵</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>용역</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>													

													<div class="tab-pane fade" id="code04" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">직급 코드</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>대표이사</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>부사장</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>전무이사</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>상무이사</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>이사</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>부장</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>차장</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>과장</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>8</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>대리</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>9</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>사원</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>10</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>인턴</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>11</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>계약직</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>12</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code05" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">직원 코드</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0" data-simplebar>
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:100px;">
																	<col style="min-width:100px;">
																	<col style="min-width:150px;">
																	<col style="min-width:150px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>부서</th>																		
																		<th>직급</th>																		
																		<th>이메일</th>																		
																		<th>휴대폰</th>																		
																		<th>정렬</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="부서 선택" checked disabled>부서 선택</option>
																				<option value="프론트">프론트</option>
																				<option value="예약실">예약실</option>
																				<option value="경기팀">경기팀</option>
																				<option value="코스관리">코스관리</option>
																				<option value="식음">식음</option>
																				<option value="프로샵">프로샵</option>
																				<option value="용역">용역</option>
																			</select>
																		</td>																		
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="직급 선택" checked disabled>직급 선택</option>
																				<option value="대표이사">대표이사</option>
																				<option value="부사장">부사장</option>
																				<option value="전무이사">전무이사</option>
																				<option value="상무이사">상무이사</option>
																				<option value="이사">이사</option>
																				<option value="부장">부장</option>
																				<option value="차장">차장</option>
																				<option value="과장">과장</option>
																				<option value="대리">대리</option>
																				<option value="사원">사원</option>
																				<option value="인턴">인턴</option>
																				<option value="계약직">계약직</option>
																			</select>
																		</td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="이메일"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="휴대폰"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>홍길동</td>
																		<td><input class="form-check-input" type="checkbox"></td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="프론트" checked>프론트</option>
																				<option value="예약실">예약실</option>
																				<option value="경기팀">경기팀</option>
																				<option value="코스관리">코스관리</option>
																				<option value="식음">식음</option>
																				<option value="프로샵">프로샵</option>
																				<option value="용역">용역</option>
																			</select>
																		</td>																		
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="대표이사" checked>대표이사</option>
																				<option value="부사장">부사장</option>
																				<option value="전무이사">전무이사</option>
																				<option value="상무이사">상무이사</option>
																				<option value="이사">이사</option>
																				<option value="부장">부장</option>
																				<option value="차장">차장</option>
																				<option value="과장">과장</option>
																				<option value="대리">대리</option>
																				<option value="사원">사원</option>
																				<option value="인턴">인턴</option>
																				<option value="계약직">계약직</option>
																			</select>
																		</td>																		
																		<td>abcderer@gmail.com</td>
																		<td>010-1234-1224</td>
																		<td>1</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>																	
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code06" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">판매처 코드</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>대식당</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>스타트</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>그늘집</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>프로샵</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code07" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">그린피 분류</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>18홀</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>9홀</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>27홀</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>36홀</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>무제한</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>18홀 추가</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>9홀 추가</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code08" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">위약 구분</span>
															<!--span class="mx-2">-</span>
															<span>식음, 용품 등 내장객 대상 판매업장</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>정상취소</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>우천취소</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>N</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>1일전 취소</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>2일전 취소</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>3일전 취소</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>4일전 취소</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code09" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">위약 사유</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>우천 취소</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>개인 사정</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>일정 변경</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>사고</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>기타</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code10" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">위약 조치</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:100px;">
																	<col style="min-width:100px;">
																	<col style="min-width:100px;">																	
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>위약기간</th>
																		<th>위약금</th>
																		<th>위약퍼센트</th>																			
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="위약기간"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="위약금"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="위약퍼센트"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>위약금 30%</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td></td>
																		<td></td>
																		<td>30%</td>																		
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>위약금 50%</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td></td>
																		<td></td>																		
																		<td>50%</td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>예약금지 1M</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1M</td>
																		<td></td>
																		<td></td>																		
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>예약금지 2M</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2M</td>
																		<td></td>
																		<td></td>																		
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>예약금지 3M</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3M</td>
																		<td></td>
																		<td></td>																		
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>위약금 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td></td>
																		<td>100,000</td>
																		<td></td>
																		<td>6</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>위약금 20</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td></td>
																		<td>200,000</td>
																		<td></td>																		
																		<td>7</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>위약금 30</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td></td>
																		<td>300,000</td>
																		<td></td>																		
																		<td>7</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>													

													<div class="tab-pane fade" id="code11" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">결제 구분</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>선불</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>																		
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>																		
																	</tr>
																	<tr>
																		<td>후불</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>																		
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>																		
																	</tr>
																	<tr>
																		<td>미수</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>																		
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>																		
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code12" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">결재 방법</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>카드</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>																		
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>																		
																	</tr>
																	<tr>
																		<td>현금</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>																		
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>																		
																	</tr>
																	<tr>
																		<td>마일리지</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>																		
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>																		
																	</tr>
																	<tr>
																		<td>쿠폰</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>																		
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>																		
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code13" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">예약 메모</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>

														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:100px; width:100px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>단축코드</th>																		
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="단축코드"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>커피 무료</td>
																		<td>COF4</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>2박3일</td>
																		<td>PG/3</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>VVIP</td>
																		<td>VVIP</td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code14" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">임시 단체</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:100px; width:100px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>단축코드</th>																		
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="단축코드"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>임시단체 1</td>
																		<td>임시1</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>임시단체 2</td>
																		<td>임시2</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>임시단체 3</td>
																		<td>임시3</td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code15" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">내장 인원</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:100px; width:100px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>단축코드</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" maxlength="5" placeholder="단축코드"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>4인 필수</td>
																		<td>4</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>3인 이상</td>
																		<td>3</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>																	
																	<tr>
																		<td>2인 이상</td>
																		<td>2</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>																	
																	<tr>
																		<td>1인 가능</td>
																		<td>1</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>																	
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code16" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">휴장 코드</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>단체팀명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>회원의 날</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>프로 대회</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>대회</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>																	
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code17" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">성수기 (시즌) 코드</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>극성수기</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>성수기</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>비수기</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code18" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">장비</span>
															<!--span class="mx-2">-</span>
															<span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분명</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
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
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addCodeModalLabel">대분류 코드 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="border-box">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:120px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th class="text-end">사업장</th>
														<td>
															<div class="dropdown d-inline-block align-top">
																<button class="btn dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="true">사업장 선택 <i class="mdi mdi-chevron-down"></i></button>
																<ul class="dropdown-menu dropdown-menu-dark select_course" data-popper-placement="bottom-start">
																	<li>
																		<div class="dropdown-item">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="checkbox" id="select_golf01" value="전체">
																				<label class="form-check-label w-100" for="select_golf01">사업장 전체</label>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="dropdown-item">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="checkbox" id="select_golf02" value="춘천">
																				<label class="form-check-label w-100" for="select_golf02">춘천</label>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="dropdown-item">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="checkbox" id="select_golf03" value="포천">
																				<label class="form-check-label w-100" for="select_golf03">포천</label>
																			</div>
																		</div>
																	</li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<th class="text-end">대분류명</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end">대분류 설명</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end border-0">정렬 순서</th>
														<td class="border-0">
															<input type="text" class="form-control">
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
