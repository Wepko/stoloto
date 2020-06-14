@extends('layouts.head')
@section('content')
<!-- <div class="collapse" id="collapseExample">
<div class="card card-body sitemap">
<p>Это меню</p>
</div>
</div> -->
<!-- logo -->

<!-- logo -->
@if (Session::has('info'))
  <div class="alert alert-success mt-5" role="alert">
    {{   Session::get('info') }}
  </div>
@endif


  <div class="main-banner d-flex align-items-center" style="padding: 2rem 0">
    <section class="banner slider">
      <div class="mx-auto text-center" style="position: relative; width: 100%">
        <img src="img/Jackpot.png" class="img-media"  style="width: 100%;" alt="">
        {{-- <img src="img/Jackpot-media2.png" class="img-media-reverse" style="width: 65%" alt=""> --}}
        <p class="img-media" style="position: absolute; top: 70px; left: 250px; color: #fff; font-weight: 800; font-size: 4vmax">12352 2523 Р</p>
        {{-- <p class="img-media-reverse" style="position: absolute; bottom: 40px; width: 100%; color: #fff; font-weight: 800; font-size: 2rem">12352 2523 Р</p> --}}
      </div>
    
    </section>
    </div>
    
<section id="about" class="conatiner-card mb-5">
  <section class="regular slider">
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{ route('speed-game') }}" class="d-block">
        <img class="card-img-top" src="img/fast_game-Card.png" alt="Card image cap">
        <div>
          <p class="card-new-title">Быстрая игра</p>
          <p class="card-price">Билет от <span>20</span>Р</p>
        </div>
      </a>
    </div>
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('moment-game') }}" class="d-block">
        <img class="card-img-top" src="img/moment_game-Card.png" alt="Card image cap">
        <div>
          <p class="card-new-title">Моментальная игра</p>
          <p class="card-price">Билет от <span>100</span>Р</p>
        </div>

      </a>
    </div>
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('one-game')}}" class="d-block">
        <img class="card-img-top" src="img/4_20card.png" alt="Card image cap">
        <div>
          <p class="card-new-title">Золотая Антилопа 4 из 20</p>
          <p class="card-price">Билет от <span>200</span>Р</p>
        </div>

      </a>
    </div>
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('two-game')}}" class="d-block">
        <img class="card-img-top" src="img/5_36card.png" alt="Card image cap">
        <div class="text-white">
          <p class="card-new-title text-white">Золотая Антилопа 5 из 36</p>
          <p class="card-price text-white">Билет от <span>40</span>Р</p>
        </div>
      </a>
    </div>
  </section>


  <div class="card-main card m-2" style="width: 100%;">
  <a href="{{ route('moment-game') }}" class="d-block">
      <img class="card-img-top" src="img/moment_game-banner.png" alt="Card image cap">
    </a>
  </div>
  <section class="regular slider">  
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('three-game')}}" class="d-block">
        <img class="card-img-top" src="img/7_49card.png" alt="Card image cap">
        <div class="text-white">
          <p class="card-new-title">Золотая Антилопа 7 из 49</p>
          <p class="card-price">Билет от <span>25</span>Р</p>
        </div>
      </a>
    </div>
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{ route('four-game') }}" class="d-block">
        <img class="card-img-top" src="img/6_45card.png" alt="Card image cap">
        <div class="text-white">
          <p class="card-new-title">Золотая Антилопа 6 из 45</p>
          <p class="card-price">Билет от <span>100</span>Р</p>
        </div>
      </a>
    </div>
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('five-game')}}" class="d-block">
        <img class="card-img-top" src="img/12_24card.png" alt="Card image cap">
        <div class="text-white">
          <p class="card-new-title">Золотая Антилопа 12 из 24</p>
          <p class="card-price">Билет от <span>60</span>Р</p>
        </div>
      </a>
    </div>
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('six-game')}}" class="d-block">
        <img class="card-img-top" src="img/rapido-card.png" alt="Card image cap">
        <div class="text-white">
          <p class="card-price">Билет от <span>60</span>Р</p>
        </div>
      </a>
    </div>
  </section>

  <section class="regular slider">  
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('two-game')}}" class="d-block">
        <img class="card-img-top" src="img/5_36card.png" alt="Card image cap">
        <div class="text-white">
          <p class="card-new-title">Золотая Антилопа 5 из 36</p>
          <p class="card-price">Билет от <span>25</span>Р</p>
        </div>
      </a>
    </div>
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('one-game')}}" class="d-block">
        <img class="card-img-top" src="img/4_20card.png" alt="Card image cap">
        <div>
          <p class="card-new-title">Золотая Антилопа 4 из 20</p>
          <p class="card-price">Билет от <span>200</span>Р</p>
        </div>
      </a>
    </div>
    <div class="card-main card m-2" style="width: 18rem;">
      <a href="{{route('six-game')}}" class="d-block">
        <img class="card-img-top" src="img/rapido-card.png" alt="Card image cap">
        <div class="text-white">
          <p class="card-new-title">Рапидо</p>
          <p class="card-price">Билет от <span>60</span>Р</p>
        </div>
      </a>
    </div>
  </section>

  <div class="comment">
    <div class="cd-testimonials-wrapper cd-container">
      <ul class="cd-testimonials">
        <li>
          <p>Наши победители</p>
          <div class="cd-author">
            <img src="img/avatar-1.jpg" alt="Author image">
            <ul class="cd-author-info">
              <li>«Моя мечта сбылась!»</li>
              <li>1 000 000 руб.</li>
            </ul>
          </div>
        </li>
    
        <li>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ea, perferendis error repudiandae numquam dolor fuga temporibus. Unde omnis, consequuntur.</p>
          <div class="cd-author">
            <img src="img/avatar-2.jpg" alt="Author image">
            <ul class="cd-author-info">
              <li>MyName</li>
              <li>Designer, CodyHouse</li>
            </ul>
          </div>
        </li>
    
        <li>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam totam nulla est, illo molestiae maxime officiis, quae ad, ipsum vitae deserunt molestias eius alias.</p>
          <div class="cd-author">
            <img src="img/avatar-3.jpg" alt="Author image">
            <ul class="cd-author-info">
              <li>MyName</li>
              <li>CEO, CompanyName</li>
            </ul>
          </div>
        </li>
        
      </ul> <!-- cd-testimonials -->
    
      <a href="#0" class="cd-see-all">Посмотреть все комментарии</a>
    </div> <!-- cd-testimonials-wrapper -->
    
    <div class="cd-testimonials-all">
      <div class="cd-testimonials-all-wrapper">
        <ul>
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
            
            <div class="cd-author">
              <img src="img/avatar-1.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore nostrum nisi, doloremque error hic nam nemo doloribus porro impedit perferendis. Tempora, distinctio hic suscipit. At ullam eaque atque recusandae modi fugiat voluptatem laborum laboriosam rerum, consequatur reprehenderit omnis, enim pariatur nam, quidem, quas vel reiciendis aspernatur consequuntur. Commodi quasi enim, nisi alias fugit architecto, doloremque, eligendi quam autem exercitationem consectetur.</p>
            
            <div class="cd-author">
              <img src="img/avatar-2.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem quibusdam eveniet, molestiae laborum voluptatibus minima hic quasi accusamus ut facere, eius expedita, voluptatem? Repellat incidunt veniam quaerat, qui laboriosam dicta. Quidem ducimus laudantium dolorum enim qui at ipsum, a error.</p>
            
            <div class="cd-author">
              <img src="img/avatar-3.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero voluptates officiis tempore quae officia! Beatae quia deleniti cum corporis eos perferendis libero reiciendis nemo iusto accusamus, debitis tempora voluptas praesentium repudiandae laboriosam excepturi laborum, nisi optio repellat explicabo, incidunt ex numquam. Ullam perferendis officiis harum doloribus quae corrupti minima quia, aliquam nostrum expedita pariatur maxime repellat, voluptas sunt unde, inventore.</p>
            
            <div class="cd-author">
              <img src="img/avatar-4.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit totam saepe iste maiores neque animi molestias nihil illum nisi temporibus.</p>
            
            <div class="cd-author">
              <img src="img/avatar-5.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis quia quas, quis illo adipisci voluptate ex harum iste commodi nulla dolor. Eius ratione quod ab!</p>
            
            <div class="cd-author">
              <img src="img/avatar-6.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, dignissimos iure rem fugiat consequuntur officiis.</p>
            
            <div class="cd-author">
              <img src="img/avatar-1.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
            
            <div class="cd-author">
              <img src="img/avatar-2.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis iusto sapiente, excepturi velit, beatae possimus est tenetur cumque fugit tempore dolore fugiat! Recusandae, vel suscipit? Perspiciatis non similique sint suscipit officia illo, accusamus dolorum, voluptate vitae quia ea amet optio magni voluptatem nemo, natus nihil.</p>
            
            <div class="cd-author">
              <img src="img/avatar-3.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quasi officiis pariatur, fugit minus omnis animi ut assumenda quod commodi, ad a alias maxime unde suscipit magnam, voluptas laboriosam ipsam quibusdam quidem, dolorem deleniti id.</p>
            
            <div class="cd-author">
              <img src="img/avatar-4.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At temporibus tempora necessitatibus reiciendis provident deserunt maxime sit id. Dicta aut voluptatibus placeat quibusdam vel, dolore.</p>
            
            <div class="cd-author">
              <img src="img/avatar-5.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
    
          <li class="cd-testimonials-item">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque tempore ipsam, eos suscipit nostrum molestias reprehenderit, rerum amet cum similique a, ipsum soluta delectus explicabo nihil repellat incidunt! Minima magni possimus mollitia deserunt facere, tempore earum modi, ea ipsa dicta temporibus suscipit quidem ut quibusdam vero voluptatibus nostrum excepturi explicabo nulla harum, molestiae alias. Ab, quidem rem fugit delectus quod.</p>
            
            <div class="cd-author">
              <img src="img/avatar-6.jpg" alt="Author image">
              <ul class="cd-author-info">
                <li>MyName</li>
                <li>CEO, CompanyName</li>
              </ul>
            </div> <!-- cd-author -->
          </li>
        </ul>
      </div>	<!-- cd-testimonials-all-wrapper -->
    
      <a href="#0" class="close-btn">Close</a>
    </div> <!-- cd-testimonials-all -->

  </div>

</div>




</section>


@endsection
