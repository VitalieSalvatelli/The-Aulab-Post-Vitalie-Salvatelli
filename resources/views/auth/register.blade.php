<x-main title="Register">

  <div class="container text-center">
    <h1>REGISTRATI</h1>
  </div>

  <form method="POST" action="{{route('register')}}">
    @csrf

    <div class="mb-3 text-center">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div class="mb-3 text-center">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>

    <div class="mb-3 text-center">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
    </div>

    <div class="mb-3 text-center">
        <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

</x-main>