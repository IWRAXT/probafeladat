
@extends ('layouts.master')

@section ('content')

    <div class="container">
        <h1>Dolgozók adatai</h1>
    </div>

    <div class="container">

        @foreach($people as $person)
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="col-md-6">
                    <div class="card flex-md-row mb-4  h-md-250">
                        <ul>

                            <h5> {{$person->last_name}} {{$person->first_name}} </h5>
                            <li> {{$person->address}} </li>
                            <li> {{$person->web}} </li>
                            <li> {{$person->phone}}</li>
                            <li> {{$person->foto}} </li>
                            <li> {{$person->principal_id}} </li>
                            <li> {{$person->created_at}} </li>
                            <li> {{$person->updated_at}} </li>


                        </ul>
                        <img class="card-img-left flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Card image cap" style="width:100px;height:100px">
                    </div>
                </div>
            </li>
        </ul>
        @endforeach
    </div>





@endsection

