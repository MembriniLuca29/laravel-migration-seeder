@extends('layouts.main')

@section('page-title', 'Homepage')

{{-- @section('page-title')
Homepage
@endsection --}}

@section('main-content')
<h1 class="text-center mt-3">
    Treni oggi
</h1>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <th>Azienda</th>
                <th>Stazione di Partenza</th>
                <th>Stazione di Arrivo</th>
                <th>Giorno di Partenza</th>
                <th>Orario di Partenza</th>
                <th>Orario di Arrivo</th>
                <th>Codice Treno</th>
                <th>Numero Carrozze</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($trains as $train)
                @if ($train->giorno_di_partenza === '2023-09-12')
                    <tr>
                        <td>{{ $train->azienda }}</td>
                        <td>{{ $train['stazione di partenza'] }}</td>
                        <td>{{ $train['stazione di arrivo'] }}</td>
                        <td>{{ $train['giorno_di_partenza'] }}</td>
                        <td>{{ $train['orario di partenza'] }}</td>
                        <td>{{ $train['orario di arrivo'] }}</td>
                        <td>{{ $train['codice treno'] }}</td>
                        <td>{{ $train['numero carrozze'] }}</td>
                    </tr>
                @endif
            @endforeach
        </tbody>
    </table>
</div>
@endsection

