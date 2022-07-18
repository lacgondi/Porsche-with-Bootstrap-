<?php include('inc/header.php'); ?>

<?php
$sql = 'SELECT * FROM cars';
$result = mysqli_query($connect, $sql);
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<div class="container-fluid" style="margin-top:50px">
    <h3 class="h3">Porsche 911</h3>
    <div class="row">
        <?php if (empty($output)) : ?>
            <p class="mt-3">There are no cars for sale</p>
        <?php endif; ?>
        <?php foreach ($output as $item) : ?>
            <div class="col-md-3 col-sm-6" id="product_card">
                <div class="product-grid9">
                    <div class="product-image9">
                        <a href="#">
                            <img class="pic-1" src="<?php echo '/images/car' . $item['index']; ?>.jpg">
                            <ul class="pic-2">
                                <li><?php echo $item['consumption']; ?> l/100 km</li>
                                <li><?php echo $item['accel']; ?> </br>Gyorsulás 0 - 100 km/h</li>
                                <li><?php echo $item['hp']; ?> Le</li>
                                <li><?php echo $item['topspeed']; ?> Végsebesség</li>
                                <li><?php echo $item['width']; ?> mm Szélesség</li>
                                <li><?php echo $item['length']; ?> Hossz</li>
                            </ul>
                        </a>
                    </div>
                    <div class="product-content">
                        <h3 class="title"><?php echo $item['name'] ?></h3>
                        <div class="price"><?php echo $item['price']; ?> EUR</div>
                        <a class="add-to-cart" href="kapcsolat.php">Vásárlás</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>

<?php include('inc/footer.php'); ?>

</body>

</html>