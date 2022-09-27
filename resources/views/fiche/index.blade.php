<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link " id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Etat civil</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Situation administrative</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Affectation actuelle</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Titre ou diplôme</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Stage et formation</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Distinct honorifique</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Enfants</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Autre</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade  p-3" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <form action="{{route('fiche.store')}}" method="POST">
                            @csrf
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Matricule :</label>
                                        <input type="hidden" name="employer_id" value="{{$info->id}}">
                                        <input type="hidden" name="departement_id" value="{{$info->departement_id}}">
                                        <input type="hidden" name="type_id" value="{{$info->Type_id}}">
                                        <input type="text" value="{{$info->matricule}}" name="Matricule" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Nom :</label>
                                        <input type="text" value="{{$info->nom}}" name="Noms" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Prenoms :</label>
                                        <input type="text" value="{{$info->prenom}}" name="Prenoms" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">date de naissance :</label>
                                        <input type="date" name="DateNaiss" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">lieu :</label>
                                        <input type="text" name="Lieu" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">CIN :</label>
                                        <input type="text" name="CIN" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">du :</label>
                                        <input type="date" name="DateCIN" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Duplicata du :</label>
                                        <input type="date" name="Duplicata" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Fils de:</label>
                                        <input type="text" name="Pere" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">et de :</label>
                                        <input type="text" name="Mere" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Adresse :</label>
                                        <input type="text" name="Adresse" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Telephone :</label>
                                        <input type="text" name="Telephone" value="{{$info->telephone}}" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                </form>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <form action="{{route('fiche.situation')}}" method="POST">
                            @csrf
                            <input type="hidden" name="employer_id" value="{{$info->id}}">
                            <input type="hidden" name="departement_id" value="{{$info->departement_id}}">
                            <input type="hidden" name="type_id" value="{{$info->Type_id}}">
                            <div class="row">
                                <div class="input-groupe mt-3">
                                    <label for="Nom">Date d'entrée dans l'administration  :</label>
                                    <input type="date" name="DateEntre" value="" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Corps :</label>
                                        <input type="text" name="Corps" value="" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">depuis le :</label>
                                        <input type="date" name="DateCorps" value="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">Grade actuel :</label>
                                        <select name="Grade" id="">
                                            <option value="" selected hidden> Sélectionez votre grade actuel</option>
                                            <option value="Stagiaire">Stagiaire</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-groupe mt-3">
                                        <label for="Nom">depuis le :</label>
                                        <input type="date" name="DateGrade" value="" class="form-control">
                                    </div>
                                </div>

                            </div>
                            <div class="row p-2">
                                <label for="Nom">Programme:</label>
                                    <select name="Programme" id="" class="">
                                        <option value="" selected hidden> Sélectionez votre programme</option>
                                        <option value="INDUSTRIE">INDUSTRIE</option>
                                        <option value="COMMERCE">COMMERCE</option>
                                    </select>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <button class="btn btn-outline-primary float-end" type="submit"> Sauvegarder </button>
                                </form>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function apina(){
            var a = document.getElementById('apina');
            $('#apina').append(
                '<tr class="text-center midi">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input type="text" name="direction[]" required></th>\
                    <th><input type="text" name="service[]" required></th>\
                    <th><input type="text" name="fonction[]" required></th>\
                    <th><input type="date" style="width: 150px" name="debut[]" required>&nbsp;au&nbsp;<input type="date" name="fin[]" style="width: 150px" required></th>\
                    <th class="align-middle"><a href="#" class="remove"><i class="fa-solid fa-trash p-2 " style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            );
            $('.remove').click(function (e) {
                $(this).closest('.midi').remove()

            });
        }

        function apinaDipl(){
            $('#dipl').append(
                ' <tr class="text-center ferme">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input type="text" name="diplome[]"  style="width: 300px" required></th>\
                    <th><input type="text" name="etab[]" style="width: 300px" required></th>\
                    <th><input type="date" name="obtenue[]" style="width: 300px" required></th>\
                    <th class="align-middle"><a href="#"  class="removedipl" disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            )
            $('.removedipl').click(function (e) {
                $(this).closest('.ferme').remove()

            });
        }

        function apinaStage(){
            $('#stagee').append(
                '<tr class="text-center st">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input type="text" name="nature[]" required></th>\
                    <th><input type="text" name="objet[]" required></th>\
                    <th><input type="text" name="lieu[]" required></th>\
                    <th><input type="text" name="dure" required></th>\
                    <th><input type="date" name="anne" required></th>\
                    <th class="align-middle"><a href="#"  class="removestage" disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            )
            $('.removestage').click(function (e) {
                $(this).closest('.st').remove()

            });
        }

        function dis(){
            $('#dist').append(
                '<tr class="text-center dd">\
                    <input type="hidden" value="{{$info->id}}" name="employer_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->departement_id}}" name="departement_id[]" class="form-control" readonly>\
                    <input type="hidden" value="{{$info->Type_id}}" name="type_id[]" class="form-control" readonly>\
                    <th><input type="text" style="width: 400px" name="grade[]" required></th>\
                    <th><input type="text" style="width: 400px" name="obtention[]" required></th>\
                    <th><input type="date" name="date[]" required></th>\
                    <th class="align-middle"><a href="#"  class="removedd" disabled><i class="fa-solid fa-trash p-2" style="background: rgb(191, 29, 29);color:white"></i></a></th>\
                </tr>'
            )
            $('.removedd').click(function (e) {
                $(this).closest('.dd').remove()

            });
        }
    </script>
</x-app-layout>
