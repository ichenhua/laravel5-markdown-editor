<?php
//处理markdown编辑器文件上传地址
Route::post('markdown/upload', function(){
    $info = MarkdownEditor::upload();
    return json_encode($info);
});