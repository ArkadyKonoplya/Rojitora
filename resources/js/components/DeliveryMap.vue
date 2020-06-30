<template>
    <div class="kt-portlet kt-portlet--tab p-5">
        <div class="kt-widget5__content p-3">
            <div class="row pt-3 map_area">
                <div class="col-sm-7">
                    <div class="col mb-2 top-z-index">
                        <a  v-on:click="activity"><img id="area01" src="/media/img/map/area01.png"/></a>
                        <a  v-on:click="activity"><img id="area02" src="/media/img/map/area02.png"/></a>
                        <a  v-on:click="activity"><img id="area03" src="/media/img/map/area03.png"/></a>
                        <a  v-on:click="activity"><img id="area04" src="/media/img/map/area04.png"/></a>
                    </div>
                    <div class="col mt-n3 mb-n2 top-z-index">
                        <i class="fa fa-caret-down arrow_button_blue pr-3"></i>
                        <i class="fa fa-caret-down arrow_button_blue pl-4 pr-3"></i>
                        <i class="fa fa-caret-down arrow_button_blue pl-4 pr-3"></i>
                        <i class="fa fa-caret-down arrow_button_blue pl-4"></i>
                    </div>
                    <div class="col mb-2 top-z-index">
                        <a  v-on:click="activity"><img id="pref01" src="/media/img/map/pref01.png"/></a>
                        <a  v-on:click="activity"><img id="pref02" src="/media/img/map/pref02.png"/></a>
                        <a  v-on:click="activity"><img id="pref03" src="/media/img/map/pref03.png"/></a>
                        <a  v-on:click="activity"><img id="pref04" src="/media/img/map/pref04.png"/></a>
                    </div>
                    <div class="col mb-2 top-z-index">
                       <a  v-on:click="activity"><img id="pref05" src="/media/img/map/pref05.png"/></a>
                       <a  v-on:click="activity"><img id="pref06" src="/media/img/map/pref06.png"/></a>
                       <a  v-on:click="activity"><img id="pref07" src="/media/img/map/pref07.png"/></a>
                       <a  v-on:click="activity"><img id="pref08" src="/media/img/map/pref08.png"/></a>
                    </div>
                    <div class="col mb-2 top-z-index">
                        <a  v-on:click="activity"><img id="pref09" src="/media/img/map/pref09.png"/></a>
                        <a  v-on:click="activity"><img id="pref10" src="/media/img/map/pref10.png"/></a>
                        <a  v-on:click="activity"><img id="pref11" src="/media/img/map/pref11.png"/></a>
                        <a  v-on:click="activity"><img id="pref12" src="/media/img/map/pref12.png"/></a>
                    </div>
                    <div class="col mb-2">
                       <a  v-on:click="activity"><img id="pref13" src="/media/img/map/pref13.png"/></a>
                       <a  v-on:click="activity"><img id="pref14" src="/media/img/map/pref14.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref23" src="/media/img/map/pref23.png"/></a>
                        <a  v-on:click="activity"><img id="pref24" src="/media/img/map/pref24.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref15" src="/media/img/map/pref15.png"/></a>
                    </div>
                </div>
                <div class="col-sm-5 right_button">
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="area05" src="/media/img/map/area05.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="area06" src="/media/img/map/area06.png"/></a>
                        <a  v-on:click="activity"><img id="area07" src="/media/img/map/area07.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref16" src="/media/img/map/pref16.png"/></a>
                        <a  v-on:click="activity"><img id="pref17" src="/media/img/map/pref17.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref18" src="/media/img/map/pref18.png"/></a>
                        <a  v-on:click="activity"><img id="pref19" src="/media/img/map/pref19.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref20" src="/media/img/map/pref20.png"/></a>
                        <a  v-on:click="activity"><img id="pref21" src="/media/img/map/pref21.png"/></a>
                    </div>
                    <div class="col">
                        <a  v-on:click="activity"><img id="pref22" src="/media/img/map/pref22.png"/></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 bg_img" id="bg_hidden">
                    <div class="button1">
                        <a  v-on:click="activity"><img id="map_area05" src="/media/img/map/map_area01.png"/></a>
                    </div>
                    <div class="button2">
                        <a  v-on:click="activity"><img id="map_area07" src="/media/img/map/map_area02.png"/></a>
                    </div>
                    <div class="button3">
                        <a  v-on:click="activity"><img id="map_area06" src="/media/img/map/map_area03.png"/></a>
                    </div>
                    <div class="button4">
                        <a  v-on:click="activity"><img id="map_area03" src="/media/img/map/map_area04.png"/></a>
                    </div>
                    <div class="button5">
                        <a  v-on:click="activity"><img id="map_area02" src="/media/img/map/map_area09.png"/></a>
                    </div>
                    <div class="button6">
                        <a  v-on:click="activity"><img id="map_area11" src="/media/img/map/map_area05.png"/></a>
                    </div>
                    <div class="button7">
                        <a  v-on:click="activity"><img id="map_area04" src="/media/img/map/map_area07.png"/></a>
                    </div>
                    <div class="button8">
                        <a  v-on:click="activity"><img id="pref10" src="/media/img/map/pref10.png"/></a>
                    </div>
                    <div class="button9">
                        <a  v-on:click="activity"><img id="pref12" src="/media/img/map/pref12.png"/></a>
                    </div>
                    <div class="button10">
                        <a  v-on:click="activity"><img id="pref08" src="/media/img/map/pref08.png"/></a>
                    </div>
                    <div class="button11">
                        <a  v-on:click="activity"><img id="pref06" src="/media/img/map/pref06.png"/></a>
                    </div>
                    <div class="button12">
                        <a  v-on:click="activity"><img id="pref11" src="/media/img/map/pref11.png"/></a>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-sm-8 pt-lg-5">
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="area08" src="/media/img/map/area08.png"/></a>
                        <a  v-on:click="activity" class="ml-sm-4"><img id="area09" src="/media/img/map/area09.png"/></a>
                        <a  v-on:click="activity"><img id="area10" src="/media/img/map/area10.png"/></a>
                    </div>
                    <div class="mt-n3 mb-n2">
                        <i class="fa fa-caret-down arrow_bg_button_blue"></i>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref25" src="/media/img/map/pref25.png"/></a>
                        <a  v-on:click="activity"><img id="pref26" src="/media/img/map/pref26.png"/></a>
                        <a  v-on:click="activity" class="ml-sm-4"><img id="pref33" src="/media/img/map/pref33.png"/></a>
                        <a  v-on:click="activity"><img id="pref34" src="/media/img/map/pref34.png"/></a>
                    </div>
                    <div class="col mb-2 top-z-index">
                        <a  v-on:click="activity"><img id="pref27" src="/media/img/map/pref27.png"/></a>
                        <a  v-on:click="activity"><img id="pref28" src="/media/img/map/pref28.png"/></a>
                        <a  v-on:click="activity" class="ml-sm-4"><img id="pref35" src="/media/img/map/pref35.png"/></a>
                        <a  v-on:click="activity"><img id="pref36" src="/media/img/map/pref36.png"/></a>
                    </div>
                    <div class="col mb-2 top-z-index">
                        <a  v-on:click="activity"><img id="pref29" src="/media/img/map/pref29.png"/></a>
                        <a  v-on:click="activity"><img id="pref30" src="/media/img/map/pref30.png"/></a>
                        <a  v-on:click="activity" class="ml-sm-4"><img id="pref37" src="/media/img/map/pref37.png"/></a>
                        <a  v-on:click="activity"><img id="pref38" src="/media/img/map/pref38.png"/></a>
                    </div>
                    <div class="col mb-5 top-z-index">
                        <a  v-on:click="activity"><img id="pref31" src="/media/img/map/pref31.png"/></a>
                        <a  v-on:click="activity"><img id="pref32" src="/media/img/map/pref32.png"/></a>
                        <a  v-on:click="activity" class="ml-sm-4"><img id="pref39" src="/media/img/map/pref39.png"/></a>
                        <a  v-on:click="activity"><img id="pref40" src="/media/img/map/pref40.png"/></a>
                    </div>
                </div>
                <div class="col-sm-4 right_button custom_mt">
                    <div class="col mb-2 ">
                        <a  v-on:click="activity"><img id="area11" src="/media/img/map/area11.png"/></a>
                        <a  v-on:click="activity"><img id="area12" src="/media/img/map/area12.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref41" src="/media/img/map/pref41.png"/></a>
                        <a  v-on:click="activity"><img id="pref42" src="/media/img/map/pref42.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref43" src="/media/img/map/pref43.png"/></a>
                        <a  v-on:click="activity"><img id="pref44" src="/media/img/map/pref44.png"/></a>
                    </div>
                    <div class="col mb-2">
                        <a  v-on:click="activity"><img id="pref45" src="/media/img/map/pref45.png"/></a>
                        <a  v-on:click="activity"><img id="pref46" src="/media/img/map/pref46.png"/></a>
                    </div>
                    <div class="col mb-5">
                        <a  v-on:click="activity"><img id="pref47" src="/media/img/map/pref47.png"/></a>
                    </div>
                </div>
            </div>
            <div class="col form-group">
                <div class="form-control imgbox"></div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    methods: {
        activity(event){
            var cname = '';
            var wkvalue = '';
            var idname = event.target.id;
            idname = idname.substr(idname.length-6,6);
            
            var divname = idname.substr(0,4);
            if ($('.box_left').css('background-color') === 'rgb(238, 255, 255)') {
                cname = '.box_left';
                wkvalue = $('input[name="beginplace"]').val();
                
                if (wkvalue.match(idname)) {
                    wkvalue = wkvalue.replace(idname+',','');
                    $('input[name="beginplace"]').val(wkvalue);
                } else {
                    $('input[name="beginplace"]').val(wkvalue+idname+',');
                }
                wkvalue = $('input[name="beginplace"]').val();
                console.log(wkvalue);
            } else if ($('.box_right').css('background-color') === 'rgb(238, 255, 255)') {
                cname = '.box_right';
                wkvalue = $('input[name="endplace"]').val();
                
                if (wkvalue.match(idname)) {
                    wkvalue = wkvalue.replace(idname+',','');
                    $('input[name="endplace"]').val(wkvalue);
                } else {
                    $('input[name="endplace"]').val(wkvalue+idname+',');
                }
                wkvalue = $('input[name="endplace"]').val();
            } else if ($('.box_empty').css('background-color') === 'rgb(238, 255, 255)') {
                if (divname === 'pref') {
                    cname = '.box_empty';
                    wkvalue = $('input[name="emptyplace"]').val();
                    if (wkvalue.match(idname)) {
                        wkvalue = wkvalue.replace(idname,'');
                        $('input[name="emptyplace"]').val(wkvalue);
                    } else {
                        $('input[name="emptyplace"]').val(idname);
                    }
                    wkvalue = $('input[name="emptyplace"]').val();
                }
            } else if ($('.box_emptyOther').css('background-color') === 'rgb(238, 255, 255)') {
                if (divname === 'pref') {
                    cname = '.box_emptyOther';
                    wkvalue = $('input[name="emptyOtherplace"]').val();
                    if (wkvalue.match(idname)) {
                        wkvalue = wkvalue.replace(idname,'');
                        $('input[name="emptyOtherplace"]').val(wkvalue);
                    } else {
                        $('input[name="emptyOtherplace"]').val(idname);
                    }
                    wkvalue = $('input[name="emptyOtherplace"]').val();
                }
            } else {
            }
            
            $(cname).empty();
            var wkarray = wkvalue.split(",");
            for( var i=0 ; i<wkarray.length ; i++ ) {
                if (wkarray[i] !== '') {
                     $(cname).append('<img alt=""  src="/media/img/map/'+wkarray[i]+'.png">');
                }
            }
        }
    }
}
</script>
