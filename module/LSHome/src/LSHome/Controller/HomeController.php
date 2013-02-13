<?php

namespace LSHome\Controller;

use Zend\View\Model\ViewModel;
use LSBase\Controller\CrudController;

/**
 * HomeController
 *
 * Classe Controller HomeController
 *
 * @package LSHome\Controller
 * @author Jesus Vieira <jesusvieiradelima@gmail.com>
 * @version  v1.0
 */
class HomeController extends CrudController
{

    public function __construct ()
    {
        $this->controller = 'home';
        $this->route = 'home';

    }

    /**
     * indexAction
     *
     * Exibe pagina principal.
     *
     * @author Jesus Vieira <jesusvieiradelima@gmail.com>
     * @access public
     * @return \Zend\View\Model\ViewModel
     */
    public function indexAction()
    {

        return new ViewModel();

    }
}