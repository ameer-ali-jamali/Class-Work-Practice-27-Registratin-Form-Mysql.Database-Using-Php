$(document).ready(function () {
    $("#signup").hide();
    $("#signin").hide();
    $("#update").hide();
    $("#delete").hide();
    // $("#edit_by_id").hide();
    // $("#update_by_id").hide();
    // $("#delete_by_id").hide();
});

function submit() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    let re_pass = document.getElementById("re_pass").value;
    if (name && email && pass && re_pass != "" && pass == re_pass) {
        if (confirm(" Please Confirm For Registration !! ") == true) {
            $(document).ready(function () {
                $("#signup").click();
            });
        } else {
            window.location = "index.php";
        }
    } else if (pass != re_pass || re_pass != pass) {
        alert('Password Dosent Match => !!');
    } else {
        alert('Please Fill Registration Form => !!');
    }
}


function login() {
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    if (email && pass != "") {
        if (confirm("Please Confirm For Registration !!") == true) {
            $(document).ready(function () {
                $("#signin").click();
            });
        } else {
            window.location = "index.php";
        }

    } else {
        alert('Please Fill Registration Form => !!');
    }

}

function update() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    if (name && email && pass != "") {
        if (confirm("Please Confirm For Registration !!") == true) {
            $(document).ready(function () {
                $("#update").click();
            });
        } else {
            window.location = "index.php";
        }

    } else {
        alert('Please Fill Registration Form => !!');
    }

}

function delete_() {
    let email = document.getElementById("email").value;
    let pass = document.getElementById("pass").value;
    if (email && pass != "") {
        if (confirm("Please Confirm For Registration !!") == true) {
            $(document).ready(function () {
                $("#delete").click();
            });
        } else {
            window.location = "index.php";
        }

    } else {
        alert('Please Fill Registration Form => !!');
    }

}

function confirm_delete() {
    if (confirm("R You Sure You Want To Delete ? ") == true) {
        $(document).ready(function () {
            $("#delete_by_id").click();
        });
    } else {
        $("#id").val("");
        window.location = "index.php";
    }

}

