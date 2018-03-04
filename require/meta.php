<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 
    require_once ('functions.php');
    echo meta_description(@$type, @$text, @$textDescr);
    echo $meta_description;
    echo $metaDescriptionOg;
    echo title(@$text);
    echo '<meta property="og:title" content="'.ogtitle(@$text).'" />';
    echo '<meta property="og:url" content="http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'].'" />';
?>
<meta property="og:type" content="article" />
<!-- Bootstrap -->
<link href="../content/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom Styles -->
<link href="../content/css/custom.css" rel="stylesheet">
<link rel="shortcut icon" href="../content/img/favicon.png" type="image/x-icon">
<link rel="stylesheet" href="../content/css/weather-icons.css">
<link rel="stylesheet" href="../content/css/bvi.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->