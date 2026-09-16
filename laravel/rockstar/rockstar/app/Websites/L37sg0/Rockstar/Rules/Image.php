<?php

namespace L37sg0\Rockstar\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Intervention\Image\Facades\Image as ImageLib;

class Image implements ValidationRule
{
    public function __construct(protected int $maxWidth,protected int $maxHeight)
    {
    }

    /**
     * @inheritDoc
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $image = ImageLib::make($value);

        if ($image->width() > $this->maxWidth
            || $image->height() > $this->maxHeight) {
            $fail("The :attribute should be with max of $this->maxWidth x $this->maxHeight px.");
        }
    }
}
