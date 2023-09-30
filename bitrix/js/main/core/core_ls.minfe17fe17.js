(function(e){if(e.BX.localStorage)return;var t=e.BX,r=null,o=null,a="_bxCurrentKey",i=false;t.localStorage=function(){this.keyChanges={};t.bind(t.browser.IsIE()&&!t.browser.IsIE9()?document:e,"storage",t.proxy(this._onchange,this));setInterval(t.delegate(this._clear,this),5e3)};t.localStorage.checkBrowser=function(){return i};t.localStorage.set=function(e,r,o){return t.localStorage.instance().set(e,r,o)};t.localStorage.get=function(e){return t.localStorage.instance().get(e)};t.localStorage.remove=function(e){return t.localStorage.instance().remove(e)};t.localStorage.instance=function(){if(!r){var e=t.localStorage.checkBrowser();if(e=="native")r=new t.localStorage;else if(e=="ie8")r=new t.localStorageIE8;else if(e=="ie7")r=new t.localStorageIE7;else{r={set:t.DoNothing,get:function(){return null},remove:t.DoNothing}}}return r};t.localStorage.prototype.prefix=function(){if(!o){o="bx"+t.message("USER_ID")+"-"+(t.message.SITE_ID?t.message("SITE_ID"):"admin")+"-"}return o};t.localStorage.prototype._onchange=function(r){r=r||e.event;if(!r.key)return;if(t.browser.DetectIeVersion()>0&&this.keyChanges[r.key]){this.keyChanges[r.key]=false;return}if(!!r.key&&r.key.substring(0,this.prefix().length)==this.prefix()){var o={key:r.key.substring(this.prefix().length,r.key.length),value:!!r.newValue?this._decode(r.newValue.substring(11,r.newValue.length)):null,oldValue:!!r.oldValue?this._decode(r.oldValue.substring(11,r.oldValue.length)):null};switch(o.key){case"BXGCE":if(o.value){t.onCustomEvent(o.value.e,o.value.p)}break;default:if(r.newValue)t.onCustomEvent(e,"onLocalStorageSet",[o]);if(r.oldValue&&!r.newValue)t.onCustomEvent(e,"onLocalStorageRemove",[o]);t.onCustomEvent(e,"onLocalStorageChange",[o]);break}}};t.localStorage.prototype._clear=function(){var e=+new Date,t,r;for(r=0;r<localStorage.length;r++){t=localStorage.key(r);if(t.substring(0,2)=="bx"){var o=localStorage.getItem(t).split(":",1)*1e3;if(e>=o)localStorage.removeItem(t)}}};t.localStorage.prototype._encode=function(e){if(typeof e=="object")e=JSON.stringify(e);else e=e.toString();return e};t.localStorage.prototype._decode=function(e){var t=null;if(!!e){try{t=JSON.parse(e)}catch(r){t=e}}return t};t.localStorage.prototype._trigger_error=function(e,r,o,a){t.onCustomEvent(this,"onLocalStorageError",[e,{key:r,value:o,ttl:a}])};t.localStorage.prototype.set=function(e,t,r){if(!r||r<=0)r=60;if(e==undefined||e==null||t==undefined)return false;this.keyChanges[this.prefix()+e]=true;try{localStorage.setItem(this.prefix()+e,Math.round(+new Date/1e3)+r+":"+this._encode(t))}catch(o){this._trigger_error(o,e,t,r)}};t.localStorage.prototype.get=function(e){var t=localStorage.getItem(this.prefix()+e);if(t){var r=t.split(":",1)*1e3;if(+new Date<=r){t=t.substring(11,t.length);return this._decode(t)}}return null};t.localStorage.prototype.remove=function(e){this.keyChanges[this.prefix()+e]=true;localStorage.removeItem(this.prefix()+e)};t.localStorageIE7=function(){this.NS="BXLocalStorage";this.__current_state={};this.keyChanges={};t.ready(t.delegate(this._Init,this))};t.extend(t.localStorageIE7,t.localStorage);t.localStorageIE7.prototype._Init=function(){this.storage_element=document.body.appendChild(t.create("DIV"));this.storage_element.addBehavior("#default#userData");this.storage_element.load(this.NS);var e=this.storage_element.xmlDocument,r=e.firstChild.attributes.length;for(var o=0;o<r;o++){if(!!e.firstChild.attributes[o]){var a=e.firstChild.attributes[o].nodeName;if(a.substring(0,this.prefix().length)==this.prefix()){this.__current_state[a]=e.firstChild.attributes[o].nodeValue}}}setInterval(t.delegate(this._Listener,this),500);setInterval(t.delegate(this._clear,this),5e3)};t.localStorageIE7.prototype._Listener=function(e){this.storage_element.load(this.NS);var t=this.storage_element.xmlDocument,r=t.firstChild.attributes.length,o,a,i;var l={},s=[];for(o=0;o<r;o++){if(!!t.firstChild.attributes[o]){a=t.firstChild.attributes[o].nodeName;if(a.substring(0,this.prefix().length)==this.prefix()){i=t.firstChild.attributes[o].nodeValue;if(this.__current_state[a]!=i){s.push({key:a,newValue:i,oldValue:this.__current_state[a]})}l[a]=i;delete this.__current_state[a]}}}for(o in this.__current_state){if(this.__current_state.hasOwnProperty(o)){s.push({key:o,newValue:undefined,oldValue:this.__current_state[o]})}}this.__current_state=l;for(o=0;o<s.length;o++){this._onchange(s[o])}};t.localStorageIE7.prototype._clear=function(){this.storage_element.load(this.NS);var e=this.storage_element.xmlDocument,t=e.firstChild.attributes.length,r=+new Date,o,a,i,l;for(o=0;o<t;o++){if(!!e.firstChild.attributes[o]){a=e.firstChild.attributes[o].nodeName;if(a.substring(0,2)=="bx"){i=e.firstChild.attributes[o].nodeValue;l=i.split(":",1)*1e3;if(r>=l){e.firstChild.removeAttribute(a)}}}}this.storage_element.save(this.NS)};t.localStorageIE7.prototype.set=function(e,t,r){if(!r||r<=0)r=60;try{this.storage_element.load(this.NS);var o=this.storage_element.xmlDocument;this.keyChanges[this.prefix()+e]=true;o.firstChild.setAttribute(this.prefix()+e,Math.round(+new Date/1e3)+r+":"+this._encode(t));this.storage_element.save(this.NS)}catch(a){this._trigger_error(a,e,t,r)}};t.localStorageIE7.prototype.get=function(e){this.storage_element.load(this.NS);var t=this.storage_element.xmlDocument;var r=t.firstChild.getAttribute(this.prefix()+e);if(r){var o=r.split(":",1)*1e3;if(+new Date<=o){r=r.substring(11,r.length);return this._decode(r)}}return null};t.localStorageIE7.prototype.remove=function(e){this.storage_element.load(this.NS);var t=this.storage_element.xmlDocument;t.firstChild.removeAttribute(this.prefix()+e);this.keyChanges[this.prefix()+e]=true;this.storage_element.save(this.NS)};t.localStorageIE8=function(){this.key=a;this.currentKey=null;this.currentValue=null;t.localStorageIE8.superclass.constructor.apply(this)};t.extend(t.localStorageIE8,t.localStorage);t.localStorageIE8.prototype._onchange=function(e){if(null==this.currentKey){this.currentKey=localStorage.getItem(this.key);if(this.currentKey){this.currentValue=localStorage.getItem(this.prefix()+this.currentKey)}}else{e={key:this.prefix()+this.currentKey,newValue:localStorage.getItem(this.prefix()+this.currentKey),oldValue:this.currentValue};this.currentKey=null;this.currentValue=null;if(this.keyChanges[e.key]){this.keyChanges[e.key]=false;return}t.localStorageIE8.superclass._onchange.apply(this,[e])}};t.localStorageIE8.prototype.set=function(e,r,o){this.currentKey=null;this.keyChanges[this.prefix()+e]=true;try{localStorage.setItem(this.key,e);t.localStorageIE8.superclass.set.apply(this,arguments)}catch(a){this._trigger_error(a,e,r,o)}};t.localStorageIE8.prototype.remove=function(e){this.currentKey=null;this.keyChanges[this.prefix()+e]=true;localStorage.setItem(this.key,e);t.localStorageIE8.superclass.remove.apply(this,arguments)};t.onGlobalCustomEvent=function(e,r,o){if(!!t.localStorage.checkBrowser())t.localStorage.set("BXGCE",{e:e,p:r},1);if(!o)t.onCustomEvent(e,r)};try{i=!!localStorage.setItem}catch(l){}if(i){i="native";var s=t.browser.IsIE()&&!t.browser.IsIE9()?document:e,n=function(r){if(typeof(r||e.event).key=="undefined")i="ie8";t.unbind(s,"storage",n);t.localStorage.instance()};t.bind(s,"storage",n);try{localStorage.setItem(a,null)}catch(l){i=false;t.localStorage.instance()}}else if(t.browser.IsIE7()){i="ie7";t.localStorage.instance()}})(window);
//# sourceMappingURL=core_ls.map.js