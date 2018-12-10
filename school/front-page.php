 <?php get_header(); ?>

<?php while(have_posts()): the_post(); ?>
    <div class="main-content container">
    <main class=" content-text clear">
        <section class="topslider">
            <?php
                echo do_shortcode('[smartslider3 slider=2]');
            ?>
        </section>
        <section class="welcome">
            <div class="container  welcome">
                <div class="row" >
                    <div class="col-md-7 col-lg-7 col-xl-7 descript">
                        <?php the_content(); ?>
                    </div>
                    <div class="col-md-5 col-lg-5 col-xl-5">
                        <a href="<?php echo esc_url(home_url( '/' )); ?>" class="sideimg">
                            <img src="<?php echo get_template_directory_uri(""); ?>/img/sidetree.png" class="img-responsive side">
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section class="features">
            <div class="head">
                <?php the_field('features'); ?>
            </div>

            <div class="box-information container clear">
                <div class="single-box">
                    <?php
                        $id_image = get_field('image_1');
                        $image = wp_get_attachment_image_src($id_image, 'boxes');
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                    <div class="content-box">
                        <?php the_field('description_1'); ?>
                    </div>
                </div>

                <div class="single-box">
                    <div class="content-box">
                        <?php the_field('description_2'); ?>
                    </div>
                    <?php
                        $id_image = get_field('image_2');
                        $image = wp_get_attachment_image_src($id_image, 'boxes');
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                </div>

                <div class="single-box">
                    <?php
                        $id_image = get_field('image_3');
                        $image = wp_get_attachment_image_src($id_image, 'boxes');
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                    <div class="content-box">
                    <?php the_field('description_3'); ?>
                    </div>
                </div>

                <div class="single-box">

                    <div class="content-box">
                    <?php the_field('description_4'); ?>
                    </div>
                    <?php
                        $id_image = get_field('image_4');
                        $image = wp_get_attachment_image_src($id_image, 'boxes');
                    ?>
                    <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                </div>
            </div>


        </section>

        <section class="ourteachers">
          <div class="head">
              <?php the_field('teachers'); ?>
          </div>
          <div class="box-information container clear">

              <div class="single-box">
                  <?php
                      $id_image = get_field('principal');
                      $image = wp_get_attachment_image_src($id_image, 'boxes');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                  <h4>Principal</h4>
              </div>
              <div class="single-box">
                  <?php
                      $id_image = get_field('vice_principal');
                      $image = wp_get_attachment_image_src($id_image, 'boxes');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                  <h4>Vice Principal</h4>
              </div>
              <div class="single-box">
                  <?php
                      $id_image = get_field('english_teacher');
                      $image = wp_get_attachment_image_src($id_image, 'boxes');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                  <h4>English Teacher</h4>
              </div>
              <div class="single-box">
                  <?php
                      $id_image = get_field('nepali_teacher');
                      $image = wp_get_attachment_image_src($id_image, 'boxes');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                  <h4>Nepali Teacher</h4>
              </div>
              <div class="single-box">
                  <?php
                      $id_image = get_field('maths_teacher');
                      $image = wp_get_attachment_image_src($id_image, 'boxes');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                  <h4>Maths Teacher</h4>
              </div>
              <div class="single-box">
                  <?php
                      $id_image = get_field('science_teacher');
                      $image = wp_get_attachment_image_src($id_image, 'boxes');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                  <h4>Science Teacher</h4>
              </div>
              <div class="single-box">
                  <?php
                      $id_image = get_field('sports_teacher');
                      $image = wp_get_attachment_image_src($id_image, 'boxes');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                  <h4>Sports Teacher</h4>
              </div>
              <div class="single-box">
                  <?php
                      $id_image = get_field('arts_teacher');
                      $image = wp_get_attachment_image_src($id_image, 'boxes');
                  ?>
                  <img src="<?php echo $image[0]; ?>" alt="" class="box-image">
                  <h4>Arts Teacher</h4>
              </div>
          </div>
        </section>
</main>
    </div>
    <?php endwhile; ?>
<?php get_footer(); ?>
