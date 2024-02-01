<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($writerRequest as $user)
    
                <tr>
    
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
    
                    <td>
    
                        <a href="{{route('admin.makeUserWriter', $user)}}" class="btn btn-outline-success">Rendi Writer</a>
                        <a href="{{route('admin.rejectUserWriter', $user)}}" onclick="return confirm('Sei sicuro di voler rifiutare?')" class="btn btn-danger">Rifiuta richiesta</a>
    
                    </td>
    
                </tr>
                
            @endforeach
        </tbody>
    </table>
</div>