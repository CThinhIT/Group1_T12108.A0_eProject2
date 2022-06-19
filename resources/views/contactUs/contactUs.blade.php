<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Us</title>
        <link rel="stylesheet" href="{{asset('css/contactUs.css')}}" />
        <link rel="stylesheet" href="{{asset('css/animate.css')}}" />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
            integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        <link
            href="https://unpkg.com/aos@2.3.1/dist/aos.css"
            rel="stylesheet"
        />
    </head>
    <body class="bodyCont">
        <div class="video">
            <video autoplay loop muted id="myVideo">
                <source
                    type="video/mp4"
                    src="{{asset('assets/video/contact.mp4')}}"
                />
            </video>
            <div class="textBox">
                <h3 class="subPrimary">
                    <p class="headingMain wow animate__zoomInUp">Contact Us</p>
                    <p class="subVideo wow animate__zoomInUp">
                        We are here to listen to you
                    </p>
                </h3>
            </div>
        </div>
        <br /><br />
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3
                        style="color: white"
                        class="wow bounceInDown"
                        data-wow-delay="1s"
                    >
                        ADDRESS
                    </h3>
                    <h3
                        style="color: #8a38f5"
                        class="wow bounceInDown"
                        data-wow-delay="1s"
                    >
                        <u>INFORMATION</u>
                    </h3>
                    <div class="add-info">
                        <h6 class="wow bounceInLeft" data-wow-delay="2s">
                            590 CMT8 Street, Ward 11, District 3. Ho Chi Minh
                            city.
                        </h6>
                    </div>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15677.277406156589!2d106.65751952421206!3d10.786834677030395!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ed2392c44df%3A0xd2ecb62e0d050fe9!2zRlBUIEFwdGVjaCBIQ00gLSBI4buHIFRo4buRbmcgxJDDoG8gVOG6oW8gTOG6rXAgVHLDrG5oIFZpw6puIFF14buRYyBU4bq_IChTaW5jZSAxOTk5KQ!5e0!3m2!1svi!2s!4v1635179994748!5m2!1svi!2s"
                        width="300"
                        height="300"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        class="wow bounceInLeft"
                        data-wow-delay="2s"
                    ></iframe>
                </div>

                <div class="col-sm-6">
                    <h3  class="wow bounceInDown" data-wow-delay="1s" style="color: white">GET IN TOUCH</h3>
                    <h3  class="wow bounceInDown" data-wow-delay="1s" style="color: #8a38f5"><u>INFORM US</u></h3>
                    <input
                        type="text"
                        placeholder="Your name"
                        class="add-info form-control wow bounceInRight"
                        data-wow-delay="2s"
                        required
                    />
                    <div class="row">
                        <div class="col-sm-3">
                            <input
                                type="email"
                                placeholder="Email"
                                class="add-info form-control wow bounceInRight"
                                data-wow-delay="2.5s"
                                required
                            />
                        </div>
                        <div class="col-sm-3">
                            <input
                                type="text"
                                placeholder="Subject"
                                class="add-info form-control wow bounceInRight"
                                data-wow-delay="2.7s"
                                required
                            />
                        </div>
                    </div>
                    <div class=" yourFb">
                      <div class="commentContact">
                        <textarea class="comment wow bounceInDown" data-wow-delay="3s"></textarea>
                      </div>
                      <div class="sendContact">
                        <button type="submit" class="btn btn-outline-info wow bounceInDown">
                          Submit Now
                        </button>
                </div>
            </div>
        </div>
        <script src="{{asset('js/wow.min.js')}}"></script>
        <script>
            new WOW().init();
        </script>
    </body>
</html>
