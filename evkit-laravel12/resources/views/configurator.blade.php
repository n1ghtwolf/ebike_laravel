<!-- copied view from old project -->
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
                            <span class="sale text-color-dark" id="average_price">11000 грн</span>
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
                                        <div class="form-check pl-0">
                                            @foreach($products as $product)
                                                @if($product->type_id == 2)
                                                    <input class="input_img" type="radio" name="display"
                                                           id="{{$product->name}}" value="{{$product->id}}"
                                                           price="{{$product->price}}"
                                                           {{ $product->available === 0 ? 'disabled="disabled"' : '' }}
                                                    />
                                                    <label for="{{$product->name}}">
                                                        <p class="del-cross">
                                                            <img
                                                                src="{{$product->img}}"
                                                                alt="{{$product->name}}" width="100px" height="100px"/>
                                                        </p>
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
                                                <option value="1" selected>26</option>
                                                <option value="2">27.5</option>
                                                <option value="3">28</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Аккумулятор:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select id="battery" name="battery" class="form-control text-1 h-auto py-2" disabled>
                                               <option selected value="0"> не доступны </option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Датчики тормоза:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="brakes" id="brakes" class="form-control text-1 h-auto py-2">
                                                <option value="0">под тросики</option>
                                                <option value="1">под гидролинии</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="button"
                                    onclick="showDialog('{{route('order.confirm')}}')"
                                    class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">
                                Заказать
                            </button>
                            <hr>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection