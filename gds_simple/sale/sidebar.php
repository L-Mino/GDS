

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
	<?php include "../partials/vertical-menu-top.php"; ?>

    <div data-simplebar class="h-100 pt-60">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="mm-active">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-calculator"></i>
                        <span>정산</span>
                    </a>
                    <ul class="sub-menu mm-show" aria-expanded="true">
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/sale/manage_day.php">정산 관리</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/sale/status.php">일 매출 현황</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><!--a href="/gds_simple/sale/unpaid.php"--><a href="#">미수금 관리</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><!--a href="/gds_simple/sale/manage_period.php"<--><a href="#">기간별 정산 관리</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/sale/manage_day3.php">정산 관리 2</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/sale/manage_day2.php">정산 관리 3</a></li>
                    </ul>
                </li>
                <li class="mm-active">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="mdi mdi-sale"></i>
                        <span>판매</span>
                    </a>
                    <ul class="sub-menu mm-show" aria-expanded="true">
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><!--a href="/gds_simple/sale/deadline.php"--><a href="#">마감 관리</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><!--a href="/gds_simple/sale/product.php"--><a href="#">판매 관리</a></li>
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