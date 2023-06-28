<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex head_left align-items-center">
            <button type="button" class="btn btn-sm px-3 font-size-16 vertinav-toggle header-item" id="vertical-menu-btn">
                <i class="fa fa-fw fa-bars"></i>
            </button>

			<div class="dropdown d-inline-block w-100">
				<select class="form-select border-0">
					<option selected="">AGL Golf Club 춘천</option>
					<option value="AGL Golf Club">AGL Golf Club 포천</option>
				</select>
			</div>
        </div>

		<div class="d-flex ps-4 pe-4 mx-auto">
			<ul class="nav nav-pills gap-4">
				<!--li class="nav-item">
					<a href="/gds_admin/manage/admin.php" class="gnb_home" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="기본관리"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_admin/front/reservation/teetime.php" class="gnb_front" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-custom-class="tooltip-gnb" title="디자인관리"></a>
				</li-->
				<li class="nav-item">
					<a href="/gds_admin/golf/all.php" class="gnb_sale_kr" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="골프장관리"></a>
				</li>
				<li class="nav-item">
					<a href="#" class="gnb_match" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="시스템관리"></a>
				</li>
				<!--li class="nav-item">
					<a href="/gds_admin/member/member_status.php" class="gnb_member" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="여행관리"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_admin/channel/channel_info.php" class="gnb_channel" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="프리미엄 회원권"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_admin/info/basic_info.php" class="gnb_info" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="파파스페셜"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_admin/customer/voc.php" class="gnb_customer" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="포인트 관리"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_admin/setting/code_essential.php" class="gnb_setting" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="쿠폰 관리"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_admin/setting/code_essential.php" class="gnb_setting" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="게시판관리"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_admin/setting/code_essential.php" class="gnb_setting" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="보고서"></a>
				</li>
				<li class="nav-item">
					<a href="/gds_admin/setting/code_essential.php" class="gnb_setting" data-bs-toggle="tooltip" data-bs-placement="bottom"  data-bs-custom-class="tooltip-gnb" title="기본설정관리"></a>
				</li-->
			</ul>			
		</div>
	
        <div class="d-flex head_right justify-content-end align-items-center h-100">
			<div class="dropdown dropdown-center d-inline-block">
				<button class="btn boarder-0 p-0 dropdown-toggle head-lang-change show" type="button" id="" data-bs-toggle="dropdown" aria-expanded="true" changeable="true">한국어</button>
				<ul class="dropdown-menu dropdown-menu-center head-lang-change-menu" data-popper-placement="bottom-center">
					<li>
						<button type="button" class="dropdown-item active" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_admin/assets/images/common/lang_kr.svg" class="me-1" alt="한국어">한국어</button>
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_admin/assets/images/common/lang_en.svg" class="me-1" alt="English">English</button>	
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_admin/assets/images/common/lang_jp.svg" class="me-1" alt="日本語">日本語</button>	
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_admin/assets/images/common/lang_cn.svg" class="me-1" alt="简体中文">简体中文</button>	
					</li>
					<li>
						<button type="button" class="dropdown-item" onclick="$(this).parents('ul').find('.dropdown-item').removeClass('active'); $(this).addClass('active');"><img src="/gds_admin/assets/images/common/lang_th.svg" class="me-1" alt="Tiếng Việt">Tiếng Việt</button>	
					</li>
				</ul>
			</div>

			<div class="dropdown d-none d-lg-inline-block ms-2">
				<button type="button" class="btn header-item noti-icon" data-toggle="fullscreen">
					<i class="mdi mdi-fullscreen"></i>
				</button>
			</div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item" id="page-header-user-dropdown"
                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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