<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-grid.css.map')}}"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.css.map')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap-reboot.min.css.map')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css.map')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"> --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css.map')}}"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css')}}">
  
  <style>


    /*******************************************
    **********************
    ***********
    * SLick js css  startt***********************
    **********************************
    *************** */
    

/* Slider */
html, body {
      margin: 0;
      padding: 0;
      font-family: 'Ubuntu', sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 100%;

    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      
    }
    
    .slick-active {
      
    }

    .slick-current {
      
    }

    .slick-prev {
      display: none!important;
    }

    .slick-next {
      display: none!important;
    } 




.slick-slider
{
    position: relative;

    display: block;
    box-sizing: border-box;

    -webkit-user-select: none;
       -moz-user-select: none;
        -ms-user-select: none;
            user-select: none;

    -webkit-touch-callout: none;
    -khtml-user-select: none;
    -ms-touch-action: pan-y;
        touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
}

.slick-list
{
    position: relative;

    display: block;
    overflow: hidden;

    margin: 0;
    padding: 0;
}
.slick-list:focus
{
    outline: none;
}
.slick-list.dragging
{
    cursor: pointer;
    cursor: hand;
}

.slick-slider .slick-track,
.slick-slider .slick-list
{
    -webkit-transform: translate3d(0, 0, 0);
       -moz-transform: translate3d(0, 0, 0);
        -ms-transform: translate3d(0, 0, 0);
         -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
}

.slick-track
{
    position: relative;
    top: 0;
    left: 0;

    display: block;
    margin-left: auto;
    margin-right: auto;
}
.slick-track:before,
.slick-track:after
{
    display: table;

    content: '';
}
.slick-track:after
{
    clear: both;
}
.slick-loading .slick-track
{
    visibility: hidden;
}

.slick-slide
{
    display: none;
    float: left;

    height: 100%;
    min-height: 1px;
}
[dir='rtl'] .slick-slide
{
    float: right;
}
.slick-slide img
{
    display: block;
}
.slick-slide.slick-loading img
{
    display: none;
}
.slick-slide.dragging img
{
    pointer-events: none;
}
.slick-initialized .slick-slide
{
    display: block;
}
.slick-loading .slick-slide
{
    visibility: hidden;
}
.slick-vertical .slick-slide
{
    display: block;

    height: auto;

    border: 1px solid transparent;
}
.slick-arrow.slick-hidden {
    display: none;
}


    /*******************************************
    **********************
    ***********
    * SLick js css  end***********************
    **********************************
    *************** */
    

  body {
    display: flex;
    flex-direction: column;
    position: relative;
    height: 100vh;
    background: var(--blue)
  }

  .left_panel{
    font-weight: 400;
    font-size: 16px;
    left: 0;
    position: fixed;
    top: 0;
    width: 5%;
    z-index: 7;
    padding-top: 7%;
    padding-left: 2%;
}
.left_panel p{
   text-decoration: underline;
}
.left_nav_panel{
  margin-top: 30%;
}
.left_panel p:hover{
  color: red;
}
.right_panel{
  position: fixed;
  top: 0;
  right: 0;
  background-color: rgba(0, 0, 0, 0.8);
  height: 100%;
  padding-top: 5%;
  width: 15%;
}
.right_panel a {
  padding: 5% 0;
  padding-left: 4%;
  color: #fff!important;
  text-decoration: none;
}
.right_panel p{
  color: white;
  font-size: 15px;
}
.right_panel p:hover{
  background-color: rgba(0, 0, 0, 0.2);
}
.home_slider{
  margin: 2% 0;
}
.home_numbers p{
  font-size: 36px;
    font-weight: 500;
}
.modal-header .col-md-4 a{
  color: rgba(0, 0, 0, 0.8);
}
.modal-body .col-md-3 a{
  color: rgba(0, 0, 0, 0.8);
}
.modal-body .row{
  margin-top: 20px;
}
.a{
  color: rgba(0, 0, 0, 0.8);
  font-weight: 400;
  font-size: 20px;
  text-decoration: underline;
}
.a:hover{
  color: red;
}
.item-orange{
  background-color: rgba(255, 115, 0, 0.9);
}
.item{
  border-radius: 10px;
}
.item-img{
  height: 70px;
  margin: 20px;
}
.item:hover{
  background-color: rgba(0, 0, 0, 0.8);
}
.item:hover .item-img{
  transform: scale(1.2);
}
.item-text{
  color: white;
}
.item:hover .item-text{
  transform: scale(1.05);
}
.home_gameblock{
  margin: 50px 0;
}
.red{
  background-color: rgb(55%, 11%, 11%, 0.9);
}
.blue{
  background-color: rgba(8, 69, 150, 0.9);
}
.orange{
  background-color: rgba(255, 115, 0, 0.9);
}
.green{
   background-color: rgba(16, 130, 19, 0.9);
}
.dark{
  background-color: rgba(8, 10, 8, 0.9);
}
.fiolet{
  background-color: rgba(86, 23, 120, 0.9);
}
.pink{
  background-color: rgba(173, 0, 142, 0.9);
}
.carGames{
  height: 400px;
  border-radius: 20px;
}
.imgGames{
  width: 30%;
}
.carGame{
  margin: 100px 0;
}


.md-modal {
  margin: auto;
	position: fixed;
	top: 100px;
	left: 0;
  right: 0;
	width: 50%;
	max-width: 630px;
	min-width: 320px;
	height: auto;
	z-index: 2000;
	visibility: hidden;
	-webkit-backface-visibility: hidden;
	-moz-backface-visibility: hidden;
	backface-visibility: hidden;
}

.md-show {
	visibility: visible;
}

.md-overlay {
	position: fixed;
	width: 100%;
	height: 100%;
	visibility: hidden;
	top: 0;
	left: 0;
	z-index: 1000;
	opacity: 0;
	background: rgba(#e4f0e3, 0.8);
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

.md-show ~ .md-overlay {
	opacity: 1;
	visibility: visible;
}

.md-effect-12 .md-content {
	-webkit-transform: scale(0.8);
	-moz-transform: scale(0.8);
	-ms-transform: scale(0.8);
	transform: scale(0.8);
	opacity: 0;
	-webkit-transition: all 0.3s;
	-moz-transition: all 0.3s;
	transition: all 0.3s;
}

.md-show.md-effect-12 ~ .md-overlay {
	background-color: #e4f0e3;
}

.md-effect-12 .md-content h3,
.md-effect-12 .md-content {
	background: transparent;
}

.md-show.md-effect-12 .md-content {
	-webkit-transform: scale(1);
	-moz-transform: scale(1);
	-ms-transform: scale(1);
	transform: scale(1);
	opacity: 1;
}
.game{
  margin-top: 100px;
}

.logo {
  text-align: center;
}

.head-game{
  font-size: 34px;
  color: white;
}

.head-game a{
  font-size: 18px;
  color: black;
}
.head-game a:hover{
  color: red;
}
.main-game{
  background-color: rgba(232, 232, 232, 1);
  height: 100px;
  border-radius: 8px;
  margin-top: 30px;
  padding: 40px 50px;
}

.in-main-game{
  background-color: white;
  border-radius: 5px;
  text-align: left;
}


.title-game {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
}

.title-game img{

}

.content-4_20 {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 4rem 0;
}

.blocks-ticket {

}

.block-ticket {
  margin-bottom: 1rem;
}

.help-information {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    margin: 1rem;
}

.zone-header{
   margin-bottom: 1rem;
}

.zone-worker {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}



.zone-one, .zone-two {
    flex-basis: 15rem;
}
.zone-worker tr > td {
  padding: 0;
  position: relative;
}

.zone-worker tr > td:hover {
    background-color: #eee;
}

.table label {
  margin: 0;
  cursor: pointer;
  width: 100%;
  text-align: center;
  padding: 2vmin 2.8vmin;
}

table input[type='checkbox'] {
  opacity: 0;
   z-index: -1;
  position: absolute;
}

table input[type='checkbox'] + label{
 transition: .5s ease;
 

}

a {
  color: black!important
}

table input[type='checkbox']:checked + label{
  background: var(--teal);
  color: #fff;
  font-weight: bold;
}

.quick-panel {
    text-align: center;
}

.panel-score {
    flex-grow: 0.3;
    padding: 1rem 2rem;
}


.inpt1,
.inpt2 {
    display: flex;
    justify-content: space-around;
}

.inpt2 {
    font-size: 18px;
    font-weight: bold;
    border-top: 1px solid #ccc;
    padding: 0.5rem 0;
}

.list-group-item.active {
  background: var(--gray-dark);
  border-color: var(--dark);
}

.hide {
  display: none;
}


.card-block {
  flex-basis: calc(33.333% - 2rem);
  margin-right: 2rem;
}








.shiny, .shiny-2
{
  color: #F5C21B;
  background: -webkit-gradient(linear, left top, left bottom, from(#F5C21B), to(#D17000));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  display: inline-block;
  font-family: 'Montserrat', sans-serif;
  font-size: 3em;
  font-weight: bold;
  position: relative;
  text-transform: uppercase;
}
.shiny-2 {
  font-size: 1.8em;
}
.shiny::before
{
    background-position: -180px;
    -webkit-animation: flare 5s infinite;
  -webkit-animation-timing-function: linear;
  background-image: linear-gradient(65deg, transparent 20%, rgba(255, 255, 255, 0.2) 20%, rgba(255, 255, 255, 0.3) 27%, transparent 27%, transparent 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  content: "Золотая антилопа";
  color: #FFF;
  display: block;
  padding-right: 140px;
  position: absolute;
}

.shiny::after
{
  content: "Золотая антилопа";
  color: #FFF;
  display: block;
  position: absolute;
  text-shadow: 0 1px #6E4414, 0 2px #6E4414, 0 3px #6E4414, 0 4px #6E4414, 0 5px #6E4414, 0 6px #6E4414, 0 7px #6E4414, 0 8px #6E4414, 0 9px #6E4414, 0 10px #6E4414;
  top: 0;
  z-index: -1;
}

.inner-shiny::after, .inner-shiny::before
{
        -webkit-animation: sparkle 5s infinite;
  -webkit-animation-timing-function: linear;
    background: #FFF;
  border-radius: 100%;
  box-shadow: 0 0 5px #FFF, 0 0 10px #FFF, 0 0 15px #FFF, 0 0 20px #FFF, 0 0 25px #FFF, 0 0 30px #FFF, 0 0 35px #FFF;
  content: "";
  display: block;
  height: 10px;
  opacity: 0.7;
  position: absolute;
  width: 10px;
}

.inner-shiny::before
{
    -webkit-animation-delay: 0.2s;
  height: 7px;
  left: 0.12em;
  top: 0.8em;
  width: 7px;
}

.inner-shiny::after
{
  top: 0.32em;
  right: -5px;
}

@-webkit-keyframes flare
{
  0%   { background-position: -180px; }
  30%  { background-position: 500px; }
  100% { background-position: 500px; }
}

@-webkit-keyframes sparkle
{
  0%   { opacity: 0; }
  30%  { opacity: 0; }
  40%  { opacity: 0.8; }
  60%  { opacity: 0; }
  100% { opacity: 0; }
}









/* ##########
  #####Menu####
  ###########
*/

@media (min-width: 768px) {
  .navbar-container {
      position: sticky;
      top: 0;
      overflow-y: auto;
      height: 100vh;
      z-index: 1000;
  }

  .navbar-container .navbar {
      align-items: flex-start;
      justify-content: flex-start;
      flex-wrap: nowrap;
      flex-direction: column;
      height: 100%;
  }

  .navbar-container .navbar-collapse {
      align-items: flex-start;
  }

  .navbar-container .nav {
      flex-direction: column;
      flex-wrap: nowrap;
  }

  .navbar-container .navbar-nav {
      flex-direction: column !important;
  }
  
  .right_panel {
    display: block;
  }
}





@media (max-width: 768px) {
  .right_panel {
    display: none;
  }

}

@media (max-width: 1400px) {
  .right_panel {
    text-align: center;
    width: 5%
  }
  .medium-a {
    display: none;
  }

}






.masthead {
  color: #000;
  height: 100vh;
  position: relative;
  width: 100%;
  min-height: 35rem;
  padding: 5rem 0 25rem 0;
}

.conatiner-card {
  display: flex;
  flex-wrap: wrap;
  justify-content: center
}

.card-main {
  position: relative;
  overflow: hidden;

}

.card-tooltip {
  position: absolute;
  bottom: 0;
  background: #fff;
  color: #000;
  transform: translateY(115px);
  transition: .5s ease-in;
}
.card-main:hover .card-tooltip {
  transform: translateY(0)
}

@media (max-width: 768px) {
  .masthead h1{
    margin-top: 10rem !important;
  }
}

.game {
  margin: 0;
}

#main {
  background: #FFF;
  padding: 1rem;
}

.card-new-title {
  position: absolute;
  bottom: 50px;
  left: 0;
  width: 100%;
  color: #000;
  font-size: 1.5rem;
  text-align: center;
}

.card-price {
  position: absolute;
  bottom: 20px;
  left: 0;
  width: 100%;
  color: #000;
  font-weight: bold;
  font-size: 1rem;
  text-align: center;
}

@media (max-width: 768px) {
  .img-media {
    top: 20px!important;
    left: 70px!important;
  }

  .main-banner {
    padding: 1rem 0;
  }

  .card-new-title {
    bottom: 0;
    font-size: 9px;
  }

  .card-price {
    bottom: 22px;
    font-size: 11px;
  }

  .head-game-img {
    display: none;
  }
}

@media (min-width: 768px) {

  .img-media-reverse {
    display: none;
  }
}

a {
  color: black;
}

.carousel-item-next, .carousel-item-prev, .carousel-item.active {
  display: flex;
}



/*
888888888888888888888888888888
8888888888888888888888888888888
8888888888888888888888888888888
          COMENTARIEEEE start
88888888888888888888888888888888888
888888888888888888888888888888888
888888888888888888888888888888
*/


/* -------------------------------- 

Main components 

-------------------------------- */
.cd-testimonials-wrapper {
  position: relative;
  width: 100%;
  max-width: 850px;
  background-color: #39393c;
  margin: 2em auto;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  padding: 20px 40px 70px;
  z-index: 1;
}
.cd-testimonials-wrapper::after {
  /* quotation mark */
  content: '\201C';
  position: absolute;
  top: 10px;
  left: 0;
  width: 50px;
  height: 50px;
  padding-top: 8px;
  margin-left: -25px;
  background: rgba(32, 32, 34, 0.9);
  font-family: "Georgia", serif;
  color: white;
  font-size: 70px;
  font-size: 4.375rem;
  text-align: center;
  /* visible on big devices only */
  display: none;
}
@media only screen and (min-width: 768px) {
  .cd-testimonials-wrapper {
    margin: 4em auto;
    padding: 64px 50px 114px;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-testimonials-wrapper::after {
    /* quotation mark visible */
    display: block;
  }
}

.cd-testimonials {
  color: white;
  text-align: center;
}
.cd-testimonials:after {
  content: "";
  display: table;
  clear: both;
}
.cd-testimonials > li {
  position: absolute;
  opacity: 0;
}
.cd-testimonials > li:first-child {
  position: relative;
  opacity: 1;
}
.cd-testimonials p {
  font-family: "Georgia", serif;
  font-style: italic;
  line-height: 1.4;
  margin-bottom: 1em;
  padding: 0 14px;
}
@media only screen and (min-width: 768px) {
  .cd-testimonials p {
    font-size: 22px;
    font-size: 1.375rem;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-testimonials p {
    font-size: 26px;
    font-size: 1.625rem;
    line-height: 1.6;
  }
}

.cd-author img, .cd-author .cd-author-info {
  display: inline-block;
  vertical-align: middle;
}
.cd-author img {
  width: 32px;
  height: 32px;
  border-radius: 50%;
  margin-right: 5px;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.3);
}
.cd-author .cd-author-info {
  text-align: left;
  line-height: 1.2;
}
.cd-author .cd-author-info li:first-child {
  font-size: 14px;
  font-size: 0.875rem;
}
.cd-author .cd-author-info li:last-child {
  font-size: 12px;
  font-size: 0.75rem;
  color: #6b6b70;
}
@media only screen and (min-width: 768px) {
  .cd-author img {
    width: 50px;
    height: 50px;
  }
  .cd-author .cd-author-info {
    line-height: 1.4;
  }
  .cd-author .cd-author-info li:first-child {
    font-size: 16px;
    font-size: 1rem;
  }
  .cd-author .cd-author-info li:last-child {
    font-size: 14px;
    font-size: 0.875rem;
  }
}

.flex-direction-nav li {
  position: absolute;
  height: 100%;
  width: 40px;
  top: 0;
}
.flex-direction-nav li:first-child {
  left: 0;
}
.flex-direction-nav li:last-child {
  right: 0;
}
.flex-direction-nav li a {
  display: block;
  height: 100%;
  width: 100%;
  /* image replacement */
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
  -webkit-transition: background-color 0.2s;
  -moz-transition: background-color 0.2s;
  transition: background-color 0.2s;
}
.no-touch .flex-direction-nav li a:hover {
  background-color: #323234;
}
.flex-direction-nav li a::before, .flex-direction-nav li a::after {
  /* left and right arrows in css only */
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  width: 2px;
  height: 13px;
  background-color: white;
}
.flex-direction-nav li a::before {
  -webkit-transform: translateY(-35px) rotate(45deg);
  -moz-transform: translateY(-35px) rotate(45deg);
  -ms-transform: translateY(-35px) rotate(45deg);
  -o-transform: translateY(-35px) rotate(45deg);
  transform: translateY(-35px) rotate(45deg);
}
.flex-direction-nav li a::after {
  -webkit-transform: translateY(-27px) rotate(-45deg);
  -moz-transform: translateY(-27px) rotate(-45deg);
  -ms-transform: translateY(-27px) rotate(-45deg);
  -o-transform: translateY(-27px) rotate(-45deg);
  transform: translateY(-27px) rotate(-45deg);
}
.flex-direction-nav li:last-child a::before {
  -webkit-transform: translateY(-35px) rotate(-45deg);
  -moz-transform: translateY(-35px) rotate(-45deg);
  -ms-transform: translateY(-35px) rotate(-45deg);
  -o-transform: translateY(-35px) rotate(-45deg);
  transform: translateY(-35px) rotate(-45deg);
}
.flex-direction-nav li:last-child a::after {
  -webkit-transform: translateY(-27px) rotate(45deg);
  -moz-transform: translateY(-27px) rotate(45deg);
  -ms-transform: translateY(-27px) rotate(45deg);
  -o-transform: translateY(-27px) rotate(45deg);
  transform: translateY(-27px) rotate(45deg);
}
@media only screen and (min-width: 768px) {
  .flex-direction-nav li {
    width: 50px;
  }
}

@media only screen and (min-width: 1170px) {
  .flex-direction-nav li a::before, .flex-direction-nav li a::after {
    background-color: #5e5e63;
    -webkit-transition: background-color 0.2s;
    -moz-transition: background-color 0.2s;
    transition: background-color 0.2s;
  }
  .flex-direction-nav li a:hover::before, .flex-direction-nav li a:hover::after {
    background-color: white;
  }
}

.cd-see-all {
  position: absolute;
  z-index: 1;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 50px;
  line-height: 50px;
  background-color: #252527;
  text-align: center;
  text-transform: uppercase;
  color: #6b6b70;
  font-weight: 700;
  font-size: 12px;
  font-size: 0.75rem;
  -webkit-transition: color, 0.2s;
  -moz-transition: color, 0.2s;
  transition: color, 0.2s;
}
.no-touch .cd-see-all:hover {
  color: #79b6e4;
}

.cd-testimonials-all {
  position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background-color: white;
  z-index: 2;
  visibility: hidden;
  opacity: 0;
  -webkit-transition: opacity .3s 0s, visibility 0s .3s;
  -moz-transition: opacity .3s 0s, visibility 0s .3s;
  transition: opacity .3s 0s, visibility 0s .3s;
}
.cd-testimonials-all .cd-testimonials-all-wrapper {
  position: absolute;
  left: 0;
  top: 0;
  height: 100%;
  width: 100%;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}
.cd-testimonials-all .cd-testimonials-all-wrapper > ul {
  width: 90%;
  max-width: 1170px;
  margin: 4em auto;
}
.cd-testimonials-all .cd-testimonials-all-wrapper > ul:after {
  content: "";
  display: table;
  clear: both;
}
.cd-testimonials-all .cd-testimonials-item {
  margin-bottom: 2em;
  opacity: 0;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translate3d(0, 0, 0) scale(0.4);
  -moz-transform: translate3d(0, 0, 0) scale(0.4);
  -ms-transform: translate3d(0, 0, 0) scale(0.4);
  -o-transform: translate3d(0, 0, 0) scale(0.4);
  transform: translate3d(0, 0, 0) scale(0.4);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transition: -webkit-transform .3s, opacity .3s;
  -moz-transition: -moz-transform .3s, opacity .3s;
  transition: transform .3s, opacity .3s;
}
.cd-testimonials-all p {
  position: relative;
  background: #79b6e4;
  color: white;
  padding: 2em;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  line-height: 1.4;
  border-radius: 0.25em;
  margin-bottom: 1em;
}
.cd-testimonials-all p::after {
  /* creating the triangle in css */
  content: '';
  position: absolute;
  top: 100%;
  left: 2em;
  height: 0;
  width: 0;
  border: 8px solid transparent;
  border-top-color: #79b6e4;
}
.cd-testimonials-all .cd-author {
  text-align: left;
  margin-left: 1.5em;
}
.cd-testimonials-all .cd-author img {
  box-shadow: 0 0 0 transparent;
}
.cd-testimonials-all.is-visible {
  visibility: visible;
  opacity: 1;
  -webkit-transition: opacity .3s 0s, visibility 0s 0s;
  -moz-transition: opacity .3s 0s, visibility 0s 0s;
  transition: opacity .3s 0s, visibility 0s 0s;
}
.cd-testimonials-all.is-visible .cd-testimonials-item {
  opacity: 1;
  -webkit-transform: translate3d(0, 0, 0) scale(1);
  -moz-transform: translate3d(0, 0, 0) scale(1);
  -ms-transform: translate3d(0, 0, 0) scale(1);
  -o-transform: translate3d(0, 0, 0) scale(1);
  transform: translate3d(0, 0, 0) scale(1);
}
@media only screen and (min-width: 768px) {
  .cd-testimonials-all .cd-testimonials-item {
    width: 46%;
    margin: 0 2% 3em;
  }
  .cd-testimonials-all .cd-author {
    margin-left: 1em;
  }
}
@media only screen and (max-width: 768px) {
  .navbar-brand {
    display: none;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-testimonials-all .cd-testimonials-item {
    width: 30%;
    margin: 0 1.6666% 3em;
  }
}

.close-btn {
  position: fixed;
  display: block;
  width: 40px;
  height: 40px;
  top: 10px;
  right: 5%;
  /* image replacement */
  overflow: hidden;
  text-indent: 100%;
  white-space: nowrap;
}
.close-btn::before, .close-btn::after {
  /* close icon in css */
  content: '';
  position: absolute;
  display: inline-block;
  width: 2px;
  height: 24px;
  top: 8px;
  left: 19px;
  background-color: #39393c;
}
.close-btn::before {
  -webkit-transform: rotate(45deg);
  -moz-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  -o-transform: rotate(45deg);
  transform: rotate(45deg);
}
.close-btn::after {
  -webkit-transform: rotate(-45deg);
  -moz-transform: rotate(-45deg);
  -ms-transform: rotate(-45deg);
  -o-transform: rotate(-45deg);
  transform: rotate(-45deg);
}



/*
888888888888888888888888888888
8888888888888888888888888888888
8888888888888888888888888888888
          COMENTARIEEEE end
88888888888888888888888888888888888
888888888888888888888888888888888
888888888888888888888888888888
*/

</style>
</head>
  <body data-spy="scroll">
    <!-- START left - panel -->

    

    <!-- END left - panel -->
    <!-- START right - panel -->

    <!-- END right - panel -->
    <!-- site-map -->




    <!-- site-map -->
    <div class="container-fluid" >
      <!-- Modal -->
      <div class="modal fade"  id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog w-100" style="max-width: 1500px; margin: .5rem auto" role="document" >
            <div class="modal-content sitemap">
              <div class="modal-header" >
                <h5 class="modal-title" id="exampleModalLongTitle">Карта сайта</h5>
                <h5><br><br>Информационна поддержка: <b>8 900 555-55-55</b> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-header">
                <div class="row">
                  <div class="col-md-4">
                    <a href="{{ route('home') }}">Главная</a>
                  </div>
                  <div class="col-md-4">
                    <a href="#">Гос.лотереи</a>
                  </div>
                  <div class="col-md-4">
                    <a href="#">Лотереи в городе</a>
                  </div>
                </div>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-3">
                    <h2>Многомиллионные суперпризы</h2>
                    <a href="#"><p>«Гослото «4 из 20»</p></a>
                    <a href="#"><p>«Гослото «7 из 49»</p></a>
                    <a href="#"><p>«Гослото «6 из 45»</p></a>
                    <a href="#"><p>«Гослото «5 из 36»</p></a>
                    <a href="#"><p>«Зодиак»</p></a>
                    <a href="#"><p>«Спортлото Матчбол»</p></a>
                  </div>
                  <div class="col-md-3">
                    <h2>Квартиры, автомобили, миллионы</h2>
                    <a href="#"><p>«Русское лото»</p></a>
                    <a href="#"><p>«Русское лото экспресс»</p></a>
                    <a href="#"><p>«Жилищная лотерея»</p></a>
                    <a href="#"><p>«Золотая подкова»</p></a>
                    <a href="#"><p>«Бинго-75»</p></a>
                    <a href="#"><p>«6 из 36»</p></a>
                  </div>
                  <div class="col-md-3">
                    <h2>Справочник участника</h2>
                    <a href="#"><p>Как купить билет на сайте</p></a>
                    <a href="#"><p>Как получить выигрыш</p></a>
                    <a href="#"><p>Вопрос-ответ</p></a>
                    <a href="#"><p>Правовая информация</p></a>
                    <a href="#"><p>Налогообложение</p></a>
                    <a href="#"><p>Как не попасться мошенникам</p></a>
                  </div>


                  <div class="col-md-3">
                    <h2>Полезные сервисы</h2>
                    <a href="#"><p>Бонусная программа</p></a>
                    <a href="#"><p>Подписка на лотерею</p></a>
                    <a href="#"><p>Билет в подарок</p></a>
                    <a href="#"><p>Система поощрений</p></a>
                    <a href="#"><p>Пригласить друга</p></a>
                    <a href="#"><p>Демо «Топ-3»</p></a>
                  </div>
                  </div>
                  <div class="row">
                  <div class="col-md-3">
                    <h2>Лотереи в вашем мобильном</h2>
                    <a href="#"><p>Мобильный сайт</p></a>
                    <a href="#"><p>Приложения для iOS и Android</p></a>
                    <a href="#"><p>Как купить билет по СМС</p></a>
                  </div>
                  <div class="col-md-3">
                    <h2>Билеты лотерей</h2>
                    <a href="#"><p>Где купить</p></a>
                    <a href="#"><p>Как проверить</p></a>
                    <a href="#"><p>Как получить выигрыш</p></a>
                    <a href="#"><p>Моментальные лотереи</p></a>
                  </div>
                  <div class="col-md-3">
                    <a href="#"> <h3>Все о «***лото»</h3> </a>
                    <a href="#"> <h3>Новости</h3> </a>
                    <a href="#"> <h3>Победители</h3> </a>
                  </div>
                  <div class="col-md-3">
                    <a href="#"> <h3>Пресс-центр</h3> </a>
                    <a href="#"> <h3>Контакты</h3> </a>
                  </div>

                </div>

              </div>
              <div class="modal-footer">
                <button type="button"  class="btn btn-secondary" data-dismiss="modal">Закрыть</button>
              </div>
            </div>
          </div>
      </div>

      <div class="row" id="wrapper">
        <div class="col-md-3 col-lg-2 navbar-container" style="padding: 0;">
            <nav class="navbar navbar-expand-md navbar-light" id="sidebar-wrapper" role="navigation" style="background-color: #E7E7F9;">
                <a class="navbar-brand text-uppercase" align="left"  style="font-size: 16px; color: black!important"  href="{{ route('home')}}">Золотая антилопа</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse w-100" id="navbar">
                    <!-- Вертикальное меню -->
                    <ul class="navbar-nav w-100 mt-3 navigation" id="nav">
                      <li class="nav-item">
                          <a class="nav-link text-danger" style="width: 100px" data-toggle="modal"  data-target="#exampleModalLong" href="#">Меню</a>
                      </li>

                      @if (Auth::check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('lk') }}" style="color: black!important">Личный кабинет</a>
                        </li>

                            @if (Auth::user()->isAdmin())
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('admin') }}" style="color: black!important">Админ панель</a>
                            </li>
                            @endif
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}" style="color: black!important">Выйти</a>
                            </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('broadcast') }}" style="color: black!important">Трансляции</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('valid_ticket') }}" style="color: black!important">Проверка билетов</a>
                        </li>
                        @else 
                          <li class="nav-item">
                            <a class="nav-link waves-effect" href="{{ route('login') }}" style="color: black!important">Войти</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('reg') }}" style="color: black!important">Регистрация</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('broadcast') }}" style="color: black!important">Трансляции</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('valid_ticket') }}" style="color: black!important">Проверка билетов</a>
                          </li>
                        @endif
                    </ul>
                </div>
            </nav>
          
        </div>
        <div class="col-md-7 col-lg-9 col-xl-8 content-container">
          {{--<div class="logo">
          <a href="{{ route('home') }}">
            <p class="shiny">
              <span class="inner-shiny">Золотая антилопа</span>
            </p>
            </a><br>
            <span  class="shiny-2 pb-3">Фонд: 10000000 рублей</span>
          </div>--}}
            @yield('content')
        </div>
        <div class="col-md-2 col-lg-1 col-xl-2 content-container">
          <div class="right_panel">
            <p><a  href="{{ route('one-game') }}"><img src="img/4iz.png" width="30px" alt=""><span class="medium-a"> Золотая антилопа «4 из 20»</span></a></p>
            <p><a  href="{{ route('two-game') }}"><img src="img/5iz.png"  width="30px" alt=""><span class="medium-a"> Золотая антилопа «5 из 36»</span></a></p>
            <p><a  href="{{ route('three-game') }}"><img src="img/7iz.png"  width="30px" alt=""><span class="medium-a"> Золотая антилопа «7 из 49»</span></a></p>
            <p><a  href="{{ route('four-game') }}"><img src="img/6iz.png" width="30px"  alt=""><span class="medium-a"> Золотая антилопа «6 из 45»</span></a></p>
            <p><a  href="{{ route('five-game') }}"><img src="img/12iz.png"  width="30px" alt=""><span class="medium-a"> Золотая антилопа «12 из 24»</span></a></p>
            <p><a  href="{{ route('six-game') }}"><img src="img/rapido.png"  width="30px" alt=""><span class="medium-a"> «Рапидо»</span></a></p>
            <p><a  href="{{ route('speed-game') }}"><img src="img/fast_game.png" width="25px"  alt=""><span class="medium-a"> «Быстрая игра»</span></a></p>
            <p><a  href="{{ route('moment-game') }}"><img src="img/moment_game-logo.png" width="20px"  alt=""><span class="medium-a"> «Моментальная игра»</span></a></p>
          </div>
        </div>    
      </div>
    </div>
      <!-- Footer -->
    <footer style="margin-top: auto; color: #fff" class="page-footer font-small stylish-color-dark pt-4">

      <!-- Footer Links -->
      <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

            <!-- Content -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">ЗОЛОТАЯ АНТИЛОПА</h5>
            <p>Сайт где ты сможешь поднять бабла не напрягаясь, выигрыш в каждом билете!</p>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-2 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Меню</h5>

            <ul class="list-unstyled">
              <li>
                <a href="{{route('home')}}">Главная</a>
              </li>
              <li>
                <a href="{{route('broadcast')}}">Трансляцию</a>
              </li>
              <li>
                <a href="{{route('valid_ticket')}}">Проверка билетов</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Игры</h5>

            <ul class="list-unstyled">
            <li>
                <a href="{{route('one-game')}}">ЗОЛОТАЯ АНТИЛОПА 4 из 20</a>
              </li>
              <li>
                <a href="{{route('two-game')}}">ЗОЛОТАЯ АНТИЛОПА 5 из 36</a>
              </li>
              <li>
                <a href="{{route('three-game')}}">ЗОЛОТАЯ АНТИЛОПА 7 из 49</a>
              </li>
              <li>
                <a href="{{route('four-game')}}">ЗОЛОТАЯ АНТИЛОПА 6 из 45</a>
              </li>
            </ul>

          </div>
          <!-- Grid column -->

          <hr class="clearfix w-100 d-md-none">

          <!-- Grid column -->
          <div class="col-md-3 mx-auto">

            <!-- Links -->
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Игры</h5>

            <ul class="list-unstyled">
              <li>
                <a href="{{route('five-game')}}">ЗОЛОТАЯ АНТИЛОПА 12 из 24</a>
              </li>
              <li>
                <a href="{{route('six-game')}}">Рапидо</a>
              </li>
              <li>
                <a href="{{route('speed-game')}}">Быстрая игра</a>
              </li>
              <li>
                <a href="{{route('moment-game')}}">Моментальная игра</a>
              </li>
           
            </ul>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Footer Links -->

      <hr>

      <!-- Call to action -->
      <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
          <h5 class="mb-1">Начни прямо сейчас </h5>
        </li>
        <li class="list-inline-item">
          <a href="{{ route('reg') }}" class="btn btn-danger btn-rounded">Регистрация!</a>
        </li>
      </ul>
      <!-- Call to action -->

      <hr>

      <!-- Social buttons -->
      <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
          <a class="btn-floating btn-fb mx-1">
            <i class="fab fa-facebook-f"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-tw mx-1">
            <i class="fab fa-twitter"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-gplus mx-1">
            <i class="fab fa-google-plus-g"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-li mx-1">
            <i class="fab fa-linkedin-in"> </i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="btn-floating btn-dribbble mx-1">
            <i class="fab fa-dribbble"> </i>
          </a>
        </li>
      </ul>
      <!-- Social buttons -->

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3">© 2020 Copyright:
        <a href="#" class="text-uppercase">Золотая антилопа</a>
      </div>
      <!-- Copyright -->

    </footer>
      <!-- Footer -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('js/bootstrap.bundle.min.js.map') }}"></script> --}}

      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      {{-- <script src="{{ asset('js/bootstrap.min.js.map') }}"></script> --}}
      <script src="{{ asset ('js/jquery-2.1.1.js')}}"></script>
      {{-- <script src="{{ asset('js/masonry.pkgd.min.js')}}"></script>
      <script src="{{ asset ('js/jquery.flexslider-min.js')}}"></script> --}}
      <script src="{{ asset('js/slick.min.js')}}"></script>
      <script src="{{ asset('js/game.js')}}"></script>
      <script src="{{ asset('js/main.js')}}"></script>
  </body>
</html>
