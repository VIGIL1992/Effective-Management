jQuery(($) => {
    const numOptionCurrency = {
        digitGroupSeparator: ',',
        decimalCharacter: '.',
        decimalCharacterAlternative: '.',
        currencySymbol: '',
        currencySymbolPlacement: AutoNumeric.options.currencySymbolPlacement.prefix,
        decimalPlaces: 0,
        minimumValue: 0
    };
    const numOptionPercent1 = {
        digitGroupSeparator: ',',
        decimalCharacter: '.',
        decimalCharacterAlternative: '.',
        currencySymbol: '%',
        currencySymbolPlacement: AutoNumeric.options.currencySymbolPlacement.suffix,
        decimalPlaces: 2,
        minimumValue: 0,
        maximumValue: sl_range_high[0]
    };
    const numOptionPercent2 = {
        digitGroupSeparator: ',',
        decimalCharacter: '.',
        decimalCharacterAlternative: '.',
        currencySymbol: '%',
        currencySymbolPlacement: AutoNumeric.options.currencySymbolPlacement.suffix,
        decimalPlaces: 2,
        minimumValue: 0,
        maximumValue: sl_range_high[1]
    };

    const nftd = Intl.NumberFormat("en-US", {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2
    });

    $(".sl_range_low:eq(0)").text(nftd.format(sl_range_low[0])+"%");
    $(".sl_range_low:eq(1)").text(nftd.format(sl_range_low[1])+"%");
    $(".sl_range_high:eq(0)").text(nftd.format(sl_range_high[0])+"%");
    $(".sl_range_high:eq(1)").text(nftd.format(sl_range_high[1])+"%");

    $("#in_an_return").attr("min", sl_range_low[0]);
    $("#in_an_return").attr("max", sl_range_high[0]);
    $("#in_an_appr").attr("min", sl_range_low[1]);
    $("#in_an_appr").attr("max", sl_range_high[1]);

    const elm1 = new AutoNumeric('#in_invest', numOptionCurrency);
    const elm2 = new AutoNumeric('#in_an_return_vl', numOptionPercent1);
    const elm3 = new AutoNumeric('#in_an_appr_vl', numOptionPercent2);

    $("#in_invest").on("input", function () {
        calc();
    });

    $('#in_an_return_vl').on('change', function () {
        let vl = removeSign($(this).val());

        if(vl < sl_range_low[0]){
            vl = sl_range_low[0];
        } else if(vl > sl_range_high[0]){
            vl = sl_range_high[0];
        }
        $('#in_an_return').val(vl).trigger("input");
    });

    $('#in_an_appr_vl').on('change', function () {
        let vl = removeSign($(this).val());

        if(vl < sl_range_low[1]){
            vl = sl_range_low[1];
        } else if(vl > sl_range_high[1]){
            vl = sl_range_high[1];
        }
        $('#in_an_appr').val(vl).trigger("input");
    });

    $('.cl-in').on('input', function (e) {
        var min = e.target.min,
            max = e.target.max,
            vl = e.target.value,
            val = e.target.value;

        if (vl == 0) {
            min = min + 1,
                max = max + 1,
                val = val + 1;
        }

        let in_id = $(this).attr("id");


        let bg_size = (val - min) * 100 / (max - min);

        $(e.target).css({
            'backgroundSize': bg_size + '% 100%'
        });

        if (in_id == "in_an_return") {
            elm2.set(vl);
        } else {
            elm3.set(vl);
        }

        calc();
    }).trigger('input');

    function calc() {
        in_invest = removeSign($("#in_invest").val());
        in_an_return = removeSign($("#in_an_return").val()) / 100;
        in_an_appr = removeSign($("#in_an_appr").val()) / 100;


        rs_rental_return = (in_invest * in_an_return) * 5;
        rs_capital_appr = (in_invest * in_an_appr) * 5;

        rs_avg_return = in_an_return + in_an_appr;
        rs_total_roi = rs_rental_return + rs_capital_appr;
        rs_vl_invest = rs_total_roi + in_invest;
        rs_growth = (100 / in_invest) * (rs_vl_invest - in_invest);

        let arr_one = [], arr_two = [], arr_three = [];
        arr_one.push(0 + "year");
        arr_two.push(0);
        arr_three.push(0);

        for (let i = 0; i < 5; i++) {
            if (i == 0) {
                arr_one.push((i + 1) + "year");
            } else {
                arr_one.push((i + 1) + "years");
            }

            let year = i + 1;

            let x = (in_invest * in_an_return) * year;
            let y = (in_invest * in_an_appr) * year;

            arr_two.push(x);
            arr_three.push(y);
        }

        $("#rs_rental_return").text("AED " + nftd.format(rs_rental_return));
        $("#rs_capital_appr").text("AED " + nftd.format(rs_capital_appr));
        $("#rs_avg_return").text(nftd.format(rs_avg_return * 100) + "%");
        $("#rs_total_roi").text("AED " + nftd.format(rs_total_roi));
        $("#rs_vl_invest").text("AED " + nftd.format(rs_vl_invest));
        $("#rs_growth").text(nftd.format(rs_growth) + "%");

        Highcharts.setOptions({
            lang: {
                thousandsSep: ','
            }
        });
        Highcharts.chart('data_chart', {
            chart: {
                type: 'areaspline',
                backgroundColor: 'transparent',
                height: '200',
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
            },
            yAxis: {
                title: {
                    text: ''
                },
                labels: {
                    enabled: false
                }
            },
            xAxis: {
                title: {
                    text: ''
                },
                categories: [0, 1, 2, 3, 4, 5],
                labels: {
                    step: 1,
                    formatter: function () {
                        return (this.value < 2) ? this.value + "<br> year" : this.value + "<br> years";
                    }
                }
            },
            legend: {
                enabled: false
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">Year: <b>{point.key}</b></span><table>',
                pointFormat: '<tr><td style="padding:0; font-size: 12px">{series.name}: </td>' +
                    '<td style="padding:0; font-size: 12px"><b>AED {point.y:,.2f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    marker: {
                        enabled: false
                    },
                    pointStart: 0
                }
            },
            credits: {
                enabled: false
            },
            series: [{
                lineColor: graph_color_1,
                color: graph_color_1 + "60",
                name: 'RENTAL RETURNS',
                data: arr_two
            }, {
                lineColor: graph_color_2,
                color: graph_color_2 + "60",
                name: 'CAPITAL APPRECIATION',
                data: arr_three
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }

        });

    }

    function removeSign(vl) {
        return Number(vl.replace(/\$|\%|,/g, ''));
    }
});