 function payment(){
    $('.imagepreview').attr('src', $(this).find('img').attr('src'));
    $('#edit_data').modal('hide');

    var name = $("#fname").val();
  var email = $("#email").val();
  var address = $("#city").val();
  var amount = $("#package_price").val();
   var options = {
    "key": "rzp_live_mUFaTSANpv0QiA", 
    "amount": amount*100 , 
    "currency": "INR",
    "name": "Insan School",
    "description": "Test Transaction",
    "image": "https://example.com/your_logo",
    "handler": function (response){
      
      // console.log(response);

      jQuery.ajax({

        type:'POST',
        url: 'donation_process.php',
        data: "payment_id="+ response.razorpay_payment_id+"&name="+name+"&email="+email+"&address="+address+"&amount="+amount,
        success: function(result){
          alert("Paid successfully");
        }

      });
    }
  };
  var rzp1 = new Razorpay(options);
  rzp1.open();
 }

