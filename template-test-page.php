<?php
/**
 * Template Name: Test Page
 */
?>


<!--       <div class="left-menu hidden-sm hidden-md hidden-xs">
        <ul class="dm-social">
            <li class="facebookbg"><a href="#" class="fa fa-facebook" data-toggle="tooltip" data-placement="right" title="Facebook">Facebook</a></li>
            <li class="googlebg"><a href="#" class="fa fa-google-plus" data-toggle="tooltip" data-placement="right" title="Google+">Google+</a></li>
            <li class="twitterbg"><a href="#" class="fa fa-twitter" data-toggle="tooltip" data-placement="right" title="Twitter">Twitter</a></li>
            <li class="pinterestbg"><a href="#" class="fa fa-pinterest" data-toggle="tooltip" data-placement="right" title="Pinterest">Pinterest</a></li>
            <li class="linkedinbg"><a href="#" class="fa fa-linkedin" data-toggle="tooltip" data-placement="right" title="Linkedin">Linkedin</a></li>
            <li class="rssbg"><a href="#" class="fa fa-rss" data-toggle="tooltip" data-placement="right" title="RSS">RSS</a></li>
            <li class="share"><a href="#" class="fa fa-share-alt" data-toggle="tooltip" data-placement="right" title="91k Share"></a></li>
        </ul>
      </div> -->

    <!-- START SITE -->

    


        
        <section class="section bgg">
            <div class="container">    
                <div class="title-area">
                    <h2>Category One Sidebar <small class="hidden-xs">Contrary to popular belief, Lorem Ipsum is not simply random text..</small></h2>
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Category One Sidebar</li>
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
            </div><!-- end container -->
        </section>

        <div class="sitecontainer single-wrapper bga">
                <div class="col-md-12 col-sm-12 col-xs-12 m22">
                    <?php
        $args = array(
        'post_type' => 'asbestos_post_type',
        'posts_per_page' => 10
        );
        $new_query = new WP_Query($args); 
      ?>
        <?php while ($new_query->have_posts()) : $new_query->the_post(); ?>
                <article <?php post_class('col-sm-61'); ?>>
                  <header>
                  <div class="theme">
                      <a href="#" class="theme-post">Inspirations</a>
                  </div>
                    <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php if ( has_post_thumbnail()) { ?>
                    <?php get_template_part('templates/entry-meta'); ?>
                      <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('next-thumb', array( 'class' =>'img-responsive' )); ?>
                      </a>
                    <?php } ?>
                  </header>
                  <div class="entry-summary">
                    <?php the_excerpt(); ?>
                  </div>
                  <div class="button">
                    <a  href="<?php the_permalink(); ?>" class="read-more btn btn-primary">Read More</a>
                  </div>
                  

                </article>
                <hr />

        <?php endwhile; ?>
        <?php wp_reset_postdata(); // reset the query ?>

        <div class="pagination-wrapper">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div><!-- end col -->
        </div>
