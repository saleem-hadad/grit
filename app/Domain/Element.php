<?php

namespace App\Domain;

use JsonSerializable;
use Illuminate\Support\Str;

abstract class Element implements JsonSerializable
{
    protected string $name;

    public function __construct()
    {
        $this->name = $this->humanizedName();
    }

    public function humanizedName(): string
    {
        return Str::title(Str::snake(class_basename(get_class($this)), ' '));
    }

    public function withName(string $name): Element
    {
        $this->name = $name;

        return $this;
    }

    public function jsonSerialize(): array
    {
        return [
            'name' => $this->name,
        ];
    }
}
