<style>
* {
  margin: 0px;
  padding: 0px;
}

body {
  font: 400 1em/1.5 "Neuton";
  background: #090d00;
  color: rgba(255, 255, 255, 0.25);
  text-align: center;
  margin: 0;
}


@keyframes backgroundAnimate {
  from {
    left: 0;
    top: 0;
  }
  to {
    left: -10000px;
    top: -2000px;
  }
}

#back {
  background: url(http://www.tranexnet.com/img/back.png) repeat 20% 20%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0.4;
  z-index: -1;
  -webkit-animation-name: backgroundAnimate;
  -webkit-animation-duration: 500s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-name: backgroundAnimate;
  -moz-animation-duration: 5s;
  -moz-animation-timing-function: linear;
  -moz-animation-iteration-count: infinite;
  -o-animation-name: backgroundAnimate;
  -o-animation-duration: 500s;
  -o-animation-timing-function: linear;
  -o-animation-iteration-count: infinite;
  animation-name: backgroundAnimate;
  animation-duration: 500s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

#front {
  background: url(http://www.tranexnet.com/img/front.png) repeat 35% 35%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  opacity: 0.6;
  z-index: -1;
  -webkit-animation-name: backgroundAnimate;
  -webkit-animation-duration: 300s;
  -webkit-animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  -moz-animation-name: backgroundAnimate;
  -moz-animation-duration: 300s;
  -moz-animation-timing-function: linear;
  -moz-animation-iteration-count: infinite;
  -o-animation-name: backgroundAnimate;
  -o-animation-duration: 300s;
  -o-animation-timing-function: linear;
  -o-animation-iteration-count: infinite;
  animation-name: backgroundAnimate;
  animation-duration: 300s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
}

p {
  text-transform: uppercase;
  letter-spacing: .5em;
  display: inline-block;
  border: 4px double rgba(255, 255, 255, 0.25);
  border-width: 4px 0;
  padding: 1.5em 0em;
  position: absolute;
  top: 18%;
  left: 50%;
  width: 40em;
  margin: 0 0 0 -20em;
}
p span {
  font: 700 4em/1 "Oswald", sans-serif;
  letter-spacing: 0;
  padding: .25em 0 .325em;
  display: block;
  margin: 0 auto;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.5);
  /* Clip Background Image */
  background: url(http://f.cl.ly/items/010q3E1u3p2Q0j1L1S1o/animated_text_fill.png) repeat-y;
  -webkit-background-clip: text;
  /* Animate Background Image */
  -webkit-text-fill-color: transparent;
  -webkit-animation: aitf 80s linear infinite;
  /* Activate hardware acceleration for smoother animations */
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
}


p span {
  font: 700 4em/1 "Oswald", sans-serif;
  letter-spacing: 0;
  padding: .25em 0 .325em;
  display: block;
  margin: 0 auto;
  text-shadow: 0 0 80px rgba(255, 255, 255, 0.5);
  /* Clip Background Image */
  background: url(http://f.cl.ly/items/010q3E1u3p2Q0j1L1S1o/animated_text_fill.png) repeat-y;
  -webkit-background-clip: text;
  /* Animate Background Image */
  -webkit-text-fill-color: transparent;
  -webkit-animation: aitf 80s linear infinite;
  /* Activate hardware acceleration for smoother animations */
  -webkit-transform: translate3d(0, 0, 0);
  -webkit-backface-visibility: hidden;
}

/* Animate Background Image */
@-webkit-keyframes aitf {
  0% {
    background-position: 0% 50%;
  }
  100% {
    background-position: 100% 50%;
  }
}

}

@import "https://fonts.googleapis.com/css?family=Source+Sans+Pro:700";
*,
*::before,
*::after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

a {
  color: white;
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

.flex {
  display: flex;
  align-items: center;
  justify-content: center;
  margin-top: 380px;
}

.bttn {
  width: 100px;
  height: 100px;
  line-height: 100px;
  text-align: center;
  text-transform: uppercase;
  letter-spacing: 2px;
  font-weight: bold;
  position: relative;
}
.bttn:after {
  transition: 0.3s all ease;
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  border-radius: 3px;
  border: 3px solid #B15947;
}
.bttn:before {
  content: '';
  position: absolute;
  border-radius: 3px;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
  background: #2E2E2E;
  z-index: -1;
}
.bttn:hover:after {
  -webkit-transform: rotate(135deg);
  transform: rotate(135deg);
}
.bttn:active {
  -webkit-transform: scale(20.1);
  transform: scale(20.1);
}
.bttn:active:before {
  background-color: #585858;
}
.bttn:active:after {
  border-color: #f1481b;
}

</style>
<div id="back"></div>
<p>
  A Coyote Edition
  <span>
    Code Quest
  </span>
  &mdash; Developped by IIM &mdash;
</p>
<div class="flex">
  <a href="menu.php" class="bttn">Jouer</a>
</div>
<div id="back"></div>
<div id="front"></div>
