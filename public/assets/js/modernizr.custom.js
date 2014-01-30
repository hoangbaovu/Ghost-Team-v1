Modernizr.load([

  {
    load : '../assets/js/jquery.min.js',
    complete: function() {
        // Preloader
        $('#status').fadeOut(); // will first fade out the loading animation
        $('#preloader').delay(250).fadeOut('slow'); // will fade out the white DIV that covers the website.
        // $('body').delay(250).css({'overflow':'visible'});
    }
  },

  {
    load: '../assets/js/jquery.lazyload.min.js',
    complete: function() {
      $("img.lazy").lazyload({
        effect : "fadeIn",
      });
    }
  },

  { 
    load: '../assets/js/jquery.nicescroll.min.js',
    complete: function() {

      // Nice Scroll
      $("html, #scroll-1, #scroll-2").niceScroll({
        cursorcolor: "#EC2125",
        cursorborder: "#EC2125",
        cursorborderradius: 0,
        cursorwidth: 5,
        zindex: 99999,
        cursoropacitymax: 0.7
      });
    },
  },

  {
    load: '../assets/js/jquery.masonry.min.js',
    complete: function() {
      // Masonry Single-Column
      $('#ghost-member-index').masonry({
        itemSelector: '.masonry-box'
      });
    }
  },

  {
    load: '../assets/js/jquery.carouFredSel.js',
    complete: function() {
      // Masonry Single-Column
      $('#foo2').carouFredSel({
        responsive       : true,
        scroll: {
          items          : 1,
          effect         : "easeOutBounce",
          duration       : 350,             
          pauseOnHover   : true,
        },
        items: {
          width          : 390,
          visible: {
            min          : 3,
            max          : 10
          }
        },
        // pagination       : "#pager2",
        mousewheel       : true,
        swipe: {
          onMouse        : true,
          onTouch        : true
        }
      });
    }
  },

  {
    load : '../assets/js/bootstrap.min.js',
    complete: function() {
      $('.collapse').collapse({
        toggle: false
      });

      $("[data-toggle='tooltip']").tooltip();
    }
  },

  // Load noi dung nay sau cung
  {
    load : '../assets/js/custom.js',
  },

]);