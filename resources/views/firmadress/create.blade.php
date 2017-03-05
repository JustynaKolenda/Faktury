@extends('layouts.leftside')

@section('content')

    {!! Form::open(['route' => 'firmadress.store']) !!}

    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach

    @endif

    <div class="form-group">
        {!! Form::label('firmadress', "Nazwa:") !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Ulica/Osiedle:") !!}
        {!! Form::text('adress', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Miejscowość:") !!}
        {!! Form::text('pleace', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Kod pocztowy:") !!}
        {!! Form::text('postalcode', null, ['class'=>'form-control postalcode']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Nip:") !!}
        {!! Form::text('nip', null, ['class'=>'form-control nip']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Pesel:") !!}
        {!! Form::text('pesel', null, ['class'=>'form-control pesel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Email:") !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Telefon:") !!}
        {!! Form::text('phone', null, ['class'=>'form-control phone']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Numer konta:") !!}
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
            $('.pesel').mask('00000000000');
            $('.account_number').mask('00 0000 0000 0000 0000 0000 0000', {reverse: true});

        });

    </script>
    {!! Form::close() !!}
@endsection