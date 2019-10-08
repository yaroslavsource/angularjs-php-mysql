var EtudiantCtrl = myApp.controller('EtudiantCtrl', function ($scope, $routeParams, Etudiants) {
    $scope.loading = true;
    var etudiant = Etudiants.getEtudiant($routeParams.idetudiant).then(function (etudiant) {
        $scope.loading = false;
        $scope.name = etudiant.nometudiant;
        $scope.prenom = etudiant.prenometudiant;
        $scope.email = etudiant.emailetudiant;
        console.log(etudiant.nometudiant);
    }, function (msg) {
        alert(msg);
    });
});