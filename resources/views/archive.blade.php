@extends ('layouts.nav')
@section('continue')
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
                    <td><a href="{{route('restore',$client->id)}}"  class="btn btn-outline-warning">restore</a></td>
                    <td><a href="{{route('softdelete',$client->id)}}" type="submit" class="btn btn-outline-danger">Delete</a></td>
                </tr>
                <tr>
            @empty
                <h1>pas de client</h1>
            @endforelse
        </tbody>
    </table>

    
@endsection