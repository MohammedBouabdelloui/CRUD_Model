@extends ('layouts.nav')
@section('continue')

    
    @empty($client)
    <h1>this is page add user</h1><br>
    <form action="{{route('client.create')}}" method="get">
        @if($errors->any())
            @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
            @endforeach
        @endif
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" id="inputEmail4" placeholder="Email" value="{{old('email')}}">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" name="password" class="@error('password') is-invalid @enderror form-control" value="{{old('password')}}" id="inputPassword4" placeholder="Password">
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
        <h1>this is page update user</h1><br>
        <form action="{{route('client.update',$client->id)}}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-row" >
                <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" name="email" class="@error('email') is-invalid @enderror form-control" id="inputEmail4" placeholder="Email" value="{{$client->email}}">
                @error('email')
                    <p>{{$message}}</p>
                @enderror
                </div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" name="password" class="@error('password') is-invalid @enderror form-control" id="inputPassword4" placeholder="Password" value="{{$client->password}}">
                @error('password')
                    <p style="color:red">{{$message}}</p>
                @enderror
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