<style>
@import url(http://fonts.googleapis.com/css?family=Megrim);
body{
  font-family: 'Megrim', cursive;
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
  background-color:#4183D7;
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
</style>

<!--<script src='http://code.jquery.com/jquery-latest.min.js'></script>-->
<div id='menu-wrapper'>
  <div id='menu-header'>Menu du Jeu</div>
  <ul id='menu-selectors'>
    <li class='main-menu selected'>Créer</li>
    <li class='main-menu'>Bottom</li>
    <li class='main-menu'>Left</li>
    <li class='main-menu'>Right</li>
  </ul>
</div>
<div id='hidden-menu'>
  <div id='menu-header'>Submenu</div>
  <ul id='menu-selectors'>
    <li class='hidden-menu'>Play</li>
    <li class='hidden-menu'>Credits</li>
  </ul>
</div>
