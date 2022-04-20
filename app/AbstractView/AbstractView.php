<?php

namespace App\AbstractView;

class AbstractView
{
    // PREFIXS
    const QTD_SEEDER = ['qtd_1' => 5, 'qtd_2' => 10, 'qtd_3' => 4, 'qtd_4' => 6];
    const VIEW = [
        0 => 'Error: Nome Não Existe',
        1 => 'navbar',
        2 => 'topbar',
        3 => 'sectionone',
        4 => 'page_1',
        5 => 'admin',
        6 => 'sectionthree',
        7 => 'progress',
        8 => 'score',
        9 => 'sectionfour',
        10 => 'title',
        11 => 'sectionfive',
        12 => 'collectionsimages',
        13 => 'sectionsix',
        14 => 'sectionseven',
        15 => 'contact'
    ];

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

    public function setSectionFive(): string
    {
        $this->title = 'Seção 5';
        $this->index = 'sectionfive.index';
        $this->create = 'sectionfive.create';
        $this->show = 'sectionfive.show';
        $this->edit = 'sectionfive.edit';
        $this->delete = 'sectionfive.destroy';

        return true;
    }

    public function setSectionSix(): string
    {
        $this->title = 'Seção 6';
        $this->index = 'sectionsix.index';
        $this->create = 'sectionsix.create';
        $this->show = 'sectionsix.show';
        $this->edit = 'sectionsix.edit';
        $this->delete = 'sectionsix.destroy';

        return true;
    }

    public function setSectionSeven(): string
    {
        $this->title = 'Seção 7';
        $this->index = 'sectionseven.index';
        $this->create = 'sectionseven.create';
        $this->show = 'sectionseven.show';
        $this->edit = 'sectionseven.edit';
        $this->delete = 'sectionseven.destroy';

        return true;
    }

    public function setCollectionsImages(): string
    {
        $this->title = 'Coleção de Imagens';
        $this->index = 'collectionsimages.index';
        $this->create = 'collectionsimages.create';
        $this->show = 'collectionsimages.show';
        $this->edit = 'collectionsimages.edit';
        $this->delete = 'collectionsimages.destroy';

        return true;
    }

    public function setContact()
    {
        $this->title = 'Contatos';
        $this->index = 'contact.index';
        $this->create = 'contact.create';
        $this->show = 'contact.show';
        $this->edit = 'contact.edit';
        $this->delete = 'contact.destroy';

        return true;
    }

    public function setPost()
    {
        $this->title = 'Postes';
        $this->index = 'post.index';
        $this->create = 'post.create';
        $this->show = 'post.show';
        $this->edit = 'post.edit';
        $this->delete = 'post.destroy';

        return true;
    }

    public function setSectionTwo()
    {
        $this->title = 'Seção 2';
        $this->index = 'sectiontwo.index';
        $this->create = 'sectiontwo.create';
        $this->show = 'sectiontwo.show';
        $this->edit = 'sectiontwo.edit';
        $this->delete = 'sectiontwo.destroy';

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

    public function getConstViewValidation($name)
    {
        // return redirect()->back();
        try {
            $view = self::VIEW[$name];
            $msg = alert()->success('Sucesso ao acessar a view!');
            return response()->json([
                'status'   => 'success',
                'message'  => $msg,
                'data' => $view[$name]
            ], 500);
        } catch (\Exception $e) {
            alert()->error('Error: Tentando acessar um Nome que Não Existe');
            return response()->json([
                'status'   => 'error',
                'message'  => $e->getMessage(),
                'data' => null
            ], 500);
        }
    }

    // percorre todo array
    public static function loopThroughArray($data): array
    {
        return [
            1 => $data[0] ?? null,
            2 => $data[1] ?? null,
            3 => $data[2] ?? null,
            4 => $data[3] ?? null,
            5 => $data[4] ?? null,
            6 => $data[5] ?? null,
            7 => $data[6] ?? null,
            8 => $data[7] ?? null,
            9 => $data[8] ?? null,
            10 => $data[9] ?? null,
        ];

    }

    // seleciona a informação do array que quiser
    public static function getInfoFromArray($data, $position_1, $info_1, $position_2 = null, $info_2 = null,
                                            $position_3 = null, $info_3 = null, $position_4 = null, $info_4 = null,
                                            $position_5 = null, $info_5 = null, $position_6 = null, $info_6 = null,
                                            $position_7 = null, $info_7 = null, $position_8 = null, $info_8 = null,
                                            $position_9 = null, $info_9 = null, $position_10 = null, $info_10 = null): array
    {
        $getUnique = AbstractView::loopThroughArray($data);

        return [
            $getUnique[$position_1][$info_1] ?? null,
            $getUnique[$position_2][$info_2] ?? null,
            $getUnique[$position_3][$info_3] ?? null,
            $getUnique[$position_4][$info_4] ?? null,
            $getUnique[$position_5][$info_5] ?? null,
            $getUnique[$position_6][$info_6] ?? null,
            $getUnique[$position_7][$info_7] ?? null,
            $getUnique[$position_8][$info_8] ?? null,
            $getUnique[$position_9][$info_9] ?? null,
            $getUnique[$position_10][$info_10] ?? null,
        ];

    }

}
