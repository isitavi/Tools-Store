function previewimage(event){
	/*When someone using function(event){} then he will receiving 
	the event object with a parameter event referencing to it.*/
	var view = document.getElementById('preview');
	view.src = URL.createObjectURL(event.target.files[0]);
	/*The evt.target.files[0] and document.getElementById('file').files[0] 
	are the very same objects in the handleFileSelect handler. */ 
}