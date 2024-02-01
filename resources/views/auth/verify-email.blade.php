<x-main title="Verifica email">

    <div class="p-5 text-center bg-image my-head">
        <div class="mask" >
            <div class="d-flex justify-content-center align-items-center h-100">
                <div class="text-white">
                    <h1 class="mb-3">The Aulab Post</h1>
                    <h4 class="mb-3">Life In An Alternate World With His Deepest Potential, And Will Keep It Real</h4>
                    @if (Auth::user() && Auth::user()->is_writer)
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-lg" href="{{route('articles.create')}}" role="button">
                            Crea un articolo
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center align-items-center">

        

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                A new email verification link has been emailed to you!
            </div>
        @endif

        <form action="/email/verification-notification" method="POST" class="my-5">
            @csrf
            <h2 class="mx-3">Controlla la tua casella di posta e conferma la tua mail</h2>
            <div class="d-flex text-center">
                <h3 class="text-danger mx-3">Non hai ricevuto la mail di conferma?</h3>
                <button type="submit" class="btn btn-outline-info">Reinvia email di conferma</button>
            </div>
        
        </form>
    </div>

</x-main>