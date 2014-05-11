angular.module('changePassword', ['ngGrid', 'ui.bootstrap']);

var FormCtrl = function ($scope, $http, $filter) {
	$scope.changePassword = function() {
		if ($scope.password == undefined){
			alert("Please fill out all fields.");
			return;
		}
		else if (($scope.password.currentPassword == null) || ($scope.password.newPassword == null) || ($scope.password.confirmNewPassword == null) ){
			alert("All password fields must not be blank.");
			return;
		}
		else if ($scope.password.newPassword != $scope.password.confirmNewPassword) {
			alert("New passwords must match.");
			return;
		}
		else {
			$scope.checkPassword();

		}
	};
	
	$scope.checkPassword = function() {
		$http({
            method : 'POST',
            url : 'checkPassword.php',
            data  : $scope.password,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).success(function(data) {
                $scope.result = angular.fromJson(data);
                console.log($scope.result);
            });
	};
};