<template>
    <div class="addItem">
       <input type="text" v-model="item.name"  />
       <font-awesome-icon icon="plus-square" 
       @click="addItem(item)"
       :class="[ item.name ? 'active' : 'inactive', 'plus' ]"/>
    </div>
    
</template>


<script>
export default  {

data: function() {
   return{
       item: {
           name: ""
       }
   }
},
 methods: {
           addItem(item){
               if(item.name == ''){
                   return;
               }
               axios.post('api/item/store',{
                   item: this.item
               }).then(response  => {
                   if(response.status == 201){
                        console.log('Item added');
                       this.item.name = "";
                       this.$emit('reloadList');
                     }
               })
               .catch(error => {
                   console.log(error);
               })
               
           }
       }
}
</script>


<style scoped>

.addItem{
    display: flex;
    justify-content: center;
    align-items: center;
}

input {
    background: #f7f7f7;
    border: 0px;
    outline: none;
    padding: 5px;
    margin-right: 10px;
    width: 100%;
}

.plus{
    font-size: 20px;
}


.active{
    color: #00CE25;
}

.inacive{
    color: #999999;
}

</style>