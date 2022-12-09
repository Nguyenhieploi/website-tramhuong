"use strict";(globalThis.webpackChunk_wcAdmin_webpackJsonp=globalThis.webpackChunk_wcAdmin_webpackJsonp||[]).push([[5396],{56590:(e,t,n)=>{n.r(t),n.d(t,{default:()=>g});var a=n(69307),o=n(65736),s=n(9818),c=n(22629),i=n(55609),m=n(86020),r=n(14812),l=n(67221),d=n(14599),_=n(72672),u=n(37657),p=n(15635),y=n(66576);const w=document.querySelector('[data-gateway_id="pre_install_woocommerce_payments_promotion"]'),g=()=>{const[e,t]=(0,a.useState)(null),[n,g]=(0,a.useState)(!1),[E,h]=(0,a.useState)(!1),{installAndActivatePlugins:v,dismissRecommendedPlugins:A}=(0,s.useDispatch)(l.PLUGINS_STORE_NAME),{createNotice:N}=(0,s.useDispatch)("core/notices"),{installedPaymentGateway:S,installedPaymentGateways:T,paymentGatewaySuggestions:G,isResolving:f}=(0,s.useSelect)((t=>{const n=E&&(0,p.V7)(e);return{installedPaymentGateway:n&&t(l.PAYMENT_GATEWAYS_STORE_NAME).getPaymentGateway(n),installedPaymentGateways:t(l.PAYMENT_GATEWAYS_STORE_NAME).getPaymentGateways().reduce(((e,t)=>(n===t.id||(e[t.id]=!0),e)),{}),isResolving:t(l.ONBOARDING_STORE_NAME).isResolving("getPaymentGatewaySuggestions"),paymentGatewaySuggestions:t(l.ONBOARDING_STORE_NAME).getPaymentGatewaySuggestions()}}),[E]),P=(0,a.useRef)(!1),R=G&&G.length>0&&!(0,y.j)(G)&&!n;if((0,a.useEffect)((()=>{if((R||w&&!f)&&!P.current){P.current=!0;const e=(G||[]).reduce(((e,t)=>t.plugins&&t.plugins.length>0?{...e,[t.plugins[0].replace(/\-/g,"_")+"_displayed"]:!0}:e),{woocommerce_payments_displayed:!!w});(0,d.recordEvent)("settings_payments_recommendations_pageview",e)}}),[R,w,f]),(0,a.useEffect)((()=>{S&&(window.location.href=S.settings_url)}),[S]),!R)return null;const b=async()=>{g(!0),(0,d.recordEvent)("settings_payments_recommendations_dismiss",{}),await A("payments")||(g(!1),N("error",(0,o.__)('There was a problem hiding the "Additional ways to get paid" card.',"woocommerce")))},k=(G||[]).filter((e=>{var t;return!T[e.id]&&(null===(t=e.plugins)||void 0===t?void 0:t.length)&&(!window.wcAdminFeatures["wc-pay-promotion"]||!e.id.startsWith("woocommerce_payments"))})).map((n=>({key:n.id,title:(0,a.createElement)(a.Fragment,null,n.title,n.recommended&&(0,a.createElement)(m.Pill,null,(0,o.__)("Recommended","woocommerce"))),content:(0,c.decodeEntities)(n.content),after:(0,a.createElement)(i.Button,{isSecondary:!0,onClick:()=>(n=>{e||(t(n.id),(0,d.recordEvent)("settings_payments_recommendations_setup",{extension_selected:n.plugins[0]}),v([n.plugins[0]]).then((()=>{h(!0)})).catch((e=>{(0,u.a)(e),t(null)})))})(n),isBusy:e===n.id,disabled:!!e},n.actionText||(0,o.__)("Get started","woocommerce")),before:(0,a.createElement)("img",{src:n.square_image||n.image,alt:""})})));return(0,a.createElement)(i.Card,{size:"medium",className:"woocommerce-recommended-payments-card"},(0,a.createElement)(i.CardHeader,null,(0,a.createElement)("div",{className:"woocommerce-recommended-payments-card__header"},(0,a.createElement)(r.Text,{variant:"title.small",as:"p",size:"20",lineHeight:"28px"},(0,o.__)("Recommended payment providers","woocommerce")),(0,a.createElement)(r.Text,{className:"woocommerce-recommended-payments__header-heading",variant:"caption",as:"p",size:"12",lineHeight:"16px"},(0,o.__)('We recommend adding one of the following payment extensions to your store. The extension will be installed and activated for you when you click "Get started".',"woocommerce"))),(0,a.createElement)("div",{className:"woocommerce-card__menu woocommerce-card__header-item"},(0,a.createElement)(m.EllipsisMenu,{label:(0,o.__)("Task List Options","woocommerce"),renderContent:()=>(0,a.createElement)("div",{className:"woocommerce-review-activity-card__section-controls"},(0,a.createElement)(i.Button,{onClick:b},(0,o.__)("Hide this","woocommerce")))}))),(0,a.createElement)(m.List,{items:k}),(0,a.createElement)(i.CardFooter,null,(0,a.createElement)(i.Button,{href:"https://woocommerce.com/product-category/woocommerce-extensions/payment-gateways/?utm_source=payments_recommendations",target:"_blank",isTertiary:!0},(0,o.__)("Discover other payment providers","woocommerce"),(0,a.createElement)(_.Z,{size:18}))))}}}]);