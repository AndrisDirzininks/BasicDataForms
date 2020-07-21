// funkcija ievades datuma un laika ģenerēšanai

function generateDate(){
var currentTime = new Date();
var curyear = currentTime.getFullYear();
var curmonth = currentTime.getMonth();
var curdate = currentTime.getDate();
var pilnsLaiks=curyear+ "-" +curmonth+"-"+curdate;

document.getElementById("laiks").value=pilnsLaiks;
}
generateDate();
