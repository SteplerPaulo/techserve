App.controller('DashboardController',function($scope,$rootScope,$http,$filter){
	
	$scope.initializeController = function(){
		$scope.currentPage = 1; 
		$scope.pageSize = 35;
		
		$scope.types = [{
				'name':'Vacation'
			},
			{
				'name':'Sick'
			},
		];
		console.log($scope.types);
		
		$scope.years = [{
				'id':'2018',
				'name':'2018'
			},
			{
				'id':'2017',
				'name':'2017'
			},
			{
				'id':'2016',
				'name':'2016'
			},
		];
		
		$scope.data = [{
			'date':'02/8/2018 - 02/8/2018',
			'description':'Vacation',
			'comment':{},
			'submitted':'02/04/2018',
			'status':'Denied',
			'approver':'Jeniffer Cadwell 02/09/2018',
			'responsed_date':'02/09/2018',
			
			
		},
		{
			'date':'02/10/2018 - 02/10/2018',
			'description':'Vacation',
			'comment':{},
			'submitted':'02/09/2018',
			'status':'Denied',
			'approver':'Jeniffer Cadwell 02/09/2018',
			'responsed_date':'02/09/2018',
			
		},
		{
			'date':'12/10/2017 - 12/10/2017',
			'description':'Vacation',
			'comment':{},
			'submitted':'12/09/2017',
			'status':'Approved',
			'approver':'Jeniffer Cadwell 02/09/2018',
			'responsed_date':'12/09/2017',
			
		},
		{
			'date':'08/10/2017 - 08/10/2017',
			'description':'Sick',
			'comment':{},
			'submitted':'12/09/2017',
			'status':'Approved',
			'approver':'Jeniffer Cadwell 02/09/2018',
			'responsed_date':'08/10/2017',
			
		}]
		
		console.log($scope.years);
			
		if($scope.year ==  undefined || $scope.year ==  'undefined'){
				$scope.year = $scope.years[0].name;
		}
		
		if($scope.type ==  undefined || $scope.type ==  'undefined'){
				$scope.type = $scope.types[0].name;
		}
			
		
	}
});