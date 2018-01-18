<?php
include '../lib/Session.php' ;
Session::checkSession();
?>
<?php include '../config/config.php' ;?>
<?php include '../lib/Database.php' ;?>

<?php
    $db = new Database();
    
?>
<?php
if (!isset($_GET['delpostid']) || $_GET['delpostid']==NULL ){
    echo "<script>window.location = 'postlist.php';</script>";
}else{
    $postid = $_GET['delpostid'];

        $query = "select * from tbl_post where id='$postid' ";
        $getData = $db->select($query);
        if ($getData) {
     
        while ($delimg = $getData->fetch_assoc()){
        	  $dellink = $delimg['image'];
        	  unlink($dellink);
}
}
      $delquery = "delete  from tbl_post where id='$postid' ";
        $delData = $db->delete($delquery);
          if ($delData) { 
        echo "<script>alert('Page Deleted Successfully.');</script>";
        echo "<script>window.location = 'index.php';</script>";         
 }else{
    echo "<script>alert('Page Not Deleted ');</script>";
    echo "<script>window.location = 'index.php';</script>";     
 }
}
?>