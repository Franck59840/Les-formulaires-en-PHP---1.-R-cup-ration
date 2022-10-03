<?php 
    var_dump($_POST);
    echo  $_POST['userLastName'];
    echo"<br>";
    echo  $_POST['userFirstName'];
    echo"<br>";
    echo  $_POST['userPhone'];
    echo"<br>";
    echo  $_POST['userEmail'];
    echo"<br>";
    echo  $_POST['userMessage'];
    echo"<br>";
    echo  $_POST['menuDestination'];
?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <form  action="/thank.php" target="_blank" method="post">
            <div>
            <label  for="lastname"> Nom :</label>
                <input  type="text"  id="lastname"  name="userLastName">
            </div>
            <div>
            <label  for="firstname">Prénom :</label>
                <input  type="text"  id="firstname"  name="userFirstName">
            </div>
            
            <div>
            <label  for="phone">Téléphone :</label>
                <input  type="phone"  id="phone"  name="userPhone">
            </div>
            <div>
            <div>
            <label  for="email">Courriel :</label>
                <input  type="email"  id="email"  name="userEmail">
            </div>
            <select for="menu "name="menuDestination">
                <option>Sujet</option>
                <option>PHP c'est bien ?</option>
                <option>Symfony c'est mieux</option>
                <option>Je reste sur Javascript</option>
            </select>
            <div>
            <label  for="message">Message :</label>
                <textarea  id="message"  name="userMessage"></textarea>
            </div>
           
            
            <div  class="button">
            <button  type="submit">Envoyer votre message</button>
            </div>
        </form>
        </body>
    </html>
