<?php

namespace App\AbstractView;

class AbstractView
{
    // PREFIXS
    const QTD_SEEDER = ['qtd_1' => 5, 'qtd_2' => 10, 'qtd_3' => 4, 'qtd_4' => 6];
    const VIEWS = ['Seção 3' => 'sectionthree', 'Progresso' => 'progress', 'Contagem' => 'score', 'Seção 4' => 'sectionfour',
        'Titulo' => 'title'];

    // CRUDS
    public string $title, $index, $create, $show, $edit, $delete;

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

    public function setScore(): string
    {
        $this->title = 'Contagem';
        $this->index = 'score.index';
        $this->create = 'score.create';
        $this->show = 'score.show';
        $this->edit = 'score.edit';
        $this->delete = 'score.destroy';

        return true;
    }

    public function setSectionFour(): string
    {
        $this->title = 'Seção 4';
        $this->index = 'sectionfour.index';
        $this->create = 'sectionfour.create';
        $this->show = 'sectionfour.show';
        $this->edit = 'sectionfour.edit';
        $this->delete = 'sectionfour.destroy';

        return true;
    }

    public function setTitle(): string
    {
        $this->title = 'Título';
        $this->index = 'title.index';
        $this->create = 'title.create';
        $this->show = 'title.show';
        $this->edit = 'title.edit';
        $this->delete = 'title.destroy';

        return true;
    }

    // LÓGICAS
    public function getValidation($data = null, $qtdMax = null): string
    {
        if ($data->count() > $qtdMax) {
            throw new \ErrorException();
        }

        return true;
    }

}






