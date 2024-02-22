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
        <h2 class="mb-4 text-center">Új hirdetés elküldése</h2>
        <div class="row">
            <div class="offset-lg-3 offset-md-2 col-lg-6 col-md-8 col-12">
                <div class="mb-3">
                    <label for="category" class="form-label">Ingatlan kategóriája</label>
                    <select class="form-select">
                        <option value="0">Kérem válasszon</option>
                        <option value="1">Ház</option>
                        <option value="2">Lakás</option>
                        <option value="3">Építési telek</option>
                        <option value="4">Garázs</option>
                        <option value="5">Mezőgazdasági terület</option>
                        <option value="6">Ipari ingatlan</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="date" class="form-label">Hirdetés dátuma</label>
                    <input type="date" class="form-control" id="today" disabled>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Ingatlan leírása</label>
                    <textarea class="form-control" id="description" rows="3"></textarea>
                </div>
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox" id="creditFree" checked>
                    <label class="form-check-label" for="creditFree">Tehermentes ingatlan</label>
                </div>
                <div class="mb-3 text-center">
                    <button class="btn btn-primary px-5">Küldés</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = (event) => {
            document.querySelector('#today').value = new Date().toISOString().split('T')[0];
        };
    </script>
    
    <script src="dist/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>