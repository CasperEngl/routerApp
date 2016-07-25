var routerApp = angular.module('routerApp', ['ui.router', 'ngAnimate']);

routerApp.run(['$rootScope', '$state', '$stateParams',
	function ($rootScope,   $state,   $stateParams) {
		// It's very handy to add references to $state and $stateParams to the $rootScope
		// so that you can access them from any scope within your applications.For example,
		// <li ng-class="{ active: $state.includes('contacts.list') }"> will set the <li>
		// to active whenever 'contacts.list' or one of its decendents is active.
		$rootScope.$state = $state;
		$rootScope.$stateParams = $stateParams;
	}
])

.controller('routerCtrl', function($scope) {
	$scope.jumboImg = "";
	$scope.jumboHeading = "";
	$scope.jumboText = "";
	$scope.h4 = "<h4></h4>";
})

.config(function($stateProvider, $urlRouterProvider, $locationProvider) {

	$locationProvider.html5Mode(true);

	$urlRouterProvider.otherwise('/');
	$stateProvider

	.state('home', {
		url: '/',
		templateUrl: 'partials/partial_home.html',
		/*
		controller: function($scope) {
			$scope.jumboImg = "https://placekitten.com/1020/460",
			$scope.jumboHeading = "The " + {{$state.current.data.pageTitle}} + " Page",
			$scope.jumboText = "This page is the <span class='text-danger'>front page</span> of the routerApp.",
		},
		*/
		data: {
			 pageTitle: 'Home'
		 }
	})

	.state('about', {
		url: '/about/',
		templateUrl: 'partials/partial_about.html',
		data: {
			 pageTitle: 'About'
		 }
	})

	.state('contact', {
		url: '/contact/',
		templateUrl: 'partials/partial_contact.html',
		data: {
			pageTitle: 'Contact'
		}
	})

});
