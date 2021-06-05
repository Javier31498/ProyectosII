@extends('layouts.app')

@section('template_title')
    Crear Pregunta
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title" >Nueva pregunta para el foro.</span>
                        <a class="btn btn-primary" href="{{ route('preguntasf.index') }}"> Back</a>
                    </div>
                
                    <div class="card-body">
                        <form method="POST" action="{{ route('preguntasf.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('preguntasf.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
