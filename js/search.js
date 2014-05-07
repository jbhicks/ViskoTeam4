angular.module('search', ['ngGrid', 'ui.bootstrap']);

var DatePickerCtrl = function ($scope, $http, $filter) {
    $scope.today = function() {
        $scope.dt = new Date();
        $scope.minDate = null;
    };
    $scope.today();

    $scope.showWeeks = true;
    $scope.toggleWeeks = function () {
        $scope.showWeeks = ! $scope.showWeeks;
    };

    $scope.clear = function () {
        $scope.dt = null;
    };

    // Disable weekend selection
    $scope.disabled = function(date, mode) {
        return ( mode === 'day' && ( date.getDay() === 0 || date.getDay() === 6 ) );
    };

    $scope.toggleMin = function() {
        $scope.minDate = null;
    };
    $scope.toggleMin();

    $scope.open = function($event) {
    $event.preventDefault();
    $event.stopPropagation();

    $scope.opened = true;
    };

    $scope.dateOptions = {
    'year-format': "'yy'",
    'starting-day': 1
    };

    $scope.formats = ['dd-MMMM-yyyy', 'yyyy-MM-dd', 'shortDate'];
    $scope.format = $scope.formats[0];


    //Search functionality
    $scope.myData = null;
    $scope.gridOptions = {
        data: 'myData',
        multiSelect: false,
        enableColumnResize: true,
        columnDefs: [{field: 'id', displayName: 'ID', width: "3%"},
            {field: 'abstraction', displayName: 'Abstraction Type', width: "8%"},
            {field: 'viewerURI', displayName: 'Viewer', width: "12%"},
            {field: 'artifactURL', displayName: 'Input', width: "*"},
            {field: 'outputFormat', displayName: 'Format', width: "4%"},
            {field: 'toolkit', displayName: 'Toolkit', width: "4%"},
            {field: 'resultURL', displayName: 'Result', width: "*"},
            {field: 'date', displayName: 'Date', width: "6%"}]
    };

    $scope.search = function() {
        $scope.url = 'searchConnector.php';
        $scope.startEndDates = new Object();
        $scope.startEndDates.start = $filter('date')($scope.dt1, $scope.formats[1]);
        $scope.startEndDates.end = $filter('date')($scope.dt2, $scope.formats[1]);
        if (($scope.startEndDates.start == undefined) || ($scope.startEndDates.end == undefined)){
            alert("Please select start and end dates.");
            return;
        }
        $http({
            method : 'POST',
            url : 'searchConnector.php',
            data  : $scope.startEndDates,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).success(function(data) {
                $scope.result = angular.fromJson(data);
                $scope.myData = $scope.result;
                console.log(data);
            });
    };
    
};

