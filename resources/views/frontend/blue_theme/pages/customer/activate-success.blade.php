@extends('frontend.blue_theme.template.layout')

@section('title', $config_site->name .' - Cadastro ativado com sucesso' )

@section('content')
    <main role="main">


    <div class="container internal-pages">
        @component('frontend.blue_theme.components.breadcrumb')
            <li class="breadcrumb-item active" aria-current="page">Cadastro ativado com sucesso</li>
        @endcomponent {{--component breadcrumb--}}

        @include('frontend.blue_theme.partials.register_activate_success')<!-- register form-->
    </div>


    @include('frontend.blue_theme.partials.newsletter')<!-- newsletter-->


        @include('frontend.blue_theme.partials.maps')<!-- maps-->


        <section class="contactfooter">
        @include('frontend.blue_theme.partials.contact_box')<!-- contact box-->
        @include('frontend.blue_theme.partials.contact_form')<!-- contact form-->
        </section>


    @include('frontend.blue_theme.partials.footer')<!-- partial footer-->
    </main>
@endsection

@push('scripts')
    <script src="{{asset('templates/'.$config_site->theme)}}/assets/js/plugins.min.js"></script>
    <script>
        maskZipCode();
        maskPhone();
    </script>
@endpush