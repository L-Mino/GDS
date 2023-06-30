<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '회원권 설정'; include "../partials/title-meta.php"; ?>
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
                                        <h4 class="card-title">회원권 설정</h4>
										<div class="d-flex flex-wrap align-items-center gap-2 my-3">
                                            <span>적용일자</span>
                                            <div class="form-check form-check-inline ps-0 me-0">
                                                <select class="form-select text-blue fw-semibold border-0 h-100">
                                                    <option value="2023.06.30 (일)" selected>2023.05.01 (월)</option>
                                                    <option value="2023.06.30 (화)">2023.05.02 (화)</option>
                                                </select>
                                            </div>
                                            <span class="text-gray ms-auto">적용일시: 2023.06.30 00:00:00</span>
											<button type="button" class="btn btn-outline-custom"> 저장</button>
										</div>

                                        <div class="d-flex">
                                            <div class="col-3">
                                                <table class="table table-layout-fixed text-center table-green w-100 mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">회원권</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">회원권 명</th>
                                                            <th class="fw-normal">구분</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="VIP 24500"></td>
                                                            <td>
                                                                <select class="form-select">
                                                                    <option value="개인 지명" selected>개인 지명</option>
                                                                    <option value="개인 무기명">개인 무기명</option>
                                                                    <option value="법인 지명">법인 지명</option>
                                                                    <option value="법인 무기명">법인 무기명</option>
                                                                    <option value="가족">가족</option>
                                                                    <option value="지정">지정</option>
                                                                </select>
                                                            </td>                                                            
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="VIP 24500"></td>
                                                            <td>
                                                                <select class="form-select">
                                                                    <option value="개인 지명" selected>개인 지명</option>
                                                                    <option value="개인 무기명">개인 무기명</option>
                                                                    <option value="법인 지명">법인 지명</option>
                                                                    <option value="법인 무기명">법인 무기명</option>
                                                                    <option value="가족">가족</option>
                                                                    <option value="지정">지정</option>
                                                                </select>
                                                            </td>                                                            
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="VIP 24500"></td>
                                                            <td>
                                                                <select class="form-select">
                                                                    <option value="개인 지명" selected>개인 지명</option>
                                                                    <option value="개인 무기명">개인 무기명</option>
                                                                    <option value="법인 지명">법인 지명</option>
                                                                    <option value="법인 무기명">법인 무기명</option>
                                                                    <option value="가족">가족</option>
                                                                    <option value="지정">지정</option>
                                                                </select>
                                                            </td>                                                            
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="VIP 24500"></td>
                                                            <td>
                                                                <select class="form-select">
                                                                    <option value="개인 지명" selected>개인 지명</option>
                                                                    <option value="개인 무기명">개인 무기명</option>
                                                                    <option value="법인 지명">법인 지명</option>
                                                                    <option value="법인 무기명">법인 무기명</option>
                                                                    <option value="가족">가족</option>
                                                                    <option value="지정">지정</option>
                                                                </select>
                                                            </td>                                                            
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="VIP 24500"></td>
                                                            <td>
                                                                <select class="form-select">
                                                                    <option value="개인 지명" selected>개인 지명</option>
                                                                    <option value="개인 무기명">개인 무기명</option>
                                                                    <option value="법인 지명">법인 지명</option>
                                                                    <option value="법인 무기명">법인 무기명</option>
                                                                    <option value="가족">가족</option>
                                                                    <option value="지정">지정</option>
                                                                </select>
                                                            </td>                                                            
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="VIP 24500"></td>
                                                            <td>
                                                                <select class="form-select">
                                                                    <option value="개인 지명" selected>개인 지명</option>
                                                                    <option value="개인 무기명">개인 무기명</option>
                                                                    <option value="법인 지명">법인 지명</option>
                                                                    <option value="법인 무기명">법인 무기명</option>
                                                                    <option value="가족">가족</option>
                                                                    <option value="지정">지정</option>
                                                                </select>
                                                            </td>                                                            
                                                        </tr>                                                                                                                                                                                                                                                                                        
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-3">
                                                <table class="table table-layout-fixed text-center table-yellow w-100 mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="3">월 예약가능 횟수</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">월 전체 횟수</th>
                                                            <th class="fw-normal">평일</th>
                                                            <th class="fw-normal px-0">주말/공휴일</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="10"></td>
                                                            <td><input class="form-control text-center" type="text" value="6"></td>
                                                            <td><input class="form-control text-center" type="text" value="4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="10"></td>
                                                            <td><input class="form-control text-center" type="text" value="6"></td>
                                                            <td><input class="form-control text-center" type="text" value="4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="10"></td>
                                                            <td><input class="form-control text-center" type="text" value="6"></td>
                                                            <td><input class="form-control text-center" type="text" value="4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="10"></td>
                                                            <td><input class="form-control text-center" type="text" value="6"></td>
                                                            <td><input class="form-control text-center" type="text" value="4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="10"></td>
                                                            <td><input class="form-control text-center" type="text" value="6"></td>
                                                            <td><input class="form-control text-center" type="text" value="4"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="10"></td>
                                                            <td><input class="form-control text-center" type="text" value="6"></td>
                                                            <td><input class="form-control text-center" type="text" value="4"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-3">
                                                <table class="table table-layout-fixed text-center table-gray w-100 mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="3">9홀</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">평일 그린피</th>
                                                            <th class="fw-normal">주말 그린피</th>
                                                            <th class="fw-normal px-0">공휴일 그린피</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div> 
                                            
                                            <div class="col-3">
                                                <table class="table table-layout-fixed text-center table-gray w-100 mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="3">18홀</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">평일 그린피</th>
                                                            <th class="fw-normal">주말 그린피</th>
                                                            <th class="fw-normal px-0">공휴일 그린피</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="150,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="170,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="180,000"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>                                             
                                        </div>

                                        <p class="text-center border-bottom py-1 mb-0">
                                            <button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button>
                                        </p>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -->

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
