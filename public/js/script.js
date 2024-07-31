$('button.delete').click(function (e) { 
	e.preventDefault();
	var dataUrl = $(this).attr('data-url');
	alert(dataUrl);
});
$(document).ready(function(){
    $("#header .container > i").click(function(){
        $(".menu").toggleClass('open');
		$("#header .container > i").toggleClass('change');
    });
	$('.notification .x').click(function (e) { 
		e.preventDefault();
		$('.notification').addClass('hide');
		
	});
	$(document).ready(function() {
		// Set interval to automatically cycle through slides
		setInterval(function() {
			$('#movieCarousel').carousel('next');
		}, 3000); // Thay đổi slide mỗi 5 giây (5000 ms)
	});
});

