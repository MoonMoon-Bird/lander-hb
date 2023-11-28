;(self.SPZ=self.SPZ||[]).push({n:"spz-observer",ev:"0.1",l:!0,t:"v1",v:"1.0",m:0,f:function(n,e){!function(){var e;function t(n){return(t="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(n){return typeof n}:function(n){return n&&"function"==typeof Symbol&&n.constructor===Symbol&&n!==Symbol.prototype?"symbol":typeof n})(n)}function i(n,e){return(i=Object.setPrototypeOf?Object.setPrototypeOf.bind():function(n,e){return n.__proto__=e,n})(n,e)}function r(n,e){if(e&&("object"===t(e)||"function"==typeof e))return e;if(void 0!==e)throw new TypeError("Derived constructors may only return object or undefined");return function(n){if(void 0===n)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return n}(n)}function o(n){return(o=Object.setPrototypeOf?Object.getPrototypeOf.bind():function(n){return n.__proto__||Object.getPrototypeOf(n)})(n)}var u="spz-observer",l=300,c={SCROLL_EXCEED_BOUNDARY:"scrollExceedBoundary",SCROLL_NOT_EXCEED_BOUNDARY:"scrollNotExceedBoundary",SCROLL_TO_VISIBLE:"scrollToVisible",SCROLL_TO_INVISIBLE:"scrollToInvisible",SCROLL_UP:"scrollUp",SCROLL_DOWN:"scrollDown",CHILD_UPDATED:"childUpdated",VISIBLE_IN_FIRST_SCREEN:"visibleInFirstScreen",INVISIBLE_IN_FIRST_SCREEN:"invisibleInFirstScreen"},s=function(n){!function(n,e){if("function"!=typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function");n.prototype=Object.create(e&&e.prototype,{constructor:{value:n,writable:!0,configurable:!0}}),Object.defineProperty(n,"prototype",{writable:!1}),e&&i(n,e)}(v,n);var t,s,a,f,h=(a=v,f=function(){if("undefined"==typeof Reflect||!Reflect.construct)return!1;if(Reflect.construct.sham)return!1;if("function"==typeof Proxy)return!0;try{return Boolean.prototype.valueOf.call(Reflect.construct(Boolean,[],(function(){}))),!0}catch(n){return!1}}(),function(){var n,e=o(a);if(f){var t=o(this).constructor;n=Reflect.construct(e,arguments,t)}else n=e.apply(this,arguments);return r(this,n)});function v(n){var e;return function(n,e){if(!(n instanceof e))throw new TypeError("Cannot call a class as a function")}(this,v),(e=h.call(this,n)).actions_=SPZServices.actionServiceForDoc(),e.target_=null,e.value_=null,e.needCallHandlerNames_=[],e.unMutationObservers_=[],e}return t=v,(s=[{key:"isLayoutSupported",value:function(n){return SPZCore.isLayoutSizeLogic(n)}},{key:"buildCallback",value:function(){var n=this;for(var e in c)if(SPZCore.Types.hasOwn(c,e)&&this.element.hasAttribute("@".concat(c[e]))){var t=c[e].replace(/^[a-z]/,(function(n){return n.toUpperCase()}));this.needCallHandlerNames_.push("handle".concat(t))}this.invokeHandlers_(),this.registerAction("restart",(function(){n.unMutationObservers_.forEach((function(n){return n()})),n.invokeHandlers_()}))}},{key:"invokeHandlers_",value:function(){var n=this;this.needCallHandlerNames_.forEach((function(e){return n[e]()}))}},{key:"getTargetElement_",value:function(){var n=this;if(this.target_)return e||(e=Promise.resolve(void 0));if(this.waitForChildPromise_)return this.waitForChildPromise_;var t=this.element.getAttribute("target");return this.waitForChildPromise_=new Promise((function(e){SPZCore.Dom.waitForChild(document.body,(function(){return!!document.getElementById(t)}),(function(){n.target_=n.assert(SPZCore.Dom.scopedQuerySelector(document.documentElement,"#".concat(t)),'"target" must be required in the '.concat(u)),e()}))})),this.waitForChildPromise_}},{key:"initValue_",value:function(){if(!this.value_){var n=this.element.getAttribute("value");this.value_=this.parseValue_(n)||0}}},{key:"parseValue_",value:function(n){var e;if(-1===n.indexOf("."))return parseInt(n,10);var t=n.split("."),i=t[1],r=t[0];return r.startsWith("#")&&(r=SPZCore.Dom.scopedQuerySelector(document.documentElement,r)),null===(e=r)||void 0===e?void 0:e[i]}},{key:"handleScrollExceedBoundary",value:function(){this.initValue_(),this.handleScrollOffsetBoundary_(this.value_,c.SCROLL_EXCEED_BOUNDARY,!0)}},{key:"handleScrollNotExceedBoundary",value:function(){this.initValue_(),this.handleScrollOffsetBoundary_(this.value_,c.SCROLL_NOT_EXCEED_BOUNDARY,!1)}},{key:"handleChildUpdated",value:function(){var n=this;this.getTargetElement_().then((function(){return n.handleChildObserve_(n.target_)}))}},{key:"handleScrollToVisible",value:function(){var n=this;this.getTargetElement_().then((function(){return n.handleToggleVisibility_(n.target_,c.SCROLL_TO_VISIBLE,!0)}))}},{key:"handleScrollToInvisible",value:function(){var n=this;this.getTargetElement_().then((function(){return n.handleToggleVisibility_(n.target_,c.SCROLL_TO_INVISIBLE,!1)}))}},{key:"handleScrollUp",value:function(){this.handleScrollDirection_(!0,c.SCROLL_UP)}},{key:"handleScrollDown",value:function(){this.handleScrollDirection_(!1,c.SCROLL_DOWN)}},{key:"handleScrollDirection_",value:function(n,e){var t=this,i=this.getViewport().getScrollTop();this.getViewport().onScroll(SPZCore.Types.throttle(this.win,(function(){var r=t.getViewport().getScrollTop();if(!(r<0)){var o=i-r;i=r,(n?o>0:o<0)&&t.triggerEvent_(e)}}),l))}},{key:"handleVisibleInFirstScreen",value:function(){var n=this;this.getTargetElement_().then((function(){return n.handleVisibilityInFirstScreen_(n.target_)}))}},{key:"handleInvisibleInFirstScreen",value:function(){var n=this;this.getTargetElement_().then((function(){return n.handleVisibilityInFirstScreen_(n.target_)}))}},{key:"handleVisibilityInFirstScreen_",value:function(n){var e=this,t=null,i=function(){var i=e.getViewport().getSize().height,r=n.getBoundingClientRect().y;null===t&&(t=!(r>i),e.triggerEvent_(t?c.VISIBLE_IN_FIRST_SCREEN:c.INVISIBLE_IN_FIRST_SCREEN)),r>i&&!0===t?(t=!1,e.triggerEvent_(c.INVISIBLE_IN_FIRST_SCREEN)):r<=i&&!1===t&&(t=!0,e.triggerEvent_(c.VISIBLE_IN_FIRST_SCREEN))};i(),this.getViewport().onScroll(SPZCore.Types.throttle(this.win,(function(){i()}),l))}},{key:"handleScrollOffsetBoundary_",value:function(n,e){var t=this,i=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=!1;this.getViewport().onScroll(SPZCore.Types.throttle(this.win,(function(){var o=t.getViewport().getScrollTop()>n;o!==r&&(r=o,i===o&&t.triggerEvent_(e))}),l))}},{key:"handleChildObserve_",value:function(n){var e=this;this.createMutationObserver_(n,(function(){e.triggerEvent_(c.CHILD_UPDATED)}))}},{key:"handleToggleVisibility_",value:function(n,e){var t=this,i=arguments.length>2&&void 0!==arguments[2]&&arguments[2],r=!1;this.getViewport().onScroll(SPZCore.Types.throttle(this.win,(function(){var o=n.getBoundingClientRect(),u=o.height,l=o.x,c=o.y,s=t.getViewport().getScrollTop(),a=c+s,f=document.elementFromPoint(l,c+u-1),h=f&&(n===f||n.contains(f));if(null==h&&s>a&&!0===r)return r=!1,void(!1===i&&t.triggerEvent_(e));null!=h&&r!==h&&(r=h,i===h&&t.triggerEvent_(e))}),l))}},{key:"createMutationObserver_",value:function(n,e){var t=new(self.MutationObserver||self.WebKitMutationObserver)((function(){return e()}));t.observe(n,{childList:!0,subtree:!0}),this.unMutationObservers_.push((function(){return t.disconnect()}))}},{key:"triggerEvent_",value:function(n,e){var t=SPZUtils.Event.create(this.win,"".concat(u,".").concat(n),e);this.actions_.trigger(this.element,n,t)}}])&&function(n,e){for(var t=0;t<e.length;t++){var i=e[t];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(n,i.key,i)}}(t.prototype,s),Object.defineProperty(t,"prototype",{writable:!1}),v}(n.BaseElement);self.SPZ.registerElement(u,s)}()}});