@extends('layouts._HtmlMain')



@section('title')
    DC Comics HomePage
@endsection

@section('main')
    <div class="bg-black">
        <h2>
            Current Series
        </h2>
        <div class="container">
            <div class="card-container">
                @foreach ($comics as $comic)
                    <div>
                        @include('partials._comic-card')
                    </div>
                @endforeach
            </div>
        </div>

    </div>



@endsection
