<?php
/**
 * Template Name: Home Page
 *
 * @package stargazer-workshop
 */

get_header();
?>



        <header class="masthead">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 col-md-3 ">
                <div class="scifi-panel text-center">
                  <a class="btn-scifi" href="#">Stargazer Workshop</a>
                </div>
              </div>
              <div class="col-6 col-md-5">
                  <!-- <div class="scene">
                    <div class="wrapper">
                      <div class="globe">
                        <span class="ring"></span>
                        <span class="ring"></span>
                        <span class="ring"></span>
                        <span class="ring"></span>
                        <span class="ring"></span>
                        <span class="ring"></span>
                        <span class="ring"></span>
                        <span class="ring"></span>
                        <span class="ring"></span>
                        <span class="ring"></span>
                      </div>
                    </div>
                  </div> -->
                  <!-- <canvas id="displayCanvas" width="300px" height="220px">
                      Your browser does not support HTML5 canvas.
                  </canvas> -->
                  <div class="scifi-panel">
                    <nav class="navbar navbar-expand-lg navbar-light " id="mainNav">
                      <div class="container">
                        <button class="navbar-toggler btn-scifi text-center" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                          Open <br>Menu
                          
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                          <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                              <a class="nav-link" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="about.html">About</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="post.html">Sample Post</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="contact.html">Contact</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </nav>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-8">
                <div class="scifi-panel scifi-panel-header text-center">
                  <h1>Stargazer Workshop</h1>
                  <p class="header-paragraph">
                    Open Source Bootstrap Website Themes
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-6 col-md-3">
                <div class="scifi-panel text-center">
                  <a class="btn-scifi" href="#">Find Out How</a>
                </div>
              </div>
              <div class="col-6 col-md-5">
                <div class="scifi-panel text-center">
                  <a href="#" class="btn-scifi">Request a quote</a>
                </div>
              </div>
            </div>
          </div>
        </header>



<?php
    $args = array( 'numberposts' => '5' );
    $recent_posts = wp_get_recent_posts( $args );

    foreach( $recent_posts as $recent ){
		echo 
		'<li> ' . get_the_post_thumbnail($recent["ID"],'thumbnail') . '
		<a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> 
		</li> ';
    }
?>
</ul>






<?php
get_sidebar();
get_footer();
