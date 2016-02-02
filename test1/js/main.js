//back to top
$(function(){
    var wait = function( callback, seconds){
       return window.setTimeout( callback, seconds * 2000 );
    }
    $(document).on( 'scroll', function(){
 
        if ($(window).scrollTop() > 100) {
            $('.scroll-top-wrapper').addClass('show');
        } else {
            $('.scroll-top-wrapper').removeClass('show');
        }
    });
 
    $('.scroll-top-wrapper').on('click', scrollToTop);
    
    $("#contact-form,#contact-form-footer").submit(function(event){
      event.preventDefault(); 
      var url = "http://www.carebest.com.tw/kw/home/contactslack";
      var $form = $(this);
      
      $.ajax(url, {
        method: "post",
        dataType: "JSON",
        data: $form.serialize(),
        success: function(callback){
          alert(callback["message"]);
     
        }, 
        error: function(callback){
          alert(callback["message"]);
        }
      });
    
    });	
    
    $('a').click(function(){
      $('html, body').animate({
          scrollTop: $( $.attr(this, 'href') ).offset().top
      }, 1500, 'easeOutCubic');
      return false;
    });



    //trigger hover effect
    $(".picture").on("mouseenter", function(){
      $(this).addClass("hover");
    });
    
    $(".picture").on("mouseleave", function(){
      $(this).removeClass("hover");
    });
    
    $(window).on("first_trigger", function(){
      $(".picture").addClass("hover");

      wait(function(){$(".picture").removeClass("hover")}, 1);
    });
    $(".picture").trigger("first_trigger");

    
});
 
function scrollToTop() {
    verticalOffset = typeof(verticalOffset) != 'undefined' ? verticalOffset : 0;
    element = $('body');
    offset = element.offset();
    offsetTop = offset.top;
  
    $('html, body').animate({scrollTop: 0}, 1500, 'easeOutCubic');
}





$('.carousel').carousel();

