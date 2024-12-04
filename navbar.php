<section class="my_nav">
            <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3 cc">
                            <a href="index">
                                <h1 class="store_name">Anil Provision Store</h1>
                            </a>
                        </div>

                        <div class="col-lg-6 cc" >
                            <form action="conn.php" method="post">
                                <div class="c1">                                    
                                    <input id="search_input" type="search" placeholder="Search for products" name="search">
                                    <i id="search" class="fa fa-search"></i>
                                    <input id="search_btn" hidden type="submit" name="search_submit">
                                </div>
                            </form>   
                            <script>
                                document.getElementById("search_input").addEventListener("keypress",function(event){
                                    if(event === "Enter") {
                                        event.preventDefault();
                                        document.getElementById("search_btn").click;
                                    }
                                })
            
                            </script>
                        </div>
        
                        <div class="col-lg-3 c2">
                            <?php if(isset($_SESSION['login'])){
                                    echo '<div class="icons">
                                        <i id="nav_icons" class="fa-regular fa-heart"></i>
                                        <i id="nav_icons" class="fa-solid fa-cart-shopping"></i>
                                        <i onclick="display()" id="nav_icons" class="fa-solid fa-bars"></i>
                                    </div>';
                                }

                                else {
                                    echo'<div class="center">
                                    <ul>
                                        <li onclick="abc(0)" data-bs-toggle="modal" data-bs-target="#exampleModal">Login</li>
                                        <li>|</li>
                                        <li onclick="abc(1)" data-bs-toggle="modal" data-bs-target="#exampleModal">Register</li>
                                    </ul>
                                </div>';
                                }
                             ?>
                        </div>
                        
                    </div>
                </div>

                <div id="more_info" class="more_info display_none">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cc">
                                    <p class="txt">My Profile</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="cc">
                                    <p class="txt">Orders</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="cc">
                                    <p class="txt">Wishlist</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="cc">
                                    <p class="txt">Categories</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="cc">
                                    <p class="txt">Contact Us</p>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <a href="logout.php"><div class="btn btn-danger">Logout</div></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <script> 

                function display(){
                    var a = document.getElementById("more_info").className;

                    if (a == "more_info display_none"){
                        document.getElementById("more_info").className = "more_info display_block";
                    }
                    else {
                        document.getElementById("more_info").className = "more_info display_none";
                    }
                }

            </script>

            <!-- Modal -->
        <section class="my_modal">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="container-fluid">
                    <div class="row">
                        <div onclick="abc(0)" class="col-6 cc_modal" id="login">
                            <p>Login</p>
                        </div>
                        <div onclick="abc(1)" class="col-6 cc_modal">
                            <p>Register</p>
                        </div>
                        <form action="conn.php" method="post" class="needs-validation">
                            <div class="col-lg-12 c1">
                                <div class="row">
                                    <div class="col-6 cc">
                                        <input name="f_name" class="form-control f_name" type="text" placeholder="First name">                
                                    </div>
                                    <div class="col-6 cc1">
                                        <input name="l_name" class="form-control l_name" type="text" placeholder="Last name">                
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 c2 cc2">
                                <input name="phone" class="form-control phone" type="number" placeholder="Phone number">
                            </div>
                            <div class="col-12 c2 cc2">
                                <input name="email" class="form-control email" type="email" placeholder="E-mail">
                            </div>
                            <div class="col-12 c3 cc2">
                                <input name="pass" class="form-control pass" type="password" placeholder="Password">                
                            </div>
                            <div class="col-12 c4 cc2">
                                <input name="cnf_pass" class="form-control cnf_pass" type="password" placeholder="Confirm Password">
                            </div>
                            <div class="col-12 c5">
                                <p>
                                    By clicking below, you agree to our <a href="#">Terms and Conditions</a>
                                </p>
                            </div>
                            <div class="col-12 c6">
                                <input id="input_log" name="register" type="submit" value="Register" class="form-control reg_log">
                            </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </section>
            
            <script>
                function abc(i) {
                    document.getElementsByClassName('cc_modal')[0].style.background = "#eaeaea"
                    document.getElementsByClassName('cc_modal')[1].style.background = "#eaeaea"
                    document.getElementsByClassName('cc_modal')[0].style.color = "#999"
                    document.getElementsByClassName('cc_modal')[1].style.color = "#999"
            
                    document.getElementsByClassName('cc_modal')[i].style.background = "#fff"
                    document.getElementsByClassName('cc_modal')[i].style.color = "#5cb635"
            
                    if (i == 0 ) {
                        document.getElementsByClassName('f_name')[0].style.display = "none"
                        document.getElementsByClassName('l_name')[0].style.display = "none"
                        document.getElementsByClassName('email')[0].style.display = "none"
                        document.getElementsByClassName('cnf_pass')[0].style.display = "none"
                        document.getElementsByClassName('reg_log')[0].value ="Login"
                        document.getElementById('input_log').name = "login"
                    }
            
                    else {
                        document.getElementsByClassName('f_name')[0].style.display = "block"
                        document.getElementsByClassName('l_name')[0].style.display = "block"
                        document.getElementsByClassName('email')[0].style.display = "block"
                        document.getElementsByClassName('cnf_pass')[0].style.display = "block"
                        document.getElementsByClassName('reg_log')[0].value ="Register"
                        document.getElementById('input_log').name = "register"
                    }
                    
                }
            </script>