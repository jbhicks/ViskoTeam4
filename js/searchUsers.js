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
    $scope.associations; 

    //Search functionality
    $scope.myData = null;
    $scope.gridOptions = {
        data: 'tableData',
        multiSelect: false,
        enableColumnResize: true,
        columnDefs: [
            {field: 'date_joined', displayName: 'Date Joined', width: "10%"},
            {field: 'status', displayName: 'Account Status', width: "20%"},
            {field: 'fname', displayName: 'First Name', width: "20%"},
            {field: 'lname', displayName: 'Last Name', width: "20%"},
            {field: 'org', displayName: 'Affiliation', width: "20%"},
            {field: 'email', displayName: '', width: "0%"},
            {field: '', cellTemplate: '<center><button ng-click="toggle(row)">Toggle</button></center>', width: "10%"}]
    };
    $scope.toggle = function(row) { 
       // console.log(row.entity.email); 


        $scope.info = new Object(); 
        $scope.info.email = row.entity.email; 
        $scope.info.status = row.entity.status; 

        if(row.entity.status == "Active")
            row.entity.status = "Suspended"; 
        else
            row.entity.status = "Active"; 

        $http({
            method : 'POST',
            url : 'toggleUserConnector.php',
            data  : $scope.info,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).success(function(data) {});
    }; 
    $scope.search = function() {
        $scope.url = 'searchUserConnector.php';
        $scope.startEndDates = new Object();

        if($scope.dt1 == undefined){
            $scope.startEndDates.start = null; 
        }
        if($scope.dt2 == undefined){
            $scope.startEndDates.end = null; 
        }
        else {
            $scope.startEndDates.start = $filter('date')($scope.dt1, $scope.formats[1]);
            $scope.startEndDates.end = $filter('date')($scope.dt2, $scope.formats[1]);
        }

        $scope.startEndDates.lName = $scope.lName; 
        $scope.startEndDates.fName = $scope.fName; 
        $scope.startEndDates.email = $scope.email; 
        $scope.startEndDates.myStatus = $scope.myStatus; 
        $scope.startEndDates.myAss = $scope.myAss; 

        $http({
            method : 'POST',
            url : 'searchUserConnector.php',
            data  : $scope.startEndDates,
            headers : { 'Content-Type': 'application/x-www-form-urlencoded' }
        }).success(function(data) {
                $scope.tableData =  angular.fromJson(data); 
            });
    };
    $scope.myInterval = 5000;
    var slides = $scope.slides = [];
    $scope.addSlide = function(link) {
        slides.push({
            image: link
        });
    };

    $scope.arr = []; 
    $scope.myAss = ""; 

    $scope.accountStatus = ["Active", "Suspended"]; 
    $scope.myStatus = ""; 

    $scope.lName = ""; 
    $scope.fName = ""; 
    $scope.email = "";

    var init = function(){
        $scope.url = 'assPop.php'; 
        $http({
            method : 'POST', 
            url: 'assPop.php', 
            headers : { 'Content-Type': 'application/x-www-form-urlencoded'}
        }).success(function(data){
            $scope.result = angular.fromJson(data);
            $scope.myData = $scope.result;
            for(var i = 0; i < $scope.myData.length; i++){
                $scope.arr[i] = $scope.myData[i]; 
                //console.log($scope.myData[i]); //For testing to be deleted
            }

        });
    }; 
    init(); 
};