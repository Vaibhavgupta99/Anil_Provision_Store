<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="./assets/css/owl.carousel.min.css">
    <!-- <link rel="stylesheet" href="./assets/css/owl.theme.default.min.css"> -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- <script src="jquery.min.js"></script>
    <script src="owlcarousel/owl.carousel.min.js"></script> -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="./assets/js/owl.carousel.min.js"></script>

    <style>
        .item {
            background: red;
            height: 230px;
            /* width: 200px; */
        }
    </style>

</head>
<body>

<section id="demos">

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
        <div class="owl-carousel">
            <div class="item">
                <div class="card">
                    <img src="./assets/img/category-atta-rice-dal.jpg" alt="">
                    <div class="name">Atta, Rice & Dal</div>
                </div>
            </div>
            <div class="item">
              <h4>2</h4>
            </div>
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


    
    

</body>
</html>