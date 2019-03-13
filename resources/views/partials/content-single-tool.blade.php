<?php
$img = get_post_meta(get_the_ID(),'tool_background_image',true);
if (!empty($img)) {
  $bg_img = wp_get_attachment_url($img);
}else{
  $bg_img = get_stylesheet_directory_uri().'/assets/images/tools-bg.jpg';
}

$version = get_post_meta(get_the_ID(), 'tool_version_group',true);

$last_version = end($version);
$videos = get_post_meta(get_the_ID(),'tool_video');
if (get_post_meta(get_the_ID(),'tool_quote_group')) {
  $quotes_group = get_post_meta(get_the_ID(),'tool_quote_group');
  $quotes = $quotes_group[0];
}

$sources = get_posts( array(
  'post_type'  => 'source',
  'posts_per_page' => -1,
  'post_belongs' => $post->ID,
  'post_status' => 'publish',
  'suppress_filters' => false
));
?>

<article @php post_class() @endphp>
  @include('tool/header')
  <div class="entry-content" id="tool-description">
    @php the_content() @endphp
    <?php //get_template_part('templates/tool/tool-video'); ?>
    @include('tool/tips')
    @include('tool/tags')
    @include('tool/sources')
    <?php //get_template_part('tool/brain.php'); ?>
  </div>

  <br>
  <footer class="mt-4">
    {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}
  </footer>
  @php comments_template('/partials/comments.blade.php') @endphp
</article>
