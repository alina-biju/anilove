<div>
    <a href="form.php" id="up"><button>Upload</button></a>
</div>

<form action="" method="post">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>Image</th>
                <th>Comments</th>
            </tr>
        </thead>
        <tbody>
            
        <?php 
          $sql = "SELECT * FROM images ORDER BY id DESC";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0) {
          	while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
             	<td><img class='img-responsive' alt='image' src="uploads/<?=$images['image_url']?>"></td>
                <td><?php $images['comments']?></td>
             </div>
          		
    <?php } }?>

        </tbody>
    </table>
</form>