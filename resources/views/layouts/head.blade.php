<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
	<link rel="stylesheet" href="{{ asset('css/app.min.css') }}">

	<style>
		
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

	</style>
</head>
  <body  style="display: flex; flex-direction: column; height: 100vh;">

	<nav id="menu">
		<ul>
			<li><a href="#">Home</a></li>
			<li>
				<span>About us</span>
				<ul>
					<li><a href="#about/history">History</a></li>
					<li>
						<span>The team</span>
						<ul>
							<li>
								<a href="#about/team/management"
									>Management</a
								>
							</li>
							<li>
								<a href="#about/team/sales">Sales</a>
							</li>
							<li>
								<a href="#about/team/development"
									>Development</a
								>
							</li>
						</ul>
					</li>
					<li><a href="#about/address">Our address</a></li>
				</ul>
			</li>
			<li><a href="#contact">Contact</a></li>

			<li class="Divider">Other demos</li>
			<li><a href="advanced.html">Advanced demo</a></li>
			<li><a href="onepage.html">One page demo</a></li>
		</ul>
	</nav>
		<div id="page">
			<div>
																		
				<header class="header">
					<div class="container">
						<div class="menu">
									<div class="menu__logo">
										<a href="{{ route('home') }}">
											<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												viewBox="0 0 1920 1081" style="enable-background:new 0 0 1920 1081;" fill="#fff" xml:space="preserve">
												<style type="text/css">
												.st0{font-family:'MullerRegularItalic';}
												.st1{font-size:261.3255px;}
												.st2{font-family:'MullerBoldItalic';}
												.st3{font-size:175.2642px;}
												</style>
												<text transform="matrix(0.9971 0 0 1 468.8291 708.7861)" class="st0 st1">ЗОЛОТАЯ</text>
												<text transform="matrix(0.9971 0 0 1 736.668 905.5762)" class="st2 st3">АНТИЛОПА</text>
												<path d="M167.34,767.68c51.54,98.87,140.11,168.95,247.45,182.25c93.56,11.59,173.53-23.39,238.66-88.1
												c26.37-26.2,8.09-71-29.07-71.45c-77.42-0.95-162.61-24.35-207.8-71.51c-69.77-72.81-40.33-235.04,6.19-320.86
												c3.54-6.53,13.44-16.82,15.87-15.69c41.59,19.37,81.95,41.42,123.78,60.18c13.58,6.09,37.77,11.5,44.39,4.75
												c9.9-10.1,16.19-34.8,10.49-46.95c-14.51-30.95-37.52-57.78-55.08-87.48c-8.37-14.17-40.88-32.12,1.28-46.27
												c2.53-0.85,5.94-5.78,5.35-7.71c-0.89-2.91-4.71-6.49-7.7-6.93c-38.49-5.72-53.44-33.49-69.77-65.26
												c-29.68-57.74-93.51-106.29-125.97-132.21c34.91,42.99,77.17,95.45,85.41,140.3c-2.23-2-152.65-133.78-155.71-134.35
												c1.74,2.75,75.39,110.39,109.31,162.22c2.08,3.18,0.75,20.16-16.32,22.62c-17.13,2.47-82.42,38.33-28.52,52.2
												c0.41,0.11-96.76,98.83-133.2,180.97c-24.38,54.95-44.7,115.06-52.09,175.8C168.42,702.31,169.13,738.31,167.34,767.68z"/>
											</svg>
										</a>
								</div>
								<nav class="menu__navigation">
									<ul class="menu__list">
										<li class="menu__item"><a href="{{ route('valid_ticket') }}" class="menu__el"><svg class="menu__icon" width="35" height="23" id="Capa_1" enable-background="new 0 0 512 512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><g><path d="m497 91h-482c-8.284 0-15 6.716-15 15v300c0 8.284 6.716 15 15 15h482c8.284 0 15-6.716 15-15v-30c0-8.284-6.716-15-15-15-8.271 0-15-6.729-15-15s6.729-15 15-15c8.284 0 15-6.716 15-15v-30c0-8.284-6.716-15-15-15-8.271 0-15-6.729-15-15s6.729-15 15-15c8.284 0 15-6.716 15-15v-30c0-8.284-6.716-15-15-15-8.271 0-15-6.729-15-15s6.729-15 15-15c8.284 0 15-6.716 15-15v-30c0-8.284-6.716-15-15-15zm-15 32.57c-17.461 6.191-30 22.874-30 42.43s12.539 36.239 30 42.43v5.141c-17.461 6.191-30 22.874-30 42.43s12.539 36.239 30 42.43v5.141c-17.461 6.191-30 22.874-30 42.43s12.539 36.239 30 42.43v2.568h-121v-45c0-8.284-6.716-15-15-15s-15 6.716-15 15v45h-301v-270h301v45c0 8.284 6.716 15 15 15s15-6.716 15-15v-45h121z"/><path d="m136.352 240.507-5.403 31.498c-2.097 12.229 10.774 21.592 21.765 15.813l28.286-14.871 28.287 14.871c10.902 5.73 23.875-3.503 21.765-15.813l-5.403-31.498 22.885-22.307c8.887-8.662 3.973-23.8-8.313-25.585l-31.626-4.595-14.144-28.658c-5.494-11.129-21.407-11.132-26.902 0l-14.144 28.658-31.626 4.595c-12.28 1.785-17.203 16.92-8.313 25.585zm29.171-23.933c4.886-.71 9.108-3.779 11.294-8.206l4.183-8.475 4.183 8.475c2.186 4.427 6.408 7.496 11.294 8.206l9.353 1.359-6.768 6.597c-3.536 3.446-5.149 8.411-4.314 13.277l1.598 9.314-8.364-4.397c-4.37-2.297-9.59-2.298-13.961 0l-8.364 4.397 1.598-9.314c.835-4.866-.778-9.832-4.314-13.277l-6.768-6.597z"/><path d="m256 331h-150c-8.284 0-15 6.716-15 15s6.716 15 15 15h150c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><path d="m346 211c-8.284 0-15 6.716-15 15v60c0 8.284 6.716 15 15 15s15-6.716 15-15v-60c0-8.284-6.716-15-15-15z"/><path d="m406 361c8.284 0 15-6.716 15-15v-180c0-8.284-6.716-15-15-15s-15 6.716-15 15v180c0 8.284 6.716 15 15 15z"/></g></svg>Проверка билетов</a></li>
										<li class="menu__item"><a href="{{ route('broadcast') }}" class="menu__el"><svg class="menu__icon" width="29" height="26" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title/><path d="M15.54,14.54a1,1,0,0,1-.71-.3,1,1,0,0,1,0-1.41,4,4,0,0,0,0-5.66,1,1,0,0,1,1.41-1.41,6,6,0,0,1,0,8.48A1,1,0,0,1,15.54,14.54Z" /><path d="M18.36,17.36a1,1,0,0,1-.7-.29,1,1,0,0,1,0-1.41,8,8,0,0,0,0-11.32,1,1,0,0,1,1.41-1.41,10,10,0,0,1,0,14.14A1,1,0,0,1,18.36,17.36Z"/><path d="M8.46,14.54a1,1,0,0,1-.7-.3,6,6,0,0,1,0-8.48A1,1,0,0,1,9.17,7.17a4,4,0,0,0,0,5.66,1,1,0,0,1,0,1.41A1,1,0,0,1,8.46,14.54Z"  /><path d="M5.64,17.36a1,1,0,0,1-.71-.29,10,10,0,0,1,0-14.14A1,1,0,1,1,6.34,4.34a8,8,0,0,0,0,11.32,1,1,0,0,1,0,1.41A1,1,0,0,1,5.64,17.36Z"  /><path d="M14,10a2,2,0,0,0-4,0,2,2,0,0,0,1,1.72V20a1,1,0,0,0,2,0V11.72A2,2,0,0,0,14,10Z"  /></svg>Трансляция</a></li>
										<li class="menu__item"><a href="{{ route('reg') }}" class="menu__el"><svg class="menu__icon" height="18px" width="18px" version="1.1" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g  fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g id="Core" transform="translate(-549.000000, -45.000000)"><g id="check-box-outline" transform="translate(549.000000, 45.000000)"><path d="M4.9,7.1 L3.5,8.5 L8,13 L18,3 L16.6,1.6 L8,10.2 L4.9,7.1 L4.9,7.1 Z M16,16 L2,16 L2,2 L12,2 L12,0 L2,0 C0.9,0 0,0.9 0,2 L0,16 C0,17.1 0.9,18 2,18 L16,18 C17.1,18 18,17.1 18,16 L18,8 L16,8 L16,16 L16,16 Z" id="Shape"/></g></g></g></svg>Регистрация</a></li>
										<li class="menu__item">
											<a href="{{ route('login') }}" class="menu__el"> <svg class="menu__icon" width="21" height="20" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												viewBox="0 0 67 67" style="enable-background:new 0 0 67 67;" xml:space="preserve">
										<g>
											<g>
												<path d="M4.25,35h39.899L33.86,45.478c-0.781,0.78-0.781,2.142-0.001,2.923c0.391,0.391,0.902,0.634,1.415,0.634
													c0.512,0,1.023-0.171,1.414-0.562l12.815-12.801c0.375-0.375,0.586-0.878,0.586-1.408s-0.211-1.036-0.586-1.411l-0.608-0.607
													c-0.138-0.2-0.312-0.374-0.513-0.511L36.689,20.042c-0.781-0.781-2.048-0.781-2.828,0c-0.781,0.781-0.781,1.856,0,2.638L42.373,31
													H4.25c-1.104,0-2,0.896-2,2S3.146,35,4.25,35z"/>
												<path d="M64.75,59.281V9.541C64.75,4.747,60.842,0,56.003,0H30.002c-4.744,0-9.252,4.576-9.252,9.541v11.84c0,1.104,0.896,2,2,2
													s2-0.896,2-2V9.541C24.75,6.792,27.471,4,30.002,4h26.001c2.647,0,4.747,2.937,4.747,5.541v49.74c0,2.663-2.203,3.719-4.747,3.719
													H30.002c-2.365,0-5.252-0.887-5.252-3.719v-11.9c0-1.104-0.896-2-2-2s-2,0.896-2,2v11.9c0,4.693,4.181,7.719,9.252,7.719h26.001
													C61.188,67,64.75,63.823,64.75,59.281z"/>
											</g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
										</g>
										<g>
													</g></svg>Вход
												</a>
									</li>
									</ul>
								</nav>
								<a href="#menu" class="menu__humburger">
									<svg height="12px" version="1.1" viewBox="0 0 18 12" width="18px" xmlns="http://www.w3.org/2000/svg" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" xmlns:xlink="http://www.w3.org/1999/xlink"><title/><desc/><defs/><g  fill-rule="evenodd" id="Page-1" stroke="none" stroke-width="1"><g   id="Core" transform="translate(-87.000000, -342.000000)"><g id="menu" transform="translate(87.000000, 342.000000)"><path d="M0,12 L18,12 L18,10 L0,10 L0,12 L0,12 Z M0,7 L18,7 L18,5 L0,5 L0,7 L0,7 Z M0,0 L0,2 L18,2 L18,0 L0,0 L0,0 Z" id="Shape"/></g></g></g></svg>
								</a>
					</div>
			
			
			
			
				@yield('content')
			
			
				<footer class="footer" style="margin-top: auto;">
						<div class="footer__wrapper">		
							<div class="footer__links">
								<div class="container">
									<div class="link">
										<div class="row">
											<div class="col-sm-12 col-lg-4 link__main">
												<h3>Золотая антилопа</h3>
												<p>Прибыльный доход без рисков и усилий. Выигрыш ждет тебяв каждом билете!</p>
											</div>
											<div class="col-sm-12 col-lg-2 link__menu">
												<h3>Меню</h3>
												<ul>
													<li><a href="{{ route('home') }}">Главная</a></li>
													<li><a href="{{ route('broadcast') }}">Трансляция</a></li>
													<li><a href="{{ route('valid_ticket') }}">Проверка</a></li>
												</ul>
											</div>
											<div class="col-sm-12 col-lg-2 link__game">
												<h3>Игры</h3>
												<ul>
													<li><a href="{{ route('six-game') }}">Рапидо</a></li>
													<li><a href="{{ route('speed-game') }}">Быстрая игра</a></li>
													<li><a href="{{ route('moment-game') }}">Моментальная игра</a></li>
												</ul>
											</div>
											<div class="col-sm-12 col-lg-4 link-games">
												<ul>
													<li><a href="{{ route('one-game') }}">ЗОЛОТАЯ АНТИЛОПА 4 из 20</a></li>
													<li><a href="{{ route('two-game') }}">ЗОЛОТАЯ АНТИЛОПА 5 из 36</a></li>
													<li><a href="{{ route('three-game') }}">ЗОЛОТАЯ АНТИЛОПА 7 из 49</a></li>
													<li><a href="{{ route('four-game') }}">ЗОЛОТАЯ АНТИЛОПА 6 из 45</a></li>
													<li><a href="{{ route('five-game') }}">ЗОЛОТАЯ АНТИЛОПА 12 из 24</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="footer__starter">
								<p>Начни прямо сейчас</p>
								<a href="{ route('reg') }}" class="btn-access">Регистрация</a>
							</div>
							<div class="footer__social-list-ico">
								<img src="img/Icons/facebook.svg" alt="">
								<img src="img/Icons/twitter.svg" alt="">
								<img src="img/Icons/googlePlus.svg" alt="">
								<img src="img/Icons/linkedin.svg" alt="">
								<img src="img/Icons/dribbble.svg" alt="">
							</div>
							<div class="footer__copyright">
								<p>© 2020 Copyright: ЗОЛОТАЯ АНТИЛОПА</p>
							</div>
						</div>	
				
			</footer>

</div>
		</div>
	
		


		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="{{ asset('js/app.min.js') }}"></script>

	<script src="{{ asset('js/game.js')}}"></script>
<script src="{{ asset('js/mmenu.polyfills.js') }}"></script>	
	<script src="{{ asset('js/mmenu.js') }}"></script>
  
		<script src="{{ asset('js/main.js')}}"></script>
  
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <script>
	new Mmenu(document.querySelector('#menu'), {
                       "extensions": [
                          "position-right"
                       ]
                    });

	document.addEventListener('click', function (evnt) {
		var anchor = evnt.target.closest('a[href^="#/"]');
		if (anchor) {
			alert("Thank you for clicking, but that's a demo link.");
			evnt.preventDefault();
		}
	});
</script>
</body>
</html>
