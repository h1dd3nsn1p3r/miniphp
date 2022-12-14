<?php 

    $login_url = URL . 'login/index'; // Login page url.

    /**
    *
    * Don't let user to see this page if user is logged in.
    */
    
    AuthHelper::isLoggedIn() ? header('location: ' . URL . 'home/index') : '';

?>
<main class="main">
    <div class="uk-container">
        <div class="login-page">
            <h1 class="uk-h1">
                Unauthorized Access. 403 Forbidden!!!
            </h1>
            <p class="uk-text-lead">
                You are not authorized to access this page. Please <a href="<?php echo $login_url; ?>">login here</a> to continue.
            </p>
        </div><!-- // login-page -->
    </div><!-- // uk-container -->
</main><!-- // main -->