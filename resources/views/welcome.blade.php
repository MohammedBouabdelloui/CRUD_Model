@extends ('layouts.nav')
@section('continue')
    <h3>Recherhe entre les de date </h3>
    <form action="{{route('recherche')}}" method="git">
        <label>Date debut : </label><input type='date' name="dateDebut">
        <label>Date fine : </label><input type='date'  name="dateFin">
        <button type="submit">Recherche</button>
    </form>
    <hr>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">ID</th>
            <th scope="col">E-mail</th>
            <th scope="col">Password</th>
            <th scope="col">City</th>
            <th></th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($clients as $client)
                <tr>
                    <th scope="row">{{$client->id}}</th>
                    <td>{{$client->email}}</td>
                    <td>{{$client->password}}</td>
                    <td>{{$client->city}}</td>
                    <td><a href="{{route('client.edit',$client->id)}}"  class="btn btn-outline-warning">Update</a></td>
                    <form action="{{route('client.destroy',$client->id)}}" method="post">
                        @method('DELETE')
                        @csrf
                        <td><button type="submit" class="btn btn-outline-danger">Delete</button></td>
                    </form>
                </tr>
                <tr>
            @empty
                <h1>pas de client</h1>
            @endforelse
        </tbody>
    </table>

    
@endsection