<?php

namespace App\DataTables;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
       return (new EloquentDataTable($query))->addColumn('action', function ($user) {
                return view('users.actions', compact('user'));
            })->rawColumns(['action']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(User $model): QueryBuilder
    {
        $query = User::query();
        return $this->applyScopes($query);
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('users-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->dom('Bfrtip')
            ->orderBy(1)
            ->searching(true)
            ->responsive(false)
            ->serverSide(true)
            ->processing(false)
            // ->scrollY(true)
            // ->scrollX(true)
            ->pageLength(25)
            ->parameters([
                "bFilter" => true,
                "bPaginate" => true,
                'headerCallback' => 'function(thead, data, start, end, display) {
                    $(thead).find(\'th\').each(function() {
                        var originalContent = $(this).text().trim();
                        $(this).html(\'<span class="td_span">\' + originalContent + \'</span>\');
                    });
                }',
                'oLanguage' => [
                    'sZeroRecords' => "No Data",
                ],
                "initComplete" => "function() {
                    $('#users-table').wrap('<div class=\"custom-responsive-table\"></div>');
                    $('button.dt-button.buttons-collection.buttons-page-length').css('display', 'block');
                }"
            ])
            ->buttons([
                Button::make('pageLength'),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            [
                "data" => "first_name",
                "name" => "first_name",
                "title" => 'First Name',
                "orderable" => true,
                "searchable" => true
            ],
            [
                "data" => "last_name",
                "name" => "last_name",
                "title" => 'Last Name',
                "orderable" => true,
                "searchable" => true
            ],
            [
                "data" => "email",
                "name" => "email",
                "title" => 'Email',
                "orderable" => true,
                "searchable" => true
            ],
            [
                "data" => "date_of_birth",
                "name" => "date_of_birth",
                "title" => 'Date Of Birth',
                "orderable" => true,
                "searchable" => true
            ],
            [
                "data" => "action",
                "name" => "action",
                "title" => 'action',
                "orderable" => false,
                "searchable" => false
            ]
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Users_' . date('YmdHis');
    }
}
