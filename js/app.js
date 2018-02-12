var wbcce = angular.module('wbcce', ['ngRoute']);

	// configure our routes
	wbcce.config(function($routeProvider) {
		$routeProvider

			// route for the home page
			.when('/', {
				templateUrl : 'pages/home.html',
				controller  : 'mainCtrl as main'
			})

			// route for the about page
			.when('/about', {
				templateUrl : 'pages/about.html',
				controller  : 'aboutCtrl as about'
			})

			// route for the contact page
			.when('/contact', {
				templateUrl : 'pages/contact.html',
				controller  : 'contactCtrl as contact'
            })
            
            .when('/universities&colleges', {
				templateUrl : 'pages/schools.html',
				controller  : 'schoolsCtrl as schools'
            })
            
            .when('/tracks&strands', {
				templateUrl : 'pages/tracks&strands.html',
				controller  : 'tracksCtrl as tracks'
			})

			.when('/tracks&strands/stem', {
				templateUrl : 'pages/tracks&strands/stem.html',
				controller  : 'stemCtrl as stem'
			})
			.when('/tracks&strands/humss', {
				templateUrl : 'pages/tracks&strands/humss.html',
				controller  : 'humssCtrl as humss'
			})
			.when('/tracks&strands/gas', {
				templateUrl : 'pages/tracks&strands/gas.html',
				controller  : 'gasCtrl as gas'
			})
			.when('/tracks&strands/abm', {
				templateUrl : 'pages/tracks&strands/abm.html',
				controller  : 'abmCtrl as abm'
            });
	});