<!DOCTYPE html>
<html class=" js no-touch csstransforms3d">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title><?php single_post_title(''); ?> - <?php echo get_bloginfo( $show, 'display' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="shortcut icon" href="http://prueba.tab.network/wp-content/uploads/2017/10/favicon.ico">
		<!-- <link rel="shortcut icon" href="https://s3.amazonaws.com/thinkific/site_themes/favicon_000/009/098/1461875879.original.png"> -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Lato:300,700" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/style.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/single.css">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
		               

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>


        <link rel="canonical" href="<?php echo get_permalink(); ?>">

        <meta property="og:site_name" content="<?php single_post_title(''); ?> - <?php echo get_bloginfo( $show, 'display' ); ?>">
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php single_post_title(''); ?> - <?php the_author(); ?>">
        <meta property="og:description" content="<?php $my_excerpt = get_the_excerpt();echo $my_excerpt;?>">
        <meta property="og:url" content="<?php echo get_permalink(); ?>">
        <meta property="og:image" content="<?php the_post_thumbnail_url(); ?>">
        <meta property="article:author" content="https://www.facebook.com/tabuniversity" />
        <meta property="fb:profile_id" content="mikenieva" />
        <meta property="fb:app_id" content="1157607614323376" />
        <meta property="fb:pages" content="2018940581663402" />
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1157607614323376',
      xfbml      : true,
      version    : 'v2.8'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>      
    
<script>
  window.intercomSettings = {
    app_id: "shb3v5rz"
  };
</script>
<script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/shb3v5rz';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-77533900-2', 'auto');
  ga('send', 'pageview');

</script>
</head>

<style>
	button{
		background: transparent !important;
		padding-top: 0px;
		float: right;
	}
</style>

    <body class="post-template" style="margin-bottom: -30px;">
        <?php get_header("home") ?>

        <nav class="pushy pushy-left">
            
                  
		</nav>

        <div class="site-overlay"></div>

        <main class="animated" id="main" role="main">
            

<?php 
$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
?>


    <div class="image-overlay"></div>
    <div class="post-image" style="background-image:url(<?php the_post_thumbnail_url( 'full' ); ?> )">
    </div>

    <div class="wrapper">
        <article class="post featured">
            


               

                <time class="post-date" ><?php the_date('d' . '/' . 'n'. '/' . 'Y', ' '); ?></time>

                <h1 class="post-title"><?php the_title(); ?></h1>  

                <div class="post-meta" style=" text-align:center;">
                    <span class="author"><a target="_blank" href="<?php echo the_author_meta('user_url')?>" style="font-weight: 500; font-size: 18px; color: #000000;"><?php the_author(); ?></a></span>

                </div>
 
        <!-- Facebook Share Button -->
		<div class="row">
        <div class="col-xs-12 col-sm-6 socialbutton facebookbutton" style="margin-bottom: 50px;">
          <div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button_count" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" style="text-align: center;">Share</a></div>
        </div>
		<div class="col-xs-12 col-sm-6 post-tags">
                    <?php
                        $post_tags = get_the_tags();
                        if ( $post_tags ) {
                            foreach( $post_tags as $tag ) {
                                echo '<a href="#"><i class="fa fa-tag" aria-hidden="true"></i>&nbsp;&nbsp;&nbsp;&nbsp;' . $tag->name . '</a>';
                                }
                            }
                    ?>   
                </div>
       </div> 



                <section class="post-content-output">
                    <?php the_content(); ?>
                </section>

    <section class="author-meta clearfix">
                        <div class="author-image-wrapper">
                            <div class="author-image" style="background-image: url(<?php echo get_avatar_url( get_the_author_meta('user_email'), $size = '200'); ?>)"></div>
                        </div>

                        <div class="author-bio">
                            <h3 style="color: #000;"><?php the_author(); ?></h3>
                                <p class="textcenter" style="color: #9B9B9B"><?php echo nl2br(get_the_author_meta('description')); ?></p>
                            <p class="textcenter"><a href="<?php echo the_author_meta('user_url')?>" target="_blank" style="color: #9B9B9B;"><?php echo the_author_meta('user_url')?></a></p>
                        </div>
                </section>

            <div class="fb-comments" data-href="<?php echo get_permalink(); ?>" data-numposts="15"></div>
            <br>
            <br>
            </div>
            </div>

            <?php endwhile ?>
            <?php else : ?>
            <?php endif; ?>

        <?php get_footer() ?>            

        <script src="<?php bloginfo('template_directory'); ?>/js/jquery.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/theme-options.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/main.min.js"></script>
  
    </body>
</html>