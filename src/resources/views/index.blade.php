@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

<div class="product__content">
    <div class="section__title">
    <h2>商品一覧</h2>
    </div>
    <nav>
        <ul class="register-nav">
            <li class="register-nav__item">
                <a class="register-nav__link" href="/products/register">＋商品を追加</a>
            </li>
        </ul>
    </nav>
    <form class="search-form">
        <div class="search-form__item">
            <input class="search-form__item-input" type="text" />
        </div>
        <div class="search-form__button">
            <button class="search-form__button-submit" type="submit">検索</button>
        </div>
    </form>

    <h3>価格順で表示</h3>
    <select class="search-form__item-select">
        <option value="">カテゴリ</option>
    </select>
</div>

</html>