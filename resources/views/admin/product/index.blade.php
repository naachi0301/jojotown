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