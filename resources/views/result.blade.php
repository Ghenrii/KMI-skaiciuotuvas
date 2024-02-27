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
                    <p>Jūsų KMI yra: {{ $bmi }} (
                    @if ($bmi < 18.5)
                        Per mažas svoris
                    @elseif ($bmi >= 18.5 && $bmi < 24.9)
                        Normalus svoris
                    @elseif ($bmi >= 25 && $bmi < 29.9)
                        Viršsvoris
                    @else
                        Nutukimas
                    @endif
                    )
                    </p>
                    <a href="{{ route('skaiciuokle') }}" class="btn btn-light">Grįžti į skaičiuoklę</a>
                </div>
            </div>
        </div>
        <div class="col-12">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Per mažas svoris</th>
                        <td>< 18.5</td>
                    </tr>
                    <tr>
                        <th scope="row">Normalus svoris</th>
                        <td>18.5-24.9</td>
                    </tr>
                    <tr>
                        <th scope="row">Viršsvoris</th>
                        <td>25-29.9</td>
                    </tr>
                    <tr>
                        <th scope="row">Nutukimas</th>
                        <td>&#8805 30</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>