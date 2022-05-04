@extends('home')

@section('content')
    <div role="main" class="main shop pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5 mb-md-0">
                    <img alt="" class="img-fluid"
                         src="img/products/wheels/20191007_131026-removebg-preview-1000x1000.jpg">
                </div>
                <div class="col-md-6">
                    <div class="summary entry-summary position-relative">
                        <h1 class="mb-0 font-weight-bold text-7">Конфигуратор</h1>
                        <div class="pb-0 clearfix d-flex align-items-center">
                            <div title="Rated 3 out of 5" class="float-left">
                                <input type="text" class="d-none" value="3" title="" data-plugin-star-rating
                                       data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                            </div>
                        </div>
                        <div class="divider divider-small">
                            <hr class="bg-color-grey-scale-4">
                        </div>
                        <p class="price mb-3">
                            <span class="sale text-color-dark">$15,00</span>
                            {{--                            скидка--}}
                            {{--                            <span class="amount">$22,00</span>--}}
                        </p>
                        <p class="text-3-5 mb-3">Здесь можно сконфигурировать набор</p>

                        <ul class="list list-unstyled text-2">
                            <li class="mb-0">Доступен: <strong class="text-color-dark">Да</strong></li>
                        </ul>
                        <form id="configurator_form" enctype="multipart/form-data" method="post" class="cart" action="">
                            <table class="table table-borderless" style="max-width: 500px;">
                                <tbody>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Бренд:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="brand" class="form-control text-1 h-auto py-2" disabled>
                                                <option value="">BAFANG</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Набор:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="kit" id="kit" class="form-control text-1 h-auto py-2"
                                                    disabled>
                                                <option value="1">Задний 500w редукторный под кассету</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Дисплей:</td>
                                    <td class="px-0 py-2">
                                        <div class="form-check form-check-inline">
                                            @foreach($products as $product)
                                                @if($product->type == 2)
                                                    <input class="form-check-input" type="radio" name="display"
                                                           id="display" value="{{$product->id}}" checked=""
                                                           price="{{$product->price}}">
                                                    <label class="form-check-label">
                                                        {{$product->name}}
                                                    </label>
                                                @endif
                                            @endforeach
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Спицовка:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="rim" id="rim" class="form-control text-1 h-auto py-2">
                                                <option value="0">без спицовки</option>
                                                @foreach($products as $product)
                                                    @if($product->type == 11)
                                                        <option value="{{$product->id}}"
                                                                price="{{$product->price}}">{{$product->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Аккумулятор:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select id="battery" name="battery" class="form-control text-1 h-auto py-2">

                                                @foreach($products as $product)
                                                    @if($product->type == 5)
                                                        <option value="{{$product->id}}"
                                                                price="{{$product->price}}">{{$product->name}}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Датчики тормоза:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="brakes" id="brakes" class="form-control text-1 h-auto py-2">
                                                <option value="1">под тросики</option>
                                                <option value="2" disabled>под гидролинии</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button"
                                    onclick="showDialog('{{route('order.show')}}')"
                                    class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">

                                Заказать
                            </button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col">
                    <div id="description"
                         class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
                        <ul class="nav nav-tabs justify-content-start">
                            <li class="nav-item active">
                                <a
                                    class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3"
                                    href="#productDescription" data-toggle="tab">Описание</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3"
                                   href="#productInfo" data-toggle="tab">Спецификация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3"
                                   href="#installReqiredments" data-toggle="tab">Параметры установки</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3"
                                   href="#KitCollection" data-toggle="tab">Состав набора</a>
                            </li>
                        </ul>
                        <div class="tab-content p-0">
                            <div class="tab-pane px-0 py-3 active" id="productDescription">
                                <p>replace Описание и преимущество электронаборов бафанг</p>
                            </div>
                            <div class="tab-pane px-0 py-3" id="productInfo">
                                <table class="table table-striped m-0">
                                    <tbody>
                                    <tr>
                                        <th class="border-top-0">
                                            Размер колеса:
                                        </th>
                                        <td class="border-top-0">
                                            20/26/700c/28
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">
                                            Мощность:
                                        </th>
                                        <td class="border-top-0">
                                            500ват, до 1000 в пике
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">
                                            Тип привода::
                                        </th>
                                        <td class="border-top-0">
                                            редукторный
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">
                                            Номинальное напряжение(DCV):
                                        </th>
                                        <td class="border-top-0">
                                            48
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">
                                            n0(Rpm):
                                        </th>
                                        <td class="border-top-0">
                                            310
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="border-top-0">
                                            Номинальная мощность:
                                        </th>
                                        <td class="border-top-0">
                                            500w
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Контроллер
                                        </th>
                                        <td>
                                            48v20a
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Максимальный крутящий момент
                                        </th>
                                        <td>
                                            65 N.m.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Максимальная эффективность:
                                        </th>
                                        <td>
                                            до 80%
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Цвет:
                                        </th>
                                        <td>
                                            черный
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Вес:
                                        </th>
                                        <td>
                                            4.5кг
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Уровень шума(dB):
                                        </th>
                                        <td>
                                            до 55
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Рабочая температура:
                                        </th>
                                        <td>
                                            -20 — 45 градусов С.
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane px-0 py-3" id="installReqiredments">
                                <p>Присутствует крепление под диск для дискового тормоза.</p>
                                <table class="table table-striped m-0">
                                    <tbody>
                                    <tr>
                                        <th class="border-top-0">
                                            Ширина посадочного места:
                                        </th>
                                        <td class="border-top-0">
                                            137 mm
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Диаметр мотор колеса:
                                        </th>
                                        <td>
                                            180
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Выход разъема:
                                        </th>
                                        <td>
                                            через вал, с правой стороны.
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Длина кабеля разьема и его тип:
                                        </th>
                                        <td>
                                            250мм, G9,1
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Необходимые спици:
                                        </th>
                                        <td>
                                            36H*12G
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Влагозащита:
                                        </th>
                                        <td>
                                            IP X5
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Сертификация:
                                        </th>
                                        <td>
                                            ROHS/CE
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane px-0 py-3" id="KitCollection">
                                <ul>
                                    <li>
                                        мотор колесо Bafang 500w, заднее, под кассету, заспицованое в ободе
                                    </li>
                                    <li>
                                        контроллер на 48 вольт 20 ампера
                                    </li>
                                    <li>
                                        выбранный дисплей
                                    </li>
                                    <li>
                                        курок газа под большой палец
                                    </li>
                                    <li>
                                        датчики торможения под тросики\датчики гидролиний
                                    </li>
                                    <li>
                                        датчик PAS
                                    </li>
                                    <li>
                                        коробка под контроллер
                                    </li>
                                    <li>
                                        кабель веточка
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
