var countdown=function(){
    this.div_name = '';
};

countdown.prototype.init=function(i,s){
    if(i){
        more_id=i;
        tag_obj=document.getElementsByTagName('*');
        for(y=0;y<tag_obj.length;y++){
            if(tag_obj[y].id == more_id){
                new countdown().more(tag_obj[y],s)
            }
        }
    }
}
countdown.prototype.more=function(i,s){
    if(i){
        this.Account;
        this.div_obj=i;
        if(!this.div_obj){
            return;
        }
        if(s > 0){
            this.s=1;
        }else if(s < 0){
            this.s=-1;
        }else{
            this.s=this.div_obj.innerHTML<=0?1:-1;
        }
        this.iTime = this.div_obj.innerHTML;
        this.Account;
        this.start();
        
    }
}

countdown.prototype.one_init=function(i,s){
    if(i){
        this.div_obj=document.getElementById(i);
        if(!this.div_obj){
            return;
        }
        if(s > 0){
            this.s=1;
        }else if(s < 0){
            this.s=-1;
        }else{
            this.s=this.div_obj.innerHTML<=0?1:-1;
        }
        this.iTime = this.div_obj.innerHTML;
        this.Account;
        this.start();
    }
}
countdown.prototype.start=function(is_start){
    var obj_this=this;
    var iDay,iHour,iMinute,iSecond;
    var sDay="",sHour="",sMinute="",sSecond="",sTime="";
    if(obj_this.iTime < 0 && obj_this.s < 0){
        obj_this.div_obj.innerHTML = "活动已结束.";
        return ;
    }else if(obj_this.iTime > 0 && obj_this.s > 0 && is_start != 1){
        obj_this.div_obj.innerHTML = "活动未开始.";
        return ;
    }else if(obj_this.iTime < 0 && obj_this.s > 0){
        obj_this.iTime=obj_this.iTime-obj_this.iTime*2;
    }
    iDay = parseInt(obj_this.iTime/24/3600);
    if (iDay > 0)
    {
        sDay = '<span class="n2">'+iDay+'</span>' + " <span style='font-size:12px;color:#898989;padding-right:8px'>天</span>  ";
    }
    iHour = parseInt((obj_this.iTime/3600)%24);
    if (iHour > 0){
        sHour=iHour+":";
    }
	/*else{
		if(is_start != 1){
			
			sHour="00:";
		}
	}*/
    iMinute = parseInt((obj_this.iTime/60)%60);
    if (iMinute > 0){
        sMinute=iMinute+":";
    }
    iSecond = parseInt(obj_this.iTime%60);
    if (iSecond >= 0){
        sSecond=iSecond;
    }
    if ((sDay=="")&&(sHour=="")){
        sTime=""+sMinute+sSecond+"";
    }
    else
    {
        sTime=sDay+sHour+sMinute+sSecond;
    }
    if(obj_this.iTime==0){
        clearTimeout(obj_this.Account);
        sTime="";
    }
    else
    {
        obj_this.Account = setTimeout(function(){obj_this.start(1);},1000);
    }
    obj_this.iTime=Number(obj_this.iTime)+Number(obj_this.s);
    obj_this.div_obj.innerHTML = '<span class="n3">'+sTime+'</span>';
}