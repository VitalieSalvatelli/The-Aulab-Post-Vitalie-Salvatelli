<x-main title="Login">

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
        {{ session('status') }}
    </div>
@endif

    <div class="container text-center">
        <h1>EFFETTUA IL LOGIN</h1>
      </div>

    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="mb-3 text-center">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email') {{$message}} @enderror
        </div>
       
        <div class="mb-3 text-center">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
            @error('password') {{$message}} @enderror
        </div>

        <div class="mb-3 text-center">
            <input type="checkbox" name="remember" class="form-check-input" >
            <label class="form-label">Ricordati di me</label>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>

        <a href="/forgot-password">Password dimenticata</a>
    
    </form>

</x-main>