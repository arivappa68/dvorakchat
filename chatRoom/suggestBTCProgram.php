<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="StyleSheet" href="../style/style.css"/>
    <script src="../script/script.js"></script>
  </head>
  <body>
    <header>
      <div style="display:inline">
        <strong class="noselect"><b><a style="text-decoration:none" href="../prePlatform/ideaList.php">BACK</a></b></strong>
      </div>
      <div id="outputArea">
        <?php
           include "appendmyFile.php"
        ?>
        <?php
           include "formatmyFile.php"
        ?>
        <?php
           include "readFile.php"
        ?>
      </div>
      <div id="chat">
        <?php readmytext("../text/textBTCProgram.txt"); ?>
      </div>
    </header>
    <main style="text-decoration:none">
      <form class="noselect" autocomplete="off" method="post" action="suggestBTCProgram.php">
      <div style="dispayl:inline-block!important">
        <div style="display:inline-block!important" spellcheck="false">
          <input type="text" placeholder="name" name="name"/>
          <input type="text" placeholder="message" name="writtentext"/>
        </div>
        <div style="display:inline-block!important">
          <button type="submit"><b>SEND</b></button>
          <button type="button" name="refreshButton" onClick="window.location.reload()"><b>REFRESH</b></button>
        </div>
      </div>
      </form>
      <div class="noselect" id="popup-button">
         <br>
         <button onclick="popupOpen()"><b>DELETE LINE</b></button>
      </div>
      <div id="popup-form" style="display:none">
         <form name="passwordForm" class="form-box" action="suggestBTCProgram.php" method="post">
               <div style="display:inline">
                 <input type="password" id="password" placeholder="Enter password" name="password"><br>
               </div>
               <div id="enter-close-button" style="display:inline-block!important">
                  <button type="button" onclick="popupClose()"><b>CLOSE</b></button>
                  <button type="submit" name="deleteButton"><b>DELETE LINE</b></button>
               </div>
         </form>
      </div>
      <script>
        window.scrollTo(0, document.body.scrollHeight || document.documentElement.scrollHeight);
      </script>
      <?php
        if($_POST){
          if(isset($_POST["writtentext"]) && $_POST["writtentext"]!=null){
             $writtenText = $_POST["writtentext"];
             $name = $_POST["name"];
             appendmytext("../text/textBTCProgram.txt",$writtenText, $name);
             echo("<script>");
             echo("window.location.replace(\"suggestBTCProgram.php\")");
             echo("</script>");
          }
          if(isset($_POST["deleteButton"])){
            if($_POST){
               $password = $_POST["password"];
               if($password == "requiredpassword"){
                    formatmyfile("../text/textBTCProgram.txt");
                    echo("<script>");
                    echo("window.location.replace(\"suggestBTCProgram.php\")");
                    echo("</script>");
               }else{
                    echo("<script>");
                    echo("alert(\"Wrong password, leave me here..........!\");");
                    echo("window.location.href=\"suggestBTCProgram.php\";");
                    echo("</script>");
               }
            }
          }
        }
      ?>
    </main>
    <footer class="noselect" id="chatFooter">
       <p>product by <strong><b>ERROR</b></strong></p>
    </footer>
  </body>
</html>
