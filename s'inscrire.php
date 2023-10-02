<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
 integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
  crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="./style.css">
    <title>Site touristique</title>
</head>
<body>
<?php include ("nav.php") ?>
<div class="fari">
<form> 
    <div class="page1" id="page1">
        <section class="container1">
          <section class="A">
          <div class="met">
              <img src="" alt="">
          </div>
        
         <div class="span">
              <h3>INSCRIPTION</h3>
                      <form action="" method="post" id="loi">
                        <div class="link">
                          <div>
                        <input type="text" name="name" placeholder="PRENOM" class="form-control"  id="prenom">
                        <span id="rajout"></span></div>
                            <div>
                        <input type="text" name="name" placeholder="NOM" class="form-control"  id="nom">
                        <span id="rajout1"></span></div>
                        </div><br><br>
                        <div class="link">
                          <div>
                        <input type="text" name=" email" placeholder="EMAIL" class="form-control"  id="email">
                        <span id="rajout2"></span></div>
                        <div>
                        <input type="text" name=" name" placeholder="PHONE NUMBER" class="form-control"  id="number">
                        <span id="rajout3"></span></div></div><br><br>
                        <div class="link">
                          <div>
                        <input type="text" name=" name" placeholder="AGE" class="form-control"  id="age">
                        <span id="rajout4"></span> 
                      </div>
                        <input type="radio" name=" gender" placeholder="MALE" class="form-control"  id="male">MALE
                        
                        <input type="radio" name=" gender" placeholder="FEMALE" class="form-control"  id="female">FEMALE
                      </div><br><br>
                        <div>
                        <input type="text" name=" name" placeholder="YOUR COUNTRY" class="form-control"  id="country">
                        <span id="rajout5"></span>
                      </div><br><br><br>
                      <button  class="vert" id="bonde">Validez</button>
                      </form>
                     
                    </div>
        </div>
    </section>
 </section>
     </div>
         </form> 

       <!-- lier js à html -->
      <script src="index.js"></script>
    
</body>
</html>