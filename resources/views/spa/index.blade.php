@extends('app')

@section('content')
    <template>
        <div class="container">
            <div class="col-md-12">
                <alert-box/>
            </div>
            <div class="col-md-6">
                <div class="col-12">
                    <users/>
                </div>
                <div class="col-12">
                    <clear-button/>
                </div>
            </div>
            <div class="col-md-6">
                <basket/>
            </div>
        </div>
    </template>
@endsection