@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Welcome to this beautiful admin panel.</p>

    <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content">
            <span class="info-box-text">Messages</span>
            <span class="info-box-number">1,410</span>
        </div>
    </div>
    <div class="row">

        <div class="info-box bg-success col-lg-3">
            <span class="info-box-icon"><i class="far fa-thumbs-up"></i></span>
            <div class="info-box-content">
                <span class="info-box-text">Likes</span>
                <span class="info-box-number">41,410</span>
                <div class="progress">
                    <div class="progress-bar" style="width: 70%"></div>
                </div>
                <span class="progress-description">
      70% Increase in 30 Days
    </span>
            </div>
        </div>
        <div class="small-box bg-info col-lg-3">
            <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>
        </div>
        <div class="small-box bg-gradient-success col-lg-3">
            <div class="inner">
                <h3>44</h3>
                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
            </a>

        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
    <style>
        canvas {
            -moz-user-select: none;
            -webkit-user-select: none;
            -ms-user-select: none;
        }
    </style>

    <?

    //use Binance\API;
    //    require 'vendor/jaggedsoft/php-binance-api/php-binance-api.php';
    //    require 'vendor/autoload.php';

    $api = new Binance\API("u5ZUqga77ekuzfIXX1rDeaYUoht1M2jBy98wFxMpgWBrT09fRubKatuist9zK7LJ", "ptLkhENqmxO93CNH3dguXfwhdE9TK5h1QZMV6ifS8D06AXVYRd7S8sWcSAFWuO5V");
    $tickers = $api->prices();


    DB::statement('TRUNCATE TABLE currencies;');

    foreach ($tickers as $key => $value) {
        DB::insert('insert into currencies (name, value) values (?, ?)', [$key, $value]);


    }
    $names_value = DB::select('select name from currencies;');


    ?>



    <select id="sel">

        @foreach ($names_value as $nameItem)
            <option value="{{ $nameItem->name }}">{{$nameItem->name }}</option>
        @endforeach


    </select>

    <script>
        window.activeGraphId = '#BNBUSDT';

        $("#sel").change(e => {
            let id = '#' + e.target.value;

            $(window.activeGraphId).css("display", "none");
            $(id).css("display", "block");

            window.activeGraphId = id;
        });
    </script>

    <!-- TODO  СДЕЛАТЬ ЦИКЛ С БД-->
    <div id="BNBUSDT">
        <!-- TradingView Widget BEGIN BNBUSDT tradingview_504ac-->
        <div class="tradingview-widget-container">
            <div id="tradingview_504ac"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-BNBUSDT/"
                                                         rel="noopener" target="_blank"><span class="blue-text">BNBUSDT Chart</span></a>
                by TradingView
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget(
                    {
                        "width": 980,
                        "height": 610,
                        "symbol": "BINANCE:BNBUSDT",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "Light",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "container_id": "tradingview_504ac"
                    }
                );
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
    <div id="MANABTC">
        <style>#MANABTC {
                display: none;
            }</style>
        <!-- TradingView Widget BEGIN MANABTC tradingview_f2477-->
        <div class="tradingview-widget-container">
            <div id="tradingview_f2477"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-MANABTC/"
                                                         rel="noopener" target="_blank"><span class="blue-text">MANABTC Chart</span></a>
                by TradingView
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget(
                    {
                        "width": 980,
                        "height": 610,
                        "symbol": "BINANCE:MANABTC",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "Light",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "container_id": "tradingview_f2477"
                    }
                );
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
    <div id="MANAETH">
        <style>
            #MANAETH {
                display: none;
            }
        </style>
        <!-- TradingView Widget BEGIN MANAETH tradingview_1efae-->
        <div class="tradingview-widget-container">
            <div id="tradingview_1efae"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-MANAETH/"
                                                         rel="noopener" target="_blank"><span class="blue-text">MANAETH Chart</span></a>
                by TradingView
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget(
                    {
                        "width": 980,
                        "height": 610,
                        "symbol": "BINANCE:MANAETH",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "Light",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "container_id": "tradingview_1efae"
                    }
                );
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>
    <div id="BNBBTC">


        <style>
            #BNBBTC {
                display: none;
            }
        </style>
        <!-- TradingView Widget BEGIN BNBBTC tradingview_b66ec-->
        <div class="tradingview-widget-container">
            <div id="tradingview_b66ec"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-BNBBTC/"
                                                         rel="noopener" target="_blank"><span
                            class="blue-text">BNBBTC Chart</span></a> by TradingView
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget(
                    {
                        "width": 980,
                        "height": 610,
                        "symbol": "BINANCE:BNBBTC",
                        "interval": "D",
                        "timezone": "Etc/UTC",
                        "theme": "Light",
                        "style": "1",
                        "locale": "en",
                        "toolbar_bg": "#f1f3f6",
                        "enable_publishing": false,
                        "allow_symbol_change": true,
                        "container_id": "tradingview_b66ec"
                    }
                );
            </script>
        </div>
        <!-- TradingView Widget END -->
    </div>




    </div>

    {{--    <div style="width:100%;">--}}
    {{--        <canvas id="canvas"></canvas>--}}
    {{--    </div>--}}
    {{--    <script>--}}
    {{--        var config = {--}}
    {{--            type: 'line',--}}
    {{--            data: {--}}
    {{--                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],--}}
    {{--                datasets: [{--}}
    {{--                    label: 'dataset - big points',--}}
    {{--                    data: [--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor()--}}
    {{--                    ],--}}
    {{--                    backgroundColor: window.chartColors.red,--}}
    {{--                    borderColor: window.chartColors.red,--}}
    {{--                    fill: false,--}}
    {{--                    borderDash: [5, 5],--}}
    {{--                    pointRadius: 15,--}}
    {{--                    pointHoverRadius: 10,--}}
    {{--                }, {--}}
    {{--                    label: 'dataset - individual point sizes',--}}
    {{--                    data: [--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor()--}}
    {{--                    ],--}}
    {{--                    backgroundColor: window.chartColors.blue,--}}
    {{--                    borderColor: window.chartColors.blue,--}}
    {{--                    fill: false,--}}
    {{--                    borderDash: [5, 5],--}}
    {{--                    pointRadius: [2, 4, 6, 18, 0, 12, 20],--}}
    {{--                }, {--}}
    {{--                    label: 'dataset - large pointHoverRadius',--}}
    {{--                    data: [--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor()--}}
    {{--                    ],--}}
    {{--                    backgroundColor: window.chartColors.green,--}}
    {{--                    borderColor: window.chartColors.green,--}}
    {{--                    fill: false,--}}
    {{--                    pointHoverRadius: 30,--}}
    {{--                }, {--}}
    {{--                    label: 'dataset - large pointHitRadius',--}}
    {{--                    data: [--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor(),--}}
    {{--                        randomScalingFactor()--}}
    {{--                    ],--}}
    {{--                    backgroundColor: window.chartColors.yellow,--}}
    {{--                    borderColor: window.chartColors.yellow,--}}
    {{--                    fill: false,--}}
    {{--                    pointHitRadius: 20,--}}
    {{--                }]--}}
    {{--            },--}}
    {{--            options: {--}}
    {{--                responsive: true,--}}
    {{--                legend: {--}}
    {{--                    position: 'bottom',--}}
    {{--                },--}}
    {{--                hover: {--}}
    {{--                    mode: 'index'--}}
    {{--                },--}}
    {{--                scales: {--}}
    {{--                    xAxes: [{--}}
    {{--                        display: true,--}}
    {{--                        scaleLabel: {--}}
    {{--                            display: true,--}}
    {{--                            labelString: 'Month'--}}
    {{--                        }--}}
    {{--                    }],--}}
    {{--                    yAxes: [{--}}
    {{--                        display: true,--}}
    {{--                        scaleLabel: {--}}
    {{--                            display: true,--}}
    {{--                            labelString: 'Value'--}}
    {{--                        }--}}
    {{--                    }]--}}
    {{--                },--}}
    {{--                title: {--}}
    {{--                    display: true,--}}
    {{--                    text: 'Chart.js Line Chart - Different point sizes'--}}
    {{--                }--}}
    {{--            }--}}
    {{--        };--}}

    {{--        window.onload = function() {--}}
    {{--            var ctx = document.getElementById('canvas').getContext('2d');--}}
    {{--            window.myLine = new Chart(ctx, config);--}}
    {{--        };--}}
    {{--    </script>--}}




@stop

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop