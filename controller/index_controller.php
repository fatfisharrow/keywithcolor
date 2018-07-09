<?php
class index_controller {
    public function report_action() {
        dump_var($_REQUEST);
        dump_var($_SERVER);
        $rip = $_SERVER["REMOTE_ADDR"];
        file_put_contents("/tmp/redirection", $rip);
    }

    public function where_action() {
        $s = file_get_contents("/tmp/redirection");
        echo $s;
    }
}













