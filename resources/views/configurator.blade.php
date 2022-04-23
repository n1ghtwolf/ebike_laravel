<form method="POST" action="/configurator/submit">
    @csrf
    <select id="engine" name="engine" value="0">
    @foreach($products as $product)
        @if($product->type == 1)
                <option value="{{$product->id}}" price="{{$product->price}}">{{$product->name}}</option>
        @endif
    @endforeach
    </select>
    <br>
    <select id="display" name="display" value="0">
    @foreach($products as $product)
        @if($product->type == 2)
                <option value="{{$product->id}}" price="{{$product->price}}">{{$product->name}}</option>
        @endif
    @endforeach
    </select>
    <br>

    <select id="throttle" name="throttle" value="0">
    @foreach($products as $product)
        @if($product->type == 3)
                <option value="{{$product->id}}" price="{{$product->price}}">{{$product->name}}</option>
        @endif
    @endforeach
    </select>
    <br>

    <select id="battery" name="battery" value="0">
    @foreach($products as $product)
        @if($product->type == 5)
                <option value="{{$product->id}}" price="{{$product->price}}">{{$product->name}}</option>
        @endif
    @endforeach
    </select>
    <input type="submit" value="расчитать">
</form>
<div id="calc"></div>
<script src="   /js/jquery-3.6.0.min.js"></script>

<script>
    let calc = $('#calc');
    $('#engine,#display,#throttle,#battery').on('change',function (e){
        let calculated_price=0;
        $('option:selected').each(function (el,t){
            calculated_price+=parseInt($(this).attr('price'));
            // console.log($(this).attr('price'));
        });
        calc.html(calculated_price);
        console.log(calculated_price)
        // console.log(    $('option:selected'));
    });
    // document.querySelector('#engine,#display,#throttle,#battery').addEventListener('change',function (e){

</script>

