<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de productos</title>
    @vite('resources/css/app.css')
</head>
<body class="container p-8">
<h1 class="text-3xl mb-4">Lista de Productos</h1>
<a href="/crear-producto" class="bg-blue-500 text-white rounded-2xl px-6 py-2">Nuevo Producto</a>
<a href="/productos/stock-alto" class="bg-green-500 text-white rounded-2xl px-6 py-2">Stock Alto</a>
<div class="mt-4 border">
    <table class="table-auto">
        <thead>
        <tr class="text-left">
            <th class="px-4 py-2">Nombre</th>
            <th class="px-4 py-2">Precio</th>
            <th class="px-4 py-2">Stock</th>
            <th class="px-4 py-2">Categoria</th>
        </tr>
        </thead>
        <tbody>
        @foreach($productos as $producto)
            <tr>
                <td class="px-4 py-2">{{ $producto->nombre }}</td>
                <td class="px-4 py-2">{{ $producto->precio }}</td>
                <td class="px-4 py-2">{{ $producto->stock }}</td>
                <td class="px-4 py-2">{{ $producto->categoria }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

