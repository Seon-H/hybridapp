<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>information</title>
 <style>
      body {font-family: 20px;}
      table {width: 70%;border-collapse: collapse;}
      th, td {padding: 10px;border:1px solid #000000;}
    </style>
  </head>
  <body>
 <table>
      <thead>
        <tr>
          <th>SID</th>
          <th>name</th>
          <th>age</th>
        </tr>
      </thead>
      <tbody>
    <?php
      $jb_conn = mysqli_connect( 'localhost', 'root', '', 'information' );
      $jb_sql = "SELECT * FROM data;";
      $jb_result = mysqli_query( $jb_conn, $jb_sql );
      while( $jb_row = mysqli_fetch_array( $jb_result ) ) {
       echo '<tr><td>' . $jb_row[ 'SID' ] . '</td><td>'. $jb_row[ 'name' ] . '</td><td>' . $jb_row[ 'age' ] . '</td></tr>';
      }
    ?>
 </tbody>
    </table>
  </body>
</html>
