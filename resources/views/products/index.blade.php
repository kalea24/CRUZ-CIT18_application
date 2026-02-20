<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pink Porsche Collection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #fff0f5; }
        .card { border: none; border-radius: 15px; overflow: hidden; }
        .btn-pink { background-color: #DB7093; color: white; }
        .btn-pink:hover { background-color: #C71585; color: white; }
        .price-tag { color: #C71585; font-weight: bold; font-size: 1.2rem; }
        h1 { color: #DB7093; font-weight: 800; }
    </style>
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-5">💖 Pink Porsche Collection 💖</h1>
        <div class="row">
            @foreach($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow">
                    <img src="{{ $product['image'] }}" class="card-img-top" alt="{{ $product['name'] }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $product['name'] }}</h5>
                        <p class="price-tag">${{ number_format($product['price'], 2) }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <button class="btn btn-pink w-100 rounded-pill">Configure</button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>