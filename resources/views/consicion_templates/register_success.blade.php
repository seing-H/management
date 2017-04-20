@extends('templates.outs.auth')

@section('content')

    <div class="special-form">
        <a href="{{ route('home') }}">{{--<img src="{{ \App\Helpers\Helpers::logoUrl()  }}" alt="">--}}</a>
        <h2 class="text-center">REGISTER SUCCESS</h2>
        @if ($errors->first())
            <span class="status-msg error-msg">{{ $errors->first() }}</span>
        @endif
        <hr>
        <br>
        <p>
            Please check the email. OR <a href="{{ route('backHome') }}">Click here to return to</a>
        </p>
    </div>

@stop

