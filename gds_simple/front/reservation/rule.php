<?php include "../../partials/main.php"; ?>

    <head>
		<?php $title = '예약 / 취소 규정'; include "../../partials/title-meta.php"; ?>
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
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<div class="d-flex flex-wrap gap-2 mb-3">
											<h4 class="card-title me-auto">예약 / 취소 규정</h4>
											<button type="button" class="btn btn-outline-custom">저장</button>
										</div>
										<p class="card-title-desc">
											<strong>채널이 표시 않는 경우</strong> <a href="#" class="fw-bold text-primary">예약 채널 관리</a>에서 채널을 등록하시면 자동으로 예약채널이 표시됩니다.<br>
											최소 예약인원은 기본값으로 적용되며 티타임 생성시 티타임별로 각각 최소 예약 인원 설정 가능합니다.
                                        </p>

										<div class="row">
											<div class="col-12">
												<table class="table table-fixed table-responsive w-100 text-center nowrap">
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
                                                            <td rowspan="3">홈페이지</td>
                                                            <td class="border-bottom-0">주중</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
																<span>까지</span>
															</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="주중 인원" disabled selected>주중 인원</option>
																		<option value="주중 4인">주중 4인</option>
																		<option value="주중 3인">주중 3인</option>
																		<option value="주중 2인">주중 2인</option>
																		<option value="주중 1일">주중 1인</option>
																	</select>
																</div>
															</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0">주말</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
																<span>까지</span>
															</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="주말 인원" disabled selected>주말 인원</option>
																		<option value="주말 4인">주말 4인</option>
																		<option value="주말 3인">주말 3인</option>
																		<option value="주말 2인">주말 2인</option>
																		<option value="주말 1일">주말 1인</option>
																	</select>
																</div>
															</td>															
                                                        </tr>
														<tr>
                                                            <td>공휴일</td>
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
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="공휴일 인원" disabled selected>공휴일 인원</option>
																		<option value="공휴일 4인">공휴일 4인</option>
																		<option value="공휴일 3인">공휴일 3인</option>
																		<option value="공휴일 2인">공휴일 2인</option>
																		<option value="공휴일 1일">공휴일 1인</option>
																	</select>
																</div>
															</td>															
                                                        </tr>			

                                                        <tr>
                                                            <td rowspan="3">타임세일</td>
                                                            <td class="border-bottom-0">주중</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">타임세일 취소 불가</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select w-auto border-0" required>
																		<option value="" disabled selected>주중 인원</option>
																		<option value="주중 4인">주중 4인</option>
																		<option value="주중 3인">주중 3인</option>
																		<option value="주중 2인">주중 2인</option>
																		<option value="주중 1인">주중 1인</option>
																	</select>
																</div>
															</td>
                                                        </tr>
														<tr>
                                                            <td class="border-bottom-0">주말</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">타임세일 취소 불가</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select w-auto border-0" required>
																		<option value="주말 인원" disabled selected>주말 인원</option>
																		<option value="주말 4인">주말 4인</option>
																		<option value="주말 3인">주말 3인</option>
																		<option value="주말 2인">주말 2인</option>
																		<option value="주말 1인">주말 1인</option>
																	</select>
																</div>
															</td>
                                                        </tr>
														<tr>
                                                            <td>공휴일</td>
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
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select w-auto border-0" required>
																		<option value="공휴일 인원" disabled selected>공휴일 인원</option>
																		<option value="공휴일 4인">공휴일 4인</option>
																		<option value="공휴일 3인">공휴일 3인</option>
																		<option value="공휴일 2인">공휴일 2인</option>
																		<option value="공휴일 1인">공휴일 1인</option>
																	</select>
																</div>
															</td>
                                                        </tr>														

                                                        <tr>
                                                            <td rowspan="3">
																<select class="form-select w-auto border-0 mx-auto">
																	<option value="C_카카오" selected>C_카카오</option>
																	<option value="B2B 채널 전체">B2B 채널 전체</option>
																	<option value="B2C 채널 전체">B2C 채널 전체</option>
																</select>
															</td>
                                                            <td class="border-bottom-0">주중</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
																<span>까지</span>
															</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="주중 인원" disabled selected>주중 인원</option>
																		<option value="주중 4인">주중 4인</option>
																		<option value="주중 3인">주중 3인</option>
																		<option value="주중 2인">주중 2인</option>
																		<option value="주중 1일">주중 1인</option>
																	</select>
																</div>
															</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0">주말</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
																<span>까지</span>
															</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="주말 인원" disabled selected>주말 인원</option>
																		<option value="주말 4인">주말 4인</option>
																		<option value="주말 3인">주말 3인</option>
																		<option value="주말 2인">주말 2인</option>
																		<option value="주말 1일">주말 1인</option>
																	</select>
																</div>
															</td>															
                                                        </tr>
														<tr>
                                                            <td>공휴일</td>
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
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="공휴일 인원" disabled selected>공휴일 인원</option>
																		<option value="공휴일 4인">공휴일 4인</option>
																		<option value="공휴일 3인">공휴일 3인</option>
																		<option value="공휴일 2인">공휴일 2인</option>
																		<option value="공휴일 1일">공휴일 1인</option>
																	</select>
																</div>
															</td>															
                                                        </tr>

                                                        <tr>
                                                            <td rowspan="3">
																<select class="form-select w-auto border-0 mx-auto">
																	<option value="C_카카오">C_카카오</option>
																	<option value="B2B 채널 전체" selected>B2B 채널 전체</option>
																	<option value="B2C 채널 전체">B2C 채널 전체</option>
																</select>
															</td>
                                                            <td class="border-bottom-0">주중</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
																<span>까지</span>
															</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="주중 인원" disabled selected>주중 인원</option>
																		<option value="주중 4인">주중 4인</option>
																		<option value="주중 3인">주중 3인</option>
																		<option value="주중 2인">주중 2인</option>
																		<option value="주중 1일">주중 1인</option>
																	</select>
																</div>
															</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0">주말</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
																<span>까지</span>
															</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="주말 인원" disabled selected>주말 인원</option>
																		<option value="주말 4인">주말 4인</option>
																		<option value="주말 3인">주말 3인</option>
																		<option value="주말 2인">주말 2인</option>
																		<option value="주말 1일">주말 1인</option>
																	</select>
																</div>
															</td>															
                                                        </tr>
														<tr>
                                                            <td>공휴일</td>
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
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="공휴일 인원" disabled selected>공휴일 인원</option>
																		<option value="공휴일 4인">공휴일 4인</option>
																		<option value="공휴일 3인">공휴일 3인</option>
																		<option value="공휴일 2인">공휴일 2인</option>
																		<option value="공휴일 1일">공휴일 1인</option>
																	</select>
																</div>
															</td>															
                                                        </tr>

														<tr>
                                                            <td rowspan="3">
																<select class="form-select w-auto border-0 mx-auto">
																	<option value="C_카카오">C_카카오</option>
																	<option value="B2B 채널 전체">B2B 채널 전체</option>
																	<option value="B2C 채널 전체" selected>B2C 채널 전체</option>
																</select>
															</td>
                                                            <td class="border-bottom-0">주중</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
																<span>까지</span>
															</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="주중 인원" disabled selected>주중 인원</option>
																		<option value="주중 4인">주중 4인</option>
																		<option value="주중 3인">주중 3인</option>
																		<option value="주중 2인">주중 2인</option>
																		<option value="주중 1일">주중 1인</option>
																	</select>
																</div>
															</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="border-bottom-0">주말</td>
                                                            <td class="border-bottom-0">
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
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="2" placeholder="00" style="width:40px;">
																</div>
																<span class="me-2">일전</span>
																<div class="form-check form-check-inline p-0 m-0">
																	<input type="text" class="form-control form-control-sm text-center" maxlength="5" placeholder="00:00" style="width:60px;">
																</div>
																<span>까지</span>
															</td>
                                                            <td class="border-bottom-0">
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="주말 인원" disabled selected>주말 인원</option>
																		<option value="주말 4인">주말 4인</option>
																		<option value="주말 3인">주말 3인</option>
																		<option value="주말 2인">주말 2인</option>
																		<option value="주말 1일">주말 1인</option>
																	</select>
																</div>
															</td>															
                                                        </tr>
														<tr>
                                                            <td>공휴일</td>
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
																<div class="form-check form-check-inline p-0 m-0">
																	<select class="form-select border-0" required>
																		<option value="공휴일 인원" disabled selected>공휴일 인원</option>
																		<option value="공휴일 4인">공휴일 4인</option>
																		<option value="공휴일 3인">공휴일 3인</option>
																		<option value="공휴일 2인">공휴일 2인</option>
																		<option value="공휴일 1일">공휴일 1인</option>
																	</select>
																</div>
															</td>															
                                                        </tr>

														<tr>
															<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
														</tr>														
                                                    </tbody>
                                                </table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row - 예약 / 취소 규정 -->

						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">예약 취소일 기준 위약처리 규정</h4>

										<div class="row">
											<div class="col-12">
												<table class="table table-fixed table-responsive w-100 text-center nowrap">
													<thead>
														<tr>
															<th>위약 구분</th>
															<th>주중 위약 조치</th>
															<th>주말 위약 조치</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>노쇼</td>
                                                            <td>팀 이용요금의 50%</td>
                                                            <td>팀 이용요금의 50%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>1일전 18시 이전 취소</td>
                                                            <td>팀 이용요금의 20%</td>
                                                            <td>팀 이용요금의 20%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>2일전 취소</td>
                                                            <td>팀 이용요금의 10%</td>
                                                            <td>팀 이용요금의 10%</td>
                                                        </tr>
                                                        <tr>
                                                            <td>정상 취소</td>
                                                            <td>3일전 18:00 까지 취소</td>
                                                            <td>4일전 18:00 까지 취소</td>
                                                        </tr>
														<tr>
															<td colspan="3">
																<p class="mb-0">* 18:00 이후 최소 분은 익일로 처리합니다.</p>
																<p class="mb-0">* 기상 악화 및 천재지변으로 인한 예약 취소는 위약처리 없이 가능합니다.</p>
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
		                <!--//row - 예약 취소일 기준 위약처리 규정 -->

						<!-- end Content -->

                    </div><!-- container-fluid -->

                </div><!-- End Page-content -->

				<!--?php include "../../partials/footer.php"; ?-->

            </div><!-- end main content-->

        </div><!-- END layout-wrapper -->

		<?php include "../../partials/right-sidebar.php"; ?>
		<?php include "../../partials/vendor-scripts.php"; ?>

		<script>
		$(function(){
			"use strict";
			menuActive(7); //OneDepth
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
