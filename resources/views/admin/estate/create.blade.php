@extends('layouts.admin')
@section('title', '物件の新規登録')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>物件の新規登録</h2>
                <form action="{{ route('admin.estate.create') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">件名</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">住所</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="title" value="{{ old('title') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件種別</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="btype" value="{{ old('btype') }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">価格（万円）</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="price" value="{{ old('price') }}">万円
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">間取り</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="madori" value="{{ old('madori') }}">万円
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">路線・駅</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="rosen" value="{{ old('rosen') }}">線 <input type="text" class="form-control" name="eki" value="{{ old('eki') }}">駅
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">駅徒歩分</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="tohofun" value="{{ old('tohofun') }}">分
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件コメント</label>
                        <div class="col-md-10">
                            <textarea class="form-control" name="comment" rows="20">{{ old('comment') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像01</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image01">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像02</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image02">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像03</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image03">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像04</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image04">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像05</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image05">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像06</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image07">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像07</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image07">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像08</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image08">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像09</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image09">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">物件画像10</label>
                        <div class="col-md-10">
                            <input type="file" class="form-control-file" name="image10">
                        </div>
                    </div>
                    @csrf
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
            </div>
        </div>
    </div>
@endsection