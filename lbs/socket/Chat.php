<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App;

/**
 * Description of Chat
 *
 * @author Jhony
 */
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\WampServerInterface;

//use modulos\suporte\controles\chatControle;
//require_once 'database.php';

class Chat implements WampServerInterface {

    protected $Controle;

    public function onSubscribe(ConnectionInterface $conn, $topic) {

        $this->Controle = new chatControle;
    }

    public function onUnSubscribe(ConnectionInterface $conn, $topic) {
        
    }

    public function onOpen(ConnectionInterface $conn) {
        
    }

    public function onClose(ConnectionInterface $conn) {
        
    }

    public function onCall(ConnectionInterface $conn, $id, $topic, array $params) {
        // Neste aplicativo, se os clientes enviam dados, é porque o usuário invadiu o console
        $conn->callError($id, $topic, 'Você não tem permissão para fazer isso')->close();
    }

    public function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible) {

        $this->Controle->Publicar($conn, $topic, $event, $exclude, $eligible);
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
        
    }

}
