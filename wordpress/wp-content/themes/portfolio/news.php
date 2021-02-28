<div class="mainCont container in970">
    <h2 class="comTtl wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".3s"><span class="num">003</span>NEWS<small>type:News</small></h2>
    <div class="opusCont">
<?php if(have_posts()):
        while(have_posts()): the_post();
?>
                <div class="aboutCont wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".4s">
                    <article class="txtBox">
                        <h3 class="ttl"><?php the_title(); ?></h3>
                        <div class="read">
                            <time class="dateTime"><?php the_time('Y.m.d'); ?></time>
                            <div class="txt"><?php the_content(); ?></div>
                        </div>
                    </article>
                </div>
<?php   endwhile;
    endif;
?>
    </div><!--/#opusCont--> 
</div><!--/.mainCont-->