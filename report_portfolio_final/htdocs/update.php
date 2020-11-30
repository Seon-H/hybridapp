<?php
$jb_conn = mysqli_connect( 'localhost', 'root', '', 'portfolio' );
$update_sql = "update project set title = '$_POST[title]', content = '$_POST[content]' 
                       where lagName = '$_POST[lagName]'";
mysqli_query($jb_conn,$update_sql);
mysqli_close($jb_conn);
?>