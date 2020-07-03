@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <form action="{{ route('locations.update', $location->id) }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Nome</strong>
                                    <input type="text" name="name" id="name" value="{{old('name', $location->name)}}" class="form-control" placeholder="Nome">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Descrição</strong>
                                    <input type="text" name="description" id="description" value="{{old('description', $location->description)}}" class="form-control" placeholder="Descrição">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p class="h3">Ponto Geográfico Principal</p>
                            </div>
                            
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Latitudade Principal</strong>
                                    <input type="text" name="lat" id="lat" value="{{old('lat', $location->lat)}}" class="form-control" placeholder="Latitudade Ponto Principal">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Longitude Principal</strong>
                                    <input type="text" name="lng" id="lng" value="{{old('lng', $location->lng)}}" class="form-control" placeholder="Longitude Ponto Principal">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <p class="h3">Área de Visualização</p>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Latitudade - Ponto 1</strong>
                                    <input type="text" name="latp1" id="latp1" value="{{old('latp1', $location->latp1)}}" class="form-control" placeholder="Latitudade - Ponto 1">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Longitude - Ponto 1</strong>
                                    <input type="text" name="lngp1" id="lngp1" value="{{old('lngp1', $location->lngp1)}}" class="form-control" placeholder="Longitude - Ponto 1">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Latitudade - Ponto 2</strong>
                                    <input type="text" name="latp2" id="latp2" value="{{old('latp2', $location->latp2)}}" class="form-control" placeholder="Latitudade - Ponto 2">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Longitude - Ponto 2</strong>
                                    <input type="text" name="lngp2" id="lngp2" value="{{old('lngp2', $location->lngp2)}}" class="form-control" placeholder="Longitude - Ponto 2">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Latitudade - Ponto 3</strong>
                                    <input type="text" name="latp3" id="latp3" value="{{old('latp3', $location->latp3)}}" class="form-control" placeholder="Latitudade - Ponto 3">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Longitude - Ponto 3</strong>
                                    <input type="text" name="lngp3" id="lngp3" value="{{old('lngp3', $location->lngp3)}}" class="form-control" placeholder="Longitude - Ponto 3">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Latitudade - Ponto 4</strong>
                                    <input type="text" name="latp4" id="latp4" value="{{old('latp4', $location->latp4)}}" class="form-control" placeholder="Latitudade - Ponto 4">
                                </div>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <strong>Longitude - Ponto 4</strong>
                                    <input type="text" name="lngp4" id="lngp4" value="{{old('lngp4', $location->lngp4)}}" class="form-control" placeholder="Longitude - Ponto 4">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                                <a class="btn btn-danger" href="{{ route('locations.index') }}">Voltar</a>
                                <button type="submit" class="btn btn-success">Salvar</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
