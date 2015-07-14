<?php

namespace Sun;

use Illuminate\Session\Store;

class Flash
{

    /**
     * @var Store
     */
    private $session;

    /**
     * @param Store $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }

    /**
     * To show flash message with twitter bootstrap alert-info
     *
     * @param        $message
     * @param string $level
     */
    public function message($message, $level = 'info')
    {
        $this->session->flash('flash_notification.message', $message);
        $this->session->flash('flash_notification.level', $level);
    }

    /**
     * To show flash message with twitter bootstrap alert-danger
     *
     * @param $message
     */
    public function error($message)
    {
        $this->message($message, 'danger');
    }

    /**
     * To show flash message with twitter bootstrap alert-info
     *
     * @param $message
     */
    public function info($message)
    {
        $this->message($message, 'info');
    }

    /**
     * To show flash message with twitter bootstrap alert-warning
     *
     * @param $message
     */
    public function warning($message)
    {
        $this->message($message, 'warning');
    }

    /**
     * To show flash message with twitter bootstrap alert-success
     *
     * @param $message
     */
    public function success($message)
    {
        $this->message($message, 'success');
    }

    /**
     * To show flash message with twitter bootstrap model
     *
     * @param        $title
     * @param        $message
     * @param string $allowText
     * @param bool   $submitbutton
     * @param string $allowType
     * @param string $dismissText
     * @param string $dismissType
     */
    public function overlay($title, $message, $submitbutton = false, $allowText = 'Save', $allowType = 'success', $dismissText = 'Close', $dismissType = 'default')
    {
        $this->message($message);
        $this->session->flash('flash_notification.title', $title);
        $this->session->flash('flash_notification.overlay', true);
        $this->session->flash('flash_notification.dismissText', $dismissText);
        $this->session->flash('flash_notification.dismissType', $dismissType);
        $this->session->flash('flash_notification.allowText', $allowText);
        $this->session->flash('flash_notification.allowType', $allowType);
        $this->session->flash('flash_notification.submitButton', $submitbutton);
    }

    /**
     * To show confirm modal
     *
     * @param $title
     * @param $message
     */
    public function confirm($title, $message)
    {
        $this->overlay($title, $message, true, 'Yes', 'success', 'No');
    }
}
