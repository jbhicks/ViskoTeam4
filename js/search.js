angular.module('search', ['ngGrid', 'ui.bootstrap']);


var searchCtrl = function ($scope,$http) {
    $scope.abstractions = [
            {
                "option_id": 1,
                "option_title": "Contour Map",
                "option_value": 1
            },
            {
                "option_id": 2,
                "option_title": "Force Graph",
                "option_value": 2
            },
            {
                "option_id": 3,
                "option_title": "Point Map",
                "option_value": 3
            },
            {
                "option_id": 4,
                "option_title": "Species Distribution Map",
                "option_value": 4
            },
            {
                "option_id": 5,
                "option_title": "Sphereized Raster",
                "option_value": 5
            },
            {
                "option_id": 6,
                "option_title": "Time Series Plot",
                "option_value": 6
            },
            {
                "option_id": 7,
                "option_title": "Visko Data Transformation Force Graph",
                "option_value": 7
            },
            {
                "option_id": 8,
                "option_title": "Visko Instances Bar Char",
                "option_value": 8
            },
            {
                "option_id": 9,
                "option_title": "Visko Operator Paths Force Graph",
                "option_value": 9
            },
            {
                "option_id": 10,
                "option_title": "Barchart",
                "option_value": 10
            },
            {
                "option_id": 11,
                "option_title": "Isometric Surfaces Rendering",
                "option_value": 11
            },
            {
                "option_id": 12,
                "option_title": "Mesh Plot",
                "option_value": 12
            },
            {
                "option_id": 13,
                "option_title": "Molecular Structure",
                "option_value": 13
            },
            {
                "option_id": 14,
                "option_title": "Molecular Structure (Cartoon)",
                "option_value": 14
            },
            {
                "option_id": 15,
                "option_title": "Point Plot",
                "option_value": 15
            },
            {
                "option_id": 16,
                "option_title": "Raster Cube",
                "option_value": 16
            },
            {
                "option_id": 17,
                "option_title": "",
                "option_value": 17
            }
        ];
    $scope.myAbs = $scope.abstractions[17];

	$scope.myData = [{name: "Moroni", age: 50},
                     {name: "Tiancum", age: 43},
                     {name: "Jacob", age: 27},
                     {name: "Nephi", age: 29},
                     {name: "Enos", age: 34}];
    $scope.gridOptions = { 
    	data: 'myData',
    	jqueryUITheme: true
    };

};

var DatePickerCtrl = function ($scope) {
  $scope.today = function() {
    $scope.dt = new Date();
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
    $scope.minDate = ( $scope.minDate ) ? null : new Date();
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

  $scope.formats = ['dd-MMMM-yyyy', 'yyyy/MM/dd', 'shortDate'];
  $scope.format = $scope.formats[0];
};

