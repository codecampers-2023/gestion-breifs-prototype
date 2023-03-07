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
                            <form class="card" action="{{ route('apprenant.update', $edit->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <h5 style="background-color: #6c757d;color:white" class="card-title d-flex justify-content-center fw-400">
                                    {{ __('message.edit_apprenant') }}</h5>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.name') }}</label>
                                        <input class="form-control rounded" type="text" placeholder=""
                                            value="{{ $edit->Nom }}" name="Nom">
                                        @error('Nom')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.prenom') }}</label>
                                        <input class="form-control rounded" type="text"
                                            placeholder=""value="{{ $edit->Prenom }}" name="Prenom">
                                        @error('Prenom')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.email') }}</label>
                                        <input class="form-control rounded" type="text"
                                            placeholder=""value="{{ $edit->Email }}" name="Email">
                                        @error('Email')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.phone') }}</label>
                                        <input class="form-control rounded" type="text" placeholder=""
                                            value="{{ $edit->Numero_telephone }}" name="Phone">
                                        @error('Phone')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.adress') }}</label>
                                        <input class="form-control rounded" type="text" placeholder=""
                                            value="{{ $edit->Adress }}" name="Adress">
                                        @error('Adress')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.etudiant_actif') }}</label>
                                        <select class="form-control rounded" placeholder="" name="Etudiant_actif">
                                            <option selected value="{{ $edit->Etudiant_actif }}">
                                                {{ $edit->Etudiant_actif }} </option>
                                            <option value="true">Oui</option>
                                            <option value="false">Non</option>
                                        </select>
                                        @error('Etudiant_actif')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted"
                                            for="">{{ __('message.date_inscription') }}</label>
                                        <input class="form-control rounded" value="{{ $edit->Date_inscription }}"
                                            type="date" placeholder="" name="Date_inscription">
                                        @error('Date_inscription')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.sexe') }}</label>
                                        <select class="form-control rounded" placeholder="" name="Sexe">
                                            <option selected value="{{ $edit->Sexe }}"> {{ $edit->Sexe }} </option>
                                            <option value="male">Homme</option>
                                            <option value="female">Femme</option>
                                        </select>
                                        @error('Sexe')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted" for="">{{ __('message.cin') }}</label>
                                        <input class="form-control rounded" type="text" value="{{ $edit->CIN }}"
                                            placeholder="CIN" name="CIN">
                                        @error('CIN')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>

                                    <div class="form-group">
                                        <label class="text-muted"
                                            for="">{{ __('message.lieu_naissancee') }}</label>
                                        <input class="form-control rounded" value="{{ $edit->Date_naissance }}"
                                            type="date" placeholder="" name="Date_naissance">
                                        @error('Date_naissance')
                                            <label style="color: red;">{{ $message }}</label>
                                        @enderror
                                    </div>



                                </div>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="card card-secondary">
                            <div class="card-header">
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label class="text-muted"
                                        for="">{{ __('message.Lieu_naissance') }}</label>
                                    <input class="form-control rounded" value="{{ $edit->Lieu_naissance }}"
                                        type="text" placeholder="" name="Lieu_naissance">
                                    @error('Lieu_naissance')
                                        <label style="color: red;">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="">{{ __('message.Nom_arabe') }}</label>
                                    <input class="form-control rounded" type="text"
                                        value="{{ $edit->Nom_arabe }}" placeholder="" name="Nom_arabe">
                                    @error('Nom_arabe')
                                        <label style="color: red;">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="">{{ __('message.Prenom_arabe') }}</label>
                                    <input class="form-control rounded" type="text" placeholder=""
                                        value="{{ $edit->Prenom_arabe }}" name="Prenom_arabe">
                                    @error('Prenom_arabe')
                                        <label style="color: red;">{{ $message }}</label>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label class="text-muted"
                                        for="">{{ __('message.Niveau_Scoliare') }}</label>
                                    <input class="form-control rounded" type="text" placeholder=""
                                        value="{{ $edit->Niveau_Scolaire }}" name="Niveau_Scolaire">
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
                                    <label class="text-muted" for="">{{ __('message.Diplome') }}</label>
                                    <select class="form-control rounded" placeholder="" name="Diplome">
                                        <option selected value="{{ $edit->Diplome }}">{{ $edit->Diplome }} </option>
                                        <option value="oui">Oui</option>
                                        <option value="non">Non</option>
                                    </select>
                                    @error('Diplome')
                                        <label style="color: red;">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="">{{ __('message.Etudiant_actif') }}</label>
                                    <select class="form-control rounded" placeholder="" name="Etudiant_actif">
                                        <option selected value="{{ $edit->Etudiant_actif }}">
                                            {{ $edit->Etudiant_actif }} </option>
                                        <option value="true">Oui</option>
                                        <option value="false">Non</option>
                                    </select>
                                    @error('Etudiant_actif')
                                        <label style="color: red;">{{ $message }}</label>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="text-muted"
                                        for="">{{ __('message.Date_inscription') }}</label>
                                    <input class="form-control rounded" value="{{ $edit->Date_inscription }}"
                                        type="date" placeholder="" name="Date_inscription">
                                    @error('Date_inscription')
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
                                    <center>  <label class="text-muted" for="">{{ __('message.image') }}</label>
                                  <img src="{{ !$edit->Image ? 'https://icon-library.com/images/person-head-icon/person-head-icon-27.jpg' : asset('./images/apprenant/' . $edit->Image) }}"
                                        alt="" width="80" height="80"></center>
                                    <input type="hidden" name="image" value="{{ $edit->Image }}">
                                    <input type="file" name="Imagee" id="Imagee"
                                        value="{{ $edit->Image }}">
                                </div>
                                <div class="form-group">
                                    <label class="text-muted" for="">{{ __('message.group') }}</label>
                                    <select class="btn form-control rounded btn-secondary dropdown-toggle ml-2"
                                        name="Preparation_brief_id" id="Preparation_brief_id">
                                        <option value="">select group</option>
                                        @foreach ($groupes as $value)
                                            <option value="{{ $value->id }}">{{ $value->Nom_groupe }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="d-flex justify-content-between">
                                    <a  href="{{ route('apprenant.index') }}" class="btn  btn-primary">{{ __('message.add') }}</a>
                                    <a class="btn  btn-secondary"
                                        href="{{ route('apprenant.index') }}">{{ __('message.cancel') }}</a>
                                </div>



                            </div>

                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
    </div>
    </body>
@endsection
