var NOA = window.noAdBlock;
 
if (!NOA){  

 

	if (pr==1){
	var date = new Date;
date.setDate(date.getDate() + 1);
document.cookie = "oab_cooks=1; path=/; expires=" + date.toUTCString(); 
jQuery("#"+alertMX).css("display","inline-block");
	jQuery("#"+alertab).css("display","inline-block");jQuery("#"+alertMX).css('background-color',p10);
	if ((pcook==1)&&(t2<=0)){jQuery("#"+alertab).html(p1+"</p><a href='#' class='button smalloab' onclick=closeds()>&times</a></td>")}
	else{jQuery("#"+alertab).html(p1);} 
	
	if (pr5==1){
    jQuery("#"+alertab).css('top', ''+wtop+'%');
	if (wheight==0){jQuery("#"+alertab).css('height', 'auto');}else{jQuery("#"+alertab).css('height', ''+wheight+'%');}
	jQuery("#"+alertab).css('width', ''+wwidth+'%');
	jQuery("#"+alertab).css('margin-right', +((100-wwidth)/2)+'%');
	jQuery("#"+alertab).css('margin-left', +((100-wwidth)/2)+'%');
	jQuery("#"+alertab).css('max-height', +(100-wtop)+'%');}
	 
	
	
	
	if (t2>0){jQuery("#"+alertMX).css("display","inline-block");
	jQuery("#"+alertab).css("display","inline-block");	
	waitWindow();}}
	if (pr==6){jQuery("#"+alertsmall).css("display","inline-block");jQuery("#"+alertsmall).css('text-align','center');
jQuery("#"+alertsmall).css('color',p62);
	jQuery("#"+alertsmall).css('background-color',p61);
	jQuery("#"+alertsmall).html("<td><p>"+p6+"</p><a href='#' class='button smalloab' onclick=closeds()>&times</a></td>");	
	
	}
	
	if (pr3==1){
		
jQuery(".oab-shoot").empty();

if (p30==1){jQuery(".oab-shoot").css('text-align','center');
  jQuery(".oab-shoot").addClass("offduab_block_info");
	jQuery(".oab-shoot").html("<td><p>"+p31+"</p></td>");}
	else{ 
jQuery(".oab-shoot").css('text-align','center');
jQuery(".oab-shoot").css('color',p34);
	jQuery(".oab-shoot").css('background-color',p33);
	jQuery(".oab-shoot").html("<td><p>"+p31+"</p></td>");	
	
	}
  
  
}
var windlocat = window.location.href;
	if (pr==4){var finishurl = p4;
window.location.href = finishurl;}
}else{
	
	if (pr==1){
	jQuery( "#"+alertab ).remove();
jQuery( "#"+alertMX).remove();}
if (pr==6){jQuery( "#"+alertsmall ).remove();}
}
function closeds(){
	if (pr==6){
jQuery("#"+alertsmall).remove();var date = new Date;
date.setDate(date.getDate() + 1);
	document.cookie = "oab_cooks=1; path=/; expires=" + date.toUTCString();}
if (pr==1){
jQuery("#"+alertab).remove();
jQuery("#"+alertMX).remove();}}
 
function waitWindow(){
var tt=t2;	
	jQuery( ".button alertab" ).remove(); 
function oad_timer(){
tt--	
jQuery("#"+alertab).html(p1+"</br></br>"+objectL10n.wait+": "+tt+" "+objectL10n.sec);
   if (tt<=0){
      jQuery( "#"+alertab ).remove();
jQuery( "#"+alertMX ).remove();
 var date = new Date;
date.setDate(date.getDate() + 1);
document.cookie = "oab_cooks=1; path=/; expires=" + date.toUTCString(); 
        setTimeout(function(){},1000);
    } else { 
        setTimeout(oad_timer,1000);
    }
}
setTimeout(oad_timer,1000);
}