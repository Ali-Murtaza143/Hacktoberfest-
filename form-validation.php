<!DOCTYPE html>
<html>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <head>
    <title>Home</title>
    <meta name="description" content="">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="description" content="">
    <meta name="robots" content="" />
    <meta name="googlebot" content="" />
    <meta name="bingbot" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;1,100&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="icon" href="../images/seo-fav7.svg" type="image/png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <style type="text/css" media="screen">
    .form_main {
    width: 100%;
    }
    .form_main form {
    border: 2px solid #000;
    padding: 20px;
    border-radius: 5px;
}
    .form_main h4 {
    font-family: roboto;
    font-size: 20px;
    font-weight: 300;
    margin-bottom: 15px;
    margin-top: 20px;
    text-transform: uppercase;
    }
    .heading {
    border-bottom: 1px solid #fcab0e;
    padding-bottom: 9px;
    position: relative;
    }
    .heading span {
    background: #9e6600 none repeat scroll 0 0;
    bottom: -2px;
    height: 3px;
    left: 0;
    position: absolute;
    width: 75px;
    }
    .form {
    border-radius: 7px;
    padding: 6px;
    }
    .txt[type="text"] {
    border: 1px solid #ccc;
    margin: 10px 0;
    padding: 10px 0 10px 5px;
    width: 100%;
    }
    .txt_3[type="text"] {
    margin: 10px 0 0;
    padding: 10px 0 10px 5px;
    width: 100%;
    }
    .txt2[type="submit"] {
    background: #242424 none repeat scroll 0 0;
    border: 1px solid #4f5c04;
    border-radius: 25px;
    color: #fff;
    font-size: 16px;
    font-style: normal;
    line-height: 35px;
    margin: 10px 0;
    padding: 0;
    text-transform: uppercase;
    width: 30%;
    }
    .txt2:hover {
    background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
    color: #5793ef;
    transition: all 0.5s ease 0s;
    }
    </style>
  </head>
  <body>
      <div class="container mt-5 mb-5">
        <div class="row">
          <div class="col-md-6 m-auto">
            <div class="form_main">
              <div class="form">
                <form action="#" onsubmit="return validation()" class="bg-light">
                  <div class="row mt-3">
                    <div  class="col-lg-12 col-sm-12 col-12">
                      <label>user Name</label>
                      <input type="text" placeholder="Please input your Name" id="user" class="form-control" autocomplete="off">
                      <span id="username" class="text-danger font-weight-bold mt-3"></span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div  class="col-lg-12 col-sm-12 col-12">
                      <label>Password</label>
                      <input type="text" placeholder="Please input your mobile No" id="pass" class="form-control" autocomplete="off">
                      <span id="password" class="text-danger font-weight-bold mt-3"></span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div  class="col-lg-12 col-sm-12 col-12">
                      <label>Conform Password</label>
                      <input type="text" placeholder="Please input your Email" id="conpass" class="form-control" autocomplete="off">
                      <span id="conformpassword" class="text-danger font-weight-bold mt-3"></span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div  class="col-lg-12 col-sm-12 col-12">
                      <label>Mobile</label>
                      <input type="text" placeholder="Please input your Email" id="nummobile" class="form-control" autocomplete="off">
                      <span id="mobile" class="text-danger font-weight-bold mt-3"></span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div  class="col-lg-12 col-sm-12 col-12">
                      <label>Email</label>
                      <input type="text" placeholder="Please input your Email" id="email" class="form-control" autocomplete="off">
                      <span id="emailbox" class="text-danger font-weight-bold mt-3"></span>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div  class="col-lg-12 col-sm-12 col-12">
                       <input type="submit" value="submit" name="submit" class="txt2">
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
     <script>
     
      function validation(){

      var user = document.getElementById('user').value;
      var pass = document.getElementById('pass').value;
      var conpass = document.getElementById('conpass').value;
      var nummobile = document.getElementById('nummobile').value;
      var email = document.getElementById('email').value;

      // for user only
       if(user == ""){
           document.getElementById('username').innerHTML ="Please fill this field";
         return false;
         }

       if((user.length <= 2) || (user.length > 20)){
         document.getElementById('username').innerHTML =" user length must be between 2 to 20";
         return false;
        }

       if(!isNaN(user)){
         document.getElementById('username').innerHTML =" Only characters are allowed thanks";
         return false;
        }
       // for user only

        // for password only

       if(pass == ""){
           document.getElementById('password').innerHTML ="Please fill this field password";
         return false;
         }

       if((pass.length <= 5) || (pass.length > 20)){
         document.getElementById('password').innerHTML =" Password length must be between 5 to 20";
         return false;
        }

       if(!isNaN(pass)){
         document.getElementById('password').innerHTML =" Only Number are allowed thanks";
         return false;
        }

         // for password only


       // forcomformation password

         if(conpass == ""){
           document.getElementById('conformpassword').innerHTML ="Please fill this field Conform password";
         return false;
         }

       if(pass!=conpass){
         document.getElementById('conformpassword').innerHTML ="Password is not matching";
         return false;
        }
       // forcomformation password

     

       // for Number only
        if(nummobile == ""){
           document.getElementById('mobile').innerHTML ="Please fill this field Mobile Number";
         return false;
         }

       if(isNan(nummobile)){
           document.getElementById('mobile').innerHTML ="Mobile Number is must be Numbers";
         return false;
         }

         if(nummobile.length!=10){
           document.getElementById('mobile').innerHTML ="Mobile Number is must be 10 digits only";
         return false;
         }
       // for Number only

        // for Email only

        if(email == ""){
           document.getElementById('emailbox').innerHTML ="Please fill this field Mobile Number";
         return false;
         }

         if(email.indexOf('@') <= 0){
           document.getElementById('emailbox').innerHTML ="@ invalid";
         return false;
         }

         if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
          document.getElementById('emailbox').innerHTML =". invalid position";
         return false;
         }

      // for Email only

      }
    
    </script>
  </html>
</body>
