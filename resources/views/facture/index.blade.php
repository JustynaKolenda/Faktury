@extends('layouts.leftside')


@section('content')


    @if($errors->any())

        @foreach($errors->all() as $error)
            <div class="btn btn-danger">{{ $error }}</div>
        @endforeach

    @endif

            <div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Nowa faktura</h3>
                        </div>


                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                  <button class="btn btn-default" type="button">Go!</button>
                                </span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Dane Adresata<small></small></h2>
                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>



                            <div class="x_content">
                                <br />
                                <form class="form-horizontal form-label-left">

                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Odbiorca <span class="required"></span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea class="form-control" rows="2" placeholder='Nazwa odbiorcy'></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='NR Ddomu/Lokalu'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Miejscowość</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Miejscowość'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kod pocztowy</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Kod-pocztowy'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='NIP'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pesel</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Pesel'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Email'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Telefon'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Numer konta</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Dane Odbiorcy<small></small></h2>

                                <ul class="nav navbar-right panel_toolbox">
                                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Settings 1</a>
                                            </li>
                                            <li><a href="#">Settings 2</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                                    </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>


                            <div class="x_content">
                                <br />
                                <form class="form-horizontal form-label-left">
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Faktura nr</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" class="form-control" placeholder="Nr faktury">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Odbiorca <span class="required"></span>
                                        </label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <textarea class="form-control" rows="2" placeholder='Nazwa odbiorcy'></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Adres</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="adres" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='NR Ddomu/Lokalu'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Miejscowość</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="country" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Miejscowość'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Kod pocztowy</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="postal code" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Kod-pocztowy'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">NIP</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="nip" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='NIP'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pesel</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="pesel" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Pesel'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="email" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Email'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="phone" id="autocomplete-custom-append" class="form-control col-md-10" placeholder='Telefon'/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Numer konta</label>
                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                            <input type="text" name="account" id="autocomplete-custom-append" class="form-control col-md-10" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>

                    <<div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <label class="x_content">
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Lp</th>
                                            <th>Nazwa towaru/usługi</th>
                                            <th>PKWiU</th>
                                            <th>Jm</th>
                                            <th>Ilość</th>
                                            <th>Cena netto</th>
                                            <th>Rabat</th>
                                            <th>Stawka VAT</th>
                                            <th>Wartość netto</th>
                                            <th>Wartość VAT</th>
                                            <th>Wartość brutto</th>
                                        </tr>
                                        </thead>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <td> <input type="text" name="lp" class="col-sm-1"/> </td>
                                            <td> <input type="text" name="name"/> </td>
                                            <td> <input type="text" name="pkwiu"/> </td>
                                            <td> <select type="text" name="jm" class="col-sm-1"/> </td>
                                            <td> <input type="text" name="ilosc"/> </td>
                                            <td> <input type="text" name="cenanetto"/> </td>
                                            <td> <input type="text" name="rabat"/> </td>
                                            <td> <input type="text" name="stawkavat"/> </td>
                                            <td> <input type="text" name="wartoscnetto"/> </td>
                                            <td> <input type="text" name="wartoscvat"/> </td>
                                            <td> <input type="text" name="wartoscbrutto"/> </td>
                                        </div>

                                        </tbody>

                                    </table>

                                </label>
                            </div>
                        </div>
                    </div>
@endsection