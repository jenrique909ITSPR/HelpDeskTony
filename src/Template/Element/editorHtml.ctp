<?= $this->Html->script('tinymce/jquery.tinymce.min.js'); ?>
<?= $this->Html->script('tinymce/tinymce.min.js'); ?>

<script>
  tinymce.init({
    selector: '.editorHtml',
    height: 300,
  menubar: false,
  //readonly: true,
  plugins: ['advlist autolink lists link  charmap  textcolor insertdatetime table contextmenu paste code'],
  toolbar: 'undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | table | link charmap code insertdatetime',
  content_css: [],
		branding: false,
		statusbar: false,
		language: 'es_MX',
		skin: "custom",
});
  </script>
