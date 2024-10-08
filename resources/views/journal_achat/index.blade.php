@push('scripts')

@endpush

<x-app-layout :assets="$assets ?? []">
<div>
   <div class="row">
      <div class="col-sm-12">
         <div class="card">
         <div class="card-header d-flex justify-content-between">
               <div class="header-title">
                  <h4 class="card-title mb-0">Journal d'achat</h4>
               </div>
               <div class="text-center ms-3 ms-lg-0 ms-md-0">
                    <a href="#" class="mt-lg-0 mt-md-0 mt-3 btn btn-primary btn-icon" data-bs-toggle="tooltip" data-modal-form="form" data-icon="person_add" data-size="small" data--href="{{ route('achat.create') }}" data-app-title="Ajouter un Achat" data-placement="top" title="Nouveau Achat">
                        <i class="btn-inner">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </i>
                        <span>Nouveau Achat</span>
                    </a>
                  
               </div>
            </div>
            <div class="card-body px-0">
               <div class="table-responsive">
               {!! $dataTable->table(['class' => 'table table-bordered table-striped table-hover']) !!}
               </div>
               <!-- Modal -->
                   <!-- Modal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editModalLabel">Modifier Achat</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Le contenu du formulaire sera chargé ici -->
            </div>
        </div>
    </div>
</div>


            </div>
         </div>
      </div>
   </div>
</div>

@push('scripts')
        {!! $dataTable->scripts() !!}
    @endpush
</x-app-layout>

<script>
    $(document).on('click', '.edit-btn', function(e) {
        e.preventDefault();
        var url = $(this).data('url');  // Récupérer l'URL de l'action d'édition

        // Charger le contenu du formulaire via AJAX
        $.ajax({
            url: url,
            type: 'GET',
            success: function(data) {
                $('#editModal .modal-body').html(data);  // Insérer le formulaire dans le modal
                $('#editModal').modal('show');  // Ouvrir le modal
            },
            error: function() {
                alert('Une erreur est survenue.');
            }
        });
    });
</script>


