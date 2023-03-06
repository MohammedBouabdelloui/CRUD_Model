@extends ('layouts.nav')
@section('continue')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <p>{{$error}}</p>
        @endforeach
    @endif

    <h1>this is page add user</h1><br>
    @empty($client)
    <form action="{{route('client.create')}}" method="get">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="text" name="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
        </div>
        <div class="form-row">
            <label for="inputCity">City</label>
            <select id="inputState" name="city" class="form-control">
                <option selected>Choose...</option>
                <option value="Azrou">Azrou</option>
                <option value="Fes">Fes</option>
                <option value="Meknace">Meknace</option>
            </select>
        </div><br>
        <button type="submit" class="btn btn-primary">add</button>
    </form>
    @endif

    @isset($client)
    <form action="{{route('client.update',$client->id)}}" method="POST">
        @method('PUT')
        @csrf
        <div class="form-row" >
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail4" placeholder="Email" value="{{$client->email}}">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="form-control" id="inputPassword4" placeholder="Password" value="{{$client->password}}">
            </div>
        </div>
        <div class="form-row">
            <label for="inputCity">City</label>
            <select id="inputState" name="city" class="form-control" value="{{$client->city}}">
                <option selected>Choose...</option>
                <option value="Azrou">Azrou</option>
                <option value="Fes">Fes</option>
                <option value="Meknace">Meknace</option>
            </select>
        </div><br>
        <button type="submit" class="btn btn-primary">update</button>
    </form>
    @endif
@endsection