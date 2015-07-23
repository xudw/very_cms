// JavaScript Document


 function select_obj(obj,id,curClass,otherClass,index,tags){ 
 	for(var i=0;i<obj.parentNode.childNodes.length;i++){
 		obj.parentNode.childNodes[i].className=otherClass;
 	}
 	obj.className=curClass;
 	var rootid=document.getElementById(id); 
 	var child_node=rootid.getElementsByTagName(tags);
 	for(var i=0;i<child_node.length;i++){
 	     if(i==index){
 		    child_node[i].style.display="block";
 		 }else{
 		    child_node[i].style.display="none";
 		 }
 	}
 }

function settab_sj_yx(name,num,n){
 for(i=1;i<=n;i++){
  var menu=document.getElementById(name+i);
  var con=document.getElementById(name+"_"+"sj_yx"+i);
  menu.className=i==num?"on_sj_yx":"";
    con.style.display=i==num?"block":"none";
 }
}