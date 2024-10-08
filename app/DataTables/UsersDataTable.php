<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            
            ->editColumn('role', function($query) {
                return $query->roles->pluck('title')->first() ?? '-';
            })
            ->editColumn('userProfile.company_name', function($query) {
                return $query->userProfile->company_name ?? '-';
            })
            ->editColumn('userProfile.street_addr', function($query) {
                return $query->userProfile->street_addr ?? '-';
            })
            ->editColumn('userProfile.phone_number', function($query) {
                return $query->userProfile->phone_number ?? '-';
            })
            ->editColumn('status', function($query) {
                $status = 'warning';
                switch ($query->status) {
                    case 'active':
                        $status = 'primary';
                        break;
                    case 'inactive':
                        $status = 'danger';
                        break;
                    case 'banned':
                        $status = 'dark';
                        break;
                }
                return '<span class="text-capitalize badge bg-'.$status.'">'.$query->status.'</span>';
            })
            ->editColumn('created_at', function($query) {
                return date('Y/m/d', strtotime($query->created_at));
            })
            ->filterColumn('full_name', function($query, $keyword) {
                $sql = "CONCAT(users.first_name,' ',users.last_name)  like ?";
                return $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->filterColumn('userProfile.company_name', function($query, $keyword) {
                return $query->orWhereHas('userProfile', function($q) use ($keyword) {
                    $q->where('company_name', 'like', "%{$keyword}%");
                });
            })
            ->filterColumn('userProfile.street_addr', function($query, $keyword) {
                return $query->orWhereHas('userProfile', function($q) use ($keyword) {
                    $q->where('street_addr', 'like', "%{$keyword}%");
                });
            })            
            ->filterColumn('userProfile.phone_number', function($query, $keyword) {
                return $query->orWhereHas('userProfile', function($q) use ($keyword) {
                    $q->where('phone_number', 'like', "%{$keyword}%");
                });
            
            })
            ->addColumn('action', 'users.action')
            ->rawColumns(['action','status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $model = User::query()->with(['userProfile', 'roles']); // Charger aussi les rôles des utilisateurs
        return $this->applyScopes($model);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('dataTable')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('<"row align-items-center"<"col-md-2" l><"col-md-6" B><"col-md-4"f>><"table-responsive my-3" rt><"row align-items-center" <"col-md-6" i><"col-md-6" p>><"clear">')
                    ->parameters([
                        "processing" => true,
                        "autoWidth" => false,
                    ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            ['data' => 'id', 'name' => 'id', 'title' => 'id'],
            ['data' => 'full_name', 'name' => 'full_name', 'title' => 'Nom Complet', 'orderable' => false],
            ['data' => 'userProfile.phone_number', 'name' => 'userProfile.phone_number', 'title' => 'Numero telephone'],
            ['data' => 'email', 'name' => 'email', 'title' => 'Email'],
            ['data' => 'role', 'name' => 'role', 'title' => 'Role'], // Nouvelle colonne pour le rôle
            ['data' => 'status', 'name' => 'status', 'title' => 'Status'],
            ['data' => 'userProfile.company_name', 'name' => 'userProfile.company_name', 'title' => 'Entreprise'],
            ['data' => 'userProfile.street_addr', 'name' => 'userProfile.street_addr', 'title' => 'Adresse'],
            ['data' => 'created_at', 'name' => 'created_at', 'title' => 'date adhésion '],
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->searchable(false)
                  ->width(60)
                  ->addClass('text-center hide-search'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Users_' . date('YmdHis');
    }
}
