<x-main title="Login">

    <div class="container text-center">
        <h1>EFFETTUA IL LOGIN</h1>
      </div>

    <form method="POST" action="{{route('login')}}">
        @csrf
        <div class="mb-3 text-center">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
       
        <div class="mb-3 text-center">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    
    </form>

</x-main>