function showResults(){box=document.getElementById("resultados"),box.style.display="block",setTimeout(function(){box.style.opacity="1",box.style.top="0"},10)}function criaTable(dataset){return tRepositorios=$("#tRepositorios").DataTable({data:dataset,columns:[{title:"ID"},{title:"Nome"},{title:"URL"}],info:!1,bLengthChange:!1,searching:!1,language:{search:"Pesquisar:",paginate:{first:"Primeiro",last:"Ultimo",next:"Próximo",previous:"Anterior"},zeroRecords:"Nenhum resultado encontrado."}}),tRepositorios}function valida(){var nome=document.getElementById("nome").value.toString();document.getElementById("nome").value=nome.replace(/\s+/g,"")}var app=angular.module("myApp",[]),dataset=new Array;$(document).ready(function(){criaTable(dataset)}),app.controller("pesquisa",function($scope,$http){$scope.search=function(){document.getElementById("loading").style.display="inline-block",$http({method:"POST",url:"pesquisa.php",data:{nome:$scope.nome},headers:{"Content-Type":"application/x-www-form-urlencoded"}}).then(function(response){var table=response.data;dataset.length=0,angular.forEach(table,function(value,key){dataset[key]=new Array(table[key].id,table[key].name,table[key].html_url)}),tRepositorios.destroy(),Array.isArray(dataset)&&($scope.usuario=$scope.nome,tRepositorios=criaTable(dataset)),showResults(),document.getElementById("loading").style.display="none"},function(){})}});