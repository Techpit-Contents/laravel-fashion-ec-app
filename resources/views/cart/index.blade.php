@extends('layouts.app')

@section('title')
カート
@endsection

@section('content')
<div class="container">
    <div class="cart__title">
        Shopping Cart
    </div>
    @if(count($line_items) > 0)
    <div class="cart-wrapper">
        @foreach ($line_items as $item)
        <div class="card mb-3">
            <div class="row">
                <img src="{{ asset($item->image) }}" alt="{{ $item->name }}" class="product-cart-img"/>
                <div class="card-body">
                    <div class="card-product-name col-6">
                        {{ $item->name }}
                    </div>
                    <div class="card-quantity col-2">
                        {{ $item->pivot->quantity }}個
                    </div>
                    <div class="card__total-price col-3 text-center">
                        ￥{{ number_format($item->price * $item->pivot->quantity) }}
                    </div>
                    <form method="post" action="{{ route('line_item.delete') }}">
                        @csrf
                        <div class="card__btn-trash col-1">
                            <input type="hidden" name="id" value="{{ $item->pivot->id }}"/>
                            <button type="submit" class="fas fa-trash-alt btn"></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="cart__sub-total">
        小計：￥{{ number_format($total_price) }} 円
    </div>
    @else
    <div class="cart__empty">
        カートに商品が入っていません。
    </div>
    @endif
</div>
@endsection
