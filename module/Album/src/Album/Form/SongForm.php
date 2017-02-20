<?php
namespace Album\Form;

use Zend\Form\Form;

class SongForm extends Form
{
    public function __construct($name = null)
    {
        // we want to ignore the name passed
        parent::__construct('song');
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name'       => 'id',
            'attributes' => array(
                'type' => 'hidden',
            ),
        ));
        $this->setAttribute('method', 'post');
        $this->add(array(
            'name'    => 'album_name',
            'type'    => 'Zend\Form\Element\Select',
            'options' => array(
                'label'         => 'Album Name',
                // 'value_options' => $this->getOptionsForSelect(),
            ),
        ));

        $this->add(array(
            'name'       => 'artist',
            'attributes' => array(
                'type' => 'text',
            ),
            'options'    => array(
                'label' => 'Artist',
            ),
        ));
        $this->add(array(
            'name'       => 'title',
            'attributes' => array(
                'type' => 'text',
            ),
            'options'    => array(
                'label' => 'Title',
            ),
        ));
        $this->add(array(
            'name'       => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Go',
                'id'    => 'submitbutton',
            ),
        ));
    }

    // public function getOptionsForSelect()
    // {
    //     $data = $this->getAlbumTable()->fetchAll();

    //     $selectData = array();

    //     foreach ($data as $selectOption) {
    //         $selectData[$selectOption->id] = $selectOption->title;
    //     }
    //     \Zend\Debug\Debug::dump($selectData);
    //     return $selectData;
    // }

    // public function getAlbumTable()
    // {
    //     if (!$this->albumTable) {
    //         $sm               = $this->getServiceLocator();
    //         $this->albumTable = $sm->get('Album\Model\AlbumTable');
    //     }
    //     return $this->albumTable;
    // }

}
