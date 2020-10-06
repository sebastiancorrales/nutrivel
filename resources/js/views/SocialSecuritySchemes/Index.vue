<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Regimen de Seguridad Social</h1>
        
        <router-link :to="{name: 'CreateSocialSecurityScheme'}" class="btn bnt-info">CREAR REGIMEN</router-link>
            
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
            
              <tr v-for="data in datas" :key="data.id">

                  <td>{{data.name}}</td>
                                  
                  <td class="">
                    <router-link class="btn-options"  :to="{name: 'EditSocialSecurityScheme', params:{id:data.id}}">Editar</router-link>
                    <a href="#" class="btn-options" @click.prevent="destroy(data)">Eliminar</a>
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
import api from "../../containers/SocialSecurityScheme";
import datatables from "datatables";


export default {
  data() {
    return {
      datas: {},
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
        this.datas = data;
      }).finally(this.datatable())
    },
    destroy(data){
      const id = data.id;
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

