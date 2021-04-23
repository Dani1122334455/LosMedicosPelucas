<template>
<main>
<div class="container-fluid">
    <div class="card mt-2">
        <h5 class="col-sm-3 mt-3 ml-1">Cercar per...</h5>
        <!-- <form action="{{ action([App\Http\Controllers\AfectatsController::class, 'index']) }}"> -->
            <div class="card-body">
                <div class="form-group row">

                    <label for="cicle" class="col-sm-1 col-form-label">CIP</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="cip" name="cip">
                        </div>

                    <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" id="nom" name="nom">
                        </div>

                    <div class="col-sm-1" style="float: right">
                        <div class="col-sm-1">
                            <button type="submit" class="btn btn-secondary"><i class="fas fa-search"> Cercar</i></button>
                        </div>
                    </div>

                </div>
            <!-- </form> -->
        </div>
    </div>

    <div class="card mt-2 mb-1">
        <div class="card-body">
            <h5 class="card-title">Afectats</h5>
            <table class="table mt-2">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Telefon</th>
                    <th scope="col">CIP</th>
                    <th scope="col">Nom i cognoms</th>
                    <th scope="col">Edat</th>
                    <th scope="col">Sexe</th>
                  </tr>
                </thead>
                <tbody>
                    <tr v-for="afectat in afectats" :key="afectat.id">
                        <td>{{ afectat.id }}</td>
                        <td>{{ afectat.telefon }}</td>
                        <td>{{ afectat.cip }}</td>
                        <td>{{ afectat.nom }}</td>
                        <td>{{ afectat.edat }}</td>
                        <!-- <td>{{ afectat.sexes.sexe }}</td> -->
                        <td>{{ afectat.sexes_id }}</td>
                        <td>
                            <button type="submit" class="btn btn-danger float-right ml-1" @click="confirmDeleteAfectat(afectat)"
                            data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-trash"></i> Esborrar</button>

                            <button type="submit" class="btn btn-secondary float-right ml-1" @click="editAfectat(afectat)"><i class="fas fa-edit"></i> Editar</button>
                        </td>
                    </tr>
                </tbody>
              </table>

        </div>
    </div>


<!-- <a href="{{ url('afectats/create') }}" class="btn btn-primary mt-2 mb-2"  style="float: right"><i class="fa fa-plus-circle"
    aria-hidden="true"></i> Nou afectat</a> -->
<button class="btn btn-primary mt-2 mb-2" style="float: right" @click="createAfectat()">
    <i class="fa fa-plus-circle"
        aria-hidden="true"></i> Nou Afectat
</button>

<!-- Modal de borrar -->

<div class="modal" tabindex="-1" role="dialog" id="deleteModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Esborrar cicle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Estas segur d'esborrar l'afectat  {{ afectat.nom }}?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" @click="deleteAfectat()">Esborrar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Insert/update -->

<div class="modal" tabindex="-1" role="dialog" id="cicleModal">
  <div class="modal-dialog-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Afectat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
            <div class="form-group row">
              <label for="telefon" class="col-sm-1 col-form-label">Telèfon</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" id="telefon" name="telefon"
                maxlength="9" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        v-model="afectat.telefon">
              </div>
            </div>
            <div class="form-group row">
                <label for="cip" class="col-sm-1 col-form-label">CIP</label>
                <div class="col-sm-11">
                  <input type="text" class="form-control" id="cip" name="cip" v-model="afectat.cip">
                </div>
            </div>
            <div class="form-group row">
                <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                <div class="col-sm-11">
                  <input type="text" class="form-control" id="nom" name="nom" v-model="afectat.nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="cognoms" class="col-sm-1 col-form-label">Cognoms</label>
                <div class="col-sm-11">
                  <input type="text" class="form-control" id="cognoms" name="cognoms" v-model="afectat.cognoms">
                </div>
            </div>
            <div class="form-group row">
              <label for="edat" class="col-sm-1 col-form-label">Edat</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" id="edat" name="edat"
                maxlength="2" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        v-model="afectat.edat">
              </div>
            </div>
            <div class="form-group row">
                <label for="sexes_id" class="col-sm-1 col-form-label">Sexe</label>
                <div class="col-sm-11">
                    <input type="text" class="form-control" id="sexes_id" name="sexes_id" v-model="afectat.sexes_id">
                </div>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tancar</button>
        <button v-if="insert" type="button" class="btn btn-primary" @click="insertAfectat()">Afegir</button>
        <button v-else type="button" class="btn btn-primary" @click="updateAfectat()">Modificar</button>
      </div>
    </div>
  </div>
</div>

</div>
</main>
</template>

<script>
    export default {
        data(){
            return{
                afectats: [],
                afectat: {
                    id: '',
                    telefon: '',
                    cip: '',
                    nom: '',
                    cognoms: '',
                    edat: '',
                    te_cip: '',
                    sexes_id: ''
                },
                insert: true
            }
        },
        methods: {
            selectAfectats(){
                let me = this;
                axios
                    .get('/afectats')
                    .then(response => {
                        me.afectats = response.data;
                    })
                    .catch(error => {
                        console.log(error)
                    })
                    // .finally(() => this.loading = false)
            },
            confirmDeleteAfectat(afectat) {
                this.afectat = afectat;
                $('#deleteModal').modal('show');
            },
            deleteAfectat(){
                let me = this;
                axios
                    .delete('/afectats/'+ me.afectat.id)
                    .then(function(response){
                        console.log(response);
                        me.infoMessage = response.data.missatge;
                        me.selectAfectats();
                        $('#deleteModal').modal('hide');
                    }).catch(function(error){
                        me.errorMessage = error.response.data.error;
                        $('#deleteModal').modal('hide');
                    })
            },
            createAfectat(){
                this.insert = true;
                $('#cicleModal').modal('show');
            },
            insertAfectat(){
                let me = this;
                axios
                    .post('/afectats', me.afectat)
                    .then(function(response) {
                        console.log(response);

                        me.selectAfectats();
                        $('#cicleModal').modal('hide');
                    })
                    .catch(function(error) {
                        console.log(error.response.status);
                        console.log(error.response.data);
                        // me.errorMessage = error.response.data.error;
                    })
            },
            editAfectat(afectat){
                this.insert = false;
                this.afectat = afectat;
                $('#cicleModal').modal('show');
            },
            updateAfectat(){
                let me = this;

                axios
                    .put('/afectats/'+ me.afectat.id, me.afectat)
                    .then(function(response) {
                        console.log(response);
                        me.selectAfectats();
                        $('#cicleModal').modal('hide');
                    }).catch(function(error) {
                        console.log(error.response.status);
                        console.log(error.response.data);
                        // me.errorMessage = error.response.data.error;
                    })
            }
        },
        created(){
                this.selectAfectats();
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
