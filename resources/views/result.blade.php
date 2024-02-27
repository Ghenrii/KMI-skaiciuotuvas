<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezultatas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-4">
        <div class="col-12">
            <div class="card text-bg-success mb-4">
                <div class="card-body">
                    <h5 class="card-title">Rezultatas</h5>
                    <p>Jūsų KMI yra: {{ $bmi }}</p>
                    <a href="{{ route('skaiciuokle') }}" class="btn btn-light">Grįžti į skaičiuoklę</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>