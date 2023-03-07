@extends('master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{__('message.gestion_de_groupe')}}</h1>
                    </div>
                </div>
            </div>
        </section>

        <body>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-md-6 col-lg-6">
                            <form class="card" action="{{ route('groupe.update', $group->id) }}" method="POST" enctype="multipart/form-data">
                                <h5 class="card-title d-flex justify-content-center fw-400">{{ __('message.edit_group') }}
                                </h5>
                                @csrf
                                @method('PUT')
                                @include('Groupes.form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </body>
@endsection
