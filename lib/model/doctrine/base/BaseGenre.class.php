<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Genre', 'doctrine');

/**
 * BaseGenre
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property string $name
 * @property Doctrine_Collection $SongGenres
 * 
 * @method integer             getId()         Returns the current record's "id" value
 * @method string              getName()       Returns the current record's "name" value
 * @method Doctrine_Collection getSongGenres() Returns the current record's "SongGenres" collection
 * @method Genre               setId()         Sets the current record's "id" value
 * @method Genre               setName()       Sets the current record's "name" value
 * @method Genre               setSongGenres() Sets the current record's "SongGenres" collection
 * 
 * @package    streeme
 * @subpackage model
 * @author     Richard Hoar
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGenre extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('genre');
        $this->hasColumn('id', 'integer', null, array(
             'type' => 'integer',
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));

        $this->option('collate', 'utf8_unicode_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('SongGenres', array(
             'local' => 'id',
             'foreign' => 'genre_id'));
    }
}