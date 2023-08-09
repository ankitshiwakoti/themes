<section class="footer">
        <div class="container ">
          <div class="row border-bottom py-5">
          
            <div class="col-md-3 col-sm-12  ">
              <div class="footerlogo text-center d-flex align-items-center justify-content-center">
                <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/flogo.png" class="fill" alt="slider1" />

              </div>
              <p class="footerlogotext py-4">Archverse 3D is a full service, interior design 
                firm based in Australia dividual results for a 
                discerning, international clientele.</p>
            </div>
            <div class="col-md-1 col-sm-12"></div>
            <div class="col-md-2 col-sm-12  imp">
              <div class="">
              <p class="imp-heading mb-0">IMPORTANT LINKS</p>
              <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/footerimp.png" alt="logo" class="img-fluid w-75 headingunder" />

            </div>
              <p class="imp-title">3D RENDERS</p>
              <p class="imp-title">ABOUT US</p>
              <p class="imp-title">FLOOR PLANS</p>
              <p class="imp-title">ANIMATIONS</p>
            </div>
            <div class="col-md-1 col-sm-12"></div>
            <div class="col-md-2 col-sm-12 ">
              <div >
              <p class="imp-heading mb-0">SOCIAL MEDIA LINK</p>
              <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/footersocial.png" alt="logo" class="img-fluid w-75 headingunder" />

            </div>

            <div class="d-flex align-items-center justify-content-start px-2 gap-2">
              <div class="social-fb  px-1 py-1 rounded-3">
                <i class="bi bi-facebook p-1 "></i>
              </div>
              <div class="social-yt px-1 py-1 rounded-3">
                <i class="bi bi-youtube p-1  "></i>
              </div>
              <div class="social-li px-1 py-1 rounded-3">
                <i class="bi bi-linkedin p-1 "></i>
              </div>
              <div class="social-in px-1 py-1 rounded-3">
                <i class="bi bi-instagram p-1 "></i>
              </div>
            </div>
              <!-- <div class="d-flex align-items-center justify-content-start  gap-2">
              <div class="social  border py-1 mt-1 rounded-3">
                <i class="bi bi-facebook px-2 "></i>
              </div>
              <div class="social  border py-1 mt-1 rounded-3">
                <i class="bi bi-youtube px-2 "></i>
              </div>
              <div class="social  border py-1 mt-1 rounded-3">
                <i class="bi bi-linkedin px-2 "></i>
              </div>
              <div class="social  border py-1 mt-1 rounded-3">
                <i class="bi bi-instagram px-2 "></i>
              </div>
             
            </div> -->
            </div>
            <div class="col-md-1 col-sm-12"></div>
            <div class="col-md-2 col-sm-12 ">
              <div class="p-0 m-0">
              <p class="imp-heading mb-0">CONTACT US</p>
              <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/footercontactus.png" alt="logo" class="img-fluid w-50 headingunder" />

             
            </div>
              <div class=" d-flex gap-2 ">
                <span class="contact-social "> <i class="bi bi-envelope"></i> </span> 
                <p class="imp-title pt-1 ">archverse3d@gmail.com</p>
              </div>
              <div class="d-flex gap-2 ">
                <span class="contact-social "> <i class="bi bi-telephone"></i> </span> 
                <p class="imp-title ">+977124569, +977123654</p>
              </div>
              <div class="d-flex gap-2 ">
                <span class="contact-social "> <i class="bi bi-geo-alt"></i> </span> 
                <p class="imp-title ">Sinchahiti complex, Lalitpur</p>
              </div>
            </div>
            </div>
            <Row class="d-flex py-3  align-items-start">
              <div class="text-start rights">
                Copyright ©
                <b class="rights m-0 p-0">2023</b>
                <Link href="/" class=" ms-1 rights">
                  Jobrecruitment.com.np
                </Link>
                ALL RIGHTS RESERVED.
              </div>
            </Row>
        </div>
      </section>
    </main>
  </body>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"
  ></script>
  <!-- jquery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

  <!-- slider -->
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
    integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>

  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
    integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
    integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
    crossorigin="anonymous"
  ></script>

  <script>
    $(document).on('change', '.file-input', function() {
        

        var filesCount = $(this)[0].files.length;
        
        var textbox = $(this).prev();
      
        if (filesCount === 1) {
          var fileName = $(this).val().split('\\').pop();
          textbox.text(fileName);
        } else {
          textbox.text(filesCount + ' files selected');
        }
      });
    </script>
  <!-- hero section slider -->

  <script type="text/javascript">
    $(".heroslider").slick({
      dots: false,

      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow:
        ' <span class="pre-btn "  > <i class="bi bi-arrow-left trust"></i> </span>',
      nextArrow:
        ' <span class="next-btn "> <i class="bi bi-arrow-right trust"></i> </span>',
    });

    function checkPrevNextSlides(slick, currentIndex) {
      var prevArrow = $(".pre-btn");
      var nextArrow = $(".next-btn");

      // Check if there are previous slides
      if (currentIndex > 0) {
        prevArrow.removeClass("disabled");
      } else {
        prevArrow.addClass("disabled");
      }

      // Check if there are next slides
      if (currentIndex < slick.slideCount - 1) {
        nextArrow.removeClass("disabled");
      } else {
        nextArrow.addClass("disabled");
      }
    }

    // Initial check on document ready
    $(".heroslider").on("init", function (event, slick) {
      checkPrevNextSlides(slick, 0);
    });

    // Check on beforeChange event
    $(".heroslider").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      checkPrevNextSlides(slick, nextSlide);
    });

    $(".heroslider").slick("slickGoTo", 0);
  </script>
  <!-- hero section slider -->

  <!-- topselling slider -->

  <script type="text/javascript">
    $(".topsellingslider").slick({
      dots: false,
      autoplay: false,
      infinite: false,
      initialSlide: 1,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow:
        ' <span class="pre-btn "> <i class="bi bi-arrow-left trust"></i> </span>',
      nextArrow:
        ' <span class="next-btn "> <i class="bi bi-arrow-right trust"></i> </span>',
    });
    function checkPrevNextSlides1(slick, currentIndex) {
      var prevArrow = $(".pre-btn");
      var nextArrow = $(".next-btn");

      // Check if there are previous slides
      if (currentIndex > 0) {
        prevArrow.removeClass("disabled1");
      } else {
        prevArrow.addClass("disabled1");
      }

      // Check if there are next slides
      if (currentIndex < slick.slideCount - 1) {
        nextArrow.removeClass("disabled1");
      } else {
        nextArrow.addClass("disabled1");
      }
    }

    // Initial check on document ready
    $(".topsellingslider").on("init", function (event, slick) {
      checkPrevNextSlides1(slick, 0);
    });

    // Check on beforeChange event
    $(".topsellingslider").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      checkPrevNextSlides1(slick, nextSlide);
    });

    $(".topsellingslider").slick("slickGoTo", 0);
  </script>
 
  <!-- topselling slider end -->

  <!-- project slider -->
  <script type="text/javascript">
    $(".projectslider").slick({
      dots: false,
      infinite: false,

      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow:
        ' <span class="pre-btn "> <i class="bi bi-arrow-left trust"></i> </span>',
      nextArrow:
        ' <span class="next-btn "> <i class="bi bi-arrow-right trust"></i> </span>',
    });
  </script>

  <!-- project slider end -->
  <!-- trusted slider -->
  <script type="text/javascript">
    $(".trustedslider").slick({
      dots: false,
      infinite: true,
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToShow: 3,
      slidesToScroll: 1,
      rtl: true,
    });
  </script>

  <!-- trusted slider end -->
  <!-- trusted slider -->
  <script type="text/javascript">
    $(".trusted2slider").slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrow: false,
      dots: false,
      ltr: true,
    });
  </script>

  <!-- trusted slider end -->

  <!-- testimonials -->

  <script type="text/javascript">
    $(".testislider").slick({
      dots: false,
      infinite: false,

      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow:
        ' <span class="pre-btn "> <i class="bi bi-arrow-left trust"></i> </span>',
      nextArrow:
        ' <span class="next-btn "> <i class="bi bi-arrow-right trust"></i> </span>',
    });

     function checkPrevNextSlidestest(slick, currentIndex) {
      var prevArrow = $(".pre-btn");
      var nextArrow = $(".next-btn");

      // Check if there are previous slides
      if (currentIndex > 0) {
        prevArrow.removeClass("disabledtest");
      } else {
        prevArrow.addClass("disabledtest");
      }

      // Check if there are next slides
      if (currentIndex < slick.slideCount - 1) {
        nextArrow.removeClass("disabledtest");
      } else {
        nextArrow.addClass("disabledtest");
      }
    }

    // Initial check on document ready
    $(".testislider").on("init", function (event, slick) {
      checkPrevNextSlidestest(slick, 0);
    });

    // Check on beforeChange event
    $(".testislider").on("beforeChange", function (event, slick, currentSlide, nextSlide) {
      checkPrevNextSlidestest(slick, nextSlide);
    });

    $(".testislider").slick("slickGoTo", 0);
  </script>

  <script>
    function changeImage(newImage) {
  var imgElement = document.getElementById('image');
  imgElement.src = newImage;
}
  </script>
  <script>
    function changeImage1(newImage) {
  var imgElement = document.getElementById('image1');
  imgElement.src = newImage;
}
  </script>
  <?php wp_footer(); ?>

  <!-- testimonials ends  -->
</html>
