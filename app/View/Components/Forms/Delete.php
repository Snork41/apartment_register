<?php

namespace App\View\Components\Forms;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Delete extends Component
{
    public $actionRoute;
    public $object;
    public $objectId;
    public $confirmMessage;
    public $buttonImage;

    public function __construct($actionRoute, $object, $objectId, $confirmMessage, $buttonImage)
    {
        $this->actionRoute = $actionRoute;
        $this->object = $object;
        $this->objectId = $objectId;
        $this->confirmMessage = $confirmMessage;
        $this->buttonImage = $buttonImage;
    }

    public function render(): View|Closure|string
    {
        return view('components.forms.delete');
    }
}
