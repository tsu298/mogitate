@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/detail.css') }}">
@endsection

@section('content')
<form class="form" action="" method="">
    <div class="form__group">
        <div class="form__group-content">
            <div class="form__input--image">
                <input type="file" name="image" value="{{ old('image') }}" />
            </div>
        </div>
        <div class="form__error">
            @error('image')
            {{$message}}
            @enderror
        </div>
        <div class="form__group-title">
            <span class="form__label--item">商品名</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}" />
            </div>
        </div>
        <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group-title">
            <span class="form__label--item">値段</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--text">
                <input type="text" name="price" placeholder="値段を入力" value="{{ old('price') }}">
            </div>
        </div>
        <div class="form__error">
            @error('price')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group-title">
            <span class="form__label--item">季節</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--checkbox">
                <input type="checkbox" name="season" value="{{ old('season') }} " />春
                <input type="checkbox" name="season" value="{{ old('season') }} " />夏
                <input type="checkbox" name="season" value="{{ old('season') }} " />秋
                <input type="checkbox" name="season" value="{{ old('season') }} " />冬
            </div>
        </div>
        <div class="form__error">
            @error('season')
            {{ $message }}
            @enderror
        </div>
        <div class="form__group-title">
            <span class="form__label--item">商品説明</span>
        </div>
        <div class="form__group-content">
            <div class="form__input--textarea">
                <textarea name="description" placeholder="商品の説明を入力">{{ old('content') }}</textarea>
            </div>
        </div>
        <div class="form__error">
            @error('description')
            {{ $message }}
            @enderror
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">戻る</button>
        </div>
        <div class="form__button">
            <button class="form__button-submit2" type="submit">変更を保存</button>
        </div>
    </div>
</form>
@endsection