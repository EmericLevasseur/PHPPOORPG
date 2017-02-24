<style>
@import "https://fonts.googleapis.com/css?family=Karla";
:root {
  font-size: 13px;
}

@media screen and (min-width: 1000px) {
  :root {
    font-size: 14px;
  }
}
@media screen and (min-width: 1240px) {
  :root {
    font-size: 16px;
  }
}
@media screen and (min-width: 1480px) {
  :root {
    font-size: 17px;
  }
}
body {
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  font-family: 'Karla';
  font-size: 1rem;
  font-weight: 300;
  color: #EEEEEE;
  line-height: 2em;
  background: #EEEEEE;
}

.main {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-pack: distribute;
      justify-content: space-around;
  -webkit-box-align: baseline;
      -ms-flex-align: baseline;
          align-items: baseline;
  height: 100vh;
  background: -webkit-linear-gradient(330deg, #383745 50%, #22202B 50%);
  background: linear-gradient(120deg, #383745 50%, #22202B 50%);
}
.main .header,
.main legend.header {
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 1.25rem;
  margin: 0.5em 0;
}
.main .bio,
.main .contact {
  max-width: 320px;
  margin-top: 20vh;
}
.main .bio .profile-img {
  max-width: 7em;
  border-radius: 50%;
}
.main .bio .bio-link {
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 1rem;
  display: inline-block;
  float: left;
  clear: left;
  text-decoration: none;
  color: #EEEEEE;
  margin-bottom: 0.25em;
  -webkit-transition: color 300ms ease-in-out;
  transition: color 300ms ease-in-out;
}
.main .bio .bio-link i {
  margin-left: 8px;
}
.main .bio .bio-link::after {
  display: block;
  content: '';
  height: 1px;
  width: 0;
  background: #CA8D6E;
  -webkit-transition: width 300ms ease-in-out;
  transition: width 300ms ease-in-out;
}
.main .bio .bio-link:hover::after {
  width: 100%;
}
.main .bio .bio-link:hover {
  color: #CA8D6E;
}
.main .contact {
  color: #CA8D6E;
}
.main .contact form fieldset {
  font-size: 1rem;
  position: relative;
  border: none;
  margin-bottom: 0.25em;
  padding: 0.25em 0;
}
.main .contact form fieldset label {
  font-size: 0.875rem;
  display: block;
  position: absolute;
  right: 0.125em;
  top: 1.5em;
  color: #CA8D6E;
}
.main .contact form input,
.main .contact form textarea,
.main .contact form button {
  border: 0;
}
.main .contact form input:focus,
.main .contact form textarea:focus,
.main .contact form button:focus {
  outline: none;
}
.main .contact form input,
.main .contact form textarea {
  display: block;
  font-family: 'Karla';
  font-size: 1rem;
  padding: 0.5em 0;
  width: 280px;
  background: none;
  color: #CA8D6E;
  border-bottom: 1px solid #7D6962;
  -webkit-transition: border 300ms ease-in-out;
  transition: border 300ms ease-in-out;
}
.main .contact form input:focus,
.main .contact form textarea:focus {
  border-bottom: 1px solid #CA8D6E;
}
.main .contact form input::-webkit-input-placeholder,
.main .contact form textarea::-webkit-input-placeholder {
  color: #7D6962;
}
.main .contact form input::-moz-placeholder,
.main .contact form textarea::-moz-placeholder {
  color: #7D6962;
}
.main .contact form input:-ms-input-placeholder,
.main .contact form textarea:-ms-input-placeholder {
  color: #7D6962;
}
.main .contact form input::placeholder,
.main .contact form textarea::placeholder {
  color: #7D6962;
}
.main .contact button {
  text-transform: uppercase;
  letter-spacing: 3px;
  font-size: 1rem;
  display: block;
  background: #CA8D6E;
  color: #EEEEEE;
  padding: 1em 2em;
  box-shadow: 0 0 40px 0 rgba(21, 21, 21, 0.6);
}
.main .contact button:hover {
  -webkit-animation: swell 500ms ease-in-out;
          animation: swell 500ms ease-in-out;
  cursor: pointer;
}
.main .contact textarea {
  resize: none;
}

.main {
  overflow: hidden;
  -webkit-animation: Page 600ms ease-in-out forwards;
          animation: Page 600ms ease-in-out forwards;
}

.bio {
  -webkit-animation: Bio 600ms ease-in-out forwards;
          animation: Bio 600ms ease-in-out forwards;
}

.contact {
  -webkit-animation: Contact 600ms ease-in-out forwards;
          animation: Contact 600ms ease-in-out forwards;
}

@-webkit-keyframes Page {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}

@keyframes Page {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}
@-webkit-keyframes Bio {
  0% {
    -webkit-transform: translateX(-50vw);
            transform: translateX(-50vw);
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@keyframes Bio {
  0% {
    -webkit-transform: translateX(-50vw);
            transform: translateX(-50vw);
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@-webkit-keyframes Contact {
  0% {
    -webkit-transform: translateX(50vw);
            transform: translateX(50vw);
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@keyframes Contact {
  0% {
    -webkit-transform: translateX(50vw);
            transform: translateX(50vw);
  }
  100% {
    -webkit-transform: translateX(0);
            transform: translateX(0);
  }
}
@-webkit-keyframes swell {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}
@keyframes swell {
  0% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
  50% {
    -webkit-transform: scale(1.1);
            transform: scale(1.1);
  }
  100% {
    -webkit-transform: scale(1);
            transform: scale(1);
  }
}

</style>


<div class="main">
  <div class="bio"><img class="profile-img" src="https://takethisgame.files.wordpress.com/2015/11/nidmus6g.png?w=300&h=300&crop=1"/>
    <h3 class="header">Créer votre compte</h3>
    <p>Devenez membre du site pour jouer à la nouvelle version de Code Quest !</p><a class="bio-link" href="https://twitter.com/alexboffey">Twitter<i class="fa fa-twitter"></i></a><a class="bio-link" href="https://github.com/alexboffey">Github<i class="fa fa-github"></i></a><a class="bio-link" href="http://codepen.io/alexboffey/">CodePen<i class="fa fa-codepen"></i></a>

    <div class="contact">
      <form id="form">
    <fieldset>
    <button type="submit" id="btn-submit"><a href="index.php">Accueil</a></button>
  </fieldset>
</form>
</div>
  </div>
  <div class="contact">
    <form id="form" method="post" action="../Traitements/inscription.traitement.php">
      <legend class="header">Inscription</legend>
      <fieldset>
        <label class="fa fa-user" for="nom" aria-hidden="true"></label>
        <input type="text" placeholder="Votre nom" name="non" id="name-input"/>
      </fieldset>
      <fieldset>
        <label class="fa fa-envelope" for="prenom" aria-hidden="true"></label>
        <input type="text" placeholder="Votre prénom" name="prenom" id="email-input"/>
      </fieldset>
      <fieldset>
        <label class="fa fa-envelope" for="pseudo" aria-hidden="true"></label>
        <input type="text" placeholder="Votre pseudo" name="pseudo" id="email-input"/>
      </fieldset>
      <fieldset>
        <label class="fa fa-envelope" for="descriptif" aria-hidden="true"></label>
        <input type="text" placeholder="Votre descriptif" name="descriptif" id="email-input"/>
      </fieldset>
      <fieldset>
        <label class="fa fa-envelope" for="email" aria-hidden="true"></label>
        <input type="email" placeholder="Votre email" name="email" id="email-input"/>
      </fieldset>
      <fieldset>
        <label class="fa fa-envelope" for="mdp" aria-hidden="true"></label>
        <input type="password" placeholder="Votre mot de passe" name="mdp" id="email-input"/>
      </fieldset>
      <fieldset>
        <button type="submit" id="btn-submit">S'inscrire</button>

      </fieldset>
    </form>
  </div>
</div>
