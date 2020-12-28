
<template>

  <div class="row   p-4">
    <div class="col-4">

      <h3>Modules</h3>
      <draggable style="min-height:500px; background-color:#e3f6f9;"
        class="dragArea list-group"
        :list="list1"
         :group="{ name: 'people', pull: 'clone', put: false }"
        @change="log"
      >
        <div 
          class="list-group-item"
           v-for="(element, index) in list1"
          :key="index"
        > 
        <div   @click="addOneModule(element)" >  
        <i v-bind:class="[element.icon]"></i> {{ element.name }} 
          </div>
        </div>
      </draggable>
    </div>

    <div class="col-8">
      <h3>Application</h3>

      <!--test-->

      <draggable style="min-height:500px; background-color:#e3f6f9;"
        class="dragArea list-group "
        :list="list2"
        group="people"
        @change="log"
  handle=".handle"
      >
        <div 
        @dragend="insertModuleInPhone('null',0)"
          class="list-group-item  p-2  "
         
         v-for="(element, index) in list2"
          :key="index"
        >  
        
          <i class="fa fa-lg fa-align-justify handle " style="cursor: grab;"></i>

          <span><i v-bind:class="[element.icon]" class=" ml-2"></i> {{ element.name }}</span>

         

           <span style="position: absolute; right: 0;" class="p-1"><i class="fas fa-edit p-1" style="cursor: pointer;"  @click="moduleDetailes(index)"></i>

         <i class="fa fa-times p-1" style="cursor: pointer;"  @click="removeAt(index)"></i></span>

          <div  :id="'showModule' + index"  style="display:none;" >
            <input :id="'module' + index"  type="text" :placeholder="'Add: ' + element.name" class="form-control m-1  " 
              :value="element.data" @keyup="insertModuleInPhone(element.type,index)" @change="insertModuleInPhone(element.type,index);"/>
              
            <div class="col-md-2">
              <label>Size:</label>
              <select  @change="insertModuleInPhone(element.type,index);" class="form-control col-md-3" :id="'moduleSize' + index">
              <option  v-for="(element2, index) in size" :value="element2"  :selected="element.size == element2 || (element.size != element2 && element2 == 12) "  >{{element2}}</option>
            </select>
            </div>
          </div>
        </div>
      
      </draggable>
      
    </div>
 
<div class="row">

<p class="btn m-2 btn-success col-md-5 " v-on:click="finishModule">Finish</p>
      <p class="btn m-2 btn-primary col-md-5 " @click="add">Add Extra Element</p> 
</div>
  </div>
</template>

<script>
let id = 1;

let modules = [];
let modulesCode = {
    txt:"h1",img: "img",link: "a",video: "div"}

import draggable from "vuedraggable";
export default {
  name: "clone",
  display: "Clone",
  order: 1,
  components: {
    draggable
  },
    data() {
      if(localStorage.getItem('list1') && localStorage.getItem('list2')){
        return {
            list2: JSON.parse(localStorage.getItem('list2')),
              list1: [
                { name: "Img", type: "img", icon: "fas fa-image", id: 1, data: [], html: [],size: 0, },
                { name: "Text", type: "txt", icon: "fas fa-font", id: 2, data: [], html: [],size: 0, },
                { name: "Map", type: "map", icon: "fas fa-map", id: 3, data: [], html: [],size: 0, },
                { name: "Icon", type: "icon", icon: "fas fa-icons", id: 4, data: [], html: [],size: 0, },
                { name: "Link", type: "link", icon: "fas fa-link", id: 5, data: [], html: [],size: 0, },
                { name: "Space", type: "space", icon: "fas fa-people-arrows", id: 6, data: [], html: [],size: 0, },
                { name: "YT Video", type: "video", icon: "fas fa-video", id: 7, data: [], html: [],size: 0, }
            ],
            size: [1,2,3,4,5,6,7,8,9,10,11,12],
        };
      }else{
        return {
          list2: [],
          list1: [
            { name: "Img", type: "img", icon: "fas fa-image", id: 1, data: [], html: [],size: 0, },
            { name: "Text", type: "txt", icon: "fas fa-font", id: 2, data: [], html: [],size: 0, },
            { name: "Map", type: "map", icon: "fas fa-map", id: 3, data: [], html: [],size: 0, },
            { name: "Icon", type: "icon", icon: "fas fa-icons", id: 4, data: [], html: [],size: 0, },
            { name: "Link", type: "link", icon: "fas fa-link", id: 5, data: [], html: [],size: 0, },
            { name: "Space", type: "space", icon: "fas fa-people-arrows", id: 6, data: [], html: [],size: 0, },
            { name: "YT Video", type: "video", icon: "fas fa-video", id: 7, data: [], html: [],size: 0, }
          ],
           size: [1,2,3,4,5,6,7,8,9,10,11,12],
        };
      }
    },
  methods: {
    insertModuleInPhone: function(typed,id) {

      let phone = document.getElementById('phone');
      phone.innerHTML="";
      let i=0;
      if(typed !== "null"){
        let input = document.getElementById('module' + id);
        let inputSize = document.getElementById('moduleSize' + id);
        this.list2[id].data = input.value;
        this.list2[id].html = input.outHTML;
        this.list2[id].size = inputSize.value;
        console.log(this.list2[id].size);
      }
      for (var key in this.list2) {
        let addCode = document.createElement(modulesCode[this.list2[key].type]);
        var attr = document.createAttribute('id');
        attr.value = "moduleInput" + i;
        addCode.setAttributeNode(attr);
        let addData = document.getElementById("moduleInput" + i);
        addCode.classList.add("col-md-"+this.list2[key].size);
        if(this.list2[key].type === "img"){
          addCode.src = this.list2[key].data;
          addCode.style = "max-width: inherit;height: 100%;";
        }else if(this.list2[key].type === "video"){
          let getFullVideoUrl = this.list2[key].data;
          addCode.style = "position: relative;  padding-bottom: 56.25%; /* 16:9 */  height: 0;";          
          addCode.innerHTML = '<iframe style=" position: absolute;  top: 0;  left: 0;  width: 100%;  height: 100%;" src="https://www.youtube.com/embed/'+this.getYouTubeID(getFullVideoUrl)+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }else if(this.list2[key].type === "link"){
          addCode.href = this.list2[key].data;
          addCode.innerHTML = this.list2[key].data;
          // let getFullVideoUrl = this.list2[key].data;
          // addCode.innerHTML = '<iframe src="https://www.youtube.com/embed/'+this.getYouTubeID(getFullVideoUrl)+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }else{
          addCode.innerHTML = this.list2[key].data;
        }
        phone.appendChild(addCode);
        i++;
      }
    },
    moduleDetailes: function (id) {
      let input = document.getElementById('showModule' + id);
      if (input.style.display == "inline") {
          input.style.display = "none";
      } else {
          input.style.display = "inline";
      }
      // console.log(modules);
    },
    addOneModule: function(data) {
      this.list2.push(data);
    },
    add: function() {
      this.list2.push({ name: "Extra Module ", id: id++ ,icon: "fas fa-plus-circle"});
    },
    replace: function() {
      this.list2 = [{ name: "Edgard" }];
    },
    clone: function(el) {
      return {
        name: el.name + " cloned"
      };
    },
    removeAt(idx) {
      if(confirm("Do you really want to delete this module?")){
        this.list2.splice(idx, 1);
      };
    },
    getYouTubeID: function(url){
      url = url.split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
      return (url[2] !== undefined) ? url[2].split(/[^0-9a-z_\-]/i)[0] : url[0];
    },
    finishModule: function() {
      //JSON.parse(localStorage.getItem('list2'))
       localStorage.setItem('list1', JSON.stringify(this.list1));
       localStorage.setItem('list2', JSON.stringify(this.list2));
      // console.log(localStorage.list2);
       alert("saved");
    },
    log: function(evt) {
      window.console.log(evt);
    }
  },
   created: function(){
        this.insertModuleInPhone("null",0)
      }
};
</script>

<!--Test-->
<!--
<template>
  <div class="row">
    <button class="btn btn-secondary" @click="add">Add</button> 
   <button class="btn btn-secondary" @click="removeAt(index)">Add</button> 
  
    <div class="col-4">
      <h3>Draggable 1</h3>
      <draggable style="min-height:500px; background-color:#e3f6f9;" class="list-group" 
                  group="people"
      :list="list1"  @change="log">
        <div v-html="element.name"
          class="list-group-item"
          v-for="(element, index) in list1"
          :key="element.name"
        >
         aaa {{ element.name }} {{  index }}
          q<i class="fa fa-times close" @click="removeAt(index)"></i>
        </div>
      </draggable>
    </div>

    <div class="col-4" >
      <h3>Draggable 2</h3>
      <draggable style="min-height:500px; background-color:#e3f6f9;" class="list-group" :list="list2" :group="{ name: 'people', pull: 'clone', put: false }" @change="log">
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
let id = 1;
export default {
 name: "clone",
  display: "Clone",
  order: 2,
  components: {
    draggable
  },
 
  data() {

if(localStorage.getItem('list1') && localStorage.getItem('list2')){
    return {
        list1: JSON.parse(localStorage.getItem('list1')),
         list2: [
            { name: "<i class=\"fas fa-image\"></i> Img", id: 1 },
            { name: "<i class=\"fas fa-font\"></i> Text", id: 2 },
            { name: "<i class=\"fas fa-map\"></i> Map", id: 3 },
            { name: "<i class=\"fas fa-icons\"></i> Icon", id: 4 },
            { name: "<i class=\"fas fa-link\"></i> Link", id: 5 },
            { name: "<i class=\"fas fa-people-arrows\"></i> Space", id: 6 }
        ]
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
       removeAt(idx) {
      this.list.splice(idx, 1);
    },
    finishModule: function() {
      //JSON.parse(localStorage.getItem('list2'))
       localStorage.setItem('list1', JSON.stringify(this.list1));
       localStorage.setItem('list2', JSON.stringify(this.list2));
       console.log(localStorage.list2);
    },
    add: function() {
    this.list1.push({ name: "Juan " + id, id: id++ });
    console.log("in");
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