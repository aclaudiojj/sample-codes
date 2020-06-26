<?php

class Controller
{
    public function saveData($data) : void
    {
        $valid = $this->validator->isValid($data);

        if ($valid) {
            $this->model->setValid(true);
        }

        $this->model->saveData($data);
    }
}

class Model
{
    private $valid;

    public function setValid(bool $isValid)
    {
        $this->valid = $isValid;
    }

    public function saveData($data) {
        if (! $this->isValid) {
            return;
        }

        $this->save($data)
    }
}
