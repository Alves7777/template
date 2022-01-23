<?php

namespace App\DataTables;

use App\Models\SectionSix\SectionSix;
use Okipa\LaravelTable\Abstracts\AbstractTable;
use Okipa\LaravelTable\Table;

class SectionSixTable extends AbstractTable
{
    protected function table(): Table
    {
        return (new Table())->model(SectionSix::class)
            ->routes([
                'index' => ['name' => 'sectionsfix.index'],
//                'create' => ['name' => 'sectionsfix.create'],
//                'edit' => ['name' => 'sectionsfix.edit'],
//                'destroy' => ['name' => 'sectionsfix.destroy'],
            ])
            ->destroyConfirmationHtmlAttributes(fn(SectionSix $user) => [
                'data-confirm' => __('Are you sure you want to delete the user :name ?', [
                    'name' => $user->sections_sixes
                ])
            ]);
    }

    protected function columns(Table $table): void
    {
        $table->column('id')->sortable(true);
        $table->column('sub_title')->sortable()->searchable();
        $table->column('text')->sortable()->searchable();
        $table->column('created_at')->dateTimeFormat('d/m/Y H:i')->sortable();
        $table->column('updated_at')->dateTimeFormat('d/m/Y H:i')->sortable();
    }
}
