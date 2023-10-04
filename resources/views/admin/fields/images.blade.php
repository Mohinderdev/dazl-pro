
<style>
    .image{
        width: 200px;
        height: 200px;
    }
    .trash{
        position: absolute;
        top: 10px;
        font-size: 25px;
        color:darkred ;
        cursor :pointer ;
    }
</style>
@if($images)
<div class="container">
    @for($i = 0;$i <= sizeof($images);$i += 3)
        <div class="row">
            @for($x = 0 ;$x < 3 && $x + $i < sizeof($images);$x++)
                @if(!preg_match('/.pdf/',$images[$x + $i]->url))
                    <div class="col" style="max-width: 300px;">
                        <span class="trash fa fa-trash-alt"></span>
                        <img class="image" src="{{@$images[$x + $i]->url}}">
                    </div>
                @endif
            @endfor
       </div><br>
    @endfor
</div>
@endif

<script>
    $('.trash').click(function(){
        confirm("This will not do anything yet .");
    });
</script>
