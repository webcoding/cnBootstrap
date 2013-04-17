/*! http://www.tcreator.info/cnbootstrap/cndocs/solutions/placeholder.html/placeholder v1.0 by @sofish */
// placeholder 功能扩展 原生JS扩展方法
window.onload = function(){
    var doc = document,
    inputs = doc.getElementsByTagName('input'),
	
    // 检测 placeholder 支持
    supportPlaceholder = 'placeholder' in doc.createElement('input'),
    supportPlaceholdertextarea = 'placeholder' in doc.createElement('textarea'),
	
/* 
 * 创建 placeholder
 * @param {ELEMENT} input 传入的 input 对象
 * @return {VOID}
 * @author: sofish Lin http://sofish.de
 */
    placeholder = function(input){
        var text = input.getAttribute('placeholder'),
            defaultValue = input.defaultValue;
        if(input.value=="" || input.value==text){
            // 制作一个假 placeholder
            // 需要 css 配合，在 JS 中设置 style 并不太好
            input.value=text;
            // input.style.color = 'gray';
            input.className = 'placeholder';
        }
        
        // 聚焦去掉假 placeholder
        input.onfocus = function(){
            if(input.value === text){
                this.value = '';
                // this.style.color = '';
                input.className = '';
            }
        }
        
        // 当失焦值为空时，补回 placeholder 的值
        input.onblur = function(){
            if(input.value === ''){
                // input.style.color = 'gray';
                input.className = 'placeholder';
                this.value = text;
            }
        }
        input.onkeydown = function(){
            this.style.color = '';
        }
    };
	
    if(!supportPlaceholder){
    	for(var i = 0, len = inputs.length; i < len; i++){
    	    var input = inputs[i], text = input.getAttribute('placeholder');
    	    
    	    // 当 input[type=text] 并且 placeholder 值不为空是执行
    	    if(input.type === 'text' && text){
    	    	placeholder(input);
    	    }
    	}    
    }
};
