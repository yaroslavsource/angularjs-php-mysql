var EtudiantsCtrl = myApp.controller('EtudiantsCtrl', function ($scope, Etudiants) {
    $scope.loading = true;
    $scope.etudiants = Etudiants.getEtudiants().then(function (etudiants) {
        $scope.loading = false;
        $scope.etudiants = etudiants;
    }, function (msg) {
        alert(msg);
    });
});