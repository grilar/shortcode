<?php

namespace Grilar\Shortcode\Http\Requests;

use Grilar\Support\Http\Requests\Request;

class GetShortcodeDataRequest extends Request
{
    public function rules(): array
    {
        return [
            'key' => 'nullable|string|max:255',
            'code' => 'nullable|string|max:10000',
        ];
    }
}
