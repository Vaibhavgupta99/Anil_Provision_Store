<section class="product_info">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 product_img">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="img">
                            <img id="big_img" src="./assets/img/Vatika_650ml.jpg" alt="">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="owl-carousel">
                            <div onclick="show_img(0)" class="item">
                                <div class="img_small">
                                    <img class="images" src="./assets/img/Vatika_650ml.jpg" alt="">
                                </div>
                            </div>
                            <div onclick="show_img(1)" class="item">
                                <div class="img_small">
                                    <img class="images" src="./assets/img/Tresemme_red.jpg" alt="">
                                </div>
                            </div>
                            <div onclick="show_img(2)" class="item">
                                <div class="img_small">
                                    <img class="images" src="./assets/img/sunsilk_pink.jpg" alt="">
                                </div>
                            </div>
                            <div onclick="show_img(3)" class="item">
                                <div class="img_small">
                                    <img class="images" src="./assets/img/sunsilk_black_650.jpg" alt="">
                                </div>
                            </div>
                            <div onclick="show_img(4)" class="item">
                                <div class="img_small">
                                    <img class="images" src="./assets/img/Tresemme_black_1l.jpg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="pro_name">Vatika Shampoo Bottle 650ml</h2>
                    </div>
                    <div class="col-lg-12">
                        <div class="cc">
                            <div class="price">₹549</div>
                            <div class="mrp mx-2">₹800</div>
                            <div class="discount">31%</div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <hr>
                    </div>
                    <div class="col-lg-12">
                        <div class="cc">
                            <div class="qty">650ml</div>
                            <div class="qty">1L</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="btn btn_cart">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <p class="p_cart">Add to Cart</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="btn btn_cart btn_wishlist">
                        <i class="fa-regular fa-heart"></i>
                            <p class="p_cart">Add to Wishlist</p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

            $(document).ready(function() {
              var owl = $('.owl-carousel');
              owl.owlCarousel({
                items: 6,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true,
                responsive: {
                  0: {
                    items: 4
                  },
                  600: {
                    items: 4
                  },
                  1000: {
                    items: 4
                  }
                }
              })
            })

    function show_img(i) {

        if(i == 0){
            var img_src = document.getElementsByClassName("images")[4].src;
            document.getElementById("big_img").src = img_src;
        }
        else if (i == 1){
            var img_src = document.getElementsByClassName("images")[0].src;
            document.getElementById("big_img").src = img_src;
        }
        else if (i == 2){
            var img_src = document.getElementsByClassName("images")[1].src;
            document.getElementById("big_img").src = img_src;
        }
        else if (i == 3){
            var img_src = document.getElementsByClassName("images")[2].src;
            document.getElementById("big_img").src = img_src;
        }
        else if (i == 4){
            var img_src = document.getElementsByClassName("images")[3].src;
            document.getElementById("big_img").src = img_src;
        }
        
    }
</script>