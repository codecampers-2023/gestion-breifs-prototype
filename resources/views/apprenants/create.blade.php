@extends('master')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{ __('message.title1') }}</h1>
                    </div>
                </div>
            </div>
        </section>

        <body>
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">

                        <div class="col-md-6 col-lg-6">
                            <form class="card"   action="{{ route('apprenant.store') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf

                                <h5 style="background-color: #6c757d;color:white" class="card-title d-flex justify-content-center fw-400">

                                    {{ __('message.+add apprenant') }}</h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.name') }}</label>
                                        <input class="form-control rounded" type="text" placeholder=""
                                            value="{{ old('Nom') }}" name="Nom">
                                        @error('Nom')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.prenom') }}</label>
                                        <input class="form-control rounded" value="{{ old('Prenom') }}" type="text" placeholder="" name="Prenom">
                                        @error('Prenom')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.email') }}</label>
                                        <input class="form-control rounded" value="{{ old('Email') }}" type="text" placeholder="" name="Email">
                                        @error('Email')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.phone') }}</label>
                                        <input class="form-control rounded" value="{{ old('Numero_telephone') }}" type="number" placeholder="" name="Numero_telephone">
                                        @error('Numero_telephone')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.adress') }}</label>
                                        <input class="form-control rounded" value="{{ old('Adress') }}" type="text" placeholder="" name="Adress">
                                        @error('Adress')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.cin') }}</label>
                                        <input class="form-control rounded" type="text" value="{{ old('CIN') }}"
                                            placeholder="CIN" name="CIN">
                                        @error('CIN')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.sexe') }}</label>
                                        <select class="form-control rounded" placeholder="" name="Sexe">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value="Homme" @if(old('Sexe') == 'Homme') selected @endif>Homme</option>
                                            <option value="Femme" @if(old('Sexe') == 'Femme') selected @endif>Femme</option>
                                        </select>
                                        @error('Sexe')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted"
                                            for="">{{ __('message.date_naissance') }}</label>
                                        <input class="form-control rounded" value="{{ old('Date_naissance') }}" type="date" placeholder=""
                                            name="Date_naissance">
                                        @error('Date_naissance')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-6">

                            
                                <div class="card card-secondary">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.nom_arabe') }}</label>
                                        <input class="form-control rounded" value="{{ old('Nom_arabe') }}" type="text" placeholder=""
                                            name="Nom_arabe">
                                        @error('Nom_arabe')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.prenom_arabe') }}</label>
                                        <input class="form-control rounded" value="{{ old('Prenom_arabe') }}" type="text" placeholder=""
                                            name="Prenom_arabe">
                                        @error('Prenom_arabe')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror

                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.lieu_naissance') }}</label>
                                        <input class="form-control rounded" value="{{ old('Lieu_naissance') }}" type="text" placeholder=""
                                            name="Lieu_naissance">
                                        @error('Lieu_naissance')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted"
                                            for="">{{ __('message.niveau_Scolaire') }}</label>
                                        <input class="form-control rounded" type="text" value="{{ old('Niveau_Scolaire') }}" placeholder=""
                                            name="Niveau_Scolaire">
                                        @error('Niveau_Scolaire')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>


                                </div>

                            </div>

                            <!-- /.card-body -->
                                <div class="card card-secondary">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.etudiant_actif') }}</label>
                                        <select class="form-control rounded" placeholder="" name="Etudiant_actif">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value="True" @if (old('Etudiant_actif') == "True") {{ 'selected' }} @endif>Oui</option>
                                            <option value="false"  @if (old('Etudiant_actif') == "false") {{ 'selected' }} @endif>non</option>
                                        </select>
                                        @error('Etudiant_actif')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"
                                            for="">{{ __('message.date_inscription') }}</label>
                                        <input class="form-control rounded" value="{{ old('Date_inscription') }}" type="date" placeholder=""
                                            name="Date_inscription">
                                        @error('Date_inscription')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.diplome') }}</label>
                                        <select class="form-control rounded" placeholder="" name="Diplome">
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value="oui" @if(old('Diplome') == 'oui') selected @endif>Oui</option>
                                            <option value="non" @if(old('Diplome') == 'non') selected @endif>Non</option>
                                        </select>
                                        @error('Diplome')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card card-secondary">
                                <div class="card-header">

                                </div>
                                <div class="card-body">

                                  <div class="form-group">
                                    <label class="text-muted" for="">{{ __('message.image') }}</label>
                                    <input type="file" name="Image" id="Image"
                                        value="{{ old('Image') }}">
                                    @error('Image')
                                        <label style="color: red;">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="">{{ __('message.group') }}</label>
                                    <select class="btn form-control rounded btn-secondary dropdown-toggle ml-2"
                                        name="Group_id" id="Group_id" >
                                        
                                        <option disabled selected value>{{ __('message.all_groups') }}</option>
                                        @foreach ($groupes as $value)
                                            <option value="{{ $value->id }}" {{ old('Group_id') == $value->id ? 'selected="selected"' : '' }}>{{ $value->Nom_groupe }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="d-flex justify-content-between">
                                    <button class="btn btn-primary">{{ __('message.add') }}</button>
                                    <a class="btn  btn-secondary"
                                        href="{{ route('apprenant.index') }}">{{ __('message.cancel') }}</a>
                                </div>

                                </div>

                                <!-- /.card-body -->
                            </div>

                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
