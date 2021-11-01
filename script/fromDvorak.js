function myfunction(){
  var strToBeConverted = document.getElementById('text').value;
  var qwerty = "-=qwertyuiop[]asdfghjkl;'zxcvbnm,./_+QWERTYUIOP{}ASDFGHJKL:\"ZXCVBNM<>?";
  var colemak = "-=qwfpgjluy;[]arstdhneio'zxcvbkm,./_+QWFPGJLUY:{}ARSTDHNEIO\"ZXCVBKM<>?";
  var dvorak = "[]',.pyfgcrl/=aoeuidhtns-;qjkxbmwvz{}\"<>PYFGCRL?+AOEUIDHTNS_:QJKXBMWVZ";
  var convertedStrQ = "";
  var convertedStrC = "";
  var i=0;
  for(i=0; i<strToBeConverted.length; i++){
    if(dvorak.indexOf(strToBeConverted.charAt(i))>-1){
      convertedStrQ += qwerty.charAt(dvorak.indexOf(strToBeConverted.charAt(i)));
      convertedStrC += colemak.charAt(dvorak.indexOf(strToBeConverted.charAt(i)));
    }else{
      convertedStrQ += strToBeConverted.charAt(i);
      convertedStrC += strToBeConverted.charAt(i);
    }
  }
  document.getElementById('equivalentQwerty').innerHTML = convertedStrQ;
  document.getElementById('equivalentColemak').innerHTML = convertedStrC;
}
