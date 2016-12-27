<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>

    <!-- Bootstrap -->
    <?php wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' ); ?>
    <?php wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' ); ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>
<body>

<!-- HOLDER -->
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 demo-container">
                <h1 class="demo-title">Wordpress Boilerplate</h1>
                <p>This is a basic wordpress boilerplate to start your theme development.</p>
            </div>
        </div>
    </div>
</div>
<!-- END OF HOLDER -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_directory' ); ?>/js/base.js"></script>
</body>
</html>
