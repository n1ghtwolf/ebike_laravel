@extends('home')

@section('content')
    <div class="container py-5 text-center">
        <h2 class="mb-3">Спасибо за заказ!</h2>
        @if(session('success'))
            <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        <a href="{{ route('configurator.index') }}" class="btn btn-primary mt-3">Вернуться к конфигуратору</a>
    </div>
@endsection