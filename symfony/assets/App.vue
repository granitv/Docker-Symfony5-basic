
<template>

  <div class="row   p-4">
  
    <div class="row">
        <!-- Button trigger modal -->
        <button type="button" class="btn-sm btn-primary col-md-4" data-bs-toggle="modal" data-bs-target="#appData">
        Add App Data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="appData" tabindex="-1" aria-labelledby="appDataLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="appDataLabel">App Data</h5>
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
        <!-- Button trigger modal -->
        <button type="button" class="btn-sm btn-primary col-md-2" data-bs-toggle="modal" data-bs-target="#appPages">
        Pages
        </button>

        <!-- Modal -->
        <div class="modal fade" id="appPages" tabindex="-1" aria-labelledby="appPagesLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="appPagesLabel">Pages</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
<!--test 
  <div v-for="(inputT, smallIndex) in modulesCode4[element.type].input">
            <input :id="'smallModule'+element.type +index+ smallIndex"  type="text" :placeholder="modulesCode4[element.type].acro[smallIndex]" class="form-control m-1  " 
              :value="element.data[smallIndex]" @keyup="insertModuleInPhone(element.type,index,smallIndex)" @change="insertModuleInPhone(element.type,index, smallIndex);"/>
            </div>
             <div class="row"><button type="button" class="btn-sm btn-light col-md-6" ></button>
                <button type="button" class="btn-sm btn-info col-md-6" >Edit</button></div>
            test -->
              <div class="col-md-12" >
                <div class="col-md-12" v-for="(page, pageIndex) in appPages.page" > 
                  <div class="accordion" id="accordionExample">

                    <div class="accordion-item">
                      <h2 class="accordion-header" :id="'headingOne'+pageIndex">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" :data-bs-target="'#collapseOne'+pageIndex" aria-expanded="true" :aria-controls="'collapseOne'+pageIndex">
                        {{appPages.page[pageIndex].name}} <small style="margin: auto;">Click To Edit</small>
                        </button>
                      </h2>
                      <div :id="'collapseOne'+pageIndex" class="accordion-collapse collapse " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                          <div v-for="(pageValue, pageType, pageElementIndex) in appPages.page[pageIndex]"> <!-- pageInput == datat // pageInputIndex == type -->
                            <input class="form-control m-1" type="text" :id="'appPage'+pageType+pageIndex" 
                            :value="pageValue" :placeholder="appPages.acro[pageElementIndex]" />
                           
                          </div>
                          <button type="button" class="btn btn-primary" @click="savePageData(pageIndex);">Save changes</button>
                        </div>
                      </div>
                    </div>
                     
                  </div>
                  
                 </div>
                 
              </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
         <div class="col-md-4">
                <label>Edit Page:</label> <!-- @change="insertModuleInPhone(element.type,index,0);" -->
              <select @change="editPageFun();"  class="form-control col-md-3" id="editPageId">
              <option  v-for="(page, pageIndex) in appPages.page" :value="appPages.page[pageIndex].id"  :selected="appPages.page[pageIndex].onedit == 1 "  > {{appPages.page[pageIndex].name}}</option>
            </select>
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

            
              
          <div class="row">
            <div class="col-md-3">
              <label>Size:</label>
              <select  @change="insertModuleInPhone(element.type,index,0);" class="form-control col-md-3" :id="'moduleSize' + index">
              <option  v-for="(element2, index) in size" :value="element2"  :selected="element.size == element2  || (element.size == 0 && element2 == 100)"  >{{element2}}</option>
                </select>
                 </div>
                <div class="col-md-4">
                <label>Align:</label>
              <select  @change="insertModuleInPhone(element.type,index,0);" class="form-control col-md-3" :id="'moduleAlign' + index">
              <option  v-for="(element3, index) in align" :value="element3"  :selected="element.align == element3 "  >{{element3}}</option>
            </select>
            </div>
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
/* let el = document.getElementById('myframe1').contentWindow.document.getElementById('phone');
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
});*/
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
      type:["iframe"],
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
      },
    map:{
      type:["div"],
      input:["address"],
      acro:["Add your address here"]
      },
    slider:{
      type:["div"],
      input:["src1","src2","src3"],
      acro:["Add your slider img 1 here", "Add your slider img 2 here", "Add your slider img 3 here"]
      },
    imgTitleTextHorizontal:{
      type:["div"],
      input:["img","title","text"],
      acro:["Add your image url here", "Add your title here", "Add your text here"]
      }
};

let basicAppInfo;
if(localStorage.getItem('appData')){
  basicAppInfo = JSON.parse(localStorage.getItem('appData'));
}else{
  basicAppInfo ={ data:{name: "", version: "", backgroundColor:"", iconUrl:"", splashScreenUrl:"", description:""},
  acro:{name: "App name:", version: "App version:", backgroundColor:"App background color:", iconUrl:"App icon:", splashScreenUrl:"App splashscreen:", description:"App description:"}}; 
};

let appPages;
if(localStorage.getItem('appPages')){
  appPages = JSON.parse(localStorage.getItem('appPages'));
}else{
  appPages ={ page:[{ id: 1, name: "home",fileName: "home.html", primary: 1, order: 0, onedit: 1},
                    { id: 2, name: "about",fileName: "about.html", primary: 0, order: 1,  onedit: 0},
                    { id: 3, name: "gallery",fileName: "gallery.html", primary: 0, order: 2,  onedit: 0}],
  acro:{name: "Page name:", fileName: "pagename.html", primary:"if homepage write 1", order:"page order 0 1 2 3",  onedit: "if edit write 1 else 0"}}; 
};

let onEditPage = 0;
for(var page in appPages.page){
  if(appPages.page[page].onedit == 1){
    onEditPage = appPages.page[page].id
  }
}

let modules = [ { name: "Img", type: "img", icon: "fas fa-image", id: 1, data: [], typestyle: [],size: 0, align: "center", },
                { name: "Text", type: "txt", icon: "fas fa-font", id: 2, data: [], typestyle: [],size: 0, align: "center", },
                { name: "Map", type: "map", icon: "fas fa-map", id: 3, data: [], typestyle: [],size: 0, align: "center", },
                { name: "Icon", type: "icon", icon: "fas fa-icons", id: 4, data: [], typestyle: [],size: 0, align: "center", },
                { name: "Link", type: "link", icon: "fas fa-link", id: 5, data: [], typestyle: [],size: 0, align: "center", },
                { name: "Space", type: "space", icon: "fas fa-people-arrows", id: 6, data: [], typestyle: [],size: 0, align: "center", },
                { name: "YT Video", type: "video", icon: "fas fa-video", id: 7, data: [], typestyle: [],size: 0, align: "center", },
                { name: "Pdf File", type: "pdf", icon: "fas fa-file-pdf", id: 8, data: [], typestyle: [],size: 0, align: "center", },
                { name: "Img Slider", type: "slider", icon: "fas fa-sliders-h", id: 9, data: [], typestyle: [],size: 0, align: "center", },
                { name: "Img Text Horizontal", type: "imgTitleTextHorizontal", icon: "fas fa-image", id: 10, data: [], typestyle: [],size: 0, align: "center", }];

let size= [25,50,75,100]; //+auto
let align= ["start","center","end"];

import draggable from "vuedraggable";
export default {
  name: "clone",
  display: "Clone",
  order: 1,
  components: {
    draggable
  },
    data() {
      if(localStorage.getItem('list2-'+onEditPage)){
        return {
            list2: JSON.parse(localStorage.getItem('list2-'+onEditPage)),
              list1: modules,
            size: size,
            modulesCode4 : modulesCode4,
            basicAppInfo: basicAppInfo,
            align:align,
            appPages: appPages
        };
      }else{
        return {
          list2: [],
         list1: modules,
           size: size,
           modulesCode4 : modulesCode4,
            basicAppInfo: basicAppInfo,
            align:align,
            appPages: appPages
        };
      }
    },
  methods: {
    insertModuleInPhone: function(typed,id,inputNumber) {
      let phone =document.getElementById('myframe1').contentWindow.document.getElementById('phone');
      
      // let phone = document.getElementById('myframe1').contentWindow.document.getElementById('phone');
      phone.style.backgroundColor = this.basicAppInfo.data["backgroundColor"];
      phone.innerHTML="";
      let i=0;
      // save to list2     
      if(typed !== "null"){
          let inputSize = document.getElementById('moduleSize' + id);
          this.list2[id].size = inputSize.value;
          let inputAlign = document.getElementById('moduleAlign' + id);
          this.list2[id].align = inputAlign.value;
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
        addCode.classList.add("d-flex");
        addCode.classList.add("p-0");
        addCode.classList.add("justify-content-"+this.list2[key].align);//start end
        addCode.classList.add("w-"+this.list2[key].size);
        if(this.list2[key].type === "img"){
          addCode.src = this.list2[key].data[0];
          addCode.alt = this.list2[key].data[1];

          addCode.style = "max-width: inherit;height: 100%;";
        }else if(this.list2[key].type === "imgTitleTextHorizontal"){
          addCode.style = "height: 205px;"; 
          addCode.innerHTML = ' <div class="border rounded d-flex w-100 m-2 ">    <div class="w-100 d-flex justify-content-center" style="margin: auto; ">    <span style="background-size: cover;height: 125px; width: 125px; background-position: center; background-image: url('+this.list2[key].data[0]+'); border-radius: 50%; display: inline-block;"><span>    </div>    <div class="w-100 p-2" style="margin: auto;">        <h1>'+this.list2[key].data[1]+'</h1>        <p>'+this.list2[key].data[2]+'</p>    </div></div>';
        }else if(this.list2[key].type === "pdf"){
          addCode.style = "height: 280px; "; 
          addCode.innerHTML = '<iframe scrolling="no" style="height: inherit;padding: 0 !important; overflow:hidden; width: 100vw;max-width: 100%;" src="http://localhost:9090/pdf/'+this.list2[key].data[1]+'"></iframe>';
        }else if(this.list2[key].type === "map"){
          addCode.style = "hight:280px !important; "; 
          addCode.innerHTML = '<div style="width: 100%"><iframe width="100%" height="inherit" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q='+this.list2[key].data[0]+'&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>';
        }else if(this.list2[key].type === "video"){
          let getFullVideoUrl = this.list2[key].data[0];
          addCode.style = "position: relative;  padding-bottom: 56.25%; /* 16:9 */     top: 0;  left: 0;  width: 100%;  ";          
          addCode.src = "https://www.youtube.com/embed/"+this.getYouTubeID(getFullVideoUrl)+"";          
          //addCode.innerHTML = '<iframe style="" src=" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
        }else if(this.list2[key].type === "slider"){
          addCode.style = "min-height: 215px;";         
          addCode.innerHTML = '<div id="sliderControls'+key+'" class="d-flex w-100 carousel slide" data-bs-ride="carousel">  <div class="carousel-inner">    <div class="carousel-item active">      <img src="'+this.list2[key].data[0]+'" class="d-block w-100" >    </div>    <div class="carousel-item">      <img src="'+this.list2[key].data[1]+'" class="d-block w-100" >    </div>    <div class="carousel-item">      <img src="'+this.list2[key].data[2]+'" class="d-block w-100" >    </div>  </div>  <a class="carousel-control-prev" href="#sliderControls'+key+'" role="button" data-bs-slide="prev">    <span class="carousel-control-prev-icon" aria-hidden="true"></span>    <span class="visually-hidden">Previous</span>  </a>  <a class="carousel-control-next" href="#sliderControls'+key+'" role="button" data-bs-slide="next">    <span class="carousel-control-next-icon" aria-hidden="true"></span>    <span class="visually-hidden">Next</span>';
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
    }/*,
    editPageFun: function(){
      let input = document.getElementById('editPageId');
      for(var page in appPages.page){
        this.appPages.page[page].onedit = 0;
      }
      console.log(this.appPages.page[input].onedit);
      this.appPages.page[input-1].onedit = 1;
      localStorage.setItem('appPages', JSON.stringify(this.appPages));
      this.insertModuleInPhone("null",0);
    }*/,
    finishModule: function() {
       localStorage.setItem('list2-'+onEditPage, JSON.stringify(this.list2));
       alert("saved");
    },
    savePageData: function(pageIndex) {
      for (var key in this.appPages.page[pageIndex]) { 
        let getInput = document.getElementById('appPage'+[key]+pageIndex);
        this.appPages.page[pageIndex][key] = getInput.value;
      }
      localStorage.setItem('appPages', JSON.stringify(this.appPages));
      alert("saved App Page");
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
     setTimeout(() => this.insertModuleInPhone("null",0), 500);
     }
};
</script>
