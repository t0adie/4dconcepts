// Javascript Document

// Image Preloader

/* v1.5 */
/* https://github.com/farinspace/jquery.imgpreload */
if("undefined"!=typeof jQuery){(function(a){a.imgpreload=function(b,c){c=a.extend({},a.fn.imgpreload.defaults,c instanceof Function?{all:c}:c);if("string"==typeof b){b=new Array(b)}var d=new Array;a.each(b,function(e,f){var g=new Image;var h=f;var i=g;if("string"!=typeof f){h=a(f).attr("src")||a(f).css('background-image').replace(/^url\((?:"|')?(.*)(?:'|")?\)$/mg, "$1");i=f}a(g).bind("load error",function(e){d.push(i);a.data(i,"loaded","error"==e.type?false:true);if(c.each instanceof Function){c.each.call(i)}if(d.length>=b.length&&c.all instanceof Function){c.all.call(d)}a(this).unbind("load error")});g.src=h})};a.fn.imgpreload=function(b){a.imgpreload(this,b);return this};a.fn.imgpreload.defaults={each:null,all:null}})(jQuery)}