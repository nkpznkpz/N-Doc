var _length=0;
var _param="";
var _data="";
function getID(element){
            return document.getElementById(element);
}
function trim(str){
        var j=0,i=0;
        if (str==null){return null;}
       while(str.charAt(i)=="\n"){
            ++j
            ++i;
       }
        return str.substring(i,str.length);
}
function getHTTPObject() {
	var XMLHttpRequestObject = false;
	if(window.XMLHttpRequest){
		XMLHttpRequestObject=new XMLHttpRequest();
	}else if(window.ActiveXObject){
		XMLHttpRequestObject=new ActiveXObject("Microsoft.XMLHTTP");
	}
	return XMLHttpRequestObject;
}
function  addParamGet(name,value)
	{
		if (this._length==0)
			 this._param="?";
		this._param+=name;
		this._param+="=";
		this._param+=value;
		this._param+="&";
    	this._length=this._length+1;	
	}
function  addParamPost(name,value)
	{
		this._data+=name;
		this._data+="=";
		this._data+=value;
		this._data+="&";
	}
function getDataReturnText(url, callback){ 
	var XMLHttpRequestObject = getHTTPObject();
	this.addParamGet("pop",Math.random());
	if(XMLHttpRequestObject) {
		XMLHttpRequestObject.open("GET", url+_param); 
		XMLHttpRequestObject.onreadystatechange = function() { 
			if (XMLHttpRequestObject.readyState == 4 && 
				XMLHttpRequestObject.status == 200) { 
					callback(XMLHttpRequestObject.responseText); 
				delete XMLHttpRequestObject;
				 XMLHttpRequestObject = null;
			} 
	} 
	XMLHttpRequestObject.send(null); 
	}
}
function getDataReturnText(url, callback,val){ 
	var XMLHttpRequestObject = getHTTPObject();
	this.addParamGet("pop",Math.random());
	_length=0;
	if(XMLHttpRequestObject) {
		XMLHttpRequestObject.open("GET", url+_param); 
		XMLHttpRequestObject.onreadystatechange = function() { 
			if (XMLHttpRequestObject.readyState == 4 && 
				XMLHttpRequestObject.status == 200) { 
					callback(XMLHttpRequestObject.responseText,val); 
					
				delete XMLHttpRequestObject;
				 XMLHttpRequestObject = null;
			} 
	} 
	XMLHttpRequestObject.send(null); 
	}
}

function getDataReturnXml(url, callback){ 
	var XMLHttpRequestObject = getHTTPObject();
	if(XMLHttpRequestObject) {
		XMLHttpRequestObject.open("GET", url); 
		XMLHttpRequestObject.onreadystatechange = function() { 
			if (XMLHttpRequestObject.readyState == 4 && 
				XMLHttpRequestObject.status == 200) { 
				callback(XMLHttpRequestObject.responseXML); 
				delete XMLHttpRequestObject;
				XMLHttpRequestObject = null;
			} 
	} 
	XMLHttpRequestObject.send(null); 
	}
}

function postDataReturnText(url, callback){ 
	var XMLHttpRequestObject = getHTTPObject();
	this.addParamGet("pop",Math.random());
	if(XMLHttpRequestObject) {
		XMLHttpRequestObject.open("POST", url); 
		XMLHttpRequestObject.setRequestHeader('Content-Type', 
		'application/x-www-form-urlencoded'); 
		XMLHttpRequestObject.onreadystatechange = function() { 
			if (XMLHttpRequestObject.readyState == 4 && 
				XMLHttpRequestObject.status == 200) {
				callback(XMLHttpRequestObject.responseText); 
				delete XMLHttpRequestObject;
				XMLHttpRequestObject = null;
			}else{
			
			}
	}
    XMLHttpRequestObject.send(_data); 
	}
}

function postDataReturnXml(url, data, callback){ 
	var XMLHttpRequestObject = getHTTPObject();
	if(XMLHttpRequestObject) {
		XMLHttpRequestObject.open("POST", url); 
		XMLHttpRequestObject.setRequestHeader('Content-Type', 
		'application/x-www-form-urlencoded'); 
    XMLHttpRequestObject.onreadystatechange = function() { 
		if (XMLHttpRequestObject.readyState == 4 && 
			XMLHttpRequestObject.status == 200) {
			callback(XMLHttpRequestObject.responseXML); 
			delete XMLHttpRequestObject;
			XMLHttpRequestObject = null;
		} 
	}
    XMLHttpRequestObject.send(data); 
	}
}