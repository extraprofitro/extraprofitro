@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.datefacturare.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.datefacturares.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.datefacturare.fields.id') }}
                        </th>
                        <td>
                            {{ $datefacturare->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datefacturare.fields.nume') }}
                        </th>
                        <td>
                            {{ $datefacturare->nume }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datefacturare.fields.cui') }}
                        </th>
                        <td>
                            {{ $datefacturare->cui }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datefacturare.fields.numar_inregistrare') }}
                        </th>
                        <td>
                            {{ $datefacturare->numar_inregistrare }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datefacturare.fields.adresa') }}
                        </th>
                        <td>
                            {{ $datefacturare->adresa }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.datefacturare.fields.user') }}
                        </th>
                        <td>
                            {{ $datefacturare->user->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.datefacturares.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection