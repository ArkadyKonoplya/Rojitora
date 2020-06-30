<template>
    <div class="row mt-5">
        <div class="col-lg-6">
            <div class="form-group">
                <div class="form-control kt-portlet__content bg-grey kt-align-center pt-5 pb-5" style="height: auto">
                    <h2 class="font-weight-boldest text-dark">
                        荷物情報
                    </h2>
                    <div class="row">
                        <div class="col-sm-4 mb-2">
                            <button class="btn btn-block kt-font-xl custom_btn_orange" v-on:click="luggage_search">検 索</button>
                        </div>	
                        <div class="col-sm-4 mb-2">
                            <button class="btn btn-block kt-font-xl custom_btn_orange" v-on:click="luggage_add">登 錄</button>
                        </div>
                        <div class="col-sm-4">
                            <button class="btn btn-block kt-font-xl custom_btn_orange" v-on:click="luggage_edit_delete">修 正・削 除</button>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <div class="form-control kt-portlet__content bg-grey kt-align-center pt-5 pb-5" style="height: auto">
                    <h2 class="font-weight-boldest text-dark">
                        空車情報
                    </h2>
                    <div class="row">
                        <div class="col-sm-4 mb-2">
                            <button class="btn btn-block kt-font-xl custom_btn_blue" v-on:click="emptyTruck_search">検 索</button>
                        </div>	
                        <div class="col-sm-4 mb-2">
                            <button class="btn btn-block kt-font-xl custom_btn_blue" v-on:click="emptyTruck_add">登 錄</button>
                        </div>	
                        <div class="col-sm-4">
                            <button class="btn btn-block kt-font-xl custom_btn_blue" v-on:click="luggage_edit_delete">修 正・削 除</button>
                        </div>	
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    methods:{
        luggage_search() {
         this.$router.push({name: 'index15'});
        },
        luggage_add() {
         this.$router.push({name: 'index14'});
        },
        luggage_edit_delete() {
         this.$router.push({name: 'index13'});
        },
        emptyTruck_search() {
         this.$router.push({name: 'index11'});
        },
        emptyTruck_add() {
         this.$router.push({name: 'index10'});
        },
        emptyTruck_edit_delete() {
         this.$router.push({name: 'index9'});
        }
    }
    
}
</script>

