@extends('layouts.leftside')

@section('content')

    {!! Form::open(['route' => 'payment.store']) !!}

    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach

    @endif

    <div class="form-group">
        {!! Form::label('payment', "Gotówka:") !!}
        {!! Form::text('cash', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('payment', "Przelew:") !!}
        {!! Form::text('card', null, ['class'=>'form-control']) !!}
    </div>


    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>

    {!! Form::close() !!}

@endsection