@include('navbar')
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ÁLB Ingatlanügynökség</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
   
<h2 class="mb-4 text-center">Aktuális ajánlataink</h2>

<div class="row">
    @foreach($ingatlanok as $ingatlan)
        <div class="col-12 offset-md-1 col-md-10 offset-lg-0 col-lg-6">
            <div class="card border-light mb-3">
                <div class="card-header bg-secondary">
                    <span class="fw-bold">{{ $ingatlan->KategoriaNev }}</span>
                    <span class="float-end">{{ $ingatlan->HirdetesDatuma }}</span>
                </div>
                <div class="card-body">
                    <p class="card-text">{{ $ingatlan->Leiras }}</p>
                </div>
                <img class="card-img-bottom p-2" alt="" src="{{ $ingatlan->KepUri }}">
                <div class="card-footer text-center">
                    <a class="btn btn-primary px-4" href="mailto:sales@alb.example.com?subject=Érdeklődés RefNo: {{ $ingatlan->Id }}&body=Kérnék egy részletes tájékoztatót!">
                        Érdekel
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>



    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>