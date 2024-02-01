<x-main title="Lavora con noi">

    

    <div class="container ">
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <h1 class="display-4 mt-4 pt-2" style="font-size: 100px">{{config('app.name')}}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Lavora con noi</h1>
            </div>
        </div>
    </div>

    @if (session('message'))
        <div class="alert alert-danger" role="alert">
            <div class="text-center">{{session('message')}}</div>
        </div>
    @endif

    <div class="card container my-5">
        <div class="row">
            <div class="col-12">
                <h3>Lavora come scrittore</h3>
                <p>Hai qualcosa di nuovo da scrivere? fai richiesta per diventare un WRITER</p>

                <h3 class="text-center">Lavora come Revisor</h3>
                <p class="text-center">Aiutaci a revisionare i post prima di renderli pubblici a tutti. Fai richiesta per diventare un REVISOR</p>

                <h3 class="text-end">Lavora come Admin</h3>
                <p class="text-end">Aiutaci a reclutare le migliori persone per la nostra comunity diventando un ADMIN</p>
            </div>
            
            <div class="container my-5">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8">

                        <form class="card p-5 shadow" method="POST" action="{{route('user.role.request')}}">
                            @csrf
                        
                            <div class="mb-3 text-center">
                                <label class="form-label h5">Per quale posizione vuoi candidarti?</label>
                        
                                <select class="form-control" name="role">
                                                          
                                        
                                    <option value="admin">Admin</option>
                                    <option value="revisor">Revisor</option>
                                    <option value="writer">Writer</option>
                                    
                                </select>
                            </div>
                        
                            <div class="mb-3 text-center">
                                <label class="form-label h5">Inviaci la tua mail</label>
                                <input type="email" class="form-control" name="email" @auth value="{{Auth::user()->email }}" @endauth>
                                @error('email') {{$message}} @enderror
                            </div>
                        
                            <div class="mb-3 text-center">
                                <label class="form-label h5">Perche dovremmo assumerti</label>
                                <textarea class="form-control" name="presentation" cols="30" rows="10" style="height: 100px"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Invia candidatura</button>
                        
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>

</x-main>