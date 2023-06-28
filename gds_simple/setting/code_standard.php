<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '상품 코드'; include "../partials/title-meta.php"; ?>
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
														<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code01">식음 상품 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code02">프로샵 골프 용품 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code03">대여 용품 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code04">카트 코드</a></li>														
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code05">캐디 코드</a></li>																												
													</ul>
												</div>
											</div>

											<div class="code-con-right mb-0">
												<div class="tab-content" id="v-pills-tabContent">
													<div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">식음 상품 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-responsive table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																		
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>합계</th>
																		<th>공급가</th>
																		<th>부가세</th>																		
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>조식 뷔페</td>
																		<td>15,000</td>
																		<td></td>
																		<td></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>중식</td>
																		<td>18,000</td>
																		<td></td>
																		<td></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>석식</td>
																		<td>18,000</td>																		
																		<td></td>
																		<td></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>아메리카노</td>
																		<td>8,000</td>																		
																		<td></td>
																		<td></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																	
																	<tr>
																		<td>갈비정식</td>
																		<td></td>
																		<td></td>
																		<td></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>육계장</td>
																		<td></td>
																		<td></td>
																		<td></td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>고등어 구이</td>
																		<td></td>
																		<td></td>
																		<td></td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>돈까스</td>
																		<td></td>
																		<td></td>
																		<td></td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>소고기 전골</td>
																		<td></td>
																		<td></td>
																		<td></td>																		
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code02" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">프로샵 골프 용품 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-responsive table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																		
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>합계</th>
																		<th>공급가</th>
																		<th>부가세</th>
																		<th>사용안함</th>
																		<th>정렬순서</th>																		
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>풀세트</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>아이언</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>골프공</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code03" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">대여 용품 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-responsive table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>합계</th>
																		<th>공급가</th>
																		<th>부가세</th>																		
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																			
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>골프화 18</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>골프화 9</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>골프클럽 18</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>골프클럽 9</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>모자 18</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>모자 9</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>의류 18</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>의류 9</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>8</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													
													<div class="tab-pane fade" id="code04" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">카트 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-responsive table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:100px; width:100px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>단축코드</th>																		
																		<th>합계</th>
																		<th>공급가</th>
																		<th>부가세</th>																		
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" maxlength="5" placeholder="단축코드"></td>																			
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																			
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>5인승 전동 카트</td>
																		<td>5p</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>2인승 전동 카트</td>
																		<td>2p</td>																		
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>카트 선택 가능</td>
																		<td>cc</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>수동 카트</td>
																		<td>ma</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>카트 없음</td>
																		<td>cn</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																	
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code05" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">캐디 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-responsive table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>단축코드</th>																		
																		<th>합계</th>
																		<th>공급가</th>
																		<th>부가세</th>																		
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="단축코드"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																			
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>일반 캐디</td>
																		<td>B</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>신입 캐디</td>
																		<td>J</td>
																		<td></td>
																		<td></td>																			
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>프로 캐디</td>
																		<td>P</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>Y</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>노 캐디</td>
																		<td>N</td>
																		<td></td>
																		<td></td>
																		<td></td>																			
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>Y</td>
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
										<h5 class="modal-title" id="bookingModalLabel">대분류 코드등록</h5>
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
															<select class="form-select form-select-sm">
																<option value="포천" selected>포천</option>
																<option value="춘천">춘천</option>
															</select>
														</td>
													</tr>
													<tr>
														<th class="text-end">대분류코드</th>
														<td>
															<input type="text" class="form-control form-control-sm">
														</td>
													</tr>
													<tr>
														<th class="text-end">대분류명</th>
														<td>
															<input type="text" class="form-control form-control-sm">
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
