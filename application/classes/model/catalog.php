<?php defined('SYSPATH') or die('No direct script access.');

class Model_Catalog extends Model
{
    protected $_tableName = 'catalog';

    // Из базы таблицы items берём все записи
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_tableName;

        return DB::query(Database::SELECT, $sql)
            ->execute();
    }

    //
    public function get_item($id = '')
    {
        $sql = "SELECT * FROM ". $this->_tableName ." where `id` = :id";

        $query = DB::query(Database::SELECT, $sql, FALSE)
            ->param(':id', (int)$id)
            ->execute();

        $result = $query->as_array();

        if($result)
            return $result[0];
        else
            return FALSE;
    }
    // сохраням товар
    public function save_item($item, $id = NULL)
    {
        if($id != NULL)
        {
            $sql = "update ". $this->_tableName ." set `content` = :content, `title` = :title, `url` = :url where `id` = :id";
            list($insert_id, $affected_rows) = DB::query(Database::UPDATE, $sql, FALSE)
                ->param(':id', (int)$id)
                ->param(':title', (string)$item['title'])
                ->param(':url', (string)$item['url'])
                ->param(':content', (string)$item['content'])
                ->execute();
            $result = $affected_rows;
        }
        else
        {
            $sql = "insert into ". $this->_tableName ."(`url`, `title`, `content`) values (:url, :title, :content)";
            $result = DB::query(Database::UPDATE, $sql, FALSE)
                ->param(':title', (string)$item['title'])
                ->param(':url', (string)$item['url'])
                ->param(':content', (string)$item['content'])
                ->execute();
        }
        return $result;
    }
    // удаляем товарчик
    public function delete_item($id)
    {
        $sql = "delete from ". $this->_tableName ." where `id` = :id";
        $result = DB::query(Database::DELETE, $sql, FALSE)
            ->param(':id', (int)$id)
            ->execute();;
        return $result;
    }
}