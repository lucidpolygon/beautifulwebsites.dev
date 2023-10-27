    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/tailwind.css">
    
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $desc; ?>">
    
    <link rel="canonical" href="<?php echo $url; ?>">


    <!-- OG Tags -->
    <meta property="og:title" content="<?php echo $title; ?>">
    <meta property="og:description" content="<?php echo $desc; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $url; ?>">
    <meta property="og:image" content="<?php echo !empty($img) ? $img : ''; ?>">
    
    <!-- Twitter Tags -->
    <meta name="twitter:title" content="<?php echo $title; ?>">
    <meta name="twitter:description" content="<?php echo $desc; ?>">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?php echo !empty($img) ? $img : ''; ?>">

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-2JH375TJ5S"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
        
    <?php 
    require_once(dirname(dirname(__DIR__))."/config.php");
    if( ENV == "ENV" ){ echo( "gtag('config', '".GA4_TAG."')" ); }
    ?>

    </script>
