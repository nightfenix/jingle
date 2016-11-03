<?php
Yii::app()->clientScript->registerCoreScript('jquery');

?>



<div id = dddd>

    <?php

    foreach ($variable as $dc){

    echo CHtml::submitButton( $dc['brand'], array('class' => 'nav','name'=>$dc['id']));
    }
    ?>

</div>


<div = ddd>
    <?php
    if(isset($var)) {
    foreach ($var as $dv) {

    echo CHtml::submitButton($dv['name'],array('class' => 'na','name'=>$dv['id']));
    }
    }

    ?>

</div>

<div id = m>

    <table border="1">

        <tr>
            <th>dddddd</th>

        </tr>

        <tr><td><img src="/images/1.jpg"></td></tr>
        <tr><td>   <?php
                if(isset($va)) {
                    foreach ($va as $dv) {

                        echo $dv['id'];
                    }
                }

                ?></td></tr>
        <tr><td>36</td></tr>
        <tr><td>36,5</td></tr>
        <tr><td>37</td></tr>
        <tr><td>38</td></tr>
        <tr><td>38,5</td></tr>
        <tr><td>39</td></tr>
        <tr><td>40</td></tr>
        <tr><td>40,5</td></tr>
        <tr><td>41</td></tr>
        <tr><td>42</td></tr>
        <tr><td>43</td></tr>
        <tr><td>43,5</td></tr>
        <tr><td>44</td></tr>
        <tr><td>44,5</td></tr>
        <tr><td>45</td></tr>
        <tr><td>46</td></tr>
        <tr><td>46,5</td></tr>
        <tr><td>47</td></tr>
        <tr><td>48</td></tr>

    </table>
</div>









<script>
    $(function(){
        $(".nav").on("click", function(){
            var id = $(this).attr('name');
       console.log(id);

            $.ajax({
                type: 'POST',
                url:"<?php echo Yii::app()->createAbsoluteUrl('/start/index') ?>" ,
                data: {"id" :id},
                success: function(html){
                    $("#dddd").html(html); ;
                }

            })

        });
    });
    $(function(){
        $(".na").on("click", function(){
            var d = $(this).attr('name');
       console.log(d);

            $.ajax({
                type: 'POST',
                url:"<?php echo Yii::app()->createAbsoluteUrl('/start/index') ?>" ,
                data: {"i" :d},
                success: function(html){
                    $("#ddd").html(html); ;
                }

            })

        });
    });


</script>