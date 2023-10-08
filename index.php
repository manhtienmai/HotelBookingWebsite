<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JW MARIOTT</title>
    <?php include('inc/links.php') ; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <style>
      .availability-form {
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }

      @media screen and(max-width: 1575px) {
        .availability-form {
          margin-top: 25px; 
          padding: 0 35px; 
        }
      }
    </style>
  </head>
  <body class="bg-light">

  <?php require('inc/header.php'); ?>;
    <!-- Carousel -->

    <div class="container-fluid px-lg-4 mt-4">
      <div class="swiper swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/carousel/IMG_40905.png" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/IMG_15372.png" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/IMG_55677.png" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/IMG_62045.png" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/IMG_93127.png" class="w-100 d-block">
          </div>
          <div class="swiper-slide">
            <img src="images/carousel/IMG_99736.png" class="w-100 d-block">
          </div>
        </div>
      </div>
    </div>

      <!-- check available room -->

      <div class="container availability-form">
        <div class="row">
          <div class="col-lg-12 bg-white shadow roinded p-4">
            <h5 class="mb-4">Check booking availability</h5>
            <form action="">
              <div class="row align-items-end">
                <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500;">Check In</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500;">Check-out</label>
                  <input type="date" class="form-control shadow-none">
                </div>
                <div class="col-lg-3 mb-3">
                  <label class="form-label" style="font-weight: 500;">Adult</label>
                  <select class="form-select shadow-none">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-2 mb-3">
                  <label class="form-label" style="font-weight: 500;">Children</label>
                  <select class="form-select shadow-none">
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                </div>
                <div class="col-lg-1 mb-3 mt-4">
                  <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    <!-- Our Rooms -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR ROOMS</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top">
            <div class="card-body">
              <h5>Simple Room</h5>
              <h6 class="mb-4">$1000 per night</h6>
              <div class="feature mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofa
                </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Romm heater
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  PC
                </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Chidren
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top">
            <div class="card-body">
              <h5>Simple Room</h5>
              <h6 class="mb-4">$1000 per night</h6>
              <div class="feature mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofa
                </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Romm heater
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  PC
                </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Chidren
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 my-3">

          <div class="card border-0 shadow" style="max-width: 350; margin: auto;">
            <img src="images/rooms/1.jpg" class="card-img-top">
            <div class="card-body">
              <h5>Simple Room</h5>
              <h6 class="mb-4">$1000 per night</h6>
              <div class="feature mb-4">
                <h6 class="mb-1">Features</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Rooms
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Bathroom
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  1 Balcony
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  2 Sofa
                </span>
              </div>
              <div class="facilities mb-4">
                <h6 class="mb-1">Facilities</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Wifi
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Television
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  Romm heater
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  PC
                </span>
              </div>
              <div class="guests mb-4">
                <h6 class="mb-1">Guests</h6>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  5 Adults
                </span>
                <span class="badge rounded-pill bg-light text-dark text-wrap">
                  4 Chidren
                </span>
              </div>
              <div class="rating mb-4">
                <h6 class="mb-1">Rating</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
              <div class="d-flex justify-content-evenly mb-2">
                <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
                <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Rooms</a>
        </div>
      </div>
    </div>

    <!-- Our Facilities -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> OUR FACILITIES</h2>
    <div class="container">
      <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
          <img src="images/facilities/IMG_43553.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
          <img src="images/facilities/IMG_27079.svg" width="80px">
          <h5 class="mt-3">Room heater</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
          <img src="images/facilities/IMG_27079.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
          <img src="images/facilities/IMG_27079.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-2 col-md-2 text-center bg-white rounded shadow my-3 py-4">
          <img src="images/facilities/IMG_27079.svg" width="80px">
          <h5 class="mt-3">Wifi</h5>
        </div>
        <div class="col-lg-12 text-center mt-5">
          <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
        </div>
      </div>
    </div>

    <!-- Reviews -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> REVIEWS</h2>

    <div class="container">
      <div class="swiper swiper-testimonials">
        <div class="swiper-wrapper mb-1">

          <div class="swiper-slide bg-white">
            <div class="profile d-flex align-items-center p-4">
              <img src="images/facilities/IMG_47816.svg" width="30px">
              <h6 class="m-0 ms-2">Random user</h6>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Rerum odit obcaecati maiores recusandae ratione excepturi minus deleniti expedita necessitatibus voluptate quia animi sed cumque, 
              earum exercitationem sequi officia labore qui.
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div> 
          </div>
          <div class="swiper-slide bg-white">
            <div class="profile d-flex align-items-center p-4">
              <img src="images/facilities/IMG_47816.svg" width="30px">
              <h6 class="m-0 ms-2">Random user</h6>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Rerum odit obcaecati maiores recusandae ratione excepturi minus deleniti expedita necessitatibus voluptate quia animi sed cumque, 
              earum exercitationem sequi officia labore qui.
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div> 
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="images/facilities/IMG_47816.svg" width="30px">
              <h6 class="m-0 ms-2">Random user</h6>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Rerum odit obcaecati maiores recusandae ratione excepturi minus deleniti expedita necessitatibus voluptate quia animi sed cumque, 
              earum exercitationem sequi officia labore qui.
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div> 
          </div>
          <div class="swiper-slide bg-white p-4">
            <div class="profile d-flex align-items-center p-4">
              <img src="images/facilities/IMG_47816.svg" width="30px">
              <h6 class="m-0 ms-2">Random user</h6>
            </div>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. 
              Rerum odit obcaecati maiores recusandae ratione excepturi minus deleniti expedita necessitatibus voluptate quia animi sed cumque, 
              earum exercitationem sequi officia labore qui.
            </p>
            <div class="rating">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </div> 
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know more</a>
      </div>
    </div>

    <!-- Reach us -->

    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font"> REACH US</h2>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
          <iframe height="320px" class="w-100 rounded" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.619997508281!2d105.78008017498027!3d21.00786438063624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acacbb621a31%3A0x6b9d241f84cd960!2sJW%20Marriott%20Hotel%20Hanoi!5e0!3m2!1sen!2s!4v1695991122665!5m2!1sen!2s" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="bg-white p-4 rounded mb-4">
            <h5>Call us</h5>
            <a href="tel: +033699999" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i>0999999999
            </a>
            <br>
            <a href="tel: +033699999" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i>08888888888
            </a>
          </div>
          <div class="bg-white p-4 rounded mb-4">
            <h5>Follow us</h5>
            <a href="" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-twitter me-1"></i> Twitter
              </span>
            </a>
            <br>
            <a href="" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-facebook me-1"></i> Facebook
              </span>
            </a>
            <br>
            <a href="" class="d-inline-block mb-3">
              <span class="badge bg-light text-dark fs-6 p-2">
                <i class="bi bi-instagram me-1"></i> Instagram
              </span>
            </a>
            <br>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php include('inc/footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>    
    <script>
      var swiper = new Swiper(".swiper-container", {
        spaceBetween: 30,
        effect: "fade",
        loop: true,
        autoplay: {
          delay: 2000,
          disableOnInteraction: false,
        }
      });
      var swiper = new Swiper(".swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1024: {
          slidesPerView: 3,
        },
      }
    });
    </script>
  </body>
</html>