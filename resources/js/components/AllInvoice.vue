<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 mt-5 mb-5">
                <div class="card">
                    <div class="card-header">Invoice List</div>

                    <div class="card-body">
                        <table class="table table-striped table-responsive-md btn-table">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Grand Total</th>
                                <th>Created</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr v-for="(invoice,index) in invoices.data">
                                <th scope="row">{{++index}}</th>
                                <td>TK.{{invoice.total_price}}</td>
                                <td>{{invoice.created_at}}</td>
                                <td><router-link :to="{ path: '/invoice/'+invoice.id}" class="btn btn-success btn-rounded btn-sm m-0" title="View Invoice"><i class="fa fa-eye"></i></router-link></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data(){
            return{
                invoices: []
            }
        },

        methods:{
            loadInvoices(){
                axios.get('/all-invoice-list').then( (response)=>this.invoices = response.data);
            },
            showInvoice(id){
                console.log(id);
            }
        },

        created(){
            this.loadInvoices();
        }
    }
</script>
