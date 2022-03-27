<!DOCTYPE html>
<html lang="ja">
<head>
</head>
<body>
    <?php foreach ($results as $data):?>
    <table>
        <tr>
            <td>
                <?php echo $data["name"];?>
            </td>
            <td>
                <a id="c<?php echo $data["refecture_id"]; ?>"><?php echo $data["prefecture_name"];?></a>
            </td>
            <td>
                <?php echo $data["refecture_id"];?>
                <div id="city<?php echo $data["refecture_id"]; ?>" style="display:none;">
                <?php foreach ($city as $datas):?>
                    <?php if(strlen($datas["citycode"]) == 5 && $data["refecture_id"] == substr($datas["citycode"],0,1)): ?>
                    <table>
                        <tr>
                            <td>
                                <?php echo $datas["name"];?>
                            </td>
                            <td>
                                <?php echo $datas["citycode"];?>
                            </td>
                        </tr>
                    </table>
                    <?php elseif(strlen($datas["citycode"]) == 6 && $data["refecture_id"] == substr($datas["citycode"],0,2)): ?>
                        <table>
                        <tr>
                            <td>
                                <?php echo $datas["name"];?>
                            </td>
                            <td>
                                <?php echo $datas["citycode"];?>
                            </td>
                        </tr>
                    </table>
                    <?php endif ?>
                <?php endforeach;?>
                    </div>
            </td>
        </tr>
    </table>
    <?php endforeach;?>
    <script>
        <?php for ($i = 1; $i <= 47; $i++): ?>
        document.getElementById("c<?php echo $i ?>").onclick = function() {
            const p1 = document.getElementById("city<?php echo $i ?>");
            if(p1.style.display=="block"){
		    // noneで非表示
		    p1.style.display ="none";
	    }else{
		    // blockで表示
		    p1.style.display ="block";
	    }
    };
    <?php endfor ?>


    </script>
</body>
</html>
