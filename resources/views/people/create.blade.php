
@extends ('layouts.master')

@section ('content')
    <h1>Új alkalmazott rögzítése</h1>

    <form method="POST" action="/people">
        {{csrf_field()}}

        <div class="form-group">
            <label for="name">Név</label>
            <input type="text" class="form-control" id="name" name="name" >
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" id="email" name="email" >
        </div>
        <div class="form-group">
            <label for="born">Született</label>
            <input type="date" class="form-control" id="born" name="born" >
        </div>

        <div class="form-group">
            <label for="file">Profilkép hozzáadás</label>
            <input type="file" class="form-control-file" id="file"  name="file">
           
        </div>


        <div class="form-group">
            <label for="principal_id">Felettes</label>
            <input type="number" class="form-control"  id="principal_id" name="principal_id">

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Rögzít</button>
        </div>

        @include ('layouts.errors')
    </form>

@endsection