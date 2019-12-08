// JavaScript Document
function goBack() {
  window.history.back();
}

function redirect()
    {
    var url = "file:///C:/Users/ASUS/Documents/wad%20project/ContactUs.html";
    window.location(url);
    }
function myFunction1() {
  location.replace("file:///C:/wamp64/www/myproject/ContactUs.html")
}

function myFunction() {
  var x = document.getElementById("myVideo").autoplay;
  document.getElementById("demo").innerHTML = x;
}
var video = document.getElementById("target_video");
video.autoplay = true;
video.load(); 

window.onload=function(){
    document.getElementById("my_audio").play();
  }