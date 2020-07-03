@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Localizações</div>

                <div class="card-body">
                    

                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Local</th>
                                <th>Latitude</th>
                                <th>Longitude</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($locations as $location)

                            <tr>
                                <td>{{$location->name}}</td>
                                <td>{{$location->lat}}</td>
                                <td>{{$location->lng}}</td>
                                <td>
                                    <a href="{{ route('locations.edit', $location->id) }}"><i class="fa fa-edit actions"></i></a>
                                    <a href="{{ route('locations.destroy', $location->id) }}"><i class="fa fa-trash actions"></i></a>
                                </td>
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
