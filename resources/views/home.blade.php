<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-style-switcher-options="{'colorPrimary': '#0088cc', 'colorSecondary': '#0169fe', 'colorTertiary': '#005AEF', 'colorQuaternary': '#383f48'}" class="history svg video supports boxshadow csstransforms3d csstransitions backgroundcliptext webkit chrome win js sticky-header-enabled">

@include('shop_partials.head')

<body data-plugin-page-transition="">

<div class="body">
    @include('shop_partials.header')

    @yield('content')

    @include('shop_partials.footer')
</div>

{{--<a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="" data-toggle="tooltip" data-placement="right" title="" data-original-title="Style Switcher">--}}
{{--    <i class="fas fa-cogs"></i>--}}
{{--    <div class="style-switcher-tooltip">--}}
{{--        <strong>Style Switcher</strong>--}}
{{--        <p>Check out different color options and styles.</p>--}}
{{--    </div>--}}
{{--</a>--}}

@include('shop_partials.footer-scripts')

<a class="scroll-to-top hidden-mobile" href="#"><i class="fas fa-chevron-up"></i></a>

</body>
</html>
