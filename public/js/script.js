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
});

