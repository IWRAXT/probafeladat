
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
                        <div class="container">
                            <form method="POST" action="/people/{{$person->id}}">
                                {{csrf_field()}}
                                <button  class="btn btn-danger">Delete</button>
                            </form>
                            <a href="/people/{{$person->id}}/edit" class="button">Edit</a>
                        </div>
                        {{--{{ Form::open(array('url' => 'people/index' . $person->id, 'class' => 'pull-right')) }}--}}
                        {{--{{ Form::hidden('_method', 'DELETE') }}--}}
                        {{--{{ Form::submit('Delete this Person', array('class' => 'btn btn-warning')) }}--}}
                        {{--{{ Form::close() }}--}}

                    </div>
                </div>
            </li>
        </ul>
        @endforeach
    </div>





@endsection

