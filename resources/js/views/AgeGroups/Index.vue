<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Grupo Etario</h1>
        
        <router-link :to="{name: 'CreateAgeGroup'}" class="btn bnt-info">Crear</router-link>
            
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
            
              <tr v-for="ageGroup in ageGroups" :key="ageGroup.id">

                  <td>{{ageGroup.name}}</td>
                                  
                  <td class="">
                    <router-link class="btn-options"  :to="{name: 'EditAgeGroup', params:{id:ageGroup.id}}">Editar</router-link>
                    <a href="#" class="btn-options" @click.prevent="destroy(ageGroup)">Eliminar</a>
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
import api from "../../containers/AgeGroup";
import datatables from "datatables";


export default {
  data() {
    return {
      ageGroups: {},
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
        this.ageGroups = data;
      }).finally(this.datatable())
    },
    destroy(ageGroup){
      const id = ageGroup.id;
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

