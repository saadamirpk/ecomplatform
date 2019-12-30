<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body >
<div class="container">
  <div class="row pstart">

    <?php
    foreach ($prod->result() as $row) { ?>

  <div class="card" style="width: 18rem;">
    <img src="<?php echo base_url().$row->imagepath ?>" class="card-img-top" alt="image of <?php echo $row->title ?>">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row->title ?></h5>
      <p class="card-text"><?php echo $row->description ?></p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">RS <?php echo $row->price ?></li>
      <li class="list-group-item"><?php echo $row->color ?></li>
      <li class="list-group-item"><?php echo $row->size ?></li>
    </ul>
    <div class="card-body">
      <a href="<?php echo base_url().'buy/'.$row->id?>" class="card-link">Buy Now</a>
      <a href="<?php echo base_url().'search/category/'.$row->category ?>" class="card-link"><?php echo $row->category ?></a>
    </div>
  </div>

  <?php } ?>

</div>
</div>

</body>
</html>
