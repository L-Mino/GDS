<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '코스 안내'; include "../partials/title-meta.php"; ?>
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
											<ul class="nav nav-tabs-custom" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#courseGuide01" role="tab">
														<span>베어OUT코스</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#courseGuide02" role="tab">
														<span>베어IN코스</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#courseGuide03" role="tab">
														<span>크리크OUT코스</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#courseGuide04" role="tab">
														<span>크리크IN코스</span>
													</a>
												</li>
											</ul>
										</div>

										<div class="tab-content">
											<div class="tab-pane active" id="courseGuide01" role="tabpanel">
												<div class="d-flex mb-2">
													<span class="ms-auto me-3">단위선택</span>
													<div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="courseGuide01" id="courseGuide01YD" value="option1">
                                                        <label class="form-check-label" for="courseGuide01YD">YD</label>
                                                    </div>
													<div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="courseGuide01" id="courseGuide01M" value="option2" checked>
                                                        <label class="form-check-label" for="courseGuide01M">M</label>
                                                    </div>
												</div>

												<table class="table w-100 text-center nowrap">
													<colgroup>
														<col style="min-width:130px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="min-width:85px;">

													</colgroup>

													<thead>
														<tr class="align-middle">
															<th>구분</th>
															<th>1H</th>
															<th>2H</th>
															<th>3H</th>
															<th>4H</th>
															<th>5H</th>
															<th>6H</th>
															<th>7H</th>
															<th>8H</th>
															<th>9H</th>
															<th>소계</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>PAR</td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="36"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>HDCP</td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="9"></td>
                                                            <td><input type="text" class="form-control text-center" value="1"></td>
                                                            <td><input type="text" class="form-control text-center" value="11"></td>
                                                            <td><input type="text" class="form-control text-center" value="15"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="7"></td>
                                                            <td><input type="text" class="form-control text-center" value="17"></td>
                                                            <td><input type="text" class="form-control text-center" value="13"></td>
                                                            <td><input type="text" class="form-control text-center" value="/"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="BLACK"></td>
                                                            <td><input type="text" class="form-control text-center" value="373"></td>
                                                            <td><input type="text" class="form-control text-center" value="168"></td>
                                                            <td><input type="text" class="form-control text-center" value="396"></td>
                                                            <td><input type="text" class="form-control text-center" value="537"></td>
                                                            <td><input type="text" class="form-control text-center" value="380"></td>
                                                            <td><input type="text" class="form-control text-center" value="182"></td>
                                                            <td><input type="text" class="form-control text-center" value="382"></td>
                                                            <td><input type="text" class="form-control text-center" value="509"></td>
                                                            <td><input type="text" class="form-control text-center" value="365"></td>
                                                            <td><input type="text" class="form-control text-center" value="3,292"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="BLUE"></td>
                                                            <td><input type="text" class="form-control text-center" value="353"></td>
                                                            <td><input type="text" class="form-control text-center" value="156"></td>
                                                            <td><input type="text" class="form-control text-center" value="367"></td>
                                                            <td><input type="text" class="form-control text-center" value="503"></td>
                                                            <td><input type="text" class="form-control text-center" value="358"></td>
                                                            <td><input type="text" class="form-control text-center" value="165"></td>
                                                            <td><input type="text" class="form-control text-center" value="352"></td>
                                                            <td><input type="text" class="form-control text-center" value="487"></td>
                                                            <td><input type="text" class="form-control text-center" value="335"></td>
                                                            <td><input type="text" class="form-control text-center" value="3,049"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="WHITE"></td>
                                                            <td><input type="text" class="form-control text-center" value="324"></td>
                                                            <td><input type="text" class="form-control text-center" value="144"></td>
                                                            <td><input type="text" class="form-control text-center" value="336"></td>
                                                            <td><input type="text" class="form-control text-center" value="481"></td>
                                                            <td><input type="text" class="form-control text-center" value="336"></td>
                                                            <td><input type="text" class="form-control text-center" value="149"></td>
                                                            <td><input type="text" class="form-control text-center" value="323"></td>
                                                            <td><input type="text" class="form-control text-center" value="468"></td>
                                                            <td><input type="text" class="form-control text-center" value="303"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,864"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="GREEN"></td>
                                                            <td><input type="text" class="form-control text-center" value="296"></td>
                                                            <td><input type="text" class="form-control text-center" value="139"></td>
                                                            <td><input type="text" class="form-control text-center" value="286"></td>
                                                            <td><input type="text" class="form-control text-center" value="454"></td>
                                                            <td><input type="text" class="form-control text-center" value="294"></td>
                                                            <td><input type="text" class="form-control text-center" value="120"></td>
                                                            <td><input type="text" class="form-control text-center" value="323"></td>
                                                            <td><input type="text" class="form-control text-center" value="451"></td>
                                                            <td><input type="text" class="form-control text-center" value="303"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,666"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="RED"></td>
                                                            <td><input type="text" class="form-control text-center" value="264"></td>
                                                            <td><input type="text" class="form-control text-center" value="128"></td>
                                                            <td><input type="text" class="form-control text-center" value="259"></td>
                                                            <td><input type="text" class="form-control text-center" value="401"></td>
                                                            <td><input type="text" class="form-control text-center" value="247"></td>
                                                            <td><input type="text" class="form-control text-center" value="82"></td>
                                                            <td><input type="text" class="form-control text-center" value="301"></td>
                                                            <td><input type="text" class="form-control text-center" value="434"></td>
                                                            <td><input type="text" class="form-control text-center" value="285"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,401"></td>
                                                        </tr>
														<tr>
															<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
														</tr>
                                                    </tbody>
                                                </table>
											</div>
											<div class="tab-pane" id="courseGuide02" role="tabpanel">
												<div class="d-flex mb-2">
													<span class="ms-auto me-3">단위선택</span>
													<div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="courseGuide02" id="courseGuide02YD" value="option1">
                                                        <label class="form-check-label" for="courseGuide02YD">YD</label>
                                                    </div>
													<div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="courseGuide02" id="courseGuide02M" value="option2" checked>
                                                        <label class="form-check-label" for="courseGuide02M">M</label>
                                                    </div>
												</div>

												<table class="table w-100 text-center nowrap">
													<colgroup>
														<col style="min-width:130px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="min-width:85px;">

													</colgroup>

													<thead>
														<tr class="align-middle">
															<th>구분</th>
															<th>1H</th>
															<th>2H</th>
															<th>3H</th>
															<th>4H</th>
															<th>5H</th>
															<th>6H</th>
															<th>7H</th>
															<th>8H</th>
															<th>9H</th>
															<th>소계</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>PAR</td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="36"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>HDCP</td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="9"></td>
                                                            <td><input type="text" class="form-control text-center" value="1"></td>
                                                            <td><input type="text" class="form-control text-center" value="11"></td>
                                                            <td><input type="text" class="form-control text-center" value="15"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="7"></td>
                                                            <td><input type="text" class="form-control text-center" value="17"></td>
                                                            <td><input type="text" class="form-control text-center" value="13"></td>
                                                            <td><input type="text" class="form-control text-center" value="/"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="BLACK"></td>
                                                            <td><input type="text" class="form-control text-center" value="373"></td>
                                                            <td><input type="text" class="form-control text-center" value="168"></td>
                                                            <td><input type="text" class="form-control text-center" value="396"></td>
                                                            <td><input type="text" class="form-control text-center" value="537"></td>
                                                            <td><input type="text" class="form-control text-center" value="380"></td>
                                                            <td><input type="text" class="form-control text-center" value="182"></td>
                                                            <td><input type="text" class="form-control text-center" value="382"></td>
                                                            <td><input type="text" class="form-control text-center" value="509"></td>
                                                            <td><input type="text" class="form-control text-center" value="365"></td>
                                                            <td><input type="text" class="form-control text-center" value="3,292"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="BLUE"></td>
                                                            <td><input type="text" class="form-control text-center" value="353"></td>
                                                            <td><input type="text" class="form-control text-center" value="156"></td>
                                                            <td><input type="text" class="form-control text-center" value="367"></td>
                                                            <td><input type="text" class="form-control text-center" value="503"></td>
                                                            <td><input type="text" class="form-control text-center" value="358"></td>
                                                            <td><input type="text" class="form-control text-center" value="165"></td>
                                                            <td><input type="text" class="form-control text-center" value="352"></td>
                                                            <td><input type="text" class="form-control text-center" value="487"></td>
                                                            <td><input type="text" class="form-control text-center" value="335"></td>
                                                            <td><input type="text" class="form-control text-center" value="3,049"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="WHITE"></td>
                                                            <td><input type="text" class="form-control text-center" value="324"></td>
                                                            <td><input type="text" class="form-control text-center" value="144"></td>
                                                            <td><input type="text" class="form-control text-center" value="336"></td>
                                                            <td><input type="text" class="form-control text-center" value="481"></td>
                                                            <td><input type="text" class="form-control text-center" value="336"></td>
                                                            <td><input type="text" class="form-control text-center" value="149"></td>
                                                            <td><input type="text" class="form-control text-center" value="323"></td>
                                                            <td><input type="text" class="form-control text-center" value="468"></td>
                                                            <td><input type="text" class="form-control text-center" value="303"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,864"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="GREEN"></td>
                                                            <td><input type="text" class="form-control text-center" value="296"></td>
                                                            <td><input type="text" class="form-control text-center" value="139"></td>
                                                            <td><input type="text" class="form-control text-center" value="286"></td>
                                                            <td><input type="text" class="form-control text-center" value="454"></td>
                                                            <td><input type="text" class="form-control text-center" value="294"></td>
                                                            <td><input type="text" class="form-control text-center" value="120"></td>
                                                            <td><input type="text" class="form-control text-center" value="323"></td>
                                                            <td><input type="text" class="form-control text-center" value="451"></td>
                                                            <td><input type="text" class="form-control text-center" value="303"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,666"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="RED"></td>
                                                            <td><input type="text" class="form-control text-center" value="264"></td>
                                                            <td><input type="text" class="form-control text-center" value="128"></td>
                                                            <td><input type="text" class="form-control text-center" value="259"></td>
                                                            <td><input type="text" class="form-control text-center" value="401"></td>
                                                            <td><input type="text" class="form-control text-center" value="247"></td>
                                                            <td><input type="text" class="form-control text-center" value="82"></td>
                                                            <td><input type="text" class="form-control text-center" value="301"></td>
                                                            <td><input type="text" class="form-control text-center" value="434"></td>
                                                            <td><input type="text" class="form-control text-center" value="285"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,401"></td>
                                                        </tr>
														<tr>
															<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
														</tr>
                                                    </tbody>
                                                </table>
											</div>
											<div class="tab-pane" id="courseGuide03" role="tabpanel">
												<div class="d-flex mb-2">
													<span class="ms-auto me-3">단위선택</span>
													<div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="courseGuide03" id="courseGuide03YD" value="option1">
                                                        <label class="form-check-label" for="courseGuide03YD">YD</label>
                                                    </div>
													<div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="courseGuide03" id="courseGuide03M" value="option2" checked>
                                                        <label class="form-check-label" for="courseGuide03M">M</label>
                                                    </div>
												</div>

												<table class="table w-100 text-center nowrap">
													<colgroup>
														<col style="min-width:130px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="min-width:85px;">

													</colgroup>

													<thead>
														<tr class="align-middle">
															<th>구분</th>
															<th>1H</th>
															<th>2H</th>
															<th>3H</th>
															<th>4H</th>
															<th>5H</th>
															<th>6H</th>
															<th>7H</th>
															<th>8H</th>
															<th>9H</th>
															<th>소계</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>PAR</td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="36"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>HDCP</td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="9"></td>
                                                            <td><input type="text" class="form-control text-center" value="1"></td>
                                                            <td><input type="text" class="form-control text-center" value="11"></td>
                                                            <td><input type="text" class="form-control text-center" value="15"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="7"></td>
                                                            <td><input type="text" class="form-control text-center" value="17"></td>
                                                            <td><input type="text" class="form-control text-center" value="13"></td>
                                                            <td><input type="text" class="form-control text-center" value="/"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="BLACK"></td>
                                                            <td><input type="text" class="form-control text-center" value="373"></td>
                                                            <td><input type="text" class="form-control text-center" value="168"></td>
                                                            <td><input type="text" class="form-control text-center" value="396"></td>
                                                            <td><input type="text" class="form-control text-center" value="537"></td>
                                                            <td><input type="text" class="form-control text-center" value="380"></td>
                                                            <td><input type="text" class="form-control text-center" value="182"></td>
                                                            <td><input type="text" class="form-control text-center" value="382"></td>
                                                            <td><input type="text" class="form-control text-center" value="509"></td>
                                                            <td><input type="text" class="form-control text-center" value="365"></td>
                                                            <td><input type="text" class="form-control text-center" value="3,292"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="BLUE"></td>
                                                            <td><input type="text" class="form-control text-center" value="353"></td>
                                                            <td><input type="text" class="form-control text-center" value="156"></td>
                                                            <td><input type="text" class="form-control text-center" value="367"></td>
                                                            <td><input type="text" class="form-control text-center" value="503"></td>
                                                            <td><input type="text" class="form-control text-center" value="358"></td>
                                                            <td><input type="text" class="form-control text-center" value="165"></td>
                                                            <td><input type="text" class="form-control text-center" value="352"></td>
                                                            <td><input type="text" class="form-control text-center" value="487"></td>
                                                            <td><input type="text" class="form-control text-center" value="335"></td>
                                                            <td><input type="text" class="form-control text-center" value="3,049"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="WHITE"></td>
                                                            <td><input type="text" class="form-control text-center" value="324"></td>
                                                            <td><input type="text" class="form-control text-center" value="144"></td>
                                                            <td><input type="text" class="form-control text-center" value="336"></td>
                                                            <td><input type="text" class="form-control text-center" value="481"></td>
                                                            <td><input type="text" class="form-control text-center" value="336"></td>
                                                            <td><input type="text" class="form-control text-center" value="149"></td>
                                                            <td><input type="text" class="form-control text-center" value="323"></td>
                                                            <td><input type="text" class="form-control text-center" value="468"></td>
                                                            <td><input type="text" class="form-control text-center" value="303"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,864"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="GREEN"></td>
                                                            <td><input type="text" class="form-control text-center" value="296"></td>
                                                            <td><input type="text" class="form-control text-center" value="139"></td>
                                                            <td><input type="text" class="form-control text-center" value="286"></td>
                                                            <td><input type="text" class="form-control text-center" value="454"></td>
                                                            <td><input type="text" class="form-control text-center" value="294"></td>
                                                            <td><input type="text" class="form-control text-center" value="120"></td>
                                                            <td><input type="text" class="form-control text-center" value="323"></td>
                                                            <td><input type="text" class="form-control text-center" value="451"></td>
                                                            <td><input type="text" class="form-control text-center" value="303"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,666"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="RED"></td>
                                                            <td><input type="text" class="form-control text-center" value="264"></td>
                                                            <td><input type="text" class="form-control text-center" value="128"></td>
                                                            <td><input type="text" class="form-control text-center" value="259"></td>
                                                            <td><input type="text" class="form-control text-center" value="401"></td>
                                                            <td><input type="text" class="form-control text-center" value="247"></td>
                                                            <td><input type="text" class="form-control text-center" value="82"></td>
                                                            <td><input type="text" class="form-control text-center" value="301"></td>
                                                            <td><input type="text" class="form-control text-center" value="434"></td>
                                                            <td><input type="text" class="form-control text-center" value="285"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,401"></td>
                                                        </tr>
														<tr>
															<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
														</tr>
                                                    </tbody>
                                                </table>
											</div>
											<div class="tab-pane" id="courseGuide04" role="tabpanel">
												<div class="d-flex mb-2">
													<span class="ms-auto me-3">단위선택</span>
													<div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="courseGuide04" id="courseGuide04YD" value="option1">
                                                        <label class="form-check-label" for="courseGuide04YD">YD</label>
                                                    </div>
													<div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="radio" name="courseGuide04" id="courseGuide04M" value="option2" checked>
                                                        <label class="form-check-label" for="courseGuide04M">M</label>
                                                    </div>
												</div>

												<table class="table w-100 text-center nowrap">
													<colgroup>
														<col style="min-width:130px;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="width:auto;">
														<col style="min-width:85px;">

													</colgroup>

													<thead>
														<tr class="align-middle">
															<th>구분</th>
															<th>1H</th>
															<th>2H</th>
															<th>3H</th>
															<th>4H</th>
															<th>5H</th>
															<th>6H</th>
															<th>7H</th>
															<th>8H</th>
															<th>9H</th>
															<th>소계</th>
														</tr>
													</thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>PAR</td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="4"></td>
                                                            <td><input type="text" class="form-control text-center" value="36"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>HDCP</td>
                                                            <td><input type="text" class="form-control text-center" value="5"></td>
                                                            <td><input type="text" class="form-control text-center" value="9"></td>
                                                            <td><input type="text" class="form-control text-center" value="1"></td>
                                                            <td><input type="text" class="form-control text-center" value="11"></td>
                                                            <td><input type="text" class="form-control text-center" value="15"></td>
                                                            <td><input type="text" class="form-control text-center" value="3"></td>
                                                            <td><input type="text" class="form-control text-center" value="7"></td>
                                                            <td><input type="text" class="form-control text-center" value="17"></td>
                                                            <td><input type="text" class="form-control text-center" value="13"></td>
                                                            <td><input type="text" class="form-control text-center" value="/"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="BLACK"></td>
                                                            <td><input type="text" class="form-control text-center" value="373"></td>
                                                            <td><input type="text" class="form-control text-center" value="168"></td>
                                                            <td><input type="text" class="form-control text-center" value="396"></td>
                                                            <td><input type="text" class="form-control text-center" value="537"></td>
                                                            <td><input type="text" class="form-control text-center" value="380"></td>
                                                            <td><input type="text" class="form-control text-center" value="182"></td>
                                                            <td><input type="text" class="form-control text-center" value="382"></td>
                                                            <td><input type="text" class="form-control text-center" value="509"></td>
                                                            <td><input type="text" class="form-control text-center" value="365"></td>
                                                            <td><input type="text" class="form-control text-center" value="3,292"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="BLUE"></td>
                                                            <td><input type="text" class="form-control text-center" value="353"></td>
                                                            <td><input type="text" class="form-control text-center" value="156"></td>
                                                            <td><input type="text" class="form-control text-center" value="367"></td>
                                                            <td><input type="text" class="form-control text-center" value="503"></td>
                                                            <td><input type="text" class="form-control text-center" value="358"></td>
                                                            <td><input type="text" class="form-control text-center" value="165"></td>
                                                            <td><input type="text" class="form-control text-center" value="352"></td>
                                                            <td><input type="text" class="form-control text-center" value="487"></td>
                                                            <td><input type="text" class="form-control text-center" value="335"></td>
                                                            <td><input type="text" class="form-control text-center" value="3,049"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="WHITE"></td>
                                                            <td><input type="text" class="form-control text-center" value="324"></td>
                                                            <td><input type="text" class="form-control text-center" value="144"></td>
                                                            <td><input type="text" class="form-control text-center" value="336"></td>
                                                            <td><input type="text" class="form-control text-center" value="481"></td>
                                                            <td><input type="text" class="form-control text-center" value="336"></td>
                                                            <td><input type="text" class="form-control text-center" value="149"></td>
                                                            <td><input type="text" class="form-control text-center" value="323"></td>
                                                            <td><input type="text" class="form-control text-center" value="468"></td>
                                                            <td><input type="text" class="form-control text-center" value="303"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,864"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="GREEN"></td>
                                                            <td><input type="text" class="form-control text-center" value="296"></td>
                                                            <td><input type="text" class="form-control text-center" value="139"></td>
                                                            <td><input type="text" class="form-control text-center" value="286"></td>
                                                            <td><input type="text" class="form-control text-center" value="454"></td>
                                                            <td><input type="text" class="form-control text-center" value="294"></td>
                                                            <td><input type="text" class="form-control text-center" value="120"></td>
                                                            <td><input type="text" class="form-control text-center" value="323"></td>
                                                            <td><input type="text" class="form-control text-center" value="451"></td>
                                                            <td><input type="text" class="form-control text-center" value="303"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,666"></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input type="text" class="form-control text-center" value="RED"></td>
                                                            <td><input type="text" class="form-control text-center" value="264"></td>
                                                            <td><input type="text" class="form-control text-center" value="128"></td>
                                                            <td><input type="text" class="form-control text-center" value="259"></td>
                                                            <td><input type="text" class="form-control text-center" value="401"></td>
                                                            <td><input type="text" class="form-control text-center" value="247"></td>
                                                            <td><input type="text" class="form-control text-center" value="82"></td>
                                                            <td><input type="text" class="form-control text-center" value="301"></td>
                                                            <td><input type="text" class="form-control text-center" value="434"></td>
                                                            <td><input type="text" class="form-control text-center" value="285"></td>
                                                            <td><input type="text" class="form-control text-center" value="2,401"></td>
                                                        </tr>
														<tr>
															<td colspan="100"><button type="button" class="btn border-0 p-0 "><i class="bx bx-plus-circle"></i> 행 추가</button></td>
														</tr>
                                                    </tbody>
                                                </table>
											</div>
										</div>

										<div class="border-bottom pb-4 mb-4"></div>

										<div class="d-flex mb-3">
											<ul class="nav nav-tabs-custom course-tab" role="tablist">
												<li class="nav-item">
													<a class="nav-link active" data-bs-toggle="tab" href="#hole01" role="tab">
														<span>1홀</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#hole02" role="tab">
														<span>2홀</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#hole03" role="tab">
														<span>3홀</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#hole04" role="tab">
														<span>4홀</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#hole05" role="tab">
														<span>5홀</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#hole06" role="tab">
														<span>6홀</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#hole07" role="tab">
														<span>7홀</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#hole08" role="tab">
														<span>8홀</span>
													</a>
												</li>
												<li class="nav-item">
													<a class="nav-link" data-bs-toggle="tab" href="#hole09" role="tab">
														<span>9홀</span>
													</a>
												</li>
											</ul>
											
											<button type="button" class="btn btn-outline-custom ms-3 me-auto">코스공략정보 <i class="mdi mdi-arrow-collapse-down"></i></button>
											
											<div class="d-flex gap-2">
												<button class="btn btn-custom" type="button" data-bs-toggle="offcanvas" data-bs-target="#courseInfo" aria-controls="courseInfo">미리보기</button>
												<button class="btn btn-outline-custom" type="button">수정</button>
												<button class="btn btn-outline-custom" id="save"type="button">저장</button>
											</div>
										</div>
										
										<div class="position-relative">
											<div class="tab-content course-tab-pane">
												<div class="tab-pane active" id="hole01" role="tabpanel">
													<div class="course-info-wrap border-box">
														<img src="/gds_simple/assets/images/temp/course01.png">
														
														<table class="table table-layout-fixed mb-0">
															<colgroup>
																<col style="width:120px;">
																<col style="width:auto;">
															</colgroup>
															
															<tbody>
																<tr>
																	<td><span class="fw-bold text-secondary">공략방향</span></td>
																	<td>그린 좌측</td>
																</tr>
																<tr>
																	<td><span class="fw-bold text-secondary">주의</span></td>
																	<td>홀 우측 해저드</td>
																</tr>
																<tr>
																	<td><span class="fw-bold text-secondary">Tip</span></td>
																	<td>Mountain 1 Hole과 더불어 원앙홀 중 하나이며, 거리가 있는 홀, 우측 연못을 조심하여 F/W 중앙을 향해 부드러운 샷을 파면 파세이브가 무난합니다.</td>
																</tr>
																<tr>
																	<td><span class="fw-bold text-secondary">Caddie Advice</span></td>
																	<td>볼이 오른쪽 뚝버들 나무보다 왼쪽으로 떨어졌어도 해저드의 위험이 있으니 왼쪽 100YD 정도에 위치한 벙커를 보고 티샷하는 것이 좋으며, 약간의 2단 그린이므로 중 핀일 경우 핀의 위치가 2단 위인지 아래인지를 확인하는 것이 좋습니다.</td>
																</tr>
															</tbody>
														</table>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
														</div>														
													</div>
												</div>
												<div class="tab-pane" id="hole02" role="tabpanel">
													<div class="course-info-wrap border-box">
														<img src="/gds_simple/assets/images/temp/course02.png">
														
														<table class="table table-layout-fixed mb-0">
															<colgroup>
																<col style="width:120px;">
																<col style="width:auto;">
															</colgroup>
															
															<tbody>
																<tr>
																	<td><span class="fw-bold text-secondary">공략방향</span></td>
																	<td>홀 중앙 벙커 좌측</td>
																</tr>
																<tr>
																	<td><span class="fw-bold text-secondary">주의</span></td>
																	<td>홀 우측 자연림</td>
																</tr>
																<tr>
																	<td><span class="fw-bold text-secondary">Tip</span></td>
																	<td>홀 중간에 해저드가 위치하고 있어 티샷 시 우측벙커 좌측 끝을 보고 치시면 좋습니다. 약간 슬라이스 홀이므로 너무 우측으로 보지 않는 것이 좋습니다. 앞쪽 티를 사용할 경우 장타자는 티샷을 드라이브 보다 수푼을 사용하는 것이 해저드를 피할 수 있습니다.</td>
																</tr>
																<tr>
																	<td><span class="fw-bold text-secondary">Caddie Advice</span></td>
																	<td>티샷 시 해저드 앞까지의 거리를 꼭 확인하시어 클럽을 선택하시면 좋습니다. (왼쪽으로 갈수록 해저드까지의 거리가 짧아집니다.) 슬라이스가 많이 나는 홀이니 세컨지점 약간 왼쪽으로 공략하시는 것이 좋습니다.</td>
																</tr>
															</tbody>
														</table>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
														</div>
													</div>													
												</div>
												<div class="tab-pane" id="hole03" role="tabpanel">
													<div class="course-info-wrap border-box">
														<p class="text-center pt-4 mb-0">이미지 준비중</p>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
														</div>														
													</div>
												</div>
												<div class="tab-pane" id="hole04" role="tabpanel">
													<div class="course-info-wrap border-box">
														<p class="text-center pt-4 mb-0">이미지 준비중</p>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
														</div>														
													</div>
												</div>
												<div class="tab-pane" id="hole05" role="tabpanel">
													<div class="course-info-wrap border-box">
														<p class="text-center pt-4 mb-0">이미지 준비중</p>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
														</div>														
													</div>
												</div>
												<div class="tab-pane" id="hole06" role="tabpanel">
													<div class="course-info-wrap border-box">
														<p class="text-center pt-4 mb-0">이미지 준비중</p>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
														</div>														
													</div>
												</div>
												<div class="tab-pane" id="hole07" role="tabpanel">
													<div class="course-info-wrap border-box">
														<p class="text-center pt-4 mb-0">이미지 준비중</p>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
														</div>														
													</div>
												</div>
												<div class="tab-pane" id="hole08" role="tabpanel">
													<div class="course-info-wrap border-box">
														<p class="text-center pt-4 mb-0">이미지 준비중</p>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
														</div>														
													</div>
												</div>
												<div class="tab-pane" id="hole09" role="tabpanel">
													<div class="course-info-wrap border-box">
														<p class="text-center pt-4 mb-0">이미지 준비중</p>
														
														<div class="bootstrapTabControl">
															<span class="prevtab"></span>
															<span class="nexttab"></span>
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

						<div class="offcanvas offcanvas-end w-auto" tabindex="-1" id="courseInfo" aria-labelledby="courseInfoLabel">
							<div class="offcanvas-header pb-0">
								<h5 id="courseInfoLabel">베어OUT코스</h5>
								<div class="d-flex flex-wrap justify-content-end gap-2">
									<button type="button" class="btn btn-outline-custom ms-auto">코스공략정보 <i class="mdi mdi-arrow-collapse-down"></i></button>
									<button type="button" class="btn btn-outline-custom" data-bs-dismiss="offcanvas" aria-label="Close">닫기</button>
								</div>
							</div>
							<div class="offcanvas-body">
								<ul class="nav nav-tabs-custom course-tab-canvas mb-3" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#canvasHole01" role="tab">
											<span>1홀</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#canvasHole02" role="tab">
											<span>2홀</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#canvasHole03" role="tab">
											<span>3홀</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#canvasHole04" role="tab">
											<span>4홀</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#canvasHole05" role="tab">
											<span>5홀</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#canvasHole06" role="tab">
											<span>6홀</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#canvasHole07" role="tab">
											<span>7홀</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#canvasHole08" role="tab">
											<span>8홀</span>
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" data-bs-toggle="tab" href="#canvasHole09" role="tab">
											<span>9홀</span>
										</a>
									</li>
								</ul>
								
								<div class="tab-content course-tab-canvas-pane">
									<div class="tab-pane active" id="canvasHole01" role="tabpanel">
										<div class="course-info-wrap border-box">
											<img src="/gds_simple/assets/images/temp/course01.png">
											
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:120px;">
													<col style="width:auto;">
												</colgroup>
												
												<tbody>
													<tr>
														<td><span class="fw-bold text-secondary">공략방향</span></td>
														<td>그린 좌측</td>
													</tr>
													<tr>
														<td><span class="fw-bold text-secondary">주의</span></td>
														<td>홀 우측 해저드</td>
													</tr>
													<tr>
														<td><span class="fw-bold text-secondary">Tip</span></td>
														<td>Mountain 1 Hole과 더불어 원앙홀 중 하나이며, 거리가 있는 홀, 우측 연못을 조심하여 F/W 중앙을 향해 부드러운 샷을 파면 파세이브가 무난합니다.</td>
													</tr>
													<tr>
														<td><span class="fw-bold text-secondary">Caddie Advice</span></td>
														<td>볼이 오른쪽 뚝버들 나무보다 왼쪽으로 떨어졌어도 해저드의 위험이 있으니 왼쪽 100YD 정도에 위치한 벙커를 보고 티샷하는 것이 좋으며, 약간의 2단 그린이므로 중 핀일 경우 핀의 위치가 2단 위인지 아래인지를 확인하는 것이 좋습니다.</td>
													</tr>
												</tbody>
											</table>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>														
										</div>
									</div>
									<div class="tab-pane" id="canvasHole02" role="tabpanel">
										<div class="course-info-wrap border-box">
											<img src="/gds_simple/assets/images/temp/course02.png">
											
											<table class="table table-layout-fixed mb-0">
												<colgroup>
													<col style="width:120px;">
													<col style="width:auto;">
												</colgroup>
												
												<tbody>
													<tr>
														<td><span class="fw-bold text-secondary">공략방향</span></td>
														<td>홀 중앙 벙커 좌측</td>
													</tr>
													<tr>
														<td><span class="fw-bold text-secondary">주의</span></td>
														<td>홀 우측 자연림</td>
													</tr>
													<tr>
														<td><span class="fw-bold text-secondary">Tip</span></td>
														<td>홀 중간에 해저드가 위치하고 있어 티샷 시 우측벙커 좌측 끝을 보고 치시면 좋습니다. 약간 슬라이스 홀이므로 너무 우측으로 보지 않는 것이 좋습니다. 앞쪽 티를 사용할 경우 장타자는 티샷을 드라이브 보다 수푼을 사용하는 것이 해저드를 피할 수 있습니다.</td>
													</tr>
													<tr>
														<td><span class="fw-bold text-secondary">Caddie Advice</span></td>
														<td>티샷 시 해저드 앞까지의 거리를 꼭 확인하시어 클럽을 선택하시면 좋습니다. (왼쪽으로 갈수록 해저드까지의 거리가 짧아집니다.) 슬라이스가 많이 나는 홀이니 세컨지점 약간 왼쪽으로 공략하시는 것이 좋습니다.</td>
													</tr>
												</tbody>
											</table>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>
										</div>													
									</div>
									<div class="tab-pane" id="canvasHole03" role="tabpanel">
										<div class="course-info-wrap border-box">
											<p class="text-center pt-4 mb-0">이미지 준비중</p>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>														
										</div>
									</div>
									<div class="tab-pane" id="canvasHole04" role="tabpanel">
										<div class="course-info-wrap border-box">
											<p class="text-center pt-4 mb-0">이미지 준비중</p>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>														
										</div>
									</div>
									<div class="tab-pane" id="canvasHole05" role="tabpanel">
										<div class="course-info-wrap border-box">
											<p class="text-center pt-4 mb-0">이미지 준비중</p>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>														
										</div>
									</div>
									<div class="tab-pane" id="canvasHole06" role="tabpanel">
										<div class="course-info-wrap border-box">
											<p class="text-center pt-4 mb-0">이미지 준비중</p>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>														
										</div>
									</div>
									<div class="tab-pane" id="canvasHole07" role="tabpanel">
										<div class="course-info-wrap border-box">
											<p class="text-center pt-4 mb-0">이미지 준비중</p>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>														
										</div>
									</div>
									<div class="tab-pane" id="canvasHole08" role="tabpanel">
										<div class="course-info-wrap border-box">
											<p class="text-center pt-4 mb-0">이미지 준비중</p>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>														
										</div>
									</div>
									<div class="tab-pane" id="canvasHole09" role="tabpanel">
										<div class="course-info-wrap border-box">
											<p class="text-center pt-4 mb-0">이미지 준비중</p>
											
											<div class="bootstrapTabControl">
												<span class="canvasprevtab"></span>
												<span class="canvasnexttab"></span>
											</div>														
										</div>
									</div>
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

			bootstrapTabControl();
		});
		
		function bootstrapTabControl(){
			var i, items = $('.course-tab .nav-item'), pane = $('.course-tab-pane .tab-pane');
			var iCanvas, itemsCanvas = $('.course-tab-canvas .nav-item'), paneCanvas = $('.course-tab-canvas-pane .tab-pane');			

			$('.nexttab').on('click',function(){
				for(i = 0; i < items.length; i++){
					if($(items[i]).find('a').hasClass('active') ==true){
						break;
					}
				}
				if(i < items.length - 1){
					$(items[i]).find('a').removeClass('active');
					$(items[i+1]).find('a').addClass('active');
					$(pane[i]).removeClass('show active');
					$(pane[i+1]).addClass('show active');
				}
			});
			
			$('.prevtab').on('click',function(){
				for(i = 0; i < items.length; i++){
					if($(items[i]).find('a').hasClass('active') ==true){
						break;
					}
				}
				if(i != 0){
					$(items[i]).find('a').removeClass('active');
					$(items[i-1]).find('a').addClass('active');
					$(pane[i]).removeClass('show active');
					$(pane[i-1]).addClass('show active');
				}
			});
			
			$('.canvasnexttab').on('click',function(){
				for(i = 0; i < itemsCanvas.length; i++){
					if($(itemsCanvas[i]).find('a').hasClass('active') ==true){
						break;
					}
				}
				if(i < itemsCanvas.length - 1){
					$(itemsCanvas[i]).find('a').removeClass('active');
					$(itemsCanvas[i+1]).find('a').addClass('active');
					$(paneCanvas[i]).removeClass('show active');
					$(paneCanvas[i+1]).addClass('show active');
				}
			});
			
			$('.canvasprevtab').on('click',function(){
				for(i = 0; i < itemsCanvas.length; i++){
					if($(itemsCanvas[i]).find('a').hasClass('active') ==true){
						break;
					}
				}
				if(i != 0){
					$(itemsCanvas[i]).find('a').removeClass('active');
					$(itemsCanvas[i-1]).find('a').addClass('active');
					$(paneCanvas[i]).removeClass('show active');
					$(paneCanvas[i-1]).addClass('show active');
				}
			});			
		}
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
