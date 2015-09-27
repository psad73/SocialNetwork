<html>
    <head>
        <title><?php echo $title; ?></title>


        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="description" content="Images and Videos to kill some time - mostly funny cat pictures from the internet" />
        <meta name="keywords" content="gifs,webm,fun,lol,omg">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script src="https://fb.me/react-0.13.3.js"></script>
        
        <script src="/public/js/main.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />


        <link rel="stylesheet" href="/public/css/scss.php/dmdn.scss" />


        <?php
        if (Helper::isUser()) {
            echo "<script>"
            . "var user_id=" . $_SESSION['login']  . ";"
            . "var user_settings=" . $_SESSION['user_settings']
            . "</script>";
            $user_settings = json_decode($_SESSION['user_settings']);

            if (isset($user_settings->custom_css)) {
                echo "<style>" . $user_settings->custom_css . "</style>";
            }
        } else {
            echo "<script>var user_id=0;</script>";
            echo "<script>var user_settings=false;</script>";
        }
        ?>

        <?php
        foreach ($header as $script) {
            echo $script;
        }
        ?>
    </head>
    <body class="<?php echo $scope; ?>">
    <top-menu><nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">

                <a class="navbar-brand" href="/public/stream/">
                    Share some            <span class="glyphicon glyphicon-heart red"></span>
                </a>

                <form id="search" class="navbar-form navbar-left" method="post" role="search">
                    <div class="form-group">
                        <input  type="text" class="form-control" placeholder="#hash">
                        <ul class="searchresult">
                        </ul>
                    </div>
                    <button type="submit" class="btn btn-default hidden-xs">Search</button>
                </form>

            </div>
        </nav>
    </top-menu>
    <div class="space visible-xs"></div>


