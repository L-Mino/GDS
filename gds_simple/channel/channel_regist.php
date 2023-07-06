<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '채널 등록 관리'; include "../partials/title-meta.php"; ?>
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
										<div class="d-flex flex-wrap align-items-center gap-2 mb-3">
											<h4 class="card-title me-auto">예약 채널 관리</h4>
											<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".channelRegistModal">채널 등록</button>
										</div>

										<div class="row">
											<div class="col-12">
												<div data-simplebar>
													<table class="table table-responsive w-100 text-center nowrap mb-0">
														<colgroup>
															<col style="min-width:80px;">
															<col style="min-width:100px;">
															<col style="min-width:80px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:100px;">
															<col style="min-width:130px;">
															<col style="min-width:100px;">
															<col style="min-width:80px;">
															<col style="min-width:80px;">
															<col style="min-width:130px;">
															<col style="min-width:130px;">
														</colgroup>
														
														<thead>
															<tr class="align-middle">
																<th>순번</th>
																<th>구분
																	<div class="dropdown d-inline-block">
																		<button class="btn boarder-0 p-0 dropdown-toggle" type="button" id="" data-bs-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-chevron-down lh-1"></i></button>
																		<ul class="dropdown-menu dropdown-menu-dark">
																			<li><button type="button" class="dropdown-item">총판 (Agent)</button></li>
																			<li><button type="button" class="dropdown-item">총판 (Agent)</button></li>
																		</ul>
																	</div>
																</th>																
																<th>형식</th>
																<th>업체명</th>
																<th>기본 코드</th>
																<th>단축 코드</th>
																<th>그린피 할인</th>
																<th>대표 전화</th>
																<th>결제 구분</th>
																<th>정산 마감</th>
																<th>담당자명</th>
																<th>ID(EMAIL)</th>
																<th>연락처</th>
															</tr>
														</thead>

														<tbody>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".channelRegistModal" onclick="$(this).parent().children('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>1</td>
																<td>총판 (Agent)</td>
																<td>B2B</td>
																<td>하나둘 여행</td>
																<td>B-12 TOUR</td>
																<td>B1</td>
																<td>-15%</td>
																<td>02-2323-2323</td>
																<td>예약 3일전</td>
																<td></td>
																<td>홍길동</td>
																<td>testabcs@gmail.com</td>
																<td>010-1234-5678</td>
															</tr>
															<tr role="button" data-bs-toggle="modal" data-bs-target=".channelRegistModal" onclick="$(this).parent().children('tr').removeClass('table-active'); $(this).addClass('table-active');">
																<td>2</td>
																<td>총판 (Agent)</td>
																<td>B2B</td>
																<td>하나둘 여행</td>
																<td>B-12 TOUR</td>
																<td>B1</td>
																<td>-10000원</td>
																<td>02-2323-2323</td>
																<td>예약 3일전</td>
																<td></td>
																<td>홍길동</td>
																<td></td>
																<td></td>
															</tr>
														</tbody>
													</table>
												</div>

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

										<p class="mt-3">
											기본 코드 - 채널 업체를 확인할 수 있는 8자 이내 코드 / 티타임 블럭 및 그린피 설정에 표시됨<br>
											단축 코드 - 채널 업체를 구분할 수 있는 2자 이내 코드 (B1,B2 / C1,C2) / 예약 현황에 표시됨
										</p>
									</div>
								</div>
							</div>
						</div>
		                <!--//row - 그린피 설정 내역 -->

						<div class="modal fade channelRegistModal" tabindex="-1" aria-labelledby="channelViewModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-xl modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="channelViewModalLabel">채널 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="row">
											<div class="col">
												<div class="row">
													<div class="col">
														<div class="border-box border-bottom-0 mb-3">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:90px;">
																	<col style="width:auto;">
																	<col style="width:90px;">
																	<col style="width:auto;">
																	<col style="width:90px;">
																	<col style="width:auto;">
																	<col style="width:90px;">
																	<col style="width:auto;">
																</colgroup>

																<tbody>
																	<tr>
																		<th>채널 ID</th>
																		<td>
																			<input class="form-control" type="text">
																		</td>
																		<th>단축 코드</th>
																		<td>
																			<input class="form-control" type="text">
																		</td>																		
																		<th>채널 구분</th>
																		<td>
																			<select class="form-select w-100">
																				<option value="대리점" selected>대리점</option>
																				<option value="총판">총판</option>
																			</select>
																		</td>
																		<th>채널 형식</th>
																		<td>
																			<select class="form-select w-100">
																				<option value="B2B" selected>B2B</option>
																				<option value="B2C">B2C</option>
																			</select>
																		</td>
																	</tr>
																	<tr>
																		<th>채널 업체명</th>
																		<td colspan="3">
																			<input class="form-control" type="text">
																		</td>
																		<th>국가</th>
																		<td>
																			<select class="form-select w-100">
																				<option value="대한민국" selected>대한민국</option>
																				<option value="일본">일본</option>
																				<option value="미국">미국</option>
																			</select>
																		</td>
																		<th>지역</th>
																		<td>
																			<select class="form-select w-100">
																				<option value="서울" selected>서울</option>
																				<option value="제주도">제주도</option>
																			</select>
																		</td>																																				
																	</tr>
																</tbody>
															</table>

															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:90px;">
																	<col style="width:auto;">
																	<col style="width:90px;">
																	<col style="width:auto;">
																	<col style="width:90px;">
																	<col style="width:auto;">
																</colgroup>

																<tbody>
																	<tr>
																		<th>대표 전화</th>
																		<td>
																			<input class="form-control" type="text">
																		</td>
																		<th>사업자 번호</th>
																		<td>
																			<input class="form-control" type="text">
																		</td>
																		<th>연락처</th>
																		<td>
																			<input class="form-control" type="text">
																		</td>

																	</tr>
																	<tr>
																		<th>담당자 성명</th>
																		<td>
																			<input class="form-control" type="text">
																		</td>
																		<th>ID(EMAIL)</th>
																		<td>
																			<input class="form-control" type="text">
																		</td>
																		<th rowspan="2" class="align-top pt-12">접속 아이피</th>
																		<td rowspan="2" class="align-top">
																			<div class="d-flex">
																				<div class="col pe-10" data-simplebar style="max-height:110px;">
																					<div class="form-check form-check-inline w-100 p-0 me-0">
																						<input class="form-control" type="text">
																					</div>
																					<div class="form-check form-check-inline w-100 p-0 mt-2 me-0">
																						<input class="form-control" type="text">
																					</div>
																					<div class="form-check form-check-inline w-100 p-0 mt-2 me-0">
																						<input class="form-control" type="text">
																					</div>
																					<div class="form-check form-check-inline w-100 p-0 mt-2 me-0">
																						<input class="form-control" type="text">
																					</div>																					
																				</div>
																				<div class="col-3 text-end">
																					<button type="button" class="btn btn-outline-custom w-100">추가</button>
																				</div>
																			</div>
																		</td>
																	</tr>
																	<tr>
																		<th class="align-top pt-2">주소</th>
																		<td colspan="3">
																			<div class="d-flex gap-2 mb-2">
																				<div class="form-check form-check-inline p-0 m-0">
																					<input type="text" id="daum_postcode" class="form-control postcode" placeholder="우편번호">
																				</div>
																				<div class="col">
																					<input type="text" id="daum_address" class="form-control addr" placeholder="주소">
																				</div>
																			</div>
																			<input type="text" id="daum_detailAddress" class="form-control" placeholder="상세 주소">
																		</td>																		
																	</tr>
																</tbody>
															</table>
														</div>

														<div class="border-box border-bottom-0 mb-3">
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:90px;">
																	<col style="width:auto;">
																	<col style="width:90px;">
																	<col style="width:auto;">
																	<col style="width:90px;">
																	<col style="width:auto;">
																</colgroup>

																<tbody>
																	<tr class="table-bg-gray">
																		<th>결제 구분</th>
																		<td>
																			<div class="form-check form-check-inline ms-10">
																				<input class="form-check-input" type="radio" name="payRadios" id="payRadios1" value="option1" checked>
																				<label class="form-check-label fw-bold" for="payRadios1">선불</label>
																			</div>
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="payRadios" id="payRadios2" value="option2">
																				<label class="form-check-label fw-bold" for="payRadios2">후불</label>
																			</div>
																		</td>
																		<th>정산 마감일</th>
																		<td>
																			<div class="d-flex align-items-center">
																				<span>매월</span>
																				<select class="form-select w-auto">
																					<option value="1" selected>1</option>
																					<option value="2">2</option>
																					<option value="3">3</option>
																					<option value="4">4</option>
																					<option value="5">5</option>
																					<option value="6">6</option>
																					<option value="7">7</option>
																					<option value="30">30</option>
																				</select>
																				<span>일</span>
																			</div>
																		</td>
																		<th>정산 통화</th>
																		<td>
																			<select class="form-select w-auto">
																				<option value="USD" selected>USD</option>
																				<option value="JPY">JPY</option>
																			</select>
																		</td>
																	</tr>
																</tbody>
															</table>
															
															<table class="table table-layout-fixed mb-0">
																<colgroup>
																	<col style="width:90px;">
																	<col style="width:auto;">
																	<col style="width:90px;">
																	<col style="width:auto;">
																</colgroup>

																<tbody>
																	<tr class="table-bg-gray">
																		<th>그린피 할인</th>
																		<td>
																			<div class="form-check form-check-inline ms-10 me-1">
																				<input class="form-check-input gridRadios" type="radio" name="gridRadios" id="gridRadios1" value="할인율" checked>
																				<label class="form-check-label fw-bold" for="gridRadios1">할인율</label>
																			</div>
																			<div class="form-check form-check-inline p-0 m-0">
																				<input class="form-control input_w50 text-center gridRadios1Input" type="text" maxlength="2">
																			</div>
																			<span>%</span>
																			<div class="form-check form-check-inline ms-3 me-1">
																				<input class="form-check-input gridRadios" type="radio" name="gridRadios" id="gridRadios2" value="할인 금액">
																				<label class="form-check-label fw-bold" for="gridRadios2">할인 금액</label>
																			</div>		
																			<div class="form-check form-check-inline p-0 m-0">
																				<input class="form-control input_w110 text-end gridRadios2Input" type="text" disabled> 
																			</div>
																			<span>원</span>
																		</td>
																		<th>티타임 배정</th>
																		<td>
																			<div class="form-check form-check-inline ms-10">
																				<input class="form-check-input" type="checkbox" id="teecheck" value="배정" checked>
																				<label class="form-check-label fw-bold" for="teecheck">배정</label>
																			</div>
																		</td>																		
																	</tr>																		
																	<tr class="table-bg-gray">																		
																		<th>사용 유무</th>
																		<td colspan="3">
																			<div class="form-check form-check-inline ms-10">
																				<input class="form-check-input" type="radio" name="useRadios" id="useRadios1" value="option1" checked>
																				<label class="form-check-label fw-bold" for="useRadios1">사용</label>
																			</div>
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="radio" name="useRadios" id="useRadios2" value="option2">
																				<label class="form-check-label fw-bold" for="useRadios2">사용안함</label>
																			</div>
																		</td>
																	</tr>
																</tbody>
															</table>															
														</div>

														<textarea class="form-control textarea-bg border-0 p-2" rows="3" placeholder="비고"></textarea>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="modal-footer">
										<div class="d-flex justify-content-between align-items-center w-100 m-0">
											<p class="desc">Agent에 소속된 agency의 경우 총판 기본 코드에 _(1) 사용 / 단축 코드는 동일  |  GDS 정보 보안을 위해 구글 OTP 사용 필수 / OTP 사용 안내</p>
											<div class="d-flex gap-2">
												<button type="button" class="btn btn-custom" data-bs-dismiss="modal" aria-label="Close">취소</button>
												<button type="button" class="btn btn-custom">저장</button>
											</div>
										</div>
									</div>
								</div><!-- /.modal-content -->
							</div><!-- /.modal-dialog -->
						</div>
						<!-- //modal - 채널 등록 -->						

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
			menuActive(6); //OneDepth

			$('.gridRadios').on('click', function() {
			    var valueCheck = $('.gridRadios:checked').val();

				if (valueCheck == '할인율') {
					$('.gridRadios2Input').attr('disabled', 'disabled');
					$('.gridRadios1Input').removeAttr('disabled');
					$('.gridRadios1Input').focus();
				} else if (valueCheck == '할인 금액') {
					$('.gridRadios1Input').attr('disabled', 'disabled');
					$('.gridRadios2Input').removeAttr('disabled');
					$('.gridRadios2Input').focus();					
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
