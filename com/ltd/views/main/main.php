<!DOCTYPE html>
<html lang="en" xmlns:ng="http://angularjs.org" ng-app="ltd">
    <head>
        <meta charset="utf-8">
        <title>Levi DeHaan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Levi DeHaan">

        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <script type="text/javascript" src="js/angular/angular-1.0.1.js"></script>
        <script type="text/javascript" src="js/angular/angular-sanitize-1.0.1.js"></script>

        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    </head>
    <body ng-controller="homeCtrl">

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#"><?php echo $this->headerTitle; ?></a>

                    <div class="nav-collapse">
                        <ul class="nav" id="navigation">
                            <?php
                            foreach ($this->menu as $title => $link) {
                                $title == "Home" ? $active = "active" : $active = "";
                                echo '<li class="'.$active.'" id="' . $title . '"><a href="' . $link . '">' . $title . '</a></li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>



        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span2" ng-controller="leftSide">
                    <div class="well">
                        <div class="row-fluid">
                            <img class="img-polaroid span12" src="{{ackbar}}"/>
                        </div>

                        <p>
                        <h4 style="color:lightgrey;"><?php echo $this->leftTitle; ?></h4>
                        <p><?php echo $this->leftBody; ?></p>
                        </p>
                    </div>
                </div>
                <div class="span10">
                    <div class="hero-unit" ng-controller="headerStuff" id="header">
                        <h1><?php echo $this->rightTitle; ?></h1>
                        <p><?php echo $this->rightBody; ?></p>            
                    </div>
                    <div id="content">
                        <div id="content" class="well content">
                            <div><?php echo $this->body; ?></div>
                        </div>
                        <ng:view>

                        </ng:view>
                    </div>
                </div>
            </div>
            <hr/>
            <footer>
                <div><?php echo $this->footer; ?></div>
            </footer>

            <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
            <script type="text/javascript" src="js/amplify.js"></script>
            <script type="text/javascript" src="js/controllers/githubConnect.js"></script>
            <script type="text/javascript" src="js/libs/markdown.js"></script>
            <script type="text/javascript" src="js/controllers/github.js"></script>
            <script type="text/javascript" src="js/controllers/mainController.js"></script>
            <script type="text/javascript" src="js/main.js"></script>
    </body>
</html>
