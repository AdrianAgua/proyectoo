<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración</title>

    <link rel="stylesheet" href="vistas/css/stilo.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>


        <!-- Contenedor principal -->
<div class="container mt-4">
    <div class="row">
        <!-- Tarjeta de Stock -->
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Stock Disponible</div>
                <div class="card-body">
                    <h5 class="card-title" id="stockTotal">1500</h5>
                </div>
            </div>
        </div>
        <!-- Tarjeta de Ventas -->
        <div class="col-md-4">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Ventas Realizadas</div>
                <div class="card-body">
                    <h5 class="card-title" id="ventasTotales">320</h5>
                </div>
            </div>
        </div>
        <!-- Tarjeta de Ganancias -->
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Ganancias</div>
                <div class="card-body">
                    <h5 class="card-title" id="gananciasTotales">$15,800</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla de Ventas -->
    <div class="row mt-4">
        <div class="col-md-12">
            <h3>Últimas Ventas</h3>
            <table class="table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Precio</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Silla Gamer Pro</td>
                        <td>5</td>
                        <td>$200</td>
                        <td>$1,000</td>
                    </tr>
                    <tr>
                        <td>Mouse RGB</td>
                        <td>10</td>
                        <td>$30</td>
                        <td>$300</td>
                    </tr>
                    <tr>
                        <td>Teclado Mecánico</td>
                        <td>3</td>
                        <td>$120</td>
                        <td>$360</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Gráfico de Ganancias -->
    <div class="row mt-4">
        <div class="col-md-12">
            <h3>Ganancias Mensuales</h3>
            <canvas id="graficoGanancias"></canvas>
        </div>
    </div>
</div>

<!-- Script para la gráfica -->
    <script>
        var ctx = document.getElementById('graficoGanancias').getContext('2d');
        var graficoGanancias = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio'],
                datasets: [{
                    label: 'Ganancias ($)',
                    data: [5000, 7000, 6500, 8000, 7500, 9000],
                    backgroundColor: 'rgba(255, 193, 7, 0.6)',
                    borderColor: 'rgba(255, 193, 7, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>
</html>
