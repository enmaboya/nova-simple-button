<?php

namespace Enmaboya\SimpleButton;

use Laravel\Nova\Fields\Field;

class SimpleButton extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'simple-button';

    public function link(string $link = '#', string $text = 'Link')
    {
        return $this->withMeta(['link' => $link, 'text' => $text]);
    }
}
