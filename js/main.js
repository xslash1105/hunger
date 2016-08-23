$(document).ready(function(){

  // -------------------------------------------menu bar
  $(document).on("click", ".signupOpen", function(){
    $("#signupModelWrapper").fadeIn(500);
  })
  $("#closeSignup").click(function(){
    $("#signupModelWrapper").fadeOut(500);
  })

  $(document).on("click", ".loginOpen", function(){
    $("#loginModelWrapper").fadeIn(500);
  })
  $("#closeLogin").click(function(){
    $("#loginModelWrapper").fadeOut(500);
  })


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

})
