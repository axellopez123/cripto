@extends('layouts.app')

<script src="{{ url('js/ap.js')}}"></script>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <div>
                <h2>Cotizaciones de criptomonedas</h2>

                <table class="table table-success table-striped">
                <thead>
                        <tr>
                            <th>Símbolo</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody id="data">
                    </tbody>
                </table>
                </div>
        </div>
    </div>
</div>
@endsection
