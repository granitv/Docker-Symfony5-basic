<template>
  <div class="row">
    <div class="col-3">
      <h3>Draggable 1</h3>
      <draggable style="min-height:500px; background-color:#e3f6f9;" class="list-group" :list="list1" group="people" @change="log">
        <div v-html="element.name"
          class="list-group-item"
          v-for="(element, index) in list1"
          :key="element.name"
        >
         <span v-html="HTMLcontent"></span>
         {{ element.name }} {{ /* index*/ }}
        </div>
      </draggable>
    </div>

    <div class="col-3" >
      <h3>Draggable 2</h3>
      <draggable style="min-height:500px; background-color:#e3f6f9;" class="list-group" :list="list2" group="people" @change="log">
        <div v-html="element.name"
          class="list-group-item"
          v-for="(element, index) in list2"
          :key="element.name"
        >
          {{ element.name }} {{  /* index*/ }}
        </div>
      </draggable>
    </div>
<div class="row">
<p class="btn m-2 btn-success col-md-2 " v-on:click="finishModule">Finish</p>
</div>
  </div>
</template>
<script>

import draggable from 'vuedraggable'
export default {
  name: "two-lists",
  display: "Two Lists",
  order: 1,
  components: {
    draggable
  },
 
  data() {

if(localStorage.getItem('list1') && localStorage.getItem('list2')){
    return {
        list1: JSON.parse(localStorage.getItem('list1')),
        list2: JSON.parse(localStorage.getItem('list2'))
    };
}else{
    return {
        list1: [
        ],
        list2: [
            { name: "<i class=\"fas fa-image\"></i> Img", id: 1 },
            { name: "<i class=\"fas fa-font\"></i> Text", id: 2 },
            { name: "<i class=\"fas fa-map\"></i> Map", id: 3 },
            { name: "<i class=\"fas fa-icons\"></i> Icon", id: 4 },
            { name: "<i class=\"fas fa-link\"></i> Link", id: 5 },
            { name: "<i class=\"fas fa-people-arrows\"></i> Space", id: 6 }
        ]

    };
  }
  },
  methods: {
    finishModule: function() {
      //JSON.parse(localStorage.getItem('list2'))
       localStorage.setItem('list1', JSON.stringify(this.list1));
       localStorage.setItem('list2', JSON.stringify(this.list2));
       console.log(localStorage.list2);
    },
    add: function() {
      this.list.push({ name: "Juan" });
    },
    replace: function() {
      this.list = [{ name: "Edgard" }];
    },
    clone: function(el) {
      return {
        name: el.name + " cloned"
      };
    },
    log: function(evt) {
      window.console.log(evt);
    }
  }
};
</script>