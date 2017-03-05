@extends('layouts.leftside')

@section('content')

    {!! Form::open(['route' => 'typefacture.store']) !!}

    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach

    @endif
    <div class="row">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Rodzaje faktur<small></small></h2>
                    <div class="clearfix"></div>
                </div>
                <label class="x_content">
                    <table id="datatable" class="table table-striped table-bordered">
                        @foreach($dane as $item)
                        <tr>
                            <td>{{$item->type}}</td>
                            <td><a class="btn btn-primary" href={{route('typefacture.edit', $item)}}>Edytuj</a> </td>
                            <td>
                                {!! Form::model($item, ['route' => ['typefacture.destroy', $item], 'method' => 'DELETE']) !!}
                                     <button class="btn btn-danger">Usuń</button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                        @endforeach
                    </table>
                            <div class="x_content">
                                <a href="{{ URL::route('typefacture.create') }}" type="button" class="btn btn-dark">Dodaj</a>
                            </div>
                </label>
            </div>
        </div>
    </div>
    {{$dane->links()}}

    <script>
        var tables = document.getElementsByTagName('tbody');
        var table = tables[tables.length -1];
        var rows = table.rows;
        for(var i = 0, td; i < rows.length; i++){
            td = document.createElement('td');
            td.appendChild(document.createTextNode(i + 1));
            rows[i].insertBefore(td, rows[i].firstChild);
        }

    </script>

@endsection