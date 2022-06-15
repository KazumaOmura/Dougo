<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Table extends Component
{
    public $columns;
    public $values;
    public $title;

    public function __construct(string $column, string $reponame, string $title)
    {
        $repository_name = "App\ORM\Generated\Repository\\".$reponame."Repository";
        $this->values = $repository_name::getAll();
        $this->columns = explode (",",$column);
        $this->title = $title;
    }

    public function render()
    {
        return view('components.table');
    }
}
