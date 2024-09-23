<!-- resources/views/products/create_clothing.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Producto de Ropa</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Crear Producto de Ropa</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('clothing.store') }}" method="POST" class="mt-4">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descripción:</label>
                <textarea id="description" name="description" class="form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Precio:</label>
                <input type="number" step="0.01" id="price" name="price" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="sku" class="form-label">Codigo:</label>
                <input type="text" id="sku" name="sku" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="size" class="form-label">Tamaño:</label>
                <input type="text" id="size" name="size" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Color:</label>
                <input type="text" id="color" name="color" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Crear Producto</button>
        </form>
    </div>

    <!-- Bootstrap JS (opcional, para funcionalidad avanzada) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
