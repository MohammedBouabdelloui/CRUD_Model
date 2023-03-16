@extends ('layouts.nav')
@section('continue')
    
        @forelse($commonds as $commond)

            <br>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{$commond->name_produite}}</div>
                <div class="card-body">
                    <h5 class="card-title">{{$commond->id}}</h5>
                    <p class="card-text">{{$commond->price}}</p>
                </div>
            </div>
            @empty
            <h1>pas de commondes a ce client</h1>
            @endforelse
        
    
    

@endsection
