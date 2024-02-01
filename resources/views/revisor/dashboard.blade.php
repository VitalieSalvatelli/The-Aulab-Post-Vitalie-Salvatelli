<x-main title="Dashboard">

    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="mt-4 pt-2" style="font-size: 100px">{{config('app.name')}}</h1>
            </div>
        </div>
    
    </div>
    
        <div class="container">
            <div class="row">
                <div class="col-12 text-center my-5">
                    <h1>Bentornato {{Auth::user()->name}}</h1>
                </div>
            </div>
        </div>

        @if (session('success'))
            <div class="alert alert-success text-center" role="alert">
                {{session('success')}}
            </div>
        @endif

        <div class="container card shadow">
            <div class="row">
                <div class="col-12">
                    <x-revisor_table :articles="$articles"/>
                </div>
            </div>
        </div>
    

</x-main>