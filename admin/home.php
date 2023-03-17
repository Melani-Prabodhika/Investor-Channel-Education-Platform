<?php
require('../db.php');
require('index.php');
if(isset($_SESSION['ADMIN_LOGIN'])!='yes'){
  header('location:login.php');
         die();
}
?>


  <div id="chartHolder" style="height:500px; margin-top:150px; margin-left: 350px; display: flex; justify-content: center;"></div>
   

<script>
var chartVars = "KoolOnLoadCallFunction=chartReadyHandler";

KoolChart.create("chart1", "chartHolder", chartVars, "100%", "100%");

function chartReadyHandler(id) {
  document.getElementById(id).setLayout(layoutStr);
  document.getElementById(id).setData(chartData);
}

var layoutStr =
  '<KoolChart backgroundColor="#FFFFFF" borderStyle="none">'
    +'<Options>'
      +'<Caption text="Income by Month"/>'
      +'<SubCaption text="( $M )" textAlign="right" />'
      +'<Legend defaultMouseOverAction="false" useVisibleCheck="true"/>'
    +'</Options>'
    +'<Bar2DChart showDataTips="true" barWidthRatio="0.5">'
      +'<horizontalAxis>'
        +'<LinearAxis maximum="2200" interval="200"/>'
      +'</horizontalAxis>'
      +'<verticalAxis>'
        +'<CategoryAxis categoryField="Month"/>'
      +'</verticalAxis>'
      +'<series>'
        +'<Bar2DSet type="stacked">'
          +'<series>'
            +'<Bar2DSeries xField="tv" displayName="FRX Academy" lineToEachItems="true" showLinkLabels="true">'
              +'<showDataEffect>'
                +'<SeriesInterpolate/>'
              +'</showDataEffect>'
            +'</Bar2DSeries>'
            +'<Bar2DSeries xField="tablet" displayName="Personal Development" lineToEachItems="true" showLinkLabels="true">'
              +'<showDataEffect>'
                +'<SeriesInterpolate/>'
              +'</showDataEffect>'
            +'</Bar2DSeries>'
            +'<Bar2DSeries xField="phone" displayName="VIP Signal Service" lineToEachItems="true" showLinkLabels="true">'
              +'<showDataEffect>'
                +'<SeriesInterpolate/>'
              +'</showDataEffect>'
            +'</Bar2DSeries>'
            +'<Bar2DSeries xField="phone" displayName="IBO Package" lineToEachItems="true" showLinkLabels="true">'
              +'<showDataEffect>'
                +'<SeriesInterpolate/>'
              +'</showDataEffect>'
            +'</Bar2DSeries>'
          +'</series>'
        +'</Bar2DSet>'
      +'</series>'
    +'</Bar2DChart>'
  +'</KoolChart>';

var chartData =
  [
    {"Month" : "Nov","phone" : 300,"tv" : 700,"tablet" : 250, "ada" : 150},
   {"Month" : "Dec","phone" : 500,"tv" : 500,"tablet" : 600, "ada" : 400}, 
    {"Month" : "Jan","phone" : 200,"tv" : 350,"tablet" : 450, "ada" : 0},
   {"Month" : "Feb","phone" : 250,"tv" : 450,"tablet" : 220, "ada" : 200},
   {"Month" : "Mar","phone" : 600,"tv" : 0,"tablet" : 400, "ada" : 500},
   {"Month" : "Apr","phone" : 0,"tv" : 350,"tablet" : 450, "ada" : 100},
   ];

function totalFunc(index, data, value){
  if(index == 6)
    return insertComma(value);
  return "";
}

function insertComma(n) {
  var reg = /(^[+-]?d+)(d{3})/;
  n += "";
  while (reg.test(n))
  n = n.replace(reg, '$1' + "," + '$2');
  return n;
}
</script>


</body>
</html>