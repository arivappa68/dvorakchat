<!DOCTYPE html>
<html id="html-toggle">
  <head>
    <meta name="description" content="colemak-to-dvorak-converter">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>community</title>
    <link href='https://fonts.googleapis.com/css?family=Belleza' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inknut Antiqua' rel='stylesheet'>
    <link rel="StyleSheet" href="../style/style.css"/>
    <script src="../script/script.js"></script>
    <script src="../script/toggle.js"></script>
  </head>
  <body>
    <h3 class="noselect" id="prePlatform-main-heading"><span id="change-words">CONNECT WITH </span><a style="text-decoration:none" href="../index.php">THE COMMUNITY</a></h3>
    <div style="font-variant:small-caps" class="noselect" id="center-elements">
      Explore the different resources and discussion tabs....!<br/>
    </div>
    <script>
          function myAnimation() {
          let id = null;
          const elem = document.getElementById("change-words");
          let pos = 0;
          var i = 0;
          const words2 = ["JOIN ","HOOK TO ","COMBINE WITH ","UNITE ","CONNECT WITH ","ASSOCIATE ","TIE UP WITH ","CONCATENATE "];
          clearInterval(id);
          id = setInterval(frame, 2000);
          function frame() {
            elem.innerHTML = words2[i];
            if(i<7){
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
    <h4 class="noselect">SECTORS</h4>
    <div class="container noselect">
    <div style="display:inline-block!important">
       <span>
         Competitive Programming
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../platform/competitiveProgramming.php'"><b>RESOURCES</b></button>
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatCompetitiveProgramming.php'"><b>DISCUSSIONS</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Object Oriented Programming
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../platform/objectOrientedProgramming.php'"><b>RESOURCES</b></button>
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatObjectOrientedProgramming.php'"><b>DISCUSSIONS</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Web Developement
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../platform/webDevelopement.php'"><b>RESOURCES</b></button>
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatWebDevelopement.php'"><b>DISCUSSIONS</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Data Base
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../platform/database.php'"><b>RESOURCES</b></button>
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatDatabase.php'"><b>DISCUSSIONS</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Data Science
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../platform/dataScience.php'"><b>RESOURCES</b></button>
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatDataScience.php'"><b>DISCUSSIONS</b></button>
         </div>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         Machine Learning
         <div style="display:inline-block!important; font-size:10px;">
         <button type="button" style="font-size:12px" onclick="window.location.href='../platform/machineLearning.php'"><b>RESOURCES</b></button>
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatMachineLearning.php'"><b>DISCUSSIONS</b></button>
         </div>
       </span>
    </div><br/>
    </div>
    At present there are resources only in CP, Data Science, and Machine Learning.
    <h4 class="noselect">SECTIONS</h4>
    <div class="container noselect">
       <div style="display:inline-block!important">
       <span>
         UG1
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatUG1.php'"><b>DISCUSSIONS</b></button>
       </span>
       </div> <br/>
       <div style="display:inline-block!important">
       <span>
         UG2
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatUG2.php'"><b>DISCUSSIONS</b></button>
       </span>
       </div> <br/>
    <div style="display:inline-block!important">
       <span>
         UG3
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatUG3.php'"><b>DISCUSSIONS</b></button>
       </span>
    </div><br/>
    <div style="display:inline-block!important">
       <span>
         UG4
         <button type="button" style="font-size:12px" onclick="window.location.href='../chatRoom/chatUG4.php'"><b>DISCUSSIONS</b></button>
       </span>
    </div><br/>
  </div>
  </body>
  <footer>
    <div class="noselect" id="footer">
      <p>product by <strong><b>ERROR</b></strong></p>
    </div>
  </footer>
</html>
