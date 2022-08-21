//added function constructor
// создать новый продукт по прототипу
function addProduct(){
    
}

const state = {
    products: {
        // brand: {
        //     default: "",
        // },
        // model: {
        //     default: "",
        // },
        // modifiacation: {
        //     default: "",
        // },
        // hp: {
        //     default: "",
        // },
        // nm: {
        //     default: "",
        // }
        rs: {
            brand: {
                name: "",
                id: 0
            },
            model: {
                name: "",
                id: 0
            },
            modifiacation: {
                name: "",
                id: 0
            },
            hp: "",
            nm: "",
        },
        gtr: {
            brand: {
                name: "",
                id: 0
            },
            model: {
                name: "",
                id: 0
            },
            modifiacation: {
                name: "",
                id: 0
            },
            hp: "",
            nm: "",
        },
        chip: {
            brand: {
                name: "",
                id: 0
            },
            model: {
                name: "",
                id: 0
            },
            modifiacation: {
                name: "",
                id: 0
            },
            hp: "",
            nm: "",
        },
        default: {
            brand: {
                name: "",
                id: 0
            },
            model: {
                name: "",
                id: 0
            },
            modifiacation: {
                name: "",
                id: 0
            },
            hp: "",
            nm: "",
        }
    }
}

// let stateJSON = JSON.stringify(state.products);
// console.log(stateJSON);
function setStorage(){
    localStorage.products = JSON.stringify(state.products);
    console.log(localStorage.products);
}

if(localStorage.getItem("products")){
    state.products = JSON.parse(localStorage.getItem("products"));
    console.log("loaded")
} else{
    setStorage();
}



function DataService(){
   
    // return state;    
}
// const dataService = new DataService();
