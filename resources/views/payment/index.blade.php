@extends('layouts.leftside')


@section('content')


    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach

    @endif

    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Forma zapłaty<small>sposoby jakimi płacono</small></h2>
                    <div class="clearfix"></div>
                </div>
                <label class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        @foreach($dane as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->cash}}</td>
                                <td>{{$item->card}}</td>
                                <td><a class="btn btn-primary" href={{route('payment.edit', $item)}}>Edytuj</a> </td>
                                <td>
                                    {!! Form::model($item, ['route' => ['payment.destroy', $item], 'method' => 'DELETE']) !!}
                                    <button class="btn btn-danger">Usuń</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <div class="x_content">
                        <a href="{{ URL::route('payment.create') }}" type="button" class="btn btn-dark">Dodaj</a>
                    </div>
                </label>
            </div>
        </div>
    </div>
    {{$dane->links()}}

@endsection