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

<template-create-form></template-create-form>

</div>
@stop