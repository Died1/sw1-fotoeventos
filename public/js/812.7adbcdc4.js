"use strict";(globalThis["webpackChunkquasarapp"]=globalThis["webpackChunkquasarapp"]||[]).push([[812],{2534:(e,t,a)=>{a.d(t,{Z:()=>n});var l=a(1809);const o=(0,l.Q_)("shoppingId",{state:()=>({counter:0,products:[{id:"prod1",name:"Foto full HD",price:"12.5"},{id:"prod2",name:"Foto HD",price:"19.0"}]}),getters:{totalAmount(e){return e.products.reduce(((e,t)=>e+parseFloat(t.price)),0)}},actions:{increment(){this.counter++}}}),n=o},6812:(e,t,a)=>{a.r(t),a.d(t,{default:()=>ae});var l=a(9835),o=a(6970);const n=(0,l._)("img",{src:"https://cdn.quasar.dev/img/layout-gallery/logo-google.svg"},null,-1),i=(0,l._)("span",{class:"q-ml-sm"},"Photos",-1),r={class:"q-gutter-sm row items-center no-wrap"},s=(0,l._)("img",{class:"q-pl-md",src:"https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg"},null,-1),u=(0,l._)("span",{class:"q-ml-sm"},"Photos",-1);function c(e,t,a,c,p,d){const m=(0,l.up)("q-btn"),w=(0,l.up)("q-item"),g=(0,l.up)("q-toolbar-title"),f=(0,l.up)("q-space"),k=(0,l.up)("q-item-label"),_=(0,l.up)("q-item-section"),h=(0,l.up)("q-list"),y=(0,l.up)("q-btn-dropdown"),q=(0,l.up)("q-icon"),W=(0,l.up)("q-input"),b=(0,l.up)("q-badge"),Z=(0,l.up)("q-tooltip"),v=(0,l.up)("q-menu"),Q=(0,l.up)("Menu"),C=(0,l.up)("q-toolbar"),j=(0,l.up)("q-header"),x=(0,l.up)("EssentialLink"),D=(0,l.up)("q-separator"),L=(0,l.up)("q-scroll-area"),U=(0,l.up)("q-drawer"),H=(0,l.up)("router-view"),I=(0,l.up)("q-page-container"),P=(0,l.up)("q-layout"),S=(0,l.Q2)("close-popup");return(0,l.wg)(),(0,l.j4)(P,{view:"lHh Lpr fff",class:"bg-grey-1"},{default:(0,l.w5)((()=>[(0,l.Wm)(j,{elevated:"",class:"bg-white text-grey-8","height-hint":"64"},{default:(0,l.w5)((()=>[(0,l.Wm)(C,{class:"GPL__toolbar",style:{height:"64px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(m,{flat:"",dense:"",round:"",onClick:c.toggleLeftDrawer,"aria-label":"Menu",icon:"menu",class:"q-mx-md"},null,8,["onClick"]),e.$q.screen.gt.sm?((0,l.wg)(),(0,l.j4)(g,{key:0,shrink:"",class:"row items-center no-wrap"},{default:(0,l.w5)((()=>[(0,l.Wm)(w,{clickable:"",to:"/"},{default:(0,l.w5)((()=>[n,i])),_:1})])),_:1})):(0,l.kq)("",!0),(0,l.Wm)(f),e.$q.screen.gt.sm?((0,l.wg)(),(0,l.j4)(y,{key:1,"menu-offset":[300,5],flat:"",outline:"",color:"grey-8",label:"Explorar contenido"},{default:(0,l.w5)((()=>[(0,l.Wm)(h,null,{default:(0,l.w5)((()=>[(0,l.wy)(((0,l.wg)(),(0,l.j4)(w,{clickable:"",onClick:e.onItemClick},{default:(0,l.w5)((()=>[(0,l.Wm)(_,null,{default:(0,l.w5)((()=>[(0,l.Wm)(k,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Fotos")])),_:1})])),_:1})])),_:1},8,["onClick"])),[[S]]),(0,l.wy)(((0,l.wg)(),(0,l.j4)(w,{clickable:"",onClick:e.onItemClick},{default:(0,l.w5)((()=>[(0,l.Wm)(_,null,{default:(0,l.w5)((()=>[(0,l.Wm)(k,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Eventos")])),_:1})])),_:1})])),_:1},8,["onClick"])),[[S]])])),_:1})])),_:1})):(0,l.kq)("",!0),(0,l.Wm)(W,{color:"black",class:"GPL__toolbar-input",dense:"",outlined:"",modelValue:c.search,"onUpdate:modelValue":t[1]||(t[1]=e=>c.search=e),placeholder:"Search"},{prepend:(0,l.w5)((()=>[""===c.search?((0,l.wg)(),(0,l.j4)(q,{key:0,name:"search"})):((0,l.wg)(),(0,l.j4)(q,{key:1,name:"clear",class:"cursor-pointer",onClick:t[0]||(t[0]=e=>c.search="")}))])),default:(0,l.w5)((()=>[""!==c.search?((0,l.wg)(),(0,l.j4)(m,{key:0,color:"grey-9",icon:"search",dense:"",flat:"",rounded:"",to:`search?kw=${c.search}`},null,8,["to"])):((0,l.wg)(),(0,l.j4)(m,{key:1,color:"grey-9",icon:"image_search",dense:"",flat:"",rounded:""}))])),_:1},8,["modelValue"]),(0,l.Wm)(f),(0,l._)("div",r,[c.isAuthenticated?((0,l.wg)(),(0,l.iD)(l.HY,{key:0},[(0,l.Wm)(m,{round:"",dense:"",flat:"",color:"grey-8",icon:"notifications"},{default:(0,l.w5)((()=>[c.notification.counter>0?((0,l.wg)(),(0,l.j4)(b,{key:0,color:"red","text-color":"white",floating:""},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(c.notification.counter),1)])),_:1})):(0,l.kq)("",!0),(0,l.Wm)(Z,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Notifications")])),_:1}),(0,l.Wm)(v,{anchor:"top end",self:"top end",style:{"min-width":"300px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(h,{class:"text-grey-8",style:{"min-width":"250px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(w,{"aria-hidden":"true"},{default:(0,l.w5)((()=>[(0,l.Wm)(_,{class:"text-uppercase text-grey-7",style:{"font-size":"0.7rem"}},{default:(0,l.w5)((()=>[(0,l.Uk)("Create New")])),_:1})])),_:1}),((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(e.createMenu,(e=>(0,l.wy)(((0,l.wg)(),(0,l.j4)(w,{key:e.text,clickable:"","aria-hidden":"true"},{default:(0,l.w5)((()=>[(0,l.Wm)(_,{avatar:""},{default:(0,l.w5)((()=>[(0,l.Wm)(q,{name:e.icon},null,8,["name"])])),_:2},1024),(0,l.Wm)(_,null,{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(e.text),1)])),_:2},1024)])),_:2},1024)),[[S]]))),128))])),_:1})])),_:1})])),_:1}),(0,l.Wm)(Q)],64)):((0,l.wg)(),(0,l.iD)(l.HY,{key:1},[(0,l.Wm)(m,{dense:"",flat:"",color:"black",label:"Login",to:"/login"}),(0,l.Wm)(m,{dense:"",flat:"",color:"black",label:"Register",to:"/register"})],64)),(0,l.Wm)(f),(0,l.Wm)(m,{round:"",dense:"",flat:"",color:"grey-8",icon:"shopping_cart",onClick:c.openCart},{default:(0,l.w5)((()=>[c.shopping.counter>0?((0,l.wg)(),(0,l.j4)(b,{key:0,color:"red","text-color":"white",floating:""},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(c.shopping.counter),1)])),_:1})):(0,l.kq)("",!0),(0,l.Wm)(Z,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Carrito de compras")])),_:1})])),_:1},8,["onClick"])])])),_:1})])),_:1}),(0,l.Wm)(U,{modelValue:c.leftDrawerOpen,"onUpdate:modelValue":t[2]||(t[2]=e=>c.leftDrawerOpen=e),bordered:"",behavior:"mobile",onClick:t[3]||(t[3]=e=>c.leftDrawerOpen=!1)},{default:(0,l.w5)((()=>[(0,l.Wm)(L,{class:"fit"},{default:(0,l.w5)((()=>[(0,l.Wm)(C,{class:"GPL__toolbar"},{default:(0,l.w5)((()=>[(0,l.Wm)(g,{class:"row items-center text-grey-8"},{default:(0,l.w5)((()=>[s,u])),_:1})])),_:1}),(0,l.Wm)(h,{padding:""},{default:(0,l.w5)((()=>[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(c.links1,(e=>((0,l.wg)(),(0,l.j4)(x,(0,l.dG)({key:e.title},e),null,16)))),128)),(0,l.Wm)(D,{class:"q-my-md"}),((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(c.links2,(e=>((0,l.wg)(),(0,l.j4)(x,(0,l.dG)({key:e.title},e),null,16)))),128)),(0,l.Wm)(D,{class:"q-my-md"}),((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(c.links3,(e=>((0,l.wg)(),(0,l.j4)(x,(0,l.dG)({key:e.title},e),null,16)))),128))])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,l.Wm)(I,{class:"GPL__page-container"},{default:(0,l.w5)((()=>[(0,l.Wm)(H)])),_:1})])),_:1})}a(2879);var p=a(499),d=a(8339);function m(e,t,a,n,i,r){const s=(0,l.up)("q-icon"),u=(0,l.up)("q-item-section"),c=(0,l.up)("q-item-label"),p=(0,l.up)("q-item");return(0,l.wg)(),(0,l.j4)(p,{clickable:"",class:"GPL__drawer-item",tag:"a",href:e.link},{default:(0,l.w5)((()=>[e.icon?((0,l.wg)(),(0,l.j4)(u,{key:0,avatar:""},{default:(0,l.w5)((()=>[(0,l.Wm)(s,{name:e.icon},null,8,["name"])])),_:1})):(0,l.kq)("",!0),(0,l.Wm)(u,null,{default:(0,l.w5)((()=>[(0,l.Wm)(c,null,{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(e.title),1)])),_:1}),(0,l.Wm)(c,{caption:""},{default:(0,l.w5)((()=>[(0,l.Uk)((0,o.zw)(e.caption),1)])),_:1})])),_:1})])),_:1},8,["href"])}const w=(0,l.aZ)({name:"EssentialLink",props:{title:{type:String,required:!0},caption:{type:String,default:""},link:{type:String,default:"#"},icon:{type:String,default:""}}});var g=a(1639),f=a(490),k=a(6749),_=a(2857),h=a(3115),y=a(9984),q=a.n(y);const W=(0,g.Z)(w,[["render",m]]),b=W;q()(w,"components",{QItem:f.Z,QItemSection:k.Z,QIcon:_.Z,QItemLabel:h.Z});var Z=a(2534),v=a(1809);const Q=(0,v.Q_)("notificationId",{state:()=>({counter:0}),getters:{},actions:{increment(){this.counter++}}}),C=Q;var j=a(5844);const x=["src"],D={key:1,src:"https://cdn.quasar.dev/img/boy-avatar.png"},L={class:"text-h6"};function U(e,t,a,n,i,r){const s=(0,l.up)("q-avatar"),u=(0,l.up)("q-tooltip"),c=(0,l.up)("q-badge"),p=(0,l.up)("q-item-section"),d=(0,l.up)("q-item"),m=(0,l.up)("q-separator"),w=(0,l.up)("q-icon"),g=(0,l.up)("q-list"),f=(0,l.up)("q-menu"),k=(0,l.up)("q-btn"),_=(0,l.Q2)("close-popup");return(0,l.wg)(),(0,l.j4)(k,{round:"",flat:""},{default:(0,l.w5)((()=>[(0,l.Wm)(s,{size:"26px"},{default:(0,l.w5)((()=>[e.user.avatar_url?((0,l.wg)(),(0,l.iD)("img",{key:0,src:e.user.avatar_url},null,8,x)):((0,l.wg)(),(0,l.iD)("img",D))])),_:1}),(0,l.Wm)(u,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Account")])),_:1}),(0,l.Wm)(f,{anchor:"top end",self:"top end",style:{"min-width":"300px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(g,{class:"text-grey-8",style:{"min-width":"250px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(d,null,{default:(0,l.w5)((()=>[(0,l.Wm)(p,null,{default:(0,l.w5)((()=>[(0,l._)("div",L,[(0,l.Uk)((0,o.zw)(e.user.username)+" ",1),e.user.type?((0,l.wg)(),(0,l.j4)(c,{key:0,position:"right"},{default:(0,l.w5)((()=>[(0,l.Uk)("fotografo")])),_:1})):(0,l.kq)("",!0)])])),_:1})])),_:1}),(0,l.Wm)(m),(0,l.wy)(((0,l.wg)(),(0,l.j4)(d,{clickable:"","aria-hidden":"true",to:"/padmin"},{default:(0,l.w5)((()=>[(0,l.Wm)(p,{avatar:""},{default:(0,l.w5)((()=>[(0,l.Wm)(w,{name:"apps"})])),_:1}),(0,l.Wm)(p,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Panel principal")])),_:1})])),_:1})),[[_]]),(0,l.wy)(((0,l.wg)(),(0,l.j4)(d,{clickable:"","aria-hidden":"true",onClick:e.logout},{default:(0,l.w5)((()=>[(0,l.Wm)(p,{avatar:""},{default:(0,l.w5)((()=>[(0,l.Wm)(w,{name:"logout"})])),_:1}),(0,l.Wm)(p,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Cerrar sesion")])),_:1})])),_:1},8,["onClick"])),[[_]])])),_:1})])),_:1})])),_:1})}const H=(0,l.aZ)({setup(){const e=(0,d.tv)(),t=(0,j.t)(),a=t.user.user;console.log(a);const l=()=>{t.logout(),e.push("/")};return{user:a,logout:l}}});var I=a(8879),P=a(1357),S=a(6858),z=a(6362),A=a(3246),G=a(990),F=a(926),T=a(2146);const E=(0,g.Z)(H,[["render",U]]),M=E;q()(H,"components",{QBtn:I.Z,QAvatar:P.Z,QTooltip:S.Z,QMenu:z.Z,QList:A.Z,QItem:f.Z,QItemSection:k.Z,QBadge:G.Z,QSeparator:F.Z,QIcon:_.Z}),q()(H,"directives",{ClosePopup:T.Z});const V={name:"GooglePhotosLayout",components:{EssentialLink:b,Menu:M},setup(){const e=(0,d.tv)(),t=(0,p.iH)((0,Z.Z)()),a=(0,p.iH)(C()),o=(0,j.t)(),n=(0,l.Fl)((()=>o.isAuthenticated)),i=((0,l.Fl)((()=>o.user)),(0,p.iH)(!1)),r=(0,p.iH)(""),s=(0,p.iH)(.26);function u(){i.value=!i.value}const c=()=>{e.push("/shoppingcart")};return{isAuthenticated:n,shopping:t,notification:a,leftDrawerOpen:i,search:r,storage:s,links1:[{title:"Photo",caption:"photos",icon:"photo",link:"#/photos"},{title:"Albums",caption:"organiza tus fotos",icon:"photo_album",link:"#/albums"},{title:"Events",caption:"tus eventos como organizador",icon:"book",link:"#/events"}],links2:[{title:"Panel de administracion",caption:"gestiona tus actividades como fototgrafo",icon:"archive ",link:"#/padmin"},{title:"Compras",caption:"tus compras",icon:"shopping_cart",link:"#/get_app"}],links3:[{title:"Perfil",caption:"tu informacion personal",icon:"person",link:"#/profile"},{title:"Help & Feedback",caption:"ayuda y preguntas frecuentes",icon:"help",link:"#/help"},{title:"App Downloads",caption:"descarga la app para android",icon:"get_app",link:"#/get_app"}],toggleLeftDrawer:u,openCart:c}}};var Y=a(249),B=a(6602),K=a(1663),O=a(1973),$=a(136),N=a(8479),R=a(6611),J=a(906),X=a(6663),ee=a(2133);const te=(0,g.Z)(V,[["render",c]]),ae=te;q()(V,"components",{QLayout:Y.Z,QHeader:B.Z,QToolbar:K.Z,QBtn:I.Z,QToolbarTitle:O.Z,QItem:f.Z,QSpace:$.Z,QBtnDropdown:N.Z,QList:A.Z,QItemSection:k.Z,QItemLabel:h.Z,QInput:R.Z,QIcon:_.Z,QBadge:G.Z,QTooltip:S.Z,QMenu:z.Z,QDrawer:J.Z,QScrollArea:X.Z,QSeparator:F.Z,QPageContainer:ee.Z}),q()(V,"directives",{ClosePopup:T.Z})}}]);