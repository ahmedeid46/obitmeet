(window.webpackJsonp=window.webpackJsonp||[]).push([[21],{"3HR4":function(t,a,e){"use strict";var r=e("o0o1"),o=e.n(r),n=e("L2JU"),i=e("8BOd");function s(t,a,e,r,o,n,i){try{var s=t[n](i),l=s.value}catch(t){return void e(t)}s.done?a(l):Promise.resolve(l).then(r,o)}function l(t,a){var e=Object.keys(t);if(Object.getOwnPropertySymbols){var r=Object.getOwnPropertySymbols(t);a&&(r=r.filter((function(a){return Object.getOwnPropertyDescriptor(t,a).enumerable}))),e.push.apply(e,r)}return e}function c(t){for(var a=1;a<arguments.length;a++){var e=null!=arguments[a]?arguments[a]:{};a%2?l(Object(e),!0).forEach((function(a){f(t,a,e[a])})):Object.getOwnPropertyDescriptors?Object.defineProperties(t,Object.getOwnPropertyDescriptors(e)):l(Object(e)).forEach((function(a){Object.defineProperty(t,a,Object.getOwnPropertyDescriptor(e,a))}))}return t}function f(t,a,e){return a in t?Object.defineProperty(t,a,{value:e,enumerable:!0,configurable:!0,writable:!0}):t[a]=e,t}a.a={components:{},data:function(){return{formData:{},formErrors:{},initialFormData:null,initianLength:0,emptyFormData:null,entity:null,preRequisite:{},isLoading:!0,dataType:null,configType:""}},computed:c({},Object(n.c)("config",["configs","vars"])),methods:c(c({},Object(n.b)("config",["GetConfig"])),{},{findActualValue:function(t,a){var e=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"uuid";return a.find((function(a){return a[e]===t}))||null},submit:function(){var t=this;if(formUtil.isUnchanged(this.initialFormData,this.formData))return this.$toasted.info(this.$t("general.nothing_changed"),this.$toastConfig.info),!1;this.isLoading=!0;var a="module"===this.configType?i.d:i.c;"function"==typeof this.beforeSubmit&&this.beforeSubmit(),a(this.formData).then((function(a){t.GetConfig().then((function(){t.$toasted.success(a.message,t.$toastConfig),t.initialFormData=_.cloneDeep(t.formData),t.isLoading=!1})).catch((function(a){t.isLoading=!1,t.formErrors=formUtil.handleErrors(a)})),"function"==typeof t.afterSubmit&&t.afterSubmit()})).catch((function(a){t.isLoading=!1,t.formErrors=formUtil.handleErrors(a),"function"==typeof t.afterSubmit&&t.afterSubmit(),"function"==typeof t.afterSubmitError&&t.afterSubmitError()}))},reset:function(){var t=this;formUtil.confirmAction().then((function(a){a.value&&(t.formData=Object.assign({},t.formData,_.cloneDeep(t.initialFormData)))}))},unsavedCheck:function(t){formUtil.unsavedCheckAlert(this.initialFormData,this.formData,t)},fillPreRequisite:function(t){var a=this;this.preRequisite.objForEach((function(e,r){a.preRequisite[r]=t[r]||e})),this.isLoading=!1},fillFormData:function(){this.isLoading=!0,this.configs[this.formData.type]&&(this.formData=formUtil.assignValues(this.formData,this.configs[this.formData.type])),"function"==typeof this.addNewRow&&"function"==typeof this.addNewRowIfNone&&this.addNewRowIfNone(),this.isLoading=!1},getInitialData:function(t){var a,e=this;return(a=o.a.mark((function a(){var r;return o.a.wrap((function(a){for(;;)switch(a.prev=a.next){case 0:return e.isLoading=!0,a.prev=1,a.next=4,i.b(Object.keys(e.preRequisite).join(","));case 4:return r=a.sent,e.fillPreRequisite(r),t&&e.$nextTick((function(){t()})),a.abrupt("return",r);case 10:throw a.prev=10,a.t0=a.catch(1),e.isLoading=!1,e.formErrors=formUtil.handleErrors(a.t0),a.t0;case 15:case"end":return a.stop()}}),a,null,[[1,10]])})),function(){var t=this,e=arguments;return new Promise((function(r,o){var n=a.apply(t,e);function i(t){s(n,r,o,i,l,"next",t)}function l(t){s(n,r,o,i,l,"throw",t)}i(void 0)}))})()}}),mounted:function(){this.fillFormData(),this.initialFormData=_.cloneDeep(this.formData)},beforeDestroy:function(){delete this.formData,delete this.formErrors,delete this.preRequisite},beforeRouteLeave:function(t,a,e){this.unsavedCheck(e)}}},"lD+M":function(t,a,e){"use strict";e.r(a);var r=e("3HR4"),o=e("fHbr"),n={extends:r.a,components:{CollapseTransition:o.a},data:function(){return{formData:{razorpay:!1,razorpayChargeHandlingFee:!1,razorpayFixedHandlingFee:!1,razorpayHandlingFee:0,razorpayKey:"",razorpayMode:!1,razorpaySecret:"",type:"paymentGateway"}}},mounted:function(){this.getInitialData()}},i=e("KHd+"),s=Object(i.a)(n,(function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("base-container",{attrs:{boxed:"","with-loader":"","is-loading":t.isLoading,"loader-color":t.vars.loaderColor}},[e("form",{on:{submit:function(a){return a.preventDefault(),t.submit(a)}}},[e("fieldset",{staticClass:"fieldset pt-4"},[e("legend",[t._v("\n                RazorPay\n                "),e("div",{staticClass:"d-inline-flex align-items-center"},[e("base-checkbox",{staticClass:"ml-3 mt-1 mb-1",attrs:{inline:""},model:{value:t.formData.razorpay,callback:function(a){t.$set(t.formData,"razorpay",a)},expression:"formData.razorpay"}},[t._v("\n                        "+t._s(t.$t("general.enabled"))+"\n                    ")])],1)]),t._v(" "),e("collapse-transition",[t.formData.razorpay?e("div",{staticClass:"row"},[e("div",{staticClass:"col-12 col-md-4 mb-4"},[e("switch-wrapper",{attrs:{label:t.$t("config.payment_gateway.live_mode",{attribute:"RazorPay"})}},[e("base-switch",{model:{value:t.formData.razorpayMode,callback:function(a){t.$set(t.formData,"razorpayMode",a)},expression:"formData.razorpayMode"}})],1)],1),t._v(" "),e("div",{staticClass:"col-12 col-md-4 mb-4"},[e("switch-wrapper",{attrs:{label:t.$t("config.payment_gateway.charge_handling_fee")}},[e("base-switch",{model:{value:t.formData.razorpayChargeHandlingFee,callback:function(a){t.$set(t.formData,"razorpayChargeHandlingFee",a)},expression:"formData.razorpayChargeHandlingFee"}})],1)],1),t._v(" "),t.formData.razorpayChargeHandlingFee?e("div",{staticClass:"col-12 col-md-4 mb-4"},[e("switch-wrapper",{attrs:{label:t.$t("config.payment_gateway.fixed_handling_fee")}},[e("base-switch",{model:{value:t.formData.razorpayFixedHandlingFee,callback:function(a){t.$set(t.formData,"razorpayFixedHandlingFee",a)},expression:"formData.razorpayFixedHandlingFee"}})],1)],1):t._e(),t._v(" "),e("div",{staticClass:"col-12"}),t._v(" "),e("div",{staticClass:"col-12 col-md-4 mb-4"},[e("base-input",{attrs:{label:t.$t("config.payment_gateway.key",{attribute:"RazorPay"}),type:"text",error:t.formErrors.razorpayKey,disabled:t.isLoading},on:{"update:error":function(a){return t.$set(t.formErrors,"razorpayKey",a)}},model:{value:t.formData.razorpayKey,callback:function(a){t.$set(t.formData,"razorpayKey",a)},expression:"formData.razorpayKey"}})],1),t._v(" "),e("div",{staticClass:"col-12 col-md-4 mb-4"},[e("base-input",{attrs:{label:t.$t("config.payment_gateway.secret",{attribute:"RazorPay"}),type:"text",error:t.formErrors.razorpaySecret,disabled:t.isLoading},on:{"update:error":function(a){return t.$set(t.formErrors,"razorpaySecret",a)}},model:{value:t.formData.razorpaySecret,callback:function(a){t.$set(t.formData,"razorpaySecret",a)},expression:"formData.razorpaySecret"}})],1),t._v(" "),t.formData.razorpayChargeHandlingFee?[t.formData.razorpayFixedHandlingFee?e("div",{staticClass:"col-12 col-md-4 mb-4"},[e("base-input",{attrs:{label:t.$t("config.payment_gateway.attr_handling_fee",{attribute:"RazorPay"}),type:"text",error:t.formErrors.razorpayHandlingFee,disabled:t.isLoading,"addon-left-text":t.vars.defaultCurrency.prefix,"addon-right-text":t.vars.defaultCurrency.suffix},on:{"update:error":function(a){return t.$set(t.formErrors,"razorpayHandlingFee",a)}},model:{value:t.formData.razorpayHandlingFee,callback:function(a){t.$set(t.formData,"razorpayHandlingFee",a)},expression:"formData.razorpayHandlingFee"}})],1):e("div",{staticClass:"col-12 col-md-4 mb-4"},[e("base-input",{attrs:{label:t.$t("config.payment_gateway.attr_handling_fee",{attribute:"RazorPay"}),type:"text",error:t.formErrors.razorpayHandlingFee,disabled:t.isLoading,"addon-right-icon":"fas fa-percent"},on:{"update:error":function(a){return t.$set(t.formErrors,"razorpayHandlingFee",a)}},model:{value:t.formData.razorpayHandlingFee,callback:function(a){t.$set(t.formData,"razorpayHandlingFee",a)},expression:"formData.razorpayHandlingFee"}})],1)]:t._e()],2):e("h5",{staticClass:"text-muted"},[t._v(t._s(t.$t("config.payment_gateway.disabled")))])])],1),t._v(" "),e("div",{staticClass:"text-right mt-5"},[e("base-button",{attrs:{type:"button",design:"light"},on:{click:t.reset}},[t._v(t._s(t.$t("general.reset")))]),t._v(" "),e("base-button",{attrs:{type:"submit",design:"primary"}},[t._v(t._s(t.$t("general.save")))])],1)])])}),[],!1,null,null,null);a.default=s.exports}}]);
//# sourceMappingURL=index.js.map?id=520e6f70d6c6fd58f398