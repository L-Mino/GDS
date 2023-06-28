$(function(){
	$('.vertical_quick_wrap .bookmark').click(function() {
		if($(this).children('.bx').hasClass('bx-star')) {
			$(this).children('.bx').removeClass('bx-star');
			$(this).children('.bx').addClass('bxs-star');
			$('#sidebar-menu > ul > li > a, .sub-menu > li').hide();
			$('.sub-menu > li .bxs-star').parents('li').show();
	    } else {
			$(this).children('.bx').removeClass('bxs-star');
			$(this).children('.bx').addClass('bx-star');
			$('#sidebar-menu > ul > li > a, .sub-menu > li').show();
		}
	});

    $('#sidebar-menu .bookmark').click(function() {
		if($(this).children('.bx').hasClass('bx-star')) {
			$(this).children('.bx').removeClass('bx-star');
			$(this).children('.bx').addClass('bxs-star');
	    } else {
			$(this).children('.bx').removeClass('bxs-star');
			$(this).children('.bx').addClass('bx-star');
		}
	});

    $('#vertical-menu-btn').click(function() {
		var bookMark = $('.vertical_quick_wrap .bookmark');

		if($('body').attr('data-sidebar-size') == 'sm') {
			$('#sidebar-menu > ul > li > a, .sub-menu > li').show();
			$('.sub-menu > li .bxs-star').parents('li').show();
		} else {

			console.log('큼')
		}
	});

	/*$('#layout-mode').on('change', function() {
		if ($(this).is(':checked')) {
			document.body.setAttribute('data-layout-mode', 'dark'),
            document.body.setAttribute('data-topbar', 'dark')
		} else {
			document.body.setAttribute('data-layout-mode', 'light'),
            document.body.setAttribute('data-topbar', 'light')
		}
	});

	$('#boxed-mode').on('change', function() {
		if ($(this).is(':checked')) {
			document.body.setAttribute('data-layout-size', 'boxed')
		} else {
			document.body.setAttribute('data-layout-size', 'fluid')
		}
	});*/

	$('.mode-change-btn').on('click', function() {
		if ($(this).hasClass('mode-dark-btn')) {
			$('.mode-dark-btn').addClass('active');
			$('.mode-light-btn').removeClass('active');
			document.body.setAttribute('data-layout-mode', 'dark'),
            document.body.setAttribute('data-topbar', 'dark')
		} else if ($(this).hasClass('mode-light-btn')) {
			$('.mode-light-btn').addClass('active');
			$('.mode-dark-btn').removeClass('active');
			document.body.setAttribute('data-layout-mode', 'light'),
            document.body.setAttribute('data-topbar', 'light')
		} else if ($(this).hasClass('mode-box-btn')) {
			$('.mode-box-btn').addClass('active');
			$('.mode-basic-btn').removeClass('active');
			document.body.setAttribute('data-layout-size', 'boxed')
		} else if ($(this).hasClass('mode-basic-btn')) {
			$('.mode-basic-btn').addClass('active');
			$('.mode-box-btn').removeClass('active');
			document.body.setAttribute('data-layout-size', 'fluid')
		}
	});

	var selectCourse = $('.select_course').SumoSelect({
		placeholder: '코스 선택',
		selectAll: true,
		//floatWidth: 1440,
		captionFormat: '{0} Selected',
		captionFormatAllSelected: '코스 전체',
		locale :  ['OK', 'Cancel', '코스전체']
		//showTitle: 'true'
	});

    $('.dropdown-toggle[changeable=true]').next('.dropdown-menu').children().on('click',function(){
        $(this).closest('.dropdown-menu').prev('.dropdown-toggle').text($(this).text());
    });

	$('.table-select tbody tr').on('click', function() {
		$(this).toggleClass('table-active');
	});

	$('.selectpicker').selectpicker();

	$('#file01, #file02').on('change',function(){
		var fileName = $(this).val();
		$(this).prev('.upload-name').val(fileName);
	});

	$('.input_time').timepicker({
		timeFormat: 'H:mm',
		dynamic: false,
		dropdown: false,
		scrollbar: false
	});

    /*$('.table-basic').DataTable({
		'searching': false,
        scrollCollapse: false,
        paging: false,
	    ordering: false,
        info: false
    });*/

	$('[data-bs-toggle="tooltip"]').tooltip()

	var text_max = 50;
	$('#notice-count-message').html('0/' + text_max );
	$('#notice-textarea').keyup(function() {
		var text_length = $('#notice-textarea').val().length;
		var text_remaining = text_max - text_length;
		$('#notice-count-message').html(text_length + '/' + text_max);
	});
	
	checkSelect();
   	datePicker();
});

Array.from(document.getElementsByClassName('showmodal')).forEach( (e) => {
	e.addEventListener('click', function(element) {
		element.preventDefault();
		if (e.hasAttribute('data-show-modal')) {
			showModal(e.getAttribute('data-show-modal'));
		}
	}); 
});
// Show modal dialog

function showModal(modal) {
	const mid = document.getElementById(modal);
	let myModal = new bootstrap.Modal(mid);
	myModal.show();
}

function menuActive(one){
	//gnb
	$(".nav > li").eq(one-1).find("a").addClass("active");
}

function datePicker(){
	/*$.datepicker.setDefaults({
        dateFormat: 'mm월 dd일 (D)',
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        yearSuffix: '년'
    });*/

    $('.datepicker').datepicker({
        dateFormat: 'y.mm.dd(D)',
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        yearSuffix: '년',
		defaultDate:'now'   
    });
	
	$('.datepicker-notice').datepicker({
        dateFormat: 'y.mm.dd(D)',
        prevText: '이전 달',
        nextText: '다음 달',
        monthNames: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        monthNamesShort: ['1월', '2월', '3월', '4월', '5월', '6월', '7월', '8월', '9월', '10월', '11월', '12월'],
        dayNames: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesShort: ['일', '월', '화', '수', '목', '금', '토'],
        dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
        showMonthAfterYear: true,
        yearSuffix: '년',
		beforeShow: function(input, inst) {

			// Handle calendar position before showing it.
			// It's not supported by Datepicker itself (for now) so we need to use its internal variables.
			var calendar = inst.dpDiv;

			// Dirty hack, but we can't do anything without it (for now, in jQuery UI 1.8.20)
			setTimeout(function() {
				calendar.position({
					my: 'right top',
					at: 'right bottom',
					collision: 'none',
					of: input
				});
			}, 1);
		}
	});

	$('.datepicker-today').datepicker('setDate', 'today');

    //$('.datetimepicker').datetimepicker();
}

function today(){
    var d = new Date();
    var curr_date = d.getDate();
    var curr_month = d.getMonth() + 1;
    var curr_year = d.getFullYear();
    document.write(curr_date + "-" + curr_month + "-" + curr_year);
}

function checkNumber() {
	var e = event || window.event; // get event object
	var key = e.keyCode || e.which; // get key cross-browser

	var allowedKeys = [8, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 186]; // includes backspace, numbers and :

	if (!allowedKeys.includes(key)) {
		if (e.preventDefault) e.preventDefault(); //normal browsers
		e.returnValue = false; //IE
	}
}

function checkBox(checked){
	if(checked.checked==true){
		$(checked).parents('tr').css('opacity', '0.3');
	} else {
		$(checked).parents('tr').css('opacity', '1');				
	}
}

function checkSelect(){
	$('input[type=checkbox][name=tableCheckAll]').change(function() {
		if ($(this).is(':checked')) {
			$(this).parents('table').find('input[type=checkbox]').prop('checked', true);
			$(this).parents('table').find('input[type=checkbox]').parents('tbody').find('tr').addClass('table-active');
		} else {
			$(this).parents('table').find('input[type=checkbox]').prop('checked', false);
			$(this).parents('table').find('tbody tr').removeClass('table-active');				
		}
	});
	
	$('input[type=checkbox][name=tableCheck]').change(function() {
		if ($(this).is(':checked')) {
			$(this).parents('tr').addClass('table-active');
		} else {
			$(this).parents('tr').removeClass('table-active');
			$(this).parents('table').find('thead input[type=checkbox]').prop('checked', false);				
		}
	});	
	
	$('input[type=radio][name=tableRadio]').change(function() {
		if ($(this).is(':checked')) {
			$(this).parents('table').find('tr').removeClass('table-active');
			$(this).parents('tr').addClass('table-active');
		}
	});		
}