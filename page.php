<?php include 'inc/header.php' ;?>
<?php
$pageid = mysqli_real_escape_string($db->link, $_GET['pageid']);
if (!isset($pageid) || $pageid == NULL ){
    	header("Location:404.php");
}else{
    $id = $pageid;
}
?>
 <?php
    $pagequery = "select * from tbl_page where id ='$id' ";
    $pagedetails = $db->select($pagequery);
    if ($pagedetails) {
    while($result =$pagedetails->fetch_assoc()) {

    ?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
			 
				<h2><?php echo $result['name']; ?></h2>
				<?php echo $result['body']; ?>
	
				<p>About us..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>
				
				<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>
				
				<p>About me..Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.</p>
				
	</div>
<?php } } else { header("Location:404.php");} ?>
		

</div><?php include 'inc/sidebar.php' ;?>
<?php include 'inc/footer.php' ;?>