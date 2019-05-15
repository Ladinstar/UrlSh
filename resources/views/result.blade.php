@extends('layouts.template')

@section('title', 'Congratulations you have your shortened URL | Url.sh')

@section('content')
<div class="parallax-container">
    <div class="section">
        <div class="row container center">
            <h2 class="header white-text" style="font-size: 2.5em !important;font-weight: 400;margin-top:100px;margin-bottom:5px">YOUR SHORTENED LINK IS HERE.</h2>
            <div class="white-text" style="margin-bottom:40px;">Parallax is an effect where the background content or image in this case.</div>
            <div class="row">
                <div class="col s12 m12">
                    <div class="section white hoverable">
                        <div class="container">
                            <p class="white">
                                <b class="big">SHORTENED LINK</b><br>
                                <a target="_blank" href="{{ config('app.url').'/'.$url->shortened }}" class="code big">{{ config('app.url').'/'.$url->shortened }}</a>
                            </p>
                            <div class="divider"></div>
                            <p class="white">
                                <strong>ORIGINAL LINK</strong><br>
                                <a target="_blank" href="{{ $url->url }}" class="code">{{ $url->url }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="parallax">
        <img src="{{ url('/') }}/img/parallax.jpg">
    </div>
</div>
<div class="section white">
    <div class="row container center">
        <h2 class="header">LINKS IS COOL</h2>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
</div>
@endsection
