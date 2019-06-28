function ajaxrecentcomments() {	
	document.getElementById('recentcommentsdisplay').style.display='block';
	document.getElementById('tagsdisplay').style.display='none';
	document.getElementById('recentpostsdisplay').style.display='none';
	
    document.getElementById('tags3').style.fontWeight='normal';
	document.getElementById('recentcomments3').style.fontWeight='bold';
	document.getElementById('recentposts3').style.fontWeight='normal';
}
function ajaxtags() {
	document.getElementById('recentcommentsdisplay').style.display='none';
	document.getElementById('tagsdisplay').style.display='block';
	document.getElementById('recentpostsdisplay').style.display='none';

	document.getElementById('tags3').style.fontWeight='bold';
	document.getElementById('recentcomments3').style.fontWeight='normal';
	document.getElementById('recentposts3').style.fontWeight='normal';
}
function ajaxrecentposts() {	
	document.getElementById('recentpostsdisplay').style.display='block';	
	document.getElementById('recentcommentsdisplay').style.display='none';
	document.getElementById('tagsdisplay').style.display='none';
	
	document.getElementById('tags3').style.fontWeight='normal';
	document.getElementById('recentcomments3').style.fontWeight='normal';
	document.getElementById('recentposts3').style.fontWeight='bold';
}