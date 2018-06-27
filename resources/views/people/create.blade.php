
@extends ('layouts.master')

@section ('content')
    <h1>Új alkalmazott rögzítése</h1>

    <form method="POST" action="/people">
        {{csrf_field()}}

        <div class="form-group">
            <label for="account_number">Vezeték név</label>
            <input type="text" class="form-control" id="last_name" name="last_name">
        </div>
        <div class="form-group">
            <label for="first_name">Keresztnév</label>
            <input type="text" class="form-control" id="first_name" name="first_name" >
        </div>
        <div class="form-group">
            <label for="address">Lakcím</label>
            <input type="text" class="form-control" id="address" name="address" >
        </div>
        <div class="form-group">
            <label for="web">Honlap</label>
            <input type="text" class="form-control" id="web" name="web" >
        </div>
        <div class="form-group">
            <label for="phone">Telefonszám</label>
            <input type="text" class="form-control" id="phone" name="phone" >
        </div>
        <div class="form-group">
            <label for="foto">Foto</label>
            <input type="text" class="form-control" id="foto" name="foto" >
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Profilkép hozzáadás</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <div class="form-group">
            <label for="principal_id">Felettes</label>
            <input type="number" class="form-control"  id="principal_id" name="principal_id">

        </div>



        <div class="form-group">
            <button type="submit" class="btn btn-primary">Rögzít</button>
        </div>


    </form>




@endsection