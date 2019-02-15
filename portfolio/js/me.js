 'use strict';

 $(document).ready(function () {
           $("#left").click(function () { 
           var leftPos = $('.DivDataMain').scrollLeft();
           $(".DivDataMain").animate({scrollLeft: leftPos + 150}, 600);
      });   
                    
           $("#right").click(function () { 
           var leftPos2 = $('.DivDataMain').scrollLeft();
           $(".DivDataMain").animate({scrollLeft: leftPos2 - 150}, 600);
      });   
           });
 $(function() {

   $("body").mousewheel(function(event, delta) {

      this.scrollLeft -= (delta * 30);
    
      event.preventDefault();

   });

});