<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Clientes')</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background: #f7f9fc;
            color: #333;
            padding: 2rem;
        }
        header {
            text-align: center;
            margin-bottom: 2rem;
        }
        header h1 {
            font-size: 2.5rem;
            color: #4a90e2;
        }
        main {
            max-width: 900px;
            background: white;
            padding: 2rem;
            border-radius: 12px;
            margin: auto;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }
        footer {
            margin-top: 4rem;
            text-align: center;
            color: #999;
            font-size: 0.9rem;
        }
        a {
            color: #4a90e2;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .btn {
            display: inline-block;
            background: #4a90e2;
            color: white;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
        }
        .btn:hover {
            background: #3a78c2;
        }
    </style>
</head>
<body>

    <header>
        <h1>Sistema de Clientes 💼</h1>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} — Clodoaldo Jr</p>
    </footer>

</body>
</html>