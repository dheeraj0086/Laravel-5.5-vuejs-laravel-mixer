@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Companies</div>

                    <div class="panel-body">
                      <router-view></router-view>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('extra_scripts')
<script src="{{ asset('js/pages/companies/app.js') }}"></script>
@endSection
