<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arcverse3d</title>
    <link rel="stylesheet" href=" " />
    
    <!-- bootstrap link -->
    

    <?php wp_head(); ?>
  </head>
  <body>
    <main>
      <section class="topheader maincontainer">
        <div class="container">
          <div class="row">
           
            <div class="col-lg-12 col-md-12 col-sm-12 py-2 top-header-right">
              <div class="d-sm-flex d-grid  justify-content-between">
                <div
                  class="d-flex justify-content-center pb-3 pb-sm-0  gap-2 align-items-center"
                >
                <div class="d-flex topheader-social gap-2 ">
                  <span class="  "> <i class="bi bi-envelope"></i> </span> 
                  <p class="imp-title  mb-0">archverse3d@gmail.com</p>
                </div>
                <div class="d-flex topheader-social gap-2 ">
                  <span class=" "> <i class="bi bi-telephone"></i> </span> 
                  <p class="imp-title  mb-0">+977124569, +977123654</p>
                </div>
                </div>
                <div class="text-start d-flex ">
                  <div class="  border-end border-2 px-2">
                 <p class="mb-0 blog ">BLOG</p>
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
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="navbars maincontainer1" id="navbar">
        <nav class="navbar navbar-expand-lg bg-body-white py-2">
          <div class="container">
            <a class="navbar-brand" href="#">
              <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/logo.png" alt="logo" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
            <div
              class="offcanvas offcanvas-start"
              tabindex="-1"
              id="offcanvasNavbar"
              aria-labelledby="offcanvasNavbarLabel"
            >
              <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                  Offcanvas
                </h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="offcanvas"
                  aria-label="Close"
                ></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      aria-current="page"
                    > 
                    3D RENDERS
                    </a>
            
                     <div class="dropdown-menu dropdownitems " >
                      <div class="row">
                        <div class="col-4 img-container">
                          <img id="image" src=" http://localhost/ArchVerse3D/wp-content/themes/images/nav/facade.png" class="img-fluid p-3 pe-0" alt="Default Image">
                        </div>
                        <div class="col-8">
                          <div class="row pt-3 ">
                            <div class="col-6 text-start">
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/facade.png')">FACADE</div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/streetacape.png')">STREETSCAPE</div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/living+kitchen.png')">LIVING + KITCHEN </div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/kitchen.png')">KITCHEN</div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/living.png')">LIVING</div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/bathroom.png')">BATHROOM</div>
                            </div>
                            <div class="col-6  text-start">
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/bedrom.png')">BEDROOM</div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/alfresco.png')">ALFRESCO</div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/office.png')">OFFICE</div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/reception.png')">RECEPTION</div>
                              <div class="dropdown-item drophover" onmouseover="changeImage('http://localhost/ArchVerse3D/wp-content/themes/images/nav/retail.png')">RETAIL FIT OUT</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </li>
                  <li class="nav-item dropdown">
                    <a
                      class="nav-link dropdown-toggle"
                      href="#"
                      role="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                    FLOOR PLANS
                    </a>
                    <div class="dropdown-menu dropdownitems1 " >
                      <div class="row">
                        <div class="col-6 d-flex align-items-center justify-content-center img-container">
                          <img id="image1" src="http://localhost/ArchVerse3D/wp-content/themes/images/nav/2d.png" class="img-fluid ps-2 " alt="Default Image">
                        </div>
                        <div class="col-6">
                          <div class="row pt-3 ">
                            <div class="col-12 text-start">
                              <div class="dropdown-item drophover do-mother" onmouseover="changeImage1(' http://localhost/ArchVerse3D/wp-content/themes/images/nav/2d.png')">2D FLOOR PLAN </div>
                              <div class="dropdown-item drophover do-child" onmouseover="changeImage1('http://localhost/ArchVerse3D/wp-content/themes/images/nav/2d.png')">2D  PLAN </div>
                              <div class="dropdown-item drophover do-child" onmouseover="changeImage1('http://localhost/ArchVerse3D/wp-content/themes/images/nav/2d.png')">2D COLOR PLAN </div>
                              <div class="dropdown-item drophover" onmouseover="changeImage1('http://localhost/ArchVerse3D/wp-content/themes/images/nav/3d.png')">3D FLOOR PLAN </div>
                              
                            </div>
                           
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="#"
                      >ANIMATIONS</a
                    >
                  </li>
                 
                  
                  <li class="nav-item">
                    <a class="nav-link ">ABOUT US</a>
                  </li>
                </ul>

                <ul class="navbar-nav ms-auto mb-2 gap-2 mb-lg-0">
                  <li class="nav-btn1">
                    <a class="btn rounded-pill ">REQUEST A QUOTE</a>
                  </li>
                  <li class="nav-btn2">
                    <a class="btn rounded-pill ">GET IN TOUCH</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
      </section>