var app = angular.module('swsServices', []);

app.controller('myCtrl', function ($scope, $http) {

    $scope.sendData = function () {
        $scope.data = {
            name : $scope.name,
            phone : $scope.phone,
            email : $scope.email,
            service : $scope.service
        };
        // console.log($scope.data);
        $http({
            method: 'POST',
            url: 'requestservice.php',
            data : $scope.data
        }).then(function successCallback(response) {
            $('#myModal').modal('hide');
        }, function errorCallback(response) {
            // called asynchronously if an error occurs
            // or server returns response with an error status.
        });
    }
}); 