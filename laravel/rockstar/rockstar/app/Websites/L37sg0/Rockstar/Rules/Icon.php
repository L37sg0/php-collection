<?php

namespace L37sg0\Rockstar\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Intervention\Image\Facades\Image;

class Icon implements ValidationRule
{
    public function __construct(protected int $maxWidth,protected int $maxHeight)
    {
    }

    /**
     * @inheritDoc
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $image = Image::make($value);

        if ($image->width() > $this->maxWidth
            || $image->height() > $this->maxHeight
            || $image->height() !== $image->width()) {
            $fail("The :attribute should be square with max of $this->maxWidth x $this->maxHeight px");
        }
    }
}
