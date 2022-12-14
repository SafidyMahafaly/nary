<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 style="font-size:20px !important" class="float-start">Liste de vos équipe</h1>
                            <a class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">Nouveaux membre</a>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table table-hover mt-3">
                            <thead>
                                <tr>
                                    <th>IM</th>
                                    <th>Nom</th>
                                    <th>Prenom</th>
                                    <th>Email</th>
                                    <th>Télephone</th>
                                    <th>Fonction</th>
                                    {{-- <th class="text-center">Chef de departement</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipe as $equ)
                                <tr>
                                    <td class="align-middle">{{$equ->matricule}}</td>
                                    <td class="align-middle">{{$equ->nom}}</td>
                                    <td class="align-middle">{{$equ->prenom}}</td>
                                    <td class="align-middle">{{$equ->email}}</td>
                                    <td class="align-middle">{{$equ->telephone}}</td>
                                    <td class="align-middle">{{$equ->fontion}}</td>
                                    <td class="align-middle">
                                        <a href="" class="btn btn-secondary">Fiche</a>
                                        <a href="" class="btn btn-info text-light">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                            @foreach ($departement as $d)


                              <h5 class="modal-title" id="exampleModalLabel">Nouveaux employer du departement : {{$d->nom_dep}} </h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              <form action="{{route('employer.store')}}" method="POST">
                                @csrf
                                    <input type="hidden" name="departement_id" value="{{$d->id}}">
                                    <input type="hidden" name="service_id" value="1">
                                    <input type="hidden" name="statut" value="1">
                                    {{-- <input type="hidden" name="Type_id" value="1"> --}}
                                    <div class="input-groupe mt-2">
                                        <input type="text" name="matricule" class="form-control" placeholder="Matricule" id="">
                                    </div>
                                    <div class="input-groupe mt-2">
                                        <input type="text" name="nom" class="form-control" placeholder="Nom employer" id="">
                                    </div>
                                    <div class="input-groupe mt-2">
                                        <input type="text" name="prenom" class="form-control" placeholder="Prénom employer" id="">
                                    </div>
                                    <div class="input-groupe mt-2">
                                        <input type="text" name="email" class="form-control" placeholder="Email" id="">
                                    </div>
                                    <div class="input-groupe mt-2">
                                        <input type="text" name="telephone" class="form-control" placeholder="Télephone" id="">
                                    </div>
                                    <div class="input-groupe mt-2">
                                        <input type="text" name="fontion" class="form-control" placeholder="Fonction" id="">
                                    </div>
                                    <div class="input-groupe mt-2">
                                        <select name="Type_id" class="form-control" id="">
                                            <option value="" hidden selected>Choisir type d'employer</option>
                                            @foreach ($type as $t)
                                                <option value="{{$t->id}}">{{$t->nom}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="submit" class="btn btn-outline-primary">Enregistrer</button>
                            </div>
                            </form>
                            @endforeach
                          </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
