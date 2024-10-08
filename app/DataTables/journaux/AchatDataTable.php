<?php

namespace App\DataTables\journaux;

use App\Models\journaux\JournalAchat;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class AchatDataTable extends DataTable
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
    
            ->editColumn('planCompte.numero_compte', function($query) {
                return $query->planCompte->numero_compte ?? '-';
            })
            ->editColumn('anneeFiscale.date_debut', function($query) {
                return $query->anneeFiscale->date_debut ?? '-';
            })
            ->editColumn('anneeFiscale.date_fin', function($query) {
                return $query->anneeFiscale->date_fin ?? '-';
            })
            ->editColumn('created_at', function($query) {
                return date('Y/m/d', strtotime($query->created_at));
            })
            
            ->filterColumn('planCompte.numero_compte', function($query, $keyword) {
                return $query->orWhereHas('planCompte', function($q) use ($keyword) {
                    $q->where('numero_compte', 'like', "%{$keyword}%");
                });
            })
            ->filterColumn('anneeFiscale.date_debut', function($query, $keyword) {
                return $query->orWhereHas('anneeFiscale', function($q) use ($keyword) {
                    $q->where('date_debut', 'like', "%{$keyword}%");
                });
            })  
            ->filterColumn('anneeFiscale.date_fin', function($query, $keyword) {
                return $query->orWhereHas('anneeFiscale', function($q) use ($keyword) {
                    $q->where('date_fin', 'like', "%{$keyword}%");
                });
            })          
            
            ->addColumn('action', function($row) {
                $editUrl = route('achat.edit', $row->id);
                $deleteUrl = route('achat.delete', $row->id);
                $csrfToken = csrf_token();
                return '
                    <button class="btn btn-primary btn-icon edit-btn" data-url="' . $editUrl . '" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
                    <form action="' . $deleteUrl . '" method="POST" style="display:inline-block;">
                        ' . method_field('DELETE') . '
                        <input type="hidden" name="_token" value="' . $csrfToken . '">
                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm(\'Voulez-vous vraiment supprimer cet achat ?\');">Delete</button>
                    </form>
                ';
            })
            ->rawColumns(['action']);
            
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\journaux\JournalAchat $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $model =JournalAchat::query()->with(['planCompte', 'anneeFiscale']); // Charger aussi les rôles des utilisateurs
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
            ['data' => 'created_at', 'name' => 'created_at', 'title' => 'date enregistremennt'],
            ['data' => 'planCompte.numero_compte', 'name' => 'planCompte.numero_compte', 'title' => 'Numero Compte'],
            ['data' => 'libelle', 'name' => 'libelle', 'title' => 'Libelle'],
            ['data' => 'debit', 'name' => 'debit', 'title' => 'Debit'], // Nouvelle colonne pour le rôle
            ['data' => 'credit', 'name' => 'credit', 'title' => 'Credit'],
            ['data' => 'anneeFiscale.date_debut', 'name' => 'anneeFiscale.date_debut', 'title' => 'Date Debut'],
            ['data' => 'anneeFiscale.date_fin', 'name' => 'anneeFiscale.date_fin', 'title' => 'Date fin'],
            
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
        return 'JournalAchat_' . date('YmdHis');
    }
}
