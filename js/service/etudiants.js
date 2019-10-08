var Etudiants = myApp.factory('Etudiants', function ($http, $q, $timeout) {
    var factory = {
        etudiants: false,
        getEtudiants: function () {
            var deferred = $q.defer();
            if (factory.etudiants !== false) {
                deferred.resolve(factory.etudiants);
            } else {
                $http.get('data.php').success(function (data) {
                    factory.etudiants = data;
                    $timeout(function () {
                        deferred.resolve(factory.etudiants);
                    }, 1000);
                }).error(function (data) {
                    deferred.reject('Impossible de recuperer la liste des etudiants');
                });
            }

            return deferred.promise;
        },
        getEtudiant: function (id) {
            var deferred = $q.defer();
            var etudiants = factory.getEtudiants().then(function (etudiants) {
                angular.forEach(etudiants, function (value, key) {
                    if (etudiants[key].idetudiant == id) {
                        etudiant = etudiants[key];
                        $timeout(function () {
                            deferred.resolve(etudiant);
                        }, 1000);
                    }
                });

            }, function (msg) {
                deferred.reject(msg);
            });

            return deferred.promise;
        }
    };

    return factory;
});