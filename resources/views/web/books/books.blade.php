
@include ('web/include/header')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div ng-app='angularDemo' ng-cloak>
                <div class="mainPage" ng-controller="angularController as ctrl">
                  <div class="sidebar" layout-padding>
                    <div class="parent-container">
                      <div class="row">
                        <div class="col-md-12">
                        <h3>Filter Option</h3>
                        </div>
                      </div>
                        <ul class="faq">
                            <div ng-repeat="filter in Filters" ng-style="myObj">
                          <li>
                            <div class="sort1">
                                <h3 class="sort plus-minus-toggle1 collapsed">
                                    <a href="#" class="pl-3"><%filter.name%>  </a>
                                </h3>
                                <h6 class="sort plus-minus-toggle collapsed" ng-click="myVar = !myVar">
                                    <a href="#" class="pl-4"><%filter.name%>  </a>
                                </h6>
                                <div class="answer" ng-show="myVar" >
                                    <ul class="sortoptions pl-3">
                                        <li ng-repeat="option in filter.options">
                                          <input type="checkbox" ng-model="option.IsIncluded" ng-checked="option.IsIncluded"> <%option.value%>
                                          <span>(<%option.count%>)</span>
                                        </li>
                                      </ul>
                                </div>
                            </div>

                          </li>
                        </div>



                        </ul>
                      </div>

                    <button ng-click="ctrl.toggleAll($event, false)" class="btn btn-primary">Uncheck All</button>
                    <br/>
                    <button ng-click="ctrl.toggleAll($event, true)" class="btn btn-primary mt-2">Check All</button>
                 </div>
                  <div class="window_panel">

                    <div ng-repeat="product in warehouse | dynamicFilter:Filters:this" class="product">
                        <img src="<%product.image%>" alt="" width="150px"><br>
                        <%product.name%>
                        <p>
                            @for ($i=0;$i < 5; $i++)
                                <i class="fa fa-star <% {{$i}} < product.rating ? 'text-warning' : '' %>"></i>
                            @endfor
                        </p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>





@include ('web/include/footer2')

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lodash.js/2.4.1/lodash.js"></script>
<style>
   .mainPage{
  display: flex;
}
.sidebar{
  width:23%
}
.window_panel{
  width:75%;
  display:flex;
  flex-flow:row wrap;
  justify-content:center;
  height:100%;
}
.product{
  padding:13px;
  margin:5px;
  border:1px solid #f7f7f7;
  border-radius:5px;
}
li{
  list-style:none;
}
.sort a{
    text-decoration: none;
}
li span{
    display: inline;
    font-size: 12px;
}

.plus-minus-toggle {
	 cursor: pointer;
	 height: 21px;
	 position: relative;
	 width: 21px;
}
 .plus-minus-toggle:before, .plus-minus-toggle:after {
	 background: #000;
	 content: '';
	 height: 5px;
	 left: 0;
	 position: absolute;
	 top: 9px;
	 width: 13px;
	 transition: transform 500ms ease;
}
 .plus-minus-toggle:after {
	 transform-origin: center;
}
 .plus-minus-toggle.collapsed:after {
	 transform: rotate(90deg);
}
 .plus-minus-toggle.collapsed:before {
	 transform: rotate(180deg);
}

.sort1{
    border: 1px solid #f7f7f7;
    border-radius: 9px;
    padding: 10px;
    margin-bottom:15px;
}
.product img{
    border-radius: 12px;
}
</style>

<script>

$(function() {
  $('.plus-minus-toggle').on('click', function() {
    $(this).toggleClass('collapsed');
  });
});


//     var app = angular.module("myApp", []);
// app.controller("angularController", function($scope) {

// });


    // Toggle Collapse
$('.faq li .question').click(function () {
  $(this).find('.plus-minus-toggle').toggleClass('collapsed');
  $(this).parent().toggleClass('active');
});



    (function(){

  'use strict'
  angular.module('angularDemo', [],function($interpolateProvider){


$interpolateProvider.startSymbol("<%");
$interpolateProvider.endSymbol("%>");


});
  //can reference model instead of creating a global variable
  angular.module('angularDemo').controller('angularController',
    ['$scope','ProductDataService', function($scope, ProductDataService) {

    var products = ProductDataService.getSampleData();
    $scope.warehouse = products; //use $scope to expose to the view
    $scope.myObj = {
    // "color" : "white",
    // "background-color" : "coral",
    // "font-size" : "20px",
    // "padding" : "10px"
    // "border": "1px solid black",
    // "border-radius": "9px",
    // "padding": "10px",
    // "margin-bottom":"15px"
  }
    //create checkbox filters on the fly with dynamic data
    var filters = [];
    _.each(products, function(product) {
      _.each(product.properties, function(property) {
        var existingFilter = _.findWhere(filters, { name: property.name });

        if (existingFilter) {
          var existingOption = _.findWhere(existingFilter.options, { value: property.value });
          if (existingOption) {
            existingOption.count += 1;
          } else {
            existingFilter.options.push({ value: property.value, count: 1 });
          }
        } else {
          var filter = {};
          filter.name = property.name;
          filter.options = [];
          filter.options.push({ value: property.value, count: 1 });
          filters.push(filter);
        }
      });
    });
    $scope.Filters = filters;

    this.toggleAll = function($event, includeAll) {
      _.each(filters, function(filterCategory) {
        _.each(filterCategory.options, function(option) {
          option.IsIncluded = includeAll;
        });
      });
    };
  }]);

  angular.module('angularDemo').filter('dynamicFilter', function () {
    return function (products, filterCategories, scope) {
      var filtered = [];

      var productFilters = _.filter(filterCategories, function(fc) {
        return  _.any(fc.options, { 'IsIncluded': true });
      });

      _.each(products, function(prod) {
        var includeProduct = true;
        _.each(productFilters, function(filter) {
          var props = _.filter(prod.properties, { 'name': filter.name });
          if (!_.any(props, function(prop) { return _.any(filter.options, { 'value': prop.value, 'IsIncluded': true }); })) {
            includeProduct = false;
          }
        });
        if (includeProduct) {
          filtered.push(prod);
        }
      });
      return filtered;
    };
  });

  angular.module('angularDemo').service('ProductDataService', function() {
    var service = {};

    //sample data
    var products = [
      {
        name: 'IT',
        image: "{{URL::to('public/assests/img/book.jpg')}}",
        rating: 3,
        properties: [
          { name:'type', value:'books' }, { name:'color', value:'red' },
          { name:'size', value:'medium' },
          { name:'price', value:'300' }
        ]
      },{
        name: 'ECE',
        image: "{{URL::to('public/assests/img/book.jpg')}}",
        rating: 4,
        properties: [
          { name:'type', value:'books' }, { name:'color', value:'orange'},
          { name:'size', value:'medium' },
          { name:'price', value:'300' }
        ]
      },{
        name: 'mobile1',
        image: "{{URL::to('public/assests/img/book.jpg')}}",
        rating: 4,
        properties: [
          { name:'type', value:'mobile' }, { name:'color', value:'orange'},
          { name:'size', value:'medium' },
          { name:'price', value:'300' }
        ]
      },{
        name: 'MECH',
        image: "{{URL::to('public/assests/img/book.jpg')}}",
        rating: 4,
        properties: [
          { name:'type', value:'books' }, { name:'color', value:'yellow' },
          { name:'size', value:'large' },
          { name:'price', value:'100' }
        ]
      },{
        name: 'CS',
        image: "{{URL::to('public/assests/img/book.jpg')}}",
        rating: 4,
        properties: [
          { name:'type', value:'books' }, { name:'color', value:'yellow' },
          { name:'size', value:'small' },
          { name:'price', value:'100' }
        ]
      },{
        name: 'limeread',
        image: "{{URL::to('public/assests/img/book.jpg')}}",
        rating: 4,
        properties: [
          { name:'type', value:'books' }, { name: 'color', value: 'green' },
          { name:'size', value:'small' },
          { name:'price', value:'100' }
        ]
      },{
        name:'mobile2',
        image: "{{URL::to('public/assests/img/book.jpg')}}",
        rating: 4,
        properties: [
          { name:'type', value:'mobile' }, { name:'color', value:'red' },
          { name:'size', value:'medium' },
          { name:'price', value:'100' }
        ]
      }
    ];

    service.getSampleData = function() {
      return products;
    };

    return service;
  });

})();


</script>
