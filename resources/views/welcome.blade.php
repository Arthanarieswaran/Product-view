<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>eswar</title>
       <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>
    <body >
       @foreach ($things as $thing )

    <div class="con">

        <div class="product-card">
            <div class="product-tumb">
                <img src="{{ asset('image/'.$thing->image) }}" alt="">
            </div>
            <div class="product-details">
                <span class="product-catagory">{{ $thing->model }}</span>
                <h4><a href="{{ url('detail') }}">{{ $thing->name }}</a></h4>
                <p>{{ $thing->content }}</p>
                <div class="product-bottom-details">
                    <div class="product-price"><small>{{ $thing->oldprice }}</small>{{ $thing->newprice }}</div>
                    <div class="product-links">
                        <a href=""><i class="fa fa-heart"></i></a>
                        <a href=""><i class="fa fa-shopping-cart"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        @endforeach
    </body>
</html>
