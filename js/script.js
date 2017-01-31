


jQuery("document").ready(function() {

  jQuery(".scroll-link").on("click",function(event) {
      event.preventDefault();
      var sectionID = jQuery(this).attr("data-id");
      scrollToID("#"+ sectionID, 750);
});

  jQuery(".scroll-top").on("click", function(event){
      event.preventDefault();            jQuery("html,body").animate({scrollTop:0},"slow");
  });
  
  /*
  $("#nav-toggle").on("click", function(event){
    event.preventDefault();
    $("#main-nav").toggleClass("open");   
  });*/
  
});


function scrollToID(id, speed){
  var offSet = 50;
  var targetOffset = jQuery(id).offset().top - offSet;
  jQuery("html,body").animate({scrollTop:targetOffset}, speed);
}