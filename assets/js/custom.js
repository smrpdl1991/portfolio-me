jQuery(document).ready(function ($) {

  $('.menu-toggle').on('click', function () {
    $('.main-navigation ul').slideToggle();
  });

  // function displaySpansWithInterval() {
  //   var title = document.querySelector('.section-title');
  //   var spans = title.getElementsByTagName('span');
  //   var index = 0;

  //   // Initially hide all the spans except the first one
  //   for (var i = 1; i < spans.length; i++) {
  //     spans[i].style.display = 'none';
  //   }

  //   setInterval(function () {
  //     spans[index].style.display = 'none';  // Hide the current span

  //     index++;

  //     // Reset the index if it exceeds the number of spans
  //     if (index >= spans.length) {
  //       index = 0;
  //     }

  //     spans[index].style.display = 'inline';  // Display the next span
  //   }, 2000);
  // }

  // displaySpansWithInterval();


  $('.section-featured .section-title').owlCarousel({
    loop:true,
    nav:false,
    mergeFit:true,
    dots:true,
    items:1,
    slideTransition:'linear',
    autoHeight:true,
    // autoplayTimeout: 2000,
    // autoplay:true,
    autoplayHoverPause:true,
  })
  $(".work-item").each(function () {
    var $this = $(this);
    var $projectInfo = $this.find(".project-info");
    var projectInfoWidth = $projectInfo.outerWidth();
    var projectInfoHeight = $projectInfo.outerHeight();
    var timeoutId;

    $this.mousemove(function (e) {
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
    }).mouseleave(function () {
      timeoutId = setTimeout(function () {
        $projectInfo.fadeOut();
      }, 500); // Set a timeout of 500ms before hiding the element
    });

    // Hide the project info element when the mouse pointer is over it
    $projectInfo.mouseover(function () {
      clearTimeout(timeoutId);
    }).mouseleave(function () {
      $projectInfo.fadeOut();
    });
  });

  $(".accordian-title .icon").on('click', function () {
    $(this).closest('.item').toggleClass('active');
    $(this).closest('.item').find('.desc').slideToggle();
  });


});
