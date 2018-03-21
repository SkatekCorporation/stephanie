<<<<<<< HEAD
<?php

namespace Stephanie\Controller;

use Stephanie\View\AppView;

/**
 * Classe pour generer les erreurs dans les controllers
 */
class AppException extends \Exception {

    private $view;

    public function __construct($message = null, $code = 404)
    {
        parent::__construct($message, $code);
        $this->view = new AppView();
        $this->getContent();
    }

    public function getContent()
    {
        $content = $title = $this->message;
        $code    = $this->code;
        $this->view->render('exception', compact('title', 'content', 'code'));
    }

=======
<?php

namespace Stephanie\Controller;

use Stephanie\View\AppView;

/**
 * Classe pour generer les erreurs dans les controllers
 */
class AppException extends \Exception {

    private $view;

    public function __construct($message = null, $code = 404)
    {
        parent::__construct($message, $code);
        $this->view = new AppView();
        $this->getContent();
    }

    public function getContent()
    {
        $content = $title = $this->message;
        $code    = $this->code;
        $this->view->render('exception', compact('title', 'content', 'code'));
    }

>>>>>>> 00f7cb084a74b7c51cef9a730acb0b23443ef191
}