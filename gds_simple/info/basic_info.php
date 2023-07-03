<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '기본 정보'; include "../partials/title-meta.php"; ?>
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
							<div class="col">
								<div class="card">
									<div class="d-flex align-items-center border-bottom col-9 py-3 px-3 pe-0">
										<h5 class="mb-0">골프장 정보</h5>
										<button type="button" class="btn btn-outline-custom ms-auto">수정</button>
									</div>

									<div class="card-body">
										<div class="row mb-4">
                                            <label for="companyName" class="col-auto col-form-label fw-bold info-tit ps-3">회사명</label>

                                            <div class="col-10 info-con">
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

                                            <div class="col-10 info-con">
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

                                            <div class="col-10 info-con">
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

                                            <div class="col-10 info-con">
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

                                            <div class="col-10 info-con">
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
													<div class="col-6 ps-0">
														<div class="position-relative">
															<label for="courseName01" class="form-label fw-bold ps-2 ms-1 mb-0 position-absolute top-50 start-0 translate-middle-y">골프장 1</label>
															<input type="text" class="form-control inputInnerLabel" id="courseName01" placeholder="골프장명">
														</div>
													</div>
													<div class="col-6 ps-0">
														<input type="text" class="form-control" placeholder="전화번호">
													</div>
												</div>

												<div class="row align-items-center mb-2">
													<div class="col ps-0">
														<input type="text" class="form-control" placeholder="골프장 주소">
													</div>
												</div>

												<div class="row align-items-center mb-4">
													<div class="col-12 ps-0">
														<label for="file01" class="btn btn-outline-custom my-1">사업자등록증/명함 첨부</label>
														<div class="filebox mt-2">
															<input class="form-control upload-name" placeholder="사업자등록증/명함" readonly>
															<input type="file" id="file01" multiple>
														</div>
													</div>
												</div>

												<div class="row align-items-center mb-2">
													<div class="col-6 ps-0">
														<div class="position-relative">
															<label for="courseName02" class="form-label fw-bold ps-2 ms-1 mb-0 position-absolute top-50 start-0 translate-middle-y">골프장 2</label>
															<input type="text" class="form-control inputInnerLabel" id="courseName02" placeholder="골프장명">
														</div>
													</div>
													<div class="col-6 ps-0">
														<input type="text" class="form-control" placeholder="전화번호">
													</div>
												</div>

												<div class="row align-items-center mb-2">
													<div class="col ps-0">
														<input type="text" class="form-control" placeholder="골프장 주소">
													</div>
												</div>

												<div class="row align-items-center mb-2">
													<div class="col-12 ps-0">
														<label for="file02" class="btn btn-outline-custom my-1">사업자등록증/명함 첨부</label>
														<div class="filebox mt-2">
															<input class="form-control upload-name" placeholder="사업자등록증/명함" readonly>
															<input type="file" id="file02">
														</div>
														<div class="filebox mt-2">
															<input class="form-control upload-name" placeholder="사업자등록증/명함" readonly>
															<input type="file" id="file02">
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
							<div class="col">
								<div class="card">
									<div class="d-flex align-items-center border-bottom col-9 py-3 px-3 pe-0">
										<h5 class="mb-0">코스 기본 정보
											<a href="javascript:void(0);" class="d-inline-block align-text-top" data-bs-toggle="tooltip" title="Default tooltip">
												<i class="fas fa-question-circle text-secondary tooltip-ico"></i>
											</a>
										</h5>
										<button type="button" class="btn btn-outline-custom ms-auto">수정</button>
									</div>								

									<div class="card-body">
										<ul class="nav nav-tabs-custom mb-3" role="tablist">
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
														<div class="row align-items-center">
															<div class="col-2">
																<input type="text" class="form-control" placeholder="단축코드">
															</div>
															<div class="col-10">
																단축코드는 알파벳 2자리로 설정합니다.
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
														<div class="row align-items-center">
															<div class="col-2">
																<input type="text" class="form-control" placeholder="단축코드">
															</div>
															<div class="col-10">
																단축코드는 알파벳 2자리로 설정합니다.
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
														<div class="row align-items-center">
															<div class="col-2">
																<input type="text" class="form-control" placeholder="단축코드">
															</div>
															<div class="col-10">
																단축코드는 알파벳 2자리로 설정합니다.
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
														<div class="row align-items-center">
															<div class="col-2">
																<input type="text" class="form-control" placeholder="단축코드">
															</div>
															<div class="col-10">
																단축코드는 알파벳 2자리로 설정합니다.
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
														<div class="row align-items-center">
															<div class="col-2">
																<input type="text" class="form-control" placeholder="단축코드">
															</div>
															<div class="col-10">
																단축코드는 알파벳 2자리로 설정합니다.
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
														<div class="row align-items-center">
															<div class="col-2">
																<input type="text" class="form-control" placeholder="단축코드">
															</div>
															<div class="col-10">
																단축코드는 알파벳 2자리로 설정합니다.
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="tab-pane fade" id="golf03" role="tabpanel" aria-labelledby="golf03-tab" tabindex="0">...</div>
										</div>

									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="d-flex align-items-center border-bottom col-9 py-3 px-3 pe-0">
										<h5 class="mb-0">부대시설
											<a href="javascript:void(0);" class="d-inline-block align-text-top" data-bs-toggle="tooltip" title="Default tooltip">
												<i class="fas fa-question-circle text-secondary tooltip-ico"></i>
											</a>
										</h5>
										<button type="button" class="btn btn-outline-custom ms-auto">수정</button>
									</div>			

									<div class="card-body">
										<div class="row mb-2">
                                            <label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">숙박</label>

                                            <div class="col-10 info-con">
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

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="d-flex align-items-center border-bottom col-9 py-3 px-3 pe-0">
										<h5 class="mb-0">기타</h5>
										<button type="button" class="btn btn-outline-custom ms-auto">수정</button>
									</div>	
									
									<div class="card-body">
										<!--div class="row mb-2">
                                            <label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">기존 ERP</label>

                                            <div class="col-10 info-con">
												<div class="row align-items-center">
													<div class="col-4 ps-0">
		                                                <input type="text" class="form-control">
													</div>
													<div class="col-8 text-end ps-0">
														<div class="form-check-inline me-0">
                                                            <input class="form-check-input" type="checkbox" id="formCheck31">
                                                            <label class="form-check-label" for="formCheck31">
                                                                ERP 없음
                                                            </label>
                                                        </div>
													</div>
												</div>
                                            </div>
                                        </div-->

										<div class="row mb-1">
                                            <label for="picName" class="col-auto col-form-label fw-bold info-tit ps-3">예약시 알림</label>

                                            <div class="col-10 info-con">
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

                                            <div class="col-10 info-con">
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

						<!--div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">예약방법</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="reservationMethodRadio" id="reservationMethodRadio01" value="전화" checked="">
													<label class="form-check-label" for="reservationMethodRadio01">전화</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="reservationMethodRadio" id="reservationMethodRadio02" value="전화">
													<label class="form-check-label" for="reservationMethodRadio02">팩스</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="reservationMethodRadio" id="reservationMethodRadio03" value="인터넷">
													<label class="form-check-label" for="reservationMethodRadio03">인터넷</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="reservationMethodRadio" id="reservationMethodRadio04" value="모바일">
													<label class="form-check-label" for="reservationMethodRadio04">모바일</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="reservationMethodRadio" id="reservationMethodRadio05" value="실시간 연동 API">
													<label class="form-check-label" for="reservationMethodRadio05">실시간 연동 API</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">1일 예약가능횟수</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input reservationNumRadio" type="radio" name="reservationNumRadio" id="reservationNumRadio01" value="동일 아이디 1일 1회" checked="">
													<label class="form-check-label" for="reservationNumRadio01">동일 아이디 1일 1회</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input reservationNumRadio" type="radio" name="reservationNumRadio" id="reservationNumRadio02" value="무제한">
													<label class="form-check-label" for="reservationNumRadio02">무제한</label>
												</div>
												<div class="form-check form-check-inline me-0">
													<input class="form-check-input reservationNumRadio radio_input" type="radio" name="reservationNumRadio" id="reservationNumRadio03" value="기타">
													<input type="text" class="form-control input_w90 reservationNumEtc" placeholder="기타" disabled="">
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">예약 양도 (위임) 여부</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input reservationTransferRadio" type="radio" name="reservationTransfer" id="reservationTransferRadio01" value="양도 위임 가능" checked="">
													<label class="form-check-label" for="reservationTransferRadio01">양도 위임 가능</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input reservationTransferRadio" type="radio" name="reservationNumRadio" id="reservationTransferRadio02" value="양도 위임 불가능">
													<label class="form-check-label" for="reservationTransferRadio02">양도 위임 불가능</label>
												</div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">문자발송</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input messageRadio" type="radio" name="messageRadio" id="messageRadio01" value="예약완료 시 문자 발송" checked="">
													<label class="form-check-label" for="messageRadio01">예약완료 시 문자 발송</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input messageRadio" type="radio" name="messageRadio" id="messageRadio02" value="취소 시 문자 발송">
													<label class="form-check-label" for="messageRadio02">취소 시 문자 발송</label>
												</div>
												<div class="form-check form-check-inline me-2">
													<input class="form-check-input messageRadio" type="radio" name="messageRadio" id="messageRadio03" value="예약발송">
													<label class="form-check-label" for="messageRadio03">라운드 1일 전</label>
												</div>
												<div class="form-check form-check-inline p-0 m-0">
													<input type="text" class="form-control text-center input_w50 messageEtc" placeholder="00" disabled="">
												</div>
												<span class="d-inline-block">시 문자발송</span>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">내정자 관리</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="nomineeRadio" id="nomineeRadio01" value="락카키로 관리" checked="">
													<label class="form-check-label" for="messageRadio01">락카키로 관리</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="nomineeRadio" id="nomineeRadio02" value="회원명 관리">
													<label class="form-check-label" for="nomineeRadio02">회원명 관리</label>
												</div>
												<div class="form-check form-check-inline me-2">
													<input class="form-check-input" type="radio" name="nomineeRadio" id="nomineeRadio03" value="팀 번호별 관리">
													<label class="form-check-label" for="nomineeRadio03">팀 번호별 관리</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">락카키 종류</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="nomineeRadio" id="lockRadio01" value="비밀번호형" checked="">
													<label class="form-check-label" for="lockRadio01">비밀번호형</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="nomineeRadio" id="lockRadio02" value="열쇠형">
													<label class="form-check-label" for="lockRadio02">열쇠형</label>
												</div>
												<div class="form-check form-check-inline me-2">
													<input class="form-check-input" type="radio" name="nomineeRadio" id="lockRadio03" value="기타">
													<label class="form-check-label" for="lockRadio03">기타</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">락카키 지급장소</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="nomineeRadio" id="lockPlace01" value="비밀번호형" checked="">
													<label class="form-check-label" for="lockPlace01">프론트</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="nomineeRadio" id="lockPlace02" value="열쇠형">
													<label class="form-check-label" for="lockPlace02">락카</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">카트 종류</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="cartRadio" id="cartRadio01" value="수동카트" checked="">
													<label class="form-check-label" for="cartRadio01">수동카트</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="cartRadio" id="cartRadio02" value="5인승 전동카트">
													<label class="form-check-label" for="cartRadio02">5인승 전동카트</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="cartRadio" id="cartRadio03" value="2인승 전동카트">
													<label class="form-check-label" for="cartRadio03">2인승 전동카트</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="cartRadio" id="cartRadio04" value="1인 자동카트">
													<label class="form-check-label" for="cartRadio04">1인 자동카트</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">카트 지정 여부</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="cartAppointRadio" id="cartAppointRadio01" value="카트지정 가능" checked="">
													<label class="form-check-label" for="cartAppointRadio01">카트지정 가능</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="cartAppointRadio" id="cartAppointRadio02" value="카트지정 불가">
													<label class="form-check-label" for="cartAppointRadio02">카트지정 가능</label>
												</div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">캐디 종류</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="신입" checked="">
													<label class="form-check-label" for="caddyRadio01">신입</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="일반">
													<label class="form-check-label" for="caddyRadio02">일반</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="주니어">
													<label class="form-check-label" for="caddyRadio03">주니어</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio04" value="프로">
													<label class="form-check-label" for="caddyRadio04">프로</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">캐디 적정 인원수</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="신입" checked="">
													<label class="form-check-label" for="caddyRadio01">신입</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="일반">
													<label class="form-check-label" for="caddyRadio02">일반</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="주니어">
													<label class="form-check-label" for="caddyRadio03">주니어</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio04" value="프로">
													<label class="form-check-label" for="caddyRadio04">프로</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">캐디 출근 코드</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="출근" checked="">
													<label class="form-check-label" for="caddyRadio01">출근</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="당번">
													<label class="form-check-label" for="caddyRadio02">당번</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="결근">
													<label class="form-check-label" for="caddyRadio03">결근</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">캐디피 수령방식</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="팀 정산 시 합산" checked="">
													<label class="form-check-label" for="caddyRadio01">팀 정산 시 합산</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="캐디 직접 수령">
													<label class="form-check-label" for="caddyRadio02">캐디 직접 수령</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="기타">
													<label class="form-check-label" for="caddyRadio03">기타</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">캐디 상벌종류</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="출근" checked="">
													<label class="form-check-label" for="caddyRadio01">출근</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="당번">
													<label class="form-check-label" for="caddyRadio02">당번</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="결근">
													<label class="form-check-label" for="caddyRadio03">결근</label>
												</div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">정산방법</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="프론트" checked="">
													<label class="form-check-label" for="caddyRadio01">프론트</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="락카">
													<label class="form-check-label" for="caddyRadio02">락카</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">VAN(카드단말기)</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="사용중" checked="">
													<label class="form-check-label" for="caddyRadio01">사용중</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="사용안함">
													<label class="form-check-label" for="caddyRadio02">사용안함</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">정산방법</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="선불" checked="">
													<label class="form-check-label" for="caddyRadio01">선불항목</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="후불">
													<label class="form-check-label" for="caddyRadio02">후불항목</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">정산장소</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="프론트" checked="">
													<label class="form-check-label" for="caddyRadio01">프론트</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="대식당">
													<label class="form-check-label" for="caddyRadio02">대식당</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="프로샵">
													<label class="form-check-label" for="caddyRadio03">프로샵</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="스타트하우스">
													<label class="form-check-label" for="caddyRadio03">스타트하우스</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="그늘집">
													<label class="form-check-label" for="caddyRadio03">그늘집</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="기타">
													<label class="form-check-label" for="caddyRadio03">기타</label>
												</div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col">
								<div class="card">
									<div class="card-body">
										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">골프장 홈페이지<br>운영여부</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="홈페이지 운영" checked="">
													<label class="form-check-label" for="caddyRadio01">홈페이지 운영</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="홈페이지 없음">
													<label class="form-check-label" for="caddyRadio02">홈페이지 없음</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio03" value="무료 홈페이지 신청">
													<label class="form-check-label" for="caddyRadio03">무료 홈페이지 신청</label>
												</div>
                                            </div>
                                        </div>

										<div class="row align-items-center mb-2">
                                            <span class="col-auto col-form-label fw-bold info-tit ps-3">골프장 홈페이지<br>예약여부</span>

                                            <div class="col-10 info-con ps-0">
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio01" value="예약가능" checked="">
													<label class="form-check-label" for="caddyRadio01">예약가능</label>
												</div>
												<div class="form-check form-check-inline">
													<input class="form-check-input" type="radio" name="caddyRadio" id="caddyRadio02" value="예약불가">
													<label class="form-check-label" for="caddyRadio02">예약불가</label>
												</div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
						</div-->
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
			menuActive(7); //OneDepth

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
