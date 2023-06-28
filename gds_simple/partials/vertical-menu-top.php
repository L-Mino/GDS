	<div class="vertical_quick_wrap">
		<ul class="d-flex align-items-center">
			<li>
				<span title="즐겨찾기만 보기" class="btn bookmark"><i class="bx bx-star"></span></i>
			</li>
			<li>
				<div class="btn-group notice-setting">
					<button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
						<svg xmlns="http://www.w3.org/2000/svg" width="15.2" height="14.991" viewBox="0 0 15.2 14.991">
							<path id="notice-setting" data-name="notice-setting" d="M6.669,14.473,4.327,12.5H0V1.875A1.877,1.877,0,0,1,1.875,0h11.25A1.878,1.878,0,0,1,15,1.875V12.5H10.717l-2.4,1.987a1.21,1.21,0,0,1-.807.3A1.259,1.259,0,0,1,6.669,14.473ZM1.25,1.875V11.25H4.784l2.7,2.278,2.781-2.278H13.75V1.875a.626.626,0,0,0-.625-.625H1.875A.626.626,0,0,0,1.25,1.875ZM9.708,6.449a.946.946,0,1,1,.946.946A.946.946,0,0,1,9.708,6.449Zm-3.154,0A.946.946,0,1,1,7.5,7.4.946.946,0,0,1,6.555,6.449Zm-3.154,0a.946.946,0,1,1,.946.946A.946.946,0,0,1,3.4,6.449Z" transform="translate(0.1 0.1)" fill="#fff" stroke="#fff" stroke-width="0.2"/>
						</svg>
					</button>
					<div class="dropdown-menu notice-setting-con">
						<div class="notice-setting-inner px-2">
							<span class="d-inline-block fs-12 fw-bold p-2">공지사항 메세지</span>

							<div class="row w-100 mx-auto border rounded">
								<div class="col-6 p-2">
									<div class="form-check">
										<input class="form-check-input" type="radio" name="notice_radio" id="notice_radio01" checked>
										<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_radio01">부서 전체</label>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="notice_radio" id="notice_radio02">
										<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_radio02">프론트</label>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="notice_radio" id="notice_radio03">
										<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_radio03">예약실</label>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="notice_radio" id="notice_radio04">
										<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_radio04">코스관리</label>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="notice_radio" id="notice_radio05">
										<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_radio05">경기팀</label>
									</div>

									<div class="form-check">
										<input class="form-check-input" type="radio" name="notice_radio" id="notice_radio06">
										<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_radio06">식음</label>
									</div>
								</div>

								<div class="col-6 border-start p-2" >
									<div class="notice-setting-scroll overflow-auto" style="height:126px;">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="notice_check_all" checked>
											<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_check_all">직원 전체</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="notice_check01">
											<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_check01">일나연</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="notice_check02">
											<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_check02">이나연</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="notice_check03">
											<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_check03">삼나연</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="notice_check04">
											<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_check04">사나연</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="notice_check05">
											<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_check05">오나연</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="notice_check06">
											<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_check06">육나연</label>
										</div>

										<div class="form-check">
											<input class="form-check-input" type="checkbox" id="notice_check07">
											<label class="form-check-label fw-normal fs-12 align-text-bottom" for="notice_check07">칠나연</label>
									</div>
									</div>
								</div>
							</div>

							<div class="row mt-2">
								<div class="col">
									<div class="d-flex flex-wrap align-items-center gap-1">
										<div class="form-check form-check-inline ps-0 me-0">
											<input type="text" class="form-control form-control-sm datepicker datepicker-notice datepicker-today p-0" placeholder="시작일">
										</div>
										<span class="dash">~</span>
										<div class="form-check form-check-inline ps-0 me-0">
											<input type="text" class="form-control form-control-sm datepicker datepicker-notice datepicker-today p-0" placeholder="종료일">
										</div>

										<div class="d-flex ms-auto gap-1">
											<button class="btn btn-sm btn-custom" type="button">수정</button>
											<button class="btn btn-sm btn-custom" type="button">삭제</button>
										</div><!-- /btn-group -->
									</div>									
								</div>
							</div>

							<div class="row w-100 mx-auto p-2 mt-2 notice-text-wrap border border-1 rounded">
								<textarea class="form-control border-0 p-0 notice-text" name="" id="notice-textarea" rows="3"></textarea>
								<span class="text-end p-0" id="notice-count-message"></span>
							</div>
						</div>
					</div>
				</div>

			</li>
			<li>                        
				<button type="button" class="btn" onclick="location.reload()">
					<i class="bx bx-revision"></i>
				</button>
			</li>
			<li class="etc"> 
				<div class="btn-group site-setting">
					<button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="false">
						<i class="bx bx-dots-vertical-rounded"></i>
					</button>
					<div class="dropdown-menu">
						<div class="row w-100 mx-auto py-3">
							<div class="col p-0">
								<div role="button" class="mode-change-btn mode-dark-btn lh-1 text-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.94" viewBox="0 0 16 15.94" class="mode-ico align-top">
										<path id="day" d="M16.011,8.746c-.18.67-.31,1.349-.54,2.009a7.534,7.534,0,0,1-6.277,5.387A7.849,7.849,0,0,1,.079,9.226,8,8,0,0,1,6.506.54c.37-.07.73-.15,1.109-.24A6.25,6.25,0,0,0,9.494,7.716a5.994,5.994,0,0,0,6.527.9A.57.57,0,0,0,16.011,8.746ZM5.247,3.079A5.88,5.88,0,0,0,2.088,9.366a6.008,6.008,0,0,0,5.317,4.878c2.439.21,5.137-1.289,5.777-3.208A8.025,8.025,0,0,1,5.247,3.079Z" transform="translate(-0.021 -0.3)" fill="#9799AB"/>
									</svg>
									
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.94" viewBox="0 0 16 15.94" class="mode-ico-active align-top">
										<path id="day" d="M16.011,8.746c-.18.67-.31,1.349-.54,2.009a7.534,7.534,0,0,1-6.277,5.387A7.849,7.849,0,0,1,.079,9.226,8,8,0,0,1,6.506.54c.37-.07.73-.15,1.109-.24A6.25,6.25,0,0,0,9.494,7.716a5.994,5.994,0,0,0,6.527.9A.57.57,0,0,0,16.011,8.746ZM5.247,3.079A5.88,5.88,0,0,0,2.088,9.366a6.008,6.008,0,0,0,5.317,4.878c2.439.21,5.137-1.289,5.777-3.208A8.025,8.025,0,0,1,5.247,3.079Z" transform="translate(-0.021 -0.3)" fill="#0576b9"/>
									</svg>

									<span class="d-block lh-1 fs-12 site-setting-tit">다크모드</span>
								</div>
							</div>

							<div class="col p-0">
								<div role="button" class="mode-change-btn mode-light-btn active lh-1 text-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.01" viewBox="0 0 16 16.01" class="mode-ico align-top">
										<path id="night" d="M9.02-.09C9.01.85,9,1.78,9,2.72a.3.3,0,0,0,.15.2c.57.23,1.15.44,1.77.68.64-.64,1.33-1.33,1.99-2,.49.48.94.93,1.41,1.39-.67.67-1.36,1.36-2,1.99.25.64.46,1.22.7,1.79a.352.352,0,0,0,.28.16c.77.01,1.55.01,2.32.01H16V8.91H13.14c-.28.62-.55,1.18-.79,1.75a.33.33,0,0,0,.08.29c.55.57,1.12,1.13,1.68,1.69.08.08.15.16.2.21-.46.46-.92.91-1.37,1.37-.65-.66-1.34-1.35-1.97-1.99-.67.25-1.28.47-1.88.71-.06.02-.1.18-.1.27-.01.77,0,1.55,0,2.32v.38H7.04c-.01-.11-.02-.23-.02-.34,0-.77-.01-1.55,0-2.32a.313.313,0,0,0-.26-.36c-.55-.18-1.09-.42-1.69-.65-.64.65-1.33,1.34-2,2.02L1.71,12.9l2.01-1.98c-.3-.72-.56-1.33-.84-2.01H0c0-.67,0-1.3,0-1.98H.41c.75,0,1.51-.01,2.26,0a.313.313,0,0,0,.36-.26c.18-.55.42-1.09.66-1.69-.64-.64-1.34-1.33-2.01-2L3.03,1.63C3.69,2.3,4.38,2.99,5,3.62c.7-.26,1.3-.48,1.89-.72a.247.247,0,0,0,.12-.19C7.01,1.77,7,.84,6.99-.1,7.66-.09,8.34-.09,9.02-.09ZM8.01,4.75a3.17,3.17,0,1,0,3.17,3.17A3.182,3.182,0,0,0,8.01,4.75Z" transform="translate(0 0.1)" fill="#9799ab"/>
									</svg>
									
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16.01" viewBox="0 0 16 16.01" class="mode-ico-active align-top">
										<path id="night" d="M9.02-.09C9.01.85,9,1.78,9,2.72a.3.3,0,0,0,.15.2c.57.23,1.15.44,1.77.68.64-.64,1.33-1.33,1.99-2,.49.48.94.93,1.41,1.39-.67.67-1.36,1.36-2,1.99.25.64.46,1.22.7,1.79a.352.352,0,0,0,.28.16c.77.01,1.55.01,2.32.01H16V8.91H13.14c-.28.62-.55,1.18-.79,1.75a.33.33,0,0,0,.08.29c.55.57,1.12,1.13,1.68,1.69.08.08.15.16.2.21-.46.46-.92.91-1.37,1.37-.65-.66-1.34-1.35-1.97-1.99-.67.25-1.28.47-1.88.71-.06.02-.1.18-.1.27-.01.77,0,1.55,0,2.32v.38H7.04c-.01-.11-.02-.23-.02-.34,0-.77-.01-1.55,0-2.32a.313.313,0,0,0-.26-.36c-.55-.18-1.09-.42-1.69-.65-.64.65-1.33,1.34-2,2.02L1.71,12.9l2.01-1.98c-.3-.72-.56-1.33-.84-2.01H0c0-.67,0-1.3,0-1.98H.41c.75,0,1.51-.01,2.26,0a.313.313,0,0,0,.36-.26c.18-.55.42-1.09.66-1.69-.64-.64-1.34-1.33-2.01-2L3.03,1.63C3.69,2.3,4.38,2.99,5,3.62c.7-.26,1.3-.48,1.89-.72a.247.247,0,0,0,.12-.19C7.01,1.77,7,.84,6.99-.1,7.66-.09,8.34-.09,9.02-.09ZM8.01,4.75a3.17,3.17,0,1,0,3.17,3.17A3.182,3.182,0,0,0,8.01,4.75Z" transform="translate(0 0.1)" fill="#0576b9"/>
									</svg>

									<span class="d-block lh-1 fs-12 site-setting-tit">라이트모드</span>
								</div>
							</div>

							<div class="col p-0">
								<div role="button" class="mode-change-btn mode-box-btn lh-1 text-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mode-ico align-top">
										<g id="패스_52" data-name="패스 52" fill="none">
											<path d="M0,0H16V16H0Z" stroke="none"/>
											<path d="M 1.5 1.5 L 1.5 14.5 L 14.5 14.5 L 14.5 1.5 L 1.5 1.5 M 0 0 L 16 0 L 16 16 L 0 16 L 0 0 Z" stroke="none" fill="#9799ab"/>
										</g>
									</svg>
									
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mode-ico-active align-top">
										<g id="사각형_6452" data-name="사각형 6452" fill="none" stroke="#0576b9" stroke-width="1.5">
											<rect width="16" height="16" stroke="none"/>
											<rect x="0.75" y="0.75" width="14.5" height="14.5" fill="none"/>
										</g>
									</svg>

									<span class="d-block lh-1 fs-12 site-setting-tit">박스</span>
								</div>
							</div>

							<div class="col p-0">
								<div role="button" class="mode-change-btn mode-basic-btn lh-1 text-center">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mode-ico align-top">
										<g id="그룹_19659" data-name="그룹 19659" transform="translate(6907 -892)">
											<g id="사각형_6458" data-name="사각형 6458" transform="translate(-6907 892)" fill="none" stroke="#9799ab" stroke-width="1.5">
												<rect width="16" height="6" stroke="none"/>
												<rect x="0.75" y="0.75" width="14.5" height="4.5" fill="none"/>
											</g>
											<g id="사각형_6457" data-name="사각형 6457" transform="translate(-6907 897)" fill="none" stroke="#9799ab" stroke-width="1.5">
												<rect width="8" height="11" stroke="none"/>
												<rect x="0.75" y="0.75" width="6.5" height="9.5" fill="none"/>
											</g>
											<g id="사각형_6456" data-name="사각형 6456" transform="translate(-6900 897)" fill="none" stroke="#9799ab" stroke-width="1.5">
												<rect width="9" height="11" stroke="none"/>
												<rect x="0.75" y="0.75" width="7.5" height="9.5" fill="none"/>
											</g>
										</g>
									</svg>
									
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" class="mode-ico-active align-top">
										<g id="그룹_19633" data-name="그룹 19633" transform="translate(6907 -892)">
											<g id="사각형_6458" data-name="사각형 6458" transform="translate(-6907 892)" fill="none" stroke="#0576b9" stroke-width="1.5">
												<rect width="16" height="6" stroke="none"/>
												<rect x="0.75" y="0.75" width="14.5" height="4.5" fill="none"/>
											</g>
											<g id="사각형_6457" data-name="사각형 6457" transform="translate(-6907 897)" fill="none" stroke="#0576b9" stroke-width="1.5">
												<rect width="8" height="11" stroke="none"/>
												<rect x="0.75" y="0.75" width="6.5" height="9.5" fill="none"/>
											</g>
											<g id="사각형_6456" data-name="사각형 6456" transform="translate(-6900 897)" fill="none" stroke="#0576b9" stroke-width="1.5">
												<rect width="9" height="11" stroke="none"/>
												<rect x="0.75" y="0.75" width="7.5" height="9.5" fill="none"/>
											</g>
										</g>
									</svg>

									<span class="d-block lh-1 fs-12 site-setting-tit">베이직</span>
								</div>
							</div>
						</div>

						<div class="dropdown-divider"></div>
						<a class="dropdown-item fs-12 py-0 clearBrowserDataBtn" href="javascript: void(0);">캐시 삭제</a>

						<!--a class="dropdown-item" href="javascript: void(0);">
							<div class="form-check form-check-inline form-check-reverse form-switch me-0">
								<input class="form-check-input" type="checkbox" role="switch" id="layout-mode">
								<label class="form-check-label" for="layout-mode">다크 모드</label>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript: void(0);">
							<div class="form-check form-check-inline form-check-reverse form-switch me-0">
								<input class="form-check-input" type="checkbox" role="switch" id="boxed-mode">
								<label class="form-check-label" for="boxed-mode">박스 모드</label>
							</div>
						</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="javascript: void(0);">캐시 삭제</a-->
					</div>
				</div>
			</li>
		</ul>
	</div>	
	
	<div class="app-search-wrap">
		<form class="app-search pt-0">
			<div class="position-relative">
				<!--select class="selectpicker w-100" placeholder="검색..." data-live-search-style="startsWith" data-live-search="true">
				</select-->
				<input type="search" class="form-control input-search" placeholder="Search">
				<span class="mdi mdi-magnify"></span>
				<button type="button" class="search_detail_btn" onclick="$('.search_detail_wrap, .app-search-backdrop').toggle();"><i class="mdi mdi-format-list-bulleted"></i></button>
			</div>
		</form>

		<div class="search_detail_wrap border rounded">
			<div class="search_detail_inner">
				<div class="card border-0 mb-0">
					<div class="card-body">
						<div class="d-flex justify-content-between mb-3">
							<h4>SEARCH</h4>
							<button type="button" class="btn-close" onclick="$('.search_detail_wrap, .app-search-backdrop').hide();"></button>
						</div>

						<div class="row">
							<div class="col">
								<div class="card bg-secondary-subtle rounded-pill">
									<div class="card-body p-2">
										<div class="d-flex align-items-center flex-wrap gap-2">
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select bg-transparent border-0">
													<option value="통합검색" selected>통합검색</option>
													<option value="예약">예약</option>
													<option value="내장">내장</option>
													<option value="회원">회원</option>
													<option value="결제">결제</option>
												</select>
											</div>

											<div class="form-check form-check-inline flex-fill ps-0 me-0">
												<input class="form-control bg-transparent border-0" type="search" placeholder="검색어 입력">
											</div>

											<i class="bx bx-calendar text-secondary"></i>
											<div class="form-check form-check-inline ps-0 me-0">
												<select class="form-select bg-transparent border-0">
													<option value="D +7" selected>D +7</option>
													<option value="오늘">오늘</option>
													<option value="이번주">이번주</option>
													<option value="이번달">이번달</option>
													<option value="오늘 이후 60일">오늘 이후 60일</option>
												</select>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" data-bs-toggle="tab" href="#appSearchTab-all" role="tab">
									<span class="d-block d-sm-none"><i class="fas fa-home"></i></span>
									<span class="d-none d-sm-block">전체 33</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#appSearchTab-booking" role="tab">
									<span class="d-block d-sm-none"><i class="far fa-user"></i></span>
									<span class="d-none d-sm-block">예약 32</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#appSearchTab-with" role="tab">
									<span class="d-block d-sm-none"><i class="far fa-envelope"></i></span>
									<span class="d-none d-sm-block">내장 1</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#appSearchTab-member" role="tab">
									<span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
									<span class="d-none d-sm-block">회원 1</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#appSearchTab-payment" role="tab">
									<span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
									<span class="d-none d-sm-block">결제 0</span>
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-bs-toggle="tab" href="#appSearchTab-etc" role="tab">
									<span class="d-block d-sm-none"><i class="fas fa-cog"></i></span>
									<span class="d-none d-sm-block">기타 0</span>
								</a>
							</li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content overflow-auto p-3" style="min-height:480px; max-height:480px;">
							<div class="tab-pane active" id="appSearchTab-all" role="tabpanel">
								<div class="table-responsive">
									<div class="d-flex justify-content-between align-items-center border-bottom border-2 border-secondary pt-3 pb-2">
										<h6 class="m-0">예약 <span class="text-primary">32건</span></h6>
										<a href="javascript:void(0);" class="btn btn-sm p-0"><i class="bx bx-plus"></i> 더보기</a>
									</div>
									<table class="table table-sm text-center align-middle">
										<tbody>
											<tr>
												<td>04.17(화)</td>
												<td><a href="/gds_simple/front/reservation/booking_temp.php">09:18</a></td>
												<td>서코스</td>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>165,000</td>
												<td>4명</td>
												<td>AGL</td>
												<td>No Caddy</td>
												<td>메모없음</td>
											</tr>
											<tr>
												<td>04.17(화)</td>
												<td><a href="/gds_simple/front/reservation/booking_temp.php">09:18</a></td>
												<td>서코스</td>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>165,000</td>
												<td>4명</td>
												<td>AGL</td>
												<td>No Caddy</td>
												<td>메모없음</td>
											</tr>
											<tr>
												<td>04.17(화)</td>
												<td><a href="/gds_simple/front/reservation/booking_temp.php">09:18</a></td>
												<td>서코스</td>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>165,000</td>
												<td>4명</td>
												<td>AGL</td>
												<td>No Caddy</td>
												<td>메모없음</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="table-responsive">
									<div class="d-flex justify-content-between align-items-center border-bottom border-2 border-secondary pt-3 pb-2">
										<h6 class="m-0">내장 <span class="text-primary">1건</span></h6>
									</div>

									<table class="table table-sm text-center align-middle">
										<tbody>
											<tr>
												<td rowspan="3">04.17(화)</td>
												<td rowspan="3">09:18</td>
												<td rowspan="3">서코스</td>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>한마음라이온스</td>
												<td><i class="bx bxs-key"></i> M183</td>
												<td>경기</td>
											</tr>
											<tr>
												<td>
													<a href="#">이미연</a>
												</td>
												<td>한마음라이온스</td>
												<td><i class="bx bxs-key"></i> W182</td>
												<td>경기</td>
											</tr>
											<tr>
												<td>
													<a href="#">김이박</span></a>
												</td>
												<td>한마음라이온스</td>
												<td><i class="bx bxs-key"></i> M181</td>
												<td>경기</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="table-responsive">
									<div class="d-flex justify-content-between align-items-center border-bottom border-2 border-secondary pt-3 pb-2">
										<h6 class="m-0">회원 <span class="text-primary">1건</span></h6>
									</div>

									<table class="table table-sm text-center align-middle">
										<tbody>
											<tr>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>K9876</td>
												<td>010.1234.5678</td>
												<td>일반회원</td>
												<td>한마음라이온스 총무</td>
												<td>DC_지역1</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane" id="appSearchTab-booking" role="tabpanel">
								<div class="table-responsive">
									<div class="d-flex justify-content-between align-items-center border-bottom border-2 border-secondary pt-3 pb-2">
										<h6 class="m-0">예약 <span class="text-primary">32건</span></h6>
										<a href="javascript:void(0);" class="btn btn-sm p-0"><i class="bx bx-plus"></i> 더보기</a>
									</div>
									<table class="table table-sm text-center align-middle">
										<tbody>
											<tr>
												<td>04.17(화)</td>
												<td><a href="/gds_simple/front/reservation/booking_temp.php">09:18</a></td>
												<td>서코스</td>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>165,000</td>
												<td>4명</td>
												<td>AGL</td>
												<td>No Caddy</td>
												<td>메모없음</td>
											</tr>
											<tr>
												<td>04.17(화)</td>
												<td><a href="/gds_simple/front/reservation/booking_temp.php">09:18</a></td>
												<td>서코스</td>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>165,000</td>
												<td>4명</td>
												<td>AGL</td>
												<td>No Caddy</td>
												<td>메모없음</td>
											</tr>
											<tr>
												<td>04.17(화)</td>
												<td><a href="/gds_simple/front/reservation/booking_temp.php">09:18</a></td>
												<td>서코스</td>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>165,000</td>
												<td>4명</td>
												<td>AGL</td>
												<td>No Caddy</td>
												<td>메모없음</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane" id="appSearchTab-with" role="tabpanel">
								<div class="table-responsive">
									<div class="d-flex justify-content-between align-items-center border-bottom border-2 border-secondary pt-3 pb-2">
										<h6 class="m-0">내장 <span class="text-primary">1건</span></h6>
									</div>

									<table class="table table-sm text-center align-middle">
										<tbody>
											<tr>
												<td rowspan="3">04.17(화)</td>
												<td rowspan="3">09:18</td>
												<td rowspan="3">서코스</td>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>한마음라이온스</td>
												<td><i class="bx bxs-key"></i> M183</td>
												<td>경기</td>
											</tr>
											<tr>
												<td>
													<a href="#">이미연</a>
												</td>
												<td>한마음라이온스</td>
												<td><i class="bx bxs-key"></i> W182</td>
												<td>경기</td>
											</tr>
											<tr>
												<td>
													<a href="#">김이박</a>
												</td>
												<td>한마음라이온스</td>
												<td><i class="bx bxs-key"></i> M181</td>
												<td>경기</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane" id="appSearchTab-member" role="tabpanel">
								<div class="table-responsive">
									<div class="d-flex justify-content-between align-items-center border-bottom border-2 border-secondary pt-3 pb-2">
										<h6 class="m-0">회원 <span class="text-primary">1건</span></h6>
									</div>

									<table class="table table-sm text-center align-middle">
										<tbody>
											<tr>
												<td>
													<a href="#"><span class="bg-light text-primary">홍길동</span></a>
												</td>
												<td>K9876</td>
												<td>010.1234.5678</td>
												<td>일반회원</td>
												<td>한마음라이온스 총무</td>
												<td>DC_지역1</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
							<div class="tab-pane" id="appSearchTab-payment" role="tabpanel">
								<p class="text-center">검색결과 없음</p>
							</div>
							<div class="tab-pane" id="appSearchTab-etc" role="tabpanel">
								<p class="text-center">검색결과 없음</p>
							</div>
						</div>					
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<span class="company-name position-absolute start-50 translate-middle">2023 © Tiger GDS.</span>