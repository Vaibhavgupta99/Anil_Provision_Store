<div class="margin_top">
  <div class="upload_btn">
    <a href="?upload"><div class="btn btn-success my-3">Upload</div></a>
  </div>
  <section class="offer_wall">
    <div class="cc">
      <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active img" data-bs-interval="3000">
            <img src="./assets/img/bbd.png" class="d-block w-100" alt="First slide">
          </div>
          <div class="carousel-item img" data-bs-interval="3000">
            <img src="./assets/img/bbdlive.png" class="d-block w-100" alt="Second slide">
          </div>
          <div class="carousel-item img" data-bs-interval="3000">
            <img src="./assets/img/realme-8i.png" class="d-block w-100" alt="Third slide">
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
    </div>
  </section>

  <section class="category">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 p-0">
          <h2 class="txt1">Categories</h2>
        </div>

        <div class="col-lg-12">
        <div class="owl-carousel">
            <div class="item">
              <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <img src="./assets/img/category-atta-rice-dal.jpg" alt="">
                </div>
              </div>              
              <div class="name">Atta, Rice & Dal</div>
              </div>
            </div>
            <div class="item">
              <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <img src="./assets/img/category-bakery-biscuits.jpg" alt="">
                </div>
              </div>
              <div class="name">Bakery & Biscuits</div>
              </div>
            </div>
            <div class="item">
              <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <img src="./assets/img/category-instant-food.jpg" alt="">
                </div>
              </div>
              <div class="name">Instant Food</div>
              </div>
            </div>
            <div class="item">
              <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <img src="./assets/img/category-tea-coffee-drinks.jpg" alt="">
                </div>
              </div>
              <div class="name">Tea, Coffee & Drinks</div>
              </div>
            </div>
            <div class="item">
              <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <img src="./assets/img/category-cleaning-essentials" alt="">
                </div>
              </div>
              <div class="name">Cleaning Essentials</div>
              </div>
            </div>
            <div class="item">
              <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <img class="img_icon" src="./assets/img/grid_plus_icon.png" alt="">
                </div>
              </div>
              <div class="name">More Categories</div>
              </div>
            </div>            
          </div>
        </div>

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
                    items: 2
                  },
                  600: {
                    items: 4
                  },
                  1000: {
                    items: 6
                  }
                }
              })
            })
          </script>

      </div>
    </div>
  </section>

  <section class="products">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 p-0">
          <h2 class="txt1">Products</h2>
        </div>
        <?php 
          for ($i=0; $i < 18; $i++) { 
            echo '<div class="col-lg-2">
            <div class="card">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sp">
                    <i class="fa-regular fa-heart"></i>
                  </div>
                </div>
                <a href="?product">
                <div class="col-lg-12 cc">
                  <img src="./assets/img/category-cleaning-essentials" alt="">
                </div>
                <div class="col-lg-12">
                  <p class="name">Surf excel</p>
                </div>
                <div class="col-lg-12">
                  <div class="c1">
                    <p class="price">₹130</p>
                    <p class="mrp">₹136</p>
                    <p class="discount">5%</p>
                  </div>
                </div>
                </a>
                <div class="col-lg-5 p-0">
                  <div class="c2">
                    <div class="btn qty">1Kg</div>
                  </div>
                </div>
                <div class="col-lg-7 p-0">
                  <div class="c3">
                    <div class="btn cart">Add to Cart</div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>';
          }
        ?>
      </div>
    </div>
  </section>

  <section class="facilities">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3 cc">
          <div class="row">
            <div class="col-lg-12">
              <img src="./assets/img/clock.svg" alt="">
            </div>
            <div class="col-lg-12">
              <div class="tagline">Same Day Delivery</div>
            </div>
            <div class="col-lg-12">
              <div class="desc">Get your order delivered to your doorstep at the earliest with the Anil Provision Store's same day delivery facility.</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 cc">
          <div class="row">
            <div class="col-lg-12">
              <img src="./assets/img/gift.svg" alt="">
            </div>
            <div class="col-lg-12">
              <div class="tagline">Best Prices & Offers</div>
            </div>
            <div class="col-lg-12">
              <div class="desc">Cheaper prices than any shop or supermarket. Get best prices & offers.</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 cc">
          <div class="row">
            <div class="col-lg-12">
              <img src="./assets/img/package.svg" alt="">
            </div>
            <div class="col-lg-12">
              <div class="tagline">Wide Assortment</div>
            </div>
            <div class="col-lg-12">
              <div class="desc">Choose from 5000+ products across food, personal care, household, bakery & other categories.</div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 cc">
          <div class="row">
            <div class="col-lg-12">
              <img src="./assets/img/refresh-cw.svg" alt="">
            </div>
            <div class="col-lg-12">
              <div class="tagline">Easy Returns</div>
            </div>
            <div class="col-lg-12">
              <div class="desc">Not satisfied with a product? Return it & get instant refund. No questions asked policy.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="reviews">
    <div class="google_reviews">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 offset-lg-3 cc">
              <a href="https://g.page/r/CdEtAWUWzDemEBM/review" target="_blank">
                <img src="./assets/img/Google-Review-Logo.png" alt="">
                <div class="review_count">
                  <p class="rating c1">4.4 Stars</p>
                  <p class="c1 c2">|</p>
                  <p class="peoples c1">104 Reviews</p>
                </div>
              </a>
          </div>
          <div class="col-lg-3 p-3 cc">
            <a href="https://g.page/r/CdEtAWUWzDemEBM/review" target="_blank">
              <img src="./assets/img/Google-Review-Icon_round-removebg-preview.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12 p-0">
          <h2 class="txt1">Contact Us</h2>
        </div>
        <div class="col-lg-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3629.6485287837!2d81.29048777521288!3d24.532241378145056!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39845bb5987d63d5%3A0xa637cc1665012dd1!2sAnil%20Provision%20Store!5e0!3m2!1sen!2sin!4v1714810355023!5m2!1sen!2sin" width="100%" height="450" style="border: 1px solid rgba(0, 0, 0, 0.175); border-radius:3px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-6">
          <div class="cc">
            <div class="col-lg-12 num_head">
              <h5 >Phone Numbers</h5>
            </div>
            <div class="col-lg-12 numbers">
              <img class="w_icon" src="./assets/img/WhatsApp_icon.png" alt="">
              <h5 class="num">9752711600</h5>
            </div>
            <div class="col-lg-12 numbers">
              <img class="w_icon" src="./assets/img/WhatsApp_icon.png" alt="">
              <h5 class="num">8827906959</h5>
            </div>
            <div class="col-lg-12 feedback_head">
              <h5 class="feedback">Feedback</h5>
            </div>
            <div class="col-lg-12 feedback_box">
              <textarea placeholder="Write us a Feedback" name="feedback" id="" rows="9"></textarea>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>