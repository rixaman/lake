<?php defined('SYSPATH') or die('No direct script access.');

class Model_Article extends Model
{
    // выбираем таблицу по названию из базу данных
    protected $_tableName = 'articles';

    // Из базы таблицы articles берём все записи
    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_tableName ." order by `id` desc";

        return DB::query(Database::SELECT, $sql)
            ->execute();
    }

    //
    public function get_article($id = '')
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
    // сохраням новость
    public function save_article($article, $id = NULL)
    {
        // если статья существует, то обновляем, если нет, то создаём
        if($id != NULL)
        {
            $sql = "update ". $this->_tableName ." set `content_full` = :content_full, `content_short` = :content_short, `title` = :title, `url` = :url where `id` = :id";
            list($insert_id, $affected_rows) = DB::query(Database::UPDATE, $sql, FALSE)
                ->param(':id', (int)$id)
                ->param(':title', (string)$article['title'])
                ->param(':url', (string)$article['url'])
                ->param(':content_short', (string)$article['content_short'])
                ->param(':content_full', (string)$article['content_full'])
                ->execute();
            $result = $affected_rows;
        }
        else
        {
            $sql = "insert into ". $this->_tableName ."(`url`, `title`, `content_short`, `content_full`) values (:url, :title, :content_short, :content_full)";
            $result = DB::query(Database::UPDATE, $sql, FALSE)
                ->param(':title', (string)$article['title'])
                ->param(':url', (string)$article['url'])
                ->param(':content_short', (string)$article['content_short'])
                ->param(':content_full', (string)$article['content_full'])
                ->execute();
        }
        return $result;
    }
    // удаляем новость
    public function delete_article($id)
    {
        $sql = "delete from ". $this->_tableName ." where `id` = :id";
        $result = DB::query(Database::DELETE, $sql, FALSE)
            ->param(':id', (int)$id)
            ->execute();;
        return $result;
    }
}