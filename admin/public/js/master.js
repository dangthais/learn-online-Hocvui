//Check all list
function checkAll(source) {
    var checkboxes = document.querySelectorAll('#select');
    for(var i=0;i<checkboxes.length;i++) {
      checkboxes[i].checked = source.checked;
    }
  }
//ckeditor
CKEDITOR.replace( 'editor1', {
	filebrowserBrowseUrl: '../../ckfinder/ckfinder.html',
	filebrowserUploadUrl: '../../ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
} );
