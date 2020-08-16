@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">商品一覧</div>
                <div>
                    <a class="btn btn-link" href="/admin/product/create">
                        新規作成
                    </a>
                </div>
                <div>
                    <form class="mt-3" method="GET" action="/admin/product">
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">商品名</label>
                            <div class="col-md-6">
                                <input id="product_name" class="form-control" name="product_name" value="{{ $product_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_explain" class="col-md-4 col-form-label text-md-right">ブランド</label>
                            <div class="col-md-6">
                                <select name="brand_id" name="brand_id" class="form-control">
                                    <option value="" @if($brand_id == '') selected  @endif>全てのブランド</option>
                                    @foreach ($brands as $brand)
                                        <option value="{{ $brand['id'] }}" @if($brand_id == $brand['id']) selected  @endif>{{ $brand['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_explain" class="col-md-4 col-form-label text-md-right">トレンド</label>
                            <div class="col-md-6">
                                <select name="trend_id" name="trend_id" class="form-control">
                                    <option value="" @if($trend_id == '') selected  @endif>全てのトレンド</option>
                                    @foreach ($trends as $trend)
                                        <option value="{{ $trend['id'] }}" @if($trend_id == $trend['id']) selected  @endif>{{ $trend['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    検索
                                </button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="card-body">
                    
                     @foreach ($products as $product)
                    <div class="man_list">
                        <p>
                        <a class="btn btn-link" href="/admin/product/edit/{{ $product['id'] }}">
                            {{ $product['name'] }}
                       </a>  
                    　 <a class="btn btn-link" href="/admin/product/destroy/{{ $product['id'] }}">
                            削除
                       </a>
                    </p>
                </div>
                @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection