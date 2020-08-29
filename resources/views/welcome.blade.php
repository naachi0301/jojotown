@extends('layouts.common')

@section('content')

<!-------------------------------main----------------------------->
        <div class="table">
            <ul class="m-0 p-0 ">
                @foreach ($trends as $trend)
                <li><a href="#trend_{{ $trend['id'] }}">"{{ $trend['name'] }}"</a></li>
                @endforeach
            </ul>
        </div>
        
        
        @foreach ($trends as $trend)
        <div id="trend_{{ $trend['id'] }}" class="{{ $loop->first ? 'trend-first' : 'trend' }}">
            <div class="headline">
                <h3>"{{ $trend['name'] }}"</h3>
            </div>
            <div class="d-flex flex-row mb-3">
                
                @foreach ($trend['products'] as $product)
                <div class="card border-0" style="width: 18rem;">
                    <div class="card-body">
                        <a href="{{ $product['url'] }}">
                            <img src="{{ $product['image_url'] }}" alt="商品画像1">
                        </a>
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="card-text">{{ $product['explain'] }}</p>
                        <p class="card-text">{{ $product['price'] }}円</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        @endforeach
        
@endsection
