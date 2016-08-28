$(document).ready(function(){

  // -------------------------------------------menu bar
  $(document).on("click", ".signupOpen", function(){
    $("#signupModelWrapper").fadeIn(500);
  })
  $(document).on("click", "#closeSignup", function(){
    $("#signupModelWrapper").fadeOut(500);
  })
  var modalSignup = document.getElementById("signupModelWrapper");
  $(document).on("click", window, function(){
    if(event.target == modalSignup){
      $("#signupModelWrapper").fadeOut(500);
    }
  })
  // window.onclick = function(event){
  //   if(event.target == modalSignup){
  //     $("#signupModelWrapper").fadeOut(500);
  //   }
  // }

  $(document).on("click", ".loginOpen", function(){
    $("#loginModelWrapper").fadeIn(500);
  })
  $("#closeLogin").click(function(){
    $("#loginModelWrapper").fadeOut(500);
  })
  var modalLogin = document.getElementById("loginModelWrapper");
  window.onclick = function(event) {
    if (event.target == modalLogin) {
        $("#loginModelWrapper").fadeOut(500);
    }
}


  $("#openMenubar").click(function(){
    $("#menuToggle").slideToggle(500);
    if($("#openMenubar").hasClass("transformMenu")){
      $("#openMenubar").removeClass("transformMenu");
      $("#openMenubar").removeClass("glyphicon-remove").addClass("glyphicon-menu-hamburger");
    }else{
      $("#openMenubar").addClass("transformMenu");
      $("#openMenubar").removeClass("glyphicon-menu-hamburger").addClass("glyphicon-remove");
    }
  })

  $("#menuWrapper li").click(function(){
    $("#menuToggle").fadeOut(100);
  })

  $(".resturauntOpen").click(function(){
    window.open("resturaunt.php", "_self");
  })
  $(".deliveryOpen").click(function(){
    window.open("delivery.php", "_self");
  })
  $(".couponOpen").click(function(){
    window.open("coupon.php", "_self");
  })

  // --------------------------------------------------------
  $(".reservationOpen").click(function(){
    $("#modalReserveWrapper").fadeIn(500);
  })
  $("#closeReservation").click(function(){
    $("#modalReserveWrapper").fadeOut(500);
  })

  $("#mainSearchDetail").click(function(){
    $("#searchDetailModalWrapper").fadeIn(500);
  })
  $("#closeSearchDetailModal").click(function(){
    $("#searchDetailModalWrapper").fadeOut(500);
  })


  $(".menuOpen").click(function(){
    var menu = $(this).val();
    $.ajax({
      type: "GET",
      url: "sql/menuSql.php",
      dataType: "text",
      data: {menu:menu},
      success: function(result){
        $("#modalMenuWrapper").html(result);
      }
    });
    $("#modalMenuWrapper").fadeIn(500);
  })

  $(document).on("click", "#closeMenu", function(){
    $("#modalMenuWrapper").fadeOut(500);
  });


  $(".eachCheckAll").hover(function(){
    $(this).find(".eachCheckAllTitle").slideDown("slow");
  }, function(){
    $(this).find(".eachCheckAllTitle").slideUp("slow");
  })

  $(".eachSelection").hover(function(){
    $(this).find("h4").slideDown("slow");
  }, function(){
    $(this).find("h4").slideUp("slow");
  })


  $("#signupButton").click(function(){
    var fname = $("input[name='signfname']").val();
    var lname = $("input[name='signlname']").val();
    var phone = $("input[name='signphone']").val();
    var email = $("input[name='signemail']").val();
    var password = $("input[name='signPass']").val();
    if(fname=="" || lname=="" || phone=="" || email=="" || password==""){
      if(fname==""){
        $("#signupFnameCheck").html("required").addClass("required");
      }
      if(lname==""){
        $("#signupLnameCheck").html("required").addClass("required");
      }
      if(phone==""){
        $("#signupPhoneCheck").html("required").addClass("required");
      }
      if(email==""){
        $("#signupEmailCheck").html("required").addClass("required");
      }
      if(password==""){
        $("#signupPassCheck").html("required").addClass("required");
      }
    }
    // else
    // {
    //   var register = "register";
    //   $.ajax({
    //     type: "POST",
    //     url: "sql/signupSQL.php",
    //     dataType: "text",
    //     data: {register:register, fname:fname, lname:lname, phone:phone, email:email, password:password},
    //     beforesend: function(){
    //       $("#signupModel").html("loading....");
    //     },
    //     success: function(result){
    //       $("#signupModel").html(result).fadeIn(500);
    //     }
    //   });
    // }
  })

  $("input[name='signphone']").focusout(function(){
    var phone = $("input[name='signphone']").val();
    var phoneCheck = "phoneCheck";
    if($.isNumeric(phone)){
      $.ajax({
        url: 'sql/signupSQL.php',
        type: "POST",
        dataType: "text",
        data: {phoneCheck:phoneCheck, phone: phone},
        beforesend: function(){
          $("#signupPhoneCheck").html("checking...");
        },
        success: function(result){
          $("#signupPhoneCheck").html(result);
        }
      })
    }else{
      $("#signupPhoneCheck").html('please enter a number').addClass("required");
    }
  })

  $("input[name='signemail']").focusout(function(){
    var email = $("input[name='signemail']").val();
    var emailCheck = "emailCheck";
    if(email.length>0){
      $.ajax({
        url: 'sql/signupSQL.php',
        type: "POST",
        dataType: "text",
        data: {emailCheck:emailCheck, email: email},
        beforesend: function(){
          $("#signupEmailCheck").html("checking...");
        },
        success: function(result){
          $("#signupEmailCheck").html(result);
        }
      })
    }
  })

  $("input[name='signPass']").keyup(function(){
    var password = $("input[name='signPass']").val();
    if($("input[name='signPass']").hasClass('required')){
      $("#signupPassCheck").removeClass("required");
    }
      if(password.length<8 && password.length>0){
        $("#signupPassCheck").html("Enter more than 8 letters").addClass("required").removeClass("ok");
      }else if(password.length>=8){
        $("#signupPassCheck").html("").removeClass("required").addClass("ok glyphicon glyphicon-ok");
      }
  })

  // $(document).on("click", "input[name='signupButton']", function(){
  //   var signupButton = "signupButton";
  //   var name = $("input[name='signupNameFinal']").val();
  //   var phone = $("input[name='signupPhoneFinal']").val();
  //   var email = $("input[name='signupEmailFinal']").val();
  //   var password = $("input[name='signupPasswordFinal']").val();
  //   $.ajax({
  //     url: 'sql/signupSQL.php',
  //     type: "POST",
  //     dataType: "text",
  //     data: {signupButton:signupButton, name:name, phone:phone, email:email, password:password},
  //     beforesend: function(){
  //       $("#signupModel").html("checking...");
  //     },
  //     success: function(result){
  //       $("#signupModel").html(result);
  //     }
  //   })
  // })

// -----------------------------------------------------
// loged in

$(".signout").click(function(){
  window.open("../sql/logoutSQL.php", "_self");
})
})
