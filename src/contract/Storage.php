<?php


namespace thans\jwt\contract;

interface Storage
{
    public function set($key, $time = 0);

    public function get($key);

    public function delete($key);
}
