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
													<span class="code-title">상품 코드 분류</span>
													<button type="button" class="btn btn-outline-custom"  data-bs-toggle="modal" data-bs-target=".addCodeModal">+ 추가</button>
												</div>
												<div class="tab-code">
													<ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
														<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code01">캐디 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code02">카트 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code03">식사 코드</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code04">음료 코드</a></li>														
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code05">주류 코드</a></li>																												
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code06">대여 용품</a></li>																												
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code07">프로샵 용품</a></li>																												
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code08">숙박</a></li>																												
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code09">송영</a></li>																												
													</ul>
												</div>
											</div>

											<div class="code-con-right mb-0">
												<div class="tab-content" id="v-pills-tabContent">
													<div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">캐디 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
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
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>단축코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="단축코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr> 
																	<tr>
																		<td>일반 캐디</td>
																		<td>C</td>
																		<td>150,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>신입 캐디</td>
																		<td>J</td>
																		<td>120,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>프로 캐디</td>
																		<td>P</td>
																		<td>180,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>노캐디</td>
																		<td>N</td>
																		<td>0</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>지정 캐디</td>
																		<td>A</td>
																		<td>200,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>드라이빙캐디</td>
																		<td>D</td>
																		<td>80,000</td>
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
															<span class="code-title">카트 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:100px; width:100px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>단축코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="단축코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>5인승 전동카트</td>
																		<td>5P</td>
																		<td>100,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>2인승 전동 카트</td>
																		<td>2P</td>
																		<td>60,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>1인 수동 카트</td>
																		<td>1H</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>무료 카트</td>
																		<td>0C</td>
																		<td>0</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>No 카트</td>
																		<td>Nc</td>
																		<td>0</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code03" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">식사 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>조식</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>중식</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>석식</td>
																		<td>20,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>갈비탕</td>
																		<td>18,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>육계장</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>샌드위치</td>
																		<td>10,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>
													
													<div class="tab-pane fade" id="code04" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">음료 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>콜라</td>
																		<td>7,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>아메리카노</td>
																		<td>10,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>카페라테</td>
																		<td>12,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>사이다</td>
																		<td>7,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code05" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">주류 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>캔맥주</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>생맥주 350ml</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>소주-처음처럼</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>소주-참이슬</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code06" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">대여 용품</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>골프화 18H</td>
																		<td>50,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>골프화 9H</td>
																		<td>30,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>골프클럽 18H</td>
																		<td>50,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>골프클럽 9H</td>
																		<td>30,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code07" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">프로샵 용품</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>풀세트</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>아이언</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>골프공</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code08" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">숙박</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>골프텔 2인실</td>
																		<td>150,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>골프텔 1인실</td>
																		<td>120,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>골프텔 4인실</td>
																		<td>250,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code09" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">송영</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>
														<div class="table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:90px;">																	
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:60px; width:60px;">
																	<col style="min-width:200px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상품코드</th>
																		<th>가격</th>
																		<th>사용안함</th>
																		<th>정렬</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상품코드"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>																		
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>리무진 공항 픽업</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>리우진 공항 배웅</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>중형 택시 픽업</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
																	</tr>
																	<tr>
																		<td>중형 택시 배웅</td>
																		<td>15,000</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td></td>
																		<td><button type="button" class="btn btn-outline-custom">수정</button></td>
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
