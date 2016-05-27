<?php get_header(); ?>



<main  id="main" class="main">
        <div class="main-inner">
          <div id="content" class="content">
              <section id="posts" class="posts-expand">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                  <article class="post post-type-normal " itemscope itemtype="http://schema.org/Article">
                      <header class="post-header">
                          <h1 class="post-title" itemprop="name headline">
                                <a class="post-title-link" href="<?php the_permalink() ?>" itemprop="url">
                                  <?php the_title(); ?>
                                </a>
                          </h1>
                        <div class="post-meta">
                          <span class="post-time">
                            发表于
                            <time itemprop="dateCreated" datetime="<?php date('c'); ?>" content="<?php date('yy-m-d'); ?>">
                              <?php the_time('Y-m-d'); ?>
                            </time>
                          </span>
                          <span class="post-category" >
                              &nbsp; | &nbsp; 分类于
                                <span itemprop="about" itemscope itemtype="https://schema.org/Thing">
                                  <?php the_category(' , '); ?>
                                </span>
                         </span>
                         <span class="post-comments-count">
                                  &nbsp; | &nbsp;

                                <a rel="nofollow" href="<?php the_permalink() ?>#comments"><?php comments_popup_link('暂无评论', '1 条评论', '%d 条评论'); ?></a>

                         </span>
                        </div>
                      </header>

                      <div class="post-body">
                          <?php the_excerpt('阅读全文 »'); ?>
                      </div>

                      <footer class="post-footer">

                          <div class="post-eof"></div>

                      </footer>
                  </article>
                  <?php endwhile; endif;?>
                </section>



      </div>
  </div>

</main>
<?php get_footer(); ?>
