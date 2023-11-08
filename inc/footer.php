<div class="container-fluid bg-white mt-5">
  <div class="row">
    <div class="col-lg-4 p-4">
      <h3 class="h-font fw-bold fs-3 mb-2">JW MARRIOTT</h3>
      <p>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
        Neque praesentium voluptates repudiandae. Eaque rem, 
        eos hic blanditiis consectetur ratione totam veniam unde! Ut placeat cumque fugit vel deserunt nemo tenetur.
      </p>
    </div>
    <div class="col-lg-4 p-4">
      <h5 class="mb-3">Links</h5>
      <a href="index.php" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a> <br>
      <a href="rooms.php" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a> <br>
      <a href="facilities.php" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
      <a href="contact.php" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
      <a href="about.php" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
    </div><div class="col-lg-4 p-4">
      <h5 class="mb-3">Follow us</h5>
      <?php
        if($contact_r['tw'] != ''){
          echo<<<data
          <a href="$contact_r[tw]" class="d-inline-block text-dark text-decoration-none mb-2">
            <i class="bi bi-twitter me-1"></i> Twitter
          </a><br>
          data;
        }
      ?>
      
      <a href="<?php echo $contact_r['fb'] ?>" class="d-inline-block text-dark text-decoration-none mb-2">
          <i class="bi bi-facebook me-1"></i> Facebook
      </a><br>
      <a href="<?php echo $contact_r['insta'] ?>" class="d-inline-block text-dark text-decoration-none">
          <i class="bi bi-instagram me-1"></i> Instagram
      </a>
    </div>
  </div>
</div>

<h6 class="text-center bg-dark text-white p-3 m-0">Designed and Developed by Anonymous</h6>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<script>
  function setActive(){
    let navbar = document.getElementById('nav-bar');
    let a_tags = navbar.getElementsByTagName('a');

    for(i = 0; i<a_tags.length;i++){
      let file = a_tags[i].href.split('/').pop();
      let file_name = file.split('.')[0];

      if(document.location.href.indexOf(file_name) >= 0){
        a_tags[i].classList.add('active');
      }
    }
  }

    //8.11.2023

  function alert(type, msg, position='body') {
    let bs_class = (type == 'success') ? 'alert-success': 'alert-danger';
    let element =document.createElement('div');
    element.innerHTML = `
      <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
        <strong class="me-3">${msg}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div> 
    `;

    if(position=='body'){
      document.body.append(element);
      element.classList.add('custom-alert');
    } else {
      document.getElementById(position).appendChild(element);
    }

    setTimeout(remAlert, 3000);
  }
  
  function remAlert(){
      document.getElementsByClassName('alert')[0].remove();
  }


    // - or _
  let register_form = document.getElementById('register-form');

  register_form.addEventListener('submit', (e)=>{
    e.preventDefault();
    let data = new FormData();

    data.append('name', register_form.elements['name'].value);
    data.append('email', register_form.elements['email'].value);
    data.append('phonenum', register_form.elements['phonenum'].value);
    data.append('address', register_form.elements['address'].value);
    data.append('pincode', register_form.elements['pincode'].value);
    data.append('dob', register_form.elements['dob'].value);
    data.append('pass', register_form.elements['pass'].value);
    data.append('cpass', register_form.elements['cpass'].value);
    data.append('profile', register_form.elements['profile'].files[0]);
    data.append('register', '');

    var myModal = document.getElementById('registerModal');
    var modal = bootstrap.Modal.getInstance(myModal);
    modal.hide();

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/login_register.php", true);

    xhr.onload = function(){
      if(this.responseText == 'pass_mismatch') {
        alert('error', "password mismatch!");
      }else if(this.responseText == 'email_already') {
        alert('error', "Email is already registered!");
      } else if(this.responseText == 'phone_already') {
        alert('error', "Phone number is already registered!");
      } else if(this.responseText ==  'inv_img') {
        alert('error', "Only jpg, webp and png images are allowed");
      }else if(this.responseText ==  'upd_failed') {
        alert('error', "Image upload process failed");
      }else if(this.responseText ==  'mail_failed') {
        alert('error', "Cannot send confirmation email! Server down!");
      }else if(this.responseText ==  'ins_failed') {
        alert('error', "Registration failed");
      }else {
        alert('success', "registration successfull. ");
        register_form.reset();
      }
    }
    xhr.send(data);
  })

  // let login_form =document.getElementById('login-form');

  // login_form.addEventListener('submit', (e) => {
  //   e.preventDefault();

  //   let data = new FormData();

  //   data.append('email_mob', login_form.elements['email_mob'].value);
  //   data.append('pass', login_form.elements['pass'].value);
  //   data.append('login', '');

  //   var myModal = document.getElementById('loginModal');
  //   var modal = bootstrap.Modal.getInstance(myModal);
  //   modal.hide();

  //   let xhr = new XMLHttpRequest();
  //   xhr.open("POST", "ajax/login_register.php", true);

  //   xhr.onload = function() {
  //     console.log(this.responseText);
  //     if(this.responseText == 'inv_email_mob') {
  //       alert('error', "Invalid Email or Mobile number!");
  //     }else if(this.responseText == 'not_verified') {
  //       alert('error', "Email is not verified!");
  //     }else if(this.responseText ==  'inactive') {
  //       alert('error', "Account Suspended!");
  //     }else if(this.responseText ==  'invalid_pass') {
  //       alert('error', "Incorrect password!");
  //     }else {
  //       let fileurl = window.location.href.split('/').pop().split('?').shift();
  //       if(fileurl == 'room_details.php'){
  //         window.location =window.location.href;
  //       }
  //       window.location = window.location.pathname;
  //     }
  //   }
  //   // Error Event
  //   xhr.onerror = function() {
  //   console.error("Error during the AJAX request.");
  //   alert("Error during the AJAX request.");
  // };
  //   xhr.send(data);
  // });
  let login_form = document.getElementById('login-form');

login_form.addEventListener('submit', (e) => {
  e.preventDefault();

  let data = new FormData();
  data.append('email_mob', login_form.elements['email_mob'].value);
  data.append('pass', login_form.elements['pass'].value);
  data.append('login', '');

  var myModal = document.getElementById('loginModal');
  var modal = bootstrap.Modal.getInstance(myModal);
  modal.hide();

  let xhr = new XMLHttpRequest();
  xhr.open("POST", "ajax/login_register.php", true);

  xhr.onload = function () {
    console.log(this.responseText); // For debugging purpose
    let responseText = this.responseText.trim(); // Trim any whitespace from the response

    switch (responseText) {
      case 'inv_email_mob':
        alert("Invalid Email or Mobile number!");
        break;
      case 'not_verified':
        alert("Email is not verified!");
        break;
      case 'inactive':
        alert("Account Suspended!");
        break;
      case 'invalid_pass':
        alert("Incorrect password!");
        break;
      case 'login_success':
        // Redirect based on the current URL or simply reload the page
        let currentURL = window.location.href;
        let fileurl = currentURL.split('/').pop().split('?').shift();

        if (fileurl === 'room_details.php') {
          window.location.reload();
        } else {
          window.location = window.location.pathname;
        }
        break;
      default:
        alert("An unknown error occurred!");
        break;
    }
  };

  xhr.onerror = function () {
    console.error("Error during the AJAX request.");
    alert("Error during the AJAX request.");
  };

  xhr.send(data);
});

  function checkLoginToBook(status, room_id) {
    if (status) {
      window.location.href='confirm_booking.php?id=' +room_id;
    } else {
      alert('error', 'Please login to book room now!');
    }
  }
  setActive();
</script>