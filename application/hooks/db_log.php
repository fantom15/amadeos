<?php
class Db_log
{

    function __construct()
    {
    }


    function logQueries()
    {
        $CI = &get_instance();

        $filepath = APPPATH . 'logs/sql_query_logs/Query-log-' . date('Y-m-d') . '.php';
        $handle = fopen($filepath, "a+");

        $times = $CI->db->query_times;
        foreach ($CI->db->queries as $key => $query) {
            $sql = '-------------------------------------';
            $sql .= PHP_EOL;
            $sql .= $query . " \n Execution Time:" . $times[$key];

            fwrite($handle, $sql . "\n\n");
        }

        fclose($handle);
    }
}
