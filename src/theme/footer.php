<footer class="footer-front">
  <?php global $post;  ?>
  <?php if($post->post_name !== 'contacts') : ?>
  <h2>Приходите к нам</h2>
  <div class="diveder"></div>
  <?php endif; ?>
  <div class="content">
    <div class="card-container">
      <div class="item">
        <img src="<?= get_template_directory_uri() ?>/img/placeholder.png" alt=""/>
        <p>Адрес</p>
        <span>Ул. Загородная, 34</span>
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
    <div class="maps">
    <iframe width="1140" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:Ei9ZZWx5emF2ZXR5IENoYXZkYXIgU3QsIDI0LCBLeWl2LCBVa3JhaW5lLCAwMjAwMCIwEi4KFAoSCZsLi8dKxNRAEZSYdyu8ZUxAEBgqFAoSCYtP7G21xdRAETzdF209_30q&key=AIzaSyBItdjUWotVNNfGTnze3UuoGbAzEgxbPqo" allowfullscreen></iframe>
    </div>
  </div>
  <p>2019. Все права защищены</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>