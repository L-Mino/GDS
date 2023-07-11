<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '위반 조치'; include "../partials/title-meta.php"; ?>
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
                                        <div class="d-flex align-items-center mb-3">
                                            <span class="code-title">위약 조치</span>
                                            <!--span class="mx-2">-</span>
                                            <span>설명설명설명설명설명설명설명설명설명설명설명설명설명</span-->
                                        </div>

                                        <div class="table-fixed-head card h-100 mb-0">
                                            <table class="table text-center w-100 mb-0 nowrap">
                                                <colgroup>
                                                    <col style="min-width:120px;">
                                                    <col style="min-width:70px; width:70px;">
                                                    <col style="min-width:100px;">
                                                    <col style="min-width:100px;">
                                                    <col style="min-width:180px;">																	
                                                    <col style="min-width:60px; width:60px;">
                                                    <col style="min-width:200px;">
                                                    <col style="min-width:70px; width:70px;">
                                                </colgroup>

                                                <thead>
                                                    <tr>
                                                        <th>구분명</th>
                                                        <th>사용안함</th>
                                                        <th>위약 기간</th>
                                                        <th>위약금</th>
                                                        <th>위약 퍼센트 (팀그린피 기준)</th>																			
                                                        <th>정렬</th>
                                                        <th>비고</th>
                                                        <th>저장</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-control form-control-em text-center p-0" type="text" placeholder="구분명"></td>
                                                        <td><input class="form-check-input" type="checkbox" disabled></td>
                                                        <td><input class="form-control form-control-em text-center p-0" type="text" placeholder="위약기간"></td>
                                                        <td><input class="form-control form-control-em text-center p-0" type="text" placeholder="위약금"></td>
                                                        <td><input class="form-control form-control-em text-center p-0" type="text" placeholder="위약퍼센트"></td>
                                                        <td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬"></td>
                                                        <td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
                                                        <td><button type="button" class="btn btn-outline-custom">저장</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>위약금 30%</td>
                                                        <td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td>30%</td>																		
                                                        <td>1</td>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-outline-custom">수정</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>위약금 50%</td>
                                                        <td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
                                                        <td></td>
                                                        <td></td>																		
                                                        <td>50%</td>
                                                        <td>2</td>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-outline-custom">수정</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>예약금지 1M</td>
                                                        <td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
                                                        <td>1M</td>
                                                        <td></td>
                                                        <td></td>																		
                                                        <td>3</td>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-outline-custom">수정</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>예약금지 2M</td>
                                                        <td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
                                                        <td>2M</td>
                                                        <td></td>
                                                        <td></td>																		
                                                        <td>4</td>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-outline-custom">수정</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>예약금지 3M</td>
                                                        <td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
                                                        <td>3M</td>
                                                        <td></td>
                                                        <td></td>																		
                                                        <td>5</td>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-outline-custom">수정</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>위약금 10</td>
                                                        <td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
                                                        <td></td>
                                                        <td>100,000</td>
                                                        <td></td>
                                                        <td>6</td>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-outline-custom">수정</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>위약금 20</td>
                                                        <td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
                                                        <td></td>
                                                        <td>200,000</td>
                                                        <td></td>																		
                                                        <td>7</td>
                                                        <td></td>
                                                        <td><button type="button" class="btn btn-outline-custom">수정</button></td>
                                                    </tr>
                                                    <tr>
                                                        <td>위약금 30</td>
                                                        <td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
                                                        <td></td>
                                                        <td>300,000</td>
                                                        <td></td>																		
                                                        <td>7</td>
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
		                <!--//row -  -->

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
