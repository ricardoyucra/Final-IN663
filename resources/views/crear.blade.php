<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo producto</title>
    @vite('resources/css/app.css')
</head>
<body class="container p-8">
<h1 class="text-3xl">Nuevo Producto</h1>
    <form action="{{ route('productos.store') }}" method="POST" autocomplete="off">
        @csrf
        <div class="py-2">
            <label>Nombre</label>
            <input type="text" name="nombre" class="border px-2 py-1">
        </div>
        <div class="py-2">
            <label>Precio</label>
            <input type="number" name="precio" class="border px-2 py-1">
        </div>
        <div class="py-2">
            <label>Stock</label>
            <input type="number" name="stock" class="border px-2 py-1">
        </div>
        <div class="py-2">
            <label>Categoria</label>
            <input type="text" name="categoria" class="border px-2 py-1">
        </div>
        <input type="submit" value="Guardar" class="bg-blue-500 text-white rounded-2xl px-6 py-2">
    </form>
</body>
</html>

