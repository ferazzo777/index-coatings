<?php if ( !is_page( 'contact-us' ) ){ ?>
  <section class="wrapper call-to-action">

    <div class="call-to-action-content">

      <h3 class="call-to-action-title"><?php the_field( 'call_to_action_title', 'options' ); ?></h3>

      <p><?php the_field( 'call_to_action_content', 'options' ); ?></p>

      <a href="<?php the_field( 'call_to_action_button_link', 'options' ); ?>" class="button button--green call-to-action-button"><?php the_field( 'call_to_action_button_text', 'options' ); ?></a>

    </div>

  </section>
<?php } ?>
