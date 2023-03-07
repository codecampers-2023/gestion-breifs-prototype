<div class="card-body">
    <div class="form-group">
        <label class="text-muted" for="">{{ __('message.name') }}</label>
        <input class="form-control rounded" type="text"
            value="@if (isset($group->Nom_groupe)){{$group->Nom_groupe}}@endif" name="Nom_groupe">
        @error('Nom_du_brief')
            <label style="color: red;">{{ $message }}</label>
        @enderror
    </div>
    {{-- <div class="form-group">
        <label class="text-muted" for="">{{ __('message.profList') }}</label>
        <select class="btn form-control rounded btn-secondary dropdown-toggle ml-2"
            name="Preparation_brief_id" id="Preparation_brief_id">
            <option value="">{{ __('message.allProfs') }}</option>
            @foreach ($formateurs as $value)
                <option value="{{ $value->id }}">{{ $value->Nom_formateur }}</option>
            @endforeach
        </select>
    </div> --}}
    <div class="form-group">
        <label class="text-muted" for="Logo">{{__('message.logo')}}</label>
        <input type="file" name="Logo" id="Logo" value="@if (isset($group->Logo)){{$group->Logo}}@endif">
        @error('Image')
        <label style="color: red;">{{$message}}</label>
    @enderror
    </div>
    <div class="d-flex justify-content-between">
        <button class="btn  btn-primary">{{ __('message.add') }}</button>
        <a class="btn  btn-secondary"
            href="{{ route('groupe.index') }}">{{ __('message.cancel') }}</a>
    </div>

</div>