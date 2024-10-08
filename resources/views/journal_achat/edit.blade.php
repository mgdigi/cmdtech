{{ Form::open(['route' => ['achat.update', $achat->id], 'method' => 'PUT']) }}
    @csrf

    <div class="form-group">
        <label class="form-label">Libellé</label>
        {{ Form::text('libelle', $achat->libelle, ['class' => 'form-control','id' => 'libelle']) }}
    </div>

    <div class="form-group">
        <label class="form-label">Débit</label>
        {{ Form::number('debit', $achat->debit, ['class' => 'form-control','id' => 'debit']) }}
    </div>

    <div class="form-group">
        <label class="form-label">Crédit</label>
        {{ Form::number('credit', $achat->credit, ['class' => 'form-control','id' => 'credit']) }}
    </div>

    <div class="form-group">
        <label class="form-label">Numero Compte</label>
        <select name="numero_compte" class="form-control">
            @foreach($comptes as $compte)
                <option value="{{ $compte->id }}" {{ $achat->numero_compte == $compte->id ? 'selected' : '' }}>
                    {{ $compte->numero_compte }} - {{ $compte->intitule_compte }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label class="form-label">Année Fiscale</label>
        <select name="annee_fiscale_id" class="form-control">
            @foreach($annees as $annee)
                <option value="{{ $annee->id }}" {{ $achat->annee_fiscale_id == $annee->id ? 'selected' : '' }}>
                    {{ $annee->date_debut }} - {{ $annee->date_fin }}
                </option>
            @endforeach
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Modifier</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
{{ Form::close() }}

