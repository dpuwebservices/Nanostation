<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="robots" content="noindex">
  <title>Loop Library Information</title>

  <style>
    @import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,400italic,600italic%7COpen+Sans+Condensed:300,700,300italic");    
    body, html{

      font-family:"Open Sans Condensed",sans-serif;
      font-size: 1em;
      background: #2B4F78;
      color:white;
      text-align:left;
      overflow:hidden;
    }   
    a {color:white; text-decoration: none;}
    #main{
      max-width: 90%;
      margin:0 auto;
    }
    
    table {width: 360px;    margin-left:auto;     margin-right:auto; text-align:left;}
    table th{
      font-weight: normal;
      padding-right:10px;
    }
/*    .hours-alt.hours-today-row.hours-library.loc2438 th, .hours-alt.hours-today-row.hours-library.loc2438 td {
      padding-bottom: 10px;
    }*/
    .hours-today{font-size: 1.2em;}
    .hours-alt.hours-today-row.hours-library.loc2438 th{
      font-weight:bold;
    }

  </style>

</head>
<?php 
date_default_timezone_set('America/Chicago');
$todaysDate=date("l, F jS");
?>
<body>
  <div id="main">

    
    <table>
       <tr><td><h1><?php echo $todaysDate; ?></h1></td></tr>
      <tr><td>  <h2>Today's Hours:</h2></td></tr>
      <tr><td>  <div id="api_hours_today_iid123_lid2438"></div></td></tr>
      <tr><td><div id="api_hours_today_iid123_lid6256"></div></td></tr>
    </table>
  


  <script src="https://api3.libcal.com/api_hours_today.php?iid=123&lid=2438&format=js&systemTime=0&context=object"> </script>
  <script src="https://api3.libcal.com/api_hours_today.php?iid=123&lid=6256&format=js&systemTime=0&context=object"> </script>
  </div>
<!--  <h2>Room Reservations</h2>


  <h2>Instruction Sessions</h2>
<div id="api_upc_cid2894_iid123"></div><script type="text/javascript" src="https://api3.libcal.com/api_events.php?iid=123&m=upc&cid=2894&audience=&c=1652&d=23632&l=3&simple=ul_date&context=object&format=js"> </script>
  </div>-->
</body>
</html>