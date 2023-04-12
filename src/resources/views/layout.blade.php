<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="icon" href="images/logo.webp" type="image/gif" sizes="16x16">
    <title>S T A R | E V E N T S - Allestimenti</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Archi is best selling interior design website template with responsive stunning design">
    <meta name="keywords" content="architecture,building,business,bootstrap,creative,exterior design,furniture design,gallery,garden design,house,interior design,landscape design,multipurpose,onepage,portfolio,studio">
    <meta name="author" content="">

    <!-- CSS Files
    ================================================== -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap" />
    <link href="css/bootstrap-grid.min.css" rel="stylesheet" type="text/css" id="bootstrap-grid" />
    <link href="css/bootstrap-reboot.min.css" rel="stylesheet" type="text/css" id="bootstrap-reboot" />
    <link href="css/plugins.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/color.css" rel="stylesheet" type="text/css">

    <!-- color scheme -->
	<link rel="stylesheet" href="css/colors/yellow-2.css" type="text/css" id="colors">
    <link rel="stylesheet" href="css/color.css" type="text/css">

    <!-- load fonts -->
    <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="fonts/elegant_font/HTML_CSS/style.css" type="text/css">
    <link rel="stylesheet" href="fonts/et-line-font/style.css" type="text/css">

	<!-- custom CSS -->
	<link rel="stylesheet" href="css/custom-artist.css" type="text/css">

    <!-- my style -->
    <link href="css/mystyle.css" rel="stylesheet" type="text/css">
</head>

<body id="homepage">

    <div id="wrapper">

        @include('navbar')

        @include($page)

        @include('footer')
    </div>
</body>
</html>