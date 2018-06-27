
@extends ('layouts.master')

@section ('content')

    <div class="container">
        <h1>Dolgozók adatai</h1>
    </div>

    <div class="container">

        @foreach($people as $person)
        <ul class="list-group list-inline">
            <li class="list-group-item list-group-flush">
                <div >
                    <div class="card flex-md-row mb-20  h-md-250">
                        <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/212110-200.png" alt="profile" style="width:100px;height:100px">
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
                        <a href="/people/{{$person->id}}/edit" class="btn btn-default">Edit</a>
                        <form method="post" action="/people/{{$person->id}}">
                            {{csrf_field()}}
                            <button  class="btn btn-danger">Delete</button>
                        </form>

                    </div>
                </div>
            </li>
        </ul>
        @endforeach
    </div>





@endsection

