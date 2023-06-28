

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
	<?php include "../partials/vertical-menu-top.php"; ?>

    <div data-simplebar class="h-100 pt-60">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li key="t-sale" class="mm-active">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class='bx bx-file'></i>
                        <span key="t-sale">코드</span>
                    </a>
                    <ul class="sub-menu mm-show" aria-expanded="true">
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/code_essential.php"><span key="t-code-essential">필수코드</span></a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/code_greenfee.php"><span key="t-code-greenfee">가격코드</span></a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/code_standard.php"><span key="t-code-standard">기준코드</span></a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/code_etc.php"><span key="t-code-etc">기타코드</span></a></li>
                    </ul>
                </li>
                <li key="t-checkin" class="mm-active">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class="bx bx-file"></i>
                        <span key="t-checkin">설정</span>
                    </a>
                    <ul class="sub-menu mm-show" aria-expanded="true">
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/regist.php"><span key="t-manage">사용자 등록 / 권한</span></a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/shortcut.php"><span key="t-status">단축키 설정</span></a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/api.php"><span key="t-guest">실시간 API</span></a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/holiday.php"><span key="t-article">공휴일 관리</span></a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/print_locker.php"><span key="t-discount">락카 프린트 설정</span></a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/setting/print_receipt.php"><span key="t-guestbook">영수증 프린트 설정</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<div class="app-search-backdrop" onclick="$('.search_detail_wrap, .app-search-backdrop').hide();"></div>

<!-- <?php include "horizontal.php"; ?> -->