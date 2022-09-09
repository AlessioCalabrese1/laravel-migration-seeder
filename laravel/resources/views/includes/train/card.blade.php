<div class="card" style="width: 18rem;">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">{{ $train->agency }}</li>
        <li class="list-group-item">{{ $train->departure_station }}</li>
        <li class="list-group-item">{{ $train->arrival_station }}</li>
        <li class="list-group-item">{{ $train->departure_time }}</li>
        <li class="list-group-item">{{ $train->arrival_time }}</li>
        <li class="list-group-item">{{ $train->train_code }}</li>
        <li class="list-group-item">{{ $train->number_of_carriages }}</li>
        <li class="list-group-item">
            @if ($train->in_time == 1)
            {{ "Nessun Ritardo" }}
            @else
            {{ "In ritardo!" }}
            @endif
        </li>
        @if ($train->deleted == 1)
        <li class="list-group-item">
            {{ "Treno Cancellato!" }}
        </li>
        @endif
    </ul>
</div>