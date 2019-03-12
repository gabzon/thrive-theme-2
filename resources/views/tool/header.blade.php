<?php $time = get_post_meta($post->ID, 'tool_duration_group',true); ?>
<br>
<div class="jumbotron jumbotron-fluid bg-blue">
  <div class="row">
    <div class="col-12 col-sm-5 col-md-5 col-lg-5">
      <?php if (has_post_thumbnail( $post->ID ) ): ?>
        <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),'full' ); ?>
        <div class="ui large image">
          <img src="<?php echo $image[0]; ?>" alt="" class="" />
        </div>
      <?php endif; ?>
    </div>
    <div class="col-12 col-sm-7 col-md-7 col-lg-7">
      <div class="pl-3">
        <h1 class="display-4 white">{!! get_the_title() !!}</h1>
        <p class="lead white pr-4">
          {!! get_the_excerpt() !!}
          <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 white">
              Duration:
              {{ $time['tool_duration_value'] . ' ' . $time['tool_duration_type'] }}
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 white">
              Participants: {{ get_post_meta($post->ID, 'tool_participants',true) }}
            </div>
          </div>
        </p>
        <br>
        <a href="<?php echo wp_get_attachment_url($last_version['tool_version_file'][0]); ?>" class="btn btn-danger btn-lg" id="download-tool" target="_blank">
          <i class="fas fa-file-download"></i>
          <?php _e('Download','sage') ?>
        </a>
      </div>
    </div>
  </div>
</div>

<section class="share">
  <div class="social text-center">
    Share on:
    <a class="twitter" href="http://twitter.com/home?status=Reading: <?php the_permalink(); ?>" title="Share this post on Twitter!" target="_blank">Twitter</a>
    <a class="facebook" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share this post on Facebook!" onclick="window.open(this.href); return false;">Facebook</a>
    <a class="google-plus" target="_blank" href="https://plus.google.com/share?url=<?php the_permalink(); ?>">Google+</a>
  </div>
</section>
