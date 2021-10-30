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
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <link rel="icon" href="../images/seo-fav7.svg" type="image/png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="style.css">
      <style type="text/css" media="screen">
        button {
     width: 100%;
        }
      </style>
    </head>
    <body>
    
           <div class="container mt-4">
              <div class="row">
                <div class="col-lg-8 col-sm-8 col-12">
                <h5>Add Two numbers</h5>
                  <form action="" class="mt-4 d-flex">
                    <input type="number" id="fieldone" class="form-control mr-3">
                    <input type="number" id="fieldtwo" class="form-control mr-3">
                     <button type="button" onclick="check()" class="btn-b">Click Me!</button>
                  </form>
                  <br>
                  <h1 id="result"></h1>
                </div>
              </div>
            </div>

       <script src="js/plugin.js"></script>
       <script>
     
   
        function check() {
         var dataone = document.getElementById('fieldone').value;
         var datatwo = document.getElementById('fieldtwo').value;
        
         var multi = parseInt(dataone) * parseInt(datatwo);
         
         document.getElementById('result').innerHTML = multi;
           
       }

      </script>
     </html>
    </body>
