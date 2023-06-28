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
												<!--textarea id="premiumskinsandicons-bootstrap"></textarea-->
												<textarea class="form-control" rows="20" name="smartEditor01" id="smartEditor01"></textarea>
												
												<div class="d-flex gap-2 mt-2">
													<div class="filebox">
														<input class="form-control upload-name" style="width:500px;" readonly>
														<input type="file" id="file01">
													</div>
													<label for="file01" class="btn btn-outline-custom mb-0">파일 첨부</label>
												</div>
											</div>

											<div class="tab-pane" id="courseInfo02" role="tabpanel">
												<textarea class="form-control" rows="20" name="smartEditor02" id="smartEditor02"></textarea>
												
												<div class="d-flex gap-2 mt-2">
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

						<div class="offcanvas offcanvas-end w-auto" tabindex="-1" id="courseInfo" aria-labelledby="courseInfoLabel">
							<div class="offcanvas-header pb-0">
								<h5 id="courseInfoLabel">베어코스 개요</h5>
								<!--button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button-->
								<div class="d-flex flex-wrap justify-content-end gap-2">
									<button type="button" class="btn btn-outline-custom ms-auto">코스공략정보</button>
									<button type="button" class="btn btn-outline-custom" data-bs-dismiss="offcanvas" aria-label="Close">닫기</button>
								</div>
							</div>
							<div class="offcanvas-body">
								
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

			var oEditors1 = [];
			var oEditors2 = [];

			nhn.husky.EZCreator.createInIFrame({
				oAppRef: oEditors1,
				elPlaceHolder: 'smartEditor01',
				sSkinURI: '/gds_simple/assets/libs/smarteditor2/SmartEditor2Skin.html',	
				htParams : {
					bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
					bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
					bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
					//bSkipXssFilter : true,		// client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
					//aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
					aAdditionalFontList : [['Noto Sans KR', 'Noto Sans']],	
					SE2M_FontName: {
						htMainFont: {'id': 'Noto Sans KR','name': 'Noto Sans KR', 'url': '','cssUrl': ''} // 기본 글꼴 설정
					},
					fOnBeforeUnload : function(){
						//alert("완료!");
					}
				}, //boolean
				fOnAppLoad : function(){
					oEditors1.getById['smartEditor01'].setDefaultFont('Noto Sans KR', 12);
					//예제 코드
					//oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
				},
				fCreator: 'createSEditor2'
			});

			nhn.husky.EZCreator.createInIFrame({
				oAppRef: oEditors2,
				elPlaceHolder: 'smartEditor02',
				sSkinURI: '/gds_simple/assets/libs/smarteditor2/SmartEditor2Skin.html',	
				htParams : {
					bUseToolbar : true,				// 툴바 사용 여부 (true:사용/ false:사용하지 않음)
					bUseVerticalResizer : true,		// 입력창 크기 조절바 사용 여부 (true:사용/ false:사용하지 않음)
					bUseModeChanger : true,			// 모드 탭(Editor | HTML | TEXT) 사용 여부 (true:사용/ false:사용하지 않음)
					//bSkipXssFilter : true,		// client-side xss filter 무시 여부 (true:사용하지 않음 / 그외:사용)
					//aAdditionalFontList : aAdditionalFontSet,		// 추가 글꼴 목록
					aAdditionalFontList : [['Noto Sans KR', 'Noto Sans']],	
					SE2M_FontName: {
						htMainFont: {'id': 'Noto Sans KR','name': 'Noto Sans KR', 'url': '','cssUrl': ''} // 기본 글꼴 설정
					},
					fOnBeforeUnload : function(){
						//alert("완료!");
					}
				}, //boolean
				fOnAppLoad : function(){
					oEditors2.getById['smartEditor02'].setDefaultFont('Noto Sans KR', 12);
					$('#courseInfo02 iframe').css('height', 499);
					//예제 코드
					//oEditors.getById["ir1"].exec("PASTE_HTML", ["로딩이 완료된 후에 본문에 삽입되는 text입니다."]);
				},
				fCreator: 'createSEditor2'
			});
			
			var iframe = document.getElementsByTagName('iframe');
			var smEditor = iframe[0];
			if (smEditor) { 
				smEditor.style.height = '300px'; 
			}
			$('#save').click(function(){
				oEditors1.getById['smartEditor01'].exec('UPDATE_CONTENTS_FIELD', []);
				oEditors2.getById['smartEditor02'].exec('UPDATE_CONTENTS_FIELD', []);
				$('#frm').submit();
			})
		});
		</script>

		<!-- App js -->
		<script src="/gds_simple/assets/js/app.js"></script>

		<!-- front js -->
		<script src="/gds_simple/assets/js/front.js"></script>
    </body>
</html>
