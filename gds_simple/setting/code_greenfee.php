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
										<div class="d-flex">
											<div class="code-con-left">
												<div class="d-flex justify-content-between align-items-center mb-3">
													<span class="code-title">적용 일자</span>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".addCodeModal">+ 추가</button>
												</div>
												<div class="tab-code">
													<ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
														<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code01">23.05.22 (월)</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code02">23.05.21 (일)</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code03">23.05.20 (토)</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code04">23.05.19 (금)</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code05">23.05.18 (목)</a></li>
													</ul>
												</div>
											</div>

											<div class="code-con-right mb-0">
												<div class="tab-content" id="v-pills-tabContent">
													<div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">그린피 설정</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
															<button type="button" class="btn btn-outline-custom ms-auto">전체 저장</button>															
														</div>

														<div class="table-fixed-head card h-100 mb-0" data-simplebar>
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:120px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:70px; width:70px;">
																	<col style="min-width:100px; width:100px;">
																	<col style="min-width:90px;">
																	<col style="min-width:130px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>그린피 설정 코드</th>
																		<th>그린피 분류</th>
																		<th>기본값</th>
																		<th>사용안함</th>
																		<th>가격</th>
																		<th>비고</th>
																		<th>등록/수정일</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀" selected>18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" disabled></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text"></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>18h-14</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀" selected>18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio01"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>140,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>18h-15</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀" selected>18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio01"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>150,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>18h-16</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀" selected>18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio01" checked></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>160,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>18h-17</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀" selected>18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio01"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>170,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>18h-18</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀" selected>18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio01"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>180,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	
																	<tr>
																		<td>9h-7</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀" selected>9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio02"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>70,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>9h-8</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀" selected>9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio02" checked></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>80,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>9h-9</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀" selected>9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio02"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>90,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>

																	<tr>
																		<td>+18h_14</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가" selected>18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio03"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>140,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>+18h_15</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가" selected>18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio03" checked></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>150,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>+18h_16</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가" selected>18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio03"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>160,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>+18h_17</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가" selected>18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio03"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>170,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>+18h_18</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가" selected>18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio03"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>180,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>

																	<tr>
																		<td>+9h_7</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가" selected>9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio04" checked></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>70,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>+9h_8</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가" selected>9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio04"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>80,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>+9h_9</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한">무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가" selected>9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio04"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>90,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>

																	<tr>
																		<td>무제한_18</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한" selected>무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio05" checked></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>180,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>무제한_19</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한" selected>무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio05"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>190,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>무제한_20</td>
																		<td>
																			<select class="form-select form-select-center ps-0">
																				<option value="18홀">18홀</option>
																				<option value="9홀">9홀</option>
																				<option value="27홀">27홀</option>
																				<option value="36홀">36홀</option>
																				<option value="무제한" selected>무제한</option>
																				<option value="18홀 추가">18홀 추가</option>
																				<option value="9홀 추가">9홀 추가</option>
																			</select>
																		</td>
																		<td><input class="form-check-input" type="radio" name="radio05"></td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>200,000</td>
																		<td></td>
																		<td><span data-bs-toggle="tooltip" data-bs-custom-class="tooltip-sm" data-bs-placement="top" title="ID : 110SADA / IP : 192.123.324.121">23.05.18 12:00:45</span></td>
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
														<th class="text-end">적용일자</th>
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
