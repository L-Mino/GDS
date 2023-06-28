<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex head_left align-items-center">
            <button type="button" class="btn btn-sm px-3 font-size-16 vertinav-toggle header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

			<div class="dropdown d-inline-block w-100">
				<select class="form-select border-0">
					<option value="AGL Golf Club - KOR" selected>AGL Golf Club - KOR</option>
					<option value="AGL Golf Club - USA">AGL Golf Club - USA</option>					
					<option value="AGL Golf Club - JPN">AGL Golf Club - JPN</option>
					<option value="AGL Golf Club - VNM">AGL Golf Club - VNM</option>
					<option value="AGL Golf Club - CHN">AGL Golf Club - CHN</option>
					<option value="AGL Golf Club - PHL">AGL Golf Club - PHL</option>
					<option value="AGL Golf Club - THA">AGL Golf Club - THA</option>
				</select>
			</div>
        </div>

		<div class="d-flex ps-4 pe-4 mx-auto">
			<ul class="nav nav-pills gap-4">
				<li class="nav-item">
					<a href="/gds_simple/dashboard/dashboard.php" class="gnb_home" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="대시보드"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_simple/front/reservation/teetime.php" class="gnb_front" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="tooltip-gnb" title="예약 / 내장"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_simple/sale/manage_day.php" class="gnb_sale_kr" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="판매 / 정산"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_simple/match/game.php" class="gnb_match" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="경기"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_simple/member/member_list.php" class="gnb_member" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="회원 / 단체팀"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_simple/channel/channel_info.php" class="gnb_channel" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="채널 / 마케팅"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_simple/info/basic_info.php" class="gnb_info" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="기본정보 / 콘텐츠"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_simple/customer/voc.php" class="gnb_customer" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="고객센터"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_simple/setting/code_essential.php" class="gnb_setting" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="환경설정"></a>
				</li>
			</ul>			
		</div>
	
        <div class="d-flex head_right justify-content-end align-items-center h-100">
			<div class="dropdown dropdown-center d-inline-block">
				<button class="btn boarder-0 p-0 dropdown-toggle head-lang-change show" type="button" id="" data-bs-toggle="dropdown" aria-expanded="true" changeable="true">한국어</button>
				<ul class="dropdown-menu dropdown-menu-center head-lang-change-menu" data-popper-placement="bottom-center">
					<li>
						<button type="button" class="dropdown-item active" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_simple/assets/images/common/lang_kr.svg" class="me-1" alt="한국어">한국어</button>
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_simple/assets/images/common/lang_en.svg" class="me-1" alt="English">English</button>	
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_simple/assets/images/common/lang_jp.svg" class="me-1" alt="日本語">日本語</button>	
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_simple/assets/images/common/lang_vn.svg" class="me-1" alt="Tiếng Việt">Tiếng Việt</button>	
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_simple/assets/images/common/lang_cn.svg" class="me-1" alt="简体中文">简体中文</button>	
					</li>					
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_simple/assets/images/common/lang_ph.svg" class="me-1" alt="Tagalog">Tagalog</button>	
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_simple/assets/images/common/lang_th.svg" class="me-1" alt="ภาษาไทย">ภาษาไทย</button>	
					</li>
				</ul>
			</div>

			<div class="dropdown d-none d-lg-inline-block ms-2">
				<button type="button" class="btn header-item noti-icon" data-toggle="fullscreen">
					<i class="mdi mdi-fullscreen"></i>
				</button>
			</div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-xl-inline-block ms-1">AGL 사업부 | 이아연</span>
                    <i class="mdi mdi-chevron-down d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="#"><i class="mdi mdi-logout font-size-16 align-middle me-1"></i> <span class="align-middle" key="t-logout">Logout</span></a>
                </div>
            </div>

            <!--div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon right-bar-toggle">
                    <i class="bx bx-cog bx-spin"></i>
                </button>
            </div-->
        </div>
    </div>
</header>