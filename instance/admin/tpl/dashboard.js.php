<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<script type="text/javascript">
/*$(document).ready(function() {
    // FINANCE OVERVIEW CHART CODE START HERE
    var root = am5.Root.new("finance_overview");

    // Set themes
    // https://www.amcharts.com/docs/v5/concepts/themes/
    root.setThemes([
      am5themes_Animated.new(root)
    ]);


    // Create chart
    // https://www.amcharts.com/docs/v5/charts/xy-chart/
    var chart = root.container.children.push(am5xy.XYChart.new(root, {
      panX: true,
      panY: true,
      wheelX: "none",
      wheelY: "none"
    }));
    root._logo.dispose();
    // We don't want zoom-out button to appear while animating, so we hide it
    chart.zoomOutButton.set("forceHidden", true);


    // Create axes
    // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
    var xRenderer = am5xy.AxisRendererX.new(root, {
      minGridDistance: 30
    });
    xRenderer.labels.template.setAll({
      rotation: -90,
      centerY: am5.p50,
      centerX: 0,
      paddingRight: 15
    });
    xRenderer.grid.template.set("visible", false);

    var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
      maxDeviation: 0.3,
      categoryField: "country",
      renderer: xRenderer
    }));

    var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
      maxDeviation: 0.3,
      min: 0,
      renderer: am5xy.AxisRendererY.new(root, {})
    }));


    // Add series
    // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
      name: "Series 1",
      xAxis: xAxis,
      yAxis: yAxis,
      valueYField: "value",
      categoryXField: "country"
    }));

    // Rounded corners for columns
    series.columns.template.setAll({
      cornerRadiusTL: 5,
      cornerRadiusTR: 5,
      strokeOpacity: 0
    });

    // Make each column to be of a different color
    series.columns.template.adapters.add("fill", function (fill, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target ));
    });

    series.columns.template.adapters.add("stroke", function (stroke, target) {
      return chart.get("colors").getIndex(series.columns.indexOf(target ));
    });

    // Add Label bullet
    series.bullets.push(function () {
      return am5.Bullet.new(root, {
        locationY: 1,
        sprite: am5.Label.new(root, {
          text: "{valueYWorking.formatNumber('#.')}",
          fill: root.interfaceColors.get("alternativeText"),
          centerY: 0,
          centerX: am5.p50,
          populateText: true
        })
      });
    });

    //series.columns.template.set("tooltipText", "{categoryX}: {valueY.formatNumber('#.')}");
    series.columns.template.set("tooltipText", "Total Claims: {valueY.formatNumber('#.')}");

    var data = <?php echo json_encode($finance_overview_arr); ?>;

    xAxis.data.setAll(data);
    series.data.setAll(data);

    // update data with random values each 1.5 sec
    setInterval(function () {
      //updateData();
    }, 1500);

    function updateData() {
      am5.array.each(series.dataItems, function (dataItem) {
        var value = dataItem.get("valueY") + Math.round(Math.random() * 300 - 150);
        if (value < 0) {
          value = 10;
        }
        // both valueY and workingValueY should be changed, we only animate workingValueY
        dataItem.set("valueY", value);
        dataItem.animate({
          key: "valueYWorking",
          to: value,
          duration: 600,
          easing: am5.ease.out(am5.ease.cubic)
        });
      })

      sortCategoryAxis();
    }


    // Get series item by category
    function getSeriesItem(category) {
      for (var i = 0; i < series.dataItems.length; i++) {
        var dataItem = series.dataItems[i];
        if (dataItem.get("categoryX") == category) {
          return dataItem;
        }
      }
    }


    // Axis sorting
    function sortCategoryAxis() {

      // Sort by value
      series.dataItems.sort(function (x, y) {
        return y.get("valueY") - x.get("valueY"); // descending
        //return y.get("valueY") - x.get("valueY"); // ascending
      })

      // Go through each axis item
      am5.array.each(xAxis.dataItems, function (dataItem) {
        // get corresponding series item
        var seriesDataItem = getSeriesItem(dataItem.get("category"));

        if (seriesDataItem) {
          // get index of series data item
          var index = series.dataItems.indexOf(seriesDataItem);
          // calculate delta position
          var deltaPosition = (index - dataItem.get("index", 0)) / series.dataItems.length;
          // set index to be the same as series data item index
          dataItem.set("index", index);
          // set deltaPosition instanlty
          dataItem.set("deltaPosition", -deltaPosition);
          // animate delta position to 0
          dataItem.animate({
            key: "deltaPosition",
            to: 0,
            duration: 1000,
            easing: am5.ease.out(am5.ease.cubic)
          })
        }
      });

      // Sort axis items by index.
      // This changes the order instantly, but as deltaPosition is set,
      // they keep in the same places and then animate to true positions.
      xAxis.dataItems.sort(function (x, y) {
        return x.get("index") - y.get("index");
      });
    }


    // Make stuff animate on load
    // https://www.amcharts.com/docs/v5/concepts/animations/
    series.appear(1000);
    chart.appear(1000, 100);
    

    // EXPENSE CHART CODE START HERE
    var root_expense = am5.Root.new("expense_overview");
    root_expense._logo.dispose();
    root_expense.setThemes([
      am5themes_Animated.new(root_expense)
    ]);
    var chart_expense = root_expense.container.children.push(am5percent.PieChart.new(root_expense, {
      layout: root_expense.verticalLayout
    }));
    var series_expense = chart_expense.series.push(am5percent.PieSeries.new(root_expense, {
      valueField: "value",
      categoryField: "category"
    }));
    var series_expense_data = <?php echo json_encode($expense_overview_arr); ?>;
    series_expense.data.setAll(series_expense_data);
    series_expense.appear(1000, 100);
    
    
    // TEMPERATURE CHART CODE START HERE
    var root_temperature = am5.Root.new("temp_overview");
    root_temperature._logo.dispose();
    root_temperature.setThemes([
      am5themes_Animated.new(root_temperature)
    ]);
    var chart_temperature = root_temperature.container.children.push(am5percent.SlicedChart.new(root_temperature, {
      layout: root_temperature.verticalLayout
    }));
    var series_temperature = chart_temperature.series.push(am5percent.FunnelSeries.new(root_temperature, {
      alignLabels: false,
      orientation: "horizontal",
      valueField: "value",
      categoryField: "category"
    }));
    var series_temperature_data = <?php echo json_encode($series_temperature_arr) ?>;
    series_temperature.data.setAll(series_temperature_data);
    series_temperature.appear();
    var legend = chart_temperature.children.push(am5.Legend.new(root_temperature, {
      centerX: am5.p50,
      x: am5.p50,
      marginTop: 15,
      marginBottom: 15
    }));
    legend.data.setAll(series_temperature.dataItems);
    chart_temperature.appear(1000, 100);  
	
});*/
</script>