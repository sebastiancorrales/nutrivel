<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Convenios</h1>
        
        <router-link :to="{name: 'CreateCovenant'}" class="btn bnt-info">CREAR CONVENIO</router-link>
            
           <div v-if="isLoading">
             cargando...
           </div>

        <table class="table table-striped" id="table" v-else-if="!isLoading">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Acciones</th>
            </tr>
            <tbody>
            
              <tr v-for="covenant in covenants" :key="covenant.id">

                  <td>{{covenant.name}}</td>
                                  
                  <td class="">
                    <router-link class="btn-options"  :to="{name: 'EditCovenant', params:{id:covenant.id}}">Editar</router-link>
                    <a href="#" class="btn-options" @click.prevent="destroy(covenant)">Eliminar</a>
                  </td>
              </tr>

            </tbody>
          </thead>
        </table>

      </div>
    </div>
  </div>
</template>

<script>
import api from "../../containers/Covenant";
import datatables from "datatables";


export default {
  data() {
    return {
      covenants: {},
      isLoading: false,

    };
  },
  methods:{

    datatable(){
      $(document).ready( function () {
        $('#table').DataTable(
          {
            searching: false,
            languaje:"spanish"
          }
        );    
      } );
    },
    get(){
      api.get().then((data) => {
        this.covenants = data;
      }).finally(this.datatable())
    },
    destroy(covenant){
      const id = covenant.id;
      confirm('¿Deseas eliminar este registro?');
          api.destroy(id).then(data => {
              if (data.status === 200) {
                this.get();
              }
          })
    }
  },
  beforeCreate() {
    
  },
  created(){
    this.get()
    console.log("create")
  },
  beforeCreate(){
    console.log("before create")
  }
};
</script>

