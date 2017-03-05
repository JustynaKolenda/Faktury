@extends('layouts.leftside')

@section('content')



    {!! Form::model($firmadress, ['route' => ['firmsender.update', $firmsender], 'method' => 'PUT']) !!}

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger">{{ $error }}</div>
        @endforeach
    @endif

    <div class="form-group">
        {!! Form::label('firmsender', "Nazwa:") !!}
        {!! Form::text('name', $firmsender->name, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Ulica/Osiedle:") !!}
        {!! Form::text('adress', $firmsender->adress, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Miejscowość:") !!}
        {!! Form::text('pleace', $firmsender->pleace, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group ">
        {!! Form::label('firmsender', "Kod pocztowy:") !!}
        {!! Form::text('postalcode', $firmsender->postalcode, ['class'=>'form-control postalcode']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Nip:") !!}
        {!! Form::text('nip', $firmsender->nip, ['class'=>'form-control nip']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Email:") !!}
        {!! Form::text('email', $firmsender->email, ['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Telefon:") !!}
        {!! Form::text('phone', $firmsender->phone, ['class'=>'form-control phone']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('firmsender', "Numer konta:") !!}
        {!! Form::text('account_number', $firmsender->account_number, ['class'=>'form-control account_number']) !!}
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
            $('.account_number').mask('00 0000 0000 0000 0000 0000 0000', {reverse: true});

        });

    </script>


@endsection
