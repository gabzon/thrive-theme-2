
@extends('layouts.app')

@section('content')

  @php
    the_user_favorites_count();

    //get_user_favorites();

    //$arr = get_user_favorites_list();

    //print_r($arr);

    the_user_favorites_list();
  @endphp

@endsection
