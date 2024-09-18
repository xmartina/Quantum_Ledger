<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?=$page_name?> | <?=$site_name?> | <?=$site_short_title?>">
    <meta name="author" content="<?=$site_name?>">
    <meta name="designer" href="https://twoone.tech/">
    <title><?=$page_name?> | <?=$site_name?> | <?=$site_short_title?></title>
    <!-- font icons -->
    <link rel="stylesheet" href="<?=$site_url?>assets/vendors/themify-icons/css/themify-icons.css">

    <!-- Bootstrap + Dorang main styles -->
    <link rel="stylesheet" href="<?=$site_url?>assets/css/dorang.css">
    <link rel="shortcut icon" href="<?=$site_url?>assets/imgs/qfsicon.png" type="image/x-icon">
    <style>
        .alert-danger
        {
            color: red;

        }
        .header-content img{
            width: auto !important;
        }
        .container .row .col-md-4.col-sm-6{
            margin-top: 2em;
            padding: 2em 1em;
        }
        .pricingTable .title{
            color: #F4F7FA;
        }
        .pricingTable{
            background-color: #fff;
            border-radius: 4px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
        }
    </style>


</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home" class="dark-theme">

<!-- page navbar -->
<nav class="page-navbar" data-spy="affix" data-offset-top="10">
    <ul class="nav-navbar container">
        <li class="nav-item"><a href="<?=$site_url?>" class="nav-link">Home</a></li>
        <li class="nav-item"><a href="<?=$site_url?>/pages/about" class="nav-link">About</a></li>
        <li class="nav-item">
            <a href="<?=$site_url?>" class="nav-link">
                <img src="<?=$site_url?>assets/upload/logo/favicon.png" alt="<?=$site_name?>" width="50" height="50">
            </a>
        </li>

        <li class="nav-item"><a href="<?=$register_url?>" class="nav-link">Join Us</a></li>
        <li class="nav-item search">
            <a href="<?=$site_url?>qfs.pdf" class="nav-link search-toggle"> PDF</a>

        </li>
    </ul>
</nav><!-- end of page navbar -->

<div class="theme-selector">
    <a href="javascript:void(0)" class="spinner">
        <i class="ti-paint-bucket"></i>
    </a>
    <div class="body">
        <a href="javascript:void(0)" class="light"></a>
        <a href="javascript:void(0)" class="dark"></a>
    </div>
</div>