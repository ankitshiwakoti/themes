<?php get_header(); ?>
      <section class="hero">
        <div class="container-fluid overlay-true">
          <div class="row py-1 position-relative">
            <div class="heroslider p-0">
            <?php
                    $product_params = [
                        "post_type" => "Hero_slider",
                        "post_per_page" => -1,
                        "orderby" => "title",
                        "order" => "ASC"
                    ];
                    
                    $product_data = new WP_Query($product_params); 
                    
                    while($product_data->have_posts()): $product_data->the_post(); ?>
                     <?php
                                            // Get the post ID
                            $post_id = get_the_ID();

                            // Get all attached images for the post
                            $images = get_attached_media('image', $post_id);

                            // Loop through the images and display them
                            foreach ($images as $image) {
                                
                                $image_url = wp_get_attachment_image_src($image->ID, 'full')[0];
                                // echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true)) . '" />';
                                ?>

              <div class="slider1 position-relative">
                        <img
                            src="<?php echo esc_url($image_url) ?> "
                            class="w-100"
                            alt="<?php echo esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true))?> "
                            />
                     
                            <?php } ?>
                <div
                  class="position-absolute top-100 start-50 translate-middle overlaymain"
                >
                  <div class="text-center">
                    <button class="btn text-center overlaybtn">
                      PORTFOLIO
                    </button>
                  </div>
                </div>
              </div>
              <?php endWhile; ?>
            </div>
          </div>
        </div>
      </section>

      <section class="topselling">
        <div class="container">
          <div class="row py-5">
            <div>
            <h3 class="topsellingheading mb-0">OUR TOP SELLING 3D RENDERS</h3>
           
            <img src="http://localhost/ArchVerse3D/wp-content/themes/images/our.png" alt="logo" class="img-fluid headingunder" />
          </div>

          <?php
            $product_params = [
                "post_type" => "Services",
                "post_per_page" => -1,
                "orderby" => "title",
                "order" => "ASC"
            ];
            
            $product_data = new WP_Query($product_params); 
            
            while($product_data->have_posts()): $product_data->the_post(); ?>

            <div class="col-md-6 col-lg-6 col-sm-12 py-3">
              <div class="card cardsborder p-0 pb-3" >
                <div class="topsellingslider p-0">
                    <?php
                                    // Get the post ID
                    $post_id = get_the_ID();

                    // Get all attached images for the post
                    $images = get_attached_media('image', $post_id);

                    // Loop through the images and display them
                    foreach ($images as $image) {
                        
                        $image_url = wp_get_attachment_image_src($image->ID, 'full')[0];
                        // echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true)) . '" />';
                        ?>
                    <div class="slide">
                    <img
                      src="<?php echo  esc_url($image_url) ?> "
                      class="w-100"
                      alt="<?php echo esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true))?> "
                    />
                  </div>
                    <?php } ?>
                
                </div>
                <div class="card-body">
                  <h4 class="card-title"><?php the_title(); ?></h4>
                  <p class="card-text">
                  <?php the_content() ;?>
                  </p>
                  <div class="pt-4">
                    <a href="<?php the_permalink(); ?>" class="btn topsellingbtn px-4 py-2">EXPLORE MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <?php endWhile; ?>
          </div>
        </div>
      </section>

      <section class="project">
        <div class="container">
          <div class="row flex-wrap py-3">
            <div>
            <h3 class="projectsheading mb-0">OUR PROJECTS</h3>
            <img src="http://localhost/ArchVerse3D/wp-content/themes/images/project/ourproject.png" alt="logo" class="img-fluid headingunder" />
          </div>

          <?php
            $product_params = [
                "post_type" => "Projects",
                "post_per_page" => -1,
                "orderby" => "title",
                "order" => "ASC"
            ];
            
            $product_data = new WP_Query($product_params); 
            
            while($product_data->have_posts()): $product_data->the_post(); ?>
            <div class="col-lg-6 col-md-6 col-12 py-3">
              <div class="card border-0 position-relative">
                <div class="projectslider">

                <?php
                                    // Get the post ID
                    $post_id = get_the_ID();

                    // Get all attached images for the post
                    $images = get_attached_media('image', $post_id);

                    // Loop through the images and display them
                    foreach ($images as $image) {
                        
                        $image_url = wp_get_attachment_image_src($image->ID, 'full')[0];
                        // echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true)) . '" />';
                        ?>
                    <div class="slide">
                    <img
                      src="<?php echo  esc_url($image_url) ?> "
                      class="card-img-top"
                      alt="<?php echo esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true))?> "
                    />
                  </div>
                    <?php } ?>

                  
                </div>
                <div
                  class="position-absolute bottom-0 start-50 translate-middle-x text-center pb-5"
                >
                  <p class="m-0 card-title"><?php the_title(); ?></p>
                  <h3 class="border-bottom pb-2 card-text"><?php the_content() ;?></h3>
                </div>
              </div>
            </div>
            <?php endWhile; ?>
          </div>
        </div>
      </section>

      <section class="who">
        <div class="container">
          <div class="row py-3">
            <div class="py-3">
            <h3 class="projectsheading mb-0">WHO WE ARE?</h3>
            <img src="http://localhost/ArchVerse3D/wp-content/themes/images/who.png" alt="logo" class="img-fluid headingunder" />
          </div>
            <p>
              Archverse 3D is a full service, interior design firm based in Australia specializing in classic design with a global influence. whether designing residential or 
              commercial spaces, KCD has built a reputation on achieving highly individual results for a discerning, international clientele.
            </p>
            <p>
              This company is a full service, interior design firm based in Australia specializing in classic design with a global influence. whether designing residential or commercial 
                 spaces, KCD has built a reputation. It is a full service, interior design firm based in Australia specializing in classic design with a global influence. whether designing 
                residential or commercial spaces.
            </p>
          </div>
        </div>
      </section>

      <section class="portfolio">
        <div class="container">
          <div class="row py-3">
            <div class="py-0">
              <h3 class="topsellingheading mb-0">PORTFOLIO</h3>
              <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/portfolioimg.png" alt="logo" class="img-fluid headingunder" />
            </div>
            <?php
            $product_params = [
                "post_type" => "Portfolio",
                "post_per_page" => -1,
                "orderby" => "title",
                "order" => "ASC"
            ];
            
            $product_data = new WP_Query($product_params); 
            
            while($product_data->have_posts()): $product_data->the_post(); ?>

            <div class="col-md-6 col-lg-4 col-sm-12 py-3">
              <div class="card cardsborder p-0">
              <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail("",["class" => "img-fluid", "alt" => "portfolio_img"]); ?>
                    <?php endif; ?>

                <div class="card-body">
                  <h4 class="card-title"><?php the_title(); ?></h4>
                  <p class="card-text">
                  <?php the_content() ;?>
                  </p>
                  <div class="pt-4">
                    <a href="<?php the_permalink(); ?>" class="btn topsellingbtn px-4">LEARN MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <?php endWhile; ?>
        
          </div>
        </div>
      </section>
      <section class="portfolio">
        <div class="container">
          <div class="row py-4">
            <div class="py-2">
              <h3 class="topsellingheading mb-0">BLOGS</h3>
              <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/blog.png" alt="logo" class="img-fluid headingunder" />
            </div>
            <?php
            $product_params = [
                "post_type" => "Bloge",
                "post_per_page" => -1,
                "orderby" => "title",
                "order" => "ASC"
            ];
            
            $product_data = new WP_Query($product_params); 
            
            while($product_data->have_posts()): $product_data->the_post(); ?>
        
            <div class="col-md-6 col-lg-4 col-sm-12 py-3">
              <div class="card cardsborder p-0">
                
                <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail("",["class" => "img-fluid", "alt" => "nbame"]); ?>
                    <?php endif; ?>
                <div class="card-body">
                  <h4 class="card-title"><?php the_title(); ?></h4>
                  <p class="card-text">
                   <?php the_content() ;?>
                  </p>
                  <div class="pt-4">
                    <a href="<?php the_permalink(); ?>" class="btn topsellingbtn px-4">LEARN MORE</a>
                  </div>
                </div>
              </div>
            </div>
            <?php endWhile; ?>
        
          </div>
        </div>
      </section>

      <section class="trusted">
        <div class="container">
          <div class="row">
            <div class="py-3 text-center  ">
              <h3 class="headingtitle mb-0">TRUSTED BY</h3>
              <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/trustedby.png" alt="logo" class="img-fluid headingunder text-start" />
            </div>
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="trustedslider" dir="rtl">
                <?php
                $product_params = [
                    "post_type" => "Trusted_by",
                    "post_per_page" => -1,
                    "orderby" => "title",
                    "order" => "ASC"
                ];
                
                $product_data = new WP_Query($product_params); 
                
                while($product_data->have_posts()): $product_data->the_post(); ?>


                    <?php
                        // Get the post ID
                        $post_id = get_the_ID();

                        // Get all attached images for the post
                        $images = get_attached_media('image', $post_id);

                        // Loop through the images and display them
                        foreach ($images as $image) {
                            
                            $image_url = wp_get_attachment_image_src($image->ID, 'full')[0];
                            // echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true)) . '" />';
                            ?>
                        <div class="slide p-2">
                        <img
                        src="<?php echo  esc_url($image_url) ?> "
                        class="w-100"
                        alt="<?php echo esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true))?> "
                        />
                    </div>
                        <?php } ?>
                <?php endWhile; ?>
                
              </div>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
      </section>
      <section class="trusted py-2">
        <div class="container">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
              <div class="trusted2slider" dir="ltr">
                    <?php
                    $product_params = [
                        "post_type" => "Trusted_by",
                        "post_per_page" => -1,
                        "orderby" => "title",
                        "order" => "ASC"
                    ];
                    
                    $product_data = new WP_Query($product_params); 
                    
                    while($product_data->have_posts()): $product_data->the_post(); ?>


                        <?php
                                            // Get the post ID
                            $post_id = get_the_ID();

                            // Get all attached images for the post
                            $images = get_attached_media('image', $post_id);

                            // Loop through the images and display them
                            foreach ($images as $image) {
                                
                                $image_url = wp_get_attachment_image_src($image->ID, 'full')[0];
                                // echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true)) . '" />';
                                ?>
                            <div class="slide p-2">
                            <img
                            src="<?php echo  esc_url($image_url) ?> "
                            class="w-100"
                            alt="<?php echo esc_attr(get_post_meta($image->ID, '_wp_attachment_image_alt', true))?> "
                            />
                        </div>
                            <?php } ?>
                    <?php endWhile; ?>
                        
              </div>
            </div>
            <div class="col-lg-2"></div>
          </div>
        </div>
      </section>
        <section>
          <div class="container">
            <div class="row pt-4">
              <div class="pt-3 py-2">
                <h3 class="headingtitle mb-0">TESTIMONALS</h3>
                <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/testimonial.png" alt="logo" class="img-fluid headingunder" />
              </div>
            </div>
          </div>
        </section>
      <section class="testimonals ">
        <div class="container">
          <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-10">
              <div class="testislider">

              <?php
            $product_params = [
                "post_type" => "testi",
                "post_per_page" => -1,
                "orderby" => "title",
                "order" => "ASC"
            ];
            
            $product_data = new WP_Query($product_params); 
            
            while($product_data->have_posts()): $product_data->the_post(); ?>

                <div class="testi-card text-center">
                  <div
                    class="image d-flex align-items-center justify-content-center pb-4"
                  >
                  <?php if (has_post_thumbnail()): ?>
                    <?php the_post_thumbnail("",["class" => "img-fluid", "alt" => "nbame"]); ?>
                    <?php endif; ?>
                    
                  </div>
                  <div class="titles pb-3">
                    <h4 class="mb-0"><?php the_title(); ?></h4>
                    <p><?php the_excerpt(); ?></p>
                  </div>
                  <div class="testi-body p-0 pb-5">
                    <p>
                    <?php the_content() ;?>
                    </p>
                  </div>
                </div>
                 <?php endWhile; ?>
              </div>
            </div>
            <div class="col-lg-1"></div>
          </div>
        </div>
      </section>

      <section class="form">
       <div class="ankit-container">
        <div class="row py-5">

          <div class="py-3 text-center  ">
            <h3 class="headingtitle mb-0">REQUEST A QUOTE</h3>
            <img src=" http://localhost/ArchVerse3D/wp-content/themes/images/request.png" alt="logo" class="img-fluid headingunder me-5 pe-2" />
          </div>

          <div class="col-md-6 col-lg-6 col-sm-12">
            <form class="pe-3">
              <div class=" gap-2 d-flex pe-2">
              <div class="mb-3 col-md-6">
                <label for="firstname" class="form-label lables">NAME</label>
                <input type="text" class="form-control p-2" placeholder="Nabina Shahi" id="firstname" aria-describedby="emailHelp">
              </div>
              <div class="mb-3  col-md-6">
                <label for="lastname" class="form-label lables">PHONE</label>
                <input type="number" class="form-control p-2 " placeholder="98188*****" id="lastname">
              </div>
            </div>
            <div class="col-md-12 mb-3">
              <label for="email" class="form-label lables">Email address</label>
              <input type="email" class="form-control p-2" placeholder="nabina@gmail.com" id="email" aria-describedby="emailHelp">
            </div>
            <p class="main-heading mb-0 py-2">CHOOSE DESIGN SERVICES</p>
             <div class="col-md-12">
              <p class="sub-heading mb-0 py-2">1. 3D Rendering</p>
              <div class="input-group">
                <select class="form-select drop p-2" id="inputGroupSelect01" aria-label="Example select with button addon">
                  <option selected class="">Select the multiple options</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
             </div>
             <div class="col-md-12">
              <p class="sub-heading mb-0 py-2">2. Floor Plans</p>
              <div class="input-group">
                <select class="form-select drop p-2" id="inputGroupSelect02" aria-label="Example select with button addon">
                  <option selected class="">Select the multiple options</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
             </div>
             <div class="col-md-12">
              <p class="sub-heading mb-0 py-2">3. Animations</p>
              <div class="input-group ">
                <select class="form-select drop p-2" id="inputGroupSelect03" aria-label="Example select with button addon">
                  <option selected class="">Select the multiple options</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
             </div>
           
             <div class="col-md-12">
            <p class="main-heading mb-0 py-3">MESSAGE</p>
              <div class="mb-3">
                <textarea class="form-control" placeholder="message" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
             </div>
             <div class="col-md-12 ">
              <p class="main-heading mb-0 py-2 pb-3">DO YOU HAVE DRAWINGS?  </p>
               <div class="file-drop-area d-grid text-center ">
                <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                 <path d="M13.9999 19.0003L5.00003 19.0004L5 17.0004L11.9999 17.0003L12 6.82845L8.05027 10.7782L6.63606 9.36396L13 3L19.364 9.36396L17.9498 10.7782L14 6.8284L13.9999 19.0003Z" fill="#7F7F7F"/>
                 </svg></span>
                 <span class="file-message">DRAG AND DROP FILES (.pdf, .jpeg, .pag)</span>
                 <span class="file-message">OR</span>
                 <div class="py-3">
                 <span class="btn formselectbtn mx-auto rounded-pill ">
                   SELECT FILES
                 </span>
               </div>
                 <input class="file-input" type="file" multiple>
               </div>
              </div>
              <div class="py-5">
                 <button type="submit" class="btn form-submit rounded-pill w-100 ">Submit</button>
              </div>
            </form>
          </div>
          <div class="col-md-6 bg-image d-flex justify-content-center my-3  text-center">
            <div class="row d-flex justify-content-center align-items-center ">
              <div class=" ">
                <div class="img-title p-0">Free Consultation</div>
                <div class="headerunder"><svg  xmlns="http://www.w3.org/2000/svg" width="435" height="32" viewBox="0 0 432 32" fill="none">
                  <path d="M431 1L1 11V31L431 1Z" fill="#FF8001" stroke="#FF8001"/>
                </svg></div>
                  
                  <div class="img-subtitle py-3">Discuss your regards with our experts</div>
              </div>
              <div class="">
                <div class="py-3">
                  <button class="btn img-btn1">RESERVE A SEAT</button>
                </div>
                <div class="py-3">
                  <button class="btn img-btn2">SEND A MESSAGE</button>
                </div>
              </div>
              <div class="text-center  justify-content-center ">
                
                    <div class="socialmedialinksform">
                      <p>SOCIAL MEDIA LINK</p>
                    </div>
              <div class="d-flex align-items-center justify-content-center px-2 gap-2">
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
       </div>
      </section>
      <?php get_footer(); ?>

      