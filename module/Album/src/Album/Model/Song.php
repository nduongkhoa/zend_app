<?php
namespace Album\Model;

use Zend\InputFilter\Factory as InputFactory; // <-- Add this import
use Zend\InputFilter\InputFilter; // <-- Add this import
use Zend\InputFilter\InputFilterAwareInterface; // <-- Add this import
use Zend\InputFilter\InputFilterInterface;

class Song
{
    public $id;
    public $album_id;
    public $artist;
    public $title;

    public function exchangeArray($data)
    {
        $this->id     = (isset($data['id'])) ? $data['id'] : null;
        $this->album_id     = (isset($data['album_id'])) ? $data['album_id'] : null;
        $this->artist = (isset($data['artist'])) ? $data['artist'] : null;
        $this->title  = (isset($data['title'])) ? $data['title'] : null;
    }

    public function getArrayCopy()
    {
        return get_object_vars($this);
    }

    // public function setInputFilter(InputFilterInterface $inputFilter)
    // {
    //     throw new \Exception("Not used");
    // }

    // public function getInputFilter()
    // {
    //     if (!$this->inputFilter) {
    //         $inputFilter = new InputFilter();
    //         $factory     = new InputFactory();

    //         $inputFilter->add($factory->createInput(array(
    //             'name'     => 'id',
    //             'required' => true,
    //             'filters'  => array(
    //                 array('name' => 'Int'),
    //             ),
    //         )));

    //         $inputFilter->add($factory->createInput(array(
    //             'name'       => 'artist',
    //             'required'   => true,
    //             'filters'    => array(
    //                 array('name' => 'StripTags'),
    //                 array('name' => 'StringTrim'),
    //             ),
    //             'validators' => array(
    //                 array(
    //                     'name'    => 'StringLength',
    //                     'options' => array(
    //                         'encoding' => 'UTF-8',
    //                         'min'      => 1,
    //                         'max'      => 100,
    //                     ),
    //                 ),
    //             ),
    //         )));

    //         $inputFilter->add($factory->createInput(array(
    //             'name'       => 'title',
    //             'required'   => true,
    //             'filters'    => array(
    //                 array('name' => 'StripTags'),
    //                 array('name' => 'StringTrim'),
    //             ),
    //             'validators' => array(
    //                 array(
    //                     'name'    => 'StringLength',
    //                     'options' => array(
    //                         'encoding' => 'UTF-8',
    //                         'min'      => 1,
    //                         'max'      => 100,
    //                     ),
    //                 ),
    //             ),
    //         )));

    //         $this->inputFilter = $inputFilter;
    //     }

    //     return $this->inputFilter;
    // }
}
