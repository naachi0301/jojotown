@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">ブランド作成フォーム</div>
                <form class="mt-3" method="POST" action="{{ $action }}">
                    @csrf

                    <div class="form-group row">
                        <label for="brand_name" class="col-md-4 col-form-label text-md-right">ブランド商品名</label>
                        <div class="col-md-6">
                            <input id="brand_name" class="form-control" name="brand_name" value="{{ old('brand_name', $brand_name) }}" required>
                        </div>
                    </div>
                    <div class="form-group row mb-3">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                送信
                            </button>
                            <a href="/admin/brand">戻る</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection