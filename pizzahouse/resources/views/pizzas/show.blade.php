@extends('layouts.layout')

@section('content')
<div class="wrapper pizza-details">
  <h1>Order for {{ $pizza->name }}</h1>
  <p class="type">Type - {{ $pizza->type }}</p>
  <p class="base">Base - {{ $pizza->base }}</p>
</div>
<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection
