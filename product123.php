<section class="product_info margin_top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-5 product_img">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img onclick="preview()" src="./assets/img/Sunsilk_pink.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img onclick="preview()" src="./assets/img/Sunsilk_pink_650.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img onclick="preview()" src="./assets/img/Sunsilk_black_650.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="cart_btn">
                    <div class="btn">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p>Add to Cart</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-7 product_info">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="product_name">Sunsilk Thick & Long Shampoo Bottle</h1>
                    </div>
                    <div class="col-lg-12">
                        <div class="cc">
                            <p class="c1">Quantity</p>
                            <div class="btn quantity">650ml</div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="cc cc1">
                            <div class="price">₹549</div>
                            <div class="mrp mx-2">₹800</div>
                            <div class="discount">31%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function preview() {
        document.getElementById("img_preview").style.display = "block";
    }

    function hide() {
        document.getElementById("img_preview").style.display = "none";
    }
</script>