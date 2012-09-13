<?php defined('SYSPATH') or die('No direct script access.');

class Model_Static extends Model
{
    protected $_tableName = 'static';

    public function get_static($url)
    {
        $sql = "select * from ".$this->_tableName ." WHERE `url` = :url";
        
        $query = DB::query(Database::SELECT, $sql, FALSE)
            ->param(':url', (string)$url)
            ->execute();

        $result = $query->as_array();

        if($result)
            return $result[0];
        else
            return FALSE;
    }
    // изменяем сохраняем статическую страницу
    public function set_static($url, $title, $content)
    {
            $sql = "update ". $this->_tableName ." set `content` = :content, `title` = :title WHERE `url` = :url";
            list($insert_id, $affected_rows) = DB::query(Database::UPDATE, $sql, FALSE)
                ->param(':url', (string)$url)
                ->param(':title', (string)$title)
                ->param(':content', (string)$content)
                ->execute();
            $result = $affected_rows;
        
        return $result;
    }
}