<?php

namespace App\Core\Response\Admin;

use Illuminate\View\View;

class RespondWithRoute
{
    protected $route;
    protected $message;
    protected $message_type;

    public function __construct($route = null, string $message_type = null, string $message = null)
    {
        $this->route         = $route;
        $this->message       = $message;
        $this->message_type  = $message_type;
    }

    public function handle()
    {
        if(is_null($this->route))
            return back()->with($this->message_type, $this->message);
        else
            return redirect(route($this->route))->with($this->message_type, $this->message);
    }
}
