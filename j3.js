/*! Copyright ? 2015, 2016, Oracle and/or its affiliates. All rights reserved. */
/*! mmapi v1.12 */
/*v1.12.0.1*/
/*Please do not modify this file except configuration section at the bottom.*/
(function(c,C){function l(a,b){return typeof a===b}function D(a){return l(a,"undefined")}function y(a,b){return Object.prototype.hasOwnProperty.call(a,b)}function K(a,b){return y(a,b)&&l(a[b],"string")}function L(a,b,e){try{l(a,"function")&&a.apply(b,e)}catch(h){P&&P.log(h)}}function k(a,b){for(var e in a)y(a,e)&&b(a[e],e)}function M(a){var b=new Date;b.setTime(b.getTime()+864E5*a);return b}function I(a){function b(){for(var a=document.cookie.split(/;\s+/g),b={},e=0;e<a.length;e++){var c=a[e].split(/;|=/);
1<c.length&&(b[c[0]]=c[1])}return b}var e=this,c=a.domain,l=a.secure,m=encodeURIComponent,w=decodeURIComponent;e.set=function(a,b,w,k){k||(b=m(b));a=m(a)+"="+b+";domain="+c+";path=/"+(w?";expires="+M(w).toGMTString():"")+(l?";secure":"");document.cookie=a;return e};e.remove=function(a){e.set(a,"",-1);return e};e.removeAll=function(a){if(a){var c=b();k(c,function(b,c){(new RegExp("^"+a)).test(c)&&e.remove(w(c))})}};e.get=function(a,b){a=new RegExp("(?:^|; )"+m(a).replace(/([.$?*|{}()\[\]\\\/+^])/g,
"\\$1")+"=([^;]+)");a=document.cookie.match(a);if(!a)return C;a=a[1];return b?a:w(a)};e.getAll=function(a,e){if(a){var c=b(),h={};k(c,function(b,c){(new RegExp("^"+a)).test(c)&&(h[w(c)]=e?b:w(b))});return h}}}function aa(a){function b(a){a=JSON.parse('{"v":'+a+"}");return"v"in a?a.v:a}if(!/^((cookie-key-value)|(cookie-key-value-secure))$/.test(a.type))throw"(mm module: storage) Invalid storage type: "+a.type;var c="cookie-key-value-secure"===a.type,h=a.cprefix+"."+(a.namespace||"def")+".",l=h.replace(/\./g,
"\\."),m=new I({domain:a.domain,secure:c});this.get=function(a){if(!a){a=m.getAll(l);var c=h.length,e={};k(a,function(a,k){e[k.substring(c)]=b(a)});return e}return(a=m.get(h+a))?b(a):a};this.set=function(a,b,c){null===b||D(b)?m.remove(h+a):(b=JSON.stringify({v:b}),b=b.substring(5,b.length-1),m.set(h+a,b,D(c)?365:c));return this};this.removeAll=function(){m.removeAll(l);return this};this.testStorage=function(){var a=(""+Math.random()).substring(0,5);m.set(h+"tst",a,10);a=m.get(h+"tst",!0)===a?1:0;
m.remove(h+"tst");return a}}function ba(a){function b(a,b){var c={};k(a,function(a,b){c[b]=a});k(b,function(a,b){c[b]=a});return c}function c(a){for(var b={},c="",e=0,r;r=A.get(a+e++,!0);)c+=r;c=decodeURIComponent(c);try{b=JSON.parse(c)}catch(f){}return b}function h(){q=c(J);x=c(C);y();q[t]=q[t]||{};x[t]=x[t]||{}}function l(a,b,c){b=JSON.stringify(b);var e="{}"===b,r=0;for(b=encodeURIComponent(b);A.get(a+r,!0);)A.remove(a+r++);if(!e)for(r=0;e=b.substr(3E3*r,3E3);)A.set(a+r++,e,D(c)?365:c,!0)}function m(){l(J,
q);l(C,x,0)}function w(a){var b={};k(a,function(a,c){b[c]=G(a).v});return b}function y(){var a=(new Date).getTime(),b=q[t];k(b,function(c,e){G(c).e<=a&&delete b[e]});m()}function G(a){var b=a.indexOf("|");return{v:JSON.parse(a.substring(b+1,a.length)),e:a.substring(0,b)}}if(!/^((cookie)|(cookie-secure))$/.test(a.type))throw"(mm module: storage) Invalid storage type: "+a.type;var q,x,z=a.cprefix+".",J=z+"store.p.",C=z+"store.s.",A=new I({domain:a.domain,secure:"cookie-secure"===a.type}),t=a.namespace||
"def";this.get=function(a){h();var c=b(q[t],x[t]);return a?c[a]?G(c[a]).v:c[a]:w(c)};this.set=function(a,b,c){h();var e=q[t],k=x[t];delete e[a];delete k[a];null===b||D(b)||(c?(b=M(c).getTime()+"|"+JSON.stringify(b),e[a]=b):k[a]="0|"+JSON.stringify(b));m();return this};this.removeAll=function(){h();q[t]={};x[t]={};m();return this};this.testStorage=function(){var a=(""+Math.random()).substring(0,5);A.set(z+"tst",a,10);a=A.get(z+"tst",!0)===a?1:0;A.remove(z+"tst");return a};this.exportData=function(){h();
var a={};k(q,function(b,c){a[c]=b});k(x,function(c,e){a[e]=b(a[e],c)});k(a,function(b,c){k(b,function(b,e){a[c][e]=G(b)})});return a};h()}if(!c.mmsystem){var P=c.console||{log:function(){},error:function(){}},T=new function(a){function b(a,g){if(B[a])for(var d=B[a].length-1;0<=d;d--)B[a][d].call({},g)}function e(a){E=l(a,"boolean")?a:!1}function h(a,g,b){b=b||{};b.type="text/javascript";b.id=a;b.src=g;if(E){a=document.getElementsByTagName("head")[0];var d=document.createElement("script");k(b,function(a,
b){d.setAttribute(b,a)});a.insertBefore(d,a.lastChild)}else{var c="";k(b,function(a,d){c+=" "+d+'="'+a+'"'});document.write("<script"+c+">\x3c/script>")}}function M(a){if(!l(a,"object"))return a;if(a.constructor===Array)return a.join(";");var d=[];k(a,function(a,b){a.constructor===Array?k(a,function(a){d.push(b+"="+a)}):d.push(b+"="+encodeURIComponent(a))});return d.join(";")}function m(a){a=a?J(a):{};var d={};l(a["mm-dlp-api"],"string")&&(d.fv={ref:a["original-ref"].substring(0,256),url:a["original-url"].substring(0,
1024)},d.origin=/http(s)?:\/\/.*?([^/]|$)+/.exec(d.fv.url)[0]);k(a,function(a,b){"mmcore."===b.substring(0,7)&&(d[b.substring(7)]=a)});return d}function w(){var d="mmRequestCallbacks["+H+"]",b={},e=c.screen;b.fv={dmn:a.domain,ref:document.referrer.substring(0,256),url:location.href.substring(0,1024),scrw:e.width,scrh:e.height,clrd:e.colorDepth,cok:v[n.persistent].testStorage()};b.lver="1.12";b.jsncl=d;b.ri=H;b.lto=-(new Date).getTimezoneOffset();return b}function T(d,b){var g=d&&d.Packages||[],p=
g.length;if(0<p){c.mmInitCallback=function(a){a(f,d,{skipResponseProcessing:!0,skipPersistentData:!0,useLoaderStorage:!0,debug:fa});0===--p&&(b(),c.mmInitCallback=C)};for(var e=0;e<g.length;e++)h("mmpack."+e,0===g[e].indexOf("//")?g[e]:a.baseContentUrl+g[e])}else b()}function G(a){(a=document.getElementById(a))&&a.parentNode?a.parentNode.removeChild(a):a&&a.removeAttribute("src")}function q(a,g,e){a=(X[a-1]=g)&&g.PersistData||[];var d=g&&g.SystemData&&g.SystemData[0]&&g.SystemData[0].ResponseId||
0;if(d>=Y){for(var u=a.length;u--;)f.setParam(a[u].Name,a[u].Value,n.persistent,a[u].Expiration);Y=d}if(K(g,"mmcoreResponse")&&y(c,"mmcore"))try{Function(g.mmcoreResponse).call(c)}catch(W){P.log(W)}b("response",g);e(!!g);b("responseExecuted",g);E=!0}function x(a,b){var d="mmrequest."+H;(function(a,b){c.mmRequestCallbacks[a]=function(g){G(d);var e=!1,p=function(){e=!0;1===a?T(g,function(){q(a,g,b);var d=m(document.location.search).origin;d&&c.parent&&c.parent.postMessage&&c.parent.postMessage(JSON.stringify({hash:"unhide",
command:"unhide",data:{}}),d)}):q(a,g,b)};if(0!==N.length){for(var u=0;u<N.length;u++)N[u](g,p);e||(E=!0)}else p();delete c.mmRequestCallbacks[a]}})(H,b);h(d,a,{onerror:"window['mmRequestCallbacks']["+H+"](false);"});H++}function z(){var a={};return{get:function(b){return b?a[b]:a},set:function(b,d,c){0>parseInt(c)?delete a[b]:a[b]=d},removeAll:function(){a={}}}}function J(a){a=a.split(/\?|&/);for(var b={},d,c,e=0;e<a.length;e++)if(a[e]){d=a[e].split("=");try{c=decodeURIComponent(d[1]||"")}catch(W){c=
d[1]||""}b[d[0]]=c}return b}function ea(a){function b(a,b,e){var g;if(g=c[a]){d[a]=b;g=g.split(/;/);for(var p=0;p<g.length;p++){var u=g[p].split("=");(a=u[0].replace(/^\s+|\s+$/gm,""))&&e(b,a,u[1]||"")}}}var d={},c=J(a);O||(d.pageid=c.pageid);d.jsver=c.jsver;b("uv",{},function(a,b,d){y(a,b)||(a[b]=[]);a[b].push(d)});b("uat",{},function(a,b,d){a[b]=decodeURIComponent(d)});b("ids",{},function(a,b,d){d&&(a[b]=decodeURIComponent(d))});b("rul",[],function(a,b,d){a.push(b)});return d}function A(){if(y(c,
"mmcore")){var b=c.mmcore;b.server=a.srv;f.CGRequestInternal=f.CGRequest;f.CGRequest=function(a,d){O=!0;Q=a;R=d;b.CGRequest()};var g=b._Tag;b._Tag=function(d){if(-1==d.indexOf(a.srv))g.apply(b,arguments);else{b._Clear.call(b);var c=f.mergeParams(R,ea(d));Z=E;O||(E=b._async);f.CGRequestInternal(Q,c);E=Z;R=Q=C;O=!1}};var e=b.SetCookie;b.SetCookie=function(a){/^(mmid|pd|srv)$/.test(a)||e.apply(b,arguments)}}}function t(a){return a||c.location.hostname.replace(/^www\./i,"")}function r(a,b,c){var d="";
0<b.length&&"."!=b.substring(b.length-1)&&(d=".");b=b+d+c;d=a.get(b);l(d,"string")&&d&&(f.setParam(c,d,n.persistent,365),a.remove(b))}function U(a){var b=y(c,"mmcore")&&c.mmcore.cookie_domain?c.mmcore.cookie_domain:K(a,"mmcoreCookieDomain")?a.mmcoreCookieDomain:a.cookie_domain;a=y(c,"mmcore")&&c.mmcore.cprefix?c.mmcore.cprefix:K(a,"mmcoreCprefix")?a.mmcoreCprefix:a.cprefix+".";b=new I({domain:t(b)});r(b,a,"pd");r(b,a,"srv");r(b,"","mmid")}function ca(a){var b=f.getParam,d=function(a,b,d,c){f.setParam(a,
b,D(d)?1:d,c)};L(a.beforeInit,{},[b,d,{getParam:b,setParam:d,validateResponses:f.validateResponses,disable:function(){F[n.page].set("disabled",1)},setAsync:e}]);V()||(f.on("request",function(){L(a.beforeRequest,{},[b,d])}),f.on("response",function(c){L(a.afterResponse,{},[b,d,c])}),f.on("responseExecuted",function(c){L(a.afterResponseExecution,{},[b,d,c])}))}function da(a){c.mmcoreInitCallback=function(b){U(a);A();f.CGRequest(function(){l(b,"function")&&b.apply(c.mmcore,arguments)},{});delete c.mmcoreInitCallback};
"local"!==a.mmcoreUrl&&h("mmcoreIntegration",a.mmcoreUrl)}function V(){return 1==F[n.persistent].get("disabled")||1==F[n.page].get("disabled")}this.version="1.12";var f=this,X=[],H=1,E=!1,B={},fa={},v=[],F=[],n={persistent:0,deferredRequest:1,request:2,page:3},N=[],Y=0,Q,R,Z,O=!1,S=null!==a.storageType.match(/.*-secure$/);this.baseStorage=function(){var b=t(a.cookie_domain),c=a.cprefix+"\\.store\\.p\\.",e=a.cprefix+"\\.store\\.s\\.";var p=function(c){return function(d){var e={p:"mmparams.p",d:"mmparams.d",
e:"mmengine"};return new ba({type:c,namespace:e[d]?e[d]:d,domain:b,cprefix:a.cprefix})}};var f=function(c){return function(d){var e={"mmparams.p":"p","mmparams.d":"d",mmengine:"e"};return new aa({type:c,namespace:e[d]?e[d]:d,domain:b,cprefix:a.cprefix})}};if(a.storageType.match(/cookie-key-value($|-secure$)/)){var h=p("cookie");var m=f(a.storageType);p=h().exportData();var n=!1;k(p,function(a,b){var c=m(b);k(a,function(a,b){n=!0;var d=a.e;d=(d=parseInt(d))?Math.round(Math.abs(((new Date).getTime()-
d)/864E5)):d;c.set(b,a.v,0<=d?d:30)})});n&&(p=new I({domain:b,secure:S}),p.removeAll(c),p.removeAll(e));return m}h=p(a.storageType);m=f("cookie-key-value");p=new I({domain:b,secure:S});p=p.getAll(a.cprefix+"\\.",!0);var l={};k(p,function(a,b){var d=b.split(/\./);if(2<d.length&&"store"!=d[1]){a=l[d[1]];a||(a=m(d[1]),l[d[1]]=a);var c=h(d[1]);b=b.substring((d[0]+"."+d[1]+".").length);a=a.get(b);c.set(b,a,30)}});k(l,function(a){a.removeAll()});return h}();this.baseStorage.storeStrategy=n;this.baseStorage.isSecure=
S;this.mergeParams=function(a,b){a=D(a)?{}:a;b=D(b)?{}:b;if(!l(b,"object"))return b;var d={};l(a,"object")&&k(a,function(a,b){d[b]=a});k(b,function(a,c){d[c]=d[c]?d[c].constructor===Array&&b[c].constructor===Array?d[c].concat(a):f.mergeParams(d[c],a):a});return d};this.CGRequest=function(d,e){d=d||function(){};e=e||{};c.mmRequestCallbacks=c.mmRequestCallbacks||{};b("request");var g=f.mergeParams(w(),f.mergeParams(f.mergeParams(v[n.persistent].get(),f.mergeParams(v[n.deferredRequest].get(),f.mergeParams(v[n.page].get(),
v[n.request].get()))),m(location.search))),h=[],l=a.srv;e=f.mergeParams(g,e);k(e,function(a,b){h.push(encodeURIComponent(b)+"="+encodeURIComponent(M(a)))});v[n.deferredRequest].removeAll();v[n.request].removeAll();x(l+h.join("&"),d);return this};this.getResponses=function(){return X};this.setParam=function(a,b,c,e){v[c].set(a,b,e);return this};this.getParam=function(a,b){return v[b].get(a)};this.removeParam=function(a,b){v[b].set(a,"",-1);return this};this.on=function(a,b){B[a]&&B[a].push(b);return f};
this.disable=function(){F[n.persistent].set("disabled",1,0);return this};this.enable=function(){F[n.persistent].set("disabled",null,-1);return this};this.validateResponses=function(a){l(a,"function")&&N.push(a)};(function(a){function b(){ca(a);V()||(K(a,"mmcoreUrl")&&a.mmcoreUrl?da(a):(U(a),f.CGRequest(C,{})))}k(a,function(a,b){f[b]=a});var d=m(document.location.search);if(1!=d.disabled){f.calcCookieDomain=t(f.cookie_domain);e(a.async);F[n.persistent]=f.baseStorage("ls");F[n.page]=z();v[n.persistent]=
f.baseStorage("p");v[n.deferredRequest]=f.baseStorage("d");v[n.request]=z();v[n.page]=z();B.request=[];B.response=[];B.responseExecuted=[];var l=m(document.referrer).pruh,d=d.pruh,u=c.mmpruh,q=f.getParam("pruh",0),r=(l?l+",":"")+(d?d+",":"")+(u?u+",":"")+(q?q:"");r?(c.mmInitCallback=function(a){a(f,r,b)},h("MM.PRUH",a.baseContentUrl+"utils/pruh.js")):b()}})(a);return this}({
 storageType:'cookie-key-value',
 cprefix:'mmapi',
 domain:'alaskaair.com',
 baseContentUrl:'//service.maxymiser.net/platform/us/api/',
 cookie_domain:location.hostname.match(/^[\d.]+$|/)[0]||(location.hostname.match('localhost')||[""])[0]||('.'+(location.hostname.match(/[^.]+\.(\w{2,3}\.\w{2}|\w{2,})$/)||[location.hostname])[0]),
 srv:'//service.maxymiser.net/cg/v5us/?',
 async:false,
 mmcoreUrl:'',
 mmcoreCookieDomain:'',
 mmcoreCprefix:'',
 beforeInit: function( getParam, setParam ) {
  /* Cross-domain data restore from window.name */
   function restoreVisitorIdFromWindow() {
     var key, crossDomainData;

     if (window.JSON && window.JSON.stringify && window.JSON.parse) {
       window.name = window.name.replace(/\|\*mm(.*)mm\*\|/, function(matchedString, capturedData) {
         crossDomainData = JSON.parse(capturedData);
         for (key in crossDomainData) {
           if (crossDomainData.hasOwnProperty(key)) {
             setParam(key, crossDomainData[key], 0);
           }
         }
         return '';
       });
     }
   }

   restoreVisitorIdFromWindow();
},
 beforeRequest:function(getParam,setParam){},
 afterResponse: function( getParam, setParam, genInfo ) {
   /* Cross-domain data capture to window.name */
   function captureVisitorIdToWindow(crossDomainParams) {
     var i, cgParamName, cgParamValue,
       crossDomainData = {},
       hasCrossDomainParams = false;

       if (window.JSON && window.JSON.stringify && window.JSON.parse) {
       for (i = crossDomainParams.length; i--;) {
         cgParamName = crossDomainParams[i];
         cgParamValue = getParam(cgParamName, 0);

         if (typeof cgParamValue === 'undefined' || cgParamValue === 'undefined') {
           // nothing to save
         } else {
           hasCrossDomainParams = true;
           crossDomainData[cgParamName] = cgParamValue;
         }
       }

       if (hasCrossDomainParams) {
         window.name = window.name.replace(/\|\*mm(.*)mm\*\|/, '') + ('|*mm' + JSON.stringify(crossDomainData) + 'mm*|');
       }
     }
   }

   captureVisitorIdToWindow(['pd', 'mmid', 'srv']);
},
 afterResponseExecution:function(getParam,setParam,genInfo){}
});c.mmsystem=new function(a){this.enableUtility=function(b){var c=a.getParam("un",a.baseStorage.storeStrategy.persistent)||"";(new RegExp("(^|,)"+b+"($|,)")).test(c)||(c=c.split(","),c.push(b),a.setParam("un",c.join(",").replace(/(^,)|(,$)/g,""),a.baseStorage.storeStrategy.persistent));return this};this.disableUtility=function(b){var c=a.getParam("un",a.baseStorage.storeStrategy.persistent)||
"";(new RegExp("(^|,)"+b+"($|,)")).test(c)&&(c=c.replace(new RegExp("(^|,)"+b+"($|,)","gi"),",").replace(/(^,)|(,$)/g,""),a.setParam("un",c,a.baseStorage.storeStrategy.persistent));return this};this.enable=function(){a.enable();return this};this.disable=function(){a.disable();return this};this.getConfig=function(){return{storageType:a.storageType,cprefix:a.cprefix,domain:a.domain,baseContentUrl:a.baseContentUrl,cookie_domain:a.cookie_domain,srv:a.srv,async:a.async,beforeInit:a.beforeInit,beforeRequest:a.beforeRequest,
afterResponse:a.afterResponse,afterResponseExecution:a.afterResponseExecution}}}(T)}})(window);
