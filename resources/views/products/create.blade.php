<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto</title>
</head>

<body>
    <h1>Nuevos Productos</h1>
    @if ($errors->any())
    <div>
        <strong>¡Ups! </strong> Hay algunos problemas con tus entradas.<br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action={{ route('products.store') }} method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" placeholder="Nombre del producto">
        <br><br>
        <label for="price">Precio:</label>
        <input type="number" name="price" id="price" placeholder="Precio del producto">
        <br><br>
        <label for="description">Descripción:</label>
        <textarea name="description" id="description" placeholder="Descripción del producto"></textarea>
        <br><br>
        <button type="submit">Guardar</button>
    </form>
</body>

</html>