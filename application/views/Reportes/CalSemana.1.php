<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/highcharts.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/exporting.js"></script>

    <style type="text/css">
        #container {
	        min-width: 800px;
	        max-width: 800px;
	        height: auto;
	        margin: 0 auto
        }
	</style>
</head>
<body>
    <div id="container"></div>
	
    <script type="text/javascript">
        var f = new Date();
        //document.write(f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear());
        
        //var m = (f.getMonth() +1);
        
        switch(f.getMonth()+1){
            case 1: ms = "ENERO " break;
            case 2: ms = "FEBRERO " break;
            case 3: ms = "MARZO " break;
            case 4: ms = "ABRIL " break;
            case 5: ms = 'MAYO ' break;
            /*case 6: ms = 'JUNIO ' break;
            case 7: ms = 'JULIO ' break;
            case 8: ms = 'AGOSTO ' break;
            case 9: ms = 'SEPTIEMBRE ' break;
            case 10: ms = 'OCTUBRE ' break;
            case 11: ms = 'NOVIEMBRE ' break;
            case 12: ms = 'DICIEMBRE ' break;*/
        }
    
        Highcharts.chart('container',{
            title: {text: 'Produccion ' + ms + f.getFullYear()},
            subtitle: {text: 'INNOVA: Incentivo de Produccion'},
            yAxis: {title:{text: 'Cantidad de Produccion'}},
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions:{series: {pointStart: 2017}},
            series: [{
                        name: 'Juan',data: [['2', 439], ['3', 523], ['4', 577], ['5', 658], ['6', 531], ['7', 191]]
                    },{
                        name: 'Pedro',data:[['2', 216], ['3', 264], ['4', 297], ['5', 291], ['6', 390], ['7', 382]]
                    },{
                        name: 'Jose',data:[['2', 144], ['3', 172], ['4', 165], ['5', 171], ['6', 205], ['7', 277]]
                    },{
                        name: 'Chupito',data:[['2', 18], ['3', 169], ['4', 112], ['5', 222], ['6', 340], ['7', 347]]
                    },{
                        name: 'Maria',data:[['2', 128], ['3', 589], ['4', 505], ['5', 118], ['6', 598], ['7', 116]]
                    }]
            });

        /*function MESES(MES){
            switch(MES){
                case 1: return 'ENERO ' break;
                case 2: return 'FEBRERO ' break;
                case 3: return 'MARZO ' break;
                case 4: return 'ABRIL ' break;
                case 5: return 'MAYO ' break;
                case 6: return 'JUNIO ' break;
                case 7: return 'JULIO ' break;
                case 8: return 'AGOSTO ' break;
                case 9: return 'SEPTIEMBRE ' break;
                case 10: return 'OCTUBRE ' break;
                case 11: return 'NOVIEMBRE ' break;
                case 12: return 'DICIEMBRE ' break;
            }
        }*/
	</script>
</body>
</html>