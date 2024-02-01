<x-main title="Dashboard">

    <div class="container">
        
            <div class="row align-items-center">
                <div class="col-12 text-center">
                    <h1 class="mt-4 pt-2" style="font-size: 100px">{{config('app.name')}}</h1>
                </div>
            </div>
        

        <div class="row">
            <div class="col-12 text-center my-5">
                <h1>Bentornato {{Auth::user()->name}}</h1>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success text-center" role="alert">
                {{session('success')}}
            </div>
        @endif

            <div class="card shadow">

                <div class="row my-3">
                    <div class="col-12">
                        <h2 class="text-center">Richieste di amministratore</h2>
                        <x-admin_request_table :adminRequest="$adminRequest"/>
                    </div>
                </div>
        
        
            
                <div class="row my-3">
                    <div class="col-12">
                        <h2 class="text-center">Richieste di revisore</h2>
                        <x-revisor_request_table :revisorRequest="$revisorRequest"/>
                    </div>
                </div>
            
        
                
                <div class="row my-3">
                    <div class="col-12">
                        <h2 class="text-center">Richieste di articolista</h2>
                        <x-writer_request_table :writerRequest="$writerRequest"/>
                    </div>
                </div>

            </div>
            

    </div>

    <div class="container my-5 card shadow">
        <div class="row">
            <div class="col-12 my-2">
                <h2>Crea tag</h2>
                <x-tags-create/>
            </div>
        </div>
    </div>

    <div class="container my-5 card shadow">
        <div class="row">
            <div class="col-12">
                <h2>Gestisci i tag</h2>
                <x-tags-table :tags="$tags"/>
            </div>
        </div>
    </div>

    <div class="container my-5 card shadow">
        <div class="row">
            <div class="col-12 my-2">
                <h2>Crea categoria</h2>
                <x-categories-create/>
            </div>
        </div>
    </div>

    <div class="container my-5 card shadow">
        <div class="row">
            <div class="col-12">
                <h2>Gestisci le categorie</h2>
                <x-categories-table :categories="$categories"/>
            </div>
        </div>
    </div>
    
</x-main>