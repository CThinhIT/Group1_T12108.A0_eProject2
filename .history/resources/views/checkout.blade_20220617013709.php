<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{asset('css/checkout/checkout.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
  .body{
    background-image: url({{asset('assets/images/backgrounds/background_login.jpg')}});
    background-repeat:no-repeat;
    background-size: cover;
  }
  .card{
    background-color:rgba(143, 140, 140, 0.5);
  }
  .narbar{
    background-color:rgba(158, 108, 158, 0.5);
  }
  .navbar-nav{
    margin-left: 55rem;
  }
  .card-check{
    background-color: rgb(109, 108, 108);
  }
  .btn{
    background-color: rgb(77, 75, 77);
  }
</style>
<body>
  <div class="head">
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand"><img src="{{asset('assets/images/logos/logo_web/logo.png')}}" alt=""></a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav">
                  <a href="#" class="nav-item nav-link"><i class="fas fa-user-alt"></i></a>
                  <a href="#" class="nav-item nav-link active"><i class="fas fa-bell"></i></a>
                  <a href="#" class="nav-item nav-link"><i class="fa fa-sign-in"></i></a>
                </div>
            </div>
        </div>
    </nav>
    </header>
  </div>
  <div class="body">
    <br>
    <h4 style="text-align:center;font-size: 40px;color: white;">Check out</h4>
    <div class="container">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col">
            <div class="card">
              <div class="card-body p-4">
    
                <div class="row">
    
                  <div class="col-lg-7">
                    <h5 class="mb-3"><a href="#!" class="text-body"><i
                          class="fas fa-long-arrow-alt-left me-2"></i>Continue shopping</a></h5>
                    <hr>
    
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <div>
                        <p class="mb-1">Shopping cart</p>
                        <p class="mb-0">You have 4 items in your cart</p>
                      </div>
                      <div>
                        <p class="mb-0"><span class="text-muted">Sort by:</span> <a href="#!"
                            class="text-body">price <i class="fas fa-angle-down mt-1"></i></a></p>
                      </div>
                    </div>
    
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <div>
                              <img
                                src="{{asset('assets/images/product-img/gamePad/gamePad1/gamePadDetail/xbox-black.png')}}"
                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="ms-3">
                              <h5>Product Name</h5>
                              <p class="small mb-0">Product type</p>
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                              <h5 class="fw-normal mb-0">2</h5>
                            </div>
                            <div style="width: 80px;">
                              <h5 class="mb-0">$900</h5>
                            </div>
                            <a href="#!" style="color:black"><i class="fas fa-trash-alt"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
    
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <div>
                              <img
                                src="../image/m330-black-gallery-1.webp"
                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="ms-3">
                              <h5>product name</h5>
                              <p class="small mb-0">product type</p>
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                              <h5 class="fw-normal mb-0">2</h5>
                            </div>
                            <div style="width: 80px;">
                              <h5 class="mb-0">$900</h5>
                            </div>
                            <a href="#!" style="color:black"><i class="fas fa-trash-alt"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
    
                    <div class="card mb-3">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <div>
                              <img
                                src="../image/m350-blue-grey-gallery-01.webp"
                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="ms-3">
                              <h5>product name</h5>
                              <p class="small mb-0">product type</p>
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                              <h5 class="fw-normal mb-0">1</h5>
                            </div>
                            <div style="width: 80px;">
                              <h5 class="mb-0">$1199</h5>
                            </div>
                            <a href="#!" style="color:black"><i class="fas fa-trash-alt"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
    
                    <div class="card mb-3 mb-lg-0">
                      <div class="card-body">
                        <div class="d-flex justify-content-between">
                          <div class="d-flex flex-row align-items-center">
                            <div>
                              <img
                                src="../image/m590-gallery-graphite-1.webp"
                                class="img-fluid rounded-3" alt="Shopping item" style="width: 65px;">
                            </div>
                            <div class="ms-3">
                              <h5>Product Name</h5>
                              <p class="small mb-0">Product type</p>
                            </div>
                          </div>
                          <div class="d-flex flex-row align-items-center">
                            <div style="width: 50px;">
                              <h5 class="fw-normal mb-0">1</h5>
                            </div>
                            <div style="width: 80px;">
                              <h5 class="mb-0">$1799</h5>
                            </div>
                            <a href="#!" style="color:black"><i class="fas fa-trash-alt"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
    
                  </div>
                  <div class="col-lg-5">
    
                    <div class="card-check rounded-3">
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                          <h5 class="mb-0">Card details</h5>
                        </div>
    
                        <p class="small mb-2">Card type</p>
                        <a href="#!" type="submit" class="text-black"><i
                            class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                        <a href="#!" type="submit" class="text-black"><i
                            class="fab fa-cc-visa fa-2x me-2"></i></a>
                        <a href="#!" type="submit" class="text-black"><i
                            class="fab fa-cc-amex fa-2x me-2"></i></a>
                        <a href="#!" type="submit" class="text-black"><i class="fab fa-cc-paypal fa-2x"></i></a>
    
                        <form class="mt-4">
                          <div class="form-outline form-white mb-4">
                            <input type="text" id="typeName" class="form-control form-control-lg" siez="17"
                              placeholder="Cardholder's Name" />
                            <label class="form-label" for="typeName">Cardholder's Name</label>
                          </div>
    
                          <div class="form-outline form-white mb-4">
                            <input type="text" id="typeText" class="form-control form-control-lg" siez="17"
                              placeholder="1234 5678 9012 3457" minlength="19" maxlength="19" />
                            <label class="form-label" for="typeText">Card Number</label>
                          </div>
    
                          <div class="row mb-4">
                            <div class="col-md-6">
                              <div class="form-outline form-white">
                                <input type="text" id="typeExp" class="form-control form-control-lg"
                                  placeholder="MM/YYYY" size="7" id="exp" minlength="7" maxlength="7" />
                                <label class="form-label" for="typeExp">Expiration</label>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-outline form-white">
                                <input type="password" id="typeText" class="form-control form-control-lg"
                                  placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3" />
                                <label class="form-label" for="typeText">Cvv</label>
                              </div>
                            </div>
                          </div>
    
                        </form>
    
                        <hr class="my-4">
    
                        <div class="d-flex justify-content-between">
                          <p class="mb-2">Subtotal</p>
                          <p class="mb-2">$4798.00</p>
                        </div>
    
                        <div class="d-flex justify-content-between">
                          <p class="mb-2">Shipping</p>
                          <p class="mb-2">$20.00</p>
                        </div>
    
                        <div class="d-flex justify-content-between mb-4">
                          <p class="mb-2">Total(Incl. taxes)</p>
                          <p class="mb-2">$4818.00</p>
                        </div>
    
                        <button type="button" class="btn btn-block btn-lg">
                          <div class="d-flex justify-content-between">
                            <span style="color:white">$4818.00</span>
                            <span style="color:white">Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                          </div>
                        </button>
    
                      </div>
                    </div>
    
                  </div>
    
                </div>
    
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <!-- Footer -->
    <footer class="bg-dark text-white">
        <!-- Grid container -->
        <div class="row">
            <div class="col-2">
                <div class="container text-start">
                    <img src={{asset('assets/images/img/sidebar/logo_gamegear1.png')}} alt="">
                </div>
            </div>
            <div class="col-8">
                <div class="container p-4 text-center" style="padding-top: 10px">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-outline-light btn-floating m-1" href="mailto:congthinh.0311@gmail.com" role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Github -->
                        <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"><i class="fab fa-github"></i></a>
                    </section>
                    <!-- Section: Social media -->

                    <!-- Section: Form -->

                    <!-- Section: Form -->

                    <!-- Section: Text -->
                    <section class="mb-4">
                        <p>Hotline: 210.820.03</p>
                        <p>Address: 590 CMT8, Ward 11, District 3, Ho Chi Minh City.</p>
                    </section>
                </div>
                <!-- Grid container -->

                <!-- Copyright -->

            </div>
            <div class="col-2"></div>


        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
            © 2022 Copyright: Developed by group 1, class T1.2108.A0
        </div>
        <!-- Copyright -->
    </footer>
</div>
<!-- Footer End -->
</body>
</html>