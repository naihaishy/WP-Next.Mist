<?php get_header(); ?>

<main id="main" class="main">
  <div class="main-inner">
    <div id="content" class="content">
        <div id="posts" class="posts-expand">
            <article class="post post-type-normal " itemscope itemtype="http://schema.org/Article">
              <header class="post-header">

                  <h1 class="post-title" itemprop="name headline">
                     <?php the_title(); ?>
                 </h1>

                    <div class="post-meta">
                         <span class="post-time">
                            发表于
                            <time datetime="<?php date('c'); ?>" itemprop="datePublished"><?php the_time('Y-m-d'); ?></time>
                        </span>


                        <span class="post-category" >
                          &nbsp; | &nbsp; 分类于

                              <span itemprop="about" itemscope itemtype="https://schema.org/Thing">
                               <?php the_category(' , '); ?>
                              </span>
                       </span>

                      <span class="post-comments-count">
                        &nbsp; | &nbsp;
                        <a rel="nofollow" href="<?php the_permalink() ?>#comments"><?php comments_popup_link('暂无评论', ' 1 条评论', '% 条评论'); ?></a>
                    </span>

                </div>
             </header>

                <div class="post-body">
                  <?php if(have_posts()): ?>
                        <?php while(have_posts()):the_post(); ?>
                          <span itemprop="articleBody">
                              <?php the_content(); ?>
                          </span>
                       <?php endwhile; ?>
                 <?php endif; ?>
               </div>

            <footer class="post-footer">

                <div class="post-tags">
                    <?php the_tags(' ', true); ?>
                </div>

                <div class="post-nav">
                    <div class="post-nav-prev post-nav-item">
                        <?php previous_post_link(); ?>
                    </div>
                    <div class="post-nav-next post-nav-item">
                        <?php next_post_link(); ?>
                    </div>
                </div>


           </footer>
        </article>

     </div>
   </div>
  <?php comments_template(); ?>
</div>
<?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
