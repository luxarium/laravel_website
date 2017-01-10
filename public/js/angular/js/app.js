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
                url: '127.0.0.1:8000/showAllPost',
            }
            $http(req).then(function(result){
                console.log(result);
            })
        }
        $scope.init();
        $scope.items = [
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." , imagePath : "img/Event_1.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_3.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_4.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
            {title : "برج دبی" ,subTitle : "سوپر لوکس ترین هتل جهان" , description : "با ما اقامت با بیش از 40 درصد تخفیف را تجربه کنید." ,  imagePath : "img/Event_2.jpg"},
        ]
    })

