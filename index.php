<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>AngularJS - PHP/MySQL</title>
        <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body ng-app="myApp">

        <div class="container" style="margin-top: 50px;">
            <div class="panel panel-info">
                <div class="panel-heading">AngularJS - PHP/MySQL <time class="pull-right"></time></div>
                <div class="panel-body">                  

                    <div ng-view></div>

                </div>                
            </div>            
        </div>

        <script type="text/javascript" src="bower_components/jquery/dist/jquery.min.js"></script>
        <script type="text/javascript" src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="bower_components/angular/angular.min.js"></script>
        <script type="text/javascript" src="bower_components/angular-animate/angular-animate.min.js"></script>
        <script type="text/javascript" src="bower_components/angular-route/angular-route.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/service/etudiants.js"></script>
        <script type="text/javascript" src="js/controller/etudiants.js"></script>
        <script type="text/javascript" src="js/controller/etudiant.js"></script>
        <script type="text/javascript" src="js/route/route.js"></script>
        <script type="text/javascript" src="js/directive/directive.js"></script>
    </body>
</html>
