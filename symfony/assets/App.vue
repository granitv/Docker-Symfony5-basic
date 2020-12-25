
<template>

  <div class="row   p-4">
    <div class="col-6">

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

    <div class="col-6">
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
          class="list-group-item"
         
         v-for="(element, index) in list2"
          :key="index"
        >  
        
        <div   @click="moduleDetailes(index)" >  
         <i class="fa fa-align-justify handle"></i>
        <i v-bind:class="[element.icon]" ></i> {{ element.name }}
         <i class="fa fa-times floatRight" @click="removeAt(index)"></i></div>
       	<input :id="'module' + index"  type="text" :placeholder="'Add: ' + element.name" class="form-control" style="display:none;" 
          :value="element.data" @keyup="addModule(element.type,index);" @change="addModule(element.type,index);"/>
        
          
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
    txt:"p",img: "img",link: "a"}
    
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
   
 console.log("before");
    return {
        list2: JSON.parse(localStorage.getItem('list2')),
         list1: [
            { name: "Img", type: "img", icon: "fas fa-image", id: 1, data: [], html: [] },
            { name: "Text", type: "txt", icon: "fas fa-font", id: 2, data: [], html: [] },
            { name: "Map", type: "map", icon: "fas fa-map", id: 3, data: [], html: [] },
            { name: "Icon", type: "icon", icon: "fas fa-icons", id: 4, data: [], html: [] },
            { name: "Link", type: "link", icon: "fas fa-link", id: 5, data: [], html: [] },
            { name: "Space", type: "space", icon: "fas fa-people-arrows", id: 6, data: [], html: [] },
        ],
        
       
    };
  console.log("after");

}else{
    return {
        list2: [
        ],
        list1: [
            { name: "Img", type: "img", icon: "fas fa-image", id: 1, data: [], html: [] },
            { name: "Text", type: "txt", icon: "fas fa-font", id: 2, data: [], html: [] },
            { name: "Map", type: "map", icon: "fas fa-map", id: 3, data: [], html: [] },
            { name: "Icon", type: "icon", icon: "fas fa-icons", id: 4, data: [], html: [] },
            { name: "Link", type: "link", icon: "fas fa-link", id: 5, data: [], html: [] },
            { name: "Space", type: "space", icon: "fas fa-people-arrows", id: 6, data: [], html: [] },
        ]

    };
  }
  },
  methods: {

      myFunctionOnLoad: function() {
        let phone = document.getElementById('phone');
        phone.innerHTML="";
        console.log(phone);
        let i=0;
        for (var key in this.list2) {
          let addCode = document.createElement(this.list2[key].type);
          var attr = document.createAttribute('id');
          attr.value = "moduleInput" + i;
          addCode.setAttributeNode(attr);
          let addText = document.getElementById("moduleInput" + i);
          if(this.list2[key].type === "img"){
            addCode.src = this.list2[key].data;
          }
          phone.appendChild(addCode);
          console.log(this.list2[key].type);
          i++;
            console.log(i);
        }
        console.log('call on load...');
      },
     
  	
       addModule: function(type,id) {
let phone = document.getElementById('phone');
        let addCode = document.createElement(modulesCode[type]);
        modules[id] = addCode;

        let moduleData = modules[id];
        let input1 = document.getElementById('module' + id);
        var attr = document.createAttribute('id');

        attr.value = "moduleInput" + id;
        addCode.setAttributeNode(attr);

        let addText = document.getElementById("moduleInput" + id);

        if (!document.getElementById("moduleInput" + id)) {
            if(type === "img"){
                addCode.src = input1.value;
            }
            phone.appendChild(moduleData);
        } else {
            if(type === "img"){
                addText.src = input1.value;
             }else{
                addText.innerHTML = input1.value;
            }
               this.list2[id].data = input1.value;
               this.list2[id].html = addText.outerHTML;

        }
        this.myFunctionOnLoad()
},
     moduleDetailes: function (id) {
   
        let input1 = document.getElementById('module' + id);
        if (input1.style.display == "inline") {
            input1.style.display = "none";
        } else {
            input1.style.display = "inline";
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
      this.list2.splice(idx, 1);
    },
    finishModule: function() {
      //JSON.parse(localStorage.getItem('list2'))
       localStorage.setItem('list1', JSON.stringify(this.list1));
       localStorage.setItem('list2', JSON.stringify(this.list2));
       console.log(localStorage.list2);
       alert("saved");
    },
    log: function(evt) {
      window.console.log(evt);
    }
  },
   created: function(){
        this.myFunctionOnLoad()
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