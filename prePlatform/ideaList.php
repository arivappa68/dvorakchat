<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="contribute to community">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>community</title>
    <link href='https://fonts.googleapis.com/css?family=Belleza' rel='stylesheet'>
    <link rel="StyleSheet" href="../style/style.css"/>
    <script src="../script/script.js">
    </script>
  </head>
  <body>
    <h3 class="noselect" id="main-heading"><span id="change-word">EMPOWER</span> <a style="text-decoration:none" href="../index.php">THE COMMUNITY</a></h3>
    <div style="font-variant:small-caps" class="noselect" id="center-elements">
      Contribute your suggestions to improve the community<br/>
    </div>
    <script>
          function myAnimation() {
          let id = null;
          const elem = document.getElementById("change-word");
          let pos = 0;
          var i = 0;
          const words = ["EMPOWER", "SUGGEST", "INDICATE", "INTIMATE", "ADVICE", "PROPOSE", "DESCRIBE"];
          clearInterval(id);
          id = setInterval(frame, 2000);
          function frame() {
            elem.innerHTML = words[i];
            if(i<6){
               i = i + 1;
            }else{
               i = 0;
            }
          }
        }
        var k=1;
        if(k==1){
           myAnimation();
        }
    </script>
    <h4 class="noselect">CATEGORIES</h4>
    <div class="container noselect">
    <div style="display:inline-block!important">
       <span>
         Social
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/suggestSocial.php'"><b>SUGGEST</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Technical
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/suggestTechnical.php'"><b>SUGGEST</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Academic
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/suggestAcademic.php'"><b>SUGGEST</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Cultural
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/suggestCultural.php'"><b>SUGGEST</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Sport
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/suggestSport.php'"><b>SUGGEST</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Other
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/suggestOther.php'"><b>SUGGEST</b></button>
         </div>
       </span>
    </div><br/>
    </div>
    <h4 class="noselect">ISSUES</h4>
    <div class="container noselect">
       <div style="display:inline-block!important">
       <span>
         BTC program
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/suggestBTCProgram.php'"><b>SUGGEST</b></button>
       </span>
       </div> <br/>
       <div style="display:inline-block!important">
       <span>
         Vaccination
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/suggestVaccination.php'"><b>SUGGEST</b></button>
       </span>
       </div> <br/>
     </div>
  </body>
  <footer>
    <div class="noselect" id="footer">
      <p>product by <strong><b>ERROR</b></strong></p>
    </div>
  </footer>
</html>
