<html>
  <head>
    <title>1T16 - Data Analytics - KYB - a simple one page example</title>

    <!-- BEGIN : a little CSS -->
    <style>
      html{
        text-align:center;
        background-color:#3b73b9;
      }
      body {
        background-color:#fff;
        width:80%;
        margin-left:auto;
        margin-right:auto;
        border-radius:5px;
      }
      <!-- END : a little CSS -->
    </style>

  </head>
  <body>
    <h1>1T16 - Data Analytics - KYB</h1>
    <p>This page uses PHP to make a PostgreSQL database connection</p>

    <!-- BEGIN : some PHP to demonstrate server side language installation, and DB connection -->
    <?php
      //display a message
      print "<h4 style='color:#00FF00;'>If you can see this, then PHP has been installed on the server.</h4>";

      //BEGIN : set credentials for our database
      /*
      $host = '10.72.6.122';
      $port='5432'; //this is the default port for PostgreSQL databases
      $dbname='d4aa78c302b9c4cd4ba3ea0a86ed03595';
      $user = 'u4aa78c302b9c4cd4ba3ea0a86ed03595';
      $pw='180275983c6a456f8d4a3288826039f0';
      */
      $host = '';
      $port='5432'; //this is the default port for PostgreSQL databases
      $dbname='';
      $user = '';
      $pw='';

      //END : set credentials for our database

      //BEGIN : attempt to establish a database connection
      print "Database connection status:";
      $pg_conn = pg_pconnect("host=$host port=$port dbname=$dbname user=$user password=$pw");
      if (!$pg_conn) {
        //IF connection not made
        echo "<h4 style='color:#FF0000;'>Connection not made.</h4>";
      } else {
        //ELSE connection was made
        echo "<h4 style='color:#00FF00;'>Connection made.</h4>";
      }
      //END : attempt to establish a database connection
    ?>
    <!-- END   : some PHP to demonstrate server side language installation, and DB connection -->
  </body>
</html>
