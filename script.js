function vistorhome(url){
  var http;
http=new XMLHttpRequest();
http.onreadystatechange=function()
{
if(http.readyState==4 && http.status==200)    
{
 document.getElementById("visitorelectronics").innerHTML=http.responseText;    
}
};
var url = "visitorelectronics.php";
console.log(url);
http.open("GET",url,true);
http.send();
}