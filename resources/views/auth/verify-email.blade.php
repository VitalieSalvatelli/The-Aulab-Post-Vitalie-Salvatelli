<x-main title="Verifica email">

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            A new email verification link has been emailed to you!
        </div>
    @endif

    <form action="/email/verification-notification" method="POST">
        @csrf
        <h2>Conferma la tua email prima di continuare</h2>
        <button type="submit" class="btn btn-primary">Invia mail di conferma</button>
    
    </form>

</x-main>