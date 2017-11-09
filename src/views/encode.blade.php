<!--如果在页面其他位置引入过jquery，此处引用可以删除-->
<script src="{{asset('vendor/markdown/js/jquery.min.js')}}"></script>

<link rel="stylesheet" href="{{asset('vendor/markdown/css/editormd.min.css')}}" />
<script src="{{asset('vendor/markdown/js/editormd.min.js')}}"></script>
<script type="text/javascript">
    $(function() {
        @foreach($editors as $editor)
        editormd("{{$editor}}", {
            width: "95%",
            height: 640,
            markdown : "",
            path : "{{asset('vendor/markdown/lib')}}/",
            toolbarIcons : function() {
                return ["undo", "redo", "|", "bold", "del", "italic", "quote", "ucwords", "uppercase", "lowercase", "|", "h1", "h2", "h3", "h4", "h5", "h6", "|", "list-ul", "list-ol", "hr", "|", "link", "reference-link", "image", "code", "preformatted-text", "code-block", "table", "datetime", "emoji", "html-entities", "pagebreak", "||", "goto-line", "watch", "clear", "preview", "fullscreen"]
            },
            imageUpload : true,
            imageFormats : ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
            imageUploadURL : "{{url('markdown/upload')}}",
        });
        @endforeach
    });

</script>