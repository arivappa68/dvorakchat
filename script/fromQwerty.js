function myfunction(){
  var strToBeConverted = document.getElementById('text').value;
  var qwerty = "-=qwertyuiop[]asdfghjkl;'zxcvbnm,./_+QWERTYUIOP{}ASDFGHJKL:\"ZXCVBNM<>?";
  var colemak = "-=qwfpgjluy;[]arstdhneio'zxcvbkm,./_+QWFPGJLUY:{}ARSTDHNEIO\"ZXCVBKM<>?";
  var dvorak = "[]',.pyfgcrl/=aoeuidhtns-;qjkxbmwvz{}\"<>PYFGCRL?+AOEUIDHTNS_:QJKXBMWVZ";
  var convertedStrD = "";
  var convertedStrC = "";
  var i=0;
  for(i=0; i<strToBeConverted.length; i++){
    if(qwerty.indexOf(strToBeConverted.charAt(i))>-1){
      convertedStrD += dvorak.charAt(qwerty.indexOf(strToBeConverted.charAt(i)));
      convertedStrC += colemak.charAt(qwerty.indexOf(strToBeConverted.charAt(i)));
    }else{
      convertedStrD += strToBeConverted.charAt(i);
      convertedStrC += strToBeConverted.charAt(i);
    }
  }
  document.getElementById('equivalentDvorak').innerHTML = convertedStrD;
  document.getElementById('equivalentColemak').innerHTML = convertedStrC;
}
