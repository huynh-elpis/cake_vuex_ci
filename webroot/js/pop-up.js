$(document).ready(function(){
    handleLoadFile();
    handleDatapicker();

    var popup = '';
    $('.pg-top').click(function () {
		$("html, body").animate({
			scrollTop: 10
		}, 600);
		return false;
	});

	$(".btn-open-popup").click(function(even) {
		even.preventDefault();
		popup = $(this).attr('data-id');
        if(typeof popup == "undefined") {
            popup='';
        }
		loadPopup(); // function show popup
	});

	$(".btn-close, .close-popup").click(function(){
		disablePopup();
	});

	$(this).keydown(function(event) {
		if (event.which == 27) { // 27 is 'Ecs' in the keyboard
			disablePopup();  // function close pop up
		}
	});

    $(".background-popup").click(function() {
		disablePopup();  // function close pop up
	});

    function loadPopup() {
        if(popup) $('#'+popup).show();
        else $(".to-popup").fadeIn(200); // fadein popup div
        $(".popup-cont").animate({scrollTop: 10}, 500); //scroll popup to Top
        $(".background-popup").css("opacity", "0.8"); // css opacity, supports IE7, IE8
        $(".background-popup").fadeIn(200);
    }

    function disablePopup() {
        if(popup) $('#'+popup).hide();
        else $(".to-popup").fadeOut(300);
        $(".background-popup").fadeOut(300);
        $('body,html').css("overflow","auto");//enable scroll bar
    }

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#scroll').fadeIn(400);
        } else {
            $('#scroll').fadeOut(400);
        }
    });
    $('#scroll').on('click', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 600);
        return false;
    });
});

function handleLoadFile() {
    $("#uploadBtn").change(function () {
        document.getElementById("uploadFile").value = this.value;
    });
}
function handleDatapicker() {
    if($(".datepicker").length > 0){
        $(".datepicker" ).datepicker({ dateFormat: 'yy/mm/dd' });
    }
}
