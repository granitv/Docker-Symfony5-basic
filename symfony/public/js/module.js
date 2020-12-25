
let phone = document.getElementById('phone');
let modules = [];
let modulesCode = ["h1", "p", "li"]
let allModules = 3;
function addModule(id) {

    if (id <= allModules) {
        let addCode = document.createElement(modulesCode[id - 1]);
        modules[id] = addCode;

        let moduleData = modules[id];
        let input1 = document.getElementById('module' + id);
        var attr = document.createAttribute('id');
        attr.value = "moduleInput" + id;
        addCode.setAttributeNode(attr);

        let addText = document.getElementById("moduleInput" + id);

        if (!document.getElementById("moduleInput" + id)) {
            phone.appendChild(moduleData);

        } else {
            addText.innerHTML = input1.value;
        }

        // console.log(addCode);
        // addCode.setAttribute("class", "btn btn-danger");

    }
    // console.log(modules);
}

function moduleDetailes(id) {
    if (id <= allModules) {
        let input1 = document.getElementById('module' + id);
        if (input1.style.display == "inline") {
            input1.style.display = "none";
        } else {
            input1.style.display = "inline";
        }

    }
    console.log(modules);
}