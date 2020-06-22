<?php
namespace Polidog\Todo\Resource\Page;


use BEAR\Resource\ResourceObject;
use BEAR\Sunday\Inject\ResourceInject;
use Polidog\Todo\Resource\App\Todo;

class Delete extends ResourceObject
{
    use ResourceInject;

    public function onGet($id)
    {

error_log("[". date('Y-m-d H:i:s') . dirname(__DIR__). "にてゲット_Delete.php\n" , 3, "/var/app/current/log/debug.log");

        /** @var ResourceObject $res */
        $res = $this->resource
            ->delete
            ->uri('app://self/todo')
            ->withQuery([
                'id' => $id,
                'status' => Todo::COMPLETE
            ])
            ->eager
            ->request();
            ;

        if ($res->code == 202) {
            $this->code = 301;
            $this->headers['Location'] = "/";
            return $this;
        }


        $this->code = $res->code;
        return $this;
    }
}
