<html id="index-html">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>community</title>
    <link href='https://fonts.googleapis.com/css?family=Belleza' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Inknut Antiqua' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Zilla Slab Highlight' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=New Rocker' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Marko One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lacquer' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Autour One' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Yusei Magic' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=UnifrakturCook:700' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Rock Salt' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Piedra' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Permanent Marker' rel='stylesheet'>
    <link rel="StyleSheet" href="style/style.css"/>
    <script src="script/script.js"></script>
  </head>
  <body id="index-body">
    <header class="noselect">
      <h3 class="noselect" id="index-main-heading">COMMUNITY TO SHARE</h3>
      <div class="noselect" id="quote-place">
        Every individual in the world has a unique contribution<br/>
      </div>
    </header>
    <script>
          function myAnimationFont() {
          let idfont = null;
          var ifont = 0;
          const fonts = ["Zilla Slab Highlight","Permanent Marker","New Rocker","UnifrakturCook","Marko One","Lacquer","Alatsi","Rock Salt","Alfa Slab One","Autour One","Piedra","Inknut Antiqua"];
          clearInterval(idfont);
          idfont = setInterval(frame2, 2700);
          function frame2() {
            document.getElementById("communityplace").style.fontFamily = fonts[ifont];
            if(ifont<11){
               ifont = ifont + 1;
            }else{
               ifont = 0;
            }
          }
        }
        var kfont=1;
        if(kfont==1){
           myAnimationFont();
        }
    </script>
    <script>
          function myAnimation() {
          let id = null;
          const elem = document.getElementById("quote-place");
          var i = 0;
          const quotes = ["Alone, we can do so little; together, we can do so much",
                          "Life is about growth and contribution, not perfection",
                          "Every individual in the world has a unique contribution",
                          "We ourselves feel that what we are doing is just a drop in the ocean. But the ocean would be less because of that missing drop",
                          "Every contribution counts. Everyone can make a difference. Just start with yourself.",
                          "Never think that what you have to offer is insignificant. There will always be someone out there that needs what you have to give.",
                          "Life asks of every individual a contribution, and it is up to that individual to discover what it should be.",
                           ];
          clearInterval(id);
          id = setInterval(frame, 2700);
          function frame() {
            elem.innerHTML = quotes[i];
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
    <main>
      <h4 class="noselect">WELCOME</h4>
      <div class="container noselect">
      <div style="display:inline-block!important; font-size:20px;">
         <span>
           <button type="button" style="font-size:12px" onclick="window.location.href='prePlatform/sectors.php'"><b>ASSOCIATE</b></button>
           <button type="button" style="font-size:12px" onclick="window.location.href='prePlatform/ideaList.php'"><b>ADVICE</b></button>
           <h3 id="communityplace"> THE COMMUNITY </h3>
         </span>
      </div><br/>
      <div style="display:inline-block!important; font-size:12px">
        <span>
          <b> KEYBOARD LAYOUT </b>
          <button type="button" style="font-size:12px" onclick="window.location.href='preConverter/converter.html'"><b>CONVERTER</b></button>
        </span>
      </div>
    </main>
    <footer class="noselect" id="footer">
       <p>product by <strong><b>ERROR</b></strong></p>
    </footer>
  </body>
</html>
