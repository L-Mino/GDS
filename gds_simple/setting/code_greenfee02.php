<?php include "../partials/main.php"; ?>

    <head>
		<?php $title = '그린피 구분 코드'; include "../partials/title-meta.php"; ?>
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
										<div class="d-flex">
											<div class="code-con-left">
												<div class="d-flex justify-content-between align-items-center mb-3">
													<span class="code-title">적용 일자</span>
													<button type="button" class="btn btn-outline-custom" data-bs-toggle="modal" data-bs-target=".addCodeModal">+ 추가</button>
												</div>												
												<div class="tab-code">
													<ul class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
														<li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#" role="tab" aria-selected="true" data-bs-target="#code01">23.05.22 (월)</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code02">23.05.21 (일)</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code03">23.05.20 (토)</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code04">23.05.19 (금)</a></li>
														<li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#" role="tab" aria-selected="false" data-bs-target="#code05">23.05.18 (목)</a></li>														
													</ul>
												</div>
											</div>

											<div class="code-con-right mb-0">
												<div class="tab-content" id="v-pills-tabContent">
													<div class="tab-pane fade show active" id="code01" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">그린피 구분 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
															<button type="button" class="btn btn-outline-custom ms-auto">전체 저장</button>															
														</div>

														<div class="table-responsive table-fixed-head card h-100 mb-0" data-simplebar>
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:300px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 20</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 13</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 14</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>8</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>9</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>10</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>11</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>12</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>13</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>14</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>15</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>홀인원 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>16</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>			
																	<tr>
																		<td>9H추가 8</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>17</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																			
																	<tr>
																		<td>9H추가 9</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>18</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																				
																	<tr>
																		<td>9H추가 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>19</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>21</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>22</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																</tbody>
															</table>
														</div>
													</div>
													
													<div class="tab-pane fade" id="code02" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">그린피 구분 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>

														<div class="table-responsive table-fixed-head card h-100 mb-0" data-simplebar>
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:300px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 20</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 13</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 14</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>8</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>9</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>10</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>11</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>12</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>13</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>14</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>15</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>홀인원 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>16</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>			
																	<tr>
																		<td>9H추가 8</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>17</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																			
																	<tr>
																		<td>9H추가 9</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>18</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																				
																	<tr>
																		<td>9H추가 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>19</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>21</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>22</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																</tbody>
															</table>
														</div>
													</div>								
													
													<div class="tab-pane fade" id="code03" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">그린피 구분 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>

														<div class="table-responsive table-fixed-head card h-100 mb-0" data-simplebar>
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:300px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 20</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 13</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 14</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>8</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>9</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>10</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>11</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>12</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>13</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>14</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>15</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>홀인원 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>16</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>			
																	<tr>
																		<td>9H추가 8</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>17</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																			
																	<tr>
																		<td>9H추가 9</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>18</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																				
																	<tr>
																		<td>9H추가 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>19</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>21</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>22</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																</tbody>
															</table>
														</div>
													</div>								
													
													<div class="tab-pane fade" id="code04" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">그린피 구분 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>

														<div class="table-responsive table-fixed-head card h-100 mb-0" data-simplebar>
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:300px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 20</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 13</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 14</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>8</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>9</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>10</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>11</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>12</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>13</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>14</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>15</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>홀인원 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>16</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>			
																	<tr>
																		<td>9H추가 8</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>17</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																			
																	<tr>
																		<td>9H추가 9</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>18</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																				
																	<tr>
																		<td>9H추가 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>19</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>21</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>22</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																</tbody>
															</table>
														</div>
													</div>								
													
													<div class="tab-pane fade" id="code05" role="tabpanel">
														<div class="d-flex align-items-center mb-3">
															<span class="code-title">그린피 구분 코드</span>
															<!--span class="mx-2">-</span-->
															<!--span>설명</span-->
														</div>

														<div class="table-responsive table-fixed-head card h-100 mb-0" data-simplebar>
															<table class="table text-center w-100 mb-0 nowrap">
																<colgroup>
																	<col style="min-width:120px;">
																	<col style="min-width:70px;">
																	<col style="min-width:80px;">
																	<col style="min-width:300px;">
																	<col style="min-width:70px; width:70px;">
																</colgroup>

																<thead>
																	<tr>
																		<th>상세코드</th>
																		<th>사용안함</th>
																		<th>정렬순서</th>
																		<th>비고</th>
																		<th>저장</th>
																	</tr>
																</thead>

																<tbody>
																	<tr>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="상세코드"></td>
																		<td><input class="form-check-input" type="checkbox" disabled></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="정렬순서"></td>
																		<td><input class="form-control form-control-em text-center p-0" type="text" placeholder="비고"></td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>1</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>2</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>비회원 20</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>3</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>4</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 18</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>5</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>인터넷회원 19</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>6</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 13</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>7</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 14</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>8</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>VIP 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>9</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>10</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>11</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>타임세일 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>12</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>13</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>14</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>단체 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>15</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>
																	<tr>
																		<td>홀인원 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>16</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>			
																	<tr>
																		<td>9H추가 8</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>17</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																			
																	<tr>
																		<td>9H추가 9</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>18</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																				
																	<tr>
																		<td>9H추가 10</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>19</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 15</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>20</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 16</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>21</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																	<tr>
																		<td>18H추가 17</td>
																		<td><input class="form-check-input" type="checkbox" onchange="checkBox(this)"></td>
																		<td>22</td>
																		<td>비고내용</td>
																		<td><button type="button" class="btn btn-outline-custom">저장</button></td>
																	</tr>																																																				
																</tbody>
															</table>
														</div>
													</div>																					
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
		                <!--//row -  -->

						<div class="modal fade addCodeModal" tabindex="-1" aria-labelledby="addCodeModalLabel" aria-modal="true" role="dialog">
							<div class="modal-dialog modal-dialog-centered">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="addCodeModalLabel">그린피 구분 코드 등록</h5>
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
														<th class="text-end">사업장</th>
														<td>
															<div class="dropdown d-inline-block align-top">
																<button class="btn dropdown-toggle" type="button" id="" data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-expanded="true">사업장 선택 <i class="mdi mdi-chevron-down"></i></button>
																<ul class="dropdown-menu dropdown-menu-dark select_course" data-popper-placement="bottom-start">
																	<li>
																		<div class="dropdown-item">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="checkbox" id="select_golf01" value="전체">
																				<label class="form-check-label w-100" for="select_golf01">사업장 전체</label>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="dropdown-item">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="checkbox" id="select_golf02" value="춘천">
																				<label class="form-check-label w-100" for="select_golf02">춘천</label>
																			</div>
																		</div>
																	</li>
																	<li>
																		<div class="dropdown-item">
																			<div class="form-check form-check-inline">
																				<input class="form-check-input" type="checkbox" id="select_golf03" value="포천">
																				<label class="form-check-label w-100" for="select_golf03">포천</label>
																			</div>
																		</div>
																	</li>
																</ul>
															</div>
														</td>
													</tr>
													<tr>
														<th class="text-end">대분류명</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end">대분류 설명</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end">정렬 순서</th>
														<td>
															<input type="text" class="form-control">
														</td>
													</tr>
													<tr>
														<th class="text-end">가져오기</th>
														<td>
															<select class="form-select w-auto">
																<option value="사용안함" selected>사용안함</option>
																<option value="23.05.22 (월)">23.05.22 (월)</option>
																<option value="23.05.21 (일)">23.05.21 (일)</option>
																<option value="23.05.20 (토)">23.05.20 (토)</option>
																<option value="23.05.19 (금)">23.05.19 (금)</option>
																<option value="23.05.18 (목)">23.05.18 (목)</option>
															</select>
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
						<!-- //modal - addCodeModal -->

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
