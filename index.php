<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TTP STYLES TOOLTIP</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/standard.css">
    <link rel="stylesheet" href="css/tipr.css">
    <link rel="stylesheet" href="css/protip.css">
    <style>
        .box-container > * {
            display: table-cell;
        }
        .container-protip {
            width: 100%;
            display: table;
            background-color: transparent;
            /*
            background-color: #ddd;
            */
            padding: 100px;
        }
        .box-ttip {
            position: relative;
        }
        .box-ttip .content-protip {
            position: relative;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin: auto;
            width: 300px;
            height: 100px;
            background-color: #421F63;
            text-align: center;
            line-height: 100px;
            box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }
        .box-ttip .content-protip span {
            text-transform: uppercase;
            font-weight: bold;
            font-size: 20px;
            color: #fff;
        }
    </style>
</head>
<body style="position: relative;">
    <header style="position: relative; padding:25px; margin-bottom: 100px; border-bottom: 2px solid #dcdcdc; box-shadow: 2px 2px 5px #f9f9f9; background-color: #fff; margin-bottom: 25px;"></header>
    <section class="box-container container-protip">
        <div class="box-ttip">
            <span class="ttip-container">
                tooltip
            </span>

            <!--<div class="tipr_container_bottom">
                <div class="tipr_point_bottom">
                    <div class="tipr_content">bottom</div>
                </div>
            </div>-->
        </div>
    </section>
    <style>
        .ttip-container {
            color: #333;
            background-color: #fff;
            padding: 9px 17px;
            margin-top: 13px;
            box-shadow: 2px 2px 5px #f9f9f9;
            z-index: 1000;
            position: relative;
            background: #fff;
            border: 1px solid #dcdcdc;
        }
    </style>


    <?php /*
        <div class="center">
            <div style="margin-top: 50px;"></div>

            <div class="inner norm" style="padding-top: 17px;">
                <div class="tip" data-mode="bottom" data-tip="Mensaje tooltip" data-animated="fadeInDown">Ars Amatoria</div>
            </div>

            <div style="margin-top: 50px;"></div>

            <div class="tipr">
                <div class="inner norm" style="padding-top: 17px;">
                    <div>
                        Mensaje tooltip bottom
                    </div>
                    <div class="tipr_container_bottom">
                        <div class="tipr_point_bottom animated fadeInDown go">
                            <div class="tipr_content">bottom</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tipr">
                <div class="inner norm" style="padding-top: 17px;">
                    <div>
                        Mensaje tooltip top
                    </div>
                    <div class="tipr_container_top">
                        <div class="tipr_point_top animated fadeInUp go">
                            <div class="tipr_content">top</div>
                        </div>
                    </div>
                </div>
            </div>

            <div style="margin-top: 50px;"></div>

            <div class="tipr">
                <div class="inner norm" style="padding-top: 17px;">
                    <div>
                        Mensaje tooltip right
                    </div>
                    <div class="tipr_container_right">
                        <div class="tipr_point_right animated fadeInLeft go">
                            <div class="tipr_content">right</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tipr">
                <div class="inner norm" style="padding-top: 17px;">
                    <div>
                        Mensaje tooltip left
                    </div>
                    <div class="tipr_container_left">
                        <div class="tipr_point_left animated fadeInLeft go">
                            <div class="tipr_content">left</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    */ ?>
    <?php /*
        <header style="position: relative; padding:25px; margin-bottom: 100px; border-bottom: 2px solid #dcdcdc; box-shadow: 2px 2px 5px #f9f9f9; background-color: #fff; margin-bottom: 25px;"></header>

        cc
                <div class="content-protip">
                    <span>I have my own tooltip</span>
                </div>
                <div class="protip-container protip-skin-square protip-skin-square--size-normal protip-skin-square--scheme-pro protip-mixin--css-no-transition protip-show" data-pt-identifier="14729211265837980" style="max-width: 300px; left: 38%; top: -60%;" data-pt-position="top">
                    <span class="protip-arrow"></span>
                    <div class="protip-content">Hi there! I'm a Protip!</div>
                </div>
            </div>
        </section>
        <div style="margin: 5% auto;"></div>
        <section class="box-container container-protip">
            <div class="box-ttip">
                <div class="content-protip">
                    <span>I have my own tooltip</span>
                </div>
                <div class="protip-container protip-skin-square protip-skin-square--size-normal protip-skin-square--scheme-pro protip-mixin--css-no-transition protip-show" data-pt-identifier="14729295441638556" style="max-width: 300px; left: 0; top: 25%;" data-pt-position="left">
                    <span class="protip-arrow"></span>
                    <div class="protip-content">Hi there! I'm a Protip!</div>
                </div>
            </div>
        </section>
        <div style="margin: 5% auto;"></div>
        <section class="box-container container-protip">
            <div class="box-ttip">
                <div class="content-protip">
                    <span>I have my own tooltip</span>
                </div>
                <div class="protip-container protip-skin-square protip-skin-square--size-normal protip-skin-square--scheme-pro protip-mixin--css-no-transition protip-show" data-pt-identifier="14729295441638556" style="max-width: 300px; left: 74%; top: 25%;" data-pt-position="right">
                    <span class="protip-arrow"></span>
                    <div class="protip-content">Hi there! I'm a Protip!</div>
                </div>
            </div>
        </section>
        <div style="margin: 5% auto;"></div>
        <section class="box-container container-protip">
            <div class="box-ttip">
                <div class="content-protip">
                    <span>I have my own tooltip</span>
                </div>
                <div class="protip-container protip-skin-square protip-skin-square--size-normal protip-skin-square--scheme-pro protip-mixin--css-no-transition protip-show" data-pt-identifier="14729295441638556" style="max-width: 300px; left: 38%; top: 115px;" data-pt-position="bottom">
                    <span class="protip-arrow"></span>
                    <div class="protip-content">Hi there! I'm a Protip!</div>
                </div>
            </div>
        </section>
    */ ?>
    <?php /*
        <!--<form>
        Seleccionar un número del 1 al <input type="range" id="rr" min="1" max="1000" value="500"><span id="n_range"></span>
        <button type="button" id="btn_range">Obtener número aleatorio</button>
        <div id="result_random"></div>
        </form>-->
    */?>



    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400|Merriweather:300,300italic" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="lib/tipr.js"></script>
    <script>
        $(document).ready(function() {
            // RANDOM NUMBER
            /*$(function(){
                $(":input").change(function(){
                    $("#n_range").html($("#rr").val());
                });

                $("#btn_range").click(function(){
                    rand = Math.floor((Math.random()*$("#rr").val())+1);
                    $("#result_random").html("Número aleatorio: "+rand);
                });
            });*/


            $('.tip').tipr();
        });
    </script>
</body>
</html>