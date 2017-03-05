@extends('layouts.leftside')

@section('content')

    {!! Form::model($payment, ['route' => ['payment.update', $payment], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('payment', "Cash:") !!}
        {!! Form::text('cash', $payment->cash, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('payment', "Card:") !!}
        {!! Form::text('card', $payment->card, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>


    {!! Form::close() !!}
@endsection