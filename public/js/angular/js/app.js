/**
 * Created by hkafi on 1/11/2017.
 */
angular.module('luxarium', [])
    .controller('mainCtrl',function($scope,$http){
        $scope.test = "Salam";
        console.log("start");


        $scope.init = function(){
            var req = {
                method: 'POST',
                url: 'http://127.0.0.1:8000/showAllPost',
            }
            $http(req).then(function(result){
                console.log(result.data);
                var data = result.data;
                data[0].title = data[0].name;
                data[0].description = data[0].descriptions;
                data[0].imagePath = $scope.items[0].imagePath;
                data[0].subTitle = data[0].name;
                $scope.items.push(data[0]);
                console.log("items : ",$scope.items)
            })
        }
        $scope.init();
        $scope.items = [
            {title : "هتل نمونه" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." , imagePath : "img/Event_1.jpg"},
            {title : "مرکز تفریحی نمونه" ,subTitle : "سوپر لوکس ترین مرکز تفریحی خاورمیانه" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            {title : "رستوران نمونه" ,subTitle : "سوپر لوکس ترین رستوران جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_3.jpg"},
            {title : "فروشگاه های نمونه" ,subTitle : "سوپر لوکس ترین فروشگاه های ایران" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_4.jpg"},
            // {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            // {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            // {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            // {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            // {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
        ]
        $scope.details = function(item)
        {
            console.log(item);
        }
    })

