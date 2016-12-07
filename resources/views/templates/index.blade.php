@extends('layouts.boolbitbox')

@section('content')
<section class="hero is-primary">
  <div class="hero-body">
    <div class="container">
        <div class="control is-grouped">
            <p class="control is-expanded">
                <input class="input" type="text" placeholder="Find a repository">
            </p>
            <p class="control">
                <a class="button is-info">
                Search
                </a>
            </p>
        </div>
      
      <h2 class="subtitle">
        Boolbit box is repository for packer.io
      </h2>
    </div>
  </div>
</section>
<br/>
<div class="container">

<table class="table">
    <tbody>
        @foreach($templates as $template)
        <tr>
            <td style="padding:10px 20px;">
                <a style="font-size:1.5em;display:inline-block;margin-bottom:10px;" >{{$template->title}}</a> <br/>
                {{$template->description}} <br/>
                <a href="{{$template->source_url}}" style="color:#333;" target="_blank">{{$template->source_url}} </a><br/>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@stop