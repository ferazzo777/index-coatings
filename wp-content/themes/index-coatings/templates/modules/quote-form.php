
  <section class="wrapper quote-form">

    <div class="container">

      <?php

      $form_object = get_field('quote_form');
      gravity_form_enqueue_scripts($form_object['id'], true);
      gravity_form($form_object['id'], false, false, false, '', true, 1);

      ?>

    </div>

  </section>
