function myfunction(){
  var strToBeConverted = document.getElementById('text').value;
  var qwerty = "-=qwertyuiop[]asdfghjkl;'zxcvbnm,./_+QWERTYUIOP{}ASDFGHJKL:\"ZXCVBNM<>?";
  var colemak = "-=qwfpgjluy;[]arstdhneio'zxcvbkm,./_+QWFPGJLUY:{}ARSTDHNEIO\"ZXCVBKM<>?";
  var dvorak = "[]',.pyfgcrl/=aoeuidhtns-;qjkxbmwvz{}\"<>PYFGCRL?+AOEUIDHTNS_:QJKXBMWVZ";
  var convertedStrD = "";
  var convertedStrQ = "";
  var i=0;
  for(i=0; i<strToBeConverted.length; i++){
    if(colemak.indexOf(strToBeConverted.charAt(i))>-1){
      convertedStrD += dvorak.charAt(colemak.indexOf(strToBeConverted.charAt(i)));
      convertedStrQ += qwerty.charAt(colemak.indexOf(strToBeConverted.charAt(i)));
    }else{
      convertedStrD += strToBeConverted.charAt(i);
      convertedStrQ += strToBeConverted.charAt(i);
    }
  }
  document.getElementById('equivalentDvorak').innerHTML = convertedStrD;
  document.getElementById('equivalentQwerty').innerHTML = convertedStrQ;
}
