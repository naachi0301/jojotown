@extends('layouts.common')

@section('content')

<!-------------------------------main----------------------------->
        <div class="table">
            <ul class="m-0 p-0 ">
                <li><a href="#man">man</a></li>
                <li><a href="#woman">woman</a></li>
                <li><a href="#item">item</a></li>
                <li><a href="#color">color</a></li>
            </ul>
        </div>
        <div id="man">
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
        <div id="woman">
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
        <div id="item">
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
        <div id="color">
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
