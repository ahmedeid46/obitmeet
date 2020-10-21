(window.webpackJsonp=window.webpackJsonp||[]).push([[46],{P33g:function(t,e,a){"use strict";var s={extends:a("g+26").a,data:function(){return{formData:{uuid:null,name:"",slug:"",description:"",parent:null,type:null},hasSlug:!1,hasParent:!1,preRequisite:{options:[]},formLabels:{name:$t("option.props.name"),slug:$t("option.props.slug"),description:$t("option.props.description"),parent:$t("option.props.parent"),type:$t("option.props.type")},initUrl:"options",entityTitle:"option.option"}},computed:{computedClass:function(){return this.hasSlug&&this.hasParent?"col-md-4":this.hasSlug||this.hasParent?"col-md-6":""}},methods:{createSlug:function(){this.showKeepAdding&&this.formData.name!=this.initialFormData.name?this.formData.slug=this.formData.name.kebabCase():this.formData.slug=this.formData.slug?this.formData.slug:this.formData.name.kebabCase()},preSubmit:function(){this.createSlug(),!this.hasParent||this.formData.parent?this.submit():this.$toasted.error($t("global.invalid",{attribute:$t("option.props.parent")}),this.$toastConfig.error)}},mounted:function(){this.getInitialData()},beforeMount:function(){var t=this.$route.meta;this.customFilters.type=t.optionType,this.formData.type=t.optionType,this.entityTitle=t.entityTitle,this.hasSlug=t.hasSlug,this.hasParent=t.hasParent}},o=a("KHd+"),r=Object(o.a)(s,(function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("form",{on:{submit:function(e){return e.preventDefault(),t.preSubmit(e)}}},[a("animated-loader",{attrs:{"is-loading":t.isLoading||t.isFetching,"loader-color":t.vars.loaderColor}}),t._v(" "),a("div",{staticClass:"row"},[a("div",{class:["col-12 mb-4",t.computedClass]},[a("base-input",{attrs:{"auto-focus":"",label:t.formLabels.name,type:"text",error:t.formErrors.name,required:""},on:{"update:error":function(e){return t.$set(t.formErrors,"name",e)},blur:t.createSlug},model:{value:t.formData.name,callback:function(e){t.$set(t.formData,"name",e)},expression:"formData.name"}})],1),t._v(" "),t.hasSlug?a("div",{class:["col-12 mb-4",t.computedClass]},[a("base-input",{attrs:{label:t.formLabels.slug,type:"text",error:t.formErrors.slug,format:"kebabCase",required:""},on:{"update:error":function(e){return t.$set(t.formErrors,"slug",e)},focus:t.createSlug,blur:t.createSlug},model:{value:t.formData.slug,callback:function(e){t.$set(t.formData,"slug",e)},expression:"formData.slug"}})],1):t._e(),t._v(" "),t.hasParent?a("div",{class:["col-12 mb-4",t.computedClass]},[a("base-select",{attrs:{options:t.preRequisite.options,label:t.formLabels.parent,error:t.formErrors.parent,"allow-empty":!0,disabled:t.isLoading,"track-by":"uuid","show-by":"nameWithParents"},on:{"update:error":function(e){return t.$set(t.formErrors,"parent",e)}},model:{value:t.formData.parent,callback:function(e){t.$set(t.formData,"parent",e)},expression:"formData.parent"}})],1):t._e(),t._v(" "),a("div",{staticClass:"col-12 mb-4"},[a("base-input",{attrs:{label:t.formLabels.description,type:"text",error:t.formErrors.description},on:{"update:error":function(e){return t.$set(t.formErrors,"description",e)}},model:{value:t.formData.description,callback:function(e){t.$set(t.formData,"description",e)},expression:"formData.description"}})],1)]),t._v(" "),a("div",{staticClass:"form-footer mt-5"},[a("div",{staticClass:"left-side"},[a("base-button",{attrs:{type:"button",design:"light",tabindex:"-1"},on:{click:function(e){return t.$router.back()}}},[a("i",{staticClass:"fas fa-chevron-left"}),t._v(" "+t._s(t.$t("general.cancel")))]),t._v(" "),t.showKeepAdding?a("base-checkbox",{staticClass:"ml-3 mt-2",model:{value:t.keepAdding,callback:function(e){t.keepAdding=e},expression:"keepAdding"}},[t._v("\n                "+t._s(t.$t("general.keep_adding"))+"\n            ")]):t._e()],1),t._v(" "),a("div",{staticClass:"right-side"},[a("base-button",{attrs:{type:"button",design:"light"},on:{click:t.reset}},[t._v(t._s(t.$t("general.reset")))]),t._v(" "),a("base-button",{attrs:{type:"submit",design:"primary"}},[a("i",{staticClass:"fas fa-save"}),t._v(" "+t._s(t.$t("global.save",{attribute:t.$t(t.entityTitle)})))])],1)]),t._v(" "),t.showKeepAdding&&t.keepAdding?[a("keep-adding-form",{attrs:{"keep-adding-fields":t.keepAddingFields,"keep-adding-option":t.keepAddingOption,"keep-adding-selected-fields":t.keepAddingSelectedFields,"is-loading":t.isLoading},on:{optionUpdated:function(e){t.keepAddingOption=e},fieldsUpdated:function(e){t.keepAddingSelectedFields=e}}})]:t._e()],2)}),[],!1,null,null,null);e.a=r.exports},hW61:function(t,e,a){"use strict";a.r(e);var s=a("P33g"),o=a("LF47"),r={components:{CommonForm:s.a},extends:o.a,data:function(){return{initUrl:"options",fallBackRoute:"appOptionList"}},beforeMount:function(){var t=this.$route.meta;this.fallBackRoute="".concat(t.routeNamePrefix,"List")}},i=a("KHd+"),n=Object(i.a)(r,(function(){var t=this.$createElement,e=this._self._c||t;return e("base-container",{attrs:{boxed:""}},[e("common-form",{attrs:{"is-fetching":this.isFetching,"edit-data":this.entity}})],1)}),[],!1,null,null,null);e.default=n.exports}}]);
//# sourceMappingURL=edit.js.map?id=8e16c92725a05a424ffc