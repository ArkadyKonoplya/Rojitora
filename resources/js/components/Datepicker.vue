<template>
    <input/>
</template>
<script>
require('jquery-ui'); 
require('jquery');
import $ from 'jquery';
// import "bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css";
// import "bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js";
export default {
  props: [ 'dateFormat' ],
  mounted: function() {
    var self = this;
    $(this.$el).datetimepicker({
      dateFormat: this.dateFormat,
      onSelect: function(date) {
        self.$emit('update-date', date);
      }
    });
  },
 
  beforeDestroy: function() {
    $(this.$el).datetimepicker('hide').datetimepicker('destroy');
  }
}
</script>
