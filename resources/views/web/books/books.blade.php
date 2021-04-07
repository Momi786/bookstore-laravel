
@include ('web/include/header')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div ng-app='angularDemo' ng-cloak>
                <div class="mainPage" ng-controller="angularController as ctrl">
                  <div class="sidebar" layout-padding>
                    <div class="parent-container">
                        <ul class="faq">
                            <div ng-repeat="filter in Filters">
                          <li>

                            <h3 class="sort"><%filter.name%>
                                <div class="plus-minus-toggle collapsed"></div>
                            </h3>
                            <div class="answer">
                                <ul class="sortoptions">
                                    <li ng-repeat="option in filter.options">
                                      <input type="checkbox" ng-model="option.IsIncluded" ng-checked="option.IsIncluded"> <%option.value%>
                                      <span>(<%option.count%>)</span>
                                    </li>
                                  </ul>
                            </div>

                          </li>
 </div>



                        </ul>
                      </div>

                    <button ng-click="ctrl.toggleAll($event, false)">Uncheck All</button>
                    <br/>
                    <button ng-click="ctrl.toggleAll($event, true)">Check All</button>
                 </div>
                  <div class="window_panel">
                    <div ng-repeat="product in warehouse | dynamicFilter:Filters:this" class="product">
                        <%product.name%>
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
  width:25%
}
.window_panel{
  width:75%;
  display:flex;
  flex-flow:row wrap;
  justify-content:center;
  height:100%;
}
.product{
  padding:35px;
  margin:20px;
  border:1px solid black;
  border-radius:5px;
}
li{
  list-style:none;
}
li span{
    display: inline!important;
    font-size: 13px;
}
@import "compass";
 .parent-container {
	 padding: 0 20px 0 20px;
	 max-width: 800px;
	 width: 100%;
}
 .faq {
	 list-style: none;
	 padding-left: 40px;
	 padding-right: 20px;
}
 .faq li {
	 border-bottom: 1px solid #999;
	 margin-bottom: 15px;
}
 .faq li.active .answer {
	 max-height: 275px !important;
	 padding-bottom: 25px;
	 transition: max-height 0.5s ease, padding-bottom 0.5s ease;
}
 .faq li.active .question {
	 color: #808080;
	 transition: color 0.5s ease;
}
 .faq .answer {
	 color: #090909;
	 font-family: serif;
	 font-size: 16px;
	 line-height: 24px;
	 max-height: 0;
	 overflow: hidden;
	 transition: max-height 0.5s ease, padding-bottom 0.5s ease;
}
 .faq .plus-minus-toggle {
	 cursor: pointer;
	 height: 21px;
	 position: absolute;
	 width: 21px;
	 left: -40px;
	 top: 50%;
	 z-index: 2;
}
 .faq .plus-minus-toggle:before, .faq .plus-minus-toggle:after {
	 background: #000;
	 content: '';
	 height: 5px;
	 left: 0;
	 position: absolute;
	 top: 0;
	 width: 21px;
	 transition: transform 500ms ease;
}
 .faq .plus-minus-toggle:after {
	 transform-origin: center;
}
 .faq .plus-minus-toggle.collapsed:after {
	 transform: rotate(90deg);
}
 .faq .plus-minus-toggle.collapsed:before {
	 transform: rotate(180deg);
}
 .faq .question {
	 color: #090909;
	 font-family: sans-serif;
	 font-size: 20px;
	 font-weight: 800;
	 text-transform: uppercase;
	 position: relative;
	 cursor: pointer;
	 padding: 20px 0;
	 transition: color 0.5s ease;
}
 @media screen and ("max-width:767px") {
	 .faq .question {
		 font-size: 18px;
	}
}



</style>

<script>
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
        properties: [
          { name:'type', value:'books' }, { name:'color', value:'red' },
          { name:'size', value:'medium' },
          { name:'price', value:'300' }
        ]
      },{
        name: 'ECE',
        properties: [
          { name:'type', value:'books' }, { name:'color', value:'orange'},
          { name:'size', value:'medium' },
          { name:'price', value:'300' }
        ]
      },{
        name: 'mobile1',
        properties: [
          { name:'type', value:'mobile' }, { name:'color', value:'orange'},
          { name:'size', value:'medium' },
          { name:'price', value:'300' }
        ]
      },{
        name: 'MECH',
        properties: [
          { name:'type', value:'books' }, { name:'color', value:'yellow' },
          { name:'size', value:'large' },
          { name:'price', value:'100' }
        ]
      },{
        name: 'CS',
        properties: [
          { name:'type', value:'books' }, { name:'color', value:'yellow' },
          { name:'size', value:'small' },
          { name:'price', value:'100' }
        ]
      },{
        name: 'limeread',
        properties: [
          { name:'type', value:'books' }, { name: 'color', value: 'green' },
          { name:'size', value:'small' },
          { name:'price', value:'100' }
        ]
      },{
        name:'mobile2',
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
