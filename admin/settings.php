<?php 
    require('inc/essentials.php');
    adminLogin();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel - Settings</title>
  <?php require('inc/links.php'); ?>

</head>

<body class="bg-light">
  
  <?php require('inc/header.php'); ?>
  
  <div class="container-fuild" id="main_content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-4 overflow-hidden">
        <h3 class="mb-4">SETTING </h3>
        
        <!-- GENERAL SETTING SECTION-->

        <div class="card border-0 shadow mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0"> GENERAL SETTING</h5>
              
              <!-- Button trigger modal -->
              
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                <i class="bi bi-pencil-square"></i> Edit
              </button>
            </div>
            <h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
            <p class="card-text" id="site_title"></p>
            <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
            <p class="card-text" id="site_about"></p>
            </div>
        </div>

        <!-- GENERAL SETTINGs Modal -->

        <div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="general_s_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">General Settings</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-blod">Site Title</label>
                    <input type="text" name="site_title" id="site_title_inp" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-blod">About us</label>
                    <textarea name="site_about" id="site_about_inp" class="form-control shadow-none" rows="6" required></textarea>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" onclick="site_title.value = general_data.site_title, site_about.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                  <button type="submit" onclick="" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                </div>
              </div>
            </form> 
          </div>
        </div>

        <!-- Shutdown - section -->
        <div class="card  border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0"> SHUTDOWN WEBSITE</h5>
              
              <div class="form-check form-switch">
                <form>
                  <input onchange="upd_shutdown(this.value)" class="form-check-input" type="checkbox" id ="shutdown-toggle">
                </form>
              </div>
              
            </div>
            <p class="card-text">
              NO CUSTOMER WILL BE ALLOWED TO BOOK HOTEL ROOM, WHEN SHUTDOWN MODE IS TURNED on. 
            </p>
            </div>
        </div>

        <!-- Contact details - section -->
        <div class="card border-0 shadow mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0"> Contacts SETTING</h5>
              
              <!-- Button trigger modal -->
              
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#contacts-s">
                <i class="bi bi-pencil-square"></i> Edit
              </button>
            </div>
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Address</h6>
                  <p class="card-text" id="address"></p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Google Map</h6>
                  <p class="card-text" id="gmap"></p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Phone Number</h6>
                  <p class="card-text mb-1">
                    <i class="bi bi-telephone-fill"></i>
                    <span id="pn1"></span>
                  </p>
                  <p class="card-text">
                    <i class="bi bi-telephone-fill"></i>
                    <span id="pn2"></span>
                  </p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">E-mail</h6>
                  <p class="card-text" id="email"></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">Social Links</h6>
                  <p class="card-text mb-1">
                    <i class="bi bi-facebook me-1"></i>
                    <span id="fb"></span>
                  </p>
                  <p class="card-text mb-1">
                    <i class="bi bi-instagram me-1"></i>
                    <span id="insta"></span>
                  </p>
                  <p class="card-text">
                    <i class="bi bi-twitter me-1"></i>
                    <span id="tw"></span>
                  </p>
                </div>
                <div class="mb-4">
                  <h6 class="card-subtitle mb-1 fw-bold">iFrame</h6>
                  <iframe id="iframe" class="border p-2 w-100" loading="lazy"></iframe>
                </div>
              </div>
            </div>
            
          </div>
        </div>

        <!-- Contact details Modal -->

        <div class="modal fade" id="contacts-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <form id="contacts_s_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Contact Settings</h5>
                </div>
                <div class="modal-body">

                  <div class="container-fuild p-0">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label fw-blod">Address</label>
                          <input type="text" name="address" id="address_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-blod">Google Map Link</label>
                          <input type="text" name="gmap" id="gmap_inp" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-blod">Phone Number (with country code)</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="number" name="pn1" id="pn1_inp" class="form-control shadow-none" required>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                            <input type="number" name="pn2" id="pn2_inp" class="form-control shadow-none">
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-blod">Email</label>
                          <input type="email" name="email" id="email_inp" class="form-control shadow-none" required>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="mb-3">
                          <label class="form-label fw-blod">Social Links</label>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-facebook"></i></span>
                            <input type="text" name="fb" id="fb_inp" class="form-control shadow-none" required>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-instagram"></i></span>
                            <input type="text" name="insta" id="insta_inp" class="form-control shadow-none" required>
                          </div>
                          <div class="input-group mb-3">
                            <span class="input-group-text"><i class="bi bi-twitter"></i></span>
                            <input type="text" name="tw" id="tw_inp" class="form-control shadow-none" required>
                          </div>
                        </div>
                        <div class="mb-3">
                          <label class="form-label fw-blod">iFrame Src</label>
                          <input type="text" name="iframe" id="iframe_inp" class="form-control shadow-none" required>
                        </div>
                      </div>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="modal-footer">
                  <!-- khi bấm nút này thông tin giữ nguyên -->
                  <button type="button" onclick="contacts_inp(contacts_data)" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                  <button type="submit" onclick="" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                </div>
              </div>
            </form> 
          </div>
        </div>

        <!-- Management Team SECTION-->

        <div class="card border-0 shadow mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0"> Management Team</h5>
              
              <!-- Button trigger modal -->
              
              <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#team-s">
                <i class="bi bi-plus-square"></i> Add
              </button>
            </div>
            <div class="row" id="team-data">
              <div class="col-md-2 mb-3">
                <div class="card bg-dark text-white">
                  <img src="../images/about/IMG_14331.png" class="card-img">
                  <div class="card-img-overlay text-end">
                    <button type="button" class="btn btn-danger btn-sm shadow_none">
                    <i class="bi bi-trash"></i> Delete 
                    </button>
                  </div>
                  <p class="card-text text-center px-3 py-2">Thang</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Management Team Modal -->

        <div class="modal fade" id="team-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form id="team_s_form">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Team Member</h5>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label fw-blod">Name</label>
                    <input type="text" name="member_name" id="member_name_inp" class="form-control shadow-none" required>
                  </div>
                  <div class="mb-3">
                    <label class="form-label fw-blod">Picture</label>
                    <input type="file" name="member_picture" id="member_picture_inp" accept="[.jpg, .png, .webp, .jpeg]" class="form-control shadow-none" required>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" onclick="member_name.value='', member_picture.value=''" class="btn text-secondary shadow-none" data-bs-dismiss="modal">CANCEL</button>
                  <button type="submit" class="btn custom-bg text-white shadow-none">SUBMIT</button>
                </div>
              </div>
            </form> 
          </div>
        </div>
        
      </div>
    </div>
  </div>

  <?php require('inc/scripts.php') ?>
  <script>
    let general_data, contacts_data ;

    let general_s_form = document.getElementById('general_s_form');
    let site_title_inp = document.getElementById('site_title_inp');
    let site_about_inp = document.getElementById('site_about_inp');

    // form của 
    let contacts_s_form = document.getElementById('contacts_s_form');

    let team_s_form = document.getElementById('team_s_form');
    let member_name_inp = document.getElementById('member_name_inp');
    let member_picture_inp = document.getElementById('member_picture_inp');


    // bảng settings trong data
    function get_general() {
      let site_title = document.getElementById("site_title");
      let site_about = document.getElementById("site_about");

      let shutdown_toggle = document.getElementById('shutdown-toggle');

      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
            
                
                general_data = JSON.parse(this.responseText);

                site_title.innerText = general_data.site_title || "N/A";
                site_about.innerText = general_data.site_about || "N/A";

                site_title_inp.value = general_data.site_title || "";
                site_about_inp.value = general_data.site_about || "";

                // lấy giá trị nhập vào để update cho người dùng thấy

            if (general_data.shutdown == 0) {
              shutdown_toggle.checked = false;
              shutdown_toggle.value = 0;
            } else {
              shutdown_toggle.checked = true;
              shutdown_toggle.value = 1;
            }
        };
      xhr.send('get_general');
      // cần thiết kể gửi yêu cầu lên server
    } 

    general_s_form.addEventListener('submit', function(e) {
      e.preventDefault();
      upd_general(site_title_inp.value, site_about_inp.value);
    })

    function upd_general(site_title_val,site_about_val) {
      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      console.log(xhr);

      xhr.onload = function() {
          var myModal = document.getElementById('general-s');
          var modal = bootstrap.Modal.getInstance(myModal);
          modal.hide();
          
          if(this.responseText == 1) {
            alert('success', 'Changes saved!'); // hàm này bên essentials
            get_general();
          } else {
            alert('error', 'No Changes made!');
          }
        };
        xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
        // update lại db từ những cái nhập vào
    }
    
    function upd_shutdown(val) {
      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      xhr.setRequestHeader('Content-Type', "application/x-www-form-urlencoded");

      xhr.onload = function() {
          if(this.responseText == 1 && general_data.shutdown == 0) {
            alert('success', "Site has been shutdown!");
          } else {
            alert('success', "Shutdown mode oof!");
          }
          get_general();
        };
        xhr.send('upd_shutdown=' + val);
    }
    
    // dùng bảng contact_details
    function get_contacts() {

      let contacts_p_id = ['address','gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
      // tạo đối tượng để chứa các thông tin
      let iframe = document.getElementById('iframe');

      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      // lấy in4 từ db
      xhr.onload = function() {
          contacts_data = JSON.parse(this.responseText);
          contacts_data = Object.values(contacts_data);

          for(i = 0; i < contacts_p_id.length; i++) {
            document.getElementById(contacts_p_id[i]).innerText = contacts_data[i+1];
          }
          iframe.src = contacts_data[9];  // lấy in4 từ db
          contacts_inp(contacts_data); //  Hàm để lấy dữ liệu mình nhập để gán lên cho phần hiển thị với contacts tương tự như với General Setting
        };
      xhr.send('get_contacts');
    }

    function contacts_inp(data) {
      // chứa dường dẫn đến các thẻ trong web của các thuộc tính tương ứng
      let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
      for(i = 0; i < contacts_inp_id.length; i++) {
        document.getElementById(contacts_inp_id[i]).value = data[i+1];
        // data tương đương khi truyền vào là contacts_data
        // từ ngoài nhìn thấy update vào Edit
        // từ db -> người ngoài thấy
        // từ Edit -> db

      }
    }

    function upd_contacts() {
      // tương ứng với cột trong db
      let index = ['address','gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
      // tương ứng với ô mà mình nhập dữ liệu
      let contacts_inp_id = ['address_inp','gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
      let data_str = "";
      
      for (i = 0; i < index.length; i++) {
        data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + "&";
      }
      // console.log(data_str); test chuỗi trả về

      data_str += "upd_contacts"; // thêm địa chỉ hàm vào để gửi lên server
      // vd như trong hàm upd_general xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        var myModal = document.getElementById('contacts-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        if(this.responseText == 1) {
            alert('success', "Changes saved!");
            get_contacts();
          } else {
            alert('error', "No changes made!");
          }
      }
      xhr.send(data_str);
    }

    // thêm sự kiện khi nhấn chuột
    contacts_s_form.addEventListener('submit',function(e) {
      e.preventDefault();
      upd_contacts();
    })

    team_s_form.addEventListener('submit', function(e) {
      e.preventDefault();
      add_member();
    });

    function add_member() {
      let data = new FormData();
      data.append('name', member_name_inp.value);
      data.append('picture', member_picture_inp.files[0]);
      data.append('add_member', '');

      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      //xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');   ko yêu cầu:))

      xhr.onload = function() {
          var myModal = document.getElementById('team-s');
          var modal = bootstrap.Modal.getInstance(myModal);
          modal.hide();

          if (this.responseText == 'inv_img') {
            alert('error', 'Only JPG, PNG, images are allowed!'); // hàm bên essentials
          } else if (this.responseText == "inv_size") {
            alert('error', 'Image should be less than 2 MB');
          } else if (this.responseText == "upd_failed") {
            alert('error', 'Image upload failed Server down');
          } else {
            alert('success', 'New member added!');
            member_name_inp.value = '';
            member_picture_inp.value = '';
            // thêm xong thêm vào db
            get_members();// show ra tất cả db có
          }
        };

        xhr.send(data);
    }

    function get_members() {
      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
            document.getElementById('team-data').innerHTML = this.responseText;
        };
      xhr.send('get_members');
    }

    function rem_member(val) {
      let xhr = new XMLHttpRequest();
      xhr.open("POST","ajax/settings_crud.php",true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
      
      xhr.onload = function() {
        // cần check nha hàm xóa
        if (this.responseText != 1) {
              alert('success', 'Member_remove!');
              get_members();
            } else {
              alert('error', 'Server Down!');
            }
      }
      xhr.send('rem_member='+val);
    }

    window.onload = function() {
        get_general();
        get_contacts();
        get_members();
      }


  </script>
</body>
</html>