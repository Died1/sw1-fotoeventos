(()=>{"use strict";var e={2742:(e,t,r)=>{var n=r(1957),o=r(1947),a=r(499),i=r(9835);function s(e,t,r,n,o,a){const s=(0,i.up)("router-view");return(0,i.wg)(),(0,i.j4)(s)}const l=(0,i.aZ)({name:"App"});var c=r(1639);const u=(0,c.Z)(l,[["render",s]]),d=u;var p=r(3340),h=r(8339);const f=[{path:"/login",component:()=>Promise.all([r.e(736),r.e(881)]).then(r.bind(r,7881))},{path:"/register",component:()=>Promise.all([r.e(736),r.e(73)]).then(r.bind(r,5073))},{path:"/",component:()=>Promise.all([r.e(736),r.e(482)]).then(r.bind(r,7482)),children:[{path:"",component:()=>Promise.all([r.e(736),r.e(34)]).then(r.bind(r,4034)),props:e=>({search:e.query.search})}]},{path:"/events/:id/details",component:()=>Promise.all([r.e(736),r.e(482)]).then(r.bind(r,7482)),children:[{path:"",component:()=>Promise.all([r.e(736),r.e(493)]).then(r.bind(r,2493))}]},{path:"/search",component:()=>Promise.all([r.e(736),r.e(482)]).then(r.bind(r,7482)),children:[{path:"",component:()=>Promise.all([r.e(736),r.e(44)]).then(r.bind(r,6044)),props:e=>({kw:e.query.kw})}]},{path:"/shoppingcart",component:()=>Promise.all([r.e(736),r.e(482)]).then(r.bind(r,7482)),children:[{path:"",component:()=>Promise.all([r.e(736),r.e(4)]).then(r.bind(r,4004))}]},{path:"/padmin",component:()=>Promise.all([r.e(736),r.e(482)]).then(r.bind(r,7482)),meta:{requiresAuth:!0},children:[{path:"",component:()=>Promise.all([r.e(736),r.e(247)]).then(r.bind(r,1247))}]},{path:"/:catchAll(.*)*",component:()=>Promise.all([r.e(736),r.e(631)]).then(r.bind(r,4631))}],m=f;var v=r(5844);const b=(0,p.BC)((function(){const e=h.r5,t=(0,h.p7)({scrollBehavior:()=>({left:0,top:0}),routes:m,history:e("")});return t.beforeEach(((e,t,r)=>{const n=(0,v.t)();e.matched.some((e=>e.meta.requiresAuth))&&!n.isAuthenticated?r({path:"/login",query:{redirect:e.fullPath}}):r()})),t}));async function g(e,t){const r=e(d);r.use(o.Z,t);const n=(0,a.Xl)("function"===typeof b?await b({}):b);return{app:r,router:n}}var y=r(6827),w=r(6950);const S={config:{},plugins:{Notify:y.Z,Loading:w.Z}},P="";async function k({app:e,router:t},r){let n=!1;const o=e=>{try{return t.resolve(e).href}catch(r){}return Object(e)===e?null:e},a=e=>{if(n=!0,"string"===typeof e&&/^https?:\/\//.test(e))return void(window.location.href=e);const t=o(e);null!==t&&(window.location.href=t,window.location.reload())},i=window.location.href.replace(window.location.origin,"");for(let l=0;!1===n&&l<r.length;l++)try{await r[l]({app:e,router:t,ssrContext:null,redirect:a,urlPath:i,publicPath:P})}catch(s){return s&&s.url?void a(s.url):void console.error("[Quasar] boot error:",s)}!0!==n&&(e.use(t),e.mount("#q-app"))}g(n.ri,S).then((e=>{const[t,n]=void 0!==Promise.allSettled?["allSettled",e=>e.map((e=>{if("rejected"!==e.status)return e.value.default;console.error("[Quasar] boot error:",e.reason)}))]:["all",e=>e.map((e=>e.default))];return Promise[t]([Promise.resolve().then(r.bind(r,4290)),Promise.resolve().then(r.bind(r,4136))]).then((t=>{const r=n(t).filter((e=>"function"===typeof e));k(e,r)}))}))},4136:(e,t,r)=>{r.r(t),r.d(t,{api:()=>a,default:()=>i});var n=r(3340),o=r(7524);const a=o.Z.create({baseURL:"https://sw2.campozanodevlab.com/api"}),i=(0,n.xr)((({app:e})=>{e.config.globalProperties.$axios=o.Z,e.config.globalProperties.$api=a,a.interceptors.request.use((e=>{const t=e.headers["AuthorizationRequired"];if(t){const t=localStorage.getItem("authStore");if(t){const r=JSON.parse(t).userState.token;e.headers["Authorization"]=`Bearer ${r}`}}return e}))}));a.defaults.baseURL="https://sw2.campozanodevlab.com/api"},4290:(e,t,r)=>{r.r(t),r.d(t,{default:()=>a});var n=r(3340),o=r(1809);const a=(0,n.xr)((({app:e})=>{e.use((0,o.WB)())}))},5844:(e,t,r)=>{r.d(t,{t:()=>f});var n=r(1809),o=r(4136),a=r(7141),i=r(1941),s=function(e,t,r,n){function o(e){return e instanceof r?e:new r((function(t){t(e)}))}return new(r||(r=Promise))((function(r,a){function i(e){try{l(n.next(e))}catch(t){a(t)}}function s(e){try{l(n["throw"](e))}catch(t){a(t)}}function l(e){e.done?r(e.value):o(e.value).then(i,s)}l((n=n.apply(e,t||[])).next())}))};const l={apiKey:"AIzaSyCIrQIBNxwDtx1ZPzEmZnOIlBONUeCtReg",authDomain:"primerparcial-347021.firebaseapp.com",databaseURL:"https://primerparcial-347021-default-rtdb.firebaseio.com",projectId:"primerparcial-347021",storageBucket:"primerparcial-347021.appspot.com",messagingSenderId:"422014919648",appId:"1:422014919648:web:807672fecd0e880a5fc185",measurementId:"G-VQ13SR7FLD"},c=(0,a.ZF)(l),u=(0,i.KL)(c);function d(){return s(this,void 0,void 0,(function*(){try{const e=yield(0,i.LP)(u);return e||(console.log("No se pudo obtener el token del usuario."),null)}catch(e){return console.error("Error al obtener el token:",e),null}}))}var p=function(e,t,r,n){function o(e){return e instanceof r?e:new r((function(t){t(e)}))}return new(r||(r=Promise))((function(r,a){function i(e){try{l(n.next(e))}catch(t){a(t)}}function s(e){try{l(n["throw"](e))}catch(t){a(t)}}function l(e){e.done?r(e.value):o(e.value).then(i,s)}l((n=n.apply(e,t||[])).next())}))};const h="authStore",f=(0,n.Q_)("auth",{state:()=>{const e=localStorage.getItem(h);return e?JSON.parse(e):{isAuthenticatedState:!1,userState:null}},actions:{login(e){return p(this,void 0,void 0,(function*(){try{const t=yield d();this.isAuthenticatedState=!0,this.userState=e,this.saveState(),yield this.actualizarTokenEnServidor(t,e.user)}catch(t){console.error("Error al iniciar sesión:",t)}}))},actualizarTokenEnServidor(e,t){return p(this,void 0,void 0,(function*(){try{yield o.api.post(`/tokenFCM/${t.id}`,{token:e},{headers:{AuthorizationRequired:!0}})}catch(r){}}))},logout(){this.isAuthenticatedState=!1,this.userState=null,this.saveState()},saveState(){localStorage.setItem(h,JSON.stringify(this.$state))}},getters:{isAuthenticated:e=>e.isAuthenticatedState,user:e=>e.userState}})}},t={};function r(n){var o=t[n];if(void 0!==o)return o.exports;var a=t[n]={exports:{}};return e[n].call(a.exports,a,a.exports,r),a.exports}r.m=e,(()=>{var e=[];r.O=(t,n,o,a)=>{if(!n){var i=1/0;for(u=0;u<e.length;u++){for(var[n,o,a]=e[u],s=!0,l=0;l<n.length;l++)(!1&a||i>=a)&&Object.keys(r.O).every((e=>r.O[e](n[l])))?n.splice(l--,1):(s=!1,a<i&&(i=a));if(s){e.splice(u--,1);var c=o();void 0!==c&&(t=c)}}return t}a=a||0;for(var u=e.length;u>0&&e[u-1][2]>a;u--)e[u]=e[u-1];e[u]=[n,o,a]}})(),(()=>{r.n=e=>{var t=e&&e.__esModule?()=>e["default"]:()=>e;return r.d(t,{a:t}),t}})(),(()=>{r.d=(e,t)=>{for(var n in t)r.o(t,n)&&!r.o(e,n)&&Object.defineProperty(e,n,{enumerable:!0,get:t[n]})}})(),(()=>{r.f={},r.e=e=>Promise.all(Object.keys(r.f).reduce(((t,n)=>(r.f[n](e,t),t)),[]))})(),(()=>{r.u=e=>"js/"+e+"."+{4:"e436dd78",34:"e50008fd",44:"d0edbbf6",73:"ee26ed70",247:"0de14c36",482:"6056111a",493:"e66572d2",631:"c4cc7bbf",881:"78953fc2"}[e]+".js"})(),(()=>{r.miniCssF=e=>"css/"+e+"."+{44:"6b662c0d",247:"566156b4",482:"2d745010",493:"6b662c0d"}[e]+".css"})(),(()=>{r.g=function(){if("object"===typeof globalThis)return globalThis;try{return this||new Function("return this")()}catch(e){if("object"===typeof window)return window}}()})(),(()=>{r.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t)})(),(()=>{var e={},t="quasarapp:";r.l=(n,o,a,i)=>{if(e[n])e[n].push(o);else{var s,l;if(void 0!==a)for(var c=document.getElementsByTagName("script"),u=0;u<c.length;u++){var d=c[u];if(d.getAttribute("src")==n||d.getAttribute("data-webpack")==t+a){s=d;break}}s||(l=!0,s=document.createElement("script"),s.charset="utf-8",s.timeout=120,r.nc&&s.setAttribute("nonce",r.nc),s.setAttribute("data-webpack",t+a),s.src=n),e[n]=[o];var p=(t,r)=>{s.onerror=s.onload=null,clearTimeout(h);var o=e[n];if(delete e[n],s.parentNode&&s.parentNode.removeChild(s),o&&o.forEach((e=>e(r))),t)return t(r)},h=setTimeout(p.bind(null,void 0,{type:"timeout",target:s}),12e4);s.onerror=p.bind(null,s.onerror),s.onload=p.bind(null,s.onload),l&&document.head.appendChild(s)}}})(),(()=>{r.r=e=>{"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})}})(),(()=>{r.p=""})(),(()=>{if("undefined"!==typeof document){var e=(e,t,r,n,o)=>{var a=document.createElement("link");a.rel="stylesheet",a.type="text/css";var i=r=>{if(a.onerror=a.onload=null,"load"===r.type)n();else{var i=r&&("load"===r.type?"missing":r.type),s=r&&r.target&&r.target.href||t,l=new Error("Loading CSS chunk "+e+" failed.\n("+s+")");l.code="CSS_CHUNK_LOAD_FAILED",l.type=i,l.request=s,a.parentNode.removeChild(a),o(l)}};return a.onerror=a.onload=i,a.href=t,r?r.parentNode.insertBefore(a,r.nextSibling):document.head.appendChild(a),a},t=(e,t)=>{for(var r=document.getElementsByTagName("link"),n=0;n<r.length;n++){var o=r[n],a=o.getAttribute("data-href")||o.getAttribute("href");if("stylesheet"===o.rel&&(a===e||a===t))return o}var i=document.getElementsByTagName("style");for(n=0;n<i.length;n++){o=i[n],a=o.getAttribute("data-href");if(a===e||a===t)return o}},n=n=>new Promise(((o,a)=>{var i=r.miniCssF(n),s=r.p+i;if(t(i,s))return o();e(n,s,null,o,a)})),o={143:0};r.f.miniCss=(e,t)=>{var r={44:1,247:1,482:1,493:1};o[e]?t.push(o[e]):0!==o[e]&&r[e]&&t.push(o[e]=n(e).then((()=>{o[e]=0}),(t=>{throw delete o[e],t})))}}})(),(()=>{var e={143:0};r.f.j=(t,n)=>{var o=r.o(e,t)?e[t]:void 0;if(0!==o)if(o)n.push(o[2]);else{var a=new Promise(((r,n)=>o=e[t]=[r,n]));n.push(o[2]=a);var i=r.p+r.u(t),s=new Error,l=n=>{if(r.o(e,t)&&(o=e[t],0!==o&&(e[t]=void 0),o)){var a=n&&("load"===n.type?"missing":n.type),i=n&&n.target&&n.target.src;s.message="Loading chunk "+t+" failed.\n("+a+": "+i+")",s.name="ChunkLoadError",s.type=a,s.request=i,o[1](s)}};r.l(i,l,"chunk-"+t,t)}},r.O.j=t=>0===e[t];var t=(t,n)=>{var o,a,[i,s,l]=n,c=0;if(i.some((t=>0!==e[t]))){for(o in s)r.o(s,o)&&(r.m[o]=s[o]);if(l)var u=l(r)}for(t&&t(n);c<i.length;c++)a=i[c],r.o(e,a)&&e[a]&&e[a][0](),e[a]=0;return r.O(u)},n=globalThis["webpackChunkquasarapp"]=globalThis["webpackChunkquasarapp"]||[];n.forEach(t.bind(null,0)),n.push=t.bind(null,n.push.bind(n))})();var n=r.O(void 0,[736],(()=>r(2742)));n=r.O(n)})();