function popupOpen(){
   console.log("enetered popupopen function");
   document.getElementById("popup-button").style.display = "none";
   document.getElementById("popup-form").style.display = "block";
}
function popupClose(){
   document.getElementById("popup-form").style.display = "none";
   document.getElementById("popup-button").style.display = "block";
}
function passwordVisible() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function floatFooterCorrection(){
  document.getElementById("footer").classList.remove("floatFooterIndex");
}
function floatFooterCorrectionSecond(){
  document.getElementById("footer").classList.add("floatFooterIndex");
}
/*
function toggle(){
  if(document.getElementById("html-toggle").style.backgroundColor == "white"){
      document.getElementById("html-toggle").style.backgroundColor = "black";
      document.getElementById("html-toggle").style.color = "white";
  }else{
    document.getElementById("html-toggle").style.backgroundColor = "white";
    document.getElementById("html-toggle").style.color = "black";
  }
}
*/
/*
let toggleStorage = localStorage.getItem("toggleStorage");
const toggleButtonVar = document.querySelector("#toggleButton");

const enableDark = ()=>{
  document.getElementById("html-toggle").style.backgroundColor = "black";
  document.getElementById("html-toggle").style.color = "white";
  localStorage.setItem("toggleStorage","true");
}
const enableWhite = ()=>{
  document.getElementById("html-toggle").style.backgroundColor = "white";
  document.getElementById("html-toggle").style.color = "black";
  localStorage.setItem("toggleStorage","false");
}
if(toggleStorage == "true"){
  enableDark();
}
toggleButtonVar.addEventListener("click", ()=>{
  toggleStorage = localStorage.getItem("toggleStorage");
  if(toggleStorage == "true"){
    enableWhite();
    console.log(localStorage.getItem("toggleStorage"));
  }else{
    enableDark();
    console.log(localStorage.getItem("toggleStorage"));
  }
});
*/
