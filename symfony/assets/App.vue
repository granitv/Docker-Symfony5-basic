
<template>

  <div class="row   p-4">
  
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add App Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

        <div class="col-md-6" v-for="(dataInput, dataInputIndex) in basicAppInfo.data" > 
                <input class="form-control m-1" type="text" :id="'appData'+dataInputIndex" 
                 :value="basicAppInfo.data[dataInputIndex]" :placeholder="basicAppInfo.acro[dataInputIndex]" />
              </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" @click="saveAppData();insertModuleInPhone('null',0)">Save changes</button>
              </div>
            </div>
          </div>
        </div>
  


     
    </div>
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


          <div v-for="(inputT, smallIndex) in modulesCode4[element.type].input">
            <input :id="'smallModule'+element.type +index+ smallIndex"  type="text" :placeholder="modulesCode4[element.type].acro[smallIndex]" class="form-control m-1  " 
              :value="element.data[smallIndex]" @keyup="insertModuleInPhone(element.type,index,smallIndex)" @change="insertModuleInPhone(element.type,index, smallIndex);"/>
            </div>


          <div v-if="modulesCode4[element.type].type.length > 1" v-for="(inputT, smallIndex) in modulesCode4[element.type].type">
            <div class="form-check">
              <input @change="insertModuleInPhone(element.type, index, 0);" type="radio"  
              :checked="element.typestyle == smallIndex"
              class="form-check-input"  :name="'smallModule'+element.type +'option'+index"
              :value="smallIndex" >
              <label class="form-check-label" >{{ modulesCode4[element.type].typeacro[smallIndex] }}</label>
            </div>

            <!--<input  type="text"  class="form-control m-1  " 
              :value="element.data[smallIndex]" @keyup="insertModuleInPhone(element.type,index,smallIndex)" />-->
          </div>

            
              
            <div class="col-md-2">
              <label>Size:</label>
              <select  @change="insertModuleInPhone(element.type,index,0);" class="form-control col-md-3" :id="'moduleSize' + index">
              <option  v-for="(element2, index) in size" :value="element2"  :selected="element.size == element2  || (element.size == 0 && element2 == 12)"  >{{element2}}</option>
            </select>
            </div>
          </div>
        </div>
      
      </draggable>
      
    </div>
 
<div class="row">

<p class="btn m-2 btn-success col-md-5 " v-on:click="finishModule">Save/Finish</p>
      <p class="btn m-2 btn-primary col-md-5 " @click="add">Add Extra Element</p> 
</div>
  </div>
</template>

<script>
let el = document.getElementById('phone');
let y = 0, top = 0;

let draggingFunction = (e) => {
    document.addEventListener('mouseup', () => {
        document.removeEventListener("mousemove", draggingFunction);
    });
    el.scrollTop = top - e.pageY + y;
};

el.addEventListener('mousedown', (e) => {
    e.preventDefault();
    y = e.pageY;
    top = el.scrollTop;
    document.addEventListener('mousemove', draggingFunction);
});
//test

let id = 1;


let modulesCode4 = {
    txt:{
      type:["h1","p"],
      typeacro:["Header 1", "Paragraph"],
      input:["text"],
      acro:["Add your text here"]
      },
    img: {
      type:["img"],
      input:["src","alt"],
        acro:["Add your image url here","Add your image alt text here"]
      },
    link: {
      type:["a"],
      input:["text","href"],
      acro:["Add your text here","Add your link here"]
      },
    video:{
      type:["div"],
      input:["src"],
      acro:["Add your youtube url here"]
      },
    space:{
      type:["row"],
      input:["text"],
      acro:["Add your space tag here"]
      },
    pdf:{
      type:["div"],
      input:["text","url"],
      acro:["Add your text here","Add your pdf file name .pdf here"]
      }
};
let basicAppInfo;
if(localStorage.getItem('appData')){
  basicAppInfo = JSON.parse(localStorage.getItem('appData'));
}else{
  basicAppInfo ={ data:{name: "", version: "", backgroundColor:"", iconUrl:"", splashScreenUrl:"", description:""},
  acro:{name: "App name:", version: "App version:", backgroundColor:"App background color:", iconUrl:"App icon:", splashScreenUrl:"App splashscreen:", description:"App description:"}}; 
}

let modules = [ { name: "Img", type: "img", icon: "fas fa-image", id: 1, data: [], typestyle: [],size: 0, },
                { name: "Text", type: "txt", icon: "fas fa-font", id: 2, data: [], typestyle: [],size: 0, },
                { name: "Map", type: "map", icon: "fas fa-map", id: 3, data: [], typestyle: [],size: 0, },
                { name: "Icon", type: "icon", icon: "fas fa-icons", id: 4, data: [], typestyle: [],size: 0, },
                { name: "Link", type: "link", icon: "fas fa-link", id: 5, data: [], typestyle: [],size: 0, },
                { name: "Space", type: "space", icon: "fas fa-people-arrows", id: 6, data: [], typestyle: [],size: 0, },
                { name: "YT Video", type: "video", icon: "fas fa-video", id: 7, data: [], typestyle: [],size: 0, },
                { name: "Pdf File", type: "pdf", icon: "fas fa-file-pdf", id: 7, data: [], typestyle: [],size: 0, }];
let modulesCode = {
    txt:"h1",img: "img",link: "a",video: "div"}
let size= [1,2,3,4,5,6,7,8,9,10,11,12];
import pdf from 'vue-pdf'
import draggable from "vuedraggable";
export default {

  name: "clone",
  display: "Clone",
  order: 1,
  components: {
    draggable,
    pdf
  },
    data() {
      if(localStorage.getItem('list2')){
        return {
            list2: JSON.parse(localStorage.getItem('list2')),
              list1: modules,
            size: size,
            modulesCode4 : modulesCode4,
            basicAppInfo: basicAppInfo
        };
      }else{
        return {
          list2: [],
         list1: modules,
           size: size,
           modulesCode4 : modulesCode4,
            basicAppInfo: basicAppInfo
        };
      }
    },
  methods: {
    insertModuleInPhone: function(typed,id,inputNumber) {
      let phone = document.getElementById('phone');
      phone.style = 'background-color:'+this.basicAppInfo.data["backgroundColor"];
      phone.innerHTML="";
      let i=0;
      // save to list2     
      if(typed !== "null"){
          let inputSize = document.getElementById('moduleSize' + id);
          this.list2[id].size = inputSize.value;
          if(modulesCode4[this.list2[id].type].type.length > 0){
          let resultat ="";
          var radios = document.getElementsByName('smallModule'+typed +'option'+id);
            for (var y = 0, length = radios.length; y < radios.length; y++) {
              if (radios[y].checked) {
                resultat = radios[y].value;
                break;
              }
            }
            this.list2[id].typestyle = resultat;
             
          }
          let input = document.getElementById('smallModule'+typed +id+ inputNumber);
         
          this.list2[id].data[inputNumber] = input.value;
      }

      for (var key in this.list2) {
        let addCode;
        if(modulesCode4[this.list2[key].type].type.length > 1){
           addCode = document.createElement(modulesCode4[this.list2[key].type].type[this.list2[key].typestyle]);
        }else{
           addCode = document.createElement(modulesCode4[this.list2[key].type].type);
        }
    
        var attr = document.createAttribute('id');
        attr.value = "moduleInput" + i;
        addCode.setAttributeNode(attr);
        let addData = document.getElementById("moduleInput" + i);
        addCode.classList.add("col-md-"+this.list2[key].size);
        if(this.list2[key].type === "img"){
          addCode.src = this.list2[key].data[0];
          addCode.alt = this.list2[key].data[1];
          
          addCode.style = "max-width: inherit;height: 100%;";
        }else if(this.list2[key].type === "pdf"){
          addCode.style = "hight:280px; padding: 0 !important;"; 
          addCode.innerHTML = '<iframe scrolling="no" style="height: inherit;padding: 0 !important; overflow:hidden; width: 100vw;max-width: 100%;" src="http://localhost:9090/pdf/'+this.list2[key].data[1]+'"></iframe>';
        }else if(this.list2[key].type === "video"){
          let getFullVideoUrl = this.list2[key].data[0];
          addCode.style = "position: relative;  padding-bottom: 56.25%; /* 16:9 */  height: 0;";          
          addCode.innerHTML = '<iframe style=" position: absolute;  top: 0;  left: 0;  width: 100%;  height: 100%;" src="https://www.youtube.com/embed/'+this.getYouTubeID(getFullVideoUrl)+'" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }else if(this.list2[key].type === "space"){
          addCode.style = "height: 100px;"; 
          addCode.tag = this.list2[key].data[0];
        }else if(this.list2[key].type === "link"){
          addCode.href = this.list2[key].data[1];
          addCode.innerHTML = this.list2[key].data[0];
        }else{
          addCode.innerHTML = this.list2[key].data[0];
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
         this.insertModuleInPhone("null",0);
      };
    },
    getYouTubeID: function(url){
      url = url.split(/(vi\/|v=|\/v\/|youtu\.be\/|\/embed\/)/);
      return (url[2] !== undefined) ? url[2].split(/[^0-9a-z_\-]/i)[0] : url[0];
    },
    finishModule: function() {
       localStorage.setItem('list2', JSON.stringify(this.list2));
       alert("saved");
    },
    saveAppData: function() {
     
       for (var key in this.basicAppInfo.data) {
        let getInput = document.getElementById('appData'+key);
        console.log( 'appData'+key);
        this.basicAppInfo.data[key] = getInput.value;
        console.log(getInput.value);
        
      }
       localStorage.setItem('appData', JSON.stringify(this.basicAppInfo));
       alert("saved App Data");
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
