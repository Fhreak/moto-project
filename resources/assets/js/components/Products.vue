<template>
  <div class="row">
      <div class="col-lg-12">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <span>{{ data }}</span>
        </div>
        <div class="ibox-content">
          <div class="">
            <span>Filas por pagina</span>
            <input type="text" v-model.trim="query.per_page" @keyup.enter="fetchProductsData()">
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" >
              <thead>
                <tr>
                  <th @click="toggleOrder(columns[0])">
                    <span>Nombre</span>
                    <span v-if="columns[0] === query.column">
                      <i v-if="query.direction === 'desc'" class="fa fa-long-arrow-down pull-right"></i>
                      <i v-else class="fa fa-long-arrow-up pull-right"></i>
                    </span>
                  </th>
                  <th @click="toggleOrder(columns[1])">
                    <span>Valor Unit.</span>
                    <span v-if="columns[1] === query.column">
                      <i v-if="query.direction === 'desc'" class="fa fa-long-arrow-down pull-right"></i>
                      <i v-else class="fa fa-long-arrow-up pull-right"></i>
                    </span>
                  </th>
                  <th @click="toggleOrder(columns[2])">
                    <span>Stock</span>
                    <span v-if="columns[2] === query.column">
                      <i v-if="query.direction === 'desc'" class="fa fa-long-arrow-down pull-right"></i>
                      <i v-else class="fa fa-long-arrow-up pull-right"></i>
                    </span>
                  </th>
                  <th @click="toggleOrder(columns[3])">
                    <span>Marca</span>
                    <span v-if="columns[3] === query.column">
                      <i v-if="query.direction === 'desc'" class="fa fa-long-arrow-down pull-right"></i>
                      <i v-else class="fa fa-long-arrow-up pull-right"></i>
                    </span>
                  </th>
                  <th @click="toggleOrder(columns[4])">
                    <span>Modelo</span>
                    <span v-if="columns[4] === query.column">
                      <i v-if="query.direction === 'desc'" class="fa fa-long-arrow-down pull-right"></i>
                      <i v-else class="fa fa-long-arrow-up pull-right"></i>
                    </span>
                  </th>
                  <th @click="toggleOrder(columns[5])">
                    <span>Categoria</span>
                    <span v-if="columns[5] === query.column">
                      <i v-if="query.direction === 'desc'" class="fa fa-long-arrow-down pull-right"></i>
                      <i v-else class="fa fa-long-arrow-up pull-right"></i>
                    </span>
                  </th>
                  <th @click="toggleOrder(columns[6])">
                    <span>Proveedor</span>
                    <span v-if="columns[6] === query.column">
                      <i v-if="query.direction === 'desc'" class="fa fa-long-arrow-down pull-right"></i>
                      <i v-else class="fa fa-long-arrow-up pull-right"></i>
                    </span>
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="row in model.data">
                  <td v-for="(value, key) in row" :key="value">
                    <span>{{value}}</span>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="">
              <span>Mostrando {{model.from}} - {{model.to}} de {{model.total}} resultados.</span>
                <div class="pull-right">
                  <button :disabled="disabledPrevButton()" @click="prev()"><i class="fa fa-chevron-left"></i></button>
                  <button :disabled="disabledNextButton()" @click="next()"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>

  export default{
    props: ['data'],

    mounted(){
      this.fetchProductsData()
    },

    data() {
      return {
          model: {},
        columns: {},
          query: {
                    page: 1,
                  column: 'name',
               direction: 'asc',
                per_page: 10
                },
      }
    },

    methods: {

      disabledNextButton(){
        if(this.model.next_page_url){
          return false;
        } else{
          return true;
        }

      },

      disabledPrevButton(){
        if(this.model.prev_page_url){
          return false;
        } else{
          return true;
        }
      },

      next(){
        if(this.model.next_page_url){
          this.query.page++
          this.fetchProductsData()
        }
      },

      prev(){
        if(this.model.prev_page_url){
          this.query.page--
          this.fetchProductsData()
        }
      },

      toggleOrder(column){
        if(column === this.query.column){
          //Change direction
          if(this.query.direction === 'desc'){
            this.query.direction = 'asc'
          }else {
            this.query.direction = 'desc'
          }
        } else{
          this.query.column = column
          this.query.direction = 'asc'
        }
        this.fetchProductsData()
      },

      fetchProductsData(){
        if(this.query.per_page === ''){
          this.query.per_page = this.query.per_page
        }
        this.$http.get(`getData?column=${this.query.column}&direction=${this.query.direction}&page=${this.query.page}&per_page=${this.query.per_page}`).then((response)=>{
          //succes callback
          Vue.set(this.$data, 'model', response.data.model);
          Vue.set(this.$data, 'columns', response.data.columns);
        }, (response) =>{
          //error calback
          console.log(response);
        });
      }

    },
  }

</script>
