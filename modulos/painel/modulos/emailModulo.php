<?php


/**
 * Modulo de Email para ajudar a preparar as mensagens que serão enviadas 
 * 
 */

class emailModulo extends Modulo
{

    private $tabela = 'modelos_email';
    public $email;

    public function __construct()
    {
        parent::__construct();
        //$this->_db->_setTabela($this->tabela);

        $this->getLibs('PHPMailer');
        $this->email = new PHPMailer();

        $this->email->IsSMTP();
        $this->email->Host = EMAIL_HOST;
        $this->email->SMTPAuth = EMAIL_AUTH;
        $this->email->SMTPSecure = EMAIL_SECURE;
        $this->email->Username = EMAIL_USER;
        $this->email->Password = EMAIL_PASS;
        $this->email->Port = EMAIL_PORT;

        $this->email->CharSet = PHPMailer::CHARSET_UTF8;

        $this->email->setFrom(EMAIL_USER, APP_NOME);
        $this->email->addReplyTo(EMAIL_RESPOSTA_PADRAO);
    }

    /**
     * Undocumented function
     *
     * @param Array $para
     * @param String $assunto
     * @param String $texto
     * @param Array $copia
     * @param Array $copiaOclta
     *
     * @return bool
     */
    public function Enviar($assunto = false, $texto = false, $htmlContent = false)
    {

        $this->email->isHTML(true);
        $this->email->Subject = $assunto;

        if ($htmlContent) {
            $this->email->msgHTML(file_get_contents(RAIZ . 'modulos' . DS . 'painel' . DS . 'views' . DS . 'emails' . DS . $htmlContent));
        } else {
            $this->email->Body    = $texto;
        }
        //$this->email->AltBody = 'Para visualizar essa mensagem acesse http://site.com.br/mail';
        //$this->email->addAttachment('/tmp/image.jpg', 'nome.jpg');

        if (!$this->email->send()) {
            Sessao::addMsg('erro', 'Não foi possível enviar a mensagem.');
            Sessao::addMsg('erro', $this->email->ErrorInfo);
            return false;
        } else {
            Sessao::addMsg('sucesso', 'Mensagem enviada com sucesso!');
            return true;
        }
    }

    /**
     * Seta o endereço para envio, em string ou em array
     * Se passar como array, não passe a variável $nome
     * 
     * $endereco = array(
     *  'email'=> 'email@email.com.br'
     *  'nome' => 'Nome'
     * );
     * 
     * @param String|Array $endereco
     * @param bool $nome
     *
     * @return void
     */
    public function Para($endereco = false, $nome = false)
    {
        if (is_string($endereco)) {
            $this->email->addAddress($endereco, $nome);
        } else if (is_array($endereco) && count($endereco) > 0) {
            foreach ($endereco as $end) {
                $this->email->addAddress($end['email'], $end['nome']);
            }
        }
    }

    /**
     * Seta o endereço de Cópia para envio, em string ou em array
     * Se passar como array, não passe a variável $nome
     * 
     * $endereco = array(
     *  'email'=> 'email@email.com.br'
     *  'nome' => 'Nome'
     * );
     * 
     * @param String|Array $endereco
     * @param bool $nome
     *
     * @return void
     */
    public function cCopia($endereco = false, $nome = false)
    {
        if (is_string($endereco)) {
            $this->email->addCC($endereco, $nome);
        } else if (is_array($endereco) && count($endereco) > 0) {
            foreach ($endereco as $end) {
                $this->email->addCC($end['email'], $end['nome']);
            }
        }
    }

    /**
     * Seta o endereço de Cópia Oculta para envio, em string ou em array
     * Se passar como array, não passe a variável $nome
     * 
     * $endereco = array(
     *  'email'=> 'email@email.com.br'
     *  'nome' => 'Nome'
     * );
     * 
     * @param String|Array $endereco
     * @param bool $nome
     *
     * @return void
     */
    public function cCopiaOculta($endereco = false, $nome = false)
    {
        if (is_string($endereco)) {
            $this->email->addBCC($endereco, $nome);
        } else if (is_array($endereco) && count($endereco) > 0) {
            foreach ($endereco as $end) {
                $this->email->addBCC($end['email'], $end['nome']);
            }
        }
    }

    public function substituiTexto($dados, $texto)
    {
        preg_match_all("(\\\${([\w\d\-\\.]+)})", $texto, $m, PREG_PATTERN_ORDER);
        $arr = array();
        foreach ($m[0] as $i => $valor) {
            $arr[$valor] = $dados[$m[1][$i]];
        }
        return  str_replace(array_keys($arr), array_values($arr), $texto);
    }

    public function editar_modelo($dados, $id = false)
    {
        if (is_numeric($id)) {
            $this->_db->_load($dados);
            if ($this->_db->_atualiza('MOD_id', $id)) {
                Sessao::addMsg('sucesso', 'Modelo atualizado com sucesso!');
            } else {
                Sessao::addMsg('erro', 'O modelo não pode ser atualizado');
            }
        }
    }
    public function excluir_modelo($id = false)
    {
        if (is_numeric($id)) {
            if ($this->_db->_delete('MOD_id', $id)) {
                Sessao::addMsg('sucesso', 'Modelo excluido com sucesso!');
            } else {
                Sessao::addMsg('erro', 'O modelo não pode ser excluido!');
            }
        }
    }
}
