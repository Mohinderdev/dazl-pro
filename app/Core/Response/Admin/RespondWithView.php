<?php

namespace App\Core\Response\Admin;

class RespondWithView
{
    protected $view;
    protected $data;

    public function __construct(string $view = null, array $data = null)
    {
        $this->view     = $view;
        $this->data     = $data;
    }

    public function handle()
    {
        if($this->data)
            return view($this->view, $this->data);
        else
            return view($this->view);
    }
}
