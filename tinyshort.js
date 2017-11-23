/**
 * TinySort is a small script that sorts HTML elements. It sorts by text- or attribute value, or by that of one of it's children.
 * @summary A nodeElement sorting script.
 * @version 2.3.6
 * @license MIT
 * @author Ron Valstar <ron@ronvalstar.nl>
 * @copyright Ron Valstar <ron@ronvalstar.nl>
 * @namespace tinysort
 */
!function(e,t){"use strict";function r(){return t}"function"==typeof define&&define.amd?define("tinysort",r):e.tinysort=t}(this,function(){"use strict";function e(e,n){function s(){0===arguments.length?v({}):t(arguments,function(e){v(x(e)?{selector:e}:e)}),d=$.length}function v(e){var t=!!e.selector,n=t&&":"===e.selector[0],o=r(e||{},m);$.push(r({hasSelector:t,hasAttr:!(o.attr===l||""===o.attr),hasData:o.data!==l,hasFilter:n,sortReturnNumber:"asc"===o.order?1:-1},o))}function S(){t(e,function(e,t){M?M!==e.parentNode&&(k=!1):M=e.parentNode;var r=$[0],n=r.hasFilter,o=r.selector,a=!o||n&&e.matchesSelector(o)||o&&e.querySelector(o),l=a?R:V,s={elm:e,pos:t,posn:l.length};B.push(s),l.push(s)}),D=R.slice(0)}function y(e,t,r){for(var n=r(e.toString()),o=r(t.toString()),a=0;n[a]&&o[a];a++)if(n[a]!==o[a]){var l=Number(n[a]),s=Number(o[a]);return l==n[a]&&s==o[a]?l-s:n[a]>o[a]?1:-1}return n.length-o.length}function N(e){for(var t,r,n=[],o=0,a=-1,l=0;t=(r=e.charAt(o++)).charCodeAt(0);){var s=46==t||t>=48&&57>=t;s!==l&&(n[++a]="",l=s),n[a]+=r}return n}function C(e,r){var n=0;for(0!==p&&(p=0);0===n&&d>p;){var l=$[p],s=l.ignoreDashes?f:u;if(t(h,function(e){var t=e.prepare;t&&t(l)}),l.sortFunction)n=l.sortFunction(e,r);else if("rand"==l.order)n=Math.random()<.5?1:-1;else{var c=a,g=w(e,l),m=w(r,l),v=""===g||g===o,S=""===m||m===o;if(g===m)n=0;else if(l.emptyEnd&&(v||S))n=v&&S?0:v?1:-1;else{if(!l.forceStrings){var C=x(g)?g&&g.match(s):a,b=x(m)?m&&m.match(s):a;if(C&&b){var A=g.substr(0,g.length-C[0].length),F=m.substr(0,m.length-b[0].length);A==F&&(c=!a,g=i(C[0]),m=i(b[0]))}}n=g===o||m===o?0:l.natural&&(isNaN(g)||isNaN(m))?y(g,m,N):m>g?-1:g>m?1:0}}t(h,function(e){var t=e.sort;t&&(n=t(l,c,g,m,n))}),n*=l.sortReturnNumber,0===n&&p++}return 0===n&&(n=e.pos>r.pos?1:-1),n}function b(){var e=R.length===B.length;if(k&&e)O?R.forEach(function(e,t){e.elm.style.order=t}):M?M.appendChild(A()):console.warn("parentNode has been removed");else{var t=$[0],r=t.place,n="org"===r,o="start"===r,a="end"===r,l="first"===r,s="last"===r;if(n)R.forEach(F),R.forEach(function(e,t){E(D[t],e.elm)});else if(o||a){var c=D[o?0:D.length-1],i=c&&c.elm.parentNode,u=i&&(o&&i.firstChild||i.lastChild);u&&(u!==c.elm&&(c={elm:u}),F(c),a&&i.appendChild(c.ghost),E(c,A()))}else if(l||s){var f=D[l?0:D.length-1];E(F(f),A())}}}function A(){return R.forEach(function(e){q.appendChild(e.elm)}),q}function F(e){var t=e.elm,r=c.createElement("div");return e.ghost=r,t.parentNode.insertBefore(r,t),e}function E(e,t){var r=e.ghost,n=r.parentNode;n.insertBefore(t,r),n.removeChild(r),delete e.ghost}function w(e,t){var r,n=e.elm;return t.selector&&(t.hasFilter?n.matchesSelector(t.selector)||(n=l):n=n.querySelector(t.selector)),t.hasAttr?r=n.getAttribute(t.attr):t.useVal?r=n.value||n.getAttribute("value"):t.hasData?r=n.getAttribute("data-"+t.data):n&&(r=n.textContent),x(r)&&(t.cases||(r=r.toLowerCase()),r=r.replace(/\s+/g," ")),null===r&&(r=g),r}function x(e){return"string"==typeof e}x(e)&&(e=c.querySelectorAll(e)),0===e.length&&console.warn("No elements to sort");var D,M,q=c.createDocumentFragment(),B=[],R=[],V=[],$=[],k=!0,z=e.length&&e[0].parentNode,L=z.rootNode!==document,O=e.length&&(n===o||n.useFlex!==!1)&&!L&&-1!==getComputedStyle(z,null).display.indexOf("flex");return s.apply(l,Array.prototype.slice.call(arguments,1)),S(),R.sort(C),b(),R.map(function(e){return e.elm})}function t(e,t){for(var r,n=e.length,o=n;o--;)r=n-o-1,t(e[r],r)}function r(e,t,r){for(var n in t)(r||e[n]===o)&&(e[n]=t[n]);return e}function n(e,t,r){h.push({prepare:e,sort:t,sortBy:r})}var o,a=!1,l=null,s=window,c=s.document,i=parseFloat,u=/(-?\d+\.?\d*)\s*$/g,f=/(\d+\.?\d*)\s*$/g,h=[],d=0,p=0,g=String.fromCharCode(4095),m={selector:l,order:"asc",attr:l,data:l,useVal:a,place:"org",returns:a,cases:a,natural:a,forceStrings:a,ignoreDashes:a,sortFunction:l,useFlex:a,emptyEnd:a};return s.Element&&function(e){e.matchesSelector=e.matchesSelector||e.mozMatchesSelector||e.msMatchesSelector||e.oMatchesSelector||e.webkitMatchesSelector||function(e){for(var t=this,r=(t.parentNode||t.document).querySelectorAll(e),n=-1;r[++n]&&r[n]!=t;);return!!r[n]}}(Element.prototype),r(n,{loop:t}),r(e,{plugin:n,defaults:m})}());