@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <h3>Exportar PDF</h3>
                <a href="{{route('beneficiary.pdf')}}"> click aqui para descargar en pdf a los usuarios</a>
            </div>
        </div>
    </div>
</div>
@endsection