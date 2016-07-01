<?php

trait ReferensiTableSeederTrait
{
    protected function readCSV($filename)
    {
        return Excel::load(storage_path($filename, function($reader) {}))->get();
    }
}
