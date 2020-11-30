<?php
$jb_conn = mysqli_connect( 'localhost', 'root', '', 'portfolio' );
$delete_sql="delete from project where lagName='$_POST[lagName]'";
mysqli_query($jb_conn ,$delete_sql);  
mysqli_close($jb_conn ); 
?>