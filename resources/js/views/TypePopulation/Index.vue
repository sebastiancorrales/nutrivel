<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Tipo de Población</h1>
        
        <router-link :to="{name: 'CreateTypePopulation'}" class="btn bnt-info">Crear</router-link>
            
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
            
              <tr v-for="typePopulation in typePopulations" :key="typePopulation.id">

                  <td>{{typePopulation.name}}</td>
                                  
                  <td class="">
                    <router-link class="btn-options"  :to="{name: 'EditTypePopulation', params:{id:typePopulation.id}}">Editar</router-link>
                    <router-link class="btn-options" :to="{name: 'DetailTypePopulation', params:{id:typePopulation.id}}">Detalle</router-link>
                    <a href="#" class="btn-options" @click.prevent="destroy(typePopulation)">Eliminar</a>
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
import api from "../../containers/TypePopulation";
import datatables from "datatables";
import toastr from "toastr";

export default {
  data() {
    return {
      typePopulations: {},
      isLoading: false,
    };
  },
  methods: {
    datatable() {
      $(document).ready(function () {
        $("#table").DataTable({
          searching: false,
          languaje: "spanish",
        });
      });
    },
    get() {
      api
        .get()
        .then((data) => {
          this.typePopulations = data;
        })
        .finally(this.datatable());
    },
    destroy(typePopulation) {
      const id = typePopulation.id;
      api.destroy(id).then((data) => {
        if (data.status === 200) {
          this.get();
          toastr.success("Se ha creado correctamente");
        } else {
          toastr.error(
            "No puede eliminar este registro porque se está usando en otros componentes"
          );
        }
      });
    },
  },
  beforeCreate() {},
  created() {
    this.get();
    console.log("create");
  },
  beforeCreate() {
    console.log("before create");
  },
};
</script>

