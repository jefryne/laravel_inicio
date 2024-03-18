<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @forelse ($products as $product)
    <div>
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->short_description }}</p>
        <p>{{ $product->price }}</p>
    </div>
    @empty
    <h5> NO hay datos</h5>
    @endforelse
</body>

</html>