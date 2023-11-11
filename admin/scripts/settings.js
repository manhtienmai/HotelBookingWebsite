
let general_data, contacts_data;

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
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {


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
    }
    xhr.send('get_general');
    // cần thiết kể gửi yêu cầu lên server
}

general_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    upd_general(site_title_inp.value, site_about_inp.value);
})

function upd_general(site_title_val, site_about_val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    console.log(xhr);

    xhr.onload = function () {
        var myModal = document.getElementById('general-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) {
            alert('success', 'Changes saved!'); // hàm này bên essentials
            get_general();
        } else {
            alert('error', 'No Changes made!');
        }
    };
    xhr.send('site_title=' + site_title_val + '&site_about=' + site_about_val + '&upd_general');
    // update lại db từ những cái nhập vào
}

function upd_shutdown(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', "application/x-www-form-urlencoded");

    xhr.onload = function () {
        if (this.responseText == 1 && general_data.shutdown == 0) {
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

    let contacts_p_id = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw'];
    // tạo đối tượng để chứa các thông tin
    let iframe = document.getElementById('iframe');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // lấy in4 từ db
    xhr.onload = function () {
        contacts_data = JSON.parse(this.responseText);
        contacts_data = Object.values(contacts_data);

        for (i = 0; i < contacts_p_id.length; i++) {
            document.getElementById(contacts_p_id[i]).innerText = contacts_data[i + 1];
        }
        iframe.src = contacts_data[9];  // lấy in4 từ db
        contacts_inp(contacts_data); //  Hàm để lấy dữ liệu mình nhập để gán lên cho phần hiển thị với contacts tương tự như với General Setting
    };
    xhr.send('get_contacts');
}

function contacts_inp(data) {
    // chứa dường dẫn đến các thẻ trong web của các thuộc tính tương ứng
    let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
    for (i = 0; i < contacts_inp_id.length; i++) {
        document.getElementById(contacts_inp_id[i]).value = data[i + 1];
        // data tương đương khi truyền vào là contacts_data
        // từ ngoài nhìn thấy update vào Edit
        // từ db -> người ngoài thấy
        // từ Edit -> db

    }
}

function upd_contacts() {
    // tương ứng với cột trong db
    let index = ['address', 'gmap', 'pn1', 'pn2', 'email', 'fb', 'insta', 'tw', 'iframe'];
    // tương ứng với ô mà mình nhập dữ liệu
    let contacts_inp_id = ['address_inp', 'gmap_inp', 'pn1_inp', 'pn2_inp', 'email_inp', 'fb_inp', 'insta_inp', 'tw_inp', 'iframe_inp'];
    let data_str = "";

    for (i = 0; i < index.length; i++) {
        data_str += index[i] + "=" + document.getElementById(contacts_inp_id[i]).value + "&";
    }
    // console.log(data_str); test chuỗi trả về

    data_str += "upd_contacts"; // thêm địa chỉ hàm vào để gửi lên server
    // vd như trong hàm upd_general xhr.send('site_title='+site_title_val+'&site_about='+site_about_val+'&upd_general');
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        var myModal = document.getElementById('contacts-s');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();
        if (this.responseText == 1) {
            alert('success', "Changes saved!");
            get_contacts();
        } else {
            alert('error', "No changes made!");
        }
    }
    xhr.send(data_str);
}

// thêm sự kiện khi nhấn chuột
contacts_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    upd_contacts();
})

team_s_form.addEventListener('submit', function (e) {
    e.preventDefault();
    add_member();
});

function add_member() {
    let data = new FormData();
    data.append('name', member_name_inp.value);
    data.append('picture', member_picture_inp.files[0]);
    data.append('add_member', '');

    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    //xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');   ko yêu cầu:))

    xhr.onload = function () {
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
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        document.getElementById('team-data').innerHTML = this.responseText;
    };
    xhr.send('get_members');
}

function rem_member(val) {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "ajax/settings_crud.php", true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        // cần check nha hàm xóa
        if (this.responseText == 1) {
            alert('success', 'Member remove!');
            get_members();
        } else {
            alert('error', 'Server Down!');
        }
    }
    xhr.send('rem_member=' + val);
}

window.onload = function () {
    get_general();
    get_contacts();
    get_members();
}


