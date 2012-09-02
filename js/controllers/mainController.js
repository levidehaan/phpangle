angular.element(document).ready(function() {
         angular.bootstrap(document);
});

var github = angular.module('github',['ngSanitize']);

var app = angular.module('ltd', [], function($routeProvider, $locationProvider) {
  var self = this;

  $routeProvider.when("/projects", {
    templateUrl:"main/projects"    
  });

  
});

app.run(function($rootScope) {
    $rootScope.$on('$routeChangeStart', function(scope, newRoute) {
        $("#navigation>li.active").removeClass("active");
        if(newRoute === undefined){
          $('#navigation #home').addClass("active");
        }else{
          switch(newRoute.$route.templateUrl) {
          case "project.html":
            $('#navigation #projects').addClass("active");
          break;
          default:
            $('#navigation #home').addClass("active");
          break;
        }
        }
    });

});



function homeCtrl($scope, $route, $routeParams, $location){

}

function leftSide($scope){
  var ackbars = [
    "http://dayofthejedi.com/wp-content/uploads/2011/03/171.jpg",
    "http://dayofthejedi.com/wp-content/uploads/2011/03/152.jpg",
    "http://farm4.static.flickr.com/3572/3637082894_e23313f6fb_o.jpg",
    "http://6.asset.soup.io/asset/0610/8774_242b_500.jpeg",
    "http://files.g4tv.com/ImageDb3/279875_S/steampunk-ackbar.jpg",
    "http://farm6.staticflickr.com/5126/5725607070_b80e61b4b3_z.jpg",
    "http://www.x929.ca/shows/newsboy/wp-content/uploads/admiral-ackbar-mouse-trap.jpg",
    "http://farm6.static.flickr.com/5291/5542027315_ba79daabfb.jpg",
    "http://farm5.staticflickr.com/4074/4751546688_5c76b0e308_z.jpg",
    "http://farm6.staticflickr.com/5250/5216539895_09f963f448_z.jpg",
    "http://t3.gstatic.com/images?q=tbn:ANd9GcRHsSVYpB9OaeLhPHVrQ4IXTBhHg0JGFOCXSraJuseqw-q4FbOc4w",
    "http://t1.gstatic.com/images?q=tbn:ANd9GcR3_XjA5bIop8khSBPuD7hWcJ7C5PAz2ZSfOl3oYJL6SriEAqmHog"
  ];

  $scope.ackbar = ackbars[Math.floor((Math.random()*ackbars.length))];
  console.log($scope.ackbar);
}


function headerStuff($scope){

}