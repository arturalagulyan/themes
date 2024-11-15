<?php
namespace App\Http\Requests;

use App\Enums\Theme;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Enum;

class ChooseThemeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'theme' => ['required', 'string', new Enum(Theme::class)],
        ];
    }
}
