<!-- copied view from old project -->
@extends('home')

@section('content')
    <div class="container py-4">
        <h1 class="mb-4">Конфигуратор электро-набора</h1>

        @php
            $kits = $types['Kit']->products ?? collect();
            $displays = $types['Display']->products ?? collect();
            $batteries = $types['Battery']->products ?? collect();
            $brakes = $types['Brakes']->products ?? collect();
        @endphp

        <div class="row">
            <div class="col-md-6">
                <h4>1. Выберите колесо-мотор (Kit)</h4>
                @foreach($kits as $p)
                    <div class="form-check mb-1">
                        <input class="form-check-input product-choice" type="radio" name="kit_id" value="{{ $p->id }}" data-price="{{ $p->price }}" id="kit{{ $p->id }}">
                        <label class="form-check-label" for="kit{{ $p->id }}">
                            {{ $p->name }} — {{ number_format($p->price,0,',',' ') }} грн
                        </label>
                    </div>
                @endforeach

                <h4 class="mt-4">2. Дисплей</h4>
                @foreach($displays as $p)
                    <div class="form-check mb-1">
                        <input class="form-check-input product-choice" type="radio" name="display_id" value="{{ $p->id }}" data-price="{{ $p->price }}" id="disp{{ $p->id }}">
                        <label class="form-check-label" for="disp{{ $p->id }}">
                            {{ $p->name }} — {{ number_format($p->price,0,',',' ') }} грн
                        </label>
                    </div>
                @endforeach
            </div>
            <div class="col-md-6">
                <h4>3. Батарея</h4>
                @foreach($batteries as $p)
                    <div class="form-check mb-1">
                        <input class="form-check-input product-choice" type="radio" name="battery_id" value="{{ $p->id }}" data-price="{{ $p->price }}" id="bat{{ $p->id }}">
                        <label class="form-check-label" for="bat{{ $p->id }}">
                            {{ $p->name }} — {{ number_format($p->price,0,',',' ') }} грн
                        </label>
                    </div>
                @endforeach

                <h4 class="mt-4">4. Тормоза</h4>
                @foreach($brakes as $p)
                    <div class="form-check mb-1">
                        <input class="form-check-input product-choice" type="radio" name="brakes_id" value="{{ $p->id }}" data-price="{{ $p->price }}" id="br{{ $p->id }}">
                        <label class="form-check-label" for="br{{ $p->id }}">
                            {{ $p->name }} — {{ number_format($p->price,0,',',' ') }} грн
                        </label>
                    </div>
                @endforeach
            </div>
        </div>

        <hr class="my-4">
        <div class="d-flex justify-content-between align-items-center">
            <h3 class="m-0">Итого: <span id="totalPrice">0 грн</span></h3>
            <button id="orderBtn" class="btn btn-success" disabled>Оформить заказ</button>
        </div>
    </div>
@endsection