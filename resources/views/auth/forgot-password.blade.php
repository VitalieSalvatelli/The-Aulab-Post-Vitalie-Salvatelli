<x-main title="Reset password">

    @if (session('status'))
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ session('status') }}
        </div>
    @endif

    <form action="/forgot-password" method="POST">
        @csrf
        <div class="mb-3 text-center">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            @error('email') {{$message}} @enderror
        </div>

        <button type="submit" class="btn btn-primary">Reset Password</button>
    
    </form>

</x-main>