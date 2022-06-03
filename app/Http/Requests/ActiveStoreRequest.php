<?php

namespace App\Http\Requests;

use App\Models\InviteCode;
use App\Rules\InviteCodeNotExpired;
use App\Rules\InviteCodeHasQuantity;
use Illuminate\Foundation\Http\FormRequest;

class ActiveStoreRequest extends FormRequest
{
    protected ?InviteCode $inviteCode;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        $this->inviteCode = InviteCode::where('code', $this->code)->first();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'code' => [
                'required',
                'exists:invite_codes,code',
                'bail',
                new InviteCodeHasQuantity($this->inviteCode),
                new InviteCodeNotExpired($this->inviteCode),
            ],
        ];
    }
}
