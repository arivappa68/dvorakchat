let toggleStorage = localStorage.getItem("toggleStorage");
var toggleButtonVar = document.querySelector("#toggleButton");

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
/*
document.querySelector("#toggleButton").addEventListener("click", ()=>{
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
function toggleButtonClick(){
  toggleStorage = localStorage.getItem("toggleStorage");
  if(toggleStorage == "true"){
    enableWhite();
    console.log(localStorage.getItem("toggleStorage"));
  }else{
    enableDark();
    console.log(localStorage.getItem("toggleStorage"));
  }
}
