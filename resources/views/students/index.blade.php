<div class="container">
    <div class="row justify-content-center">

    <div class="card">
                <div class="card-header text-black" style="background-color: #db751b;color:aliceblue;"><div class="col-sm-6 p-0 flex justify-content-lg-start justify-content-center">
                                <h4 class="ml-lg-4">منقطع عن الدراسة</h4>
                            </div>
                            </div>


                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom Complet</th>
                                    <th>Date de Naissance</th>
                                    <th>Code MSSAR</th>
                                    <th>Numéro de Téléphone</th>
                                    <th>Statut</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($certificats as $certificat)
                                    <tr>
                                        <td>{{ $certificat->id }}</td>
                                        <td>{{ $certificat->nom_complet }}</td>
                                        <td>{{ $certificat->date_naissance }}</td>
                                        <td>{{ $certificat->code_mssar }}</td>
                                        <td>{{ $certificat->numero_telephone }}</td>
                                        <td>{{ $certificat->statut }}</td>
                                        <td>
                                            <a href="{{ route('certificats.show', $certificat->id) }}" class="btn btn-info btn-sm">Voir</a>
                                            <form action="{{ route('certificats.destroy', $certificat->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce certificat?')">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
