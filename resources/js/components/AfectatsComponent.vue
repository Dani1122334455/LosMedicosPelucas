<template>
<main>

<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
    <div class="py-4 px-3 mb-4 bg-light">
        <div class="media d-flex align-items-center"><img src="logo.png" alt="..." width="65" class="mr-3 rounded-circle img-thumbnail shadow-sm">
            <div class="media-body">
                <h4 class="m-0">Isartus</h4>
                <p class="font-weight-light text-muted mb-0">Administrativo</p>
            </div>
        </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Funciones</p>

    <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
            <a href="incidencies" class="nav-link text-dark font-italic bg-light">
                <i class="fas fa-exclamation-triangle mr-3 text-primary fa-fw"></i>
                Incidencies
            </a>
        </li>
        <li class="nav-item">
            <a href="alertants" class="nav-link text-dark font-italic bg-light">
                <i class="fa fas fa-tty mr-3 text-primary fa-fw"></i>
                Alertants
            </a>
        </li>
        <li class="nav-item">
            <a href="afectats" class="nav-link text-dark font-italic bg-light">
                <i class="fa fas fa-crutch mr-3 text-primary fa-fw"></i>
                Afectats
            </a>
        </li>
        <li class="nav-item">
            <a href="municipis" class="nav-link text-dark font-italic bg-light">
                <i class="fa fas fa-building mr-3 text-primary fa-fw"></i>
                Municipis
            </a>
        </li>
        <li class="nav-item">
            <a href="comarques" class="nav-link text-dark font-italic bg-light">
                <i class="fa fas fa-route mr-3 text-primary fa-fw"></i>
                Comarques
            </a>
        </li>
        <li class="nav-item">
            <a href="logout" class="nav-link text-dark font-italic bg-light">
                <i class="fas fa-sign-out-alt mr-3 text-primary fa-fw"></i>
               Cerrar Sesion
            </a>
        </li>
    </ul>
</div>
<!-- End vertical navbar -->

<div class="page-content p-6" id="content">
<div class="container-fluid">
    <button id="sidebarCollapse" type="button" style="margin-top: 10px;" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-2"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Menu</small></button>
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
                            <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i> Cercar</button>
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
                        <td>{{ afectat.sexes.sexe }}</td>
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
</div>


<!-- <a href="{{ url('afectats/create') }}" class="btn btn-primary mt-2 mb-2"  style="float: right"><i class="fa fa-plus-circle"
    aria-hidden="true"></i> Nou afectat</a> -->
<button class="btn btn-primary mt-2 mb-2" style="float: right; position: fixed;
            right: 20px;
            bottom: 20px;" @click="createAfectat()">
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
        <button type="button" class="btn btn-secondary"  data-dismiss="modal">Tancar</button>
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
                        v-model="afectat.telefon" ref="telefon">
              </div>
            </div>
            <div class="form-group row">
                <label for="cip" class="col-sm-1 col-form-label">CIP</label>
                <div class="col-sm-11">
                  <input type="text" class="form-control" id="cip" name="cip" v-model="afectat.cip" ref="cip">
                </div>
            </div>
            <div class="form-group row">
                <label for="nom" class="col-sm-1 col-form-label">Nom</label>
                <div class="col-sm-11">
                  <input type="text" class="form-control" id="nom" name="nom" v-model="afectat.nom" ref="nom">
                </div>
            </div>
            <div class="form-group row">
                <label for="cognoms" class="col-sm-1 col-form-label">Cognoms</label>
                <div class="col-sm-11">
                  <input type="text" class="form-control" id="cognoms" name="cognoms" v-model="afectat.cognoms" ref="cognoms">
                </div>
            </div>
            <div class="form-group row">
              <label for="edat" class="col-sm-1 col-form-label">Edat</label>
              <div class="col-sm-11">
                <input type="text" class="form-control" id="edat" name="edat"
                maxlength="2" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                        v-model="afectat.edat" ref="edat">
              </div>
            </div>
            <div class="form-group row">
                <label for="sexes_id" class="col-sm-1 col-form-label">Sexe</label>
                <div class="col-sm-11 mt-2">
                    <select ref="seleccionado" class="form-control" v-model="afectat.sexes_id">
                        <option v-for="sexesR in sexes" :key="sexesR.id" :value="sexesR.id"
                        :selected="sexesR.id ==  afectat.sexes_id">{{ sexesR.sexe }}</option>
                    </select>
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
    window.onload = function() {
        $('#sidebar, #content').toggleClass('active');
    }

    export default {
        data(){
            return{
                sexes: [{
                    id: '1',
                    sexe: 'Home'
                },
                {
                    id: '2',
                    sexe: 'Dona'
                },
                ],

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
                this.afectat = {
                    id: '',
                    telefon: '',
                    cip: '',
                    nom: '',
                    cognoms: '',
                    edat: '',
                    te_cip: '',
                    sexes_id: ''
                };
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
                this.seleccionado = this.$refs.seleccionado.value;
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
