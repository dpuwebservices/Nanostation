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
      font-size: 1.1em;
      background: #161a55;
      color:white;
      text-align:left;
      overflow:hidden;
    }
    
    a {color:white; text-decoration: none;}
    #main{
      max-width: 90%;
      padding:6% 0 4% 0;
      margin:0 auto;
    }
    
    table {width: 100%;    margin:0 auto; text-align:left;}
    table th{
      font-weight: normal;

    }
/*    .hours-alt.hours-today-row.hours-library.loc2438 th, .hours-alt.hours-today-row.hours-library.loc2438 td {
      padding-bottom: 10px;
    }*/
    .loc2438{
      font-size:1.8em;
      font-weight:bold;
    }
    

  </style>

</head>
<?php 
date_default_timezone_set('America/Chicago');
$todaysDate=date("l, M. jS");
?>
<body>
  <div id="main">

    
    <table>
      <tr><td class="date"><?php echo $todaysDate; ?></td></tr>
      <tr><td>
          <p>Today's Hours:</p>
          <div id="api_hours_today_iid123_lid2438"></div>
        </td></tr>
    </table>
  


  <script src="https://api3.libcal.com/api_hours_today.php?iid=123&lid=2438&format=js&systemTime=0&context=object"> </script>
  </div>

</body>
</html>