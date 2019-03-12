@php $questions = get_the_terms($post->ID,'question') @endphp
<section class="tips questions my-4"> 
  <div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
      <h4><?php _e('Tips & Tricks','roots') ?></h4>
      <hr class="sevinci-hr">
      <?php echo get_post_meta($post->ID, 'tool_tips_and_tricks', true); ?>
    </div>
    <div class="col-12 col-sm-6 col-md-6 col-lg-6">
      <h4><?php _e('Questions it answers','roots'); ?></h4>
      <hr>
      @if ( $questions && ! is_wp_error( $questions ) )
        <ul>
          @foreach ($questions as $q)
            <li>{{ $q->name }}</li>
          @endforeach
        </ul>
      @endif
    </div>
  </div>
</section>
