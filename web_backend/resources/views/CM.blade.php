<!-- resources/views/launchCalculation.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Launch Calculation</title>
</head>
<body>
    <h1>Lancer le système de calcul des moyennes</h1>
    <form action="{{ route('calculate-averages') }}" method="POST">
        @csrf
        <button type="submit">Lancer le calcul</button>
    </form>
</body>
</html>
