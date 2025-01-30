@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="mogitate__content">
    <div class="mogitate__heading">
        <h2>商品登録</h2>
    </div>
    <form class="form">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品名</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}" />
                </div>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">値段</span>
                    <span class="form__label--required">必須</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}" /></div>
                    </div>
                <div class="form__error">
                    @error('price')
                    {{ $message }}
                    @enderror
                </div>
            </div>
            <div class="form__group-title">
                <span class="form__label--item">商品画像</span>
                <span class="form__label--required">必須</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--image">
                    <input type="file" name="image" value="{{ old('image') }}" />
                </div>
                <div class="form__error">
                    @error('image')
                    {{$message}}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">季節</span>
                <span class="form__label--required">必須</span>
                <span class="form__label--text2">複数選択可</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--checkbox">
                    <input type="checkbox" name="season" value="{{ old('season') }} " />春
                    <input type="checkbox" name="season" value="{{ old('season') }} " />夏
                    <input type="checkbox" name="season" value="{{ old('season') }} " />秋
                    <input type="checkbox" name="season" value="{{ old('season') }} " />冬
                </div>
                <div class="form__error">
                    @error('season')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">商品説明</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="description" placeholder="商品の説明を入力">{{ old('description') }}</textarea>
                </div>
                <div class="form__error">
                    @error('description')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">戻る</button>
        </div>
        <div class="form__button">
            <button class="form__button-submit2" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection