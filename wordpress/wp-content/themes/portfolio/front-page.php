<?php get_header(); ?>
    <div class="main">

    <!--mainv-->
    <section id="mainv" class="section sectionImg">
        <h2 id="typing">PORTFOLIO</h2>
        <div class="arrowWrap">
            <div class="arrowInner">
                <p class="text">SCROLL DOWN</p>
                <div class="arrow"></div>
            </div>
        </div> 
    </section>
    <!--/#mainv-->
    
    <!--intro-->
    <section id="intro" class="section">
        <?php get_template_part('intro'); ?>
    </section>
    <!--/#intro-->

    <!--opus-->
    <section id="opus" class="section">
        <?php get_template_part('opus'); ?>
    </section>
    <!--/#opus-->

    <!--news-->
    <section id="news" class="section">
        <?php get_template_part('archive'); ?>
    </section>
    <!--/#news-->

    <!--pageTop-->
    <p id="pageTop"><a href="#body">PAGE<br>TOP</a></p>

    </div><!--/#main-->

<?php get_footer(); ?>