<?php

namespace App\AbstractView;

class AbstractView
{
    const QTD_SEEDER = ['qtd_1' => 5, 'qtd_2' => 10];
    const VIEWS = ['Seção 3' => 'sectionthree', 'Progresso' => 'progress'];

    public string $title, $index, $create, $show, $edit, $pattern;

    public function setSectionThree(): string
    {
        $this->title = 'Seção 3';
        $this->index = 'sectionthree.index';
        $this->create = 'sectionthree.create';
        $this->show = 'sectionthree.show';
        $this->edit = 'sectionthree.edit';

        return true;

    }

    public function setProgress(): string
    {
        $this->title = 'Página Progresso';
        $this->index = 'progress.index';
        $this->create = 'progress.create';
        $this->show = 'progress.show';
        $this->edit = 'progress.edit';

        return true;
    }

    public function getValidation($data = null, $qtdMax = null): string
    {
        if ($data->count() > $qtdMax) {
            throw new \ErrorException();
        }

        return true;
    }

}






