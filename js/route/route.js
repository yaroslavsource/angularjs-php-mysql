myApp.config(function ($routeProvider) {
    $routeProvider
            .when('/', {templateUrl: 'partials/home.php', controller: 'EtudiantsCtrl'})
            .when('/etudiant/:idetudiant', {templateUrl: 'partials/etudiant.php', controller: 'EtudiantCtrl'})
            .otherwise({redirectTo: '/'});
});