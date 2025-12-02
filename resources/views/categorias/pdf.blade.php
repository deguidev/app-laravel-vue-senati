<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte PDF Categorías</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <style>
        body {
            background: #fff;
            font-family: 'Segoe UI', Arial, sans-serif;
            color: #222;
            margin: 40px;
        }
        .header, .footer {
            text-align: center;
            padding: 10px 0;
            font-weight: bold;
            font-size: 1.2em;
            border-bottom: 2px solid #007bff;
            margin-bottom: 20px;
        }
        .footer {
            border-top: 2px solid #007bff;
            border-bottom: none;
            margin-top: 30px;
            color: #555;
            font-size: 1em;
        }
        .report-title {
            text-align: center;
            color: #007bff;
            margin-bottom: 25px;
            font-size: 2em;
            font-weight: 600;
        }
        .author {
            text-align: right;
            color: #555;
            font-size: 1em;
            margin-bottom: 10px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        th, td {
            border: 1px solid #dee2e6;
            padding: 10px 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #fff;
            font-weight: 600;
        }
        tr:nth-child(even) {
            background-color: #f8f9fa;
        }
        tr:hover {
            background-color: #e9ecef;
        }
        td[colspan="4"] {
            text-align: center;
            color: #888;
            font-style: italic;
        }
    </style>
</head>
<body>
    <main>
        <div class="header">Reporte de Categorías</div>

        <div class="author">
            Generado por: <strong>Diego Lipa</strong>
        </div>

        <div class="report-title">Reporte Categorías</div>
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Estado</th>
                    <th>Fecha Creación</th>
                </tr>
            </thead>
            <tbody>
                @forelse ( $categorias as $item )
                    <tr>
                        <td>{{ $item->nombre_categoria }}</td>
                        <td>{{ $item->descripcion }}</td>
                        <td>{{ $item->estado }}</td>
                        <td>{{ $item->created_at }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">No hay Datos</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div class="footer">Reporte generado automáticamente &copy; {{ date('Y') }}</div>
    </main>
</body>
</html>