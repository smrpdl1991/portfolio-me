jQuery(document).ready(function($) {
    $(".work-item").each(function() {
      var $this = $(this);
      var $projectInfo = $this.find(".project-info");
      var projectInfoWidth = $projectInfo.outerWidth();
      var projectInfoHeight = $projectInfo.outerHeight();
      var timeoutId;
  
      $this.mousemove(function(e) {
        var parentOffset = $this.offset();
        var relX = e.pageX - parentOffset.left;
        var relY = e.pageY - parentOffset.top;
        var posX = relX - projectInfoWidth / 2;
        var posY = relY - projectInfoHeight / 2;
        if (posY < 0) {
          posY = 0;
        } else if (posY + projectInfoHeight > $this.outerHeight()) {
          posY = $this.outerHeight() - projectInfoHeight;
        }
        $projectInfo.css({ "left": posX, "top": posY }).fadeIn();
        clearTimeout(timeoutId);
      }).mouseleave(function() {
        timeoutId = setTimeout(function() {
          $projectInfo.fadeOut();
        }, 500); // Set a timeout of 500ms before hiding the element
      });
  
      // Hide the project info element when the mouse pointer is over it
      $projectInfo.mouseover(function() {
        clearTimeout(timeoutId);
      }).mouseleave(function() {
        $projectInfo.fadeOut();
      });
    });
  });
  