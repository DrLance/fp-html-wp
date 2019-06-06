<?php get_header(); ?>

<section class="sec--about_bakery">
  <div class="content">
    <div class="ellipse"><span></span> </div>
    <h2>О нашей пекарне</h2>
    <div class="diveder"></div>
    <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
      осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних
      условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется
      абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более
      привлекательным и живым для визуально-слухового восприятия. Текст генерируется
      абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более
      привлекательным и живым для визуально-слухового восприятия.</p>
    <div class="card-container">
      <div class="item">
        <img src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt=""/>
        <p>Адрес</p>
        <span>Киев</span>
        <span>Елизаветы Чавдар 24</span>
      </div>
      <div class="item">
        <img src="<?= get_template_directory_uri() ?>/img/phone-call.png" alt=""/>
        <p>контактные телефоны</p>
        <a href="tel:+380955993636"><span>+38 (095) 599 36 36</span></a>
        <a href="tel:+380689553636"><span>+38 (068) 955 3636</span></a>
      </div>
      <div class="item">
        <img src="<?= get_template_directory_uri() ?>/img/stopwatch.png" alt=""/>
        <p>режим работы</p>
        <span>c 10:00 по 23:00</span>
      </div>
    </div>
  </div>
</section>

<section class="sec--about_chief">
  <div class="content">
    <h2>О шеф-поваре</h2>
    <div class="diveder"></div>
    <div class="about-container">
      <div class="avatar">
        <img src="<?= get_template_directory_uri() ?>/img/ivanov.png" alt=""/>
      </div>
      <div class="description">
        <p>Алексей иванов</p>
        <span>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
      осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних
      условиях. При создании генератора мы использовали небезизвестный универсальный код речей. Текст генерируется
      абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более
      привлекательным и живым для визуально-слухового восприятия.  Текст генерируется
      абзацами случайным образом от двух до десяти предложений в абзаце, что позволяет сделать текст более
      привлекательным и живым для визуально-слухового восприятия.</span>
      </div>
    </div>
  </div>
</section>

<section class="sec--our_menu">
  <div class="content">
    <h2>Наше меню</h2>
    <p>Сайт рыбатекст поможет дизайнеру, верстальщику, вебмастеру сгенерировать несколько абзацев более менее
      осмысленного текста рыбы на русском языке, а начинающему оратору отточить навык публичных выступлений в домашних
      условиях.</p>
    <div class="diveder"></div>
    <div class="menu-container">
      <div class="deserts">
        <a href="#" class="border-inner">
          <span>десерты</span>
        </a>
      </div>
      <div class="coffee">
        <a href="#" class="border-inner">
          <span>кофе</span>
        </a>
      </div>
      <div class="fastfood">
        <a href="#" class="border-inner">
          <span>фаст фуд</span>
        </a>
      </div>
      <div class="pizza">
        <a href="#" class="border-inner">
          <span>пицца</span>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="sec--gallery">
  <div class="content">
    <h2>Галерея</h2>
    <div class="diveder"></div>
    <?php if(have_rows('gallery_slider')): ?>
    <div class="slider-front">
      <?php while(have_rows('gallery_slider')): the_row(); ?>
      <div class="item">
        <img src="<?= get_sub_field('img') ?>" alt=""/>
      </div>
      <?php endwhile; ?>
    </div>
    <?php endif; ?>
  </div>
  <a href="/gallery/">Все фото</a>
</section>

<?php get_footer(); ?>
