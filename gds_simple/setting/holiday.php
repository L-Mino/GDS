<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '공휴일 관리'; include "../partials/title-meta.php"; ?>
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
										<div class="row">
											<div class="col-6">
												<div id="calendar01" class="teetime-calendar"></div>
											</div>
											
											<div class="col-6">
												<div id="calendar02" class="teetime-calendar"></div>
											</div>											
										</div>
									</div>
								</div>											
                            </div>
                        </div>
		                <!--//row - calendar -->							
						
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<h4 class="card-title">공휴일 관리</h4>

										<div class="row">
											<div class="col-12">
												<table class="table text-center">
													<thead>
														<tr>
															<th>구분</th>
															<th>날짜</th>
															<th>주기</th>															
															<th>휴일명</th>
															<th>비고</th>
														</tr>
													</thead>

													<tbody>
														<tr>
															<td>1</td>
															<td>23.06.06(화)</td>
															<td>매년 6월 6일</td>
															<td>현충일</td>
															<td>
																<button type="button" class="btn btn-outline-custom">수정</button>
																<button type="button" class="btn btn-outline-custom">삭제</button>
															</td>
														</tr>
														<tr>
															<td>2</td>
															<td>23.06.10(토)</td>
															<td>반복 안함</td>															
															<td>대체공휴일</td>
															<td>
																<button type="button" class="btn btn-outline-custom">수정</button>
																<button type="button" class="btn btn-outline-custom">삭제</button>
															</td>
														</tr>
													</tbody>
												</table>
												
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
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M7.88969 0L2.93994 4.94975L7.88969 9.89949L8.95035 8.83883L5.06126 4.94975L8.95035 1.06066L7.88969 0ZM0 10H1.5L1.5 3.89067e-05H0V10Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="Previous">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M0.351074 5.05054L5.30082 0.100791L6.36148 1.16145L2.47239 5.05054L6.36148 8.93962L5.30082 10.0003L0.351074 5.05054Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="Next">
																	<span aria-hidden="true">
																		<svg width="11" height="10" viewBox="0 0 11 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M10.6499 4.94971L5.70016 9.89945L4.6395 8.83879L8.52858 4.94971L4.6395 1.06062L5.70016 -3.93408e-05L10.6499 4.94971Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
															<li class="page-item">
																<a class="page-link border-0 py-0" href="javascript:void(0);" aria-label="NextAll">
																	<span aria-hidden="true">
																		<svg width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" class="align-baseline">
																			<path fill-rule="evenodd" clip-rule="evenodd" d="M1.28853 10.0002L6.23828 5.0505L1.28854 0.10075L0.227876 1.16141L4.11696 5.0505L0.227875 8.93958L1.28853 10.0002ZM9.17822 -3.91006e-05L7.67822 -3.92318e-05L7.67822 9.99996L9.17822 9.99996L9.17822 -3.91006e-05Z"></path>
																		</svg>
																	</span>
																</a>
															</li>
														</ul>
													</nav>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->
						
						<!-- Add New Event MODAL -->
						<div class="modal fade addEventModal" tabindex="-1" aria-labelledby="addEventModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addEventModalLabel">공휴일 등록</h5>
										<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
									</div>
									<div class="modal-body">
										<div class="border-box border-bottom-0">
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:120px;">
													<col style="width:auto">
												</colgroup>

												<tbody>
													<tr>
														<th class="text-end">공휴일명</th>
														<td><input type="text" class="form-control"></td>
													</tr>
													<tr>
														<th class="text-end">일자</th>
														<td>			
															<div class="d-flex">
																<div class="form-check form-check-inline ps-0 me-0">
																	<input type="text" class="form-control datepicker calendarPic">
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<th class="text-end align-top pt-10">주기</th>
														<td>
															<div class="form-check mt-1">
																<input class="form-check-input" type="radio" name="radio" id="radio01" value="option1" checked>
																<label class="form-check-label" for="radio01">반복 안함</label>
															</div>
															<div class="form-check mt-1">
																<input class="form-check-input" type="radio" name="radio" id="radio02" value="option2">
																<label class="form-check-label" for="radio02">매년 6월 30일</label>
															</div>
															<div class="form-check mt-1">
																<input class="form-check-input" type="radio" name="radio" id="radio03" value="option3">
																<label class="form-check-label" for="radio03">매년 6월 마지막 금요일</label>
															</div>
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
						<!-- //modal - addEventModal -->						
						
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
		
		<!-- Calendar js -->
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				var calendarEl01 = document.getElementById('calendar01');
				var calendarEl02 = document.getElementById('calendar02');
				var calendar01 = new FullCalendar.Calendar(calendarEl01, {
					headerToolbar: {
						left: 'prevYear,nextYear',
						center: 'prev,title,next',
						right: ''
					},
					locale: 'ko',
					windowResize: true,
					initialDate: '2023-06-01',
					height: 'auto',
					contentHeight:50,
					aspectRatio:'1.35',
					//editable: true,
					//droppable: true,
					dayCellDidMount: function (info) {
						var day = moment(info.date).locale('en').format('D'); // Get the localized date; hu is for hebrew here. You can use like 'en', 'de'
						// Hide the original element
						var originElement = info.el.querySelectorAll('.fc-daygrid-day-number');
						originElement.forEach(e => e.classList.add('d-none'));
						//Insert custom or localized text 
						var targetElement = info.el.querySelectorAll('.fc-daygrid-day-top');
						targetElement.forEach(e => e.innerHTML = day);
					},
					eventSources: [
						// your event source
						{
							events: [
								{
									className:'holiday',
									title:'현충일',
									start:'2023-06-06',
									end:'2023-06-06',
									textColor: '#D33F3F',
									displayOrder:1
								}
							]
						}
					],
					dateClick: function(event) {
						var modal = $('.addEventModal');
						modal.modal();
						$('.addEventModal').modal('show');
					}
					/*
				    googleCalendarApiKey : 'AIzaSyAspeHMYvboTABHhq1oAWFOQ-huDZqjzNM',
					eventOrder : 'displayOrder', 
					eventSources :[ 
						{
							googleCalendarId : 'ko.south_korea.official#holiday@group.v.calendar.google.com',
							className:'holiday',
							textColor: '#D33F3F',
							displayOrder:1	
						} 
					]*/
				});

				var calendar02 = new FullCalendar.Calendar(calendarEl02, {
					headerToolbar: {
						left: 'prevYear,nextYear',
						center: 'prev,title,next',
						right: 'toggleButton'
					},
					customButtons: {
						toggleButton: {
							click: function() {
								$('.fc-view-harness').toggle();
								$(this).toggleClass('hide');

								if($(this).is('.hide')){	
									$(this).attr('title', '달력 열기'); 
									$(this).text('달력 열기');
								} else {
									$(this).attr('title', '달력 접기'); 
									$(this).text('달력 접기');
								}
							}
						}
					},
					locale: 'ko',
					initialDate: '2023-07-01',
					windowResize: true,
					height: 'auto',
					contentHeight:50,
					aspectRatio:'1.35',
					//editable: true,
					//droppable: true,
					dayCellDidMount: function (info) {
						var day = moment(info.date).locale('en').format('D'); // Get the localized date; hu is for hebrew here. You can use like 'en', 'de'
						// Hide the original element
						var originElement = info.el.querySelectorAll('.fc-daygrid-day-number');
						originElement.forEach(e => e.classList.add("d-none"));
						//Insert custom or localized text 
						var targetElement = info.el.querySelectorAll('.fc-daygrid-day-top');
						targetElement.forEach(e => e.innerHTML = day);
					},
					dateClick: function(event) {
						var modal = $('.addEventModal');
						modal.modal();
						$('.addEventModal').modal('show');
					}
				});
				calendar01.render();
				calendar02.render();

				$('.fc-toggleButton-button').text('달력 접기');
				$('.teetime-calendar .fc-header-toolbar button').removeClass('fc-button-primary');
			});
		</script>		

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
