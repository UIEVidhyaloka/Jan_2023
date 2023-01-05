// Get the modal
var modal = document.getElementById("donateModal");

// Get the button that opens the modal
var btn = document.getElementById("btn-donatenow");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// // When the user clicks the button, open the modal
btn.onclick = function () {
  modal.style.display = "block";
};

// // // When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
  $(".indian-donor-form").hide();
  $(".donor-options").show();
  $(".upi-payment").hide();
  $(".bank-transfer").hide();
};

// // // When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
  if (event.target == modals) {
    modals.style.display = "none";
  }
};

$("#indian-donor").click(function () {
  $(".indian-donor-form").show();
  $(".donor-options").hide();
  $(".upi-payment").hide();
  $(".bank-transfer").hide();
});

$("#foreign-donor").click(function () {
  $(".donor-options").hide();
  $(".indian-donor-form").show();
  $(".upi-payment").hide();
  $(".bank-transfer").hide();
});

$(".donor-form-back").click(function () {
  $(".indian-donor-form").hide();
  $(".donor-options").show();
  $(".upi-payment").hide();
  $(".bank-transfer").hide();
});

// $("#donor-form" ).submit(function( event ) {
// $(".indian-donor-form").hide();
// $(".upi-payment").show();
// $(".donor-options").hide();
// $(".bank-transfer").hide();
// event.preventDefault();
// });

$('form[id="donor-form"]').validate({
  rules: {
    firstname: "required",
    lastname: "required",
    inputemail: {
      required: true,
      email: true,
    },
    phoneno: "required",
    address: "required",
    state: "required",
    city: "required",
    pincode: "required",
    panno: "required",
    findoption: "required",
  },
  messages: {
    firstname: "Firstname is required",
    lastname: "Lastname is required",
    phoneno: "Phone Number is required",
    address: "Address is required",
    state: "State is required",
    city: "City is required",
    panno: "Pan No is required",
    pincode: "Pin Code is required",
    inputemail: "Enter a valid email",
    findoption: "Select any one option from above",
  },
  submitHandler: function (form) {
    $(".indian-donor-form").hide();
    var selectedValue = $("input[name='Payment_type']:checked").val();
    if (selectedValue === "UPI") {
      $(".upi-payment").show();
    } else if (selectedValue === "Bank Transfer") {
      $(".bank-transfer").show();
    } 
    else {

      window.location.href =
        "https://www.tpsl-india.in/PaymentGateway/txnreq.pg?id=ca67000c-0c2a-44e7-99a0-4d510a2f8efe";
    }
    $(".donor-options").hide();
  },
});

// $('#donor-form').submit(function(e) {
// e.preventDefault();
// $(".indian-donor-form").hide();
// $(".upi-payment").show();
// $(".donor-options").hide();
// $(".bank-transfer").hide();
// });

$(".upi-back").click(function () {
  $(".upi-payment").hide();
  $(".indian-donor-form").show();
  $(".donor-options").hide();
  $(".bank-transfer").hide();
});

$(".bank-payment").click(function () {
  $(".indian-donor-form").hide();
  $(".bank-transfer").show();
  $(".upi-payment").hide();
  $(".donor-options").hide();
});

$(".other-amount").on("click", function () {
  $(".child1").removeClass("subtablinkactive");
  $(".child3").removeClass("subtablinkactive");
  $(".child5").removeClass("subtablinkactive");
});

$(".child1").click(function () {
  $(".other-amount").val("1000")
  $("#general-cnr1").show()
  $("#general-cnr").hide()
  $("#general-cnr2").hide()
  $("#general-cnr3").hide()
  $(".child1").addClass("subtablinkactive");
  $(".child3").removeClass("subtablinkactive");
  $(".child5").removeClass("subtablinkactive");
});

$(".child3").click(function () {
  $(".other-amount").val("3000")
  $("#general-cnr1").hide()
  $("#general-cnr").hide()
  $("#general-cnr2").show()
  $("#general-cnr3").hide()
  $(".child1").removeClass("subtablinkactive");
  $(".child3").addClass("subtablinkactive");
  $(".child5").removeClass("subtablinkactive");
});

$(".child5").click(function () {
  $(".other-amount").val("5000")
  $("#general-cnr1").hide()
  $("#general-cnr").hide()
  $("#general-cnr2").hide()
  $("#general-cnr3").show()
  $(".child1").removeClass("subtablinkactive");
  $(".child3").removeClass("subtablinkactive");
  $(".child5").addClass("subtablinkactive");
});

  $("#general-cnr1").hide()
  $("#general-cnr").show()
  $("#general-cnr2").hide()
  $("#general-cnr3").hide()

$(".confirms").click(function () {
  if ($.trim($("#transaction_no").val()) == "") {
    $("#errorTransNo").show();
  } else {
    $("#errorTransNo").hide();
    //For staging deployment
     window.location.href = window.location.origin + "/pages/thankyou.html";

    // For Dev
     //window.location.href = "D:/evidyaloka/05-09-2022/pages/thankyou.html";
  }
   window.location.href =  window.location.origin + "/pages/thankyou.html";
});



function scrollToTop() {
  window.scrollTo(0, 0);
}

const accordion = document.getElementsByClassName("accordion-container");

for (i = 0; i < accordion.length; i++) {
  accordion[i].addEventListener("click", function () {
    this.classList.toggle("active");
  });
}

var modals = document.getElementById("inquireModal");
var btns = document.getElementById("btn-inquire");
var spans = document.getElementsByClassName("closes")[0];
btns.onclick = function () {
  modals.style.display = "block";
};
spans.onclick = function () {
  modals.style.display = "none";
};

$("#btn-inquire").click(function () {
  $(".inquire-form").show();
});

const form = document.getElementById("donor-form");
console.log("sssss", form);


var amount=1000;

function child1() {
  amount=1000;
  console.log("child1", amount);
}
function child3() {
  amount=3000;
  console.log("child3", amount);
}
function child5() {
  amount=5000;
  console.log("child5",amount );
}
function getOtherAmount() {
  amount = document.getElementById("other-amount").value;
  
  console.log("xvalue", amount);
}


form.addEventListener("submit", function (e) {
    let updateFormData=new FormData();
    var donorId;
  e.preventDefault();
  var formData = new FormData(form);
  formData.append("amount", amount);
  formData.set("res_status","Resident Indian")
  updateFormData=formData
  for(const entry of formData){
    console.log(entry); // Array: ['entryName', 'entryValue']
  }
  var paymenttype = formData.get("Payment_type")

 console.log(paymenttype)

  console.log("updateforms",[...updateFormData])
  fetch("https://uat.evidyaloka.org/v2/api/donor", 
  {
    method: "POST",
    body: updateFormData,
  })
    .then((res) => res.json())
    
    .then((data) => {
      console.log(data)
      console.log(data.donation_id)
      console.log(data.payment_modes)
      donorId=data.donation_id
      console.log(donorId)
      localStorage.setItem("donor_id",donorId );
      updateFormData.append("donor_id", donorId);

  console.log("updateforms",[...updateFormData])
 
      if(paymenttype=="Online")
    {
    
  console.log([...updateFormData])
  let onlineFormData=new FormData();
  onlineFormData=updateFormData
   onlineFormData.append("ajax",true);
   onlineFormData.append("id", donorId);
   onlineFormData.append("amount", amount);
  console.log([...onlineFormData])
  fetch("https://uat.evidyaloka.org/v2/api/donor/payment/online", 
  {
    method: "POST",
    body:onlineFormData,
  })
    .then((res) =>res.json())
    
    .then((data) => {

      console.log(data)
    })



           window.location.href =
            "https://www.tpsl-india.in/PaymentGateway/txnreq.pg?id=ca67000c-0c2a-44e7-99a0-4d510a2f8efe";
        
    }
    })
    
        //console.log("resdata",resdata)
    //var don=[]
    //don=JSON.parse(localStorage.getItem(("donor_id")))
   // console.log("end",don)
    //.catch(function (error) {
    //  console.log(error);
   // });
    
    // updateFormData=formData
    // console.log("updation",updateFormData)
    // console.log("formation",formData)
    
    
   // updateFormData.append('donor_id',localStorage.getItem("donor_id"))
   // console.log("updateforms,,,,",[...updateFormData])
   //formData.append("donorId", don);
   
    console.log("updateforms",[...updateFormData])
   
});

const donoridform = document.getElementById("donoridform");
console.log("formname", donoridform);
var don
     
 donoridform.addEventListener("submit", function (e) {
     don=JSON.parse(localStorage.getItem("donor_id"))
     console.log(don)
   // let updateFormData=new FormData();
   // var donorId;
  e.preventDefault();
  var formDonor = new FormData(donoridform);

  formDonor.append("donor_id",don);
  console.log([...formDonor])
  fetch("https://uat.evidyaloka.org/v2/api/donor/payment/", 
  {
    method: "POST",
    body:formDonor,
  })
    .then((res) =>res.json())
    
    .then((data) => {

      console.log(data)
    })

  })

  const banktransferform = document.getElementById("banktransferform");
console.log("banktransferform", banktransferform);
var don
     
 banktransferform.addEventListener("submit", function (e) {
     don=JSON.parse(localStorage.getItem("donor_id"))
     console.log(don)
  e.preventDefault();
  var formbanktransfer = new FormData(banktransferform);

  formbanktransfer.append("donor_id",don);
  console.log([...formbanktransfer])
  fetch("https://uat.evidyaloka.org/v2/api/donor/payment/", 
  {
    method: "POST",
    body:formbanktransfer,
  })
    .then((res) =>res.json())
    
    .then((data) => {

      console.log(data)
    })

  })
  

  // $(".accordion-container").each(function(index, element) {
  //   $(element).css('display', 'none');
  //   return index < 4;
  // });