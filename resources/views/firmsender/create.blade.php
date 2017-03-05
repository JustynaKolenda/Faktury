@extends('layouts.leftside')

@section('content')

    {!! Form::open(['route' => 'firmsender.store']) !!}

    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach

    @endif

    <div class="form-group">
        {!! Form::label('firmsender', "Nazwa:") !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Ulica/Osiedle:") !!}
        {!! Form::text('adress', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Miejscowość:") !!}
        {!! Form::text('pleace', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Kod pocztowy:") !!}
        {!! Form::text('postalcode', null, ['class'=>'form-control postalcode']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Nip:") !!}
        {!! Form::text('nip', null, ['class'=>'form-control nip']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Email:") !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Telefon:") !!}
        {!! Form::text('phone', null, ['class'=>'form-control phone']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Numer konta:") !!}
        {!! Form::text('account_number', null, ['class'=>'form-control account_number']) !!}
    </div>



    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>




    <script>

        $(document).ready(function(){
            $('.postalcode').mask('00-000');
            $('.phone').mask('(00) 000 000 000');
            $('.nip').mask('000-000-00-00');
            $('.account_number').mask('00 0000 0000 0000 0000 0000 0000', {reverse: true});

        });

    </script>
    {!! Form::close() !!}
@endsection