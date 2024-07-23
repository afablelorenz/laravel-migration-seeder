<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trains</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Trains Departing Today</h1>
        <div class="row">
            @foreach ($trains as $train)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $train->azienda }}
                            </h5>
                            <p class="card-text">
                                Departure: {{ $train->stazione_di_partenza }} at {{ $train->orario_di_partenza }}
                            </p>
                            <p class="card-text">
                                Arrival: {{ $train->stazione_di_arrivo }} at {{ $train->orario_di_arrivo }}
                            </p>
                            <p class="card-text">
                                Train Code: {{ $train->codice_treno }}
                            </p>
                            <p class="card-text">
                                Number of Carriages: {{ $train->numero_carrozze }}
                            </p>
                            <p class="card-text">
                                On Time: {{ $train->in_orario ? 'Yes' : 'No' }}
                            </p>
                            <p class="card-text">
                                Cancelled: {{ $train->cancellato ? 'Yes' : 'No' }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
