<?php 
// Include the database configuration file  
require_once 'config.php'; 

// Get image data from database 
$result = $connection->query("SELECT image FROM images "); 
?>

<?php if($result->num_rows >= 0){ ?> 
    <div class="gallery"> 
        <?php while($row = $result->fetch_assoc()){ ?> 
            <img src="data:image/png;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" /> 
        <?php } ?> 
    </div> 
<?php }else{ ?> 
    <p class="status error">Image(s) not found...</p> 
<?php } ?>