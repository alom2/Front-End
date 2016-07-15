<?php
require '../vendor/autoload.php';

include 'sessao.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Teste Mongeral Aegon</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="assets/css/style.css" rel="stylesheet" />

    </head>
    <body>
        <div class="top">
            <img class="left" src="https://madstyle.mongeralaegon.com.br/assets/app/css/img/site/global/mongeral-aegon-logo-site.png" alt="Mongeral Aegon Logo">
            <div class="titulo">Teste para Front-End</div>
        </div>
        <div class="clear"></div>
        
        
        <div ng-app="myApp" ng-controller="pesquisa">
            <form method="post" ng-submit="search()">
                <input type="text" ng-model="nome">
                <button type="submit">enviar</button>
            </form>
            <div>{{repositorios}}</div>
        </div>
        
        <script src="assets/js/main.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
        <script>
        var app = angular.module('myApp', []);
        app.controller('pesquisa', function($scope, $http){
           $scope.search = function(){
            $http.post('pesquisa.php',{data :{nome : $scope.nome}}).then(function successCallback(response){
                $scope.repositorios = response.data;
            },function(){$scope.repositorio= "erro"});         
        };
        });
          
        </script>
    </body>
</html>