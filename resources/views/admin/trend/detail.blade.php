@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">トレンド作成フォーム</div>
                <form class="mt-3" method="POST" action="{{ $action }}">
                    @csrf

                    <div class="form-group row">
                        <label for="trend_name" class="col-md-4 col-form-label text-md-right">トレンド商品名</label>
                        <div class="col-md-6">
                            <input id="trend_name" class="form-control" name="trend_name" value="{{ old('trend_name', $trend_name) }}" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="trend_discription" class="col-md-4 col-form-label text-md-right">トレンド解説</label>
                        <div class="col-md-6">
                            <textarea id="trend_discription" class="form-control" name="trend_discription">{{ old('trend_discription', $trend_discription) }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                送信
                            </button>
                            <a href="/admin/trend">戻る</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection