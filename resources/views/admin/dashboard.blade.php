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



    $api = new Binance\API("u5ZUqga77ekuzfIXX1rDeaYUoht1M2jBy98wFxMpgWBrT09fRubKatuist9zK7LJ", "ptLkhENqmxO93CNH3dguXfwhdE9TK5h1QZMV6ifS8D06AXVYRd7S8sWcSAFWuO5V");
    $tickers = $api->prices();


    DB::statement('TRUNCATE TABLE currencies;');

    foreach ($tickers as $key => $value) {
        DB::insert('insert into currencies (name, value) values (?, ?)', [$key, $value]);


    }
    $names_value = DB::select('select name from currencies;');


    ?>






    <form id="select" method="get">
        <select id="sel" name="sel">
            <?
            if (!isset($_GET['sel'])){
                $_GET['sel']="BNBUTS";
            }
            $sel = $_GET['sel'];?>
            @foreach ($names_value as $nameItem)
                <option value="{{ $nameItem->name }}">{{$nameItem->name }}</option>
            @endforeach

                <?$_GET['sel']=$sel;?>
        </select>
        <input type="submit">
    </form>




    <div id="<?php echo $sel; ?>">

        <!-- TradingView Widget BEGIN tradingview_504ac-->
        <div class="tradingview-widget-container">
            <div id="tradingview_504ac"></div>
            <div class="tradingview-widget-copyright"><a
                        href="https://www.tradingview.com/symbols/BINANCE-<?php echo $sel; ?>/"
                        rel="noopener" target="_blank"><span class="blue-text"><?php echo $sel; ?> Chart</span></a>
                by TradingView
            </div>
            <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
            <script type="text/javascript">
                new TradingView.widget(
                    {
                        "width": 980,
                        "height": 610,
                        "symbol": "BINANCE:<?php echo $sel; ?>",
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





    </div>






@stop

@section('css')
    {{--<link rel="stylesheet" href="/css/admin_custom.css">--}}
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop