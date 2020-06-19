<?php
namespace Polidog\Todo\Resource\App;


use BEAR\Resource\ResourceObject;
use Ray\AuraSqlModule\AuraSqlInject;

class TodoEdit extends ResourceObject
{
    use AuraSqlInject;

    public function onGet($id = null)
    {

        if (!empty($id)) {
            $this->body = $this->pdo->fetchAll("SELECT * FROM todo WHERE id = :id",[
                'id' => $id
            ]);
        } else {
            $this->body = $this->pdo->fetchAll("SELECT * FROM todo");
        }
        return $this;
    }

    public function onPost($id, $title)
    {
        $sql = "UPDATE todo SET title = :title WHERE id = :id";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([
            'id' => $id,
            'title' => $title
        ]);
        $this->code = 202;
        $this->headers['location'] = '/todo/?id=' . $id;
    }
}
