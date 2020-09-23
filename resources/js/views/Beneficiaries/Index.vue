<template>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Beneficiarios</h1>
        <router-link :to="{name: 'CreateBeneficiary'}" class="btn bnt-info">Crear</router-link>
            
           <div v-if="isLoading">
             cargando...
           </div>
        <table class="table table-striped" id="table">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Edad</th>
              <th scope="col">Programa</th>
              <th scope="col">Acciones</th>
            </tr>
            <tbody>
              <tr v-for="beneficiary in beneficiaries" :key="beneficiary.id">
                  <td>{{beneficiary.first_name}} {{beneficiary.second_name}} {{beneficiary.first_last_name}} {{beneficiary.second_last_name}}</td>
                 <td>{{beneficiary.birthday | calculateAge }}</td>
                 <td>{{beneficiary.document_number}}</td>
              
                
                 
                  <td class="">
                    <!-- <router-link class="btn-options"  :to="{name: 'EditTypePopulation', params:{id:beneficiary.id}}">Editar</router-link> -->
                    <router-link class="btn-options" :to="{name: 'DetailBeneficiary', params:{id:beneficiary.id}}">Detalle</router-link>
                    <a href="#" class="btn-options" @click.prevent="destroy(beneficiary)">Eliminar</a>
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
import api from "../../containers/Beneficiary";
import datatables from "datatables";
export default {
  data() {
    return {
      beneficiaries: {},
      isLoading: false,
      family: {}
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
        this.beneficiaries = data;
      }).finally(this.datatable())

      console.log(this.beneficiaries)
    },
     
    destroy(beneficiary){
      const id = beneficiary.id;
          api.destroy(id).then(data => {
              if (data.status === 200) {
                alert(beneficiary.id)
              }
          }).catch(alert("error al eliminar" + id))
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
  },
  filters : {
        calculateAge : function(birthday){ 
          var today = new Date();
          var dd = today.getDate();
          var mm = today.getMonth()+1;
          var yyyy = today.getFullYear();
          var date1 = moment(birthday);
          var date2 = moment(`${yyyy}/${mm}/${dd}`);
          return (date2.diff(date1, 'years'));
        }
      },
};
</script>

<style>

</style>