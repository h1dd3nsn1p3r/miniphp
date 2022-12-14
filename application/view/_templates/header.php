 <?php
        
    $login_url = URL . 'login/index';
    $logout_url = URL . 'login/logout';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Toyota | Vehicle Management System.</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.16/dist/css/uikit.min.css" />
    <link href="<?php echo URL; ?>css/style.css" rel="stylesheet">
</head>

<body>
    <header class="mast-header">
        <div class="uk-container">
            <div class="uk-flex align-item-center uk-flex-between">
                <div class="logo">
                    <a class="logo-link" href="<?php echo URL; ?>">TOYOTA</a>
                    <span class="site-description">Vehicle management system</span>
                </div><!-- // logo -->
                <nav class="navigation">
                    <a href="<?php echo URL; ?>">Home</a>
                    <a href="<?php echo URL; ?>customers">Customers</a>
                    <a href="<?php echo URL; ?>branches">Branch</a>
                    <a href="<?php echo URL; ?>vehicles">Vehicles</a>
                    <a 
                        class="uk-button uk-button-primary" 
                        href="<?php AuthHelper::isLoggedIn() == true ? print $logout_url : print $login_url; ?>">
                        <?php 
                            AuthHelper::isLoggedIn() == true ? print 'Logout' : print 'Login';
                        ?>
                    </a>
                </nav><!-- // navigation -->
            </div>
        </div><!-- /container -->
    </header>