<?php
/*
Template Name: 归档 页面
*/
get_header();
?>




<main id="main" class="main">
  <div class="main-inner">
    <div id="content" class="content">
 <section id="posts" class="posts-collapse">
      <span class="archive-move-on"></span>

<?php
            $year=0; $mon=0; $i=0; $j=0;
            $the_query = new WP_Query( 'posts_per_page=-1&ignore_sticky_posts=1' );
            $count_posts = wp_count_posts();//获取日志总数 已经发布的文章 echo $published_posts = $count_posts->publish;
            $output = '
                <span class="archive-page-counter">好! 目前共计 '.$count_posts->publish.' 篇日志。 继续努力。
                </span>';
            while($the_query->have_posts()): $the_query->the_post();
             $year_tmp = get_the_time('Y');
             $mon_tmp = get_the_time('n');
             $y=$year; $m=$mon;
             if ($year != $year_tmp) {
                 $year = $year_tmp;
                 //输出年份
                 $output .= '
                 <div class="collection-title">
                    <h2 class="archive-year motion-element" id="archive-year-'.$year.'">'.$year.'</h2>
                  </div>'; //输出年份
                    }
                    //输出文章日期和标题
                $output .='
                 <article class="post post-type-normal" itemscope itemtype="http://schema.org/Article">
                     <header class="post-header">
                        <h1 class="post-title">
                              <a class="post-title-link" href="'.get_permalink() .'" itemprop="url">
                                  <span itemprop="name">'. get_the_title() .'</span>
                              </a>
                        </h1>
                        <div class="post-meta">
                        <time class="post-time" itemprop="dateCreated" datetime="'.date('c' ).'" content="'.date('yy-m-d').'">
                              '.date('m-d').'
                            </time>
                        </div>
                   </header>
                 </article>';
        endwhile;
        echo $output;
        ?>
</section>
</div>
</div>
<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>
