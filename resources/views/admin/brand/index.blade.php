@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ブランド一覧</div>
                <div>
                    <a class="btn btn-link" href="/admin/brand/create">
                        ブランド作成
                    </a>
                </div>
                <div class="card-body">
                    
                     @foreach ($brands as $brand)
                <div class="man_list">
                    <p>
                        <a class="btn btn-link" href="/admin/brand/edit/{{ $brand['id'] }}">
                            {{ $brand['name'] }}
                       </a>  
                    　 <a class="btn btn-link" href="/admin/brand/destroy/{{ $brand['id'] }}">
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