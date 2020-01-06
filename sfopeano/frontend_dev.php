

﻿<!doctype html>
<!--[if lt IE 9]>
<html class="ie">
   <![endif]-->
   <!--[if gte IE 9]><!-->
   <html>
      <!--<![endif]-->
      <head>
         <meta charset="utf-8"/>
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
         <script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={licenseKey:"139294afc1",applicationID:"29104885"};window.NREUM||(NREUM={}),__nr_require=function(n,e,t){function r(t){if(!e[t]){var i=e[t]={exports:{}};n[t][0].call(i.exports,function(e){var i=n[t][1][e];return r(i||e)},i,i.exports)}return e[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var i=0;i<t.length;i++)r(t[i]);return r}({1:[function(n,e,t){function r(){}function i(n,e,t){return function(){return o(n,[u.now()].concat(f(arguments)),e?null:this,t),e?void 0:this}}var o=n("handle"),a=n(4),f=n(5),c=n("ee").get("tracer"),u=n("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(n,e){s[e]=i(d+e,!0,"api")}),s.addPageAction=i(d+"addPageAction",!0),s.setCurrentRouteName=i(d+"routeName",!0),e.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(n,e){var t={},r=this,i="function"==typeof e;return o(l+"tracer",[u.now(),n,t],r),function(){if(c.emit((i?"":"no-")+"fn-start",[u.now(),r,i],t),i)try{return e.apply(this,arguments)}catch(n){throw c.emit("fn-err",[arguments,this,n],t),n}finally{c.emit("fn-end",[u.now()],t)}}}};a("actionText,setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(n,e){m[e]=i(l+e)}),newrelic.noticeError=function(n,e){"string"==typeof n&&(n=new Error(n)),o("err",[n,u.now(),!1,e])}},{}],2:[function(n,e,t){function r(n,e){var t=n.getEntries();t.forEach(function(n){"first-paint"===n.name?a("timing",["fp",Math.floor(n.startTime)]):"first-contentful-paint"===n.name&&a("timing",["fcp",Math.floor(n.startTime)])})}function i(n){if(n instanceof c&&!s){var e,t=Math.round(n.timeStamp);e=t>1e12?Date.now()-t:f.now()-t,s=!0,a("timing",["fi",t,{type:n.type,fid:e}])}}if(!("init"in NREUM&&"page_view_timing"in NREUM.init&&"enabled"in NREUM.init.page_view_timing&&NREUM.init.page_view_timing.enabled===!1)){var o,a=n("handle"),f=n("loader"),c=NREUM.o.EV;if("PerformanceObserver"in window&&"function"==typeof window.PerformanceObserver){o=new PerformanceObserver(r);try{o.observe({entryTypes:["paint"]})}catch(u){}}if("addEventListener"in document){var s=!1,p=["click","keydown","mousedown","pointerdown","touchstart"];p.forEach(function(n){document.addEventListener(n,i,!1)})}}},{}],3:[function(n,e,t){function r(n,e){if(!i)return!1;if(n!==i)return!1;if(!e)return!0;if(!o)return!1;for(var t=o.split("."),r=e.split("."),a=0;a<r.length;a++)if(r[a]!==t[a])return!1;return!0}var i=null,o=null,a=/Version\/(\S+)\s+Safari/;if(navigator.userAgent){var f=navigator.userAgent,c=f.match(a);c&&f.indexOf("Chrome")===-1&&f.indexOf("Chromium")===-1&&(i="Safari",o=c[1])}e.exports={agent:i,version:o,match:r}},{}],4:[function(n,e,t){function r(n,e){var t=[],r="",o=0;for(r in n)i.call(n,r)&&(t[o]=e(r,n[r]),o+=1);return t}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],5:[function(n,e,t){function r(n,e,t){e||(e=0),"undefined"==typeof t&&(t=n?n.length:0);for(var r=-1,i=t-e||0,o=Array(i<0?0:i);++r<i;)o[r]=n[e+r];return o}e.exports=r},{}],6:[function(n,e,t){e.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(n,e,t){function r(){}function i(n){function e(n){return n&&n instanceof r?n:n?c(n,f,o):o()}function t(t,r,i,o){if(!d.aborted||o){n&&n(t,r,i);for(var a=e(i),f=v(t),c=f.length,u=0;u<c;u++)f[u].apply(a,r);var p=s[y[t]];return p&&p.push([b,t,r,a]),a}}function l(n,e){h[n]=v(n).concat(e)}function m(n,e){var t=h[n];if(t)for(var r=0;r<t.length;r++)t[r]===e&&t.splice(r,1)}function v(n){return h[n]||[]}function g(n){return p[n]=p[n]||i(t)}function w(n,e){u(n,function(n,t){e=e||"feature",y[t]=e,e in s||(s[e]=[])})}var h={},y={},b={on:l,addEventListener:l,removeEventListener:m,emit:t,get:g,listeners:v,context:e,buffer:w,abort:a,aborted:!1};return b}function o(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var f="nr@context",c=n("gos"),u=n(4),s={},p={},d=e.exports=i();d.backlog=s},{}],gos:[function(n,e,t){function r(n,e,t){if(i.call(n,e))return n[e];var r=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(n,e,{value:r,writable:!0,enumerable:!1}),r}catch(o){}return n[e]=r,r}var i=Object.prototype.hasOwnProperty;e.exports=r},{}],handle:[function(n,e,t){function r(n,e,t,r){i.buffer([n],r),i.emit(n,e,t)}var i=n("ee").get("handle");e.exports=r,r.ee=i},{}],id:[function(n,e,t){function r(n){var e=typeof n;return!n||"object"!==e&&"function"!==e?-1:n===window?0:a(n,o,function(){return i++})}var i=1,o="nr@id",a=n("gos");e.exports=r},{}],loader:[function(n,e,t){function r(){if(!x++){var n=E.info=NREUM.info,e=l.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(n&&n.licenseKey&&n.applicationID&&e))return s.abort();u(y,function(e,t){n[e]||(n[e]=t)}),c("mark",["onload",a()+E.offset],null,"api");var t=l.createElement("script");t.src="https://"+n.agent,e.parentNode.insertBefore(t,e)}}function i(){"complete"===l.readyState&&o()}function o(){c("mark",["domContent",a()+E.offset],null,"api")}function a(){return O.exists&&performance.now?Math.round(performance.now()):(f=Math.max((new Date).getTime(),f))-E.offset}var f=(new Date).getTime(),c=n("handle"),u=n(4),s=n("ee"),p=n(3),d=window,l=d.document,m="addEventListener",v="attachEvent",g=d.XMLHttpRequest,w=g&&g.prototype;NREUM.o={ST:setTimeout,SI:d.setImmediate,CT:clearTimeout,XHR:g,REQ:d.Request,EV:d.Event,PR:d.Promise,MO:d.MutationObserver};var h=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1158.min.js"},b=g&&w&&w[m]&&!/CriOS/.test(navigator.userAgent),E=e.exports={offset:f,now:a,origin:h,features:{},xhrWrappable:b,userAgent:p};n(1),n(2),l[m]?(l[m]("DOMContentLoaded",o,!1),d[m]("load",r,!1)):(l[v]("onreadystatechange",i),d[v]("onload",r)),c("mark",["firstbyte",f],null,"api");var x=0,O=n(6)},{}],"wrap-function":[function(n,e,t){function r(n){return!(n&&n instanceof Function&&n.apply&&!n[a])}var i=n("ee"),o=n(5),a="nr@original",f=Object.prototype.hasOwnProperty,c=!1;e.exports=function(n,e){function t(n,e,t,i){function nrWrapper(){var r,a,f,c;try{a=this,r=o(arguments),f="function"==typeof t?t(r,a):t||{}}catch(u){d([u,"",[r,a,i],f])}s(e+"start",[r,a,i],f);try{return c=n.apply(a,r)}catch(p){throw s(e+"err",[r,a,p],f),p}finally{s(e+"end",[r,a,c],f)}}return r(n)?n:(e||(e=""),nrWrapper[a]=n,p(n,nrWrapper),nrWrapper)}function u(n,e,i,o){i||(i="");var a,f,c,u="-"===i.charAt(0);for(c=0;c<e.length;c++)f=e[c],a=n[f],r(a)||(n[f]=t(a,u?f+i:i,o,f))}function s(t,r,i){if(!c||e){var o=c;c=!0;try{n.emit(t,r,i,e)}catch(a){d([a,t,r,i])}c=o}}function p(n,e){if(Object.defineProperty&&Object.keys)try{var t=Object.keys(n);return t.forEach(function(t){Object.defineProperty(e,t,{get:function(){return n[t]},set:function(e){return n[t]=e,e}})}),e}catch(r){d([r])}for(var i in n)f.call(n,i)&&(e[i]=n[i]);return e}function d(e){try{n.emit("internal-error",e)}catch(t){}}return n||(n=i),t.inPlace=u,t.flag=a,t}},{}]},{},["loader"]);</script>
         <title>Charitable Flying Available Flights</title>
         <!-- Please don't add "maximum-scale=1" here. It's bad for accessibility. -->
         <meta name="viewport" content="width=device-width, initial-scale=1"/>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
         <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAPIlFIrWMfj-tqlSCK4kX34YCe_lkHVho"></script>
         <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
         <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.jqueryui.min.js"></script>
         <script src="/js/taffydb-master/taffy-min.js"></script>
         <script src="/js/maplabel-compiled.js"></script>
         <script src="/js/moment.js"></script>
         <script src="/js/short_notice_list.js"></script>
         <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
         <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css"/>
         <!--
            This script enables structural HTML5 elements in old IE.
            http://code.google.com/p/html5shim/
            -->
         <!--[if lt IE 9]>
         <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
         <![endif]-->
         <style>
            /* reset the size of the info marker box in the google maps css */
            .gm-style-iw {
            width: 224px !important;
            height: 110px !important;
            }
            body {padding:0; margin:0; font:12px/130% sans-serif;}
            input, select {margin-top:4px;}
            .mission_count_container {float:left; background:#fff; text-align:center; margin-right:20px; padding:6px 15px; border-radius:30px;}
            #mission_count {display:block; font-size:24px; font-weight:bold; margin-top:5px;}
            .filter_field {float:left; margin-right:7px; padding-right:7px; padding-top:5px; border-right:1px solid #ddd;}
            @media (max-width: 569px) {
            .mission_count_container {float:none; background:#fff; text-align:center; margin-right:0; padding:6px 15px; border-radius:30px;}
            #mission_count {display:block; font-size:24px; font-weight:bold; margin-top:5px;}
            .filter_field {float:none; text-align:center; margin-right:0; padding-right:0; padding:7px 0 7px 0; border-bottom:1px solid #ddd; border-right:none;}
            }
         </style>
         <!-- Google Analytics Snippet --->
         <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            
            ga('create', 'UA-8379692-2', 'auto');
                    ga('send', 'pageview');
         </script>
         <style type="text/css">#sfWebDebug {   padding: 0;   margin: 0;   font-family: Arial, sans-serif;   font-size: 12px;   color: #333;   text-align: left;   line-height: 12px; }  #sfWebDebug a, #sfWebDebug a:hover {   text-decoration: none;   border: none;   background-color: transparent;   color: #000; }  #sfWebDebug img {   float: none;   margin: 0;   border: 0;   display: inline; }  #sfWebDebugBar {   position: absolute;   margin: 0;   padding: 1px 0;   right: 0px;   top: 0px;   opacity: 0.80;   filter: alpha(opacity:80);   z-index: 10000;   white-space: nowrap; }  #sfWebDebugBar[id] {   position: fixed; }  #sfWebDebugBar img {   vertical-align: middle; }  #sfWebDebugBar .sfWebDebugMenu {   padding: 5px;   padding-left: 0;   display: inline;   margin: 0; }  #sfWebDebugBar .sfWebDebugMenu li {   display: inline;   list-style: none;   margin: 0;   padding: 0 6px; }  #sfWebDebugBar .sfWebDebugMenu li.last {   margin: 0;   padding: 0;   border: 0; }  #sfWebDebugDatabaseDetails li {   margin: 0;   margin-left: 30px;   padding: 5px 0; }  #sfWebDebugShortMessages li {   margin-bottom: 10px;   padding: 5px;   background-color: #ddd; }  #sfWebDebugShortMessages li {   list-style: none; }  #sfWebDebugDetails {   margin-right: 7px; }  #sfWebDebug pre {   line-height: 1.3;   margin-bottom: 10px; }  #sfWebDebug h1 {   font-size: 16px;   font-weight: bold;   margin-bottom: 20px;   padding: 0;   border: 0px;   background-color: #eee; }  #sfWebDebug h2 {   font-size: 14px;   font-weight: bold;   margin: 10px 0;   padding: 0;   border: 0px;   background: none; }  #sfWebDebug .sfWebDebugTop {   position: absolute;   left: 0px;   top: 0px;   width: 98%;   padding: 0 1%;   margin: 0;   z-index: 9999;   background-color: #efefef;   border-bottom: 1px solid #aaa; }  #sfWebDebugLog {   margin: 0;   padding: 3px;   font-size: 11px; }  #sfWebDebugLogMenu li {   display: inline;   list-style: none;   margin: 0;   padding: 0 5px;   border-right: 1px solid #aaa; }  #sfWebDebugConfigSummary {   display: inline;   padding: 5px;   background-color: #ddd;   border: 1px solid #aaa;   margin: 20px 0; }  #sfWebDebugConfigSummary li {   list-style: none;   display: inline;   margin: 0;   padding: 0 5px; }  #sfWebDebugConfigSummary li.last {   border: 0; }  .sfWebDebugInfo, .sfWebDebugInfo td {   background-color: #ddd; }  .sfWebDebugWarning, .sfWebDebugWarning td {   background-color: orange; }  .sfWebDebugError, .sfWebDebugError td {   background-color: #f99; }  .sfWebDebugLogNumber {   width: 1%; }  .sfWebDebugLogType {   width: 1%;   white-space: nowrap;   color: darkgreen; }  .sfWebDebugLogInfo {   color: blue; }  .ison {   color: #3f3;   margin-right: 5px; }  .isoff {   color: #f33;   margin-right: 5px;   text-decoration: line-through; }  .sfWebDebugLogs {   padding: 0;   margin: 0;   border: 1px solid #999;   font-family: Arial;   font-size: 11px; }  .sfWebDebugLogs tr {   padding: 0;   margin: 0;   border: 0; }  .sfWebDebugLogs td {   margin: 0;   border: 0;   padding: 1px 3px;   vertical-align: top; }  .sfWebDebugLogs th {   margin: 0;   border: 0;   padding: 3px 5px;   vertical-align: top;   background-color: #999;   color: #eee;   white-space: nowrap; }  .sfWebDebugDebugInfo {   margin-left: 10px;   padding-left: 5px;   border-left: 1px solid #aaa; }  .sfWebDebugCache {   padding: 0;   margin: 0;   font-family: Arial;   position: absolute;   overflow: hidden;   z-index: 995;   font-size: 9px;   padding: 2px;   filter:alpha(opacity=85);   -moz-opacity:0.85;   opacity: 0.85; }  #sfWebDebugSymfonyVersion {   margin-left: 0;   padding: 1px 4px;   background-color: #666;   color: #fff; }</style>
      </head>
      <body lang="en">
         <div class="wrapper" style="padding:10px; background:#fff;">
            ﻿<script language="javascript">
               var flight_paths = []; // an array of the flight path lines
               var markers = []; // an array of the markers
               var destinationIcon = "/images/mm_20_red.png";
               var midpoints = null;
               var list_table = null;
               var home_address_marker = null;
               var facility_marker = null;
               var map;
               var map_center = null; // global variable to track the center of the map in case the user has set it
               var default_latitude  = 40.7287778;
               var default_longitude = -73.4134167;
               var default_zoom      = 5;
               mission_legs = TAFFY([{"missionLegId":154477,"originIdent":"BFL","destinationIdent":"PAO","originLat":35.43360137939,"originLon":-119.05680084229,"destinationLat":37.46110916138,"destinationLon":-122.1150970459,"originDistance":59,"destDistance":404,"missionDate":1578380400,"missionDateDisplay":"01-07-2020","seatsAvailable":3,"etd":null,"weightAvailable":340,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154963,"originIdent":"RIW","destinationIdent":"APA","originLat":43.06423950195,"originLon":-108.45980072021,"destinationLat":39.57012939453,"destinationLon":-104.84929656982,"originDistance":689,"destDistance":700,"missionDate":1578380400,"missionDateDisplay":"01-07-2020","seatsAvailable":4,"etd":null,"weightAvailable":699,"flightTiming":"Arrive APA by 12:30","offerType":"deadhead"},{"missionLegId":154792,"originIdent":"COE","destinationIdent":"BFI","originLat":47.77428817749,"originLon":-116.81960296631,"destinationLat":47.5299987793,"destinationLon":-122.30200195312,"originDistance":795,"destDistance":936,"missionDate":1578380400,"missionDateDisplay":"01-07-2020","seatsAvailable":6,"etd":null,"weightAvailable":594,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":154772,"originIdent":"TNP","destinationIdent":"SBD","originLat":34.13159942627,"originLon":-115.94580078125,"destinationLat":34.09534835815,"destinationLon":-117.23490142822,"originDistance":126,"destDistance":99,"missionDate":1578380400,"missionDateDisplay":"01-07-2020","seatsAvailable":2,"etd":null,"weightAvailable":300,"flightTiming":"12:00 PM pick-up at TNP","offerType":"available"},{"missionLegId":154811,"originIdent":"HIO","destinationIdent":"3S8","originLat":45.54039001465,"originLon":-122.94979858398,"destinationLat":42.51012039185,"destinationLon":-123.38800048828,"originDistance":689,"destDistance":681,"missionDate":1578380400,"missionDateDisplay":"01-07-2020","seatsAvailable":3,"etd":null,"weightAvailable":320,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154628,"originIdent":"AJZ","destinationIdent":"APA","originLat":38.78641891479,"originLon":-108.06359863281,"destinationLat":39.57012939453,"destinationLon":-104.84929656982,"originDistance":558,"destDistance":700,"missionDate":1578466800,"missionDateDisplay":"01-08-2020","seatsAvailable":4,"etd":null,"weightAvailable":699,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154296,"originIdent":"BAM","destinationIdent":"MOD","originLat":40.59904098511,"originLon":-116.8742980957,"destinationLat":37.62582015991,"destinationLon":-120.95439910889,"originDistance":368,"destDistance":375,"missionDate":1578466800,"missionDateDisplay":"01-08-2020","seatsAvailable":4,"etd":null,"weightAvailable":699,"flightTiming":"11:30 AM","offerType":"deadhead"},{"missionLegId":154296,"originIdent":"BAM","destinationIdent":"MOD","originLat":40.59904098511,"originLon":-116.8742980957,"destinationLat":37.62582015991,"destinationLon":-120.95439910889,"originDistance":368,"destDistance":375,"missionDate":1578466800,"missionDateDisplay":"01-08-2020","seatsAvailable":2,"etd":null,"weightAvailable":536,"flightTiming":"11:30 AM","offerType":"available"},{"missionLegId":154299,"originIdent":"VIS","destinationIdent":"PAO","originLat":36.31866836548,"originLon":-119.39289855957,"destinationLat":37.46110916138,"destinationLon":-122.1150970459,"originDistance":114,"destDistance":404,"missionDate":1578466800,"missionDateDisplay":"01-08-2020","seatsAvailable":2,"etd":null,"weightAvailable":360,"flightTiming":"Arrive by noon","offerType":"deadhead"},{"missionLegId":155029,"originIdent":"DRO","destinationIdent":"BJC","originLat":37.15151977539,"originLon":-107.75379943848,"destinationLat":39.90879058838,"destinationLon":-105.11720275879,"originDistance":541,"destDistance":701,"missionDate":1578466800,"missionDateDisplay":"01-08-2020","seatsAvailable":6,"etd":null,"weightAvailable":594,"flightTiming":"Arrive 10:45am","offerType":"deadhead"},{"missionLegId":155029,"originIdent":"DRO","destinationIdent":"BJC","originLat":37.15151977539,"originLon":-107.75379943848,"destinationLat":39.90879058838,"destinationLon":-105.11720275879,"originDistance":541,"destDistance":701,"missionDate":1578466800,"missionDateDisplay":"01-08-2020","seatsAvailable":2,"etd":null,"weightAvailable":292,"flightTiming":"Arrive 10:45am","offerType":"available"},{"missionLegId":154648,"originIdent":"UAO","destinationIdent":"BFI","originLat":45.24713897705,"originLon":-122.77010345459,"destinationLat":47.5299987793,"destinationLon":-122.30200195312,"originDistance":670,"destDistance":936,"missionDate":1578466800,"missionDateDisplay":"01-08-2020","seatsAvailable":3,"etd":null,"weightAvailable":480,"flightTiming":"Arrive RNT or BFI 10:30 AM","offerType":"deadhead"},{"missionLegId":154737,"originIdent":"WMC","destinationIdent":"PAO","originLat":40.89661026001,"originLon":-117.80590057373,"destinationLat":37.46110916138,"destinationLon":-122.1150970459,"originDistance":380,"destDistance":404,"missionDate":1578466800,"missionDateDisplay":"01-08-2020","seatsAvailable":4,"etd":null,"weightAvailable":475,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":153303,"originIdent":"IDA","destinationIdent":"MSO","originLat":43.51372146606,"originLon":-112.07070159912,"destinationLat":46.91630935669,"destinationLon":-114.09059906006,"originDistance":612,"destDistance":866,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":4,"etd":null,"weightAvailable":371,"flightTiming":"2 leg relay; sugg. handoff IDA 11:00 AM","offerType":"deadhead"},{"missionLegId":153303,"originIdent":"IDA","destinationIdent":"MSO","originLat":43.51372146606,"originLon":-112.07070159912,"destinationLat":46.91630935669,"destinationLon":-114.09059906006,"originDistance":612,"destDistance":866,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":2,"etd":null,"weightAvailable":209,"flightTiming":"2 leg relay; sugg. handoff IDA 11:00 AM","offerType":"available"},{"missionLegId":154934,"originIdent":"RNT","destinationIdent":"BLI","originLat":47.49314117432,"originLon":-122.21579742432,"destinationLat":48.79275131226,"destinationLon":-122.53749847412,"originDistance":793,"destDistance":1010,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":4,"etd":null,"weightAvailable":450,"flightTiming":"Depart RNT after 5pm","offerType":"deadhead"},{"missionLegId":154934,"originIdent":"RNT","destinationIdent":"BLI","originLat":47.49314117432,"originLon":-122.21579742432,"destinationLat":48.79275131226,"destinationLon":-122.53749847412,"originDistance":793,"destDistance":1010,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":2,"etd":null,"weightAvailable":250,"flightTiming":"Depart RNT after 5pm","offerType":"available"},{"missionLegId":154951,"originIdent":"DRO","destinationIdent":"APA","originLat":37.15151977539,"originLon":-107.75379943848,"destinationLat":39.57012939453,"destinationLon":-104.84929656982,"originDistance":541,"destDistance":700,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":4,"etd":null,"weightAvailable":376,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154951,"originIdent":"DRO","destinationIdent":"APA","originLat":37.15151977539,"originLon":-107.75379943848,"destinationLat":39.57012939453,"destinationLon":-104.84929656982,"originDistance":541,"destDistance":700,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":2,"etd":null,"weightAvailable":176,"flightTiming":"Anytime","offerType":"available"},{"missionLegId":153302,"originIdent":"SLC","destinationIdent":"IDA","originLat":40.78839111328,"originLon":-111.97779846191,"destinationLat":43.51372146606,"destinationLon":-112.07070159912,"originDistance":482,"destDistance":687,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":4,"etd":null,"weightAvailable":428,"flightTiming":"2 leg relay; sugg. handoff IDA 11:00 AM","offerType":"deadhead"},{"missionLegId":153302,"originIdent":"SLC","destinationIdent":"IDA","originLat":40.78839111328,"originLon":-111.97779846191,"destinationLat":43.51372146606,"destinationLon":-112.07070159912,"originDistance":482,"destDistance":687,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":2,"etd":null,"weightAvailable":266,"flightTiming":"2 leg relay; sugg. handoff IDA 11:00 AM","offerType":"available"},{"missionLegId":154059,"originIdent":"PAE","destinationIdent":"SNA","originLat":47.90634155273,"originLon":-122.28160095215,"destinationLat":33.67567062378,"destinationLon":-117.86820220947,"originDistance":818,"destDistance":97,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154931,"originIdent":"38W","destinationIdent":"RNT","originLat":48.95589065552,"originLon":-122.45809936523,"destinationLat":47.49314117432,"destinationLon":-122.21579742432,"originDistance":881,"destDistance":932,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":4,"etd":null,"weightAvailable":450,"flightTiming":"Arrive RNT by 12pm","offerType":"deadhead"},{"missionLegId":154931,"originIdent":"38W","destinationIdent":"RNT","originLat":48.95589065552,"originLon":-122.45809936523,"destinationLat":47.49314117432,"destinationLon":-122.21579742432,"originDistance":881,"destDistance":932,"missionDate":1578553200,"missionDateDisplay":"01-09-2020","seatsAvailable":2,"etd":null,"weightAvailable":250,"flightTiming":"Arrive RNT by 12pm","offerType":"available"},{"missionLegId":154775,"originIdent":"PSP","destinationIdent":"SBD","originLat":33.82966995239,"originLon":-116.5066986084,"destinationLat":34.09534835815,"destinationLon":-117.23490142822,"originDistance":106,"destDistance":99,"missionDate":1578639600,"missionDateDisplay":"01-10-2020","seatsAvailable":2,"etd":null,"weightAvailable":325,"flightTiming":"11:00 AM pick-up at PSP","offerType":"available"},{"missionLegId":154688,"originIdent":"PAO","destinationIdent":"MAE","originLat":37.46110916138,"originLon":-122.1150970459,"destinationLat":36.98860931396,"destinationLon":-120.11239624023,"originDistance":248,"destDistance":320,"missionDate":1578639600,"missionDateDisplay":"01-10-2020","seatsAvailable":2,"etd":null,"weightAvailable":320,"flightTiming":"Depart 2pm","offerType":"deadhead"},{"missionLegId":154637,"originIdent":"MYF","destinationIdent":"GYR","originLat":32.81571960449,"originLon":-117.13960266113,"destinationLat":33.42282104492,"destinationLon":-112.37599945068,"originDistance":124,"destDistance":210,"missionDate":1578639600,"missionDateDisplay":"01-10-2020","seatsAvailable":3,"etd":null,"weightAvailable":560,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154543,"originIdent":"PHX","destinationIdent":"PGA","originLat":33.43428039551,"originLon":-112.01159667969,"destinationLat":36.92607879639,"destinationLon":-111.44840240479,"originDistance":327,"destDistance":358,"missionDate":1578639600,"missionDateDisplay":"01-10-2020","seatsAvailable":6,"etd":null,"weightAvailable":389,"flightTiming":"Noon or after","offerType":"deadhead"},{"missionLegId":154058,"originIdent":"SNA","destinationIdent":"MCC","originLat":33.67567062378,"originLon":-117.86820220947,"destinationLat":38.66764068604,"destinationLon":-121.40059661865,"originDistance":61,"destDistance":438,"missionDate":1578726000,"missionDateDisplay":"01-11-2020","seatsAvailable":6,"etd":null,"weightAvailable":1040,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154418,"originIdent":"MCC","destinationIdent":"PAE","originLat":38.66764068604,"originLon":-121.40059661865,"destinationLat":47.90634155273,"destinationLon":-122.28160095215,"originDistance":284,"destDistance":957,"missionDate":1578726000,"missionDateDisplay":"01-11-2020","seatsAvailable":7,"etd":null,"weightAvailable":1035,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154418,"originIdent":"MCC","destinationIdent":"PAE","originLat":38.66764068604,"originLon":-121.40059661865,"destinationLat":47.90634155273,"destinationLon":-122.28160095215,"originDistance":284,"destDistance":957,"missionDate":1578726000,"missionDateDisplay":"01-11-2020","seatsAvailable":2,"etd":null,"weightAvailable":425,"flightTiming":"Anytime","offerType":"available"},{"missionLegId":154796,"originIdent":"SFF","destinationIdent":"BIL","originLat":47.68281936646,"originLon":-117.32260131836,"destinationLat":45.80767059326,"destinationLon":-108.54290008545,"originDistance":787,"destDistance":873,"missionDate":1578726000,"missionDateDisplay":"01-11-2020","seatsAvailable":3,"etd":null,"weightAvailable":480,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":154795,"originIdent":"BFI","destinationIdent":"SFF","originLat":47.5299987793,"originLon":-122.30200195312,"destinationLat":47.68281936646,"destinationLon":-117.32260131836,"originDistance":796,"destDistance":907,"missionDate":1578726000,"missionDateDisplay":"01-11-2020","seatsAvailable":3,"etd":null,"weightAvailable":480,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":154524,"originIdent":"VGT","destinationIdent":"MYF","originLat":36.21068954468,"originLon":-115.19439697266,"destinationLat":32.81571960449,"destinationLon":-117.13960266113,"originDistance":186,"destDistance":38,"missionDate":1578812400,"missionDateDisplay":"01-12-2020","seatsAvailable":3,"etd":null,"weightAvailable":480,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":152518,"originIdent":"LPC","destinationIdent":"PAO","originLat":34.66561889648,"originLon":-120.4674987793,"destinationLat":37.46110916138,"destinationLon":-122.1150970459,"originDistance":101,"destDistance":404,"missionDate":1578898800,"missionDateDisplay":"01-13-2020","seatsAvailable":5,"etd":null,"weightAvailable":907,"flightTiming":"Arrive PAO by 2:30 PM","offerType":"available"},{"missionLegId":152518,"originIdent":"LPC","destinationIdent":"PAO","originLat":34.66561889648,"originLon":-120.4674987793,"destinationLat":37.46110916138,"destinationLon":-122.1150970459,"originDistance":101,"destDistance":404,"missionDate":1578898800,"missionDateDisplay":"01-13-2020","seatsAvailable":7,"etd":null,"weightAvailable":1035,"flightTiming":"Arrive PAO by 2:30 PM","offerType":"deadhead"},{"missionLegId":154746,"originIdent":"SFF","destinationIdent":"BFI","originLat":47.68281936646,"originLon":-117.32260131836,"destinationLat":47.5299987793,"destinationLon":-122.30200195312,"originDistance":787,"destDistance":936,"missionDate":1578898800,"missionDateDisplay":"01-13-2020","seatsAvailable":6,"etd":null,"weightAvailable":594,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154877,"originIdent":"TTD","destinationIdent":"MFR","originLat":45.54936981201,"originLon":-122.40129852295,"destinationLat":42.37422180176,"destinationLon":-122.87349700928,"originDistance":682,"destDistance":662,"missionDate":1578985200,"missionDateDisplay":"01-14-2020","seatsAvailable":4,"etd":null,"weightAvailable":557,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154877,"originIdent":"TTD","destinationIdent":"MFR","originLat":45.54936981201,"originLon":-122.40129852295,"destinationLat":42.37422180176,"destinationLon":-122.87349700928,"originDistance":682,"destDistance":662,"missionDate":1578985200,"missionDateDisplay":"01-14-2020","seatsAvailable":2,"etd":null,"weightAvailable":400,"flightTiming":"Anytime","offerType":"available"},{"missionLegId":154166,"originIdent":"46U","destinationIdent":"SLC","originLat":43.18463897705,"originLon":-111.04239654541,"destinationLat":40.78839111328,"destinationLon":-111.97779846191,"originDistance":620,"destDistance":537,"missionDate":1579071600,"missionDateDisplay":"01-15-2020","seatsAvailable":3,"etd":null,"weightAvailable":424,"flightTiming":"Anytime, flex Driggs or Alpine","offerType":"available"},{"missionLegId":154166,"originIdent":"46U","destinationIdent":"SLC","originLat":43.18463897705,"originLon":-111.04239654541,"destinationLat":40.78839111328,"destinationLon":-111.97779846191,"originDistance":620,"destDistance":537,"missionDate":1579071600,"missionDateDisplay":"01-15-2020","seatsAvailable":6,"etd":null,"weightAvailable":809,"flightTiming":"Anytime, flex Driggs or Alpine","offerType":"deadhead"},{"missionLegId":155131,"originIdent":"GTF","destinationIdent":"MSO","originLat":47.4819984436,"originLon":-111.37069702148,"destinationLat":46.91630935669,"destinationLon":-114.09059906006,"originDistance":836,"destDistance":866,"missionDate":1579071600,"missionDateDisplay":"01-15-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"Arrive MSO by 8:00 AM","offerType":"deadhead"},{"missionLegId":154749,"originIdent":"BFI","destinationIdent":"GEG","originLat":47.5299987793,"originLon":-122.30200195312,"destinationLat":47.61986160278,"destinationLon":-117.53379821777,"originDistance":796,"destDistance":903,"missionDate":1579071600,"missionDateDisplay":"01-15-2020","seatsAvailable":4,"etd":null,"weightAvailable":699,"flightTiming":"Depart BFI after 12pm","offerType":"deadhead"},{"missionLegId":155134,"originIdent":"MSO","destinationIdent":"GTF","originLat":46.91630935669,"originLon":-114.09059906006,"destinationLat":47.4819984436,"destinationLon":-111.37069702148,"originDistance":765,"destDistance":923,"missionDate":1579071600,"missionDateDisplay":"01-15-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"Depart MSO after 5:30 PM","offerType":"deadhead"},{"missionLegId":152620,"originIdent":"IDA","destinationIdent":"SLC","originLat":43.51372146606,"originLon":-112.07070159912,"destinationLat":40.78839111328,"destinationLon":-111.97779846191,"originDistance":612,"destDistance":537,"missionDate":1579158000,"missionDateDisplay":"01-16-2020","seatsAvailable":5,"etd":null,"weightAvailable":594,"flightTiming":"2 leg relay, suggstd hand-off IDA 10:00 AM","offerType":"deadhead"},{"missionLegId":152620,"originIdent":"IDA","destinationIdent":"SLC","originLat":43.51372146606,"originLon":-112.07070159912,"destinationLat":40.78839111328,"destinationLon":-111.97779846191,"originDistance":612,"destDistance":537,"missionDate":1579158000,"missionDateDisplay":"01-16-2020","seatsAvailable":2,"etd":null,"weightAvailable":264,"flightTiming":"2 leg relay, suggstd hand-off IDA 10:00 AM","offerType":"available"},{"missionLegId":152619,"originIdent":"BIL","destinationIdent":"IDA","originLat":45.80767059326,"originLon":-108.54290008545,"destinationLat":43.51372146606,"destinationLon":-112.07070159912,"originDistance":810,"destDistance":687,"missionDate":1579158000,"missionDateDisplay":"01-16-2020","seatsAvailable":2,"etd":null,"weightAvailable":264,"flightTiming":"2 leg relay, suggstd hand-off IDA 10:00 AM","offerType":"available"},{"missionLegId":154312,"originIdent":"MFR","destinationIdent":"BFI","originLat":42.37422180176,"originLon":-122.87349700928,"destinationLat":47.5299987793,"destinationLon":-122.30200195312,"originDistance":512,"destDistance":936,"missionDate":1579503600,"missionDateDisplay":"01-20-2020","seatsAvailable":3,"etd":null,"weightAvailable":480,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":154751,"originIdent":"SFF","destinationIdent":"BFI","originLat":47.68281936646,"originLon":-117.32260131836,"destinationLat":47.5299987793,"destinationLon":-122.30200195312,"originDistance":787,"destDistance":936,"missionDate":1579503600,"missionDateDisplay":"01-20-2020","seatsAvailable":4,"etd":null,"weightAvailable":699,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154311,"originIdent":"MCC","destinationIdent":"MFR","originLat":38.66764068604,"originLon":-121.40059661865,"destinationLat":42.37422180176,"destinationLon":-122.87349700928,"originDistance":284,"destDistance":662,"missionDate":1579503600,"missionDateDisplay":"01-20-2020","seatsAvailable":3,"etd":null,"weightAvailable":480,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":154752,"originIdent":"BFI","destinationIdent":"SFF","originLat":47.5299987793,"originLon":-122.30200195312,"destinationLat":47.68281936646,"destinationLon":-117.32260131836,"originDistance":796,"destDistance":907,"missionDate":1579590000,"missionDateDisplay":"01-21-2020","seatsAvailable":4,"etd":null,"weightAvailable":699,"flightTiming":"Depart BFI after 1:00 PM","offerType":"deadhead"},{"missionLegId":154236,"originIdent":"BFL","destinationIdent":"SMO","originLat":35.43360137939,"originLon":-119.05680084229,"destinationLat":34.01583099365,"destinationLon":-118.45130157471,"originDistance":59,"destDistance":133,"missionDate":1579676400,"missionDateDisplay":"01-22-2020","seatsAvailable":2,"etd":null,"weightAvailable":192,"flightTiming":"Arrive SMO 10:30 AM","offerType":"available"},{"missionLegId":155113,"originIdent":"GEG","destinationIdent":"BFI","originLat":47.61986160278,"originLon":-117.53379821777,"destinationLat":47.5299987793,"destinationLon":-122.30200195312,"originDistance":783,"destDistance":936,"missionDate":1579676400,"missionDateDisplay":"01-22-2020","seatsAvailable":4,"etd":null,"weightAvailable":699,"flightTiming":"2 Leg relay","offerType":"deadhead"},{"missionLegId":154731,"originIdent":"VIS","destinationIdent":"VNY","originLat":36.31866836548,"originLon":-119.39289855957,"destinationLat":34.20980072021,"destinationLon":-118.48999786377,"originDistance":114,"destDistance":142,"missionDate":1579676400,"missionDateDisplay":"01-22-2020","seatsAvailable":2,"etd":null,"weightAvailable":232,"flightTiming":"2 leg relay, Arrive VNY by 12:00 PM","offerType":"available"},{"missionLegId":155112,"originIdent":"MSO","destinationIdent":"GEG","originLat":46.91630935669,"originLon":-114.09059906006,"destinationLat":47.61986160278,"destinationLon":-117.53379821777,"originDistance":765,"destDistance":903,"missionDate":1579676400,"missionDateDisplay":"01-22-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"2 Leg relay","offerType":"deadhead"},{"missionLegId":154733,"originIdent":"VNY","destinationIdent":"VIS","originLat":34.20980072021,"originLon":-118.48999786377,"destinationLat":36.31866836548,"destinationLon":-119.39289855957,"originDistance":23,"destDistance":268,"missionDate":1579762800,"missionDateDisplay":"01-23-2020","seatsAvailable":3,"etd":null,"weightAvailable":440,"flightTiming":"2 leg relay, Depart VNY after 11 AM","offerType":"deadhead"},{"missionLegId":154734,"originIdent":"VIS","destinationIdent":"SAC","originLat":36.31866836548,"originLon":-119.39289855957,"destinationLat":38.51253128052,"destinationLon":-121.49349975586,"originDistance":114,"destDistance":433,"missionDate":1579762800,"missionDateDisplay":"01-23-2020","seatsAvailable":3,"etd":null,"weightAvailable":440,"flightTiming":"2 leg relay, Depart VNY after 11 AM","offerType":"deadhead"},{"missionLegId":155117,"originIdent":"GEG","destinationIdent":"MSO","originLat":47.61986160278,"originLon":-117.53379821777,"destinationLat":46.91630935669,"destinationLon":-114.09059906006,"originDistance":783,"destDistance":866,"missionDate":1579762800,"missionDateDisplay":"01-23-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"2 leg relay depart 12pm","offerType":"deadhead"},{"missionLegId":154997,"originIdent":"BOI","destinationIdent":"RLD","originLat":43.56436157227,"originLon":-116.22290039062,"destinationLat":46.30564117432,"destinationLon":-119.30419921875,"originDistance":548,"destDistance":834,"missionDate":1579935600,"missionDateDisplay":"01-25-2020","seatsAvailable":4,"etd":null,"weightAvailable":600,"flightTiming":"2 leg relay; sugg. handoff BOI 11:00 AM","offerType":"deadhead"},{"missionLegId":153360,"originIdent":"PRC","destinationIdent":"SMO","originLat":34.65446853638,"originLon":-112.41960144043,"destinationLat":34.01583099365,"destinationLon":-118.45130157471,"originDistance":297,"destDistance":133,"missionDate":1580194800,"missionDateDisplay":"01-28-2020","seatsAvailable":6,"etd":null,"weightAvailable":389,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":153360,"originIdent":"PRC","destinationIdent":"SMO","originLat":34.65446853638,"originLon":-112.41960144043,"destinationLat":34.01583099365,"destinationLon":-118.45130157471,"originDistance":297,"destDistance":133,"missionDate":1580194800,"missionDateDisplay":"01-28-2020","seatsAvailable":4,"etd":null,"weightAvailable":177,"flightTiming":"Anytime","offerType":"available"},{"missionLegId":154544,"originIdent":"PGA","destinationIdent":"SDL","originLat":36.92607879639,"originLon":-111.44840240479,"destinationLat":33.62287902832,"destinationLon":-111.91049957275,"originDistance":368,"destDistance":236,"missionDate":1580194800,"missionDateDisplay":"01-28-2020","seatsAvailable":4,"etd":null,"weightAvailable":520,"flightTiming":"Arrive by 9:30AM","offerType":"deadhead"},{"missionLegId":154544,"originIdent":"PGA","destinationIdent":"SDL","originLat":36.92607879639,"originLon":-111.44840240479,"destinationLat":33.62287902832,"destinationLon":-111.91049957275,"originDistance":368,"destDistance":236,"missionDate":1580194800,"missionDateDisplay":"01-28-2020","seatsAvailable":2,"etd":null,"weightAvailable":430,"flightTiming":"Arrive by 9:30AM","offerType":"available"},{"missionLegId":154547,"originIdent":"SDL","destinationIdent":"PGA","originLat":33.62287902832,"originLon":-111.91049957275,"destinationLat":36.92607879639,"destinationLon":-111.44840240479,"originDistance":329,"destDistance":358,"missionDate":1580194800,"missionDateDisplay":"01-28-2020","seatsAvailable":3,"etd":"13:00:00","weightAvailable":360,"flightTiming":"Depart 1:00 PM","offerType":"deadhead"},{"missionLegId":153363,"originIdent":"SMO","destinationIdent":"PRC","originLat":34.01583099365,"originLon":-118.45130157471,"destinationLat":34.65446853638,"destinationLon":-112.41960144043,"originDistance":34,"destDistance":236,"missionDate":1580281200,"missionDateDisplay":"01-29-2020","seatsAvailable":4,"etd":null,"weightAvailable":177,"flightTiming":"Depart SMO after 3:30 PM","offerType":"available"},{"missionLegId":154400,"originIdent":"SMO","destinationIdent":"MYF","originLat":34.01583099365,"originLon":-118.45130157471,"destinationLat":32.81571960449,"destinationLon":-117.13960266113,"originDistance":34,"destDistance":38,"missionDate":1580367600,"missionDateDisplay":"01-30-2020","seatsAvailable":4,"etd":null,"weightAvailable":475,"flightTiming":"Depart 1pm","offerType":"deadhead"},{"missionLegId":154911,"originIdent":"SFF","destinationIdent":"BOI","originLat":47.68281936646,"originLon":-117.32260131836,"destinationLat":43.56436157227,"destinationLon":-116.22290039062,"originDistance":787,"destDistance":659,"missionDate":1580367600,"missionDateDisplay":"01-30-2020","seatsAvailable":6,"etd":null,"weightAvailable":594,"flightTiming":"Depart SFF 1:15 PM or after","offerType":"deadhead"},{"missionLegId":154911,"originIdent":"SFF","destinationIdent":"BOI","originLat":47.68281936646,"originLon":-117.32260131836,"destinationLat":43.56436157227,"destinationLon":-116.22290039062,"originDistance":787,"destDistance":659,"missionDate":1580367600,"missionDateDisplay":"01-30-2020","seatsAvailable":4,"etd":null,"weightAvailable":344,"flightTiming":"Depart SFF 1:15 PM or after","offerType":"available"},{"missionLegId":154397,"originIdent":"MYF","destinationIdent":"SMO","originLat":32.81571960449,"originLon":-117.13960266113,"destinationLat":34.01583099365,"destinationLon":-118.45130157471,"originDistance":124,"destDistance":133,"missionDate":1580367600,"missionDateDisplay":"01-30-2020","seatsAvailable":4,"etd":null,"weightAvailable":475,"flightTiming":"Arrive SMO 9:30am","offerType":"deadhead"},{"missionLegId":153500,"originIdent":"SMO","destinationIdent":"TRM","originLat":34.01583099365,"originLon":-118.45130157471,"destinationLat":33.6266708374,"destinationLon":-116.15969848633,"originDistance":34,"destDistance":64,"missionDate":1580713200,"missionDateDisplay":"02-03-2020","seatsAvailable":4,"etd":null,"weightAvailable":450,"flightTiming":"Depart SMO after 11:30am","offerType":"deadhead"},{"missionLegId":153500,"originIdent":"SMO","destinationIdent":"TRM","originLat":34.01583099365,"originLon":-118.45130157471,"destinationLat":33.6266708374,"destinationLon":-116.15969848633,"originDistance":34,"destDistance":64,"missionDate":1580713200,"missionDateDisplay":"02-03-2020","seatsAvailable":2,"etd":null,"weightAvailable":270,"flightTiming":"Depart SMO after 11:30am","offerType":"available"},{"missionLegId":154220,"originIdent":"PSC","destinationIdent":"BOI","originLat":46.26467895508,"originLon":-119.1190032959,"destinationLat":43.56436157227,"destinationLon":-116.22290039062,"originDistance":701,"destDistance":659,"missionDate":1580713200,"missionDateDisplay":"02-03-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":153304,"originIdent":"MSO","destinationIdent":"IDA","originLat":46.91630935669,"originLon":-114.09059906006,"destinationLat":43.51372146606,"destinationLon":-112.07070159912,"originDistance":765,"destDistance":687,"missionDate":1580713200,"missionDateDisplay":"02-03-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"2 leg relay; sugg. handoff IDA 11:00 AM","offerType":"deadhead"},{"missionLegId":154285,"originIdent":"SFF","destinationIdent":"BFI","originLat":47.68281936646,"originLon":-117.32260131836,"destinationLat":47.5299987793,"destinationLon":-122.30200195312,"originDistance":787,"destDistance":936,"missionDate":1580713200,"missionDateDisplay":"02-03-2020","seatsAvailable":6,"etd":null,"weightAvailable":594,"flightTiming":"Arrive BFI by 12:00 pm","offerType":"deadhead"},{"missionLegId":154221,"originIdent":"BOI","destinationIdent":"SLC","originLat":43.56436157227,"originLon":-116.22290039062,"destinationLat":40.78839111328,"destinationLon":-111.97779846191,"originDistance":548,"destDistance":537,"missionDate":1580713200,"missionDateDisplay":"02-03-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":153305,"originIdent":"IDA","destinationIdent":"SLC","originLat":43.51372146606,"originLon":-112.07070159912,"destinationLat":40.78839111328,"destinationLon":-111.97779846191,"originDistance":612,"destDistance":537,"missionDate":1580713200,"missionDateDisplay":"02-03-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"2 leg relay; sugg. handoff IDA 11:00 AM","offerType":"deadhead"},{"missionLegId":154440,"originIdent":"MPI","destinationIdent":"PAO","originLat":37.51086044312,"originLon":-120.03949737549,"destinationLat":37.46110916138,"destinationLon":-122.1150970459,"originDistance":192,"destDistance":404,"missionDate":1580799600,"missionDateDisplay":"02-04-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"Arrive PAO by 12pm","offerType":"deadhead"},{"missionLegId":154443,"originIdent":"PAO","destinationIdent":"MPI","originLat":37.46110916138,"originLon":-122.1150970459,"destinationLat":37.51086044312,"destinationLon":-120.03949737549,"originDistance":248,"destDistance":345,"missionDate":1580799600,"missionDateDisplay":"02-04-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"Depart PAO after 3:30pm","offerType":"deadhead"},{"missionLegId":154222,"originIdent":"SLC","destinationIdent":"BOI","originLat":40.78839111328,"originLon":-111.97779846191,"destinationLat":43.56436157227,"destinationLon":-116.22290039062,"originDistance":482,"destDistance":659,"missionDate":1580886000,"missionDateDisplay":"02-05-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":154223,"originIdent":"BOI","destinationIdent":"PSC","originLat":43.56436157227,"originLon":-116.22290039062,"destinationLat":46.26467895508,"destinationLon":-119.1190032959,"originDistance":548,"destDistance":830,"missionDate":1580886000,"missionDateDisplay":"02-05-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"2 leg relay","offerType":"deadhead"},{"missionLegId":155144,"originIdent":"PAE","destinationIdent":"SNA","originLat":47.90634155273,"originLon":-122.28160095215,"destinationLat":33.67567062378,"destinationLon":-117.86820220947,"originDistance":818,"destDistance":97,"missionDate":1580972400,"missionDateDisplay":"02-06-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":155146,"originIdent":"PAE","destinationIdent":"SNA","originLat":47.90634155273,"originLon":-122.28160095215,"destinationLat":33.67567062378,"destinationLon":-117.86820220947,"originDistance":818,"destDistance":97,"missionDate":1580972400,"missionDateDisplay":"02-06-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":155147,"originIdent":"SNA","destinationIdent":"PAE","originLat":33.67567062378,"originLon":-117.86820220947,"destinationLat":47.90634155273,"destinationLon":-122.28160095215,"originDistance":61,"destDistance":957,"missionDate":1581145200,"missionDateDisplay":"02-08-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":155145,"originIdent":"SNA","destinationIdent":"PAE","originLat":33.67567062378,"originLon":-117.86820220947,"destinationLat":47.90634155273,"destinationLon":-122.28160095215,"originDistance":61,"destDistance":957,"missionDate":1581145200,"missionDateDisplay":"02-08-2020","seatsAvailable":null,"etd":null,"weightAvailable":0,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":155070,"originIdent":"SFF","destinationIdent":"MSO","originLat":47.68281936646,"originLon":-117.32260131836,"destinationLat":46.91630935669,"destinationLon":-114.09059906006,"originDistance":787,"destDistance":866,"missionDate":1581404400,"missionDateDisplay":"02-11-2020","seatsAvailable":3,"etd":null,"weightAvailable":400,"flightTiming":"2 leg relay; sugg. handoff SFF 11:00 AM","offerType":"deadhead"},{"missionLegId":154884,"originIdent":"BFL","destinationIdent":"PAO","originLat":35.43360137939,"originLon":-119.05680084229,"destinationLat":37.46110916138,"destinationLon":-122.1150970459,"originDistance":59,"destDistance":404,"missionDate":1581577200,"missionDateDisplay":"02-13-2020","seatsAvailable":6,"etd":null,"weightAvailable":389,"flightTiming":"Anytime","offerType":"deadhead"},{"missionLegId":154887,"originIdent":"PAO","destinationIdent":"BFL","originLat":37.46110916138,"originLon":-122.1150970459,"destinationLat":35.43360137939,"destinationLon":-119.05680084229,"originDistance":248,"destDistance":215,"missionDate":1581663600,"missionDateDisplay":"02-14-2020","seatsAvailable":6,"etd":null,"weightAvailable":389,"flightTiming":"Depart PAO after 3:00 PM","offerType":"deadhead"},{"missionLegId":153309,"originIdent":"IDA","destinationIdent":"U42","originLat":43.51372146606,"originLon":-112.07070159912,"destinationLat":40.61954116821,"destinationLon":-111.99289703369,"originDistance":612,"destDistance":527,"missionDate":1583132400,"missionDateDisplay":"03-02-2020","seatsAvailable":2,"etd":null,"weightAvailable":454,"flightTiming":"2 leg relay; sugg. handoff IDA 11:00 AM","offerType":"available"},{"missionLegId":153309,"originIdent":"IDA","destinationIdent":"U42","originLat":43.51372146606,"originLon":-112.07070159912,"destinationLat":40.61954116821,"destinationLon":-111.99289703369,"originDistance":612,"destDistance":527,"missionDate":1583132400,"missionDateDisplay":"03-02-2020","seatsAvailable":4,"etd":null,"weightAvailable":616,"flightTiming":"2 leg relay; sugg. handoff IDA 11:00 AM","offerType":"deadhead"}]);
               
            </script>
            <div id="left_column" style="width:70%;float:left;">
               <div id="filter_form" style="background:#ededed; padding:10px; overflow:hidden;">
                  <div class="mission_count_container" style="">Flights<span id="mission_count" style=""></span></div>
                  <!-- drop-down form -->
                  <div class="filter_field" style="">
                     Home to Origin Distance
                     <br/>
                     <select id="originDistance" onchange="filter_db()">
                        <option value="9999">All</option>
                        <option value="10">10 miles or less</option>
                        <option value="25">25 miles or less</option>
                        <option value="30">30 miles or less</option>
                        <option value="50">50 miles or less</option>
                     </select>
                  </div>
                  <div id="col1" class="filter_field" style="">
                     Destination Airport to Facility Distance
                     <br/>
                     <select id="destDistance" onchange="filter_db()">
                        <option value="9999">All</option>
                        <option value="10">10 miles or less</option>
                        <option value="25">25 miles or less</option>
                        <option value="30">30 miles or less</option>
                        <option value="50">50 miles or less</option>
                     </select>
                  </div>
                  <div class="filter_field" style="">
                     Earliest Date
                     <br/><input type="text" id="start_date" onchange="filter_db()"/>
                  </div>
                  <div class="filter_field" style="">
                     Latest Date
                     <br/><input type="text" id="end_date" onchange="filter_db()"/>
                  </div>
                  <div class="filter_field" style="">
                     Seats Available
                     <br/>
                     <select id="seatsAvailable" onchange="filter_db()">
                        <option value="all">All</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                     </select>
                  </div>
                  <div class="filter_field" style="">
                     &nbsp;
                     <br/><button id="zoom_to_route">Reset Table</button>
                  </div>
                  <div id="filter"></div>
                  <!-- not shown to users -->
               </div>
               <!-- /filter_form -->
               <div id="map_canvas" style="width:100%;height:auto"></div>
            </div>
            <div id="right_column" style="width:30%;float:left;">
               <h3>List of flights</h3>
               <table id="pending_deadheads_list" style="font-size:14px;">
                  <thead>
                     <tr>
                        <th>Hidden</th>
                        <th>Hidden</th>
                        <th>Hidden</th>
                        <th>Hidden</th>
                        <th>Hidden</th>
                        <th style="min-width:66px;">Origin</th>
                        <th style="min-width:66px;">Dest</th>
                        <th>Date</th>
                        <th>Details</th>
                        <th>Hidden</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr class="highlight">
                        <td>BFL-PAO</td>
                        <td>59</td>
                        <td>404</td>
                        <td>1578380400</td>
                        <td>3</td>
                        <td>BFL</td>
                        <td>PAO</td>
                        <td>01-07-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>RIW-APA</td>
                        <td>689</td>
                        <td>700</td>
                        <td>1578380400</td>
                        <td>4</td>
                        <td>RIW</td>
                        <td>APA</td>
                        <td>01-07-2020</td>
                        <td>Arrive APA by 12:30<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>COE-BFI</td>
                        <td>795</td>
                        <td>936</td>
                        <td>1578380400</td>
                        <td>6</td>
                        <td>COE</td>
                        <td>BFI</td>
                        <td>01-07-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>TNP-SBD</td>
                        <td>126</td>
                        <td>99</td>
                        <td>1578380400</td>
                        <td>2</td>
                        <td>TNP</td>
                        <td>SBD</td>
                        <td>01-07-2020</td>
                        <td>12:00 PM pick-up at TNP<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>HIO-3S8</td>
                        <td>689</td>
                        <td>681</td>
                        <td>1578380400</td>
                        <td>3</td>
                        <td>HIO</td>
                        <td>3S8</td>
                        <td>01-07-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>AJZ-APA</td>
                        <td>558</td>
                        <td>700</td>
                        <td>1578466800</td>
                        <td>4</td>
                        <td>AJZ</td>
                        <td>APA</td>
                        <td>01-08-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BAM-MOD</td>
                        <td>368</td>
                        <td>375</td>
                        <td>1578466800</td>
                        <td>4</td>
                        <td>BAM</td>
                        <td>MOD</td>
                        <td>01-08-2020</td>
                        <td>11:30 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BAM-MOD</td>
                        <td>368</td>
                        <td>375</td>
                        <td>1578466800</td>
                        <td>2</td>
                        <td>BAM</td>
                        <td>MOD</td>
                        <td>01-08-2020</td>
                        <td>11:30 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>VIS-PAO</td>
                        <td>114</td>
                        <td>404</td>
                        <td>1578466800</td>
                        <td>2</td>
                        <td>VIS</td>
                        <td>PAO</td>
                        <td>01-08-2020</td>
                        <td>Arrive by noon<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>DRO-BJC</td>
                        <td>541</td>
                        <td>701</td>
                        <td>1578466800</td>
                        <td>6</td>
                        <td>DRO</td>
                        <td>BJC</td>
                        <td>01-08-2020</td>
                        <td>Arrive 10:45am<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>DRO-BJC</td>
                        <td>541</td>
                        <td>701</td>
                        <td>1578466800</td>
                        <td>2</td>
                        <td>DRO</td>
                        <td>BJC</td>
                        <td>01-08-2020</td>
                        <td>Arrive 10:45am<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>UAO-BFI</td>
                        <td>670</td>
                        <td>936</td>
                        <td>1578466800</td>
                        <td>3</td>
                        <td>UAO</td>
                        <td>BFI</td>
                        <td>01-08-2020</td>
                        <td>Arrive RNT or BFI 10:30 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>WMC-PAO</td>
                        <td>380</td>
                        <td>404</td>
                        <td>1578466800</td>
                        <td>4</td>
                        <td>WMC</td>
                        <td>PAO</td>
                        <td>01-08-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>IDA-MSO</td>
                        <td>612</td>
                        <td>866</td>
                        <td>1578553200</td>
                        <td>4</td>
                        <td>IDA</td>
                        <td>MSO</td>
                        <td>01-09-2020</td>
                        <td>2 leg relay; sugg. handoff IDA 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>IDA-MSO</td>
                        <td>612</td>
                        <td>866</td>
                        <td>1578553200</td>
                        <td>2</td>
                        <td>IDA</td>
                        <td>MSO</td>
                        <td>01-09-2020</td>
                        <td>2 leg relay; sugg. handoff IDA 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>RNT-BLI</td>
                        <td>793</td>
                        <td>1010</td>
                        <td>1578553200</td>
                        <td>4</td>
                        <td>RNT</td>
                        <td>BLI</td>
                        <td>01-09-2020</td>
                        <td>Depart RNT after 5pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>RNT-BLI</td>
                        <td>793</td>
                        <td>1010</td>
                        <td>1578553200</td>
                        <td>2</td>
                        <td>RNT</td>
                        <td>BLI</td>
                        <td>01-09-2020</td>
                        <td>Depart RNT after 5pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>DRO-APA</td>
                        <td>541</td>
                        <td>700</td>
                        <td>1578553200</td>
                        <td>4</td>
                        <td>DRO</td>
                        <td>APA</td>
                        <td>01-09-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>DRO-APA</td>
                        <td>541</td>
                        <td>700</td>
                        <td>1578553200</td>
                        <td>2</td>
                        <td>DRO</td>
                        <td>APA</td>
                        <td>01-09-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SLC-IDA</td>
                        <td>482</td>
                        <td>687</td>
                        <td>1578553200</td>
                        <td>4</td>
                        <td>SLC</td>
                        <td>IDA</td>
                        <td>01-09-2020</td>
                        <td>2 leg relay; sugg. handoff IDA 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SLC-IDA</td>
                        <td>482</td>
                        <td>687</td>
                        <td>1578553200</td>
                        <td>2</td>
                        <td>SLC</td>
                        <td>IDA</td>
                        <td>01-09-2020</td>
                        <td>2 leg relay; sugg. handoff IDA 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PAE-SNA</td>
                        <td>818</td>
                        <td>97</td>
                        <td>1578553200</td>
                        <td></td>
                        <td>PAE</td>
                        <td>SNA</td>
                        <td>01-09-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>38W-RNT</td>
                        <td>881</td>
                        <td>932</td>
                        <td>1578553200</td>
                        <td>4</td>
                        <td>38W</td>
                        <td>RNT</td>
                        <td>01-09-2020</td>
                        <td>Arrive RNT by 12pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>38W-RNT</td>
                        <td>881</td>
                        <td>932</td>
                        <td>1578553200</td>
                        <td>2</td>
                        <td>38W</td>
                        <td>RNT</td>
                        <td>01-09-2020</td>
                        <td>Arrive RNT by 12pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PSP-SBD</td>
                        <td>106</td>
                        <td>99</td>
                        <td>1578639600</td>
                        <td>2</td>
                        <td>PSP</td>
                        <td>SBD</td>
                        <td>01-10-2020</td>
                        <td>11:00 AM pick-up at PSP<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PAO-MAE</td>
                        <td>248</td>
                        <td>320</td>
                        <td>1578639600</td>
                        <td>2</td>
                        <td>PAO</td>
                        <td>MAE</td>
                        <td>01-10-2020</td>
                        <td>Depart 2pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MYF-GYR</td>
                        <td>124</td>
                        <td>210</td>
                        <td>1578639600</td>
                        <td>3</td>
                        <td>MYF</td>
                        <td>GYR</td>
                        <td>01-10-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PHX-PGA</td>
                        <td>327</td>
                        <td>358</td>
                        <td>1578639600</td>
                        <td>6</td>
                        <td>PHX</td>
                        <td>PGA</td>
                        <td>01-10-2020</td>
                        <td>Noon or after<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SNA-MCC</td>
                        <td>61</td>
                        <td>438</td>
                        <td>1578726000</td>
                        <td>6</td>
                        <td>SNA</td>
                        <td>MCC</td>
                        <td>01-11-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MCC-PAE</td>
                        <td>284</td>
                        <td>957</td>
                        <td>1578726000</td>
                        <td>7</td>
                        <td>MCC</td>
                        <td>PAE</td>
                        <td>01-11-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MCC-PAE</td>
                        <td>284</td>
                        <td>957</td>
                        <td>1578726000</td>
                        <td>2</td>
                        <td>MCC</td>
                        <td>PAE</td>
                        <td>01-11-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SFF-BIL</td>
                        <td>787</td>
                        <td>873</td>
                        <td>1578726000</td>
                        <td>3</td>
                        <td>SFF</td>
                        <td>BIL</td>
                        <td>01-11-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BFI-SFF</td>
                        <td>796</td>
                        <td>907</td>
                        <td>1578726000</td>
                        <td>3</td>
                        <td>BFI</td>
                        <td>SFF</td>
                        <td>01-11-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>VGT-MYF</td>
                        <td>186</td>
                        <td>38</td>
                        <td>1578812400</td>
                        <td>3</td>
                        <td>VGT</td>
                        <td>MYF</td>
                        <td>01-12-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>LPC-PAO</td>
                        <td>101</td>
                        <td>404</td>
                        <td>1578898800</td>
                        <td>5</td>
                        <td>LPC</td>
                        <td>PAO</td>
                        <td>01-13-2020</td>
                        <td>Arrive PAO by 2:30 PM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>LPC-PAO</td>
                        <td>101</td>
                        <td>404</td>
                        <td>1578898800</td>
                        <td>7</td>
                        <td>LPC</td>
                        <td>PAO</td>
                        <td>01-13-2020</td>
                        <td>Arrive PAO by 2:30 PM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SFF-BFI</td>
                        <td>787</td>
                        <td>936</td>
                        <td>1578898800</td>
                        <td>6</td>
                        <td>SFF</td>
                        <td>BFI</td>
                        <td>01-13-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>TTD-MFR</td>
                        <td>682</td>
                        <td>662</td>
                        <td>1578985200</td>
                        <td>4</td>
                        <td>TTD</td>
                        <td>MFR</td>
                        <td>01-14-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>TTD-MFR</td>
                        <td>682</td>
                        <td>662</td>
                        <td>1578985200</td>
                        <td>2</td>
                        <td>TTD</td>
                        <td>MFR</td>
                        <td>01-14-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>46U-SLC</td>
                        <td>620</td>
                        <td>537</td>
                        <td>1579071600</td>
                        <td>3</td>
                        <td>46U</td>
                        <td>SLC</td>
                        <td>01-15-2020</td>
                        <td>Anytime, flex Driggs or Alpine<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>46U-SLC</td>
                        <td>620</td>
                        <td>537</td>
                        <td>1579071600</td>
                        <td>6</td>
                        <td>46U</td>
                        <td>SLC</td>
                        <td>01-15-2020</td>
                        <td>Anytime, flex Driggs or Alpine<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>GTF-MSO</td>
                        <td>836</td>
                        <td>866</td>
                        <td>1579071600</td>
                        <td>3</td>
                        <td>GTF</td>
                        <td>MSO</td>
                        <td>01-15-2020</td>
                        <td>Arrive MSO by 8:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BFI-GEG</td>
                        <td>796</td>
                        <td>903</td>
                        <td>1579071600</td>
                        <td>4</td>
                        <td>BFI</td>
                        <td>GEG</td>
                        <td>01-15-2020</td>
                        <td>Depart BFI after 12pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MSO-GTF</td>
                        <td>765</td>
                        <td>923</td>
                        <td>1579071600</td>
                        <td>3</td>
                        <td>MSO</td>
                        <td>GTF</td>
                        <td>01-15-2020</td>
                        <td>Depart MSO after 5:30 PM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>IDA-SLC</td>
                        <td>612</td>
                        <td>537</td>
                        <td>1579158000</td>
                        <td>5</td>
                        <td>IDA</td>
                        <td>SLC</td>
                        <td>01-16-2020</td>
                        <td>2 leg relay, suggstd hand-off IDA 10:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>IDA-SLC</td>
                        <td>612</td>
                        <td>537</td>
                        <td>1579158000</td>
                        <td>2</td>
                        <td>IDA</td>
                        <td>SLC</td>
                        <td>01-16-2020</td>
                        <td>2 leg relay, suggstd hand-off IDA 10:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BIL-IDA</td>
                        <td>810</td>
                        <td>687</td>
                        <td>1579158000</td>
                        <td>2</td>
                        <td>BIL</td>
                        <td>IDA</td>
                        <td>01-16-2020</td>
                        <td>2 leg relay, suggstd hand-off IDA 10:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MFR-BFI</td>
                        <td>512</td>
                        <td>936</td>
                        <td>1579503600</td>
                        <td>3</td>
                        <td>MFR</td>
                        <td>BFI</td>
                        <td>01-20-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SFF-BFI</td>
                        <td>787</td>
                        <td>936</td>
                        <td>1579503600</td>
                        <td>4</td>
                        <td>SFF</td>
                        <td>BFI</td>
                        <td>01-20-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MCC-MFR</td>
                        <td>284</td>
                        <td>662</td>
                        <td>1579503600</td>
                        <td>3</td>
                        <td>MCC</td>
                        <td>MFR</td>
                        <td>01-20-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BFI-SFF</td>
                        <td>796</td>
                        <td>907</td>
                        <td>1579590000</td>
                        <td>4</td>
                        <td>BFI</td>
                        <td>SFF</td>
                        <td>01-21-2020</td>
                        <td>Depart BFI after 1:00 PM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BFL-SMO</td>
                        <td>59</td>
                        <td>133</td>
                        <td>1579676400</td>
                        <td>2</td>
                        <td>BFL</td>
                        <td>SMO</td>
                        <td>01-22-2020</td>
                        <td>Arrive SMO 10:30 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>GEG-BFI</td>
                        <td>783</td>
                        <td>936</td>
                        <td>1579676400</td>
                        <td>4</td>
                        <td>GEG</td>
                        <td>BFI</td>
                        <td>01-22-2020</td>
                        <td>2 Leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>VIS-VNY</td>
                        <td>114</td>
                        <td>142</td>
                        <td>1579676400</td>
                        <td>2</td>
                        <td>VIS</td>
                        <td>VNY</td>
                        <td>01-22-2020</td>
                        <td>2 leg relay, Arrive VNY by 12:00 PM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MSO-GEG</td>
                        <td>765</td>
                        <td>903</td>
                        <td>1579676400</td>
                        <td>3</td>
                        <td>MSO</td>
                        <td>GEG</td>
                        <td>01-22-2020</td>
                        <td>2 Leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>VNY-VIS</td>
                        <td>23</td>
                        <td>268</td>
                        <td>1579762800</td>
                        <td>3</td>
                        <td>VNY</td>
                        <td>VIS</td>
                        <td>01-23-2020</td>
                        <td>2 leg relay, Depart VNY after 11 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>VIS-SAC</td>
                        <td>114</td>
                        <td>433</td>
                        <td>1579762800</td>
                        <td>3</td>
                        <td>VIS</td>
                        <td>SAC</td>
                        <td>01-23-2020</td>
                        <td>2 leg relay, Depart VNY after 11 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>GEG-MSO</td>
                        <td>783</td>
                        <td>866</td>
                        <td>1579762800</td>
                        <td>3</td>
                        <td>GEG</td>
                        <td>MSO</td>
                        <td>01-23-2020</td>
                        <td>2 leg relay depart 12pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BOI-RLD</td>
                        <td>548</td>
                        <td>834</td>
                        <td>1579935600</td>
                        <td>4</td>
                        <td>BOI</td>
                        <td>RLD</td>
                        <td>01-25-2020</td>
                        <td>2 leg relay; sugg. handoff BOI 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PRC-SMO</td>
                        <td>297</td>
                        <td>133</td>
                        <td>1580194800</td>
                        <td>6</td>
                        <td>PRC</td>
                        <td>SMO</td>
                        <td>01-28-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PRC-SMO</td>
                        <td>297</td>
                        <td>133</td>
                        <td>1580194800</td>
                        <td>4</td>
                        <td>PRC</td>
                        <td>SMO</td>
                        <td>01-28-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PGA-SDL</td>
                        <td>368</td>
                        <td>236</td>
                        <td>1580194800</td>
                        <td>4</td>
                        <td>PGA</td>
                        <td>SDL</td>
                        <td>01-28-2020</td>
                        <td>Arrive by 9:30AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PGA-SDL</td>
                        <td>368</td>
                        <td>236</td>
                        <td>1580194800</td>
                        <td>2</td>
                        <td>PGA</td>
                        <td>SDL</td>
                        <td>01-28-2020</td>
                        <td>Arrive by 9:30AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SDL-PGA</td>
                        <td>329</td>
                        <td>358</td>
                        <td>1580194800</td>
                        <td>3</td>
                        <td>SDL</td>
                        <td>PGA</td>
                        <td>01-28-2020</td>
                        <td>Depart 1:00 PM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SMO-PRC</td>
                        <td>34</td>
                        <td>236</td>
                        <td>1580281200</td>
                        <td>4</td>
                        <td>SMO</td>
                        <td>PRC</td>
                        <td>01-29-2020</td>
                        <td>Depart SMO after 3:30 PM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SMO-MYF</td>
                        <td>34</td>
                        <td>38</td>
                        <td>1580367600</td>
                        <td>4</td>
                        <td>SMO</td>
                        <td>MYF</td>
                        <td>01-30-2020</td>
                        <td>Depart 1pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SFF-BOI</td>
                        <td>787</td>
                        <td>659</td>
                        <td>1580367600</td>
                        <td>6</td>
                        <td>SFF</td>
                        <td>BOI</td>
                        <td>01-30-2020</td>
                        <td>Depart SFF 1:15 PM or after<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SFF-BOI</td>
                        <td>787</td>
                        <td>659</td>
                        <td>1580367600</td>
                        <td>4</td>
                        <td>SFF</td>
                        <td>BOI</td>
                        <td>01-30-2020</td>
                        <td>Depart SFF 1:15 PM or after<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MYF-SMO</td>
                        <td>124</td>
                        <td>133</td>
                        <td>1580367600</td>
                        <td>4</td>
                        <td>MYF</td>
                        <td>SMO</td>
                        <td>01-30-2020</td>
                        <td>Arrive SMO 9:30am<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SMO-TRM</td>
                        <td>34</td>
                        <td>64</td>
                        <td>1580713200</td>
                        <td>4</td>
                        <td>SMO</td>
                        <td>TRM</td>
                        <td>02-03-2020</td>
                        <td>Depart SMO after 11:30am<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SMO-TRM</td>
                        <td>34</td>
                        <td>64</td>
                        <td>1580713200</td>
                        <td>2</td>
                        <td>SMO</td>
                        <td>TRM</td>
                        <td>02-03-2020</td>
                        <td>Depart SMO after 11:30am<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PSC-BOI</td>
                        <td>701</td>
                        <td>659</td>
                        <td>1580713200</td>
                        <td></td>
                        <td>PSC</td>
                        <td>BOI</td>
                        <td>02-03-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MSO-IDA</td>
                        <td>765</td>
                        <td>687</td>
                        <td>1580713200</td>
                        <td>3</td>
                        <td>MSO</td>
                        <td>IDA</td>
                        <td>02-03-2020</td>
                        <td>2 leg relay; sugg. handoff IDA 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SFF-BFI</td>
                        <td>787</td>
                        <td>936</td>
                        <td>1580713200</td>
                        <td>6</td>
                        <td>SFF</td>
                        <td>BFI</td>
                        <td>02-03-2020</td>
                        <td>Arrive BFI by 12:00 pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BOI-SLC</td>
                        <td>548</td>
                        <td>537</td>
                        <td>1580713200</td>
                        <td></td>
                        <td>BOI</td>
                        <td>SLC</td>
                        <td>02-03-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>IDA-SLC</td>
                        <td>612</td>
                        <td>537</td>
                        <td>1580713200</td>
                        <td>3</td>
                        <td>IDA</td>
                        <td>SLC</td>
                        <td>02-03-2020</td>
                        <td>2 leg relay; sugg. handoff IDA 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>MPI-PAO</td>
                        <td>192</td>
                        <td>404</td>
                        <td>1580799600</td>
                        <td>3</td>
                        <td>MPI</td>
                        <td>PAO</td>
                        <td>02-04-2020</td>
                        <td>Arrive PAO by 12pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PAO-MPI</td>
                        <td>248</td>
                        <td>345</td>
                        <td>1580799600</td>
                        <td>3</td>
                        <td>PAO</td>
                        <td>MPI</td>
                        <td>02-04-2020</td>
                        <td>Depart PAO after 3:30pm<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SLC-BOI</td>
                        <td>482</td>
                        <td>659</td>
                        <td>1580886000</td>
                        <td></td>
                        <td>SLC</td>
                        <td>BOI</td>
                        <td>02-05-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BOI-PSC</td>
                        <td>548</td>
                        <td>830</td>
                        <td>1580886000</td>
                        <td></td>
                        <td>BOI</td>
                        <td>PSC</td>
                        <td>02-05-2020</td>
                        <td>2 leg relay<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PAE-SNA</td>
                        <td>818</td>
                        <td>97</td>
                        <td>1580972400</td>
                        <td></td>
                        <td>PAE</td>
                        <td>SNA</td>
                        <td>02-06-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PAE-SNA</td>
                        <td>818</td>
                        <td>97</td>
                        <td>1580972400</td>
                        <td></td>
                        <td>PAE</td>
                        <td>SNA</td>
                        <td>02-06-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SNA-PAE</td>
                        <td>61</td>
                        <td>957</td>
                        <td>1581145200</td>
                        <td></td>
                        <td>SNA</td>
                        <td>PAE</td>
                        <td>02-08-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SNA-PAE</td>
                        <td>61</td>
                        <td>957</td>
                        <td>1581145200</td>
                        <td></td>
                        <td>SNA</td>
                        <td>PAE</td>
                        <td>02-08-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>SFF-MSO</td>
                        <td>787</td>
                        <td>866</td>
                        <td>1581404400</td>
                        <td>3</td>
                        <td>SFF</td>
                        <td>MSO</td>
                        <td>02-11-2020</td>
                        <td>2 leg relay; sugg. handoff SFF 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>BFL-PAO</td>
                        <td>59</td>
                        <td>404</td>
                        <td>1581577200</td>
                        <td>6</td>
                        <td>BFL</td>
                        <td>PAO</td>
                        <td>02-13-2020</td>
                        <td>Anytime<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>PAO-BFL</td>
                        <td>248</td>
                        <td>215</td>
                        <td>1581663600</td>
                        <td>6</td>
                        <td>PAO</td>
                        <td>BFL</td>
                        <td>02-14-2020</td>
                        <td>Depart PAO after 3:00 PM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>IDA-U42</td>
                        <td>612</td>
                        <td>527</td>
                        <td>1583132400</td>
                        <td>2</td>
                        <td>IDA</td>
                        <td>U42</td>
                        <td>03-02-2020</td>
                        <td>2 leg relay; sugg. handoff IDA 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                     <tr class="highlight">
                        <td>IDA-U42</td>
                        <td>612</td>
                        <td>527</td>
                        <td>1583132400</td>
                        <td>4</td>
                        <td>IDA</td>
                        <td>U42</td>
                        <td>03-02-2020</td>
                        <td>2 leg relay; sugg. handoff IDA 11:00 AM<br/><button id="request" style="font-size:12px;">Request this Flight</button></td>
                        <td>0</td>
                     </tr>
                  </tbody>
               </table>
            </div>
            <div id="pilot_list" style="display:none;"></div>
            <div style="font-size:11px; padding:10px 10px 0 0;clear:both;"><a style="text-decoration:none; color:#999" href="http://www.vpoids.org">VPOIDS Home</a></div>
         </div>
         <!-- /wrapper -->
         <script type="text/javascript">/* <![CDATA[ */
            function sfWebDebugGetElementsByClassName(strClass, strTag, objContElm)
            {
              // http://muffinresearch.co.uk/archives/2006/04/29/getelementsbyclassname-deluxe-edition/
              strTag = strTag || "*";
              objContElm = objContElm || document;
              var objColl = (strTag == '*' && document.all) ? document.all : objContElm.getElementsByTagName(strTag);
              var arr = new Array();
              var delim = strClass.indexOf('|') != -1  ? '|' : ' ';
              var arrClass = strClass.split(delim);
              var j = objColl.length;
              for (var i = 0; i < j; i++) {
                if(objColl[i].className == undefined) continue;
                var arrObjClass = objColl[i].className.split(' ');
                if (delim == ' ' && arrClass.length > arrObjClass.length) continue;
                var c = 0;
                comparisonLoop:
                {
                  var l = arrObjClass.length;
                  for (var k = 0; k < l; k++) {
                    var n = arrClass.length;
                    for (var m = 0; m < n; m++) {
                      if (arrClass[m] == arrObjClass[k]) c++;
                      if (( delim == '|' && c == 1) || (delim == ' ' && c == arrClass.length)) {
                        arr.push(objColl[i]);
                        break comparisonLoop;
                      }
                    }
                  }
                }
              }
              return arr;
            }
            
            function sfWebDebugToggleMenu()
            {
              var element = document.getElementById('sfWebDebugDetails');
            
              var cacheElements = sfWebDebugGetElementsByClassName('sfWebDebugCache');
              var mainCacheElements = sfWebDebugGetElementsByClassName('sfWebDebugActionCache');
              var panelElements = sfWebDebugGetElementsByClassName('sfWebDebugTop');
            
              if (element.style.display != 'none')
              {
                for (var i = 0; i < panelElements.length; ++i)
                {
                  panelElements[i].style.display = 'none';
                }
            
                // hide all cache information
                for (var i = 0; i < cacheElements.length; ++i)
                {
                  cacheElements[i].style.display = 'none';
                }
                for (var i = 0; i < mainCacheElements.length; ++i)
                {
                  mainCacheElements[i].style.border = 'none';
                }
              }
              else
              {
                for (var i = 0; i < cacheElements.length; ++i)
                {
                  cacheElements[i].style.display = '';
                }
                for (var i = 0; i < mainCacheElements.length; ++i)
                {
                  mainCacheElements[i].style.border = '1px solid #f00';
                }
              }
            
              sfWebDebugToggle('sfWebDebugDetails');
              sfWebDebugToggle('sfWebDebugShowMenu');
              sfWebDebugToggle('sfWebDebugHideMenu');
            }
            
            function sfWebDebugShowDetailsFor(element)
            {
              if (typeof element == 'string')
                element = document.getElementById(element);
            
              var panelElements = sfWebDebugGetElementsByClassName('sfWebDebugTop');
              for (var i = 0; i < panelElements.length; ++i)
              {
                if (panelElements[i] != element)
                {
                  panelElements[i].style.display = 'none';
                }
              }
            
              sfWebDebugToggle(element);
            }
            
            function sfWebDebugToggle(element)
            {
              if (typeof element == 'string')
                element = document.getElementById(element);
            
              if (element)
                element.style.display = element.style.display == 'none' ? '' : 'none';
            }
            
            function sfWebDebugToggleMessages(klass)
            {
              var elements = sfWebDebugGetElementsByClassName(klass);
            
              var x = elements.length;
              for (var i = 0; i < x; ++i)
              {
                sfWebDebugToggle(elements[i]);
              }
            }
            
            function sfWebDebugToggleAllLogLines(show, klass)
            {
              var elements = sfWebDebugGetElementsByClassName(klass);
              var x = elements.length;
              for (var i = 0; i < x; ++i)
              {
                elements[i].style.display = show ? '' : 'none';
              }
            }
            
            function sfWebDebugShowOnlyLogLines(type)
            {
              var types = new Array();
              types[0] = 'info';
              types[1] = 'warning';
              types[2] = 'error';
              for (klass in types)
              {
                var elements = sfWebDebugGetElementsByClassName('sfWebDebug' + types[klass].substring(0, 1).toUpperCase() + types[klass].substring(1, types[klass].length));
                var x = elements.length;
                for (var i = 0; i < x; ++i)
                {
                  if ('tr' == elements[i].tagName.toLowerCase())
                  {
                    elements[i].style.display = (type == types[klass]) ? '' : 'none';
                  }
                }
              }
            }
            /* ]]> */
         </script>
         <div id="sfWebDebug">
            <div id="sfWebDebugBar" class="sfWebDebugInfo">
               <a href="#" onclick="sfWebDebugToggleMenu(); return false;"><img src="/sf/sf_web_debug/images/sf.png" alt="Debug toolbar" /></a>
               <ul id="sfWebDebugDetails" class="sfWebDebugMenu">
                  <li><span id="sfWebDebugSymfonyVersion">1.2.9</span></li>
                  <li><a title="Configuration" href="#" onclick="sfWebDebugShowDetailsFor('sfWebDebugconfigDetails'); return false;"><img src="/sf/sf_web_debug/images/config.png" alt="Config" /> config</a></li>
                  <li><a title="Logs" href="#" onclick="sfWebDebugShowDetailsFor('sfWebDebuglogsDetails'); return false;"><img src="/sf/sf_web_debug/images/log.png" alt="Log" /> logs</a></li>
                  <li><img src="/sf/sf_web_debug/images/memory.png" alt="Memory" /> 20510.0 KB</li>
                  <li><a title="Timers" href="#" onclick="sfWebDebugShowDetailsFor('sfWebDebugtimeDetails'); return false;"><img src="/sf/sf_web_debug/images/time.png" alt="Time" /> 440 ms</a></li>
                  <li><a title="SQL queries" href="#" onclick="sfWebDebugShowDetailsFor('sfWebDebugdbDetails'); return false;"><img src="/sf/sf_web_debug/images/database.png" alt="SQL queries" /> 200</a></li>
                  <li class="last">
                     <a href="#" onclick="document.getElementById('sfWebDebug').style.display='none'; return false;"><img src="/sf/sf_web_debug/images/close.png" alt="Close" /></a>
                  </li>
               </ul>
            </div>
            <div id="sfWebDebugconfigDetails" class="sfWebDebugTop" style="display: none">
               <h1>Configuration</h1>
               <ul id="sfWebDebugConfigSummary">
                  <li class="ison">debug</li>
                  <li class="isoff">xdebug</li>
                  <li class="ison">logging</li>
                  <li class="isoff">cache</li>
                  <li class="isoff">compression</li>
                  <li class="ison">tokenizer</li>
                  <li class="isoff">eaccelerator</li>
                  <li class="isoff">apc</li>
                  <li class="isoff last">xcache</li>
               </ul>
               <h2>Request <a href="#" onclick="sfWebDebugToggle('sfWebDebugRequest'); return false;"><img src="/sf/sf_web_debug/images/toggle.gif" alt="Toggle details" /></a></h2>
               <div id="sfWebDebugRequest" style="display: none">
                  <pre>parameterHolder:
  action: shortNoticeResults
  id: &#039;3999&#039;
  module: missionRequest
attributeHolder:
  sf_route: &#039;sfRoute Object()&#039;
</pre>
               </div>
               <h2>Response <a href="#" onclick="sfWebDebugToggle('sfWebDebugResponse'); return false;"><img src="/sf/sf_web_debug/images/toggle.gif" alt="Toggle details" /></a></h2>
               <div id="sfWebDebugResponse" style="display: none">
                  <pre>options:
  http_protocol: HTTP/1.1
  logging: &#039;1&#039;
  charset: utf-8
  send_http_headers: true
  content_type: &#039;text/html; charset=utf-8&#039;
cookies: {  }
httpHeaders:
  Content-Type: &#039;text/html; charset=utf-8&#039;
javascripts: {  }
stylesheets: {  }
metas:
  title: &#039;AFW AFIDS&#039;
httpMetas:
  Content-Type: &#039;text/html; charset=utf-8&#039;
</pre>
               </div>
               <h2>User <a href="#" onclick="sfWebDebugToggle('sfWebDebugUser'); return false;"><img src="/sf/sf_web_debug/images/toggle.gif" alt="Toggle details" /></a></h2>
               <div id="sfWebDebugUser" style="display: none">
                  <pre>options:
  auto_shutdown: false
  culture: null
  default_culture: en
  use_flash: true
  logging: &#039;1&#039;
  timeout: 14400
attributeHolder: {  }
culture: en
</pre>
               </div>
               <h2>Settings <a href="#" onclick="sfWebDebugToggle('sfWebDebugSettings'); return false;"><img src="/sf/sf_web_debug/images/toggle.gif" alt="Toggle details" /></a></h2>
               <div id="sfWebDebugSettings" style="display: none">
                  <pre>app_aca_org_id: 214
app_accept_pilot_request_for_filled_flights: 0
app_accept_pilot_request_from_non_command_pilots: 0
app_add_callsign_on_command_pilot: 1
app_advance_notice: 7
app_allowed_note_tags: &lt;strong&gt;&lt;p&gt;&lt;ul&gt;&lt;li&gt;&lt;ol&gt;&lt;em&gt;&lt;span&gt;
app_application_doc_types:
  &#039;Badge photo&#039;: &#039;Badge photo&#039;
app_application_document_title_label: &#039;Photo Description&#039;
app_application_document_type_id: 5
app_application_document_upload: 1
app_appoints:
  morning: Morning
  noon: Noon
  afternoon: Afternoon
  evening: Evening
  exact_time: &#039;Exact Time&#039;
app_behalf_person:
  1: &#039;A social worker&#039;
  2: &#039;Physician or physicians office staff&#039;
  3: &#039;Other health care professional&#039;
  4: &#039;Friend or relative &#039;
app_bitly_key: R_50d02f30f7c64de0951b302a19a13920
app_bitly_login: vpoids
app_caller_relationships:
  Spouse: Spouse
  &#039;Social Worker&#039;: &#039;Social Worker&#039;
  Physician: Physician
  Friend: Friend
  Relative: Relative
app_camp_mission_type: 4
app_cancel_reasons:
  Self: &#039;By us&#039;
  Weather: Weather
  Passenger: Passenger
  &#039;Special Request&#039;: &#039;Special Request&#039;
  &#039;Passenger Appt Change&#039;: &#039;Passenger Appt Change&#039;
  &#039;Passenger Health&#039;: &#039;Passenger Health&#039;
  &#039;Passenger Concern&#039;: &#039;Passenger Concern&#039;
  &#039;Other Agency&#039;: &#039;Other Agency&#039;
  &#039;No Pilot&#039;: &#039;No Pilot&#039;
  Pilot: Pilot
  &#039;Data Entry Error&#039;: &#039;Data Entry Error&#039;
  &#039;Weather Other Leg&#039;: &#039;Weather Other Leg&#039;
  &#039;No Pilot Other Leg&#039;: &#039;No Pilot Other Leg&#039;
  &#039;No Driver&#039;: &#039;No Driver&#039;
  &#039;PAF Pilot&#039;: &#039;PAF Pilot&#039;
  &#039;PAF No Pilot&#039;: &#039;PAF No Pilot&#039;
  &#039;PAF Weather&#039;: &#039;PAF Weather&#039;
  &#039;PAF Cxl AFW&#039;: &#039;PAF Cxl AFW&#039;
  &#039;PAF Cxl Pax&#039;: &#039;PAF Cxl Pax&#039;
app_capture_drivers_license: 0
app_cdn_url: &#039;http://28d76b5822f3d6aafb5e-f9ba03c23b44eba89b246de2e9800fd0.r92.cf1.rackcdn.com/&#039;
app_check_pilot_affirmation: 0
app_compassion_call_sign: NGF
app_coordination_email: coordination@angelflightwest.org
app_coordination_name: &#039;AFW Coordination Staff&#039;
app_countries:
  &#039;United States&#039;: &#039;United States&#039;
  Canada: Canada
  Mexico: Mexico
app_credit_cards_accepted:
  Amex: Amex
  MasterCard: MasterCard
  Visa: Visa
  Discover: Discover
app_db_name: afw_afids
app_db_password: byJgh367sgd
app_db_user: afw_afids_app
app_default_airport_ident: SMO
app_default_baggage_desc: Normal
app_default_baggage_type: LB
app_default_baggage_weight: 25
app_default_camp_baggage_desc: &#039;Suitcase, pillow and sleeping bag&#039;
app_default_camp_baggage_weight: 60
app_default_mission_type: 1
app_default_roles:
  - @Member
  - @Pilot
  - @Staff
  - @Admin
app_default_wing_leader_email: cheric@angelflightwest.org
app_default_wing_leader_name: &#039;Cheri Cimmarrusti&#039;
app_disaster_response_types:
  &#039;Yes&#039;: &#039;Yes&#039;
  &#039;No&#039;: &#039;No&#039;
app_document_root: /var/www/afw/
app_driver_orientation_course_id: 4
app_driver_orientation_program_id: 1
app_email_senders:
  &#039;Coordination Team&#039;: coordination@angelflightwest.org
app_email_test_address: stephan@meliorist.com
app_email_test_mode: 0
app_enable_electronic_waivers: 1
app_enable_facebook_links: 1
app_enable_facebook_login: 1
app_enable_passenger_screening: 1
app_enable_sms_alerts: 1
app_enable_wordpress_publishing: 0
app_ethnicities:
  - &#039;Not specified&#039;
  - &#039;American Indian or Alaska Native&#039;
  - Asian
  - &#039;Black or African American&#039;
  - Hispanic/Latino
  - &#039;Native Hawaiian or other Pacific Islander&#039;
  - Multiracial
  - White
app_facebook_app_id: 1689056588006497
app_family_sizes:
  1: &#039;1&#039;
  2: &#039;2&#039;
  3: &#039;3&#039;
  4: &#039;4&#039;
  5: &#039;5&#039;
  6: &#039;6&#039;
  7: &#039;7&#039;
  8: &#039;8 or more&#039;
app_fax_email: fax@vpoids.org
app_fax_sub_account: 138297
app_fax_sub_account_password: 3dVM52CVoLTU
app_fb_hashtags: null
app_fbo_insert: 1
app_fbo_use_primary_only: 1
app_financial_need_categories:
  &#039;Unable to work&#039;: &#039;Unable to work&#039;
  &#039;Unable to afford transportation&#039;: &#039;Unable to affort transportation&#039;
  &#039;Unable to fly commercially&#039;: &#039;Unable to fly commercially&#039;
  &#039;No financial need&#039;: &#039;No financial need&#039;
  Other: Other
app_financial_need_doc_path: /var/www/afw/web/uploads/documents/verification/
app_financial_need_doc_url: /uploads/documents/verification/
app_financial_need_forms:
  Passenger: financial_need_patient
  Requester: financial_need_requester
app_flight_statuses:
  &#039;Command Pilot&#039;: &#039;Command Pilot&#039;
  &#039;Command Pilot Retired&#039;: &#039;Command Pilot Retired&#039;
  &#039;Orientation Pending&#039;: &#039;Orientation Pending&#039;
  &#039;Orientation Not Pending&#039;: &#039;Orientation Not Pending&#039;
  Non-pilot: Non-pilot
  &#039;Earth Angel&#039;: &#039;Earth Angel&#039;
  &#039;Earth Angel Pending&#039;: &#039;Earth Angel Pending&#039;
  &#039;Earth Angel Retired&#039;: &#039;Earth Angel Retired&#039;
  &#039;Orientation Never&#039;: &#039;Orientation Never&#039;
app_gender_types:
  male: Male
  female: Female
  unknown: Unknown
app_gmap:
  Center_lat: 36.0800556
  Center_lng: -115.15225
  zoom: 5
app_gmap_key_v3: AIzaSyAPIlFIrWMfj-tqlSCK4kX34YCe_lkHVho
app_ground_address_type:
  patient: &#039;Patient&#039;&#039;s Address&#039;
  lodging: &#039;Lodging Address&#039;
  facility: &#039;Facility address&#039;
  airport: &#039;Airport address&#039;
  custom: &#039;Other address&#039;
app_ground_member_flight_status: &#039;Earth Angel&#039;
app_ground_member_label: &#039;Earth Angel&#039;
app_ground_member_pending_flight_status: &#039;Earth Angel Pending&#039;
app_help_link: &#039;http://angelflightwest.zendesk.com&#039;
app_hide_member_renewal_reminder: false
app_income_brackets:
  1: &#039;0-10,000&#039;
  2: &#039;10,000-15,000&#039;
  3: &#039;15,000-20,000&#039;
  4: &#039;20,000-25,000&#039;
  5: &#039;25,000-30,000&#039;
  6: &#039;30,000-35,000&#039;
  7: &#039;35,000-40,000&#039;
  8: &#039;40,000-45,000&#039;
  9: &#039;45,000-50,000&#039;
  10: &#039;50,000-55,000&#039;
  11: &#039;55,000-60,000&#039;
  12: &#039;60,000-65,000&#039;
  13: &#039;65,000-70,000&#039;
  14: &#039;70,000-75,000&#039;
  15: &#039;75,000+&#039;
app_instance_id: afw
app_insurance_received_label: &#039;Insurance received&#039;
app_itinerary_recipient_email: coordination_sender@angelflightwest.org
app_itinerary_recipient_name: &#039;AFW Coordination Staff&#039;
&#039;app_kudos_expressions_Thanks,&#039;: &#039;Thanks,&#039;
&#039;app_kudos_expressions_Way to go,&#039;: &#039;Way to go, &#039;
&#039;app_kudos_expressions_Youre the best, &#039;: &#039;Youre the best, &#039;
app_link_to_forms_desc: &#039;Member Forms &amp; Documents&#039;
app_link_to_forms_link: &#039;https://support.angelflightwest.org/hc/en-us/categories/203696148-Forms-and-Documents&#039;
app_logo_path: images/bg-logo.gif
app_mail: postmaster@angelflightwest.org
app_mailgun_api_key: key-4ibtqy67z5-m3n2yrls8j5urnlh473t8
app_mailgun_api_public_key: pubkey-3eelw7tg0z14-2iiyk0aeglppsoawcn8
app_mailgun_domain: mgs.vpoids.org
app_mailgun_list_add_on_join: blog_subscribers@angelflightwest.org
app_match_flights: 1
app_max_airport_distance: 350
app_max_application_per_page: 25
app_max_callsign_id: 7999
app_max_member_needsbn_per_pager: 10
app_max_member_roster_per_pager: 25
app_max_mission_available_per_pager: 5
app_max_mission_report_per_pager: 10
app_max_mission_summary_per_page: 10
app_max_mop_per_page: 10
app_max_passenger_per_page: 10
app_max_permission_per_page: 50
app_max_person_per_page: 10
app_max_recent_activity: 50
app_max_role_per_page: 50
app_me_auto_subscribe_on_application: 1
app_me_auto_subscribe_on_command_pilot: 1
app_me_auto_subscribe_on_mission_assistant: 1
app_medical_release_forms:
  &#039;Pilot Flown Mission&#039;: online_air_release
  &#039;Full Agency Packet&#039;: online_air_release_packet
  &#039;Commercial Mission&#039;: online_comm_release
app_medicals:
  - Medical
  - Compassionate
app_member_app_require_mobile: 1
app_member_app_strict: 1
app_member_app_user_pass: 0
app_member_info_email: memberinfo@angelflightwest.org
app_member_info_name: &#039;Member Services&#039;
app_member_profile_photo: 1
app_member_profile_photo_path: /var/www/afw/web/uploads/documents/profile_photos/
app_member_profile_photo_url: /uploads/documents/profile_photos/
app_member_roster_access: 1
app_membership_fee:
  turn_off: &#039;yes&#039;
app_min_callsign_id: 6000
app_mission_assistant_matching: 1
app_mission_photo_path: /var/www/afw/web/uploads/documents/mission_photo/
app_mission_photo_url: /uploads/documents/mission_photo/
app_mission_request_status:
  &#039;Pending requester&#039;: &#039;Pending requester&#039;
  &#039;Pending passenger&#039;: &#039;Pending passenger&#039;
  Complete: Complete
app_missions_available_list_driver_id: 5
app_missions_available_list_pilot_id: 1
app_missions_available_view_default: Basic
app_missions_available_views:
  Basic: /pilotRequest/requestLegs
  Advanced: /pilotRequest/requestLegsAdvanced
  Compact: /missionLeg/availableLegsList
app_missions_pending_access: 1
app_name: &#039;Angel Flight West&#039;
app_name_format: first-last
app_new_password_maximum_length: 60
app_new_password_minimum_length: 8
app_novapointe_password: 3161D0na1dSF
app_novapointe_username: wwwAF1DS
app_on_behalf:
  Yourself: Yourself
  Someone_else: &#039;Someone else&#039;
app_orders_email: orders@angelflightwest.org
app_organ_waiver_attachments:
  english: /var/www/afw/web/uploads/bulk-email-attachments/waiver_organ_english.pdf
app_organization_acronym: AFW
app_organization_address_1: &#039;3161 Donald Douglas Loop South&#039;
app_organization_address_2: &#039;Santa Monica, CA 90405&#039;
app_organization_fax: &#039;(310) 397-9636&#039;
app_organization_home_page: &#039;http://www.angelflightwest.org&#039;
app_organization_hotline: &#039;(888) 4-AN-ANGEL&#039;
app_organization_name: &#039;Angel Flight West&#039;
app_organization_phone: &#039;(310) 390-2958&#039;
app_passenger_contact_interval: 10
app_passenger_requester_agency_id: 304
app_passenger_requester_id: 7822
app_passenger_waiver_attachments:
  english: /var/www/afw/web/uploads/bulk-email-attachments/afw_master_waiver_201704.pdf
app_password_minimum_length: 6
app_password_request_lifetime: 2700
app_payment_gateway: novapointe
app_payment_types:
  Check: Check
  &#039;Credit Card&#039;: &#039;Credit Card&#039;
  Cash: Cash
app_person_titles:
  Ms: Ms
  Mrs: Mrs
  Mr: Mr
  Dr: Dr
app_pic_min_hours: 250
app_pilot_affirmation_on_request: 1
app_pilot_doc_types:
  &#039;Badge photo&#039;: &#039;Badge photo&#039;
  &#039;Insurance document&#039;: &#039;Insurance document&#039;
  &#039;Orientation document&#039;: &#039;Orientation document&#039;
app_pilot_document_path: /var/www/afw/web/uploads/documents/pilot_documents/
app_pilot_document_url: /uploads/documents/pilot_documents/
app_pilot_license_types:
  Private: Private
  Commercial: Commercial
  ATP: ATP
app_pilot_me_instructor:
  MEI: MEI
  MEII: MEII
app_pilot_medical_classes:
  - &#039;Class I&#039;
  - &#039;Class II&#039;
  - &#039;Class III&#039;
app_pilot_orientation_course_id: 666
app_pilot_orientation_program_id: 2
app_pilot_se_instructor:
  CFI: CFI
  CFII: CFII
app_postmaster_email: postmaster@angelflightwest.org
app_postmaster_name: Postmaster
app_premium_choices:
  1: Hat
app_premium_sizes: {  }
app_relationship:
  relative: Relative
  friend: Friend
  caregiver: Caregiver
app_renewal_membership_fee:
  turn_off: &#039;yes&#039;
app_request_renewal_donation: true
app_requester_info_email: coordination@angelflightwest.org
app_securesiteurl: &#039;https://afids.angelflightwest.org/&#039;
app_short_states:
  AL: AL
  AK: AK
  AZ: AZ
  AR: AR
  CA: CA
  CO: CO
  CT: CT
  DE: DE
  DC: DC
  FL: FL
  GA: GA
  HI: HI
  ID: ID
  IL: IL
  IN: IN
  IA: IA
  KS: KS
  KY: KY
  LA: LA
  ME: ME
  MD: MD
  MA: MA
  MI: MI
  MN: MN
  MS: MS
  MO: MO
  MT: MT
  NE: NE
  NV: NV
  NH: NH
  NJ: NJ
  NM: NM
  NY: NY
  NC: NC
  ND: ND
  OH: OH
  OK: OK
  OR: OR
  PA: PA
  PR: PR
  RI: RI
  SC: SC
  SD: SD
  TN: TN
  TX: TX
  UT: UT
  VT: VT
  VA: VA
  WA: WA
  WV: WV
  WI: WI
  WY: WY
app_siteurl: &#039;http://afids.angelflightwest.org/&#039;
app_sms_cc_recipient: null
app_sms_reply_email: missionsteam@angelflightwest.org
app_smtp_host: smtp.mailgun.org
app_smtp_password: 1a9notlffd26
app_smtp_port: 587
app_smtp_secure: false
app_smtp_username: postmaster@angelflightwest.org
app_solr_search_config:
  host: 148.62.14.34
  port: &#039;8983&#039;
  user: afids
  password: afidssolrUser123
app_solr_search_cores:
  person: afw_afids_person
  agency: afw_afids_agency
  airport: afw_afids_airport
  fbo: afw_afids_fbo
  lodging: afw_afids_lodging
app_sr_fax_number: 310-397-9363
app_states:
  AL: Alabama
  AK: Alaska
  AZ: Arizona
  AR: Arkansas
  CA: California
  CO: Colorado
  CT: Connecticut
  DE: Delaware
  DC: &#039;District of Columbia&#039;
  FL: Florida
  GA: Georgia
  HI: Hawaii
  ID: Idaho
  IL: Illinois
  IN: Indiana
  IA: Iowa
  KS: Kansas
  KY: Kentucky
  LA: Louisiana
  ME: Maine
  MD: Maryland
  MA: Massachusetts
  MI: Michigan
  MN: Minnesota
  MS: Mississippi
  MO: Missouri
  MT: Montana
  NE: Nebraska
  NV: Nevada
  NH: &#039;New Hampshire&#039;
  NJ: &#039;New Jersey&#039;
  NM: &#039;New Mexico&#039;
  NY: &#039;New York&#039;
  NC: &#039;North Carolina&#039;
  ND: &#039;North Dakota&#039;
  OH: Ohio
  OK: Oklahoma
  OR: Oregon
  PA: Pennsylvania
  PR: &#039;Puerto Rico&#039;
  RI: &#039;Rhode Island&#039;
  SC: &#039;South Carolina&#039;
  SD: &#039;South Dakota&#039;
  TN: Tennessee
  TX: Texas
  UT: Utah
  VT: Vermont
  VA: Virginia
  WA: Washington
  WV: &#039;West Virginia&#039;
  WI: Wisconsin
  WY: Wyoming
app_stripe_perishible_key: null
app_stripe_secret_key: null
app_support_email: webmaster@angelflightwest.org
app_support_system_app_token: IyGZcjwHu8rSwJwIHrTAONkqeX5eIgLTGDMcj1gA
app_support_system_subdomain: angelflightwest
app_support_system_username: webmaster@angelflightwest.org
app_timezone: America/Los_Angeles
app_track_email_opens: 1
app_training_site_api_password: &#039;MQtr HxNC GCEa uenM 1qgd vadR&#039;
app_training_site_api_username: sfopeano
app_training_site_root_url: &#039;https://training.angelflightwest.org&#039;
app_travel_reasons:
  Medica: Medical
  Caregiver: &#039;Caregiver/Hospice/End of life&#039;
  &#039;Domestic Violence&#039;: &#039;Domestic Violence&#039;
  Funeral: Funeral
  &#039;Permanent relocation&#039;: &#039;Permanent relocation&#039;
  Other: Other
  Military: Military
  Camp: Camp
  Animals: Animals
  Blood: Blood
  Alien: Alien
app_twilio_account_sid: AC84558ecb23bb8798528ede98bb82d7c5
app_twilio_auth_token: bc3f90baeb0925d247b4b0b762f53847
app_twilio_phone_number: 9253926435
app_twitter_consumer_key: 9WMTIdbkgAwLKmi6cT3J7NS5e
app_twitter_consumer_secret: aL7hECtbGu13kjOsHyNp22IqDBt4WTI5PlucskNIUsQj6VjNJX
app_twitter_oath_secret: qiVD8InvHvpP2puWLmEjCcfDpbttlGIthH5AgAs8xAzn1
app_twitter_oath_token: 546323690-gkUeo1krGGN9y4bIGZSEiEq3ohXjP8THpBC6itNC
app_twitter_org_hashtag: AFW
app_use_ads: 1
app_use_member_badges: 0
app_use_orientation_programs: 1
app_use_pilot_stats: 1
app_use_process_tracker: 0
app_vpoids_auth_id: afw_57jd171JfE
app_vpoids_auth_secret: yZ7Lz6z337Li63j
app_webmaster_email: webmaster@angelflightwest.org
app_webmaster_name: Webmaster
app_wordpress_password: null
app_wordpress_username: null
app_year_established: 1983
mod_missionrequest_enabled: true
mod_missionrequest_is_internal: false
mod_missionrequest_view_class: sfPHP
sf_admin_module_web_dir: /sfPropelPlugin
sf_admin_web_dir: /sf/sf_admin
sf_app: frontend
sf_app_base_cache_dir: /var/www/afw/cache/frontend
sf_app_cache_dir: /var/www/afw/cache/frontend/dev
sf_app_config_dir: /var/www/afw/apps/frontend/config
sf_app_dir: /var/www/afw/apps/frontend
sf_app_i18n_dir: /var/www/afw/apps/frontend/i18n
sf_app_lib_dir: /var/www/afw/apps/frontend/lib
sf_app_module_dir: /var/www/afw/apps/frontend/modules
sf_app_template_dir: /var/www/afw/apps/frontend/templates
sf_apps_dir: /var/www/afw/apps
sf_cache: false
sf_cache_dir: /var/www/afw/cache
sf_calendar_web_dir: /sf/calendar
sf_charset: utf-8
sf_check_lock: false
sf_check_symfony_version: false
sf_compressed: false
sf_config_cache_dir: /var/www/afw/cache/frontend/dev/config
sf_config_dir: /var/www/afw/config
sf_csrf_secret: UniqueSecret
sf_data_dir: /var/www/afw/data
sf_debug: true
sf_default_culture: en
sf_doc_dir: /var/www/afw/doc
sf_enabled_modules:
  - default
sf_environment: dev
sf_error_404_action: error404
sf_error_404_module: error
sf_error_500_action: error500
sf_error_500_module: error
sf_error_reporting: 32767
sf_escaping_method: ESC_SPECIALCHARS
sf_escaping_strategy: false
sf_etag: false
sf_i18n: false
sf_i18n_cache_dir: /var/www/afw/cache/frontend/dev/i18n
sf_jquery_autocomplete: jquery.autocomplete-1.0.2.min.js
sf_jquery_core: jquery-1.3.1.min.js
sf_jquery_sortable: jquery-ui-sortable-1.6rc2.min.js
sf_jquery_web_dir: /sfJqueryPlugin
sf_lazy_cache_key: true
sf_lib_dir: /var/www/afw/lib
sf_log_dir: /var/www/afw/log
sf_logging_enabled: true
sf_login_action: login
sf_login_module: secure
sf_max_forwards: 6
sf_module_cache_dir: /var/www/afw/cache/frontend/dev/modules
sf_module_disabled_action: disabled
sf_module_disabled_module: default
sf_no_script_name: false
sf_orm: propel
sf_plugins_dir: /var/www/afw/plugins
sf_prototype_web_dir: /sfProtoculousPlugin
sf_rich_text_js_dir: js/tiny_mce
sf_root_dir: /var/www/afw
sf_secure_action: login
sf_secure_module: secure
sf_standard_helpers:
  - Partial
  - Cache
  - Form
sf_strip_comments: true
sf_symfony_lib_dir: /var/www/afw/lib/symfony
sf_template_cache_dir: /var/www/afw/cache/frontend/dev/template
sf_test_cache_dir: /var/www/afw/cache/frontend/dev/test
sf_test_dir: /var/www/afw/test
sf_upload_dir: /var/www/afw/web/uploads
sf_use_database: true
sf_validation_error_class: form_error
sf_validation_error_id_prefix: error_for_
sf_validation_error_prefix: &#039; &amp;darr;&amp;nbsp;&#039;
sf_validation_error_suffix: &#039; &amp;nbsp;&amp;darr;&#039;
sf_web_debug: true
sf_web_debug_web_dir: /sf/sf_web_debug
sf_web_dir: /var/www/afw/web
symfony.asset.javascripts_included: false
symfony.asset.stylesheets_included: false
</pre>
               </div>
               <h2>Globals <a href="#" onclick="sfWebDebugToggle('sfWebDebugGlobals'); return false;"><img src="/sf/sf_web_debug/images/toggle.gif" alt="Toggle details" /></a></h2>
               <div id="sfWebDebugGlobals" style="display: none">
                  <pre>cookie:
  symfony: sslvtsku2p31bp7jksg844j1l6
env: {  }
files: {  }
get:
  id: &#039;3999&#039;
post: {  }
server:
  CONTEXT_DOCUMENT_ROOT: /var/www/afw/web
  CONTEXT_PREFIX: &#039;&#039;
  DOCUMENT_ROOT: /var/www/afw/web
  GATEWAY_INTERFACE: CGI/1.1
  HTTPS: &#039;on&#039;
  HTTP_ACCEPT: &#039;text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8&#039;
  HTTP_ACCEPT_ENCODING: &#039;gzip, deflate, br&#039;
  HTTP_ACCEPT_LANGUAGE: &#039;en-US,en;q=0.5&#039;
  HTTP_CONNECTION: keep-alive
  HTTP_COOKIE: symfony=sslvtsku2p31bp7jksg844j1l6
  HTTP_HOST: afids.angelflightwest.org
  HTTP_UPGRADE_INSECURE_REQUESTS: &#039;1&#039;
  HTTP_USER_AGENT: &#039;Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:69.0) Gecko/20100101 Firefox/69.0&#039;
  PATH: &#039;/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin&#039;
  PATH_INFO: /missionRequest/shortNoticeResults
  PATH_TRANSLATED: &#039;redirect:/index.php/shortNoticeResults&#039;
  PHP_SELF: /frontend_dev.php/missionRequest/shortNoticeResults
  QUERY_STRING: id=3999
  REMOTE_ADDR: 37.111.239.11
  REMOTE_PORT: &#039;5247&#039;
  REQUEST_METHOD: GET
  REQUEST_SCHEME: https
  REQUEST_TIME: 1578341646
  REQUEST_TIME_FLOAT: 1578341646.201
  REQUEST_URI: /frontend_dev.php/missionRequest/shortNoticeResults?id=3999
  SCRIPT_FILENAME: /var/www/afw/web/frontend_dev.php
  SCRIPT_NAME: /frontend_dev.php
  SCRIPT_URI: &#039;https://afids.angelflightwest.org/frontend_dev.php/missionRequest/shortNoticeResults&#039;
  SCRIPT_URL: /frontend_dev.php/missionRequest/shortNoticeResults
  SERVER_ADDR: 148.62.14.34
  SERVER_ADMIN: &#039;[no address given]&#039;
  SERVER_NAME: afids.angelflightwest.org
  SERVER_PORT: &#039;443&#039;
  SERVER_PROTOCOL: HTTP/1.1
  SERVER_SIGNATURE: &quot;&lt;address&gt;Apache/2.4.7 (Ubuntu) Server at afids.angelflightwest.org Port 443&lt;/address&gt;\n&quot;
  SERVER_SOFTWARE: &#039;Apache/2.4.7 (Ubuntu)&#039;
  SSL_TLS_SNI: afids.angelflightwest.org
session:
  symfony/user/sfUser/attributes: {  }
  symfony/user/sfUser/authenticated: false
  symfony/user/sfUser/credentials: {  }
  symfony/user/sfUser/culture: en
  symfony/user/sfUser/lastRequest: 1578274139
</pre>
               </div>
               <h2>Php <a href="#" onclick="sfWebDebugToggle('sfWebDebugPhp'); return false;"><img src="/sf/sf_web_debug/images/toggle.gif" alt="Toggle details" /></a></h2>
               <div id="sfWebDebugPhp" style="display: none">
                  <pre>php: 7.0.29-1+ubuntu14.04.1+deb.sury.org+1
os: &#039;Linux localhost 3.13.0-170-generic #220-Ubuntu SMP Thu May 9 12:40:49 UTC 2019 x86_64&#039;
extensions:
  - &#039;Core (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;date (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;libxml (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;openssl (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;pcre (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;zlib (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;filter (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;hash (1.0)&#039;
  - &#039;Reflection (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;SPL (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;session (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;standard (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - apache2handler
  - &#039;mysqlnd (mysqlnd 5.0.12-dev - 20150407 - $Id: b5c5906d452ec590732a93b051f3827e02749b83 $)&#039;
  - &#039;PDO (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;xml (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;calendar (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;ctype (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;curl (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;dom (20031129)&#039;
  - &#039;mbstring (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;fileinfo (1.0.5)&#039;
  - &#039;ftp (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;gd (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;gettext (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;iconv (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;imagick (3.4.3)&#039;
  - &#039;json (1.4.0)&#039;
  - &#039;exif (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;mcrypt (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;memcache (3.0.9-dev)&#039;
  - &#039;mysqli (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;pdo_mysql (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;Phar (2.0.2)&#039;
  - &#039;posix (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;readline (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;shmop (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;SimpleXML (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;soap (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;sockets (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;solr (2.4.0)&#039;
  - &#039;sysvmsg (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;sysvsem (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;sysvshm (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;tidy (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;tokenizer (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;wddx (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;xmlreader (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;xmlwriter (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;xsl (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
  - &#039;zip (1.13.5)&#039;
  - &#039;newrelic (8.0.0.204)&#039;
  - &#039;Zend OPcache (7.0.29-1+ubuntu14.04.1+deb.sury.org+1)&#039;
</pre>
               </div>
               <h2>Symfony <a href="#" onclick="sfWebDebugToggle('sfWebDebugSymfony'); return false;"><img src="/sf/sf_web_debug/images/toggle.gif" alt="Toggle details" /></a></h2>
               <div id="sfWebDebugSymfony" style="display: none">
                  <pre>version: 1.2.9
path: /var/www/afw/lib/symfony
</pre>
               </div>
            </div>
            <div id="sfWebDebuglogsDetails" class="sfWebDebugTop" style="display: none">
               <h1>Logs</h1>
               <ul id="sfWebDebugLogMenu">
                  <li><a href="#" onclick="sfWebDebugToggleAllLogLines(true, 'sfWebDebugLogLine'); return false;">[all]</a></li>
                  <li><a href="#" onclick="sfWebDebugToggleAllLogLines(false, 'sfWebDebugLogLine'); return false;">[none]</a></li>
                  <li><a href="#" onclick="sfWebDebugShowOnlyLogLines('info'); return false;"><img src="/sf/sf_web_debug/images/info.png" alt="Show only infos" /></a></li>
                  <li><a href="#" onclick="sfWebDebugShowOnlyLogLines('warning'); return false;"><img src="/sf/sf_web_debug/images/warning.png" alt="Show only warnings" /></a></li>
                  <li><a href="#" onclick="sfWebDebugShowOnlyLogLines('error'); return false;"><img src="/sf/sf_web_debug/images/error.png" alt="Show only errors" /></a></li>
                  <li><a href="#" onclick="sfWebDebugToggleMessages('missionRequestActions'); return false;">missionRequestActions</a></li>
                  <li><a href="#" onclick="sfWebDebugToggleMessages('myUser'); return false;">myUser</a></li>
                  <li><a href="#" onclick="sfWebDebugToggleMessages('sfFilterChain'); return false;">sfFilterChain</a></li>
                  <li><a href="#" onclick="sfWebDebugToggleMessages('sfPHPView'); return false;">sfPHPView</a></li>
                  <li><a href="#" onclick="sfWebDebugToggleMessages('sfPatternRouting'); return false;">sfPatternRouting</a></li>
                  <li><a href="#" onclick="sfWebDebugToggleMessages('sfPropelLogger'); return false;">sfPropelLogger</a></li>
                  <li><a href="#" onclick="sfWebDebugToggleMessages('sfWebDebugLogger'); return false;">sfWebDebugLogger</a></li>
                  <li><a href="#" onclick="sfWebDebugToggleMessages('sfWebResponse'); return false;">sfWebResponse</a></li>
               </ul>
               <div id="sfWebDebugLogLines">
                  <table class="sfWebDebugLogs">
                     <tr>
                        <th>#</th>
                        <th>type</th>
                        <th>message</th>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">1</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">update_medical_release</span>" (/update_medical_release)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">2</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">request_group_mission</span>" (/request_group_mission/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">3</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission_avalaible_camp</span>" (/mission_avalaible_camp)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">4</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission-available-rss</span>" (/mission-available-rss)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">5</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">available-missions</span>" (/available-missions)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">6</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">add_pass_ajax</span>" (/add_pass_ajax)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">7</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">add_passengers</span>" (/add_passengers/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">8</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">reverse</span>" (/reverse/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">9</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">staff_available</span>" (/staff_available)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">10</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_req_reject</span>" (/pilot_req/reject/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">11</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_req_accept</span>" (/pilot_req/accept/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">12</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_req_process</span>" (/pilot_req/process/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">13</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_req_hold</span>" (/pilot_req/hold/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">14</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">edit_group_aircraft</span>" (/edit_group_aircraft/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">15</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">remove_group_aircraft</span>" (/remove_group_aircraft/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">16</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">paircraft_delete</span>" (/paircraft/delete)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">17</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">paircraft_create</span>" (/paircraft/create/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">18</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">paircraft_edit</span>" (/paircraft/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">19</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_request</span>" (/pilot_request/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">20</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">enter_pilot_request</span>" (/enter_pilot_request)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">21</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">request_legs</span>" (/request_legs/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">22</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_request_list</span>" (/pilot_request_list)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">23</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_thanks</span>" (/pilot_thanks/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">24</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">upload_mission_photo</span>" (/mission_photo/upload_photo)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">25</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission_photo_approved</span>" (/mission_photo/approved_photo)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">26</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">leg</span>" (/leg)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">27</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">leg_edit</span>" (/leg_edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">28</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">leg_view</span>" (/leg_view/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">29</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">leg_delete</span>" (/leg_delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">30</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">legpilot_delete</span>" (/legpilot_delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">31</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">legbackuppilot_delete</span>" (/legbackuppilot_delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">32</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">legmissionassistant_delete</span>" (/legmissionassistant_delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">33</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">legbackupmissionassistant_delete</span>" (/legbackupmissionassistant_delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">34</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">leg_save</span>" (/leg_save/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">35</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">leg_create</span>" (/leg_create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">36</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">leg_email</span>" (/leg_email)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">37</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">send_leg_email</span>" (/send_leg_email)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">38</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">print_mission_leg</span>" (/print_mission_leg/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">39</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">create_companion</span>" (/create_companion/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">40</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">save_companion</span>" (/save_companion)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">41</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission</span>" (/mission)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">42</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission_create</span>" (/mission/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">43</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission_edit</span>" (/mission/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">44</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission_delete</span>" (/mission/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">45</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission_view</span>" (/mission/view/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">46</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mission_copy</span>" (/mission/copy/:id/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">47</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">membership-application</span>" (/membership-application)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">48</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">become-a-member</span>" (/become-a-member)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">49</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">become-a-volunteer</span>" (/become-a-volunteer)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">50</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">join</span>" (/join)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">51</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">um_request</span>" (/um_request)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">52</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">um_request_create</span>" (/um_request/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">53</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">request-a-flight</span>" (/request-a-flight)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">54</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">flight-request</span>" (/flight-request)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">55</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">um_request_edit</span>" (/um_request/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">56</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">um_request_delete</span>" (/um_request/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">57</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">um_request_view</span>" (/um_request/view/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">58</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary</span>" (/itinerary)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">59</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_find</span>" (/itinerary/find)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">60</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_create</span>" (/itinerary/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">61</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_edit</span>" (/itinerary/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">62</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_delete</span>" (/itinerary/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">63</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_detail</span>" (/itinerary/detail/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">64</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_copy</span>" (/itinerary/copy/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">65</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_copy_form</span>" (/itinerary/copyForm/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">66</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req</span>" (/miss_req)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">67</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req_create</span>" (/miss_req/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">68</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req_edit</span>" (/miss_req/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">69</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req_edit_new</span>" (/miss_req/edit_new/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">70</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req_edit_new_step1anew</span>" (/missionRequest/step1anew/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">71</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req_edit_new_step2new</span>" (/missionRequest/step2new/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">72</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req_edit_new_step2anew</span>" (/missionRequest/step2anew/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">73</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req_edit_new_step2bnew</span>" (/missionRequest/step2bnew/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">74</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">missionRequest/step2</span>" (/missionRequest/step2)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">75</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">miss_req_delete</span>" (/miss_req/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">76</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">event</span>" (/event)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">77</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">event_create</span>" (/event/new)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">78</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">event_edit</span>" (/event/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">79</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">event_delete</span>" (/event/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">80</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">calendar</span>" (/calendar)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">81</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">wing</span>" (/wing)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">82</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_body</span>" (/email_body)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">83</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_body_create</span>" (/email_body/create/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">84</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_body_update</span>" (/email_body/update/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">85</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_body_delete</span>" (/email_body/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">86</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ref_source</span>" (/ref_source)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">87</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ref_source_create</span>" (/ref_source/create/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">88</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ref_source_update</span>" (/ref_source/update/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">89</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ref_source_delete</span>" (/ref_source/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">90</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">airline</span>" (/airline)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">91</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">airline_create</span>" (/airline/create/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">92</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">airline_update</span>" (/airline/update/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">93</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">airline_delete</span>" (/airline/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">94</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">page_content</span>" (/page_content)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">95</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">page_content_create</span>" (/page_content/create/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">96</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">page_content_update</span>" (/page_content/update/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">97</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">page_content_delete</span>" (/page_content/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">98</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">wing_create</span>" (/wing/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">99</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">wing_edit</span>" (/wing/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">100</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">wing_delete</span>" (/wing/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">101</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mis_type</span>" (/mis_type)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">102</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mis_type_create</span>" (/mis_type/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">103</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mis_type_edit</span>" (/mis_type/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">104</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mis_type_delete</span>" (/mis_type/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">105</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mclass</span>" (/mclass)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">106</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mclass_create</span>" (/mclass/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">107</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mclass_edit</span>" (/mclass/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">108</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">mclass_delete</span>" (/mclass/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">109</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ctype</span>" (/ctype)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">110</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ctype_create</span>" (/ctype/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">111</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ctype_edit</span>" (/ctype/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">112</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ctype_delete</span>" (/ctype/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">113</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">contact</span>" (/contact)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">114</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">contact_create</span>" (/contact/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">115</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">contact_edit</span>" (/contact/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">116</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">contact_delete</span>" (/contact/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">117</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">contact_view</span>" (/contact/view/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">118</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">coordinator</span>" (/coordinator)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">119</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">coordinator_create</span>" (/coordinator_create/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">120</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">coordinator_edit</span>" (/coordinator/edit/:id/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">121</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">coordinator_delete</span>" (/coordinator/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">122</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">coordinator_view</span>" (/coordinator/view/:id/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">123</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">fbo</span>" (/fbo)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">124</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">fbo_create</span>" (/fbo/create/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">125</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">fbo_edit</span>" (/fbo/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">126</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">fbo_delete</span>" (/fbo/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">127</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">board</span>" (/board/update)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">128</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">board_delete</span>" (/board/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">129</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">board_edit</span>" (/board/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">130</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">board_view</span>" (/board/view/:person_id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">131</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">member_create</span>" (/member/create/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">132</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">member_edit</span>" (/member/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">133</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">member_delete</span>" (/member/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">134</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">member_find</span>" (/member/find/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">135</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">member_view</span>" (/member/view/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">136</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">requester</span>" (/requester)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">137</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">requester_find</span>" (/requester/find)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">138</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">requester_create</span>" (/requester/create/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">139</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">requester_edit</span>" (/requester/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">140</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">requester_delete</span>" (/reqstr/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">141</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">person</span>" (/person)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">142</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">person_edit</span>" (/person/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">143</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">person_view</span>" (/person/view/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">144</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">person_delete</span>" (/person/delete)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">145</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">agency</span>" (/agency)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">146</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">agency_create</span>" (/agency/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">147</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">agency_edit</span>" (/agency/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">148</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">agency_delete</span>" (/agency/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">149</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">register</span>" (/register)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">150</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">account_pilot</span>" (/account_pilot)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">151</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">account</span>" (/account)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">152</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">account_create</span>" (/account/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">153</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">account_edit</span>" (/account/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">154</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">password_edit</span>" (/password/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">155</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">fund</span>" (/fund)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">156</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">fund_create</span>" (/fund/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">157</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">fund_edit</span>" (/fund/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">158</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">fund_delete</span>" (/fund/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">159</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">give</span>" (/give)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">160</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">gift</span>" (/gift)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">161</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">gift_create</span>" (/gift/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">162</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">gift_edit</span>" (/gift/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">163</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">gift_delete</span>" (/gift/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">164</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">donation</span>" (/donation)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">165</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">donation_create</span>" (/donation/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">166</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">donation_edit</span>" (/donation/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">167</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">donation_delete</span>" (/donation/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">168</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">campaign</span>" (/campaign)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">169</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">campaign_create</span>" (/campaign/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">170</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">campaign_edit</span>" (/campaign/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">171</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">campaign_delete</span>" (/campaign/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">172</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">donor</span>" (/donor)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">173</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">donor_create</span>" (/donor/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">174</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">donor_edit</span>" (/donor/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">175</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">donor_delete</span>" (/donor/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">176</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">companion</span>" (/companion)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">177</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">companion_create</span>" (/companion/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">178</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">companion_edit</span>" (/companion/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">179</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">companion_delete</span>" (/companion/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">180</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">passenger</span>" (/passenger)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">181</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">passenger_create</span>" (/passenger/create/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">182</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">passenger_edit</span>" (/passenger/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">183</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">passenger_find</span>" (/passenger/find/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">184</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">passenger_view</span>" (/passenger/view/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">185</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">passenger_change</span>" (/passenger/change/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">186</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pill</span>" (/pill)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">187</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pill_create</span>" (/pill/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">188</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pill_edit</span>" (/pill/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">189</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pill_delete</span>" (/pill/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">190</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ptype</span>" (/ptype)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">191</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ptype_create</span>" (/ptype/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">192</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ptype_edit</span>" (/ptype/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">193</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">ptype_delete</span>" (/ptype/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">194</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">camp</span>" (/camp)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">195</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">camp_create</span>" (/camp/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">196</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">camp_edit</span>" (/camp/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">197</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">camp_delete</span>" (/camp/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">198</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">camp_pilot_match</span>" (/camp_pilot_match/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">199</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">afaOrg</span>" (/afaOrg)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">200</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">afaOrg_create</span>" (/afaOrg/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">201</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">afaOrg_edit</span>" (/afaOrg/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">202</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">afaOrg_delete</span>" (/afaOrg/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">203</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">aircraft</span>" (/aircraft)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">204</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">aircraft_create</span>" (/aircraft/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">205</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">aircraft_edit</span>" (/aircraft/edit/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">206</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">aircraft_delete</span>" (/aircraft/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">207</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">airport</span>" (/airport)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">208</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">airport_create</span>" (/airport/create)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">209</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">airport_edit</span>" (/airport/edit/:id/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">210</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">airport_delete</span>" (/airport/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">211</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot</span>" (/pilot)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">212</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_create</span>" (/pilot/create/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">213</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_edit</span>" (/pilot/edit/:id/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">214</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_delete</span>" (/pilot/delete/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">215</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">pilot_view</span>" (/pilot/view/:id/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">216</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">member_needsbn</span>" (/member/needsBN)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">217</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">member_update_bn</span>" (/member/updateBN/:id/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">218</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">missing_waivers</span>" (/mission/missingWaivers)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">219</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">missing_waivers_update</span>" (/mission/updateMissingWaivers)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">220</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">available_camps</span>" (/available_camps/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">221</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRequestRoute "<span class="sfWebDebugLogInfo">ws_multiple_person_survey_token</span>" (/api/multiple_person_survey_token.:sf_format)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">222</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_event_updatepersonid</span>" (/email_events/updatepersonid)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">223</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_events_followup</span>" (/email_events/followup)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">224</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_events_person_update</span>" (/email_events/person_update)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">225</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_events_contact_add</span>" (/email_events/contact_add)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">226</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">email_events_clear</span>" (/email_events/clear/:id)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">227</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">coordinator_master_view</span>" (/coordinator/master_view/:id/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">228</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">coordinator_master_view_update</span>" (/coordinator/master_view_update)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">229</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">coordinator_master_view_update_pp</span>" (/coordinator/master_view_update_pp)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">230</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">home_requester</span>" (/dashboard/requester)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">231</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">home_passenger</span>" (/dashboard/passenger)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">232</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_copy_request</span>" (/itinerary_copy)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">233</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_copy_request_copy</span>" (/itinerary_copy/copy/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">234</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_copy_request_requester_mission</span>" (/itinerary_copy/requester_mission/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">235</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">itinerary_copy_request_passenger_mission</span>" (/itinerary_copy/passenger_mission/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">236</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">aass_page</span>" (/apple-app-site-association)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">237</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">homepage</span>" (/)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">238</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">default_index</span>" (/:module)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">239</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Connect sfRoute "<span class="sfWebDebugLogInfo">default</span>" (/:module/:action/*)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPatternRouting'>
                        <td class="sfWebDebugLogNumber">240</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PatternRouting</td>
                        <td>Match route "<span class="sfWebDebugLogInfo">default</span>" (/:module/:action/*) for /missionRequest/shortNoticeResults with parameters array (  &#039;module&#039; =&gt; &#039;missionRequest&#039;,  &#039;action&#039; =&gt; &#039;shortNoticeResults&#039;,)</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo myUser'>
                        <td class="sfWebDebugLogNumber">241</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;myUser</td>
                        <td>Automatic user logout due to timeout</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo myUser'>
                        <td class="sfWebDebugLogNumber">242</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;myUser</td>
                        <td>User is not authenticated</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfFilterChain'>
                        <td class="sfWebDebugLogNumber">243</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;FilterChain</td>
                        <td>Executing filter "<span class="sfWebDebugLogInfo">sfRenderingFilter</span>"</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfFilterChain'>
                        <td class="sfWebDebugLogNumber">244</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;FilterChain</td>
                        <td>Executing filter "<span class="sfWebDebugLogInfo">sfCommonFilter</span>"</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfFilterChain'>
                        <td class="sfWebDebugLogNumber">245</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;FilterChain</td>
                        <td>Executing filter "<span class="sfWebDebugLogInfo">sfExecutionFilter</span>"</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo missionRequestActions'>
                        <td class="sfWebDebugLogNumber">246</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;missionRequestActions</td>
                        <td>Call "<span class="sfWebDebugLogInfo">missionRequestActions-&gt;executeShortNoticeResults()</span>"</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPHPView'>
                        <td class="sfWebDebugLogNumber">247</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PHPView</td>
                        <td>Render "<span class="sfWebDebugLogInfo">sf_app_dir/modules/missionRequest/templates/shortNoticeResultsSuccess.php</span>"</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPHPView'>
                        <td class="sfWebDebugLogNumber">248</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PHPView</td>
                        <td>Decorate content with "<span class="sfWebDebugLogInfo">sf_app_dir/templates/short_notice_list.php</span>"</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfPHPView'>
                        <td class="sfWebDebugLogNumber">249</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;PHPView</td>
                        <td>Render "<span class="sfWebDebugLogInfo">sf_app_dir/templates/short_notice_list.php</span>"</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfWebResponse'>
                        <td class="sfWebDebugLogNumber">250</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;WebResponse</td>
                        <td>Send status "<span class="sfWebDebugLogInfo">HTTP/1.1 200 OK</span>"</td>
                     </tr>
                     <tr class='sfWebDebugLogLine sfWebDebugInfo sfWebResponse'>
                        <td class="sfWebDebugLogNumber">251</td>
                        <td class="sfWebDebugLogType"><img src="/sf/sf_web_debug/images/info.png" alt="Info"/>&nbsp;WebResponse</td>
                        <td>Send header "<span class="sfWebDebugLogInfo">Content-Type: text/html; charset=utf-8</span>"</td>
                     </tr>
                  </table>
               </div>
            </div>
            <div id="sfWebDebugtimeDetails" class="sfWebDebugTop" style="display: none">
               <h1>Timers</h1>
               <table class="sfWebDebugLogs" style="width: 300px">
                  <tr>
                     <th>type</th>
                     <th>calls</th>
                     <th>time (ms)</th>
                     <th>time (%)</th>
                  </tr>
                  <tr>
                     <td class="sfWebDebugLogType">Configuration</td>
                     <td class="sfWebDebugLogNumber" style="text-align: right">9</td>
                     <td style="text-align: right">2.86</td>
                     <td style="text-align: right">0</td>
                  </tr>
                  <tr>
                     <td class="sfWebDebugLogType">Action "missionRequest/shortNoticeResults"</td>
                     <td class="sfWebDebugLogNumber" style="text-align: right">1</td>
                     <td style="text-align: right">331.42</td>
                     <td style="text-align: right">75</td>
                  </tr>
                  <tr>
                     <td class="sfWebDebugLogType">View "Success" for "missionRequest/shortNoticeResults"</td>
                     <td class="sfWebDebugLogNumber" style="text-align: right">1</td>
                     <td style="text-align: right">4.63</td>
                     <td style="text-align: right">1</td>
                  </tr>
               </table>
            </div>
            <div id="sfWebDebugdbDetails" class="sfWebDebugTop" style="display: none">
               <h1>SQL queries</h1>
               <div id="sfWebDebugDatabaseLogs">
                  <ol>
                     <li>SET NAMES &#039;utf8&#039;</li>
                     <li>SELECT mission_request.ID, mission_request.REQUESTER_ID, mission_request.REQUESTER_DATE, mission_request.REQUEST_BY, mission_request.ON_BEHALF, mission_request.APPT_DATE, mission_request.MISSION_DATE, mission_request.RETURN_DATE, mission_request.BAGGAGE_WEIGHT, mission_request.BAGGAGE_DESC, mission_request.PASS_TITLE, mission_request.PASS_FIRST_NAME, mission_request.PASS_LAST_NAME, mission_request.PASS_ADDRESS1, mission_request.PASS_ADDRESS2, mission_request.PASS_CITY, mission_request.PASS_COUNTY, mission_request.PASS_STATE, mission_request.PASS_COUNTRY, mission_request.PASS_ZIPCODE, mission_request.PASS_DAY_PHONE, mission_request.PASS_DAY_COMMENT, mission_request.PASS_EVE_PHONE, mission_request.PASS_EVE_COMMENT, mission_request.PASS_MOBILE_PHONE, mission_request.PASS_MOBILE_COMMENT, mission_request.PASS_PAGER_PHONE, mission_request.PASS_PAGER_COMMENT, mission_request.PASS_OTHER_PHONE, mission_request.PASS_OTHER_COMMENT, mission_request.PASS_EMAIL, mission_request.PASS_DATE_OF_BIRTH, mission_request.ILLNESS, mission_request.FINANCIAL, mission_request.PASS_WEIGHT, mission_request.RELEASING_PHYSICIAN, mission_request.RELEASE_PHONE, mission_request.RELEASE_PHONE_COMMENT, mission_request.RELEASE_FAX, mission_request.RELEASE_FAX_COMMENT, mission_request.RELEASE_EMAIL, mission_request.TREATING_PHYSICIAN, mission_request.TREATING_PHONE, mission_request.TREATING_PHONE_COMMENT, mission_request.TREATING_FAX, mission_request.TREATING_FAX_COMMENT, mission_request.REQ_TITLE, mission_request.REQ_FIRST_NAME, mission_request.REQ_LAST_NAME, mission_request.AGENCY_NAME, mission_request.REQ_ADDRESS1, mission_request.REQ_ADDRESS2, mission_request.REQ_CITY, mission_request.REQ_COUNTY, mission_request.REQ_STATE, mission_request.REQ_COUNTRY, mission_request.REQ_ZIPCODE, mission_request.REQ_DAY_PHONE, mission_request.REQ_DAY_COMMENT, mission_request.REQ_EVE_PHONE, mission_request.REQ_EVE_COMMENT, mission_request.REQ_MOBILE_PHONE, mission_request.REQ_MOBILE_COMMENT, mission_request.REQ_PAGER_PHONE, mission_request.REQ_PAGER_COMMENT, mission_request.REQ_OTHER_PHONE, mission_request.REQ_OTHER_COMMENT, mission_request.REQ_EMAIL, mission_request.REQ_SECONDARY_EMAIL, mission_request.REQ_PAGER_EMAIL, mission_request.REQ_POSITION, mission_request.REQ_DISCHARGE, mission_request.ORGIN_IDENT, mission_request.ORGIN_ID, mission_request.ORGIN_CITY, mission_request.ORGIN_STATE, mission_request.ORGIN_ZIPCODE, mission_request.DEST_IDENT, mission_request.DEST_ID, mission_request.DEST_CITY, mission_request.DEST_STATE, mission_request.DEST_ZIPCODE, mission_request.COM1_NAME, mission_request.COM1_RELATIONSHIP, mission_request.COM1_DATE_OF_BIRTH, mission_request.COM1_WEIGTH, mission_request.COM1_PHONE, mission_request.COM1_COMMENT, mission_request.COM2_NAME, mission_request.COM2_RELATIONSHIP, mission_request.COM2_DATE_OF_BIRTH, mission_request.COM2_WEIGTH, mission_request.COM2_PHONE, mission_request.COM2_COMMENT, mission_request.COM3_NAME, mission_request.COM3_RELATIONSHIP, mission_request.COM3_DATE_OF_BIRTH, mission_request.COM3_WEIGTH, mission_request.COM3_PHONE, mission_request.COM3_COMMENT, mission_request.COM4_NAME, mission_request.COM4_RELATIONSHIP, mission_request.COM4_DATE_OF_BIRTH, mission_request.COM4_WEIGTH, mission_request.COM4_PHONE, mission_request.COM4_COMMENT, mission_request.COM5_NAME, mission_request.COM5_RELATIONSHIP, mission_request.COM5_DATE_OF_BIRTH, mission_request.COM5_WEIGTH, mission_request.COM5_PHONE, mission_request.COM5_COMMENT, mission_request.LODGING_NAME, mission_request.LODGING_PHONE, mission_request.LODGING_PHONE_COMMENT, mission_request.FACILITY_NAME, mission_request.FACILITY_PHONE, mission_request.FACILITY_PHONE_COMMENT, mission_request.REQ_LANGUAGE, mission_request.BEST_CONTACT, mission_request.EMERGENCY_NAME, mission_request.EMERGENCY_PHONE1, mission_request.EMERGENCY_PHONE1_COMMENT, mission_request.EMERGENCY_PHONE2, mission_request.EMERGENCY_PHONE2_COMMENT, mission_request.COMMENT, mission_request.PROCESSED_DATE, mission_request.SESSION_ID, mission_request.IP_ADDRESS, mission_request.PASS_FAX_PHONE1, mission_request.PASS_FAX_COMMENT1, mission_request.GUAR_FIRST_NAME, mission_request.GUAR_LAST_NAME, mission_request.GUAR_ADDRESS1, mission_request.GUAR_ADDRESS2, mission_request.GUAR_CITY, mission_request.GUAR_STATE, mission_request.GUAR_ZIPCODE, mission_request.GUAR_DAY_PHONE, mission_request.GUAR_DAY_COMMENT, mission_request.GUAR_EVE_PHONE, mission_request.GUAR_EVE_COMMENT, mission_request.GUAR_FAX_PHONE, mission_request.GUAR_FAX_COMMENT, mission_request.GUAR_MOBILE_PHONE, mission_request.GUAR_MOBILE_COMMENT, mission_request.GUAR_OTHER_PHONE, mission_request.GUAR_OTHER_COMMENT, mission_request.GUAR_PAGER_PHONE, mission_request.GUAR_PAGER_COMMENT, mission_request.GUAR_GUAR_EMAIL, mission_request.REQ_FAX_PHONE1, mission_request.REQ_FAX_COMMENT1, mission_request.PASS_ENGLISH, mission_request.PASS_LANGUAGE, mission_request.TREATING_EMAIL, mission_request.PASS_HEIGHT, mission_request.PASS_OXYGEN, mission_request.PASS_MEDICAL, mission_request.REFERRAL_SOURCE_ID, mission_request.FOLLOW_UP_CONTACT_NAME, mission_request.FOLLOW_UP_CONTACT_PHONE, mission_request.FOLLOW_UP_EMAIL, mission_request.REFER_FROM_ORG, mission_request.AFA_ORG_ITINERARY_ID, mission_request.MISSION_REQUEST_TYPE_ID, mission_request.LAST_PAGE_PROCESSED, mission_request.PASS_GENDER, mission_request.PASS_TYPE, mission_request.PASS_PRIVATE_CONS, mission_request.PASS_PUBLIC_CONS, mission_request.APPT_TIME, mission_request.FLIGHT_TIME, mission_request.WAIVER_REQUIRED, mission_request.DISPOSITION, mission_request.PROCESSED_BY, mission_request.REFER_TO_ORG, mission_request.SOURCE_CODE, mission_request.HOST_NAME, mission_request.QUERY_STRING, mission_request.STAFF_ID, mission_request.STATUS, mission_request.PASSENGER_ID, mission_request.AGENCY_ID, mission_request.COPIED_ITINERARY_ID, mission_request.PASS_ILLNESS_CATEGORY_ID, mission_request.MED_RELEASE_RECEIVED, mission_request.RETURN_FLIGHT_TIME, mission_request.LODGING_ID, mission_request.DESTINATION_FACILITY_ID, mission_request.REF_BY_AGENCY_NAME, mission_request.REF_BY_PERSON_NAME, mission_request.REF_BY_PERSON_PHONE, mission_request.REF_BY_PERSON_EMAIL, mission_request.REF_BY_AGENCY_ID, mission_request.REF_BY_PERSON_ID, mission_request.REFER_TO_ORG_DISPOSITION, mission_request.OWNER_AFA_ORG_ID, mission_request.LEG_ARRAY, mission_request.REF_BY_LODGING_ID, mission_request.REJECT_REASON, mission_request.ORIGIN_AGENCY_ID, mission_request.ORIGIN_AGENCY_REQUESTER_ID, mission_request.ORIGIN_AGENCY_NAME, mission_request.ORIGIN_AGENCY_ADDRESS, mission_request.ORIGIN_AGENCY_CITY, mission_request.ORIGIN_AGENCY_STATE, mission_request.ORIGIN_AGENCY_ZIPCODE, mission_request.ORIGIN_AGENCY_PHONE, mission_request.ORIGIN_AGENCY_OTHER_PHONE, mission_request.ORIGIN_AGENCY_CONTACT_FIRST_NAME, mission_request.ORIGIN_AGENCY_CONTACT_LAST_NAME, mission_request.ORIGIN_AGENCY_CONTACT_PHONE, mission_request.ORIGIN_AGENCY_CONTACT_EMAIL, mission_request.ORIGIN_AGENCY_HRS_OPERATION, mission_request.DEST_AGENCY_ID, mission_request.DEST_AGENCY_REQUESTER_ID, mission_request.DEST_AGENCY_NAME, mission_request.DEST_AGENCY_ADDRESS, mission_request.DEST_AGENCY_CITY, mission_request.DEST_AGENCY_STATE, mission_request.DEST_AGENCY_ZIPCODE, mission_request.DEST_AGENCY_PHONE, mission_request.DEST_AGENCY_OTHER_PHONE, mission_request.DEST_AGENCY_CONTACT_FIRST_NAME, mission_request.DEST_AGENCY_CONTACT_LAST_NAME, mission_request.DEST_AGENCY_CONTACT_PHONE, mission_request.DEST_AGENCY_CONTACT_EMAIL, mission_request.DEST_AGENCY_HRS_OPERATION, mission_request.FLEX_DATE_START, mission_request.FLEX_DATE_END, mission_request.PASS_TYPE_OTHER, mission_request.ANIMAL_COUNT, mission_request.ANIMAL_BREED, mission_request.ANIMAL_AGE, mission_request.ANIMAL_POTTY_TRAINED, mission_request.ANIMAL_TEMPERAMENT, mission_request.ANIMAL_TEMPERAMENT_ANIMALS, mission_request.ANIMAL_TEMPERAMENT_CHILDREN, mission_request.ANIMAL_WILLINGNESS_TRAVEL, mission_request.PHOTO1, mission_request.PHOTO2, mission_request.PHOTO3, mission_request.SHELTER_ANIMAL_ID, mission_request.MULTIPLE_ANIMAL_ARRAY, mission_request.APPOINTMENT_DURATION, mission_request.APPOINTMENT_DURATION_UNIT, mission_request.SUPPORT_TICKET_ID, mission_request.PROCESS_TRACKER_ID, mission_request.MISSION_DISTANCE, mission_request.LEG_COUNT, mission_request.LEGS_OBJ, mission_request.ORIGIN_SCORE, mission_request.DESTINATION_SCORE, mission_request.AVG_MISSION_PROBABILITY, mission_request.MIN_LEG_PROBABILITY, mission_request.MAX_LEG_PROBABILITY, mission_request.INCOMPLETE_DATA, mission_request.COMPLETENESS_ON_CREATE, mission_request.COMPLETENESS_ON_PROCESS, mission_request.BACKUP_PLAN_ID, mission_request.BACKUP_PLAN_DESCRIPTION, mission_request.BACKUP_PLAN_DEADLINE, mission_request.SOURCE_FORM, mission_request.INCOME_BRACKET, mission_request.ETHNICITY, mission_request.FAMILY_SIZE, mission_request.COM1_ID, mission_request.COM2_ID, mission_request.COM3_ID, mission_request.COM4_ID, mission_request.COM5_ID, mission_request.PASS_SERVICE_STATUS, mission_request.FACILITY_PLACE_ID, mission_request.FACILITY_WEBSITE, mission_request.ORIGIN_AGENCY_DEPARTMENT, mission_request.ORIGIN_AGENCY_SITE, mission_request.DEST_AGENCY_DEPARTMENT, mission_request.DEST_AGENCY_SITE, mission_request.ABLE_COMMERCIAL, mission_request.COMMERCIAL_BACKUP_PRIORITY FROM `mission_request` WHERE mission_request.ID=&#039;3999&#039;</li>
                     <li>SELECT pending_deadheads.ID, pending_deadheads.MISSION_LEG_ID, pending_deadheads.ORIGIN_AIRPORT_ID, pending_deadheads.DESTINATION_AIRPORT_ID, pending_deadheads.MISSION_DATE, pending_deadheads.ETD, pending_deadheads.SEATS_AVAILABLE, pending_deadheads.WEIGHT_AVAILABLE, pending_deadheads.FLIGHT_TIMING, pending_deadheads.AIRCRAFT_ID, pending_deadheads.OFFER_TYPE FROM `pending_deadheads` ORDER BY pending_deadheads.MISSION_DATE ASC</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154477</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2051</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4046</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113762 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154963</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4267</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=1947</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114070 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154792</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2308</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2049</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113965 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154772</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4670</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4412</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113949 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154811</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3002</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=809</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113977 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154628</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=409</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113864 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154296</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2023</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3698</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113659 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154299</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4845</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113662 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155029</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2490</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2072</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114112 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154648</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4788</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113876 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154737</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4937</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113925 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=153303</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3144</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3726</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113032 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154934</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4282</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2084</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114055 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154951</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114064 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=153302</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4482</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113032 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154059</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4042</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4499</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113511 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154931</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=679</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114054 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154775</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4147</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113952 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154688</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3582</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113896 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154637</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3758</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2930</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113869 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154543</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4082</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4067</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113803 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154058</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=8287</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113510 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154418</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113510 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154796</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4445</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2069</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113966 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154795</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113966 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154524</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4841</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113797 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=152518</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3468</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=112543 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154746</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113931 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154877</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4699</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3628</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114019 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154166</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=901</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113581 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155131</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2911</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114165 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154749</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2852</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113932 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155134</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114166 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=152620</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=112600 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=152619</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=112600 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154312</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113668 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154751</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113934 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154311</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113668 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154752</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113935 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154236</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4494</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113625 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155113</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114156 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154731</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4854</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113923 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155112</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114156 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154733</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113924 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154734</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4400</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113924 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155117</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114157 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154997</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=2099</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4273</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114095 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=153360</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4134</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113072 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154544</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4430</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113806 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154547</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113807 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=153363</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113073 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154400</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113713 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154911</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114040 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154397</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113712 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=153500</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4691</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113151 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154220</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4140</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113617 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=153304</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113033 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154285</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113656 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154221</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113617 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=153305</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113033 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154440</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=3904</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113739 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154443</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113740 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154222</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113618 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154223</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113618 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155144</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114173 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155146</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114175 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155147</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114176 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155145</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114174 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=155070</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114136 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154884</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114025 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=154887</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=114026 LIMIT 1</li>
                     <li>SELECT mission_leg.ID, mission_leg.MISSION_ID, mission_leg.LEG_NUMBER, mission_leg.FROM_AIRPORT_ID, mission_leg.TO_AIRPORT_ID, mission_leg.REVERSE_FROM, mission_leg.PASS_ON_BOARD, mission_leg.BAGGAGE_WEIGHT, mission_leg.BAGGAGE_DESC, mission_leg.COORDINATOR_ID, mission_leg.PUBLIC_C_NOTE, mission_leg.PRIVATE_C_NOTE, mission_leg.COPILOT_WANTED, mission_leg.PILOT_ID, mission_leg.ACA_ORG, mission_leg.COPILOT_ID, mission_leg.BACKUP_PILOT_ID, mission_leg.BACKUP_COPILOT_ID, mission_leg.CANCELLED, mission_leg.CANCEL_COMMENT, mission_leg.WAIVER_RECEIVED, mission_leg.WEB_COORDINATED, mission_leg.MISSION_REPORT_ID, mission_leg.PILOT_AIRCRAFT_ID, mission_leg.FBO_ID, mission_leg.FBO_ADDRESS_NEW, mission_leg.FBO_DEST_ID, mission_leg.SHARE_AFA_ORG_ID, mission_leg.TRANSPORTATION, mission_leg.GROUND_ORIGIN, mission_leg.GROUND_DESTINATION, mission_leg.CUSTOM_ORIGIN_ADDRESS, mission_leg.CUSTOM_DESTINATION_ADDRESS, mission_leg.FLIGHT_TIME, mission_leg.AIRLINE_ID, mission_leg.FUND_ID, mission_leg.CONFIRM_CODE, mission_leg.FLIGHT_COST, mission_leg.COMM_ORIGIN, mission_leg.COMM_DEST, mission_leg.FLIGHT_NUMBER, mission_leg.DEPARTURE, mission_leg.ARRIVAL, mission_leg.PREFIX, mission_leg.CANCEL_MISSION_LEG, mission_leg.COPIED_MISSION_LEG, mission_leg.DRIVER_ID, mission_leg.ETICKET, mission_leg.GROUND_ORIGIN_DESCRIPTION, mission_leg.GROUND_ORIGIN_ADDRESS, mission_leg.GROUND_ORIGIN_CITY, mission_leg.GROUND_ORIGIN_STATE, mission_leg.GROUND_ORIGIN_ZIPCODE, mission_leg.GROUND_ORIGIN_COMMENT, mission_leg.GROUND_DESTINATION_DESCRIPTION, mission_leg.GROUND_DESTINATION_ADDRESS, mission_leg.GROUND_DESTINATION_CITY, mission_leg.GROUND_DESTINATION_STATE, mission_leg.GROUND_DESTINATION_ZIPCODE, mission_leg.GROUND_DESTINATION_COMMENT, mission_leg.GROUND_DISTANCE_TEXT, mission_leg.GROUND_DISTANCE_VALUE, mission_leg.GROUND_DURATION_TEXT, mission_leg.GROUND_DURATION_VALUE, mission_leg.DIRECTIONS_HTML, mission_leg.COMM_ORIGIN_ID, mission_leg.COMM_DEST_ID, mission_leg.ETA, mission_leg.ETA_COMMENT, mission_leg.ETD, mission_leg.ETD_COMMENT FROM `mission_leg` WHERE mission_leg.ID=153309</li>
                     <li>SELECT airport.ID, airport.IDENT, airport.NAME, airport.CITY, airport.STATE, airport.LATITUDE, airport.LONGITUDE, airport.RUNWAY_LENGTH, airport.WING_ID, airport.GMT_OFFSET, airport.DST_OFFSET, airport.ZIPCODE, airport.CLOSED, airport.FAA_SITE_NUMBER, airport.ATCT, airport.IS_PRIVATE, airport.NON_COMMERCIAL_LANDING_FEE, airport.ELEVATION, airport.OPERATIONS_AIR_TAXI, airport.OPERATIONS_COMMERCIAL, airport.OPERATIONS_COMMUTER, airport.OPERATIONS_GA_ITIN, airport.OPERATIONS_GA_LOCAL, airport.FEE_WAIVER_REQUIRED, airport.FEE_WAIVER_CONTACT_NAME, airport.FEE_WAIVER_CONTACT_FAX, airport.FEE_WAIVER_CONTACT_PHONE, airport.FEE_WAIVER_CONTACT_EMAIL, airport.FEE_WAIVER_MESSAGE FROM `airport` WHERE airport.ID=4745</li>
                     <li>SELECT mission.ID, mission.EXTERNAL_ID, mission.REQUEST_ID, mission.ITINERARY_ID, mission.MISSION_TYPE_ID, mission.MISSION_DATE, mission.DATE_REQUESTED, mission.PASSENGER_ID, mission.REQUESTER_ID, mission.AGENCY_ID, mission.OTHER_REQUESTER_ID, mission.OTHER_AGENCY_ID, mission.CAMP_ID, mission.COORDINATOR_ID, mission.APPT_DATE, mission.FLIGHT_TIME, mission.TREATMENT, mission.COMMENT, mission.APPOINTMENT, mission.MISSION_SPECIFIC_COMMENTS, mission.START, mission.APOINT_TIME, mission.MISSION_COUNT, mission.B_WEIGHT, mission.B_TYPE, mission.B_DESC, mission.CANCEL_MISSION, mission.COPIED_MISSION, mission.MISSION_DATE_FLEXIBLE, mission.FLEX_DATE_START, mission.FLEX_DATE_END, mission.APPOINTMENT_DURATION, mission.APPOINTMENT_DURATION_UNIT, mission.CREATED_AT FROM `mission` WHERE mission.ID=113035 LIMIT 1</li>
                  </ol>
               </div>
            </div>
         </div>
         <script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"139294afc1","applicationID":"29104885","transactionName":"YgNabBFZXEAAWxYKC1tJeVsXUV1dTlULEBdcCVZqBklHVhJMTRAMWhRMdgxMW1AEagcQEVkSSw==","queueTime":0,"applicationTime":449,"atts":"TkRZGllDT04=","errorBeacon":"bam.nr-data.net","agent":""}</script>
      </body>
   </html>

