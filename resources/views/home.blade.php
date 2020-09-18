@extends('layouts.head')
@section('content')
<!-- <div class="collapse" id="collapseExample">
<div class="card card-body sitemap">
<p>Это меню</p>
</div>
</div> -->
<!-- logo -->

<!-- logo -->
<div class="preview">
	<div class="preview__content">
		<p class="preview__text">Учись, чтобы осуществить свою мечту!</p>
		<div class="preview__title">					
			<!--<h1>Призовой фонд</h1>
			<strong>100 000 <b>p</b></strong>
			<span>Выйгрыш в каждом билете!</span>-->
		</div>
		<div class="preview__btn">
			<a href="#" class="btn-main">Принять участие</a>
		</div>
	
	</div>
	<!--<div class="preview__images"><img src="img/main-baby.png" alt=""></div>-->
</div>
</div>
</header>
{{--<section class="special-offer screen-one">
	<div class="container">
		<div class="jackpot">
			<div class="jackpot__wrapper">
				<strong class="jackpot__title">Текущий Jackpot</strong>
				<div class="jackpot__total">
					<div class="jackpot__element">2</div>
					<div class="jackpot__element">3</div>
					<div class="jackpot__element">2</div>
					<div class="jackpot__element">7</div>
					<div class="jackpot__element">0</div>
					<div class="jackpot__element">0</div>
				</div>
			</div>
		</div>
		<div class="special-offer__wrapper">
			<div class="special-offer__images">
				<img src="img/Boy-man.png" alt="">
			</div>
			<div class="special-offer__content">
				<div class="special-offer__title">Специальное предложение!</div>
				<div class="special-offer__info">
					
					<div class="special-offer__info-block">
						<h3>Не упустите возможность принять участие 
							<span>в розыгрыше Джекпота!</span></h3>
						<p>Накопительный  составляется из всех игр, кроме моментальных, 
							и образуется из 50% суммы от купленных билетов. В 3-х дневный период 
							перед началом розыгрыша основного призового фонда, его накопление 
							останавливаться, а стоимость билета может быть увеличена. </p>
					</div>
					<div class="special-offer__info-block">
						<h3>Каждые две недели  накопленную сумму 
							<span>делим поровну</span> между всеми участниками!</h3>
						<p>Всё что вам нужно сделать, это купить билет и указать цифры, которые 
							по вашему мнению должны выйграть. Если вы угадали от трёх цифр 
							в вашем билете - поздравляем, приз ваш! </p>
					</div>
				</div>
				<div class="special-offer__btns">
					<a href="{{ route('one-game') }}" class="btn-access">Принять участие</a>
					<a href="{{ route('dist-game') }}" class="btn-access-revers ml-3">Узнать подробности</a>	
				</div>
				
			</div>
		</div>
	</div>
</section>--}}


	<!--<section class="our-servis screen-two">
		<div class="container">		
			<h2 class="our-servis__title">Как работает наш сервис ?</h2>
			<div class="our-servis__content">	
				<div class="row justify-content-between">
					<div class="col-sm-12 col-lg-3">
						<div class="our-servis__block">
							<img src="img/About us-01.svg" alt="">
							<h3>Onlain Лотерея</h3>
							<p>Всё розыгрыши лотереи " Золотая антилопа" проходят только онлайн режиме.</p>
						</div>
					</div>
					<div class="col-sm-12 col-lg-4">
						<div class="our-servis__block">
							<img src="img/About us-02.svg" alt="">
							<h3>Безопасные платежи</h3>
							<p>Мы принимаем оплату через любые платежные системы. Выбирайте удобную вам.</p>
						</div>
					</div>
					<div class="col-sm-12 col-lg-3">
						<div class="our-servis__block">
							<img src="img/About us-03.svg" alt="">
							<h3>Гарантия выплат</h3>
							<p>Мы быстро перечислим выигранную сумму любым, удобным для вас, способом</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>-->
   
	<section class="games-card screen-one">
		<h2 class="games-card__title">Игры на любой вкус</h2>
	 		<div class="container">	
		   	<div class="games-card__big">
		   		<div class="row">
		   			<div class="col-sm-12 col-lg-6">
		   				<div class="game-card-big">
		   					<div class="game-card-big__text-decoration">Испытай удачу!</div>
		   					<div class="game-card-big__name-game">Быстрая игра</div>
		   					<div class="game-card-big__price"></div>
		   					<div class="game-card-big__images"><img src="img/Happy guy.jpg" alt=""></div>
		   					<div class="game-card-big__btns">
		   						<a href="{{ route('speed-game') }}" class="btn-orange mr-3">Играть сейчас</a>
							    <a href="{{ route('tutorials-speed-game') }}" class="btn-orange-revers">Узнать подробнее</a>
		   					</div>
		   				</div>
		   			</div>
		   			<div class="col-sm-12 col-lg-6">
		   				<div class="game-card-big">
		   					<div class="game-card-big__text-decoration">Выигрывай больше!</div>
		   					<div class="game-card-big__name-game">Моментальная игра</div>
		   					<div class="game-card-big__price"></div>
		   					<div class="game-card-big__images"><img src="img/Happy girl.jpg" alt=""></div>
		   					<div class="game-card-big__btns">
		   						<a href="{{ route('moment-game') }}" class="btn-orange mr-3">Играть сейчас</a>
		   						<a href="{{ route('tutorials-moment-game') }}" class="btn-orange-revers">Узнать подробнее</a>
		   					</div>
		   				</div>
		   			</div>
		   		</div>
		   	</div>
		   	<!--<div class="games-card__middle">
		   		<div class="row">
						<div class="col-lg-4 col-sm-12">
	   					<div class="game-card-middle">
	   						<div class="game-card-middle__text-decoration"><a href="{{ route('tutorials-one-game') }}" style="color: orange">ПОДРОБНЕЕ</a></div>
	   						<div class="game-card-middle__name-game">Золотая антилопа 4 из 20</div>
	   						<div class="game-card-middle__price">Билет от 200р</div>
	   						<div class="game-card-middle__btn"><a href="{{ route('one-game') }}" class="btn-access btn-active  pl-5 pr-5">Играть</a></div>
	   						<div class="game-card-middle__images">
	   							<img src="img/Balls 4-20.jpg" alt="">
	   						</div>
	   					</div>
	   				</div>
	   				<div class="col-lg-4 col-sm-12">
	   					<div class="game-card-middle">
	   						<div class="game-card-middle__text-decoration"><a href="{{ route('tutorials-two-game') }}" style="color: orange">ПОДРОБНЕЕ</a></div>
	   						<div class="game-card-middle__name-game">Золотая антилопа 5 из 36</div>
	   						<div class="game-card-middle__price">Билет от 40р</div>
	   						<div class="game-card-middle__btn"><a href="{{ route('two-game') }}" class="btn-access btn-active pl-5 pr-5">Играть</a></div>
	   						<div class="game-card-middle__images">
	   							<img src="img/Balls 7-49.jpg" alt="">
	   						</div>
	   					</div>
	   				</div>
	   				<div class="col-lg-4 col-sm-12">
	   					<div class="game-card-middle">
	   						<div class="game-card-middle__text-decoration"><a href="{{ route('tutorials-three-game') }}" style="color: orange">ПОДРОБНЕЕ</a></div>
	   						<div class="game-card-middle__name-game">Золотая антилопа 7 из 49</div>
	   						<div class="game-card-middle__price">Билет от 25р</div>
	   						<div class="game-card-middle__btn"><a href="{{ route('three-game') }}" class="btn-access btn-active pl-5 pr-5">Играть</a></div>
	   						<div class="game-card-middle__images">
	   							<img src="img/Balls 5-45.jpg" alt="">
	   						</div>
	   					</div>
	   				</div>
		   		</div>
		   		<div class="row">
	   				<div class="col-lg-4 col-sm-12">
	   					<div class="game-card-middle">
	   						<div class="game-card-middle__text-decoration"><a href="{{ route('tutorials-four-game') }}" style="color: orange">ПОДРОБНЕЕ</a></div>
	   						<div class="game-card-middle__name-game">Золотая антилопа 6 из 45</div>
	   						<div class="game-card-middle__price">Билет от 100р</div>
	   						<div class="game-card-middle__btn"><a href="{{ route('four-game') }}" class="btn-access btn-active pl-5 pr-5">Играть</a></div>
	   						<div class="game-card-middle__images">
	   							<img src="img/Balls 4-20.jpg" alt="">
	   						</div>
	   					</div>
	   				</div>
	   				<div class="col-lg-4 col-sm-12">
	   					<div class="game-card-middle">
	   						<div class="game-card-middle__text-decoration"><a href="{{ route('tutorials-five-game') }}" style="color: orange">ПОДРОБНЕЕ</a></div>
	   						<div class="game-card-middle__name-game">Золотая антилопа 12 из 24</div>
	   						<div class="game-card-middle__price">Билет от 60р</div>
	   						<div class="game-card-middle__btn"><a href="{{ route('five-game') }}" class="btn-access btn-active pl-5 pr-5">Играть</a></div>
	   						<div class="game-card-middle__images">
	   							<img src="img/Balls 7-49.jpg" alt="">
	   						</div>
	   					</div>
	   				</div>
	   				<div class="col-lg-4 col-sm-12">
	   					<div class="game-card-middle">
	   						<div class="game-card-middle__text-decoration"><a href="{{ route('tutorials-six-game') }}" style="color: orange">ПОДРОБНЕЕ</a></div>
	   						<div class="game-card-middle__name-game">Золотая антилопа Рапидо</div>
	   						<div class="game-card-middle__price">Билет от 60р</div>
	   						<div class="game-card-middle__btn"><a href="{{ route('six-game') }}" class="btn-access btn-active pl-5 pr-5">Играть</a></div>
	   						<div class="game-card-middle__images">
	   							<img src="img/Balls 5-45.jpg" alt="">
	   						</div>
	   					</div>
	   				</div>
		   		</div>
		   	</div>
	 		</div>-->
	</section>

	<!--<section class="our-winners screen-two">
		<h2 class="our-winners__title">Наши побелители</h2>
		<div class="container">		
			<div class="our-winners__blocks">
				<div class="our-winners__block">
					<div class="our-winners__images">
						<img src="img/comment-2.png" alt="">
					</div>
					<div class="our-winners__content">
						<h3>Анатолий Прилипко</h3>
						<div class="our-winners__price">100 000р</div>
						<div class="our-winners__discription">						
							<h4>“Моя мечта сбылась!”</h4>
							<p>Когда я увидел сумму своего выигрыша, то удивился и сначала даже не поверил. Думал, что деньги мне не вышлют, но выигрыш пришел довольно быстро. Желаю и вам удачи, главное - это верить в себя. </p>
						</div>
					</div>
				</div>
				<div class="our-winners__block-revers">

				</div>
			</div>
			<div class="our-winners__btns">
				<a href="#" class="btn-orange">Смотреть все коментарии</a>
			</div>
		</div>
	</section>-->
 

@endsection
