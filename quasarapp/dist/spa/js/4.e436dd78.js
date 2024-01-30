"use strict";(globalThis["webpackChunkquasarapp"]=globalThis["webpackChunkquasarapp"]||[]).push([[4],{2534:(e,t,a)=>{a.d(t,{Z:()=>r});var o=a(1809);const n=(0,o.Q_)("shoppingId",{state:()=>({counter:0,products:[]}),getters:{totalAmount(e){return e.products.reduce(((e,t)=>e+parseFloat(t.price)),0)}},actions:{increment(){this.counter++},add(e){this.products.push(e),this.counter=this.products.length}}}),r=n},4004:(e,t,a)=>{a.r(t),a.d(t,{default:()=>Q});var o=a(9835),n=a(6970),r=a(1957);const s={class:"text-left"},l={class:"row justify-center"};function p(e,t,a,p,u,i){const d=(0,o.up)("q-th"),c=(0,o.up)("q-tr"),m=(0,o.up)("q-btn"),w=(0,o.up)("q-td"),f=(0,o.up)("q-table"),h=(0,o.up)("q-step"),g=(0,o.up)("q-separator"),b=(0,o.up)("q-stepper-navigation"),k=(0,o.up)("q-stepper"),_=(0,o.up)("q-page");return(0,o.wg)(),(0,o.j4)(_,{class:"q-pa-sm"},{default:(0,o.w5)((()=>[(0,o.Wm)(k,{modelValue:p.step,"onUpdate:modelValue":t[2]||(t[2]=e=>p.step=e),ref:"stepper","alternative-labels":"",color:"primary",animated:""},{navigation:(0,o.w5)((()=>[(0,o.Wm)(g),(0,o.Wm)(b,{class:"q-mt-md"},{default:(0,o.w5)((()=>[(0,o._)("div",l,[(0,o.Wm)(m,{onClick:t[0]||(t[0]=t=>e.$refs.stepper.next()),color:"primary",label:3===p.step?"Finish":"Continue"},null,8,["label"]),p.step>1?((0,o.wg)(),(0,o.j4)(m,{key:0,flat:"",color:"primary",onClick:t[1]||(t[1]=t=>e.$refs.stepper.previous()),label:"Back",class:"q-ml-sm"})):(0,o.kq)("",!0)])])),_:1})])),default:(0,o.w5)((()=>[(0,o.Wm)(h,{name:1,title:"Carrito",icon:"shopping_cart",done:p.step>1},{default:(0,o.w5)((()=>[(0,o.Wm)(f,{flat:"",bordered:"",title:"Productos seleccionados",rows:p.rows,columns:p.columns,"row-key":"name"},{header:(0,o.w5)((e=>[(0,o.Wm)(c,{props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(d,{"auto-width":""}),((0,o.wg)(!0),(0,o.iD)(o.HY,null,(0,o.Ko)(e.cols,(t=>((0,o.wg)(),(0,o.j4)(d,{key:t.name,props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,n.zw)(t.label),1)])),_:2},1032,["props"])))),128))])),_:2},1032,["props"])])),body:(0,o.w5)((e=>[(0,o.Wm)(c,{props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(w,{"auto-width":""},{default:(0,o.w5)((()=>[(0,o.Wm)(m,{size:"sm",color:"accent",round:"",dense:"",onClick:t=>e.expand=!e.expand,icon:e.expand?"remove":"add"},null,8,["onClick","icon"])])),_:2},1024),((0,o.wg)(!0),(0,o.iD)(o.HY,null,(0,o.Ko)(e.cols,(t=>((0,o.wg)(),(0,o.j4)(w,{key:t.name,props:e},{default:(0,o.w5)((()=>[(0,o.Uk)((0,n.zw)(t.value),1)])),_:2},1032,["props"])))),128))])),_:2},1032,["props"]),(0,o.wy)((0,o.Wm)(c,{props:e},{default:(0,o.w5)((()=>[(0,o.Wm)(w,{colspan:"100%"},{default:(0,o.w5)((()=>[(0,o._)("div",s,"This is expand slot for row above: "+(0,n.zw)(e.row.name)+".",1)])),_:2},1024)])),_:2},1032,["props"]),[[r.F8,e.expand]])])),_:1},8,["rows","columns"]),(0,o._)("p",null,"TOTAL: "+(0,n.zw)(p.totalAmount),1)])),_:1},8,["done"]),(0,o.Wm)(h,{name:2,title:"Pago",icon:"money",done:p.step>2},{default:(0,o.w5)((()=>[(0,o.Uk)(" An ad group contains one or more ads which target a shared set of keywords. ")])),_:1},8,["done"]),(0,o.Wm)(h,{name:3,title:"Descargar",icon:"download"},{default:(0,o.w5)((()=>[(0,o.Uk)(" Try out different ad text to see what brings in the most customers, and learn how to enhance your ads using features like ad extensions. If you run into any problems with your ads, find out how to tell if they're running and how to resolve approval issues. ")])),_:1})])),_:1},8,["modelValue"])])),_:1})}var u=a(499),i=a(2534);const d={setup(){const e=(0,u.iH)((0,i.Z)()),t=(0,o.Fl)((()=>e.value.totalAmount)),a=[{name:"name",required:!0,label:"Descripcion",align:"left",field:e=>e.name,format:e=>`${e}`,sortable:!0},{name:"cant",align:"center",label:"Cantidad",field:"cant",sortable:!0},{name:"price",label:"Precio",field:"price",sortable:!0}],n=e.value.products;return{step:(0,u.iH)(1),columns:a,rows:n,totalAmount:t}}};var c=a(1639),m=a(9885),w=a(8225),f=a(8335),h=a(2374),g=a(1233),b=a(1682),k=a(7220),_=a(8879),v=a(926),y=a(1992),q=a(9984),W=a.n(q);const Z=(0,c.Z)(d,[["render",p]]),Q=Z;W()(d,"components",{QPage:m.Z,QStepper:w.Z,QStep:f.Z,QTable:h.Z,QTr:g.Z,QTh:b.Z,QTd:k.Z,QBtn:_.Z,QSeparator:v.Z,QStepperNavigation:y.Z})}}]);