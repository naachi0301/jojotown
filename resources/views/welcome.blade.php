@extends('layouts.common')

@section('content')

<!-------------------------------main----------------------------->
        @foreach ($trends as $trend)
        <div class="table">
            <ul class="m-0 p-0 ">
                <li><a href="#trend_1">エスニック柄</a></li>
                <li><a href="#trend_2">ストール</a></li>
                <li><a href="#trend_3">夏</a></li>
                <li><a href="#trend_4">オーバーサイズ</a></li>
            </ul>
        </div>
        @endforeach
        <div id="trend_1">
            <div class="headline">
                <h2>man</h2>
            </div>
            <div class="d-flex flex-row mb-3">
                
                @foreach ($products as $product)
                <div class="card border-0" style="width: 18rem;">
                    <div class="card-body">
                        <a href="{{ $product['url'] }}">
                            <img src="{{ $product['image_url'] }}" alt="商品画像1">
                        </a>
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['explain'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        <div id="trend_2">
            <div class="headline">
                <h2>man</h2>
            </div>
            <div class="container">
                
                @foreach ($products as $product)
                <div class="man_list">
                    <a href="{{ $product['url'] }}">
                        <img src="{{ $product['image_url'] }}" alt="画像例1">
                    </a>
                    <p>{{ $product['name'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        <div id="trend_3">
            <div class="headline">
                <h2>man</h2>
            </div>
            <div class="container">
                
                @foreach ($products as $product)
                <div class="man_list row">
                    <a class="col-sm-3" href="{{ $product['url'] }}">
                        <img src="{{ $product['image_url'] }}" alt="画像例1">
                    </a>
                    <p>{{ $product['name'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
        </div>
        <div id="trend_4">
            <div class="headline">
                <h2>man</h2>
            </div>
            <div class="container">
                
                @foreach ($products as $product)
                <div class="man_list">
                    <a href="{{ $product['url'] }}">
                        <img src="{{ $product['image_url'] }}" alt="画像例1">
                    </a>
                    <p>{{ $product['name'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
@endsection
