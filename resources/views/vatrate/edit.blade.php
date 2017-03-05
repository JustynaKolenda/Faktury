@extends('layouts.leftside')

@section('content')

    {!! Form::model($vat, ['route' => ['vatrate.update', $vat], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('vatrate', "Rate:") !!}
        {!! Form::text('rate', $vat->rate, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>


    {!! Form::close() !!}
@endsection