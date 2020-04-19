import axios from 'axios'

const state={

    products:[
     
    ],
    paginationdata:[

    ],
    samplecategory:[

    ]
};


const getters={
    customerProducts: state => {
        return state.products
    },
    paginationdata:state=>{
        return state.paginationdata
    },
    samplecategory:state=>{
        return state.samplecategory
    }

};

const actions={
    async  fetchCustomerProducts({commit}){
       const resp= await axios.get('/api/products/indexproducts');
        commit('setCustomerProducts',resp.data.data);
    },
    async fetchPaginationData({commit}){
        const resp= await axios.get('/api/products/indexproducts');
        console.log(resp.data.current_page)
        commit('setPagination',resp.data)
    },
    async fetchProducts({commit},pageNo){
        const resp=await axios.get(`/api/products/indexproducts?page=${pageNo}`);
        commit('setCustomerProducts',resp.data.data);

    },
    async fetchSampleCategories({commit},categoryId){
            const resp=await axios.get(`http://127.0.0.1:8000/api/products/samplecategory/${categoryId}`);
            
            commit('setsamplecategory',resp.data)
    }
};

const mutations={
    setCustomerProducts:(state,products)=>(state.products=products),
    setPagination:(state,data)=>(state.paginationdata=data),
    setsamplecategory:(state,data)=>(state.samplecategory=data)
};


export default{state,getters,actions,mutations}