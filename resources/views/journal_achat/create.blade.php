{{ Form::open(['route' => 'achat.store', 'method' => 'post']) }}
    <div class="form-group">
        <label class="form-label">Libellé</label>
        {{ Form::text('libelle', old('libelle'), ['class' => 'form-control','id' => 'libelle', 'placeholder' => 'Libellé', 'required']) }}
    </div>
    <div class="form-group">
        <label class="form-label">Débit</label>
        {{ Form::number('debit', old('debit'), ['class' => 'form-control','id' => 'debit', 'placeholder' => 'Débit', 'required']) }}
    </div>
    <div class="form-group">
        <label class="form-label">Crédit</label>
        {{ Form::number('credit', old('credit'), ['class' => 'form-control','id' => 'credit', 'placeholder' => 'Crédit', 'required']) }}
    </div>
    <div class="form-group">
    <label class="form-label">Numero Compte</label>
    <select name="numero_compte" id="numero_compte" class="form-control" required>
        @foreach($comptes as $compte)
            <option value="{{ $compte->id }}"> {{ $compte->numero_compte }} - {{ $compte->intitule_compte }}</option>
        @endforeach
    </select>
</div>

    <div class="form-group">
    <label class="form-label">Année Fiscale</label>
    <select name="annee_fiscale_id" id="annee_fiscale_id" class="form-control" required>
        @foreach($annees as $annee)
            <option value="{{ $annee->id }}">{{ $annee->date_debut }} - {{ $annee->date_fin }}</option>
        @endforeach
    </select>
</div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
{{ Form::close() }}
