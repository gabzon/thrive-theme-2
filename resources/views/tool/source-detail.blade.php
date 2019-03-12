@php
$source_type = get_post_meta($s->ID,'source_type_select');
$book = get_post_meta($s->ID,'source_book_group');
$article = get_post_meta($s->ID,'source_article_group');
$online_source = get_post_meta($s->ID,'source_online_source_group');
$link = get_post_meta($s->ID, 'source_amazon_affiliate_link') ? get_post_meta($s->ID, 'source_amazon_affiliate_link') : $s->permalink
@endphp

@switch($source_type[0])
  @case('BK')
  <div class="list-group-item list-group-item-action flex-column align-items-start">
    <div class="d-flex w-100 justify-content-between">
      <div class="image">
        <img class="mr-2" src="{{get_the_post_thumbnail_url($s->ID,'thumbnail')}}" alt="{{$s->post_title}}" style="min-width:140px">
      </div>
      <div class="ml-3">
        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1">{{ $s->post_title }}</h5>
          <small class="text-muted">{!! $book[0]['source_isbn_source_title'] ? '<b>ISBN: </b>' . $book[0]['source_isbn_source_title'] :''!!}</small>
        </div>
        <p class="mb-1">{!! $s->post_excerpt !!}</p>
        <small class="text-muted">{{ $book[0]['source_author'] }}, «{{$book[0]['source_title'] }}», {{ $book[0]['source_publication_location'] ? $book[0]['source_publication_location'] .', ' : '' }} {{ $book[0]['source_publisher'] }}, {{ $book[0]['source_publication_year'] }} </small>
        <br>
        <div class="mb-2 mt-2">
          <small><a class="btn btn-light btn-sm" href="{{ $book[0]['source_online_source_title'] }}" target="_blank">Get the book</a></small>
          <small><a class="btn btn-light btn-sm" href="{{ $book[0]['source_online_source_url'] }}" target="_blank">Official Website</a></small>
        </div>
      </div>
    </div>
  </div>

  @break
  {{-- @case('CH')
  case 'CH':
  $chapter = get_post_meta($di,'source_chapter_group');
  $author = get_post_meta($di,'source_author');
  $title = get_post_meta($di,'source_title');
  $location = get_post_meta($di,'');
  $publisher = get_post_meta($di,'');
  $year = get_post_meta($di,'');
  $pages = get_post_meta($di,'');
  $website = get_post_meta($di,'');
  echo '<pre>';
  print_r($chapter);
  echo '</pre>';
  display_chapter();
  break;
  @break --}}
  @case('AR')


  $author = $article[0]['source_author'];
  $title = $article[0]['source_title'];
  $publisher = $article[0]['source_author'];
  $volume = $article[0]['source_author'];
  $number = $article[0]['source_author'];
  $year = $article[0]['source_author'];
  $pages = $article[0]['source_author'];
  $website = $article[0]['source_author'];
  display_article($author[0], $title[0], $publisher[0], $volume[0], $number[0], $year[0], $pages[0], $website[0]);
  break;
  function display_article($author, $title, $publisher, $volume, $number, $year, $pages, $website){
    echo '<a href="'.$website.'" target="_blank">';
      echo $title;
      echo '</a><br>';
      echo $author . ", « " . $title . "», " . $publisher . ", " . $volume. ", " . $number . ", " . $year . "," . $pages;
    }
    @break
    @case('ON')
    <a href="{{$online_source[0]['source_online_source_url']}}" class="list-group-item list-group-item-action flex-column align-items-start">
      <div class="d-flex w-100 justify-content-between">
        <h5 class="mb-1">{{ $s->post_title }}</h5>
      </div>
      <small class="text-muted">{{ $online_source[0]['source_author'] }}, «{{ $online_source[0]['source_title'] }}», {{ $online_source[0]['source_publisher'] }}, {{ $book[0]['source_publication_year'] }} </small>
      <br>
      <small class="text-muted">{{$online_source[0]['source_online_source_url']}} {{ __('accessed on ','roots') }} {{ $online_source[0]['source_online_source_visitation'] }}</small>
    </a>
    @break
  @endswitch
