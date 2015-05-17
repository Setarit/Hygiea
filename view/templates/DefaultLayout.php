<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" href="web/favico.png">
        
        <link rel="stylesheet" href="web/bootstrap/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="web/bootstrap/css/local.css" type="text/css"/>

        <script type="text/javascript" src="web/js/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="web/bootstrap/js/bootstrap.min.js"></script>
        <title>Hygiea</title>
    </head>
    <body>
        <div id="wrapper">
            <!-- navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">            
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><?php print($this->_pageName); ?></a>
                </div>
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <?php $this->_sideNavigation; ?>
                    </ul>
                    <ul class="nav navbar-nav navbar-right navbar-user">
                        <li class="dropdown user-dropdown">
                            <?php $this->_userNavigation; ?>
                        </li>
                    </ul>
                </div>
            </nav>
            
            <!-- page content -->
            <div id="page-wrapper">
                <?php $this->_pageContent; ?>
            </div>            
        </div>
    </body>
</html>