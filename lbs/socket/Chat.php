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

//use App\chatControle;
//use App\chatModulo;
use Ratchet\ConnectionInterface;
use Ratchet\Wamp\WampServerInterface;

//use modulos\suporte\controles\chatControle;
//require_once 'database.php';

class Chat implements WampServerInterface
{

    protected $controle;

    public function __construct()
    {
        $this->controle = new chatControle;
    }

    public function onSubscribe(ConnectionInterface $conn, $topic)
    {
        $this->controle->Inscrever($conn, $topic);
    }

    public function onUnSubscribe(ConnectionInterface $conn, $topic)
    {
    }

    public function onOpen(ConnectionInterface $conn)
    {
    }

    public function onClose(ConnectionInterface $conn)
    {
    }

    public function onCall(ConnectionInterface $conn, $id, $topic, array $params)
    {
        // Neste aplicativo, se os clientes enviam dados, é porque o usuário invadiu o console
        $conn->callError($id, $topic, 'Você não tem permissão para fazer isso')->close();
    }

    public function onPublish(ConnectionInterface $conn, $topic, $event, array $exclude, array $eligible)
    {

        if (!isset($this->messages[$topic->getId()])) {
            $this->messages[$topic->getId()] = json_encode($event);
        } else {
            $this->messages[$topic->getId()] .= ', ' . json_encode($event);
        }
        //$conn->send(json_encode($event));
        //dispara a mensagem para todos usuários do mesmo tópicp
        $topic->broadcast($event);
    }

    public function onError(ConnectionInterface $conn, \Exception $e)
    {
    }
}
