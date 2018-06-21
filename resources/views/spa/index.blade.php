@extends('app')

@section('content')
    <template>
        <alert-box v-if="error" :error="error"></alert-box>
        <div class="container">
            <div class="col-md-6">
                <div class="col-12">
                    <users
                        :users="users"
                        :isLoading="isLoading"
                    /></div>
                <div class="col-12"><clear-button /></div>
            </div>
            <div class="col-md-6">
                <basket
                    :basket="basket"
                    :isLoading="isLoading"
                /></div>
        </div>
    </template>
@endsection