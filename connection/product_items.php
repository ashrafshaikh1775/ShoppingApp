<?php
class product_items
{
    private $find, $search, $data_get;
    public function __construct($conn, $func, $find, $submit_file)
    {
        if ($submit_file == 'submit_file') {
            if (is_numeric($find)) {
                $this->find = $find;
            } else {
                $this->find = 0;
            }
            $this->search = $conn->mysqli->real_escape_string($find);
            $this->data_get = $conn->select('main_page', '*', null, "product_price <= " . $this->find . " Or product_name LIKE '%" . $this->search . "%'", null, null);
        }
        if ($submit_file == 'load_file') {
            $this->data_get = $conn->select('main_page', '*', null, $find, null, null);
        }
        $func->call_loop($this->data_get);
    }
}
