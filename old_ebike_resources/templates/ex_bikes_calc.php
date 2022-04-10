<?php //require 'config.php';?>
<script src="node_modules/bootstrap/dist/css/bootstrap.css"></script>
<form method="POST" action="" id="calc">
    <div class="text-center">
        <div class="col-md-12">

            <label>Мотор:</label>
                        <input id="sideFront" name="motor_side" type="radio"
                               style="margin-left:10px;">Спереди
            <input  name="motor_side" type="radio"  checked>Сзади<br/>
            <label style="margin-top:10px;margin-bottom:5px;display:inline-block;">Обод: </label>
            <input id="rim24" name="rim_size" type="radio" value="24" onchange="calc_order()">24&quot;&nbsp;
            <input id="rim26" name="rim_size" type="radio"  checked  value="26" onchange="calc_order()">26&quot;&nbsp;
            <input id="rim28" name="rim_size" type="radio"   value="28" onchange="calc_order()">28&quot;</div>
        <div class="col-md-12">
            <label>Набор:</label>
            <input id="kit350" name="kit" type="radio"   value="4100" onchange="calc_order()">350w
            <input id="kit500" name="kit" type="radio"   value="5945" onchange="calc_order()">500w
            <input id="kit1000" name="kit" type="radio"   value="8500" onchange="calc_order()">1000w</div>
        <div class="col-md-12">
            <label>Ручка газа:</label>
            <?php $gas_buttons = $db->getAll('SELECT id,img_path FROM throttles');
//            helper::var_dump($gas_buttons);
            foreach ($gas_buttons as $gas_button){
                echo " <label><input  name=\"gas\" type=\"radio\"   value=\"{$gas_button['id']}\" onchange=\"calc_order()\" checked> <img src=\"{$gas_button['img_path']}\"> </label>";
            }?>
        </div>
        <div class="col-md-12">
            <label>Дисплей:</label>
            <label>
                <input  name="display" type="radio"   value="28" onchange="calc_order()"><span>Нет</span></label>
            <?php $displays = $db->getAll('SELECT id,img_path FROM displays');
            //            helper::var_dump($gas_buttons);
            foreach ($displays as $display){
                echo " <label><input  name=\"display\" type=\"radio\"   value=\"{$display['id']}\" onchange=\"calc_order()\" checked> <img src=\"{$display['img_path']}\"> </label>";
            }?>

        </div>
        <div class="col-md-12">
            <label>Батарея:</label>
            <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
            <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
            <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
            <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
            <input  name="battery" type="radio"   value="28" onchange="calc_order()">28&quot;
        </div>

    </div>
    <script src="node_modules/jquery/dist/jquery.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script>


        function calc_order() {
            //перетащить батареи в бд и вобще все параметры через async
            //или вобще генерировать цену на основе выбраного слайдера, т.е задать статик параметры для 1й ячейки и щитать на основе слайдера
            $.ajax({
                // url:'classes/exists_bikes_calc.php?test=yes',
                url:'/calculate.php?test=yes  ',
                method:'POST',
                data:'',
                success:function (e) {
                    console.log(e);
                }
                // error:function (e) {
                //     console.log(e);
                //
                // }
            })
        }

    </script>