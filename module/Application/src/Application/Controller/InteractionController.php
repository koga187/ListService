<?php

namespace Application\Controller;

class InteractionController extends AbstractController
{
    public function __construct()
    {
        $this->entity = 'Application\\Entity\\Interaction';
        $this->controller = 'interaction';
        $this->form = 'interaction.form';
        $this->route = 'interaction';
    }
}
