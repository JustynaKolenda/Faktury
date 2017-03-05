@extends('layouts.leftside')


@section('content')


    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach

    @endif

    <div class="-align-left" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Twoje dane</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-sm-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                        <h2>Dane Adresata<small></small></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form class="form-horizontal form-label-left">

                                <label class="x_content">
                                    <div class="table-responsive">

                                        <table class="table table-striped jambo_table bulk_action table-bordered">

                                            <tr class="headings">
                                                <th class="column-title">Odbiorca</th>
                                                <th class="column-title">Adres</th>
                                                <th class="column-title">Miejscowość</th>
                                                <th class="column-title">Kod pocztowy</th>
                                                <th class="column-title">NIP</th>
                                                <th class="column-title">Pesel</th>
                                                <th class="column-title">Email</th>
                                                <th class="column-title">Telefon</th>
                                                <th class="column-title">Numer konta</th>
                                                <th class="column-title"> </th>
                                                <th class="column-title"> </th>

                                            </tr>
                                            @foreach($dane as $item)
                                            <tr class="even pointer">
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->adress}}</td>
                                                <td> {{$item->pleace}}</td>
                                                <td class="postalcode">{{$item->postalcode}}</td>
                                                <td class="nip">{{$item->nip}}</td>
                                                <td class="pesel">{{$item->pesel}}</td>
                                                <td> {{$item->email}}</td>
                                                <td class="phone">{{$item->phone}}</td>
                                                <td class="account_number"> {{$item->account_number}}</td>
                                                <td> <a class="btn btn-primary" href={{route('firmadress.edit', $item)}}>Edytuj</a></td>
                                                <td>
                                                    {!! Form::model($item, ['route' => ['firmadress.destroy', $item], 'method' => 'DELETE']) !!}
                                                    <button class="btn btn-danger">Usuń</button>
                                                    {!! Form::close() !!}
                                                </td>
                                                @endforeach
                                            </tr>

                                        </table>
                                    </div>
                                </label>

                                <div class="x_content">
                                {!! Form::close() !!}
                                <a href="{{ URL::route('firmadress.create') }}" type="button" class="btn btn-dark">Dodaj</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{$dane->links()}}


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