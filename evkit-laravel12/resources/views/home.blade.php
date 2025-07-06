<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('shop_partials.head')
<body data-plugin-page-transition>
<div class="body">
    @include('shop_partials.header')

    @yield('content')

    @include('modal')
    @include('shop_partials.footer')
</div>
@include('shop_partials.footer-scripts')
<a class="scroll-to-top hidden-mobile" href="#"><i class="fas fa-chevron-up"></i></a>
</body>
</html>