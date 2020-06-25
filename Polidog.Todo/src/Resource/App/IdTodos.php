<?php
namespace Polidog\Todo\Resource\App;


use BEAR\Resource\ResourceObject;
use Ray\AuraSqlModule\AuraSqlInject;

class IdTodos extends ResourceObject
{
    use AuraSqlInject;

    public function onGet($status = null)
    {

        if (!empty($status)) {
            $this->body = $this->pdo->fetchAll("SELECT max(id)+1 as id FROM todo");
        } else {
            $this->body = $this->pdo->fetchAll("SELECT * FROM todo");
        }
        return $this;
    }
}
