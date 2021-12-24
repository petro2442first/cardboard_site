<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Мрій та будуй</title>
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
      <link rel="stylesheet" href="{{ mix('style.css') }}">
    </head>
    <body>
      <div class="wrapper">
        <header class="header">
          <div class="header__container">
            <div class="header__top-panel">
              <div class="logo">
                <img src=" {{ asset('assets/images/logo.svg') }}" alt="">
              </div>
              <nav class="nav-menu">
                <ul class="nav-list">
                  <li class="menu-item">
                    <a href="#about-us" class="nav-link"><i class="fa fa-info-circle" aria-hidden="true"></i>Більше про
                    нас</a>
                  </li>
                  <li class="menu-item">
                    <a href="#gallery" class="nav-link"><i class="fas fa-image"></i>Варіанти складання</a>
                  </li>
                  <li class="menu-item">
                    <a href="#catalog" class="nav-link"><i class="fas fa-store"></i>Наші товари</a>
                  </li>
                  <li class="menu-item">
                    <a href="#contact-us" class="nav-link"><i class="fa fa-envelope" aria-hidden="true"></i>Зв'язатися з
                    нами</a>
                  </li>
                </ul>
              </nav>
            </div>
            <div class="slider swiper">
              <div class="slider__container swiper-wrapper">
                <div class="slider__row swiper-slide">
                  <div class="slider__item">
                    <div class="slider__thumb">
                      <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
                    </div>
                    <div class="slider__title">
                      Будиночок гнома
                    </div>
                  </div>
                  <div class="slider__item">
                    <div class="slider__thumb">
                      <img src="{{ asset('assets/images/2/0001.jpg') }}" alt="">
                    </div>
                    <div class="slider__title">
                      Будиночок гнома
                    </div>
                  </div>
                  <div class="slider__item">
                    <div class="slider__thumb">
                      <img src="{{ asset('assets/images/3/0001.jpg') }}" alt="">
                    </div>
                    <div class="slider__title">
                      Будиночок гнома
                    </div>
                  </div>
                </div>
              </div>
              <div class="slider__next-btn swiper-next-button"></div>
              <div class="slider__prev-btn swiper-prev-button"></div>
              <div class="slider__pagination"></div>
            </div>
            <div class="socials">
              <h3 class="title-s">Приєднуйся до нас у соціальних мережах:</h3>
              <div class="socials__container">
                <a href="#" class="socials__item">
                  <img src="{{ asset('assets/images/facebook.png') }}" alt="">
                  <span>Facebook</span>
                </a>
                <a href="#" class="socials__item">
                  <img src="{{ asset('assets/images/instagram.png') }}" alt="">
                  <span>Instagram</span>
                </a>
                <a href="#" class="socials__item">
                  <img src="{{ asset('assets/images/telegram.png') }}" alt="">
                  <span>Telegram</span>
                </a>
                <a href="#" class="socials__item">
                  <img src="{{ asset('assets/images/viber.png') }}" alt="">
                  <span>Viber</span>
                </a>
                <a href="#" class="socials__item">
                  <img src="{{ asset('assets/images/youtube.png') }}" alt="">
                  <span>Youtube</span>
                </a>
              </div>
            </div>
            <div class="video" id="header-video">
            <video src="{{ asset('assets/videos/3.mp4') }}" playsinline autoplay muted loop></video>
          </div>
          <a href="#about-us" class="next-block-btn"> <i class="fa fa-chevron-down" aria-hidden="true"></i> </a>
        </div>
      </header>
      <section class="block about-us" id="about-us">
        <h2 class="title-m">Хто ми такі?</h2>
        <div class="about-us__row">
          <div class="content">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore officiis quae animi impedit veniam
              corporis consectetur rem numquam ratione, iure minus, veritatis blanditiis. Quas suscipit necessitatibus
            adipisci in obcaecati rerum.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni eos iure sit ipsa modi quia earum quasi
              aliquid praesentium illum corrupti laboriosam rerum beatae quae, odit fugit consequuntur nam laudantium
              consectetur. Dolor qui blanditiis repudiandae, ex nemo distinctio nulla illo, nostrum hic sequi ducimus
              voluptatibus deleniti doloribus. Dolores rem, ab unde sapiente, molestiae distinctio doloremque illo
              repudiandae, aut beatae labore culpa obcaecati excepturi omnis expedita cupiditate ipsum eum quisquam. Id
              dolore est illo error, sapiente quae quos facere officiis. Possimus aliquid repellat, sunt reiciendis
              distinctio qui officia dolorem reprehenderit est quidem vitae beatae officiis eius neque accusantium non
            amet quas?</p>
          </div>
          <div class="thumb">
            <img src="{{ asset('assets/images/about.jpg') }}" alt="">
          </div>
        </div>
      </section>
      <section class="block gallery" id="gallery">
        <h2 class="title-m">Варіанти складання з одного комплекту</h2>
        <div class="gallery__container">
          <div class="gallery__item">
            <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
          </div>
          <div class="gallery__item">
            <img src="{{ asset('assets/images/1/0002.jpg') }}" alt="">
          </div>
          <div class="gallery__item">
            <img src="{{ asset('assets/images/2/0001.jpg') }}" alt="">
          </div>
          <div class="gallery__item">
            <img src="{{ asset('assets/images/2/0002.jpg') }}" alt="">
          </div>
          <div class="gallery__item">
            <img src="{{ asset('assets/images/3/0001.jpg') }}" alt="">
          </div>
          <div class="gallery__item">
            <img src="{{ asset('assets/images/3/0002.jpg') }}" alt="">
          </div>
        </div>
        <button class="gallery__view-btn">Переглянути повну галерею</button>
      </section>
      <section class="block videos">
        <div class="videos__container">
          <div class="videos__item">
            <iframe src="https://www.youtube.com/embed/CVI40hBjT0U" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="videos__item">
            <iframe src="https://www.youtube.com/embed/TZT70z9c6ME" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="videos__item">
            <iframe src="https://www.youtube.com/embed/aoYrbaxdWAI" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </section>
      <section class="block catalog" id="catalog">
        <h2 class="title-m">Наші товари</h2>
        <div class="catalog__container">
          <div class="catalog-item">
            <a href="#" class="catalog-item__view-btn">
              <div class="catalog-item__thumb">
                <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
              </div>
              <div class="catalog-item__title">
                Стандартний набір "Мрій та будуй"
              </div>
            </a>
            <div class="catalog-item__price"><span>2000</span> грн</div>
            <div class="catalog-item__row">
              <button class="catalog-item__add-to-cart">Додати у кошик</button>
              <button class="catalog-item__one-click-checkout">Замовити в 1 клік</button>
            </div>
          </div>
          <div class="catalog-item">
            <a href="#" class="catalog-item__view-btn">
              <div class="catalog-item__thumb">
                <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
              </div>
              <div class="catalog-item__title">
                Стандартний набір "Мрій та будуй"
              </div>
            </a>
            <div class="catalog-item__price"><span>2000</span> грн</div>
            <div class="catalog-item__row">
              <button class="catalog-item__add-to-cart">Додати у кошик</button>
              <button class="catalog-item__one-click-checkout">Замовити в 1 клік</button>
            </div>
          </div>
          <div class="catalog-item">
            <a href="#" class="catalog-item__view-btn">
              <div class="catalog-item__thumb">
                <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
              </div>
              <div class="catalog-item__title">
                Стандартний набір "Мрій та будуй"
              </div>
            </a>
            <div class="catalog-item__price"><span>2000</span> грн</div>
            <div class="catalog-item__row">
              <button class="catalog-item__add-to-cart">Додати у кошик</button>
              <button class="catalog-item__one-click-checkout">Замовити в 1 клік</button>
            </div>
          </div>
          <div class="catalog-item">
            <a href="#" class="catalog-item__view-btn">
              <div class="catalog-item__thumb">
                <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
              </div>
              <div class="catalog-item__title">
                Стандартний набір "Мрій та будуй"
              </div>
            </a>
            <div class="catalog-item__price"><span>2000</span> грн</div>
            <div class="catalog-item__row">
              <button class="catalog-item__add-to-cart">Додати у кошик</button>
              <button class="catalog-item__one-click-checkout">Замовити в 1 клік</button>
            </div>
          </div>
          <div class="catalog-item">
            <a href="#" class="catalog-item__view-btn">
              <div class="catalog-item__thumb">
                <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
              </div>
              <div class="catalog-item__title">
                Стандартний набір "Мрій та будуй"
              </div>
            </a>
            <div class="catalog-item__price"><span>2000</span> грн</div>
            <div class="catalog-item__row">
              <button class="catalog-item__add-to-cart">Додати у кошик</button>
              <button class="catalog-item__one-click-checkout">Замовити в 1 клік</button>
            </div>
          </div>
        </div>
      </section>
      <section class="block contacts" id="contact-us">
        <h2 class="title-m">Зв'язатись з нами</h2>
        <form action="" class="contact-form">
          <div class="contact-form__container">
            <div class="contact-form__group">
              <label for="">Електронна пошта<span>*</span></label>
              <input type="email" name="email" required>
            </div>
            <div class="contact-form__group">
              <label for="">Номер телефону</label>
              <input type="tel" name="phone">
            </div>
            <div class="contact-form__group">
              <label for="">Ваші питання</label>
              <input type="text" name="message">
            </div>
            <button class="contact-form__submit" type="submit">Надіслати</button>
            <div class="contact-form__response" id="contact-response"></div>
          </div>
        </form>
        <div class="socials">
          <h3 class="title-s">Приєднуйся до нас у соціальних мережах:</h3>
          <div class="socials__container">
            <a href="#" class="socials__item">
              <img src="{{ asset('assets/images/facebook.png') }}" alt="">
              <span>Facebook</span>
            </a>
            <a href="#" class="socials__item">
              <img src="{{ asset('assets/images/instagram.png') }}" alt="">
              <span>Instagram</span>
            </a>
            <a href="#" class="socials__item">
              <img src="./assets/images/telegram.png" alt="">
              <span>Telegram</span>
            </a>
            <a href="#" class="socials__item">
              <img src="{{ asset('assets/images/viber.png') }}" alt="">
              <span>Viber</span>
            </a>
            <a href="https://www.youtube.com/channel/UCNPJTaxdidTHxw7KnJKD3xw" target="_blank" class="socials__item">
              <img src="{{ asset('assets/images/youtube.png') }}" alt="">
              <span>Youtube</span>
            </a>
          </div>
        </div>
        <div class="logo">
          <img src="{{ asset('assets/images/logo.svg') }}" alt="">
        </div>
        <div class="info">
          <div class="info__item">
            <span>E-Mail:</span>
            <a href="">info@dream-and-build.com</a>
          </div>
          <div class="info__item">
            <span>Телефон:</span>
            <a href="">+380679302228</a>
          </div>
          <div class="copyright">
            &copy;Мрій та будуй&trade;. Усі права захищені 2021
          </div>
        </div>
      </section>
    </div>
    <div class="full-gallery">
      <div class="full-gallery__close-btn"> <i class="fas fa-times"></i> </div>
      <div class="full-gallery__container">
        <div class="full-gallery__item">
          <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
        </div>
        <div class="full-gallery__item">
          <img src="{{ asset('assets/images/1/0002.jpg') }}" alt="">
        </div>
        <div class="full-gallery__item">
          <img src="{{ asset('assets/images/1/0003.jpg') }}" alt="">
        </div>
        <div class="full-gallery__item">
          <img src="{{ asset('assets/images/1/0004.jpg') }}" alt="">
        </div>
        <div class="full-gallery__item">
          <img src="{{ asset('assets/images/1/0005.jpg') }}" alt="">
        </div>
        <div class="full-gallery__item">
          <img src="{{ asset('assets/images/1/0006.jpg') }}" alt="">
        </div>
        <div class="full-gallery__item">
          <img src="{{ asset('assets/images/1/0007.jpg') }}" alt="">
        </div>
        <div class="full-gallery__item">
          <img src="{{ asset('assets/images/1/0008.jpg') }}" alt="">
        </div>
        <div class="full-gallery__item">
            <img src="{{ asset('assets/images/2/0001.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/2/0002.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/2/0003.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/2/0004.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/2/0005.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/2/0006.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/2/0007.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/2/0008.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/3/0001.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/3/0002.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/3/0003.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/3/0004.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/3/0005.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/3/0006.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/3/0007.jpg') }}" alt="">
          </div>
          <div class="full-gallery__item">
            <img src="{{ asset('assets/images/3/0008.jpg') }}" alt="">
          </div>
      </div>
    </div>
    <div id="gallery-viewer" class="gallery-viewer">
      <div class="viewer-container swiper">
        <div class="overlay"><i class="fas fa-times    "></i></div>
        <div class="swiper-wrapper">
            <div class="viewer-slide swiper-slide">
                <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
              </div>
              <div class="viewer-slide swiper-slide">
                <img src="{{ asset('assets/images/1/0002.jpg') }}" alt="">
              </div>
              <div class="viewer-slide swiper-slide">
                <img src="{{ asset('assets/images/1/0003.jpg') }}" alt="">
              </div>
              <div class="viewer-slide swiper-slide">
                <img src="{{ asset('assets/images/1/0004.jpg') }}" alt="">
              </div>
              <div class="viewer-slide swiper-slide">
                <img src="{{ asset('assets/images/1/0005.jpg') }}" alt="">
              </div>
              <div class="viewer-slide swiper-slide">
                <img src="{{ asset('assets/images/1/0006.jpg') }}" alt="">
              </div>
              <div class="viewer-slide swiper-slide">
                <img src="{{ asset('assets/images/1/0007.jpg') }}" alt="">
              </div>
              <div class="viewer-slide swiper-slide">
                <img src="{{ asset('assets/images/1/0008.jpg') }}" alt="">
              </div>
              <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/2/0001.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/2/0002.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/2/0003.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/2/0004.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/2/0005.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/2/0006.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/2/0007.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/2/0008.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/3/0001.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/3/0002.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/3/0003.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/3/0004.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/3/0005.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/3/0006.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/3/0007.jpg') }}" alt="">
                </div>
                <div class="viewer-slide swiper-slide">
                  <img src="{{ asset('assets/images/3/0008.jpg') }}" alt="">
                </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
    <div class="catalog-item-viewer">
      <div class="catalog-item-viewer__container">
        <div class="catalog-item-viewer__close"> <i class="fas fa-times    "></i> </div>
        <div class="catalog-item-viewer__col">
          <div class="thumbs-slider">
            <div class="thumbs-slider__wrapper swiper-wrapper">
              <div class="thumbs-slider__slide swiper-slide">
                <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
              </div>
              <div class="thumbs-slider__slide swiper-slide">
                <img src="{{ asset('assets/images/1/0002.jpg') }}" alt="">
              </div>
              <div class="thumbs-slider__slide swiper-slide">
                <img src="{{ asset('assets/images/1/0003.jpg') }}" alt="">
              </div>
            </div>
            <div class="thumbs-slider__next-btn swiper-button-next"></div>
            <div class="thumbs-slider__prev-btn swiper-button-prev"></div>
          </div>
          <div class="thumbs">
            <div class="thumbs__wrapper swiper-wrapper">
              <div class="thumbs__slide swiper-slide">
                <img src="{{ asset('assets/images/1/0001.jpg') }}" alt="">
              </div>
              <div class="thumbs__slide swiper-slide">
                <img src="{{ asset('assets/images/1/0002.jpg')}}" alt="">
              </div>
              <div class="thumbs__slide swiper-slide">
                <img src="{{ asset('assets/images/1/0003.jpg')}}" alt="">
              </div>
            </div>
          </div>
        </div>
        <div class="catalog-item-viewer__col">
          <div class="catalog-item-viewer__title">Стандартний комплект</div>
          <div class="catalog-item-viewer__description">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt minima eos facere porro. Deleniti sint animi voluptatum ipsa molestias suscipit ipsam, atque consequuntur sunt fuga error consequatur iure vero minus?
          </div>
          <div class="catalog-item-viewer__price">Ціна: <span>2000</span> грн</div>
          <div class="catalog-item-viewer__row">
            <button class="catalog-item-viewer__add-to-cart">Додати у кошик</button>
            <button class="catalog-item-viewer__one-click-checkout">Замовити в 1 клік</button>
          </div>
        </div>
      </div>
    </div>
    <div class="cart">
      <div class="cart__container">
          <div class="cart__close-btn"> <i class="fas fa-times"></i> </div>
          <div class="cart__title">Кошик</div>
          <ul class="cart__list">
          </ul>
          <button class="cart__checkout-btn">Перейти до оформлення замовлення</button>
      </div>
    </div>
    <div class="checkout">
         <div class="checkout__container">
          <div class="checkout__title">Оформлення замовлення</div>
          <div class="checkout__close-btn">
            <i class="fas fa-times    "></i>
          </div>
           <form action="{{ route('checkout-post') }}" method="POST" class="checkout__form">
            @csrf
            <div class="checkout__input">
              <label for="checkout-name">Ім'я<span>*</span></label>
              <input type="text" id="checkout-name" name="name" required>
            </div>
            <div class="checkout__input">
              <label for="checkout-phone">Номер телефону<span>*</span></label>
              <input type="text" id="checkout-phone" name="phone" required>
            </div>
            <div class="checkout__input">
              <label for="checkout-email">Електронна пошта</label>
              <input type="email" name="email" id="checkout-email">
            </div>
            <div class="checkout__select">
              <label for="checkout-payment">Спосіб оплати замовлення<span>*</span></label>
              <select name="payment" id="checkout-payment">
                <option value="card_payment">Передоплата карткою</option>
                <option value="delivery_payment">Накладений платіж</option>
              </select>
            </div>
            <div class="checkout__select">
              <label for="checkout-shipping">Спосіб доставки замовлення<span>*</span></label>
              <select name="shipping" id="checkout-shipping">
                <option>Виберіть спосіб доставки</option>
                <option value="nova_poshta">Нова Пошта</option>
                {{-- <option value="justin">Justin</option> --}}
                {{-- <option value="ukr_poshta">Укр Пошта</option> --}}
              </select>
            </div>
            <div class="checkout__group">

            </div>
            <button class="checkout__submit">
              Оформити замовлення
            </button>
          </form>
         </div>
    </div>
    <div class="checkout-message">
      <div class="checkout-message__container">
        <div class="checkout-message__close-btn"><i class="fas fa-times"></i></div>
        <div class="checkout-message__message">
          Дякую за замовлення!
        </div>
        <div class="checkout-message__description">
          Наш менеджер зв'язжеться з вами у найближчий час.
        </div>
      </div>
    </div>
    <button class="open-cart-btn" id="open-cart" data-count="">
    <i class="fas fa-shopping-basket"></i>
    </button>
    <script type="module" src="{{ mix('app.js') }}"></script>
  </body>
</html>
