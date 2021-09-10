/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

import $ from 'jquery';
window.$ = window.jQuery = $;

import 'jquery-ui/ui/widgets/datepicker.js';

$('.datepicker').datepicker();

$('body').on('focus',".datepicker", function(){
	$(this).datepicker();
	$(this).removeClass('hasDatepicker').datepicker();
});

$('.yearpicker').datepicker({
        yearRange: "1900:c+1",
		changeMonth: false,
		changeYear: true,
		showButtonPanel: true,
		closeText:'Select',
		currentText: 'This year',
		onClose: function(dateText, inst) {
		  var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
		  $(this).val($.datepicker.formatDate("yy", new Date(year, 0, 1)));
		},
		beforeShow: function(input, inst){
		  if ($(this).val()!=''){
			var tmpyear = $(this).val();
			$(this).datepicker('option','defaultDate',new Date(tmpyear, 0, 1));
		  }
		}
    }).focus(function () {
		$(".ui-datepicker-month").hide();
		$(".ui-datepicker-calendar").hide();
		$(".ui-datepicker-current").hide();
		/*$(".ui-datepicker-close").hide();*/
		$(".ui-datepicker-prev").hide();
		$(".ui-datepicker-next").hide();
		$("#ui-datepicker-div").position({
		  my: "left top",
		  at: "left bottom",
		  of: $(this)
		});
	  }).attr("readonly", false);

$('#lang_hindi').change(function() {
	if(this.checked) {
		document.getElementById("lang_hindi_read").disabled= false;
		document.getElementById("lang_hindi_write").disabled= false;
		document.getElementById("lang_hindi_speak").disabled= false;
	} else {
		document.getElementById("lang_hindi_read").checked= false;
		document.getElementById("lang_hindi_write").checked= false;
		document.getElementById("lang_hindi_speak").checked= false;
		document.getElementById("lang_hindi_read").disabled= true;
		document.getElementById("lang_hindi_write").disabled= true;
		document.getElementById("lang_hindi_speak").disabled= true;
	}
});

$('#lang_english').change(function() {
	if(this.checked) {
		document.getElementById("lang_english_read").disabled= false;
		document.getElementById("lang_english_write").disabled= false;
		document.getElementById("lang_english_speak").disabled= false;
	} else {
		document.getElementById("lang_english_read").checked= false;
		document.getElementById("lang_english_write").checked= false;
		document.getElementById("lang_english_speak").checked= false;
		document.getElementById("lang_english_read").disabled= true;
		document.getElementById("lang_english_write").disabled= true;
		document.getElementById("lang_english_speak").disabled= true;
	}
});

$('#lang_gujarati').change(function() {
	if(this.checked) {
		document.getElementById("lang_gujarati_read").disabled= false;
		document.getElementById("lang_gujarati_write").disabled= false;
		document.getElementById("lang_gujarati_speak").disabled= false;
	} else {
		document.getElementById("lang_gujarati_read").checked= false;
		document.getElementById("lang_gujarati_write").checked= false;
		document.getElementById("lang_gujarati_speak").checked= false;
		document.getElementById("lang_gujarati_read").disabled= true;
		document.getElementById("lang_gujarati_write").disabled= true;
		document.getElementById("lang_gujarati_speak").disabled= true;
	}
});

$('#tech_php').change(function() {
	if(this.checked) {
		document.getElementById("tech_php_beginner").disabled= false;
		document.getElementById("tech_php_mediator").disabled= false;
		document.getElementById("tech_php_expert").disabled= false;
	} else {
		document.getElementById("tech_php_beginner").checked= false;
		document.getElementById("tech_php_mediator").checked= false;
		document.getElementById("tech_php_expert").checked= false;
		document.getElementById("tech_php_beginner").disabled= true;
		document.getElementById("tech_php_mediator").disabled= true;
		document.getElementById("tech_php_expert").disabled= true;
	}
});

$('#tech_mysql').change(function() {
	if(this.checked) {
		document.getElementById("tech_mysql_beginner").disabled= false;
		document.getElementById("tech_mysql_mediator").disabled= false;
		document.getElementById("tech_mysql_expert").disabled= false;
	} else {
		document.getElementById("tech_mysql_beginner").checked= false;
		document.getElementById("tech_mysql_mediator").checked= false;
		document.getElementById("tech_mysql_expert").checked= false;
		document.getElementById("tech_mysql_beginner").disabled= true;
		document.getElementById("tech_mysql_mediator").disabled= true;
		document.getElementById("tech_mysql_expert").disabled= true;
	}
});

$('#tech_laravel').change(function() {
	if(this.checked) {
		document.getElementById("tech_laravel_beginner").disabled= false;
		document.getElementById("tech_laravel_mediator").disabled= false;
		document.getElementById("tech_laravel_expert").disabled= false;
	} else {
		document.getElementById("tech_laravel_beginner").checked= false;
		document.getElementById("tech_laravel_mediator").checked= false;
		document.getElementById("tech_laravel_expert").checked= false;
		document.getElementById("tech_laravel_beginner").disabled= true;
		document.getElementById("tech_laravel_mediator").disabled= true;
		document.getElementById("tech_laravel_expert").disabled= true;
	}
});

$('#tech_oracle').change(function() {
	if(this.checked) {
		document.getElementById("tech_oracle_beginner").disabled= false;
		document.getElementById("tech_oracle_mediator").disabled= false;
		document.getElementById("tech_oracle_expert").disabled= false;
	} else {
		document.getElementById("tech_oracle_beginner").checked= false;
		document.getElementById("tech_oracle_mediator").checked= false;
		document.getElementById("tech_oracle_expert").checked= false;
		document.getElementById("tech_oracle_beginner").disabled= true;
		document.getElementById("tech_oracle_mediator").disabled= true;
		document.getElementById("tech_oracle_expert").disabled= true;
	}
});

$(".addwork").click(function(){
	var lastid = $(".element:last").attr("id");
	var split_id = lastid.split("_");
	var nextindex = Number(split_id[1]) + 1;
	$(".element:last").after("<div class='form-row element' id='div_"+ nextindex +"'></div>");
	$("#div_" + nextindex).append("<div class='col-2'><div class='form-group'><label>Company Name</label><input  class='form-control' id='work_company_name' name='work["+ nextindex +"][company_name]' value=''></div></div><div class='col-2'><div class='form-group'><label>Designation</label><input  class='form-control' id='work_designation' name='work["+ nextindex +"][designation]' value=''></div></div><div class='col-2'><div class='form-group'><label>From</label><input  class='form-control datepicker'  id='work_from_"+ nextindex +"' name='work["+ nextindex +"][from]' value=''></div></div><div class='col-2'><div class='form-group'><label>To</label><input  class='form-control datepicker' id='work_to_"+ nextindex +"' name='work["+ nextindex +"][to]' value=''></div></div><div class='col-2'><div class='form-group'><label>&nbsp;</label><input type='button' class='form-control btn btn-danger removework' id='remove_" + nextindex + "' value='Delete'></div></div>"); 
 });
 
 $('.container').on('click','.removework',function(){
	var id = this.id;
	var split_id = id.split("_");
	var deleteindex = split_id[1];
	$("#div_" + deleteindex).remove();
 });