<?php $options = get_option('nuostabu'); ?>
<?php get_header(); ?>


<!-- Banner section start-->
<section id="banner-section" class="banner banner text-center"
         style="background-image:url('<?php echo $options['banner-image']['url'] ?>');">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-6 banner-content">
                <h1><?php echo $options['banner-title']; ?></h1>
                <p class="subtitle"><?php echo $options['banner-subtitle'] ?></p>
            </div>
        </div>
    </div>
    <img class="arrow-down" src="<?php echo get_template_directory_uri() ?>/assets/img/arrow.png" alt="Go Down">


    <!-- Comming soone section-->
    <div id="coming-soon" class="we_will_back">

        <h6><?php echo $options['remaining-title'] ?></h6>
        <div class="time-wrap time-wrap d-flex justify-content-between text-center">
            <div class="days">
                <h5 id="days">0</h5>
                <p>Days</p>
            </div>
            <div class="days hours">
                <h5 id="hours">0</h5>
                <p>Hours</p>
            </div>
            <div class="days minutes">
                <h5 id="minutes">0</h5>
                <p>Minutes</p>
            </div>
            <div class="days seconds">
                <h5 id="seconds">0</h5>
                <p>Seconds</p>
            </div>
        </div>

    </div>
    <!-- Comming soone section end-->


</section>
<!-- Banner section End-->

<!-- partner_ship section start-->
<section id="partner-ship" class="partner_ship">
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="header-content text-center">
                    <h2><?php echo $options['partner-title'] ?></h2>
                    <h1> <?php echo $options['partner-subtitle'] ?></h1>
                </div>
            </div>
        </div>

        <div class="row icon-content d-flex justify-content-center flex-wrap ">
            <?php
            // Get object items
            $objectiveItems = $options['main-objectives'];
            $i=1;
            foreach($objectiveItems as $item){  ?>
                <div class="col-md-4 d-flex flex-column align-items-center single-icon-item mb-40 <?php if($i%4==0){ echo ' ml-0'; } ?> ">
                    <div class="icon circle-ash d-flex align-items-center justify-content-center" style="background: <?php  echo $item['ob-icon-bg']; ?>">
                        <img src="<?php echo $item['objective-icon']['url']?>" alt="">
                    </div>
                    <p><?php echo $item['object-details']; ?></p>
                </div>
           <?php $i++; } ?>
        </div>
    </div>
</section>
<!-- partner_ship section End-->



<!-- our_assets section start-->
<section id="our-assets" class="our_assets">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 single-asset">
                <div class="single-asset-content">
                    <h5><?php echo $options['asset-tabs']['part-count'] ?></h5>
                    <h6 class="text-uppercase"><?php echo $options['asset-tabs']['part-title'] ?></h6>
                    <p><?php echo $options['asset-tabs']['part-content'] ?></p>
                </div>
            </div>
            <div class="col-md-4 single-asset">
                <div class="single-asset-content">
                    <h5><?php echo $options['asset-tabs']['country-count'] ?></h5>
                    <h6 class="text-uppercase"><?php echo $options['asset-tabs']['country-title'] ?></h6>
                    <p><?php echo $options['asset-tabs']['country-content'] ?></p>
                </div>
            </div>
            <div class="col-md-4 single-asset">
                <div class="single-asset-content">
                    <h5><?php echo $options['asset-tabs']['days-count'] ?></h5>
                    <h6 class="text-uppercase"><?php echo $options['asset-tabs']['days-title'] ?></h6>
                    <p><?php echo $options['asset-tabs']['days-content'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- our_assets section End-->

<?php if(!empty($options['map-sec-iframe'])){ ?>
    <sectoin id="map-iframe">
        <?php echo $options['map-sec-iframe'] ?>
    </sectoin>
<?php }else{ ?>
    <section id="map" class="map_section"
             style="background-image: url('<?php echo $options['map-img-bg']['url'] ?>');">
    </section>
<?php } ?>


<!--About Forum section -->
<section id="about-forum" class="about_forum">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-7 map-desktop d-none d-md-block">
               <?php echo $options['about1-mapi'] ?>
            </div>
            <div class="col-12 col-lg-5 map-mobile">
                <div class="about-content">
                    <h2><?php echo $options['about1-title'] ?></h2>
                    <h1><?php echo $options['aboout1-subtitle'] ?></h1>
                    <div class="mobile-map d-block d-md-none">
                        <?php echo $options['about1-mapi'] ?>
                    </div>
                    <p><?php echo $options['about1-details'] ?></p>
                    <?php if(!empty($options['about1-link']['url'])){ ?>
                        <a  href="<?php echo $options['about1-link']['url'] ?>" target="<?php echo $options['about1-link']['target']  ?>"><?php echo $options['about1-link']['text'] ?></a>
                  <?php  } ?>

                </div>
               
            </div>
        </div>

    </div>
</section>
<!--About Forum section end -->

<!--About lithuania section -->
<section id="about-lithuania" class="about_lithuania">
    <div class="container">
        <div class="row">

            <div class="col-12 col-md-6">
                <div class="about-content">
                    <h2><?php echo $options['about2-title'] ?></h2>
                    <h1><?php echo $options['aboout2-subtitle'] ?></h1>
                    <div class="lithuania-thumb d-md-none ">
                        <img src="<?php echo $options['about2-image']['url'] ?>"  class="img-fluid" alt="About ">
                    </div>

                    <p><?php echo $options['about2-details'] ?></p>
                    <?php if(!empty($options['about2-link']['url'])){ ?>
                        <a  href="<?php echo $options['about2-link']['url'] ?>" target="<?php echo $options['about2-link']['target']  ?>"><?php echo $options['about2-link']['text'] ?></a>
                    <?php  } ?>

                </div>
            </div>

            <div class="col-12 col-md-6">
                <div class="lithuania-thumb desktop  d-none d-md-block float-end">
                    <img src="<?php echo $options['about2-image']['url'] ?>"  class="img-fluid float-end" alt="About ">
                </div>
            </div>

        </div>
    </div>
</section>
<!--About lithuania section end -->


<!--moderator section -->
<section id="moderator-facilitators" class="moderator_facilitators text-center">
    <div class="container">
        <div class="row">
            <h1><?php echo  $options['moderators-title'] ?></h1>
            <?php
            $moderators =  $options['moderator-list'];

            foreach ($moderators as $moderator){ ?>
                <div class="align-items-center col-12 col-md-6 d-flex justify-content-center">

                    <div class="single_moderator text-center">
                        <div class="thumb">
                            <img src="<?php echo $moderator['modarator-image']['url'] ?>"
                                 class="moderator " alt="">
                            <img src="<?php echo get_template_directory_uri().'/assets/img/'. $moderator['moderator-country'].'.png' ?>" alt=""
                                 class="flag">
                        </div>
                        <h5><?php echo $moderator['modarator-name'] ?></h5>
                        <p><?php echo $moderator['modarator-postion-location'] ?></p>
                    </div>
                </div>
            <?php }

            ?>
            <a href="#">Check all facilitators</a>

        </div>
    </div>
</section>
<!--moderator section end -->

<!--Organizer section -->
<section id="organisers" class="organizers text-center">
    <div class="container">
        <div class="row">
            <h3><?php echo $options['organizer-title'] ?></h3>
        </div>
        <div class="row d-flex align-items-center justify-content-center">

            <?php
            $logosId =  $options['organizer-logos'];
           $logosIdArray =explode(",",$logosId);

            foreach ($logosIdArray as $id){ ?>
                <div class="col-12 col-md-4">
                    <div class="organizer-log">
                        <img src="<?php echo wp_get_attachment_url($id) ?>"  class="img-fluid" alt="">
                    </div>
                </div>
            <?php }

            ?>

        </div>
    </div>
</section>
<!--Organizer section End-->

<!--Partners section -->
<section id="partners" class="partners organizers text-center">
    <div class="container">
        <div class="row">
            <h3><?php echo $options['partners-title'] ?></h3>
        </div>


        <div class="row d-flex align-items-center justify-content-center">

            <?php

            $logosId =  $options['partners-logos'];
            $logosIdArray =explode(",",$logosId);

            foreach ($logosIdArray as $id){ ?>
                <div class="col-6 col-md-4 single-partner">
                    <div class="organizer-log">
                        <img src="<?php echo wp_get_attachment_url($id) ?>" class="img-fluid" alt="">
                    </div>

                </div>
            <?php }

            ?>

        </div>
    </div>
</section>
<!--Partners section End -->

<?php get_footer() ?>
