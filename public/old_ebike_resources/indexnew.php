<html>
<head>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>


<!--<script src="node_modules/bootstrap/dist/css/bootstrap.css"></script>-->

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <h5 class="my-0 mr-md-auto font-weight-normal">Ebikes.kh</h5>
    <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Features</a>
        <a class="p-2 text-dark" href="#">Enterprise</a>
        <a class="p-2 text-dark" href="#">Support</a>
        <a class="p-2 text-dark" href="#">Pricing</a>
    </nav>
    <a class="btn btn-outline-primary" href="#">Sign up</a>
</div>
<div class="container">
<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-12 px-0">
        <h1 class="display-4 font-italic text-center">Мастерская электротранспорта</h1>
        <ul class="lead my-3">
            <li>
                Переоборудование велосипедов в электровелосипеды
            </li>
            <li>
                Переоборудование бензиновых скутеров в электроскутеры
            </li>
            <li>
                Изготовление электровелосипедов под ключ на базе одной из наших рам
            </li>
            <li>
                Изготовление аккумуляторных батарей с гарантией
            </li>
            <li>
                Изготовление боксов для аккумуляторных батарей
            </li>
            <li>
                Ремонт и обслуживание электротранспорта
            </li>
        </ul>
        <div class="text-center"><a href="#calc">
            Конфигуратор электровелосипеда
            <i class="fa fa-warning"></i>
        </a></div>
    </div>
</div>


    <form method="POST" action="" id="calc">
    <div class="row text-center">
                <div class="col-md-12">

            <label>Мотор:</label>
<!--            <input id="sideFront" name="motor_side" type="radio" -->
<!--                   style="margin-left:10px;">Спереди-->
            <input  name="motor_side" type="radio"  checked>Сзади<br/>
            <label style="margin-top:10px;margin-bottom:5px;display:inline-block;">Обод: </label>
            <input id="rim24" name="rim_size" type="radio"   value="24" onchange="calc_order()">24&quot;&nbsp;
            <input id="rim26" name="rim_size" type="radio"  checked  value="26" onchange="calc_order()">26&quot;&nbsp;
            <input id="rim28" name="rim_size" type="radio"   value="28" onchange="calc_order()">28&quot;</div>
                <div class="col-md-12">
            <label>Набор:</label>
                <input id="kit350" name="kit" type="radio"   value="28" onchange="calc_order()">28&quot;
                <input id="kit500" name="kit" type="radio"   value="28" onchange="calc_order()">28&quot;
                <input id="kit1000" name="kit" type="radio"   value="28" onchange="calc_order()">28&quot;</div>
                <div class="col-md-12">
            <label>Ручка газа:</label>

                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()" checked>
                    <img src="assets/img/throttles/gas-4-220x220.jpg"></label>
                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()">
                    <img src="assets/img/throttles/gas-3-220x220.jpg"></label>
                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()">
                    <img src="assets/img/throttles/lock-gas-1-220x220.jpg"></label>
                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()">
                    <img src="assets/img/throttles/gas-5-220x220.jpg">
                    </label>
                </div>
                <div class="col-md-12">
            <label>Дисплей:</label>
                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()"><span>Нет</span></label>
                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()">
                    <img src="assets/img/displays/LCD-3_1-300x190.jpg"></label>
                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()">
                    <img src="assets/img/displays/LCD-5_1-268x200.jpg"></label>
                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()">
                    <img src="assets/img/displays/LCD-8_1-205x200.jpg"></label>
                    <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()">
                    <img src="assets/img/displays/Led-900s_1-204x200.jpeg">
                    </label>
                </div>
                <div class="col-md-12">
            <label>Батарея:</label>
                <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
                <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
                <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;       
                <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
                <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
                </div>
<!--                    <label class="cfg3-slider-label-left">Выбрать батарею</label>-->
<!--                    <input id="slider_battery" type="range" class="cfg3-slider" min="9" max="36" step="3" value="9"/> до-->
<!--                    <input id="input_battery" type="text" class="battery-configurator-input-sp"-->
<!--                           style="width:60px; margin-right:10px;" value="25">-->
<!--                    <label class="cfg3-slider-label-right">км пути<span data-toggle="tooltip" data-placement="top" title="При идеальных условиях в безветренную погоду по ровной асфальтированной дороге с ездоком до 70кг при скорости 25км\ч"><img src="node_modules/bootstrap-icons/icons/alert-triangle.svg">-->
<!--                </span>-->
<!--                    </label>-->

        </div>
    </div>




    </form>


<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })</script>
</body></html>
<script>
    // $(document).on('input', '#slRange', function() {
    //     $('#tbRange').val( $(this).val() );
    // });

    // var range = [40,50,60,70,80,90,100];
    var slider_battery = $('#slider_battery');
    var input_battery = $('#input_battery');

    slider_battery.on('input',function () {
        // let nominal_power = $('#nominal_power');
        input_battery.val(get_range($('#nominal_power').val(),input_battery.val()));
        // input_battery.val(slider_battery.val());
    });
    $('[type="submit"]').on('click',function (e) {
        e.preventDefault();
        // console.log(kits);
        for (let kit in kits){
            kit===$(this).val()?build_selected_kit(kits[kit]):'';
            // kit===$(this).val()?console.log(kits[kit]):'';
            // console.log(kits[kit].power);
        }
        // console.log(kits.$(this).val())
    });
    function get_range(power1,battery_capacity) {
        let power = 250;
        let watts = battery_capacity*48;
        console.log(watts);
        // console.log(battery_capacity);
        // console.log((battery_capacity*48));
        // console.log(power);
        return (60*watts)/power;
    }
    function build_selected_kit(kit) {
        let div_kit = $('#kit');
        div_kit.text('');
        div_kit.append('<div>Выбранный набор:'+kit.power+' ватт</div><div id="nominal_power">Номинальная мощность:'+kit.power+'</div><div>Максимальная мощность:'+kit.max_power+'</div><div>Максимальная скорость:'+kit.max_speed+'</div><div>Рекомендованный вес:'+kit.recomended_weight+'</div><div>Стоимость:'+kit.price+'</div><div>Рекомендуемая батарея '+kit.recomended_battery+'</div>')
    }


    var input_range =$('#input_range');
    var input_speed =$('#input_speed');
    var input_max_speed =$('#input_max_speed');
    var slider_range =$('#slider_range');
    var slider_speed =$('#slider_speed');
    var slider_max_speed =$('#slider_max_speed');
    var max_speed_front = 35;
    var max_speed_rear = 65;
    // var rimSize = document.querySelector('input[name="rimSize"]:checked').value;
    // console.log(rimSize.val());
    slider_range.on('input',function () {
        input_range.val(slider_range.val());
            // slider_max_speed.val(slider_speed.val());
    });
    slider_speed.on('input',function () {
        console.log(slider_speed.val());
        if(slider_speed.val()>slider_max_speed.val()){
            // $('#input_max_speed ,#slider_max_speed').val(slider_speed.val());
            input_max_speed.val(slider_speed.val());
            slider_max_speed.val(slider_speed.val());
            input_speed.val(slider_speed.val());
        }else{
            input_speed.val(slider_speed.val());
        }
    });
    slider_max_speed.on('input',function () {
        // console.log(slider_max_speed.val());
        if(slider_speed.val()>slider_max_speed.val()) {
            // $('#input_max_speed ,#slider_max_speed').val(slider_speed.val());
            slider_speed.val(slider_max_speed.val());
            input_max_speed.val(slider_max_speed.val());
            input_speed.val(slider_max_speed.val());
        }else{
            input_max_speed.val(slider_max_speed.val());
        }
    });

function calc_order() {
    //перетащить батареи в бд и вобще все параметры через async
    //или вобще генерировать цену на основе выбраного слайдера, т.е задать статик параметры для 1й ячейки и щитать на основе слайдера
  $.ajax({
      url:'/calculate.php?test=yes  ',
      method:'POST',
      data:'',
      success:function (e) {
          console.log(e);
      }
  })
}
</script>