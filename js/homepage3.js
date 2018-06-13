
    $(window).scroll(function() {
    if ($(this).scrollTop() > 120){  
    $('.var3_header ').removeClass('slideIn animated');
      $('.var3_header ').addClass("sticky_header slideInDown animated");
    }
    else{
    $('.var3_header  ').removeClass('sticky_header slideInDown animated');
       $('.var3_header  ').addClass('slideIn animated');
    }
});
  $(document).ready(function(){
   
$(".hdr_search .btn").click(function(){
    $(".search_overlay").addClass("show")  
    })
    
   $(".close_search").click(function(){
    $(".search_overlay").removeClass("show")  
    }) 
  })
