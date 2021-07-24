<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of indexControle
 *
 * @author Jonatas
 */
class indexControle extends Controlador
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        if (!Sessao::get('autenticado')) {
            $this->redir('login');
            exit();
        } else {
            $this->redir('painel');
            exit();
        }
    }
}
