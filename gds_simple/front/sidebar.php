

<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">
	<?php include "../../partials/vertical-menu-top.php"; ?>

    <div data-simplebar class="h-100 pt-60">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="mm-active">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class="bx bx-time-five"></i>
                        <span>예약</span>
                    </a>
                    <ul class="sub-menu mm-show" aria-expanded="true">
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/reservation/teetime.php">티타임 생성</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/reservation/manage.php">티타임 관리</a></li>
                        <!--li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/reservation/greenfee.php">그린피 적용</a></li-->
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/reservation/booking.php">예약 접수</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/reservation/period.php">기간별 예약 현황</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/reservation/penalty.php">위약 관리</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/reservation/rule.php">예약 / 취소 규정</a></li>
                        <!--li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/reservation/channel.php">예약 채널 관리</a></li-->
                    </ul>
                </li>

                <li class="mm-active">
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
						<i class="bx bx-user-circle"></i>
                        <span>내장</span>
                    </a>
                    <ul class="sub-menu mm-show" aria-expanded="true">
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/checkin/manage.php">내장 등록</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/checkin/manage2.php">내장 등록2</a></li>						
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/checkin/status.php">내장 현황 관리</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/checkin/guest.php">내장객 현황</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/checkin/article.php">물품 대여 현황</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/checkin/discount.php">할인 내역 관리</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/checkin/guestbook.php">방명록 인쇄</a></li>
                        <li><span title="즐겨찾기" class="bookmark"><i class="bx bx-star"></i></span><a href="/gds_simple/front/checkin/locker.php">락카 배치표</a></li>
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