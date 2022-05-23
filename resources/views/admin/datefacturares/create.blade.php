@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.datefacturare.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.datefacturares.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nume">{{ trans('cruds.datefacturare.fields.nume') }}</label>
                <input class="form-control {{ $errors->has('nume') ? 'is-invalid' : '' }}" type="text" name="nume" id="nume" value="{{ old('nume', '') }}">
                @if($errors->has('nume'))
                    <span class="text-danger">{{ $errors->first('nume') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.datefacturare.fields.nume_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cui">{{ trans('cruds.datefacturare.fields.cui') }}</label>
                <input class="form-control {{ $errors->has('cui') ? 'is-invalid' : '' }}" type="number" name="cui" id="cui" value="{{ old('cui', '') }}" step="1">
                @if($errors->has('cui'))
                    <span class="text-danger">{{ $errors->first('cui') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.datefacturare.fields.cui_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="numar_inregistrare">{{ trans('cruds.datefacturare.fields.numar_inregistrare') }}</label>
                <input class="form-control {{ $errors->has('numar_inregistrare') ? 'is-invalid' : '' }}" type="text" name="numar_inregistrare" id="numar_inregistrare" value="{{ old('numar_inregistrare', '') }}">
                @if($errors->has('numar_inregistrare'))
                    <span class="text-danger">{{ $errors->first('numar_inregistrare') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.datefacturare.fields.numar_inregistrare_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="adresa">{{ trans('cruds.datefacturare.fields.adresa') }}</label>
                <input class="form-control {{ $errors->has('adresa') ? 'is-invalid' : '' }}" type="text" name="adresa" id="adresa" value="{{ old('adresa', '') }}">
                @if($errors->has('adresa'))
                    <span class="text-danger">{{ $errors->first('adresa') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.datefacturare.fields.adresa_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="user_id">{{ trans('cruds.datefacturare.fields.user') }}</label>
                <select class="form-control select2 {{ $errors->has('user') ? 'is-invalid' : '' }}" name="user_id" id="user_id">
                    @foreach($users as $id => $entry)
                        <option value="{{ $id }}" {{ old('user_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('user'))
                    <span class="text-danger">{{ $errors->first('user') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.datefacturare.fields.user_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection