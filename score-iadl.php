<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 2/19/2020
 * Time: 11:13 PM
 */

$MENU = 'score';

$g11 = 0;
$g12 = 0;
$g13 = 0;
$g14 = 0;

$g21 = 0;
$g22 = 0;
$g23 = 0;
$g24 = 0;

$g31 = 0;
$g32 = 0;
$g33 = 0;
$g34 = 0;

include dirname(__file__).'/controller/graphIadl.php';

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
    <div class="pl-5 pr-5" style="min-height: 350px;">

        <div class="mt-5 mb-5" id="chartContainer" style="height: 500px; width: 100%;"></div>

    </div>


    <!-- footer -->
    <?php include('_footer.php');?>

</div>
<!-- data for graph -->
<div class="d-none">
    <input id="idD-g11" type="text" value="<?php echo $g11; ?>">
    <input id="idD-g12" type="text" value="<?php echo $g12; ?>">
    <input id="idD-g13" type="text" value="<?php echo $g13; ?>">
    <input id="idD-g14" type="text" value="<?php echo $g14; ?>">

    <input id="idD-g21" type="text" value="<?php echo $g21; ?>">
    <input id="idD-g22" type="text" value="<?php echo $g22; ?>">
    <input id="idD-g23" type="text" value="<?php echo $g23; ?>">
    <input id="idD-g24" type="text" value="<?php echo $g24; ?>">

    <input id="idD-g31" type="text" value="<?php echo $g31; ?>">
    <input id="idD-g32" type="text" value="<?php echo $g32; ?>">
    <input id="idD-g33" type="text" value="<?php echo $g33; ?>">
    <input id="idD-g34" type="text" value="<?php echo $g34; ?>">

</div>
<!-- script -->
<?php include('_script.php');?>

<script>

    window.onload = function () {

        let chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            title:{
                text: "instrumental activities of daily living: IADL",
                fontFamily: "arial black",
                fontSize: 20,
            },
            axisY:{
                valueFormatString:"#0",
            },
            toolTip: {
                shared: true,
                content: toolTipContent
            },
            data: [
                {
                    type: "stackedColumn",
                    showInLegend: true,
                    name: "60-69 ปี",
                    dataPoints: [
                        { y: 1, label: "ภาวะพี่งพาโดยสมบูรณ์(0-4)" },
                        { y: 9, label: "ภาวะพึ่งพารุนแรง(5-8)" },
                        { y: 15, label: "ภาวะพึ่งปานกลาง(9-11)" },
                        { y: 15, label: "ไม่เป็นการพึ่งพา(12 ขึ้นไป)" }
                    ]
                },
                {
                    type: "stackedColumn",
                    showInLegend: true,
                    name: "70-79 ปี",
                    dataPoints: [
                        { y: 1, label: "ภาวะพี่งพาโดยสมบูรณ์(0-4)" },
                        { y: 9, label: "ภาวะพึ่งพารุนแรง(5-8)" },
                        { y: 15, label: "ภาวะพึ่งปานกลาง(9-11)" },
                        { y: 15, label: "ไม่เป็นการพึ่งพา(12 ขึ้นไป)" }
                    ]
                },
                {
                    type: "stackedColumn",
                    showInLegend: true,
                    name: "80 ปีขึ้นไป",
                    dataPoints: [
                        { y: 1, label: "ภาวะพี่งพาโดยสมบูรณ์(0-4)" },
                        { y: 9, label: "ภาวะพึ่งพารุนแรง(5-8)" },
                        { y: 15, label: "ภาวะพึ่งปานกลาง(9-11)" },
                        { y: 15, label: "ไม่เป็นการพึ่งพา(12 ขึ้นไป)" }
                    ]
                }]
        });

        let g11 = $("#idD-g11").val();
        let g12 = $("#idD-g12").val();
        let g13 = $("#idD-g13").val();
        let g14 = $("#idD-g14").val();

        let g21 = $("#idD-g21").val();
        let g22 = $("#idD-g22").val();
        let g23 = $("#idD-g23").val();
        let g24 = $("#idD-g24").val();

        let g31 = $("#idD-g31").val();
        let g32 = $("#idD-g32").val();
        let g33 = $("#idD-g33").val();
        let g34 = $("#idD-g34").val();


        chart.options.data[0].dataPoints[0].y = parseInt(g11);
        chart.options.data[0].dataPoints[1].y = parseInt(g12);
        chart.options.data[0].dataPoints[2].y = parseInt(g13);
        chart.options.data[0].dataPoints[3].y = parseInt(g14);

        chart.options.data[1].dataPoints[0].y = parseInt(g21);
        chart.options.data[1].dataPoints[1].y = parseInt(g22);
        chart.options.data[1].dataPoints[2].y = parseInt(g23);
        chart.options.data[1].dataPoints[3].y = parseInt(g24);

        chart.options.data[2].dataPoints[0].y = parseInt(g31);
        chart.options.data[2].dataPoints[1].y = parseInt(g32);
        chart.options.data[2].dataPoints[2].y = parseInt(g33);
        chart.options.data[2].dataPoints[3].y = parseInt(g34);

        chart.render();

        function toolTipContent(e) {
            let str = "";
            let total = 0;
            let str2, str3;
            for (let i = 0; i < e.entries.length; i++){
                let  str1 = "<span style= \"color:"+e.entries[i].dataSeries.color + "\"> "+
                    e.entries[i].dataSeries.name+
                    "</span>: <strong>"+e.entries[i].dataPoint.y+"</strong> คน<br/>";
                total = e.entries[i].dataPoint.y + total;
                str = str.concat(str1);
            }
            str2 = "<span style = \"color:DodgerBlue;\"><strong>"+(e.entries[0].dataPoint.label)+"</strong></span><br/>";
            total = Math.round(total * 100) / 100;
            str3 = "<span style = \"color:Tomato\">Total:</span><strong> "+total+"</strong> คน<br/>";
            return (str2.concat(str)).concat(str3);
        }

    }

</script>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

</body>
</html>

