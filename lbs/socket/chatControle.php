<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of chatControle
 *
 * @author Jhony
 */

namespace App;

class chatControle {

    protected $subscribedTopics = array();
    protected $messages = array();

    public function __construct() {
        
    }
    
    public function Inscritos($conn, $topic) {
        $this->subscribedTopics[$topic->getId()] = $topic;
        //enviar historico das mensagens
        if (isset($this->messages[$topic->getId()])) {
            $json = '[' . $this->messages[$topic->getId()] . ']';
            //envia o histórico apenas para o usuário que acabou de "conectar/subscribe"
            echo $topic->getId();
            $conn->event($topic, $json);
        }
    }
    
    public function Publicar($conn, $topic, $event, $exclude, $eligible) {
         if (!isset($this->messages[$topic->getId()])) {
            $this->messages[$topic->getId()] = json_encode($event);
        } else {
            $this->messages[$topic->getId()] .= ', ' . json_encode($event);
        }
        //$conn->send(json_encode($event));
        //dispara a mensagem para todos usuários do mesmo tópicp
        $topic->broadcast($event);
    }

}
