$(document).ready(function () {
  // add input field
  var num = 0;
  $("#add_btn").click(function () {
    if (num < 1) {
      $(
        "<div class='form-group mt-2' id='add_field'><label for='fname'>Middle name <small>(Optional)</small></label><div class='input-group mb-3'><input class='form-control' type='text' id='mname' placeholder='Enter middle name' /><div class='input-group-append'></div></div><small class='mt-0' id='mname_alert'></small></div>"
      ).insertAfter("#f_name");
      num = num + 1;
    } else {
      $("#mname_alert").html("Input field already added.").css("color", "red");
    }
  });

  //remove input field
  $("#rem_btn").click(function () {
    $("#add_field").remove();
    num = 0;
  });

  $("#sub_btn").click(function (e) {
    name_validation();
    age_validation();
    gender_validation();
    mobile_validation();
    email_validation();
    password_validation();
    confirm_password();
    terms_check();

    // if ($("#fname").val() == "") {
    //   $("#name_alert").show();
    //   $("#name_alert").html("**Please enter your name.").css("color", "red");
    //   event.preventDefault();
    // } else {
    //   $("#name_alert").hide();
    // }

    // if ($("#age").val() == "") {
    //   $("#age_alert").show();
    //   $("#age_alert")
    //     .html("**Please enter your age. It must be a number.")
    //     .css("color", "red");
    //   event.preventDefault();
    // } else if ($("#age").val() < 18) {
    //   $("#age_alert").show();
    //   $("#age_alert").html("**Age must be 18 or above.").css("color", "red");
    //   event.preventDefault();
    // } else {
    //   $("#age_alert").hide();
    // }

    // if ($("#gender").val() == "") {
    //   $("#gender_alert").show();
    //   $("#gender_alert")
    //     .html("**Please choose your gender.")
    //     .css("color", "red");
    //   e.preventDefault();
    // } else {
    //   $("#gender_alert").hide();
    // }

    // if ($("#m_number").val() == "") {
    //   $("#mobile_alert").show();
    //   $("#mobile_alert")
    //     .html("**Please enter your mobile number.")
    //     .css("color", "red");
    //   e.preventDefault();
    // } else if ($("#m_number").val().length < 10) {
    //   $("#mobile_alert").show();
    //   $("#mobile_alert")
    //     .html("**Mobile number must be 10 digits.")
    //     .css("color", "red");
    //   e.preventDefault();
    // } else {
    //   $("#mobile_alert").hide();
    // }

    // var filter = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

    // if ($("#e_mail").val() == "") {
    //   $("#email_alert").show();
    //   $("#email_alert")
    //     .html("**Please enter your Email id.")
    //     .css("color", "red");
    //   e.preventDefault();
    // } else if (!filter.test($("#e_mail").val())) {
    //   $("#email_alert").show();
    //   $("#email_alert").html("**Your Email id is invalid.").css("color", "red");
    //   e.preventDefault();
    // } else {
    //   $("#email_alert").hide();
    // }

    // if ($("#pass").val() == "") {
    //   $("#password_alert").show();
    //   $("#password_alert")
    //     .html("**Please enter your Password.")
    //     .css("color", "red");
    //   e.preventDefault();
    // } else if ($("#pass").val().length < 8) {
    //   $("#password_alert").show();
    //   $("#password_alert")
    //     .html("**Your password length must more than 8 charecters.")
    //     .css("color", "red");
    //   e.preventDefault();
    // } else {
    //   $("#password_alert").hide();
    // }

    //Retype assword
    // if ($("#r_pass").val() == "") {
    //   $("#rpassword_alert").show();
    //   $("#rpassword_alert")
    //     .html("**Please confirm your password.")
    //     .css("color", "red");
    //   event.preventDefault();
    // }

    // //compare password
    // else if ($("#pass").val() != $("#r_pass").val()) {
    //   $("#rpassword_alert").show();
    //   $("#rpassword_alert")
    //     .html("**Your password doesn't match.")
    //     .css("color", "red");
    //   e.preventDefault();
    // } else {
    //   $("#rpassword_alert").hide();
    // }

    //agree to conditions
    // if ($("#tac").is(":checked") == false) {
    //   $("#tac_alert").show();
    //   $("#tac_alert")
    //     .html("**Please agree to our conditions to signup.")
    //     .css("color", "red");
    //   event.preventDefault();
    // } else {
    //   $("#tac_alert").hide();
    // }
  });
});

//Name validation
function name_validation() {
  if ($("#fname").val() == "") {
    $("#name_alert").show();
    $("#name_alert").html("**Please enter your name.").css("color", "red");
    event.preventDefault();
  } else {
    $("#name_alert").hide();
  }
}

//Age validation
function age_validation() {
  if ($("#age").val() == "") {
    $("#age_alert").show();
    $("#age_alert")
      .html("**Please enter your age. It must be a number.")
      .css("color", "red");
    event.preventDefault();
  } else if ($("#age").val() < 18) {
    $("#age_alert").show();
    $("#age_alert").html("**Age must be 18 or above.").css("color", "red");
    event.preventDefault();
  } else {
    $("#age_alert").hide();
  }
}

//Gender validation
function gender_validation() {
  if ($("#gender").val() == "") {
    $("#gender_alert").show();
    $("#gender_alert").html("**Please choose your gender.").css("color", "red");
    event.preventDefault();
  } else {
    $("#gender_alert").hide();
  }
}

//Mobile number validation
function mobile_validation() {
  if ($("#m_number").val() == "") {
    $("#mobile_alert").show();
    $("#mobile_alert")
      .html("**Please enter your mobile number.")
      .css("color", "red");
    event.preventDefault();
  } else if ($("#m_number").val().length < 10) {
    $("#mobile_alert").show();
    $("#mobile_alert")
      .html("**Mobile number must be 10 digits.")
      .css("color", "red");
    event.preventDefault();
  } else {
    $("#mobile_alert").hide();
  }
}

//Email validation
function email_validation() {
  var filter = /^\w+([-+.'][^\s]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;

  if ($("#e_mail").val() == "") {
    $("#email_alert").show();
    $("#email_alert").html("**Please enter your Email id.").css("color", "red");
    event.preventDefault();
  } else if (!filter.test($("#e_mail").val())) {
    $("#email_alert").show();
    $("#email_alert").html("**Your Email id is invalid.").css("color", "red");
    event.preventDefault();
  } else {
    $("#email_alert").hide();
  }
}

//Password validation
function password_validation() {
  if ($("#pass").val() == "") {
    $("#password_alert").show();
    $("#password_alert")
      .html("**Please enter your Password.")
      .css("color", "red");
    event.preventDefault();
  } else if ($("#pass").val().length < 8) {
    $("#password_alert").show();
    $("#password_alert")
      .html("**Your password length must more than 8 charecters.")
      .css("color", "red");
    event.preventDefault();
  } else {
    $("#password_alert").hide();
  }
}

//Confirm password
function confirm_password() {
  if ($("#r_pass").val() == "") {
    $("#rpassword_alert").show();
    $("#rpassword_alert")
      .html("**Please confirm your password.")
      .css("color", "red");
    event.preventDefault();
  }

  //compare password
  else if ($("#pass").val() != $("#r_pass").val()) {
    $("#rpassword_alert").show();
    $("#rpassword_alert")
      .html("**Your password doesn't match.")
      .css("color", "red");
    event.preventDefault();
  } else {
    $("#rpassword_alert").hide();
  }
}

//agree to conditions
function terms_check() {
  if ($("#tac").is(":checked") == false) {
    $("#tac_alert").show();
    $("#tac_alert")
      .html("**Please agree to our conditions to signup.")
      .css("color", "red");
    event.preventDefault();
  } else {
    $("#tac_alert").hide();
  }
}
