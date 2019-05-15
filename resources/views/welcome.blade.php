@extends('layouts.template')

@section('title', 'Url.sh | URL Shortener of the century')

@section('content')
<div class="parallax-container">
    <div class="section">
        <div class="row container center">
            <h2 class="header white-text" style="font-size: 2.5em !important;font-weight: 400;margin-top:100px;margin-bottom:5px">TAP YOUR LINK AND SHORT HER.</h2>
            <div class="white-text" style="margin-bottom:40px;">Parallax is an effect where the background content or image in this case.</div>
            <form action="" method="POST" class="row">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col s12 m12">
                        <input type="text" name="url" placeholder="Enter your URL here" value="{{ old('url') }}">
                        {!! $errors->first('url', "<span class='helper-text amber lighten-5 red-text text-darken-4 left'>:message</span>") !!}
                        <div class="preloader-wrapper small active" style="display:none">
                            <div class="spinner-layer spinner-red-only">
                                <div class="circle-clipper left">
                                    <div class="circle"></div>
                                </div>
                                <div class="gap-patch">
                                    <div class="circle"></div>
                                </div>
                                <div class="circle-clipper right">
                                    <div class="circle"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 m12">
                        <button class="waves-effect waves-light btn btn-large red accent-1 submit" role="submit">SHORTEN IT!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="parallax">
        <img src="{{ asset('/img/parallax.jpg') }}">
    </div>
</div>
<div class="section white">
    <div class="row container center">
        <h2 class="header">LINKS IS COOL</h2>
        <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
</div>
@endsection
