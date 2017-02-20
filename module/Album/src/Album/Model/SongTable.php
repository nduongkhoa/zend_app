<?php
namespace Album\Model;

use Zend\Db\TableGateway\TableGateway;

class SongTable
{
    protected $tableGateway;

    public function __construct(TableGateway $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        $resultSet = $this->tableGateway->select();
        return $resultSet;
    }

    public function saveSong(Song $song)
    {
        // $data = array(
        //     'artist' => $album->artist,
        //     'title'  => $album->title,
        // );

        // $id = (int)$album->id;
        // if ($id == 0) {
        //     $this->tableGateway->insert($data);
        // } else {
        //     if ($this->getAlbum($id)) {
        //         $this->tableGateway->update($data, array('id' => $id));
        //     } else {
        //         throw new \Exception('Form id does not exist');
        //     }
        // }
    }

    public function deleteSong($id)
    {
        // $this->tableGateway->delete(array('id' => $id));
    }
}
