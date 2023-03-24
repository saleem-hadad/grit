<?php

namespace App\Domain;

class SectionDivider extends Element
{
    protected string $component = "section-divider";
    protected string $width = 'full';
    protected string $title;

    public function component(): string
    {
        return $this->component;
    }

    public function width(): string
    {
        return $this->width;
    }

    public function title(): string
    {
        return $this->title;
    }

    public function withTitle(string $title): SectionDivider
    {
        $this->title = $title;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return array_merge(parent::jsonSerialize(), [
            'component' => $this->component(),
            'width' => $this->width(),
            'title' => $this->title(),
        ]);
    }
}
