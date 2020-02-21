
  function signup()
  {
   
        var fullname = $("#fullname").val().trim();
        var emailid = $("#emailid").val().trim();
        var password = $("#password").val().trim();
      
      
      filter  = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
       var sts=true;
       
       if(fullname=="")
       {
           sts=false;
          $("#fullname").css({"border":"2px solid red"});
           $("#fnameerror").text("Please enter Name");
           
       }
       else{
           $("#fullname").css({"border":"2px solid green"});
           $("#fnameerror").text("");
       }
       
       if(emailid=="")
      {
          sts=false;
          $("#emailid").css({"border":"2px solid red"});
          $("#emailerror").text("Please enter Email");
      }
      else if(!filter.test(emailid))
      {
          sts=false;
          $("#emailid").css({"border":"2px solid red"});
          $("#emailerror").text("Invalid email format");
      }
      else
      {
          $("#emailid").css({"border":"2px solid green"});
          $("#emailerror").text("");
      }
      
      if(password=="")
      {
          sts=false;
          $("#password").css({"border":"2px solid red"});
          $("#passworderror").text("Please enter password");
      }
      else
      {
          $("#password").css({"border":"2px solid green"});
          $("#passworderror").text("");
      }
  
       
       if(sts==true)
      {
          $("#form1").submit();
      }	
       
  }

  function loginCheck(){

    var emailid = $("#emailid").val().trim();
    var password = $("#password").val().trim();

    var sts=true;
    filter  = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

    if(emailid=="")
    {
        sts=false;
        $("#emailid").css({"border":"2px solid red"});
        $("#emailerror").text("Please enter Email");
    }
    else if(!filter.test(emailid))
    {
        sts=false;
        $("#emailid").css({"border":"2px solid red"});
        $("#emailerror").text("Invalid email format");
    }
    else
    {
        $("#emailid").css({"border":"2px solid green"});
        $("#emailerror").text("");
    }
    
    if(password=="")
    {
        sts=false;
        $("#password").css({"border":"2px solid red"});
        $("#passworderror").text("Please enter password");
    }
    else
    {
        $("#password").css({"border":"2px solid green"});
        $("#passworderror").text("");
    }
     
    if(sts==true)
    {
        $("#form1").submit();
    }	
  }

function saveProduct(){

    var productName = $("#pname").val().trim();
    var productCompany = $("#pcmpny").val().trim();
      var sts=true;

     if(productName=="")
       {
           sts=false;
          $("#pname").css({"border":"2px solid red"});
           $("#perror").text("Please enter Product Name");
           
       }
       else{
           $("#pname").css({"border":"2px solid green"});
           $("#perror").text("");
       }

      if(productCompany == "")
      {
           sts=false;
          $("#pcmpny").css({"border":"2px solid red"});
           $("#pcmpny").text("Please enter Product Company");
           
       }
       else{
           $("#pcmpny").css({"border":"2px solid green"});
           $("#pcmpny").text("");
       }

 if(sts==true)
    {
        $("#form1").submit();
    } 

}

