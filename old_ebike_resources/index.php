<html>
<?php require 'config.php';?>
<?php require 'templates/header.php';?>
<body>


<!--<script src="node_modules/bootstrap/dist/css/bootstrap.css"></script>-->
<?php require 'templates/navbar.php';?>

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
                    Быстросьемные боксы для аккумуляторных батарей
                </li>
                <li>
                    Ремонт и обслуживание электротранспорта
                </li>
            </ul>
            <div class="text-center"><a class="btn btn-info" href="#calc">
                    Конфигуратор электровелосипеда
                    <i class="fa fa-warning"></i>
                </a></div>
        </div>
    </div>


   <?php require 'templates/ex_bikes_calc.php';?>
</div>
<script src="node_modules/jquery/dist/jquery.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })</script>
</body>
</html>
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

    // function calc_order() {
    //     //перетащить батареи в бд и вобще все параметры через async
    //     //или вобще генерировать цену на основе выбраного слайдера, т.е задать статик параметры для 1й ячейки и щитать на основе слайдера
    //     $.ajax({
    //         url:'/calculate.php?test=yes  ',
    //         method:'POST',
    //         data:'',
    //         success:function (e) {
    //             console.log(e);
    //         }
    //     })
    // }
</script>