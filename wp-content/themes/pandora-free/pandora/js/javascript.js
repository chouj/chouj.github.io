function ajaxrecentcomments() {	
	document.getElementById('recentcommentsdisplay').style.display='block';
	document.getElementById('tagsdisplay').style.display='none';
	document.getElementById('recentpostsdisplay').style.display='none';
	
	document.getElementById('tags3').style.backgroundColor='#fff';
	document.getElementById('recentcomments3').style.backgroundColor='#ccd8e8';
	document.getElementById('recentposts3').style.backgroundColor='#fff';
}
function ajaxtags() {
	document.getElementById('recentcommentsdisplay').style.display='none';
	document.getElementById('tagsdisplay').style.display='block';
	document.getElementById('recentpostsdisplay').style.display='none';	
	
	document.getElementById('tags3').style.backgroundColor='#ccd8e8';
	document.getElementById('recentcomments3').style.backgroundColor='#fff';
	document.getElementById('recentposts3').style.backgroundColor='#fff';
}
function ajaxrecentposts() {	
	document.getElementById('recentpostsdisplay').style.display='block';	
	document.getElementById('recentcommentsdisplay').style.display='none';
	document.getElementById('tagsdisplay').style.display='none';
	
	document.getElementById('tags3').style.backgroundColor='#fff';
	document.getElementById('recentcomments3').style.backgroundColor='#fff';
	document.getElementById('recentposts3').style.backgroundColor='#ccd8e8';
}