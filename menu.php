<style>

*{
  padding:0px;
  margin:0px;
}

.back{
  height:100vh;
  width:100%;
  background:linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(http://www.imgbase.info/images/safe-wallpapers/miscellaneous/simple/55344_simple_simple_blue_smiple_blue_with_stars.jpg);
}

.one{
  height:400vh;
  width:100%;
  background:url(http://res.cloudinary.com/samarthdesigns/image/upload/v1487090133/1_vzz3ln.png) center;
  background-size:cover;
  position:fixed;
  top:0px;
  opacity:0.6;
}

.oneani{
  animation:one 35s linear infinite;
}


.two{
  height:400vh;
  width:100%;
  background:url(http://res.cloudinary.com/samarthdesigns/image/upload/v1487090133/2_htb01i.png) center;
  background-size:cover;
  position:fixed;
  top:0px;
  opacity:0.4;
  transform:scale(1);
}

.twoani{
  animation:one 70s linear infinite;
}

@import url(http://fonts.googleapis.com/css?family=Megrim);
body{
  font: 400 1em/1.5 "Neuton";
  font-family: OCR A Std, monospace;
}
#menu-wrapper{
  position:fixed;
  left:50%;
  top:50%;
  transform:translate(-50%,-50%);
  width:50%;
  height:50%;
}
#menu-header{
  text-align:center;
  font-size:64px;
}
#menu-selectors{
  position:fixed;
  left:50%;
  top:70%;
  transform:translate(-50%,-50%);
  list-style-type:none;
}
#menu-selectors li{
  text-align:center;
  margin:15px;
  margin-left:-40px;
}
.selected{
  color:white;
}
#hidden-menu{
  position:fixed;
  left:50%;
  top:50%;
  transform:translate(-50%,-50%);
  width:50%;
  height:50%;
  visibility:hidden;
}
a {
  color: black;
  text-decoration: none;
  transition: 0.3s all ease;
  font-family: OCR A Std, monospace;
}
a:hover {
  color: #B15947;
}
a:focus {
  text-decoration: none;
}
a:active {
  color: #FFF;
}

</style>

<link href='https://fonts.googleapis.com/css?family=Lato:300' rel='stylesheet' type='text/css'>
<div class="one"></div>
<div class="two"></div>
<div class="back">
</div>

<div id='menu-wrapper'>
  <div id='menu-header'>Menu du Jeu</div>
  <ul id='menu-selectors'>
    <li class='main-menu selected'><a href="Views/inscription.php">Inscription</a></li>
    <li class='main-menu'><a href="Views/login.php">Login</a></li>
  </br>
  <li class='main-menu selected'><a href="Views/personnageview.php">Créer un Personnage</a></li>
    <li class='main-menu'><a href="Views/niveauview.php">Créer un Niveau</a></li>
  </br>
    <li class='main-menu'><a href="http://www.kongregate.com/games/DustinAux/the-enchanted-cave-2">Lancer la partie</a></li>
  </ul>
</div>
