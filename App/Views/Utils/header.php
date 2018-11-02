<?php 
$firstIndex = strripos($_SERVER["REQUEST_URI"], "/");
$string=$_SERVER["REQUEST_URI"];
$query=substr($string,$firstIndex+1,strlen($string));
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kizalab Government Web Portal Access all Government informations and services from your handy Device.">
    <meta name="author" content="Kizalab">
    <title>
        <?php 
        if($query=="news"){
            echo "Latest News and Updates from Government";
        }else{
            echo "Government of Rwanda | Web Protal and Information System.";
        }
        ?>
    </title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/logo.png">
    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>