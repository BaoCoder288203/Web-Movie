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

    // List new film 
	  const listNewFilm = $('.list-new-film');
    const leftButton = $('.left-button-slider');
    const rightButton = $('.right-button-slider');

    const scrollAmount = 250; // Adjust this value to scroll more or less

    leftButton.on('click', function() {
      listNewFilm.animate({
        scrollLeft: '-=' + scrollAmount
      }, 300); // 300ms for smooth scrolling
    });

    rightButton.on('click', function() {
      listNewFilm.animate({
        scrollLeft: '+=' + scrollAmount
      }, 300); // 300ms for smooth scrolling
    });


    //Old film
    const listCategoryFilmOld = $('.old-film .categories');
    const leftButtoncategoryOld = $('.old-film .left-button-category');
    const rightButtoncategoryOld = $('.old-film .right-button-category');

    leftButtoncategoryOld.on('click', function() {
      listCategoryFilmOld.animate({
        scrollLeft: '-=' + scrollAmount
      }, 300); // 300ms for smooth scrolling
    });

    rightButtoncategoryOld.on('click', function() {
      listCategoryFilmOld.animate({
        scrollLeft: '+=' + scrollAmount
      }, 300); // 300ms for smooth scrolling
    });

    //New film
    const listCategoryFilmNew = $('.new-film .categories');
    const leftButtoncategoryNew = $('.new-film .left-button-category');
    const rightButtoncategoryNew = $('.new-film .right-button-category');

    leftButtoncategoryNew.on('click', function() {
      listCategoryFilmNew.animate({
        scrollLeft: '-=' + scrollAmount
      }, 300); // 300ms for smooth scrolling
    });

    rightButtoncategoryNew.on('click', function() {
      listCategoryFilmNew.animate({
        scrollLeft: '+=' + scrollAmount
      }, 300); // 300ms for smooth scrolling
    });

    const softBy = $('.old-film .sort-by');

    // Nút Submit Year
    const submitYear = $('.submit-year > button');
    const Years = $('.submit-year .years form');

    // Nút Submit Alpha
    const submitAlpha = $('.submit-alpha > button');
    const Alpha = $('.submit-alpha .alpha form');

    //flag 
    let isYearOpen = false;
    let isAlphaOpen = false;

    submitYear.on('click',()=>{
      // Toggle Year
      isYearOpen = !isYearOpen;
      Years.toggleClass('open', isYearOpen);
      console.log('Year open:', isYearOpen, 'Alpha open:', isAlphaOpen);
      // Chỉ toggle sortBy nếu cả hai đều đóng
      if (isYearOpen || isAlphaOpen) {
        softBy.addClass('open');
      }else{
        softBy.removeClass('open');
      }
    })

    submitAlpha.on('click',()=>{
      // Toggle Year
      
      isAlphaOpen = !isAlphaOpen;
      Alpha.toggleClass('open', isAlphaOpen);
      console.log('Year open:', isYearOpen, 'Alpha open:', isAlphaOpen);
      // Chỉ toggle sortBy nếu cả hai đều đóng
      if(isYearOpen || isAlphaOpen){
        softBy.addClass('open');
      }else{
        softBy.removeClass('open');
      }
    })
});

