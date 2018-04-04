(function() {
	//add css file to dom so IE8 recognizes it
	document.write('<link href="https://fitrepublik.bamboohr.com/css/jobs-embed.css" rel="stylesheet" />');

	var divId="BambooHR-ATS";
	var el=document.getElementById(divId);
	if(!el) {
		document.write("<div id=\""+divId+"\"></div>");
	}

	var xmlhttp;

    var xmlhttp2;

	var ieFlag = 0;
	if (('XDomainRequest' in window && window.XDomainRequest !== null) && document.documentMode < 10) {
		xmlhttp=new XDomainRequest();
        xmlhttp2 = new XDomainRequest();
		ieFlag = 1;
	} else if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
        xmlhttp2 = new XMLHttpRequest();
	} else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        xmlhttp2 = new ActiveXObject("Microsoft.XMLHTTP");
	}

	if (ieFlag == 1) { //needed for IE9 CORS
		xmlhttp.onload = loadd;
		xmlhttp.open("GET","https://fitrepublik.bamboohr.com/jobs/embed2.php");
		xmlhttp.send();

	} else {
		xmlhttp.onreadystatechange=function() {
			if(xmlhttp.readyState==4 && xmlhttp.status==200) {
				var content = xmlhttp.responseText;
				var footerId="BambooHR-Footer";
				var fel=document.getElementById(footerId);
				
				el=document.getElementById(divId);
				
				if(el && !fel) {
					
				}
				if(el) el.innerHTML=content;
				
			}
		}

        xmlhttp2.onreadystatechange=function() {
			if(xmlhttp2.readyState==4 && xmlhttp2.status==200) {
				var content = xmlhttp2.responseText;
					
				// el=document.getElementById(divId);
				
			    // if(el) el.innerHTML+=content;

				var div = document.createElement('div');

				div.innerHTML = content;
				document.body.appendChild(div);
				
			}
		}

		xmlhttp.open("GET","https://fitrepublik.bamboohr.com/jobs/embed2.php",true);
        xmlhttp.send();
        xmlhttp2.open("GET","https://studiorepublik.bamboohr.com/jobs/embed2.php",true);
		xmlhttp2.send();
	}

	function loadd() { //needed for IE9 CORS
		var content = xmlhttp.responseText;
		var footerId="BambooHR-Footer";
		var fel=document.getElementById(footerId);
		
		el=document.getElementById(divId);
		
		if(el && !fel) {
			content += "<div id=\"BambooHR-Footer\">Powered by <a href=\"http://www.bamboohr.com\" target=\"_blank\" rel=\"external\"><img src=\"https://resources.bamboohr.com/images/footer-logo.png\" alt=\"BambooHR - HR software\"/></a></div>";
		}
		el.innerHTML=content;
	} 
}) ();
