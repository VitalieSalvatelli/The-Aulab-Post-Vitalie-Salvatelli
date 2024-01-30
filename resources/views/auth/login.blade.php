<x-main title="Login">

    <section class="vh-100" style="background-color: #eee;">
        <div class="container py-5 h-100 ">
          <div class="row d-flex align-items-center justify-content-center h-100 p-md-5 bg-white" style="border-radius: 25px;">
            <div class="col-md-8 col-lg-7 col-xl-6">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
              <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" />
                  <label class="form-label" >Email</label>
                  @error('email') {{$message}} @enderror
                </div>
      
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" />
                  <label class="form-label">Password</label>
                </div>
      
                <div class="d-flex justify-content-around align-items-center mb-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember"/>
                    <label class="form-check-label"> Ricordami </label>
                  </div>
                  <a href="/forgot-password" class="link-danger">Password dimenticata?</a>
                </div>

                <p class="small fw-bold mb-2 pt-1 mb-0">Non sei registrato? <a href="{{route('register')}}" class="link-danger">Registrati</a></p>
      
               
                <button type="submit" class="btn btn-success btn-lg">Accedi</button>
      
              </form>
            </div>
          </div>
        </div>
      </section>
</x-main>