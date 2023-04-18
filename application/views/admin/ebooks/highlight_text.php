<link rel="stylesheet" type="text/css" href="assets/texthighlighter/demos/assets/ColorPicker.css">
<script type="text/javascript" src="assets/texthighlighter/src/TextHighlighter.js"></script>
<script type="text/javascript" src="assets/texthighlighter/demos/assets/ColorPicker.js"></script>
<style>
    .color-picker>button {
        margin-left: 15px;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-10 offset-1" style="margin-bottom: 100px">
            <div class="col-12 bg-grey p-4" style="margin-top: 10vh; border-radius: 20px">
                <div class="col-12 bg-white" id="text-box" style="border: 1px solid #aaa; padding: 15px;">
                    <h3><?= $topic->row()->title ?></h3>
                    <hr>
                    <div id="content-box">
                        <?= ($question->row()->topic_highlighted) ? $question->row()->topic_highlighted : $topic->row()->content ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bg-grey" style="position: fixed!important; bottom: 0; width:100vw; height: 60px;">
    <div class="row">
        <div class="col-4" style="text-align: right; padding-top: 10px;">
            <button class="btn-pink px-5" id="save-btn">Save</button>
        </div>
        <div class="col-6">
            <div class="color-picker" style="display: block; text-align: left;"></div>
        </div>
    </div>


</div>


<script type="text/javascript">
    (function() {
        var sandbox = document.getElementById('text-box');
        var colors = new ColorPicker(document.querySelector('.color-picker'));
        var hltr = new TextHighlighter(sandbox);

        colors.onColorChange(function(color) {
            hltr.setColor(color);
        });

    })();

    $(document).ready(function() {
        $('#save-btn').on('click', function(){
            $.post('admin/ebooks/save_content_highlighted',
                {
                    'id': <?= $question->row()->id ?>,
                    'text': $('#content-box').html()
                },
                function(result){
                    var json = $.parseJSON(result);
                    alert(json.message);
                    if(json.success){
                        window.location.reload();
                    }
                }
            )
        })
    })
</script>