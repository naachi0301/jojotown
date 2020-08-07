@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">トレンド一覧</div>
                <div>
                    <a class="btn btn-link" href="/admin/trend/create">
                        トレンド作成
                    </a>
                </div>
                <div class="card-body">
                    
                     @foreach ($trends as $trend)
                <div class="man_list">
                    <p>
                        <a class="btn btn-link" href="/admin/trend/edit/{{ $trend['id'] }}">
                            {{ $trend['name'] }}
                       </a>  
                    　 <a class="btn btn-link" href="/admin/trend/destroy/{{ $trend['id'] }}">
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