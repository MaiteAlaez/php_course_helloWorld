<?php

namespace App\Controller;

class View
{
    private $model;
    private $fixed_part1;
    private $fixed_part2;

    public function __construct(Model $model) {
        $this->model = $model;

        $this->fixed_part1 = '<html><head><title>Hello_world</title></head><body><a href="index.php?action=mouseButtonPressed">';
        $this->fixed_part2 = '</a></body></html>';
    }

    public function buildHtml() :string {
        $html = $this->fixed_part1.$this->model->getMessage().$this->fixed_part2;

        return $html;
    }
}