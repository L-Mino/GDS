<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '홀별 정산'; include "../partials/title-meta.php"; ?>
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
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code02">21.05.21 (일)</a></li>
													</ul>
												</div>
											</div>

											<div class="code-con-right type02 mb-0">
												<div class="tab-content" id="v-pills-tabContent">
													<div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">홀별 정산</span>
															<button type="button" class="btn btn-outline-custom ms-auto">전체 저장</button>															
														</div>
														
														<div class="table-responsive table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:200px;">
																	<col style="min-width:100px;">
																	<col style="min-width:100px;">
																	<col style="min-width:100px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분</th>
																		<th>그린피
																			<div class="form-check form-check-inline p-0 m-0">
																				<select class="form-select w-auto py-0 mx-auto">
																					<option value="%" selected>%</option>
																					<option value="₩">₩</option>
																				</select>
																			</div>
																		</th>
																		<th>카트피
																			<div class="form-check form-check-inline p-0 m-0">
																				<select class="form-select w-auto py-0 mx-auto">
																					<option value="%" selected>%</option>
																					<option value="₩">₩</option>
																				</select>
																			</div>																		
																		</th>
																		<th>캐디피
																			<div class="form-check form-check-inline p-0 m-0">
																				<select class="form-select w-auto py-0 mx-auto">
																					<option value="%">%</option>
																					<option value="₩" selected>₩</option>
																				</select>
																			</div>																		
																		</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td>1 Hole 티샷 전</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="무료"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="무료"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="무료"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>1 Hole 티샷 ~ Hole Out 전</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="10"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="10"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="10"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>1 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="20"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="20"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="20"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>2 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="25"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="25"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="25"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>3 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="30"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="30"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="30"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>4 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="35"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="35"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="35"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>5 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>6 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>7 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="45"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="45"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="45"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>8 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>9 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>10 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="60"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="60"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="60"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>11 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="65"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="65"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="65"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>12 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="70"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="70"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="70"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>13 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="75"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="75"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="75"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>14 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="80"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="80"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="80"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>15 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="85"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="85"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="85"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>16 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="90"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="90"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="90"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>17 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="95"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="95"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="95"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>18 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="100"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="100"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="100"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																	
																</tbody>
															</table>
														</div>
													</div>

													<div class="tab-pane fade" id="code02" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">홀별 정산</span>
															<button type="button" class="btn btn-outline-custom ms-auto">전체 저장</button>															
														</div>
														
														<div class="table-responsive table-fixed-head card h-100 mb-0">
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:200px;">
																	<col style="min-width:100px;">
																	<col style="min-width:100px;">
																	<col style="min-width:100px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>구분</th>
																		<th>그린피
																			<div class="form-check form-check-inline p-0 m-0">
																				<select class="form-select w-auto py-0 mx-auto">
																					<option value="%" selected>%</option>
																					<option value="₩">₩</option>
																				</select>
																			</div>
																		</th>
																		<th>카트피
																			<div class="form-check form-check-inline p-0 m-0">
																				<select class="form-select w-auto py-0 mx-auto">
																					<option value="%" selected>%</option>
																					<option value="₩">₩</option>
																				</select>
																			</div>																		
																		</th>
																		<th>캐디피
																			<div class="form-check form-check-inline p-0 m-0">
																				<select class="form-select w-auto py-0 mx-auto">
																					<option value="%">%</option>
																					<option value="₩" selected>₩</option>
																				</select>
																			</div>																		
																		</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td>1 Hole 티샷 전</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="무료"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="무료"></div> %</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="무료"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>1 Hole 티샷 ~ Hole Out 전</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="10"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="10"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="10"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>1 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="20"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="20"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="20"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>2 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="25"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="25"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="25"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>3 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="30"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="30"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="30"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>4 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="35"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="35"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="35"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>5 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>6 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="40"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>7 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="45"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="45"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="45"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>8 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>9 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="50"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>10 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="60"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="60"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="60"></div> ₩</td>																		
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>11 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="65"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="65"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="65"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>12 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="70"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="70"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="70"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>13 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="75"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="75"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="75"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>14 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="80"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="80"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="80"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>15 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="85"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="85"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="85"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>16 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="90"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="90"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="90"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>17 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="95"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="95"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="95"></div> ₩</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>18 Hole Out</td>
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="100"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="100"></div> %</td>																		
																		<td><div class="form-check form-check-inline p-0 m-0"><input class="form-control text-center input_w70 p-0" type="text" value="100"></div> ₩</td>
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
														<td><input type="text" class="form-control datepicker w-100"></div> %</td>
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
										<button type="button" class="btn btn-outline-custom">등록</button>
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
