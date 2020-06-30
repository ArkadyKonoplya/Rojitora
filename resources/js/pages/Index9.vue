<template>
     <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-grid--stretch mt-4">
        <div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">

                <!-- begin:: Content -->
                <div class="kt-content kt-grid__item kt-grid__item--fluid">
                    <!--Begin::Section-->
                    <div class="row">
                        <div class="col-xl-10">
                            <!--begin:: Widgets/Blog-->
                            <div class="kt-portlet kt-portlet--height-fluid kt-current_info mr-4">

                                <firsttopsidebar></firsttopsidebar>
                                <secondtopsidebar></secondtopsidebar>  
                                <div class="kt-portlet__body">
                                    <div class="luggage-header">
                                        <div class="luggage-search kt-align-center mb-3">
                                            <img class="kt-widget7__img tooltip_sty" src="/media/img/truck_icon-2.png" alt="">
                                            空車情報修正・削除
                                        </div>
                                    </div>
                                    <!--begin::Portlet-->
                                    <div class="luggage_search">

                                        <div class="kt-portlet kt-portlet--mobile">
                                            <div class="kt-portlet__head row align-items-center">
                                                <div class="kt-portlet__head-label col-xl-4">
                                                    <h3 class="kt-portlet__head-title">
                                                        荷物情報登録件数：0 件
                                                    </h3>
                                                </div>
                                                <div class="col-xl-6"></div>
                                                <div class=" col-xl-2 order-2 order-xl-1">
                                                    <div class="kt-form kt-form--label-right">
                                                        <div class="kt-form__group kt-form__group--inline">
                                                            <div class="kt-form__label filter__number">
                                                                <label>表示数選択:</label>
                                                            </div>
                                                            <div class="kt-form__control">
                                                                <select class="form-control bootstrap-select" id="kt_form">
                                                                    <option value="1">10</option>
                                                                    <option value="2">20</option>
                                                                    <option value="4">30</option>
                                                                    <option value="3">50</option>
                                                                    <option value="6">100</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="kt-portlet__body">

                                                <!--begin: Search Form -->
                                                <div class="kt-form kt-form--label-right">
                                                    <div class="row">
                                                        <div class="col-xl-1 sort_sign row  align-items-center">
                                                            並べ替え
                                                        </div>
                                                        <div class="col-xl-10 row align-items-center">


                                                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                                <div class="kt-form__group kt-form__group--inline">
                                                                    <div class="kt-form__label filter_sort">
                                                                        <label>1番目:</label>
                                                                    </div>
                                                                    <div class="kt-form__control first_control">
                                                                        <select class="form-control bootstrap-select" id="kt_form_status">
                                                                            <option value="">指定しない</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Delivered</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="kt-form__control second_control">
                                                                        <select class="form-control bootstrap-select" id="kt_form_status">
                                                                            <option value="">昇順</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Delivered</option>
                                                                            <option value="3">Canceled</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                                <div class="kt-form__group kt-form__group--inline">
                                                                    <div class="kt-form__label filter_sort">
                                                                        <label>2番目:</label>
                                                                    </div>
                                                                    <div class="kt-form__control first_control">
                                                                        <select class="form-control bootstrap-select" id="kt_form_status">
                                                                            <option value="">指定しない</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Delivered</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="kt-form__control second_control">
                                                                        <select class="form-control bootstrap-select" id="kt_form_status">
                                                                            <option value="">昇順</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Delivered</option>
                                                                            <option value="3">Canceled</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4 kt-margin-b-20-tablet-and-mobile">
                                                                <div class="kt-form__group kt-form__group--inline">
                                                                    <div class="kt-form__label filter_sort">
                                                                        <label>3番目:</label>
                                                                    </div>
                                                                    <div class="kt-form__control first_control">
                                                                        <select class="form-control bootstrap-select" id="kt_form_status">
                                                                            <option value="">指定しない</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Delivered</option>

                                                                        </select>
                                                                    </div>
                                                                    <div class="kt-form__control second_control">
                                                                        <select class="form-control bootstrap-select" id="kt_form_status">
                                                                            <option value="">昇順</option>
                                                                            <option value="1">Pending</option>
                                                                            <option value="2">Delivered</option>
                                                                            <option value="3">Canceled</option>

                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="col-xl-1">
                                                            <div class="kt-margin-b-20-tablet-and-mobile">
                                                                <button type="button" class="btn btn-brand btn-elevate btn-pill"> 並べ替え</button>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="row delete_result">
                                                        <div class="col-xl-1">
                                                            <div class="kt-margin-b-20-tablet-and-mobile">
                                                                <button type="button" class="btn btn-elevate"> 一消去</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!--end: Search Form -->
                                            </div>
                                            <div class="kt-portlet__body kt-portlet__body--fit">

                                                <!--begin: Datatable -->
                                                <table class="table table-bordered ">
                                                    <thead >
                                                        <tr>
                                                            <th class = "number">一斉消去</th>
                                                            <th class = "shipper">消去</th>
                                                            <th>修正</th>
                                                            <th>問合番号</th>
                                                            <th class = "tel">空車日時</th>
                                                            <th>空車地</th>
                                                            <th class = "loding-space">積可能地</th>
                                                            <th>荷降日時</th>
                                                            <th class = "loding-space">降可能地</th>
                                                            <th class = "loding-space">車輌</th>
                                                            <th class = "type">種類１</th>
                                                            <th class = "type">種類２</th>
                                                            <th class = "type">種類３</th>
                                                            <th>担当</th>
                                                            <th>備考</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        
                                                        <tr class="odd">
                                                            <td valign="top" colspan="15" class="dataTables_empty ">空車情報のデータがありません</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination pagination-lg justify-content-center mt-3">
                                                        <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous" style = "border-radius:50%;background-color:#fff">
                                                        <i style='font-size:12px; color:#396ec2' class='fas' >&#xf0d9;</i>
                                                        </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next" style = "border-radius:50%; background-color:#fff">
                                                            <i style='font-size:12px;color:#396ec2' class='fas' >&#xf0da;</i>
                                                        </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                                                
                                                <!--end: Datatable -->
                                            </div>
                                        </div>

                                    </div>
                                    <!--end::Portlet-->
                                    
                                </div>
                            </div>
                            <!--end:: Widgets/Blog-->
                            
                        </div>
                        <rightsidebar02></rightsidebar02>
                    </div>
                </div>
                <!-- end:: Content -->
            </div>
        </div>
    </div>
</template>
<style>
	@import '/css/style_r.bundle.css';
    @import '/css/style_contact.css';
    
    @import '/css/style_emptruck_edit.css';
</style>
<script>
import firsttopsidebar from '../components/FirstTopSidebar.vue'
import secondtopsidebar from '../components/SecondTopSidebar.vue'
import rightsidebar02 from '../components/RightSidebar02.vue'
export default {
    components: {
        firsttopsidebar,secondtopsidebar,rightsidebar02
    }
}
</script>


