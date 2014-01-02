<?php


/**
 * HighChartsWidget 图表展示.
 */
class HighChartsWidget extends CWidget
{
	public $id;
	public $url;
	public $language = '';

	public $items = array();


	public function init()
	{
		// Prevents the extension from registering scripts and publishing assets when ran from the command line.
		if (Yii::app() instanceof CConsoleApplication)
			return;

		/** @var CClientScript $cs */
		//$cs = Yii::app()->getClientScript();
		//$cs->registerScriptFile($this->assetsUrl.'/js/highstock.js', CClientScript::POS_HEAD);
		//$cs->registerScriptFile($this->assetsUrl.'/js/exporting.js', CClientScript::POS_HEAD);
		
		echo '<div id="container" ></div>';
	}

	/**
	 * Runs the widget.
	 */
	public function run()
	{
$uri=Yii::app()->createUrl($this->url);
$script= <<<EOF
$(function() {

	var groups = [];

	$.getJSON('$uri', function(data) {
		
		$.each(data, function(name, field){
			
			groups.push({
				name: name,
				data: field['data'],
				

			});
			
		});
		
		// Create the chart
		$('#container').highcharts('StockChart', {
			
			chart: {
		        height: 800
		    },
			rangeSelector : {
				selected : 1
			},
			legend: {
				enabled: true,
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'top',
                borderWidth: 0,
                itemStyle: {
				   cursor: 'pointer',
				   color: '#274b6d',
				   fontSize: '13px'
				}
            },
			xAxis: {
	        	type: 'datetime',
	        	dateTimeLabelFormats: {
					second: '%Y-%m-%d %H:%M:%S',
					minute: '%Y-%m-%d %H:%M',
					hour: '%Y-%m-%d %H:%M',
					day: '%Y-%m-%d',
					week: '%Y-%m-%d',
					month: '%Y-%m',
					year: '%Y'
				}
	    	},
	    	yAxis: {
		    	
		    },
			rangeSelector: {
				buttons: [{
					type: 'month',
					count: 1,
					text: '1月'
				}, {
					type: 'month',
					count: 3,
					text: '3月'
				}, {
					type: 'month',
					count: 6,
					text: '6月'
				}, {
					type: 'year',
					count: 1,
					text: '1年'
				}, {
					type: 'all',
					text: '所1有'
				}]
			},

			series : groups
		});
	});
	
	
});
EOF;
		$cs = Yii::app()->getClientScript();
		$cs->registerScript($this->id, $script);
	}

	public function getAssetsUrl()
	{
		$assetsPath = Yii::getPathOfAlias('ext.HighCharts.assets');
		$assetsUrl = Yii::app()->assetManager->publish($assetsPath, false, -1, YII_DEBUG);
		return $assetsUrl;
	}
}