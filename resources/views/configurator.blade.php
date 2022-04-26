@extends('home')

@section('content')
    <div role="main" class="main shop pt-4">

        <div class="container">

            <div class="row">
                <div class="col-md-5 mb-5 mb-md-0">

                    <div class="thumb-gallery-wrapper">
                        <div class="thumb-gallery-detail owl-carousel owl-theme manual nav-inside nav-style-1 nav-dark mb-3">
                            <div>
                                <img alt="" class="img-fluid" src="img/products/product-grey-7.jpg" data-zoom-image="img/products/product-grey-7.jpg">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg" data-zoom-image="img/products/product-grey-7-2.jpg">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="img/products/product-grey-7-3.jpg" data-zoom-image="img/products/product-grey-7-3.jpg">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="img/products/product-grey-8.jpg" data-zoom-image="img/products/product-grey-8.jpg">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="img/products/product-grey-6.jpg" data-zoom-image="img/products/product-grey-6.jpg">
                            </div>
                            <div>
                                <img alt="" class="img-fluid" src="img/products/product-grey-5.jpg" data-zoom-image="img/products/product-grey-5.jpg">
                            </div>
                        </div>
                        <div class="thumb-gallery-thumbs owl-carousel owl-theme manual thumb-gallery-thumbs">
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="img/products/product-grey-7.jpg">
                            </div>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="img/products/product-grey-7-2.jpg">
                            </div>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="img/products/product-grey-7-3.jpg">
                            </div>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="img/products/product-grey-7-4.jpg">
                            </div>
                            <div class="cur-pointer">
                                <img alt="" class="img-fluid" src="img/products/product-grey-7-5.jpg">
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-md-7">

                    <div class="summary entry-summary position-relative">

                        <div class="position-absolute top-0 right-0">
                            <div class="products-navigation d-flex">
                                <a href="#" class="prev text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Red Ladies Handbag"><i class="fas fa-chevron-left"></i></a>
                                <a href="#" class="next text-decoration-none text-color-dark text-color-hover-primary border-color-hover-primary" data-tooltip data-original-title="Green Ladies Handbag"><i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>

                        <h1 class="mb-0 font-weight-bold text-7">Конфигуратор</h1>

                        <div class="pb-0 clearfix d-flex align-items-center">
                            <div title="Rated 3 out of 5" class="float-left">
                                <input type="text" class="d-none" value="3" title="" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
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

                        <p class="text-3-5 mb-3">Здесь можно сконфигурировать себе набор до мельчайших деталей и узнать цену</p>

                        <ul class="list list-unstyled text-2">
                            <li class="mb-0">Доступен: <strong class="text-color-dark">Да</strong></li>
                        </ul>


                        <form enctype="multipart/form-data" method="post" class="cart" action="{{ route('configurator.submit') }}">
                            <table class="table table-borderless" style="max-width: 300px;">
                                <tbody>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Бренд:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="size" class="form-control text-1 h-auto py-2">
                                                <option value="">PLEASE CHOOSE</option>
                                                <option value="blue">Small</option>
                                                <option value="red">Normal</option>
                                                <option value="green">Big</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Тип:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="size" class="form-control text-1 h-auto py-2">
                                                <option value="">PLEASE CHOOSE</option>
                                                <option value="blue">Small</option>
                                                <option value="red">Normal</option>
                                                <option value="green">Big</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Мощность:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="color" class="form-control text-1 h-auto py-2">
                                                <option value="">PLEASE CHOOSE</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>  <tr>
                                    <td class="align-middle text-2 px-0 py-2">Дисплей:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="color" class="form-control text-1 h-auto py-2">
                                                <option value="">PLEASE CHOOSE</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-2 px-0 py-2">Аккумулятор:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="color" class="form-control text-1 h-auto py-2">
                                                <option value="">PLEASE CHOOSE</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <td class="align-middle text-2 px-0 py-2">Датчики тормоза:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="color" class="form-control text-1 h-auto py-2">
                                                <option value="">PLEASE CHOOSE</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr><tr>
                                    <td class="align-middle text-2 px-0 py-2">Аккумулятор:</td>
                                    <td class="px-0 py-2">
                                        <div class="custom-select-1">
                                            <select name="color" class="form-control text-1 h-auto py-2">
                                                <option value="">PLEASE CHOOSE</option>
                                                <option value="blue">Blue</option>
                                                <option value="red">Red</option>
                                                <option value="green">Green</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-dark btn-modern text-uppercase bg-color-hover-primary border-color-hover-primary">Заказать</button>
                            <hr>
                        </form>



                    </div>

                </div>
            </div>

            <div class="row mb-4">
                <div class="col">
                    <div id="description" class="tabs tabs-simple tabs-simple-full-width-line tabs-product tabs-dark mb-2">
                        <ul class="nav nav-tabs justify-content-start">
                            <li class="nav-item active"><a class="nav-link active font-weight-bold text-3 text-uppercase py-2 px-3" href="#productDescription" data-toggle="tab">Описание</a></li>
                            <li class="nav-item"><a class="nav-link font-weight-bold text-3 text-uppercase py-2 px-3" href="#productInfo" data-toggle="tab">Технические характеристики</a></li>
                        </ul>
                        <div class="tab-content p-0">
                            <div class="tab-pane px-0 py-3 active" id="productDescription">
                                <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. </p>
                                <p class="m-0">Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
                            </div>
                            <div class="tab-pane px-0 py-3" id="productInfo">
                                <table class="table table-striped m-0">
                                    <tbody>
                                    <tr>
                                        <th class="border-top-0">
                                            Size:
                                        </th>
                                        <td class="border-top-0">
                                            Unique
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Colors
                                        </th>
                                        <td>
                                            Red, Blue
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Material
                                        </th>
                                        <td>
                                            100% Leather
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                                              </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
