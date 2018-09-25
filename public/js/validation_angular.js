var app = angular.module('generalinfor', []);

app.controller('generalinforCtrl', function($scope,$http,$templateCache) {
	$scope.name_of_the_saint = null;
    $scope.saint = null;
    $scope.key = null;
    $scope.value1 = null;
    $scope.message =  $scope.record_id =null;


  

    $scope.checkSaint = function() { 

	    $http({
	        method : "post",
	        url : "generalInfor/loadsaint",
	        params: {chaple: $scope.chaple}
	    }).then(function mySuccess(response) {
	    	$scope.novena = $scope.message = $scope.zone =null;
	        $scope.saint =response.data;
	    }, function myError(response) {
	        $scope.message = "Please contact support team	!";
	    });
    };
    $scope.generalinforsubmit = function(event){
    	event.preventDefault();
	    $http({
	        method : "post",
	        url : "generalInfor/create_part1",
	        params: {
	        	     chaple: $scope.chaple,
	        	     novena: $scope.novena,
	        	     zone: $scope.zone
	        	    }
	    }).then(function mySuccess(response) {
	        $scope.record_id = response.data.row_id;
	        $scope.message = "General Information Saved Successfully	!";
	    }, function myError(response) {
	        $scope.message = "Please contact support team	!";
	    });    	
    };

  	$scope.gotofamily = function(){
  		$(location).attr('href', window.location.origin + '/generalInfor/gotofamily?record_id='+$scope.record_id);
    }; 

});


angular.module('familyinfor', ['ngMaterial', 'ngMessages']).controller('familyinforCtrl', function($scope,$http) {
  this.fdob = this.deaddate = this.fmarriagedate = new Date();
  this.isOpen = false;
  $scope.familyinforsubmit = function($event){
  	event.preventDefault();
	$http({
	    method : "post",
	    url : "/familyinfor/create_part2",
	    params: {
	        	     fname: $scope.fname,
	        	     fdob: $scope.fdob,
	        	     deaddate: $scope.deaddate,
	        	     fbaptism: $scope.fbaptism,
	        	     frace: $scope.frace,
	        	     freligion: $scope.freligion,
	        	     fmarriagedate: $scope.fmarriagedate,
	        	     fmarriageplace:$scope.fmarriageplace,
	        	     femployment: $scope.femployment,
	        	     fresponsibilities: $scope.fresponsibilities,
	        	     fcompany: $scope.fcompany,
	        	     fremarks:$scope.fremarks,
	        	     record_id:$scope.record_id
	        	}
	}).then(function mySuccess(response) {
	    $scope.record_id = response.data.row_id;
	    $scope.people_id = response.data.people_id;
	    $scope.message = "Family Information Saved Successfully	!";
	}, function myError(response) {
	    $scope.message = "Please contact support team	!";
	});  	

  };
  $scope.gotofamily_2 = function(){
	$(location).attr('href', window.location.origin + '/familydetails/family_2?record_id='+$scope.record_id);  	
  };
  $scope.familyinfor_2submit = function($event){
  	event.preventDefault();
  	$http({
	    method : "post",
	    url : "/familyinfor/create_part3",
	    params: {
	        	     mname: $scope.mname,
	        	     mdob: $scope.mdob,
	        	     mdeaddate: $scope.mdeaddate,
	        	     mbaptism: $scope.mbaptism,
	        	     mrace: $scope.mrace,
	        	     mreligion: $scope.mreligion,
	        	     mmarriagedate: $scope.mmarriagedate,
	        	     mmarriageplace:$scope.mmarriageplace,
	        	     memployment: $scope.memployment,
	        	     mresponsibilities: $scope.mresponsibilities,
	        	     mcompany: $scope.mcompany,
	        	     mremarks:$scope.mremarks,
	        	     record_id:$scope.record_id
	        	}
	}).then(function mySuccess(response) {
	    $scope.record_id = response.data.row_id;
	    $scope.people_id = response.data.people_id;
	    $scope.message = "Family Information Saved Successfully	!";
	}, function myError(response) {
	    $scope.message = "Please contact support team	!";
	});
  };
});