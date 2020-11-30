<?php
$jb_conn = mysqli_connect( 'localhost', 'root', '', 'portfolio' );
$insert_sql = "insert into project(lagName, title, content)
values('$_POST[lagName]', '$_POST[title]', '$_POST[content]')";
mysqli_query( $jb_conn, $insert_sql );
mysqli_close($jb_conn);
?>