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
            
            .when('/schools', {
				templateUrl : 'pages/schools.html',
				controller  : 'schoolsCtrl as schools'
            })
            
            .when('/tracks', {
				templateUrl : 'pages/tracks.html',
				controller  : 'tracksCtrl as tracks'
			});
	});