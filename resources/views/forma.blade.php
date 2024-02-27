<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KMI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-4">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Kūno Masės Skaičiuotuvas</h5>
                        <form method="POST" action="{{ route('result') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="height" class="form-label">Įveskite aukštį (cm):</label>
                                <input type="number" min="0" class="form-control" name="height">
                                <label for="mass" class="form-label">Įveskite masę (kg):</label>
                                <input type="number" min="0" class="form-control" name="mass">
                            </div>
                            <button type="submit" class="btn btn-dark">Skaičiuoti</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</body>
</html>
