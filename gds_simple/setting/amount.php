<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '금액 기준 설정'; include "../partials/title-meta.php"; ?>
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
                                        <h4 class="card-title">금액 기준 설정</h4>
										<div class="d-flex flex-wrap align-items-center gap-2 my-3">
                                            <span>적용일자</span>
                                            <div class="form-check form-check-inline ps-0 me-0">
                                                <select class="form-select text-blue fw-semibold border-0 h-100">
                                                    <option value="2023.05.01 (일)" selected="">2023.05.01 (월)</option>
                                                    <option value="2023.05.02 (화)">2023.05.02 (화)</option>
                                                </select>
                                            </div>
                                            <span class="text-gray ms-auto me-3">적용일시: 2023.06.30 00:00:00</span>
											<button type="button" class="btn btn-outline-custom"> 저장</button>
										</div>

                                        <div class="border-box border-bottom-0">
                                            <table class="table table-layout-fixed w-100 mb-0">
                                                <colgroup>
                                                    <col style="width:150px;">
                                                    <col style="width:auto">
                                                </colgroup>

                                                <tbody>
                                                    <tr>
                                                        <th>부가세 설정</th>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <select class="form-select" style="width:173px;">
                                                                    <option value="공급가액 기준" selected>공급가액 기준</option>
                                                                    <option value="합계금액 기준">합계금액 기준</option>
                                                                </select>
                                                                <div class="form-check form-check-inline m-0">
                                                                    <input class="form-control input_w60 text-center" type="text" maxlength="2" value="10">
                                                                </div>
                                                                <span class="ms-2">%</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>금액표시 단위</th>
                                                        <td>
                                                            <div class="d-flex align-items-center ms-10">
                                                                <span>정상</span>
                                                                <div class="form-check form-check-inline ps-2 m-0">
                                                                    <input class="form-control input_w60 text-center" type="text" value="1">
                                                                </div>
                                                                <span class="ms-2">원</span>

                                                                <div class="txt-line mx-3"></div>

                                                                <span>축소</span>
                                                                <div class="form-check form-check-inline ps-2 m-0">
                                                                    <input class="form-control input_w60 text-center" type="text" value="1,000">
                                                                </div>
                                                                <span class="ms-2">원</span>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>그린피 금액 단위</th>
                                                        <td>
                                                            <select class="form-select" style="width:173px;">
                                                                <option value="1,000원">1,000원</option>
                                                                <option value="5,000원">5,000원</option>
                                                                <option value="10,000원" selected>10,000원</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th>상품 금액 단위</th>
                                                        <td>
                                                            <select class="form-select" style="width:173px;">
                                                                <option value="100원">100원</option>
                                                                <option value="500원">500원</option>
                                                                <option value="1,000원" selected>1,000원</option>
                                                            </select>
                                                        </td>
                                                    </tr>                                                    
                                                    <tr>
                                                        <th>금액 절사</th>
                                                        <td>
                                                            <select class="form-select" style="width:173px;">
                                                                <option value="0원 절사 없음" selected>0원 절사 없음</option>
                                                                <option value="1원 단위 절사">1원 단위 절사</option>
                                                                <option value="10원 단위 절사">10원 단위 절사</option>
                                                                <option value="100원 단위 절사">100원 단위 절사</option>
                                                                <option value="1,000원 단위 절사">1,000원 단위 절사</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
									</div>
								</div>

								<div class="card mb-0"">
									<div class="card-body">
										<h4 class="card-title me-auto">그린피 TAX 설정 - 대한민국</h4>
										<div class="d-flex flex-wrap align-items-center gap-2 my-3">
                                            <span>적용일자</span>
                                            <div class="form-check form-check-inline ps-0 me-0">
                                                <select class="form-select text-blue fw-semibold border-0 h-100">
                                                    <option value="2023.05.01 (일)" selected="">2023.05.01 (월)</option>
                                                    <option value="2023.05.02 (화)">2023.05.02 (화)</option>
                                                </select>
                                            </div>
                                            <span class="text-gray ms-auto me-3">적용일시: 2023.06.30 00:00:00</span>
											<button type="button" class="btn btn-outline-custom"> 저장</button>
										</div>

                                        <div class="d-flex flex-wrap align-items-center mb-2">
											<h6 class="me-auto">회원제</h6>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="memberRadios" id="memberRadios1" value="사용" checked>
												<label class="form-check-label fw-bold" for="memberRadios1">사용</label>
											</div>

                                            <div class="form-check form-check-inline m-0">
                                                <input class="form-check-input" type="radio" name="memberRadios" id="memberRadios2" value="사용안함">
												<label class="form-check-label fw-bold" for="memberRadios2">사용안함</label>
											</div>
										</div>     
                                        <div class="d-flex gap-3">
                                            <div class="col">
                                                <table class="table table-layout-fixed text-center w-100 table-green mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>그린피</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">공급가 + 부가세</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-semibold text-blue">180,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col"> 
                                                <table class="table table-layout-fixed text-center w-100 table-red mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>부가세</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">공급가 10%</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-semibold text-red">16,364</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col">
                                                <table class="table table-layout-fixed text-center w-100 table-yellow mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">공급가</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">입장료</th>
                                                            <th class="fw-normal">세금 합계</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="141,436"></td>
                                                            <td class="fw-semibold">22,200</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-5">
                                                <table class="table table-layout-fixed text-center w-100 table-gray mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="4">세금</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">개별 소비세</th>
                                                            <th class="fw-normal">교육세</th>
                                                            <th class="fw-normal">농어촌 특별세</th>
                                                            <th class="fw-normal">체육진흥기금</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="12,000"></td>
                                                            <td><input class="form-control text-center" type="text" value="3,600"></td>
                                                            <td><input class="form-control text-center" type="text" value="3,600"></td>
                                                            <td><input class="form-control text-center" type="text" value="3,000"></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-wrap align-items-center mt-5 mb-2">
											<h6 class="me-auto">비회원제</h6>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="nonMemberRadios" id="nonMemberRadios1" value="사용" checked>
												<label class="form-check-label fw-bold" for="nonMemberRadios1">사용</label>
											</div>

                                            <div class="form-check form-check-inline m-0">
                                                <input class="form-check-input" type="radio" name="nonMemberRadios" id="nonMemberRadios2" value="사용안함">
												<label class="form-check-label fw-bold" for="nonMemberRadios2">사용안함</label>
											</div>
										</div>     
                                        <div class="d-flex gap-3">
                                            <div class="col">
                                                <table class="table table-layout-fixed text-center w-100 table-green mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>그린피</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">공급가 + 부가세</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-semibold text-blue">180,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col"> 
                                                <table class="table table-layout-fixed text-center w-100 table-red mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>부가세</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">공급가 10%</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-semibold text-red">16,364</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col">
                                                <table class="table table-layout-fixed text-center w-100 table-yellow mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">공급가</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">입장료</th>
                                                            <th class="fw-normal">세금 합계</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="151,636"></td>
                                                            <td class="fw-semibold">12,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-5">
                                                <table class="table table-layout-fixed text-center w-100 table-gray mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="4">세금</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">개별 소비세</th>
                                                            <th class="fw-normal">교육세</th>
                                                            <th class="fw-normal">농어촌 특별세</th>
                                                            <th class="fw-normal">체육진흥기금</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="12,000"></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="0" disabled></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="0" disabled></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="0" disabled></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>  

                                        <div class="d-flex flex-wrap align-items-center mt-5 mb-2">
											<h6 class="me-auto">대중제</h6>

                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="popularRadios" id="popularRadios1" value="사용" checked>
												<label class="form-check-label fw-bold" for="popularRadios1">사용</label>
											</div>

                                            <div class="form-check form-check-inline m-0">
                                                <input class="form-check-input" type="radio" name="popularRadios" id="popularRadios2" value="사용안함">
												<label class="form-check-label fw-bold" for="popularRadios2">사용안함</label>
											</div>
										</div>     
                                        <div class="d-flex gap-3">
                                            <div class="col">
                                                <table class="table table-layout-fixed text-center w-100 table-green mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>그린피</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">공급가 + 부가세</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-semibold text-blue">180,000</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col"> 
                                                <table class="table table-layout-fixed text-center w-100 table-red mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>부가세</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">공급가 10%</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td class="fw-semibold text-red">16,364</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col">
                                                <table class="table table-layout-fixed text-center w-100 table-yellow mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="2">공급가</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">입장료</th>
                                                            <th class="fw-normal">세금 합계</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" value="163,636"></td>
                                                            <td class="fw-semibold">0</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>

                                            <div class="col-5">
                                                <table class="table table-layout-fixed text-center w-100 table-gray mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th colspan="4">세금</th>
                                                        </tr>
                                                        <tr>
                                                            <th class="fw-normal">개별 소비세</th>
                                                            <th class="fw-normal">교육세</th>
                                                            <th class="fw-normal">농어촌 특별세</th>
                                                            <th class="fw-normal">체육진흥기금</th>
                                                        </tr>                                                    
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td><input class="form-control text-center" type="text" placeholder="0" disabled></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="0" disabled></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="0" disabled></td>
                                                            <td><input class="form-control text-center" type="text" placeholder="0" disabled></td>
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
