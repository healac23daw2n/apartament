@extends('disseny')
@section('content')
    <h1>Llista de clients</h1>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <td>Dni_client</td>
                    <td>Nom_i_cognoms</td>
                    <td>Edat</td>
                    <td>Telèfon</td>
                    <td>Adreça</td>
                    <td>Ciutat</td>
                    <td>País</td>
                    <td>Email</td>
                    <td>Tipus_de_targeta</td>
                    <td>Número_de_la_targeta</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($dades_clients as $client)
                    <tr>
                        <td>{{ $client->Dni_client }}</td>
                        <td>{{ $client->Nom_i_cognoms }}</td>
                        <td>{{ $client->Edat }}</td>
                        <td>{{ $client->Telèfon }}</td>
                        <td>{{ $client->Adreça }}</td>
                        <td>{{ $client->Ciutat }}</td>
                        <td>{{ $client->País }}</td>
                        <td>{{ $client->Email }}</td>
                        <td>{{ $client->Tipus_de_targeta }}</td>
                        <td>{{ $client->Número_de_la_targeta }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
