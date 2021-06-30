
$(document).ready(function(){

$(".dungal-li").click(function(){
$("#sidebar-nav").toggle(function(){});
$(".hztl-menu-li").toggleClass('hide');

});


// $("#searchbar-show").click(function(){

// 	$(".Mainserachbar").toggle();
// 	$(".main-top-menu").toggle();

// });

  $("#searchbar-show").click(function(){
	$(".main-top-menu").hide();

        $(".Mainserachbar").show();
        $("#searchbar-close").show();
        $("#searchbar-show").hide();
        $(".Mainserachbar").animate({width: '100%'});
  
   }); 


  $("#searchbar-close").click(function(){
  	$(".Mainserachbar").animate({width: '0%'}, function(){

  	});
	$(".main-top-menu").show();
	$(".Mainserachbar").hide();
	    $("#searchbar-close").hide();
        $("#searchbar-show").show();

  
   }); 


    $("#loginradial").click(function(){
        $(".radial_icons").removeClass('radial-transform');
    $("#radial_1").toggle();
  

  	});   

  	 $("#plus_hide").click(function(){
    $("#radial_1").hide();
    $(".nn").removeClass('ion-android-close');
  	$(".nn").addClass('ion-android-add');


  	});


     $("#apps-btn").click(function(){
    $(".apps").slideToggle();

    });


  	 $("#loginradial").click(function(){
  	$(".radial_set").toggleClass('radial_set1');

  	});


// change here auto button change js
$(".question1").on("click", function(){
    $(this).find($(".icon")).toggleClass('ion-ios-keypad').toggleClass('ion-android-close');
});

$(".question2").on("click", function(){
    $(this).find($(".icon")).toggleClass('ion-android-add').toggleClass('ion-android-close');

});

$(".an-bookingbtn").on("click", function(){
    $(this).find($(".fa")).toggleClass('fa-plus').toggleClass('fa-minus');

});


// start here booking submenu code 

	$(".bookingBtn").click(function(){
  	$(".submenu-booking").show();
  	$(".homeBtn").hide();
  	$(".appsBtn").hide();
  	$(".subsBtn").hide();
  	$(".subsBtn").hide();
  	$(".dispatchBtn").hide();
  	$(".hrmanagBtn").hide();
  	$(".trackingBtn").hide();
  	});

	$(".submenu-booking-close").click(function(){
  	$(".submenu-booking").hide();
  	$(".homeBtn").show();
  	$(".appsBtn").show();
  	$(".subsBtn").show();
  	$(".subsBtn").show();
  	$(".dispatchBtn").show();
  	$(".hrmanagBtn").show();
  	$(".trackingBtn").show();
  	});



// start here apps submenu code 

	$(".appsBtn").click(function(){
  	$(".submenu-apps").show();
  	$(".homeBtn").hide();
  	$(".bookingBtn").hide();
  	$(".subsBtn").hide();
  	$(".subsBtn").hide();
  	$(".dispatchBtn").hide();
  	$(".hrmanagBtn").hide();
  	$(".trackingBtn").hide();
  	});

	$(".submenu-apps-close").click(function(){
  	$(".submenu-booking").hide();
  	$(".submenu-apps").hide();
  	$(".homeBtn").show();
  	$(".bookingBtn").show();
  	$(".appsBtn").show();
  	$(".subsBtn").show();
  	$(".subsBtn").show();
  	$(".dispatchBtn").show();
  	$(".hrmanagBtn").show();
  	$(".trackingBtn").show();
  	});


// start here submenu-subscription submenu code 

	$(".subsBtn").click(function(){
  	$(".submenu-subscription").show();
  	$(".homeBtn").hide();
  	$(".bookingBtn").hide();
  	$(".appsBtn").hide();
  	$(".dispatchBtn").hide();
  	$(".hrmanagBtn").hide();
  	$(".trackingBtn").hide();
  	});

	$(".submenu-subscription-close").click(function(){
  	$(".submenu-subscription").hide();
  	$(".homeBtn").show();
  	$(".bookingBtn").show();
  	$(".appsBtn").show();
  	$(".subsBtn").show();
  	$(".dispatchBtn").show();
  	$(".hrmanagBtn").show();
  	$(".trackingBtn").show();
  	});



 // start here submenu-dispatch submenu code 

	$(".dispatchBtn").click(function(){
  	$(".submenu-dispatch").show();
  	$(".homeBtn").hide();
  	$(".bookingBtn").hide();
  	$(".appsBtn").hide();
  	$(".subsBtn").hide();
  	$(".hrmanagBtn").hide();
  	$(".trackingBtn").hide();
  	});

	$(".submenu-dispatch-close").click(function(){
  	$(".submenu-dispatch").hide();
  	$(".homeBtn").show();
  	$(".bookingBtn").show();
  	$(".appsBtn").show();
  	$(".subsBtn").show();
  	$(".dispatchBtn").show();
  	$(".hrmanagBtn").show();
  	$(".trackingBtn").show();
  	});


// start here submenu-hr-managment submenu code 

	$(".hrmanagBtn").click(function(){
  	$(".submenu-hr-managment").show();
  	$(".homeBtn").hide();
  	$(".bookingBtn").hide();
  	$(".appsBtn").hide();
  	$(".subsBtn").hide();
  	$(".dispatchBtn").hide();
  	$(".trackingBtn").hide();
  	});

	$(".submenu-hr-managment-close").click(function(){
  	$(".submenu-hr-managment").hide();
  	$(".homeBtn").show();
  	$(".bookingBtn").show();
  	$(".appsBtn").show();
  	$(".subsBtn").show();
  	$(".dispatchBtn").show();
  	$(".hrmanagBtn").show();
  	$(".trackingBtn").show();
  	});


// start here submenu-tracking submenu code 

  $(".trackingBtn").click(function(){
    $(".submenu-tracking").show();
    $(".homeBtn").hide();
    $(".bookingBtn").hide();
    $(".appsBtn").hide();
    $(".subsBtn").hide();
    $(".dispatchBtn").hide();
    $(".hrmanagBtn").hide();
    });

  $(".submenu-tracking-close").click(function(){
    $(".submenu-tracking").hide();
    $(".homeBtn").show();
    $(".bookingBtn").show();
    $(".appsBtn").show();
    $(".subsBtn").show();
    $(".dispatchBtn").show();
    $(".hrmanagBtn").show();
    $(".trackingBtn").show();
    });


    // start here submenu-customer submenu code 

	$(".hr-cust").click(function(){
  	$(".submenu-Customer").show();
  	$(".main-hr").hide();
  	$(".hr-order").hide();
  	$(".hr-invoice").hide();
  	$(".hr-product").hide();
  	$(".hr-sales").hide();
    $(".hr-payment").hide();
  	$(".main-hr-close").hide();
  	});

	$(".submenu-Customer-close").click(function(){
    $(".submenu-Customer").hide();
    $(".main-hr").show();
    $(".hr-order").show();
    $(".hr-invoice").show();
    $(".hr-product").show();
    $(".hr-sales").show();
    $(".hr-payment").show();
    $(".main-hr-close").show();
  	});



 // start here submenu-order submenu code 

  $(".hr-order").click(function(){
    $(".submenu-order").show();
    $(".main-hr").hide();
    $(".hr-cust").hide();
    $(".hr-invoice").hide();
    $(".hr-product").hide();
    $(".hr-sales").hide();
    $(".hr-payment").hide();
    $(".main-hr-close").hide();
    });

  $(".submenu-order-close").click(function(){
    $(".submenu-order").hide();
    $(".main-hr").show();
    $(".hr-cust").show();
    $(".hr-invoice").show();
    $(".hr-product").show();
    $(".hr-sales").show();
    $(".hr-payment").show();
    $(".main-hr-close").show();
    });


// start here submenu-invoice submenu code 

  $(".hr-invoice").click(function(){
    $(".submenu-invoice").show();
    $(".main-hr").hide();
    $(".hr-cust").hide();
    $(".hr-order").hide();
    $(".hr-product").hide();
    $(".hr-sales").hide();
    $(".hr-payment").hide();
    $(".main-hr-close").hide();
    });

  $(".submenu-invoice-close").click(function(){
    $(".submenu-invoice").hide();
    $(".main-hr").show();
    $(".hr-cust").show();
    $(".hr-invoice").show();
    $(".hr-product").show();
    $(".hr-sales").show();
    $(".hr-payment").show();
    $(".main-hr-close").show();
    });


  // start here submenu-invoice submenu code 

  $(".hr-invoice").click(function(){
    $(".submenu-invoice").show();
    $(".main-hr").hide();
    $(".hr-cust").hide();
    $(".hr-order").hide();
    $(".hr-product").hide();
    $(".hr-sales").hide();
    $(".hr-payment").hide();
    $(".main-hr-close").hide();
    });

  $(".submenu-invoice-close").click(function(){
    $(".submenu-invoice").hide();
    $(".main-hr").show();
    $(".hr-cust").show();
    $(".hr-invoice").show();
    $(".hr-product").show();
    $(".hr-sales").show();
    $(".hr-payment").show();
    $(".main-hr-close").show();
    });



   // start here submenu-invoice submenu code 

  $(".hr-product").click(function(){
    $(".submenu-product").show();
    $(".main-hr").hide();
    $(".hr-cust").hide();
    $(".hr-order").hide();
    $(".hr-invoice").hide();
    $(".hr-sales").hide();
    $(".hr-payment").hide();
    $(".main-hr-close").hide();
    });

  $(".submenu-product-close").click(function(){
    $(".submenu-product").hide();
    $(".main-hr").show();
    $(".hr-cust").show();
    $(".hr-invoice").show();
    $(".hr-product").show();
    $(".hr-sales").show();
    $(".hr-payment").show();
    $(".main-hr-close").show();
    });


    // start here submenu-invoice submenu code 

  $(".hr-sales").click(function(){
    $(".submenu-sales").show();
    $(".main-hr").hide();
    $(".hr-cust").hide();
    $(".hr-order").hide();
    $(".hr-invoice").hide();
    $(".hr-product").hide();
    $(".hr-payment").hide();
    $(".main-hr-close").hide();
    });

  $(".submenu-sales-close").click(function(){
    $(".submenu-sales").hide();
    $(".main-hr").show();
    $(".hr-cust").show();
    $(".hr-invoice").show();
    $(".hr-product").show();
    $(".hr-sales").show();
    $(".hr-payment").show();
    $(".main-hr-close").show();
    });



  // start here submenu-invoice submenu code 

  $(".hr-payment").click(function(){
    $(".submenu-payment").show();
    $(".main-hr").hide();
    $(".hr-cust").hide();
    $(".hr-order").hide();
    $(".hr-invoice").hide();
    $(".hr-product").hide();
    $(".hr-sales").hide();
    $(".main-hr-close").hide();
    });

  $(".submenu-payment-close").click(function(){
    $(".submenu-payment").hide();
    $(".main-hr").show();
    $(".hr-cust").show();
    $(".hr-invoice").show();
    $(".hr-product").show();
    $(".hr-sales").show();
    $(".hr-payment").show();
    $(".main-hr-close").show();
    });


 // start here submenu-invoice submenu code 
  $(".dph-order").click(function(){
    $(".submenu-dispatch-order").show();
    $(".hr-order").hide();
    $(".dphto-order").hide();
    $(".main-order-btn").hide();

    });

  $(".submenu-dispatch-order-close").click(function(){
    $(".submenu-dispatch-order").hide();
    $(".hr-order").show();
    $(".dphto-order").show();
    $(".main-order-btn").show();
    });


 // start here submenu-invoice submenu code 
  $(".pt-booking").click(function(){
    $(".submenu-portalbooking").show();
    $(".main-book").hide();
    $(".ws-book").hide();
    $(".dp-book").hide();
    $(".onr-book").hide();
    $(".app-book").hide();
    $(".close-booking").hide();

    });

  $(".submenu-portalbooking-close").click(function(){
     $(".submenu-portalbooking").hide();
    $(".main-book").show();
    $(".ws-book").show();
    $(".dp-book").show();
    $(".onr-book").show();
    $(".app-book").show();
    $(".close-booking").show();
    });





// start here trp serivces submenu code 
  $(".tp-service").click(function(){
    $(".submenu-trp-service").show();
    $(".pt-booking").hide();
    $(".submenu-portalbooking-close").hide();
    $(".tpo-service").hide();

    });

  $(".submenu-trp-service-close").click(function(){
     $(".submenu-trp-service").hide();
    $(".pt-booking").show();
    $(".submenu-portalbooking-close").show();
    $(".tpo-service").show();
    });



  // start here other serivces submenu code 
  $(".tpo-service").click(function(){
    $(".submenu-other-service").show();
    $(".pt-booking").hide();
    $(".submenu-portalbooking-close").hide();
    $(".tp-service").hide();

    });

  $(".submenu-other-service-close").click(function(){
     $(".submenu-other-service").hide();
    $(".pt-booking").show();
    $(".submenu-portalbooking-close").show();
    $(".tp-service").show();
    }); 

     // start here hospital serivces submenu code 
  $(".hp-ser").click(function(){
    $(".submenu-hptl-service").show();
    $(".hc-ser").hide();
    $(".submenu-trp-service-close").hide();
    $(".tp-service").hide();

    });

  $(".submenu-hptl-service-close").click(function(){
    $(".submenu-hptl-service").hide();
    $(".hc-ser").show();
    $(".submenu-trp-service-close").show();
    $(".tp-service").show();
    });







});




function myFunction(x) {
    x.classList.toggle("change");
}
