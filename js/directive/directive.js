myApp.directive('ngLoading', function() {
    return {
        restrict: 'A',
        templateUrl: 'partials/_loading.php'
    };
});

myApp.directive('time', function(dateFilter, $interval) {
    return {
        restrict: 'E',
        template: '{{time}}',
        scope: {},
        link: function(scope, element, attrs) {
            scope.time = dateFilter(new Date(), 'hh:mm:ss');
            
            element.on('$destroy', function() {
                $interval.cancel(interval);
            });
            
            interval = $interval(function() {
                scope.time = dateFilter(new Date(), 'hh:mm:ss');
                console.log('time changed');
            }, 1000);
        }
    };
});