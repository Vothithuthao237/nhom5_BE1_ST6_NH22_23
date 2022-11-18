<div class = "row">
 <?php
 if(isset($_GET['keyword'])):
    $keyword = $_GET['keyword'];
    $search = $product->search($keyword);
    foreach($search as $value):
?>   
<!-- product-->
<div class="col-md-4 col-xs-6">
    <div class="product">
        <div class="product-img">
        <img src="./img/ <?php echo $value['image'] ?>" alt="">
        <div class="product-label">
            <span class="sale">
                -30%
            </span>
            <span class="new">New</span>
        </div>
        </div>
        <div class="product-body">
            <p class="product-category">Category</p>
            <h3 class="product-name"><a href ="#"><?php echo $value['name'] ?> </a></h3>
            <h4 class="product-price"><?php echo $value['name']?> </h4>
            <div class="product-rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <div class="product-btns">
                <button class="add-to-wishlist"><i class="fa fa-heart-o"></i></button>
                <button class="add-to-compare"><i class="fa fa-exchange"></i></button>
                <button class="quick-view"><i class="fa fa-eye"></i></button>
            </div>
        </div>
        <div class="add-to-cart">
             <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>add</button>
        </div>
    </div>
</div>
<?php
endforeach; endif;
?>