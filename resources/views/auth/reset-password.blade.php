<x-main title="Cambia Password">
    
    <form action="/reset-password" method="POST">
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
              <label for="exampleInputPassword1" class="form-label">Password confirmation</label>
              <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
          </div>

          <input type="hidden" name="token" value="{{request()->route('token')}}">

          <button type="submit" class="btn btn-primary">Reset Password</button>


    </form>

</x-main>