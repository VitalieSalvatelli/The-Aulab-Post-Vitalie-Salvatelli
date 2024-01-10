<form method="POST" action="{{route('articles.store')}}" enctype="multipart/form-data">
    @csrf

    <div class="mb-3 text-center">
        <label class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}" required>
        @error('title')
                <span class="small text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3 text-center">
        <label class="form-label">Sottotitolo</label>
        <input type="text" class="form-control @error('subtitle') is-invalid @enderror" name="subtitle" value="{{old('subtitle')}}">
        @error('subtitle')
                <span class="small text-danger">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3 text-center">
        <label class="form-label">Categoria</label>

        <select class="form-control" name="category_id">
            <option selected>Scegli la categoria del post</option>
            @foreach ($categories as $category)
                
            <option value="{{$category->id}}">{{$category->name}}</option>

            @endforeach
        </select>
    </div>

    <div class="mb-3 text-center">
        <label class="form-label">image</label>
        <input type="file" class="form-control" name="image">
    </div>

    <div class="mb-3 text-center">
        <label for="floatingTextarea2">Testo</label>
        <textarea class="form-control" name="text" cols="30" rows="10" style="height: 100px">{{old('text')}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

</form>