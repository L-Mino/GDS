<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '코스 공략'; include "../partials/title-meta.php"; ?>
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
									<div class="card-body">
										<div class="d-flex mb-3">
											<ul class="nav nav-tabs-custom me-auto" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#courseInfo01" role="tab">
														<span>베어코스 개요</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#courseInfo02" role="tab">
														<span>크리크코스 개요</span>
													</a>
												</li>
											</ul>
											
											<div class="d-flex gap-2">
												<button class="btn btn-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#courseInfo" aria-controls="courseInfo">미리보기</button>
												<button class="btn btn-outline-custom" type="button">수정</button>
												<button class="btn btn-outline-custom" id="save"type="button">저장</button>
											</div>	
										</div>
										
										<div class="tab-content">
											<div class="tab-pane active" id="courseInfo01" role="tabpanel">
												<div class="course-info-wrap border-box">
													<h5 class="course-info-tit">클럽하우스&코스</h5>
													<p class="course-info-txt">베어크리크 포천 클럽하우스는 운악산의 경관과 조화를 이루며 최대한 자연과 동화되어 원래부터 그 자리에 있었던 듯 이질감이 없도록 설계되었습니다. 단층건물에 박공지붕이 넓게 펼쳐져 있으며 최대한 대지에 안착시켜 건물이 자연의 일부로서 느껴지게 합니다. 클럽하우스 바로 앞에 위치한 베어코스는 넓고 긴 페어웨이와 장쾌한 스타일의 도전적인 코스입니다. 웅장한 느낌의 운악산과 어우러진 천혜의 자연경관 속에 자리 잡은 베어코스는 모든 수준의 골퍼들이 즐길 수 있는 편안함과 다양한 난이도를 갖추고 있습니다. 크리크코스는 자연을 닮은 아름다운 조경과 양잔디의 조화가 어우려져 멋진 경관을 연출하는 프리미엄 코스입니다. 전 홀이 그린이 보이도록 설계된 한국의 보기 드문 산악지형코스이며, 전략성을 극대화한 코스 설계로 골프의 즐거움과 감동을 충분히 느끼실 수 있습니다.</p>
													
													<div id="courseInfo01Indicators" class="carousel slide" data-bs-ride="carousel">
														<ol class="carousel-indicators">
															<li data-bs-target="#courseInfo01Indicators" data-bs-slide-to="0" class="active"></li>
															<li data-bs-target="#courseInfo01Indicators" data-bs-slide-to="1"></li>
															<li data-bs-target="#courseInfo01Indicators" data-bs-slide-to="2"></li>
														</ol>
														<div class="carousel-inner" role="listbox">
															<div class="carousel-item active">
																<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club01.png" alt="First slide">
															</div>
															<div class="carousel-item">
																<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club02.png" alt="Second slide">
															</div>
															<div class="carousel-item">
																<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club03.png" alt="Third slide">
															</div>
														</div>
														<a class="carousel-control-prev" href="#courseInfo01Indicators" role="button" data-bs-slide="prev">
															<span class="carousel-control-prev-icon" aria-hidden="true"></span>
															<span class="sr-only">Previous</span>
														</a>
														<a class="carousel-control-next" href="#courseInfo01Indicators" role="button" data-bs-slide="next">
															<span class="carousel-control-next-icon" aria-hidden="true"></span>
															<span class="sr-only">Next</span>
														</a>
													</div>
													
													<h5 class="course-info-tit">코스 개요</h5>
													
													<table class="table table-layout-fixed mb-0">
														<colgroup>
															<col style="width:60px;">
															<col style="width:auto;">
														</colgroup>

														<tbody>
															<tr>
																<td><span class="fw-bold text-secondary">설계자</span></td>
																<td>장정원</td>
															</tr>
															<tr>
																<td><span class="fw-bold text-secondary">형태</span></td>
																<td>산정 구릉형</td>
															</tr>
															<tr>
																<td><span class="fw-bold text-secondary">개요</span></td>
																<td>Par 72 / 6,639m / 7,260y</td>
															</tr>
															<tr>
																<td><span class="fw-bold text-secondary">잔디</span></td>
																<td>페어웨이 : 켄터키 블루그래스 <span class="dash">|</span> 그린 : 크리핑 벤트그래스 <span class="dash">|</span> 러프 : 버뮤다그래스</td>
															</tr>
															<tr>
																<td><span class="fw-bold text-secondary">벙커</span></td>
																<td>주문진 규사</td>
															</tr>															
														</tbody>
													</table>
												</div>
												
												<div class="d-flex gap-2 mt-3">
													<div class="filebox">
														<input class="form-control upload-name" style="width:500px;" readonly>
														<input type="file" id="file01">
													</div>
													<label for="file01" class="btn btn-outline-custom mb-0">파일 첨부</label>
												</div>
											</div>

											<div class="tab-pane" id="courseInfo02" role="tabpanel">
												<div class="course-info-wrap border-box">
													<h5 class="course-info-tit">클럽하우스&코스</h5>
													<p class="course-info-txt">나무 숲길을 지나 클럽하우스에 도달하면 마치 현실에서 벗어난 지상낙원(SHANGRI-LA)을 보는듯 합니다. 자연에서 얻어진 '물'을 연못에 담아 클럽 하우스와 연결하고, 그 속을 거닐며 어디든지 자연의 물을 바라볼 수 있게 합니다. 클럽하우스의 전면 파사드는 투명 유리로 디자인되어 맑은 '빛'이 스며들게 하고 외부테라스에서 출입하며 자연의 '바람'을 느끼고 교감할 수 있습니다. 고급 양잔디인 벤트그라스가 식재된 페어웨이는 섬세한 질감과 밀도를 자랑 합니다. 또한 각 홀을 둘러싸고 있는 활엽수들은 4계절의 아름다움을 선사하고, 그린 뒤 병풍처럼 펼쳐진 암반의 경관이 멋스러움을 더합니다.</p>
													
													<div id="courseInfo02Indicators" class="carousel slide" data-bs-ride="carousel">
														<ol class="carousel-indicators">
															<li data-bs-target="#courseInfo02Indicators" data-bs-slide-to="0" class="active"></li>
															<li data-bs-target="#courseInfo02Indicators" data-bs-slide-to="1"></li>
															<li data-bs-target="#courseInfo02Indicators" data-bs-slide-to="2"></li>
														</ol>
														<div class="carousel-inner" role="listbox">
															<div class="carousel-item active">
																<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club01.png" alt="First slide">
															</div>
															<div class="carousel-item">
																<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club02.png" alt="Second slide">
															</div>
															<div class="carousel-item">
																<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club03.png" alt="Third slide">
															</div>
														</div>
														<a class="carousel-control-prev" href="#courseInfo02Indicators" role="button" data-bs-slide="prev">
															<span class="carousel-control-prev-icon" aria-hidden="true"></span>
															<span class="sr-only">Previous</span>
														</a>
														<a class="carousel-control-next" href="#courseInfo02Indicators" role="button" data-bs-slide="next">
															<span class="carousel-control-next-icon" aria-hidden="true"></span>
															<span class="sr-only">Next</span>
														</a>
													</div>
													
													<h5 class="course-info-tit">코스 개요</h5>
													
													<table class="table table-layout-fixed mb-0">
														<colgroup>
															<col style="width:60px;">
															<col style="width:auto;">
														</colgroup>

														<tbody>
															<tr>
																<td><span class="fw-bold text-secondary">설계자</span></td>
																<td>장정원, 노준택(2009년 리모델링)</td>
															</tr>
															<tr>
																<td><span class="fw-bold text-secondary">형태</span></td>
																<td>산정 구릉형</td>
															</tr>
															<tr>
																<td><span class="fw-bold text-secondary">개요</span></td>
																<td>Par 72 / 6,601m / 7,219y</td>
															</tr>
															<tr>
																<td><span class="fw-bold text-secondary">잔디</span></td>
																<td>페어웨이 : 켄터키 블루그래스 <span class="dash">|</span> 그린 : 크리핑 벤트그래스 <span class="dash">|</span> 러프 : 버뮤다그래스</td>
															</tr>
															<tr>
																<td><span class="fw-bold text-secondary">벙커</span></td>
																<td>주문진 규사</td>
															</tr>															
														</tbody>
													</table>													
												</div>
												
												<div class="d-flex gap-2 mt-3">
													<div class="filebox">
														<input class="form-control upload-name" style="width:500px;" readonly>
														<input type="file" id="file02">
													</div>
													<label for="file02" class="btn btn-outline-custom mb-0">파일 첨부</label>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

						<div class="offcanvas offcanvas-course offcanvas-end" tabindex="-1" id="courseInfo" aria-labelledby="courseInfoLabel">
							<div class="offcanvas-header border-bottom">
								<h5 id="courseInfoLabel">베어코스 개요</h5>
								<!--button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button-->
								<div class="d-flex flex-wrap justify-content-end gap-2">
									<button type="button" class="btn btn-outline-custom ms-auto">코스공략정보 <i class="mdi mdi-arrow-collapse-down"></i></button>
									<button type="button" class="btn btn-outline-custom" data-bs-dismiss="offcanvas" aria-label="Close">닫기</button>
								</div>
							</div>
							<div class="offcanvas-body">
								<div class="course-info-wrap">
									<h5 class="course-info-tit">클럽하우스&코스</h5>
									<p class="course-info-txt">베어크리크 포천 클럽하우스는 운악산의 경관과 조화를 이루며 최대한 자연과 동화되어 원래부터 그 자리에 있었던 듯 이질감이 없도록 설계되었습니다. 단층건물에 박공지붕이 넓게 펼쳐져 있으며 최대한 대지에 안착시켜 건물이 자연의 일부로서 느껴지게 합니다. 클럽하우스 바로 앞에 위치한 베어코스는 넓고 긴 페어웨이와 장쾌한 스타일의 도전적인 코스입니다. 웅장한 느낌의 운악산과 어우러진 천혜의 자연경관 속에 자리 잡은 베어코스는 모든 수준의 골퍼들이 즐길 수 있는 편안함과 다양한 난이도를 갖추고 있습니다. 크리크코스는 자연을 닮은 아름다운 조경과 양잔디의 조화가 어우려져 멋진 경관을 연출하는 프리미엄 코스입니다. 전 홀이 그린이 보이도록 설계된 한국의 보기 드문 산악지형코스이며, 전략성을 극대화한 코스 설계로 골프의 즐거움과 감동을 충분히 느끼실 수 있습니다.</p>
									
									<div id="courseInfo01PopIndicators" class="carousel slide" data-bs-ride="carousel">
										<ol class="carousel-indicators">
											<li data-bs-target="#courseInfo01PopIndicators" data-bs-slide-to="0" class="active"></li>
											<li data-bs-target="#courseInfo01PopIndicators" data-bs-slide-to="1"></li>
											<li data-bs-target="#courseInfo01PopIndicators" data-bs-slide-to="2"></li>
										</ol>
										<div class="carousel-inner" role="listbox">
											<div class="carousel-item active">
												<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club01.png" alt="First slide">
											</div>
											<div class="carousel-item">
												<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club02.png" alt="Second slide">
											</div>
											<div class="carousel-item">
												<img class="d-block img-fluid" src="/gds_simple/assets/images/temp/club_p_club03.png" alt="Third slide">
											</div>
										</div>
										<a class="carousel-control-prev" href="#courseInfo01PopIndicators" role="button" data-bs-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#courseInfo01PopIndicators" role="button" data-bs-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
									
									<h5 class="course-info-tit">코스 개요</h5>
									
									<table class="table table-layout-fixed mb-0">
										<colgroup>
											<col style="width:60px;">
											<col style="width:auto;">
										</colgroup>

										<tbody>
											<tr>
												<td><span class="fw-bold text-secondary">설계자</span></td>
												<td>장정원</td>
											</tr>
											<tr>
												<td><span class="fw-bold text-secondary">형태</span></td>
												<td>산정 구릉형</td>
											</tr>
											<tr>
												<td><span class="fw-bold text-secondary">개요</span></td>
												<td>Par 72 / 6,639m / 7,260y</td>
											</tr>
											<tr>
												<td><span class="fw-bold text-secondary">잔디</span></td>
												<td>페어웨이 : 켄터키 블루그래스 <span class="dash">|</span> 그린 : 크리핑 벤트그래스 <span class="dash">|</span> 러프 : 버뮤다그래스</td>
											</tr>
											<tr>
												<td><span class="fw-bold text-secondary">벙커</span></td>
												<td>주문진 규사</td>
											</tr>															
										</tbody>
									</table>									
								</div>
							</div>
						</div>
						<!-- //offcanvas - certificate -->

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
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
