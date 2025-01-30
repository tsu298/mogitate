@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/list.css') }}">
@endsection

@section('content')

<div class="mogitate__content">
    <div class="mogitate__heading">
        <h2>商品一覧</h2>
    </div>
    <div class="form__group-content">
        <div class="form__input--text">
            <input type="text" name="name" placeholder="商品名を入力" value="{{ old('name') }}" />
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">検索</button>
        </div>
        <table>
            <tr>
                <th>name</th>
                <th>price</th>
                <th>image</th>
            </tr>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->image}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="mogitate__heading">
        <h3>価格順で表示</h3>
    </div>
    <form class="create-form">
        <div class="create-form__item">
            <input class="create-form__item-input" type="text">
        </div>
        <div class="create-form__button">
            <button class="create-form__button-submit" type="submit">＋商品を追加</button>
        </div>
    </form>
</div>