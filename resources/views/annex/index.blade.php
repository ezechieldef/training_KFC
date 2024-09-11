@include('annex.create', ['annex' => null])
@foreach ($entreprise->annexes as $annex)
    @include('annex.edit', ['annex' => $annex])
@endforeach
{{-- <script>
    openEditModal = (id) => {
        let annex = @json($entreprise->annexes);

        let data = annex.find((annex) => annex.id == id);
        // console.log(data);
        // document.getElementById('edit_annexe_id').value = data.id;
        // document.getElementById('edit_manager_id').value = data.manager_id;
        // document.getElementById('edit_nom').value = data.nom;
        // document.getElementById('edit_ville').value = data.ville;
        // document.getElementById('edit_modalEditAnnexe').click();
    }
</script> --}}


<div class="card">
    <div class="card-body">
        <div style="display: flex; justify-content: space-between; align-items: center;">

            <span id="card_title">

                <h5 class="card-title fw-semibold mb-4">Liste des {{ __('Annexes') }}</h5>
            </span>

        </div>
        <div class="d-flex justify-content-end">

            <button class="btn btn btn-primary btn-sm float-right " data-bs-toggle="modal"
                data-bs-target="#modalNewAnnexe">
                Nouveau
            </button>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success m-4">
                <p>{{ $message }}</p>
            </div>
        @endif


        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        <th>No</th>
                        <th>Manager</th>
                        <th>Nom</th>
                        <th>Ville</th>

                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($annexes as $annex)
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $annex->manager->nom . ' ' . $annex->manager->prenom }}</td>
                            <td>{{ $annex->nom }}</td>
                            <td>{{ $annex->ville }}</td>

                            <td>
                                <div class="dropdown">
                                    <button id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"
                                        class="rounded-circle btn-transparent btn-sm px-1 btn shadow-none">
                                        <i class="ti ti-dots-vertical fs-7 d-block"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1"
                                        style="">
                                        {{-- <li><a class="dropdown-item" href="{{ route('annexes.show', $annex->id) }}">
                                                <i class="ti ti-eye me-2"></i> Détails</a>
                                        </li> --}}
                                        <li>
                                            <a class="dropdown-item"
                                                data-bs-target="#modalEditAnnexe{{ $annex->id }}"
                                                data-bs-toggle="modal"> <i class="ti ti-edit me-2"></i> Modifier</a>
                                        </li>
                                        <li>
                                            <form action="{{ route('annexes.destroy', $annex->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="dropdown-item"
                                                    onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;"><i
                                                        class="ti ti-trash text-danger me-2"></i>Supprimer</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{!! $annexes->withQueryString()->links() !!}
