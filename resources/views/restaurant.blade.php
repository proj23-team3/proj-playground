@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $user->restaurant_name }}</h1>
        <img src="{{ $user->cover ? $user->cover : asset('img/undraw_Chef_cu0r.png') }}" width="30%">
        <div>
            <p>Address: {{ $user->address }}</p>
            <p>VAT: {{ $user->vat_number }}</p>
            <p>Shipping Costs: {{ $user->shipping_costs }}</p>
        </div>
    </div>
@endsection
