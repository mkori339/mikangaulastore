
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hauna Ruhusa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color:#81c408 !important;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .error-container {
            text-align: center;
            max-width: 600px;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .error-container h1 {
            font-size: 4rem;
            color: #dc3545;
        }
        .error-container p {
            font-size: 1.25rem;
            margin-bottom: 20px;
        }
        .btn-back {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-back:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>403</h1>
        <p  style="color:green"><b>HAUNA RUHUSA NA KURASA UNAYOHITAJI AU HAIPATIKANI KWA SASA.</b></p>
        <a href="{{ url('/') }}" class="btn-back"  style="color:white"><b>Rudi Nyumbani</b></a>
    </div>
</body>
</html>
