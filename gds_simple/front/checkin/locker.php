<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '락카 배치표'; include "../../partials/title-meta.php"; ?>
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
										<div class="d-flex mb-4">
											<h4 class="card-title">락카 배치표</h4>
											<button type="button" class="btn btn-custom ms-auto">저장</button>
										</div>

										<div class="row">
											<div class="col-6">
												<table class="table table-layout-fixed text-center mb-0">
													<colgroup>
														<col style="width:110px;">
														<col style="width:auto;">
														<col style="width:110px;">
														<col style="width:auto;">
													</colgroup>

													<thead class="table-blue">
														<tr>
															<th colspan="4">남자</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-bg-gray">
															<th>락카 시작번호</th>
															<td><input class="form-control text-center p-0" type="text" placeholder="시작번호"></td>
															<th>락카 종료번호</th>
															<td><input class="form-control text-center p-0" type="text" placeholder="종료번호"></td>
														</tr>
													</tbody>
												</table>

												<div class="d-flex justify-content-center my-3">
													<p class="text-center m-0"><button type="button" class="btn btn-outline-custom"><i class="bx bxs-down-arrow"></i> 생성</button></p>

													<div class="btn-group position-absolute end-0 me-3">
														<div class="btn-group">
															<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">락카 구분 변경</button>
															<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">일반</button></li>
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">VIP</button></li>
															</ul>
														</div>

														<div class="btn-group">
															<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">락카 상태 변경</button>
															<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">사용중</button></li>
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">대기</button></li>
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">사용불가</button></li>
															</ul>
														</div>
													</div>
												</div>

												<table class="table text-center mb-0">
													<colgroup>
														<col style="width:40px;">
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="min-width:70px; width:70px;">
													</colgroup>

													<thead>
														<tr class="table-bg-gray">
															<th><input class="form-check-input" type="checkbox" name="tableCheckAll"></th>
															<th>락카번호</th>
															<th>구분
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">일반</button></li>
																		<li><button type="button" class="dropdown-item">VIP</button></li>
																	</ul>
																</div>
															</th>
															<th>발급순서</th>
															<th>상태
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">사용중</button></li>
																		<li><button type="button" class="dropdown-item">대기</button></li>
																		<li><button type="button" class="dropdown-item">사용불가</button></li>
																	</ul>
																</div>
															</th>
															<th>비고</th>
															<th>저장</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0001</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="1"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0002</td>
															<td>VIP</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0003</td>
															<td>VIP</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0004</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="2"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0005</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="3"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0006</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0007</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0008</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="4"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0009</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0010</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0011</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0012</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0013</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0014</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0015</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0016</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0017</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0018</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0019</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0020</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="해당없음"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text" value="VIP"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0021</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="해당없음"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text" value="VIP"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0022</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="해당없음"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text" value="VIP"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0023</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="해당없음"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text" value="VIP"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0024</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="해당없음"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text" value="VIP"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0025</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="해당없음"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text" value="VIP"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0026</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="해당없음"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text" value="VIP"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0027</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="해당없음"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text" value="VIP"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
													</tbody>
												</table>
											</div>

											<div class="col-6">
												<table class="table table-layout-fixed text-center mb-0">
													<colgroup>
														<col style="width:110px;">
														<col style="width:auto;">
														<col style="width:110px;">
														<col style="width:auto;">
													</colgroup>

													<thead class="table-red">
														<tr>
															<th colspan="4">여자</th>
														</tr>
													</thead>

													<tbody>
														<tr class="table-bg-gray">
															<th>락카 시작번호</th>
															<td><input class="form-control text-center p-0" type="text" placeholder="시작번호"></td>
															<th>락카 종료번호</th>
															<td><input class="form-control text-center p-0" type="text" placeholder="종료번호"></td>
														</tr>
													</tbody>
												</table>

												<div class="d-flex justify-content-center my-3">
													<p class="text-center m-0"><button type="button" class="btn btn-outline-custom"><i class="bx bxs-down-arrow"></i> 생성</button></p>

													<div class="btn-group position-absolute end-0 me-3">
														<div class="btn-group">
															<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">락카 구분 변경</button>
															<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">일반</button></li>
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">VIP</button></li>
															</ul>
														</div>

														<div class="btn-group">
															<button type="button" class="btn btn-outline-custom" data-bs-toggle="dropdown" aria-expanded="false">락카 상태 변경</button>
															<ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end">
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">사용중</button></li>
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">대기</button></li>
																<li><button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target=".modifyModal" onclick="modifyModal(this)">사용불가</button></li>
															</ul>
														</div>
													</div>
												</div>

												<table class="table text-center mb-0">
													<colgroup>
														<col style="width:40px;">
														<col style="width:70px;">
														<col style="width:70px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="min-width:70px; width:70px;">
													</colgroup>

													<thead>
														<tr class="table-bg-gray">
															<th><input class="form-check-input" type="checkbox" name="tableCheckAll"></th>
															<th>락카번호</th>
															<th>구분
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">일반</button></li>
																		<li><button type="button" class="dropdown-item">VIP</button></li>
																	</ul>
																</div>
															</th>
															<th>발급순서</th>
															<th>상태
																<div class="dropdown d-inline-block">
																	<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																	<ul class="dropdown-menu dropdown-menu-dark">
																		<li><button type="button" class="dropdown-item">사용중</button></li>
																		<li><button type="button" class="dropdown-item">대기</button></li>
																		<li><button type="button" class="dropdown-item">사용불가</button></li>
																	</ul>
																</div>
															</th>
															<th>비고</th>
															<th>저장</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0001</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text" value="1"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기">대기</option>
																	<option value="사용중" selected>사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0002</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0003</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0004</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0005</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0006</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0007</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0008</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0009</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0010</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0011</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0012</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0013</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0014</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0015</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0016</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0017</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0018</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0019</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0020</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0021</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0022</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0023</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0024</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0025</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0026</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td><button type="button" class="btn btn-outline-custom">저장</button></td>
														</tr>
														<tr>
															<td><input class="form-check-input" type="checkbox" name="tableCheck"></td>
															<td>0027</td>
															<td>일반</td>
															<td><input class="form-control text-center p-0" type="text"></td>
															<td>
																<select class="form-select form-select-sm w-auto mx-auto">
																	<option value="대기" selected>대기</option>
																	<option value="사용중">사용중</option>
																	<option value="사용불가">사용불가</option>
																</select>
															</td>
															<td><input class="form-control text-center p-0" type="text"></td>
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
		                <!--//row -->

						<div class="modal fade modifyModal" tabindex="-1" aria-labelledby="modifyModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-body">
										<p class="text-center font-size-14 fw-semibold pt-4 mb-0">선택된 <span class="modifyNum align-top"></span>개 락카의 상태를<br><span class="modifyTxt align-top"></span>(으)로 변경합니다.</p>
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
		                <!--//modal - modifyModal -->

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

		var modifyNum;
		var modifyTxt;

		function modifyModal(element) {
			modifyNum = $('input:checkbox[name=tableCheck]:checked').length;
			modifyTxt = $(element).text();

			$('.modifyNum').text(modifyNum)
			$('.modifyTxt').text(modifyTxt)
		}
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
