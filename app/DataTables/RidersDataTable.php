<?php

namespace App\DataTables;

use App\Models\Rider;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\WithExportQueue;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;

class RidersDataTable extends DataTable
{
    use WithExportQueue;

    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('action', function ($item) {
                $view_icon = "<i class='fa fa-eye' aria-hidden='true'></i></a>";
                $edit_icon = "<i class='fa fa-pencil' aria-hidden='true'></i></a>";
                $actions = '<a class href="'.route('riders.show', $item->id).'">'.$view_icon.'</a> | ';
                $actions .= '<a class href="'.route('riders.edit', $item->id).'">'.$edit_icon.'</a> ';
            
                return $actions;
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Rider $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('riders-table')
                    ->columns($this->getColumns())
                    ->parameters([
                        'buttons' => ['export'],
                    ])
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                  
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            // Column::computed('action')
            //       ->exportable(false)
            //       ->printable(false)
            //       ->width(60)
            //       ->addClass('text-center'),
            // Column::make('id'),
            // Column::make('add your columns'),
            // Column::make('created_at'),
            // Column::make('updated_at'),

            Column::computed('action')
                ->exportable(true)
                ->printable(true)
                ->width(100)
                ->addClass('text-center'),
            Column::make('name'),
            Column::make('email'),
            Column::make('phone_number'),
            // Column::make('gender'),
            // Column::make('nationality'),
            Column::make('address'),
            Column::make('created_at'),   
            // Column::make('updated_at'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Riders_' . date('YmdHis');
    }
}
