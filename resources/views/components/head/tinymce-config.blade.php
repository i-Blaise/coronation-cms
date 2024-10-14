<div>
    <script src="https://cdn.tiny.cloud/1/4i8rd2x61wxq9jwjm1g9xcc0psxqg5x24fujxurkxmrid9hk/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
      tinymce.init({
        selector: 'textarea#shortText',
        menubar: 'format',
        plugins: 'code table lists',
        toolbar: 'undo redo | bold italic | bullist numlist'
      });

      tinymce.init({
        selector: 'textarea#blogBody',
        height: 800,
        plugins: [
        'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
        'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
        'media', 'table', 'emoticons', 'help'
        ],
      });
    </script>
</div>
