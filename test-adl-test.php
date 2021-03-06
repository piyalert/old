<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:39 PM
 */

session_start();
$MENU = 'test';

$SET_EQ = 1;
$CHOICES = array();
$TESTS = array();
$TEST = array('test_top'=>'','test_title'=>'');
include dirname(__file__).'/controller/adlTestController.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('_header.php');?>
</head>
<body class="container">

<div class="page-body">
    <!-- image header -->
    <?php include('_header_top.php');?>

    <!-- menu -->
    <?php include('_menu_top.php');?>

    <!-- detail body -->
    <div style="min-height: 350px;">

        <!-- header number choices -->
        <nav aria-label="...">
            <ul class="pagination pagination-lg justify-content-center">
                <?php foreach ($TESTS as $key=>$item): ?>
                    <li class="page-item <?php echo ($SET_EQ == ($key+1)?'active':''); ?>">
                        <a class="page-link" href="#">
                            <?php echo $item['eq'];?>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </nav>

        <!-- question -->
        <div class="pt-5 pl-5 pr-5">
            <h3 class="font-weight-bold"> <?php echo $TEST['test_top'];?> </h3>
            <h4> <?php echo $TEST['test_title'];?> </h4>
            <hr>
        </div>

        <!-- choices -->
        <div class="row text-center pl-5 pr-5" >

            <?php $i_col_md = (count($CHOICES)>2)?'col-md-4':'col-md-6'; ?>
            <?php foreach ($CHOICES as $key=>$item ): ?>
                <div class="<?php echo $i_col_md;?> p-4">
                    <img class="zoom img-thumbnail" src="<?php echo $item['src']; ?>" alt="Card image" style="height: 300px; width: 100%; cursor:pointer;" onclick="selectChoose(<?php echo ($key+1); ?>)">
                    <div class="form-check p-3 alert-secondary" id="choice<?php echo ($key+1); ?>">
                        <input class="form-check-input" type="radio" name="radioChoice" id="customRadio<?php echo ($key+1); ?>" value="<?php echo ($key+1); ?>">
                        <br>
                        <label class="form-check-label" for="customRadio<?php echo ($key+1); ?>">
                            <h5 class="font-weight-bold"><?php echo $item['text']; ?></h5>
                        </label>
                    </div>
                </div>
            <?php endforeach;?>

        </div>

        <div class="row pt-5">
            <div class="offset-3 col-md-6">
                <input id="sqId" type="text" value="<?php echo $SET_EQ; ?>" hidden>
                <button class="btn btn-success btn-lg btn-block" type="button" onclick="confirmChoose();">
                    <h2 class="font-weight-bold text-white">ส่งคำตอบ</h2>
                </button>
            </div>
        </div>



    </div>



    <!-- footer -->
    <?php include('_footer.php');?>

</div>

<!-- script -->
<?php include('_script.php');?>
<?php include('_modal_message.php');?>

<script type="text/javascript">
    function selectChoose(select) {
        $("#customRadio"+select).click();
    }
    $(".form-check-input").on("change",function () {
        var radioValue = $("input[name='radioChoice']:checked").val();
        $(".form-check").addClass("alert-secondary");
        $(".form-check").removeClass("alert-success");

        $("#choice"+radioValue).removeClass("alert-secondary");
        $("#choice"+radioValue).addClass("alert-success");

    });

    function confirmChoose() {
        var radioValue = $("input[name='radioChoice']:checked").val();
        if(radioValue==='' || radioValue===undefined){
            fnTextModalMessage("กรุณาเลือกคำตอบ",202)
        }else{
            var sq = $('#sqId').val();
            nextChoice(radioValue,sq);
        }
    }

    function nextChoice(choice,sq) {
        var this_url = '/elderly/test-adl-test.php';
        var form = $(document.createElement('form'));
        $(form).attr("action",this_url);
        $(form).attr("method","POST");
        $(form).attr('hidden',true);
        var input_choice = $('<input>')
            .attr("type","text")
            .attr("name","select")
            .attr("value",choice);
        $(form).append($(input_choice));
        var input_sq = $('<input>')
            .attr("type","text")
            .attr("name","sq")
            .attr("value",sq);
        $(form).append($(input_sq));

        form.appendTo(document.body );
        $(form).submit();
    }

</script>

</body>
</html>
