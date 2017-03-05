@extends('layouts.leftside')

@section('content')



    {!! Form::model($firmadress, ['route' => ['firmadress.update', $firmadress], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('firmadress', "Nazwa:") !!}
        {!! Form::text('name', $firmadress->name, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Ulica/Osiedle:") !!}
        {!! Form::text('adress', $firmadress->adress, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Miejscowość:") !!}
        {!! Form::text('pleace', $firmadress->pleace, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group ">
        {!! Form::label('firmadress', "Kod pocztowy:") !!}
        {!! Form::text('postalcode', $firmadress->postalcode, ['class'=>'form-control postalcode']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Nip:") !!}
        {!! Form::text('nip', $firmadress->nip, ['class'=>'form-control nip']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Pesel:") !!}
        {!! Form::text('pesel', $firmadress->pesel, ['class'=>'form-control pesel']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Email:") !!}
        {!! Form::text('email', $firmadress->email, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Telefon:") !!}
        {!! Form::text('phone', $firmadress->phone, ['class'=>'form-control phone']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmadress', "Numer konta:") !!}
        {!! Form::text('account_number', $firmadress->account_number, ['class'=>'form-control account_number']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Zapisz', ['class'=>'btn btn-primary']) !!}
        {!! link_to(URL::previous(), 'Powrót', ['class' => 'btn btn-default']) !!}
    </div>



    {!! Form::close() !!}


    <script>

        $(document).ready(function(){
            $('.postalcode').mask('00-000');
            $('.phone').mask('(00) 000 000 000');
            $('.nip').mask('000-000-00-00');
            $('.pesel').mask('00000000000');
            $('.account_number').mask('00 0000 0000 0000 0000 0000 0000', {reverse: true});

        });

    </script>


@endsection
