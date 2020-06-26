<?php

class Controller
{
    public function saveData($data) : void
    {
        $this->model->saveData($data);
    }
}

class Model
{
    private $validator;

    public function saveData($data) {
        if (! $this->validator->isValid($data)) {
            return;
        }

        $this->save($data)
    }
}
