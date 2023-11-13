"use strict";(globalThis.webpackChunkquasarapp=globalThis.webpackChunkquasarapp||[]).push([[54],{7054:(e,t,a)=>{a.r(t),a.d(t,{default:()=>N});var l=a(9835),n=a(6970);const o=(0,l._)("img",{src:"https://cdn.quasar.dev/img/layout-gallery/logo-google.svg"},null,-1),s=(0,l._)("span",{class:"q-ml-sm"},"Photos",-1),i={class:"q-gutter-sm row items-center no-wrap"},r=(0,l._)("img",{src:"https://cdn.quasar.dev/img/boy-avatar.png"},null,-1),c=(0,l._)("img",{class:"q-pl-md",src:"https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg"},null,-1),u=(0,l._)("span",{class:"q-ml-sm"},"Photos",-1),p={class:"fit q-pt-xl q-px-sm column"},d=(0,l._)("div",{class:"GPL__side-btn__label"},"Photos",-1),m=(0,l._)("div",{class:"GPL__side-btn__label"},"Albums",-1),w=(0,l._)("div",{class:"GPL__side-btn__label"},"Events",-1);var g=a(499);const _=(0,l.aZ)({name:"EssentialLink",props:{title:{type:String,required:!0},caption:{type:String,default:""},link:{type:String,default:"#"},icon:{type:String,default:""}}});var f=a(1639),k=a(490),h=a(6749),b=a(2857),W=a(3115),q=a(9984),y=a.n(q);const x=(0,f.Z)(_,[["render",function(e,t,a,o,s,i){const r=(0,l.up)("q-icon"),c=(0,l.up)("q-item-section"),u=(0,l.up)("q-item-label"),p=(0,l.up)("q-item");return(0,l.wg)(),(0,l.j4)(p,{clickable:"",class:"GPL__drawer-item",tag:"a",href:e.link},{default:(0,l.w5)((()=>[e.icon?((0,l.wg)(),(0,l.j4)(c,{key:0,avatar:""},{default:(0,l.w5)((()=>[(0,l.Wm)(r,{name:e.icon},null,8,["name"])])),_:1})):(0,l.kq)("",!0),(0,l.Wm)(c,null,{default:(0,l.w5)((()=>[(0,l.Wm)(u,null,{default:(0,l.w5)((()=>[(0,l.Uk)((0,n.zw)(e.title),1)])),_:1}),(0,l.Wm)(u,{caption:""},{default:(0,l.w5)((()=>[(0,l.Uk)((0,n.zw)(e.caption),1)])),_:1})])),_:1})])),_:1},8,["href"])}]]),v=x;y()(_,"components",{QItem:k.Z,QItemSection:h.Z,QIcon:b.Z,QItemLabel:W.Z});const Z={name:"AlbumPage",components:{EssentialLink:v},setup(){const e=(0,g.iH)(!1),t=(0,g.iH)(""),a=(0,g.iH)(.26);return{leftDrawerOpen:e,search:t,storage:a,links1:[{title:"Photo",caption:"photos",icon:"photo",link:"#/photos"},{title:"Albums",caption:"Albums",icon:"photo_album",link:"#/albums"},{title:"Events",caption:"eventos",icon:"book",link:"#/events"}],links2:[{title:"Archive",caption:"archive",icon:"archive",link:"/archive"},{title:"Trash",caption:"get_app",icon:"get_app",link:"/get_app"}],links3:[{title:"Settings",caption:"settings",icon:"settings",link:"settings"},{title:"Help & Feedback",caption:"help",icon:"help",link:"help"},{title:"App Downloads",caption:"App Downloads",icon:"get_app",link:"/get_app"}],createMenu:[{icon:"photo_album",text:"Album"},{icon:"people",text:"Shared Album"},{icon:"dashboard",text:"Collage"},{icon:"book",text:"Photo book"}],toggleLeftDrawer:function(){e.value=!e.value}}}};var Q=a(249),L=a(6602),P=a(1663),z=a(4455),j=a(1973),D=a(136),U=a(6611),C=a(6362),G=a(3246),S=a(990),A=a(6858),H=a(1357),I=a(926),T=a(906),M=a(6663),V=a(2133),E=a(627),K=a(2146);const Y=(0,f.Z)(Z,[["render",function(e,t,a,g,_,f){const k=(0,l.up)("q-btn"),h=(0,l.up)("q-toolbar-title"),b=(0,l.up)("q-space"),W=(0,l.up)("q-icon"),q=(0,l.up)("q-input"),y=(0,l.up)("q-item-section"),x=(0,l.up)("q-item"),v=(0,l.up)("q-list"),Z=(0,l.up)("q-menu"),Q=(0,l.up)("q-badge"),L=(0,l.up)("q-tooltip"),P=(0,l.up)("q-avatar"),z=(0,l.up)("q-toolbar"),j=(0,l.up)("q-header"),D=(0,l.up)("q-separator"),U=(0,l.up)("EssentialLink"),C=(0,l.up)("q-scroll-area"),G=(0,l.up)("q-drawer"),S=(0,l.up)("router-view"),A=(0,l.up)("q-page-sticky"),H=(0,l.up)("q-page-container"),I=(0,l.up)("q-layout"),T=(0,l.Q2)("close-popup");return(0,l.wg)(),(0,l.j4)(I,{view:"lHh Lpr fff",class:"bg-grey-1"},{default:(0,l.w5)((()=>[(0,l.Wm)(j,{elevated:"",class:"bg-white text-grey-8","height-hint":"64"},{default:(0,l.w5)((()=>[(0,l.Wm)(z,{class:"GPL__toolbar",style:{height:"64px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(k,{flat:"",dense:"",round:"",onClick:g.toggleLeftDrawer,"aria-label":"Menu",icon:"menu",class:"q-mx-md"},null,8,["onClick"]),e.$q.screen.gt.sm?((0,l.wg)(),(0,l.j4)(h,{key:0,shrink:"",class:"row items-center no-wrap"},{default:(0,l.w5)((()=>[o,s])),_:1})):(0,l.kq)("",!0),(0,l.Wm)(b),(0,l.Wm)(q,{class:"GPL__toolbar-input",dense:"",standout:"bg-primary",modelValue:g.search,"onUpdate:modelValue":t[1]||(t[1]=e=>g.search=e),placeholder:"Search"},{prepend:(0,l.w5)((()=>[""===g.search?((0,l.wg)(),(0,l.j4)(W,{key:0,name:"search"})):((0,l.wg)(),(0,l.j4)(W,{key:1,name:"clear",class:"cursor-pointer",onClick:t[0]||(t[0]=e=>g.search="")}))])),_:1},8,["modelValue"]),e.$q.screen.gt.xs?((0,l.wg)(),(0,l.j4)(k,{key:1,flat:"",dense:"","no-wrap":"",color:"primary",icon:"add","no-caps":"",label:"Create",class:"q-ml-sm q-px-md"},{default:(0,l.w5)((()=>[(0,l.Wm)(Z,{anchor:"top end",self:"top end"},{default:(0,l.w5)((()=>[(0,l.Wm)(v,{class:"text-grey-8",style:{"min-width":"100px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(x,{"aria-hidden":"true"},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{class:"text-uppercase text-grey-7",style:{"font-size":"0.7rem"}},{default:(0,l.w5)((()=>[(0,l.Uk)("Create New")])),_:1})])),_:1}),((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(g.createMenu,(e=>(0,l.wy)(((0,l.wg)(),(0,l.j4)(x,{key:e.text,clickable:"","aria-hidden":"true"},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{avatar:""},{default:(0,l.w5)((()=>[(0,l.Wm)(W,{name:e.icon},null,8,["name"])])),_:2},1024),(0,l.Wm)(y,null,{default:(0,l.w5)((()=>[(0,l.Uk)((0,n.zw)(e.text),1)])),_:2},1024)])),_:2},1024)),[[T]]))),128))])),_:1})])),_:1})])),_:1})):(0,l.kq)("",!0),e.$q.screen.gt.xs?((0,l.wg)(),(0,l.j4)(k,{key:2,flat:"",dense:"","no-wrap":"",color:"primary",icon:"cloud_upload","no-caps":"",label:"Upload",class:"q-ml-sm q-px-md"})):(0,l.kq)("",!0),(0,l.Wm)(b),(0,l._)("div",i,[(0,l.Wm)(k,{round:"",dense:"",flat:"",color:"grey-8",icon:"notifications"},{default:(0,l.w5)((()=>[(0,l.Wm)(Q,{color:"red","text-color":"white",floating:""},{default:(0,l.w5)((()=>[(0,l.Uk)(" 2 ")])),_:1}),(0,l.Wm)(L,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Notifications")])),_:1}),(0,l.Wm)(Z,{anchor:"top end",self:"top end"},{default:(0,l.w5)((()=>[(0,l.Wm)(v,{class:"text-grey-8",style:{"min-width":"100px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(x,{"aria-hidden":"true"},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{class:"text-uppercase text-grey-7",style:{"font-size":"0.7rem"}},{default:(0,l.w5)((()=>[(0,l.Uk)("Create New")])),_:1})])),_:1}),((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(g.createMenu,(e=>(0,l.wy)(((0,l.wg)(),(0,l.j4)(x,{key:e.text,clickable:"","aria-hidden":"true"},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{avatar:""},{default:(0,l.w5)((()=>[(0,l.Wm)(W,{name:e.icon},null,8,["name"])])),_:2},1024),(0,l.Wm)(y,null,{default:(0,l.w5)((()=>[(0,l.Uk)((0,n.zw)(e.text),1)])),_:2},1024)])),_:2},1024)),[[T]]))),128))])),_:1})])),_:1})])),_:1}),(0,l.Wm)(k,{round:"",flat:""},{default:(0,l.w5)((()=>[(0,l.Wm)(P,{size:"26px"},{default:(0,l.w5)((()=>[r])),_:1}),(0,l.Wm)(L,null,{default:(0,l.w5)((()=>[(0,l.Uk)("Account")])),_:1}),(0,l.Wm)(Z,{anchor:"top end",self:"top end"},{default:(0,l.w5)((()=>[(0,l.Wm)(v,{class:"text-grey-8",style:{"min-width":"100px"}},{default:(0,l.w5)((()=>[(0,l.Wm)(x,{"aria-hidden":"true"},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{class:"text-uppercase text-grey-7",style:{"font-size":"0.7rem"}},{default:(0,l.w5)((()=>[(0,l.Uk)("Create New")])),_:1})])),_:1}),((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(g.createMenu,(e=>(0,l.wy)(((0,l.wg)(),(0,l.j4)(x,{key:e.text,clickable:"","aria-hidden":"true"},{default:(0,l.w5)((()=>[(0,l.Wm)(y,{avatar:""},{default:(0,l.w5)((()=>[(0,l.Wm)(W,{name:e.icon},null,8,["name"])])),_:2},1024),(0,l.Wm)(y,null,{default:(0,l.w5)((()=>[(0,l.Uk)((0,n.zw)(e.text),1)])),_:2},1024)])),_:2},1024)),[[T]]))),128))])),_:1})])),_:1})])),_:1})])])),_:1})])),_:1}),(0,l.Wm)(D),(0,l.Wm)(G,{modelValue:g.leftDrawerOpen,"onUpdate:modelValue":t[2]||(t[2]=e=>g.leftDrawerOpen=e),bordered:"",behavior:"mobile",onClick:t[3]||(t[3]=e=>g.leftDrawerOpen=!1)},{default:(0,l.w5)((()=>[(0,l.Wm)(C,{class:"fit"},{default:(0,l.w5)((()=>[(0,l.Wm)(z,{class:"GPL__toolbar"},{default:(0,l.w5)((()=>[(0,l.Wm)(h,{class:"row items-center text-grey-8"},{default:(0,l.w5)((()=>[c,u])),_:1})])),_:1}),(0,l.Wm)(v,{padding:""},{default:(0,l.w5)((()=>[((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(g.links1,(e=>((0,l.wg)(),(0,l.j4)(U,(0,l.dG)({key:e.title},e),null,16)))),128)),(0,l.Wm)(D,{class:"q-my-md"}),((0,l.wg)(!0),(0,l.iD)(l.HY,null,(0,l.Ko)(g.links3,(e=>((0,l.wg)(),(0,l.j4)(U,(0,l.dG)({key:e.title},e),null,16)))),128))])),_:1})])),_:1})])),_:1},8,["modelValue"]),(0,l.Wm)(H,{class:"GPL__page-container"},{default:(0,l.w5)((()=>[(0,l.Wm)(S),e.$q.screen.gt.sm?((0,l.wg)(),(0,l.j4)(A,{key:0,expand:"",position:"left"},{default:(0,l.w5)((()=>[(0,l._)("div",p,[(0,l.Wm)(k,{round:"",flat:"",color:"grey-8",stack:"","no-caps":"",size:"26px",class:"GPL__side-btn",tag:"a",href:"#/photos"},{default:(0,l.w5)((()=>[(0,l.Wm)(W,{size:"22px",name:"photo"}),d])),_:1}),(0,l.Wm)(k,{round:"",flat:"",color:"grey-8",stack:"","no-caps":"",size:"26px",class:"GPL__side-btn",tag:"a",href:"#/albums"},{default:(0,l.w5)((()=>[(0,l.Wm)(W,{size:"22px",name:"collections_bookmark"}),m])),_:1}),(0,l.Wm)(k,{round:"",flat:"",color:"grey-8",stack:"","no-caps":"",size:"26px",class:"GPL__side-btn",tag:"a",href:"#/events"},{default:(0,l.w5)((()=>[(0,l.Wm)(W,{size:"22px",name:"import_contacts"}),w])),_:1})])])),_:1})):(0,l.kq)("",!0)])),_:1})])),_:1})}]]),N=Y;y()(Z,"components",{QLayout:Q.Z,QHeader:L.Z,QToolbar:P.Z,QBtn:z.Z,QToolbarTitle:j.Z,QSpace:D.Z,QInput:U.Z,QIcon:b.Z,QMenu:C.Z,QList:G.Z,QItem:k.Z,QItemSection:h.Z,QBadge:S.Z,QTooltip:A.Z,QAvatar:H.Z,QSeparator:I.Z,QDrawer:T.Z,QScrollArea:M.Z,QPageContainer:V.Z,QPageSticky:E.Z}),y()(Z,"directives",{ClosePopup:K.Z})}}]);