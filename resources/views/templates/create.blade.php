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
<div class="container">
    
    <br/>
    <div class="box box-panel">
        <div class="panel-title">
            New Template
        </div>
        <div class="panel-body">
            @if($errors->has('title'))
            <div class="notification is-danger">
                {{$errors->first('title')}}
            </div>
            @endif 

            @if($errors->has('description'))
            <div class="notification is-danger">
                {{$errors->first('description')}}
            </div>
            @endif

            @if($errors->has('source_url'))
            <div class="notification is-danger">
                {{$errors->first('source_url')}}
            </div>
            @endif

            <form class="form" method="post" action="{{route('templates.store')}}">
                {{csrf_field()}}
                <label class="label">Template Name</label>
                <p class="control">
                    <input type="text" name="title" style="border-radius:0px;">
                </p>
                <label class="label">Description</label>
                <p class="control">
                    <input type="text" name="description" style="border-radius:0px;">
                </p>
                <label class="label">Repository URL</label>
                <p class="control">
                    <input type="text" name="source_url" style="border-radius:0px;">
                </p>
                <div style="text-align:right;"> 
                    <button class="button ghost-btn"  >CREATE</button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop