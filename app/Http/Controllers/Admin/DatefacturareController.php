<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDatefacturareRequest;
use App\Http\Requests\UpdateDatefacturareRequest;
use App\Models\Datefacturare;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DatefacturareController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('datefacturare_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $datefacturares = Datefacturare::with(['user'])->get();

        return view('admin.datefacturares.index', compact('datefacturares'));
    }

    public function create()
    {
        abort_if(Gate::denies('datefacturare_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.datefacturares.create', compact('users'));
    }

    public function store(StoreDatefacturareRequest $request)
    {
        $datefacturare = Datefacturare::create($request->all());

        return redirect()->route('admin.datefacturares.index');
    }

    public function edit(Datefacturare $datefacturare)
    {
        abort_if(Gate::denies('datefacturare_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $users = User::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $datefacturare->load('user');

        return view('admin.datefacturares.edit', compact('datefacturare', 'users'));
    }

    public function update(UpdateDatefacturareRequest $request, Datefacturare $datefacturare)
    {
        $datefacturare->update($request->all());

        return redirect()->route('admin.datefacturares.index');
    }

    public function show(Datefacturare $datefacturare)
    {
        abort_if(Gate::denies('datefacturare_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $datefacturare->load('user');

        return view('admin.datefacturares.show', compact('datefacturare'));
    }
}
