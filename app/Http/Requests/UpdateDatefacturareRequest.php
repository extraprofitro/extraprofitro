<?php

namespace App\Http\Requests;

use App\Models\Datefacturare;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateDatefacturareRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('datefacturare_edit');
    }

    public function rules()
    {
        return [
            'nume' => [
                'string',
                'nullable',
            ],
            'cui' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'numar_inregistrare' => [
                'string',
                'nullable',
            ],
            'adresa' => [
                'string',
                'nullable',
            ],
        ];
    }
}
